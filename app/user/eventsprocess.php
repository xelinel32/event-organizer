<?php 
// add event
	include '../function/configdb.php';

	if(isset($_POST['btn_new_event'])){
	$id_user = $_SESSION['user']['id'];
	$title = trim($_POST['name_event']);
	$id_cat = $_POST['cat_event'];
	$id_loc = $_POST['location_event'];
	$post_event	= trim($_SESSION['user']['username']);
	$start_date_event = $_POST['start_event'];
	$end_date_event = $_POST['end_event'];
	$add_date_event = date("Y-m-d");
	$preview_event = mysqli_real_escape_string($conn,trim($_POST['preview_event']));
	$full_event = mysqli_real_escape_string($conn,trim($_POST['full_event']));
	// image
	$uploaddirs= '../img/eventimg/'; 
	$fots = $_FILES['img_event']['name'];
	$fots_dir = $uploaddirs.$fots;
	$photo_size_events  = $_FILES['img_event']['size'];
	$type_image_events = $_FILES['img_event']['type'];
	define('MB', 1048576);
	if($type_image_events == "image/jpeg" || $type_image_events == "image/png"){
        if($photo_size_events < 5*MB) {

	if (move_uploaded_file($_FILES['img_event']['tmp_name'], $fots_dir)) {
	$result_query_ev = "INSERT INTO `events` (`title`, `pre_event`, `image`, `id_cat_event`, `post_event`, `start_event`, `end_event`, `add_event`, `big_event`, `id_loc_event`,`id_user`) VALUES ('$title','$preview_event', '$fots_dir','$id_cat', '$post_event', '$start_date_event', '$end_date_event', '$add_date_event', '$full_event', '$id_loc', '$id_user')";
	$result_add = mysqli_query($conn,$result_query_ev) or die(mysqli_error($conn));
	if($result_add) {
		echo "<script>alert('Захід опубліковано!');location='user?id=".$id_user."'</script>"; 
	} else {
		echo "<script>alert('Захід не опубліковано!');location='user?id=".$id_user."'</script>";
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