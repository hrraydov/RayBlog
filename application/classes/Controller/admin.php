<?php

defined('SYSPATH') or die('No direct script access.');

class Controller_Admin extends Controller_Template {

    public $template = 'template';

    public function before()
    {
        parent::before();
        $this->template->pages = ORM::factory('Page')->find_all();
        $session = Session::instance();
        if (!$session->get('is_logged') === TRUE)
        {
            $this->redirect('/');
        }
    }

    public function action_index()
    {
        $this->template->title = 'Index';
        $post = ORM::factory('Post')
                ->find_all();
        $page = ORM::factory('Page')
                ->find_all();
        $view = View::factory('admin/index')
                ->set('posts', $post)
                ->set('pages', $page);
        $this->template->content = $view;
    }

    public function action_createPost()
    {
        $this->template->title = 'Create Post';
        if ($this->request->post('submit'))
        {
            $post = new Model_Post();
            $post->post_title = $this->request->post('title');
            $post->post_desc = $this->request->post('desc');
            $post->post_comments_on = $this->request->post('comments_on');
            $post->post_date_created = time();
            try
            {
                $post->save();
            } catch (ORM_Validation_Exception $e)
            {
                $errors = $e->errors('models');
            }
        }
        $view = View::factory('admin/createPost')
                ->bind('errors', $errors);
        $this->template->content = $view;
    }

    public function action_deletePost()
    {
        $this->template->title = 'Delete';
        $post = ORM::factory('Post', $this->request->param('id'));
        $post->delete();
        $this->redirect('home/index');
    }

    public function action_updatePost()
    {
        $this->template->title = 'Update';
        $post = ORM::factory('Post', $this->request->param('id'));
        if ($this->request->post())
        {
            $post->post_title = $this->request->post('title');
            $post->post_desc = $this->request->post('desc');
            $post->post_comments_on = $this->request->post('comments_on');
            try
            {
                $post->save();
            } catch (ORM_Validation_Exception $e)
            {
                $errors = $e->errors('models');
            }
        }
        $view = View::factory('admin/updatePost');
        $view->bind('errors', $errors);
        $view->set('post', $post);
        $this->template->content = $view;
    }

    public function action_createPage()
    {
        $this->template->title = 'Create';
        $page = new Model_Page();
        if ($this->request->post())
        {
            $page->page_title = $this->request->post('title');
            $page->page_desc = $this->request->post('desc');
            try
            {
                $page->save();
            } catch (ORM_Validation_Exception $e)
            {
                $errors = $e->errors('models');
            }
        }
        $view = View::factory('admin/createPage')
                ->bind('errors', $errors);
        $this->template->content = $view;
    }

    public function action_deletePage()
    {
        $this->template->title = 'Delete';
        $page = ORM::factory('Page', $this->request->param('id'));
        $page->delete();
        $this->redirect('home/index');
    }

    public function action_updatePage()
    {
        $this->template->title = 'Update';
        $page = ORM::factory('Page', $this->request->param('id'));
        if ($this->request->post())
        {
            $page->page_title = $this->request->post('title');
            $page->page_desc = $this->request->post('desc');
            try
            {
                $page->save();
            } catch (ORM_Validation_Exception $e)
            {
                $errors = $e->errors('models');
            }
        }
        $view = View::factory('admin/updatePage')
                ->bind('errors', $errors)
                ->set('page', $page);
        $this->template->content = $view;
    }

    public function action_deleteComment()
    {
        $comment = ORM::factory('Comment', $this->request->param('id'));
        $comment->delete();
        $this->redirect('home/index');
    }

    public function action_changePassword()
    {
        if ($this->request->post())
        {
            $config = ORM::factory('Config')->find();
            $config->password = $this->request->post('password');
            $config->save();
            $this->redirect('admin/index');
        }
    }

}

