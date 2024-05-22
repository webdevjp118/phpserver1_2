<?php
get_header();
global $wp_query;
$query = $wp_query;
?>
<!-- CONTAIN_START -->
<section id="contain">    	        
    <div class="intro_width">
        <div class="pgtitle_block">
            <div class="pgtitle">
                <h1>News</h1>
            </div>
            <div class="pgdesc">
                「丹後・但馬の衣食住に役立ちたい」<br>
                地元の生活インフラとなっている食品スーパー事業。<br>
                昭和48年より食品小売業をスタート。<br>
                約50年に渡り、地元に根差した店舗運営を続けています。
            </div>
        </div>
        <div class="just_image">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/pg_news.jpg">
        </div>
    </div>
    <div class="intro_width">
        <div class="hx8"></div>
        <div class="news_row">
            <div class="news_left io fade upS">
                <div class="news_category">
<?php
$categories = get_categories();
foreach($categories as $category) {
   echo '<a href="' . get_category_link($category->term_id) . '">' . $category->name . '</a>';
}	
?>					
                    <!-- <a href="#">INFO</a>
                    <a href="#">EVENTS</a>
                    <a href="#">プレスリリース</a>
                    <a href="#">RECRUIT</a>
                    <a href="#">メディア掲載</a> -->
                </div>
            </div>
            <div class="news_right io fade upS">
				<div class="news_list">
<?php
if ( $query->have_posts() ) :
    while ( $query->have_posts() ) :
        $query->the_post();
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
                <a class="news_item" href="<?php echo $loop_permalink; ?>">
                    <div class="news_date"><?php echo $loop_date; ?></div>
                    <div class="news_text"><?php echo $loop_title; ?></div>
                </a>
<?php
    endwhile;
endif;	
?>		
				</div>
				<div class="news_pagination">
					<div class="pagination_wrap">
						<?php wp_pagenavi(array('query' => $query)); ?>
					</div>									
				</div>
            </div>
        </div>
        <div class="hx10"></div>
    </div>
</section>
<!-- CONTAIN_END -->
<?php
get_footer();
