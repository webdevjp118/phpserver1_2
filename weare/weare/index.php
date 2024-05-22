<?php
get_header();
global $wp_query;
$query = $wp_query;
?>

<!-- CONTAIN_START -->
<section id="contain">    	        
	<div class="banner_block_op banner_change_op" style="background:url(<?php echo get_stylesheet_directory_uri(); ?>/images/banner_op5.png) no-repeat top center; background-size:cover;">             
		<div class="container container_service">
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 banner_block_in_op">                    	
					<div class="banner_middle_op"> 
						<div class="banner_title_op">                 
							<h1>NEWS</h1>
							<h3>お知らせ</h3>
						</div>
					</div>                                               
					<div class="clearfix"></div>
				</div>
			</div>
		</div>            
		<div class="clearfix"></div>
	</div>        
	<div class="category_block_np">             
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 category_block_in_np">                    	
					<div class="category_middle_np"> 
						<div class="category_top_np">
							<div class="category_boxes_np">
<?php
if ( $query->have_posts() ) :
    while ( $query->have_posts() ) :
        $query->the_post();
        $loop_id = get_the_id();
        $loop_title = get_the_title();
        $loop_content = get_the_excerpt();
        $loop_date = get_the_date('Y.m.d');
        $loop_category_name = "";
		$loop_category_link = "";
        $loop_category_objects = get_the_category($loop_id);
        foreach($loop_category_objects as $cd){
            $loop_category_name = $cd->cat_name;
			$loop_category_link = get_category_link($cd->term_id);
            break;
        }
?>								
								<div class="category_box_np">
									<div class="category_box_in_np">
										<div class="category_date_np">
											<?php echo $loop_date; ?>
										</div>
										<div class="category_btn_np">
											<a href="<?php echo $loop_category_link; ?>">
												<div class="category_about_np"><?php echo $loop_category_name; ?></div>
											</a>
										</div>
									</div>
									<div class="category_text_np">
										<?php echo $loop_title; ?>
									</div>
									<div class="category_info_np">
										<div class="pmhwp">
											<?php the_content(); ?>											
										</div>
									</div>
								</div>
<?php
    endwhile;
endif;
?>								<div class="reason_pagination_pp">
									<div class="pagination_wrap">
										<?php wp_pagenavi(array('query' => $query)); ?>
									</div>	
								</div>
							</div>
							<div class="category_rightpart_np">
								<div class="category_righttext_np">
									カテゴリー
								</div>
								<div class="category_column_np">
<?php
$categories = get_categories();
foreach($categories as $category) {
?>									
									<div class="category_rightinfo_np">
										<a href="<?php echo get_category_link($category->term_id); ?>">
											<div class="category_right_in_np">
												<?php echo $category->name; ?>
											</div>
										</a>
									</div>
<?php
}
?>									
								</div>
								<div class="category_righttext_np">
									月別アーカイブ
								</div>
								<div class="category_column_np">
<?php
foreach(get_monthly_archive_array() as $each) {
?>
									<div class="category_rightinfo_np">
										<a href="<?php echo $each['value']; ?>">
											<div class="category_right_in_np">
												<?php echo $each['name']; ?>
											</div>
										</a>
									</div>
<?php
}
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
	</div>
	<div class="contact_block_hp" style="background:url(<?php echo get_stylesheet_directory_uri(); ?>/images/contact_img.png) no-repeat center center; background-size:cover;">         	               	
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 contact_block_in_hp">                     	
					<div class="contact_middle_hp">
						<div class="contact_top_hp">
							<div class="common_title_hp contact_change_hp">
								<h2>CONTACT</h2>       
								<p>お問い合わせ</p>                             
							</div>
							<div class="contact_text_hp">
								お気軽にご連絡ください
							</div>
							<div class="contact_btn_hp">
								<a href="<?php echo get_site_url(); ?>/contact/" class="common_btn_hp">
									お問い合わせフォーム<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/contact_icon.svg" alt="" />
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
<!-- CONTAIN_END -->

<?php
get_footer();
