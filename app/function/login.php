<?php
include 'configdb.php';
if(isset($_POST['login_btn'])){
  $username=mysqli_real_escape_string($conn,$_POST['username']);
  $password=mysqli_real_escape_string($conn,md5($_POST['password']));
  if(empty($username)&&empty($password)){
  $error= 'Помилка в авторизації перевірте вхідні дані';
  header('location:../index');
  }else{
 //Checking Login Detail
 $result=mysqli_query($conn,"SELECT * FROM multi_login WHERE username='$username' AND password='$password'");
 $row=mysqli_fetch_assoc($result);
 $count=mysqli_num_rows($result);
 if($count==1){
      $_SESSION['user']=array(
   'username'=>$row['username'],
   'password'=>$row['password'],
   'user_type'=>$row['user_type'],
   'id'=>$row['id']
   );
   $role=$_SESSION['user']['user_type'];
   //Redirecting User Based on Role
    switch($role){
  case 'Юзер':
  header('location:../index');
  break;
  case 'Адміністрація':
  header('location:../index');
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