$('#about').click(function(){
   $('.about').addClass('visible');
   $('.overlay').addClass('active');
   $('.close__side-elements').addClass('active');
   $('main').addClass('fixed');
   $('header > a').addClass('white');
   $('header > button').addClass('white');
});

$('#clients').click(function(){
   $('.clients').addClass('visible');
   $('.overlay').addClass('active');
   $('.close__side-elements').addClass('active');
   $('main').addClass('fixed');
   $('header > a').addClass('white');
   $('header > button').addClass('white');
});

$('#contact').click(function(){
   $('.contact').addClass('visible');
   $('.overlay').addClass('active');
   $('.close__side-elements').addClass('active');
   $('main').addClass('fixed');
   $('header > a').addClass('white');
   $('header > button').addClass('white');
});

$('.showcase__info--more').click(function(){
   $('.project-information').addClass('visible');
   $('.overlay').addClass('active');
   $('.close__side-elements').addClass('active');
   $('main').addClass('fixed');
   $('header > a').addClass('white');
   $('header > button').addClass('white');
});

$('.overlay').click(function(){
   if ( $('.about').hasClass('visible') )  {
		$('.about').removeClass('visible');
		$('.overlay').removeClass('active');
		$('.close__side-elements').removeClass('active');
		$('main').removeClass('fixed');
		$('header > a').removeClass('white');
		$('header > button').removeClass('white');
	}
	if ( $('.clients').hasClass('visible') )  {
		$('.clients').removeClass('visible');
		$('.overlay').removeClass('active');
		$('.close__side-elements').removeClass('active');
		$('main').removeClass('fixed');
		$('header > a').removeClass('white');
		$('header > button').removeClass('white');
	}
	if ( $('.contact').hasClass('visible') )  {
		$('.contact').removeClass('visible');
		$('.overlay').removeClass('active');
		$('.close__side-elements').removeClass('active');
		$('main').removeClass('fixed');
		$('header > a').removeClass('white');
		$('header > button').removeClass('white');
	}
	if ( $('.project-information').hasClass('visible') )  {
		$('.project-information').removeClass('visible');
		$('.overlay').removeClass('active');
		$('.close__side-elements').removeClass('active');
		$('main').removeClass('fixed');
		$('header > a').removeClass('white');
		$('header > button').removeClass('white');
	}
});

$('.close__side-elements').click(function(){
	if ( $('.about').hasClass('visible') )  {
		$('.about').removeClass('visible');
		$('.overlay').removeClass('active');
		$('.close__side-elements').removeClass('active');
		$('main').removeClass('fixed');
		$('header > a').removeClass('white');
		$('header > button').removeClass('white');
	}
	if ( $('.clients').hasClass('visible') )  {
		$('.clients').removeClass('visible');
		$('.overlay').removeClass('active');
		$('.close__side-elements').removeClass('active');
		$('main').removeClass('fixed');
		$('header > a').removeClass('white');
		$('header > button').removeClass('white');
	}
	if ( $('.contact').hasClass('visible') )  {
		$('.contact').removeClass('visible');
		$('.overlay').removeClass('active');
		$('.close__side-elements').removeClass('active');
		$('main').removeClass('fixed');
		$('header > a').removeClass('white');
		$('header > button').removeClass('white');
	}
	if ( $('.project-information').hasClass('visible') )  {
		$('.project-information').removeClass('visible');
		$('.overlay').removeClass('active');
		$('.close__side-elements').removeClass('active');
		$('main').removeClass('fixed');
		$('header > a').removeClass('white');
		$('header > button').removeClass('white');
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
			$('main').removeClass('fixed');
			$('header > a').removeClass('white');
			$('header > button').removeClass('white');
		}
		if ( $('.clients').hasClass('visible') )  {
			$('.clients').removeClass('visible');
			$('.overlay').removeClass('active');
			$('.close__side-elements').removeClass('active');
			$('main').removeClass('fixed');
			$('header > a').removeClass('white');
			$('header > button').removeClass('white');
		}
		if ( $('.contact').hasClass('visible') )  {
			$('.contact').removeClass('visible');
			$('.overlay').removeClass('active');
			$('.close__side-elements').removeClass('active');
			$('main').removeClass('fixed');
			$('header > a').removeClass('white');
			$('header > button').removeClass('white');
		}
		if ( $('.project-information').hasClass('visible') )  {
			$('.project-information').removeClass('visible');
			$('.overlay').removeClass('active');
			$('.close__side-elements').removeClass('active');
			$('main').removeClass('fixed');
			$('header > a').removeClass('white');
			$('header > button').removeClass('white');
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

function checkTime(i) {
    if (i < 10) {
        i = "0" + i;
    }
    return i;
}

function startTime() {
    var today = new Date();
    var h = today.getHours();
    var m = today.getMinutes();
    var s = today.getSeconds();
    var ampm = h >= 12 ? 'PM' : 'AM';
    h = h % 12;
    h = h ? h : 12;
    m = checkTime(m);
    s = checkTime(s);
    document.getElementById('time').innerHTML = 
    	"It is " + convertHourToName(h) + "–" + convertNumberToName(m) + " and " + convertNumberToName(s) + " seconds " + ampm;
    t = setTimeout(function () {
        startTime()
    }, 500);
}
startTime();

function convertHourToName(num) {
    if (num > 12) {
        num -= 12;
    }
    return convertNumberToName(num);
}

function convertNumberToName(num) {
    var lowNames = ["zero", "one", "two", "three", 
                  "four", "five", "six", "seven", "eight", "nine", 
                 "ten", "eleven", "twelve", "thirteen", "fourteen", 
                  "fifteen", "sixteen", "seventeen", 
                  "eighteen", "nineteen"];
    var tensNames = ["twenty", "thirty", "forty", "fifty", 
                "sixty", "seventy", "eighty", "ninety"];
    var tens, ones, result;
    if (num < lowNames.length) {
        result = lowNames[num];
    } else {
        tens = Math.floor(num / 10);
        ones = num % 10;
        if (tens <= 9) {
            result = tensNames[tens - 2];
            if (ones > 0) {
                result += "" + lowNames[ones];
            }
        } else {
            result = "unknown"
        }
    }
    return result;
}