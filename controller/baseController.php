<?php
/**
 * Created by PhpStorm.
 * User: andres
 * Date: 5/3/17
 * Time: 3:49 PM
 */
namespace Controller;

class baseController
{
    public $title = 'Default';
    public $default_action = 'index';
    public $private_actions = [];

    function __construct(){

        if(isset($_GET['action']))  $this->default_action = $_GET['action'];


    }

    public function startSession(){

         session_start();
    }

    public function getSession(){


            if (isset($_SESSION)) {
                return $_SESSION;
            }
        return false;

    }

    public function setSessionUser($user){

        $_SESSION['user'] = $user;

    }

    public function getTitle()
    {
        return $this->title;
    }


    public function setTitle($title)
    {
        $this->title = $title;
    }

    public function actionValidate(){

        if(in_array($this->default_action, $this->private_actions) && !$this->getUser())  $this->redirect("/");
    }

    public function header(){

        $this->actionValidate();
        if($this->actionExist() && $this->viewExist()) include('views/layout/header.php');

    }

    public function containerMenu(){

        include('views/layout/containerMenu.php');
    }

    public function footer(){

        include("views/layout/footer.php");
    }

    public function getAction(){

        $actionMethod = $this->default_action.'Action';
        if(!$this->actionExist()) die('the method ' . $actionMethod . ' no exist');
        $view = $this->$actionMethod();
        if(!isset($view[0])) die('not view defined for action '.$actionMethod);
        $parameters = isset($view[1])?$view[1]:[];
        $path = 'views/'.$view[0].'View.php';
        if(!$this->viewExist()) die('view ' . $path . ' no exist');
        include $path;
    }

    public function actionExist(){

        $actionMethod = $this->default_action.'Action';
        if(!method_exists($this ,$actionMethod))return false;
        return true;

    }

    public function viewExist(){

        $actionMethod = $this->default_action.'Action';
        $view = $this->$actionMethod();
        $path = 'views/'.$view[0].'View.php';
        if(!file_exists($path)) return false;
        return true;
    }

    public function getUser(){

        $session = $this->getSession();

        if(isset($session['user'])) return $session['user'];
        return false;
    }

    public function redirect($url){

        header("refresh:0; url=/index.php" . $url);
        exit;
    }

    public function getCookietSession(){

        if (isset($_COOKIE)) {
            return $_COOKIE;
        }
        return false;
    }

    public function setCookieSession(){

        setcookie($this->getUser()['username'], date("F j, Y, g:i a"));
    }

    public  function getLastSession(){

        $cookie = $this->getCookietSession();

        if(isset($cookie[$this->getUser()['username']])) return $cookie[$this->getUser()['username']];
        return false;
    }


    public function render(){

        $this->startSession();
        $this->header();
        $this->getAction();
        $this->footer();
    }
}
?>