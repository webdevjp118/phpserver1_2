
/*-----bubble setting--------*/
function bbResize() {
	let bbscale = 1;
	let bbtrans = -1;
	if(window.innerWidth < 768) {
		bbscale = 0.5;
		bbtrans = -1/bbscale;
	} else if(window.innerWidth < 1920) {
		bbscale = window.innerWidth / 1920;
		bbtrans = -1/bbscale;
	} 
	document.documentElement.style.setProperty('--bbscale', `${bbscale}`);
	document.documentElement.style.setProperty('--bbtrans', `${bbtrans}`);
}
bbResize();
window.addEventListener('resize', function(event) {
	bbResize();
}, true);
/*-----bubble setting end--------*/

/*----- MOBILE_MENU_START -----*/
$(".js_hamburger").click(function() {
	$(".hamburger_btn").toggleClass("pst_open");
	$(".header_menu").toggleClass("pst_open");
	$(".navigation-main-hp").slideToggle();
	$("html, body").toggleClass("hide-scroll");
});
/*----- MOBILE_MENU_END -----*/

/*----- close mobile menu when click menu START-----*/
$(".headmenu_a").click(function() {
	if($(".header_menu").hasClass("pst_open")) {
		$(".hamburger_btn").toggleClass("pst_open");
		$(".header_menu").toggleClass("pst_open");
		$(".navigation-main-hp").slideToggle();
		$("body").toggleClass("hide-scroll");
	}
});
/*----- close mobile menu when click menu END-----*/

/*-- FIX_HEADER_START --*/
$(function(){
	if($('.state_vals').length>0) {
		if($('.state_vals').hasClass('is_top')) {
			var stickyHeaderTop = 100;
			$(window).scroll(function(){
				if( $(window).scrollTop() > stickyHeaderTop ) {
					if($('#header').hasClass("pst_blackheader") == false)
					{
						//$("#header").css("margin-top","-167px");
						$('#header').addClass('pst_blackheader');
						//$("#header").animate({marginTop: "0px"},800);
					}
					if($('#header').hasClass("pst_blackheader") == true)
					{
						//$("#header").css("display","block");
					}
				} else {
					//$("#header").css("display","block");
					$('#header').removeClass('pst_blackheader');
				}
			});
		} else {
			$('#header').addClass("pst_blackheader");
		}
	} else {
		$('#header').addClass("pst_blackheader");
	}
});
/*-- FIX_HEADER_END --*/
/*-- FIX_SIDEBAR_START --*/
$(function(){
	$(window).scroll(function(){
		if($('.pgblog_side').length>0) {
			if(window.innerWidth > 767) {
				var stickyHeaderTop = 300; 
				if( $(window).scrollTop() > stickyHeaderTop ) {
					if($('.pgblog_side').hasClass("side_fixed") == false)
					{
						$('.pgblog_side').addClass('side_fixed');
					}
				} else {
					$('.pgblog_side').removeClass('side_fixed');
				}
			} else {
				$('.pgblog_side').removeClass('side_fixed');
			}
		} 
	});
});
/*-- FIX_SIDEBAR_END --*/

/*-- SITE_LOADING_START --*/
$(function(){
	setTimeout(() => {
		hideLoading();
	}, 3000);
	$(window).load(function () {
		hideLoading();
	});
	function hideLoading() {
		$('body').css({'overflow-y': 'auto'})
		if($('#site_loader_animation').length > 0) {
			$('#site_loader_animation').css({'display':'none'});
		}
		if($('#site_loader_overlay').length > 0) {
			$('#site_loader_overlay').fadeOut();
		}
		if($('#subheader').length > 0) {
			$('#subheader').removeClass('pst_hide');
		}
		$('.top_fv, .pg_fv').addClass('run_ani');
	}
});
/*-- SITE_LOADING_END --*/

/*-- Disable Empty href --*/
$(function(){
	$('a[href="#"]').click(function(e){
		if($(this).hasClass('page_top')) {

		} else {
			e.preventDefault();
		}
	})
});
/*-- Disable Empty href end --*/

/*-- Magic animation start --*/
let controller = new ScrollMagic.Controller();
let opacTargets = document.querySelectorAll('.js_opac');
for (var i = 0; i < opacTargets.length; i++) {
	let opacClassToggle = new ScrollMagic.Scene({
		triggerElement: opacTargets[i],
		//reverse: false
	}).triggerHook('0.95').setClassToggle(opacTargets[i], 'on').addTo(controller);
}
let maskTargets = document.querySelectorAll('.panil3, .panir3');
for (var i = 0; i < maskTargets.length; i++) {
	let maskClassToggle = new ScrollMagic.Scene({
		triggerElement: maskTargets[i],
		//reverse: false
	}).triggerHook('0.95').setClassToggle(maskTargets[i], 'on').addTo(controller);
}
let ioTargets = document.querySelectorAll('.pioup');
for (var i = 0; i < ioTargets.length; i++) {
	let ioClassToggle = new ScrollMagic.Scene({
		triggerElement: ioTargets[i],
		//reverse: false
	}).triggerHook('0.95').setClassToggle(ioTargets[i], 'on').addTo(controller);
}
let pinTargets = document.querySelectorAll('.pinpos');
for (var i = 0; i < pinTargets.length; i++) {
	let pinClassToggle = new ScrollMagic.Scene({
		triggerElement: pinTargets[i],
		//reverse: false
	}).triggerHook('0.95').setClassToggle(pinTargets[i], 'run_ani').addTo(controller);
}
/*-- Magic animation end --*/