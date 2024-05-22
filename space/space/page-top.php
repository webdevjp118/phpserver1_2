<?php
echo $_SESSION['country_code']; echo "<br>";
echo $_SESSION['top_enabled']; echo "<br>";
if(session_id()) {
	$country_code = $_SESSION['country_code'];
	$top_enabled = $_SESSION['top_enabled'];
	if($country_code != "JP") {
		if($top_enabled != 'true') {
			// wp_redirect(home_url().'/lp/');
			// exit;
		}
	}
}
get_header();
?>

<section id="contain">    	        
    <div class="banner_block_hp">
        <div class="banner_video_hp">
            <!-- <video class="video-div" data-type="mp4" src="http://192.168.1.31/space/wp2/wp-content/uploads/2023/04/video.mp4" loop muted playsinline autoplay></video> -->
            <video class="video-div" data-type="mp4" src="https://spacexone.com/cms/wp-content/uploads/2023/04/video.mp4" loop muted playsinline autoplay></video>
            
        </div>  
        <div class="container_banner_back">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 banner_block_in_hp">                     	
                        <div class="banner_middle_hp banner_middle_tp">
                            <div class="banner_title_tp">
                                社会へ貢献し<br />
                                挑戦し続ける<br />
                                エクセレントカンパニーへ
                            </div>	
                        </div>                                               
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
        </div>            
        <div class="clearfix"></div>
    </div>        
    <div class="news_block_tp">             
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 news_block_in_tp">
                    <div class="common_title_hp">
                        <h2>NEWS</h2> 
                        <p>お知らせ</p>                                       
                    </div>                    	
                    <div class="news_middle_tp">
                        <div class="news_top_tp">
<?php
$args = array(
    'post_type' => 'post',
    'paged' => get_query_var('paged'),
    'orderby' => 'publish_date',
    'order' => 'DESC',
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
                            <div class="news_box_tp">
                                <a href="<?php echo $loop_permalink; ?>">
                                    <div class="news_img_tp">
                                        <img src="<?php echo $loop_thumb_url; ?>" alt=""/>
                                    </div>
                                    <div class="news_row_tp">
                                        <div class="news_date_tp">
                                            <?php echo $loop_date; ?>
                                        </div>
                                        <div class="news_boxtitle_tp">
                                            <?php echo $loop_category_name; ?>
                                        </div>
                                    </div>
                                    <div class="news_info_tp">
                                        <h4><?php echo $loop_title; ?></h4>
                                        <p><?php echo $loop_content; ?></p>
                                    </div>
                                </a>
                            </div>
<?php
    endwhile;
endif;
?>                              
                        </div>	
                        <div class="news_btn_tp">
                            <a class="common_btn_hp" href="<?php echo get_site_url(); ?>/news/">
                                <span>
                                    ニュース一覧
                                </span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="23.302" height="5.669" viewBox="0 0 23.302 5.669">
                                <path id="Path_1" data-name="Path 1" d="M4421.406,2009.87l6.02,4.778h-21.868" transform="translate(-4405.558 -2009.478)" fill="none" stroke="#fff" stroke-width="1"/>
                                </svg>
                            </a>
                        </div>
                    </div>                                               
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>            
        <div class="clearfix"></div>
    </div>                   
    <div class="service_block_tp">             
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 service_block_in_tp">
                    <div class="container">
                        <div class="common_title_hp">
                            <h2>SERVICE</h2> 
                            <p>事業案内</p>                                       
                        </div>               
                    </div>     	
                    <div class="service_middle_tp">
                        <div class="service_circle_tp">
                            <img class="rot360" src="<?php echo get_stylesheet_directory_uri(); ?>/images/service_circle1.svg" alt=""/>
                            <div class="service_circleimg_tp">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/service_circle2.svg" alt=""/>
                            </div>
                        </div>
                        <div class="service_top_tp">                            	
                            <div class="service_box_tp">
                                <div class="special_col js_tgt">
				                    <p class="special_no">01</p>
                                    <div class="special_img_wrap">
                                        <div class="special_img_div">
                                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/service_img1.png" alt="">
                                            <div class="special_img_cover"></div>
                                        </div>
                                        <div class="special_img_back"></div>
                                    </div>
                                    <h3 class="special_title_wrap">
                                        <span class="special_jp">福島通販</span>
                                        <span class="special_en">
                                            <span class="special_en_title">eコマース</span>
                                        </span>
                                    </h3>
                                </div>
                                <div class="service_right_tp">
                                    <div class="service_info_tp">
                                        <h4>福島通販</h4>
                                        <p>福島県内の240事業者、700商品以上を取り扱う福島県産品最大級のオンラインストア「ふくしま市場」などを運営。福島の美味しい食べ物、日本酒、贈り物などを販売しています。</p>
                                    </div>
                                    <div class="service_btn_tp">
                                        <a class="common_btn_hp border_btn_hp" href="<?php echo get_site_url(); ?>/ecommerce/">
                                            <span>
                                                more
                                            </span>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="23.302" height="5.669" viewBox="0 0 23.302 5.669">
                                            <path id="Path_1" data-name="Path 1" d="M4421.406,2009.87l6.02,4.778h-21.868" transform="translate(-4405.558 -2009.478)" fill="none" stroke="#22AC38" stroke-width="1"/>
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="service_box_tp service_revrse_tp">
                                <div class="special_col ex_right js_tgt">
				                    <p class="special_no">02</p>
                                    <div class="special_img_wrap">
                                        <div class="special_img_div">
                                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/service_img2.png" alt="">
                                            <div class="special_img_cover"></div>
                                        </div>
                                        <div class="special_img_back"></div>
                                    </div>
                                    <h3 class="special_title_wrap">
                                        <span class="special_jp">販売・営業</span>
                                        <span class="special_en">
                                            <span class="special_en_title">Sales</span>
                                        </span>
                                    </h3>
                                </div>
                                <div class="service_right_tp">
                                    <div class="service_info_tp">
                                        <h4>販売・営業</h4>
                                        <p>企画からクリエイティブ、イベント運営まで、社内一貫体制で行います。コミュニケーションを大切に、御社の課題やニーズを的確に捉え、最適なソリューションを提案します。</p>
                                    </div>
                                    <div class="service_btn_tp">
                                        <a class="common_btn_hp border_btn_hp" href="<?php echo get_site_url(); ?>/sales/">
                                            <span>
                                                more
                                            </span>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="23.302" height="5.669" viewBox="0 0 23.302 5.669">
                                            <path id="Path_1" data-name="Path 1" d="M4421.406,2009.87l6.02,4.778h-21.868" transform="translate(-4405.558 -2009.478)" fill="none" stroke="#22AC38" stroke-width="1"/>
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="service_box_tp">
                                <div class="special_col js_tgt">
				                    <p class="special_no">03</p>
                                    <div class="special_img_wrap">
                                        <div class="special_img_div">
                                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/service_img3.png" alt="">
                                            <div class="special_img_cover"></div>
                                        </div>
                                        <div class="special_img_back"></div>
                                    </div>
                                    <h3 class="special_title_wrap">
                                        <span class="special_jp">ドローン</span>
                                        <span class="special_en">
                                            <span class="special_en_title">Drone</span>
                                        </span>
                                    </h3>
                                </div>
                                <div class="service_right_tp">
                                    <div class="service_info_tp">
                                        <h4>ドローン</h4>
                                        <p>空中から水中までドローン事業を展開。国内有数の「福島ドローンスクール」をはじめとするスクール事業、販売実績No.1※の水中ドローン機体販売など、幅広く事業を行っています。</p>
                                    </div>
                                    <div class="service_btn_tp">
                                        <a class="common_btn_hp border_btn_hp" href="<?php echo get_site_url(); ?>/drone/">
                                            <span>
                                                more
                                            </span>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="23.302" height="5.669" viewBox="0 0 23.302 5.669">
                                            <path id="Path_1" data-name="Path 1" d="M4421.406,2009.87l6.02,4.778h-21.868" transform="translate(-4405.558 -2009.478)" fill="none" stroke="#22AC38" stroke-width="1"/>
                                            </svg>
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
    <div class="consluting_block_tp">             
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 consluting_block_in_tp">                    	                    	
                    <div class="consluting_middle_tp">                      	                   
                        <div class="consluting_img_tp">
                                <a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/consluting_img1.png" alt=""/></a>
                            </div>    	                           
                        <div class="consluting_right_tp">
                            <div class="consluting_box_tp">
                                <div class="consluting_grid_tp">
                                    <div class="common_title_hp">
                                        <h2>Consluting</h2> 
                                        <p>コンサルティング</p>                                       
                                    </div>
                                    <div class="consluting_btn_tp">
                                        <a class="common_btn_hp border_btn_hp" href="<?php echo get_site_url(); ?>/consulting/">
                                            <span>
                                                more
                                            </span>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="23.302" height="5.669" viewBox="0 0 23.302 5.669">
                                            <path id="Path_1" data-name="Path 1" d="M4421.406,2009.87l6.02,4.778h-21.868" transform="translate(-4405.558 -2009.478)" fill="none" stroke="#22AC38" stroke-width="1"/>
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                                <div class="consluting_info_tp">
                                    「ドローン事業をはじめたい」「地域を盛り上げたい」「通販事業を強化したい」など、事業に関する課題や困りごとがあれば、スペースワンにご相談ください。
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
    <div class="about_block_tp">             
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 about_block_in_tp">                    	                    	
                    <div class="about_middle_tp">                      	                                                  	                           
                        <div class="about_top_tp">                            	
                            <div class="about_left_tp">
                                <div class="common_title_hp">
                                    <h2>ABOUT</h2>                                                                          
                                </div>	
                                <div class="about_info_tp">
                                    私たちは福島から事業をスタートしました。<br />
                                    現在は東京にも事業所を構え<br />
                                    <span>「社会に貢献し、挑戦し続けるエクセレントカンパニーへ」を</span><br />
                                    経営理念に、福島から東京、そして世界へと事業を拡げています。
                                </div>
                                <div class="about_row_tp">
                                    <div class="about_btn_tp">
                                        <a class="common_btn_hp" href="<?php echo get_site_url(); ?>/about/">
                                            <span>
                                                About us
                                            </span>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="23.302" height="5.669" viewBox="0 0 23.302 5.669">
                                            <path id="Path_1" data-name="Path 1" d="M4421.406,2009.87l6.02,4.778h-21.868" transform="translate(-4405.558 -2009.478)" fill="none" stroke="#fff" stroke-width="1"/>
                                            </svg>
                                        </a>
                                    </div>
                                    <div class="about_btn_tp">
                                        <a class="common_btn_hp" href="<?php echo get_site_url(); ?>/about/">
                                            <span>
                                                沿革
                                            </span>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="23.302" height="5.669" viewBox="0 0 23.302 5.669">
                                            <path id="Path_1" data-name="Path 1" d="M4421.406,2009.87l6.02,4.778h-21.868" transform="translate(-4405.558 -2009.478)" fill="none" stroke="#fff" stroke-width="1"/>
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                                <div class="about_grid_tp">
                                    <div class="about_img1_tp">
                                        <a class="disable_link" href="javascript:void(0)"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/about_img2.png" alt=""/></a>
                                    </div>
                                    <div class="about_logo_tp">
                                        <a class="disable_link" href="javascript:void(0)"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/about_img3.png" alt=""/></a>
                                    </div>
                                </div>
                            </div>
                            <div class="about_right_tp">
                                <a href="javascript:void(0)"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/about_img1.png" alt=""/></a>
                            </div>
                        </div>
                    </div>                                               
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>            
        <div class="clearfix"></div>
    </div>
    <div class="contact_block_tp">             
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 contact_block_in_tp">                    	                    	                    	
                    <div class="contact_middle_tp">                      	                                                  	                           
                        <div class="contact_top_tp">
                            <div class="contact_left_tp">
                                <div class="common_title_hp common_white_hp">
                                    <h2>Contact</h2>
                                    <p>お問い合わせ</p>                                                                          
                                </div>
                                <div class="contact_info_tp">
                                    その他ご質問などお気軽にお問い合わせください。
                                </div>
                            </div>
                            <div class="contact_right_tp">
                                <a class="common_btn_hp border_btn_hp border_btn_back_hp" href="<?php echo get_site_url(); ?>/contact/">
                                    <svg class="main_icon" xmlns="http://www.w3.org/2000/svg" width="18.059" height="14.333" viewBox="0 0 18.059 14.333">
                                        <g id="Icon_feather-mail" data-name="Icon feather-mail" transform="translate(-0.97 -2.833)">
                                        <path id="Path_213" data-name="Path 213" d="M3.333,3.333H16.667A1.672,1.672,0,0,1,18.333,5V15a1.672,1.672,0,0,1-1.667,1.667H3.333A1.672,1.672,0,0,1,1.667,15V5A1.672,1.672,0,0,1,3.333,3.333Z" fill="none" stroke="#22ac38" stroke-linecap="round" stroke-linejoin="round" stroke-width="1"/>
                                        <path id="Path_214" data-name="Path 214" d="M18.333,5,10,10.833,1.667,5" fill="none" stroke="#22ac38" stroke-linecap="round" stroke-linejoin="round" stroke-width="1"/>
                                        </g>
                                    </svg>
                                    <span>
                                        お問い合わせ
                                    </span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="23.302" height="5.669" viewBox="0 0 23.302 5.669">
                                    <path id="Path_1" data-name="Path 1" d="M4421.406,2009.87l6.02,4.778h-21.868" transform="translate(-4405.558 -2009.478)" fill="none" stroke="#22AC38" stroke-width="1"/>
                                    </svg>
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

<?php
get_footer();
