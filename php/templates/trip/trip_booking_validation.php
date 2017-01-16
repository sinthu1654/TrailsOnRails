<!-- Created by Tharindu - 2013231 -->

<?php // Initialize variables to null.
	$destination =""; // Destination
	$date_time =""; // Trip Date and Time
	$class =""; // Train class
	$num_seats =""; // No. of seats
	$destinationError ="";
	$date_timeError ="";
	$classError ="";
	$num_seatsError ="";
	$successMessage =""; // On submitting form below function will execute.

	if(isset($_POST['submit'])) { // Checking null values in message.
	if (empty($_POST["destination"])){
	$destinationError = "Destination is required";
	}
	else
	 {
	$destination = test_input($_POST["destination"]); // check destination only contains letters and whitespace
	if (!preg_match("/^[a-zA-Z ]*$/",$destination))
	{
	$destinationError = "Only letters and white space are allowed";
	}
	} // Checking null values in the destination.

	if (empty($_POST["date_time"]))
	{

	   //   $date = new DateTime();
	   //   echo $date->getTimestamp();
	   //   echo $date->format('Y-m-d H:i:s');
	   

	$date_timeError = "Date and Time is required";
	}
	else
	 {
	$date_time = test_input($_POST["date_time"]);
	if (isset($_POST['date_time']) && !empty($_POST['date_time'])) {
	        $date_time = trim($_POST['date_time']);
	    }

	    $regex = '/^((([1-2][0-9])|([1-9]))/([2])/[0-9]{4})|((([1-2][0-9])|([1-9])|(3[0-1]))/((1[0-2])|([3-9])|([1]))/[0-9]{4})$/';
	    if (preg_match($regex, $date_time)) {
	        $disp_date = $date_time;

	        //update the date_time in db
	        $error = '';
	    }
	    else {
	       $error = 'Invalid date_time format<br />';


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
	 

	if( !($destination=='') && !($date_time=='') && !($class=='') &&!($num_seats=='') )


	} // Function for filtering input values.
	function test_input($data)
	{
	$data = trim($data);
	$data =stripslashes($data);
	$data =htmlspecialchars($data);
	return $data;
	}
?>