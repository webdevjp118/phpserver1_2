<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package nurse
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<!-- Bootstrap -->
	<link href="<?php echo get_stylesheet_directory_uri(); ?>/css/bootstrap.css" rel="stylesheet">
	<link href="<?php echo get_stylesheet_directory_uri(); ?>/css/fontawesome_all.css" rel="stylesheet" type="text/css">
	<link href="<?php echo get_stylesheet_directory_uri(); ?>/css/fonts.css" rel="stylesheet">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
	<link href="<?php echo get_stylesheet_directory_uri(); ?>/css/owl.carousel.css" rel="stylesheet">
	<link href="<?php echo get_stylesheet_directory_uri(); ?>/css/owl.theme.default.css" rel="stylesheet">
	<link href="<?php echo get_stylesheet_directory_uri(); ?>/css/slick.css" rel="stylesheet">
	<link href="<?php echo get_stylesheet_directory_uri(); ?>/css/slick-theme.css" rel="stylesheet">
	<link href="<?php echo get_stylesheet_directory_uri(); ?>/css/stylesheet.css" rel="stylesheet" type="text/css">
	<link href="<?php echo get_stylesheet_directory_uri(); ?>/css/responsive.css" rel="stylesheet" type="text/css">
	<link href="<?php echo get_stylesheet_directory_uri(); ?>/css/pmhwp.css" rel="stylesheet" type="text/css">
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

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<!-- HEADER_START -->
<header id="header" class="header-hp">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 header-in-hp">                	
				<div class="header_middle_hp">
					<div class="header_logo_hp">
						<a href="<?php echo get_site_url(); ?>"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo.png" alt=""/></a>
					</div>                    	
					<div class="navigation">                                    	 
						<nav class="navbar navbar-expand-lg navbar-light">
							<div class="collapse navbar-collapse" id="navbarTogglerDemo01">
								<ul class="navbar-nav ml-auto">
									<li class="nav-item">
										<a class="nav-link" href="<?php echo get_site_url(); ?>">トップ</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="<?php echo get_site_url(); ?>/company/">会社概要</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="<?php echo get_site_url(); ?>/">メンテナンス事業</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="<?php echo get_site_url(); ?>/care/">介護事業</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="<?php echo get_site_url(); ?>">採用情報</a>
									</li>                                                                                                                                                                   
								</ul>
							</div>
						</nav>                                                                                        
					</div>
					<div class="header_right_hp">
						<a href="<?php echo get_site_url(); ?>/contact">
							<div class="header_right_icon_hp">
								<div class="header_right_icon_in_hp">
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/Icon_feather_mail.svg" alt="" />
								</div>                                                                
							</div>
							<div class="header_right_btn_hp">
								お問い合わせ                               
							</div>                                
						</a>    
					</div>
					<div class="mobile-menu-icon-hp">
						<div class="menu-toggle-btn">
							<span></span>
							<span></span>
							<span></span>
						</div>
					</div>
				</div>                       
			</div>
		</div>
	</div>
</header>	
<!-- HEADER_END -->