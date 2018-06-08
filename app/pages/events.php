<?php include("pages_include/up_style.php") ?>
<body>
<header class="top_header">
	<?php include("../include/header.php") ?>
</header>
<div class="EventBarMore">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="SpecialOffers">
                    <p>
                        <span>Всі заходи</span><br>
						<span>Вибери свій захід та відвідай його в своєму місті</span>
					</p>
				</div>
				<div class="category">
					<div class="category_prev">
						<h3>- Категорії заходів -</h3>
					</div>
					<div class="category_item">
				<?php $sql_category_events = "SELECT * FROM `category_events` WHERE `id`";  
                  $result_category_events = mysqli_query($conn,$sql_category_events); 
                  while($result = mysqli_fetch_array($result_category_events)){
                 ?>
					<a href="events?category_events_id=<?php echo $result['id']; ?>"><?php echo $result['category']; ?></a>
				<?php } ?>
					<a href="events">Всі заходи</a>		
					</div>
				</div><br>
                <div class="EventPageBig">
				<?php
				$limit = 8;  
				if (isset($_GET["page"])) { 
				$page  = $_GET["page"]; 
				} else { $page=1; $ideventcat = $_GET['category_events_id'];};  
				$start_from = ($page-1) * $limit; 
				if(!empty($ideventcat)){ 
				$sql = "SELECT * FROM `events` WHERE `id_cat_event` = '$ideventcat' ORDER BY `add_event` ASC LIMIT $start_from, $limit";
				}else {
				$sql = "SELECT * FROM `events` WHERE `id` ORDER BY `add_event` ASC LIMIT $start_from, $limit";
				}  
				$rs_result = mysqli_query ($conn,$sql); 
				while($g_result = mysqli_fetch_array($rs_result)){
				?>
				<div class="EeventPageSmall">
                    <img src="<?php echo $g_result['image'] ?>" alt="logo_event">
                    <p><?php echo $g_result['title'] ?><br> 
					<span><?php echo $g_result['pre_event'] ?></span>
                    <a href="../pages/big_events?event=<?php echo $g_result['id'] ?>"><i class="fa fa-angle-down" aria-hidden="true"></i></a>
                    </p>
                </div>
            <?php } ?>
				 <div class="col-md-12">
        				<div class="row">
        					<div class="paginations">
			<?php
			if(!empty($ideventcat)){   
				$sql = "SELECT COUNT(id) FROM `events` WHERE `id_cat_event` = '$ideventcat'";
			}else{
				$sql = "SELECT COUNT(id) FROM `events` WHERE id";
				}	  
				$rs_result = mysqli_query($conn,$sql);  
				$row = mysqli_fetch_row($rs_result);  
				$total_records = $row[0];  
				$total_pages = ceil($total_records / $limit);  
				$pagLink = "<div class='paginations_event_location'>";  
				for ($i=1; $i<=$total_pages; $i++) {
				        if($page == $i) {
				      $pagLink .= "<a href='events?page=".$i."'class = 'active'>".$i."</a>"; 
				      }else{
				      $pagLink .= "<a href='events?page=".$i."'class = 'noactive'>".$i."</a>"; 
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