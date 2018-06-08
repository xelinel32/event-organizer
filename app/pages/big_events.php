<?php include("pages_include/up_style.php") ?>
<body>
<header class="top_header">
	<?php include("../include/header.php") ?>
</header>
    <!-- Content event-->
  <div class="main_content_news">
    <div class="container">
    <div class="row">
        <div class="col-md-8">
          <!-- main event-->
        <div class="news_content">
            <div class="box_news">
              <?php 
                if(isset($_GET['event'])){
                $event_loc_id_second = $_GET['event'];
                $sql = mysqli_query($conn,"SELECT * FROM `events` WHERE `id` = '$event_loc_id_second'") or die(mysqli_error($conn)); 
                while($result = mysqli_fetch_array($sql)){
                ?>
              <h2 class="post_title"><?php echo $result['title']; ?></h2>
              <div class="post_meta">
                <ul>
                  <li><a href="../pages/events?category_events_id=<?php echo $result['id_cat_event'] ?>"><?php echo $result['text_category']; ?></a></li>
                  <li><a href="../user/user.php?id=<?php echo $result['id_user'] ?>"><?php echo $result['post_event']; ?></a></li>
                  <li>Початок заходу - <?php echo $result['start_event']; ?></li>
                  <li>Кінець заходу - <?php echo $result['end_event']; ?></li>
                  <li>Додано захід - <?php echo $result['add_event']; ?></li>
                </ul>
              </div>
              <img class="mini_log" src="<?php echo $result['image']; ?>" alt="post_image">
                <p><?php echo $result['big_event']; ?></p>
            <div class="LocationEventPage">
              <p><b>Місце проходження заходу:</b></p>
                <a href="../pages/singl_location?location=<?php echo $result['id_loc_event']; ?>"><?php echo $result['text_location']; ?></a>
                <hr>
                <div class="LocMap"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d79486.25876056503!2d31.22049845166032!3d51.49586601793379!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46d5488971ee3597%3A0x2a2348d3e76038b5!2sChernihiv%2C+Chernihivs&#39;ka+oblast%2C+14039!5e0!3m2!1sen!2sua!4v1525164647573" height=450 width=100% max-width="670" max-height="450" frameborder="0" allowfullscreen></iframe>
                  </div> 
                <?php }} else {
            echo "<script>window.location = '404.php';</script>";
             } ?> 
                  <div class="CommentsToEventPage">
                  <h4>Залиште свій відгук про захід!</h4><br>
           <?php include('../function/comments_event_view.php') ?>
          <?php if(!isset($_SESSION["user"])){ ?>
            <p style="text-align: center; color: red;">Для того щоб залишати коментарi треба авторизуватись!</p>
          <?php }else{ ?>
                    <form method="post"action="../function/comments_event.php">
                      <label>Ваше ім'я(логін):</label><br>
                      <input type="text" name="name" id="com_inp" required value="<?php echo $_SESSION['user']['username'];?>" placeholder="Ім'я"><br>
                      <label>Ваш відгук:</label><br>
                      <textarea  style="width: 100%;max-width: 450px;" name="text_comment" id="coment_txtarea" cols="50" rows="5" required placeholder="Розкажіть щось?"></textarea><br>
                      <button name="id_event" value="<?=$_GET['event']?>" type="submit">Додати</button>
                    </form>
              <?php } ?>
                  </div> 
                  <div class="SharedEvent">
                  <div class="social_button">
                  <h4>Поділитися з друзями:</h4>
                  <p><script type="text/javascript">(function() {
                    if (window.pluso)if (typeof window.pluso.start == "function") return;
                    if (window.ifpluso==undefined) { window.ifpluso = 1;
                      var d = document, s = d.createElement('script'), g = 'getElementsByTagName';
                      s.type = 'text/javascript'; s.charset='UTF-8'; s.async = true;
                      s.src = ('https:' == window.location.protocol ? 'https' : 'http')  + '://share.pluso.ru/pluso-like.js';
                      var h=d[g]('body')[0];
                      h.appendChild(s);
                    }})();</script>
                    <div class="pluso" data-background="none;" data-options="big,square,line,horizontal,nocounter,sepcounter=1,theme=14" data-services="vkontakte,odnoklassniki,facebook,twitter,google,moimir,tumblr,myspace"></div></p>
                  </div>
                  <div class="rating_post_count_comment">
                    <div class="count_comment">
                      <?php 
                      if(isset($_GET['event'])){
                      $event_comment = $_GET['event'];
                      $a = mysqli_query($conn,"SELECT COUNT(1) FROM comments_event WHERE `id_events` = '$event_comment'");
                      $b = mysqli_fetch_array( $a ); ?>
                      <h5>Кількість відгуків для цього заходу - </h5><span> <?php  echo $b[0]; 
                      } ?> </span>
                    </div>
                  </div>
                  </div>
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