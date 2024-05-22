<?php
get_header('salon');
?>
<!-- CONTAIN_START -->
<section id="contain"> 
    <div class="introduction_main_ip">
        <video id="Mp4Video" class="video-div" data-type="mp4" src="<?php echo get_stylesheet_directory_uri(); ?>/images/Top.mp4" loop muted playsinline autoplay></video>
    </div> 
    <div class="page_block_slp">             
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 page_block_in_slp"> 
                    <div class="common_title_hp common_change_hp">
                        <h2>MY PAGE</h2>
                    </div>                   	
                    <div class="salon_main_img_sap">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/img_7.png" alt="" />
                        </div>
                    <div class="page_middle_slp"> 
                        <div class="page_box_slp">
                            <div class="page_box_top_slp">
                                <div class="page_row_slp">
                                    <div class="page_title_slp">
                                        ユーザーネーム
                                    </div>
                                    <div class="page_info_slp">
                                        OOO
                                    </div>
                                </div>
                                <div class="page_row_slp">
                                    <div class="page_title_slp">
                                        アカウント状態
                                    </div>
                                    <div class="page_info_slp">
                                        有効
                                    </div>
                                </div>
                                <div class="page_row_slp">
                                    <div class="page_title_slp">
                                        メンバーシップ
                                    </div>
                                    <div class="page_info_slp">
                                        オンラインサロンメンバー
                                    </div>
                                </div>
                                <div class="page_row_slp">
                                    <div class="page_title_slp">
                                        アカウントの 有効期限
                                    </div>
                                    <div class="page_info_slp">
                                        期限なし
                                    </div>
                                </div>
                            </div>
                            <div class="page_box_bottom_slp">
                                <div class="page_btn_slp">
                                    <a href="#" class="common_btn_hp">プロフィールを編集</a>
                                </div>
                                <div class="page_btn_slp">
                                    <a href="#" class="common_btn_hp">ログアウト</a>
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
get_footer();
