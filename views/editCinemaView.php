<div class="container jumbotron">
    <div class="row">
        <?php $this->containerMenu() ?>
        <div class="col-sm-10 col-md-10">
            <h2 class=" text-success">Insert Cinema</h2>
            <div class="well">
                <div class="row">
                    <div class="col-md-offset-2 col-md-8 col-lg-offset-2 col-lg-8">
                        <div class="profile">
                            <div class="col-sm-12">
                                <div class="col-xs-12 col-sm-12">
                                    <form action="index.php?controller=cinema&action=setEdit" method="post" class="form-control-static">
                                        <table class="table  text-capitalize ta">
                                            <tr>
                                                <td>name: </td>
                                                <td><input type="text" name="name" required></td>
                                            </tr>
                                            <tr>
                                                <td>address</td>
                                                <td><input type="text" name="address" required></td>
                                            </tr>
                                            <tr>
                                                <td>city</td>
                                                <td><input type="text" name="city" required></td>
                                            </tr>
                                            <tr>
                                                <td>status</td>
                                                <td>
                                                    <select name="status" id="">
                                                        <option value="avaitable">Avaitable</option>
                                                        <option value="no-avaitable">No-Avaitable</option>
                                                    </select>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Price 2D general chair: </td>
                                                <td><input type="number" name="general2D" required></td>
                                            </tr>
                                            <tr>
                                                <td>Price 2D preferencial chair: </td>
                                                <td><input type="number" name="preferencial2D" required></td>
                                            </tr>
                                            <tr>
                                                <td>Price 3D general chair: </td>
                                                <td><input type="number" name="general3D" required></td>
                                            </tr>
                                            <tr>
                                                <td>Price 3D preferencial chair: </td>
                                                <td><input type="number" name="preferencial3D" required></td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td>
                                                    <input type="submit" value="Insert" class="btn btn-success">
                                                    <button type="submit" class="btn btn-default">Cancel</button>
                                                </td>
                                            </tr>
                                        </table>
                                    </form>
                                </div>
                                <div class="col-xs-12 col-sm-4 text-center">

                                </div>
                            </div>
                            <div class="col-xs-12 divider text-center">
                                <div class="col-xs-12 col-sm-4 emphasis">

                                </div>
                                <div class="col-xs-12 col-sm-4 emphasis">

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
