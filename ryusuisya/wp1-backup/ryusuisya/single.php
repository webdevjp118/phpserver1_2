<?php
get_header('salon');
global $wp_query;
$query = $wp_query;
?>
<?php
if ( $query->have_posts() ) :
    while ( $query->have_posts() ) :
        $query->the_post();
        $loop_id = get_the_id();
        $loop_title = get_the_title();
        $loop_content = get_the_excerpt();
        $loop_date = get_the_date('Y年m月d日');
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
<section id="contain"> 
    <div class="introduction_main_ip">
        <video id="Mp4Video" class="video-div" data-type="mp4" src="<?php echo get_stylesheet_directory_uri(); ?>/images/Top.mp4" loop muted playsinline autoplay></video>
    </div> 
    <div class="movie_block_smp">             
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 movie_block_in_smp">  
                    <div class="common_title_hp common_change_hp">
                        <h2><?php echo $loop_category_name; ?></h2>
                    </div>           
                    <div class="salon_main_img_sap">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/img_7.png" alt="" />
                        </div>
                    <div class="movie_middle_smp"> 
                        <div class="movie_top_smp">
                            <div class="movie_box_smp">
                                <div class="movie_box_top_smp">
                                    <div class="movie_title_smp">
                                        <h3><?php echo $loop_title; ?></h3>
                                        <p><?php echo $loop_date; ?></p>
                                    </div>
                                    <?php
                                        if($loop_category_name == 'MOVIE') {
                                            echo '<div class="movie_img_smp">';        
                                            echo get_field('movie');
                                            echo '</div>';
                                        }
                                    ?>
                                    <div class="salon_info_smp">
                                        <div class="pmhwp">
                                            <?php the_content(); ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="movie_box_bottom_smp">
                                    <div class="movie_box_toppart_smp">
                                        <div class="movie_box_title_smp">
                                            名前
                                        </div>
                                        <div class="movie_box_comment_smp">
                                            <textarea placeholder="コメントする..."></textarea>
                                        </div>
                                        <div class="movie_box_btn_smp">
                                            <a href="#" class="common_btn_hp">コメント</a>
                                        </div>
                                    </div>
                                    <div class="movie_box_bottompart_smp">
                                        <div class="movie_box_in_smp">
                                            <div class="movie_box_grid_smp">
                                                <div class="movie_box_name_smp">
                                                    名前
                                                </div>
                                                <div class="movie_box_date_smp">
                                                    OOOO年0月0日 00:00
                                                </div>
                                            </div>
                                            <div class="movie_box_info_smp">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. 
                                                    Risus commodo viverra maecenas accumsan lacus vel facilisis. </p>
                                                <h3>返信</h3>
                                            </div>
                                        </div>
                                        <div class="movie_box_in_smp">
                                            <div class="movie_box_grid_smp">
                                                <div class="movie_box_name_smp">
                                                    名前
                                                </div>
                                                <div class="movie_box_date_smp">
                                                    OOOO年0月0日 00:00
                                                </div>
                                            </div>
                                            <div class="movie_box_info_smp">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. 
                                                    Risus commodo viverra maecenas accumsan lacus vel facilisis. </p>
                                                <h3>返信</h3>
                                            </div>
                                        </div>
                                        <div class="movie_box_in_smp">
                                            <div class="movie_box_grid_smp">
                                                <div class="movie_box_name_smp">
                                                    名前
                                                </div>
                                                <div class="movie_box_date_smp">
                                                    OOOO年0月0日 00:00
                                                </div>
                                            </div>
                                            <div class="movie_box_info_smp">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. 
                                                    Risus commodo viverra maecenas accumsan lacus vel facilisis. </p>
                                                <h3>返信</h3>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="movie_box_bottom_btn_smp">
                                        <a href="#" class="common_btn_hp">< Back</a>
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
</section>
<!-- CONTAIN_END -->
<?php
    endwhile;
endif;
?>
<!-- FOOTER_START -->
	<footer id="footer" class="footer_change_sop footer_change_trp">
    	<div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 footer_in_hp footer_change_hp">
                    <div class="footer_middle_hp">
                        <div class="footer_top_hp">
                            <div class="footer_box_hp">
                                <div class="footer_img_hp">
                                    <a href="https://www.youtube.com/@ryusuisya"> 
                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/footer_img.png" alt="" />
                                    </a>
                                </div>
                                <div class="footer_img_hp">
                                    <a href="https://twitter.com/ryusuisya"> 
                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/footer_img2.png" alt="" />
                                    </a>
                                </div> 
                                <div class="footer_img_hp">
                                	<a href="#">
                                    	<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/footer_logo.png" alt="" />	
                                    </a>
                                </div>                                                         
                            </div>
                            <div class="footer_copyright_sop">                                                                                   
                            	©️All rights reserved.
                            </div>
                        </div>                              
                        <div class="clearfix"></div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
        <div class="clearfix"></div>
    </footer>
<!-- FOOTER_END -->
<?php
get_footer('salon');
