<?php 
// edit event
	include '../function/configdb.php';
	
	if(isset($_POST['btn_edit_event'])){
	$id_user = $_SESSION['user']['id'];
	$title = trim($_POST['name_event']);
	$id_cat = $_POST['cat_event'];
	$id_loc = $_POST['location_event'];
	$post_event	= trim($_SESSION['user']['username']);
	$id_post_evet_edit = $_POST ['user_event_id_post'];
	// image
	$uploaddir= '../img/eventimg/'; 
	$fot = $_FILES['img_event']['name'];
	$fot_dir = $uploaddir.$fot;

	$photo_size_events  = $_FILES['img_event']['size'];
	$type_image_events = $_FILES['img_event']['type'];

	$start_date_event = $_POST['start_event'];
	$end_date_event = $_POST['end_event'];
	$add_date_event = date("Y-m-d");
	$preview_event = mysqli_real_escape_string($conn,trim($_POST['preview_event']));
	$full_event = mysqli_real_escape_string($conn,trim($_POST['full_event']));

	define('MB', 1048576);
	if($type_image_events == "image/jpeg" || $type_image_events == "image/png"){
        if($photo_size_events < 5*MB) {

	if (move_uploaded_file($_FILES['img_event']['tmp_name'], $fot_dir)) {
	$result_query_ev = "UPDATE `events` SET `title` = '$title' , `pre_event` = '$preview_event', `image` = '$fot_dir', `id_cat_event` = '$id_cat' , `post_event` = '$post_event' , `start_event` = '$start_date_event', `end_event` = '$end_date_event' , `add_event` = '$add_date_event', `big_event` = '$full_event' , `id_loc_event` = '$id_loc',`id_user` = '$id_user' WHERE  `id` = '$id_post_evet_edit'";
	$result_add = mysqli_query($conn,$result_query_ev) or die(mysqli_error($conn));
	if($result_add) {
		echo "<script>alert('Захід змінено!');location='user?id=".$id_user."'</script>"; 
	} else {
		echo "<script>alert('Захід не змінено!');location='user?id=".$id_user."'</script>";
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