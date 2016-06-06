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
$(".newsletter_input").on("click", function(){
  $(".newsletter_label").addClass("newsletter_label-hide");
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


// Emoji
// var s = Snap(".emoji");

// var eyeRightX = Snap(".eye-right").attr("cx"), eyeRightY = Snap(".eye-right").attr("cy"), eyeRightRadius = Snap(".eye-right").attr("r");
// var eyeRight = Snap(".eye-right");
// var dRight = s.path("M "+eyeRightX+" "+eyeRightY +"L 0 0");
// var irisRightX = Snap(".iris-right").attr("cx"), irisRightY = Snap(".iris-right").attr("cy"), irisRightRadius = Snap(".iris-right").attr("r");
// var irisRight = Snap(".iris-right");

// var eyeLeftX = Snap(".eye-left").attr("cx"), eyeLeftY = Snap(".eye-left").attr("cy"), eyeLeftRadius = Snap(".eye-left").attr("r");
// var eyeLeft = Snap(".eye-left");
// var dLeft = s.path("M "+eyeLeftX+" "+eyeLeftY +"L 0 0");
// var irisLeftX = Snap(".iris-left").attr("cx"), irisLeftY = Snap(".iris-left").attr("cy"), irisLeftRadius = Snap(".iris-left").attr("r");
// var irisLeft = Snap(".iris-left");

// function OnMouseMove(evt) {
//     dRight.attr({ d: "M "+eyeRightX+" "+eyeRightY +"L "+evt.clientX+" "+evt.clientY });
//     var totalLengthRight = dRight.getTotalLength();
//     if (totalLengthRight < (eyeRightRadius - irisRightRadius)) {
//         irisRight.attr({ cx: evt.clientX , cy: evt.clientY });
//     } else {
//         var PAL = dRight.getPointAtLength(eyeRightRadius - irisRightRadius);
//         irisRight.attr({ cx: PAL.x , cy: PAL.y });
//     }
    
//     dLeft.attr({ d: "M "+eyeLeftX+" "+eyeLeftY +"L "+evt.clientX+" "+evt.clientY });
//     var totalLengthLeft = dLeft.getTotalLength();
//     if (totalLengthLeft < (eyeLeftRadius - irisLeftRadius)) {
//         irisLeft.attr({ cx: evt.clientX , cy: evt.clientY });
//     } else {
//         var PAL = dLeft.getPointAtLength(eyeLeftRadius - irisLeftRadius);
//         irisLeft.attr({ cx: PAL.x , cy: PAL.y });
//     }
// }
// document.onmousemove = OnMouseMove;