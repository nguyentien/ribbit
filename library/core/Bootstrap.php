<?php 

namespace Bootstrap;

class Bootstrap
{
	public static function autoloader($class) {
		$path = explode('\\', $class);
		
		if ($path[0] == 'Core') {
			require_once 'library/core/' . $path[1] . '.php';
		} else if ($path[0] == 'Controller') {
			require_once 'controllers/' . $path[1] . '.php';
		}
	}
}

spl_autoload_register(__NAMESPACE__ .'\Bootstrap::autoloader');