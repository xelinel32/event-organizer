<!DOCTYPE html>
<!--[if lt IE 7]><html lang="ru" class="lt-ie9 lt-ie8 lt-ie7"><![endif]-->
<!--[if IE 7]><html lang="ru" class="lt-ie9 lt-ie8"><![endif]-->
<!--[if IE 8]><html lang="ru" class="lt-ie9"><![endif]-->
<!--[if gt IE 8]><!-->
<html lang="ru">
<!--<![endif]-->
<head>
	<meta charset="utf-8" />
	<title>COLEVENTS - Site for educational work and organization of events</title>
	<meta name="description" content="Site for educational work and organization of events" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="shortcut icon" href="../img/favicon.ico" />
	<link rel="stylesheet" href="../libs/bootstrap/bootstrap-grid.min.css" />
	<link rel="stylesheet" href="../libs/font-awesome-4.7.0/css/font-awesome.css" />
	<link rel="stylesheet" href="../css/fonts.css" />
	<link rel="stylesheet" href="../css/main.css" />
	<link rel="stylesheet" href="../css/media.css" />
	<link rel="stylesheet" href="../libs/mobilemenu/jquery.mmenu.all.css" />
	<link rel="stylesheet" href="../libs/superfish/superfish.css" />
	<link rel="stylesheet" href="../libs/superfish/megafish.css" />
	<link rel="stylesheet" href="../css/hard_style.css">
	<link rel="stylesheet" href="../libs/bootstrap/bootstrap.min.css">
</head>	
<body>
<header class="top_header">
	<?php require_once("../include/header.php") ?>
</header>
    <!-- Content -->
  <div class="main_content_news">
    <div class="container">
      <div class="col-md-12">
        <div class="row">
          <!-- main -->
    <?php 
        for ($i=0; $i < 5 ; $i++) { 
            echo '<div class="news_content">
            <div class="box_news">
              <h2 class="post_title">Head post</h2>
              <div class="post_meta">
                <ul>
                  <li><a href="#">Olimpic</a></li>
                  <li>9 dec 2018</li>
                </ul>
              </div>
              <img class="mini_log" src="../img/news_prev.jpg" alt="post_image">
              <p>Equally, the strengthening and development of the structure allows carrying out important tasks in the development of systems of mass participation. Diverse and rich experience a new model of organizational activity makes it possible to assess the importance of forms of development. On the other hand, the constant information and propaganda support of our activities allows us to carry out important tasks for the development of appropriate conditions for activation. Everyday practice shows that the further development of various forms of activity allows performing important tasks in the development of directions for progressive development. We should not, however, forget that the framework and place of training of personnel contributes to the preparation and implementation of forms of development.</p>
              <p>The task of the organization, especially the framework and place of training of personnel, is an interesting experiment to verify the systems of mass participation. Equally, the strengthening and development of the structure requires the definition and refinement of the directions of progressive development.</p>
            </div>
          </div>';}?>
            </div>
        </div>
    </div>
</div>
<!-- nav -->
    <div class="col-md-12">
        <div class="row">
        <div class="paginations"> 
            <a class="active" href="#">1</a>
            <a href="#">2</a>
            <a href="#">3</a>
            <a href="#">4</a>
            <a href="#">5</a>
          </div>
        </div>
      </div>   
<footer>
	<?php require_once("../include/footer.php") ?>
</footer>	
	<!--[if lt IE 9]>
	<script src="../libs/html5shiv/es5-shim.min.js"></script>
	<script src="../libs/html5shiv/html5shiv.min.js"></script>
	<script src="../libs/html5shiv/html5shiv-printshiv.min.js"></script>
	<script src="../libs/respond/respond.min.js"></script>
	<![endif]-->
	<script src="../libs/jquery/jquery-3.3.1.min.js"></script>
	<script src="../libs/superfish/superfish.min.js"></script>
  	<script src="../libs/mobilemenu/jquery.mmenu.min.all.js"></script>
	<script src="../js/common.js"></script>
  	<script src="../libs/bootstrap/bootstrap.min.js"></script>
</body>
</html>