<?php
get_header();
if(isset($_POST['submit-confirm']) && ($_POST['submit-confirm'] == 'submit-confirm')) {

    $field11 = isset($_POST['field11']) ? $_POST['field11']: '';
    $field12 = isset($_POST['field12']) ? $_POST['field12']: '';
    $field13 = isset($_POST['field13']) ? $_POST['field13']: '';
    $field14 = isset($_POST['field14']) ? $_POST['field14']: '';
    $field2 = isset($_POST['field2']) ? $_POST['field2']: '';
    $field3 = isset($_POST['field3']) ? $_POST['field3']: '';
    $field4 = isset($_POST['field4']) ? $_POST['field4']: '';
    $field5 = isset($_POST['field5']) ? $_POST['field5']: '';
    $field6 = isset($_POST['field6']) ? $_POST['field6']: '';
    $field7 = isset($_POST['field7']) ? $_POST['field7']: '';
    $field8 = isset($_POST['field8']) ? $_POST['field8']: '';
    $field9 = isset($_POST['field9']) ? $_POST['field9']: '';
    $field10 = isset($_POST['field10']) ? $_POST['field10']: '';
    
} else {
    echo '<script>location.href="'.home_url().'/sightseeing/"</script>';
}
?>
<!-- CONTAIN_START -->
<section id="contain">    	            	
    <div class="confirm_block_cip">             
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 confirm_block_in_cip">                    	
                    <div class="inquiries_title_cp confirm_change_cip">       
                        <h2>以下の内容で送信してよろしいですか?</h2>
                    </div>
                    <form action="<?php echo get_site_url(); ?>/sightseeing-send/" method="post" enctype="multipart/form-data">
                    <div class="confirm_middle_cip">                        	                      		
                        <div class="confirm_boxes_cip">
                            <div class="confirm_box_cip">
                                <div class="confirm_box_left_cip">
                                    お名前
                                </div>
                                <div class="confirm_box_right_cip">
                                    <?php echo $field11.'　'.$field12.'（'.$field13.'　'.$field14.'）'; ?>
                                </div>
                                <input type="hidden" name="field11" value="<?php echo $field11; ?>">
                                <input type="hidden" name="field12" value="<?php echo $field12; ?>">
                                <input type="hidden" name="field13" value="<?php echo $field13; ?>">
                                <input type="hidden" name="field14" value="<?php echo $field14; ?>">
                            </div>
                            <div class="confirm_box_cip">
                                <div class="confirm_box_left_cip">
                                    電話番号
                                </div>
                                <div class="confirm_box_right_cip">
                                    <?php echo $field2; ?>
                                </div>
                                <input type="hidden" name="field2" value="<?php echo $field2; ?>">
                            </div>
                            <div class="confirm_box_cip">
                                <div class="confirm_box_left_cip">
                                    メールアドレス
                                </div>
                                <div class="confirm_box_right_cip">
                                    <?php echo $field3; ?>
                                </div>
                                <input type="hidden" name="field3" value="<?php echo $field3; ?>">
                            </div>
                            <div class="confirm_box_cip">
                                <div class="confirm_box_left_cip">
                                    ご利用日時
                                </div>
                                <div class="confirm_box_right_cip">
                                    <?php echo $field4; ?>
                                </div>
                                <input type="hidden" name="field4" value="<?php echo $field4; ?>">
                            </div>
                            <div class="confirm_box_cip">
                                <div class="confirm_box_left_cip">
                                    ご利用人数
                                </div>
                                <div class="confirm_box_right_cip">
                                    <?php echo $field5; ?>
                                </div>
                                <input type="hidden" name="field5" value="<?php echo $field5; ?>">
                            </div>
                            <div class="confirm_box_cip">
                                <div class="confirm_box_left_cip">
                                    希望する車種 
                                </div>
                                <div class="confirm_box_right_cip">
                                    <?php echo $field6; ?>
                                </div>
                                <input type="hidden" name="field6" value="<?php echo $field6; ?>">
                            </div>
                            <div class="confirm_box_cip">
                                <div class="confirm_box_left_cip">
                                    ご希望のコース
                                </div>
                                <div class="confirm_box_right_cip">
                                    <?php echo $field7; ?>
                                </div>
                                <input type="hidden" name="field7" value="<?php echo $field7; ?>">
                            </div>
                            <div class="confirm_box_cip">
                                <div class="confirm_box_left_cip">
                                    出発地（名古屋市内の駅、ホテル、ご自宅など）
                                </div>
                                <div class="confirm_box_right_cip">
                                    <?php echo $field8; ?>
                                </div>
                                <input type="hidden" name="field8" value="<?php echo $field8; ?>">
                            </div>
                            <div class="confirm_box_cip">
                                <div class="confirm_box_left_cip">
                                    到着地（名古屋市内の駅、ホテル、ご自宅、大須エリアなど）
                                </div>
                                <div class="confirm_box_right_cip">
                                    <?php echo $field9; ?>
                                </div>
                                <input type="hidden" name="field9" value="<?php echo $field9; ?>">
                            </div>
                            <div class="confirm_box_cip">
                                <div class="confirm_box_left_cip">
                                    その他のお問合せ
                                </div>
                                <div class="confirm_box_right_cip">
                                    <?php echo $field10; ?>
                                </div>
                                <input type="hidden" name="field10" value="<?php echo $field10; ?>">
                            </div>
                        </div>
                        <div class="confirm_btns_cip">
                            <div class="inquiry_btn_cp">
                                <input type="hidden" name="submit-confirm" value="submit-confirm">
                                <button type="submit">送信する</button>
                            </div>
                            <div class="inquiry_btn_cp confirm_btn_change_cip">
                                <button onclick="history.back()">戻る</button>
                            </div>
                        </div>
                    </div>                                               
                    </form>
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
