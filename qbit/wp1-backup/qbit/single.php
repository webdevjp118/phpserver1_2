<?php
get_header();
if ( have_posts() ) :
    while ( have_posts() ) :
        the_post();
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
	endwhile;
endif;
?>
<!-- CONTAIN_START -->
<section id="contain">    	        
	<div class="banner_block_rp" style="background:url(<?php echo get_stylesheet_directory_uri(); ?>/images/banner_2.png) no-repeat center center; background-size:cover;">             
		<div class="container">
			<div class="row">
				<div class="col banner_block_in_rp">                    	
					<div class="banner_middle_rp"> 
						<div class="banner_top_rp">                            	
						</div>
					</div>                                               
					<div class="clearfix"></div>
				</div>
			</div>
		</div>            
		<div class="clearfix"></div>
	</div>
	<div class="week_block_uep">             
		<div class="container">
			<div class="row">
				<div class="col week_block_in_uep">                    	
					<div class="week_middle_uep"> 
						<div class="week_box_uep">
							<div class="week_box_top_uep">
								<div class="week_date_uep">
									<?php echo $loop_date; ?>
								</div>
								<div class="week_title_uep">
									<?php echo $loop_title; ?>
								</div>
								<div class="blog_content">
									<div class="pmhwp">
										<?php the_content(); ?>
									</div>
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
	<div class="article_block_uep">             
		<div class="container">
			<div class="row">
				<div class="col article_block_in_uep">                    	
					<div class="article_middle_uep"> 
						<div class="robot_title_rp">
							最新記事
						</div>
						<div class="article_top_uep">
							<div class="article_boxes_uep">
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
								<div class="article_box_uep">
									<a href="<?php echo $loop_permalink; ?>" class="article_box_top_uep">
										<div class="img_wrap"><img src="<?php echo $loop_thumb_url; ?>" alt="" /></div>
									</a>
									<div class="article_box_bottom_uep">
										<div class="article_box_in_uep">
											<div class="article_box_row_uep">
												<div class="article_row_title_uep">
													<?php echo $loop_date; ?>
												</div>
												<div class="article_row_btn_uep">
													<a href="<?php echo $loop_category_link; ?>"><?php echo $loop_category_name; ?></a>
												</div>
											</div>
											<a href="<?php echo $loop_permalink; ?>" class="article_box_info_uep">
												<p><span><?php echo $loop_title; ?></span></p>
												<p><?php echo $loop_content; ?></p>
											</a>
										</div>
									</div>
								</div>
<?php
    endwhile;
endif;	
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
</section>
<!-- CONTAIN_END -->
<?php
get_footer();
