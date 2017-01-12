<!-- Created by Sandaroo - 2013197; Edited by Sinthujan - 2013046-->

<!DOCTYPE html>
<html lang="en">
<head>
    <?php 
        include("php/templates/headers/head.php"); 
        head("Game");
    ?>
</head>
<body>
<div class="container">
    <div class="row"> 
        <div class="col-xs-3">
            <img  src="images/logo.png" class="img-responsive logo" alt="Chania" width="100" height="100">
        </div>
        <div class="col-xs-6">
            <center><h2>Game</h2></center>
        </div>
        <div class="col-xs-3">
            <div class="login_status">
                <?php   
                session_start();   
                if(isset($_SESSION['login_user']))
                { 
                    echo $_SESSION['login_user']."<br><div class='user_button logout'>logout</div>";
                }else {
                    echo "<a class='user_button' href='login.php'>login/ signup</a>";
                }  
                ?> 
            </div>            
        </div>
    </div>

    <div class="row">
        <?php 
            include("php/templates/headers/navbar.php"); 
        ?>
    </div>

    <div class="row">
        <div id="slides">  
            <img class="slide_image" src="images/game_kandy.jpg">  
        </div> 
    </div>
   
    <div class="row">
        <div class="col-md-12">
            <h4>Rules Of The Treasure Hunt</h4>
        </div>
    </div>
    <div class="row">
         <div class="col-md-12 p_description">
            <p>Your booked trip contains a number of tourist attractions which are not shown. You travel by train, and once you reach your destination railway station you will be provided with instructions to reach your next location. Once you get to your location, you need to answer a question about that place. If you answer correctly, you will gain travel points which can be redeemed for trip discounts.</p>
            <p>Once answered correctly, you will be presented with instructions to the next location and so on. Each location is presented to you first in order of popularity and will take you around the city and back to the train station.</p>
        </div>
    </div>
    <br>

    <!--<div class="row">
        <div id="link_to_game" class="buttonlink b_center">Go to game</div>
        <script type="text/javascript">
            document.getElementById("link_to_game").onclick = function () {
                location.href = "game_home.php";
            };
        </script>
    </div>-->
    
    <div class="row">
        <div id="link_to_game" class="buttonlink b_center" onclick="gotoGame('2')">Go to game</div>      
    </div>
    <br>
    
    <div class="row">
        <div class="footer">
            <hr><center>2016</center>
        </div>
    </div>
</div>

</body>
</html>
