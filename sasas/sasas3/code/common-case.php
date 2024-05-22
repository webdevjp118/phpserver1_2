<?php
global $query;
?>
<!-- CONTAIN_START -->
<section id="contain">    	        
    <div class="instead_head"></div>
    <div class="pg_fv">
        <div class="cwidth14">
            <div class="pgfv_title"><h1>交換工事例</h1></div>
        </div>
    </div>
    <div class="cwidth14">
        <div class="case_grid">
<?php
if ( $query->have_posts() ) :
    while ( $query->have_posts() ) :
        $query->the_post();
?>            
            <a class="case_item" href="<?php echo get_the_permalink(); ?>">
                <div class="casitem_img">
                    <img src="<?php echo get_field('photo'); ?>">
                </div>
                <div class="casitem_title"><?php echo get_the_title().'｜'.get_field('keyword'); ?></div>
            </a>
<?php
    endwhile;
endif;
?>
        </div>
        <div class="10"></div>
        <div class="pagination_wrap">
            <?php wp_pagenavi(array('query' => $query)); ?>
        </div>
    </div>
    <div class="hx10"></div>
</section>
<!-- CONTAIN_END -->