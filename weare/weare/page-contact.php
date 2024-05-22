<?php
get_header();
?>
<script src="https://yubinbango.github.io/yubinbango/yubinbango.js" charset="UTF-8"></script>
<!-- <form class="h-adr">
  <span class="p-country-name" style="display:none;">Japan</span>
    郵便番号：<input type="text" class="p-postal-code" size="8" maxlength="8"><br>
    都道府県：<input type="text" class="p-region" /><br>
    地区町村：<input type="text" class="p-locality" /><br>
    町名番地：<input type="text" class="p-street-address p-extended-address" />
</form> -->

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
    
    $to      = 'prgfinal216@gmail.com';

    $message = "
    会社名 : ".$field1."<br>
    氏名 : ".$field2."<br>
    メールアドレス : ".$field3."<br>
    電話番号 : ".$field4."<br>
    郵便番号 : ".$field5."<br>
    都道府県 : ".$field6."<br>
    市区町村・番地 : ".$field7."<br>
    建物名・部屋番号 : ".$field8."<br>
    お問い合わせ内容 : ".$field9."<br>
    備考 : <br>".$field10."<br>
    ";

    $subject = 'お問い合わせがありました';

    $headers = "From: " . $field3 . "\r\n";
    $headers .= "Reply-To: " . $field3 . "\r\n";
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
    <div class="banner_block_op banner_change_op" style="background:url(<?php echo get_stylesheet_directory_uri(); ?>/images/banner_op6.png) no-repeat top center; background-size:cover;">             
        <div class="container container_service">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 banner_block_in_op">                    	
                    <div class="banner_middle_op"> 
                        <div class="banner_title_op">                 
                            <h1>CONTACT</h1>
                            <h3>お問い合わせ</h3>
                        </div>
                    </div>                                               
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>            
        <div class="clearfix"></div>
    </div>   	        
    <div class="data_block_dp">             
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 data_block_in_dp">                     	
                    <div class="data_middle_dp">
                        <div class="data_title_dp">
                            求人エントリー、ご相談などお気軽にお問い合わせください。
                        </div>
                        <form action="" method="post" enctype="multipart/form-data" class="h-adr">
                            <span class="p-country-name" style="display:none;">Japan</span>
                            <input type="hidden" class="p-region" />
                            <input type="hidden" class="p-locality p-street-address" />
                            <input type="hidden" class="p-extended-address" />
                        <div class="data_top_dp">
                            <div class="contact-form-cop"> 
                                <div class="form-field-cop field-top-cop">
                                    <div class="form-field-lable-cop">会社名</div>
                                    <div class="form-field-input-cop">
                                        <input type="text" placeholder="例）株式会社ウィアー" name="field1">                                        
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="form-field-cop field-top-cop">
                                    <div class="form-field-lable-cop">氏名<span>必須</span></div>
                                    <div class="form-field-input-cop">
                                        <input type="text" placeholder="例）山田　太郎" name="field2" required>                                        
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="form-field-cop field-top-cop">
                                    <div class="form-field-lable-cop">メールアドレス<span>必須</span></div>
                                    <div class="form-field-input-cop">
                                        <input type="email" placeholder="例）weare@sample.com"  name="field3" required>                                        
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="form-field-cop field-top-cop">
                                    <div class="form-field-lable-cop">電話番号<span>必須</span></div>
                                    <div class="form-field-input-cop">
                                        <input type="text" placeholder="例）0120-123-456-789"  name="field4" required>                                        
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="form-field-cop">
                                    <div class="form-field-lable-cop">郵便番号</div> 
                                    <div class="form-field-input-cop form-field-input-2-cop">
                                        <div class="form_field_name_main_dp"> 
                                            <div class="form-field-input-cop form_field_input_width_dp">
                                                <input type="text" class="p-postal-code" size="8" maxlength="8" placeholder="例）000-0000" name="field5">
                                            </div>
                                        </div>
                                        <div class="form_field_age_width_dp"> 
                                            <div class="form_field_btn_dp">
                                                <a class="btn_autoaddress" href="javascript:void(0)">住所自動入力</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="form-field-cop field-top-cop">
                                    <div class="form-field-lable-cop">都道府県</div>
                                    <div class="form-field-input-cop form_field_input_change_cop">
                                        <input type="text" class="my_region" placeholder="例）東京都" name="field6">
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="form-field-cop field-top-cop">
                                    <div class="form-field-lable-cop">市区町村・番地</div>
                                    <div class="form-field-input-cop">
                                        <input type="text" class="my_address" placeholder="例）〇〇市〇区00-000" name="field7">                                        
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="form-field-cop field-top-cop">
                                    <div class="form-field-lable-cop">建物名・部屋番号</div>
                                    <div class="form-field-input-cop">
                                        <input type="text" class="my_extended_address" placeholder="" name="field8">                                        
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="form-field-cop field-top-cop">
                                    <div class="form-field-lable-cop">お問い合わせ内容<span>必須</span></div>
                                    <div class="form-field-input-cop form_field_input_change_cop">
                                        <select type="text" class="custom-select" placeholder="ご選択ください" name="field9" required>
                                            <option value="">ご選択ください</option>
                                            <option value="選択1">選択1</option>
                                            <option value="選択2">選択2</option>
                                        </select>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="form-field-cop field-top-cop">
                                    <div class="form-field-lable-cop">備考</div>
                                        <div class="form-field-input-cop">
                                            <textarea placeholder="ご自由にご入力ください" name="field10"></textarea>                                       
                                        </div>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="data_title_dp data_info_dp">
                                    「個人情報の取扱いについて」の内容をご確認の上、チェックして下さい
                                </div>
                                <div class="form-field-radio-main-cp form-field-radio-main-alone-cp">
                                    <div class="form-field-radio-cp">
                                        <label class="radio-container-cp">プライバシーポリシーに同意する
                                            <input type="checkbox" required>
                                            <span class="checkmark-cp"></span>
                                        </label>
                                    </div>
                                </div>                                                                                                                              
                            </div>
                            <div class="data_btn_dp">
                                <input type="hidden" name="submit-confirm" value="submit-confirm">
                                <button type="submit">送信する</button>
                            </div>
                        </div>
                        </form>
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
