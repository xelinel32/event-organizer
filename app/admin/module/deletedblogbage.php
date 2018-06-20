<?php 
include "../../function/configdb.php";

if (isset($_GET['del_blog'])) {
$id = $_GET['del_blog'];
$id_user = $_SESSION['user']['id'];
$del_que2 = mysqli_query($conn, "DELETE FROM `comments_blog` WHERE `id_blog`='$id'") or die(mysqli_error($conn));
$del_que = mysqli_query($conn, "DELETE FROM `blog` WHERE `id`='$id'") or die(mysqli_error($conn));
echo "<script>location='../blogdashboard'</script>";
}
?>