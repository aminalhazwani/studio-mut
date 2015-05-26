// Lazyloading images
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

// Load mixitup for project filtering
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