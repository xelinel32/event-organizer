<?php include("pages_include/up_style.php") ?>
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
                  <h4>Залиште свій відгук про захід!</h4>
                    <form method="post">
                      <label>Ваше ім'я(логін):</label><br>
                      <input type="text" name="coment_input" id="com_inp" required placeholder="ім'я"><br>
                      <label>Ваш відгук про захід:</label><br>
                      <textarea name="coment_txtarea" id="coment_txtarea" cols="50" rows="5" required placeholder="Розкажіть щось?"></textarea><br>
                      <button type="submit">Додати</button>
                    </form>
                  </div> 
                  <div class="SharedEvent">
                  <div class="social_button">
                  <h4>Поділитися з друзями:</h4>
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
                  <div class="rating_post_count_comment">
                    <div class="count_comment">
                      <h5>Кількість коментарів для цього заходу - </h5><span> 5 </span>
                    </div>
                  </div>
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
<div class="up_button">
    <img src="../img/up.png">
  </div>		
  <?php include("../include/bot_script.php") ?>
</body>
  <?php include("../modal_window.php") ?>
</html>