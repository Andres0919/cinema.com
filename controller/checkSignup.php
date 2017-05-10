<?php
require('../model/user.php');
$user = new user();

$username = $_POST['user'];
$pass = $_POST['pass'];
$email = $_POST['email'];
$name = $_POST['name'];
$last = $_POST['last'];
$card = $_POST['card'];

$user->connection();
$result = $user->login();

if(mysqli_num_rows($result) == 0){

    $insert = $user->signup();

    if($insert){

        $data = mysqli_fetch_array($insert, MYSQLI_BOTH);

        $rolUser = $user->roleUser($data['id']);

         session_start();//inicia la sesion
         $_SESSION['user'] = $data;
         $_SESSION['user']['rol'];
         $user = null;

         header("location:../views/");

    }else{

        echo "<script language= 'javascript'>";
        echo "alert('Error en los datos');";
        echo "</script>";
        header("refresh:0; url=../views/");
    }
}else{

    echo "<script language= 'javascript'>";
    echo "alert('Ya hay registros con esos datos');";
    echo "</script>";
    header("refresh:0; url=../views/");
}
