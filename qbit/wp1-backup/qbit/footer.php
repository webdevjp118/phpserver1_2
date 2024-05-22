<!-- FOOTER_START --> 
<footer id="footer" data-aos="fade-up">
	<div class="back-to-top" id="gototop">
		<a href="javascript:void(0)"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/back-to-top.svg" alt="" /></a>            
		<div class="footer_icons_hp">   	
			<div class="footer_icon_hp">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/twiitter.svg" alt="" />
			</div>
			<div class="footer_icon_hp">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/insta.svg" alt="" />
			</div>
			<div class="footer_icon_hp">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/youtube.svg" alt="" />
			</div>
		</div>
	</div>                  
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 footer_in_hp">
				<div class="footer_middle_hp">
					<div class="footer_top_hp">
						<div class="footer_left_hp">
							<a class="footer_logo_hp" href="<?php echo get_site_url(); ?>/"> 
								<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/footer_logo.png" alt=""/>
							</a>                                
							<div class="footer_info_hp">
								株式会社QBIT Robotics<br/>〒164-0003 東京都中野区東中野１丁目２６−４ ＡＢパレス                                
							</div>
							<div class="footer_link_hp">
								<ul>
									<li><a href="#">Privacy Policy​</a></li>
									<li><a href="#">Terms of Use</a></li>
								</ul>    
							</div>
						</div>
						<div class="footer_right_hp">                      
							<div class="footer_copyright_hp">© Qbit robotics,Inc.</div>                    	                        
						</div>                                                                                                    
					</div>                          
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
<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/jquery-3.5.1.slim.min.js" type="text/javascript"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/jquery.min.js"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/popper.min.js" type="text/javascript"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/bootstrap.min.js" type="text/javascript"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/owl.carousel.min.js"></script>
<script>
$(document).ready(function() {
  var owl = $('.slider_boxes_hp');
  owl.owlCarousel({
	margin:30,
	nav: false,
	autoWidth:true,
	loop: true,
	dots: false,
	responsive: {
	  0: {
		items: 1
	  },
	  767: {
		items: 2
	  },
	  1000: {
		items: 2
	  }
	}
  })
})
</script>
<script>
$(document).ready(function() {
  var owl = $('.case_boxes_hp');
  owl.owlCarousel({
	margin:35,
	nav: false,
	autoWidth:true,
	loop: true,
	dots: false,
	responsive: {
	  0: {
		items: 2
	  },
	  767: {
		items: 5
	  },
	  1000: {
		items: 5
	  }
	}
  })
})
</script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/custom.js"></script>
<?php wp_footer(); ?>
</body>
</html>
