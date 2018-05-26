<?php
session_start();
$dbhost = 'localhost';  
$dbuser = 'root';  
$dbpass = "";  
$conn = mysql_connect($dbhost, $dbuser, $dbpass) or die ("Помилка зв'язку з базою даних");  
$dbname = 'colevents.com.ua';  
$connection = mysql_select_db($dbname); 
?>