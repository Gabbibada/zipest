<?php
require_once('../path.php');
$page_name = "map";
?>

<!DOCTYPE html>
<!--
Copyright (C) 2017 Bada Gabriel. This project is created by Boemax. Modify it under the terms provided by us
-->
<html  lang="en" class="no-js">

    <?php include INCPATH . '/head.php'; ?>

    <body>

        <?php include INCPATH . '/header.php'; ?>
        
        <!--========== PROMO BLOCK ==========-->
        <div class="js__parallax-window" style="background: url(../img/1920x1080/04.gif) 50% 0 repeat fixed;">
            <div class="container g-padding-y-125--xs">
                <div class="g-padding-y-50--xs">
                    <h1 class="g-font-size-35--xs g-font-size-55--sm g-font-size-70--lg g-color--white">We're ZIPEST</h1>
                    <p class="g-font-size-22--xs g-font-size-24--md g-margin-b-0--xs g-color--white">Where it is fullest and the cheapest.</p>
                </div>
            </div>
        </div>
        <!--========== END PROMO BLOCK ==========-->
        
        <!--========== PAGE CONTENT ==========-->
        <!-- Google Map -->
        <section class="s-google-map">
            <div id="map" class="s-google-container g-height-400--xs">
                <script>

              function initMap() {

                var map = new google.maps.Map(document.getElementById('map'), {
                  zoom: 3,
                  center: {lat: 6.8340926, lng: 3.9198107}
                });

                // Create an array of alphabetical characters used to label the markers.
                var labels = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';

                // Add some markers to the map.
                // Note: The code uses the JavaScript Array.prototype.map() method to
                // create an array of markers based on a given "locations" array.
                // The map() method here has nothing to do with the Google Maps API.
                var markers = locations.map(function(location, i) {
                  return new google.maps.Marker({
                    position: location,
                    label: labels[i % labels.length]
                  });
                });

                // Add a marker clusterer to manage the markers.
                var markerCluster = new MarkerClusterer(map, markers,
                    {imagePath: 'https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/m'});
              }
              var locations = [
                    {lat: 6.8252922, lng: 3.9119669},
                    {lat: 6.9463696, lng: 3.9841157},
                    {lat: 7.4685866, lng: 3.9106287},
                    {lat: 6.8291377, lng: 3.9157468},
                    {lat: 6.8318966, lng: 3.9193867},                    
                    {lat: 6.8310324, lng: 3.9231819},
                    {lat: 6.8178612, lng: 3.9137463},
                    {lat: 6.8310324, lng: 3.9231819}
                ]
            </script>
            <script src="https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/markerclusterer.js">
            </script>
            <script async defer
                    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBmGjqF15BYMcq-XXWkN2o63r2xsjEgDxU&callback=initMap">
            </script>
            </div>                            
        </section>        
        
        <!-- End Google Map -->
        <!--========== END PAGE CONTENT ==========-->

        <?php include INCPATH . '/footer.php'; ?>  

        <?php include INCPATH . '/scripts.php'; ?>

    </body>
</html>