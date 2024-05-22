<?php
get_header();
global $wp_query;
$query = $wp_query;
?>
<?php
if ( $query->have_posts() ) :
    while ( $query->have_posts() ) :
        $query->the_post();
        $report_id = get_the_id();
        $this_report_id = $report_id;
        $this_event_id = get_field('event_id', $report_id); 
        $report_tour_id = get_field('tournament', $report_id);
        $report_game_id = get_field('game', $report_tour_id);
        $report_tour_title = get_the_title($report_tour_id);
        $report_tour_banner = get_field('banner', $report_tour_id);
        if(empty($report_tour_banner)) {
            $report_tour_banner = get_field('background', $report_game_id);
        }
        $report_tour_start = date('Y.m.d', strtotime(get_field('start_event_date', $report_tour_id)));
        $report_tour_end = date('Y.m.d', strtotime(get_field('end_event_date', $report_tour_id)));
        $report_ptype = 0; //live
        if(strtotime("now") > strtotime(get_field('end_event_date', $report_tour_id))) {
            $report_ptype = -1;
        } else if(strtotime("now") < strtotime(get_field('start_event_date', $report_tour_id))) {
            $report_ptype = 1;
        }
        $report_tour_permalink = get_the_permalink($report_tour_id);
        $report_events = get_field('events', $report_tour_id);
        $report_event = [];
        $event_livedot = 0;
        if(!empty($report_events)) {
            for($i=0;$i<count($report_events);$i++) {
                if($report_events[$i]['event_id'] == $this_event_id) {
                    $report_event = $report_events[$i];
                    $event_date = strtotime($report_event['start']);
                    $today_begin = strtotime('today');
                    $today_end = strtotime('tomorrow') - 1;
                    $event_livedot = 0; //live
                    if($event_date < $today_begin) {
                        $event_livedot = -1;
                    } else if($event_date > $today_end) {
                        $event_livedot = 1;
                    }
                }
            }
        }
    endwhile;
endif;	
?>
<!-- CONTAIN_START -->
<?php get_template_part('template-parts/background-ad'); ?>
<section id="contain" class="content_section">
    <?php get_template_part('template-parts/ad-area'); ?>
    <?php get_template_part('template-parts/top-menu'); ?>
    <div class="poker_width">
        <div class="page_content">
            <div class="poker_cwidth">
                <div class="hx5"></div>
                <div class="event_report">
                    <a class="event_item" href="#">
                        <div class="eventem_img"><img src="<?php echo $report_tour_banner; ?>"></div>
                        <div class="eventem_content">
                            <div class="eventem_title"><?php echo $report_tour_title; ?></div>
                            <div class="eventem_pdate">
                                <?php
                                    if($report_ptype == 0) {
                                        echo '<div class="eventem_ptype">LIVE</div>';
                                    } else if($report_ptype > 0) {
                                        echo '<div class="eventem_ptype X_upcoming">Upcoming</div>';
                                    } else if($report_ptype < 0) {
                                        echo '<div class="eventem_ptype X_finished">Finished</div>';
                                    }
                                ?>
                                <div class="eventem_date"><?php echo $report_tour_start.' ~ '.$report_tour_end; ?></div>
                            </div>
                        </div>
                    </a>
                    <?php if(!empty($report_event)) { ?>
                    <div class="eventem_schedule">
                        <div class="pgschedule_esche">
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
                                                <div class="esche_col1"><?php echo date('Y.m.d', strtotime($report_event['start'])); ?></div>
                                                <div class="esche_col2"><?php echo date('H:i', strtotime($report_event['start'])); ?></div>
                                                <div class="esche_col3"><?php echo $report_event['event_id']; ?></div>
                                            </div>
                                            <div class="esche_colset2">
                                                <div class="esche_col4"><span class="esche_colcap">Buy-In</span><?php echo $report_event['buy_in']; ?></div>
                                                <div class="esche_col5"><span class="esche_colcap">Starting Stack</span><?php echo $report_event['starting_stack']; ?></div>
                                                <div class="esche_col6"><span class="esche_colcap">Registration Closes At</span><?php echo $report_event['registration_closes_at']; ?></div>
                                            </div>
                                        </div>
                                        <div class="esche_title"><?php echo $report_event['title']; ?></div>
                                    </div>
                                    <div>
                                        <img class="pspander_opened" src="<?php echo get_stylesheet_directory_uri(); ?>/images/plus_icon.svg">
                                        <img class="pspander_closed" src="<?php echo get_stylesheet_directory_uri(); ?>/images/minus_icon.svg">
                                    </div>
                                </div>
                                <div class="esche_body pspander_collapse">
                                    <?php echo $report_event['extra']; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                </div>
                <div class="hx3"></div>
                <div class="reportblog_list paccordion">
<?php
$report_query = new WP_Query(array(
    'post_type' => 'reporting',
    // 'paged' => get_query_var('paged'),
    'posts_per_page' => -1,
    'meta_query' => array(
        'relation' => 'AND',
        array(
            'key' => 'tournament',
            'value' => $report_tour_id,
            'compare' => '='
        ),
        array(
            'key' => 'event_id',
            'value' => $this_event_id,
            'compare' => '='
        )
    )
));
if ( $report_query->have_posts() ) :
    while ( $report_query->have_posts() ) :
        $report_query->the_post();
        $loop_id = get_the_id();
        $loop_title = get_the_title($loop_id);
        $loop_post = get_post($loop_id);
        $loop_content = $loop_post->post_content;
        $loop_content = apply_filters('the_content', $loop_content);
        $loop_content = str_replace(']]>', ']]&gt;', $loop_content);
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
                    <div class="reportblog">
                        <div class="pmh_anchor" id="<?php echo $loop_id; ?>"></div>
                        <div class="reportblog_header">
                            <div class="reportblog_cap">
                                <div class="reportblog_title">
                                    <?php echo $loop_title; ?>
                                </div>
                            </div>
                        </div>
                        <div class="reportblog_body">
                            <div class="reportblog_cwidth">
                                <div class="reportblog_content">
                                    <div class="pmhwp">
                                        <article class="article">
                                            <?php echo $loop_content; ?>
                                        </article>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
<?php                
    endwhile;
endif;	
?>                  
                </div>
                <div class="hx6"></div>
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
</div>
<?php
get_footer();