<!DOCTYPE html>
<!--[if lt IE 7]><html lang="ru" class="lt-ie9 lt-ie8 lt-ie7"><![endif]-->
<!--[if IE 7]><html lang="ru" class="lt-ie9 lt-ie8"><![endif]-->
<!--[if IE 8]><html lang="ru" class="lt-ie9"><![endif]-->
<!--[if gt IE 8]><!-->
<html lang="ru">
<!--<![endif]-->
<head>
	<meta charset="utf-8" />
	<title>COLEVENTS - Site for educational work and organization of events</title>
	<meta name="description" content="Site for educational work and organization of events" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="shortcut icon" href="../img/favicon.ico" />
	<link rel="stylesheet" href="../libs/bootstrap/bootstrap-grid.min.css" />
	<link rel="stylesheet" href="../libs/font-awesome-4.7.0/css/font-awesome.css" />
	<link rel="stylesheet" href="../css/fonts.css" />
	<link rel="stylesheet" href="../css/main.css" />
	<link rel="stylesheet" href="../css/media.css" />
	<link rel="stylesheet" href="../libs/mobilemenu/jquery.mmenu.all.css" />
	<link rel="stylesheet" href="../libs/superfish/superfish.css" />
	<link rel="stylesheet" href="../libs/superfish/megafish.css" />
	<link rel="stylesheet" href="../css/hard_style.css">
	<link rel="stylesheet" href="../libs/bootstrap/bootstrap.min.css">
</head>	
<body>
<header class="top_header">
	<?php require_once("../include/header.php") ?>
</header>
<div class="myinfobars">
    <div class="container">
        <div class="col-md-12">
            <div class="row">
			 <h3>Інформацыя про сайт</h3>
			 <div class="inf">
			 <h1>Юридична інформація:</h1>
	<p>ООО «Седляр Артем Віталійович» Юр. адреса:201999, Україна, Чернігів, д.53, стор.37 свідоцтва про Державну реєстрацію 1147746441963 ІПН +380935039351</p>
		<h1>Наш Офіс:</h1>
	<p>Україна, м. Чернігів, Чернігівська, Одинцова, Шевченка 53У, зал 1, 2-й поверх, д. 20</p>
	<h1>Звернутися за допомогою на пошту :</h1>
<form method="POST" id="forminfo">
	<input type="text" class="infinp" name="name_full" required placeholder="Як вас звуть?"/><br>
	<input type="email"  class="infinp" name="contact" required placeholder="Вашу електронну адресу?"/><br>
	<textarea name="message" required rows="5" placeholder="Ваша пропозиція?" /></textarea><br>
	<input type="submit" value="Надіслати">
</form>
	</div>
<?php
$sitename = "colevents.com.ua";
if (isset ($_POST['message'])) {
  mail ("bombopedroua@gmail.com",
        "Вам прийшло нове повідомлення з вашого сайту : ".$sitename,
        "\nПовне iм'я: ".$_POST['name_full']."\nEmail: ".$_POST['contact']."\nПовідомлення: ".$_POST['message']);
  echo "<div style='color:green'>Повідомлення успішно відправлено!<br><a style='color:red; text-decoration:none' href='moreinfo.php?f=news&mod=add'>Оновити</a><br></div>";
}
?><br>
        </div>
        </div>
	</div>
</div>	
<footer>
	<?php require_once("../include/footer.php") ?>
</footer>	
	<!--[if lt IE 9]>
	<script src="../libs/html5shiv/es5-shim.min.js"></script>
	<script src="../libs/html5shiv/html5shiv.min.js"></script>
	<script src="../libs/html5shiv/html5shiv-printshiv.min.js"></script>
	<script src="../libs/respond/respond.min.js"></script>
	<![endif]-->
	<script src="../libs/jquery/jquery-3.3.1.min.js"></script>
	<script src="../libs/superfish/superfish.min.js"></script>
  	<script src="../libs/mobilemenu/jquery.mmenu.min.all.js"></script>
	<script src="../js/common.js"></script>
  	<script src="../libs/bootstrap/bootstrap.min.js"></script>
</body>
	<?php require_once("../modal_window.php") ?>
</html>