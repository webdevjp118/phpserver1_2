
<footer>
	<a href="#" class="btn_top"><i class="fa-solid fa-angle-up"></i></a>
	<div class="flex">
		<figure class="footerFigure">
			<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/footer_logo.png" alt="">
		</figure>
		<nav class="footerNav">
			<ul class="footerNav_list">
				<li class="navItem"><a href="<?php echo get_site_url(); ?>">トップ</a></li>
				<li class="navItem"><a href="<?php echo get_site_url(); ?>/service">事業内容</a></li>
				<li class="navItem"><a href="<?php echo get_site_url(); ?>/message">メッセージ</a></li>
				<li class="navItem"><a href="<?php echo get_site_url(); ?>/company">会社概要</a></li>
				<li class="navItem"><a href="#">採用情報</a></li>
				<li class="navItem"><a href="<?php echo get_site_url(); ?>/privacypolicy">プライバシーポリシー</a></li>
				<li class="navItem"><a href="<?php echo get_site_url(); ?>/contact">お問い合わせ</a></li>
			</ul>
		</nav>
	</div>
	<div class="footerText">
		Copyright &copy;Level Staff Inc. All Rights Reserved.
	</div>
</footer>
<?php wp_footer(); ?>
<!--JQuery-->
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
	crossorigin="anonymous"></script>
<!--Scripts-->
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/script.js"></script>
</body>
</html>
