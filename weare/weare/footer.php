
<!-- FOOTER_START --> 
<footer id="footer" data-aos="fade-up">
	<div class="back-to-top" id="gototop">
		<!-- <a href="javascript:void(0)"><img src="<?php //echo get_stylesheet_directory_uri(); ?>/images/back_to_top.svg" alt="" /></a> -->
	</div>    	
	<div class="container container_footer">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 footer_in_hp">
				<div class="footer_middle_hp">
					<div class="footer_top_hp">
						<div class="footer_top_in_hp">
							<div class="footer_logo_hp"> 
								<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/header_logo.svg" alt=""/>
							</div>       
							<div class="footer_text_hp">
								株式会社ウィアー
							</div>               
							<div class="footer_info_hp">
								〒160-0022<br />
								東京都新宿区新宿2-19-1ビッグス新宿ビル10F
							</div>
						</div>
						<div class="footer_links_hp">
							<ul>	
								<li><a href="<?php echo get_site_url(); ?>/mission/">OUR MISSION</a></li>
								<li><a href="<?php echo get_site_url(); ?>/service/">SERVICE</a></li>
								<li><a href="<?php echo get_site_url(); ?>/company/">COMPANY</a></li>
								<li><a href="<?php echo get_site_url(); ?>/recruit/">RECRUIT</a></li>
								<li><a href="<?php echo get_site_url(); ?>/news/">NEWS</a></li>
								<li><a href="<?php echo get_site_url(); ?>/contact/">CONTACT</a></li>
							</ul>                               
						</div>                                                  
					</div>  
					<div class="footer_row_hp">                      
						<div class="footer_title_hp"><a href="#">プライバシーポリシー</a></div>
						<div class="footer_copyright_hp">Copyright (c) WEARE inc.  All Rights Reserved.</div>                    	                        
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
<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/custom.js"></script>
</body>
</html>
