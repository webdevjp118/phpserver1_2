<?php
get_header();
global $wp_query;
$query = $wp_query;
?>
<?php
if ( $query->have_posts() ) :
    while ( $query->have_posts() ) :
        $query->the_post();
        $loop_id = get_the_id();
        $loop_info = get_field('info');
        $loop_game_id = get_field('game');
        $loop_banner = get_field('banner');
        $loop_sign = get_field('sign', $loop_game_id);
        $loop_game_name = get_the_title($loop_game_id);
        if(empty($loop_banner)) {
            $loop_banner = get_field('background', $loop_game_id);
        }
        $loop_title = get_the_title();
        $loop_post = get_post($loop_id);
        $loop_title = get_the_title();
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
        $loop_events = get_field('events', $loop_id);
        if(!empty($loop_events)) {
            uasort($loop_events, 'event_date_cmp');
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
                <div class="tour_game" style="background-image: url(<?php echo $loop_banner; ?>);">
                    <h1 class="main_title"><?php echo $loop_title; ?></h1>
                    <div class="hx2"></div>
                    <div class="tour_content">
                        <?php
                            if(!empty($loop_info)) {
                                echo $loop_info; 
                            } else {
                        ?>
                           <p>
                                HORSESHOE / PARIS LAS VEGAS<br>
                                3645 S LAS VEGAS BLVD / 3655 S LAS VEGAS BLVD<br>
                                LAS VEGAS, NV USA</p>     
                        <?php
                            }
                        ?>
                    </div>
                    <a class="tourgame_sign" href="#">
                        <img src="<?php echo $loop_sign; ?>" alt="888poker LIVE">
                        <span><?php echo $loop_game_name; ?></span>
                    </a>
                </div>
                <div class="hx8"></div>
                <div class="schedule_block">
                    <!-- <div class="esche_row pspander">
                        <div class="esche_header pspander_header">
                            <div class="esche_cap">
                                <div class="esche_colset1">
                                    <div class="esche_col1">2023.8.26</div>
                                    <div class="esche_col2">13:00</div>
                                    <div class="esche_col3">#1</div>
                                    <div class="esche_col3"><span class="esche_colcap">Buy-In</span> $1,100</div>
                                </div>
                                <div class="esche_title">Eureka Online Qualifer - Crazy Pineapple Freeroll Flip Out - (Restricted Entry) - National Tour Main Event Seat to The Winner!!</div>
                            </div>
                            <div>
                                <img class="pspander_opened" src="<?php echo get_stylesheet_directory_uri(); ?>/images/plus_icon.svg">
                                <img class="pspander_closed" src="<?php echo get_stylesheet_directory_uri(); ?>/images/minus_icon.svg">
                            </div>
                        </div>
                        <div class="esche_body pspander_collapse">
                            内容 テキスト内容 テキスト内容 テキスト内容 テキスト内容 テキスト内容 テキスト内容 テキスト内容 テキスト内容 テキストがあります。内容 テキスト内容 テキスト内容 テキスト内容 テキスト内容 テキスト内容 テキスト内容 テキスト内容 テキスト内容 テキストがあります。
                            内容 テキスト内容 テキスト内容 テキスト内容 テキスト内容 テキスト内容 テキスト内容 テキスト内容 テキスト内容 テキストがあります。内容 テキスト内容 テキスト内容 テキスト内容 テキスト内容 テキスト内容 テキスト内容 テキスト内容 テキスト内容 テキストがあります。
                        </div>
                    </div> -->
                    
<?php
if(!empty($loop_events)) {
    for($i=0;$i<count($loop_events);$i++) {
        $event_date = strtotime($loop_events[$i]['start']);
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
                                        <div class="esche_col1"><?php echo date('Y.m.d', strtotime($loop_events[$i]['start'])); ?></div>
                                        <div class="esche_col2"><?php echo date('H:i', strtotime($loop_events[$i]['start'])); ?></div>
                                        <div class="esche_col3"><?php echo $loop_events[$i]['event_id']; ?></div>
                                    </div>
                                    <div class="esche_colset2">
                                        <div class="esche_col4"><span class="esche_colcap">Buy-In</span><?php echo $loop_events[$i]['buy_in']; ?></div>
                                        <div class="esche_col5"><span class="esche_colcap">Starting Stack</span><?php echo $loop_events[$i]['starting_stack']; ?></div>
                                        <div class="esche_col6"><span class="esche_colcap">Registration Closes At</span><?php echo $loop_events[$i]['registration_closes_at']; ?></div>
                                    </div>
                                </div>
                                <div class="esche_title"><?php echo $loop_events[$i]['title']; ?></div>
                            </div>
                            <div>
                                <img class="pspander_opened" src="<?php echo get_stylesheet_directory_uri(); ?>/images/plus_icon.svg">
                                <img class="pspander_closed" src="<?php echo get_stylesheet_directory_uri(); ?>/images/minus_icon.svg">
                            </div>
                        </div>
                        <div class="esche_body pspander_collapse">
                            <?php echo $loop_events[$i]['extra']; ?>
                        </div>
                    </div>
<?php
    }
}
?>                    
                </div>
                <div class="hx6"></div>
            </div>
            <!-- <div class="side_news">
                <div class="poker_cwidth">
                    <div class="hx4"></div>
                    <div class="sidenews_title">
                        <div class="common_title_hp">
                            <p><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/common_title_deco.svg"></p>                                    
                            <h2>Related Articles</h2> 
                        </div>
                    </div>
                    <div class="hx3"></div>
                    <div class="sidenews_row">
                        <div class="sidenews_item">
                            <div class="news_imgtitle">
                                <div class="news_img">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/news02.jpg">
                                </div>
                                <div class="newsitem_title">
                                    <h3>ここにタイトルテキストがあります。ここにタイトルテキストがあります。ここにタイトルテキストがあります。</h3>
                                </div>
                            </div>
                            <div class="news_daterow">
                                <div class="news_date">2023.7.18</div>
                                <div class="news_cat">WSOP</div>
                            </div>
                        </div>
                        <div class="sidenews_item">
                            <div class="news_imgtitle">
                                <div class="news_img">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/news02.jpg">
                                </div>
                                <div class="newsitem_title">
                                    <h3>ここにタイトルテキストがあります。ここにタイトルテキストがあります。ここにタイトルテキストがあります。</h3>
                                </div>
                            </div>
                            <div class="news_daterow">
                                <div class="news_date">2023.7.18</div>
                                <div class="news_cat">WSOP</div>
                            </div>
                        </div>
                        <div class="sidenews_item">
                            <div class="news_imgtitle">
                                <div class="news_img">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/news02.jpg">
                                </div>
                                <div class="newsitem_title">
                                    <h3>ここにタイトルテキストがあります。ここにタイトルテキストがあります。ここにタイトルテキストがあります。</h3>
                                </div>
                            </div>
                            <div class="news_daterow">
                                <div class="news_date">2023.7.18</div>
                                <div class="news_cat">WSOP</div>
                            </div>
                        </div>
                    </div>
                    <div class="hx4"></div>
                </div>
            </div> -->
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
