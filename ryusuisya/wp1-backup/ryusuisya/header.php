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
                    	<div class="header_main_logo_hp">
                            <a href="#">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo.png" alt="" />
                            </a>
                        </div>                        
                        <div class="header-right-hp">                        	              
                            <div class="navigation-hp">
                                <nav class="navbar navbar-expand-lg navbar-light">
                                    <div class="collapse navbar-collapse navigation-main-hp" id="navbarSupportedContent">
                                    	<div class="introduction_main_ip">
                                            <video id="Mp4Video" class="video-div" data-type="mp4" src="<?php echo get_stylesheet_directory_uri(); ?>/images/Menu.mp4" loop muted playsinline autoplay></video>
                                        </div>
        								<div class="header_top_main_hp">
                                        	<div class="header_main_logo_hp">
                                            	<a href="<?php echo get_site_url(); ?>/">
                                                	<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo.png" alt="" />
                                                </a>
                                            </div>                                            
                                            <div class="header_main_hp">                                                                                	                                            
                                                <div class="header_links_hp">
                                                    <ul>
                                                    <li><a href="<?php echo get_site_url(); ?>/introduction/">
                                                            <div class="header_text_hp">Introduction</div>
                                                            <div class="header_hover_text_hp">概要</div>
                                                        </a>
                                                    </li>                                            
                                                    <li><a href="<?php echo get_site_url(); ?>/treatment_tarot/">
                                                            <div class="header_text_hp">Treatment / Tarot</div>
                                                            <div class="header_hover_text_hp">霊能施術 / タロット占い</div>
                                                        </a>
                                                    </li>
                                                    <li><a href="<?php echo get_site_url(); ?>/youtube/">
                                                            <div class="header_text_hp">Youtube</div>
                                                            <div class="header_hover_text_hp">Youtube</div>
                                                        </a>
                                                    </li>
                                                    <li><a href="<?php echo get_site_url(); ?>/salon/">
                                                            <div class="header_text_hp">Salon</div>
                                                            <div class="header_hover_text_hp">サロン</div>
                                                        </a>
                                                    </li>
                                                    <li><a href="<?php echo get_site_url(); ?>/school/">
                                                            <div class="header_text_hp">School</div>
                                                            <div class="header_hover_text_hp">スクール</div>
                                                        </a>
                                                    </li>
                                                    <li><a href="<?php echo get_site_url(); ?>/contact/">
                                                            <div class="header_text_hp">Contact</div>
                                                            <div class="header_hover_text_hp">お問い合わせ</div>
                                                        </a>
                                                    </li>
                                                    <li> 
                                                        <div class="header_btn_main_hp">
                                                            <div class="header_btn_hp">
                                                                <a href="https://ryusuisya.com/tenmyou">Tenmyou<br/><span>天川龍一</span></a>	
                                                            </div>
                                                            <div class="header_btn_hp">
                                                                <a href="https://ryusuisya.com/canon">Sakamoto<br/>Canon</a>	
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>                                            
                                                </div>
                                            </div>                                            
                                            <footer id="footer" class="footer_change_hp footer_pd_hp" data-aos="fade-up" style="background:url(images/footer_bg.png) no-repeat top center; background-size:cover;">
                                                <div class="row">
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 footer_in_hp">
                                                            <div class="footer_middle_hp">
                                                                <div class="footer_top_hp">
                                                                    <div class="footer_boxes_hp">
                                                                        <div class="footer_box_hp">
                                                                            <div class="footer_img_hp">
                                                                                <a href="https://www.youtube.com/@ryusuisya"> 
                                                                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/footer_img.png" alt="" />
                                                                                </a>
                                                                            </div>
                                                                            <div class="footer_img_hp">
                                                                                <a href="https://twitter.com/ryusuisya"> 
                                                                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/footer_img2.png" alt="" />
                                                                                </a>
                                                                            </div>                                                          
                                                                        </div>
                                                                        <div class="footer_btns_hp">                                                                                   
                                                                            <div class="footer_btn_hp">
                                                                                <a href="#">
                                                                                    <div class="footer_btn_in_hp">
                                                                                        Tenmyou
                                                                                    </div>
                                                                                    <div class="footer_btn_img_hp">
                                                                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/btn_img.png" alt="" />
                                                                                    </div>
                                                                                 </a>
                                                                            </div>
                                                                            <div class="footer_btn_hp">
                                                                                <a href="#">
                                                                                    <div class="footer_btn_in_hp">
                                                                                        Sakamoto Canon
                                                                                    </div>
                                                                                    <div class="footer_btn_img_hp">
                                                                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/btn_img.png" alt="" />
                                                                                    </div>
                                                                                 </a>
                                                                            </div>
                                                                        </div>                            
                                                                    </div>  
                                                                    <div class="footer_copyright_sop">
                                                                    	©️All rights reserved.
                                                                    </div>                           
                                                                </div>
                                                                <div class="clearfix"></div>
                                                            </div>
                                                            <div class="clearfix"></div>
                                                        </div>
                                                    </div>
                                                <div class="clearfix"></div>
                                            </footer>                                            
                                    	</div>  
                                    </div>
                                </nav>
                                <div class="clearfix"></div>    
                            </div>
                        </div>
                        
                        <div class="header_row_hp">                        	
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
                        </div>
                        
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="clearfix"></div>
        </div>
    </header>
<!-- HEADER_END -->