<!-- Created by Sandaroo - 2013197; Edited by Sinthujan - 2013046 -->

<!DOCTYPE html>
<html lang="en">
<head>
    <?php 
        include("php/templates/headers/head.php"); 
        head("Trips");
    ?>
</head>
<body>
<div class="container">
    <div class="row"> 
        <div class="col-xs-3">
            <img  src="images/logo.png" class="img-responsive logo" alt="Chania" width="100" height="100">
        </div>
        <div class="col-xs-6">
            <center><h2>Trips</h2><center>
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
        <?php 
            include("php/controllers/trips_ctr.php");
            tripList();
        ?>       
    </div>
    
    <div class="row">
        <div class="footer">
            <hr><center>2016</center>
        </div>
    </div>
</div>

</body>
</html>
