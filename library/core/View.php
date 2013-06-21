<?php

namespace core;

class View
{
	private $smarty;
	
	private $style = 'default';
	
	private $folder;
	
	private $is_login = false;
	
	public function __construct() {
		$this->smarty = new \Smarty();
		$this->smarty->setCompileDir(APPLICATION_PATH . DS . 'tmp' . DS . 'templates_c');
		
		$this->folder = APPLICATION_PATH . DS . 'views' . DS;
	}
	
	public function render($page, $data) {
		$page = $this->folder . $page;
		foreach ($data as $key => $value) {
			$this->smarty->assign($key, $value);
		}
		$this->smarty->assign('style', $this->style);
		$this->smarty->assign('login', $this->is_login);
		$this->smarty->display($page);
	}
}