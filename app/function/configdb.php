<?php
session_start();
$dbhost = 'localhost';  
$dbuser = 'Xelinel32';  
$dbpass = '123qaz';  
$dbname = 'colevents.com.ua';
$conn = mysqli_connect($dbhost, $dbuser, $dbpass) or die ("Помилка зв'язку з базою даних");  
$connection = mysqli_select_db($conn,$dbname); 
if(empty($conn)){
		header('location:../pages/404');
	}
?>
