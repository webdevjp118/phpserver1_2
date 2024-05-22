<?php
get_header();
?>
<!-- CONTAIN_START -->
<main>
    <section class="pg_fv">
        <div class="pgfv_back">
            <img class="pgfv_bg" src="<?php echo get_stylesheet_directory_uri(); ?>/images/pg_contact.jpg">
        </div>
        <div class="pgfv_front">
            <div class="pgfv_text">
                <h1 class="pani4 js-split">Contact</h1>
                <div class="pgfv_uline"></div>
            </div>
        </div>
    </section>
    <?php get_template_part('template-parts/gto-banner'); ?>
    <div class="hx4"></div>
    <div class="contactform_block">
        <div class="contactform_block">
            <div class="contactform_width">
                <div class="form_pos">
                    <?php
                        while ( have_posts() ) :
			                the_post();
                            the_content();
                        endwhile;
                    ?>
                </div>
            </div>
        </div>
    </div>
    <div class="hx6"></div>
</main>
<!-- CONTAIN_END -->
<?php
get_footer();
