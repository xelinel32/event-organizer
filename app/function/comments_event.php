<?php
  include 'configdb.php';
  $name = $_POST["name"];
  $comments_user_type = $_SESSION['user']['user_type'];
  $date = date("Y-m-d H:i:s");;
  $id_event = $_POST["id_event"];
  $text_comment = $_POST["text_comment"];
  $name = htmlspecialchars($name);
  $text_comment = htmlspecialchars($text_comment);
  if ( strlen($_POST["text_comment"]) > 0 ) {
  $mysql = mysqli_query($conn,"INSERT INTO `comments_event` (`author`, `id_events`, `text`,`date`, `comments_user_type`) VALUES ('$name', '$id_event', '$text_comment','$date', '$comments_user_type')");
  header("Location: ".$_SERVER["HTTP_REFERER"]);
  } else { 
  echo 'Помилка';
}
?>