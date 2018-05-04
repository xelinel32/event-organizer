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
              <h2 class="post_title">Назва заходу</h2>
              <div class="post_meta">
                <ul>
                  <li><a href="#">Категорія</a></li>
                  <li>Юзер</li>
                  <li>Початок заходу - 22.02.2018</li>
                  <li>Кінець заходу - 23.02.2018</li>
                  <li>Додано захід - 21.02.2018</li>
                </ul>
              </div>
              <img class="mini_log" src="../img/event_prev.jpg" alt="post_image">
              <p>Equally, the strengthening and development of the structure allows carrying out important tasks in the development of systems of mass participation. Diverse and rich experience a new model of organizational activity makes it possible to assess the importance of forms of development. On the other hand, the constant information and propaganda support of our activities allows us to carry out important tasks for the development of appropriate conditions for activation. Everyday practice shows that the further development of various forms of activity allows performing important tasks in the development of directions for progressive development. We should not, however, forget that the framework and place of training of personnel contributes to the preparation and implementation of forms of development.</p>
              <p>Equally, the strengthening and development of the structure allows carrying out important tasks in the development of systems of mass participation. Diverse and rich experience a new model of organizational activity makes it possible to assess the importance of forms of development. On the other hand, the constant information and propaganda support of our activities allows us to carry out important tasks for the development of appropriate conditions for activation. Everyday practice shows that the further development of various forms of activity allows performing important tasks in the development of directions for progressive development..</p>
            <div class="LocationEventPage">
              <p><b>Місце проходження заходу:</b></p>
                <a href="../pages/singl_location">Чернігів, парк культури</a>
                <div class="LocMap"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d79486.25876056503!2d31.22049845166032!3d51.49586601793379!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46d5488971ee3597%3A0x2a2348d3e76038b5!2sChernihiv%2C+Chernihivs&#39;ka+oblast%2C+14039!5e0!3m2!1sen!2sua!4v1525164647573" width="670" height="450" frameborder="0" allowfullscreen></iframe>
                  </div> 
                  <div class="CommentsToEventPage">
                    <form method="post">
                      <label>Ім'я:</label><br>
                      <input type="text" name="coment_input" id="com_inp" required placeholder="Ваше ім'я"><br>
                      <label>Дата:</label><br>
                      <input type="text" name="coment_input" disabled placeholder="<?php echo date("F j, Y, g:i a"); ?>" id="date_inp"><br>
                      <label>Коментар:</label><br>
                      <textarea name="coment_txtarea" id="coment_txtarea" cols="50" rows="5" required placeholder="Ваш коментар"></textarea><br>
                      <button type="submit">Додати</button>
                    </form>
                  </div> 
                  <div class="SharedEvent">
                  <div class="social_button">
                  <h3>Поділитися з друзями:</h3>
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
                  <form action="" method="get">
                  <input class="reg_event_but" type="button" value="Зареєструватися">
                  <input class="buy_event_but" type="button" value="Придбати білет">
                  </form>
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
  <?php include("../modal_window.php") ?>
</html>