<!-- FOOTER_START --> 
<footer id="footer" data-aos="fade-up">
    	<!-- <div class="back-to-top" id="gototop">
        	<a href="javascript:void(0)"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/back_to_top.svg" alt="" /></a>
        </div>    	 -->
        <div class="container container_footer">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 footer_in_hp">
                    <div class="footer_middle_hp">
                    	<div class="footer_top_hp">
                        	<a class="footer_logo_hp" href="<?php echo get_site_url(); ?>/"> 
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/footer_logo.png" alt=""/>
                            </a>   
                            <div class="footer_info_hp">
                            	New Generation Super Glass Coating
                            </div>                   
                        </div>  
                        <div class="footer_bottom_hp">                      
                        	<div class="footer_link_hp">
                                <ul>	
                                    <li><a href="<?php echo get_site_url(); ?>/code2/">２層コート</a></li>
                                    <li><a href="<?php echo get_site_url(); ?>/code3/">最上級３層コート</a></li>
                                    <li><a href="<?php echo get_site_url(); ?>/maintenance/">ポリマーメンテ</a></li>
                                    <li><a href="<?php echo get_site_url(); ?>/inspection/">試験結果</a></li>
                                    <li><a href="<?php echo get_site_url(); ?>/faq/">Q&A </a></li>
                                    <li><a href="<?php echo get_site_url(); ?>/about/">会社概要</a></li>
                                </ul>
                            </div>
                        	<div class="footer_copyright_hp">© LEO COAT - All Rights Reserved</div>                    	                        
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
	var owl = $('.bike_top_hp');
	owl.owlCarousel({
	  margin:24,
	  nav: true,
	  loop: true,
	  dots: true,
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
<?php wp_footer(); ?>

</body>
</html>
