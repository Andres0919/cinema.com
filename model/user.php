<?php
require_once 'libs/cinemadb.php';
use Libs\cinemadb;

class user extends cinemadb
{

    private $username;
    private $password;
    private $name;
    private $last;
    private $card;
    private $email;
    private $rol = 1;


    function __construct() {

        $this->connect();
    }

    public function setName($name)
    {
        $this->name = $name;
    }


    public function setLast($last)
    {
        $this->last = $last;
    }


    public function setCard($card)
    {
        $this->card = $card;
    }


    public function setEmail($email)
    {
        $this->email = $email;
    }



    public function setUsername($username)
    {
        $this->username = $username;
    }

    public function setPassword($password)
    {
        $this->password = $password;
    }

    public function login(){

        $result = $this->runQuery("SELECT * FROM users u INNER JOIN roles r ON u.roles_id = r.id WHERE  u.username='$this->username'");
        return mysqli_fetch_array($result, MYSQLI_BOTH);

    }

    public function findUser(){

        $result = $this->runQuery("SELECT * FROM users WHERE username='$this->username'");
        return mysqli_fetch_array($result, MYSQLI_BOTH);

    }

    public function signup(){

        $result = $this->runQuery("INSERT INTO users( username, password, name, last_name, card, email) VALUES ('$this->username', '$this->password', '$this->name', '$this->last', '$this->card', '$this->email')");
        return $result;
    }

}
