<?php
get_header();
?>
<!-- CONTAIN_START -->
<?php get_template_part('template-parts/background-ad'); ?>
<section id="contain" class="content_section">
    <?php get_template_part('template-parts/ad-area'); ?>
    <?php get_template_part('template-parts/top-menu'); ?>
    <div class="poker_width">
        <div class="pgevents_bg">
            <div class="poker_cwidth">
                <div class="hx5"></div>
                <div class="pg_header" style="background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/images/pg_events.jpg);">
                    <h1>SCHEDULE</h1>
                </div>
                <div class="hx4"></div>
                <div class="tabg">
                    <div class="tabg_wrap">
                        <a class="tabg_item" href="<?php echo get_site_url(); ?>/schedule/">Ongoing</a>
                        <a class="tabg_item" href="<?php echo get_site_url(); ?>/schedule-upcoming/">Upcoming</a> 
                        <a class="tabg_item pxt_active" href="<?php echo get_site_url(); ?>/schedule-past/">Past Events</a>
                        <!-- <a class="tabg_item" href="<?php echo get_site_url(); ?>/events-tour/">Tours</a>  -->
                    </div>
                </div>
                <div class="hx2"></div>
                <div class="event_list_tp paccordion">
<?php
$event_query = new WP_Query(array(
    'post_type' => 'tournament',
    'paged' => get_query_var('paged'),
    // 'posts_per_page' => -1,
    'order'=>'DESC',
    'orderby'=>'meta_value',
    'meta_key'=>'start_event_date',
    'meta_query' => array(
        'relation' => 'AND',
        array(
            'key' => 'end_event_date',
            'value' => date( 'Ymdhis' ),
            'compare' => '<',
            'type' => 'DATE'
        ),
        array(
            'key' => 'end_event_date',
            'compare' => 'EXISTS',
        ),
    )
));
$event_ids = [];
if ( $event_query->have_posts() ) :
    while ( $event_query->have_posts() ) :
        $event_query->the_post();
        // $new_date_format = date('Y-m-d H:i:s', strtotime('2008-07-01T22:35:17.02'));
        // echo get_field('start_event_date', get_the_ID())." : ".date( 'Ymdhis' )." : ".get_field('end_event_date', get_the_ID())."<br><br><br>";
        $loop_id = get_the_id();
        array_push($event_ids, $loop_id);
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
    $loop_post = get_post($loop_id);
    $loop_content = $loop_post->post_content;
    $loop_content = apply_filters('the_content', $loop_content);
    $loop_content = str_replace(']]>', ']]&gt;', $loop_content);
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
    $loop_events = get_field('events', $loop_id);
    if(!empty($loop_events)) {
        uasort($loop_events, 'event_date_cmp');
    }
?>
                    <div class="event_report pacc">
                        <div class="event_item pacc_header">
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
                                <div class="view_schedule">
                                    <span class="pacc_closed">Close Schedule</span>
                                    <span class="pacc_opened">View Schedule</span>
                                </div>
                            </div>
                        </div>
                        <div class="eventem_schedule pacc_collapse">
                            <div class="pgschedule_esche">
<?php
    if(!empty($loop_events)) {
        for($j=0;$j<count($loop_events);$j++) {
            $event_date = strtotime($loop_events[$j]['start']);
            $today_begin = strtotime('today');
            $today_end = strtotime('tomorrow') - 1;
            $event_livedot = 0; //live
            if($event_date < $today_begin) {
                $event_livedot = -1;
            } else if($event_date > $today_end) {
                $event_livedot = 1;
            }
?>
                                <div class="esche_row pspander">
                                    <div class="esche_header pspander_header">
                                        <div class="esche_cap">
                                            <div class="esche_caprow">
                                                <div class="esche_colset1">
                                                    <?php
                                                        if($event_livedot < 0) {
                                                            echo '<div class="esche_livedot X_finished"></div>';
                                                        } else if($event_livedot > 0) {
                                                            echo '<div class="esche_livedot X_upcoming"></div>';
                                                        } else {
                                                            echo '<div class="esche_livedot X_live"></div>';
                                                        }
                                                    ?>
                                                    <div class="esche_col1"><?php echo date('Y.m.d', strtotime($loop_events[$j]['start'])); ?></div>
                                                    <div class="esche_col2"><?php echo date('H:i', strtotime($loop_events[$j]['start'])); ?></div>
                                                    <div class="esche_col3"><?php echo $loop_events[$j]['event_id']; ?></div>
                                                </div>
                                                <div class="esche_colset2">
                                                    <div class="esche_col4"><span class="esche_colcap">Buy-In</span><?php echo $loop_events[$j]['buy_in']; ?></div>
                                                    <div class="esche_col5"><span class="esche_colcap">Starting Stack</span><?php echo $loop_events[$j]['starting_stack']; ?></div>
                                                    <div class="esche_col6"><span class="esche_colcap">Registration Closes At</span><?php echo $loop_events[$j]['registration_closes_at']; ?></div>
                                                </div>
                                            </div>
                                            <div class="esche_title"><?php echo $loop_events[$j]['title']; ?></div>
                                        </div>
                                        <div>
                                            <img class="pspander_opened" src="<?php echo get_stylesheet_directory_uri(); ?>/images/plus_icon.svg">
                                            <img class="pspander_closed" src="<?php echo get_stylesheet_directory_uri(); ?>/images/minus_icon.svg">
                                        </div>
                                    </div>
                                    <div class="esche_body pspander_collapse">
                                        <?php echo $loop_events[$j]['extra']; ?>
                                    </div>
                                </div>
<?php
        }
    }
?> 
                            </div>
                        </div>
                    </div>
<?php
}
?>
                </div>
                <div class="hx4"></div>
                <div class="pagination">
                    <div class="pagination_wrap">
                        <?php wp_pagenavi(array('query' => $event_query)); ?>
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
