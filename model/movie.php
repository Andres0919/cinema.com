<?php
require_once 'libs/cinemadb.php';
use Libs\cinemadb;


class movie extends cinemadb
{
    private $id;
    private $name;
    private $info;
    private $rating;
    private $duration;
    private $dateStart;
    private $dateFinish;
    private $status;

    function __construct() {

        $this->connect();
    }


    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getInfo()
    {
        return $this->info;
    }

    public function setInfo($info)
    {
        $this->info = $info;
    }

    public function getRating()
    {
        return $this->rating;
    }

    public function setRating($rating)
    {
        $this->rating = $rating;
    }

    public function getDuration()
    {
        return $this->duration;
    }

    public function setDuration($duration)
    {
        $this->duration = $duration;
    }

    public function getDateFinish()
    {
        return $this->dateFinish;
    }

    public function setDateFinish($dateFinish)
    {
        $this->dateFinish = $dateFinish;
    }

    public function getDateStart()
    {
        return $this->dateStart;
    }

    public function setDateStart($dateStart)
    {
        $this->dateStart = $dateStart;
    }

    public function getStatus()
    {
        return $this->status;
    }

    public function setStatus($status)
    {
        $this->status = $status;
    }

    public function getMovie(){

        $result = $this->runQuery("SELECT * FROM movies WHERE id = $this->id");
        return mysqli_fetch_assoc($result);
    }

    public function getMovies(){

        $result = $this->runQuery("SELECT id, title, url_img FROM movies");
        return $result;

    }


}
