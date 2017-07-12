<?php
require "baseController.php";
require 'model/user.php';
require 'model/movie.php';
use Controller\baseController;

class userController extends  baseController{

    public $title = 'Promocinal';
    public $default_action = 'profile';
    public $private_actions = array('profile', 'reservations');

    public function loginAction()
    {

        $user = new user();
        $username = $_POST['user'];
        $password = $_POST['pass'];

        $user->setUsername($username);
        $data = $user->findUser();

        if ($data) {

            if($data['password'] == $password){

                $this->setSessionUser($user->login());
                $this->redirect('controller=user&action=profile');
                exit;
            }else{

                echo "<script language= 'javascript'>";
                echo "alert('incorrect password');";
                echo "</script>";
                $this->redirect('/');
            };
        }else {

            echo "<script language= 'javascript'>";
            echo "alert('incorrect username ');";
            echo "</script>";
            $this->redirect('controller=index&action=signup');
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
        $movie = new movie();
        return array('profile');
    }

    public function reservationsAction(){

        $this->setTitle('Reservations');
        return array('reservations');
    }

    public function editAction(){

        $this->setTitle('User Edit');
        return array('editUser');
    }

    public function signupAction(){

        $user = new user();
        $username = $_POST['user'];
        $pass = $_POST['pass'];
        $email = $_POST['email'];
        $name = $_POST['name'];
        $last = $_POST['last'];
        $card = $_POST['card'];

        $user->setUsername($username);
        $user->setPassword($pass);
        $user->setEmail($email);
        $user->setName($name);
        $user->setLast($last);
        $user->setCard($card);

        if(!$user->findUser()){

            if(!$user->signup()){

                echo "<script language= 'javascript'>";
                echo "alert('error data');";
                echo "</script>";
                $this->redirect('?controller=index&action=signup');
                exit;
            }
            $user->insertRoleUser($user->findUser()['id']);
            $this->setSessionUser( $user->login());
            $this->redirect("controller=user&action=profile");
            exit;

        }else{

            echo "<script language= 'javascript'>";
            echo "alert('exist data our database');";
            echo "</script>";
            $this->redirect('controller=index&action=signup');
            exit;
        }
    }

    public function clientsAction(){

        $this->setTitle('Clients');
        $user = new user();
        return array('config',$user->getUsers());
    }
}

$manager = new userController();
$manager->render();
