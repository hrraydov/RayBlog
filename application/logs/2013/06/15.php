<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-06-15 11:45:18 --- CRITICAL: ErrorException [ 1 ]: Cannot use object of type Model_Post as array ~ APPPATH\views\home\index.php [ 5 ] in :
2013-06-15 11:45:18 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-06-15 11:46:04 --- CRITICAL: ErrorException [ 1 ]: Cannot use object of type Model_Post as array ~ APPPATH\views\home\index.php [ 5 ] in :
2013-06-15 11:46:04 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-06-15 12:00:02 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Model_Page::find_all() ~ APPPATH\classes\Controller\home.php [ 11 ] in :
2013-06-15 12:00:02 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-06-15 12:00:42 --- CRITICAL: ErrorException [ 2 ]: Attempt to assign property of non-object ~ APPPATH\classes\Controller\home.php [ 11 ] in C:\wamp\www\blogcms\application\classes\Controller\home.php:11
2013-06-15 12:00:42 --- DEBUG: #0 C:\wamp\www\blogcms\application\classes\Controller\home.php(11): Kohana_Core::error_handler(2, 'Attempt to assi...', 'C:\wamp\www\blo...', 11, Array)
#1 C:\wamp\www\blogcms\system\classes\Kohana\Controller.php(69): Controller_Home->before()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\blogcms\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#4 C:\wamp\www\blogcms\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\blogcms\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\blogcms\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\blogcms\application\classes\Controller\home.php:11
2013-06-15 12:02:26 --- CRITICAL: ErrorException [ 2 ]: Attempt to assign property of non-object ~ APPPATH\classes\Controller\home.php [ 11 ] in C:\wamp\www\blogcms\application\classes\Controller\home.php:11
2013-06-15 12:02:26 --- DEBUG: #0 C:\wamp\www\blogcms\application\classes\Controller\home.php(11): Kohana_Core::error_handler(2, 'Attempt to assi...', 'C:\wamp\www\blo...', 11, Array)
#1 C:\wamp\www\blogcms\system\classes\Kohana\Controller.php(69): Controller_Home->before()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\blogcms\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#4 C:\wamp\www\blogcms\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\blogcms\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\blogcms\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\blogcms\application\classes\Controller\home.php:11
2013-06-15 12:02:28 --- CRITICAL: ErrorException [ 2 ]: Attempt to assign property of non-object ~ APPPATH\classes\Controller\home.php [ 11 ] in C:\wamp\www\blogcms\application\classes\Controller\home.php:11
2013-06-15 12:02:28 --- DEBUG: #0 C:\wamp\www\blogcms\application\classes\Controller\home.php(11): Kohana_Core::error_handler(2, 'Attempt to assi...', 'C:\wamp\www\blo...', 11, Array)
#1 C:\wamp\www\blogcms\system\classes\Kohana\Controller.php(69): Controller_Home->before()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\blogcms\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#4 C:\wamp\www\blogcms\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\blogcms\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\blogcms\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\blogcms\application\classes\Controller\home.php:11
2013-06-15 12:04:38 --- CRITICAL: Kohana_Exception [ 0 ]: The title property does not exist in the Model_Page class ~ MODPATH\orm\classes\Kohana\ORM.php [ 684 ] in C:\wamp\www\blogcms\modules\orm\classes\Kohana\ORM.php:600
2013-06-15 12:04:38 --- DEBUG: #0 C:\wamp\www\blogcms\modules\orm\classes\Kohana\ORM.php(600): Kohana_ORM->get('title')
#1 C:\wamp\www\blogcms\application\views\template.php(13): Kohana_ORM->__get('title')
#2 C:\wamp\www\blogcms\system\classes\Kohana\View.php(61): include('C:\wamp\www\blo...')
#3 C:\wamp\www\blogcms\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\blo...', Array)
#4 C:\wamp\www\blogcms\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#5 C:\wamp\www\blogcms\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#6 [internal function]: Kohana_Controller->execute()
#7 C:\wamp\www\blogcms\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#8 C:\wamp\www\blogcms\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 C:\wamp\www\blogcms\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 C:\wamp\www\blogcms\index.php(118): Kohana_Request->execute()
#11 {main} in C:\wamp\www\blogcms\modules\orm\classes\Kohana\ORM.php:600
2013-06-15 12:09:24 --- CRITICAL: ErrorException [ 2 ]: Missing argument 1 for Controller_Home::action_showPage(), called in C:\wamp\www\blogcms\system\classes\Kohana\Controller.php on line 84 and defined ~ APPPATH\classes\Controller\home.php [ 23 ] in C:\wamp\www\blogcms\application\classes\Controller\home.php:23
2013-06-15 12:09:24 --- DEBUG: #0 C:\wamp\www\blogcms\application\classes\Controller\home.php(23): Kohana_Core::error_handler(2, 'Missing argumen...', 'C:\wamp\www\blo...', 23, Array)
#1 C:\wamp\www\blogcms\system\classes\Kohana\Controller.php(84): Controller_Home->action_showPage()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\blogcms\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#4 C:\wamp\www\blogcms\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\blogcms\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\blogcms\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\blogcms\application\classes\Controller\home.php:23
2013-06-15 12:10:08 --- CRITICAL: ErrorException [ 2 ]: Missing argument 1 for Controller_Home::action_showPage(), called in C:\wamp\www\blogcms\system\classes\Kohana\Controller.php on line 84 and defined ~ APPPATH\classes\Controller\home.php [ 23 ] in C:\wamp\www\blogcms\application\classes\Controller\home.php:23
2013-06-15 12:10:08 --- DEBUG: #0 C:\wamp\www\blogcms\application\classes\Controller\home.php(23): Kohana_Core::error_handler(2, 'Missing argumen...', 'C:\wamp\www\blo...', 23, Array)
#1 C:\wamp\www\blogcms\system\classes\Kohana\Controller.php(84): Controller_Home->action_showPage()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\blogcms\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#4 C:\wamp\www\blogcms\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\blogcms\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\blogcms\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\blogcms\application\classes\Controller\home.php:23
2013-06-15 12:10:11 --- CRITICAL: ErrorException [ 2 ]: Missing argument 1 for Controller_Home::action_showPage(), called in C:\wamp\www\blogcms\system\classes\Kohana\Controller.php on line 84 and defined ~ APPPATH\classes\Controller\home.php [ 23 ] in C:\wamp\www\blogcms\application\classes\Controller\home.php:23
2013-06-15 12:10:11 --- DEBUG: #0 C:\wamp\www\blogcms\application\classes\Controller\home.php(23): Kohana_Core::error_handler(2, 'Missing argumen...', 'C:\wamp\www\blo...', 23, Array)
#1 C:\wamp\www\blogcms\system\classes\Kohana\Controller.php(84): Controller_Home->action_showPage()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\blogcms\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#4 C:\wamp\www\blogcms\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\blogcms\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\blogcms\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\blogcms\application\classes\Controller\home.php:23
2013-06-15 12:30:38 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\template.php [ 18 ] in C:\wamp\www\blogcms\application\views\template.php:18
2013-06-15 12:30:38 --- DEBUG: #0 C:\wamp\www\blogcms\application\views\template.php(18): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\blo...', 18, Array)
#1 C:\wamp\www\blogcms\system\classes\Kohana\View.php(61): include('C:\wamp\www\blo...')
#2 C:\wamp\www\blogcms\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\blo...', Array)
#3 C:\wamp\www\blogcms\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\wamp\www\blogcms\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\blogcms\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#7 C:\wamp\www\blogcms\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\blogcms\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\blogcms\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\blogcms\application\views\template.php:18
2013-06-15 14:34:23 --- CRITICAL: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH\views\admin\createPost.php [ 2 ] in C:\wamp\www\blogcms\application\views\admin\createPost.php:2
2013-06-15 14:34:23 --- DEBUG: #0 C:\wamp\www\blogcms\application\views\admin\createPost.php(2): Kohana_Core::error_handler(2, 'Invalid argumen...', 'C:\wamp\www\blo...', 2, Array)
#1 C:\wamp\www\blogcms\system\classes\Kohana\View.php(61): include('C:\wamp\www\blo...')
#2 C:\wamp\www\blogcms\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\blo...', Array)
#3 C:\wamp\www\blogcms\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\wamp\www\blogcms\application\views\template.php(18): Kohana_View->__toString()
#5 C:\wamp\www\blogcms\system\classes\Kohana\View.php(61): include('C:\wamp\www\blo...')
#6 C:\wamp\www\blogcms\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\blo...', Array)
#7 C:\wamp\www\blogcms\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\wamp\www\blogcms\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\wamp\www\blogcms\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#11 C:\wamp\www\blogcms\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\wamp\www\blogcms\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 C:\wamp\www\blogcms\index.php(118): Kohana_Request->execute()
#14 {main} in C:\wamp\www\blogcms\application\views\admin\createPost.php:2
2013-06-15 14:41:07 --- CRITICAL: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\Kohana\ORM.php [ 1272 ] in C:\wamp\www\blogcms\modules\orm\classes\Kohana\ORM.php:1299
2013-06-15 14:41:07 --- DEBUG: #0 C:\wamp\www\blogcms\modules\orm\classes\Kohana\ORM.php(1299): Kohana_ORM->check(NULL)
#1 C:\wamp\www\blogcms\modules\orm\classes\Kohana\ORM.php(1418): Kohana_ORM->create(NULL)
#2 C:\wamp\www\blogcms\application\classes\Controller\admin.php(43): Kohana_ORM->save()
#3 C:\wamp\www\blogcms\system\classes\Kohana\Controller.php(84): Controller_Admin->action_deletePost()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\wamp\www\blogcms\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#6 C:\wamp\www\blogcms\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\wamp\www\blogcms\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\blogcms\index.php(118): Kohana_Request->execute()
#9 {main} in C:\wamp\www\blogcms\modules\orm\classes\Kohana\ORM.php:1299
2013-06-15 14:42:58 --- CRITICAL: Kohana_Exception [ 0 ]: Cannot delete post model because it is not loaded. ~ MODPATH\orm\classes\Kohana\ORM.php [ 1431 ] in C:\wamp\www\blogcms\application\classes\Controller\admin.php:44
2013-06-15 14:42:58 --- DEBUG: #0 C:\wamp\www\blogcms\application\classes\Controller\admin.php(44): Kohana_ORM->delete()
#1 C:\wamp\www\blogcms\system\classes\Kohana\Controller.php(84): Controller_Admin->action_deletePost()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\blogcms\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#4 C:\wamp\www\blogcms\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\blogcms\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\blogcms\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\blogcms\application\classes\Controller\admin.php:44
2013-06-15 14:44:16 --- CRITICAL: Kohana_Exception [ 0 ]: Cannot delete post model because it is not loaded. ~ MODPATH\orm\classes\Kohana\ORM.php [ 1431 ] in C:\wamp\www\blogcms\application\classes\Controller\admin.php:44
2013-06-15 14:44:16 --- DEBUG: #0 C:\wamp\www\blogcms\application\classes\Controller\admin.php(44): Kohana_ORM->delete()
#1 C:\wamp\www\blogcms\system\classes\Kohana\Controller.php(84): Controller_Admin->action_deletePost()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\blogcms\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#4 C:\wamp\www\blogcms\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\blogcms\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\blogcms\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\blogcms\application\classes\Controller\admin.php:44
2013-06-15 14:44:45 --- CRITICAL: Kohana_Exception [ 0 ]: Cannot delete post model because it is not loaded. ~ MODPATH\orm\classes\Kohana\ORM.php [ 1431 ] in C:\wamp\www\blogcms\application\classes\Controller\admin.php:45
2013-06-15 14:44:45 --- DEBUG: #0 C:\wamp\www\blogcms\application\classes\Controller\admin.php(45): Kohana_ORM->delete()
#1 C:\wamp\www\blogcms\system\classes\Kohana\Controller.php(84): Controller_Admin->action_deletePost()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\blogcms\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#4 C:\wamp\www\blogcms\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\blogcms\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\blogcms\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\blogcms\application\classes\Controller\admin.php:45
2013-06-15 14:48:02 --- CRITICAL: Kohana_Exception [ 0 ]: Cannot delete post model because it is not loaded. ~ MODPATH\orm\classes\Kohana\ORM.php [ 1431 ] in C:\wamp\www\blogcms\application\classes\Controller\admin.php:45
2013-06-15 14:48:02 --- DEBUG: #0 C:\wamp\www\blogcms\application\classes\Controller\admin.php(45): Kohana_ORM->delete()
#1 C:\wamp\www\blogcms\system\classes\Kohana\Controller.php(84): Controller_Admin->action_deletePost()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\blogcms\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#4 C:\wamp\www\blogcms\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\blogcms\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\blogcms\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\blogcms\application\classes\Controller\admin.php:45
2013-06-15 14:50:54 --- CRITICAL: Kohana_Exception [ 0 ]: Cannot delete post model because it is not loaded. ~ MODPATH\orm\classes\Kohana\ORM.php [ 1431 ] in C:\wamp\www\blogcms\application\classes\Controller\admin.php:45
2013-06-15 14:50:54 --- DEBUG: #0 C:\wamp\www\blogcms\application\classes\Controller\admin.php(45): Kohana_ORM->delete()
#1 C:\wamp\www\blogcms\system\classes\Kohana\Controller.php(84): Controller_Admin->action_deletePost()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\blogcms\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#4 C:\wamp\www\blogcms\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\blogcms\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\blogcms\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\blogcms\application\classes\Controller\admin.php:45
2013-06-15 14:53:36 --- CRITICAL: Kohana_Exception [ 0 ]: Cannot delete post model because it is not loaded. ~ MODPATH\orm\classes\Kohana\ORM.php [ 1431 ] in C:\wamp\www\blogcms\application\classes\Controller\admin.php:45
2013-06-15 14:53:36 --- DEBUG: #0 C:\wamp\www\blogcms\application\classes\Controller\admin.php(45): Kohana_ORM->delete()
#1 C:\wamp\www\blogcms\system\classes\Kohana\Controller.php(84): Controller_Admin->action_deletePost()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\blogcms\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#4 C:\wamp\www\blogcms\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\blogcms\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\blogcms\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\blogcms\application\classes\Controller\admin.php:45
2013-06-15 14:55:01 --- CRITICAL: Kohana_Exception [ 0 ]: Cannot delete post model because it is not loaded. ~ MODPATH\orm\classes\Kohana\ORM.php [ 1431 ] in C:\wamp\www\blogcms\application\classes\Controller\admin.php:45
2013-06-15 14:55:01 --- DEBUG: #0 C:\wamp\www\blogcms\application\classes\Controller\admin.php(45): Kohana_ORM->delete()
#1 C:\wamp\www\blogcms\system\classes\Kohana\Controller.php(84): Controller_Admin->action_deletePost()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\blogcms\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#4 C:\wamp\www\blogcms\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\blogcms\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\blogcms\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\blogcms\application\classes\Controller\admin.php:45
2013-06-15 14:55:35 --- CRITICAL: Kohana_Exception [ 0 ]: Cannot delete post model because it is not loaded. ~ MODPATH\orm\classes\Kohana\ORM.php [ 1431 ] in C:\wamp\www\blogcms\application\classes\Controller\admin.php:45
2013-06-15 14:55:35 --- DEBUG: #0 C:\wamp\www\blogcms\application\classes\Controller\admin.php(45): Kohana_ORM->delete()
#1 C:\wamp\www\blogcms\system\classes\Kohana\Controller.php(84): Controller_Admin->action_deletePost()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\blogcms\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#4 C:\wamp\www\blogcms\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\blogcms\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\blogcms\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\blogcms\application\classes\Controller\admin.php:45
2013-06-15 14:55:53 --- CRITICAL: Kohana_Exception [ 0 ]: Cannot delete post model because it is not loaded. ~ MODPATH\orm\classes\Kohana\ORM.php [ 1431 ] in C:\wamp\www\blogcms\application\classes\Controller\admin.php:45
2013-06-15 14:55:53 --- DEBUG: #0 C:\wamp\www\blogcms\application\classes\Controller\admin.php(45): Kohana_ORM->delete()
#1 C:\wamp\www\blogcms\system\classes\Kohana\Controller.php(84): Controller_Admin->action_deletePost()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\blogcms\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#4 C:\wamp\www\blogcms\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\blogcms\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\blogcms\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\blogcms\application\classes\Controller\admin.php:45
2013-06-15 15:01:07 --- CRITICAL: Kohana_Exception [ 0 ]: Cannot delete post model because it is not loaded. ~ MODPATH\orm\classes\Kohana\ORM.php [ 1431 ] in C:\wamp\www\blogcms\application\classes\Controller\admin.php:44
2013-06-15 15:01:07 --- DEBUG: #0 C:\wamp\www\blogcms\application\classes\Controller\admin.php(44): Kohana_ORM->delete()
#1 C:\wamp\www\blogcms\system\classes\Kohana\Controller.php(84): Controller_Admin->action_deletePost()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\blogcms\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#4 C:\wamp\www\blogcms\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\blogcms\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\blogcms\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\blogcms\application\classes\Controller\admin.php:44
2013-06-15 15:02:41 --- CRITICAL: Kohana_Exception [ 0 ]: Cannot delete post model because it is not loaded. ~ MODPATH\orm\classes\Kohana\ORM.php [ 1431 ] in C:\wamp\www\blogcms\application\classes\Controller\admin.php:42
2013-06-15 15:02:41 --- DEBUG: #0 C:\wamp\www\blogcms\application\classes\Controller\admin.php(42): Kohana_ORM->delete()
#1 C:\wamp\www\blogcms\system\classes\Kohana\Controller.php(84): Controller_Admin->action_deletePost()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\blogcms\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#4 C:\wamp\www\blogcms\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\blogcms\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\blogcms\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\blogcms\application\classes\Controller\admin.php:42
2013-06-15 15:53:02 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: pages ~ APPPATH\views\admin\index.php [ 4 ] in C:\wamp\www\blogcms\application\views\admin\index.php:4
2013-06-15 15:53:02 --- DEBUG: #0 C:\wamp\www\blogcms\application\views\admin\index.php(4): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\blo...', 4, Array)
#1 C:\wamp\www\blogcms\system\classes\Kohana\View.php(61): include('C:\wamp\www\blo...')
#2 C:\wamp\www\blogcms\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\blo...', Array)
#3 C:\wamp\www\blogcms\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\wamp\www\blogcms\application\views\template.php(26): Kohana_View->__toString()
#5 C:\wamp\www\blogcms\system\classes\Kohana\View.php(61): include('C:\wamp\www\blo...')
#6 C:\wamp\www\blogcms\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\blo...', Array)
#7 C:\wamp\www\blogcms\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\wamp\www\blogcms\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\wamp\www\blogcms\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#11 C:\wamp\www\blogcms\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\wamp\www\blogcms\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 C:\wamp\www\blogcms\index.php(118): Kohana_Request->execute()
#14 {main} in C:\wamp\www\blogcms\application\views\admin\index.php:4
2013-06-15 15:53:46 --- CRITICAL: Kohana_Exception [ 0 ]: The post_title property does not exist in the Model_Page class ~ MODPATH\orm\classes\Kohana\ORM.php [ 684 ] in C:\wamp\www\blogcms\modules\orm\classes\Kohana\ORM.php:600
2013-06-15 15:53:46 --- DEBUG: #0 C:\wamp\www\blogcms\modules\orm\classes\Kohana\ORM.php(600): Kohana_ORM->get('post_title')
#1 C:\wamp\www\blogcms\application\views\admin\index.php(17): Kohana_ORM->__get('post_title')
#2 C:\wamp\www\blogcms\system\classes\Kohana\View.php(61): include('C:\wamp\www\blo...')
#3 C:\wamp\www\blogcms\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\blo...', Array)
#4 C:\wamp\www\blogcms\system\classes\Kohana\View.php(228): Kohana_View->render()
#5 C:\wamp\www\blogcms\application\views\template.php(26): Kohana_View->__toString()
#6 C:\wamp\www\blogcms\system\classes\Kohana\View.php(61): include('C:\wamp\www\blo...')
#7 C:\wamp\www\blogcms\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\blo...', Array)
#8 C:\wamp\www\blogcms\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#9 C:\wamp\www\blogcms\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#10 [internal function]: Kohana_Controller->execute()
#11 C:\wamp\www\blogcms\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#12 C:\wamp\www\blogcms\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 C:\wamp\www\blogcms\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#14 C:\wamp\www\blogcms\index.php(118): Kohana_Request->execute()
#15 {main} in C:\wamp\www\blogcms\modules\orm\classes\Kohana\ORM.php:600
2013-06-15 15:56:50 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: post ~ APPPATH\views\admin\updatePost.php [ 12 ] in C:\wamp\www\blogcms\application\views\admin\updatePost.php:12
2013-06-15 15:56:50 --- DEBUG: #0 C:\wamp\www\blogcms\application\views\admin\updatePost.php(12): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\blo...', 12, Array)
#1 C:\wamp\www\blogcms\system\classes\Kohana\View.php(61): include('C:\wamp\www\blo...')
#2 C:\wamp\www\blogcms\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\blo...', Array)
#3 C:\wamp\www\blogcms\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\wamp\www\blogcms\application\views\template.php(26): Kohana_View->__toString()
#5 C:\wamp\www\blogcms\system\classes\Kohana\View.php(61): include('C:\wamp\www\blo...')
#6 C:\wamp\www\blogcms\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\blo...', Array)
#7 C:\wamp\www\blogcms\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\wamp\www\blogcms\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\wamp\www\blogcms\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#11 C:\wamp\www\blogcms\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\wamp\www\blogcms\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 C:\wamp\www\blogcms\index.php(118): Kohana_Request->execute()
#14 {main} in C:\wamp\www\blogcms\application\views\admin\updatePost.php:12
2013-06-15 15:57:16 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: post ~ APPPATH\views\admin\updatePost.php [ 12 ] in C:\wamp\www\blogcms\application\views\admin\updatePost.php:12
2013-06-15 15:57:16 --- DEBUG: #0 C:\wamp\www\blogcms\application\views\admin\updatePost.php(12): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\blo...', 12, Array)
#1 C:\wamp\www\blogcms\system\classes\Kohana\View.php(61): include('C:\wamp\www\blo...')
#2 C:\wamp\www\blogcms\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\blo...', Array)
#3 C:\wamp\www\blogcms\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\wamp\www\blogcms\application\views\template.php(26): Kohana_View->__toString()
#5 C:\wamp\www\blogcms\system\classes\Kohana\View.php(61): include('C:\wamp\www\blo...')
#6 C:\wamp\www\blogcms\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\blo...', Array)
#7 C:\wamp\www\blogcms\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\wamp\www\blogcms\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\wamp\www\blogcms\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#11 C:\wamp\www\blogcms\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\wamp\www\blogcms\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 C:\wamp\www\blogcms\index.php(118): Kohana_Request->execute()
#14 {main} in C:\wamp\www\blogcms\application\views\admin\updatePost.php:12
2013-06-15 15:57:31 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: post ~ APPPATH\views\admin\updatePost.php [ 12 ] in C:\wamp\www\blogcms\application\views\admin\updatePost.php:12
2013-06-15 15:57:31 --- DEBUG: #0 C:\wamp\www\blogcms\application\views\admin\updatePost.php(12): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\blo...', 12, Array)
#1 C:\wamp\www\blogcms\system\classes\Kohana\View.php(61): include('C:\wamp\www\blo...')
#2 C:\wamp\www\blogcms\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\blo...', Array)
#3 C:\wamp\www\blogcms\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\wamp\www\blogcms\application\views\template.php(26): Kohana_View->__toString()
#5 C:\wamp\www\blogcms\system\classes\Kohana\View.php(61): include('C:\wamp\www\blo...')
#6 C:\wamp\www\blogcms\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\blo...', Array)
#7 C:\wamp\www\blogcms\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\wamp\www\blogcms\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\wamp\www\blogcms\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#11 C:\wamp\www\blogcms\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\wamp\www\blogcms\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 C:\wamp\www\blogcms\index.php(118): Kohana_Request->execute()
#14 {main} in C:\wamp\www\blogcms\application\views\admin\updatePost.php:12
2013-06-15 15:57:38 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: post ~ APPPATH\views\admin\updatePost.php [ 12 ] in C:\wamp\www\blogcms\application\views\admin\updatePost.php:12
2013-06-15 15:57:38 --- DEBUG: #0 C:\wamp\www\blogcms\application\views\admin\updatePost.php(12): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\blo...', 12, Array)
#1 C:\wamp\www\blogcms\system\classes\Kohana\View.php(61): include('C:\wamp\www\blo...')
#2 C:\wamp\www\blogcms\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\blo...', Array)
#3 C:\wamp\www\blogcms\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\wamp\www\blogcms\application\views\template.php(26): Kohana_View->__toString()
#5 C:\wamp\www\blogcms\system\classes\Kohana\View.php(61): include('C:\wamp\www\blo...')
#6 C:\wamp\www\blogcms\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\blo...', Array)
#7 C:\wamp\www\blogcms\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\wamp\www\blogcms\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\wamp\www\blogcms\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#11 C:\wamp\www\blogcms\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\wamp\www\blogcms\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 C:\wamp\www\blogcms\index.php(118): Kohana_Request->execute()
#14 {main} in C:\wamp\www\blogcms\application\views\admin\updatePost.php:12