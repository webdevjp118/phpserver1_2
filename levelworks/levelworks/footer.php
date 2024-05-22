<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package levelworks
 */

?>

<!-- FOOTER_START --> 
<footer id="footer" data-aos="fade-up">
	<div class="back-to-top-hp" id="gototop">
		<a href="javascript:void(0)"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/back_to_top.svg" alt=""></a>
	</div>    	
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 footer_in_hp">
				<div class="footer_middle_hp">
					<div class="footer_top_hp">
						<div class="footer_logo_hp"> 
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/LOGO_2.png" alt="">
						</div>                      
						<div class="footer_links_hp">
							<ul>	
								<li><a href="<?php echo get_site_url(); ?>/business/">事業内容</a></li>
								<li><a href="<?php echo get_site_url(); ?>/vision/">ビジョン・ミッション</a></li>
								<li><a href="<?php echo get_site_url(); ?>/company/">会社概要</a></li>
								<li><a href="<?php echo get_site_url(); ?>/contact/">お問い合わせ</a></li>
							</ul>                                
						</div>                                                  
					</div>                        
					<div class="footer_copyright_hp">© 2022 Next Level works CO,LTD All Rights Reserved.</div>                    	                        
					<div class="clearfix"></div>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>        
	<div class="clearfix"></div>
</footer>
<!-- FOOTER_END -->
</div>
<?php wp_footer(); ?>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/jquery-3.5.1.slim.min.js" type="text/javascript"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/popper.min.js" type="text/javascript"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/bootstrap.min.js" type="text/javascript"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/jquery.min.js"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/custom.js"></script>
</body>
</html>
