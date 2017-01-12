<?php  
//Created by Sandaroo - 2013197

/* Retrieve all comments from db for a particular trip */
function tripComments($trip_id){ 
     
    $conn = getConnection();   
     
    $sql = "SELECT * FROM comment WHERE TripId  = '".$trip_id."'"; 
    $result = $conn->query($sql); 
    $done="";
    if ($result->num_rows > 0) { 
    while($row = $result->fetch_assoc()) {                       
        $sql2 = "SELECT * FROM user WHERE UserId  = '".$row["UserId"]."'";            
        $result2 = $conn->query($sql2);            
        while($row2 = $result2->fetch_assoc()) {  
            
            if($done=="done"){
                echo "<hr class='comment_hr'>";
            }else{ 
                $done="done";
            }
            include("php/templates/comment/comment_item_temp.php");           
        }                  
    } 
    }else{
        include("php/templates/comment/nocomment_temp.php");    
    }
    $conn->close();
}

?>