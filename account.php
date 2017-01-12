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
                            <li class="vplacse_list_item">Jaffna</li>
                            <li class="vplacse_list_item">Nuwara Eliya</li>
                        </ul>
            
                    </div>
                    <div class="col-md-6">
                        <h4>Gained Points</h4>
                        <div class="table-responsive">          
                            <table class="table table-condensed">
                                <thead>
                                    <tr class="colored_tr">
                                        <th>Trip</th>
                                        <th>Points</th> 
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Galle</td>
                                        <td>40</td> 
                                    </tr>
                                    <tr>
                                        <td>Kandy</td>
                                        <td>60</td> 
                                    </tr>
                                    <tr>
                                        <td>Jaffna</td>
                                        <td>30</td> 
                                    </tr>
                                    <tr>
                                        <td>Nuwara Eliya</td>
                                        <td>20</td> 
                                    </tr>
                                    <tr class="colored_tr">
                                        <td>Total</td>
                                        <td>150</td> 
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
               </div>
            </div>
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
