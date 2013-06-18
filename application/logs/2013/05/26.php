<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-05-26 08:08:27 --- CRITICAL: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt. ~ SYSPATH\classes\Kohana\Cookie.php [ 152 ] in C:\wamp\www\kohana\system\classes\Kohana\Cookie.php:67
2013-05-26 08:08:27 --- DEBUG: #0 C:\wamp\www\kohana\system\classes\Kohana\Cookie.php(67): Kohana_Cookie::salt('session', NULL)
#1 C:\wamp\www\kohana\system\classes\Kohana\Request.php(155): Kohana_Cookie::get('session')
#2 C:\wamp\www\kohana\index.php(117): Kohana_Request::factory(true, Array, false)
#3 {main} in C:\wamp\www\kohana\system\classes\Kohana\Cookie.php:67
2013-05-26 08:14:03 --- CRITICAL: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt. ~ SYSPATH\classes\Kohana\Cookie.php [ 152 ] in C:\wamp\www\kohana\system\classes\Kohana\Cookie.php:67
2013-05-26 08:14:03 --- DEBUG: #0 C:\wamp\www\kohana\system\classes\Kohana\Cookie.php(67): Kohana_Cookie::salt('session', NULL)
#1 C:\wamp\www\kohana\system\classes\Kohana\Request.php(155): Kohana_Cookie::get('session')
#2 C:\wamp\www\kohana\index.php(117): Kohana_Request::factory(true, Array, false)
#3 {main} in C:\wamp\www\kohana\system\classes\Kohana\Cookie.php:67
2013-05-26 08:15:04 --- CRITICAL: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt. ~ SYSPATH\classes\Kohana\Cookie.php [ 152 ] in C:\wamp\www\kohana\system\classes\Kohana\Cookie.php:67
2013-05-26 08:15:04 --- DEBUG: #0 C:\wamp\www\kohana\system\classes\Kohana\Cookie.php(67): Kohana_Cookie::salt('session', NULL)
#1 C:\wamp\www\kohana\system\classes\Kohana\Request.php(155): Kohana_Cookie::get('session')
#2 C:\wamp\www\kohana\index.php(117): Kohana_Request::factory(true, Array, false)
#3 {main} in C:\wamp\www\kohana\system\classes\Kohana\Cookie.php:67
2013-05-26 08:15:04 --- CRITICAL: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt. ~ SYSPATH\classes\Kohana\Cookie.php [ 152 ] in C:\wamp\www\kohana\system\classes\Kohana\Cookie.php:67
2013-05-26 08:15:04 --- DEBUG: #0 C:\wamp\www\kohana\system\classes\Kohana\Cookie.php(67): Kohana_Cookie::salt('session', NULL)
#1 C:\wamp\www\kohana\system\classes\Kohana\Request.php(155): Kohana_Cookie::get('session')
#2 C:\wamp\www\kohana\index.php(117): Kohana_Request::factory(true, Array, false)
#3 {main} in C:\wamp\www\kohana\system\classes\Kohana\Cookie.php:67
2013-05-26 08:15:06 --- CRITICAL: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt. ~ SYSPATH\classes\Kohana\Cookie.php [ 152 ] in C:\wamp\www\kohana\system\classes\Kohana\Cookie.php:67
2013-05-26 08:15:06 --- DEBUG: #0 C:\wamp\www\kohana\system\classes\Kohana\Cookie.php(67): Kohana_Cookie::salt('session', NULL)
#1 C:\wamp\www\kohana\system\classes\Kohana\Request.php(155): Kohana_Cookie::get('session')
#2 C:\wamp\www\kohana\index.php(117): Kohana_Request::factory(true, Array, false)
#3 {main} in C:\wamp\www\kohana\system\classes\Kohana\Cookie.php:67
2013-05-26 14:23:30 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Database_MySQL_Result::where() ~ APPPATH\classes\Controller\Registered.php [ 21 ] in :
2013-05-26 14:23:30 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-26 17:28:21 --- CRITICAL: View_Exception [ 0 ]: The requested view layouts/header could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in C:\wamp\www\kohana\system\classes\Kohana\View.php:137
2013-05-26 17:28:21 --- DEBUG: #0 C:\wamp\www\kohana\system\classes\Kohana\View.php(137): Kohana_View->set_filename('layouts/header')
#1 C:\wamp\www\kohana\system\classes\Kohana\View.php(30): Kohana_View->__construct('layouts/header', NULL)
#2 C:\wamp\www\kohana\application\classes\Controller\Home.php(14): Kohana_View::factory('layouts/header')
#3 C:\wamp\www\kohana\system\classes\Kohana\Controller.php(69): Controller_Home->before()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\wamp\www\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#6 C:\wamp\www\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\wamp\www\kohana\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\kohana\index.php(118): Kohana_Request->execute()
#9 {main} in C:\wamp\www\kohana\system\classes\Kohana\View.php:137
2013-05-26 17:28:50 --- CRITICAL: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ SYSPATH\classes\Kohana\Controller\Template.php [ 44 ] in :
2013-05-26 17:28:50 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-26 17:30:30 --- CRITICAL: ErrorException [ 2 ]: Attempt to assign property of non-object ~ APPPATH\classes\Controller\Home.php [ 44 ] in C:\wamp\www\kohana\application\classes\Controller\Home.php:44
2013-05-26 17:30:30 --- DEBUG: #0 C:\wamp\www\kohana\application\classes\Controller\Home.php(44): Kohana_Core::error_handler(2, 'Attempt to assi...', 'C:\wamp\www\koh...', 44, Array)
#1 C:\wamp\www\kohana\system\classes\Kohana\Controller.php(84): Controller_Home->action_register()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#4 C:\wamp\www\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\kohana\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\kohana\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\kohana\application\classes\Controller\Home.php:44
2013-05-26 17:34:00 --- CRITICAL: ErrorException [ 2 ]: Attempt to assign property of non-object ~ APPPATH\classes\Controller\Home.php [ 44 ] in C:\wamp\www\kohana\application\classes\Controller\Home.php:44
2013-05-26 17:34:00 --- DEBUG: #0 C:\wamp\www\kohana\application\classes\Controller\Home.php(44): Kohana_Core::error_handler(2, 'Attempt to assi...', 'C:\wamp\www\koh...', 44, Array)
#1 C:\wamp\www\kohana\system\classes\Kohana\Controller.php(84): Controller_Home->action_register()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#4 C:\wamp\www\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\kohana\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\kohana\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\kohana\application\classes\Controller\Home.php:44
2013-05-26 17:37:04 --- CRITICAL: ErrorException [ 2 ]: Attempt to assign property of non-object ~ APPPATH\classes\Controller\Home.php [ 44 ] in C:\wamp\www\kohana\application\classes\Controller\Home.php:44
2013-05-26 17:37:04 --- DEBUG: #0 C:\wamp\www\kohana\application\classes\Controller\Home.php(44): Kohana_Core::error_handler(2, 'Attempt to assi...', 'C:\wamp\www\koh...', 44, Array)
#1 C:\wamp\www\kohana\system\classes\Kohana\Controller.php(84): Controller_Home->action_register()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#4 C:\wamp\www\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\kohana\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\kohana\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\kohana\application\classes\Controller\Home.php:44
2013-05-26 17:37:59 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: title ~ APPPATH\views\template.php [ 6 ] in C:\wamp\www\kohana\application\views\template.php:6
2013-05-26 17:37:59 --- DEBUG: #0 C:\wamp\www\kohana\application\views\template.php(6): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\koh...', 6, Array)
#1 C:\wamp\www\kohana\system\classes\Kohana\View.php(61): include('C:\wamp\www\koh...')
#2 C:\wamp\www\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\koh...', Array)
#3 C:\wamp\www\kohana\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\wamp\www\kohana\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#7 C:\wamp\www\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\kohana\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\kohana\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\kohana\application\views\template.php:6