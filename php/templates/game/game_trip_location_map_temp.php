<!-- Created by Sinthujan - 2013046; Map Created by Tharindu - 2013231 (Not working) -->

<div class="row">
    <center>
        <div id="location_map" class="location_map"></div>
        <!-- <script>
        //Created by Tharindu - 2013231 - Not working

          function initMap() {
            var uluru = "'['. $row['Latitude'] . ',' . $row['Longitude'] . ', .']'";
            var map = new google.maps.Map(document.getElementById('location_map'), {
              zoom: 4,
              center: uluru
            });
            var marker = new google.maps.Marker({
              position: uluru,
              map: map
            });
          }
        </script>
        <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB7NS87nWmxU01dp9bbCWSvu8Bo_xPCsKY&callback=initMap"/>
        
        <?php
        //$query = mysql_query("SELECT latitude, longitude FROM user u INER JOIN village v ON u.village = v.id")or die(mysql_error());
        //while($row = mysql_fetch_array($query)) {
            //$name = $row['user_name'];
            //$lat = $row['lattitude'];
            //$lon = $row['longitude'];
            //$desc = $row['desc'];
            //'<b>$name</b>

            //echo("addMarker($lat, $lon <br />');\n");
        //} ?>

        //center = bounds.getCenter();
        //map.fitBounds(bounds); 
     
        //$sql = "SELECT * FROM location WHERE Latitude  = '".$latitude."'";
        //$result = $conn->query($sql); 
    
        //if ($result->num_rows > 0) { 
        
        //while($row = $result->fetch_assoc()) { --> 
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