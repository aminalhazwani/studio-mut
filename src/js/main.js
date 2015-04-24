$('#about').click(function(){
   $('.about').addClass('visible');
   $('.overlay').addClass('active');
   $('.close__side-elements').addClass('active');
});

$('#clients').click(function(){
   $('.clients').addClass('visible');
   $('.overlay').addClass('active');
   $('.close__side-elements').addClass('active');
});

$('#contact').click(function(){
   $('.contact').addClass('visible');
   $('.overlay').addClass('active');
   $('.close__side-elements').addClass('active');
});

$('.overlay').click(function(){
   if ( $('.about').hasClass('visible') )  {
		$('.about').removeClass('visible');
		$('.overlay').removeClass('active');
		$('.close__side-elements').removeClass('active');
	}
	if ( $('.clients').hasClass('visible') )  {
		$('.clients').removeClass('visible');
		$('.overlay').removeClass('active');
		$('.close__side-elements').removeClass('active');
	}
	if ( $('.contact').hasClass('visible') )  {
		$('.contact').removeClass('visible');
		$('.overlay').removeClass('active');
		$('.close__side-elements').removeClass('active');
	}
});

$('.close__side-elements').click(function(){
	if ( $('.about').hasClass('visible') )  {
		$('.about').removeClass('visible');
		$('.overlay').removeClass('active');
		$('.close__side-elements').removeClass('active');
	}
	if ( $('.clients').hasClass('visible') )  {
		$('.clients').removeClass('visible');
		$('.overlay').removeClass('active');
		$('.close__side-elements').removeClass('active');
	}
	if ( $('.contact').hasClass('visible') )  {
		$('.contact').removeClass('visible');
		$('.overlay').removeClass('active');
		$('.close__side-elements').removeClass('active');
	}
});

// $('.filter').click(function(){
// 	$('.filter--reset').addClass('visible');
// });

$(document).on('keydown', function(e) {
	if ( e.keyCode === 27 ) {
		if ( $('.about').hasClass('visible') )  {
			$('.about').removeClass('visible');
			$('.overlay').removeClass('active');
			$('.close__side-elements').removeClass('active');
		}
		if ( $('.clients').hasClass('visible') )  {
			$('.clients').removeClass('visible');
			$('.overlay').removeClass('active');
			$('.close__side-elements').removeClass('active');
		}
		if ( $('.contact').hasClass('visible') )  {
			$('.contact').removeClass('visible');
			$('.overlay').removeClass('active');
			$('.close__side-elements').removeClass('active');
		}
	}
});

var $container = $('.project__container'),
lazyLoad = function($show){
	var $image = $show.find('img');
	$image.each(function(){
		var $img = $(this),
			  src = $img.attr('data-src');	
		if(!$img.hasClass('loaded') && src){
			$img[0].src = src;
			$img.addClass('loaded');
		}
	});
};

$('.project__container').mixItUp({
	selectors: {
		target: '.project',
		filter: '.filter'
	},
	animation: {
		enable: false
	},
	callbacks: {
		onMixLoad: function(){
			$(this).mixItUp('setOptions', {
				animation: {
					enable: true	
				}
			});
		},
		onMixEnd: function(state){
			lazyLoad(state.$show);
		}
	}
});

$(document).ready(function() {
	elementResize();
});

function elementResize() {
	var footerHeight = $(".footer").outerHeight();
	$(".footer__space").css("height", footerHeight-1);
};

$(window).resize(function() {
	elementResize();
});


// (function ($) {
//     $('#main').smoothState();
// })(jQuery);