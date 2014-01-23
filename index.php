<?php

defined('BASE_URL') || define('BASE_URL', 'http://192.168.2.156:7777');

defined('APPLICATION_PATH') || define('APPLICATION_PATH', realpath(dirname(__FILE__)));

defined('DS') || define('DS', '/');

require_once 'config/setting.php';

$application = new Core\Application();
$application->run();