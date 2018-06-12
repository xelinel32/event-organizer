<!-- slider -->
<div class="slider">
  <div id="demo" class="carousel slide" data-ride="carousel">

    <!-- The slideshow -->
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="../img/travel.jpg">
        <div class="carousel-caption">
          <div class="slider-info"><h3>Відвідуй кращі заходи</h3>
            <p>Вибери підходящий захід та відвідай його у компанії з друзями</p>
            <div class="slider-btn">
              <a href="../pages/location">Дивитись місця заходів</a>
              <a href="../pages/full_calendar">Календар</a>
            </div>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <img src="../img/travel_1.jpg">
        <div class="carousel-caption">
          <div class="slider-info"><h3>Відвідуй кращі заходи</h3>
            <p>Вибери підходящий захід та відвідай його у компанії з друзями</p>
            <div class="slider-btn">
              <a href="../pages/location">Дивитись місця заходів</a>
              <a href="../pages/full_calendar">Календар</a>
            </div>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <img src="../img/travel_2.jpg">
        <div class="carousel-caption">
          <div class="slider-info"><h3>Відвідуй кращі заходи</h3>
            <p>Вибери підходящий захід та відвідай його у компанії з друзями</p>
            <div class="slider-btn">
              <a href="../pages/location">Дивитись місця заходів</a>
              <a href="../pages/full_calendar">Календар</a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="carousel-control-prev" href="#demo" data-slide="prev">
      <div class="but_prev"><span class="carousel-control-prev-icon"></span></div>
    </a>
    <a class="carousel-control-next" href="#demo" data-slide="next">
      <div class="but_next"><span class="carousel-control-next-icon"></span></div>
    </a>

  </div>
</div>
<!-- search event -->
<div class="LocationSearchEvent">
  <div class="container-fluid">

    <div class="row align-items-center justify-content-center SearchMenuMain">

      <div class="col-md-1">
        <div class="SearchMenu-Holidays">
          <p>
            <span>Знайди</span><br>
            <span>захід</span>
          </p>
        </div>
      </div>
      <div class="col-md-6">
        <div class="SearchMenu-Search">
          <form action="../pages/search.php" method="get">
            <input type="text" name="search" required placeholder="  Назва заходу">
            <input type="date" name="search_date" required placeholder="  Дата заходу">
          </div>
        </div>
        <div class="col-md-1">
          <div>
            <button type="submit" value="Submit" class="SearchMenu-Button">Знайти</button>
          </form>
        </div>
      </div>
      
    </div>

  </div>
</div>
