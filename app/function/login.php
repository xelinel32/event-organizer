<?php
include 'configdb.php';
session_start();
//Getting Input value
if(isset($_POST['login_btn'])){
  $username=mysql_real_escape_string($_POST['username']);
  $password=mysql_real_escape_string($_POST['password']);
  if(empty($username)&&empty($password)){
  $error= 'Помилка в авторизації перевірте вхідні дані';
  }else{
 //Checking Login Detail
 $result=mysql_query("SELECT*FROM multi_login WHERE username='$username' AND password='$password'");
 $row=mysql_fetch_assoc($result);
 $count=mysql_num_rows($result);
 if($count==1){
      $_SESSION['user']=array(
   'username'=>$row['username'],
   'password'=>$row['password'],
   'user_type'=>$row['user_type']
   );
   $role=$_SESSION['user']['user_type'];
   //Redirecting User Based on Role
    switch($role){
  case 'user':
  header('location:../index');
  break;
  case 'admin':
  header('location:../admin/admin');
  break;
 }
 }else{
 echo "<script>alert('Пароль або логін невірні')
  window.location = '../index';
 </script>";
 }
}
}
?>
<script>window.location = '../pages/404.php';</script>