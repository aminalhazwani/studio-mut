$(function() {
  var sliderJQ = $('.showcase__slider').royalSlider({
    autoScaleSlider: false,
    autoHeight: false,
    keyboardNavEnabled: true,
    deeplinking: {
      enabled: true,
      change: true
    },
    loopRewind: true,
    controlNavigation: 'none',
    arrowsNav: false
  });

  var sliderInstance = sliderJQ.data('royalSlider');
  var slideCountEl = $('<div class="showcase__count rsSlideCount"></div>').appendTo( '.showcase' );

  function updCount() {
      slideCountEl.html( (sliderInstance.currSlideId+1) + '&nbsp;&nbsp;/&nbsp;&nbsp;' + sliderInstance.numSlides );
  }
  sliderInstance.ev.on('rsAfterSlideChange', updCount);
  updCount();
});

$(document).ready(function(){
  $('.showcase__image--text').addClass('ready');

  $('.showcase__image--text').flowtype({
    minimum   : 320,
    maximum   : 1200,
    minFont   : 20,
    maxFont   : 50
  });
});

