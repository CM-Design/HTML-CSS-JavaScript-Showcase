<!DOCTYPE html>
<html>
	<head>
		<title>CM Design - Contact</title>
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
		<link type="text/css" rel="stylesheet" href="css/mobile_css/Mobile_CSS.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script language="javascript" src="js/mobile_js/Mobile_JS.js"></script>
	</head>
	<body>
		<div id="container">
        <a href="mobile_index.html">
			<img id="arrow" src="images/back_arrow-04.png" onMouseDown="swapArrow()" onMouseUp="swapArrowBack()">
        </a>   
            <!--<img id="portfolio" src="Mobile_Site_18.png">-->
            <div id="about_title"> CONTACT </div>
			<div id="left-column">
			<div id="content">

			<p style="font-family:Helvetica, Arial, sans-serif; font-size:150%; font-weight:bolder; color:#666;">THANK YOU!</p>
            <p style="font-family:Helvetica, Arial, sans-serif; font-size:100%; font-weight:lighter; color:#666;">Your message has been sent and recieved.</p>
 
    </div>
    </div>
	</body>
</html>
<?php

// Basic php script to format the email that is sent to my email account
	
	// Start of the Submission POST
	
	if (isset($_POST['submit']))
	{
	
    // Input variables
	
	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$email = $_POST['email'];
	$message = $_POST['message'];
	
	
	// (Mail to) function variables and email formatting
	
	$from = $email;
	$to = 'cmdesign89@gmail.com';
	$subject = 'Graphic Design';
	$message = 'From: '.$firstname.' '.$lastname.'
	
	 '.$message;
	
	$headers = "From:$from\r\n";
	$headers .="To : $to\r\n";
	
	// (Mail to) function

mail($to, $subject, $message, $headers);

	}

?>