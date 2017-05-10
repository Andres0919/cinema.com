<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title><?php echo $this->getTitle(); ?></title>
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link rel="shortcut icon" href="../img/media.ico"/>
  </head>
  <body>
    <nav class="navbar navbar-inverse bs-dark">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="index.php">Promocinal</a>
      </div>
      <div id="navbar" class="navbar-collapse collapse">
        <?php if(!isset($_SESSION['user'])){?>
          <form class="navbar-form navbar-right" action="../controller/checkLogin.php" method="POST">
            <div class="form-group">
              <input type="text" placeholder="Username" class="form-control" name="user" REQUIRED>
            </div>
            <div class="form-group">
              <input type="password" placeholder="Password" class="form-control" name="pass" REQUIRED>
            </div>
            <input type="submit" class="btn btn-success" value="LOG IN" name="SignIn">
            <a href="signup.php" class="btn btn-default">SIGN UP</a>
          </form>
        <?php }else{?>
      </div><!--/.navbar-collapse -->
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
          <li class="active"><a href="#">Home<span class="sr-only">(current)</span></a></li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Explores <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="#">Cinema</a></li>
              <li><a href="#">Premiere</a></li>
              <li><a href="#">Billboard</a></li>
              <li role="separator" class="divider"></li>
              <li><a href="#">Gallery</a></li>
            </ul>
          </li>
        </ul>
        <form class="navbar-form navbar-left form-horizontal" role="search">
          <div class="input-group">
            <input type="text" class="search-box" placeholder="Search" required>
            <button type="submit" class="btn"><span class="glyphicon glyphicon-search"></span></button>
          </div>
        </form>
        <ul class="nav navbar-nav navbar-right">
          <li class="dropdown">
            <a href="#" class="dropdown-toggle navbar-img" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
              <?php echo $_SESSION['user']['name']; ?>
              <img src="http://placehold.it/150x150" class="img-circle" alt="Profile Image" />
            </a>
            <ul class="dropdown-menu">
              <li><a href="profile.php">Profile</a></li>
              <li><a href="#">Reservations</a></li>
              <li><a href="#">Followers</a></li>
              <li role="separator" class="divider"></li>
              <li><a href="../controller/logout.php">Log Out</a></li>
            </ul>
          </li>
        </ul>
      </div>
      <?php }?>
    </nav>

  <script type="text/javascript" src="../js/jquery.min.js"></script>
  <script src="../js/bootstrap.min.js"></script>
  </body>
</html>
