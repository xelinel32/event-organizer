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
                    <h3 style="text-align:center">Форма додавання статті</h3>
                    <div class="formnewevent">
						<form action="" method="post" enctype="multipart/form-data">
								<div class="form-group">
								<label>Назва статті</label><br>
								<input class="form-control" type="text" name="name_blog" required placeholder="Назва статті"><br>
								<label for="exampleFormControlFile1">Зображення статті</label><br>
								<input class="form-control-file" id="exampleFormControlFile1" required type="file" type="file" name="img_loc" multiple accept="image/*,image/jpeg"><br>
                                <label for="exampleFormControlTextarea1">Короткий опис</label><br>
								<textarea required name="preview_blog" class="form-control" id="exampleFormControlTextarea1" rows="2" placeholder="Короткий опис основної інформації"></textarea><br>
								<label>Повний опис</label><br>
								<textarea required class="form-control" id="exampleFormControlTextarea1" name="full_blog" cols="80" rows="10" placeholder="Повний опис основної інформації"></textarea><br>
                                <input class="btn btn-light" type="submit" value="Додати" name="btn_new_blog">
								<a href="blogdashboard" class="btn btn-light float-right">Назад</a>
                                </div>
						</form>
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
CKEDITOR.replace('full_blog');
</script>

<?php

if(isset($_POST['btn_new_blog'])){
	$name_blog = trim($_POST['name_blog']);
	// image
	$uploaddir= '../img/locimg/'; 
	$fot = $_FILES['img_loc']['name'];
	$fot_dir = $uploaddir.$fot;
    $date = date("Y-m-d H:i:s");
	$preview_blog = mysqli_real_escape_string($conn,trim($_POST['preview_blog']));
	$full_blog = mysqli_real_escape_string($conn,trim($_POST['full_blog']));
    $id_user = $_SESSION['user']['id'];
    $name_user = $_SESSION['user']['username'];
	$photo_size_events  = $_FILES['img_loc']['size'];
	$type_image_events = $_FILES['img_loc']['type'];
	
	if (preg_match('/^\D+$/i', $name_blog)) {
				define('MB', 1048576);
				if($type_image_events == "image/jpeg" || $type_image_events == "image/png"){
					if($photo_size_events < 5*MB) {
						if (move_uploaded_file($_FILES['img_loc']['tmp_name'], $fot_dir)) {
							$result_query_loc = "INSERT INTO `blog` (`user_post`, `date_post`, `image_post`, `small_text_post`, `big_text_post`, `title_post`, `id_user`) VALUES ('$name_user','$date','$fot_dir','$preview_blog', '$full_blog','$name_blog','$id_user')";
							$result_add = mysqli_query($conn,$result_query_loc) or die(mysqli_error($conn));
							if($result_add) {
								echo "<script>alert('Статтю опубліковано!');location='blogdashboard'</script>"; 
							} else {
								echo "<script>alert('Стаття не опублікована!');location='addingpageblog'</script>";
							}
						    }
					}else{
						echo "<script>alert('Зображення дуже велике!(>5MB)');location='addingpageblog'</script>";
					}
				}else{
					echo "<script>alert('Зображення іншого формату!');location='addingpageblog'</script>";
				}
	    }else{
	echo "<script>alert('Назва не повинна мати числа!');location='../blogdashboard'</script>";
	}
}	
?>