<?php 

namespace Bootstrap;

class Bootstrap
{
	public static function autoloader($class) {
		echo 'aa';
	}
}

spl_autoload_register(__NAMESPACE__ .'\Bootstrap::autoloader');
?>