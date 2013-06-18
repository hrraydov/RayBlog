<?php

defined('SYSPATH') or die('No direct script access.');

class Controller_Home extends Controller_Template {

    public $template = 'template';

    public function before()
    {
        parent::before();
        $this->template->pages = ORM::factory('Page')->find_all();
    }

    public function action_index()
    {
        $this->template->title = 'Index';
        $posts = ORM::factory('Post')->order_by('post_date_created', 'DESC')->find_all();
        $view = View::factory('home/index')->set('posts', $posts);
        $this->template->content = $view;
    }

    public function action_showPage()
    {
        $page = ORM::factory('Page', $this->request->param('id'));
        $this->template->title = 'Page';
        $view = View::factory('home/showPage')->set('page_details', $page);
        $this->template->content = $view;
    }

    public function action_showPost()
    {
        $post = ORM::factory('Post', $this->request->param('id'));
        $comments = ORM::factory('Comment')->where('post_id', '=', $post->post_id)->find_all();
        $this->template->title = 'Post';
        if ($this->request->post())
        {
            $comment = new Model_Comment();
            $comment->post_id = $post->post_id;
            $comment->comment_author = $this->request->post('author');
            $comment->comment_email = $this->request->post('email');
            $comment->comment_desc = $this->request->post('desc');
            try
            {
                $comment->save();
            } catch (ORM_Validation_Exception $e)
            {
                $errors = $e->errors('models');
            }
        }
        $view = View::factory('home/showPost')
                ->set('post', $post)
                ->set('comments', $comments)
                ->bind('errors', $errors);
        $this->template->content = $view;
    }

    public function action_login()
    {
        $this->template->title = 'Login';
        $view = View::factory('home/login');
        if ($this->request->post())
        {
            $user = ORM::factory('Config')
                    ->where('username', '=', $this->request->post('username'))
                    ->and_where('password', '=', md5($this->request->post('password')))
                    ->find_all();
            if ($user->count()>0)
            {
                $session = Session::instance();
                $session->set('is_logged', TRUE);
                $this->redirect('/');
            }
        }
        $this->template->content = $view;
    }

}
