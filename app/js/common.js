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
        title: "Menu"
      },
      navbars: {
        content: ["searchfield"]
      },
      searchfield: {
        noResults: "Sorry, info is missins",
        placeholder: "Search"
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
});
