// Sticky Header
$(window).on("scroll load", function() {  
  if( $(this).scrollTop() > $('.header-primary').height() ) {
    $('.nav').addClass('nav-scrolled');
    $('main').addClass('nav-is-fixed');
  } else {
    $('.nav').removeClass('nav-scrolled');
    $('main').removeClass('nav-is-fixed');
  }
});

// Random sentence in footer
var random = Math.floor(Math.random() * 1000);
var $heading = $("footer h2");
$heading.eq(random % $heading.length).addClass("u-blk");

// Footer sentece huge typography
jQuery(".fit").fitText();

// Mobile Navigation
$('.menu').on('click', function(e) {
  $('.navMobile').toggleClass("navMobile-is-open");
  e.preventDefault();
});
$("main").on('click', function(e){
  if ($('.navMobile').hasClass("navMobile-is-open")) {
    $('.navMobile').removeClass("navMobile-is-open");
    e.preventDefault();
  }
});
$(window).scroll(function() {    
var scroll = $(window).scrollTop();
  if (scroll >= 1) {
    if ($('.navMobile').hasClass("navMobile-is-open")) {
      $('.navMobile').removeClass("navMobile-is-open");
    }
  }
});
$(document).keydown(function(e){
  if(e.keyCode == 27) {
    if ($('.navMobile').hasClass("navMobile-is-open")) {
      $('.navMobile').removeClass("navMobile-is-open");
    }
  }
});