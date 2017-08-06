<div id="maps-container"  style="height: 500px"></div>
<div class="container margin-top-15 margin-bottom-15 ">
    <div class="row">
        <div class="col-md-8">
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">
                    <div class="item active">
                        <img src="https://placehold.it/800x400?text=IMAGE" alt="Image">
                        <div class="carousel-caption">
                            <h3>Sell $</h3>
                            <p>Money Money.</p>
                        </div>
                    </div>

                    <div class="item">
                        <img src="https://placehold.it/800x400?text=Another Image Maybe" alt="Image">
                        <div class="carousel-caption">
                            <h3>More Sell $</h3>
                            <p>Lorem ipsum...</p>
                        </div>
                    </div>
                </div>

                <!-- Left and right controls -->
                <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>

    </div>
</div>
<?php var_dump( $parameters ); ?>
<script src="http://maps.google.com/maps/api/js?sensor=false" type="text/javascript"></script>
<script src="js/gmaps.min.js" type="text/javascript"></script>

<script>



    var map = new GMaps({
        div: '#maps-container',
        lat: 6.2359,
        lng: -75.5751,
    });


    var teatros = '<?php echo json_encode($parameters["teatros"]); ?>';
    teatros = JSON.parse(teatros);
    alert(teatros[0].name + " lat: " + teatros[0].lat);
    <?php foreach($parameters['teatros'] as $teatro) { ?>
    map.addMarker({
        lat:  '<?php echo $teatro['lat']?>',
        lng:  '<?php echo $teatro['long']?>',
        title:  '<?php echo $teatro['name']?>',
        details: {
            database_id: 42,
            author: 'HPNeo'
        },
        click: function (e) {
            if (console.log) console.log(e);
            alert('You clicked in this marker');
        }
    });
    <?php }  ?>
    map.addMarker({
        lat: -12.042,
        lng: -77.028333,
        title: 'Marker with InfoWindow',
        infoWindow: {
            content: '<span style="color:#000">HTML Content!</span>'
        }
    });
    map.setZoom(15);
</script>
