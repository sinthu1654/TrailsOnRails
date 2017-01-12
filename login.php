<!-- Created by Sandaroo - 2013197 -->

<!DOCTYPE html>
<html lang="en">
<head>
    <?php 
        include("php/templates/headers/head.php"); 
        head("login");
    ?>
</head>
<body>
<div class="container">   
    <div class="row"> 
        <div class="col-xs-3">
            <img  src="images/logo.png" class="img-responsive logo" alt="Chania" width="100" height="100">
        </div>
        <div class="col-xs-6">
            <center><h2>Trails On Rails</h2></center>
        </div>
        <div class="col-xs-3">
            <button id = "cancelbut" class="icon_btn back_button"><img src="images/cancel-button.png"></button>
        </div>
    </div> 
    <div class="row"> 
         
        <div id= "login_error" class="col-md-12"> 
            <?php 
            if(isset($_GET['message']))
            {       
                if($_GET['message']=="autorization_failed"){       
                    echo "<p>Please login to continue.</p>";    
                }
            }
            ?>
        </div> 
    </div>
    <div class="row login_area">  
        <form class="form-horizontal">
            <div class="form-group">
                <label class="control-label col-sm-2" for="username">Username</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="username" placeholder="Enter username">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="password">Password</label>
                <div class="col-sm-10">
                    <input type="password" class="form-control" id="password" placeholder="Enter Password">
                </div>
            </div>             
        </form>
    </div>    
       
    <div class="row">
        <div id="loginbutton" class="buttonlink b_center">Login</div>     
    </div>
</div>
</body>
</html>


