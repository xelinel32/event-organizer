<?php 
include "../../function/configdb.php";
// delete event user
if (isset($_GET['del'])) {
$id = $_GET['del'];
$id_user = $_SESSION['user']['id'];
$del_que = mysqli_query($conn, "DELETE FROM `category_events` WHERE `id`='$id'") or die(mysqli_error($conn));
echo "<script>location='../catdashboard'</script>";
}
?>