<div class="jumbotron container">
    <div class="span6  text-center ">
        <h2 class="text-info">SIGN UP</h2>
        <div class="area ">
            <form class="form-horizontal text-info" method="post" action="index.php?controller=user&action=signup">
                <div class="heading">
                    <h4 class="form-heading">Create account</h4><br />
                </div>
                <table class="center-table text-left table">
                    <tr>
                        <td>
                            <div class="control-group">
                                <label class="control-label" for="inputFirst">First Name: </label>
                            </div>
                        </td>
                        <td >
                            <div class="controls">
                                <input name="name" type="text" required autocomplete="off" class="col-xs-6">*
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="control-group">
                                <label class="control-label" for="inputLast">Last Name: </label>
                            </div>
                        </td>
                        <td>
                            <div class="controls">
                                <input name="last" type="text" autocomplete="off" class="col-xs-6">
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="control-group">
                                <label class="control-label" for="inputEmail">Email: </label>
                        </td>
                        <td>
                                <div class="controls">
                                    <input name="email" placeholder="example@mail.com" type="email" required autocomplete="off" class="col-xs-6">*
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="control-group">
                                <label class="control-label" for="inputUser">Username: </label>
                            </div>
                        </td>
                        <td>
                            <div class="controls">
                                <input name="user" type="text" required autocomplete="off" class="col-xs-6">*
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="control-group">
                                <label class="control-label" for="inputPassword">Password: </label>
                            </div>
                        </td>
                        <td>
                            <div class="controls">
                                <input name="pass" placeholder="Min. 8 Characters" type="password" required autocomplete="off" class="col-xs-6">*
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="control-group">
                                <label class="control-label" for="inputCard">Card: </label>

                            </div>
                        </td>
                        <td>
                            <div class="controls ">
                                <input name="card" type="number" autocomplete="off" class="col-xs-6">
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="controls">
                                <label class="checkbox">
                                    <input type="checkbox" required>I agree all your
                                        <a href="#">Terms of Services</a>*
                                </label>
                            </div>
                        </td>
                        <td><label>(*) important!</label></td>
                    </tr>
                </table>
                <div class="control-group">
                    <div class="controls">
                        <button class="btn btn-success" type="submit">SIGN UP</button>
                        <a class="btn btn-default" href="/">CANCEL</a>
                    </div><br />
                </div>
            </form>
        </div>
    </div>
</div>
