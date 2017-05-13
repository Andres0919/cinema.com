<?php
require "../controller/manager.php";
use controller\Manager;
class Profile extends Manager
{
    public function getTitle(){

        return "Profile";
    }

    public function getContent(){
?>
    <?php if (isset($_SESSION['user'])) { ?>
            <div class="container jumbotron">
                <H1>This is profile</H1>

                <h2>Welcome Mr <?php echo $_SESSION['user']['username'] ?> </h2>

                <p>your id is : <?php echo $_SESSION['user']['id'] ?> </p><br/>

                <p>your password is : <?php echo $_SESSION['user']['password'] ?></p><br/>

                <p>your name is : <?php echo $_SESSION['user']['name'] ?></p><br/>

                <p>your last name is : <?php echo $_SESSION['user']['last_name'] ?></p><br/>

                <p>your card is : <?php echo $_SESSION['user']['card'] ?></p><br/>

                <p>your age is : <?php echo $_SESSION['user']['age'] ?></p><br/>

                <p>your email is : <?php echo $_SESSION['user']['email'] ?></p><br/>

                <p>and your role is : <?php echo $_SESSION['user']['roles_id'] ?></p><br/>
            </div>
            <?php
        }
    }
}
$manager = new Profile();
$manager->render();

?>
