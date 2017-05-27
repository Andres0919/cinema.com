<?php
require "baseController.php";
require "model/movie.php";
use Controller\baseController;

class movieController extends  baseController{

    public $title = 'movie';
    public $default_action = 'movie';
    public $private_actions = array('movie','billboard','schedule','reserve','config');


    public function movieAction()
    {

        return array('movie',array(
            'hola'=> 'probando movie'));
    }

    public function billboardAction(){

        $this->title = 'Billboard';
        $movie = new movie();
        $movie->connect();
        return array('billboard', $movie->getMovie());
    }

    public function scheduleAction(){

        $this->title = 'Schedule';
        return array('schedule',array(
            'hola'=> 'probando movie'));
    }

    public function reserveAction(){

        $this->title = 'Reserve';
        return array('reserve',array(
            'hola'=> 'probando movie'));
    }

    public function configAction(){

        $this->title = 'Config';
        return array('config',array(
            'hola'=> 'probando movie'));
    }

}

$manager = new movieController();
$manager->render();
