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
                                <h1>We are <br>"Robotics Service <br>Provider"</h1>
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
                            We are <br>Robotics Service Provider"
                            </div>
                            <div class="humans_info_hp">
                                <p>Japan's shrinking workforce is unstoppable.<br>
The era of supplementing the labor force with service robots will surely arrive.<br>
We are aiming for a "joyful society where people and robots work together" <br>and believe that robots should help people, not take away their jobs.<br>
We believe that robots should help people, not take away their jobs.</p>
                                <p>We propose that our customers' work becomes "easier" <br>and "more enjoyable" with the presence of robots.</p>
                                <p>We are a company with expertise in the effective use of robots.<br>
We design and manufacture robot systems such as service robots in general, catering robots, delivery robots, and robots for restaurants.<br>
We provide consultation on all aspects of service robots, including the design and <br>production of robot systems such as catering robots, delivery robots, <br>and robots for restaurants, as well as introduction <br>and operation support.
We provide consultation on all aspects of service robots.</p>
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
                                    <a href="#">
                                        <div class="slider_box_img_hp">
                                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/slider_img.png" alt="" />
                                        </div>
                                        <div class="slider_box_title_hp">
                                        Cooking and Customer Service Robot Solutions
                                        </div>
                                    </a>
                                </div>
                                <div class="slider_box_hp">
                                    <a href="#">
                                        <div class="slider_box_img_hp">
                                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/slider_img2.png" alt="" />
                                        </div>
                                        <div class="slider_box_title_hp">
                                        In-building logistics robot solutions
                                        </div>
                                    </a>
                                </div>
                                <div class="slider_box_hp">
                                    <a href="#">
                                        <div class="slider_box_img_hp">
                                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/slider_img3.png" alt="" />
                                        </div>
                                        <div class="slider_box_title_hp">
                                        Robot utilization consulting
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
                                    Cafe Robot Package
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
                                    Delivery Robot DR1
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
                            Robot introduction 1 hour free online advice is also available
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
