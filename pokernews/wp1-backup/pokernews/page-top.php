<?php
get_header();
?>
<!-- CONTAIN_START -->
<?php get_template_part('template-parts/background-ad'); ?>
<section id="contain" class="content_section">
    <?php get_template_part('template-parts/ad-area'); ?>
    <?php get_template_part('template-parts/top-menu'); ?>
    <div class="poker_width">
        <div class="poker_cwidth">
            <div class="hx2 remove_pc"></div>
            <div class="pg_ad remove_pc">
                <div class="hx2"></div>
                <!-- Enhanced WO_JA-1-Japanese-468x60 -->
                <img src="https://wptpartners.ck-cdn.com/tn/serve/?cid=0" width="1" height="1" style="visibility: hidden;"/><script src="https://c.bannerflow.net/a/6504676d7f3245a95572a053?did=5e9d98a7e1a01c0001764185&redirecturl=https%3A%2F%2Ftracking.wptpartners.com%2Fvisit%2F%3Fbta%3D35148%26nci%3D5468" async></script>
            </div>    
        </div>
        <div class="news_block_tp">
            <div class="poker_cwidth">
                <div class="hx4 block_pc"></div>
                <div class="news_title_tp">
                    <div class="common_title_hp">
                        <div class="X_deco"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/common_title_deco.svg"></div>
                        <h2>News</h2> 
                    </div>
                </div>
                <div class="titline_btn flex_pc">
                    <a class="com_job_btn" href="<?php echo get_site_url(); ?>/news/">
                        <span>MORE</span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="6.683" height="10.538" viewBox="0 0 6.683 10.538">
                            <path d="M62.651,13.834,67.212,18.4l-4.562,4.562" transform="translate(-61.944 -13.127)" fill="none" stroke-width="2"/>
                        </svg>                              
                    </a>  
                </div>
                <div class="hx2"></div>
                <div class="news_row_tp">
<?php
$tpnews_query = new WP_Query( 
    array(
        'post_type' => 'post',
        'posts_per_page' => 5,
    )
);
$tpnews_ids = [];
if ( $tpnews_query->have_posts() ) :
    while ( $tpnews_query->have_posts() ) :
        $tpnews_query->the_post();
        $loop_id = get_the_id();
        array_push($tpnews_ids, $loop_id);
    endwhile;
endif;
?>                    
<?php
if(count($tpnews_ids) > 0) {
    $loop_id = $tpnews_ids[0];
    $loop_title = get_the_title($loop_id);
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
                    <a class="top_news_tp" href="<?php echo $loop_permalink; ?>">
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
}
?>                    
                    <div class="news_right_tp">
<?php
for($i=1;$i<count($tpnews_ids);$i++) {
    $loop_id = $tpnews_ids[$i];
    $loop_title = get_the_title($loop_id);
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
                        <a class="news_item_tp" href="<?php echo $loop_permalink; ?>">
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
}
for($i=count($tpnews_ids);$i<=4;$i++) {
    echo '<div class="news_item_tp" style="opacity:0">&nbsp;</div>';
}
?>                        
                    </div>
                </div>
                <div class="hx3 block_sp"></div>
                <div class="news_btn_tp flex_sp">
                    <a class="com_job_btn" href="<?php echo get_site_url(); ?>/news/">
                        <span>MORE</span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="6.683" height="10.538" viewBox="0 0 6.683 10.538">
                            <path d="M62.651,13.834,67.212,18.4l-4.562,4.562" transform="translate(-61.944 -13.127)" fill="none" stroke-width="2"/>
                        </svg>                              
                    </a>
                </div>
                <div class="hx4"></div>
            </div>
        </div>
        <div class="reporting_block_tp">
            <div class="poker_cwidth">
                <div class="hx4"></div>
                <div class="reporting_title_tp">
                    <div class="common_title_hp">
                        <div class="X_deco"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/common_title_deco.svg"></div>
                        <h2>Live Reporting</h2>
                    </div>
                </div>
                <div class="titline_btn flex_pc">
                    <a class="com_job_btn" href="<?php echo get_site_url(); ?>/live-reporting/">
                        <span>MORE</span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="6.683" height="10.538" viewBox="0 0 6.683 10.538">
                            <path d="M62.651,13.834,67.212,18.4l-4.562,4.562" transform="translate(-61.944 -13.127)" fill="none" stroke-width="2"/>
                        </svg>                              
                    </a>  
                </div>
                <div class="hx2"></div>
                <div class="event_list_tp">
<?php
$report_tour_query = new WP_Query(array(
    'post_type' => 'reporting',
    'posts_per_page' => 10,
    'meta_query' => array(
        'relation' => 'AND',
        array(
            'key' => 'tournament',
            'compare' => 'EXISTS',
        ),
        array(
            'key' => 'event_id',
            'compare' => 'EXISTS',
        )
    )
));
$report_tour_ids = [];
if ( $report_tour_query->have_posts() ) :
    while ( $report_tour_query->have_posts() ) :
        $report_tour_query->the_post();
        // $new_date_format = date('Y-m-d H:i:s', strtotime('2008-07-01T22:35:17.02'));
        // echo get_field('start_event_date', get_the_ID())." : ".date( 'Ymdhis' )." : ".get_field('end_event_date', get_the_ID())."<br><br><br>";
        $loop_id = get_the_id();
        array_push($report_tour_ids, $loop_id);
    endwhile;
endif;
$report_tours = [];
foreach($report_tour_ids as $loop_id) {
    $loop_tour_id = get_field('tournament', $loop_id);
    if(!empty($loop_tour_id)) {
        $found_tour_no = -1;
        for($i=0;$i<count($report_tours);$i++) {
            if($report_tours[$i]['tournament'] == $loop_tour_id) {
                $found_tour_no = $i;
                break;
            }
        }
        if($found_tour_no < 0) {
            array_push($report_tours, array('tournament' => $loop_tour_id, 'event_ids' => []));
        }
    }
}
foreach($report_tour_ids as $loop_id) {
    $loop_tour_id = get_field('tournament', $loop_id);
    $loop_event_id = get_field('event_id', $loop_id);
    if(!empty($loop_tour_id) && !empty($loop_event_id)) {
        $found_tour_no = -1;
        for($i=0;$i<count($report_tours);$i++) {
            if($report_tours[$i]['tournament'] == $loop_tour_id) {
                $found_tour_no = $i;
                break;
            }
        }
        array_push($report_tours[$found_tour_no]['event_ids'], $loop_event_id);
    }
}
for($i=0;$i<count($report_tours);$i++) {
    $loop_id = $report_tours[$i]['tournament'];
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
                    <div class="event_report">
                        <a class="event_item" href="#">
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
                        <div class="eventem_schedule">
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
            $report_query = new WP_Query(array(
                'post_type' => 'reporting',
                // 'paged' => get_query_var('paged'),
                'posts_per_page' => 2,
                'meta_query' => array(
                    'relation' => 'AND',
                    array(
                        'key' => 'tournament',
                        'value' => $loop_id,
                        'compare' => '='
                    ),
                    array(
                        'key' => 'event_id',
                        'value' => $loop_events[$j]['event_id'],
                        'compare' => '='
                    )
                )
            ));
            $report_ids = [];
            if ( $report_query->have_posts() ) :
                while ( $report_query->have_posts() ) :
                    $report_query->the_post();
                    // $new_date_format = date('Y-m-d H:i:s', strtotime('2008-07-01T22:35:17.02'));
                    // echo get_field('start_event_date', get_the_ID())." : ".date( 'Ymdhis' )." : ".get_field('end_event_date', get_the_ID())."<br><br><br>";
                    $report_id = get_the_id();
                    array_push($report_ids, $report_id);
                endwhile;
            endif;
            if(count($report_ids) > 0) {
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
                                    <div class="esche_reporting">
                                        <div class="eschereport_line"></div>
                                        <div class="eschereport_cap">Live Reporting</div>
                                        <ul class="eschereport_ul">
                                            <?php
                                                for($k=0;$k<count($report_ids);$k++) {
                                                    $report_permalink = get_the_permalink($report_ids[$k]).'#'.$report_ids[$k];
                                                    $report_title = get_the_title($report_ids[$k]);
                                            ?>
                                            <li><a href="<?php echo $report_permalink; ?>"><?php echo $report_title; ?></a></li>
                                            <?php
                                                }
                                            ?>
                                        </ul>
                                    </div>
                                </div>
<?php
            }//if(count($report_ids) > 0) {
        }//for($j=0;$j<count($loop_events);$j++) {
    }//if(!empty($loop_events)) {
?>
                            </div>
                        </div>
                    </div>
<?php
}//for($i=0;$i<count($report_tours);$i++) {
?>
                </div>
                <div class="reporting_btn_tp block_sp">
                    <div class="news_btn_tp">
                        <a class="com_job_btn" href="http://192.168.1.31/pokernews/wp1/live-reporting/">
                            <span>MORE</span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="6.683" height="10.538" viewBox="0 0 6.683 10.538">
                                <path d="M62.651,13.834,67.212,18.4l-4.562,4.562" transform="translate(-61.944 -13.127)" fill="none" stroke-width="2"></path>
                            </svg>                              
                        </a>
                    </div>
                </div>
                <div class="hx2"></div>
            </div>
        </div>
        <div class="event_block_tp">
            <div class="poker_cwidth">
                <div class="hx2"></div>
                <div class="event_title_tp">
                    <div class="common_title_hp">
                        <div class="X_deco"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/common_title_deco.svg"></div> 
                        <h2>Schedule</h2> 
                    </div>
                </div>
                <div class="titline_btn flex_pc">
                    <a class="com_job_btn" href="<?php echo get_site_url(); ?>/schedule/">
                        <span>MORE</span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="6.683" height="10.538" viewBox="0 0 6.683 10.538">
                            <path d="M62.651,13.834,67.212,18.4l-4.562,4.562" transform="translate(-61.944 -13.127)" fill="none" stroke-width="2"/>
                        </svg>                              
                    </a>  
                </div>
<?php
$live_tour_query = new WP_Query(array(
    'post_type' => 'tournament',
    // 'paged' => get_query_var('paged'),
    'posts_per_page' => -1,
    'order'=>'DESC',
    'orderby'=>'meta_value',
    'meta_key'=>'start_event_date',
    'meta_query' => array(
        'relation' => 'AND',
        array(
            'key' => 'start_event_date',
            'value' => date( 'Ymdhis' ),
            'compare' => '<=',
            'type' => 'DATE'
        ),
        array(
            'key' => 'end_event_date',
            'value' => date( 'Ymdhis' ),
            'compare' => '>',
            'type' => 'DATE'
        ),
        array(
            'key' => 'start_event_date',
            'compare' => 'EXISTS',
        ),
    )
));
$live_tour_ids = [];
if ( $live_tour_query->have_posts() ) :
    while ( $live_tour_query->have_posts() ) :
        $live_tour_query->the_post();
        $loop_id = get_the_id();
        array_push($live_tour_ids, $loop_id);
    endwhile;
endif;
$upcoming_tour_query = new WP_Query(array(
    'post_type' => 'tournament',
    'paged' => get_query_var('paged'),
    'posts_per_page' => 3,
    'order'=>'ASC',
    'orderby'=>'meta_value',
    'meta_key'=>'start_event_date',
    'meta_query' => array(
        'relation' => 'AND',
        array(
            'key' => 'start_event_date',
            'value' => date( 'Ymdhis' ),
            'compare' => '>',
            'type' => 'DATE'
        ),
        array(
            'key' => 'start_event_date',
            'compare' => 'EXISTS',
        ),
    )
));
$upcoming_tour_ids = [];
if ( $upcoming_tour_query->have_posts() ) :
    while ( $upcoming_tour_query->have_posts() ) :
        $upcoming_tour_query->the_post();
        // $new_date_format = date('Y-m-d H:i:s', strtotime('2008-07-01T22:35:17.02'));
        // echo get_field('start_event_date', get_the_ID())." : ".date( 'Ymdhis' )." : ".get_field('end_event_date', get_the_ID())."<br><br><br>";
        $loop_id = get_the_id();
        array_push($upcoming_tour_ids, $loop_id);
    endwhile;
endif;
$past_tour_query = new WP_Query(array(
    'post_type' => 'tournament',
    'paged' => get_query_var('paged'),
    'posts_per_page' => 3,
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
$past_tour_ids = [];
if ( $past_tour_query->have_posts() ) :
    while ( $past_tour_query->have_posts() ) :
        $past_tour_query->the_post();
        // $new_date_format = date('Y-m-d H:i:s', strtotime('2008-07-01T22:35:17.02'));
        // echo get_field('start_event_date', get_the_ID())." : ".date( 'Ymdhis' )." : ".get_field('end_event_date', get_the_ID())."<br><br><br>";
        $loop_id = get_the_id();
        array_push($past_tour_ids, $loop_id);
    endwhile;
endif;
for($tab_id=0;$tab_id<3;$tab_id++) {
    $cur_tour_ids = [];
    if($tab_id == 0) $cur_tour_ids = $live_tour_ids;
    else if($tab_id == 1) $cur_tour_ids = $upcoming_tour_ids;
    else if($tab_id == 2) $cur_tour_ids = $past_tour_ids;
    if(count($cur_tour_ids) > 0) {
?>              
                <div class="hx2"></div>
                <div class="tabg">
                    <div class="tabg_wrap">
                    <?php
                        if($tab_id == 0) echo '<a class="tabg_item" href="'.get_site_url().'/schedule/">Ongoing</a>';
                        else if($tab_id == 1) echo '<a class="tabg_item" href="'.get_site_url().'/schedule-upcoming/">Upcoming</a>';
                        else if($tab_id == 2) echo '<a class="tabg_item" href="'.get_site_url().'/schedule-past/">Past Events</a>';
                    ?>
                    </div>
                </div>
                <div class="hx2"></div>
                <div class="event_list_tp paccordion">
<?php
        for($i=0;$i<count($cur_tour_ids);$i++) {
            $loop_id = $cur_tour_ids[$i];
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
                }//for($i=0;$i<count($loop_events);$i++) {
            }//if(!empty($loop_events)) {
?> 
                            </div>
                        </div>
                    </div>
<?php
        }//for($i=0;$i<count($cur_tour_ids);$i++) {
?>
                </div>
<?php
    }//if(count($cur_tour_ids) > 0) {
}//for($tab_id=0;$tab_id<3;$tab_id++) {
?>                
                <div class="event_btn_tp block_sp">
                    <div class="news_btn_tp">
                        <a class="com_job_btn" href="http://192.168.1.31/pokernews/wp1/schedule/">
                            <span>MORE</span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="6.683" height="10.538" viewBox="0 0 6.683 10.538">
                                <path d="M62.651,13.834,67.212,18.4l-4.562,4.562" transform="translate(-61.944 -13.127)" fill="none" stroke-width="2"></path>
                            </svg>                              
                        </a>
                    </div>
                </div>
                <div class="hx4"></div>
            </div>
        </div>
        <div class="gallery_block_tp">
            <div class="poker_cwidth">
                <div class="hx4"></div>
                <div class="gallery_title_tp">
                    <div class="common_title_hp">
                        <div class="X_deco"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/common_title_deco1.svg"></div>                                    
                        <h2>Gallery</h2> 
                    </div>
                </div>
                <div class="titline_btn flex_pc">
                    <div class="gallery_btn_tp">
                        <a class="com_job_btn" href="<?php echo get_site_url(); ?>/live-reporting/">
                            <span>MORE</span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="6.683" height="10.538" viewBox="0 0 6.683 10.538">
                                <path d="M62.651,13.834,67.212,18.4l-4.562,4.562" transform="translate(-61.944 -13.127)" fill="none" stroke-width="2"/>
                            </svg>                              
                        </a>      
                    </div>
                </div>
                <div class="hx2"></div>
                <div class="gallery_row_tp">
<?php
$gallery_query = new WP_Query(array(
    'post_type' => 'gallery',
));
if ( $gallery_query->have_posts() ) :
    while ( $gallery_query->have_posts() ) :
        $gallery_query->the_post();
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
                    <a class="gallery_item" href="<?php echo $loop_permalink; ?>">
                        <div class="galitem_img">
                            <img src="<?php echo $loop_thumb_url; ?>">
                            <div class="galitem_title"><?php echo $loop_title; ?></div>
                        </div>
                    </a>
<?php
    endwhile;
endif;	
?>
                </div>
                <div class="gallery_btn_tp flex_sp">
                    <a class="com_job_btn" href="#">
                        <span>MORE</span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="6.683" height="10.538" viewBox="0 0 6.683 10.538">
                            <path d="M62.651,13.834,67.212,18.4l-4.562,4.562" transform="translate(-61.944 -13.127)" fill="none" stroke-width="2"></path>
                        </svg>
                    </a>
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
<!-- CONTAIN_END -->
<?php
get_footer();
