<?php
get_header('salon');
?>
<!-- CONTAIN_START -->
<section id="contain"> 
    <div class="introduction_main_ip">
        <video id="Mp4Video" class="video-div" data-type="mp4" src="<?php echo get_stylesheet_directory_uri(); ?>/images/Salon_002.mp4" loop muted playsinline autoplay></video>
    </div> 
    <div class="salon_block_sgp">             
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 salon_block_in_sgp">                    	
                    <div class="salon_middle_sgp"> 
                        <div class="salon_box_sgp">
                            <div class="salon_top_sgp">
                                <div class="common_title_hp common_size_sgp">
                                    <h2>ONLINE<br/>SALON</h2>
                                </div>
                                <div class="salon_img_sgp">
                                    <a href="#">
                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/salon_logo2.png" alt="" />
                                    </a>
                                </div>
                            </div>                   
                            <div class="salon_bottom_sgp">
                                <div class="application_title_sop">                        	
                                    NEWS
                                </div>
                                <div class="salon_row_sgp">
<?php
$terms = get_the_terms( get_the_ID(), 'category' );
$term_list = wp_list_pluck( $terms, 'slug' );
$related_args = array(
	'post_type' => 'post',
	'posts_per_page' => 3,
	'post_status' => 'publish',
	'tax_query' => array(
		array(
			'taxonomy' => 'category',
			'field' => 'id',
			'terms' => [get_category_id_by_name('NEWS')]	)
	)
);
$query = new WP_Query( $related_args );
if ( $query->have_posts() ) :
    while ( $query->have_posts() ) :
        $query->the_post();
        $loop_id = get_the_id();
        $loop_title = get_the_title();
        $loop_content = get_the_excerpt();
        $loop_date = get_the_date('Y.m.d');
        $loop_category_name = "";
        $loop_category_objects = get_the_category($loop_id);
        foreach($loop_category_objects as $cd){
            $loop_category_name = $cd->cat_name;
            break;
        }
        $loop_permalink = get_the_permalink($loop_id);
        $loop_thumb_url = get_thumb_url($loop_id);
?>                                  
                                    <div class="salon_row_in_sgp">
                                        <a href="<?php echo $loop_permalink; ?>">
                                            <div class="salon_date_sgp">
                                                <?php echo $loop_date; ?>
                                            </div>
                                            <div class="salon_info_sgp">
                                                <?php echo $loop_title; ?>
                                            </div>
                                        </a>
                                    </div>
<?php
    endwhile;
endif;	
?>                                      
                                </div>
                            </div>             
                        </div>
                    </div>                                               
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>            
        <div class="clearfix"></div>
    </div>
</section>
<!-- CONTAIN_END -->
<!-- FOOTER_START -->
<footer id="footer" class="footer_change_sop footer_change_trp">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 footer_in_hp footer_change_hp">
                <div class="footer_middle_hp">
                    <div class="footer_top_hp">
                        <div class="footer_box_hp">
                            <div class="footer_img_hp">
                                <a href="https://www.youtube.com/@ryusuisya"> 
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/footer_img.png" alt="" />
                                </a>
                            </div>
                            <div class="footer_img_hp">
                                <a href="https://twitter.com/ryusuisya"> 
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/footer_img2.png" alt="" />
                                </a>
                            </div> 
                            <div class="footer_img_hp">
                                <a href="#">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/footer_logo.png" alt="" />	
                                </a>
                            </div>                                                         
                        </div>
                        <div class="footer_copyright_sop">                                                                                   
                            ©️All rights reserved.
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
<?php
get_footer('salon');
