<?php
get_header();
?>
<?php
if(isset($_POST['submit-confirm']) && ($_POST['submit-confirm'] == 'submit-confirm')) {

    $recaptcha_url = 'https://www.google.com/recaptcha/api/siteverify'; // URL to the reCAPTCHA server
    $recaptcha_secret = '6LdwBGQpAAAAAMdJo5hszkmJsKXwy4q7EeZp12Nu'; // Secret key
    $recaptcha_response = $_POST['recaptchaResponse']; // Response from reCAPTCHA server, added to the form during processing
    $recaptcha = file_get_contents($recaptcha_url.'?secret='.$recaptcha_secret.'&response='.$recaptcha_response); // Send request to the server
    $recaptcha = json_decode($recaptcha); // Decode the JSON response
    if($recaptcha->success == true && $recaptcha->score >= 0.5 && $recaptcha->action == "contact"){ // If the response is valid
        // run email send routine
    } else {
        echo '<script>alert("You are not a human!"); location.href="'.home_url().'"</script>';
    }

    $fld_name = isset($_POST['fld_name']) ? $_POST['fld_name']: '';
    $fld_phone = isset($_POST['fld_phone']) ? $_POST['fld_phone']: '';
    $fld_email = isset($_POST['fld_email']) ? $_POST['fld_email']: '';
    $fld_post1 = isset($_POST['fld_post1']) ? $_POST['fld_post1']: '';
    $fld_pref1 = isset($_POST['fld_pref1']) ? $_POST['fld_pref1']: '';
    $fld_addr1 = isset($_POST['fld_addr1']) ? $_POST['fld_addr1']: '';
    $fld_post2 = isset($_POST['fld_post2']) ? $_POST['fld_post2']: '';
    $fld_pref2 = isset($_POST['fld_pref2']) ? $_POST['fld_pref2']: '';
    $fld_addr2 = isset($_POST['fld_addr2']) ? $_POST['fld_addr2']: '';
    $fld_size = isset($_POST['fld_size']) ? $_POST['fld_size']: '';
    $fld_maker = isset($_POST['fld_maker']) ? $_POST['fld_maker']: '';
    $fld_current = isset($_POST['fld_current']) ? $_POST['fld_current']: '';
    $fld_message = isset($_POST['fld_message']) ? $_POST['fld_message']: '';

    // $to      = 'prgfinal216@gmail.com';
    $to      = 'info@nagoya-kyutoki.com';

    $message = "
	この度は「名古屋給湯器交換センター」へお問い合わせいただき、誠にありがとうございます。<br>
	内容を確認いたしまして、担当よりご連絡させていただきますので、しばらくお待ちくださいませ。<br>
	なお、お急ぎの方は直通ダイヤル【050-3126-2313】（年中無休／8:00～20:00）までご連絡いただきますと、メールよりもスピーディに対応できます。<br>
	<br>
    ※こちらのメールにお心当たりがない場合は、お手数ではございますが下記連絡先までご連絡をお願いいたします。<br>
	**************************************<br>
	以下、送信内容のお控えとなります。<br>
	**************************************<br>
    お名前 : ".$fld_name."<br>
    連絡先電話番号 : ".$fld_phone."<br>
    メールアドレス : ".$fld_email."<br>
    <br>
    ＜ご住所＞<br>
    郵便番号 : ".$fld_post1."<br>
    住所 : ".$fld_addr1."<br>
    <br>
    ＜取付先ご住所＞<br>
    郵便番号 : ".$fld_post2."<br>
    住所 : ".$fld_addr2."<br>
    <br>
    設置希望サイズ : ".$fld_size."<br>
    設置希望機種 : ".$fld_maker."<br>
    現在使用中の給湯器品番 : ".$fld_current."<br>
    お問い合わせ内容 : <br>
    ".$fld_message."<br>
    <br>
    <br>
    **************************************<br>
    愛知県内の給湯器ならお任せ！<br>
    【名古屋給湯器交換センター】<br>
    所在地：〒450-0002<br>
    　　　　愛知県名古屋市中村区名駅4丁目24番5号<br>
    　　　　第2森ビル401<br>
    直通ダイヤル：050-3126-2313<br>
    メールアドレス：info@nagoya-kyutoki.com<br>
    WEBサイト：https://nagoya-kyutoki.com/<br>
    **************************************<br>
    ";

    $flag_attach = [];
    $attach_name = [];
    $attach_size = [];
    $attach_type = [];
    $attach_error = [];
    $encoded_content = [];
    for($i=1;$i<=5;$i++) {
        $flag_attach[$i] = false;
        if(isset($_FILES['attachment'.$i])) {
            $flag_attach[$i] = true;
            //Get uploaded file data using $_FILES array
            $tmp_name = $_FILES['attachment'.$i]['tmp_name']; // get the temporary file name of the file on the server
            $attach_name[$i]     = $_FILES['attachment'.$i]['name']; // get the name of the file
            $attach_size[$i]     = $_FILES['attachment'.$i]['size']; // get size of the file for size validation
            $attach_type[$i]     = $_FILES['attachment'.$i]['type']; // get type of the file
            $attach_error[$i]     = $_FILES['attachment'.$i]['error']; // get the error (if any)
            if($attach_error[$i] <= 0) {
                //read from the uploaded file & base64_encode content
                $handle = fopen($tmp_name, "r"); // set the file handle only for reading the file
                $content = fread($handle, $attach_size[$i]); // reading the file
                fclose($handle);                 // close upon completion
            
                $encoded_content[$i] = chunk_split(base64_encode($content));
    
            } else {
                $flag_attach[$i] = false;
            }
        }
    }
    $boundary = md5("random"); // define boundary with a md5 hashed value

    $charset = "iso-2202-jp"; // japanese
    $subject = '名古屋給湯器交換センターにお問い合わせがありました';
    $headers = "From: " . $fld_email . "\r\n";
    $headers .= "Reply-To: " . $fld_email . "\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: multipart/mixed;"; // Defining Content-Type
    $headers .= "boundary = $boundary\r\n"; //Defining the Boundary

    //plain text
    $body = "--$boundary\r\n";
    $body .= "Content-Type: text/html; charset=UTF-8\r\n";
    $body .= "Content-Transfer-Encoding: base64\r\n\r\n";
    $body .= chunk_split(base64_encode($message));

    for($i=1;$i<=5;$i++) {
        if($flag_attach[$i]) {
            //attachment
            $body .= "--$boundary\r\n";
            $body .="Content-Type: ".$attach_type[$i]."; name=".$attach_name[$i]."\r\n";
            $body .="Content-Disposition: attachment; filename=".$attach_name[$i]."\r\n";
            $body .="Content-Transfer-Encoding: base64\r\n";
            $body .="X-Attachment-Id: ".rand(1000, 99999)."\r\n\r\n";
            $body .= $encoded_content[$i]; // Attaching the encoded file with email
        } else {
    
        }
    }

    if(mail($to, $subject, $body, $headers)) {
    } else {
        echo '<script>location.href="'.home_url().'/failed"</script>';
    }
    
    $fromCompany      = 'info@nagoya-kyutoki.com';
    $to      = $fld_email;
    $subject = '＜自動返信メール＞名古屋給湯器交換センターお問い合わせ';

    $charset = "iso-2202-jp"; // japanese
    $subject = '＜自動返信メール＞名古屋給湯器交換センターお問い合わせ';
    $headers = "From: " . $fromCompany . "\r\n";
    $headers .= "Reply-To: " . $fromCompany . "\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: multipart/mixed;"; // Defining Content-Type
    $headers .= "boundary = $boundary\r\n"; //Defining the Boundary

    if(mail($to, $subject, $body, $headers)) {
        echo '<script>location.href="'.home_url().'/success"</script>';
    } else {
        echo '<script>location.href="'.home_url().'/failed"</script>';
    }
}
?>
<script src="https://ajaxzip3.github.io/ajaxzip3.js" charset="UTF-8"></script>
<script src="https://www.google.com/recaptcha/api.js?render=6LdwBGQpAAAAAPsn3hauzNxct1O4Ppm8dOCxro6N"></script>
<!-- <script src="https://www.google.com/recaptcha/api.js"></script>
<script>
   function onSubmit(token) {
    //  document.getElementById("contact_form").submit();
   }
</script> -->
<!-- CONTAIN_START -->
<section id="contain">    	        
    <div class="instead_head"></div>
    <div class="pg_fv">
        <div class="cwidth14">
            <div class="pgfv_title X_2"><h1>お問い合わせ</h1></div>
        </div>
    </div>
    <div class="pg_frame">
        <div class="pgf_inner">
            <div class="hx4"></div>
            <div class="contact_p">
                <p>以下のフォームに必要事項をご入力の上、「送信する」を押してください。<br>
					<span>※は必須入力項目です。（24時間受付）</span><br>
					なお、お急ぎの方は営業時間内（8時〜20時）でしたら、お電話の方がスムーズに対応できますので、直通ダイヤル「<a href="tel:050-3126-2313">050-3126-2313</a>」よりお問い合わせください。<br>
               </p>
            </div>
            <div class="hx4"></div>
            <div class="form_pos">
                <form action="" method="post" enctype="multipart/form-data" id="contact_form">
                    <input type="hidden" name="recaptchaResponse" id="recaptchaResponse">
                    <div class="form_field">
                        <div class="field_cap">お名前<span>*</span></div>
                        <div class="field_control">
                            <input type="text" name="fld_name" required/>
                        </div>
                    </div>
                    <div class="form_field">
                        <div class="field_cap">連絡先電話番号<span>*</span></div>
                        <div class="field_control">
                            <input type="text" name="fld_phone" required/>
                        </div>
                    </div>
                    <div class="form_field">
                        <div class="field_cap">メールアドレス<span>*</span></div>
                        <div class="field_control">
                            <input type="email" name="fld_email" id="input_email" required/>
                        </div>
                    </div>
                    <div class="form_field">
                        <div class="field_cap">メールアドレス（確認のためもう一度）<span>*</span></div>
                        <div class="field_control">
                            <input type="text" name="fld_email_confirm" id="input_confirm_email" required/>
                        </div>
                    </div>
                    <div class="form_field">
                        <div class="field_cap">ご住所<span>*</span></div>
                        <div class="field_address">
                            <div class="field_address2">
                                <div class="field_cap">郵便番号</div>
                                <div class="field_address3">
                                    <div class="field_address4">
                                        <div class="field_control">
                                            <input pattern="[0-9]{7,7}" type="text" name="fld_post1" onKeyUp="AjaxZip3.zip2addr(this,'','fld_addr1','fld_addr1');" required/>
                                        </div>
                                    </div>
                                    <div class="field_address5"><p>※7桁で入力　» <a target="_blank" href="https://www.post.japanpost.jp/zipcode/">郵便番号を調べる</a></p></div>
                                </div>
                            </div>
                            <div class="field_address1">
                                <div class="field_cap">住　　所</div>
                                <div class="field_control">
                                    <input type="text" name="fld_addr1" id="auto_address1_2" required/>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form_field">
                        <div class="field_cap">取付先ご住所</div>
                        <div class="field_address">
                            <div class="field_address2">
                                <div class="field_cap">郵便番号</div>
                                <div class="field_address3">
                                    <div class="field_address4">
                                        <div class="field_control">
                                            <input pattern="[0-9]{7,7}" type="text" name="fld_post2" onKeyUp="AjaxZip3.zip2addr(this,'','fld_addr2','fld_addr2');"/>
                                        </div>
                                    </div>
                                    <!-- <div class="addressfill_btn" id="js_autoaddress2">住所自動入力</div> -->
                                    <div class="field_address5"><p>※7桁で入力　» <a target="_blank" href="https://www.post.japanpost.jp/zipcode/">郵便番号を調べる</a></p></div>
                                </div>
                            </div>
                            <div class="field_address1">
                                <div class="field_cap">住　　所</div>
                                <div class="field_control">
                                    <input type="text" name="fld_addr2" id="auto_address2_2"/>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form_field">
                        <div class="field_cap">設置希望サイズ</div>
                        <div class="field_control">
                            <div class="radio_set">
                                <div class="radio_wrap"><input type="radio" name="fld_size" value="16号" id="fld_size1"><label for="fld_size1">16号</label></div>
                                <div class="radio_wrap"><input type="radio" name="fld_size" value="20号" id="fld_size2"><label for="fld_size2">20号</label></div>
                                <div class="radio_wrap"><input type="radio" name="fld_size" value="24号" id="fld_size3"><label for="fld_size3">24号</label></div>
                                <div class="radio_wrap"><input type="radio" name="fld_size" value="その他" id="fld_size4"><label for="fld_size4">その他</label></div>
                            </div>
                        </div>
                    </div>
                    <div class="form_field">
                        <div class="field_cap">設置希望メーカー</div>
                        <div class="field_control">
                            <div class="radio_set">
                                <div class="radio_wrap"><input type="radio" name="fld_maker" value="パロマ" id="fld_maker1"><label for="fld_maker1">パロマ</label></div>
                                <div class="radio_wrap"><input type="radio" name="fld_maker" value="ノーリツ" id="fld_maker2"><label for="fld_maker2">ノーリツ</label></div>
                                <div class="radio_wrap"><input type="radio" name="fld_maker" value="リンナイ" id="fld_maker3"><label for="fld_maker3">リンナイ</label></div>
                                <div class="radio_wrap"><input type="radio" name="fld_maker" value="その他" id="fld_maker4"><label for="fld_maker4">その他</label></div>
                            </div>
                        </div>
                    </div>
                    <div class="form_field">
                        <div class="field_cap">現在使用中の給湯器品番</div>
                        <div class="field_control">
                            <input type="text" name="fld_current"/>
                        </div>
                    </div>
                    <div class="form_field">
                        <div class="field_cap">現場の写真添付</div>
                        <div class="field_control">
                            <div class="file_cap">
                                <p>設置現場の写真を添付いただきますとお見積りがスムーズになります。</p>
                                <span>※対応画像はJPG･JPEG･PNG･GIF （サイズ上限：1点5MB）</span>
                            </div>
                            <div class="file_set">
                                <input type="file" name="attachment1" accept="image/png, image/jpeg"/>
                                <input type="file" name="attachment2" accept="image/png, image/jpeg"/>
                                <input type="file" name="attachment3" accept="image/png, image/jpeg"/>
                                <input type="file" name="attachment4" accept="image/png, image/jpeg"/>
                                <input type="file" name="attachment5" accept="image/png, image/jpeg"/>
                            </div>
                        </div>
                    </div>					
                    <div class="form_field">
                        <div class="field_cap">お問い合わせ内容</div>
                        <div class="field_control">
                            <textarea name="fld_message"></textarea>
                        </div>
                    </div>
                    <div class="privacy_field">
                        <div class="hx4"></div>
                        <div class="form_field">
                            <div class="field_control">
                                <div class="privacy_desc">
                                    <p><a target="_blank" href="<?php echo get_site_url(); ?>/privacy/">個人情報の取り扱いについて</a></p>
                                </div>
                                <div class="hx2"></div>
                                <div class="privacy_checkbox">
                                    <input type="checkbox" id="id_privacy" value="" required=""><label for="id_privacy">当社プライバシーポリシーを理解しました。</label>
                                </div>
                            </div>
                        </div>
                        <div class="hx4"></div>
                    </div>
                    <input class="abs_hidden" value="送信する" id="form_submit" type="submit">
                    <div class="field_contactbtn">
                        <input type="hidden" name="submit-confirm" value="submit-confirm">
                        <button class="formbtn_send" type="button" id="google_check">送信する</button>
                    </div>
                </form>
            </div>
            <div class="hx10"></div>
        </div>
    </div>
    <div class="hx10"></div>
</section>
<script>
document.getElementById('google_check').addEventListener('click', 
    function(event) {
        event.preventDefault();
        grecaptcha.ready(function() {
            grecaptcha.execute('6LdwBGQpAAAAAPsn3hauzNxct1O4Ppm8dOCxro6N', {action: 'contact'}).then(function(token) {
                let recaptchaResponse = document.getElementById("recaptchaResponse");
                recaptchaResponse.value = token; // Set the recaptcha response
                let submit_btn = document.getElementById("form_submit");
                submit_btn.click();
            });
        });
    }
);
</script>

<!-- CONTAIN_END -->
<?php
get_footer();
