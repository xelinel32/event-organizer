<?php 
include "../../function/configdb.php";
// delete event user
if (isset($_GET['del'])) {
$id = $_GET['del'];
$del_que = mysqli_query($conn, "DELETE FROM `multi_login` WHERE `id`='$id'") or die(mysqli_error($conn));
echo "<script>location='../userdashboard'</script>";
}
?>