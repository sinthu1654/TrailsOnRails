<!-- Created by Sinthujan - 2013046 -->

<!DOCTYPE html>
<html lang="en">
<head>
    <?php 
        include("php/templates/headers/head.php"); 
        head("Game - Quiz");
    ?>
</head>
<body>
<div class="container">
	<div class="row"> 
        <div class="col-xs-3">
        	<button id="previous_btn" class="icon_btn back_button"><img src="images/previous_icon.png" width="40" height="40"></button>
        </div>
        <div class="col-xs-6">
        	<center><h2>Quiz</h2></center>
        </div>
    </div>
    <hr>

    <?php   
        $locationId=$_GET['locationId'];
        include("php/controllers/game_ctr.php");
        getLocationQuiz($locationId);
    ?>

	<div class="col-xs-5">
    	<h4 id="location_title">Location 2</h4>
    </div>
    <div class="col-xs-7">
    	<h4 id="distance_to_location">Distance : 10km</h4>
	</div>
	<br><br><br>

	<div id="link_to_next" class="alt_buttonlink alt_b">Next</div>
    <script type="text/javascript">
        document.getElementById("link_to_next").onclick = function () {
            location.href = "game_summary.php";
        };
    </script>
	
	<div class="row">
        <div class="footer">
            <hr><center>2016</center>
        </div>
    </div>
</div>
</body>
</html>