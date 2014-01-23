<?php

namespace Controller;

use Core\Controller;
use Core\View;

class Home extends Controller
{

    public function __construct()
    {
        
    }

    public function indexAction()
    {
        $data = array('name' => 'Tien');
        $view = new View();
        $view->render('home/index.tpl', $data);
    }

    public function editAction()
    {
        echo 'edit';
    }

}
