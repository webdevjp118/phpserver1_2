<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
	<!-- reset -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/destyle.css@3.0.2/destyle.css">
  <!-- fontawesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
    integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <!-- 共通CSS -->
	<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/style.css">
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header>
	<div class="headerInner">
		<div class="headerLogo">
			<figure class="logo">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/header_logo.png" alt="">
			</figure>
		</div>
		<div class="navContainer">
			<nav class="headerNav">
				<ul class="navList">
					<li class="navItem"><a href="<?php echo get_site_url(); ?>">HOME<span>トップ</span></a></li>
					<li class="navItem"><a href="<?php echo get_site_url(); ?>/service">SERVICE<span>事業内容</span></a></li>
					<li class="navItem"><a href="<?php echo get_site_url(); ?>/message">MESSAGE<span>メッセージ</span></a></li>
					<li class="navItem"><a href="<?php echo get_site_url(); ?>/company">COMPANY<span>会社概要</span></a></li>
					<li class="navItem"><a href="<?php echo get_site_url(); ?>/contact">CONTACT<span>お問い合わせ</span></a></li>
				</ul>
			</nav>
		</div>
		<div class="sp">
			<div class="overlay" id="js-overlay"></div>
			<div class="hamburger"><span></span><span></span><span></span></div>
		</div>
	</div>
</header>