<?php
get_header();
?>
<?php
if ( have_posts() ) :
    while ( have_posts() ) :
        the_post();
        $loop_id = get_the_id();
        $loop_title = get_the_title();
        $loop_content = get_the_excerpt();
        $loop_date = get_the_date('Y/m/d');
        $loop_thumb_url = get_thumb_url($loop_id);
?>
<!-- CONTAIN_START -->
<main>
    <div class="instead_head disf_sp"></div>
    <section class="pg_fv">
        <div class="pgfv_back">
            <img class="pgfv_bg" src="<?php echo get_stylesheet_directory_uri(); ?>/images/pg_work.jpg">
        </div>
        <div class="pgfv_front">
            <div class="pgfv_text">
                <h1 class="pani4 js-split">WORK</h1>
                <h2>実績</h2>
            </div>
        </div>
    </section>
    <div class="fv_zig">
        <div class="zig_deco">
            <div class="zdeco_shape">
                <div class="zdeco_origin">
                    <div class="zdeco_lmask1">
                        <div class="zdeco_limg1"></div>
                    </div>
                    <div class="zdeco_lmask2">
                        <div class="zdeco_limg2"></div>
                    </div>
                    <div class="zdeco_rmask1">
                        <div class="zdeco_rimg1"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="blog_block">
        <div class="cwidth12">
            <div class="blog_titlewrap">
                <div class="rbotitle_ani pinpos">
                    <div class="rbotitle_ani1">
                        <div class="blog_title">
                            <h1><?php echo $loop_title; ?></h1>
                        </div>
                    </div>
                </div>
            </div>
            <div class="hx3"></div>
            <div class="blog_date"><?php echo get_field('完成日付'); ?></div>
            <div class="hx6"></div>
            <div class="just_image"><img src="<?php echo $loop_thumb_url; ?>"></div>
            <div class="hx6"></div>
            <div class="blog_content">
                <div class="pmhwp">
                    <article class="article">
                        <?php the_content(); ?>
                    </article>
                </div>
            </div>
        </div>
    </section>
    <div class="zig_deco pinpos">
        <div class="zdeco_shape">
            <div class="zdeco3_origin">
                <div class="zdeco3_lmask1">
                    <div class="zdeco3_limg1"></div>
                </div>
                <div class="zdeco3_rmask1">
                    <div class="zdeco3_rimg1"></div>
                </div>
                <div class="zdeco3_rmask2">
                    <div class="zdeco3_rimg2"></div>
                </div>
            </div>
        </div>
    </div>
    <section class="com_contact">
        <div class="rbotitle_ani pinpos">
            <div class="rbotitle_ani1">
                <div class="comtact_title">
                    <h3>Contact Us</h3>
                </div>        
            </div>
        </div>
        <div class="hx2"></div>
        <p class="js_opac">寺田冷機へのお問い合わせはこちらから</p>
        <div class="hx5"></div>
        <div class="comtact_btn js_opac">
            <a href="<?php echo get_site_url(); ?>/contact/" class="com_btn">
                <span>問い合わせフォーム</span><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/combtn_arrow1.png" alt="">
            </a>
        </div>
    </section>
    <div class="zig_deco pinpos">
        <div class="zdeco_shape">
            <div class="zdeco2_origin">
                <div class="zdeco2_lmask1">
                    <div class="zdeco2_limg1"></div>
                </div>
                <div class="zdeco2_lmask2">
                    <div class="zdeco2_limg2"></div>
                </div>
                <div class="zdeco2_rmask1">
                    <div class="zdeco2_rimg1"></div>
                </div>
            </div>
        </div>
    </div>
</main>
<?php
    endwhile;
endif;
?>
<!-- CONTAIN_END -->
<?php
get_footer();
