<?php
get_header();
global $wp_query;
$query = $wp_query;
?>
<?php
if ( $query->have_posts() ) :
    while ( $query->have_posts() ) :
        $query->the_post();
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
                    <div class="post_contact">
                        <?php 
                            the_content(); 
                            // echo do_shortcode('[contact-form-7 id="9347bf9" title="コンタクトフォーム 1"]');
                        ?>

                    </div>
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
</section>
<?php
get_footer();
