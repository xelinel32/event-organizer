<?php
include 'configdb.php';
$name = $_POST["name"];
$comments_user_type = $_SESSION['user']['user_type'];
$date = date("Y-m-d H:i:s");
$id_blog = $_POST["id_blog"];
$text_comment = $_POST["text_comment"];
$id_user = $_SESSION['user']['id'];
$name = htmlspecialchars($name);
$text_comment = htmlspecialchars($text_comment);
if ( strlen($_POST["text_comment"]) > 0 ) {
  $mysql = mysqli_query($conn,"INSERT INTO `comments_blog` (`author`, `id_blog`, `text`,`date`, `comments_user_type`, `id_user`) VALUES ('$name', '$id_blog', '$text_comment','$date', '$comments_user_type', '$id_user')");
  header("Location: ".$_SERVER["HTTP_REFERER"]);
} else { echo 'Помилка';
}
?>