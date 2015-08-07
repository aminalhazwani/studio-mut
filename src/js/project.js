$(function() {
  var sliderJQ = $('.slider').royalSlider({
    autoScaleSlider: false,
    autoHeight: false,
    keyboardNavEnabled: true,
    deeplinking: {
      enabled: true,
      change: true,
      prefix: 'mut'
    },
    loopRewind: false,
    controlNavigation: 'none',
    arrowsNav: false,
    numImagesToPreload: 2
  });
  var sliderInstance = sliderJQ.data('royalSlider');
  var slideCountEl = $('<span class="rsSlideCount"></span>').appendTo( '.project_count ' );
  function updCount() {
    slideCountEl.html( (sliderInstance.currSlideId+1) + '&nbsp;&nbsp;/&nbsp;&nbsp;' + sliderInstance.numSlides );
  }
  sliderInstance.ev.on('rsAfterSlideChange', updCount);
  updCount();

  var si = jQuery('.royalSlider').data('royalSlider');
  si.ev.on('rsBeforeMove', function(e, type, action) {
    if(si.currSlideId+1 === si.numSlides && type === "next") {
      $('.project__close').addClass("swing");
      setTimeout(function() {
        $('.project__close').removeClass("swing")
      },600);
    }
    if(si.numSlides+si.currSlideId <= si.numSlides && type === "prev") {
      $('.project__close').addClass("swing");
      setTimeout(function() {
      $('.project__close').removeClass("swing")
      },600);
    }
  });
});

$('.project_close-history').click(function() {
  var loc = window.location.href,
  index = loc.indexOf('#');
  if (index > 0) {
    window.location = loc.substring(0, index);
    }
  history.go(-1);
});

$('.project_caption').find('h1').fitText();