<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ryusuisya
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
<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Baskervville:ital@0;1&display=swap" rel="stylesheet">
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

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div class="wrapper">
<!-- HEADER_START -->
<header id="header">
    <div class="header-hp">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-12 header-in-hp">
                    <div class="header-left-hp">
                        <div class="logo-hp">
                            <a href="<?php echo get_site_url(); ?>/"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/header_logo2.png" alt="" /></a>
                        </div>
                        <div class="clearfix"></div>
                    </div>                        
                    <div class="header-right-hp header_color_change_sgp">
                        <div class="mobile-menu-hp">
                            <a href="javascript:void(0)" class="desktop_menu_hp">
                                <div class="menu_text_btn_hp">
                                    Menu
                                </div>
                                <div class="menu-toggle-btn-hp">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </div>
                            </a>
                            <a href="javascript:void(0)" class="mobile_menu_hp">
                                <div class="menu_text_btn_hp">
                                    Close
                                </div>
                                <div class="menu-toggle-btn-hp">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/close.png" alt="" />
                                </div>
                            </a>
                        </div>              
                        <div class="navigation-hp">
                            <nav class="navbar navbar-expand-lg navbar-light">
                                <div class="collapse navbar-collapse navigation-main-hp" id="navbarSupportedContent">
                                    <div class="introduction_main_ip introduction_main_new_ip">
                                        <video id="Mp4Video" class="video-div" data-type="mp4" src="<?php echo get_stylesheet_directory_uri(); ?>/images/Menu.mp4" loop muted playsinline autoplay></video>
                                    </div>
                                    <ul class="navbar-nav ml-auto">
                                        <li><a href="<?php echo get_site_url(); ?>/all/">ALL</a></li>                                            
                                        <li><a href="<?php echo get_category_link_by_name('NEWS'); ?>">NEWS</a></li>
                                        <li><a href="<?php echo get_category_link_by_name('MOVIE'); ?>">MOVIE</a></li>
                                        <li><a href="<?php echo get_category_link_by_name('BLOG'); ?>">BLOG</a></li>
                                        <li><a href="<?php echo get_category_link_by_name('RADIO'); ?>">RADIO</a></li>
                                        <li><a href="<?php echo get_site_url(); ?>/salon-my-page/">MY PAGE</a></li>
                                        <li><a href="<?php echo get_site_url(); ?>/salon-contact/">CONTACT</a></li>
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
<!-- HEADER_END -->