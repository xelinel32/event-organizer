<?php include("pages_include/up_style.php") ?>
<body>
<header class="top_header">
	<?php include("../include/header.php") ?>
</header>
    <!-- Content -->
  <div class="main_content_news">
    <div class="container">
    <div class="row">
      <div class="col-md-8">
          <!-- main -->
          <?php
	if(isset($_GET['id'])){
    $sql = mysql_query("SELECT * FROM `blog` WHERE `id` = ".$_GET['id']."") or die("Помилка");
    while($result = mysql_fetch_array($sql)){
?>
          <div class="news_content">
            <div class="box_news">
              <h2 class="post_title"><?php echo $result['title_post']; ?></h2>
              <div class="post_meta">
                <ul>
                <li><?php echo $result['user_post'];?></li>
                  <li>Дата додавання статті - <?php echo $result['date_post'];?></li>
                </ul>
              </div>
              <img class="mini_log" src="<?php echo $result['image_post'];?>" alt="post_image">
              <?php echo $result['big_text_post'];?>
               <div class="CommentsToEventPage">
                  <h4>Обсудити цю тему можна за формою нижче!</h4>
                    <form method="post">
                      <label>Ваше ім'я:</label><br>
                      <input type="text" name="coment_input" id="com_inp" required placeholder="ім'я"><br>
                      <label>Ваш коментар:</label><br>
                      <textarea name="coment_txtarea" id="coment_txtarea" cols="50" rows="5" required placeholder="Розкажіть щось?"></textarea><br>
                      <button type="submit">Додати</button>
                    </form>
                  </div> 
            </div>
          </div>
          <?php }}else{
            echo "<script>window.location = '404.php';</script>";
            mysql_close();} ?>
            </div>
          <!-- Sidebar -->
            <?php include("../include/sidebar.php"); ?>
          <!-- Sidebar -->
        </div>
    </div>
</div>
<!-- nav --> 
<footer>
	<?php include("../include/footer.php") ?>
</footer>
<div class="up_button">
    <img src="../img/up.png">
  </div>	
  <?php include("../include/bot_script.php") ?>
</body>
  <?php include("../modal_window.php") ?>
</html>