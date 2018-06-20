<?php 
include "../../function/configdb.php";
// delete event user
if (isset($_GET['del_vid'])) {
$id = $_GET['del_vid'];
$del_que = mysqli_query($conn, "DELETE FROM `comments_event` WHERE `id`='$id'") or die(mysqli_error($conn));
echo "<script>location='../commentsdashboard'</script>";
}
?>
<?php 
include "../../function/configdb.php";
// delete event user
if (isset($_GET['del_com'])) {
$id = $_GET['del_com'];
$del_que = mysqli_query($conn, "DELETE FROM `comments_blog` WHERE `id`='$id'") or die(mysqli_error($conn));
echo "<script>location='../commentsdashboard'</script>";
}
?>