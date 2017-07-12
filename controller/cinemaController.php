<?php
require "baseController.php";
require "model/cinema.php";
use Controller\baseController;

class cinemaController extends  baseController{

    public $title = 'Cinema';
    public $default_action = 'cinema';
    public $private_actions = array('cinema','edit');


    public function cinemaAction()
    {
        $cinema = new cinema();
        return array('cinema', $cinema->getCinema());
    }

    public function editAction(){

        $this->setTitle('Cinema Edit');
        return array('editCinema');
    }

    public function setEditAction(){

        $cinema = new cinema();

        $name = $_POST['name'];
        $address = $_POST['address'];
        $city = $_POST['city'];
        $status = $_POST['status'];
        $general2D = $_POST['general2D'];
        $general3D = $_POST['general3D'];
        $preferencial2D = $_POST['preferencial2D'];
        $preferencial3D = $_POST['preferencial3D'];

        $cinema->setName($name);
        $cinema->setAddress($address);
        $cinema->setCity($city);
        $cinema->setStatus($status);
        $cinema->setGeneral2D($general2D);
        $cinema->setGeneral3D($general3D);
        $cinema->setPreferencial2D($preferencial2D);
        $cinema->setPreferencial3D($preferencial3D);

        if(!$cinema->insertCinema()){

            echo "<script language= 'javascript'>";
            echo "alert('error data');";
            echo "</script>";
            $this->redirect("?controller=cinema&action=edit");
        }

        echo "<script language= 'javascript'>";
        echo "alert('insert successful!');";
        echo "</script>";
        $this->redirect("?controller=cinema&action=edit");

    }

}

$manager = new cinemaController();
$manager->render();
