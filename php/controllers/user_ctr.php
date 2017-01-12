<?php 
//Created by Sinthujan - 2013046

include("php/db.php");

/* Get User Details */
function getUser($id){ 
     
    $conn = getConnection();   
     
    $sql = "SELECT * FROM user WHERE UserId  = '".$id."'";
    $result = $conn->query($sql); 
    
    
    if ($result->num_rows > 0) { 
        
        while($row = $result->fetch_assoc()) {
            include("php/templates/user/user_details_temp.php"); 
        }
    }  
    $conn->close();
    
} 

/* Get visited locations of user */
function getVisitedLocation($userid, $tripid) {

}

?>