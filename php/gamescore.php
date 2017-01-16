<!-- Created by Sandaroo - 2013197 -->
<?php 
 
session_start();    
 
if(isset($_SESSION["game_points"])&&isset($_SESSION["game_points"]["current"])){
    
    $_SESSION["game_points"][$_SESSION["game_points"]["current"]]= 10;
}  
?>