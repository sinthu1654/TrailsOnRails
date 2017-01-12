<!-- Created by Sinthujan - 2013046 -->
<div>
    <center><img src="<?php  echo $row2["TripImgPath"]; ?>"/></center><br>
    <h4><?php  echo $row2["TripName"]; ?></h4>        
	<p id="col-md-12 location_descrip"><?php  echo $row2["TripShortDesc"]; ?></p>
</div>
<br>
<div class="row">
	<div id="link_to_map" class="alt_buttonlink alt_b">Next</div>
    <script type="text/javascript">
        document.getElementById("link_to_map").onclick = function () {
            location.href = "game_location_map.php?tripId=<?php echo $row2['TripId'] ?>";
        };
    </script>
</div>