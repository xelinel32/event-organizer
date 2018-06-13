<?php
include '../function/configdb.php';
//Checking User Logged or Not
if(empty($_SESSION['user'])){
	header('location:../pages/404');
}
//Restrict User to Access Admin.php page
if($_SESSION['user']['user_type']=='Юзер'){
	header('location:../pages/404');
}
?>

<h3>Ласкаво просимо <?php echo $_SESSION['user']['username'];?> роль - <span><?php echo $_SESSION['user']['user_type'];?></span></h3>

<a href="../index">Головна</a>
<a href="#">Заходи</a>
<a href="#">Статті</a>
<a href="#">Місця</a>
<a href="#">Юзери</a>
<a href="#">Коментарі та відгуки</a>
