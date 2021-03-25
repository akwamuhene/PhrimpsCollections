<?php
include('db/conn.php');
/*
This first bit sets the email address that you want the form to be submitted to.
You will need to change this value to a valid email address that you can access.
*/
$webmaster_email = "casante47@gmail.com";

/*
This bit sets the URLs of the supporting pages.
If you change the names of any of the pages, you will need to change the values here.
*/
$feedback_page = "https://test.program-x.org/";
$error_page = "error_message.html";
$thankyou_page = "thank_you.html";

$email = $_POST['email'] ;
$phone = $_POST['phone'] ;
$fname = $_POST['fname'] ;
$city = $_POST['city'] ;
$address = $_POST['address'] ;
$region = $_POST['region'] ;
/*$order = implode(', ',  $_POST['order']) ;*/
$cart = $_POST['cart'] ;
$qty = $_POST['qty'] ;
$payment = $_POST['payment'] ;
$agreement = $_POST['agreement'] ;

/*
This next bit loads the form field data into variables.
If you add a form field, you will need to add it here.
*/
$email = $_REQUEST['email'] ;
$phone = $_REQUEST['phone'] ;
$fname = $_REQUEST['fname'] ;
$city = $_REQUEST['city'] ;
$address = $_REQUEST['address'] ;
$region = $_REQUEST['region'] ;
$cart = $_POST['cart'] ;
$qty = $_REQUEST['qty'] ;
$payment = $_REQUEST['payment'] ;
$agreement = $_REQUEST['agreement'] ;
$msg = 
"Full Name: " . $fname . "\r\n" . 
"Email: " . $email . "\r\n" . 
"Phone: " . $phone . "\r\n" .
"City: " . $city . "\r\n" .
"Address: " . $address . "\r\n" .
"Region: " . $region . "\r\n" .
"Payment: " . $payment . "\r\n" .
"Ordered Item(s): " . $cart . "\r\n" .
"Quatity: " . $qty ;

/*
The following function checks for email injection.
Specifically, it checks for carriage returns - typically used by spammers to inject a CC list.
*/
function isInjected($str) {
	$injections = array('(\n+)',
	'(\r+)',
	'(\t+)',
	'(%0A+)',
	'(%0D+)',
	'(%08+)',
	'(%09+)'
	);
	$inject = join('|', $injections);
	$inject = "/$inject/i";
	if(preg_match($inject,$str)) {
		return true;
	}
	else {
		return false;
	}
}

// If the user tries to access this script directly, redirect them to the feedback form,
if (!isset($_REQUEST['email'])) {
header( "Location: $feedback_page" );
}

// If the form fields are empty, redirect to the error page.
elseif (empty($fname) || empty($email)) {
header( "Location: $error_page" );
}

/* 
If email injection is detected, redirect to the error page.
If you add a form field, you should add it here.
*/
elseif ( isInjected($email) || isInjected($fname)  || isInjected($phone) ) {
header( "Location: $error_page" );
}

// If we passed all previous tests, send the email then redirect to the thank you page.
else {
    
	mail( "$webmaster_email", "PHRIMPS COLL. ITEM ORDER INFO.", $msg );

mysqli_query($conn,"insert into pending (fname, email, phone, address, city, region, orderconfirm, qty, payment, agreement, rec_time) values ('$fname','$email','$phone','$address','$city','$region','$order','$qty','$payment','$agreement', NOW())");

	header( "Location: $thankyou_page" );
}
?>