<?php
// Check for empty fields
if(empty($_POST['firstName'])  		   ||
   empty($_POST['lastName']) 		   ||
   empty($_POST['phoneNumber']) 	   ||
   empty($_POST['reservationEmail'])   ||
   empty($_POST['calendar'])  		   ||
   empty($_POST['time']) 		       ||
   empty($_POST['departure'])	           ||
   empty($_POST['arriving'])	           ||
   empty($_POST['address'])	           ||
   empty($_POST['city'])  		       ||
   empty($_POST['state']) 		       ||
   empty($_POST['airline']) 		   ||
   empty($_POST['flightNumber'])	   ||

   !filter_var($_POST['reservationEmail'],FILTER_VALIDATE_EMAIL))
   {
	echo "No arguments Provided!";
	return false;
   }

$firstName          = $_POST['firstName'];
$lastName           = $_POST['lastName'];
$phoneNumber        = $_POST['phoneNumber'];
$email_address      = $_POST['reservationEmail'];
$calendar           = $_POST['calendar'];
$time               = $_POST['time'];
$departure           = $_POST['departure'];
$arriving           = $_POST['arriving'];
$address            = $_POST['address'];
$city               = $_POST['city'];
$state              = $_POST['state'];
$airline            = $_POST['airline'];
$flightNumber       = $_POST['flightNumber'];

// Create the email and send the message
$to = 'contact@newstarairporter.com';
$email_subject = "Website Reservation Form. Customer Name:  $firstName";
$email_body = "You have received a new Reservation from your website.\n\n"."Here are the details:\n\nName: $firstName $lastName\n\nEmail: $email_address\n\nPhone: $phoneNumber\n\nReservation Date: $calendar\n\nReservation Time: $time\n\nDeparting or Arriving: $departure $arriving\n\nAddress: $address $city #State\n\nAirline: $airline\n\nFlight Number: $flightNumber";
$headers = "From: $email_address\n";
$headers .= "Reply-To: $email_address";
mail($to,$email_subject,$email_body,$headers);
return true;
?>