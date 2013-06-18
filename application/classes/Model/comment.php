<?php

defined('SYSPATH') or die('No direct script access.');

class Model_Comment extends ORM {

    protected $_table_name = 'comments';
    protected $_primary_key = 'comment_id';

    public function rules()
    {
        return array(
            'comment_author' => array(
                array('not_empty'),
                array('max_length', array(':value', 100)),
                array('min_length', array(':value', 4)),
            ),
            'comment_email' => array(
                array('not_empty'),
                array('max_length', array(':value', 100)),
                array('min_length', array(':value', 4)),
                array('email'),
            ),
            'comment_desc' => array(
                array('not_empty'),
                array('max_length', array(':value', 2000)),
            ),
        );
    }

    public function filters()
    {
        return array(
            'comment_author' => array(
                array(array($this, 'filter')),
            ),
            'comment_desc' => array(
                array(array($this, 'filter')),
            ),
        );
    }

    public function filter($str)
    {
        return HTML::chars(HTML::entities($str));
    }

}

