<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sign Up</title>
</head>
<body>
    <?php include("header.php");?>

    <div class="jumbotron container">
        <div class="span6  text-center ">
            <div class="area ">
                <form class="form-horizontal text-info" method="post" action="checkSignUp.php">
                    <div class="heading">
                        <h4 class="form-heading">Sign Up</h4>
                    </div>

                    <div class="control-group">
                        <label class="control-label" for="inputFirst">First Name</label>
                        <div class="controls">
                            <input name="name" type="text" required>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="inputLast">Last Name</label>
                        <div class="controls">
                            <input name="last" type="text">
                        </div>
                    </div>

                    <div class="control-group">
                        <label class="control-label" for="inputEmail">Email</label>
                        <div class="controls">
                            <input name="email" placeholder="example@mail.com" type="email" required>
                        </div>
                    </div>

                    <div class="control-group">
                        <label class="control-label" for="inputUser">Username</label>
                        <div class="controls">
                            <input name="user" type="text" required>
                        </div>
                    </div>

                    <div class="control-group">
                        <label class="control-label" for="inputPassword">Password</label>
                        <div class="controls">
                            <input name="pass" placeholder="Min. 8 Characters" type="password" required>
                        </div>
                    </div>

                    <div class="control-group">
                        <label class="control-label" for="inputCard">Card</label>
                        <div class="controls">
                            <input name="card"  type="number">
                        </div>
                    </div>

                    <div class="control-group">
                        <div class="controls">
                            <label class="checkbox"><input type="checkbox" required>I agree all your <a href="#">Terms of Services</a></label>
                            <button class="btn btn-success" type="submit">SIGN UP</button>
                            <a class="btn btn-default" href="index.php">CANCEL</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <?php include("footer.php");?>
</body>
</html>
