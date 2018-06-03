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
						<span>вибери свій захід та відвідай його в своєму місті</span>
					</p>
				</div>
				<div class="category">
					<div class="category_prev">
						<h3>- Категорії заходів -</h3>
					</div>
					<div class="category_item">
						<a href="#">Всі</a>
						<a href="#">Засідання</a>
						<a href="#">Змагання</a>
						<a href="#">Подорожі</a>
						<a href="#">Оліпміади</a>
						<a href="#">Концерти</a>
						<a href="#">Екскурсії</a>
					</div>
				</div><br>
				<div class="sorting">
					<span>Сортувати заходи:</span>
					<a href="#">Дата</a> |
					<a href="#">Назва</a>
				</div>
                <div class="EventPageBig">
                <?php for ($i=0; $i < 8; $i++) { 
					echo '<div class="EeventPageSmall">
                    <img src="../img/event_page.jpg" alt="logo_event">
                    <p>Назва заходу<br> 
					<span>Опис заходу</span>
                    <a href="../pages/big_events"><i class="fa fa-angle-down" aria-hidden="true"></i></a>
                    </p>
                </div>';
				} ?>
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
  <?php include("../include/bot_script.php") ?>
</body>
  <?php include("../modal_window.php") ?>
</html>