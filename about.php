<!-- Created by Sandaroo - 2013197; Edited by Sinthujan - 2013046 -->

<!DOCTYPE html>
<html lang="en">
<head>
    <?php 
        include("php/templates/headers/head.php"); 
        head("About");
    ?>
</head>
<body>
<div class="container">
    <div class="row"> 
        <div class="col-xs-3">
            <img  src="images/logo.png" class="img-responsive logo" alt="Chania" width="100" height="100">
        </div>
        <div class="col-xs-6">
            <center><h2>About</h2></center>
        </div>
        <div class="col-xs-3">
            <div class="login_status">
                <?php   
                session_start();   
                if(isset($_SESSION['login_user']))
                { 
                    echo $_SESSION['login_user']."    <div class='user_button logout'>logout</div>";
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
            <img class="slide_image" src="images/about_galle_fort.jpg">  
        </div> 
    </div>
   
    <div class="row">
        <div class="col-md-12">
            <h4></h4>
        </div>
    </div>

    <div class="row">
         <div class="col-md-12 p_description">
            <p>Train travel is probably the best way to experience the natural beauty of Sri Lanka. To experience the wonders of this island is one of the most important goals that Trails On Rails bring to you. We are a train travel company providing you with numerous packages that takes you to some of the most beautiful and vibrant cities in Sri Lanka. You will learn more about the places you visit, and take part in various activities in our wonderful trip packages.</p>
        </div>
    </div>

    <div class="row"> 
        <div class="col-md-6">
            <center><img src="images/about_ella.jpg"></center>
        </div>
        <div class="col-md-6 p_description">
            <p>A trip with Trails on Rails to Kandy the proud capital of Sri Lanka’s beautiful Hill Country takes you from the hum of the vibrant Fort region of Colombo a steaming mass of humanity where market vendors trade nosily and tuk tuk’s swerve on a slow rise through paddy fields, before without really realizing it, you find yourself in a part of the world that seems barely touched by modernization. Huge plateau’s surround by tree covered hills that roll on for a seeming eternity into the horizon, with the odd temple or glimpse of the vast tea estates that are indicative of a different era.</p>
        </div>
    </div>

    <div class="row"> 
        <div class="col-md-6">
            <center><img src="images/about_galle_beach.jpg"></center>
        </div>
        <div class="col-md-6 p_description">
            <p>Heading south from Colombo to the southern Capital of Galle is another visual treat. The train follows the costal line darting in and out of the thick pine jungle that is ubiquitous on the west coast of the island. Gradually the suburbs end and you are travelling past miles of untouched palm fringed beach, where fisherman go about their catch on their garish boats. On the trip you will pass through tourist villages and fishing villages, centers of Singhalese culture such as mask making, places of worship denoting the varied history of Sri Lanka and get to see firsthand the sleepy pace of life that prevails in southern Sri Lanka.</p>
        </div>
    </div>

    <div class="row"> 
        <div class="col-md-6">
            <center><img src="images/about_galle.jpg"></center>
        </div>
        <div class="col-md-6 p_description">
            <p>With Trails On Rails, we ensure that you will experience all of these in our classic trains. Comfortable seats, air conditioning and a menu of tasty snacks and cool drinks will bring the romance and excitement back to rail travel.</p> 
        </div>
    </div> 

    <div class="row">
        <div class="footer">
            <hr><center>2016</center>
        </div>
    </div>
</div>

</body>
</html>
