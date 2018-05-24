<?php include("pages_include/up_style.php") ?>
<body>
<header class="top_header">
	<?php include("../include/header.php") ?>
</header>
<div class="myinfobars">
    <div class="container">
        <div class="col-md-12">
            <div class="row">
			 <h3>Інформація про сайт</h3>
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
	<?php include("../include/footer.php") ?>
</footer>	
<?php include("pages_include/bot_script.php") ?>
</body>
	<?php include("../modal_window.php") ?>
</html>