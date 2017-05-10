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
$user->setUsername($username);
$user->setPassword($pass);
$user->setEmail($email);
$user->setName($name);
$user->setLast($last);
$user->setCard($card);
$result = $user->login();

if(mysqli_num_rows($result) == 0){

    $insert = $user->signup();
    if(!$insert){

        echo "<script language= 'javascript'>";
        echo "alert('Error en los datos');";
        echo "</script>";
        header("refresh:0; url=../views/signup.php");
    }

    $result = $user->find();
    $rolUser = $user->insertRoleUser($result['id']);
    $data =  $user->login();
    session_start();//inicia la sesion
    $_SESSION['user'] = $data;
    $user = null;

    header("location:../views/");

}else{

    echo "<script language= 'javascript'>";
    echo "alert('Ya hay registros con esos datos');";
    echo "</script>";
    header("refresh:0; url=../views/signup.php");
}
