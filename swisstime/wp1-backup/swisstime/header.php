<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package swisstime
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<?php wp_head(); ?>
<!-- Bootstrap -->
<link href="<?php echo get_stylesheet_directory_uri(); ?>/css/bootstrap.css" rel="stylesheet">
<link href="<?php echo get_stylesheet_directory_uri(); ?>/css/fontawesome_all.css" rel="stylesheet" type="text/css">
<link href="<?php echo get_stylesheet_directory_uri(); ?>/css/fonts.css" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;300;400;500;600;700&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
<link href="<?php echo get_stylesheet_directory_uri(); ?>/css/owl.carousel.css" rel="stylesheet">
<link href="<?php echo get_stylesheet_directory_uri(); ?>/css/owl.theme.default.css" rel="stylesheet">
<link href="<?php echo get_stylesheet_directory_uri(); ?>/css/stylesheet.css" rel="stylesheet" type="text/css">
<link href="<?php echo get_stylesheet_directory_uri(); ?>/css/responsive.css" rel="stylesheet" type="text/css">
<script>
  (function(d) {
    var config = {
      kitId: 'nzt8uel',
      scriptTimeout: 3000,
      async: true
    },
    h=d.documentElement,t=setTimeout(function(){h.className=h.className.replace(/\bwf-loading\b/g,"")+" wf-inactive";},config.scriptTimeout),tk=d.createElement("script"),f=false,s=d.getElementsByTagName("script")[0],a;h.className+=" wf-loading";tk.src='https://use.typekit.net/'+config.kitId+'.js';tk.async=true;tk.onload=tk.onreadystatechange=function(){a=this.readyState;if(f||a&&a!="complete"&&a!="loaded")return;f=true;clearTimeout(t);try{Typekit.load(config)}catch(e){}};s.parentNode.insertBefore(tk,s)
  })(document);
</script>

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body>
<div class="wrapper">
<!-- HEADER_START -->	
<header id="header">
	<div class="header-hp">
		<div class="container-fluid">            	
			<div class="row">
				<div class="header_title_hp">
				SwissTimeWorks 【Specialist in Luxury Timepiece Repair】 <span>東京、国分寺市にてロレックス、オメガ、オーデマピゲ、パテックフィリップなど高級時計修理を行う工房</span>
			</div>
				<div class="col header-in-hp">                   
					<div class="header-left-hp">
						<div class="logo-hp">
							<a href="<?php echo get_site_url(); ?>/"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/header_logo.png" alt="" /></a>
						</div>
						<div class="clearfix"></div>
					</div>                        
					<div class="header-right-hp">
						<div class="mobile-menu-hp">
							<a href="javascript:void(0)">
								<div class="menu-toggle-btn-hp">
									<span></span>
									<span></span>
									<span></span>
								</div>
							</a>
						</div>              
						<div class="navigation-hp">
							<nav class="navbar navbar-expand-lg navbar-light">
								<div class="collapse navbar-collapse navigation-main-hp" id="navbarSupportedContent">
									<ul class="navbar-nav ml-auto">
										<li><a href="<?php echo get_site_url(); ?>/overhaul/">Overhaul <br /> <span>オーバーホール</span></a></li>                                            
										<li><a href="<?php echo get_site_url(); ?>/part-jobs/">Part Jobs <br /> <span>部分修理</span></a></li>
										<li><a href="<?php echo get_site_url(); ?>/battery/">Battery Replacement ＆Reseal <br /> <span> 電池交換 </span></a></li>
										<li><a href="<?php echo get_site_url(); ?>/restoration/">Watch Polishing/Restoration <br /> <span> 外装研磨仕上げ</span> </a></li>
										<li><a href="<?php echo get_site_url(); ?>/cleaning/">Watch Cleaning <br /> <span> 時計クリーニング </span></a></li>
										<li><a href="<?php echo get_site_url(); ?>/price/">Price <br /> <span>料金</span></a></li>
										<li><a href="<?php echo get_site_url(); ?>/#contact">Contact <br /> <span> お問い合わせ</span></a></li>                                            
									</ul>
								</div>
							</nav>
							<div class="clearfix"></div>    
						</div>
						<div class="header_row_hp">
							<div class="header_btn1_hp">
								<a href="tel:042-404-2806"><span class="header_btn1_change3_hp">電話受付</span> <span class="header_btn1_change1_hp">042-404-2806</span> <br /> <span class="header_btn1_change2_hp">平日10時～19時 土曜12時～18時　日祝休</span></a>
							</div>
							<div class="header_btn2_hp">
								<a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/header_btn_icon.svg">無料相談・お見積もり</a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
		<div class="clearfix"></div>
	</div>
</header>	
<!-- HEADER_END -->