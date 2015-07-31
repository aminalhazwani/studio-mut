$(function() {
    setTimeout(function() {
        $(".splash").hide()
    }, 600);
});

$(window).on("scroll resize load", function() {
  var nav = $(".nav");
  var nvs = "nav-scrolled";
  var hdr = $('.header-primary').height();
  
  if( $(this).scrollTop() > hdr ) {
    nav.addClass(nvs);
    $('main').addClass('nav-is-fixed');
  } else {
    nav.removeClass(nvs);
    $('main').removeClass('nav-is-fixed');
  }
});

var random = Math.floor(Math.random() * 1000);
var $heading = $("footer h2");
$heading.eq(random % $heading.length).addClass("u-blk");

jQuery(".fit").fitText();