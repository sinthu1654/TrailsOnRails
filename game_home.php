<!-- Created by Sinthujan - 2013046; Edited by Sandaroo - 2013197-->

<!DOCTYPE html>
<html lang="en">
    <?php
            
    session_start();  
    if(!isset($_SESSION['login_user']))
    {  
        header('Location:login.php?message=autorization_failed');    
    }  
    
    if(isset($_GET['loc']))
    {       
        $loc = $_GET['loc'];
        $_SESSION["game_exit_loc"] = $loc; 
    }
    ?>
<head>
    <?php 
        include("php/templates/headers/head.php"); 
        head("Game - Home");
    ?>
</head>

<body>
<div class="container">
	<div class="row"> 
        <div class="col-xs-3">
        	<button id="exit_btn" class="icon_btn"><img src="images/previous_icon.png" width="40" height="40"></button>
        </div>
        <div class="col-xs-6">
        	<center><h2>Start Hunt</h2></center>
        </div>
    </div>
    <hr>

    <form method="POST" action='game_home.php'>
        <section class="flexbox">  
            <div class="stretch">
                <input class="trip_code_textfield" type="text" name="trip_code" placeholder="Enter Trip Code">
            </div>
            <div class="normal">   
                <input class="trip_code buttonlink b_sml" type="submit" name="trip_code_submit_btn" value="Go">  
            </div>    
        </section> 
    </form>
    <br>

    <?php
        if (isset($_POST['trip_code_submit_btn'])) {

            if (($_POST['trip_code'] == null)) {
                echo "<p>Please enter your trip code!</p>";
            } else {
                $trip_code = $_POST['trip_code'];  
                include("php/controllers/game_ctr.php");
                getTripDetails($trip_code);
            }     
        }       
    ?>

	<div class="row">
        <div class="footer">
            <hr><center>2016</center>
        </div>
    </div>
</div>
</body>
</html>