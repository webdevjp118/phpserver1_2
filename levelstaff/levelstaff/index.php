<?php
get_header();
?>
<main>
	<section class="mv">
		<div class="mvBox">
			<h1 class="mvTitle">レベルの高い人材を！</h1>
			<figure class="mvFigure">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/mv_logo.png" alt="">
			</figure>
		</div>
	</section>
	<section class="attention">
		<h2 class="attentionTitle">
			建築現場の人手不足にお困りではありませんか？
			<span>Attention</span>
		</h2>
		<div class="attentionBox">
			<ul>
				<li>職人の高齢化</li>
				<li>建築需要の拡大<br>
					に追いつけない</li>
				<li>入社後すぐに<br>
					離職されてしまう</li>
				<li>必要な時だけ<br>
					人が欲しい</li>
				<li>広告費用を<br>
					かけても希望人材<br>
					が見つからない</li>
				<li>若年層の人材が<br>
					欲しいが即戦力に<br>
					なるか不安</li>
				<li>事業拡大したい<br>
					のに人材不足</li>
				<li>現場に最適な人材<br>
					が見つからない</li>
			</ul>
		</div>
		<figure class="attentionFigure">
			<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/attention_01.png" alt="">
		</figure>
	</section>
	<section class="feature">
		<h2 class="featureTitle">
			3つの特徴
			<span>Features</span>
		</h2>
		<div class="featureBox">
			<div class="flex">
				<figure class="featureFigure">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/feature_01.png" alt="">
				</figure>
				<div class="featureText_box">
					<span class="num">01</span>
					<h3 class="featureBox_title">登録簡単</h3>
					<p class="featureText">
									ご登録は無料で、どこにいてもご依頼可能です。
								</p>
				</div>
			</div>
		</div>
		<div class="featureBox">
			<div class="flex">
				<figure class="featureFigure">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/feature_02.png" alt="">
				</figure>
				<div class="featureText_box">
					<span class="num">02</span>
					<h3 class="featureBox_title">建築に特化した人材の提供</h3>
					<p class="featureText">
						建築現場で経験があるワーカー<br>
						のご提供が可能です。
					</p>
				</div>
			</div>
		</div>
		<div class="featureBox">
			<div class="flex">
				<figure class="featureFigure">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/feature_03.png" alt="">
				</figure>
				<div class="featureText_box">
					<span class="num">03</span>
					<h3 class="featureBox_title">全国どこでも対応可能</h3>
					<p class="featureText">
						北海道から九州までご対応可能です。
					</p>
				</div>
			</div>
		</div>
	</section>
	<section class="linkList" data-aos="fade-up">
		<div class="flex">
			<div class="linkBox">
				<a href="<?php echo get_site_url(); ?>/company">
					<figure class="linkFigure">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/top_01.png" alt="">
					</figure>
					<h3 class="linkBox_title">COMPANY</h3>
					<p class="linkBox_text">
						株式会社レベルスタッフ<br>
						会社概要
					</p>
				</a>
			</div>
			<div class="linkBox">
				<a href="<?php echo get_site_url(); ?>/service">
					<figure class="linkFigure">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/top_02.png" alt="">
					</figure>
					<h3 class="linkBox_title">SERVICE</h3>
					<p class="linkBox_text">
						建築に特化した<br>
						スキマバイトのご提案
					</p>
				</a>
			</div>
			<div class="linkBox">
				<a href="<?php echo get_site_url(); ?>/message">
					<figure class="linkFigure">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/top_03.png" alt="">
					</figure>
					<h3 class="linkBox_title">MESSAGE</h3>
					<p class="linkBox_text">
						社長メッセージ
					</p>
				</a>
			</div>
		</div>
	</section>
	<section class="contactSection">
		<h2 class="contactSection_title">
			サービスのお問い合せ・申し込みはこちらから
		</h2>
		<div class="btnBox">
			<a href="<?php echo get_site_url(); ?>/contact" class="btn -type1">お問合せ・申し込み</a>
			<a href="tel:050-3625-1930" class="btn -type2">
				<i class="fa-solid fa-phone fa-rotate-90"></i>
				<div class="tel">
					050-3625-1930
					<span>平日：10時〜18時</span>
				</div>
			</a>
		</div>
	</section>
</main>
<?php
get_footer();
