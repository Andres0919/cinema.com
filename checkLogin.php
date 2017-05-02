<?php

  require('libs/cinemadb.php');
try {
    $user = $_POST['user'];
    $pass = $_POST['pass'];
    $db = new \cinemadb\cinemadb();
    $db->connect();
    $result = $db->runQuery("SELECT * FROM users WHERE username='$user'");

    if (mysqli_num_rows($result) != 0) {
        $data = mysqli_fetch_array($result, MYSQLI_BOTH);

        if($data['password'] == $pass){

            session_start();//inicia la sesion
            $_SESSION['id'] = $data['id'];
            $_SESSION['user'] = $data['username'];
            $_SESSION['pass'] = $data['password'];
            $_SESSION['name'] = $data['name'];
            $_SESSION['last'] = $data['last_name'];
            $_SESSION['card'] = $data['card'];
            $_SESSION['age'] = $data['age'];
            $_SESSION['email'] = $data['email'];

            header("location:index.php");

        }else{

            echo "<script language= 'javascript'>";
            echo "alert('Contraseña Incorrecta');";
            echo "</script>";
            header("refresh:0; url=index.php");
        };


    }else {

        echo "<script language= 'javascript'>";
        echo "alert('No hay registros con esos datos');";
        echo "</script>";
        header("refresh:0; url=signUp.php");
    }
  } catch (Exception $e) {
  die("Error: " . $e->getMessage());
}


 ?>
