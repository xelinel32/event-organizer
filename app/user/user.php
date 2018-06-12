<?php
include '../function/configdb.php';
?>
<?php include("../include/up_style.php") ?>
<body>
  <header class="top_header">
   <?php include("../include/header.php") ?>
 </header>
 <div class="main_content_news">
  <div class="container">
    <div class="row">
      <div class="col-md-8">
        <!-- main -->
        <div class="news_content">
         <div class="box_news">
          <div class="profile_user">
            <?php
            if(isset($_GET['id'])){
              $sql = mysqli_query($conn,"SELECT * FROM `multi_login` WHERE `id` = ".$_GET['id']."") or die("Помилка в запиті");
              while($result = mysqli_fetch_array($sql)){
                ?>
                <h2>Профіль користувача  - <span><?php echo $result['username']; ?></span> </h2>
                <img src="<?php echo $result['image']; ?>" alt="userlogo">
                <div class="profile_user">
                 <ul> </li>
                  <li>E-mail - <span><?php echo $result['email']; ?></span></li>
                  <li>Нікнейм - <span><?php echo $result['username']; ?></span></li>
                  <li>ПІБ - <span><?php echo $result['pib']; ?></span></li>
                  <li>Номер телефону - <span><?php echo $result['phone_number']; ?></span></li>
                  <li>Тип облікового запису - <span><?php echo $result['user_type']; ?></li>
                  </ul>
                </div>
              <?php }} else {
                echo "<script>location='../pages/404'</script>";
              }?>
              <?php if($_SESSION['user']['id'] !== $_GET['id']){ ?>
              <?php } else { ?>
                <div class="panel_user">
                  <h3>Панель керування</h3>
                  <?php if($_SESSION['user']['user_type']=='Адміністрація'){ ?>
                    <a class="btn btn-outline-primary btn-xsm" href="../admin/admin">Перейти до панелі адміністратора</a> 
                  <?php } else { ?>
                   <div class="my_events_user"> 
                     <b>Мої заходи</b><br>   
                     <?php $results = mysqli_query($conn, "SELECT * FROM `category_events`,`location`, `events` WHERE `events`.id_cat_event = `category_events`.id AND `events`.id_loc_event = `location`.id AND `events`.id_user = ".$_SESSION['user']['id'].""); ?>
                     <div class="table-responsive">
                     <br><table class="table table-sm table-bordered">
                      <thead>
                        <tr>
                          <th>Назва</th>
                          <th>Скор. опис</th>
                          <th>Адреса</th>
                          <th>Категорія</th>
                          <th colspan="2">Дія</th>
                        </tr>
                      </thead>
                      <?php while ($row = mysqli_fetch_assoc($results)) { ?>
                        <tr>
                          <td><a href="../pages/big_events?event=<?php echo $row['id'] ?>"><?php echo $row['title']; ?></a></td>
                          <td><?php echo $row['pre_event']; ?></td>
                          <td><?php echo $row['title_location']; ?></td>
                          <td><?php echo $row['category']; ?></td>
                          <td><a href="editeventuser?user_event_id=<?php echo $row['id']; ?>" class="btn btn-success btn-sm">Змі.</a></td>
                          <td><a href="editprofile?del=<?php echo $row['id']; ?>" class="btn btn-danger btn-sm">Вид.</a></td>
                        </tr>
                      <?php } ?>
                    </table>
                  </div>
                  </div>
                  <div class="operation_profile">
                    <b>Операції з профілем</b> -
                    <a data-toggle="modal" data-target="#EditeProfilePass" href="">Змінити пароль</a> |
                    <a data-toggle="modal" data-target="#EditeProfile" href="">Змінити дані</a> |
                    <a data-toggle="modal" data-target="#EditeProfilePhoto" href="">Змінити зображення</a><br>
                    <br><a class="btn btn-outline-primary btn-sm" href="neweventuser"> Організувати захід</a>
                    <a class="btn btn-outline-primary btn-sm" href="newlocationuser"> Додати місце проходження заходів</a>
                  </div>
                <?php } ?> 
              </div>
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