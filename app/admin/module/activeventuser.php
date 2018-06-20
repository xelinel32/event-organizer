<?php 
include "../../function/configdb.php";
// delete event user
if(isset($_GET['active'])) {
$id = $_GET['active'];
$id_user = $_SESSION['user']['id'];
$del_que = mysqli_query($conn, "UPDATE `events` SET `status` = 'active' WHERE `id`='$id'") or die(mysqli_error($conn));
echo "<script>alert('Захід прийнято');location='../admin'</script>";
}
?>