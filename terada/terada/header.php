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
<link href="<?php echo get_stylesheet_directory_uri(); ?>/css/aos.css" rel="stylesheet" type="text/css">
<link href="<?php echo get_stylesheet_directory_uri(); ?>/css/additional_style.css" rel="stylesheet" type="text/css">
<link href="<?php echo get_stylesheet_directory_uri(); ?>/css/cocoon.css" rel="stylesheet" type="text/css">
<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
	<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-W7RXW1CMVN"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-W7RXW1CMVN');
</script>
</head>

<body>
<?php wp_body_open(); ?>
<div class="loading_wrap" id="first_loading">
    <div id="site_loader_overlay">
        <video class="loading_video" data-type="mp4" src="<?php echo get_stylesheet_directory_uri(); ?>/images/loading_ani.mp4" muted="" playsinline="" autoplay=""></video>
    </div>
</div>
<div class="loading_wrap" id="normal_loading">
    <div id="site_loader_overlay">
        <div id="site_loader_animation"><i></i><i></i><i></i><i></i></div>
    </div>
</div>
<div class="wrapper">
<!-- HEADER_START -->
<div class="header_device">
    <header id="header" class="">
        <div class="header_set">
            <a class="header_logo" href="<?php echo get_site_url(); ?>/">
                <img class="headlogo_white" src="<?php echo get_stylesheet_directory_uri(); ?>/images/terada_logo.png">
                <img class="headlogo_green" src="<?php echo get_stylesheet_directory_uri(); ?>/images/terada_logo.png">
            </a>
            <div class="header_menu">
                <div class="headmenu_a pxt_hasub">
                    <div class="headmenu_shape">
                        <div class="headmenu_cap">寺田冷機について</div>
                        <div class="headmenu_uline"></div>
                    </div>
                    <div class="headmenu_sub">
                        <div class="headsub_wrap">
                            <div class="headsub_title">
                                <a class="headsub_titlea" href="<?php echo get_site_url(); ?>/about">
                                    <span>寺田冷機に<br>ついて</span>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 7.063 11.297">
                                        <path d="M-1767.417,1659.563l4.942,4.942-4.942,4.942" transform="translate(1768.124 -1658.856)" fill="none" stroke-width="2"/>
                                    </svg>
                                </a>
                            </div>
                            <ul class="headsub_ul">
                                <li class="headsub_li">
                                    <a class="headsub_a" href="<?php echo get_site_url(); ?>/about#私たちの仕事とは">
                                        <div class="headsub_thumb">
                                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/hero1.png">
                                        </div>
                                        <div class="headsub_textwrap">
                                            <div class="headsub_text">
                                                <span>私たちの仕事とは</span>
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 7.063 11.297">
                                                    <path d="M-1767.417,1659.563l4.942,4.942-4.942,4.942" transform="translate(1768.124 -1658.856)" fill="none" stroke-width="2"/>
                                                </svg>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="headsub_li">
                                    <a class="headsub_a" href="<?php echo get_site_url(); ?>/about#数字で見る寺田冷機">
                                        <div class="headsub_thumb">
                                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/about_menu02.jpg">
                                        </div>
                                        <div class="headsub_textwrap">
                                            <div class="headsub_text">
                                                <span>数字で見る寺田冷機</span>
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 7.063 11.297">
                                                    <path d="M-1767.417,1659.563l4.942,4.942-4.942,4.942" transform="translate(1768.124 -1658.856)" fill="none" stroke-width="2"/>
                                                </svg>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="headsub_li">
                                    <a class="headsub_a" href="<?php echo get_site_url(); ?>/about#寺田冷機の歩み">
                                        <div class="headsub_thumb">
                                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/about_menu03.jpg">
                                        </div>
                                        <div class="headsub_textwrap">
                                            <div class="headsub_text">
                                                <span>寺田冷機の歩み</span>
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 7.063 11.297">
                                                    <path d="M-1767.417,1659.563l4.942,4.942-4.942,4.942" transform="translate(1768.124 -1658.856)" fill="none" stroke-width="2"/>
                                                </svg>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="headmenu_spsub">
                        <a class="headsub_spa" href="<?php echo get_site_url(); ?>/about">寺田冷機について</a>
                        <a class="headsub_spa" href="<?php echo get_site_url(); ?>/about/#私たちの仕事とは">私たちの仕事とは</a>
                        <a class="headsub_spa" href="<?php echo get_site_url(); ?>/about/#数字で見る寺田冷機">数字で見る寺田冷機</a>
                        <a class="headsub_spa" href="<?php echo get_site_url(); ?>/about/#寺田冷機の歩み">寺田冷機の歩み</a>
                    </div>
                </div>
                <div class="headmenu_a pxt_hasub">
                    <div class="headmenu_shape">
                        <div class="headmenu_cap">事業内容</div>
                        <div class="headmenu_uline"></div>
                    </div>
                    <div class="headmenu_sub">
                        <div class="headsub_wrap">
                            <div class="headsub_title">
                                <a class="headsub_titlea" href="<?php echo get_site_url(); ?>/business/">
                                    <span>事業内容</span>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 7.063 11.297">
                                        <path d="M-1767.417,1659.563l4.942,4.942-4.942,4.942" transform="translate(1768.124 -1658.856)" fill="none" stroke-width="2"/>
                                    </svg>
                                </a>
                            </div>
                            <ul class="headsub_ul">
                                <li class="headsub_li">
                                    <a class="headsub_a" href="<?php echo get_site_url(); ?>/business/#寺田冷機が選ばれる理由">
                                        <div class="headsub_thumb">
                                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/business_menu01.jpg">
                                        </div>
                                        <div class="headsub_textwrap">
                                            <div class="headsub_text">
                                                <span>寺田冷機が選ばれる理由</span>
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 7.063 11.297">
                                                    <path d="M-1767.417,1659.563l4.942,4.942-4.942,4.942" transform="translate(1768.124 -1658.856)" fill="none" stroke-width="2"/>
                                                </svg>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="headsub_li">
                                    <a class="headsub_a" href="<?php echo get_site_url(); ?>/business/#事業説明">
                                        <div class="headsub_thumb">
                                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/business_menu02.jpg">
                                        </div>
                                        <div class="headsub_textwrap">
                                            <div class="headsub_text">
                                                <span>事業説明</span>
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 7.063 11.297">
                                                    <path d="M-1767.417,1659.563l4.942,4.942-4.942,4.942" transform="translate(1768.124 -1658.856)" fill="none" stroke-width="2"/>
                                                </svg>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="headsub_li">
                                    <a class="headsub_a" href="<?php echo get_site_url(); ?>/business/#実績紹介">
                                        <div class="headsub_thumb">
                                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/business_menu03.jpg">
                                        </div>
                                        <div class="headsub_textwrap">
                                            <div class="headsub_text">
                                                <span>実績紹介</span>
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 7.063 11.297">
                                                    <path d="M-1767.417,1659.563l4.942,4.942-4.942,4.942" transform="translate(1768.124 -1658.856)" fill="none" stroke-width="2"/>
                                                </svg>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="headmenu_spsub">
                        <a class="headsub_spa" href="<?php echo get_site_url(); ?>/business/">事業内容</a>
                        <a class="headsub_spa" href="<?php echo get_site_url(); ?>/business/#寺田冷機が選ばれる理由">寺田冷機が選ばれる理由</a>
                        <a class="headsub_spa" href="<?php echo get_site_url(); ?>/business/#事業説明">事業説明</a>
                        <a class="headsub_spa" href="<?php echo get_site_url(); ?>/business/#実績紹介">実績紹介</a>
                    </div>
                </div>
                <div class="headmenu_a pxt_hasub">
                    <div class="headmenu_shape">
                        <div class="headmenu_cap">会社紹介</div>
                        <div class="headmenu_uline"></div>
                    </div>
                    <div class="headmenu_sub">
                        <div class="headsub_wrap">
                            <div class="headsub_title">
                                <a class="headsub_titlea" href="<?php echo get_site_url(); ?>/company/">
                                    <span>会社紹介</span>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 7.063 11.297">
                                        <path d="M-1767.417,1659.563l4.942,4.942-4.942,4.942" transform="translate(1768.124 -1658.856)" fill="none" stroke-width="2"/>
                                    </svg>
                                </a>
                            </div>
                            <ul class="headsub_ul">
                                <li class="headsub_li">
                                    <a class="headsub_a" href="<?php echo get_site_url(); ?>/company/#代表メッセージ">
                                        <div class="headsub_thumb">
                                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/company_menu01.jpg">
                                        </div>
                                        <div class="headsub_textwrap">
                                            <div class="headsub_text">
                                                <span>代表メッセージ</span>
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 7.063 11.297">
                                                    <path d="M-1767.417,1659.563l4.942,4.942-4.942,4.942" transform="translate(1768.124 -1658.856)" fill="none" stroke-width="2"/>
                                                </svg>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="headsub_li">
                                    <a class="headsub_a" href="<?php echo get_site_url(); ?>/company/#会社概要">
                                        <div class="headsub_thumb">
                                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/company_menu02.jpg">
                                        </div>
                                        <div class="headsub_textwrap">
                                            <div class="headsub_text">
                                                <span>会社概要</span>
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 7.063 11.297">
                                                    <path d="M-1767.417,1659.563l4.942,4.942-4.942,4.942" transform="translate(1768.124 -1658.856)" fill="none" stroke-width="2"/>
                                                </svg>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="headsub_li">
                                    <a class="headsub_a" href="<?php echo get_site_url(); ?>/company/#会社見学ツアー">
                                        <div class="headsub_thumb">
                                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/company_menu03.jpg">
                                        </div>
                                        <div class="headsub_textwrap">
                                            <div class="headsub_text">
                                                <span>会社見学ツアー</span>
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 7.063 11.297">
                                                    <path d="M-1767.417,1659.563l4.942,4.942-4.942,4.942" transform="translate(1768.124 -1658.856)" fill="none" stroke-width="2"/>
                                                </svg>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="headmenu_spsub">
                        <a class="headsub_spa" href="<?php echo get_site_url(); ?>/company/">会社紹介</a>
                        <a class="headsub_spa" href="<?php echo get_site_url(); ?>/company/#代表メッセージ">代表メッセージ</a>
                        <a class="headsub_spa" href="<?php echo get_site_url(); ?>/company/#会社概要">会社概要</a>
                        <a class="headsub_spa" href="<?php echo get_site_url(); ?>/company/#会社見学ツアー">会社見学ツアー</a>
                    </div>
                </div>
                <div class="headmenu_a pxt_hasub">
                    <div class="headmenu_shape">
                        <div class="headmenu_cap">採用情報</div>
                        <div class="headmenu_uline"></div>
                    </div>
                    <div class="headmenu_sub">
                        <div class="headsub_wrap">
                            <div class="headsub_title">
                                <a class="headsub_titlea" href="<?php echo get_site_url(); ?>/recruit/">
                                    <span>採用情報</span>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 7.063 11.297">
                                        <path d="M-1767.417,1659.563l4.942,4.942-4.942,4.942" transform="translate(1768.124 -1658.856)" fill="none" stroke-width="2"/>
                                    </svg>
                                </a>
                            </div>
                            <ul class="headsub_ul">
                                <li class="headsub_li">
                                    <a class="headsub_a" href="<?php echo get_site_url(); ?>/recruit/#職務内容">
                                        <div class="headsub_thumb">
                                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/recruit_menu01.jpg">
                                        </div>
                                        <div class="headsub_textwrap">
                                            <div class="headsub_text">
                                                <span>職務内容</span>
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 7.063 11.297">
                                                    <path d="M-1767.417,1659.563l4.942,4.942-4.942,4.942" transform="translate(1768.124 -1658.856)" fill="none" stroke-width="2"/>
                                                </svg>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="headsub_li">
                                    <a class="headsub_a" href="<?php echo get_site_url(); ?>/recruit/#先輩インタビュー">
                                        <div class="headsub_thumb">
                                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/recruit_menu02.jpg">
                                        </div>
                                        <div class="headsub_textwrap">
                                            <div class="headsub_text">
                                                <span>先輩インタビュー</span>
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 7.063 11.297">
                                                    <path d="M-1767.417,1659.563l4.942,4.942-4.942,4.942" transform="translate(1768.124 -1658.856)" fill="none" stroke-width="2"/>
                                                </svg>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="headsub_li">
                                    <a class="headsub_a" href="<?php echo get_site_url(); ?>/recruit/#募集要項">
                                        <div class="headsub_thumb">
                                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/recruit_menu03.jpg">
                                        </div>
                                        <div class="headsub_textwrap">
                                            <div class="headsub_text">
                                                <span>募集要項</span>
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 7.063 11.297">
                                                    <path d="M-1767.417,1659.563l4.942,4.942-4.942,4.942" transform="translate(1768.124 -1658.856)" fill="none" stroke-width="2"/>
                                                </svg>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="headmenu_spsub">
                        <a class="headsub_spa" href="<?php echo get_site_url(); ?>/recruit/">採用情報</a>
                        <a class="headsub_spa" href="<?php echo get_site_url(); ?>/recruit/#職務内容">職務内容</a>
                        <a class="headsub_spa" href="<?php echo get_site_url(); ?>/recruit/#先輩インタビュー">先輩インタビュー</a>
                        <a class="headsub_spa" href="<?php echo get_site_url(); ?>/recruit/#募集要項">募集要項</a>
                    </div>
                </div>
                <a class="headmenu_a pxt_phone" href="tel:0438-36-6126">
                    <div class="headmenu_shape">
                        <div class="headmenu_pshape">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                <path d="M19.429,14.133l-4.375-1.875a.938.938,0,0,0-1.094.27l-1.938,2.367A14.479,14.479,0,0,1,5.1,7.973L7.469,6.036a.935.935,0,0,0,.27-1.094L5.863.567A.944.944,0,0,0,4.789.024L.727.961A.938.938,0,0,0,0,1.875,18.123,18.123,0,0,0,18.125,20a.937.937,0,0,0,.914-.727l.937-4.062a.949.949,0,0,0-.547-1.078Z" transform="translate(0 0)"/>
                            </svg>                              
                            <div class="headmenu_ptext">
                                <div class="headmenu_pnum">0438-36-6126</div>
                                <div class="headmenu_pdesc">平日8:00〜17:00</div>
                            </div>                           
                        </div>
                        <div class="headmenu_uline"></div>
                    </div>
                </a>
                <a class="headmenu_a pxt_contact" href="<?php echo get_site_url(); ?>/contact/">
                    <div class="headmenu_cshape">
                        <div class="headmenu_ctext">お問い合わせ</div>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                            <g transform="translate(-1326 339)">
                              <circle cx="10" cy="10" r="10" transform="translate(1326 -339)" fill="#fff"/>
                              <path d="M-694.809,90.651l4.368,4.368-4.368,4.368" transform="translate(2029.31 -424.151)" fill="none" stroke="#2c4298" stroke-width="2"/>
                            </g>
                        </svg>
                    </div>
                </a>
                <a class="headmenu_a pxt_recruit" href="<?php echo get_site_url(); ?>/recruit/#応募エントリーフォーム">
                    <div class="headmenu_cshape pxt_recruit">
                        <div class="headmenu_ctext">採用エントリー</div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20">
                            <g transform="translate(-1326 339)">
                              <circle cx="10" cy="10" r="10" transform="translate(1326 -339)" fill="#fff"/>
                              <path d="M-694.809,90.651l4.368,4.368-4.368,4.368" transform="translate(2029.31 -424.151)" fill="none" stroke="#f0110a" stroke-width="2"/>
                            </g>
                        </svg>                          
                    </div>
                </a>
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
</div>
<!-- HEADER_END -->
