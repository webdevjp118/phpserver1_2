<?php
get_header();
?>
<?php
if(isset($_POST['submit-confirm']) && ($_POST['submit-confirm'] == 'submit-confirm')) {

    $field1 = isset($_POST['field1']) ? $_POST['field1']: '';
    $field2_1 = isset($_POST['field2_1']) ? $_POST['field2_1']: '';
    $field2_2 = isset($_POST['field2_2']) ? $_POST['field2_2']: '';
    $field3 = isset($_POST['field3']) ? $_POST['field3']: '';
    $field4 = isset($_POST['field4']) ? $_POST['field4']: '';
    $field5 = isset($_POST['field5']) ? $_POST['field5']: '';
    $field5 = isset($_POST['field6']) ? $_POST['field6']: '';
    
    $to      = 'prgfinal216@gmail.com';

    $message = "
    お問い合わせ種別 : ".$field1."<br>
    お名前 : ".$field2_1.$field2_2."<br>
    会社名 : ".$field3."<br>
    メールアドレス : ".$field4."<br>
    電話番号 : ".$field5."<br>
    お問い合わせ内容 : <br>".$field6."<br>
    ";

    $subject = 'お問い合わせがありました';

    $headers = "From: " . $field4 . "\r\n";
    $headers .= "Reply-To: " . $field4 . "\r\n";
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
    <div class="banner_block_rp" style="background:url(<?php echo get_stylesheet_directory_uri(); ?>/images/banner_2.png) no-repeat center center; background-size:cover;">             
        <div class="container">
            <div class="row">
                <div class="col banner_block_in_rp">                    	
                    <div class="banner_middle_rp"> 
                        <div class="banner_top_rp">                            	
                            <div class="banner_title_rp">
                                <h3>Contact</h3>
                                <p>お問い合わせは、こちらからお願いいたします。</p>
                            </div>
                        </div>
                        <div class="banner_image_prp">
                            <a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/banner_img2.png" alt="" /></a>
                        </div>		     
                    </div>                                               
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>            
        <div class="clearfix"></div>
    </div>
    <div class="click_block_pop">             
        <div class="container">
            <div class="row">
                <div class="col click_block_in_pop">                    	
                    <form action="" method="post" enctype="multipart/form-data">
                        <div class="click_middle_pop"> 
                            <div class="click_top_pop">
                                <div class="contact_form_rp">
                                    <div class="form-field-cop">
                                        <div class="form-field-lable-cop">お問い合わせ種別<span>*</span></div>
                                        <div class="form-field-input-cop form-field-radio-row-cop form-field-radio-row-2-cop">
                                            <div class="form-radio-cp">
                                                <div class="form-field-radio-cp">
                                                    <label class="radio-container-cp">配送ロボット
                                                        <input type="radio" checked="checked" name="inquiry1" name="field1" value="配送ロボット">
                                                        <span class="checkmark-cp"></span>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="form-radio-cp">
                                                <div class="form-field-radio-cp">
                                                    <label class="radio-container-cp">配膳ロボット
                                                        <input type="radio" name="inquiry1" name="field1" value="配送ロボット">
                                                        <span class="checkmark-cp"></span>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="form-radio-cp">
                                                <div class="form-field-radio-cp">
                                                    <label class="radio-container-cp">カフェロボット
                                                        <input type="radio" name="inquiry1" name="field1" value="カフェロボット">
                                                        <span class="checkmark-cp"></span>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="form-radio-cp">
                                                <div class="form-field-radio-cp">
                                                    <label class="radio-container-cp">ロボット導入のご相談
                                                        <input type="radio" name="inquiry1" name="field1" value="ロボット導入のご相談">
                                                        <span class="checkmark-cp"></span>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="form-radio-cp">
                                                <div class="form-field-radio-cp">
                                                    <label class="radio-container-cp">その他
                                                        <input type="radio" name="inquiry1" name="field1" value="その他">
                                                        <span class="checkmark-cp"></span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-field-cop">
                                        <div class="form_input_main_cop">
                                            <div class="form_input_in_cop">
                                                <div class="form-field-lable-cop">姓<span>*</span></div> 
                                                <div class="form-field-input-cop"><input type="text" placeholder="" name="field2_1" required></div>
                                            </div> 
                                            <div class="form_input_in_cop">   
                                                <div class="form-field-lable-cop">名<span> *</span></div>    
                                                <div class="form-field-input-cop"><input type="text" placeholder="" name="field2_2" required></div>
                                            </div>
                                        </div>    
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="form-field-cop">
                                        <div class="form-field-lable-cop">会社名<span>*</span></div>
                                        <div class="form-field-input-cop">
                                            <input type="text" placeholder="" name="field3" required>                                        
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="form-field-cop">
                                        <div class="form-field-lable-cop">メールアドレス<span>*</span></div>
                                        <div class="form-field-input-cop">
                                            <input type="email" placeholder="" name="field4" required>                                        
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="form-field-cop">
                                        <div class="form-field-lable-cop">電話番号</div>
                                        <div class="form-field-input-cop">
                                            <input type="text" placeholder="" name="field5">                                        
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="form-field-cop">
                                        <div class="form-field-lable-cop">お問い合わせ内容</div>
                                        <div class="form-field-input-cop">
                                            <textarea type="text" placeholder="" name="field6"></textarea>                                        
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                                <div class="click_img_pop">
                                    <a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/contact_img.svg" alt="" /></a>
                                </div>
                                <div class="contact_btn_rp">
                                    <input type="hidden" name="submit-confirm" value="submit-confirm">
                                    <button type="submit">送 信</button>
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
</section>
<!-- CONTAIN_END -->
<?php
get_footer();
