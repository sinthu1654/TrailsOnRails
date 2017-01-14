<?php 
//Created by Sandaroo - 2013197; Edited by Sinthujan - 2013046

function getConnection() {

    $server = "localhost";
    $username = "root";
    $password = "";
    $db = "trails_on_rails";

    /*$username = "admin";
    $password = "password";
    $db = "id523957_trails_on_rails";*/

    $conn = new mysqli($server, $username, $password, $db);  
    
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }   

    return $conn;
}

?>