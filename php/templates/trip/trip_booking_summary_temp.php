<?php

    //Created by Sinthujan - 2013046

    error_reporting(0);

    //POST variables from the booking form
    $tripID = $_POST['tripid'];
    $tripCode = rand(1,9999);
    $date_time = $_POST['date_time'];
    $class = $_POST['class'];
    $num_seats = $_POST['num_seats'];
    $pay_method = $_POST['pay_method'];
    $card_no = $_POST['card_no'];

    // if fields are empty
    if (strlen($date_time) == 0 || strlen($class) == 0 || strlen($num_seats) == 0 
        || strlen($pay_method) == 0 || strlen($card_no) == 0) {
        echo "<p>* indicates mandatory fields. You must supply values for mandatory fields.</p>";
    } else {
        // else insert the booking into table
        include("php/db.php");
        $conn = getConnection();

        $sql = "INSERT INTO id523957_trails_on_rails.booking (UserId, TripId, TripCode, TripDate, Class, Seat, PaymentMethod, CardNo, PaymentStatus) 
            VALUES ('1','".$tripID."','".$tripCode."','".$date_time."','".$class."','".$num_seats."','".$pay_method."','".$card_no."','1');";

        $exeSQL = mysql_query($sql) or @$error=mysql_errno();

        if (@$error==0) {
            echo "<p>Your booking is successful. Here is the booking summary:
                     <br>Trip Code : ".$tripCode.
                    "<br>Date & Time : ".$date_time.
                    "<br>Class : ".$class.
                    "<br>No. of Booked seats : ".$num_seats.
                    "<br><br>Please note down your trip code in order to play the game!</p>";
        } else {
            echo "<p>We have encountered an issue. Sorry for the inconvenience.".mysql_error();
        }

        $conn->close();
        
    } 
        
?>