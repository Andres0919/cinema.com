<?php
require "baseController.php";
require "model/cinema.php";
use Controller\baseController;

class cinemaController extends  baseController{

    public $title = 'Cinema';
    public $default_action = 'cinema';
    public $private_actions = array('edit');


    public function cinemaAction()
    {
        $cinema = new cinema();
        return array('theaters',array('teatros' => array(0 => array('name'=> 'Teatro 1','lat'=> 6.2359, 'long'=> -75.5751))));
    }
}

$manager = new cinemaController();
$manager->render();
