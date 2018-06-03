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
<h1>Ласкаво просимо <?php echo $_SESSION['user']['username'];?></h1>


<link rel="stylesheet" href="style.css" type="text/css"/>
<div id="profile">
<h2>Ваше ім'я: <?php echo $_SESSION['user']['username'];?> та роль :<?php echo $_SESSION['user']['user_type'];?></h2>
<div id="logout"><a href="../function/logout">Вийти</a></div>
</div>