<?php

namespace core;

class View
{
	private $smarty;
	
	public function __construct() {
		$this->smarty = new \Smarty();
		$this->smarty->setCompileDir(APPLICATION_PATH . '/tmp/templates_c');
	}
	
	public function render($page, $data) {
		$page = APPLICATION_PATH . '/views/' . $page;
		foreach ($data as $key => $value) {
			$this->smarty->assign($key, $value);
		}
		$this->smarty->display($page);
	}
}