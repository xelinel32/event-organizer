<?php include("../pages/pages_include/up_style.php") ?>
<?php 
if($_GET['id'] == $_SESSION['user']['id']){
echo "<script>location='../pages/404'</script>";
}
?>
<body onload="initMap()">
<header class="top_header">
<?php include("../include/header.php") ?>
</header>
<div class="myinfobars">
<div class="container">
<div class="row">
<div class="col-md-8">
<div class="box_news">
	<div class="newevent">
		<h3>Форма редагування вих. роботи</h3>
		<div class="formnewevent">
			<form action="modules/editeventprocess.php" method="post" enctype="multipart/form-data">
				<div class="form-group">
					<label>Назва</label><br>
					<input class="form-control" type="text" name="name_event" required placeholder="Назва виховної роботи"><br>
					<label for="exampleFormControlSelect1">Категорія вих. роботи</label><br>
					<select class="form-control" id="exampleFormControlSelect1" name="cat_event">
						<?php $query = "SELECT `id`,`category` FROM `category_events`"; 
						$categories =  mysqli_query($conn,$query);
						?>	
						<option></option>
						<?php while($row = mysqli_fetch_assoc($categories)){ ?>
							<option value="<?php echo $row['id'] ?>"><?php echo $row['category']?></option>
						<?php } ?>
					</select></br>
					<label for="exampleFormControlSelect1">Місце проходження(<a style="text-decoration:none;" href="newlocationuser">Створити</a></a>)</label><br>
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
					<label>Початок вих. роботи</label>
					<input class="form-control" value="2018-08-19T13:45:00" step="1" id="example-date-input" required type="datetime-local" name="start_event"><br>
					<label>Кінець вих. роботи</label>
					<br><input value="2018-08-19T13:45:00" step="1" id="example-date-input" class="form-control" required type="datetime-local" name="end_event"><br>
					<?php $event_id_edit_user = $_GET['user_event_id'];
             		 $sql = mysqli_query($conn,"SELECT * FROM `events` WHERE `id` = '$event_id_edit_user'") or die(mysqli_error($conn)); 
              		while($result = mysqli_fetch_array($sql)){ ?>
					<?php if ($result['id_user'] == $_SESSION['user']['id'] || $result['id_user'] !== " ") {
					} else {
						echo "<script>location='../pages/404'</script>";
					} ?>
					<label>Довжина для Google Maps</label>
					<input class="form-control" type="text" id="lat" name="lat_name" required value="<?php echo $result['lat'] ?>"><br>
					<label>Ширина для Google Maps</label>
					<input class="form-control" id="long" type="text" name="lng_name" required value="<?php echo $result['lng'] ?>">
					<label><br>
					Виберіть координати клікнувши на карту</label>
					<script type="text/javascript">
											function initMap() {
												var map = new google.maps.Map(document.getElementById('map'), {
													center: {lat: <?php echo $result['lat'] ?>, lng: <?php echo $result['lng'] ?>},
													zoom: 13,
													mapTypeId: 'roadmap'
												});
												var input = document.getElementById('pac-input');
												var searchBox = new google.maps.places.SearchBox(input);
												map.controls[google.maps.ControlPosition.TOP_LEFT].push(input);
												map.addListener('bounds_changed', function() {
													searchBox.setBounds(map.getBounds());
												});
												var markers = [];
												searchBox.addListener('places_changed', function() {
													var places = searchBox.getPlaces();

													if (places.length == 0) {
														return;
													}
													markers.forEach(function(marker) {
														marker.setMap(null);
													});
													markers = [];
													var bounds = new google.maps.LatLngBounds();
													places.forEach(function(place) {
														if (!place.geometry) {
															console.log("Net znaka");
															return;
														}
														var icon = {
															url: place.icon,
															size: new google.maps.Size(71, 71),
															origin: new google.maps.Point(0, 0),
															anchor: new google.maps.Point(17, 34),
															scaledSize: new google.maps.Size(25, 25)
														};
														markers.push(new google.maps.Marker({
															map: map,
															icon: icon,
															title: place.name,
															position: place.geometry.location
														}));

														if (place.geometry.viewport) {
															bounds.union(place.geometry.viewport);
														} else {
															bounds.extend(place.geometry.location);
														}
													});
													map.fitBounds(bounds);
												});
												var companyPos = new google.maps.LatLng(<?php echo $result['lat'] ?>, <?php echo $result['lng'] ?>);
                         						var companyMarker = new google.maps.Marker({
                          						position: companyPos,
                          						map: map,
                          						title:"<?php echo $result['title'] ?>"
                       							});
												google.maps.event.addListener(map, 'click', function(event){
													document.getElementById('lat').value = event.latLng.lat();
													document.getElementById('long').value = event.latLng.lng();
												});
											}
										</script>
										<input id="pac-input" class="controls" type="text" placeholder="Пошук на карті">
										<div id="map" style="width:100%; height:450px; border:1px solid black;"></div><br>
					<br><label for="exampleFormControlTextarea1">Примітка*</label>
					<textarea required name="preview_event" class="form-control" id="exampleFormControlTextarea1" rows="2" placeholder="Що буде за вих. робота?"><?php echo $result['pre_event'] ?></textarea><br>
					<label>Повний опис</label><br>
					<textarea required class="form-control" id="exampleFormControlTextarea1" name="full_event" cols="80" rows="10" placeholder="Повний опис вих. роботи"><?php echo $result['big_event'] ?></textarea><br>
					<label>Мітка відвідування</label><br>
					<select name="tag" class="form-control" id="exampleFormControlSelect1">
						<option>Обов'язкове</option> 
						<option>Необов'язкове</option>  	
					</select><br>
					<input class="btn btn-light" type="submit" value="Редагувати" name="btn_edit_event">
					<a href="user?id=<?php echo $_SESSION['user']['id'];?>" class="btn btn-light float-right">Назад</a>
					<input type="text" name="user_event_id_post" hidden value="<?php echo $_GET['user_event_id'] ?>">
				</div>
			<?php } ?>
			</form>
			<div style="clear: both;border-top: 1px solid black"><br></div>
			<div class="infoevents">
			<h5>Правила оформлення вих. роботи</h5>
				<ul class="list-group list-group-flush">
					<li class="list-group-item">Всі виховні роботи перевіряються та редагуються адміністратором.</li>
					<li class="list-group-item">Текстові поля повинні мати не менше 10 символі.</li>
					<li class="list-group-item">Назва не повинна містити цифр.</li>
					<li class="list-group-item">Свої вихо. роботи можна редагувати та видаляти у профілі.</li>
					<li class="list-group-item">Якщо не знайшли підходящого місця , можна його додати.</li>
					<li class="list-group-item">Довжину та ширину задавати через крапку(52.323324, 30.245455)</li>
					<li class="list-group-item">Можна використовувати теги для форматування тексту(&lt;p&gt;&lt/p&gt;,&lth1&gt;&lt/h1&gt,&ltbr&gt)</li>
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
<script>
CKEDITOR.replace('full_event');
</script>