<?php 
//Created by Sandaroo - 2013197

include("php/db.php");

/* Get trip list */
function tripList(){
         
    $conn = getConnection(); 
    
    $sql = "SELECT * FROM trip";
    $result = $conn->query($sql);
 
    
    if ($result->num_rows > 0) { 
        while($row = $result->fetch_assoc()) {
            include("php/templates/trip/trip_list_item.php"); 
        }
    }  
    $conn->close();
    
} 

/* Get trip details */
function trip($id){ 
     
    $conn = getConnection();   
     
    $sql = "SELECT * FROM trip WHERE TripId  = '".$id."'";
    $result = $conn->query($sql); 
    
    
    if ($result->num_rows > 0) { 
        
        while($row = $result->fetch_assoc()) {
            include("php/templates/trip/trip_details_temp.php"); 
        }
    }  
    $conn->close();
    
} 

?>