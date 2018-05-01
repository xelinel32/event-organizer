<div class="col-md-4">
    <div class="sidebar_my">
        <h3>Наступні заходи</h3>
        <div class="sidebarevent">
        <?php for ($i=0; $i < 4; $i++) { 
            echo '<div class="sidebareventsmall">
            <img src="../img/sidebar_event_prev.jpg" alt="">
            <ul>
                <li><a href="../pages/big_events.php">Назва заходу</a></li>
                <li>24.05.2018</li>
                <li>Місце</li>
            </ul>
        </div>';
        } ?>
        </div>
        <h3>Наступні місця</h3>
        <?php for ($i=0; $i < 4; $i++) { 
            echo '<div class="sidebareventsmall">
            <img src="../img/sidebar_event_prev.jpg" alt="">
            <ul>
                <li><a href="../pages/singl_location.php">Назва місця</a></li>
                <li>Адреса</li>
                <li>Категорія</li>
            </ul>
        </div>';
        } ?>
        <h3>Малий календар</h3>
        <div class="sidebareventsmall">
        <table id="calendar1" style="margin-left:50px;">
  <thead>
    <tr><td colspan="4"><td colspan="3">
    <tr><td>Пн<td>Вт<td>Ср<td>Чт<td>Пт<td>Сб<td>Вс
  <tbody>
</table>
<script>
var D1 = new Date(),
    D1last = new Date(D1.getFullYear(),D1.getMonth()+1,0).getDate(), // последний день месяца
    D1Nlast = new Date(D1.getFullYear(),D1.getMonth(),D1last).getDay(), // день недели последнего дня месяца
    D1Nfirst = new Date(D1.getFullYear(),D1.getMonth(),1).getDay(), // день недели первого дня месяца
    calendar1 = '<tr>',
    month=["Январь","Февраль","Март","Апрель","Май","Июнь","Июль","Август","Сентябрь","Октябрь","Ноябрь","Декабрь"]; // название месяца, вместо цифр 0-11
// пустые клетки до первого дня текущего месяца
if (D1Nfirst != 0) {
  for(var  i = 1; i < D1Nfirst; i++) calendar1 += '<td>';
}else{ // если первый день месяца выпадает на воскресенье, то требуется 7 пустых клеток 
  for(var  i = 0; i < 6; i++) calendar1 += '<td>';
}
// дни месяца
for(var  i = 1; i <= D1last; i++) {
  if (i != D1.getDate()) {
    calendar1 += '<td>' + i;
  }else{
    calendar1 += '<td id="today">' + i;  // сегодняшней дате можно задать стиль CSS
  }
  if (new Date(D1.getFullYear(),D1.getMonth(),i).getDay() == 0) {  // если день выпадает на воскресенье, то перевод строки
    calendar1 += '<tr>';
  }
}
// пустые клетки после последнего дня месяца
if (D1Nlast != 0) {
  for(var  i = D1Nlast; i < 7; i++) calendar1 += '<td>';
}
document.querySelector('#calendar1 tbody').innerHTML = calendar1;
document.querySelector('#calendar1 thead td:last-child').innerHTML = D1.getFullYear();
document.querySelector('#calendar1 thead td:first-child').innerHTML = month[D1.getMonth()];
</script>
        </div>
    </div>       
</div>