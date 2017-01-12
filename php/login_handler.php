<?php 
//Created by Sandaroo - 2013197

if(isset($_POST['login'])&&isset($_POST['username'])){         
    session_start();   
    session_unset();  
    $_SESSION["login_user"] = $_POST['username'];      
}  
?>