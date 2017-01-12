<!-- Created by Sinthujan - 2013046; Edited by Sandaroo - 2013197 -->

<!DOCTYPE html>
<html lang="en">
<head>
    <?php 
        include("php/templates/headers/head.php"); 
        head("Game - Location Map");
    ?>
</head>
<body>

<div class="container">
	<div class="row"> 
        <div class="col-xs-3">
        	<button id="previous_btn" class="icon_btn back_button"><img src="images/previous_icon.png" width="40" height="40"></button>
        </div>
        <div class="col-xs-6">
        	<center><h2>Location Map</h2></center>
        </div>
    </div>
    <hr>

    <?php   
        $tripid=$_GET['tripId'];
        include("php/controllers/game_ctr.php");
        getTripLocations($tripid);
    ?>

    <div class="row">
        <div class="footer">
            <hr><center>2016</center>
        </div>
    </div>
</div>
</body>
</html>