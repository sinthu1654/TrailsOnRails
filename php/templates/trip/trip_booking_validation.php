<?php 

	//Created by Tharindu - 2013231 - Not working

	// Initialize variables to null.
	$destination =""; // Destination
	$date_time =""; // Trip Date and Time
	$class =""; // Train class
	$num_seats =""; // No. of seats
	$pay_method =""; // Payment Method
	$card_no =""; // Card No
	$destinationError ="";
	$date_timeError ="";
	$classError ="";
	$num_seatsError ="";
	$pay_methodError ="";
	$card_noError ="";
	$successMessage =""; // On submitting form below function will execute.

	if(isset($_POST['submit'])) { // Checking null values in message.
	if (empty($_POST["destination"])) {
		$destinationError = "Destination is required";
	}
	else {
		$destination = test_input($_POST["destination"]); // check destination only contains letters and whitespace
	if (!preg_match("/^[a-zA-Z ]*$/",$destination))
	{
	$destinationError = "Only letters and white space are allowed";
	}
	} // Checking null values in the destination.

	if (empty($_POST["date_time"]))
	{
	$date_timeError = "Date and Time is required";
	}
	else
	 {
	$date_time = test_input($_POST["date_time"]);
	if( isset( $_GET["day"] && (int)$_GET['day'] > 0) {

	$msg = "I'd enjoy some action on the ". $_GET['day'] ." day of this month please" ;

	}
	} // Checking null values in Date and Time.


	if (empty($_POST["class"]))
	{
	$classError = "Train Class is required";
	}
	else
	{
	$class = test_input($_POST["class"]);
	} // Checking null values in the class.

	if (empty($_POST["num_seats"]))
	{
	$num_seatsError = "No. of seats are required";
	}
	else
	 {
	$num_seats = test_input($_POST["num_seats"]);
	} // Checking null values for no.of seats. 


	if (empty($_POST["pay_method"]))
	{
	$pay_methodError = "Payment method is required";
	}
	else
	 {
	$pay_method = test_input($_POST["pay_method"]);
	if (preg_match("/^[a-zA-Z ]*$/",$pay_method)) // check payment method only contains letters and whitespace
	}  // Checking null values for payment method.
	 

	if (empty($_POST["card_no"]))
	{
	$card_noError = "Card No is required";
	}
	else
	 {
	$card_no = test_input($_POST["card_no"]);
	} // Checking null values for card no.

	if( !($destination=='') && !($date_time=='') && !($class=='') &&!($num_seats=='') && !($pay_method=='') &&!($card_no=='') )

	// Submit form with id function.
	function submit_by_id() {
	$destination = document.getElementById("destination").value;
	$date_time = document.getElementById("date_time").value;
	$class = document.getElementById("class").value;
	$num_seats = document.getElementById("num_seats").value;
	$pay_method = document.getElementById("pay_method").value;
	$card_no = document.getElementById("card_no").value;
	if (validation()) // Calling validation function
	{
	document.getElementById("form_id").submit(); //form submission
	alert(" Destination : " + destination + " \n Date_Time : " + date_time +  " \n Class : " + class + " \n Number of Seats : " + num_seats + "
	\n Payment Method : " + pay_method + " \n Card No : " + card_no + "  \n Form Id : " + document.getElementById("form_id").getAttribute("id") + "\n\n Form Submitted Successfully......");
	}
	}

	} // Function for filtering input values.
	function test_input($data)
	{
	$data = trim($data);
	$data =stripslashes($data);
	$data =htmlspecialchars($data);
	return $data;
	}
	?>