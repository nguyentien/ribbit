<?php

namespace Core;

use Controller\Home;

class Application
{
	public function __construct() {
		
	}
	
	public function run() {
		$class = $this->getNameController($_GET['controller']);
		$controller = new $class;
		
		$action = $this->getActionName($_GET['query'], $controller);
		$controller->$action();
	}
	
	public function getNameController($get) {
		$class = 'Controller\Home';
		switch ($get) {
			case 'home':
				$class = 'Controller\\' . ucfirst($get);
				break;
		}
		
		return $class;
	}
	
	public function getActionName($get, $controller) {
		$action = 'indexAction';
		$query = explode('/', $get);
		if ($query[0]) {
			$method_name = $query[0] . 'Action';
			if (method_exists($controller, $method_name)) {
				$action = $method_name;
			}
		}
		
		return $action;
	}
}