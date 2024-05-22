$("#gototop").click(function(){$("html, body").animate({scrollTop:0},1e3)}),$(window).scroll(function(){$(this).scrollTop()?$("#gototop").fadeIn():$("#gototop").fadeOut()}),$("#gototop").click(function(){$("html, body").animate({scrollTop:0},1e3)}),$(".mobile-menu-hp").click(function(){$(".navigation-main-hp").fadeToggle(),$("body").toggleClass("hide-scroll")}),$(document).ready(function(){$(".navbar .dropdown").hover(function(){$(document).width()>992&&($(this).toggleClass("show"),$(this).parent().find(".dropdown-menu").toggleClass("show"),$(".navbar .dropdown-menu").css("display",""))}),$(".navbar .dropdown").mouseleave(function(){$(document).width()>992&&($(this).removeClass("show"),$(this).parent().find(".dropdown-menu").removeClass("show"),$(".navbar .dropdown-menu").css("display",""))}),$(".navbar .dropdown-toggle").click(function(){991>=$(document).width()&&(!1==$(this).next(".dropdown-menu").hasClass("show")&&$(".navbar .dropdown-menu").slideUp("600"),$(this).next(".dropdown-menu").slideToggle("600"))}),$(document).mouseup(function(o){if(991>=$(document).width()){var n=$(".navbar .dropdown");n.is(o.target)||0!==n.has(o.target).length||($(".navbar .dropdown-menu",this).not(".in .dropdown-menu").stop(!0,!0).slideUp("600"),$(this).removeClass("show"))}})});
$(function(){
	$('#submit_trick').click(function() {
		console.log("here");
		$( "#form_submit" ).trigger( "click" );
	});
});
$(function(){
	$('a[href="#"]').click(function(e){
		e.preventDefault();
		console.log("hello");
	})
});
$(function(){
	$('a[href="#"]').click(function(e){
		e.preventDefault();
		console.log("hello");
	})
	if($('.js_play_youtube').length>0) {
		$('.js_play_youtube').click(function(e){
			console.log("hello");
			$('.js_play_youtube').css({'opacity': '0'});
			e.preventDefault(false);
		});
	}
});
$(function(){
	if($('.salon_slider_img_osp').length>0) {
		var owl = $('.salon_slider_img_osp');
		owl.owlCarousel({
			margin: 0,
			nav: true,
			dots: false,
			loop: true,
			responsive: {
				0: {
				items: 1
				},
				576: {
				items: 1
				},
				992: {
				items: 1 
				}
			}
		})
	}
});
$(function(){
	if($('.js_recruit1').length>0) {
		$('.js_recruit1').click(function(e){
			$('.salon_slider1').css({'display':'block'});
			$('.salon_slider2').css({'display':'none'});
		});
	}
	if($('.js_recruit2').length>0) {
		$('.js_recruit2').click(function(e){
			$('.salon_slider1').css({'display':'none'});
			$('.salon_slider2').css({'display':'block'});
		});
	}
});