<?php
require "baseController.php";
require 'model/user.php';
use Controller\baseController;

class userController extends  baseController{

    public $title = 'Promocinal';
    public $default_action = 'profile';
    public $private_actions = array('profile');

    public function loginAction()
    {

        $user = new user();
        $username = $_POST['user'];
        $password = $_POST['pass'];

        $user->connect();
        $user->setUsername($username);
        $data = $user->find();

        if ($data) {

            if($data['password'] == $password){

                $this->setSession( $user->login());
                $this->redirect('?controller=user&action=profile');
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
            $this->redirect('?controller=index&action=signup');
            exit;
        }
    }

    public function logoutAction()
    {
        session_unset();
        session_destroy();

        $this->redirect('/');
        exit;
    }

    public function profileAction(){


//        var_dump($this->getUser());
//        var_dump(in_array($this->default_action, $this->private_actions));
//        var_dump($this->default_action);
//        var_dump(isset($_GET['action']));
//        var_dump($this->private_actions);
//        die('get');
        $this->title = 'Profile';
        return array('profile',array(
        ));
    }

    public function signupAction(){

        $user = new user();

        $username = $_POST['user'];
        $pass = $_POST['pass'];
        $email = $_POST['email'];
        $name = $_POST['name'];
        $last = $_POST['last'];
        $card = $_POST['card'];

        $user->connection();
        $user->setUsername($username);
        $user->setPassword($pass);
        $user->setEmail($email);
        $user->setName($name);
        $user->setLast($last);
        $user->setCard($card);
        $result = $user->find();
        if(!$result){

            $insert = $user->signup();
            if(!$insert){

                echo "<script language= 'javascript'>";
                echo "alert('error data');";
                echo "</script>";
                header("refresh:0; url=/index.php?controller=index&action=signup");
                exit;
            }
            $user->insertRoleUser($user->find()['id']);
            $this->setSession( $user->login());
            header("location:/");
            exit;

        }else{

            echo "<script language= 'javascript'>";
            echo "alert('exist data');";
            echo "</script>";
            header("refresh:0; url=/index.php?controller=index&action=signup");
            exit;
        }
    }
}

$manager = new userController();
$manager->render();
