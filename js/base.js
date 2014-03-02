// JavaScript Document

$(document).ready(function() {

	
	//$('.headerbar').hide().delay(500).slideDown(3000);
	//$('.navbar').hide().delay(500).slideDown(3000);
	//$('.navbar').hide().fadeIn(2000);
	//$('.headerbar').hide().slideDown(2000);
	
	$('#home h2').hide().fadeIn(3000);
	
	var divs = $('#home img.pos');
	//var headbar = $('.headerbar');
	//var navbar = $('.navbar');
	$(window).on('scroll', function() {
   		var st = $(this).scrollTop();
  		divs.css({ 'opacity' : (1 - st/250) });
		//headbar.css({ 'opacity' : (.8 + st/100) });
		//navbar.css({ 'opacity' : (.8 + st/100) });
	
	});

	$(function() {
		$("#contribute a[title]").tooltips();
	});
	
	$(window).scroll(function() {
		if ($(this).scrollTop() > 200) {
			$('.go-top').fadeIn(200);
		} else {
			$('.go-top').fadeOut(200);
		}
	});
	
	// Animate the scroll to top
	$('.go-top').click(function(event) {
		event.preventDefault();
		
		$('html, body').animate({scrollTop: 0}, 300);
	})
	
	

/*
	var deck = new $.scrolldeck({
		buttons: '.nav-button',
		duration: 1000,
		easing: 'easeInOutExpo'
	});
	
	*/

	
});

