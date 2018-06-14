<?php include("../pages/pages_include/up_style.php") ?>
<?php 
if($_GET['id'] == $_SESSION['user']['id']){
echo "<script>location='../pages/404'</script>";
}
?>
<body>
<header class="top_header">
<?php include("../include/header.php") ?>
</header>
<div class="myinfobars">
<div class="container">
<div class="row">
<div class="col-md-8">
	<div class="box_news">
		<div class="newevent">
			<h3>Форма організації заходу</h3>
			<div class="formnewevent">
				<form action="eventsprocess.php" method="post" enctype="multipart/form-data">
					<div class="form-group">
						<label>Назва заходу</label><br>
						<input class="form-control" type="text" placeholder="Назва виховної роботи" name="name_event" required><br>
						<label for="exampleFormControlSelect1">Категорія заходу</label><br>
						<select class="form-control" id="exampleFormControlSelect1" name="cat_event">
							<?php $query = "SELECT `id`,`category` FROM `category_events`"; 
							$categories =  mysqli_query($conn,$query);
							?>	
							<option></option>
							<?php while($row = mysqli_fetch_assoc($categories)){ ?>
								<option value="<?php echo $row['id'] ?>"><?php echo $row['category']?></option>
							<?php } ?>
						</select></br>
						<label for="exampleFormControlSelect1">Місце проходження заходу</label><br>
						<select class="form-control" id="exampleFormControlSelect1" name="location_event">
							<?php $query = "SELECT `id`,`title_location` FROM `location`"; 
							$locations =  mysqli_query($conn,$query);
							?>	
							<option></option> 
							<?php while($row = mysqli_fetch_assoc($locations)){ ?>
								<option value="<?php echo $row['id'] ?>"><?php echo $row['title_location']?></option>
							<?php } ?>
						</select></br>
						<label for="exampleFormControlFile1">Зображення</label><br>
						<input class="form-control-file" id="exampleFormControlFile1" required type="file" type="file" name="img_event" multiple accept="image/*,image/jpeg"><br>
						<label>Початок заходу</label>
						<input class="form-control" value="2018-08-19T13:45:00" step="1" id="example-date-input" required type="datetime-local" name="start_event"><br>
						<label>Кінець заходу</label>
						<br><input value="2018-08-19T13:45:00" step="1" id="example-date-input" class="form-control" required type="datetime-local" name="end_event"><br>
						<label>Довгота для Google Maps</label>
						<input class="form-control" type="text" id="lat" name="lat_name" required placeholder="00.000000"><br>
						<label>Широта для Google Maps</label>
						<input class="form-control" id="long" placeholder="00.000000" type="text" name="lng_name" required><br>
						<label>
						Виберіть координати клікнувши на карту</label>
						<div id="map" style="width:100%; height:350px; border:2px solid #00ff00;"></div><br>
						<script type="text/javascript">
							function initMap() {
								var bogor = {lat: 51.495866, lng: 31.2204985};
								var map = new google.maps.Map(document.getElementById('map'), {
									center: bogor,
									scrollwheel: false,
									zoom: 12
								});
								google.maps.event.addListener(map, 'click', function(event){
									document.getElementById('lat').value = event.latLng.lat();
									document.getElementById('long').value = event.latLng.lng();
								});
							}
						</script>
						<label for="exampleFormControlTextarea1">Короткий опис</label><br>
						<textarea required name="preview_event" class="form-control" id="exampleFormControlTextarea1" rows="2" placeholder="Що буде за захід?"></textarea><br>
						<label>Повний опис</label><br>
						<textarea required class="form-control" id="exampleFormControlTextarea1" name="full_event" cols="80" rows="10" placeholder="Повний опис заходу"></textarea><br>
						<input class="btn btn-light" type="submit" value="Додати захід" name="btn_new_event">
					</div>
				</form>
				<div style="clear: both;border-top: 1px solid black"><br></div>
				<div class="infoevents">
					<h5>Правила оформлення заходу</h5>
					<ul class="list-group list-group-flush">
						<li class="list-group-item">Всі заходи перевіряються та редагуються адміністратором.</li>
						<li class="list-group-item">Текстові поля повинні мати не менше 10 символі.</li>
						<li class="list-group-item">Назва заходу не повинна містити цифр.</li>
						<li class="list-group-item">Свої заходи можна редагувати та видаляти у профілі.</li>
						<li class="list-group-item">Якщо не знайшли підходящого місця заходу, можна його додати.</li>
						<li class="list-group-item">Довготу та широту задавати через крапку(52.323324, 30.245455)</li>
						<li class="list-group-item">У полі можна використовувати теги для форматування тексту(&lt;p&gt;&lt/p&gt;,&lth1&gt;&lt/h1&gt,&ltbr&gt)</li>
					</ul>
				</div>
			</div>
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
<div class="up_button">
<img src="../img/up.png">
</div>		
<?php include("../include/bot_script.php") ?>
</body>
<?php include("../modal_window.php") ?>
</html>