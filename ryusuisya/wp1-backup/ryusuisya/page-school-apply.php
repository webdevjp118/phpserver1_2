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
    $field6 = isset($_POST['field6']) ? $_POST['field6']: '';
    $field7 = isset($_POST['field7']) ? $_POST['field7']: '';
    $field8 = isset($_POST['field8']) ? $_POST['field8']: '';
    $field9 = isset($_POST['field9']) ? $_POST['field9']: '';
    $field10 = isset($_POST['field10']) ? $_POST['field10']: '';
    $field10 = isset($_POST['field11']) ? $_POST['field11']: '';
    
    $to      = 'prgfinal216@gmail.com';

    $message = "
    氏名 : ".$field1."<br>
    カナ氏名 : ".$field2."<br>
    生年月日 : ".$field3."<br>
    性別 : ".$field4."<br>
    職業 : ".$field5."<br>
    郵便番号 : ".$field6."<br>
    住所 : ".$field7."<br>
    電話番号 : ".$field8."<br>
    メールアドレス : ".$field9."<br>
    入学志望動機 : ".$field10."<br>
    備考 : <br>".$field11."<br>
    ";

    $subject = 'お問い合わせがありました';

    $headers = "From: " . $field9 . "\r\n";
    $headers .= "Reply-To: " . $field9 . "\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=UTF-8\r\n";

    if(mail($to, $subject, $message, $headers)) {
        echo '<script>location.href="'.home_url().'/thanks/"</script>';
    } else {
        echo '<script>alert("Failed!"); location.href="'.home_url().'/school-apply/"</script>';
    }  
}
?>
<!-- CONTAIN_START -->
<section id="contain" class="school_margin_sop"> 
    <div class="admission_block_stp admission_change_stp">             
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 admission_block_in_stp">
                    <div class="common_title_hp common_size_srp">
                        <h2>龍粋舎<br/>入学申込</h2>
                    </div>                    	
                    <div class="admission_middle_stp"> 
                        <div class="admission_top_stp">
                            <div class="admission_info_stp">
                                <p>※「龍粋舎」への入学には審査があります。申し込みいただいても入学できないことがございます</p>
                                <p>※疑問点などございましたら、お問い合わせフォームより運営までご連絡ください</p>
                            </div>
                            <div class="admission_link_stp">
                                <div class="admission_link1_stp">
                                    <a href="#">
                                        ※規約： https://ryusuisya.com/school/school-tos
                                    </a>
                                </div>  
                                <div class="admission_link2_stp">  
                                    <a href="#">
                                        ※お問い合わせ：https://ryusuisya.com/contact
                                    </a>
                                </div>    
                            </div>
                            <form action="" method="post" enctype="multipart/form-data">
                                <div class="admission_form_stp">
                                    <div class="form-field-radio-main-cp form-field-radio-main-alone-cp">
                                            <div class="form-field-radio-cp">
                                                <label class="radio-container-cp">規約に同意する
                                                    <input type="checkbox" required>
                                                    <span class="checkmark-cp"></span>
                                                </label>
                                            </div>
                                        </div>
                                    <div class="contact-form-cop"> 
                                        <div class="form-field-cop">
                                            <div class="form-field-lable-cop">氏名</div> 
                                            <div class="form-field-input-cop">
                                                <div class="form_field_name_main_dp">                                     
                                                    <div class="form-field-input-cop form_field_input_width_dp"><input type="text" placeholder="" name="field1" required></div>
                                                </div>
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                        <div class="form-field-cop">
                                            <div class="form-field-lable-cop">カナ氏名</div> 
                                            <div class="form-field-input-cop">
                                                <div class="form_field_name_main_dp">                                     
                                                    <div class="form-field-input-cop form_field_input_width_dp"><input type="text" placeholder="" name="field2" required></div>
                                                </div>
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                        <div class="form-field-cop">
                                            <div class="form-field-lable-cop">生年月日</div> 
                                            <div class="form-field-input-cop">
                                                <div class="form_field_name_main_dp">                                     
                                                    <div class="form-field-input-cop form_field_input_width_dp"><input type="text" placeholder="" name="field3" required></div>
                                                </div>
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                        <div class="form-field-cop">
                                            <div class="form-field-lable-cop">性別</div>
                                            <div class="form-field-input-cop form-field-radio-row-cop">
                                                <div class="form-radio-cp">
                                                    <div class="form-field-radio-cp">
                                                        <label class="radio-container-cp">男性
                                                            <input type="radio" checked="checked" name="inquiry" name="field4" value="男性">
                                                            <span class="checkmark-cp"></span>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="form-radio-cp">
                                                    <div class="form-field-radio-cp">
                                                        <label class="radio-container-cp">女性
                                                            <input type="radio" name="inquiry" name="field4" value="女性">
                                                            <span class="checkmark-cp"></span>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="form-radio-cp">
                                                    <div class="form-field-radio-cp">
                                                        <label class="radio-container-cp">その他
                                                            <input type="radio" name="inquiry" name="field4" value="その他">
                                                            <span class="checkmark-cp"></span>
                                                        </label>
                                                    </div>
                                                </div>                                      
                                            </div>
                                        </div>
                                        <div class="form-field-cop field-top-cop">
                                            <div class="form-field-lable-cop">職業</div>
                                            <div class="form-field-input-cop">
                                                <div class="form-list-cop">                                        	
                                                    <div class="form-list-select-cop">
                                                        <select class="custom-select" name="field5">
                                                            <option value="選択ください">選択ください</option>
                                                            <option value="選択ください">選択ください</option>
                                                        </select>
                                                    </div>                                 
                                                </div>
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                        <div class="form-field-cop">
                                            <div class="form-field-lable-cop">郵便番号</div> 
                                            <div class="form-field-input-cop">
                                                <div class="form_field_name_main_dp">                                     
                                                    <div class="form-field-input-cop form_field_input_width_dp"><input type="text" placeholder="" name="field6" required></div>
                                                </div>
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                        <div class="form-field-cop">
                                            <div class="form-field-lable-cop">住所</div> 
                                            <div class="form-field-input-cop">
                                                <div class="form_field_name_main_dp">                                     
                                                    <div class="form-field-input-cop form_field_input_width_dp"><input type="text" placeholder="" name="field7" required></div>
                                                </div>
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                        <div class="form-field-cop">
                                            <div class="form-field-lable-cop">電話番号</div> 
                                            <div class="form-field-input-cop">
                                                <div class="form_field_name_main_dp">                                     
                                                    <div class="form-field-input-cop form_field_input_width_dp"><input type="text" placeholder="" name="field8" required></div>
                                                </div>
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                        <div class="form-field-cop">
                                            <div class="form-field-lable-cop">メールアドレス</div> 
                                            <div class="form-field-input-cop">
                                                <div class="form_field_name_main_dp">                                     
                                                    <div class="form-field-input-cop form_field_input_width_dp"><input type="email" placeholder="" name="field9" required></div>
                                                </div>
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                        <div class="form-field-cop">
                                            <div class="form-field-lable-cop">入学志望動機</div> 
                                            <div class="form-field-input-cop">
                                                <div class="form_field_name_main_dp">                                     
                                                    <div class="form-field-input-cop form_field_input_width_dp"><textarea type="text" placeholder="" name="field10" required></textarea></div>
                                                </div>
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                        <div class="form-field-cop">
                                            <div class="form-field-lable-cop">備考</div> 
                                            <div class="form-field-input-cop">
                                                <div class="form_field_name_main_dp">                                     
                                                    <div class="form-field-input-cop form_field_input_width_dp"><textarea type="text" placeholder="" name="field11"></textarea></div>
                                                </div>
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                </div>
                                <input type="hidden" name="submit-confirm" value="submit-confirm">
                                <button type="submit" id="form_submit" style="opacity:0"></button>
                            </form>
                            <div class="admission_btn_stp">
                                <a href="#contact" id="submit_trick" class="common_btn_hp">送信</a>
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
<footer id="footer" class="footer_change_sop footer_change_hp">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 footer_in_hp">
                <div class="footer_middle_hp">
                    <div class="footer_top_hp">
                        <div class="footer_boxes_hp">
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
                            </div>
                            <div class="footer_btns_hp">                                                                                   
                                <div class="footer_btn_hp">
                                    <a href="#">
                                        <div class="footer_btn_in_hp">
                                            Tenkawa Ryuichi
                                        </div>
                                        <div class="footer_btn_img_hp">
                                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/btn_img.png" alt="" />
                                        </div>
                                        </a>
                                </div>
                                <div class="footer_btn_hp">
                                    <a href="#">
                                        <div class="footer_btn_in_hp">
                                            Sakamoto Canon
                                        </div>
                                        <div class="footer_btn_img_hp">
                                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/btn_img.png" alt="" />
                                        </div>
                                        </a>
                                </div>
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
