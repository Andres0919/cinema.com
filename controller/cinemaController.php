<?php
require "baseController.php";
require "model/cinema.php";
use Controller\baseController;

class cinemaController extends  baseController{

    public $title = 'Cinema';
    public $default_action = 'cinema';
    public $private_actions = array('cinema','edit');


    public function cinemaAction()
    {
        $cinema = new cinema();
        return array('theaters');
    }
}

$manager = new cinemaController();
$manager->render();
