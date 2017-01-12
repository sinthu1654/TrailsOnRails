<!-- Created by Sinthujan - 2013046 -->

<!DOCTYPE html>
<html lang="en">
<head>
    <?php 
        session_start();  
        if(!isset($_SESSION['login_user']))
        {  
            header('Location:login.php?message=autorization_failed');    
        } 
        include("php/templates/headers/head.php"); 
        head("Trip Booking Summary");
    ?>
</head>
<body>
<div class="container">
    <div class="row"> 
        <div class="col-xs-3">
            <img  src="images/logo.png" class="img-responsive logo" alt="Chania" width="100" height="100">
        </div>
        <div class="col-xs-6">
            <center><h2>Trip Booking Summary</h2></center>
        </div>
        <div class="col-xs-3">
            <div class="login_status">
                <?php    
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

    <?php
        include("php/templates/trip/trip_booking_summary_temp.php");    
    ?>

    <div class="row">
        <div class="footer">
            <hr><center>2016</center>
        </div>
    </div>
</div>

</body>
</html>