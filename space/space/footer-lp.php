<?php
?>

<footer id="footer" data-aos="fade-up">
	<div class="footer_bg_hp">
		<div class="back-to-top" id="gototop">
			<a href="javascript:void(0)"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/back_to_top.svg" alt="" /></a>
		</div>    	
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 footer_in_hp">
					<div class="footer_middle_hp">
						<div class="footer_top_hp">
							<div class="footer_logo_hp"> 
								<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/footer_logo.svg" alt=""/>
							</div>    
							<div class="footer_icons_hp">                                                                                                
								<div class="footer_icon_img_hp">
									<a href="#">
										<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/youtube.svg" alt="" />
									</a>
								</div>
								<div class="footer_icon_img_hp">
									<a href="https://www.facebook.com/spacexonecom" target="_blank">
										<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/facebook.svg" alt="" />
									</a>
								</div>
							</div>
						</div>
						<div class="footer_copyright_hp">                           
							©  SapceOne Co.LTD. All Rights Reserved.
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>        
	</div>
	<div class="clearfix"></div>
</footer>

</div>
<?php wp_footer(); ?>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/jquery-3.5.1.slim.min.js" type="text/javascript"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/jquery.min.js"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/popper.min.js" type="text/javascript"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/bootstrap.min.js" type="text/javascript"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/owl.carousel.min.js"></script>
<script>
  $(document).ready(function() {
	var owl = $('.useful_top_hp');
	owl.owlCarousel({
	  margin: 20,
	  nav: true,
	  loop: true,
	  dots: false,
	  autoWidth:true,
	  responsive: {
		0: {
		  items: 1
		},
		768: {
		  items: 3
		},
		1200: {
		  items: 4 
		}
	  }
	})
  })
</script>
<script>
  $(document).ready(function() {
	var owl = $('.owl-carousel');
	owl.owlCarousel({
	  margin: 0,
	  nav: true,
	  loop: true,
	  dots: true,
	  items:1,
	})
  })
</script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/custom.js"></script>
</body>
</html>