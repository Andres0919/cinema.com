<?php require("../libs/manager.php");
    $manager = new Manager();
    $manager->setTitle('Promocional');
    $manager->startSession();
    $manager->header();

?>
<div class="container jumbotron">
     <H1>This is HOME</H1>
     <?php if (isset($_SESSION['user'])) { ?>

        <h2>Welcome Mr <?php echo $_SESSION['user']['username'] ?> </h2>
        <p>your id is : <?php echo $_SESSION['user']['id'] ?> </p><br/>
        <p>your password is : <?php echo $_SESSION['user']['password'] ?></p><br/>
        <p>your name is : <?php echo $_SESSION['user']['name'] ?></p><br/>
        <p>your last name is : <?php echo $_SESSION['user']['last_name'] ?></p><br/>
        <p>your card is : <?php echo $_SESSION['user']['card'] ?></p><br/>
        <p>your age is : <?php echo $_SESSION['user']['age'] ?></p><br/>
        <p>your email is : <?php echo $_SESSION['user']['email'] ?></p><br/>
        <p>and your role is : <?php switch($_SESSION['user']['role']){
                case 1: echo "Client";
                break;
                case 2: echo "Admin";
                break;
                case 3: echo "Employer";
                break;
            }
              ?></p><br/>


     <?php
     }?>
</div>
<?php
    $manager->footer();
?>