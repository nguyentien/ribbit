<?php 

use Core\Application;

defined('BASE_URL')
	|| define('BASE_URL', 'http://192.168.2.156:7777');

defined('APPLICATION_PATH')
	|| define('APPLICATION_PATH', realpath(dirname(__FILE__)));

require_once 'config/application.php';

$application = new Application();
$application->run();

?>