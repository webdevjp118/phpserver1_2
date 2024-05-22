<?php
get_header();
?>
<!-- CONTAIN_START -->
<section id="contain">    	        
    <div class="banner_block_hp">             
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 banner_block_in_hp">                    	
                    <div class="banner_middle_hp">
                        <div class="banner_slider_hp">
                            <div class="owl-carousel owl-theme banner_slider">                                	
                                <div class="banner_top_hp">	
                                    <a href="#">
                                        <div class="banner_left_info_hp">	     
                                            安全・快適・<br/>迅速・安価
                                        </div>
                                        <div class="banner_right_img_hp">
                                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/banner_img.png" alt="" />
                                        </div>
                                    </a>
                                </div>
                                <div class="banner_top_hp">	
                                    <a href="#"> 
                                        <div class="banner_left_info_hp">	     
                                            安全・快適・<br/>迅速・安価
                                        </div>
                                        <div class="banner_right_img_hp">
                                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/banner_img2.png" alt="" />
                                        </div>
                                        </a>
                                </div>
                                <div class="banner_top_hp">	
                                    <a href="#">
                                        <div class="banner_left_info_hp">	     
                                            安全・快適・<br/>迅速・安価
                                        </div>
                                        <div class="banner_right_img_hp">
                                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/banner_img3.png" alt="" />
                                        </div>
                                    </a>  
                                </div>                                 	
                            </div>
                        </div>            
                    </div>                                               
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>            
        <div class="clearfix"></div>
    </div>
    <div class="topics_block_hp">             
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 topics_block_in_hp">                    	
                    <div class="topics_middle_hp">                        	
                        <div class="topics_top_hp">
                            <div class="common_title_hp">
                                <p>主要話題</p>
                                <h2>Topics</h2>
                            </div>
                            <div class="topics_btn_hp">
                                <a class="common_btn_hp" href="<?php echo get_category_link(get_cat_ID('topics')); ?>">
                                    詳しくみる<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/btn_svg.svg" alt="" />
                                </a>
                            </div>
                            <div class="topics_grid_hp">
                                <div class="topics_icon_hp swiper-button-prev swiper-button-prev-1">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/icon_2.svg" alt="" />
                                </div>
                                <div class="topics_icon_hp swiper-button-next swiper-button-next-1">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/icon_1.svg" alt="" />
                                </div>
                            </div>
                        </div>
                    </div>                                               
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>   
        <div class="topics_bottom_hp">
            <div class="swiper topics_slider">
                <div class="swiper-wrapper">
<?php
$query = new WP_Query( array( 
    'category_name' => 'topics', 
    'posts_per_page' => 10 
) ); 
if ( $query->have_posts() ) :
    while ( $query->have_posts() ) :
        $query->the_post();
        $loop_id = get_the_id();
        $loop_title = get_the_title();
        $loop_date = get_the_date('Y.m.d');
        $loop_permalink = get_the_permalink($loop_id);
        $loop_thumb_url = get_thumb_url($loop_id);
?>                    
                    <div class="swiper-slide topics_box_hp">
                        <a href="<?php echo $loop_permalink; ?>">
                            <div class="topics_img_hp">
                                <img src="<?php echo $loop_thumb_url; ?>" alt="" />
                            </div>
                            <div class="topics_in_hp">
                                <div class="topics_info_hp">
                                    <?php echo $loop_title; ?>
                                </div>
                                <div class="topics_date_hp">
                                    <?php echo $loop_date; ?>
                                </div>
                            </div>
                        </a>
                    </div>
<?php
    endwhile;
endif;	
?>              
                </div>
            </div>
        </div>         
        <div class="clearfix"></div>
    </div>
    <div class="cover_block_hp">             
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 cover_block_in_hp">                    	
                    <div class="cover_middle_hp">                        	
                        <div class="cover_img_hp">
                            <a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/image.png" alt="" /></a>
                        </div>
                    </div>                                               
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>            
        <div class="clearfix"></div>
    </div>
    <div class="sightseeing_block_hp">             
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 sightseeing_block_in_hp">                    	
                    <div class="sightseeing_middle_hp">                        	
                        <div class="sightseeing_boxes_hp">
                            <div class="sightseeing_box_hp">
                                <a href="<?php echo get_site_url(); ?>/tour/">
                                    <div class="sightseeing_img_hp">
                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/sightseeing_img1.png" alt="" />
                                    </div>
                                    <div class="sightseeing_title_hp">
                                        観光周遊タクシー
                                    </div>
                                </a>
                            </div>
                            <div class="sightseeing_box_hp">
                                <a href="#">
                                    <div class="sightseeing_img_hp">
                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/sightseeing_img2.png" alt="" />
                                    </div>
                                    <div class="sightseeing_title_hp">
                                        モリコロパーク直通タクシー
                                    </div>
                                </a>
                            </div>
                            <div class="sightseeing_box_hp">
                                <a href="#">
                                    <div class="sightseeing_img_hp">
                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/sightseeing_img3.png" alt="" />
                                    </div>
                                    <div class="sightseeing_title_hp">
                                        ハイヤー・車両管理請負
                                    </div>
                                </a>
                            </div>
                            <div class="sightseeing_box_hp">
                                <a href="#">
                                    <div class="sightseeing_img_hp">
                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/sightseeing_img4.png" alt="" />
                                    </div>
                                    <div class="sightseeing_title_hp">
                                        ドライバー採用情報
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>                                               
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>            
        <div class="clearfix"></div>
    </div>
    <div class="about_block_hp">             
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 about_block_in_hp">                    	
                    <div class="about_middle_hp">                        	
                        <div class="about_top_hp">
                            <div class="about_left_hp">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/about_img.png" alt="" />
                                <div class="about_left_box_hp">
                                <div class="about_left_box_img_hp">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/yellow-taxi.png" alt="" />
                                </div>    
                                <div class="about_left_box_info_hp">
                                    創業当時の黄色のタクシー
                                </div>
                            </div>
                            </div>                                
                            <div class="about_right_hp">
                                <div class="about_title_hp">
                                    <h3>About</h3>
                                    <h2>目指すのは<br/>「お客様に愛される」こと</h2>
                                </div>
                                <div class="about_info_hp" style="background:url(<?php echo get_stylesheet_directory_uri(); ?>/images/bg_img.png) no-repeat top right 20px; background-size:contain;">
                                    昭和26年「黄色いタクシー」の愛称で人気を博していた近鉄タクシー株式会社の名古屋支社を前身として、昭和28年に名古屋近鉄タクシー株式会社を<br/>
                                    設立しました。<br/>
                                    私たち、名古屋近鉄タクシーのモットーは「お客様第一主義」であり、お客様を　安全・快適・迅速・安価　に目的地までお送りすることをタクシーの使命として頑張っています。
                                </div>
                                <div class="about_btn_hp">
                                    <a class="common_btn_hp" href="<?php echo get_site_url(); ?>/about/">
                                        会社概要<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/btn_svg.svg" alt="" />
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>                                               
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>            
        <div class="clearfix"></div>
    </div>
    <div class="taxi_block_hp">             
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 taxi_block_in_hp">                    	
                    <div class="taxi_middle_hp">                        	
                        <div class="taxi_top_hp">
                            <div class="taxi_img_hp">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/taxi_img.png" alt="" />
                            </div>
                            <div class="taxi_right_hp">
                                <div class="taxi_info_hp">
                                    <div class="common_title_hp">
                                        <p>タクシー</p>
                                        <h2>Taxi</h2>
                                    </div>
                                    <div class="taxi_subinfo_hp">
                                        タクシーのお支払いでQRコード決済がご利用できます!ナビダイヤルは携帯電話からもご利用いただけます。
                                    </div>
                                    <div class="taxi_btn_hp">
                                        <a class="common_btn_hp" href="<?php echo get_site_url(); ?>/taxi/">
                                            詳しくみる<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/btn_svg.svg" alt="" />
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>                                               
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>            
        <div class="clearfix"></div>
    </div>
    <div class="taxi_block_hp taxi_change_hp">             
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 taxi_block_in_hp">                    	
                    <div class="taxi_middle_hp">                        	
                        <div class="taxi_top_hp">
                            <div class="taxi_img_hp">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/taxi_img2.png" alt="" />
                            </div>
                            <div class="taxi_right_hp">
                                <div class="taxi_info_hp">
                                    <div class="common_title_hp">
                                        <p>ハイヤー</p>
                                        <h2>Hire</h2>
                                    </div>
                                    <div class="taxi_subinfo_hp">
                                        ハイヤー、車両の運行管理請負、ジャンボタクシーのお問合せは
                                    </div>
                                    <div class="taxi_btn_hp">
                                        <a class="common_btn_hp" href="<?php echo get_site_url(); ?>/hire/">
                                            ハイヤーのご予約<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/btn_svg.svg" alt="" />
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>                                               
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>            
        <div class="clearfix"></div>
    </div>
    <div class="news_block_hp">             
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 news_block_in_hp">                    	
                    <div class="news_middle_hp">                        	
                        <div class="news_top_hp">
                            <div class="news_left_hp">
                                <div class="common_title_hp">
                                    <p>お知らせ</p>
                                    <h2>News</h2>
                                </div>
                                <div class="news_btn_hp">
                                    <a class="common_btn_hp" href="#">
                                        詳しくみる<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/btn_svg.svg" alt="" />
                                    </a>
                                </div>
                            </div>
                            <div class="news_right_hp"> 
<?php
$query = new WP_Query( array( 
    'posts_per_page' => 5,
    'category__not_in' => array(get_cat_ID('topics'))
) ); 
if ( $query->have_posts() ) :
    while ( $query->have_posts() ) :
        $query->the_post();
        $loop_id = get_the_id();
        $loop_title = get_the_title();
        $loop_date = get_the_date('Y.m.d');
        $loop_permalink = get_the_permalink($loop_id);
?>                    
                                <div class="news_box_hp">
                                    <a href="<?php echo $loop_permalink; ?>">
                                        <div class="news_box_title_hp">
                                            <?php echo $loop_date; ?>
                                        </div>
                                        <div class="news_box_info_hp">
                                            <?php echo $loop_title; ?>
                                        </div>
                                    </a>    
                                </div>
<?php
    endwhile;
endif;	
?> 

                            </div>
                        </div>
                    </div>                                               
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>            
        <div class="clearfix"></div>
    </div>
    <div class="contact_block_hp contact_change_hp" style="background:#fff url(<?php echo get_stylesheet_directory_uri(); ?>/images/contact-bg.png) no-repeat top center; background-size:cover;">             
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 contact_block_in_hp">                    	
                    <div class="contact_middle_hp">                        	
                        <div class="contact_top_hp">
                            <div class="common_title_hp">
                                <p>お問い合わせ</p>
                                <h2>Contact us</h2>
                            </div>
                            <div class="contact_grid_hp">
                                <div class="contact_subinfo_hp">
                                    お電話でお問い合わせ
                                </div>
                                <div class="contact_num_hp">
                                    052-231-4510
                                </div>
                            </div>
                            <div class="contact_btn_hp">
                                <a class="common_btn_hp" href="<?php echo get_site_url(); ?>/contact/">
                                    メールでお問い合わせ<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/btn_svg.svg" alt="" />
                                </a>
                            </div>
                        </div>
                    </div>                                               
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>            
        <div class="clearfix"></div>
    </div>	                                                         
</section>
<!-- CONTAIN_END -->

<?php
get_footer();
