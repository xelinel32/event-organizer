<div class="col-md-4">
    <div class="sidebar_my">
        <h3>Випадкові заходи</h3>
        <div class="sidebarevent">
            <div class="sidebareventsmall">
                <?php 
                $sql = "SELECT * FROM `location` , `events` WHERE `events`.id_loc_event = `location`.id ORDER BY RAND() LIMIT 4";  
                $row = mysqli_query($conn,$sql); 
                while($result = mysqli_fetch_array($row)){
                    ?>
                    <img src="<?php echo $result['image']; ?>" alt="logo_event">
                    <ul>
                        <li><a href="../pages/big_events?event=<?php echo $result['id']; ?>"><?php echo $result['title']; ?></a></li>
                        <li><?php echo $result['add_event']; ?></li>
                        <li><?php echo $result['title_location']; ?></li>
                    </ul>
                <?php } ?>
            </div>
        </div>
        <h3>Випадкові місця</h3>
        <div class="sidebareventsmall">
            <?php 
            $sql = "SELECT * FROM location WHERE id ORDER BY RAND() LIMIT 4";  
            $row = mysqli_query($conn,$sql); 
            while($result = mysqli_fetch_array($row)){
                ?>
                <img src="<?php echo $result['image']; ?>" alt="location_event">
                <ul>
                    <li><a href="../pages/singl_location?location=<?php echo $result['id']; ?>"><?php echo $result['title_location']; ?></a></li>
                    <li><?php echo $result['adress']; ?></li>
                    <li><?php echo $result['cat_loc']; ?></li>
                </ul>
            <?php } ?>
        </div>
        <h3>Випадкові статті</h3>
        <div class="sidebareventsmall">
            <?php 
            $sql = "SELECT * FROM blog WHERE id ORDER BY RAND() LIMIT 4";  
            $row = mysqli_query($conn,$sql); 
            while($result = mysqli_fetch_array($row)){
                ?>
                <img src="<?php echo $result['image_post']; ?>" alt="location_event">
                <ul>
                    <li><a href="../pages/big_blog?id=<?php echo $result['id']; ?>"><?php echo $result['title_post']; ?></a></li>
                    <li><?php echo $result['date_post']; ?></li>
                    <li><?php echo $result['user_post']; ?></li>
                </ul>
            <?php } ?>
        </div>
        <h3>Календар</h3>
        <div class="sidebareventsmall">
            <table id="calendar2">
              <thead>
                <tr><td>‹<td colspan="5"><td>›
                    <tr><td>Пн<td>Вт<td>Ср<td>Чт<td>Пт<td>Сб<td>Вс
                      <tbody>
                      </table>

                      <script>
                          <?php include("../script/mini_calendar.js") ?>
                      </script>
                  </div>
              </div>       
          </div>