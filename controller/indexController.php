<?php
require "baseController.php";
require 'model/movie.php';
use Controller\baseController;

class indexController extends  baseController{

    public $title = 'Promocinal';
    public $default_action = 'index';

    public function indexAction()
    {
        $movie = new movie();
        return array('index', array(
            'comming'=> $movie->getMovies()
        ));
    }

    public function signupAction(){

        $this->setTitle('Sign up');
        return array('signup');
    }

}

$manager = new indexController();
$manager->render();
