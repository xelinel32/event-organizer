<!-- event bar -->
<div class="EventBarMore">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="SpecialOffers">
                    <p>
                        <span>Найближчі заходи</span><br>
                        <span>Найближчі заходи у цьому місяці</span>
                    </p>
                </div>
                <div class="EventPageBig">
                <?php for ($i=0; $i < 4; $i++) { 
                    echo '<div class="EeventPageSmall">
                    <img src="../img/event_page.jpg" alt="logo_event">
                    <p>Назва заходу<br> 
                    <span>Місце заходу</span>
                    <a href="../pages/big_events"><i class="fa fa-angle-down" aria-hidden="true"></i></a>
                    </p>
                </div>';
                } ?>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- categories event -->
<div class="EventCategory">
        <div class="container">
            <div class="col-md-12">
                <div class="row"> 
                    <div class="HolidaysType">
                    <p>
                        <span>Типи заходів</span><br>
                        <span>Вибери категорію заходу та відвідай його</span>
                    </p>
                </div>
                    <div class="MoreEventCategory">
                <?php $sql_category_events = "SELECT * FROM `category_events` WHERE `id`";  
                  $result_category_events = mysqli_query($conn,$sql_category_events); 
                  while($result = mysqli_fetch_array($result_category_events)){
                 ?>
                    <div class="SingEventCategory">
                        <a href="../pages/events?category_events_id=<?php echo $result['id']; ?>"><i  <?php echo $result['category_events_logo'];?>></i>
                        <span id="left"><?php echo $result['category'];?></span>
                    </a>
                     </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</div>