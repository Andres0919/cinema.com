<?php
require "baseController.php";
require 'model/user.php';
require 'model/movie.php';
use Controller\baseController;

class userController extends  baseController{

    public $default_action = 'profile';
    public $private_actions = array('profile', 'reservations');

    public function loginAction()
    {

        $user = new user();
        $username = $_POST['user'];
        $password = $_POST['pass'];
        if(!isset($username) && !isset($password)) $this->redirect('/');

        $user->setUsername($username);
        $data = $user->findUser();
        if ($data) {

            if($data['password'] == $password){

                $this->setSessionUser($user->login());
                $this->redirect('controller=user&action=profile');
                exit;
            }else{
                $this->redirect('/');
                exit;
            }
        }else {
            $this->redirect('/');
            exit;
        }
    }

    public function logoutAction(){

        session_unset();
        session_destroy();
        $this->redirect('/');
        exit;
    }

    public function profileAction(){

        $this->setTitle('Profile');
        return array('profile');
    }

    public function reservationsAction(){

        $this->setTitle('Reservations');
        return array('reservations');
    }

    public function signupAction(){

        $user = new user();
        $username = $_POST['user'];
        $pass = $_POST['pass'];
        $email = $_POST['email'];
        $name = $_POST['name'];
        $last = $_POST['last'];

        if(!isset($username) || !isset($pass) || !isset($email) || !isset($name)) $this->redirect("/");

        $user->setUsername($username);
        $user->setPassword($pass);
        $user->setEmail($email);
        $user->setName($name);
        $user->setLast($last);

        if(!$user->findUser()){

            if(!$user->signup()){

                $this->redirect('?controller=index&action=signup');
                exit;
            }
            $user->insertRoleUser($user->findUser()['id']);
            $this->setSessionUser( $user->login());
            $this->redirect("controller=user&action=profile");
            exit;

        }else{

            $this->redirect('controller=index&action=signup');
            exit;
        }
    }
}
$manager = new userController();
$manager->render();
