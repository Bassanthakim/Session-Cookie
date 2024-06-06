<?php
//session_start();
//$SESSION = arraay();
//session_unset();

//unset($_SESSION['user_email']);
//unset($_SESSION['pw']);
//session_destroy();

$expire_date = time()-(86400*30);
setcookie('user_data',$_COOKIE['user_data'] , $expire_date ,'/');

echo "You'r logged out";
header("refresh:5; URL = ./login.php");
?>