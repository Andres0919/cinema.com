<?php
require "baseController.php";
require "model/movie.php";
use Controller\baseController;

class movieController extends  baseController{

    public $title = 'Movie';
    public $default_action = 'movie';
    public $private_actions = array('movie','billboard','schedule','reserve','config');

    public function movieAction(){

        return array('movie',array(
            'hola'=> 'probando movie'));
    }

    public function moviesAction(){

        $this->setTitle("Movies");
        return array('movies',array(
            'hola'=> 'probando movie'));
    }
}

$manager = new movieController();
$manager->render();
