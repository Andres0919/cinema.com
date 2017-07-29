<div class="container jumbotron fix-container">
    <div class="row">
        <?php $this->sidebar() ?>
        <div class="col-sm-10 col-md-8">
            <div class="well">
                <div class="row">
                    <div class="col-md-offset-2 col-md-8 col-lg-offset-2 col-lg-8">
                        <div class="profile">
                            <div class="col-sm-12">
                                <div class="col-xs-10 col-sm-8">
                                    <h2 class="text-capitalize text-success"><?php echo $this->getUser()['3']  ." ". $this->getUser()['last_name']; ?></h2>
                                    <p><strong>Role: </strong> <?php echo $this->getUser()['13']?>. </p>
                                </div>
                                <div class="col-xs-12 col-sm-4 text-center">
                                    <figure>
                                        <img src="../img/media.ico" alt="" class=" img-responsive">
                                    </figure>
                                </div>
                            </div>
                            <div class="col-xs-12 divider text-center">
                                <div class="col-xs-12 col-sm-4 emphasis">
                                    <h2><strong> 22 </strong></h2>
                                    <p><small>Reservations</small></p>
                                    <a class="btn btn-success btn-block" href="/index.php?controller=movie&action=reserve"><span class="fa fa-plus-circle"></span> Reserve </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
