<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package nurse
 */

?>

<!-- FOOTER_START --> 
<footer id="footer" data-aos="fade-up">
	<div class="back-to-top" id="gototop">
		<a href="javascript:void(0)"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/back_to_top_org.svg" alt="" /></a>
	</div>   
	<div class="footer_block_np"> 	
		<div class="coexistence_banner">
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 footer_in_np">
					<div class="footer_middle_np">
						<div class="footer_top_np">
							<div class="footer_box_np">
								<div class="footer_left_np">
									<div class="footer_logo_np"> 
										<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/footer_logo.png" alt=""/>
									</div> 
									<div class="footer_info_np">
										<h3>介護・福祉・障がい児通所支援事業</h3>
										<p>本社 ：愛知県春日井市柏原町3丁目240番地<br />TEL: 0568‐90‐3564FAX: 0568‐90-3565</p>                                           
									</div>
								</div>  
								<div class="footer_right_np">                   
									<div class="footer_links_np">
										<ul>	
											<li><a href="#">ニューズについて</a></li>
											<li><a href="#">メンテナンス事業</a></li>
											<li><a href="<?php echo get_site_url(); ?>/training/">福利厚生・研修制度</a></li>
											<li><a href="#">介護職員等特定処遇改善加算</a></li>
										</ul>
										<ul>	
											<li><a href="<?php echo get_site_url(); ?>/care/">介護事業</a></li>
											<li><a href="<?php echo get_site_url(); ?>/nursinghome/">有料老人ホーム事業</a></li>
											<li><a href="<?php echo get_site_url(); ?>/disabled/">障がい児通所支援</a></li>
											<li><a href="#">障がい福祉サービス</a></li>
											<li><a href="<?php echo get_site_url(); ?>/support/">日中一時支援</a></li>
										</ul>
										<ul>                                                
											<li><a href="#">子どもたちの様子</a></li>
											<li><a href="#">保護者評価</a></li>
											<li><a href="#">事業者評価</a></li>
										</ul>
										<ul>	
											<li><a href="#">グループ会社</a></li>
											<li><a href="<?php echo get_site_url(); ?>/news/">お知らせ</a></li>
											<li><a href="<?php echo get_site_url(); ?>/contact/">お問い合わせ</a></li>                                                
										</ul>                                                                           
									</div>
								</div>
							</div>                                                  
						</div>  
						<div class="footer_copyright_np">© 2022 nys-ivy</div>
						<div class="clearfix"></div>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
	</div>        
	<div class="clearfix"></div>
</footer>
<!-- FOOTER_END -->

</div>

<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/jquery-3.5.1.slim.min.js" type="text/javascript"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/jquery.min.js"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/popper.min.js" type="text/javascript"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/bootstrap.min.js" type="text/javascript"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/owl.carousel.min.js"></script>
<script>
  $(document).ready(function() {
	var owl = $('.top_slider');
	owl.owlCarousel({
	  margin: 33,
	  nav: false,
	  loop: true,
	  dots: false,
	  responsive: {
		0: {
		  items: 1.2,
		  margin: 10,
		},
		768: {
		  items: 2.2,
		  margin: 10,
		},
		1200: {
		  items: 3.5 
		}
	  }
	})
  })
</script>

<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/slick.js"></script>
<script>
$('.slider-for').slick({
  slidesToShow: 1,
  slidesToScroll: 1,
  arrows: false,
  /*fade: true,*/
  asNavFor: '.slider-nav'
});
$('.slider-nav').slick({
  slidesToShow: 2,
  slidesToScroll: 1,
  asNavFor: '.slider-for',
  arrows: true,
  dots: false,
  centerMode: false,
  focusOnSelect: true
});
</script>

<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/custom.js"></script>

<?php wp_footer(); ?>

</body>
</html>
