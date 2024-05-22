/*----- Go-Scroll-To-Top _START--------*/
$(window).scroll(function() {
    if ($(this).scrollTop()) {
        $('#gototop').fadeIn();
    } else {
        $('#gototop').fadeOut();
    }
});
$("#gototop").click(function () {
   //1 second of animation time
   //html works for FFX but not Chrome
   //body works for Chrome but not FFX
   //This strange selector seems to work universally
   $("html, body").animate({scrollTop: 0}, 1000);
});
/*----- Go-Scroll-To-Top _END--------*/

/*----- MOBILE_MENU_START -----*/
$(".js_hamburger").click(function() {
	$(".hamburger_btn").toggleClass("pst_open");
	$(".header_menu").toggleClass("pst_open");
	$(".navigation-main-hp").slideToggle();
	$("html, body").toggleClass("hide-scroll");
});
/*----- MOBILE_MENU_END -----*/

/*-- MEAG_MENU_START --*/
$(document).ready(function() {
	// when you hover a toggle show its dropdown menu
	$(".navbar .dropdown").hover(function () {
	   var width = $(document).width();
	   if(width > 992){
		   $(this).toggleClass("show");
		   $(this).parent().find(".dropdown-menu").toggleClass("show"); 
		   $('.navbar .dropdown-menu').css("display","");
	   }
	 });

	  // hide the menu when the mouse leaves the dropdown
	$(".navbar .dropdown").mouseleave(function() {
		var width = $(document).width();
		if(width > 992){
			$(this).removeClass("show");  
			$(this).parent().find(".dropdown-menu").removeClass("show"); 
			$('.navbar .dropdown-menu').css("display","");
		}
	});
  
	//mobile jquery  
	$(".navbar .dropdown-toggle").click(function() {
		var width = $(document).width();
		if(width <= 991)
		{
			if($(this).next('.dropdown-menu').hasClass("show") == false)
			{
				$('.navbar .dropdown-menu').slideUp("600");
				$(this).next('.dropdown-menu').slideToggle("600");
			}
			else
			{
				$(this).next('.dropdown-menu').slideToggle("600");
			}
		}
	});
		
	$(document).mouseup(function(e) 
	{
		var width = $(document).width();
		if(width <= 991)
		{
			var container = $(".navbar .dropdown");
			// if the target of the click isn't the container nor a descendant of the container
			if (!container.is(e.target) && container.has(e.target).length === 0) 
			{
				//container.hide();
				$('.navbar .dropdown-menu', this).not('.in .dropdown-menu').stop(true,true).slideUp("600");
				$(this).removeClass('show');   
			}
		}
	});
});
/*-- MEAG_MENU_END --*/

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
		e.preventDefault();
		console.log("hello");
	})
});
/*-- Disable Empty href end --*/

/*-- SUB_HEADER_START --*/
$(function(){
	$(window).scroll(function(){
		if( $(window).scrollTop() > window.screen.height ) {
			if($('#subheader').hasClass("pst_hide") == false)
			{
				$('#subheader').addClass('pst_hide');
			}
		} else {
			//$("#header").css("display","block");
			$('#subheader').removeClass('pst_hide');
		}
	});
	$('.submenu_btn').click(function() {
		$('#subheader').addClass('pst_while');
		setTimeout(() => {
			$('#subheader').removeClass('pst_while');
		}, 5000);
	});
});
/*-- SUB_HEADER_END --*/

/*-- Magic animation start --*/
$(function(){
	/*
	 * Scroll Function
	*/
	// 全体制御コントローラ
	var controller = new ScrollMagic.Controller();
	// トリガー設定
	const hook = '0.8';
	// 速度設定
	var duration = 0.6;
	var fadeUpText = new TimelineMax();
			fadeUpText.fromTo('.tw-ttl', duration, { opacity: 0, y: '60px', x:'0'}, {opacity: 1, y: '0', x: '0', ease: Cubic.easeOut})
			.fromTo('.tw-txt', duration, { opacity: 0, y: '60px', x:'0'}, {opacity: 1, y: '0', x: '0', ease: Cubic.easeOut}, 0.1);
	var showImg;
});
	
let controller = new ScrollMagic.Controller();
let target = document.querySelectorAll('.js_tgt');
for (var i = 0; i < target.length; i++) {
	let classToggle = new ScrollMagic.Scene({
		triggerElement: target[i],
		//reverse: false
	}).triggerHook('0.85').setClassToggle(target[i], 'on').addTo(controller);
}
let eveTargets = document.querySelectorAll('.initani');
for (var i = 0; i < eveTargets.length; i++) {
	let eveClassToggle = new ScrollMagic.Scene({
		triggerElement: eveTargets[i],
		//reverse: false
	}).triggerHook('0.85').setClassToggle(eveTargets[i], 'anistart').addTo(controller);
}
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
let pinTargets = document.querySelectorAll('.pinpos');
for (var i = 0; i < pinTargets.length; i++) {
	let pinClassToggle = new ScrollMagic.Scene({
		triggerElement: pinTargets[i],
		//reverse: false
	}).triggerHook('0.95').setClassToggle(pinTargets[i], 'run_ani').addTo(controller);
}
let chartTargets = document.querySelectorAll('.chartpos');
for (var i = 0; i < chartTargets.length; i++) {
	let chartClassToggle = new ScrollMagic.Scene({
		triggerElement: chartTargets[i],
		reverse: false
	}).triggerHook('0.5').setClassToggle(chartTargets[i], 'run_ani').addTo(controller);
}
/*-- Magic animation end --*/

/*--Text Spliter for animation--*/
const targetList = document.querySelectorAll('.js-split')
	const node = Array.prototype.slice.call(targetList, 0)
	node.forEach(function (target) {
	const text = target.textContent
		target.innerHTML = ''
		text.split('').forEach(function (c) {
		target.innerHTML += '<span>' + c + '</span>'
	})
})
/*--Text Spliter for animation end--*/
/*--pspander--*/
$(function(){
	$('.pspander.pst_show').find('.pspander_collapse').slideDown();
	$('.pspander_header').click(function(e){
		if($(this).closest('.pspander').hasClass('pst_show')) {
			$(this).closest('.pspander').find('.pspander_collapse').slideUp();
			$(this).closest('.pspander').removeClass('pst_show');
		} else {
			$(this).closest('.pspander').find('.pspander_collapse').slideDown();
			$(this).closest('.pspander').addClass('pst_show');
		}
	})
});
/*--pspander end--*/
/*--pie chart--*/
$(function(){
	if($('.pie').length>0) {
		window.addEventListener("DOMContentLoaded", () => {
			// update circle when range change
			const pie = document.querySelectorAll(".pie");
		  
			// start the animation when the element is in the page view
			const elements = [].slice.call(document.querySelectorAll(".pie"));
			const circle = new CircularProgressBar("pie");
		  
			// circle.initial();
		  
			if ("IntersectionObserver" in window) {
			  const config = {
				root: null,
				rootMargin: "0px",
				threshold: 0.75
			  };
		  
			  const ovserver = new IntersectionObserver((entries, observer) => {
				entries.map((entry) => {
				  if (entry.isIntersecting && entry.intersectionRatio > 0.75) {
					circle.initial(entry.target);
					observer.unobserve(entry.target);
				  }
				});
			  }, config);
		  
			  elements.map((item) => {
				ovserver.observe(item);
			  });
			} else {
			  elements.map((element) => {
				circle.initial(element);
			  });
			}
		});
	}
});
/*--pie chart end--*/
/*-- chart animation --*/
$(function(){
	if($(".chart_canvas").length > 0) {
		setInterval(() => {
			if($(".chart_canvas").hasClass("run_ani")) {
				$(".chart_phill").each(function( index ) {
					let phillTop = $(this).closest('.chart_canvas').height() || 0;
					let targetVal = parseInt($(this).data("target")) || 0;
					let curVal = parseInt($(this).data("cur")) || 0;
					if(targetVal > curVal) {
						curVal = curVal + 1;
						if(target < curVal) {
							curVal = targetVal;
						}
						$(this).find('.chart_val>span').html(curVal);
						$(this).data("cur", curVal);
						let curH = phillTop * (curVal / 50);
						$(this).height(curH);
					}
				});
			}
		}, 50);
	}
});
/*-- chart animation end--*/
/*--io animation--*/
$(function() {
	var observer = new IntersectionObserver(function(entries) {
		entries.forEach(function(e) {
			if (!e.isIntersecting) return;
			e.target.classList.add('move'); // 交差した時の処理
			observer.unobserve(e.target);
			// target element:
		    //   e.target				ターゲット
		    //   e.isIntersecting		交差しているかどうか
		    //   e.intersectionRatio	交差している領域の割合
		    //   e.intersectionRect		交差領域のgetBoundingClientRect()
		    //   e.boundingClientRect	ターゲットのgetBoundingClientRect()
		    //   e.rootBounds			ルートのgetBoundingClientRect()
		    //   e.time					変更が起こったタイムスタンプ
		})

	},{
    	// オプション設定
		rootMargin: '0px 0px -5% 0px' //下端から5%入ったところで発火
		//threshold: [0, 0.5, 1.0]
	});

	var target = document.querySelectorAll('.io'); //監視したい要素をNodeListで取得
	for(var i = 0; i < target.length; i++ ) {
	    observer.observe(target[i]); // 要素の監視を開始
	}

	//アニメーションによる各要素のはみ出しを解消
	$("body").wrapInner("<div style='overflow:hidden;'></div>");

});
/*--io animation end--*/
/*--custom modal--*/
$(function(){
	$(".js_openaccessdlg").click(function () {
		let targetId = $(this).data('target');
		$('#access_dialog').css({'display':'block'});
		setTimeout(() => {
			$('#access_dialog').addClass('open');
		}, 10);
	});
	$(".cdlg_close").click(function () {
		let targetId = $(this).closest('.cdialog').attr('id')
		$(this).closest('.cdialog').removeClass('open');
		setTimeout(() => {
			$('#' + targetId).css({'display':'none'});
		}, 500);
	});
	$(".accessdlg_close").click(function () {
		$(this).closest('.access_dlg').removeClass('open');//.delay(500).css({'display':'none'});
	});
});
/*--custom modal end--*/
/*--At least one checkbox before submit start--*/
$(function(){
	$("#radio_field7_6").click(function () {
		console.log("hello");
		if ($(this).prop('checked')==true){ 
			$('.checkbox_group2').prop('checked', false);
			$("#next_block").hide();
			$('.checkbox_group1').prop('checked', false).prop('disabled', true);
			$(this).prop('checked', true).prop('disabled', false);
		} else {
			$("#next_block").show();
			$('.checkbox_group1').prop('disabled', false);
		}
		// checked = $(".checkbox_group1:checked").length;
        // if(!checked) {
		// 	$(".checkbox_group1").attr('required', 'required');
        // } else {
		// 	$(".checkbox_group1").removeAttr('required');
		// }
	});
	// $(".checkbox_group1").click(function () {
	// 	checked = $(".checkbox_group1:checked").length;
    //     if(!checked) {
	// 		$(".checkbox_group1").attr('required', 'required');
    //     } else {
	// 		$(".checkbox_group1").removeAttr('required');
	// 	}
	// });
	// $(".checkbox_group2").click(function () {
	// 	checked = $(".checkbox_group2:checked").length;
    //     if(!checked) {
	// 		$(".checkbox_group2").attr('required', 'required');
    //     } else {
	// 		$(".checkbox_group2").removeAttr('required');
	// 	}
	// });
});
/*--At least one checkbox before submit end--*/
/*--custom scroll bar start--*/
$(function(){
	$(window).on("load",function(){
		var width = $(document).width();
	   	if(width < 768){
			$(".mycustom_scroll_bar").mCustomScrollbar();
			$(".aga_table").mCustomScrollbar(
				{
					axis:"x",
				}
			);
	   	}
	});
});
/*--custom scroll bar end--*/
/*-- animation test keys start --*/
// $(function(){
// 	$(window).keydown(function (e){
// 		if(e.keyCode == 81){
// 			if($(".top_fv").hasClass("run_ani")) {
// 				$(".top_fv").removeClass("run_ani");
// 				$(".banner_zigzag_tp").removeClass("run_ani");
// 			} else {
// 				$(".top_fv").addClass("run_ani");
// 				$(".banner_zigzag_tp").addClass("run_ani");
// 			}
// 			if($(".scroll_trigger").hasClass("run_ani")) {
// 				$(".scroll_trigger").removeClass("run_ani");
// 			} else {
// 				$(".scroll_trigger").addClass("run_ani");
// 			}
// 			$("#access_dialog").addClass("open");
// 		}
// 	})
// });
/*-- animation test keys end --*/