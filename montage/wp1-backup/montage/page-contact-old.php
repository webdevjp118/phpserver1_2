<?php
get_header();
?>
<?php
function encode($in_str, $charset) {
    $out_str = $in_str;
    if ($out_str && $charset) {

        // define start delimimter, end delimiter and spacer
        $end = "?=";
        $start = "=?" . $charset . "?B?";
        $spacer = $end . "\r\n " . $start;

        // determine length of encoded text within chunks
        // and ensure length is even
        $length = 75 - strlen($start) - strlen($end);
        $length = floor($length/2) * 2;

        // encode the string and split it into chunks 
        // with spacers after each chunk
        $out_str = base64_encode($out_str);
        $out_str = chunk_split($out_str, $length, $spacer);

        // remove trailing spacer and 
        // add start and end delimiters
        $spacer = preg_quote($spacer);
        $out_str = preg_replace("/" . $spacer . "$/", "", $out_str);
        $out_str = $start . $out_str . $end;
    }
    return $out_str;
}
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
    お問い合わせ内容 : ".$field4."<br>
    お問い合わせ詳細 : <br>".$field5."<br>
    ";

    $subject = 'お問い合わせがありました';

    $headers = "From: " . $field5 . "\r\n";
    $headers .= "Reply-To: " . $field5 . "\r\n";
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
    <div class="instead_head"></div>
    <div class="pg_header">
        <div class="pgheader_back" style="background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/images/pg_contact.jpg);"></div>
        <div class="pgheader_front">
            <h1>CONTACT</h1>
        </div>
    </div>
    <div class="c_width12">
        <div class="hx4"></div>
        <div class="bread_crumbs">
            <a href="<?php echo get_site_url(); ?>/">TOP</a><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/bread_line.svg"><a href="#">CONTACT</a>
        </div>
        <div class="hx10"></div>
    </div>
    <div class="contactform_block">
        <div class="contactform_width">
            <form action="" method="post" enctype="multipart/form-data">
                <div class="form_field">
                    <div class="field_cap">お問い合わせ種別<span>※</span></div>
                    <div class="field_control">
                        <div class="radio_set">
                            <div class="radio_wrap"><input type="radio" name="field1" value="基本" id="radio_field1_1" required><label for="radio_field1_1">基本</label></div>
                            <div class="radio_wrap"><input type="radio" name="field1" value="採用応募" id="radio_field1_2"><label for="radio_field1_2">採用応募</label></div>
                        </div>
                    </div>
                </div>
                <div class="form_field">
                    <div class="field_cap">企業名<span>※</span></div>
                    <div class="field_control">
                        <input type="text" name="field2" required />
                    </div>
                </div>
                <div class="form_field">
                    <div class="field_cap">担当者名<span>※</span></div>
                    <div class="field_control">
                        <input type="text" name="field3" required />
                    </div>
                </div>
                <div class="form_field">
                    <div class="field_cap">電話番号<span>※</span></div>
                    <div class="field_control">
                        <input type="text" name="field4" required />
                    </div>
                </div>
                <div class="form_field">
                    <div class="field_cap">メールアドレス<span>※</span></div>
                    <div class="field_control">
                        <input type="email" name="field5" required />
                    </div>
                </div>
                <div class="form_field">
                    <div class="field_cap">ファイルアップロード</div>
                    <div class="file_uploader">
                        <label for="et_pb_contact_brand_file_request_0" class="et_pb_contact_form_label">
                            <!-- <span class="placeholder">選択してください</span> -->
                            <span class="label_before">ファイルを選択</span>
                            <div class="file_names">選択してください</div>
                        </label>
                        <input type="file" id="et_pb_contact_brand_file_request_0" class="file-upload" name="attachment1">
                    </div>
                </div>
                <div class="form_field">
                    <div class="field_cap">お問い合わせ内容<span>※</span></div>
                    <div class="field_control">
                        <textarea name="field6" required></textarea>
                    </div>
                </div>
                <div class="privacy_field">
                    <div class="field_control">
                        
                    </div>
                    <div class="privacy_link">
                        <a href="<?php echo get_site_url(); ?>/privacypolicy/">個人情報の取り扱いについて</a>
                    </div>
                    <div class="field_control">
                        <div class="radio_set">
                            <div class="radio_wrap"><input type="checkbox" id="check_privacy" required><label for="check_privacy">プライバシーポリシーに同意する</label></div>
                        </div>
                    </div>
                </div>
                <div class="hx6"></div>
                <div class="field_contactbtn">
                    <input type="hidden" name="submit-confirm" value="submit-confirm">
                    <input type="submit" value="送信">
                </div>    
            </form>       
        </div>
        <div class="hx10"></div>
    </div>
</section>
<!-- CONTAIN_END -->
<?php
get_footer();
