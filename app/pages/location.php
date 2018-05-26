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
				<p>подивись більше про місця заходів</p>
				<div class="sorting">
					<span>Сортувати місця проходження заходів:</span>
					<a href="#">Дата</a> |
					<a href="#">Назва</a>
				</div>
          <div class="catagory_event_list_sort">
          <?php 
            for ($i=0; $i < 9; $i++) { 
              echo '<div class="catagory_event_list_singl">
              <img src="../img/location.jpg" alt="logo_event">
              <div class="catagory_event_list_desc">
              <a href="../pages/singl_location.php">Назва місця</a><br>
                  <span>Опис Опис Опис Опис </span>
                </div>
              </div>';
            }
					?>
					<div class="col-md-12">
        				<div class="row">
        					<div class="paginations">
								<div class="paginations_event_location"> 
								<a class="active" href="#">1</a>
								<a href="#">2</a>
								<a href="#">3</a>
								<a href="#">4</a>
								<a href="#">5</a>
								</div>
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
	<?php include("pages_include/bot_script.php") ?>
</body>
  <?php include("../modal_window.php") ?>
</html>