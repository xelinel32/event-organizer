<?php 
include 'configdb.php';

if(isset($_POST["register_btn"])){ 

	$email = $_POST['email'];
    $username = mysqli_real_escape_string($conn,$_POST['username']);
	$password_1 = mysqli_real_escape_string($conn,$_POST['password_1']);
	$password_2 = mysqli_real_escape_string($conn,$_POST['password_2']);
	$name_pib = mysqli_real_escape_string($conn,$_POST['name_pib']);
	$tel_number = $_POST['tel_number'];
	$user_type_reg = "Юзер";
	$image_user = "../img/user.png";

	if ($password_1 == $password_2) {

	$query = mysqli_query($conn,"SELECT * FROM `multi_login` WHERE `username`='".$username."'") or die(mysqli_error($conn)); // заносим значения в базу
	$numrows=mysqli_num_rows($query);

	if($numrows == 0)
	{	
	$password = md5($password_1);
	$sql = "INSERT INTO `multi_login` (`username`, `email`, `password`, `pib`, `phone_number`, `user_type`, `image`) VALUES ('$username','$email', '$password', '$name_pib', '$tel_number', '$user_type_reg', '$image_user')";
	 // выводим результат если ошибки то ошибку если все ок то даем вход
	$result = mysqli_query($conn,$sql);

	if($result){
	 $message = "Ви успішно зареєструвалися!";
	} else {
	 $message = "Не вдалося вставити дані!";
	}

	} else {
	 $message = "Цей користувача вже існує!";
	}

	} else {
	 $message = "Паролі не співпадають";	
	}

	} else {
	 $message = "Всі поля обов'язкові для заповнення!";
	}

?>
<?php if (!empty($message)) {
	echo "<script>alert('".$message."');location='../index'</script>";
} ?>