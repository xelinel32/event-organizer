<?php
include '../function/configdb.php';
//Checking User Logged or Not
if(empty($_SESSION['user'])){
 header('location:../index.php');
}
//Restrict User or Moderator to Access Admin.php page
if($_SESSION['user']['user_type']=='user'){
 header('location:../user/user');
}
?>
<h1>Wellcome to <?php echo $_SESSION['user']['username'];?> Page</h1>


<link rel="stylesheet" href="style.css" type="text/css"/>
<div id="profile">
<h2>User name is: <?php echo $_SESSION['user']['username'];?> and Your Role is :<?php echo $_SESSION['user']['user_type'];?></h2>
<div id="logout"><a href="../function/logout">Please Click To Logout</a></div>
</div>