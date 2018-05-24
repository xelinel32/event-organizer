<?php
session_start();
$host="localhost";
$user="root";
$pass="";
$db_name="colevents.com.ua";
$link=mysql_connect($host,$user,$pass);
mysql_select_db($db_name,$link);
if($link){} else {
    header("Location: colevents.com.ua/pages/404.php");
}
?>