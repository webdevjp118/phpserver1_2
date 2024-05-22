<?php
get_header();
if ( have_posts() ) :
    while ( have_posts() ) :
        the_post();
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
	endwhile;
endif;
?>
<section id="contain">    	        
	<div class="banner_block_ep" style="background:url(<?php echo get_stylesheet_directory_uri(); ?>/images/banner_2.png) no-repeat bottom center; background-size:cover;">             
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 banner_block_in_ep">                     	
					<div class="banner_middle_ep">
						<div class="banner_text_ep">
							<p>お知らせ</p>
							<h2>NEWS</h2>
						</div>
					</div>                                               
					<div class="clearfix"></div>
				</div>
			</div>
		</div>            
		<div class="clearfix"></div>
	</div>    
	<div class="have_block_ndp">             
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 have_block_in_ndp">                    	                    	                    	
					<div class="have_middle_ndp">
						<div class="news_row_tp have_pd_ndp">
							<div class="news_date_tp">
								<?php echo $loop_date; ?>
							</div>
							<div class="news_boxtitle_tp">
								<?php echo $loop_category_name; ?>
							</div>
						</div>
						<div class="have_title_ndp">
							<?php echo $loop_title; ?>
						</div> 	   
						<div class="have_img_ndp">
							<img src="<?php echo $loop_thumb_url; ?>">
						</div>  
						<div class="have_width_ndp">
							<div class="pmhwp">
								<?php the_content(); ?>
							</div>
							<div class="prev_next_wrap">
<?php
the_post_navigation(
	array(
		'prev_text' => '<div class="have_btn_ndp"><span><img src="'.get_stylesheet_directory_uri().'/images/btn_left_green_Arrow.svg" alt=""/>前の記事へ</span></div>',
		'next_text' => '<div class="have_btn_ndp"><span class="have_change_ndp">前の記事へ<img src="'.get_stylesheet_directory_uri().'/images/green_btn_arrow.svg" alt=""/></span></div>',
	)
);
?>
							</div>
						</div>
					</div>                                               
					<div class="clearfix"></div>
				</div>
			</div>
		</div>            
		<div class="clearfix"></div>
	</div>
	
	
	<div class="news_block_tp related_change_ndp">             
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 news_block_in_tp">      
					<div class="common_title_hp">
						<h2>関連ニュース</h2>                                        
					</div>              	                    	
					<div class="news_middle_tp">
						<div class="news_top_tp">
<?php
$terms = get_the_terms( get_the_ID(), 'category' );
$term_list = wp_list_pluck( $terms, 'slug' );
$related_args = array(
	'post_type' => 'post',
	'posts_per_page' => 3,
	'post_status' => 'publish',
	'post__not_in' => array( get_the_ID() ),
	'orderby' => 'rand',
	'tax_query' => array(
		array(
			'taxonomy' => 'category',
			'field' => 'slug',
			'terms' => $term_list
		)
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
							<div class="news_box_tp">
								<a href="<?php echo $loop_permalink; ?>">
									<div class="news_img_tp">
										<img src="<?php echo $loop_thumb_url; ?>" alt=""/>
									</div>
									<div class="news_row_tp">
										<div class="news_date_tp">
											<?php echo $loop_date; ?>
										</div>
										<div class="news_boxtitle_tp">
											<?php echo $loop_category_name; ?>
										</div>
									</div>
									<div class="news_info_tp">
										<h4><?php echo $loop_title; ?></h4>
										<p><?php echo $loop_content; ?></p>
									</div>
								</a>
							</div>
<?php
	endwhile;
endif;
?>							
						</div>
						<div class="have_btn_ndp related_pd_ndp">
							<a href="<?php echo get_site_url(); ?>/news/"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/btn_left_green_Arrow.svg" alt=""/>記事一覧へ</a>
						</div>                                                        		                            
					</div>                                               
					<div class="clearfix"></div>
				</div>
			</div>
		</div>            
		<div class="clearfix"></div>
	</div>                   
						
	<div class="contact_block_tp">             
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 contact_block_in_tp">                    	                    	                    	
                    <div class="contact_middle_tp">                      	                                                  	                           
                        <div class="contact_top_tp">
                            <div class="contact_left_tp">
                                <div class="common_title_hp common_white_hp">
                                    <h2>Contact</h2>
                                    <p>お問い合わせ</p>                                                                          
                                </div>
                                <div class="contact_info_tp">
                                    その他ご質問などお気軽にお問い合わせください。
                                </div>
                            </div>
                            <div class="contact_right_tp">
                                <a class="common_btn_hp border_btn_hp border_btn_back_hp" href="<?php echo get_site_url(); ?>/contact/">
                                    <svg class="main_icon" xmlns="http://www.w3.org/2000/svg" width="18.059" height="14.333" viewBox="0 0 18.059 14.333">
                                        <g id="Icon_feather-mail" data-name="Icon feather-mail" transform="translate(-0.97 -2.833)">
                                        <path id="Path_213" data-name="Path 213" d="M3.333,3.333H16.667A1.672,1.672,0,0,1,18.333,5V15a1.672,1.672,0,0,1-1.667,1.667H3.333A1.672,1.672,0,0,1,1.667,15V5A1.672,1.672,0,0,1,3.333,3.333Z" fill="none" stroke="#22ac38" stroke-linecap="round" stroke-linejoin="round" stroke-width="1"/>
                                        <path id="Path_214" data-name="Path 214" d="M18.333,5,10,10.833,1.667,5" fill="none" stroke="#22ac38" stroke-linecap="round" stroke-linejoin="round" stroke-width="1"/>
                                        </g>
                                    </svg>
                                    <span>
                                        お問い合わせ
                                    </span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="23.302" height="5.669" viewBox="0 0 23.302 5.669">
                                    <path id="Path_1" data-name="Path 1" d="M4421.406,2009.87l6.02,4.778h-21.868" transform="translate(-4405.558 -2009.478)" fill="none" stroke="#22AC38" stroke-width="1"/>
                                    </svg>
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
wp_reset_postdata();
get_footer();
