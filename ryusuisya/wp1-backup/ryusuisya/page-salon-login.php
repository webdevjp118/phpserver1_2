<?php
get_header('salon');
?>
<!-- CONTAIN_START -->
<section id="contain">
    <div class="introduction_main_ip">
        <video id="Mp4Video" class="video-div" data-type="mp4" src="<?php echo get_stylesheet_directory_uri(); ?>/images/Salon_001.mp4" loop muted playsinline autoplay></video>
    </div>     	        
    <div class="login_block_snp">             
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 login_block_in_snp"> 
                    <div class="login_middle_snp"> 
                        <div class="salon_top_sp login_box_snp">
                            <div class="login_box_in_snp">
                                <div class="salon_img_sp login_img_snp">
                                    <a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/salon_img.png" alt=""/></a>
                                </div>
                                <div class="common_title_hp common_size_snp">
                                    <h2>MEMBER LOGIN</h2>
                                </div>
                                <div class="login_input_main_snp">
                                    <div class="login_input1_snp">
                                        <input type="text" placeholder="Username or Email">
                                    </div>
                                    <div class="login_input1_snp">
                                        <input type="password" placeholder="パスワード">
                                    </div>    
                                </div>
                                <div class="login_radio_btn_snp">
                                    <div class="form-field-radio-main-cp">
                                        <div class="form-field-radio-cp">
                                            <label class="radio-container-cp">規約に同意する
                                                <input type="checkbox">
                                                <span class="checkmark-cp"></span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="salon_btn_sp login_btn_snp">
                                    <a href="#" class="common_btn_hp">Log In</a>
                                </div>
                                <div class="login_info_snp">
                                    <a href="#">パスワードをお忘れの方</a>
                                </div>
                            </div>    
                        </div>
                        <div class="login_middle_img_snp">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/img_6.png" alt="" />
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
