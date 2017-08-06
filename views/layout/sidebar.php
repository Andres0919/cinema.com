<div class="profile-sidebar col-md-3">
    <!-- PORTLET MAIN -->
    <div class="portlet light profile-sidebar-portlet">
        <!-- SIDEBAR USERPIC -->
        <div class="profile-userpic">
            <img src="../../img/media.ico" class="img-responsive" alt=""> </div>
        <!-- END SIDEBAR USERPIC -->
        <!-- SIDEBAR USER TITLE -->
        <div class="profile-usertitle">
            <div class="profile-usertitle-name text-capitalize"><?php echo $this->getsession()['user']['name'] . " " . $this->getsession()['user']['last_name'] ?> </div>
            <div class="profile-usertitle-job"> <?php echo $this->getUser()['description']?> </div>
        </div>
        <!-- END SIDEBAR USER TITLE -->
        <!-- SIDEBAR MENU -->
        <div class="profile-usermenu">
            <ul class="nav">
                <li class="active">
                    <a href="/index.php?controller=user&action=profile">
                    <i class="glyphicon glyphicon-user"></i> Profile </a>
                </li>
                <li>
                    <a href="/index.php?controller=user&action=reservations">
                    <i class="glyphicon glyphicon-star"></i> Reservations </a>
                </li>
                <li>
                    <a href="/index.php?controller=user&action=logout">
                    <i class="glyphicon glyphicon-log-out"></i> Log Out </a>
                </li>
            </ul>
        </div>
        <!-- END MENU -->
    </div>
    <!-- END PORTLET MAIN -->
</div>
<!-- END BEGIN PROFILE SIDEBAR -->