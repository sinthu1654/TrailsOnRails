<!-- Created by Sandaroo - 2013197 -->
<?php 
session_start();   
//$_SESSION["favourite"]=null;
if(!isset($_SESSION["favourite"])){
    $_SESSION["favourite"]= array();
} 
if(isset($_POST['favourite'])&&isset($_POST['tripname'])){         
      echo $_POST['favourite'].$_POST['tripname'];
    
    if($_POST['favourite']=="add" && !isset($_SESSION["favourite"][$_POST['tripname']])){ 
        
        $_SESSION["favourite"][$_POST['tripname']] = $_POST['tripname']; 
        echo " added ";
    }else if($_POST['favourite']=="rem" && isset($_SESSION["favourite"][$_POST['tripname']])){ 
       
        unset($_SESSION["favourite"][$_POST['tripname']]);

        echo " no added ";
        
    }else{
        echo " error ";
    }
}  
print_r($_SESSION["favourite"]); 
?>