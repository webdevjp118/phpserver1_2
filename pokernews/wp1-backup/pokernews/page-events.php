<?php
get_header();
?>
<!-- CONTAIN_START -->
<?php get_template_part('template-parts/background-ad'); ?>
<section id="contain" class="content_section">
    <?php get_template_part('template-parts/ad-area'); ?>
    <div class="poker_width">
        <div class="page_content">
            <div class="poker_cwidth">
                <?php get_template_part('template-parts/top-menu'); ?>
                <div class="pline1"></div>
                <div class="hx5"></div>
                <div class="pg_header" style="background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/images/pg_events.jpg);">
                    <h1>LIVE-EVENT</h1>
                </div>
                <div class="hx4"></div>
                <div class="tabg">
                    <div class="tabg_wrap">
                        <a class="tabg_item pxt_active" href="#">Ongoing</a>
                        <a class="tabg_item" href="#">Upcoming</a> 
                        <a class="tabg_item" href="#">Past Events</a>
                        <a class="tabg_item" href="#">Tours</a> 
                    </div>
                </div>
                <div class="hx2"></div>
                <div class="event_list_tp">
<?php
$related_args = array(
	'post_type' => 'tournament',
	'posts_per_page' => -1,
);
$query = new WP_Query( $related_args );
$event_ids = [];
if ( $query->have_posts() ) :
    while ( $query->have_posts() ) :
        $query->the_post();
        $loop_id = get_the_id();
        array_push($event_ids, $loop_id);
    endwhile;
endif;
$reporting_list = [];
for($i=0;$i<count($event_ids);$i++) {
    $event_id = $event_ids[$i];
    $query = new WP_Query(array(
        'post_type' => 'reporting',
        'posts_per_page' => -1, 
        'meta_query' => array(
            'relation' => 'AND',
            array(
                'key' => 'tournament',
                'value' => $event_id,
                'compare' => '='
            )
        )
    ));
    $reporting_ids = [];
    if ( $query->have_posts() ) :
        while ( $query->have_posts() ) :
            $query->the_post();
            $loop_id = get_the_id();
            array_push($reporting_ids, $loop_id);
        endwhile;
    endif;
    array_push($reporting_list, $reporting_ids);
}
for($i=0;$i<count($event_ids);$i++) {
        $loop_id = $event_ids[$i];
        $loop_game_id = get_field('game', $loop_id);
        $loop_banner = get_field('banner', $loop_id);
        if(empty($loop_banner)) {
            $loop_banner = get_field('background', $loop_game_id);
        }
        $loop_title = get_the_title($loop_id);
        $loop_permalink = get_the_permalink($loop_id);
        $loop_thumb_url = get_thumb_url($loop_id);
?>                    
                    <div class="event_report">
                        <a class="event_item" href="<?php echo $loop_permalink; ?>">
                            <div class="eventem_img"><img src="<?php echo $loop_banner; ?>"></div>
                            <div class="eventem_content">
                                <div class="eventem_title"><?php echo $loop_title; ?></div>
                                <div class="eventem_pdate">
                                    <div class="eventem_ptype">LIVE</div>
                                    <div class="eventem_date">2023.05.30 ~ 2023.07.18</div>
                                </div>
                            </div>
                        </a>
<?php
    for($j=0;$j<count($reporting_list[$i]);$j++) {
        $report_id = $reporting_list[$i][$j];
        $report_title = get_the_title($report_id);
        $report_permalink = get_the_permalink($report_id);
?>
                        <div class="report_dash"></div>
                        <a class="under_report" href="<?php echo $report_permalink; ?>">
                            <span class="undereport_cap">Live Reporting:</span>
                            <span class="undereport_text"><?php echo $report_title; ?></span>
                        </a>
<?php
    }
?>
                    </div>
<?php
}
?>
                </div>
            </div>
            <div class="poker_cwidth">
                <div class="hx8"></div>
                <div class="ranking_row_tp">
                    <a class="ranking_btn_tp" href="#">
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
                    <a class="ranking_btn_tp" href="#">
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
