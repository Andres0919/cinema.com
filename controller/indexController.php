<?php
require "baseController.php";
use Controller\baseController;

class indexController extends  baseController{

    public $title = 'Promocinal';
    public $default_action = 'index';

    public function indexAction()
    {
        //controller
        return array('index',array(
            'hola'=> 'probando bar'));
    }

    public function signupAction(){

        $this->title = 'Sign up';
        return array('signup');
    }

}

$manager = new indexController();
$manager->render();
