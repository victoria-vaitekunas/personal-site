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
	//stupid scroll nav
	// $(window).scroll(function(){
	// 	if ($(this).scrollTop() < 1050) {
	// 		$(".hamburger").fadeOut("slow");
	// 			if ($("#nav").hasClass("navigation")) {
	// 				$("#nav").removeClass("navigation");
	// 				$("#nav").addClass("shownav");
	// 				console.log('hid nav');
	// 			}
	// 	} else {
	// 		$(".hamburger").fadeIn("slow");
	// 		// $(".navigation").fadeIn("slow");
	// 		$(".nav").on('click', '.hamburger i', function(){
	// 			if ($("#nav").hasClass("shownav")) {
	// 			// $("#nav").fadeIn("slow").toggleClass("shownav navigation");
	// 				$("#nav").removeClass("shownav");
	// 				$("#nav").addClass("navigation");
	// 			} else {
	// 				$("#nav").removeClass("navigation");
	// 				$("#nav").addClass("shownav");
	// 			} 
	// 		});
	// 		$(".nav").on('click', '.menu-item', function(){
	// 			$("#nav").toggleClass("navigation shownav");
	// 		});
	// 	}
	// });

	
	
	//portfolio js
	// $('.pfitem').mouseenter(function(){
	// 	$(this).find('.pfolioinfo').fadeIn('slow').css('display','block');
	// });
	// $('.pfitem').mouseleave(function(){
	// 	$(this).find('.pfolioinfo').fadeOut('slow').css('display','none');
	// });

	//secondary nav
	// $('.nav2').on('click', '.hamburger2 i', function(){
	// 	$('#nav2').toggleClass("shownav navigation2");
	// });
	$('.nav').on('click', '.hamburger', function(){
		$('#nav').toggleClass("hidden shownav");
	});
	$('.nav').on('click', '#nav ul li a', function(){
		$('#nav').toggleClass("shownav hidden");
		console.log('click');
	});
});