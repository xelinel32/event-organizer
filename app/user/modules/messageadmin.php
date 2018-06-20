<?php 
include '../../function/configdb.php';
if(isset($_POST['send_btn_message'])){
$id_user = $_SESSION['user']['id'];
$send_name = mysqli_real_escape_string($conn,trim($_POST['send_name']));
$send_text = mysqli_real_escape_string($conn,trim($_POST['send_text']));
if ($send_tex !== " " || $send_name !== " ") {
$result_send = "INSERT INTO `message_admin` (`user`, `message`) VALUES ('$send_name','$send_text')";
$result = mysqli_query($conn,$result_send) or die(mysqli_error($conn));
if($result) {
    echo "<script>alert('Повідомлення відправлено!');location='../user?id=".$id_user."'</script>"; 
} else {
    echo "<script>alert('Повідомлення не відправлено!');location='../user?id=".$id_user."'</script>";
}  
} else {
    echo "<script>alert('Заповніть всі поля!');location='../user?id=".$id_user."'</script>";
}
}
?>