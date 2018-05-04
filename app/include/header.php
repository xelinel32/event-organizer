<?php
function activemenu($activemenu)
{
    $menuitem = basename($_SERVER['SCRIPT_NAME']);
    if ($activemenu == $menuitem) { 
        return "style=\"color:#1dd2af;\""; 
    }
}
?>
<!-- topline -->
<div class="header_topline">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="soc_button">
                <a target="_blank" href="http://vk.com/xelinel32"><i class="fa fa-vk" aria-hidden="true"></i></a>
                <a target="_blank" href="https://www.facebook.com/artem.sedlyar"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                <a target="_blank" href="https://twitter.com/ArtemSedlar"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                <a target="_blank" href="https://plus.google.com/u/0/103334064496844281082"><i class="fa fa-google-plus-square" aria-hidden="true"></i></a>  
              </div>
              <div class="login_contact">
              <p>
               <i class="fa fa-user-o" aria-hidden="true"></i>
                  <a id="logadm" data-toggle="modal" data-target="#AdminModal" href="#">Адміністрація</a>
                </p>
              <p>
               <i class="fa fa-user-o" aria-hidden="true"></i>
                  <a id="logadm" data-toggle="modal" data-target="#CustomerModal" href="#">Простий Юзер</a>
                </p>
              <p>
               <i class="fa fa-file-o" aria-hidden="true"></i> Нема аккаунту?
                  <a data-toggle="modal" data-target="#RegisterModal" href="#">Реєстрація</a>
                </p>
              <p>
                <span>
                    <i class="fa fa-phone" aria-hidden="true"></i> Передзвоніть мені: +380935039351</p>
                </span>
              </div>
           </div>
         </div>
       </div> 
      </div>
<!-- menu -->
<div class="header_under">
        <div class="container">
          <div class="col-md-12">
            <div class="row">
              <a href="#mobile-menu" class="toggle-mnu"><span></span></a>
              <!-- logo -->
              <a href="../index" class="logo_site">COL<span>E</span>VENTS</a>
              <!-- menu -->
              <div class="main_menu">
                <ul class="sf-menu">
                  <li><a <?=activemenu("index.php")?> href="../index">Головна</a></li>
                  <li><a <?=activemenu("full_calendar.php")?> href="../pages/full_calendar">Календар</a></li>
                  <li><a <?=activemenu("events.php")?> href="../pages/events">Заходи</a>
                <ul class="submenu">
                  <li><a href="../pages/categories">Категорії заходів</a></li>
                  <li><a href="../pages/location">Місця</a></li>
                  <li><a id="log_mob" data-toggle="modal" data-target="#CustomerModal" href="#">Вхід</a></li>
                </ul>
                  </li>
                  <li><a <?=activemenu("profile.php")?> href="../pages/profile">Додати захід</a></li>
                  <li><a <?=activemenu("news.php")?> href="../pages/news">Новини</a></li>
                </ul>
                <div class="search_menu">
                  <a data-toggle="modal" data-target="#SearchModal" href="#"><i class="fa fa-search" aria-hidden="true"></i></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>