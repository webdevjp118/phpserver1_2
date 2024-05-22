<?php
get_header();
global $wp_query;
$query = $wp_query;
?>
<?php
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
    endwhile;
endif;	
?>
<!-- CONTAIN_START -->
<?php get_template_part('template-parts/background-ad'); ?>
<section id="contain" class="content_section">
    <?php get_template_part('template-parts/ad-area'); ?>
    <?php get_template_part('template-parts/top-menu'); ?>
    <div class="poker_width">
        <div class="pgranking_bg">
            <div class="poker_cwidth">
                <div class="hx5"></div>
                <div class="pg_header" style="background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/images/pg_contact.jpg);">
                    <h1>CONTACT</h1>
                </div>
                <div class="hx4"></div>
                <div class="contactform_width">
                    
                <div class="hx3"></div>
                <div class="pline2"></div>
                <div class="hx4"></div>
                <div class="just_image"><img src="<?php echo $loop_thumb_url; ?>"></div>
                <div class="hx4"></div>
                <div class="blog_content">
                    <div class="pmhwp">
                        <article class="article">
                            <?php the_content(); ?>
                        </article>
                    </div>
                </div>
                <div class="hx4"></div>
                <div class="newslist_btn">
                    <a class="com_job_btn" href="<?php echo get_site_url(); ?>/news/">
                        <span>VIEW LIST</span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="6.683" height="10.538" viewBox="0 0 6.683 10.538">
                            <path d="M62.651,13.834,67.212,18.4l-4.562,4.562" transform="translate(-61.944 -13.127)" fill="none" stroke-width="2"></path>
                        </svg>                              
                    </a>
                </div>
                <div class="hx6"></div>
            </div>
        </div>
        <div class="side_news">
            <div class="poker_cwidth">
                <div class="hx4"></div>
                <div class="sidenews_title">
                    <div class="common_title_hp">
                        <p><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/common_title_deco.svg"></p>                                    
                        <h2>Related Articles</h2> 
                    </div>
                </div>
                <div class="hx3"></div>
                <div class="sidenews_row">
<?php
$terms = get_the_terms( $loop_id, 'category' );
$term_list = wp_list_pluck( $terms, 'slug' );
$related_args = array(
	'post_type' => 'post',
	'posts_per_page' => 3,
	'post_status' => 'publish',
	'post__not_in' => array( $loop_id ),
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
                    <a class="sidenews_item" href="<?php echo $loop_permalink; ?>">
                        <div class="news_imgtitle">
                            <div class="news_img">
                                <img src="<?php echo $loop_thumb_url; ?>">
                            </div>
                            <div class="newsitem_title">
                                <h3><?php echo $loop_title; ?></h3>
                            </div>
                        </div>
                        <div class="news_daterow">
                            <div class="news_date"><?php echo $loop_date; ?></div>
                            <div class="news_cat"><?php echo $loop_category_name; ?></div>
                        </div>
                    </a>
<?php
    endwhile;
endif;
?>                        
                </div>
                <div class="hx4"></div>
            </div>
        </div>
        <div class="poker_contact">
            <div class="poker_cwidth">
                <div class="hx4"></div>
                <div class="ranking_row_tp">
                    <a class="ranking_btn_tp" href="<?php echo get_site_url(); ?>/ranking/">
                        <div class="ranking_img_tp"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/tp_ranking.jpg"></div>
                        <div class="ranking_text_tp">
                            <span>RANKING</span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="19.914" height="19.602" viewBox="0 0 19.914 19.602">
                                <g transform="translate(-769.867 -4160.793)">
                                    <path d="M779.273,4161.534l9.094,9.094-9.094,9.094" transform="translate(0 -0.034)" fill="none" stroke="#fff" stroke-width="2"/>
                                    <line x2="18.5" transform="translate(769.867 4170.594)" fill="none" stroke="#fff" stroke-width="2"/>
                                </g>
                            </svg>
                        </div>
                    </a>
                    <a class="ranking_btn_tp" href="<?php echo get_site_url(); ?>/contact/">
                        <div class="ranking_img_tp"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/tp_contact.jpg"></div>
                        <div class="ranking_text_tp">
                            <span>CONTACT</span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="19.914" height="19.602" viewBox="0 0 19.914 19.602">
                                <g transform="translate(-769.867 -4160.793)">
                                    <path d="M779.273,4161.534l9.094,9.094-9.094,9.094" transform="translate(0 -0.034)" fill="none" stroke="#fff" stroke-width="2"/>
                                    <line x2="18.5" transform="translate(769.867 4170.594)" fill="none" stroke="#fff" stroke-width="2"/>
                                </g>
                            </svg>
                        </div>
                    </a>
                </div>
                <div class="hx2"></div>
                <div class="pg_ad remove_sp">
                    <!-- Enhanced WO_JA-1-Japanese-728x90 -->
                    <img src="https://wptpartners.ck-cdn.com/tn/serve/?cid=0" width="1" height="1" style="visibility: hidden;"/><script src="https://c.bannerflow.net/a/6504676d7f3245a95572a054?did=5e9d98a7e1a01c0001764185&redirecturl=https%3A%2F%2Ftracking.wptpartners.com%2Fvisit%2F%3Fbta%3D35148%26nci%3D5470" async></script>
                </div>
                <div class="pg_ad remove_pc">
                    <!-- Enhanced WO_JA-1-Japanese-468x60 -->
                    <img src="https://wptpartners.ck-cdn.com/tn/serve/?cid=0" width="1" height="1" style="visibility: hidden;"/><script src="https://c.bannerflow.net/a/6504676d7f3245a95572a053?did=5e9d98a7e1a01c0001764185&redirecturl=https%3A%2F%2Ftracking.wptpartners.com%2Fvisit%2F%3Fbta%3D35148%26nci%3D5468" async></script>
                </div>
                <div class="hx2"></div>
            </div>
        </div>
    </div>
</div>
<?php
get_footer();