$('.home__header').flowtype({
    minimum   : 481,
    maximum   : 2560,
    minFont   : 18,
    maxFont   : 48
});

$(function(){
	$('#container').mixItUp({
		animation: {
			enable: false		
		},
		callbacks: {
			onMixLoad: function(){
				$(this).mixItUp('setOptions', {
					animation: {
						enable: true	
					},
				});
			}
		}
	});
});

$(function(){
	// check if there is a url hash, and if so, 
	// save it as a variable and prepend a '.' to the start - e.g. '.blue'
	// else, set variable as the default "all"

	var filterOnLoad = window.location.hash ? '.'+window.location.hash : 'all';

	// Send variable to MixItUp on instantiation:
	
	$('#container').mixItUp({
		load: {
			filter: filterOnLoad
		}
	});
});