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
	$add_date_event = date("Y-m-d H:i:s");
	$preview_event = mysqli_real_escape_string($conn,trim($_POST['preview_event']));
	$full_event = mysqli_real_escape_string($conn,trim($_POST['full_event']));
	$lat_name = trim($_POST['lat_name']);
	$lng_name = trim($_POST['lng_name']);
	// image
	$uploaddirs= '../img/eventimg/'; 
	$fots = $_FILES['img_event']['name'];
	$fots_dir = $uploaddirs.$fots;
	$photo_size_events  = $_FILES['img_event']['size'];
	$type_image_events = $_FILES['img_event']['type'];
	define('MB', 1048576);
	// oper
	$query_title_event_prev = mysqli_query($conn,"SELECT * FROM `events` WHERE `title`='$title'") or die(mysqli_error($conn));
	$numrows_pre_event=mysqli_num_rows($query_title_event_prev);
	if($numrows_pre_event == 0) {	
	if (preg_match('/^\D+$/i', $title)) {
		$str_title = strlen($title);
		$str_lat_name = strlen($lat_name);
		$str_lng_name = strlen($lng_name);
		$str_prev_event = strlen($preview_event);
		$str_full_event = strlen($full_event);
		if($str_title > 10 || $str_prev_event > 10 || $str_full_event > 10 || $str_title < 200 || $str_prev_event < 100 || $str_lat_name > 6 || $str_lng_name > 6) {
			if($id_cat !== " " || $id_loc !== " " || $lat_name !== " " || $lng_name !== " ") {
				if($end_date_event > $start_date_event && $add_date_event <= $start_date_event){
					if($type_image_events == "image/jpeg" || $type_image_events == "image/png"){
						if($photo_size_events < 5*MB) {

							if (move_uploaded_file($_FILES['img_event']['tmp_name'], $fots_dir)) {
								$result_query_ev = "INSERT INTO `events` (`title`, `pre_event`, `image`, `id_cat_event`, `post_event`, `start_event`, `end_event`, `add_event`, `big_event`, `id_loc_event`,`id_user`, `lat`,`lng`) VALUES ('$title','$preview_event', '$fots_dir','$id_cat', '$post_event', '$start_date_event', '$end_date_event', '$add_date_event', '$full_event', '$id_loc', '$id_user','$lat_name','$lng_name')";
								$result_add = mysqli_query($conn,$result_query_ev) or die(mysqli_error($conn));
								if($result_add) {
									echo "<script>alert('Захід опубліковано!');location='user?id=".$id_user."'</script>"; 
								} else {
									echo "<script>alert('Захід не опубліковано!');location='user?id=".$id_user."'</script>";
								}
							}
						}else{
							echo "<script>alert('Зображення заходу дуже велике!(>5MB)');location='neweventuser'</script>";
						}
					}else{
						echo "<script>alert('Зображення іншого формату!');location='neweventuser'</script>";
					}
				}else{
					echo "<script>alert('Некоректна дата!');location='neweventuser'</script>";
				}
			}else{
				echo "<script>alert('Заповніть всі поля!');location='neweventuser'</script>";
			}
		}else{
			echo "<script>alert('Мало символів мін(10)!');location='neweventuser'</script>";
		}
	}else{
		echo "<script>alert('Назва заходу не повинна мати числа!');location='neweventuser'</script>";
	}
	}else{
		echo "<script>alert('Така назва заходу вже існує!');location='neweventuser'</script>";
	}
}		
?>