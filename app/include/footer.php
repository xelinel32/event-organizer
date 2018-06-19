<div class="FooterContent">
    <div class="container">
      <div class="row">
        <div class="col-sm-3">
          <h3>Новостний канал</h3>
          <div class="Newslatter">
              <p>Підпишися на розсилку новостей та не пропусти кращих заходів</p>
              <form action="" method="POST">
                  <input type="text" required placeholder="Підписатися...">
                  <input type="submit" value="GO">
              </form>
          </div>
      </div>
      <div class="col-sm-3">
        <h3 id="le">Останні заходи</h3>
        <div class="LatestNews">
            <?php 
            $sql = "SELECT * FROM `events` ORDER BY `add_event` DESC LIMIT 2";  
            $row = mysqli_query($conn,$sql); 
            while($result = mysqli_fetch_array($row)){
            ?>
                <img src="<?php echo $result['image']; ?>" alt="ava">
                <b><a href="../pages/big_events?event=<?php echo $result['id']; ?>"><?php echo $result['title']; ?></a></b>
                <br><span><?php echo $result['add_event'] ?></span><br>
            <?php } ?>  
        </div>
    </div>
    <div class="col-sm-3">
        <h3 id="ln">Нові статті</h3>
        <div class="LatestNews lnb">
            <?php 
            $sql = "SELECT * FROM `blog` ORDER BY `date_post` DESC LIMIT 2";  
            $row = mysqli_query($conn,$sql); 
            while($result = mysqli_fetch_array($row)){
                ?>   
                <img src="<?php echo $result['image_post']; ?>" alt="ava">
                <b><a href="../pages/big_blog?id=<?php echo $result['id']; ?>"><?php echo $result['title_post']; ?></a></b>
                <br><span><?php echo $result['date_post']; ?></span><br>
            <?php } ?>
        </div>
    </div>
    <div class="col-sm-3">
        <div class="FooterAdress">
            <h3>Адреса</h3>
            <div class="AddressFoo">
                <p>Шевченко 53В<br>
                    Чернігів, Україна<br>
                    <span>E-mail:</span>
                    xelinel32@outlook.com
                </p>
                <div class="FooterSocial">
                    <a target="_blank" href="http://vk.com/xelinel32"><i class="fa fa-vk" aria-hidden="true"></i></a>
                    <a target="_blank" href="https://www.facebook.com/artem.sedlyar"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                    <a target="_blank" href="https://twitter.com/ArtemSedlar"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                    <a target="_blank" href="https://plus.google.com/u/0/103334064496844281082"><i class="fa fa-google-plus-square" aria-hidden="true"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<hr id="#hrev">
<div class="FooterMenu">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="navfoo">
                    <ul>
                        <li><a <?=activemenu("index.php")?> href="../index">Головна</a> ::</li>
                        <li><a <?=activemenu("full_calendar.php")?> href="../pages/full_calendar">Календар</a> ::</li>
                        <li><a <?=activemenu("events.php")?> href="../pages/events">Заходи</a> ::</li>
                        <li><a <?=activemenu("location.php")?> href="../pages/location">Місця</a> ::</li>
                        <li><a <?=activemenu("blog.php")?> href="../pages/blog">Блог</a> ::</li>
                        <li><a <?=activemenu("moreinfo.php")?> href="../pages/moreinfo">Інше</a></li>
                    </ul>
                </div>
                <span>Copyright &copy Colevents. Всі права захищені 2018.</span>
                <div class="Triq"><a href="#"><i class="fa fa-arrow-up" aria-hidden="true"></i></a></div>
            </div>
        </div>
    </div>
</div>
</div>