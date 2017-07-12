<div class="container jumbotron">
    <div class="row">
        <?php $this->containerMenu() ?>
        <div class="col-sm-10 col-md-10">
            <div class="well">
                <div class="row">
                    <div class="col-md-offset-2 col-md-8 col-lg-offset-2 col-lg-8">
                        <div class="profile">
                            <div class="col-sm-12">
                                <div class="col-xs-12 col-sm-8">
                                    <table class="table text-capitalize text-success">
                                        <tr>
                                            <th>username</th>
                                            <th>password</th>
                                            <th>name</th>
                                            <th>last name</th>
                                            <th>card</th>
                                            <th>email</th>
                                        </tr>
                                        <?php
                                        foreach($parameters as $row): ?>
                                            <tr class="text-info">
                                                <td><?php print_r($row['username']) ;?></td>
                                                <td><?php print_r($row['password']) ;?></td>
                                                <td ><?php print_r($row['3']) ;?>min</td>
                                                <td><?php print_r($row['last_name']) ;?></td>
                                                <td><?php print_r($row['card']) ;?></td>
                                                <td><?php print_r($row['email']) ;?></td>

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
