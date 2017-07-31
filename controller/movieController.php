<?php
require "baseController.php";
require "model/movie.php";
use Controller\baseController;

class movieController extends  baseController{

    public $title = 'Movie';
    public $default_action = 'movie';
    public $private_actions = array('movie','billboard','schedule','reserve','config');

    public function movieAction(){

        $movie = new movie();
        $movie->setId($_GET['movie']);
        return array('movie',array(
            'movie'=> $movie->getMovie()));
    }

    public function moviesAction(){

        $this->setTitle("Movies");
        $movie = new movie();
        return array('movies',array(
            'movie'=> $movie->getMovies()));
    }

    public function uploadAction(){

        $this->setTitle("Upload!");
        return array('uploadMovie',array(
            'movie'=> "hola update!"));
    }

    public function newAction(){

        $destination = $_SERVER['DOCUMENT_ROOT'] . '/img/movie/';
        $name = $_FILES['image']['name'];
        move_uploaded_file($_FILES['image']['tmp_name'], $destination.$name);
        return array('uploadMovie');
    }
}

$manager = new movieController();
$manager->render();
