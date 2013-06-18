<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-06-16 08:24:11 --- CRITICAL: Kohana_Exception [ 0 ]: The post_created_date property does not exist in the Model_Post class ~ MODPATH\orm\classes\Kohana\ORM.php [ 684 ] in C:\wamp\www\blogcms\modules\orm\classes\Kohana\ORM.php:600
2013-06-16 08:24:11 --- DEBUG: #0 C:\wamp\www\blogcms\modules\orm\classes\Kohana\ORM.php(600): Kohana_ORM->get('post_created_da...')
#1 C:\wamp\www\blogcms\application\views\home\showPost.php(12): Kohana_ORM->__get('post_created_da...')
#2 C:\wamp\www\blogcms\system\classes\Kohana\View.php(61): include('C:\wamp\www\blo...')
#3 C:\wamp\www\blogcms\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\blo...', Array)
#4 C:\wamp\www\blogcms\system\classes\Kohana\View.php(228): Kohana_View->render()
#5 C:\wamp\www\blogcms\application\views\template.php(46): Kohana_View->__toString()
#6 C:\wamp\www\blogcms\system\classes\Kohana\View.php(61): include('C:\wamp\www\blo...')
#7 C:\wamp\www\blogcms\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\blo...', Array)
#8 C:\wamp\www\blogcms\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#9 C:\wamp\www\blogcms\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#10 [internal function]: Kohana_Controller->execute()
#11 C:\wamp\www\blogcms\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#12 C:\wamp\www\blogcms\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 C:\wamp\www\blogcms\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#14 C:\wamp\www\blogcms\index.php(118): Kohana_Request->execute()
#15 {main} in C:\wamp\www\blogcms\modules\orm\classes\Kohana\ORM.php:600
2013-06-16 08:45:29 --- CRITICAL: ErrorException [ 2 ]: call_user_func_array() expects parameter 1 to be a valid callback, class 'Model_Comment' does not have a method 'entities' ~ MODPATH\orm\classes\Kohana\ORM.php [ 1207 ] in :
2013-06-16 08:45:29 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'call_user_func_...', 'C:\wamp\www\blo...', 1207, Array)
#1 C:\wamp\www\blogcms\modules\orm\classes\Kohana\ORM.php(1207): call_user_func_array(Array, Array)
#2 C:\wamp\www\blogcms\modules\orm\classes\Kohana\ORM.php(729): Kohana_ORM->run_filter('comment_author', 'asd')
#3 C:\wamp\www\blogcms\modules\orm\classes\Kohana\ORM.php(699): Kohana_ORM->set('comment_author', 'asd')
#4 C:\wamp\www\blogcms\application\classes\Controller\home.php(40): Kohana_ORM->__set('comment_author', 'asd')
#5 C:\wamp\www\blogcms\system\classes\Kohana\Controller.php(84): Controller_Home->action_showPost()
#6 [internal function]: Kohana_Controller->execute()
#7 C:\wamp\www\blogcms\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#8 C:\wamp\www\blogcms\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 C:\wamp\www\blogcms\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 C:\wamp\www\blogcms\index.php(118): Kohana_Request->execute()
#11 {main} in :
2013-06-16 08:46:05 --- CRITICAL: ReflectionException [ 0 ]: Function max-length() does not exist ~ SYSPATH\classes\Kohana\Validation.php [ 396 ] in C:\wamp\www\blogcms\system\classes\Kohana\Validation.php:396
2013-06-16 08:46:05 --- DEBUG: #0 C:\wamp\www\blogcms\system\classes\Kohana\Validation.php(396): ReflectionFunction->__construct('max-length')
#1 C:\wamp\www\blogcms\modules\orm\classes\Kohana\ORM.php(1270): Kohana_Validation->check()
#2 C:\wamp\www\blogcms\modules\orm\classes\Kohana\ORM.php(1299): Kohana_ORM->check(NULL)
#3 C:\wamp\www\blogcms\modules\orm\classes\Kohana\ORM.php(1418): Kohana_ORM->create(NULL)
#4 C:\wamp\www\blogcms\application\classes\Controller\home.php(45): Kohana_ORM->save()
#5 C:\wamp\www\blogcms\system\classes\Kohana\Controller.php(84): Controller_Home->action_showPost()
#6 [internal function]: Kohana_Controller->execute()
#7 C:\wamp\www\blogcms\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#8 C:\wamp\www\blogcms\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 C:\wamp\www\blogcms\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 C:\wamp\www\blogcms\index.php(118): Kohana_Request->execute()
#11 {main} in C:\wamp\www\blogcms\system\classes\Kohana\Validation.php:396
2013-06-16 08:47:26 --- CRITICAL: ErrorException [ 8 ]: Array to string conversion ~ APPPATH\views\home\showPost.php [ 7 ] in C:\wamp\www\blogcms\application\views\home\showPost.php:7
2013-06-16 08:47:26 --- DEBUG: #0 C:\wamp\www\blogcms\application\views\home\showPost.php(7): Kohana_Core::error_handler(8, 'Array to string...', 'C:\wamp\www\blo...', 7, Array)
#1 C:\wamp\www\blogcms\system\classes\Kohana\View.php(61): include('C:\wamp\www\blo...')
#2 C:\wamp\www\blogcms\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\blo...', Array)
#3 C:\wamp\www\blogcms\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\wamp\www\blogcms\application\views\template.php(46): Kohana_View->__toString()
#5 C:\wamp\www\blogcms\system\classes\Kohana\View.php(61): include('C:\wamp\www\blo...')
#6 C:\wamp\www\blogcms\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\blo...', Array)
#7 C:\wamp\www\blogcms\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\wamp\www\blogcms\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\wamp\www\blogcms\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#11 C:\wamp\www\blogcms\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\wamp\www\blogcms\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 C:\wamp\www\blogcms\index.php(118): Kohana_Request->execute()
#14 {main} in C:\wamp\www\blogcms\application\views\home\showPost.php:7
2013-06-16 11:08:46 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Model_Config::is_loaded() ~ APPPATH\classes\Controller\home.php [ 67 ] in :
2013-06-16 11:08:46 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-06-16 11:09:23 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Database_MySQL_Result::is_loaded() ~ APPPATH\classes\Controller\home.php [ 68 ] in :
2013-06-16 11:09:23 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :