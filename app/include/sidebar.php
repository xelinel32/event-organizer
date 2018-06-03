<div class="col-md-4">
    <div class="sidebar_my">
        <h3>Випадкові заходи</h3>
        <div class="sidebarevent">
        <?php for ($i=0; $i < 4; $i++) { 
            echo '<div class="sidebareventsmall">
            <img src="../img/sidebar_event_prev.jpg" alt="">
            <ul>
                <li><a href="../pages/big_events">Назва заходу</a></li>
                <li>24.05.2018</li>
                <li>Місце</li>
            </ul>
        </div>';
        } ?>
        </div>
        <h3>Випадкові місця</h3>
        <?php for ($i=0; $i < 4; $i++) { 
            echo '<div class="sidebareventsmall">
            <img src="../img/sidebar_event_prev.jpg" alt="">
            <ul>
                <li><a href="../pages/singl_location">Назва місця</a></li>
                <li>Адреса</li>
                <li>Категорія</li>
            </ul>
        </div>';
        } ?>
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