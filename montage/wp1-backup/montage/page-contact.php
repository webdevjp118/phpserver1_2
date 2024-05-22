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
    $field6 = isset($_POST['field6']) ? $_POST['field6']: '';
    
    $to      = 'prgfinal216@gmail.com';
    if($field1 == '基本') {
        $to      = 'info@ml.montg.jp';
    } else {
        $to      = 'recruit@ml.montg.jp';
    }
    $to      = 'prgfinal216@gmail.com';

    // $message = "
    // お問い合わせ種別 : ".$field1."<br>
    // 企業名 : ".$field2."<br>
    // 担当者名 : ".$field3."<br>
    // 電話番号 : ".$field4."<br>
    // メールアドレス : ".$field5."<br>
    // お問い合わせ内容 : <br>".$field6."<br>
    // ";
    $message = "
    お問い合わせ種別 : ".$field1."\r\n
    企業名 : ".$field2."\r\n
    担当者名 : ".$field3."\r\n
    電話番号 : ".$field4."\r\n
    メールアドレス : ".$field5."\r\n
    お問い合わせ内容 : \r\n".$field6."\r\n
    ";

    $flag_attach1 = false;
    if(isset($_FILES['attachment1'])) {
        $flag_attach1 = true;
        //Get uploaded file data using $_FILES array
        $tmp_name = $_FILES['attachment1']['tmp_name']; // get the temporary file name of the file on the server
        $attach1_name     = $_FILES['attachment1']['name']; // get the name of the file
        $attach1_size     = $_FILES['attachment1']['size']; // get size of the file for size validation
        $attach1_type     = $_FILES['attachment1']['type']; // get type of the file
        $attach1_error     = $_FILES['attachment1']['error']; // get the error (if any)
        if($attach1_error <= 0) {
            //read from the uploaded file & base64_encode content
            $handle = fopen($tmp_name, "r"); // set the file handle only for reading the file
            $content = fread($handle, $attach1_size); // reading the file
            fclose($handle);                 // close upon completion
        
            $encoded_content1 = chunk_split(base64_encode($content));

        } else {
            $flag_attach1 = false;
        }
    }
    $boundary = md5("random"); // define boundary with a md5 hashed value

    $charset = "iso-2202-jp"; // japanese
    $subject = 'お問い合わせがありました';
    // $subject = mb_encode_mimeheader("お問い合わせがありました", "ISO-2022-JP");
    // $subject = encode("お問い合わせがありました", $charset);
    // $from = mb_encode_mimeheader("株式会社テスト", "ISO-2022-JP"); //newly added code.
    // $replyTo = mb_encode_mimeheader("株式会社テスト", "ISO-2022-JP"); //newly added code.

    $headers = "From: " . $field5 . "\r\n";
    $headers .= "Reply-To: " . $field5 . "\r\n";
    // $headers = encode("From: " . $field5 . "\r\n", $charset);
    // $headers .= encode("Reply-To: " . $field5 . "\r\n", $charset);
    $headers .= "MIME-Version: 1.0\r\n";
    // $headers .= "Content-Type: text/html; charset=UTF-8\r\n";
    $headers .= "Content-Type: multipart/mixed;"; // Defining Content-Type
    $headers .= "boundary = $boundary\r\n"; //Defining the Boundary

    //plain text
    $body = "--$boundary\r\n";
    $body .= "Content-Type: text/html; charset=UTF-8\r\n";
    // $body .= "Content-Type: text/plain; charset=ISO-8859-1\r\n";
    $body .= "Content-Transfer-Encoding: base64\r\n\r\n";
    $body .= chunk_split(base64_encode($message));
    // $body .= chunk_split($message);
    // $body .= $message;

    if($flag_attach1) {
        //attachment
        $body .= "--$boundary\r\n";
        $body .="Content-Type: $attach1_type; name=".$attach1_name."\r\n";
        $body .="Content-Disposition: attachment; filename=".$attach1_name."\r\n";
        $body .="Content-Transfer-Encoding: base64\r\n";
        $body .="X-Attachment-Id: ".rand(1000, 99999)."\r\n\r\n";
        $body .= $encoded_content1; // Attaching the encoded file with email
    } else {

    }

    if(mail($to, $subject, $body, $headers)) {
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
