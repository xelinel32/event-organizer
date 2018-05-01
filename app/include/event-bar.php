<!-- event bar -->
<div class="EventBarMore">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="SpecialOffers">
                    <p>
                        <span>Кращі заходи</span><br>
                        <span>Кращі заходи за голосуванням!</span>
                    </p>
                </div>
                <div class="EventPageBig">
                <?php for ($i=0; $i < 8; $i++) { 
                    echo '<div class="EeventPageSmall">
                    <img src="../img/event_page.jpg" alt="logo_event">
                    <p>Назва заходу<br> 
                    <span>Місце заходу</span>
                    <a href="../pages/big_events.php"><i class="fa fa-angle-down" aria-hidden="true"></i></a>
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
                        <span>Вибери категорію заходу та відпочивай</span>
                    </p>
                </div>
                    <div class="MoreEventCategory">
                    <div class="SingEventCategory">
                        <a href="../pages/singl_categories.php"><i class="fa fa-ship" aria-hidden="true"></i>
                        <span id="left">Спорт</span>
                    </a>
                     </div>
                     <div class="SingEventCategory">
                        <a href="../pages/singl_categories.php"><i class="fa fa-car" aria-hidden="true"></i>
                        <span id="left">Музика</span>
                    </a>
                     </div>
                     <div class="SingEventCategory">
                         <a href="../pages/singl_categories.php"><i class="fa fa-heart" aria-hidden="true"></i>
                         <span id="lefts">ИТ</span>
                        </a>
                     </div>
                     <div class="SingEventCategory">
                            <a href="../pages/singl_categories.php"><i class="fa fa-eercast" aria-hidden="true"></i>
                        <span id="left">Города</span>
                        </a>
                     </div>
                     <div class="SingEventCategory">
                        <a href="../pages/singl_categories.php"><i class="fa fa-bed" aria-hidden="true"></i>
                        <span id="left">Подорожі</span>
                    </a>
                     </div>
                     <div class="SingEventCategory">
                        <a href="../pages/singl_categories.php"><i class="fa fa-safari" aria-hidden="true"></i>
                        <span id="left">Інше</span>
                    </a>
                     </div>
                </div>
            </div>
        </div>
    </div>
</div>