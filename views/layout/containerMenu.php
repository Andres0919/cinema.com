<div class="col-sm-2 col-md-2">
    <div class="panel-group" id="accordion">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne"><span class="glyphicon glyphicon-user">
                </span>ACCOUNT</a>
                </h4>
            </div>
            <div id="collapseOne" class="panel-collapse collapse in">
                <div class="panel-body">
                    <table class="table">
                        <tr>
                            <td class="active">
                                <span class="glyphicon glyphicon-file text-success"></span><a href="/index.php?controller=user&action=profile">Profile</a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <span class="glyphicon glyphicon-flash text-success"></span><a href="/index.php?controller=movie&action=movie">Reservations</a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <span class="glyphicon glyphicon-edit text-success"></span><a href="/index.php?controller=user&action=edit">Edit</a>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo"><span class="glyphicon glyphicon-film">
                </span>MOVIES</a>
                </h4>
            </div>
            <div id="collapseTwo" class="panel-collapse collapse">
                <div class="panel-body">
                    <table class="table">
                        <tr>
                            <td>
                                <span class="glyphicon glyphicon-pushpin text-success"></span><a href="/index.php?controller=movie&action=billboard">Billboard</a> <span class="label label-success">New!</span>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <span class="glyphicon glyphicon-calendar text-success"></span><a href="/index.php?controller=movie&action=schedule">Schedule</a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <span class="glyphicon glyphicon-check text-success"></span><a href="/index.php?controller=movie&action=reserve">Reserve</a>
                            </td>
                        </tr>
                        <?php if($this->getUser()['roles_id'] != 1){?>
                        <tr>
                            <td>
                                <span class="glyphicon glyphicon-cog text-success"></span><a href="/index.php?controller=movie&action=config">Config</a>
                            </td>
                        </tr>
                        <?php } ?>
                    </table>
                </div>
            </div>
        </div>
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree"><span class="glyphicon glyphicon-folder-close ">
                </span>CINEMA</a>
                </h4>
            </div>
            <div id="collapseThree" class="panel-collapse collapse">
                <div class="panel-body">
                    <table class="table">
                        <tr>
                            <td>
                                <span class="glyphicon glyphicon-info-sign text-success"></span><a href="/index.php?controller=cinema&action=cinema">Cinemas</a>
                            </td>
                        </tr>
                        <?php if($this->getUser()['roles_id'] != 1){?>
                        <tr>
                            <td>
                                <span class="glyphicon glyphicon-edit text-success"></span><a href="/index.php?controller=cinema&action=edit">Edit</a>
                            </td>
                        </tr>
                        <?php } ?>
                    </table>
                </div>
            </div>
        </div>
        <?php if($this->getUser()['roles_id'] == 3){?>
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseFour"><span class="glyphicon glyphicon-file">
                </span>MANAGE</a>
                </h4>
            </div>
            <div id="collapseFour" class="panel-collapse collapse">
                <div class="panel-body">
                    <table class="table">
                        <tr>
                            <td>
                                <span class="glyphicon glyphicon-user"></span><a href="#">Employers</a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <span class="glyphicon glyphicon-tasks"></span><a href="#">Clients</a> <span class="label label-info">+5</span>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <span class="glyphicon glyphicon-stats"></span><a href="#">Graph</a>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
        <?php } ?>
    </div>
</div>