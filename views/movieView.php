<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <div class="col-md-1">
            </div>
            <div class="jumbotron col-md-7 margin-top-15 margin-bottom-15">
                <div class="row margin-top-15">
                    <div class="col-xs-12 col-md-3 text-center">
                        <img src="<?php echo $parameters['movie']['url_img']; ?>" alt="" height="200px" width="150px">
                    </div>
                    <div class="col-xs-10 col-md-6">
                        <ul class="list list-unstyled">
                            <li><strong>Title: </strong><?php echo $parameters['movie']['title']; ?></li>
                            <br />
                            <li><strong>Classification </strong><?php echo $parameters['movie']['classification']; ?></li>
                            <br />
                            <li><strong>Duration: </strong><?php echo $parameters['movie']['duration']; ?> Min</li>
                            <br />
                            <li><strong>Status: </strong><?php echo $parameters['movie']['status']; ?></li>
                        </ul>
                        <br />
                        <a href="#" class="btn btn-success">Reserve <i class="glyphicon glyphicon-save"></i></a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12">
                        <p style="font-size: small"><strong>Synopsis: </strong><?php echo $parameters['movie']['synopsis']; ?> </p>
                    </div>
                </div>
            </div>
            <div class="col-md-1">
            </div>
            <div class="col-md-3 text-center jumbotron margin-top-15">
                <h2>TODAY</h2>
                <ul class="list list-unstyled">
                    <li>Morning</li>
                    <li>Afternoon</li>
                    <li>Evening</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<div class="col-xs-12 divider text-center">
    <div class="col-xs-12 col-sm-4 emphasis">
    </div>
    <div class="col-xs-12 col-sm-4 emphasis">
    </div>
    </div>
</div>
