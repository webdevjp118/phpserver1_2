<?php
get_header();
if(isset($_POST['submit-confirm']) && ($_POST['submit-confirm'] == 'submit-confirm')) {

    $field1 = isset($_POST['field1']) ? $_POST['field1']: '';
    $field2 = isset($_POST['field2']) ? $_POST['field2']: '';
    $field3 = isset($_POST['field3']) ? $_POST['field3']: '';
    $field4 = isset($_POST['field4']) ? $_POST['field4']: '';
    $field5 = isset($_POST['field5']) ? $_POST['field5']: '';
    
} else {
    echo '<script>location.href="'.home_url().'/contact/"</script>';
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
                    <form action="<?php echo get_site_url(); ?>/contact-send/" method="post" enctype="multipart/form-data">
                    <div class="confirm_middle_cip">                        	                      		
                        <div class="confirm_boxes_cip">
                            <div class="confirm_box_cip">
                                <div class="confirm_box_left_cip">
                                    お名前
                                </div>
                                <div class="confirm_box_right_cip">
                                    <?php echo $field1; ?>
                                </div>
                                <input type="hidden" name="field1" value="<?php echo $field1; ?>">
                            </div>
                            <div class="confirm_box_cip">
                                <div class="confirm_box_left_cip">
                                    メールアドレス
                                </div>
                                <div class="confirm_box_right_cip">
                                    <?php echo $field2; ?>
                                </div>
                                <input type="hidden" name="field2" value="<?php echo $field2; ?>">
                            </div>
                            <div class="confirm_box_cip">
                                <div class="confirm_box_left_cip">
                                    お問合せの分類
                                </div>
                                <div class="confirm_box_right_cip">
                                    <?php echo $field3; ?>
                                </div>
                                <input type="hidden" name="field3" value="<?php echo $field3; ?>">
                            </div>
                            <div class="confirm_box_cip">
                                <div class="confirm_box_left_cip">
                                    日時
                                </div>
                                <div class="confirm_box_right_cip">
                                    <?php echo $field4; ?>
                                </div>
                                <input type="hidden" name="field4" value="<?php echo $field4; ?>">
                            </div>
                            <div class="confirm_box_cip">
                                <div class="confirm_box_left_cip">
                                    お問い合わせ内容
                                </div>
                                <div class="confirm_box_right_cip">
                                    <?php echo nl2br($field5); ?>
                                </div>
                                <input type="hidden" name="field5" value="<?php echo $field5; ?>">
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
