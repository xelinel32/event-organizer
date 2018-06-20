<?php 
include "../../function/configdb.php";
if(isset($_POST['cat_btn'])){
    $cat_logo = "";
    $cat_name = mysqli_real_escape_string($conn,trim($_POST['cat_name']));
    if ($cat_name !== " ") {
    $result_send = "INSERT INTO `category_events` (`category`,`category_events_logo`) VALUES ('$cat_name','$cat_logo')";
    $result = mysqli_query($conn,$result_send) or die(mysqli_error($conn));
    if($result) {
        echo "<script>alert('Повідомлення відправлено!');location='../catdashboard'</script>"; 
    } else {
        echo "<script>alert('Повідомлення не відправлено!');location='../catdashboard'</script>";
    }  
    } else {
        echo "<script>alert('Заповніть всі поля!');location='../catdashboard'</script>";
    }
    }
?>