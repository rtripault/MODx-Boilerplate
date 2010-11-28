/*
    Author : Romain // Melting Media : http://www.melting-media.com
*/

/* for dropdown menu */
$("a.parentNav").hover(
  function () {
    $(this).addClass("over");
  },
  function () {
    $(this).removeClass("over");
  }
);
$("div.subNav").hover(
  function () {
    $(this).prev().addClass("over");
  },
  function () {
    $(this).prev().removeClass("over");
  }
);