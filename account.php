<!-- Created by Sandaroo - 2013197; Edited by Sinthujan - 2013046-->

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
        head("My Account");
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
            <center><h2>My Account</h2></center>
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
    
    <div class="panel-group">
        <?php 
            include("php/controllers/user_ctr.php");
            getUser(1);
        ?> 

        <div class="panel panel-default">
           <div class="panel-body">
                <div class="row">
                    <div class="col-md-6">
                        <h4>Visited Places</h4>
                        <ul class="vplacse_list">
                            <li class="vplacse_list_item">Galle</li>
                            <li class="vplacse_list_item">Kandy</li>
                        </ul>
            
                    </div>
                    <div class="col-md-6">
                        <h4>Gained Points</h4>
                        <?php
                            if(!isset($_SESSION["game_points"])){
                                echo "<center><div>Haven't played the game</div></center>";
                            }else if(count($_SESSION["game_points"])>1){
                            ?>
                        <div class="table-responsive">  
                            
                            <table class="table table-condensed">
                                <thead>
                                    <tr class="colored_tr">
                                        <th>Trip</th>
                                        <th>Points</th> 
                                    </tr>
                                </thead>
                                <tbody>
                                 
                                    <?php  
                                $total=0;
                                    foreach ($_SESSION["game_points"] as $key => $value){
                                        if($key!="current" &&$key!=""){
                                            $total+=$_SESSION["game_points"][$key];
                                        echo "<tr>
                                                <td>".$key."</td>
                                                <td>".$_SESSION["game_points"][$key]."</td> 
                                            </tr>";
                                        }
                                    }
                                        
                                    ?>  
                                    <tr class="colored_tr">
                                        <td>Total</td>
                                        <td><?php echo $total;?></td> 
                                    </tr>
                                </tbody>
                            </table>
                            
                        </div>
                        <?php
                            }
                            ?>
                    </div>
               </div>
            </div>
         </div>
        <div class="panel panel-default">
            <div class="panel-body">
                <div class="row"> 
                    <div class="col-md-6">
                        <h4>Favourite Places</h4>
                        <?php 
                            if(isset($_SESSION["favourite"]) && count($_SESSION["favourite"])>0){ 
                                ?>
                        <ul class="vplacse_list" id="favlist">
                            <?php
                                foreach($_SESSION["favourite"] as $x => $x_value) { 
                                    echo "<li class='vplacse_list_item'>".$x."</li>";
                                } ?>                       
                        </ul>
                            <?php } else{
                                echo "<center>no favourite places</center>";} 
                            ?>
                    </div>
                </div>
                <div class="row">
                     <div class="col-md-12 p_description">
                        <p>Want to share your favorite list?</p>
                    </div>
                </div>
                <div class="row">
                     <div class="col-md-6">
                        <section class="flexbox">  
                            <div class="stretch">
                                <input class="trip_code_textfield" type="text" id="email" name="email" placeholder="Email">
                            </div>
                            <div class="normal">   
                                <input class="buttonlink b" type="submit" id="send_btn" name="send_btn" value="Send List"> 
                            </div>    
                        </section> 
                    </div>
                </div>
            </div>
        </div>        
    </div>

    <script type="text/javascript">
        document.getElementById("send_btn").onclick = function () {
            //Retrieve favorite list
            var values = document.getElementById('favlist');
            //Retrieve values 
            var to_email = document.getElementById("email").value;
            document.getElementById("email").value = "";
            var message = 'This is my favorite trip list: (' + values.innerText + ')';
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