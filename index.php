<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Promocinal</title>

</head>
<body>
    <?php include("header.php");?>
    <div class="container jumbotron">


    <?php
    echo "<H1>This is HOME</H1>";


    if(isset($_SESSION['user'])){

        echo "<h2>Welcome Mr. " . $_SESSION['user'] . "</h2><br />";
        echo "<p>your id is :" . $_SESSION['id'] . "</p><br />";
        echo "<p>your password is :" . $_SESSION['pass'] . "</p><br />";
        echo "<p>your name is :" . $_SESSION['name'] . "</p><br />";
        echo "<p>your last name is :" . $_SESSION['last'] . "</p><br />";
        echo "<p>your card is :" . $_SESSION['card'] . "</p><br />";
        echo "<p>your age is :" . $_SESSION['age'] . "</p><br />";
        echo "<p>and your email is :" . $_SESSION['email'] . "</p><br />";


    }
    ?>
    </div>
    <?php include("footer.php"); ?>
</body>
</html>


<?php


    //include('libs/cinemadb.php');

    //$db = new \cinemadb\cinemadb();
    //$db->connect();

    //$resultado = $db->runQuery("SELECT * FROM users");

    //while($consulta = mysqli_fetch_array($resultado)){

      //echo "Username: " . $consulta['id'] . "<br />";
    //}

?>
