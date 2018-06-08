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
    $sql = mysqli_query($conn,"SELECT * FROM `blog` WHERE `id` = ".$_GET['id']."") or die("Помилка");
    while($result = mysqli_fetch_array($sql)){
?>
          <div class="news_content">
            <div class="box_news">
              <h2 class="post_title"><?php echo $result['title_post']; ?></h2>
              <div class="post_meta">
                <ul>
                <li><a href="../user/user.php?id=<?php echo $result['id_user'] ?>"><?php echo $result['user_post'];?></a></li>
                  <li>Дата додавання статті - <?php echo $result['date_post'];?></li>
                </ul>
              </div>
              <img class="mini_log" src="<?php echo $result['image_post'];?>" alt="post_image">
              <?php echo $result['big_text_post'];?>
            <?php }}else{
            echo "<script>window.location = '404.php';</script>";
            } ?>
               <div class="CommentsToEventPage">
                  <h4>Обсудити цю тему можна за формою нижче!</h4><br>
                  <?php include('../function/comments_blog_view.php') ?>
          <?php if(!isset($_SESSION["user"])){ ?>
            <p style="text-align: center; color: red;">Для того щоб залишати коментарi треба авторизуватись!</p>
          <?php }else{ ?>
                    <form method="post"action="../function/comments_blog.php">
                      <label>Ваше ім'я(логін):</label><br>
                      <input type="text" name="name" id="com_inp" required value="<?php echo $_SESSION['user']['username'];?>" placeholder="Ім'я"><br>
                      <label>Ваш коментар:</label><br>
                      <textarea  width= "100%" max-width="450" name="text_comment" id="coment_txtarea" cols="50" rows="5" required placeholder="Розкажіть щось?"></textarea><br>
                      <button name="id_blog" value="<?=$_GET['id']?>" type="submit">Додати</button>
                    </form>
                  <?php } ?>
                  </div> 
            </div>
          </div>
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