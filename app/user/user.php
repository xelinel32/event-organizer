<?php
include '../function/configdb.php';
//Checking User Logged or Not
if(empty($_SESSION['user'])){
 header('location:../index');
}
//Restrict admin or Moderator to Access user.php page
if($_SESSION['user']['user_type']=='admin'){
 header('location:../admin/admin');
}
?>
<?php include("../include/up_style.php") ?>
<body>
<header class="top_header">
	<?php include("../include/header.php") ?>
</header>
  <div class="main_content_news">
    <div class="container">
    <div class="row">
      <div class="col-md-8">
          <!-- main -->
<div class="news_content">
	            <div class="box_news">

Профіль користувача  <?php echo $_SESSION['user']['username'];?> 

          <?php
  if(isset($_GET['id'])){
    $sql = mysql_query("SELECT * FROM `multi_login` WHERE `id` = ".$_GET['id']."") or die("Помилка");
    while($result = mysql_fetch_array($sql)){
?>
    <?php echo$result['email']; ?>
  <?php }} mysql_close(); ?>
          </div>
            </div>
                        </div>
          <!-- Sidebar -->
            <?php include("../include/sidebar.php"); ?>
          <!-- Sidebar -->
        </div>
    </div>
</div>
<footer>
	<?php include("../include/footer.php") ?>
</footer>	
  <?php include("../include/bot_script.php") ?>
</body>
  <?php include("../modal_window.php") ?>
</html>