<!-- <div class="ad_area">
    <div class="instead_head"></div>
    <div class="instead_gto"></div>
</div> -->
<div class="toplogo_block">
    <div class="poker_width">
        <div class="top_logo">
            <a href="<?php echo get_site_url(); ?>/"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo_silver.png"></a>
        </div>
        <div class="direct_block block_pc">
            <?php
                $tpevents = get_top_events();
                $live_link = "#";
                if(count($tpevents) > 0) {
                    $live_link = get_site_url()."/live-reporting/";
                }
            ?>
            <a class="direct_events" href="<?php echo $live_link; ?>">
                <div class="live_redcap_tp">LIVE EVENTS</div>
                <?php    
                    if(count($tpevents) > 0) {
                        for($i=0;$i<count($tpevents);$i++) {
                            echo '<div class="live_cur_tp">'.get_the_title($tpevents[$i]).'</div>';
                        }
                    }                      
                ?>
            </a>
        </div>
    </div>
</div>