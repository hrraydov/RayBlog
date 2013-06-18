<?php

defined('SYSPATH') or die('No direct script access.');

class Model_Post extends ORM {

    protected $_table_name = 'posts';
    protected $_primary_key = 'post_id';

    public function rules()
    {

        return array(
            'post_title' => array(
                array('not_empty'),
                array('max_length', array(':value', 200)),
            ),
            'post_desc' => array(
                array('not_empty'),
                array('max_length', array(':value', 20000))
            ),
        );
    }

}

