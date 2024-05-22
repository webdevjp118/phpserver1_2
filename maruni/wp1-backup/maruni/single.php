<?php
get_header();
?>
<?php
if ( have_posts() ) :
    while ( have_posts() ) :
        the_post();
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
<!-- CONTAIN_START -->
<section id="contain" class="main_sections">    	        
    <div class="instead_head"></div>
    <div class="news_breadcrumb">
        <div class="breadcrumb_block">
            <a href="<?php echo get_site_url(); ?>/">ホーム</a>
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/bread_line.svg">
            <a href="<?php echo get_site_url(); ?>/news/">お知らせ</a>
        </div>
    </div>
    <div class="cwidth12">
        <div class="blog_area">
            <div class="hx6"></div>
            <div class="news_row_tp">
                <div class="blog_title">
                    <h1><?php echo $loop_title; ?></h1>
                </div>
                <div class="hx2"></div>
                <div class="news_datecat_tp">
                    <div class="news_date_tp"><?php echo $loop_date; ?></div>
                    <div class="news_cat_tp"><span><?php echo $loop_category_name; ?></span></div>
                </div>
                <div class="hx4"></div>
                <div class="pmhwp">
                    <?php the_content(); ?>
                </div>
                <div class="hx4"></div>
            </div>
        </div>
        <div class="hx6"></div>
    </div>
    <!-- FOOTER_START -->
    <footer id="footer">
        <div class="footer_block">
            <div class="page_top" id="gototop">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/page_top.svg">
            </div>
            <div class="footer_bg"></div>
            <div class="footer_wrap">
                <div class="footer_row">
                    <div class="footer_logo"> 
                        <a href="<?php echo get_site_url(); ?>/">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo_green.svg" alt=""/>
                        </a>
                    </div>
                    <div class="footer_menu">
                        <div class="footer_socials">
                            <a href="#" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/footer_insta.svg"></a>
                        </div>
                    </div>
                </div>
                <div class="footer_copyright">© maruni.clinic</div>
            </div>        
        </div>
    </footer>
    <!-- FOOTER_END -->
</section>
<?php
	endwhile;
endif;
?>
<!-- CONTAIN_END -->
<?php
get_footer();
