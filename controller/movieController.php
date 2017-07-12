<?php
require "baseController.php";
require "model/movie.php";
use Controller\baseController;

class movieController extends  baseController{

    public $title = 'movie';
    public $default_action = 'movie';
    public $private_actions = array('movie','billboard','schedule','reserve','config');

    public function movieAction(){

        return array('movie',array(
            'hola'=> 'probando movie'));
    }

    public function billboardAction(){

        $this->setTitle('Billboard');
        $movie = new movie();
        return array('billboard', $movie->getMovie());
    }

    public function scheduleAction(){

        $this->setTitle('Schedule');
        return array('schedule',array(
            'hola'=> 'probando movie'));
    }

    public function reserveAction(){

        $this->setTitle('Reserve');
        return array('reserve',array(
            'hola'=> 'probando movie'));
    }

    public function configAction(){

        $this->setTitle('Config');
        return array('config',array(
            'hola'=> 'probando movie'));
    }
}

$manager = new movieController();
$manager->render();
