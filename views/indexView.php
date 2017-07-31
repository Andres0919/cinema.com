<div class="container-fluid">
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
                <img src="img/cinema-22.jpg" alt="" >
            </div>

            <div class="item">
                <img src="img/film.jpg" alt="">
            </div>

            <div class="item">
                <img src="img/film1.JPG" alt="">
            </div>
        </div>

        <!-- Left and right controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="sr-only">Next</span>
        </a>
    </div>
    <br />
    <h2 class="text-center">Comming Soon</h2>
    <hr />
    <br />
    <div class="jumbotron">
        <div class='row'>
            <div class='col-md-12'>
                <div class="carousel slide media-carousel" id="media_comming_soon">
                    <a data-slide="prev" href="#media_comming_soon" class="left carousel-control">‹</a>
                    <div class="carousel-inner media-theaters">
                        <div class="item  active">
                            <div class="row">
                                <?php $times = 0;?>
                                <?php foreach($parameters as $movie){ ?>
                                    <?php if($times%4 == 0 && $times != 0){?>
                            </div>
                        </div>
                        <div class="item">
                            <div class="row">
                                    <?php } ?>
                                <?php $times++ ?>
                                <div class="col-md-3">
                                    <a href="index.php?controller=movie&action=movie&movie=<?php echo $movie['id']; ?>"><img alt="" src="<?php echo $movie['url_img']; ?>"></a>
                                </div>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                    <a data-slide="next" href="#media_comming_soon" class="right carousel-control">›</a>
                </div>
            </div>
        </div>
    </div>
    <br />
    <h2 class="text-center">In Theaters</h2>
    <hr />
    <br />
    <div class="jumbotron">
        <div class='row'>
            <div class='col-md-12'>
                <div class="carousel slide media-carousel" id="media_in_theaters">
                    <div class="carousel-inner media-theaters">
                        <div class="item  active">
                            <div class="row">
                                <?php $times = 0;?>
                                <?php foreach($parameters as $movie){ ?>
                                <?php if($times%4 == 0 && $times != 0){?>
                            </div>
                        </div>
                        <div class="item">
                            <div class="row">
                                <?php } ?>
                                <?php $times++ ?>
                                <div class="col-md-3">
                                    <a href="index.php?controller=movie&action=movie&movie=<?php echo $movie['id']; ?>"><img alt="" src="<?php echo $movie['url_img']; ?>"></a>
                                </div>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                    <a data-slide="prev" href="#media_in_theaters" class="left carousel-control">‹</a>
                    <a data-slide="next" href="#media_in_theaters" class="right carousel-control">›</a>
                </div>
            </div>
        </div>
    </div>
</div>
