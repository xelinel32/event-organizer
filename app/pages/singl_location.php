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
        if(isset($_GET['location'])){
          $loc = $_GET['location'];
          $sql = mysqli_query($conn,"SELECT * FROM `location` WHERE `id` = '$loc'") or die("Помилка");
          while($result = mysqli_fetch_array($sql)){
            ?>
            <div class="news_content">
              <div class="box_news">
                <h2 class="post_title"><?php echo $result['title_location']; ?></h2><br>
                <img class="mini_log" src="<?php echo $result['image'];?>" alt="post_image"><br>
                <br><p><b><?php echo $result['pre_text'];?></b></p>
                <p><?php echo $result['big_text'];?></p><br>  
                <p><b>Дивитись адресу на Google карті - </b><a style="color: red;" target="_blank" href="<?php echo $result['loc_url']; ?>"><?php echo $result['adress']; ?></a></p>
              <?php }} else {
                echo "<script>window.location = '404.php';</script>";
              } ?> 
              <h2 class="post_title">Заходи на це місце:</h2>
              <ul class="location_event_bit_page">      
                <?php 
                if(isset($_GET['location'])){
                  $loc_event = $_GET['location'];
                  $sql = mysqli_query($conn,"SELECT * FROM `events` WHERE `id_loc_event` = '$loc_event' AND `status` = 'active'") or die(mysqli_error($conn)); 
                  while($result = mysqli_fetch_array($sql)){
                    ?>
                    <li><a href="../pages/big_events?event=<?php echo $result['id']; ?>"><?php echo $result['title']; ?></a> <span><?php echo $result['add_event']; ?></span></li>
                  <?php }} ?>
                </ul>
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
   <?php include("../include/bot_script.php") ?>
 </body>
 <?php include("../modal_window.php") ?>
 </html>