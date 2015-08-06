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
    numImagesToPreload: 99
  });
  var sliderInstance = sliderJQ.data('royalSlider');
  var slideCountEl = $('<div class="project_count rsSlideCount"></div>').appendTo( '.l-container' );
  function updCount() {
    slideCountEl.html( (sliderInstance.currSlideId+1) + '&nbsp;&nbsp;/&nbsp;&nbsp;' + sliderInstance.numSlides );
  }
  sliderInstance.ev.on('rsAfterSlideChange', updCount);
  // sliderInstance.ev.on('rsAfterSlideChange', pauseAllVideos );
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