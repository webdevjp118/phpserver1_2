<?php
get_header();
?>
<!-- CONTAIN_START -->
<style>
    .csoon_sec {
        width: 100%;
        height: 30vh;
        display: flex;
        justify-content: center;
        align-items: center;        
    }
    .csoon_text {
        text-align: center;
        font-size: 30px;        
    }
</style>
<div class="state_vals is_top"></div>
<main>
    <div class="top_fv">
        <div class="tpfv_back">
            <div class="coiran_ani">
                <div class="coiran_pic1"></div>
                <div class="coiran_pic2"></div>
                <div class="coiran_pic3"></div>
                <div class="coiran_pic4"></div>
            </div>
        </div>
        <div class="tpfv_front">
            <div class="tpfv_content">
                <div class="tpfv_logo">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/tpfv_logo.svg">
                </div>
                <div class="tpfv_text">
                    <h1>GTO Wizard Lounge</h1>
                </div>
            </div>
        </div>
    </div>
    <?php get_template_part('template-parts/gto-banner'); ?>
    <div class="tpabout_block">
        <div class="hx6"></div>
        <div class="cwidth14">
            <div class="tpabout_title io fade upS">
                <div class="com_title"><h2>GTO Wizardとは？</h2></div>
            </div>
            <div class="hx2"></div>
            <div class="tpabout_desc io fade upS">
                GTO Wizardは30万個以上の計算されたソリューションを提供するウェブアプリケーションです。<br>
                どのようなスポットでも瞬時にアクセスすること可能です。<br>
                プリフロップからリバーまで、あらゆるシチュエーションを網羅し、デスクトップ及びモバイルでお楽しみいただけます。 
            </div>
            <div class="hx4"></div>
            <div class="tpabout_grid">
                <div class="tpabout_cell io fade upS">
                    <h3>プリフロップソリューション</h3>
                    <div class="hx2"></div>
                    <p>GTO Wizardで用いられているプリフロップソリューションは、レークに合わせて2種類用意されています。<br>
                        ご自身の環境に合わせた最適な戦略をご利用いただけます。</p>
                </div>
                <div class="tpabout_cell io fade upS">
                    <h3>ハンドの解析</h3>
                    <div class="hx2"></div>
                    <p>ハンドヒストリーをアップロードして、GTOで瞬時にミスを見つけることができます。リークを見つける最も効率の良い方法は、全てのミスをワンクリックで見つけることでしょう。 </p>
                </div>
                <div class="tpabout_cell io fade upS">
                    <h3>どこでもGTOを</h3>
                    <div class="hx2"></div>
                    <p>ありとあらゆるプリフロップとポストフロップにチャレンジできます。<br>
                        GTOの習得にこれ以上のない喜びを見つけていただけるはずです。</p>
                </div>
                <div class="tpabout_cell io fade upS">
                    <h3>終わらない進化</h3>
                    <div class="hx2"></div>
                    <p>我々は日夜、新たな発見を続けています。
                        6MAXのキャッシュゲームにとどまることなく、トーナメントも含めたありとあらゆるゲームを解明していきます。</p>
                </div>
            </div>
            <div class="hx2"></div>
            <div class="tpabout_btn io fade upS">
                <a class="com_btn" href="<?php echo get_site_url(); ?>/strategy/"><span>Strategy</span><div class="combtn_line"></div></a>
            </div>
        </div>
        <div class="hx4"></div>
    </div>
    <div class="tpevent_block">
        <div class="cwidth14">
            <div class="hx6"></div>
            <div class="tpevent_title io fade upS">
                <div class="com_title"><h2>Event</h2></div>
            </div>
            <div class="csoon_sec">
                <div class="csoon_text">Coming Soon</div>
            </div>
            <!-- <div class="hx4"></div>
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
            </div>
            <div class="hx4"></div>
            <div class="tpevent_btn io fade upS">
                <a class="com_btn" href="<?php echo get_site_url(); ?>/event/"><span>Event view</span><div class="combtn_line"></div></a>
            </div> -->
        </div>
    </div>
    <div class="tplayer_block">
        <div class="cwidth14">
            <div class="hx6"></div>
            <div class="tplayer_title io fade upS"><div class="com_title"><h2>GTO Wizard Lounge Master</h2></div></div>
            <div class="csoon_sec">
                <div class="csoon_text">Coming Soon</div>
            </div>
            <!-- <div class="hx4"></div>
            <div class="player_grid">
                <div class="player_item io fade upS">
                    <div class="player_in">
                        <div class="player_thumb">
                            <div class="player_img">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/player03.jpg">
                                <div class="plname_abs">_</div>
                            </div>
                        </div>
                        <div class="plrank_gold">
                            <div class="plrank_cap">TOTAL LIVE EARNINGS</div>
                            <div class="plrank_val">_</div>
                        </div>
                        <div class="plrank_gold">
                            <div class="plrank_cap">Japan All Time Money List</div>
                            <div class="plrank_val">_</div>
                        </div>
                        <div class="plrank_silver">
                            <div class="plrank_cap">_</div>
                            <div class="plrank_val">_</div>
                        </div>
                        <div class="plrank_silver">
                            <div class="plrank_cap">_</div>
                            <div class="plrank_val">_</div>
                        </div>
                        <div class="plrank_silver">
                            <div class="plrank_cap">_</div>
                            <div class="plrank_val">_</div>
                        </div>
                    </div>
                </div>
                <div class="player_item io fade upS">
                    <div class="player_in">
                        <div class="player_thumb">
                            <div class="player_img">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/player04.jpg">
                                <div class="plname_abs">_</div>
                            </div>
                        </div>
                        <div class="plrank_gold">
                            <div class="plrank_cap">TOTAL LIVE EARNINGS</div>
                            <div class="plrank_val">_</div>
                        </div>
                        <div class="plrank_gold">
                            <div class="plrank_cap">Japan All Time Money List</div>
                            <div class="plrank_val">_</div>
                        </div>
                        <div class="plrank_silver">
                            <div class="plrank_cap">_</div>
                            <div class="plrank_val">_</div>
                        </div>
                        <div class="plrank_silver">
                            <div class="plrank_cap">_</div>
                            <div class="plrank_val">_</div>
                        </div>
                        <div class="plrank_silver">
                            <div class="plrank_cap">_</div>
                            <div class="plrank_val">_</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tplayer_btn io fade upS">
                <a class="com_btn" href="<?php echo get_site_url(); ?>/player/"><span>Players</span><div class="combtn_line"></div></a>
            </div> -->
        </div>
    </div>
    <div class="hx4"></div>
    <div class="cwidth14">
        <div class="tpmenu_block">
            <div class="tpmenu_left">
                <div class="just_image io fade upS"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/tpmenu01.jpg"></div>
                <div class="tpmenu_title io fade upS"><div class="com_title"><h2>Menu</h2></div></div>
            </div>
            <div class="tpmenu_right">
                <div class="just_image io fade upS"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/tpmenu02.jpg"></div>
                <div class="hx4"></div>
                <!-- <div class="tpmenu_desc io fade upS">ここに概要タックストがあります。ここに概要タックストがあります。ここに概要タックストがあります。ここに概要タックストがあります。ここに概要タックストがあります。</div> -->
                <!-- <div class="hx4"></div> -->
                <div class="tpmenu_btn io fade upS">
                    <a class="com_btn" href="<?php echo get_site_url(); ?>/menu/"><span>Menu</span><div class="combtn_line"></div></a>
                </div>
            </div>
        </div>
    </div>
    <div class="hx6"></div>
    <div class="cwidth14">
        <div class="tpcompany_row">
            <div class="tpcompany_left">
                <div class="just_image io fade upS"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/tpcompany.jpg"></div>
                <div class="hx6"></div>
                <div class="tpcompany_logo io fade upS"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/header_logo.svg"></div>
                <div class="hx2"></div>
                <div class="tpcompany_name io fade upS"><h3>GTO Wizard Lounge</h3></div>
                <div class="hx2"></div>
                <div class="tpcompany_dl io fade upS">
                    <div class="tpcompany_dt">所在地</div><div class="tpcompany_dd">東京都港区赤坂3-14-1 コンチネンタル赤坂2F</div>
                </div>
                <div class="hx2"></div>
                <div class="tpcompany_dl io fade upS">
                    <div class="tpcompany_dt">TEL</div><div class="tpcompany_dd">03-6230-9559</div>
                </div>
                <!-- <div class="hx2"></div>
                <div class="tpcompany_dl io fade upS">
                    <div class="tpcompany_dt">営業時間</div><div class="tpcompany_dd">20:00〜4:00</div>
                </div> -->
            </div>
            <div class="tpcompany_right io fade upS">
                <div class="tpcompany_map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3241.1195816586073!2d139.73473217639867!3d35.67405743036712!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60188b8753b00733%3A0xfeaf9e2b97bead89!2z5pel5pys44CB44CSMTA3LTAwNTIg5p2x5Lqs6YO95riv5Yy66LWk5Z2C77yT5LiB55uu77yR77yU4oiS77yRIOOCs-ODs-ODgeODjeODs-OCv-ODq-OCouOCq-OCteOCq--8lCAyZg!5e0!3m2!1sja!2sus!4v1695777753522!5m2!1sja!2sus" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </div>
    <div class="hx10"></div>
</main>
<!-- CONTAIN_END -->
<?php
get_footer();
