<?php include("pages_include/up_style.php") ?>
<body onload="initMap()">
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
            <?php 
            if(isset($_GET['event'])){
              $event_loc_id_second = $_GET['event'];
              $sql = mysqli_query($conn,"SELECT * FROM `events`, `category_events` WHERE `events`.id_cat_event = `category_events`.id AND `events`.id = '$event_loc_id_second'") or die(mysqli_error($conn)); 
              while($result = mysqli_fetch_array($sql)){
                ?>
                <h2 class="post_title"><?php echo $result['title']; ?></h2>
                <div class="post_meta">
                  <ul>
                    <li><a href="../pages/events?category_events_id=<?php echo $result['id_cat_event'] ?>"><?php echo $result['category']; ?></a></li>
                    <li><i class="fa fa-user" aria-hidden="true"></i> <a href="../user/user?id=<?php echo $result['id_user'] ?>"><?php echo $result['post_event']; ?></a></li>
                    <li><i class="fa fa-calendar-plus-o" aria-hidden="true"></i> <?php echo $result['start_event']; ?></li>
                    <li><i class="fa fa-calendar-minus-o" aria-hidden="true"></i> <?php echo $result['end_event']; ?></li>
                    <li>Додано - <i class="fa fa-calendar-check-o" aria-hidden="true"></i> <?php echo $result['add_event']; ?></li>
                  </ul>
                </div>
                <img class="mini_log" src="<?php echo $result['image']; ?>" alt="post_image">
                <div class="default_text">
                  <p><h5><b><?php echo $result['pre_event']; ?></b></h5></p>
                  <p><?php echo $result['big_event']; ?></p>
                </div>
                <?php if($_SESSION['user']['id'] == $result['id_user']){ ?>
                <a class="btn btn-warning btn-sm" href="../user/user?id=<?php echo $result['id_user'] ?>">Редагувати захід</a><br><br>
                <?php } else { ?>
                <?php } ?>
                <div class="LocationEventPage">
                <?php }} else {
                  echo "<script>window.location = '404.php';</script>";
                } ?> 
                <p><b>Місце проходження заходу:</b></p>
                <?php 
                if(isset($_GET['event'])){
                  $event_loc_id_first = $_GET['event'];
                  $sql = mysqli_query($conn,"SELECT * FROM events, `location` WHERE `events`.id_loc_event = `location`.id AND `events`.id = '$event_loc_id_first'") or die(mysqli_error($conn)); 
                  while($result = mysqli_fetch_array($sql)){
                    ?>
                    <a href="../pages/singl_location?location=<?php echo $result['id_loc_event']; ?>"><?php echo $result['title_location']; ?></a><br><br>
                  <!-- tags -->
                  <?php if($result['tag'] == "Обов'язкове"){ ?>
                  <p><b>Рекомендації до відвідування заходу -</b> <span style="color:red"><?php echo $result['tag']; ?></span></p>
                <?php } else { ?>
                   <p><b>Рекомендації до відвідування заходу -</b> <span style="color:green"><?php echo $result['tag']; ?></span></p>
                  <?php }}} ?>
                  <hr>
                  <?php if(isset($_GET['event'])){ 
                    $event_long_lang = $_GET['event'];
                    $sqls = mysqli_query($conn,"SELECT * FROM `events` WHERE `events`.id = '$event_long_lang'") or die(mysqli_error($conn)); 
                    while($row = mysqli_fetch_array($sqls)){
                      ?>
                      <!-- Google Maps -->
                      <script type="text/javascript">
                       function initMap() {
                         var latlng = {lat: <?php echo $row['lat'] ?>, lng: <?php echo $row['lng'] ?>};
                         var settings = {
                           zoom: 15,
                           center: latlng,
                           mapTypeControl: false,
                           mapTypeControlOptions: {style: google.maps.MapTypeControlStyle.DROPDOWN_MENU},
                           navigationControl: false,
                           navigationControlOptions: {style: google.maps.NavigationControlStyle.SMALL},
                           mapTypeId: google.maps.MapTypeId.ROADMAP
                         }
                         var map = new google.maps.Map(document.getElementById("map_canvas"), 
                          settings);
                         var contentString = '<div class="infowindow">' +
                         '<h3><?php echo $row['title'] ?></h3>' +
                         '<p><?php echo $row['pre_event'] ?></p>' +
                         '<p><?php echo $row['post_event'] ?></p>' +
                         '</div>';
                         var infoWindow = new google.maps.InfoWindow({
                          content: contentString
                        });
                         var companyPos = new google.maps.LatLng(<?php echo $row['lat'] ?>, <?php echo $row['lng'] ?>);
                         var companyMarker = new google.maps.Marker({
                          position: companyPos,
                          map: map,
                          title:"<?php echo $row['title'] ?>"
                        });
                        google.maps.event.addListener(companyMarker, 'click', function() {
                        infoWindow.open(map, companyMarker);
                        });
                       }
                     </script>
                     <div id="map_canvas" style="width:auto; height:500px"></div>
                   <? } }?>
                   <!-- Google Maps -->
                   <div class="CommentsToEventPage">
                    <h4>Залишіть свій відгук про захід!</h4><br>
                    <?php include('../function/comments_event_view.php') ?>
                    <?php if(!isset($_SESSION["user"])){ ?>
                      <p style="text-align: center; color: red;">Для того щоб залишати коментарi треба авторизуватись!</p>
                    <?php }else{ ?>
                      <div class="form-group">
                        <form method="post"action="../function/comments_event.php">
                          <label>Ваше ім'я(логін):</label><br>
                          <input class="form-control" type="text" name="name" id="com_inp" required value="<?php echo $_SESSION['user']['username'];?>" placeholder="Ім'я">
                          <label>Ваш відгук:</label>
                          <textarea class="form-control" id="exampleFormControlTextarea1" style="resize:none;width: 100%;" name="text_comment" id="coment_txtarea" rows="5" required placeholder="Розкажіть щось?"></textarea>
                          <button name="id_event" value="<?=$_GET['event']?>" type="submit">Додати</button>
                        </form>
                      </div> 
                    <?php } ?>
                  </div> 
                  <div class="SharedEvent">
                    <div class="social_button">
                      <h4>Поділитись з друзями:</h4>
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
                          <?php 
                          if(isset($_GET['event'])){
                            $event_comment = $_GET['event'];
                            $a = mysqli_query($conn,"SELECT COUNT(1) FROM comments_event WHERE `id_events` = '$event_comment'");
                            $b = mysqli_fetch_array( $a ); ?>
                            <h5>Відгуків для цього заходу - </h5><span> <?php  echo $b[0]; 
                          } ?> </span>
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