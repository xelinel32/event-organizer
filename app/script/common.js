$(document).ready(function() {
  //Мега-меню и мобайл меню
  $(".sf-menu")
  .superfish({
    delay: 200,
    speed: "fast",
    cssArrows: false
  })
  .after("<div id='mobile-menu'>")
  .clone()
  .appendTo("#mobile-menu");
  $("#mobile-menu")
  .find("*")
  .attr("style", "");
  $("#mobile-menu")
  .children("ul")
  .removeClass("sf-menu")

  .parent()
  .mmenu({
    extensions: [
    "widescreen",
    "theme-white",
    "effect-menu-slide",
    "pagedim-black"
    ],
    navbar: {
      title: "Меню сайта"
    }
  });

  //Кнопка Button к мобайл меню
  $(".toggle-mnu").click(function() {
    $(this).addClass("on");
  });

  var api = $("#mobile-menu").data("mmenu");
  api.bind("closed", function() {
    $(".toggle-mnu").removeClass("on");
  });
  //Кнопка "Наверх".
  $(".Triq a").click(function() {
    $("html, body").animate({ scrollTop: 0 }, 300);
    return false;
  });
  //Кнопка "Наверх для правой кнопки".
  $(window).scroll(function(){
    if ($(this).scrollTop() > 500) {
      $('.up_button img').fadeIn();
    } else {
      $('.up_button img').fadeOut();
    }
  });
  $(".up_button img").click(function() {
    $("html, body").animate({ scrollTop: 0 }, 300);
    return false;
  });
  // calendar
  $('.content_cal').fullCalendar({
    eventSources : [{
      events : events,
    }],
    header: {
      left: 'prev,next today',
      center: 'title',
      right: 'month,agendaWeek,agendaDay',
      columnHeaderFormat: 'dddd',
    },
    eventRender: function(event, element) {
      element.attr('data-toggle', "modal");
      element.attr('data-target', "#calendarModal");
      element.attr('href', "/details");
    },
    eventClick:  function(event, jsEvent, view) {
      $('#modalTitle').html(event.title);
      $("#startTime").html(moment(event.start).format('YYYY/MM/DD H(:mm):s'));
      $("#endTime").html(moment(event.end).format('YYYY/MM/DD H(:mm):s'));
      $('#modalBody').html(event.description);
      $('#eventUrl').attr('href',event.url);
      $('#calendarModal').modal();
    },
    timeFormat: 'H(:mm):s',
    axisFormat: 'H(:mm):s',
    displayEventEnd: true,
    buttonText: {
      today: "Сьогодні",
      month: "Місяць",
      week: "Неділя",
      day: "День"
    },
    monthNames: ['Січень','Лютий','Березень','Квітень','Травень','Червень','Липень','Серпень','Вересень','Жовтень','Листопад',' Грудень',],
    monthNamesShort: ['Січень','Лютий','Березень','Квітень','Травень','Червень','Липень','Серпень','Вересень','Жовтень','Листопад','Грудень',],
    dayNames: ['Неділя','Понеділок','Вівторок','Середа','Четвер','П`ятниця','Субота'],
    dayNamesShort: ['Неділя','Понеділок','Вівторок','Середа','Четвер','П`ятниця','Субота',],
  });
});
