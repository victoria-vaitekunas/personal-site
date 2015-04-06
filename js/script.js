// var $ = jQuery.noConflict();

// $(document).ready(function(){
// 	$('.hamburger').click(function(){
// 		$('#nav>ul').removeClass('shownav').addClass('navigation');
// 		console.log("it works");
// 	});
// });

var $ = jQuery.noConflict();
// var w=window,d=document,e=d.documentElement,g=d.getElementsByTagName('body')[0],x=w.innerWidth||e.clientWidth||g.clientWidth,y=w.innerHeight||e.clientHeight||g.clientHeight;


$(document).ready(function(){
	
	$('.navjs').on('click', '.hamburger', function(){
		$('#nav').fadeIn('slow').toggleClass('hidden shownav');
		$(this).css('z-index', '101');
		$(this).animate({
			"transform": "skewy(45deg)"
		}, {
			step: function(now,fx) {
				$(this).find(".line-1").css({
					'transform': 'translateY(9px) rotateZ(45deg)',
					// 'position': 'absolute'
				});
				$(this).find(".line-2").css({
					'opacity': '0'
				});
				$(this).find(".line-3").css({
					'transform': 'translateY(-9px) rotateZ(135deg)',
					// 'position': 'absolute'
				});
			},
			duration: "slow"
		}, "linear");
		return false;
	});
	$('body').on('click', '#nav', function(){
		console.log("clicked");
		navFadeInOut();
		XtoHamburger();
	}); 
	function XtoHamburger(){
		$(".hamburger").animate({
			"transform": "skewy(45deg)"
		}, {
			step: function(now,fx) {
				$(this).find(".line-1").css({
					'transform': 'translateY(0px) rotateZ(0deg)'
				});
				$(this).find(".line-2").css({
					'opacity': '1'
				});
				$(this).find(".line-3").css({
					'transform': 'translateY(0px) rotateZ(0deg)'
				});
			},
			duration: "slow"
		}, "linear");
	};
	function makePromises(){
		var deferred = $.Deferred();

	}
	function navFadeInOut(){
		if($('#nav').hasClass('shownav')) {
			$('#nav').toggleClass('shownav hidden').css('display','none');
			console.log('you are clicking and class is shownav');
		} else {
			$('#nav').fadeOut('slow');
		}
		return false;
	};
	function toggleThat(){
		$('#nav').toggleClass('shownav hidden');
	};


	$.when( navFadeInOut() ).done(function(){
		console.log('done?');
		// smoothysmoo();
	});
});