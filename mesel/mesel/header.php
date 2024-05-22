<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package mesel
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="thumbnail" content="<?php echo get_stylesheet_directory_uri(); ?>/images/aio.jpg" />
	<link rel="profile" href="https://gmpg.org/xfn/11">
<!-- Bootstrap -->
<link href="<?php echo get_stylesheet_directory_uri(); ?>/css/bootstrap.css" rel="stylesheet">
<link href="<?php echo get_stylesheet_directory_uri(); ?>/css/fontawesome_all.css" rel="stylesheet" type="text/css">
<link href="<?php echo get_stylesheet_directory_uri(); ?>/css/fonts.css" rel="stylesheet">
<link href="<?php echo get_stylesheet_directory_uri(); ?>/css/owl.carousel.css" rel="stylesheet">
<link href="<?php echo get_stylesheet_directory_uri(); ?>/css/owl.theme.default.css" rel="stylesheet">
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.1.0/styles/github.min.css'>
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<!-- <link href="<?php //echo get_stylesheet_directory_uri(); ?>/css/jquery-ui.css" rel="stylesheet"> -->
<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/css/mCustomScrollbar.min.css"/>
<link href="<?php echo get_stylesheet_directory_uri(); ?>/css/stylesheet.css" rel="stylesheet" type="text/css">
<link href="<?php echo get_stylesheet_directory_uri(); ?>/css/loading.css" rel="stylesheet" type="text/css">
<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-PK6PNWZ9');</script>
<!-- End Google Tag Manager -->
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PK6PNWZ9"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

<div id="site_loader_overlay"><div id="site_loader_animation"><i></i><i></i><i></i><i></i></div></div>
<div class="wrapper">
<!-- HEADER_START -->
<header id="header" class="">
    <div class="header_set">
        <a class="header_logo" href="<?php echo get_site_url(); ?>/">
            <img class="headlogo_white" src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo.svg">
            <img class="headlogo_green" src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo.svg">
        </a>
        <div class="header_menu">
            <a class="headmenu_a" href="<?php echo get_site_url(); ?>/background/">
                <div class="headmenu_shape">
                    <div class="headmenu_cap">技術背景・ポリシー</div>
                    <div class="headmenu_uline"></div>
                </div>
            </a>
            <a class="headmenu_a" href="<?php echo get_site_url(); ?>/about/">
                <div class="headmenu_shape">
                    <div class="headmenu_cap">HCR法とは</div>
                    <div class="headmenu_uline"></div>
                </div>
            </a>
            <a class="headmenu_a" href="<?php echo get_site_url(); ?>/compare/">
                <div class="headmenu_shape">
                    <div class="headmenu_cap">他の発毛法との違い</div>
                    <div class="headmenu_uline"></div>
                </div>
            </a>
            <a class="headmenu_a" href="<?php echo get_site_url(); ?>/case/">
                <div class="headmenu_shape">
                    <div class="headmenu_cap">症例</div>
                    <div class="headmenu_uline"></div>
                </div>
            </a>
            <a class="headmenu_a" href="<?php echo get_site_url(); ?>/course/">
                <div class="headmenu_shape">
                    <div class="headmenu_cap">コース内容</div>
                    <div class="headmenu_uline"></div>
                </div>
            </a>
            <a class="headmenu_a" href="<?php echo get_site_url(); ?>/access/">
                <div class="headmenu_shape">
                    <div class="headmenu_cap">店舗</div>
                    <div class="headmenu_uline"></div>
                </div>
            </a>
            <a class="headmenu_a" href="<?php echo get_site_url(); ?>/faq/">
                <div class="headmenu_shape">
                    <div class="headmenu_cap">よくあるご質問</div>
                    <div class="headmenu_uline"></div>
                </div>
            </a>
            <div class="header_flex1"></div>
            <a class="headmenu_a headmenu_contact" href="<?php echo get_site_url(); ?>/contact/">
                <div class="headmenu_shape">
                    <div class="headmenu_cap">無料カウンセリング<br>WEB予約</div>
                </div>
            </a>
            <div class="headmenu_a headmenu_contact X_2 js_openaccessdlg" href="#">
                <div class="headmenu_shape">
                    <div class="headmenu_cap">無料カウンセリング<br>電話予約</div>
                </div>
            </div>
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
<!-- SP_CTA_START -->
<div class="spcta">
    <a class="spcta_btn" href="<?php echo get_site_url(); ?>/contact/">無料カウンセリング<br><span>WEB予約</span></a>
    <div class="spcta_btn X_2 js_openaccessdlg">無料カウンセリング<br><span>電話予約</span></div>
</div>
<!-- SP_CTA_END -->
<!-- ACCESS_MODAL_START -->
<div class="access_dlg" id="access_dialog">
    <div class="accessdlg_box">
        <div class="accessdlg_close"></div>
        <div class="accessdlg_inner">
            <div class="accessdlg_title">電話でのお問い合わせ</div>
            <div class="hx1"></div>
            <div class="pg_p X_center">
                <p>新宿院・名古屋駅前院共通<br class="disb_sp">無料カウンセリング専用電話番号</p>
            </div>
            <div class="accessdlg_phone">
                <a href="tel:070-1436-0123"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/accessdlg_phone.svg"><span>070-1436-0123</span></a>
            </div>
            <div class="pg_p X_center">
                <p>受付時間 : 年中無休 9:00～21:00</p>
            </div>
            <div class="hx1"></div>
            <div class="free_phonecall">
                <a href="tel:070-1436-0123">無料カウンセリング電話予約</a>
            </div>
            <div class="accessdlg_img">
                <div class="contact_hero">
                    <div class="contact_hero1">
                        <div class="contacthero_text">
                            発毛のお悩み、疑問点、不安な点など<br>
                            何でもお気軽にご相談ください
                        </div>
                    </div>
                </div>
            </div>
            <div class="accessdlg_btns">
                <div class="accessdlg_btn">
                    <a class="com_btn" href="<?php echo get_site_url(); ?>/connect/#connect2"><span>ご契約中のお客様はこちら</span><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/btnrigth_w.svg"></a>
                </div>
                <div class="accessdlg_btn">
                    <a class="com_btn" target="_blank" href="https://mesel-jna.com/contact.html"><span>企業様はこちら</span><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/btnrigth_w.svg"></a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ACCESS_MODAL_END -->