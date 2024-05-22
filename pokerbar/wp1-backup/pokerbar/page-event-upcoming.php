<?php
wp_redirect(get_site_url().'/coming-soon/');
exit;
get_header();
?>
<!-- CONTAIN_START -->
<main>
    <section class="pg_fv">
        <div class="pgfv_back">
            <img class="pgfv_bg" src="<?php echo get_stylesheet_directory_uri(); ?>/images/pg_event.jpg">
        </div>
        <div class="pgfv_front">
            <div class="pgfv_text">
                <h1 class="pani4 js-split">Event</h1>
                <div class="pgfv_uline"></div>
            </div>
        </div>
    </section>
    <?php get_template_part('template-parts/gto-banner'); ?>
    <div class="pgevent_pad">
        <div class="cwidth12">
            <div class="event_tabs io fade upS">
                <a class="event_tab" href="<?php echo get_site_url(); ?>/event/">Ongoing</a>
                <a class="event_tab active" href="<?php echo get_site_url(); ?>/event-upcoming/">Upcoming</a>
                <a class="event_tab" href="<?php echo get_site_url(); ?>/event-past/">Past Events</a>
            </div>
            <div class="hx4"></div>
            <div class="event_list">
                <div class="event_item io fade upS">
                    <div class="eventem_img">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/event0.jpg">
                    </div>
                </div>
                <div class="event_item io fade upS">
                    <div class="eventem_img">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/event1.jpg">
                    </div>
                </div>
                <div class="event_item io fade upS">
                    <div class="eventem_img">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/event2.jpg">
                    </div>
                </div>
                <div class="event_item io fade upS">
                    <div class="eventem_img">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/event0.jpg">
                    </div>
                </div>
                <div class="event_item io fade upS">
                    <div class="eventem_img">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/event1.jpg">
                    </div>
                </div>
                <div class="event_item io fade upS">
                    <div class="eventem_img">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/event2.jpg">
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<!-- CONTAIN_END -->
<?php
get_footer();
