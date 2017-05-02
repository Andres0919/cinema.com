<?php

require('libs/cinemadb.php');
try {
    $user = $_POST['user'];
    $pass = $_POST['pass'];
    $email = $_POST['email'];
    $name = $_POST['name'];
    $last = $_POST['last'];
    $card = $_POST['card'];
    $db = new \cinemadb\cinemadb();
    $db->connect();
    $result = $db->runQuery("SELECT * FROM users WHERE username='$user'");

    if (mysqli_num_rows($result) == 0) {

        $insert = $db->runQuery("INSERT INTO users( username, password, name, last_name, card, email) VALUES ('$user', '$pass', '$name', '$last', '$card', '$email')");

        if($insert){

            $data = mysqli_fetch_array($db->runQuery("SELECT * FROM users WHERE username='$user'"), MYSQLI_BOTH);

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
            echo "alert('Error en los datos');";
            echo "</script>";
            header("refresh:0; url=login.php");
        };


    }else {

        echo "<script language= 'javascript'>";
        echo "alert('Ya hay registros con esos datos');";
        echo "</script>";
        header("refresh:0; url=login.php");
    }
} catch (Exception $e) {
    die("Error: " . $e->getMessage());
}


?>
