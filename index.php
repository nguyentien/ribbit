<?php 

use Application\Application;

defined('BASE_URL')
	|| define('BASE_URL', 'http://192.168.2.156:7777');

defined('APPLICATION_PATH')
	|| define('APPLICATION_PATH', realpath(dirname(__FILE__)));

set_include_path(realpath(APPLICATION_PATH) . '/library/core');

require_once 'Bootstrap.php';

require_once 'Application.php';

$application = new Application();
$application->run();

?>