<!-- Created by Sandaroo - 2013197; Edited by Sinthujan - 2013046 -->

<!DOCTYPE html>
<html lang="en">
<head>
    <?php 
        include("php/templates/headers/head.php"); 
        head("Home");
    ?>

    <script type="text/javascript" src="https://cdn.emailjs.com/dist/email.min.js"></script>
    <script type="text/javascript">
       (function(){
          emailjs.init("user_DP12Wn3ZolXXg59qLON6u");
       })();
    </script>

</head>
<body>
<div class="container">
    <div class="row"> 
        <div class="col-xs-3">
            <img  src="images/logo.png" class="img-responsive logo" alt="Chania" width="100" height="100">
        </div>
        <div class="col-xs-6">
            <center><h2>Home</h2></center>
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
            <div class="arrow left_arrow" onclick="change_slide('pre')">&#10094;</div>
            <div class="arrow right_arrow" onclick="change_slide('next')">&#10095;</div>
            <img class="slide_image" src="images/home_kandy.jpg">
            <img class="slide_image" src="images/home_galle_lighthouse.jpg">
            <img class="slide_image" src="images/home_kandy2.jpg">   
        </div>        
    </div>

    <div class="row">
        <div class="col-md-12">
            <h4>About</h4>
        </div>
    </div>

    <div class="row">
         <div class="col-md-12 p_description">
            <p>Trails on Rails is a train travel company. Our main feature for our users is a treasure hunt web game which provides  information regarding historical tourist places in Sri Lanka. The user has to complete a set of challenges to proceed to the next round. The end goal of this game is to create awareness of various locations and to encourage users to visit them.</p>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <h4>Rules of Treasure Hunt</h4>
        </div>
    </div>

    <div class="row">
         <div class="col-md-12 p_description">
            <p>Rules of the treasure hunt are simple. Your booked trip contains variable number of attractions. You will be provided instructions to help you reach the destination. Once you reach your destination, you will be provided with a question. If answered correctly, next location details will be provided. With every correct answer, you will gain points which can be redeemable for discounts. Book a trip soon to play the game.</p>
        </div>
    </div>
    <br>

    <div class="row">
        <div id="link_to_game" class="buttonlink b_center" onclick="gotoGame('1')">Go to game</div>   
    </div>
    <br>

    <!-- Newsletters Created by Sinthujan - 2013046 -->
    <div class="row">
        <div class="col-md-12">
            <h4>Newsletters</h4>
        </div>
    </div>
    <div class="row">
         <div class="col-md-12 p_description">
            <p>Need to keep updated on upcoming events? Subscribe to our newsletters.</p>
        </div>
    </div>
    <div class="row">
         <div class="col-md-12">
            <section class="flexbox">  
                <div class="stretch">
                    <input class="trip_code_textfield" type="text" id="email" name="email" placeholder="Your Email">
                </div>
                <div class="normal">   
                    <input class="buttonlink b" type="submit" id="subscribe_btn" name="subscribe_btn" value="Subscribe"> 
                </div>    
            </section> 
        </div>
    </div>
    <script type="text/javascript">
        document.getElementById("subscribe_btn").onclick = function () {
            //Retrieve values 
            var to_email = document.getElementById("email").value;
            document.getElementById("email").value = "";
            var message = "This is a test newsletter from Trails On Rails";
            emailjs.send("default_service","template_MzeOEPaf",{to_email: to_email, message_html: message}); 
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


