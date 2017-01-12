<?php 
//Created by Sinthujan - 2013046

include("php/db.php");

/* get Trip details */
function getTripDetails($trip_code) {

    $conn = getConnection();   
     
    $sql1 = "SELECT * FROM booking WHERE TripCode  = '".$trip_code."'";
    $result1 = $conn->query($sql1); 
    
    if ($result1->num_rows > 0) { 
        
        while($row = $result1->fetch_assoc()) {
            
            $trip_id =  $row["TripId"];

            $sql2 = "SELECT * FROM trip WHERE TripId  = '".$trip_id."'";
            $result2 = $conn->query($sql2); 

            while($row2 = $result2->fetch_assoc()) {  
            
                include("php/templates/game/game_trip_details_temp.php");

            }           
        } 
    }  
    $conn->close();

}

/* Get list of locations for a trip */
function getTripLocations($tripId) {

    $conn = getConnection();   
     
    $sql = "SELECT * FROM location WHERE TripId  = '".$tripId."'";
    $result = $conn->query($sql); 
    
    if ($result->num_rows > 0) { 
        
        while($row = $result->fetch_assoc()) {
                   
            include("php/templates/game/game_trip_location_map_temp.php");
       
        } 
    }  
    $conn->close();

}

/* Get location quiz */
function getLocationQuiz($locationId) {

    $conn = getConnection();   
     
    $sql = "SELECT * FROM quiz WHERE LocationId  = '".$locationId."'";
    $result = $conn->query($sql); 
    
    if ($result->num_rows > 0) { 
        
        while($row = $result->fetch_assoc()) {
                   
            include("php/templates/game/game_trip_location_quiz_temp.php");
       
        } 
    }  
    $conn->close();

}

?>