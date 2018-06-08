<?php include("pages_include/up_style.php") ?>
<body>
<header class="top_header">
	<?php include("../include/header.php") ?>
</header>
<div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="catagory_event_list">
				<h3>Місця проходження заходів</h3>
				<p>Детальніше про місця проходження заходів</p>
          <div class="catagory_event_list_sort">
    <?php
    $limit = 6;  
    if (isset($_GET["page_loc"])) { $page  = $_GET["page_loc"]; } else { $page=1; };  
    $start_from = ($page-1) * $limit;  
    $sql = "SELECT * FROM location WHERE id ORDER BY id ASC LIMIT $start_from, $limit";  
    $rs_result_location = mysqli_query ($conn,$sql); 
    while($result = mysqli_fetch_array($rs_result_location)){
    ?>
             <div class="catagory_event_list_singl">
              <img src="<?php echo $result['image'];?>" alt="logo_event">
              <div class="catagory_event_list_desc">
              <a href="../pages/singl_location?location=<?php echo $result['id'];?>"><?php echo $result['title'];?></a><br>
                  <span><?php echo $result['pre_text'];?></span>
                </div>
              </div>
          <?php } ?>
					<div class="col-md-12">
        				<div class="row">
<?php  
$sql = "SELECT COUNT(id) FROM location";  
$rs_result_loc = mysqli_query($conn,$sql);  
$row = mysqli_fetch_row($rs_result_loc);  
$total_records = $row[0];  
$total_pages = ceil($total_records / $limit);  
$pagLink = "<div class='paginations'>";  
for ($i=1; $i<=$total_pages; $i++) {
        if($page == $i) {
      $pagLink .= "<a href='location?page_loc=".$i."'class = 'active'>".$i."</a>"; 
      }else{
      $pagLink .= "<a href='location?page_loc=".$i."'class = 'noactive'>".$i."</a>"; 
      }  
};  
echo $pagLink . "</div>";  
?>
        				</div>
      				</div> 
          </div>
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