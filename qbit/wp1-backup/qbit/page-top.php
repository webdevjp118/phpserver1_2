<?php
get_header();
?>
<!-- CONTAIN_START -->
<section id="contain">    	        
    <div class="banner_block_hp">                     	
        <div class="container-fluid">
            <div class="row">
                <div class="col banner_block_in_hp">                    	
                    <div class="banner_middle_hp"> 
                        <div class="banner_top_hp">                            	
                            <div class="banner_img_hp">
                                <a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/banner_img.png" alt=""/></a>
                            </div>
                            <div class="banner_title_hp">                             	
                                <h1>人とロボットが協働する<br/>
                                楽しいサービスロボット<br/>
                                社会を実現する</h1>
                            </div>
                        </div>		     
                    </div>                                               
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>            
        <div class="clearfix"></div>
    </div>
    <div class="humans_block_hp" style="background:#DDE1E4 url(<?php echo get_stylesheet_directory_uri(); ?>/images/technology-img.png) no-repeat top center;">             
        <div class="container">
            <div class="row">
                <div class="col humans_block_in_hp">                    	
                    <div class="humans_middle_hp"> 
                        <div class="humans_top_hp">                            	
                            <div class="humans_title_hp">
                                人とロボットが協働する<br/>楽しいサービスロボット社会を実現する
                            </div>
                            <div class="humans_info_hp">
                                <p>日本の労働人口減少は止められず、<br/>
                                サービスロボットで労働力を補填する時代は必ずやってきます。<br/>
                                私たちは、『人とロボットが協働する楽しい社会』を目指しており、<br/>
                                ロボットは人の仕事を奪うのではなく、人を手助けする存在になるべきだと考えています。<br/>
                                ロボット活用でお客様の作業が「楽になり」、<br/>
                                ロボットが存在することで「楽しくなる」提案を行います。<br/></p>
                                <p>私たちは、ロボットを効果的に使うノウハウを持った企業です。<br/>
                                サービスロボット全般、配膳ロボットや配送ロボット、<br/>
                                飲食向けロボットなどロボットシステムの設計製作、導入運用支援など<br/>
                                サービスロボットに関するご相談全般を承ります。</p>
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
                <div class="col news_block_in_hp">                    	
                    <div class="common_title_hp">
                        <h2>News</h2>
                    </div>
                    <div class="news_middle_hp"> 
                        <div class="news_top_hp">                            	                                
<?php
$args = array(
    'post_type' => 'post',
    'posts_per_page' => 3, //page limit
);
$query = new WP_Query($args);
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
                            <div class="news_box_hp">
                                <a href="<?php echo $loop_permalink; ?>">
                                    <div class="img_wrap">
                                        <img src="<?php echo $loop_thumb_url; ?>" alt="" />
                                    </div>
                                    <div class="news_box_title_hp">
                                        <?php echo $loop_title; ?>
                                    </div>
                                    <div class="news_box_info_hp">
                                        <div class="news_box_img_hp">
                                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/news_dot_img.svg" alt="" />
                                        </div>
                                        <div class="news_box_subinfo_hp"> 
                                            <?php echo $loop_content; ?>
                                        </div>
                                    </div>
                                </a>
                            </div>
<?php
    endwhile;
endif;	
?>                             
                        </div>
                        <div class="news_btn_hp">
                            <a href="<?php echo get_site_url(); ?>/news/" class="common_btn_hp">View All <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/common_btn_icon.svg" alt="" /></a>
                        </div>		     
                    </div>                                               
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>            
        <div class="clearfix"></div>
    </div>
    <div class="solution_main_hp">
        <div class="solution_block_hp">             
            <div class="container">
                <div class="row">
                    <div class="col solution_block_in_hp">                    	                    	
                        <div class="solution_bg_hp" style="background:url(<?php echo get_stylesheet_directory_uri(); ?>/images/close-up_img.png) no-repeat top center; background-size:cover">
                        </div>
                        <div class="solution_middle_hp">                         	
                            <div class="common_title_hp solution_title_hp">
                            <h2>Solution</h2>
                        </div>
                        </div>                                               
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>            
            <div class="clearfix"></div>
        </div>
        <div class="slider_block_hp">             
            <div class="container-fluid">
                <div class="row">
                    <div class="col slider_block_in_hp">                    	                    	
                        <div class="slider_middle_hp">                         	
                            <div class="slider_boxes_hp owl-carousel owl-theme">
                                <div class="slider_box_hp">
                                    <a href="<?php echo get_site_url(); ?>/solution#tab1">
                                        <div class="slider_box_img_hp">
                                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/slider_img.png" alt="" />
                                        </div>
                                        <div class="slider_box_title_hp">
                                        調理接客ロボットソリューション
                                        </div>
                                    </a>
                                </div>
                                <div class="slider_box_hp">
                                    <a href="<?php echo get_site_url(); ?>/solution#tab2">
                                        <div class="slider_box_img_hp">
                                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/slider_img2.png" alt="" />
                                        </div>
                                        <div class="slider_box_title_hp">
                                            館内物流ロボットソリューション
                                        </div>
                                    </a>
                                </div>
                                <div class="slider_box_hp">
                                    <a href="<?php echo get_site_url(); ?>/solution#tab3">
                                        <div class="slider_box_img_hp">
                                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/slider_img3.png" alt="" />
                                        </div>
                                        <div class="slider_box_title_hp">
                                        ロボット活用コンサルティング
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
    </div>
    <div class="product_main_hp">
        <div class="product_main_img_hp">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/product_img.png" alt="" />
        </div>
        <div class="product_block_hp">             
            <div class="container">
                <div class="row">
                    <div class="col product_block_in_hp">                        	
                        <div class="product_bg_hp" style="background:#fff url(<?php echo get_stylesheet_directory_uri(); ?>/images/Who_img.png) no-repeat top center; background-size:cover">
                        </div>
                        <div class="product_middle_hp">                             	                        	
                            <div class="common_title_hp product_title_hp">
                            <h2>Product</h2>
                        </div>
                        </div>                                               
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>            
            <div class="clearfix"></div>
        </div>
        <div class="play_block_hp">             
            <div class="container">
                <div class="row">
                    <div class="col play_block_in_hp">                    	                    	
                        <div class="play_middle_hp">                         	
                            <div class="play_boxes_hp">
                                <div class="play_box_hp">
                                    <div class="video_obj">
                                        <video class="video_tag" data-type="mp4" src="<?php echo get_stylesheet_directory_uri(); ?>/images/caferobot.mp4"></video>
                                        <div class="video_button" style="background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/images/hard_img_5.png);">
                                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/play_btn.svg">
                                        </div>
                                    </div>
                                    <div class="play_info_hp">                                         
                                        カフェロボットパッケージ
                                    </div>
                                </div>
                                <div class="play_box_hp">
                                    <div class="video_obj">
                                        <video class="video_tag" data-type="mp4" src="<?php echo get_stylesheet_directory_uri(); ?>/images/deliveryrobot.mp4"></video>
                                        <div class="video_button" style="background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/images/play_img2.png);">
                                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/play_btn.svg">
                                        </div>
                                    </div>
                                    <div class="play_info_hp">                                         
                                        配送ロボットDR1（ディーアールワン）
                                    </div>
                                </div>
                            </div>
                            <div class="play_btn_hp">
                                <a href="<?php echo get_site_url(); ?>/product/" class="common_btn_hp">View All <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/common_btn_icon.svg" alt="" /></a>
                            </div>
                        </div>                                               
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>            
            <div class="clearfix"></div>
        </div>                                                                                                 
    </div>
    <div class="use_main_hp">        	
        <div class="use_block_hp" style="background:url(<?php echo get_stylesheet_directory_uri(); ?>/images/use_img.png) no-repeat top center; background-size:cover;">             
            <div class="container-fluid">
                <div class="row">
                    <div class="col use_block_in_hp">                        	                        	
                        <div class="use_middle_hp">                             	                        	
                            <div class="common_title_hp use_title_hp">
                            <h2>Use case</h2>
                        </div>
                        </div>                                               
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>            
            <div class="clearfix"></div>
        </div>
        <div class="case_block_hp">             
            <div class="container-fluid">
                <div class="row">
                    <div class="col case_block_in_hp">                    	                    	
                        <div class="case_middle_hp">                         	
                            <div class="case_boxes_hp owl-carousel owl-theme">
                                <div class="case_box_hp">
                                    <a href="#">
                                    <div class="case_box_img_hp">
                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/case_img.png" alt="" />
                                    </div>
                                    <div class="case_box_title_hp">
                                    変なカフェ
                                    </div>
                                    </a>
                                </div>
                                <div class="case_box_hp">
                                    <a href="#">
                                    <div class="case_box_img_hp">
                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/case_img2.png" alt="" />
                                    </div>
                                    <div class="case_box_title_hp">
                                    ビル内集荷配送サービス
                                    </div>
                                    </a>
                                </div>
                                <div class="case_box_hp">
                                    <a href="#">
                                    <div class="case_box_img_hp">
                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/case_img3.png" alt="" />
                                    </div>
                                    <div class="case_box_title_hp">
                                    ユニマットキャラバン　バリスタロボット
                                    </div>
                                    </a>
                                </div>
                                <div class="case_box_hp">
                                    <a href="#">
                                    <div class="case_box_img_hp">
                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/case_img4.png" alt="" />
                                    </div>
                                    <div class="case_box_title_hp">
                                    変なカフェ　ハウステンボス店
                                    </div>
                                    </a>
                                </div>
                                <div class="case_box_hp">
                                    <a href="#">
                                    <div class="case_box_img_hp">
                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/case_img5.png" alt="" />
                                    </div>
                                    <div class="case_box_title_hp">
                                    三笠会館　配膳ロボット
                                    </div>
                                    </a>
                                </div>
                                <div class="case_box_hp">
                                    <a href="#">
                                    <div class="case_box_img_hp">
                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/case_img6.png" alt="" />
                                    </div>
                                    <div class="case_box_title_hp">
                                    養老乃瀧　ゼロ件目酒場
                                    </div>
                                    </a>
                                </div>                                     
                            </div>
                            <div class="case_btn_hp">
                                <a href="<?php echo get_site_url(); ?>/usecase/" class="common_btn_hp">View All <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/common_btn_icon.svg" alt="" /></a>
                            </div>
                        </div>                                               
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>            
            <div class="clearfix"></div>
        </div>                                                                                                 
    </div>
    <div class="contact_block_hp">             
        <div class="contact_img_hp">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/contact_img.png" alt="" />
        </div>
        <div class="container">
            <div class="row">
                <div class="col contact_block_in_hp">                    	                    	
                    <div class="contact_middle_hp">                         	
                        <div class="contact_top_hp">
                        <div class="contact_left_hp">                  
                            <div class="contact_title_hp">
                                Contact
                            </div>
                            <div class="contact_subtitle_hp">
                                お問い合わせ
                            </div>
                            <div class="contact_info_hp">
                                ロボット導入 １時間無料オンラインアドバイスもやっています
                            </div>
                        </div>       
                        <div class="contact_right_hp">
                            <div class="contact_btn_hp">
                                <a href="<?php echo get_site_url(); ?>/contact/" class="common_btn_hp">View All <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/common_btn_icon.svg" alt="" /></a>
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
</section>
<!-- CONTAIN_END -->
<?php
get_footer();
