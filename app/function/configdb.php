<?php
session_start();
$dbhost = 'localhost';  
$dbuser = 'Xelinel32';  
$dbpass = "123qaz";  
$conn = mysqli_connect($dbhost, $dbuser, $dbpass) or die ("Помилка зв'язку з базою даних");  
$dbname = 'colevents.com.ua';  
$connection = mysqli_select_db($conn,$dbname); 
?>