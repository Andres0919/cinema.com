<div class="container-fluid">

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
                                <?php foreach($parameters['comming'] as $movie){ ?>
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
                                <?php foreach($parameters['comming'] as $movie){ ?>
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
