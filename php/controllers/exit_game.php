<?php
//Created by Sandaroo - 2013197

session_start();       

if(isset($_SESSION["game_exit_loc"])&&$_SESSION["game_exit_loc"]==2) {      
    header('Location:../../game.php');  
} else {        
    header('Location:../../index.php');    
}
  
?>  