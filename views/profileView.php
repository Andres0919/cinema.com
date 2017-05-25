<div class="container jumbotron">
    <div class="row">
        <div class="col-sm-2 col-md-2">
            <div class="panel-group" id="accordion">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne"><span class="glyphicon glyphicon-folder-close">
                </span>Content</a>
                        </h4>
                    </div>
                    <div id="collapseOne" class="panel-collapse collapse in">
                        <div class="panel-body">
                            <table class="table">
                                <tr>
                                    <td>
                                        <span class="glyphicon glyphicon-pencil text-primary"></span><a href="#">Articles</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span class="glyphicon glyphicon-flash text-success"></span><a href="#">News</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span class="glyphicon glyphicon-file text-info"></span><a href="#">Newsletters</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span class="glyphicon glyphicon-comment text-success"></span><a href="#">Comments</a>
                                        <span class="badge">42</span>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo"><span class="glyphicon glyphicon-th">
                </span>Modules</a>
                        </h4>
                    </div>
                    <div id="collapseTwo" class="panel-collapse collapse">
                        <div class="panel-body">
                            <table class="table">
                                <tr>
                                    <td>
                                        <a href="#">Orders</a> <span class="label label-success">$ 320</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="#">Invoices</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="#">Shipments</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="#">Tex</a>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree"><span class="glyphicon glyphicon-user">
                </span>Account</a>
                        </h4>
                    </div>
                    <div id="collapseThree" class="panel-collapse collapse">
                        <div class="panel-body">
                            <table class="table">
                                <tr>
                                    <td>
                                        <a href="#">Change Password</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="#">Notifications</a> <span class="label label-info">5</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="#">Import/Export</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span class="glyphicon glyphicon-trash text-danger"></span><a href="#" class="text-danger">
                                            Delete Account</a>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseFour"><span class="glyphicon glyphicon-file">
                </span>Reports</a>
                        </h4>
                    </div>
                    <div id="collapseFour" class="panel-collapse collapse">
                        <div class="panel-body">
                            <table class="table">
                                <tr>
                                    <td>
                                        <span class="glyphicon glyphicon-usd"></span><a href="#">Sales</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span class="glyphicon glyphicon-user"></span><a href="#">Customers</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span class="glyphicon glyphicon-tasks"></span><a href="#">Products</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span class="glyphicon glyphicon-shopping-cart"></span><a href="#">Shopping Cart</a>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-10 col-md-10">
            <div class="well">
                <div class="row">
                    <div class="col-md-offset-2 col-md-8 col-lg-offset-2 col-lg-8">
                        <div class="profile">
                            <div class="col-sm-12">
                                <div class="col-xs-12 col-sm-8">
                                    <h2 class="text-capitalize text-success"><?php echo $this->getUser()['name']; ?></h2>
                                    <p><strong>About: </strong> Web Designer / UI. </p>
                                    <p><strong>Hobbies: </strong> Read, out with friends, listen to music, draw and learn new things. </p>
                                    <p><strong>Skills: </strong>
                                        <span class="tags">html5</span>
                                        <span class="tags">css3</span>
                                        <span class="tags">jquery</span>
                                        <span class="tags">bootstrap3</span>
                                    </p>
                                </div>
                                <div class="col-xs-12 col-sm-4 text-center">
                                    <figure>
                                        <img src="../img/media.ico" alt="" class=" img-responsive">
                                    </figure>
                                </div>
                            </div>
                            <div class="col-xs-12 divider text-center">
                                <div class="col-xs-12 col-sm-4 emphasis">
                                    <h2><strong> 20,7K </strong></h2>
                                    <p><small>Followers</small></p>
                                    <button class="btn btn-success btn-block"><span class="fa fa-plus-circle"></span> Follow </button>
                                </div>
                                <div class="col-xs-12 col-sm-4 emphasis">
                                    <h2><strong>245</strong></h2>
                                    <p><small>Following</small></p>
                                    <button class="btn btn-info btn-block"><span class="fa fa-user"></span> View Profile </button>
                                </div>
                                <div class="col-xs-12 col-sm-4 emphasis">
                                    <h2><strong>43</strong></h2>
                                    <p><small>Snippets</small></p>
                                    <div class="btn-group dropup btn-block">
                                        <button type="button" class="btn btn-primary"><span class="fa fa-gear"></span> Options </button>
                                        <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                                            <span class="caret"></span>
                                            <span class="sr-only">Toggle Dropdown</span>
                                        </button>
                                        <ul class="dropdown-menu text-left" role="menu">
                                            <li><a href="#"><span class="fa fa-envelope pull-right"></span> Send an email </a></li>
                                            <li><a href="#"><span class="fa fa-list pull-right"></span> Add or remove from a list  </a></li>
                                            <li class="divider"></li>
                                            <li><a href="#"><span class="fa fa-warning pull-right"></span>Report this user for spam</a></li>
                                            <li class="divider"></li>
                                            <li><a href="#" class="btn disabled" role="button"> Unfollow </a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
