<?php include("pages_include/up_style.php") ?>
<body>
<header class="top_header">
	<?php include("../include/header.php") ?>
</header>
    <div class="SearchResult">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="news_content">
                        <div class="box_news">
               <div class="FormSearchResult"> 
                    <h4>Результати пошуку</h4>              
                <?php
                $query = trim($_GET['search']);
                $query = htmlspecialchars($query);
                $query = mysqli_real_escape_string($conn,$query);
                $min_length = 3;
                if(strlen($query) >= $min_length){ 
                $raw_results = mysqli_query($conn,"SELECT * FROM blog WHERE (`title_post` LIKE '%".$query."%')");
                if(mysqli_num_rows($raw_results) > 0){ 
                while($results = mysqli_fetch_array($raw_results)){?>
                <div class="result_seart_be">
                Стаття - <a href="../pages/big_blog?id=<?php echo $results['id']; ?>"><?php echo $results['title_post']; ?></a><span>Дата публікації статті - <?php echo $results['date_post']; ?></span>
                </div>
          <?php } 
        }
        else{ ?>
        <h5>Нічого не знайдено...</h5>
        <?php }  
    }
    else{ ?>
        <br><h4 id="alerter">Введіть мінімум <?php echo $min_length ?> символи!</h4>
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