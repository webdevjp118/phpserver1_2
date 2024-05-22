<?php
get_header();
global $wp_query;
$query = $wp_query;
$category_id = 0;
if(is_category() || is_single()){
	$category_id = get_query_var('cat');
}
$s_keyword = "";
if(isset($_GET['s'])) {
	$s_keyword = $_GET['s'];
}
?>
<!-- CONTAIN_START -->
<section id="contain">    	        
	<div class="banner_block_rp banner_block_uap" style="background:url(<?php echo get_stylesheet_directory_uri(); ?>/images/banner_2.png) no-repeat center center; background-size:cover;">             
		<div class="container">
			<div class="row">
				<div class="col banner_block_in_rp">                    	
					<div class="banner_middle_rp"> 
						<div class="banner_top_uap">
							<div class="banner_left_uap">
								<div class="banner_links_uap">
									<ul>
										<?php if(empty($category_id)): ?><li><a href="<?php echo get_site_url(); ?>/news/" class="active">全ての記事</a></li>
										<?php else: ?><li><a href="<?php echo get_site_url(); ?>/news/">全ての記事</a></li><?php endif; ?>
										<?php
											$categories = get_categories();
											foreach($categories as $category) { 
												if($category->term_id == $category_id) {
										?>
										<li><a href="<?php echo get_category_link($category->term_id); ?>" class="active"><?php echo $category->name; ?></a></li>
										<?php
												} else {
										?>
										<li><a href="<?php echo get_category_link($category->term_id); ?>"><?php echo $category->name; ?></a></li>
										<?php
												}
											}
										?>
									</ul>
								</div>
							</div>
							<form role="search" method="get" id="searchform" class="searchform" action="<?php get_site_url(); ?>">
								<div class="banner_right_uap">
									<div class="banner_right_btn_uap">
										<input type="text" name="s" id="s" value="<?php echo $s_keyword; ?>"/>
										<input type="submit" id="searchsubmit" value="" />
									</div>
								</div>
							</form>
						</div>
					</div>                                               
					<div class="clearfix"></div>
				</div>
			</div>
		</div>            
		<div class="clearfix"></div>
	</div>
	<div class="press_block_uap">             
		<div class="container">
			<div class="row">
				<div class="col press_block_in_uap">                    	
					<div class="press_middle_uap"> 
						<div class="press_top_uap">
							<div class="article_boxes_uep">
<?php
if ( $query->have_posts() ) :
    while ( $query->have_posts() ) :
        $query->the_post();
        $loop_id = get_the_id();
        $loop_title = get_the_title();
        $loop_content = get_the_excerpt();
        $loop_date = get_the_date('Y年m月d日');
        $loop_category_name = "";
		$loop_category_link = "#";
        $loop_category_objects = get_the_category($loop_id);
        foreach($loop_category_objects as $cd){
            $loop_category_name = $cd->cat_name;
			$loop_category_link = get_category_link($cd->term_id);
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
						<div class="press_bottom_uap">
							<div class="pagination_wrap">
								<?php wp_pagenavi(array('query' => $query)); ?>
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
