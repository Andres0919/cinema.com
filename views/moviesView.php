<div class="container">
    <div class="portfolio-content portfolio-1">
        <div id="js-filters-juicy-projects" class="cbp-l-filters-button">
            <div data-filter="*" class="cbp-filter-item-active cbp-filter-item btn blue btn-outline uppercase"> All
                <div class="cbp-filter-counter"></div>
            </div>
            <div data-filter=".identity" class="cbp-filter-item btn blue btn-outline uppercase"> Identity
                <div class="cbp-filter-counter"></div>
            </div>
            <div data-filter=".web-design" class="cbp-filter-item btn blue btn-outline uppercase"> Web Design
                <div class="cbp-filter-counter"></div>
            </div>
            <div data-filter=".graphic" class="cbp-filter-item btn blue btn-outline uppercase"> Graphic
                <div class="cbp-filter-counter"></div>
            </div>
            <div data-filter=".logos" class="cbp-filter-item btn blue btn-outline uppercase"> Logo
                <div class="cbp-filter-counter"></div>
            </div>
        </div>
        <div id="js-grid-juicy-projects" class="cbp">
            <?php foreach($parameters['movie'] as $movie){ ?>
            <div class="cbp-item graphic">
                <div class="cbp-caption">
                    <div class="cbp-caption-defaultWrap">
                        <img src="<?php echo $movie['url_img']; ?>" alt=""> </div>
                    <div class="cbp-caption-activeWrap">
                        <div class="cbp-l-caption-alignCenter">
                            <div class="cbp-l-caption-body">
                                <a href="index.php?controller=movie&action=movie&movie=<?php echo $movie['id']; ?>" class="btn blue uppercase btn uppercase" rel="nofollow">more info</a>
                                <a href="<?php echo $movie['url_img']; ?>" class="cbp-lightbox cbp-l-caption-buttonRight btn red uppercase btn red uppercase" data-title="">view larger</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="cbp-l-grid-projects-title uppercase text-center uppercase text-center"><?php echo $movie['title']; ?></div>
                <div class="cbp-l-grid-projects-desc uppercase text-center uppercase text-center">Web Design / Graphic </div>
            </div>
            <?php } ?>
        </div>
        <div id="js-loadMore-juicy-projects" class="cbp-l-loadMore-button">
            <a href="../assets/global/plugins/cubeportfolio/ajax/loadMore.html" class="cbp-l-loadMore-link btn grey-mint btn-outline" rel="nofollow">
                <span class="cbp-l-loadMore-defaultText">LOAD MORE</span>
                <span class="cbp-l-loadMore-loadingText">LOADING...</span>
                <span class="cbp-l-loadMore-noMoreLoading">NO MORE WORKS</span>
            </a>
        </div>
    </div>
</div>