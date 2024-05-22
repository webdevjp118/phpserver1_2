<?php
get_header();
?>
<?php
if(isset($_POST['submit-confirm']) && ($_POST['submit-confirm'] == 'submit-confirm')) {

    $field1 = isset($_POST['field1']) ? $_POST['field1']: '';
    $field2 = isset($_POST['field2']) ? $_POST['field2']: '';
    $field3 = isset($_POST['field3']) ? $_POST['field3']: '';
    
    $to      = 'prgfinal216@gmail.com';

    $message = "
    お名前 : ".$field1."<br>
    メールアドレス : ".$field2."<br>
    お問い合わせ内容 : <br>".$field3."<br>
    ";

    $subject = 'お問い合わせがありました';

    $headers = "From: " . $field2 . "\r\n";
    $headers .= "Reply-To: " . $field2 . "\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=UTF-8\r\n";

    if(mail($to, $subject, $message, $headers)) {
      echo '<script>location.href="'.home_url().'/success"</script>';
    } else {
      echo '<script>location.href="'.home_url().'/failed"</script>';
    }
}
?>
<!-- CONTAIN_START -->
<section id="contain">  
    <div class="banner_block_tp pxt_subpg">
        <div class="banner_back_tp">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/banner_4.png">
        </div>
        <div class="banner_front_tp">
            <div class="banner_block_hp">  	        
                <div class="container">
                    <div class="row">
                        <div class="col banner_block_in_dp">                    	
                            <div class="banner_middle_dp"> 
                                <div class="banner_title_dp">
                                    About
                                </div>
                                <div class="banner_info_lop">
                                    会社概要・お問い合わせ
                                </div>
                            </div>                                               
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>            
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
    <div class="profile_block_lep" style="background:#E8F3FC url(<?php echo get_stylesheet_directory_uri(); ?>/images/bg_img.svg) no-repeat center center;">             
        <div class="container">
            <div class="row">
                <div class="col profile_block_in_lep">                  	
                    <div class="profile_middle_lep">
                        <div class="profile_title_lep">
                            会社概要
                        </div> 
                        <div class="profile_top_lep">
                            <div class="profile_row_lep">
                                <a href="#">
                                    <div class="profile_left_lep">
                                        製造販売元
                                    </div>
                                    <div class="profile_right_lep">
                                        株式会社ホワイトナイト
                                    </div>
                                </a>
                            </div>
                            <div class="profile_row_lep">
                                <a href="#">
                                    <div class="profile_left_lep">
                                        英語表記
                                    </div>
                                    <div class="profile_right_lep">
                                        WhiteKnight Co., Ltd.   https://whiteknight-co.jp
                                    </div>
                                </a>
                            </div>
                            <div class="profile_row_lep">
                                <a href="#">
                                    <div class="profile_left_lep">
                                        製造販売元
                                    </div>
                                    <div class="profile_right_lep">
                                        〒104-0061 東京都中央区銀座7丁目13番6号 サガミビル2階
                                    </div>
                                </a>
                            </div>
                            <div class="profile_row_lep">
                                <a href="#">
                                    <div class="profile_left_lep">
                                        製造販売元
                                    </div>
                                    <div class="profile_right_lep">
                                        金子 隆一
                                    </div>
                                </a>
                            </div>
                            <div class="profile_row_lep">
                                <a href="#">
                                    <div class="profile_left_lep">
                                        製造販売元
                                    </div>
                                    <div class="profile_right_lep">
                                        2012年9月14日
                                    </div>
                                </a>
                            </div>
                            <div class="profile_row_lep">
                                <a href="#">
                                    <div class="profile_left_lep">
                                        製造販売元
                                    </div>
                                    <div class="profile_right_lep">
                                        03-4455-3762
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
    <div class="inquiry_block_lep">             
        <div class="container">
            <div class="row">
                <div class="col inquiry_block_in_lep">                  	
                    <div class="inquiry_middle_lep">
                        <div class="inquiry_boxes_lep">
                            <div class="inquiry_box_lep">
                                <div class="inquiry_box_top_lep">
                                    <div class="inquiry_box_icon_lep">
                                        <a><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/phone_icon.svg" alt="" /></a>
                                    </div>
                                    <div class="inquiry_box_title_lep">
                                        電話でのお問い合わせ
                                    </div>
                                </div>
                                <div class="inquiry_box_bottom_lep">
                                    <div class="inquiry_box_info_lep">
                                        <h4>03-4455-3762</h4>
                                        <p>平日9:00～18:00</p>
                                    </div>
                                </div>
                            </div>
                            <div class="inquiry_box_lep">
                                <div class="inquiry_box_top_lep">
                                    <div class="inquiry_box_icon_lep">
                                        <a><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/line_icon.svg" alt="" /></a>
                                    </div>
                                    <div class="inquiry_box_title_lep">
                                        LINEでのお問い合わせ
                                    </div>
                                </div>
                                <div class="inquiry_box_bottom_lep">
                                    <div class="inquiry_box_btn_lep">
                                        <a href="https://page.line.me/gyj8924s?openQrModal=true" target="_blank">お問い合わせ</a>
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
    <div class="contact_block_lep">             
        <div class="container">
            <div class="row">
                <div class="col contact_block_in_lep">                  	
                    <div class="contact_middle_lep">
                        <div class="contact_top_lep">
                            <div class="contact_links_lep">
                                <div class="contact_link_lep">
                                    <a href="<?php echo get_site_url(); ?>/privacy/">プライバシーポリシー・サイト利用規</a>
                                </div>
                                <div class="contact_link_lep">
                                    <a href="<?php echo get_site_url(); ?>/shipping/">配送について</a>
                                </div>
                            </div>
                        </div>
                        <div class="contact_bottom_lep">
                            <div class="contact_title_lep">
                                メールでお問い合わせ
                            </div>
                            <div class="contact_info_lep">
                                弊社へのお問い合わせは、以下のフォームからお願いいたします。
                            </div>
                            <form action="" method="post" enctype="multipart/form-data">
                                <div class="contact_form_lep">
                                    <div class="contact-form-cop">                                
                                        <div class="form-field-cop">
                                            <div class="form-field-lable-cop"><span>必須</span>お名前</div> 
                                            <div class="form-field-input-cop">
                                                <div class="form_field_input_width_dp"><input type="text" placeholder="例：山田太郎" name="field1" required></div>
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                        <div class="form-field-cop">
                                            <div class="form-field-lable-cop"><span>必須</span>メールアドレス</div> 
                                            <div class="form-field-input-cop">
                                                <div class="form_field_input_width_dp"><input type="email" placeholder="例：abc@abc.jp" name="field2" required></div>
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                        <div class="form-field-cop">
                                            <div class="form-field-lable-cop"><span>必須</span>お問い合わせ内容</div> 
                                            <div class="form-field-input-cop">
                                                <div class="form_field_input_width_dp"><textarea placeholder="こちらにお問い合わせ内容をご入力ください。" name="field3" required></textarea></div>
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                        <div class="form-field-radio-main-cp form-field-cop">
                                            <div class="form-field-lable-cop"><span>必須</span>個人情報の取扱規程</div> 
                                            <div class="form-field-radio-cp">
                                                <label class="radio-container-cp">個人情報の取扱規程に同意する
                                                    <input type="checkbox" required>
                                                    <span class="checkmark-cp"></span>
                                                </label>
                                                <div class="contact_form_row_lep">
                                                    <p>当社の<a href="<?php echo get_site_url(); ?>/privacy/">個人情報の取扱規程</a>について同意される方のみ送信できます。</p>
                                                </div>
                                            </div>
                                        </div>                                                                                                                              
                                    </div>
                                </div>
                                <div class="contact_btn_lep">
                                    <input type="hidden" name="submit-confirm" value="submit-confirm">
                                    <div class="common_btn_hp" id="submit_trick">この内容で送信する</div>
                                    <input type="submit" id="form_submit">
                                </div>
                            </form>
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
