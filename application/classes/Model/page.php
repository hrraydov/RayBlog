<?php

defined('SYSPATH') or die('No direct script access.');

class Model_Page extends ORM {

    protected $_table_name = 'pages';
    protected $_primary_key = 'page_id';

    public function rules()
    {
        return array(
            'page_title' => array(
                array('not_empty'),
                array('max_length', array(':value', 200))
            ),
            'page_desc' => array(
                array('not_empty'),
                array('max_length', array(':value', 20000))
            ),
        );
    }

}

