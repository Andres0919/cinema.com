<?php

require('../model/user.php');
$user = new user();
$username = $_POST['user'];
$password = $_POST['pass'];

$user->connect();
$user->setUsername($username);

$data = $user->login();

if ($data) {


   if($data['password'] == $password){

     session_start();//inicia la sesion
     $_SESSION['user'] = $data;
     $user = null;

     header("location:../views/");

     }else{

        echo "<script language= 'javascript'>";
        echo "alert('Contraseña Incorrecta');";
        echo "</script>";
        $user = null;
        header("refresh:0; url=../views/");
     };
    }else {

      echo "<script language= 'javascript'>";
      echo "alert('No hay registros con esos datos');";
      echo "</script>";
      $user = null;
      header("refresh:0; url=../views/signup.php");
 }



 ?>