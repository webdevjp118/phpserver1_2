<?php
get_header();
?>
<!-- CONTAIN_START -->
<?php get_template_part('template-parts/background-ad'); ?>
<section id="contain" class="content_section">
    <?php get_template_part('template-parts/ad-area'); ?>
    <?php get_template_part('template-parts/top-menu'); ?>
    <div class="poker_width">
        <div class="pgreporting_bg">
            <div class="poker_cwidth">
                <div class="hx5"></div>
                <div class="pg_header" style="background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/images/pg_report.jpg);">
                    <h1>LIVE REPORTING</h1>
                </div>
                <div class="hx4"></div>
                <div class="event_list_tp">
<?php
$reporting_query = new WP_Query(array(
    'post_type' => 'reporting',
    'paged' => get_query_var('paged'),
    'order'=>'DESC',
    'orderby'=>'meta_value',
    'meta_key'=>'start_event_date',
));
$event_ids = [];
$reporting_list = [];
if ( $reporting_query->have_posts() ) :
    while ( $reporting_query->have_posts() ) :
        $reporting_query->the_post();
        // $new_date_format = date('Y-m-d H:i:s', strtotime('2008-07-01T22:35:17.02'));
        // echo get_field('start_event_date', get_the_ID())." : ".date( 'Ymdhis' )." : ".get_field('end_event_date', get_the_ID())."<br><br><br>";
        $loop_id = get_the_id();
        $loop_event_id = get_field('tournament');
        for($i=0;$i<count($event_ids);$i++) {
            if($loop_event_id == $event_ids[$i]) {
                array_push($reporting_list[$i], $loop_id);
            }
        }
        if(!in_array($loop_event_id, $event_ids)) {
            $reporting_ids = array($loop_id);
            array_push($reporting_list, $reporting_ids);
            array_push($event_ids, $loop_event_id);
        }
    endwhile;
endif;
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
        $loop_start_event_date = date('Y.m.d', strtotime(get_field('start_event_date', $loop_id)));
        $loop_end_event_date = date('Y.m.d', strtotime(get_field('end_event_date', $loop_id)));
        $loop_ptype = 0; //live
        if(strtotime("now") > strtotime(get_field('end_event_date', $loop_id))) {
            $loop_ptype = -1;
        } else if(strtotime("now") < strtotime(get_field('start_event_date', $loop_id))) {
            $loop_ptype = 1;
        }
?>                    
                    <div class="event_report">
                        <a class="event_item" href="<?php echo $loop_permalink; ?>">
                            <div class="eventem_img"><img src="<?php echo $loop_banner; ?>"></div>
                            <div class="eventem_content">
                                <div class="eventem_title"><?php echo $loop_title; ?></div>
                                <div class="eventem_pdate">
                                    <?php
                                        if($loop_ptype == 0) {
                                            echo '<div class="eventem_ptype">LIVE</div>';
                                        } else if($loop_ptype > 0) {
                                            echo '<div class="eventem_ptype X_upcoming">Upcoming</div>';
                                        } else if($loop_ptype < 0) {
                                            echo '<div class="eventem_ptype X_finished">Finished</div>';
                                        }
                                    ?>
                                    <div class="eventem_date"><?php echo $loop_start_event_date.' ~ '.$loop_end_event_date; ?></div>
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
                <div class="hx4"></div>
                <div class="pagination">
                    <div class="pagination_wrap">
                        <?php wp_pagenavi(array('query' => $reporting_query)); ?>
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
                <div class="hx4"></div>
            </div>
        </div>
    </div>
</div>
<?php
get_footer();
