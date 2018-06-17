<?php
// menu active
function activemenu($activemenu)
{
  $menuitem = basename($_SERVER['SCRIPT_NAME']);
  if ($activemenu == $menuitem) { 
    return "style=\"background:#d39e00;border:#d39e00;\""; 
  }
}
?>
	<div class="admin_welcome">
		<h4>Ласкаво просимо, <?php echo $_SESSION['user']['username'];?>! <br><span><?php echo $_SESSION['user']['user_type'];?></span></h4>
	</div>
	<div class="admin_menu">
		<ul>
			<li>
				<a <?=activemenu("catdashboard.php")?> class="btn btn-sm btn-warning" role="button" href="catdashboard">Категорії</a>
				<a <?=activemenu("admin.php")?> class="btn btn-sm btn-warning" role="button" href="admin">Заходи</a>
				<a <?=activemenu("blogdashboard.php")?> class="btn btn-sm btn-warning" role="button" href="blogdashboard">Статті</a>
				<a <?=activemenu("locdashboard.php")?> class="btn btn-sm btn-warning" role="button" href="locdashboard">Місця заходів</a>
				<a <?=activemenu("userdashboard.php")?> class="btn btn-sm btn-warning" role="button" href="userdashboard">Юзери</a>
				<a <?=activemenu("commentsdashboard.php")?> class="btn btn-sm btn-warning" role="button" href="commentsdashboard">Коментарі та відгуки</a>
				<a <?=activemenu("commentsdashboard.php")?> class="btn btn-sm btn-warning" role="button" href="commentsdashboard">Повідомлення</a>
				<a <?=activemenu("index.php")?> class="btn btn-info" role="button" href="../user/user?id=<?php echo $_SESSION['user']['id']; ?>">Мій профіль</a>
			</li>
		</ul>
	</div>