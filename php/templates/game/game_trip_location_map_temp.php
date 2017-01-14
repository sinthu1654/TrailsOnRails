<!-- Created by Sinthujan - 2013046 -->

<div class="row">
    <center>
        <div id="location_map" class="location_map"></div>
        <script>
          function initMap() {
            var uluru = {lat: <?php echo $row["Latitude"]; ?>, lng: <?php echo $row["Longitude"]; ?>};
            var map = new google.maps.Map(document.getElementById('location_map'), {
              zoom: 15,
              center: uluru
            });
            var marker = new google.maps.Marker({
              position: uluru,
              map: map
            });
          }
        </script>
        <script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCCmwlc2qJP1UPjfv__fjnJs2d7ftXmVAI&callback=initMap">
        </script>
    </center>
</div>
<br>

<div>
    <div class="col-xs-5">
        <h4 id="location_title"><?php  echo $row["LocationName"]; ?></h4>
    </div>
    <div class="col-xs-7">
        <h4 id="distance_to_location">Distance : 5km</h4>
    </div>
    <br><br>

    <div class="row">
        <p id="location_descrip"><?php  echo $row["LocationDesc"]; ?></p>
    </div>

    <div id="link_to_quiz" class="alt_buttonlink alt_b">Next</div>
    <script type="text/javascript">
        document.getElementById("link_to_quiz").onclick = function () {
            location.href = "game_quiz.php?locationId=<?php echo $row['LocationId'] ?>";
        };
    </script>
</div>