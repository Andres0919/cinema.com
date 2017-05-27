<div class="container jumbotron">
    <div class="row">
        <?php $this->containerMenu() ?>
        <div class="col-sm-10 col-md-10">
            <h2 class=" text-success">Cinemas</h2>
            <div class="well">
                <div class="row">
                    <div class="col-md-offset-2 col-md-8 col-lg-offset-2 col-lg-8">
                        <div class="profile">
                            <div class="col-sm-12">
                                <div class="col-xs-12 col-sm-12">
                                    <table class="table text-capitalize text-success">
                                        <tr>
                                            <th>name</th>
                                            <th>address</th>
                                            <th>city</th>
                                            <th>status</th>
                                        </tr>
                                        <?php
                                        foreach($parameters as $row): ?>
                                            <tr class="text-info">
                                                <td><?php print_r($row['name']) ;?></td>
                                                <td><?php print_r($row['address']) ;?></td>
                                                <td ><?php print_r($row['city']) ;?></td>
                                                <td><?php print_r($row['status']) ;?></td>

                                            </tr>
                                        <?php endforeach ?>
                                    </table>

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
