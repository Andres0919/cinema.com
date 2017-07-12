<div class="container-fluid">
<!--                <div class="intro-text">-->
<!--                    <div class="intro-lead-in">Welcome To Promocinal!</div>-->
<!--                    <div class="intro-heading">What would you like to watch today?</div>-->
<!--                </div>-->

    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner carousel-home">
            <div class="item active">
                <img src="img/cinema-22.jpg" alt="Los Angeles" class="image-index">
            </div>

            <div class="item">
                <img src="img/header_bg.jpg" alt="Chicago">
            </div>

            <div class="item">
                <img src="img/media.ico" alt="New York">
            </div>
        </div>

        <!-- Left and right controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <br />
    <h2 class="text-center">In Theaters</h2>
    <div class="jumbotron">
        <div class='row'>
            <div class='col-md-12'>
                <div class="carousel slide media-carousel" id="media">
                    <div class="carousel-inner media-theaters">
                        <div class="item  active">
                            <div class="row">
                                <div class="col-md-3">
                                    <a  href="#"><img alt="" src="img/file_image.jpg"></a>
                                </div>
                                <div class="col-md-3">
                                    <a  href="#"><img alt="" src="img/download%20(1).jpg"></a>
                                </div>
                                <div class="col-md-3">
                                    <a  href="#"><img alt="" src="img/download.jpg"></a>
                                </div>
                                <div class="col-md-3">
                                    <a  href="#"><img alt="" src="img/IMAGEN-16099740-2.jpg"></a>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="row">
                                <div class="col-md-3">
                                    <a href="#"><img alt="" src="http://placehold.it/150x150"></a>
                                </div>
                                <div class="col-md-3">
                                    <a href="#"><img alt="" src="http://placehold.it/150x150"></a>
                                </div>
                                <div class="col-md-3">
                                    <a href="#"><img alt="" src="http://placehold.it/150x150"></a>
                                </div>
                                <div class="col-md-3">
                                    <a href="#"><img alt="" src="http://placehold.it/150x150"></a>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="row">
                                <div class="col-md-3">
                                    <a href="#"><img alt="" src="http://placehold.it/150x150"></a>
                                </div>
                                <div class="col-md-3">
                                    <a href="#"><img alt="" src="http://placehold.it/150x150"></a>
                                </div>
                                <div class="col-md-3">
                                    <a href="#"><img alt="" src="http://placehold.it/150x150"></a>
                                </div>
                                <div class="col-md-3">
                                    <a href="#"><img alt="" src="http://placehold.it/150x150"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a data-slide="prev" href="#media" class="left carousel-control">‹</a>
                    <a data-slide="next" href="#media" class="right carousel-control">›</a>
                </div>
            </div>
        </div>
    </div>
    <br />
    <h2 class="text-center">Now Playing</h2>
    <div class="jumbotron">

        <?php echo $parameters['hola'];?>

    </div>
</div>
