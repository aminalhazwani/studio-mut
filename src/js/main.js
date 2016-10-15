// Sticky Header
$(window).on("scroll load", function() {  
  if( $(this).scrollTop() > $('.header-primary').height() ) {
    $('.nav').addClass('nav-fixed');
    $('main').addClass('nav-is-fixed');
  } else {
    $('.nav').removeClass('nav-fixed');
    $('main').removeClass('nav-is-fixed');
  }
});


// Newsletter
$(".newsletter_formInput > input").on("focus", function(){
  $(".eyes-round").css("visibility", "hidden");
  $(".eyes-square").css("visibility", "visible");
}).on("blur", function(){
  $(".eyes-round").css("visibility", "visible");
  $(".eyes-square").css("visibility", "hidden");
});


// Random sentence in footer
var random = Math.floor(Math.random() * 1000);
var $heading = $("footer h2");
$heading.eq(random % $heading.length).addClass("u-blk");


// Huge typography
jQuery(".fit").fitText();


// Huge typography navigation
$(window).on("scroll load", function() {  
  var mqp = window.matchMedia("(orientation: portrait)");
  var mql = window.matchMedia("(orientation: landscape)");

  if(mqp.matches) {  
    $(".fit-nav").fitText();
  }
  else {
    $(".fit-nav").removeAttr('style');
  }

  window.addEventListener("orientationchange", function() {
    if(mql.matches) {
      $(".fit-nav").removeAttr('style');
    }
    if(mqp.matches) {  
      $(".fit-nav").fitText();
    }
  }, false);
});


// Open aside
if (window.location.hash.split('-')[0] == '#archive') {
  setTimeout(function() {
    $('body').addClass('aside-is-open');
    $('.aside').addClass('aside-open');
  }, 1000);
}

jQuery('body').on('click', '.nav_item', function (e) {
  if ($(this).is('[href*="#archive"]')) {
    $('body').addClass('aside-is-open');
    $('.aside').addClass('aside-open');
  }
});

jQuery('body').on('click', '.navMobile_item', function (e) {
  if ($(this).is('[href*="#archive"]')) {
    $('body').addClass('aside-is-open');
    $('.aside').addClass('aside-open');
  }
});


// Close aside
$(document).keydown(function(e){
  if(e.keyCode == 27) {
    if ($('body').hasClass("aside-is-open")) {
      $('body').removeClass("aside-is-open");
      history.pushState('', document.title, window.location.pathname);
    }
    if ($('.aside').hasClass("aside-open")) {
      $('.aside').removeClass("aside-open");
    }
  }
});

$("main").on('click', function(e){
  if ($('.aside').hasClass("aside-open")) {
    $('body').removeClass("aside-is-open");
    $('.aside').removeClass("aside-open");
    history.pushState('', document.title, window.location.pathname);
    e.preventDefault();
  }
});

$(".header").on('click', function(e){
  if ($('.aside').hasClass("aside-open")) {
    $('body').removeClass("aside-is-open");
    $('.aside').removeClass("aside-open");
    history.pushState('', document.title, window.location.pathname);
    e.preventDefault();
  }
});

$(".nav").on('click', function(e){
  if ($('.aside').hasClass("aside-open")) {
    $('body').removeClass("aside-is-open");
    $('.aside').removeClass("aside-open");
    history.pushState('', document.title, window.location.pathname);
    e.preventDefault();
  }
});

$(".navMobile").on('click', function(e){
  if ($('.aside').hasClass("aside-open")) {
    $('body').removeClass("aside-is-open");
    $('.aside').removeClass("aside-open");
    history.pushState('', document.title, window.location.pathname);
    e.preventDefault();
  }
});


// Open Mobile Navigation
$('.menu').on('click', function(e) {
  $('.navMobile').toggleClass("navMobile-open");
  e.preventDefault();
});

$("main").on('click', function(e){
  if ($('.navMobile').hasClass("navMobile-open")) {
    $('.navMobile').removeClass("navMobile-open");
    e.preventDefault();
  }
});


// Close Mobile Navigation
$(document).keydown(function(e){
  if(e.keyCode == 27) {
    if ($('.navMobile').hasClass("navMobile-open")) {
      $('.navMobile').removeClass("navMobile-open");
    }
  }
  if(e.keyCode == 27) {
    if ($('.newsletter_label').hasClass("newsletter_label-hide")) {
      $('.newsletter_label').removeClass("newsletter_label-hide");
      $('.newsletter_input').blur();
    }
  }
});


// Swipe aside
$(function() {
  $(".aside").swipe( {
    //Generic swipe handler for all directions
    allowPageScroll: "auto", 
    swipeLeft: function(event, direction, distance, duration, fingerCount) {
      if ($('.aside').hasClass("aside-open")) {
        $('body').removeClass("aside-is-open");
        $('.aside').removeClass("aside-open");
        history.pushState('', document.title, window.location.pathname);
      }
    }
  });
});
