<?php
get_header();
?>
<!-- CONTAIN_START -->
<section id="contain">    	        
    <div class="instead_head"></div>
    <div class="pg_fv">
        <div class="pgfv_title">
            <div class="cwidth10">
                <h1>
                    <span>【毛髪再生】メセル発毛HCR法</span><br>
                    アンケートフォーム
                </h1>
            </div>
        </div>
    </div>
    <div class="cwidth10">
        <div class="hx8"></div>
        <div class="cfsteps">
            <div class="cfstep1 X_3">1.アンケートの入力</div>
            <div class="cfstep2 X_3">2.内容の確認</div>
            <div class="cfstep3 X_3">3.送信完了</div>
        </div>
        <div class="hx6"></div>
    </div>
    <div class="cwidth10">
        <div class="thanks_block">
            <div class="thanks_inner">
                <div class="thanks_title">送信致しました。</div>
                <div class="hx5"></div>
                <div class="thanks_text">
                    アンケートへのご協力<br>
                    ありがとうございました。
                </div>
                <div class="thansk_img"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/thanks.svg"></div>
            </div>
        </div>
        <div class="hx10"></div>
        <div class="disf_hcvc">
            <a class="com_btn" href="<?php echo get_price_url(); ?>"><span>コース価格表ダウンロード</span></a>
        </div>
    </div>
    <div class="hx10"></div>
</section>
<!-- CONTAIN_END -->
<?php get_template_part('template-parts/footcontact'); ?>
<?php
get_footer();
