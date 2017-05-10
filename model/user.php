<?php
require('../libs/cinemadb.php');


class user extends cinemadb
{

    private $username;
    private $password;
    private $name;
    private $last;
    private $card;
    private $email;
    private $con;


    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @param mixed $last
     */
    public function setLast($last)
    {
        $this->last = $last;
    }

    /**
     * @param mixed $card
     */
    public function setCard($card)
    {
        $this->card = $card;
    }

    /**
     * @param mixed $email
     */
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

    public function connection(){

      $this->con =  $this->connect();
    }

    public function login(){

        $result = $this->runQuery("SELECT * FROM users WHERE username='$this->username'");
        return $result;

    }

    public function logout(){

        session_start();
        session_unset();
        session_destroy();
    }

    public function signup(){

        $result = $this->runQuery("INSERT INTO users( username, password, name, last_name, card, email) VALUES ('$this->username', '$this->password', '$this->name', '$this->last', '$this->card', '$this->email')");
        return $result;
    }

    public function insertRoleUser($id){

        $result = $this->runQuery("INSERT INTO permissions( users_id, roles_id) VALUES ($id, 1)");
        return $result;
    }

    public function roleUser($idUser){

        $result = $this->runQuery("SELECT * FROM permissions WHERE users_id=$idUser");
        return $result;
    }

}
