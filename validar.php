<?php

session_start();
if (!isset($_SESSION['usuario'])) {

    echo "<script language = 'javascript'>";
    echo "alert('la sesion está cerrada')";
    echo "</script>";
    header("refresh:0; url= index.php");
}
?>
