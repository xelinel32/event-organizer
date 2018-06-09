<?php 
include '../function/configdb.php';
	
if(isset($_POST["edit_btn"])){ 
	$password_1 = mysqli_real_escape_string($conn,$_POST['password_1']);
	$password_2 = mysqli_real_escape_string($conn,$_POST['password_2']);
	$id_user = $_SESSION['user']['id'];
	if ($password_1 == $password_2) {
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
	$message = "Паролі не співпадають";	
	}
}?>
<?php if (!empty($message)) {
	echo "<script>alert('".$message."');location='user?id=".$id_user."'</script>";
} ?>

<?php 
	if(isset($_POST["edit_btn_prof"])){ 
	$name_pib = mysqli_real_escape_string($conn,$_POST['name_pib']);
	$tel_number = $_POST['tel_number'];
	$id_user = $_SESSION['user']['id'];
	$sql = "UPDATE `multi_login` SET `phone_number` = '$tel_number', `pib` = '$name_pib' WHERE `id` = '$id_user'";
	 // выводим результат если ошибки то ошибку если все ок то даем вход
	$result = mysqli_query($conn,$sql);
	if($result){
	echo "<script>location='user?id=".$id_user."'</script>";	
	}
}
?>

<?php
$id_user = $_SESSION['user']['id'];
$uploaddir= '../img/profileimg/'; 
$fot = $_FILES['uploadfile']['name'];
$fot_dir = $uploaddir.$fot;
	if (move_uploaded_file($_FILES['uploadfile']['tmp_name'], $fot_dir)) {
$res= mysqli_query ($conn,"UPDATE `multi_login` SET `image` = '$fot_dir' WHERE `id` = '$id_user'");
	if($res) {
	echo "<script>location='user?id=".$id_user."'</script>"; 
	} else {
	echo "Путь не добавлен в базу данных, но файл загружен";
}
}	
?>
