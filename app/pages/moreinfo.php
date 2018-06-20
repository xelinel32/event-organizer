<?php include("pages_include/up_style.php") ?>
<body>
	<header class="top_header">
		<?php include("../include/header.php") ?>
	</header>
	<div class="myinfobars">
		<div class="container">
			<div class="row">
				<div class="col-md-8">
					<div class="box_news">
						<div class="inf">
							<h1>Юридична інформація:</h1>
							<p>Наша адреса: 14030, м. Чернігів, вул. Захисників України, 25 | тел. (04622) 3-41-09 - приймальня | телефони для довідок: (0462) 670-207, (0462) 95-55-58, (0462) 67-38-06 | e-mail: ktkt.cnukr.net , chrmtukr.net </p>
							<h1>Навчальний заклад:</h1>
							<p>Шаблон сайту налагоджений на фіксовану ширину робочого поля для роздільної здатності монітора мінімум 800х600. Сайт протестовано на браузерах FireFox, Opera, Chrome, Explorer 8. У Explorer 9 та вище можливі проблеми з відображенням та розташуванням окремих елементів сайту.</p>		
							<h1>Правила для користувачів\студентів:</h1>
							<p>Для того щоб залишати коментарі та відгуки, а також організовувати заходи треба авторизуватись!</p>
							<h1>Звернутися за допомогою на пошту:</h1>
							<form method="post" id="forminfo">
								<input type="text" class="infinp" name="name_full" required placeholder="Як вас звуть?"/><br>
								<input type="email"  class="infinp" name="contact" required placeholder="Вашу електронну адресу?"/><br>
								<textarea name="message" required rows="5" placeholder="Ваша пропозиція?" /></textarea><br>
								<input type="submit" value="Надіслати">
							</form>
						</div>
					</div>
					<?php
					$sitename = "colevents.com.ua";
					if (isset ($_POST['message'])) {
						mail ("bombopedroua@gmail.com",
							"Вам прийшло нове повідомлення з вашого сайту : ".$sitename,
							"\nПовне iм'я: ".$_POST['name_full']."\nEmail: ".$_POST['contact']."\nПовідомлення: ".$_POST['message']);
						echo "<script>alert('Повідомлення успішно відправлено!')</script>";
					}
					?><br>
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