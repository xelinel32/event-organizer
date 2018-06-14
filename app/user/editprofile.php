<?php 
include '../function/configdb.php';
// edit pass
if(isset($_POST["edit_btn"])){ 
	$password_1 = mysqli_real_escape_string($conn,trim($_POST['password_1']));
	$password_2 = mysqli_real_escape_string($conn,trim($_POST['password_2']));
	$password_re = mysqli_real_escape_string($conn,trim(md5($_POST['password_re'])));
	$id_user = $_SESSION['user']['id'];

	$re_sql_pass = mysqli_query($conn,"SELECT * FROM `multi_login` WHERE `password`='$password_re'") or die(mysqli_error($conn));
	$numrows_pass=mysqli_num_rows($re_sql_pass);
	if ($password_1 == $password_2) {
		if($numrows_pass !== 0) {
		$password = md5($password_1);
		$sql = "UPDATE `multi_login` SET `password` = '$password' WHERE `id` = '$id_user'";
	 // выводим результат если ошибки то ошибку если все ок то даем вход
		$result = mysqli_query($conn,$sql);
		if($result){
			session_destroy();
			header("location: ".$_SERVER["HTTP_REFERER"]);
		}else {
			$message = "Не вдалося вставити дані!";
		} 
	} else {
		$message = "Ваш пароль невірний!";
	}
	} else {
		$message = "Паролі не співпадають";	
	}
}?>
<?php if (!empty($message)) {
	echo "<script>alert('".$message."');location='user?id=".$id_user."'</script>";
} ?>

<?php 
// edit name
if(isset($_POST["edit_btn_prof"])){ 
	$name_pib = mysqli_real_escape_string($conn,trim($_POST['name_pib']));
	$tel_number_edit = mysqli_real_escape_string($conn,trim($_POST['tel_number_edit']));
	$id_user = $_SESSION['user']['id'];

	$sql_check = mysqli_query($conn,"SELECT * FROM `multi_login` WHERE `phone_number` = '$tel_number_edit'") or die(mysqli_error($conn));
	$numrows=mysqli_num_rows($sql_check);
	if($numrows == 0) {
	$sql = "UPDATE `multi_login` SET `pib` = '$name_pib', `phone_number` = '$tel_number_edit' WHERE `id` = '$id_user'";
	 // выводим результат если ошибки то ошибку если все ок то даем вход
	$result = mysqli_query($conn,$sql);
	if($result){
	echo "<script>location='user?id=".$id_user."';</script>";	
	} else {
	echo "<script>alert(Не вдалося вставити дані!');location='user?id=".$id_user."';</script>";
	}
	} else {
	echo "<script>alert('Цей користувача вже існує!');location='user?id=".$id_user."';</script>";
	}
}
?>

<?php 
// delete event user
if (isset($_GET['del'])) {
$id = $_GET['del'];
$id_user = $_SESSION['user']['id'];
$del_que2 = mysqli_query($conn, "DELETE FROM `comments_event` WHERE `id_events`='$id'") or die(mysqli_error($conn));
$del_que = mysqli_query($conn, "DELETE FROM `events` WHERE `id`='$id'") or die(mysqli_error($conn));
echo "<script>location='user?id=".$id_user."'</script>";
}
?>

<?php
// edit image
$id_user = $_SESSION['user']['id'];
$uploaddir= '../img/profileimg/'; 
$fot = $_FILES['uploadfile']['name'];
$photo_size  = $_FILES['uploadfile']['size'];
$type_image = $_FILES['uploadfile']['type'];
$fot_dir = $uploaddir.$fot;
define('MB', 1048576);
if($type_image == "image/jpeg" || $type_image == "image/png"){
        if($photo_size < 2*MB) {
if (move_uploaded_file($_FILES['uploadfile']['tmp_name'], $fot_dir)) {
	$res= mysqli_query ($conn,"UPDATE `multi_login` SET `image` = '$fot_dir' WHERE `id` = '$id_user'");
	if($res) {
		echo "<script>location='user?id=".$id_user."'</script>"; 
	} else {
		echo "<script>alert('Шлях не доданий в базу даних, але файл завантажений!');location='user?id=".$id_user."'</script>";
	}
	}
	}else{
		echo "<script>alert('Зображення дуже велике (>2MB)!');location='user?id=".$id_user."'</script>";
	}
	}else{
		echo "<script>alert('Зображення іншого формату!');location='user?id=".$id_user."'</script>";
	}	
?>
