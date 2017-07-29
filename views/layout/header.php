<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="shortcut icon" href="img/media.ico"/>
    <title><?php echo $this->getTitle(); ?></title>

      <!-- BEGIN GLOBAL MANDATORY STYLES -->
      <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />
      <link href="css/simple-line-icons.min.css" rel="stylesheet" type="text/css" />
      <link href="css/bootstrap.min.css" rel="stylesheet">
      <link href="css/bootstrap-switch.min.css" rel="stylesheet" type="text/css" />
      <!-- END GLOBAL MANDATORY STYLES -->
      <!-- BEGIN PAGE LEVEL PLUGINS -->
      <link href="css/cubeportfolio.min.css" rel="stylesheet" type="text/css" />
      <link href="css/bootstrap-fileinput.css" rel="stylesheet" type="text/css" />
      <!-- END PAGE LEVEL PLUGINS -->
      <!-- BEGIN THEME GLOBAL STYLES -->
      <link href="css/components.min.css" rel="stylesheet" id="style_components" type="text/css" />
      <link href="css/plugins.min.css" rel="stylesheet" type="text/css" />
      <!-- END THEME GLOBAL STYLES -->
      <!-- BEGIN PAGE LEVEL STYLES -->
      <link href="css/portfolio.min.css" rel="stylesheet" type="text/css" />
      <link href="css/profile.min.css" rel="stylesheet" type="text/css" />
      <!-- END PAGE LEVEL STYLES -->
      <!-- BEGIN THEME LAYOUT STYLES -->
      <link href="css/layout.min.css" rel="stylesheet" type="text/css" />
      <!-- END THEME LAYOUT STYLES -->
      <!-- END HEAD -->
      <link href="css/customer.css" rel="stylesheet">
  </head>
  <body class="page-container-bg-solid">
  <div class="page-wrapper-row">
      <div class="page-wrapper-top">
          <!-- BEGIN HEADER -->
          <div class="page-header">
              <!-- BEGIN HEADER TOP -->
              <div class="page-header-top">
                  <div class="container">
                      <!-- BEGIN LOGO -->
                      <div class="page-logo">
                          <a href="index.php?/">
                              <img src="img/media.ico" alt="logo" class="logo-default">
                      </div>
                      <!-- END LOGO -->
                      <!-- BEGIN RESPONSIVE MENU TOGGLER -->
                      <a href="javascript:;" class="menu-toggler"></a>
                      <!-- END RESPONSIVE MENU TOGGLER -->
                      <!-- BEGIN TOP NAVIGATION MENU -->
                      <div class="top-menu">
                          <?php if(!$this->getUser()){?>
                              <form class="navbar-form navbar-right" action="/index.php?controller=user&action=login" method="POST">
                                  <div class="form-group">
                                      <input type="text" placeholder="Username" class="form-control" name="user" REQUIRED>
                                  </div>
                                  <div class="form-group">
                                      <input type="password" placeholder="Password" class="form-control" name="pass" REQUIRED>
                                  </div>
                                  <input type="submit" class="btn btn-success" value="LOG IN" name="SignIn">
                                  <a href="/index.php?controller=index&action=signup" class="btn btn-default">SIGN UP</a>
                              </form>
                          <?php }else{?>
                          <ul class="nav navbar-nav pull-right">
                              <li class="droddown dropdown-separator">
                                  <span class="separator"></span>
                              </li>
                              <!-- BEGIN USER LOGIN DROPDOWN -->
                              <li class="dropdown dropdown-user">
                                  <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                                      <img alt="" class="img-circle" src="img/media.ico">
                                      <span class="username username-hide-mobile">Admin</span>
                                  </a>
                                  <ul class="dropdown-menu dropdown-menu-default">
                                      <li>
                                          <a href="index.php?controller=user&action=profile">
                                              <i class="fa fa-user"></i> My Profile </a>
                                      </li>
                                      <li>
                                          <a href="#">
                                              <i class="icon-calendar"></i> My Calendar </a>
                                      </li>
                                      <li>
                                          <a href="#">
                                              <i class="icon-envelope-open"></i> My Inbox
                                              <span class="badge badge-danger"> 3 </span>
                                          </a>
                                      </li>
                                      <li class="divider"> </li>
                                      <li>
                                          <a href="/index.php?controller=user&action=logout">
                                              <i class="fa fa-power-off"></i> Log Out </a>
                                      </li>
                                  </ul>
                              </li>
                              <!-- END USER LOGIN DROPDOWN -->
                          </ul>
                          <?php }?>
                      </div>
                      <!-- END TOP NAVIGATION MENU -->
                  </div>
              </div>
              <!-- END HEADER TOP -->
              <!-- BEGIN HEADER MENU -->
              <div class="page-header-menu">
                  <div class="container">
                      <!-- BEGIN MEGA MENU -->
                      <!-- DOC: Apply "hor-menu-light" class after the "hor-menu" class below to have a horizontal menu with white background -->
                      <!-- DOC: Remove data-hover="dropdown" and data-close-others="true" attributes below to disable the dropdown opening on mouse hover -->
                      <div class="hor-menu">
                          <ul class="nav navbar-nav">
                              <li aria-haspopup="true" class="menu-dropdown classic-menu-dropdown ">
                                  <a href="index.php?/" class="color-nav"> Home
                                      <span class="arrow"></span>
                                  </a>
                              </li>
                              <li aria-haspopup="true" class="menu-dropdown mega-menu-dropdown  ">
                                  <a href="index.php?controller=movie&action=movies" class="color-nav"> Movies
                                      <span class="arrow"></span>
                                  </a>
                              </li>
                              <li aria-haspopup="true" class="menu-dropdown classic-menu-dropdown ">
                                  <a href="index.php?controller=cinema&action=cinema" class="color-nav"> Find Theaters
                                      <span class="arrow"></span>
                                  </a>
                              </li>
                              <li aria-haspopup="true" class="menu-dropdown mega-menu-dropdown  mega-menu-full">
                                  <a href="#" class="color-nav"> Contact
                                      <span class="arrow"></span>
                                  </a>
                              </li>
                          </ul>
                      </div>
                      <!-- END MEGA MENU -->
                  </div>
              </div>
              <!-- END HEADER MENU -->
          </div>
          <!-- END HEADER -->
      </div>
  </div>

