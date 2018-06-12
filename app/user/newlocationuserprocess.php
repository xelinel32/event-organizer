<?php
// add location user
	include '../function/configdb.php';
	
	if(isset($_POST['btn_new_loc'])){
	$title = trim($_POST['name_loc']);
	$id_cat_loc = $_POST['cat_loc'];
	// image
	$uploaddir= '../img/locimg/'; 
	$fot = $_FILES['img_loc']['name'];
	$fot_dir = $uploaddir.$fot;

	$preview_loc = mysqli_real_escape_string($conn,trim($_POST['preview_loc']));
	$full_loc = mysqli_real_escape_string($conn,trim($_POST['full_loc']));
	$adress_loc = mysqli_real_escape_string($conn,trim($_POST['adres_loc']));
	$url_loc = $_POST['url_loc'];
	$id_user = $_SESSION['user']['id'];
	$photo_size_events  = $_FILES['img_loc']['size'];
	$type_image_events = $_FILES['img_loc']['type'];

	define('MB', 1048576);
	if($type_image_events == "image/jpeg" || $type_image_events == "image/png"){
        if($photo_size_events < 5*MB) {
	if (move_uploaded_file($_FILES['img_loc']['tmp_name'], $fot_dir)) {
	$result_query_loc = "INSERT INTO `location` (`title_location`, `image`, `pre_text`, `big_text`, `adress`, `cat_loc`, `loc_url`) VALUES ('$title','$fot_dir','$preview_loc','$full_loc','$adress_loc','$id_cat_loc','$url_loc')";
	$result_add = mysqli_query($conn,$result_query_loc) or die(mysqli_error($conn));
	if($result_add) {
		echo "<script>alert('Місце опубліковано!');location='user?id=".$id_user."'</script>"; 
	} else {
		echo "<script>alert('Місце не опубліковано!');location='user?id=".$id_user."'</script>";
	}
	}
	}else{
	echo "<script>alert('Зображення заходу дуже велике!(>5MB)');location='user?id=".$id_user."'</script>";
	}
	}else{
	echo "<script>alert('Зображення іншого формату!');location='user?id=".$id_user."'</script>";
	}
}	
?>