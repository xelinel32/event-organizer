<?php include("pages_include/up_style.php");?>
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
    $limit = 2;  
    if (isset($_GET["page"])) { $page  = $_GET["page"]; } else { $page=1; };  
    $start_from = ($page-1) * $limit;  
    $sql = "SELECT * FROM blog WHERE id ORDER BY id ASC LIMIT $start_from, $limit";  
    $rs_result = mysql_query ($sql); 
    while($result = mysql_fetch_array($rs_result)){
?>
<div class="news_content">
            <div class="box_news">
              <h2 class="post_title"><a href="big_blog?id=<?php echo $result['id'];?>"><?php echo $result['title_post'];?></a></h2>
              <div class="post_meta">
                <ul>
                  <li><?php echo $result['user_post'];?></li>
                  <li>Дата додавання статті - <?php echo $result['date_post'];?></li>
                </ul>
              </div>
              <img class="mini_log" src="<?php echo $result['image_post'];?>" alt="post_image">
              <?php echo $result['small_text_post'];?>
                <div class="read_more"><a href="big_blog?id=<?php echo $result['id'];?>">Дивитись більше</a></div>
              </div>
          </div>
          <?php } ?>
            </div>
          <!-- Sidebar -->
            <?php include("../include/sidebar.php"); ?>
          <!-- Sidebar -->
        </div>
        <div class="col-md-8">
        <div class="row">
<?php  
$sql = "SELECT COUNT(id) FROM blog";  
$rs_result = mysql_query($sql);  
$row = mysql_fetch_row($rs_result);  
$total_records = $row[0];  
$total_pages = ceil($total_records / $limit);  
$pagLink = "<div class='paginations'>";  
for ($i=1; $i<=$total_pages; $i++) {
        if($page == $i) {
      $pagLink .= "<a href='blog.php?page=".$i."'class = 'active'>".$i."</a>"; 
      }else{
      $pagLink .= "<a href='blog.php?page=".$i."'class = 'noactive'>".$i."</a>"; 
      }  
};  
echo $pagLink . "</div>";
mysql_close();  
?>
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