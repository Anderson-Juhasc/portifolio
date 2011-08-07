$(function(){
	/*var navigations = $('#innerNav'),
	pos = navigations.offset();

	$(window).scroll(function() {
		if($(this).scrollTop() > pos.top+navigations.height() && navigations.hasClass('default')) {
			navigations.fadeOut('fast', function(){
				$(this).removeClass('default').addClass('stabled').fadeIn();
			});
		} else if ($(this).scrollTop() <= pos.top && navigations.hasClass('stabled')) {
			navigations.fadeOut('fast', function(){
				$(this).removeClass('stabled').addClass('default').fadeIn();
			});
		}
	});*/
	
	var menu = document.getElementById('innerNav');
	var init = menu.offsetTop - 1;
	var docked;

	window.onscroll = function () {
		if (!docked && (menu.offsetTop - scrollTop() < 0)) {
			menu.style.top = 0;
			menu.style.position = 'fixed';
			menu.className = 'docked';
			docked = true;
		} else if (docked && scrollTop() <= init) {
			menu.style.position = 'absolute';
			menu.style.top = init + 'px';
			menu.className = menu.className.replace('docked', '');
			docked = false;
		}
	};

	function scrollTop() {
		return document.body.scrollTop || document.documentElement.scrollTop;
	}

	$('#runCycle')
		.before('<div id="navSlider">')
		.cycle({
			fx:     'fade', 
			speed:  'fast', 
			timeout: 8000, // Velocidade da mudança de slide 5000 = 5s
			next:   '#nextS', 
			prev:   '#prevS',
			pager:  '#navSlider',
			after:	function() {
				var relClass = $(this).attr('rel');

				$('#runTitle').html($('.description.'+relClass).html());
			}
		}
	);
	
	$('.anchorAnimate').anchorAnimate().click(function() {
		$('.anchorAnimate').removeClass('current');
		$(this).addClass('current');
	});

	$('.anchorSlider').anchorAnimate().click(function() {
		$('.anchorAnimate').removeClass('current');
		$('a.anchorPort').addClass('current');
		return false;
	});

	$('.fade').mosaic();
});

$.fn.anchorAnimate = function(settings) {

		settings = $.extend({
			speed : 1100
		}, settings);	

		return this.each(function(){
			var caller = this;
			
			$(caller).click(function (event) {
				event.preventDefault();
				var locationHref = window.location.href;
				var elementClick = $(caller).attr("href");
			
				var destination = $(elementClick).offset().top;
				$("html:not(:animated),body:not(:animated)").animate({ scrollTop: destination}, settings.speed, function() {
					window.location.hash = elementClick;
				});
				return false;
			});
		});	
	}
