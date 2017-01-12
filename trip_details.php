<!-- Created by Sandaroo - 2013197; Edited by Sinthujan - 2013046 -->

<!DOCTYPE html>
<html lang="en">
<head>
    <?php 
        include("php/templates/headers/head.php"); 
        head("Trip Details");
    ?>

    <!-- additional styles for rating stars -->
    <link href="bootstrap/star_rating/css/star-rating.css" media="all" rel="stylesheet" type="text/css" />
    <script src="bootstrap/star_rating/js/star-rating.js" type="text/javascript"></script>
    
</head>
<body>
<div class="container">
    <div class="row"> 
        <div class="col-xs-3">
            <img  src="images/logo.png" class="img-responsive logo" alt="Chania" width="100" height="100">
        </div>
        <div class="col-xs-6">
            <center><h2>Trip Details</h2></center>
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

    <?php  
        $id = $_GET['id'];  
        include("php/controllers/trips_ctr.php");
        trip($id);     
    ?>  
    <br>

    <hr>
    <div class="row">
        <div class="col-md-12">
           <h4>Comments</h4>
        </div>
    </div> 

    <div class="row"> 
        <div class="comment_section">            
            <?php   
                include("php/controllers/comments_ctr.php");
                tripComments($id);     
            ?>                 
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
