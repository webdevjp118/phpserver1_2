<?php
get_header();
?>
<?php
if(isset($_POST['submit-confirm']) && ($_POST['submit-confirm'] == 'submit-confirm')) {

    $field1 = isset($_POST['field1']) ? $_POST['field1']: '';
    $field2 = isset($_POST['field2']) ? $_POST['field2']: '';
    $field3 = isset($_POST['field3']) ? $_POST['field3']: '';
    $field4 = isset($_POST['field4']) ? $_POST['field4']: '';
    $field5 = isset($_POST['field5']) ? $_POST['field5']: '';

    $to      = 'prgfinal216@gmail.com';

    $message = "
    お名前 : ".$field1."<br>
    メールアドレス : ".$field2."<br>
    電話番号 : ".$field3."<br>
    問い合わせ施設 : ".implode(", ", $field4)."<br>
    お問い合わせ : <br>".$field5."<br>
    ";

    $subject = 'お問い合わせ';

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
    
    <div class="nursing_block_np">             
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 nursing_block_in_np">                    	
                    <div class="nursing_middle_np"> 
                        <div class="nursing_link_np">
                            <ul>
                                <li><a href="<?php echo get_site_url(); ?>/care/">介護事業</a></li>
                                    <li><a class="" href="<?php echo get_site_url(); ?>/nursinghome/">有料老人ホーム事業</a></li>
                                    <li><a href="<?php echo get_site_url(); ?>/disabled/">障がい児通所支援</a></li>
                                    <li><a class="active" href="<?php echo get_site_url(); ?>/news/">お知らせ</a></li>
                            </ul>                                
                        </div>				     
                    </div>                                               
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>            
        <div class="clearfix"></div>
    </div> 
    
    <div class="breadcrumb_block_sp">             
        <div class="container container_inner">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 breadcrumb_block_in_sp">
                    <div class="breadcrumb_middle_sp">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?php echo get_site_url(); ?>">トップ </a></li>
                            <li class="breadcrumb-item"><a href="#"><span>お問い合わせ</span></a></li>
                        </ol>                                                                                             
                    </div>                       
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>            
        <div class="clearfix"></div>
    </div>
               
    <div class="child_block_cp">             
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 child_block_in_cp">                    	
                    <div class="child_middle_cp">
                        <div class="common_page_title_ncp">
                            <div class="common_page_title_in_ncp">
                                <h2>お問い合わせ</h2>
                            </div>
                            <div class="child_btn_cp">
                                <a href="#">メンテナンス事業のお問い合わせはコチラ<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/child_icon_feather.svg" alt=""/></a>
                            </div>
                        </div>                         					     
                    </div>                                               
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>            
        <div class="clearfix"></div>
    </div>	
    
    
    <div class="phone_block_ctp">             
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 phone_block_in_ctp">                    	
                    <div class="phone_middle_ctp"> 
                        <div class="phone_title_ctp">
                            お電話の場合
                        </div>	
                        <div class="phone_top_ctp">
                            <div class="phone_left_ctp">
                                <div class="phone_row_ctp">
                                    <div class="phone_img_ctp">
                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/phone_icon.svg" alt=""/>
                                    </div>
                                    <div class="phone_info_ctp">
                                        0568‐90‐0564
                                    </div>
                                </div>
                            </div>
                            <div class="phone_right_ctp">
                                <div class="phone_box_ctp">
                                    <div class="phone_img2_ctp">
                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/phone_company_icon.svg" alt=""/>
                                    </div>
                                    <div class="phone_subinfo_ctp">
                                        本社：永岡まで
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
                
       
       <div class="recruitment_block_cp">             
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 recruitment_block_in_cp">    
                <form action="" method="post" enctype="multipart/form-data">              	
                    <div class="recruitment_middle_cp"> 
                        <div class="recruitment_title_cp">
                            メールフォームの場合
                        </div>
                        <div class="contact-form-cop">                                
                            <div class="form-field-cop" >
                                <div class="form-field-lable-cop recruitment_title_width_cp"><span>※</span>のある項目は必須項目です。</div>                                         
                                <div class="clearfix"></div>
                            </div>
                            <div class="form-field-cop">
                                <div class="form-field-lable-cop">お名前<span>※</span></div>                     
                                    <div class="form-field-input-cop recruitment_width_cp"><input type="text" placeholder="" name="field1" required></div>                                        
                                <div class="clearfix"></div>
                            </div>
                            <div class="form-field-cop">
                                <div class="form-field-lable-cop">メールアドレス<span>※</span></div> 
                                    <div class="form-field-input-cop recruitment_width_cp"><input type="email" placeholder="anyone@example.com" name="field2" required></div>
                                <div class="clearfix"></div>
                            </div> 
                            <div class="form-field-cop">
                                <div class="form-field-lable-cop">電話番号<span>※</span></div> 
                                    <div class="form-field-input-cop recruitment_width_cp"><input type="text" name="field3" required></div>
                                <div class="clearfix"></div>
                            </div>                                 
                            <div class="form-field-cop">
                                <div class="form-field-lable-cop">問い合わせ施設</div>
                                <div class="form-field-input-cop">                                    
                                    <div class="form-radio-cp form-field-radio-main-cp">
                                        <div class="form-field-radio-cp">
                                            <label class="radio-container-cp">訪問介護 あいびぃ〜
                                              <input type="checkbox" name="field4[]" value="訪問介護 あいびぃ〜">                                                 
                                              <span class="checkmark-cp"></span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="form-radio-cp form-field-radio-main-cp">
                                        <div class="form-field-radio-cp">
                                            <label class="radio-container-cp">住宅型有料老人ホーム『 あいびぃ〜 弥生 』
                                              <input type="checkbox" name="field4[]" value="住宅型有料老人ホーム『 あいびぃ〜 弥生 』"> 
                                              <span class="checkmark-cp"></span>                                                
                                            </label>
                                        </div>
                                    </div>
                                    <div class="form-radio-cp form-field-radio-main-cp">
                                        <div class="form-field-radio-cp">
                                            <label class="radio-container-cp">キッズ・あいびぃ〜
                                              <input type="checkbox" name="field4[]" value="キッズ・あいびぃ〜">    
                                              <span class="checkmark-cp"></span>                                             
                                            </label>
                                        </div>
                                    </div>
                                    <div class="form-radio-cp form-field-radio-main-cp">
                                        <div class="form-field-radio-cp">
                                            <label class="radio-container-cp">キッズ・あいびぃ〜 Ⅱ
                                              <input type="checkbox" name="field4[]" value="キッズ・あいびぃ〜 Ⅱ">   
                                              <span class="checkmark-cp"></span>                                              
                                            </label>
                                        </div>
                                    </div>
                                    <div class="form-radio-cp form-field-radio-main-cp">
                                        <div class="form-field-radio-cp">
                                            <label class="radio-container-cp">キッズ・あいびぃ〜 Ⅲ
                                              <input type="checkbox" name="field4[]" value="キッズ・あいびぃ〜 Ⅲ">  
                                              <span class="checkmark-cp"></span>                                               
                                            </label>
                                        </div>
                                    </div>
                                    <div class="form-radio-cp form-field-radio-main-cp">
                                        <div class="form-field-radio-cp">
                                            <label class="radio-container-cp">キッズ・あいびぃ〜 Ⅳ
                                              <input type="checkbox" name="field4[]" value="キッズ・あいびぃ〜 Ⅳ"> 
                                              <span class="checkmark-cp"></span>                                                
                                            </label>
                                        </div>
                                    </div>
                                    <div class="form-radio-cp form-field-radio-main-cp">
                                        <div class="form-field-radio-cp">
                                            <label class="radio-container-cp">キッズ・あいびぃ～ Ⅴ
                                              <input type="checkbox" name="field4[]" value="キッズ・あいびぃ～ Ⅴ">  
                                              <span class="checkmark-cp"></span>                                               
                                            </label>
                                        </div>
                                    </div>
                                    <div class="form-radio-cp form-field-radio-main-cp">
                                        <div class="form-field-radio-cp">
                                            <label class="radio-container-cp">株式会社 ベネスター『 あいびぃ～半田 』
                                              <input type="checkbox" name="field4[]" value="株式会社 ベネスター『 あいびぃ～半田 』"> 
                                              <span class="checkmark-cp"></span>                                                
                                            </label>
                                        </div>
                                    </div>
                                    <div class="form-radio-cp form-field-radio-main-cp">
                                        <div class="form-field-radio-cp">
                                            <label class="radio-container-cp">株式会社 ベネスター『 キッズ・あいびぃ～半田 』
                                              <input type="checkbox" name="field4[]" value="株式会社 ベネスター『 キッズ・あいびぃ～半田 』">                                                 
                                              <span class="checkmark-cp"></span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="form-radio-cp form-field-radio-main-cp">
                                        <div class="form-field-radio-cp">
                                            <label class="radio-container-cp">ヘルプステーションのどか『 放課後等デイサービス　のどか 』
                                              <input type="checkbox" name="field4[]" value="ヘルプステーションのどか『 放課後等デイサービス　のどか 』">
                                              <span class="checkmark-cp"></span>                                                 
                                            </label>
                                        </div>
                                    </div>
                                    <div class="form-radio-cp form-field-radio-main-cp">
                                        <div class="form-field-radio-cp">
                                            <label class="radio-container-cp">ヘルプステーションのどか『 就労継続支援Ｂ型　のどか 』
                                              <input type="checkbox" name="field4[]" value="ヘルプステーションのどか『 就労継続支援Ｂ型　のどか 』">
                                              <span class="checkmark-cp"></span>                                                 
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-field-cop">
                                <div class="form-field-lable-cop">お問い合わせ</div>                                      
                                    <div class="form-field-input-cop"><textarea placeholder="" name="field5"></textarea></div>                                                 
                                <div class="clearfix"></div>
                            </div>                                                                                                                                                                    
                        </div>                                						     
                    </div>         
                    <div class="recruitment_btn_cp">
                        <input type="hidden" name="submit-confirm" value="submit-confirm">
                        <button type="submit">送信</button>
                       </div>                                      
                    <div class="clearfix"></div>
                </div>
                </form>
            </div>
        </div>            
        <div class="clearfix"></div>
    </div>
</section>
<!-- CONTAIN_END -->

<?php
get_footer();
