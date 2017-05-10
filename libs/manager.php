<?php
/**
 * Created by PhpStorm.
 * User: andres
 * Date: 5/3/17
 * Time: 3:49 PM
 */

class Manager
{
    private $title = 'Default';
    private $content;


    /**
     * @return mixed
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * @param mixed $content
     */
    public function setContent($content)
    {
        $this->content = $content;
    }


    function __construct(){
        $this->setContent("default cotent ");

    }

    public function startSession(){

         session_start();

    }

    public function checkSession(){

        if (!isset($_SESSION['usuario'])) {

            echo "<script language = 'javascript'>";
            echo "alert('la sesion está cerrada')";
            echo "</script>";
            header("refresh:0; url= index.php");
        }
    }


    public function getTitle()
    {
        return $this->title;
    }


    public function setTitle($title)
    {
        $this->title = $title;
    }

    public function header(){

        include('header.php');

    }

    public function footer(){

        include("footer.php");
    }


    public function render(){

        $this->startSession();
        $this->header();
        $this->getContent();
        $this->footer();
    }
}
?>