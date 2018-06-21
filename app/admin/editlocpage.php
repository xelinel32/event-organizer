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
<?php include("../include/up_style.php") ?>
<body>
<hr class="hrline">	
	<?php require_once('admin_include/admin_header.php'); ?>
	<div class="main_content_news">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="admin_content">
                    <h3 style="text-align:center">Форма редагування місця проходження вих. роботи</h3>
                    <div class="formnewevent">
						<form action="" method="post" enctype="multipart/form-data">
								<div class="form-group">
								<label>Назва</label><br>
								<input class="form-control" type="text" name="name_loc" required placeholder="Назва місця проходження"><br>
								<label>Адреса</label><br>
								<input class="form-control" type="text" name="adres_loc" required placeholder="Точна адреса"><br>
								<label>Посилання для Google Maps</label><br>
								<input class="form-control" type="url" name="url_loc" required
								placeholder="https://goo.gl/maps/uQzHS2W4cAv"><br>
						<label for="exampleFormControlSelect1">Категорія</label><br>
						<select class="form-control" id="exampleFormControlSelect1" name="cat_loc">
						<?php $query = "SELECT `id`,`category` FROM `category_events`"; 
						$categories =  mysqli_query($conn,$query);
						?>	
						<option></option>
						<?php while($row = mysqli_fetch_assoc($categories)){ ?>
                        <option value="<?php echo $row['category'] ?>"><?php echo $row['category']?></option>
                    	<?php } ?>
                      	</select></br>
								<label for="exampleFormControlFile1">Зображення</label><br>
								<input class="form-control-file" id="exampleFormControlFile1" required type="file" type="file" name="img_loc" multiple accept="image/*,image/jpeg"><br>
                                <?php $query = "SELECT * FROM `location` WHERE `id` = ".$_GET['loc_page_id'].""; 
                                $location_info =  mysqli_query($conn,$query);
                                while($row = mysqli_fetch_assoc($location_info)){
						        ?>	
                                <label for="exampleFormControlTextarea1">Примітка*</label><br>
								<textarea required name="preview_loc" class="form-control" id="exampleFormControlTextarea1" rows="2" placeholder="Короткий опис основної інформації"><?php echo $row['pre_text'] ?></textarea><br>
								<label>Повний опис</label><br>
								<textarea required class="form-control" id="exampleFormControlTextarea1" name="full_loc" cols="80" rows="10" placeholder="Повний опис основної інформації та місцезнаходження"><?php echo $row['big_text'] ?></textarea><br>
                                <input class="btn btn-light" type="submit" value="Додати" name="btn_new_loc">
								<a href="locdashboard" class="btn btn-light float-right">Назад</a>
                                <input type="text" name="user_event_id_post" hidden value="<?php echo $_GET['loc_page_id'] ?>">
                                </div>
							</form>
                                <?php } ?>
					</div>
				</div>
			</div>
		</div>
	</div>
	<hr class="hrlinebot">	
</body>
</html>
<?php include("../include/bot_script.php") ?>
<script>
CKEDITOR.replace('full_loc');
</script>
<?php

if(isset($_POST['btn_new_loc'])){
	$title = trim($_POST['name_loc']);
    $id_cat_loc = $_POST['cat_loc'];
    $loc_page_id = $_POST['user_event_id_post'];
	// image
	$uploaddir= '../img/locimg/'; 
	$fot = $_FILES['img_loc']['name'];
	$fot_dir = $uploaddir.$fot;

	$preview_loc = mysqli_real_escape_string($conn,trim($_POST['preview_loc']));
	$full_loc = mysqli_real_escape_string($conn,trim($_POST['full_loc']));
	$adress_loc = mysqli_real_escape_string($conn,trim($_POST['adres_loc']));
	$url_loc = trim($_POST['url_loc']);
	$id_user = $_SESSION['user']['id'];
	$photo_size_events  = $_FILES['img_loc']['size'];
	$type_image_events = $_FILES['img_loc']['type'];
	// parse url
	if (!preg_match("/\b(?:(?:https?|ftp) :\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$url_loc)) {

	$str_adress = strlen($adress_loc);
	$str_title = strlen($title);
	$str_prev_loc = strlen($preview_loc);
	$str_full_loc = strlen($full_loc);
	if (preg_match('/^\D+$/i', $title)) {
		if($str_title > 10 || $str_prev_loc > 10 || $str_full_loc > 10 || $str_title < 200 || $str_prev_loc < 100 || $str_adres > 10) {
			if($id_cat_loc !== " " || $adress_loc !== " " || $title !== " ") {

				define('MB', 1048576);
				if($type_image_events == "image/jpeg" || $type_image_events == "image/png"){
					if($photo_size_events < 5*MB) {
						if (move_uploaded_file($_FILES['img_loc']['tmp_name'], $fot_dir)) {
							$result_query_loc = "UPDATE `location` SET `title_location` = '$title', `image` = '$fot_dir', `pre_text` = '$preview_loc', `big_text` = '$full_loc', `adress` = '$adress_loc', `cat_loc` = '$id_cat_loc', `loc_url` = '$url_loc' WHERE `id` = '$loc_page_id'";
							$result_add = mysqli_query($conn,$result_query_loc) or die(mysqli_error($conn));
							if($result_add) {
								echo "<script>alert('Місце змінено!');location='locdashboard'</script>"; 
							} else {
								echo "<script>alert('Місце не змінено!');location='locdashboard'</script>";
							}
						}
					}else{
						echo "<script>alert('Зображення дуже велике!(>5MB)');location='locdashboard'</script>";
					}
				}else{
					echo "<script>alert('Зображення іншого формату!');location='locdashboard'</script>";
				}
			}else{
				echo "<script>alert('Заповніть всі поля!');location='editlocpage?=".$loc_page_id."'</script>";
			}
		}else{
			echo "<script>alert('Мало символів мін(10)!');location='editlocpage?=".$loc_page_id."'</script>";
		}
	}else{
		echo "<script>alert('Назва не повинна мати числа!');location='editlocpage?=".$loc_page_id."'</script>";
	}
	}else{
		echo "<script>alert('Невірне посилання на карти!');location='editlocpage?=".$loc_page_id."'</script>";
	}
}	
?>  
