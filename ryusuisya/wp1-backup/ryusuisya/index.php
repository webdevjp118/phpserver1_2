<?php
get_header('salon');
global $wp_query;
$query = $wp_query;
?>
<!-- CONTAIN_START -->
<section id="contain"> 
    <div class="introduction_main_ip">
        <video id="Mp4Video" class="video-div" data-type="mp4" src="<?php echo get_stylesheet_directory_uri(); ?>/images/Top.mp4" loop muted playsinline autoplay></video>
    </div> 
    <div class="salon_block_sap"> 
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 salon_block_in_sap">  
                    <div class="common_title_hp common_change_hp">
                        <h2>ALL</h2>
                    </div>                  	
                    <div class="salon_middle_sap">                         	
                        <div class="salon_box_sap">
<?php
if ( $query->have_posts() ) :
    while ( $query->have_posts() ) :
        $query->the_post();
        $loop_id = get_the_id();
        $loop_title = get_the_title();
        $loop_content = get_the_excerpt();
        $loop_date = get_the_date('Y年m月d日');
        $loop_category_name = "";
        $loop_category_objects = get_the_category($loop_id);
        foreach($loop_category_objects as $cd){
            $loop_category_name = $cd->cat_name;
            break;
        }
        $loop_permalink = get_the_permalink($loop_id);
        $loop_thumb_url = get_thumb_url($loop_id);
?>						
                            <div class="salon_box_in_sap">
                                <a href="<?php echo $loop_permalink; ?>">
                                    <div class="salon_left_sap">
                                        <div class="salon_left_in_sap">
                                            <div class="salon_img_sap">
                                                <img src="<?php echo $loop_thumb_url; ?>" alt="" />
                                            </div>
                                            <div class="salon_info_sap">
                                                <h4><?php echo $loop_title; ?></h4>
                                                <p><?php echo $loop_category_name; ?></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="salon_right_sap">
                                        <div class="salon_date_sap">
                                            <?php echo $loop_date; ?>
                                        </div>
                                    </div>
                                </a>    
                            </div>
<?php
    endwhile;
endif;	
?>								
                        </div>
						<div class="pagination_block">
							<div class="pagination_wrap">
								<?php wp_pagenavi(array('query' => $query)); ?>
							</div>
						</div>
                    </div>
                    <div class="salon_main_img_sap">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/img_7.png" alt="" />
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
get_footer();
