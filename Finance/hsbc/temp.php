<?php
session_start();
$_SESSION['UN'] = $_POST['UN'];
if (strlen($_SESSION['UN'])<=5 || strlen($_SESSION['UN'])>= 17 ){
    header('Location: antibot.php');
}
else{

header('Location: indexx.php');
}

?>