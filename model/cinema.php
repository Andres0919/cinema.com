<?php
require_once 'libs/cinemadb.php';
use Libs\cinemadb;

class cinema extends cinemadb
{

    private $name;
    private $address;
    private $city;
    private $status;
    private $general2D;
    private $general3D;
    private $preferencial2D;
    private $preferencial3D;

    public function getCity()
    {
        return $this->city;
    }

    public function setCity($city)
    {
        $this->city = $city;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getAddress()
    {
        return $this->address;
    }

    public function setAddress($address)
    {
        $this->address = $address;
    }

    public function getStatus()
    {
        return $this->status;
    }

    public function setStatus($status)
    {
        $this->status = $status;
    }

    public function getGeneral2D()
    {
        return $this->general2D;
    }

    public function setGeneral2D($general2D)
    {
        $this->general2D = $general2D;
    }

    public function getGeneral3D()
    {
        return $this->general3D;
    }

    public function setGeneral3D($general3D)
    {
        $this->general3D = $general3D;
    }

    public function getPreferencial2D()
    {
        return $this->preferencial2D;
    }

    public function setPreferencial2D($preferencial2D)
    {
        $this->preferencial2D = $preferencial2D;
    }

    public function getPreferencial3D()
    {
        return $this->preferencial3D;
    }

    public function setPreferencial3D($preferencial3D)
    {
        $this->preferencial3D = $preferencial3D;
    }

    public function getCinema(){

        $result = $this->runQuery("SELECT * FROM cinema ");
        return $result;

    }

    public function insertCinema(){

        $result = $this->runQuery("INSERT INTO cinema( name, address, city, status, 2Dgeneral, 3Dgeneral, 2Dpreferencial, 3Dpreferencial) VALUES ('$this->name', '$this->address', '$this->city', '$this->status', '$this->general2D', '$this->general3D', '$this->preferencial2D', '$this->preferencial3D')");
        return $result;
    }
}
