<div class="container margin-top-15">
    <div class="text-center">
        <div class="area">
            <div class="heading">
                <h2 class="form-heading">Create account</h2><br />
            </div>
            <div class="portlet box">
                <form class="form-horizontal" method="post" action="index.php?controller=user&action=signup">
            <!-- BEGIN FORM-->
                    <div class="form-body">
                        <div class="form-group">
                            <label class="col-md-3 control-label">Username*</label>
                            <div class="col-md-4">
                                <div class="input-group">
                                    <input type="text" name="user" class="form-control input-circle-left" placeholder="Enter Username" required>
                                    <span class="input-group-addon input-circle-right">
                                        <i class="fa fa-user"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label">Password*</label>
                            <div class="col-md-4">
                                <input type="password" name="pass" class="form-control input-circle" placeholder="Password" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label">Name*</label>
                            <div class="col-md-4">
                                <input type="text" name="name" class="form-control input-circle" placeholder="Enter your name" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label">Last Name</label>
                            <div class="col-md-4">
                                <input type="text" name="last" class="form-control input-circle" placeholder="Enter your last name">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label">Birthdate</label>
                            <div class="col-md-4">
                                <div class="input-group">
                                    <input type="date" class="form-control spinner input-circle-left" value="<?php echo date("Y-m-d");?>">
                                     <span class="input-group-addon input-circle-right">
                                        <i class="fa fa-calendar"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group last">
                            <label class="col-md-3 control-label">Gender*</label>
                            <div class="col-md-4">
                                <span class="form-control-static">Male <input name="gender" value="male" type="radio" required> </span>
                                <span class="form-control-static"> Female <input name="gender" value="female" type="radio" required></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label">Email Address*</label>
                            <div class="col-md-4">
                                <div class="input-group">
                                    <input type="email" name="email" class="form-control input-circle-left" placeholder="Email Address" required>
                                    <span class="input-group-addon input-circle-right">
                                        <i class="fa fa-envelope"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label">Phone</label>
                            <div class="col-md-4">
                                <div class="input-group">
                                    <input type="text" class="form-control input-circle-left" placeholder="Phone number">
                                    <span class="input-group-addon input-circle-right">
                                        <i class="fa fa-phone"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label"></label>
                            <div class="col-md-4">
                                <div class="input-group">
                                    <label class="checkbox">
                                        <input type="checkbox" required>I agree all your
                                        <a href="#">Terms of Services</a>*
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-actions">
                        <div class="row">
                            <div class="col-md-offset-3 col-md-9 controls">
                                <button type="submit" class="btn btn-circle btn-success">Submit</button>
                                <button type="button" class="btn btn-circle grey-salsa btn-outline">Cancel</button>
                            </div>
                        </div>
                    </div>
                </form>
                <!-- END FORM-->
            </div>
        </div>
    </div>
</div>
