<?php 
include "../../function/configdb.php";
// delete event user
if (isset($_GET['del_loc'])) {
$id = $_GET['del_loc'];
$del_que = mysqli_query($conn, "DELETE FROM `location` WHERE `id`='$id'") or die(mysqli_error($conn));
echo "<script>location='../locdashboard.php'</script>";
}
?>