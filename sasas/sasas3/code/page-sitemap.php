<?php
get_header();
?>
<!-- CONTAIN_START -->
<section id="contain">    	        
    <div class="instead_head"></div>
    <div class="pg_fv">
        <div class="cwidth14">
            <div class="pgfv_title"><h1>サイトマップ</h1></div>
        </div>
    </div>
    <div class="pg_frame">
        <div class="hx6"></div>
        <div class="pgf_inner">
            <div class="pg_h2"><h2>トップページ（名古屋給湯器交換センター）</h2></div>
            <div class="sitemap_row">
                <div class="sitemap_col">
                    <div class="sitemap_menu"><a href="<?php echo get_site_url(); ?>/case/">交換工事例</a></div>
                    <div class="sitemap_menu"><a href="<?php echo get_site_url(); ?>/product/">取扱商品一覧</a></div>
<?php
$related_args = array(
	'post_type' => 'maker',
	'posts_per_page' => -1,
	'post_status' => 'publish',
);
$query = new WP_Query( $related_args );
if ( $query->have_posts() ) :
    while ( $query->have_posts() ) :
        $query->the_post();
        $loop_id = get_the_id();
        $loop_title = get_the_title();
        $loop_permalink = get_the_permalink($loop_id);
?>
                    <div class="sitemap_submenu"><a href="<?php echo $loop_permalink; ?>"><?php echo $loop_title.'給湯器'; ?></a></div>
<?php
    endwhile;
endif;
?>                    
                </div>
                <div class="sitemap_col">
                    <div class="sitemap_menu"><a href="<?php echo get_site_url(); ?>/select/">給湯器の選び方</a></div>
                    <div class="sitemap_menu"><a href="<?php echo get_site_url(); ?>/flow/">交換工事の流れ</a></div>
                    <div class="sitemap_menu"><a href="<?php echo get_site_url(); ?>/review/">お客様の声</a></div>
                    <div class="sitemap_menu"><a href="<?php echo get_site_url(); ?>/company/">運営会社</a></div>
                </div>
                <div class="sitemap_col">
                    <div class="sitemap_menu"><a href="<?php echo get_site_url(); ?>/contact/">お問い合わせ</a></div>
                    <div class="sitemap_menu"><a href="<?php echo get_site_url(); ?>/privacy/">プライバシーポリシー</a></div>
                    <div class="sitemap_menu"><a href="<?php echo get_site_url(); ?>/sitemap/">サイトマップ</a></div>
                </div>
            </div>
        </div>
        <div class="hx6"></div>
    </div>
    <div class="hx10"></div>
    <div class="pg_frame">
        <div class="hx6"></div>
        <div class="pgf_inner">
            <div class="pg_h2"><h2>名古屋エリアページ</h2></div>
            <div class="sitemap_row">
                <div class="sitemap_col">
                    <div class="sitemap_menu"><a href="<?php echo get_site_url(); ?>/ichinomiyashi/">一宮市</a></div>
                </div>
            </div>
        </div>
        <div class="hx6"></div>
    </div>
    <div class="hx10"></div>
</section>
<!-- CONTAIN_END -->
<?php
get_footer();
