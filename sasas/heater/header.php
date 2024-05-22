<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package heater
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
<link href="<?php echo get_stylesheet_directory_uri(); ?>/css/owl.carousel.css" rel="stylesheet">
<link href="<?php echo get_stylesheet_directory_uri(); ?>/css/owl.theme.default.css" rel="stylesheet">
<link href="<?php echo get_stylesheet_directory_uri(); ?>/css/stylesheet.css" rel="stylesheet" type="text/css">
<link href="<?php echo get_stylesheet_directory_uri(); ?>/css/loading.css" rel="stylesheet" type="text/css">
<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->	
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="site_loader_overlay"><div id="site_loader_animation"><i></i><i></i><i></i><i></i></div></div>
<div class="wrapper">
<!-- HEADER_START -->
<div class="header_ribbon">神奈川の給湯器交換が激安価格【神奈川給湯器交換センター】</div>
<header id="header" class="">
    <div class="header_set">
        <a class="header_logo" href="<?php echo get_site_url(); ?>/">
            <img class="headlogo_white" src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo.svg">
            <img class="headlogo_green" src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo.svg">
        </a>
        <div class="header_menu">
            <a class="headmenu_a" href="<?php echo get_site_url(); ?>/plan/">
                <div class="headmenu_shape">
                    <div class="headmenu_cap">リースプラン</div>
                    <div class="headmenu_uline"></div>
                </div>
            </a>
            <a class="headmenu_a" href="<?php echo get_site_url(); ?>/product/">
                <div class="headmenu_shape">
                    <div class="headmenu_cap">取扱商品一覧</div>
                    <div class="headmenu_uline"></div>
                </div>
            </a>
            <a class="headmenu_a" href="<?php echo get_site_url(); ?>/select/">
                <div class="headmenu_shape">
                    <div class="headmenu_cap">給湯器の選び方</div>
                    <div class="headmenu_uline"></div>
                </div>
            </a>
            <a class="headmenu_a" href="<?php echo get_site_url(); ?>/review/">
                <div class="headmenu_shape">
                    <div class="headmenu_cap">お客様の声</div>
                    <div class="headmenu_uline"></div>
                </div>
            </a>
            <a class="headmenu_a" href="<?php echo get_site_url(); ?>/flow/">
                <div class="headmenu_shape">
                    <div class="headmenu_cap">ご契約の流れ</div>
                    <div class="headmenu_uline"></div>
                </div>
            </a>
            <a class="headmenu_a" href="<?php echo get_site_url(); ?>/company/">
                <div class="headmenu_shape">
                    <div class="headmenu_cap">運営会社</div>
                    <div class="headmenu_uline"></div>
                </div>
            </a>
        </div>
        <div class="fixed_contact">
            <div class="fixed_svg1"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/tpcta1.svg"></div>
            <a class="fixed_svg2" href="tel:0120316606"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/tpcta2.svg"></a>
            <a class="fixed_svg3" href="<?php echo get_site_url(); ?>/contact/"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/tpcta3.svg"></a>
        </div>
        <div class="hamburger_set js_hamburger">
            <a href="javascript:void(0)">
                <div class="hamburger_btn">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </a>
        </div>
    </div>
</header>
<!-- HEADER_END -->