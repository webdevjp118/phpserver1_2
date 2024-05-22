<?php
get_header();
?>
<!-- CONTAIN_START -->
<section id="contain">    	        
    <div class="instead_head"></div>
<?php
if ( have_posts() ) :
    while ( have_posts() ) :
        the_post();
?>    
    <div class="pg_fv">
        <div class="cwidth14">
            <div class="pgfv_cat X_case"><?php echo get_field('keyword'); ?></div>
            <div class="pgfv_title"><h1><?php echo get_the_title(); ?></h1></div>
        </div>
    </div>
    <div class="cwidth14">
        <div class="pmhwp">
            <?php echo the_content(); ?>
        </div>
        <div class="hx10"></div>
    </div>
<?php
    endwhile;
endif;	
?>
    <div class="cwidth14">
        <div class="prev_next">
<?php
$prev_post = get_previous_post();
if(!empty($prev_post)) {
// echo '<a href="' . get_permalink($prev_post->ID) . '" title="' . $prev_post->post_title . '">' . $prev_post->post_title . '</a>'; }
?>                    
                    <a class="prev_post" href="<?php echo get_permalink($prev_post->ID); ?>"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/case_next.svg"><span>前の施工事例</span></a>
<?php
} else { 
    echo "<div>&nbsp;</div>"; 
}
?>
                    <a class="post_list" href="<?php echo get_site_url(); ?>/case/">交換工事例⼀覧へ</a>
<?php
$next_post = get_next_post();
if(!empty($next_post)) {
// echo '<a href="' . get_permalink($next_post->ID) . '" title="' . $next_post->post_title . '">' . $next_post->post_title . '</a>'; }
?>                    
                    <a class="next_post" href="<?php echo get_permalink($next_post->ID); ?>"><span>次の施工事例</span><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/case_next.svg"></a>
<?php
} else { 
    echo "<div>&nbsp;</div>"; 
}
?>                    
        </div>
    </div>
    <div class="hx10"></div>
</section>
<!-- CONTAIN_END -->
<?php
get_footer();
