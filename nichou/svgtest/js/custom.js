$('#gototop').click(function() {
	$('html, body'). animate({
		scrollTop: 0
	}, 1000);
});

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
/*----- MOBILE_MENU_START -----*/
$(".js_hamburger").click(function() {
	$(".hamburger_btn").toggleClass("pst_open");
	$(".header_menu").toggleClass("pst_open");
	$(".navigation-main-hp").slideToggle();
	$("body").toggleClass("hide-scroll");
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

/*-- FIX_HEADER_START --*/
$(function(){
	if($('.state_vals').length>0) {
		if($('.state_vals').hasClass('header_video')) {
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
	}, 5000);
	$(window).load(function () {
		// hideLoading();
	});
	function hideLoading() {
		$('body').css({'overflow-y': 'scroll'})
		if($('#site_loader_animation').length > 0) {
			$('#site_loader_animation').css({'display':'none'});
		}
		if($('#site_loader_overlay').length > 0) {
			$('#site_loader_overlay').fadeOut();
			setTimeout(() => {
				$('#site_loader_overlay').remove();	
			}, 1000);
		}
		if($('#subheader').length > 0) {
			$('#subheader').removeClass('pst_hide');
		}
		setTimeout(() => {
			if($('.banner_block_tp').length > 0) {
				$('.banner_block_tp').addClass('run_ani');
			}
		}, 300);
	}
});
// const onConfirmRefresh = function (event) {
// 	event.preventDefault();
// 	return event.returnValue = "Are you sure you want to leave the page?";
// }
// window.addEventListener("beforeunload", onConfirmRefresh, { capture: true });
/*-- SITE_LOADING_END --*/
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
let paniTargets = document.querySelectorAll('.panil3, .panir3');
for (var i = 0; i < paniTargets.length; i++) {
	let maskClassToggle = new ScrollMagic.Scene({
		triggerElement: paniTargets[i],
		reverse: false
	}).triggerHook('0.95').setClassToggle(paniTargets[i], 'on').addTo(controller);
}
/*-- Magic animation end --*/
/*-- Disable Empty href --*/
$(function(){
	$('a[href="#"]').click(function(e){
		e.preventDefault();
		console.log("hello");
	})
});
/*-- Disable Empty href end --*/
/*--TheaterJS typing effect --*/
$(function(){
	$(window).load(function () {
		if($('#elactor').length > 0) {
			setTimeout(function () {
				var theater = theaterJS()
		
				theater
					.on('type:start, erase:start', function () {
						theater.getCurrentActor().$element.classList.add('com_actor__content--typing')
					})
					.on('type:end, erase:end', function () {
						theater.getCurrentActor().$element.classList.remove('com_actor__content--typing')
					})
				
				theater
					.addActor('elactor', { speed: 0.8, accuracy: 1 })
					.addScene('elactor:With Power?          ', -16, 'Human Power')
			}, 1000);
		}
	});
});
/*--TheaterJS typing effect end--*/
/*--Top MV slider --*/
$(function(){
	if($('.shop_swipe1').length>0) {
		var top_mv_slider1 = new Swiper('.shop_swipe1', {
			loop: true, // ループ有効
			slidesPerView: 5, // 一度に表示する枚数
			direction: 'vertical',
			speed: 10000, // ループの時間
			allowTouchMove: false, // スワイプ無効
			preventInteractionOnTransition:true,
			autoplay: {
				delay: 0, // 途切れなくループ
				disableOnInteraction: false,
				pauseOnMouseEnter:false,
			},
			breakpoints: {
				767: {
					slidesPerView: 2
				}
			}
		});
	}
	if($('.shop_swipe2').length>0) {
		var top_mv_slider2 = new Swiper('.shop_swipe2', {
			loop: true, // ループ有効
			slidesPerView: 5, // 一度に表示する枚数
			direction: 'vertical',
			speed: 10000, // ループの時間
			allowTouchMove: false, // スワイプ無効
			preventInteractionOnTransition:true,
			autoplay: {
				delay: 0, // 途切れなくループ
				reverseDirection: true,
				disableOnInteraction: false,
				pauseOnMouseEnter:false,
			},
			breakpoints: {
				767: {
					slidesPerView: 2
				}
			}
		});
	}
});
/*--Top MV slider end--*/
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
/*--language selector--*/
$(function(){
	if($('.lang_menu').length>0) {
		$(".lang_menu").click(function(e) {
			e.preventDefault();
			$(this).toggleClass("pst_show");
			return false;
		});
		$(".langmenu_dropdown>div").click(function(e) {
			$('body').removeClass("ln_en").removeClass("ln_jp").removeClass("ln_cn1").removeClass("ln_cn2").removeClass("ln_vn").removeClass("ln_ko")
				.addClass($(this).data("lang"));
			$(".langmenu_shape>div").html($(this).html());
		});
		$(document).click(function() {
			$(".lang_menu").removeClass("pst_show");
		});
	}
});
/*--language selector end--*/
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
/*--carousel--*/
$(function() {
	if($('.trade_owl').length>0) {
		$('.trade_owl').owlCarousel({
			loop:true,
			// margin:10,
			nav:true,
			responsive:{
				0:{
					items:2
				},
				600:{
					items:3
				},
				1000:{
					items:3
				}
			}
		})
	}
	if($('.media_owl').length>0) {
		$('.media_owl').owlCarousel({
			loop:true,
			// margin:10,
			nav:true,
			responsive:{
				0:{
					items:2
				},
				600:{
					items:2
				},
				1000:{
					items:2
				}
			}
		})
	}
});
/*--carousel end--*/
$(document).ready(function() {
	$('input[type="file"]').on('click', function() {
		$(".file_names").html("");
	})
	if ($('input[type="file"]')[0]) {
		var fileInput = document.querySelector('label[for="et_pb_contact_brand_file_request_0"]');
		fileInput.ondragover = function() {
			this.className = "et_pb_contact_form_label changed";
			return false;
		}
		fileInput.ondragleave = function() {
			this.className = "et_pb_contact_form_label";
			return false;
		}
		fileInput.ondrop = function(e) {
			e.preventDefault();
			var fileNames = e.dataTransfer.files;
			for (var x = 0; x < fileNames.length; x++) {
				console.log(fileNames[x].name);
				$=jQuery.noConflict();
				$('label[for="et_pb_contact_brand_file_request_0"]').append("<div class='file_names'>"+ fileNames[x].name +"</div>");
			}
		}
		$('#et_pb_contact_brand_file_request_0').change(function(e) {
			var count=1;
			var files = e.currentTarget.files; // puts all files into an array

			// call them as such; files[0].size will get you the file size of the 0th file
			for (var x in files) {
			
				var filesize = ((files[x].size/1024)/1024).toFixed(4); // MB
			
				if (files[x].name != "item" && typeof files[x].name != "undefined" && filesize > 10) { 
					alert('ファイルのサイズ上限は、1ファイルにつき10Mです。');
					return;
				}
			}
			var fileNames = $('#et_pb_contact_brand_file_request_0')[0].files[0].name;
			$('label[for="et_pb_contact_brand_file_request_0"]').append("<div class='file_names'>"+ fileNames +"</div>");
			$('label[for="et_pb_contact_brand_file_request_0"]').css('background-color', '##eee9ff');
		});
	}
});
	
$(".js_contact_form").submit(function(e){
	console.log("hihihi");
	//var email = $('#field3').val();
	//var conf_email = $('#field4').val();
	if($(this).find(".js_input_mail").val() != $(this).find(".js_input_confirm_mail").val()) {
		alert('確認メールアドレスが間違っています');
		$(this).find(".js_input_mail").focus();
		e.preventDefault();
	}
});