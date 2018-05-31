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
    $sql = mysqli_query($conn,"SELECT * FROM `location` WHERE `id` = ".$_GET['id']."") or die("Помилка");
    while($result = mysqli_fetch_array($sql)){
?>
<div class="news_content">
            <div class="box_news">
              <h2 class="post_title"><?php echo $result['title']; ?></h2><br>
              <img class="mini_log" src="<?php echo $result['image'];?>" alt="post_image">
              <p><?php echo $result['big_text'];?></p><br>  
              <p><b>Місце проводження заходу/виховної роботи, знаходиться за адресою - </b>Шевченка 53В</p>
							<h2 class="post_title">Заходи на це місце:</h2>
							<ul class="location_event_bit_page">
								<li><a href="../pages/big_events.php">Олімпіада</a> <span>Date 28.10.2018</span></li>
								<li><a href="../pages/big_events.php">Катання</a> <span>Date 28.10.2018</span></li>
								<li><a href="../pages/big_events.php">Веб разробка</a> <span>Date 28.10.2018</span></li>
								<li><a href="../pages/big_events.php">Біг</a> <span>Date 28.10.2018</span></li>
								<li><a href="../pages/big_events.php">Математика</a> <span>Date 28.10.2018</span></li>
							</ul>
						</div>
          </div>
          <?php }} else{
            echo "<script>window.location = '404.php';</script>";
            mysqli_close();} ?>
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