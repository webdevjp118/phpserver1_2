<?php
get_header();
?>

<section id="contain">    	        
    <div class="news_block_hp">             
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 news_block_in_hp">                    	
                    <div class="news_middle_hp">                        	
                        <div class="news_top_hp">
                            <div class="news_left_hp">
                                <div class="common_title_hp">
                                    <p>主要話題</p>
                                    <h2>Topics</h2>
                                </div>
                            </div>
                            <div class="news_right_hp"> 
                                <div class="category_topics">
<?php
if ( have_posts() ) :
    while ( have_posts() ) :
        the_post();
        $loop_id = get_the_id();
        $loop_title = get_the_title();
        $loop_date = get_the_date('Y.m.d');
        $loop_permalink = get_the_permalink($loop_id);
        $loop_thumb_url = get_thumb_url($loop_id);
?>                    
                    <div class="topics_box_hp">
                        <a href="<?php echo $loop_permalink; ?>">
                            <div class="topics_img_hp">
                                <img src="<?php echo $loop_thumb_url; ?>" alt="" />
                            </div>
                            <div class="topics_in_hp">
                                <div class="topics_info_hp">
                                    <?php echo $loop_title; ?>
                                </div>
                                <div class="topics_date_hp">
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
                            <div class="pagination_wrap">
								<?php wp_pagenavi(); ?>
							</div>	
                        </div>
					</div>
				</div>
			</div>
		</div>
	</div>
    <div class="contact_block_hp contact_change_hp" style="background:#fff url(<?php echo get_stylesheet_directory_uri(); ?>/images/contact-bg.png) no-repeat top center; background-size:cover;">             
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 contact_block_in_hp">                    	
                    <div class="contact_middle_hp">                        	
                        <div class="contact_top_hp">
                            <div class="common_title_hp">
                                <p>お問い合わせ</p>
                                <h2>Contact us</h2>
                            </div>
                            <div class="contact_grid_hp">
                                <div class="contact_subinfo_hp">
                                    お電話でお問い合わせ
                                </div>
                                <div class="contact_num_hp">
                                    052-231-4510
                                </div>
                            </div>
                            <div class="contact_btn_hp">
                                <a class="common_btn_hp" href="<?php echo get_site_url(); ?>/contact/">
                                    メールでお問い合わせ<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/btn_svg.svg" alt="" />
                                </a>
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

<?php
get_footer();
