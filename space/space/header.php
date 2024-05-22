<?php
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
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link rel="stylesheet" href="https://use.typekit.net/hrj3xmc.css">
<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
<link href="<?php echo get_stylesheet_directory_uri(); ?>/css/owl.carousel.css" rel="stylesheet">
<link href="<?php echo get_stylesheet_directory_uri(); ?>/css/owl.theme.default.css" rel="stylesheet">
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<link href="<?php echo get_stylesheet_directory_uri(); ?>/css/stylesheet.css" rel="stylesheet" type="text/css">
<link href="<?php echo get_stylesheet_directory_uri(); ?>/css/responsive.css" rel="stylesheet" type="text/css">
<link href="<?php echo get_stylesheet_directory_uri(); ?>/css/extra.css" rel="stylesheet" type="text/css">
<link href="<?php echo get_stylesheet_directory_uri(); ?>/css/pmhwp.css" rel="stylesheet" type="text/css">


<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div class="wrapper">

<header id="header">
	<div class="header-hp">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-12 header-in-hp">
					<div class="header-left-hp">
						<div class="logo-hp">
							<a href="<?php echo get_site_url(); ?>/">
								<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/header_logo.png" class="fixed_logo_before" alt="">
								<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/header_logo_color.png" class="fixed_logo_after" alt="">
							</a>
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
										<li><a href="<?php echo get_site_url(); ?>/about/">ABOUT</a></li>                                            
										<li class="nav-item dropdown">
											<a class="nav-link dropdown-toggle" href="javascript:void(0)" role="button" data-toggle="dropdown" aria-expanded="false">
												SERVICE
											</a>
											<div class="dropdown-menu">
												<a class="dropdown-item" href="<?php echo get_site_url(); ?>/ecommerce">eコマース</a>
												<a class="dropdown-item" href="<?php echo get_site_url(); ?>/sales/">Sales</a>
												<a class="dropdown-item" href="<?php echo get_site_url(); ?>/drone/">Drone</a>
												<a class="dropdown-item" href="<?php echo get_site_url(); ?>/consulting/">Consluting</a>
											</div>
										</li>
										<li><a href="<?php echo get_site_url(); ?>/news/">NEWS</a></li>
										<li><a href="https://prtimes.jp/main/html/searchrlp/company_id/45277">PR TIMES </a></li>
										<li><a href="<?php echo get_site_url(); ?>/recruit/">RECRUIT</a></li>
										<li><a href="<?php echo get_site_url(); ?>/contact/">CONTACT</a></li>                                           
										<li>
											<a class="header_btn_hp" href="<?php echo get_site_url(); ?>/lp/">
												<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16">
													<path id="earth05" d="M13.656,2.344a8,8,0,1,0,0,11.311A7.994,7.994,0,0,0,13.656,2.344Zm-.334,10.171a8.017,8.017,0,0,0-1.195-.885,12.935,12.935,0,0,0,.482-3.121h2.351a6.916,6.916,0,0,1-1.639,4.006ZM1.04,8.509H3.391a12.935,12.935,0,0,0,.482,3.121,8.017,8.017,0,0,0-1.195.885A6.916,6.916,0,0,1,1.04,8.509ZM2.679,3.484a8.017,8.017,0,0,0,1.195.885A12.935,12.935,0,0,0,3.391,7.49H1.04A6.916,6.916,0,0,1,2.679,3.484Zm4.812.99a6.925,6.925,0,0,1-2.376-.6C5.547,2.759,6.343,1.425,7.49,1.094Zm0,1.021V7.49H4.411A12.009,12.009,0,0,1,4.8,4.847,7.945,7.945,0,0,0,7.49,5.5Zm0,3.014V10.5a7.945,7.945,0,0,0-2.693.648,12.009,12.009,0,0,1-.387-2.643Zm0,3.016v3.38c-1.147-.331-1.944-1.665-2.376-2.778A6.925,6.925,0,0,1,7.49,11.525Zm1.019,0a6.925,6.925,0,0,1,2.376.6c-.432,1.113-1.229,2.447-2.376,2.778Zm0-1.021V8.509h3.08a12.009,12.009,0,0,1-.387,2.643A7.945,7.945,0,0,0,8.51,10.5Zm0-3.014V5.5A7.945,7.945,0,0,0,11.2,4.847a12.009,12.009,0,0,1,.387,2.643Zm0-3.016V1.094c1.147.331,1.944,1.665,2.376,2.778A6.925,6.925,0,0,1,8.51,4.474ZM10.8,1.6a6.948,6.948,0,0,1,1.807,1.154,7.005,7.005,0,0,1-.82.622A7.674,7.674,0,0,0,10.8,1.6ZM4.214,3.379a7.008,7.008,0,0,1-.82-.622A6.948,6.948,0,0,1,5.2,1.6a7.676,7.676,0,0,0-.987,1.776Zm0,9.241A7.674,7.674,0,0,0,5.2,14.4a6.948,6.948,0,0,1-1.807-1.154A7.005,7.005,0,0,1,4.214,12.62Zm7.572,0a7.009,7.009,0,0,1,.82.622A6.948,6.948,0,0,1,10.8,14.4a7.673,7.673,0,0,0,.987-1.776Zm.823-5.13a12.935,12.935,0,0,0-.482-3.121,8.019,8.019,0,0,0,1.195-.885A6.916,6.916,0,0,1,14.961,7.49Z" transform="translate(0 0.001)" fill="#fff"></path>
												</svg>
												English
											</a>
										</li>
									</ul>
								</div>
							</nav>
							<div class="clearfix"></div>    
						</div>
					</div>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
		<div class="clearfix"></div>
	</div>
</header>