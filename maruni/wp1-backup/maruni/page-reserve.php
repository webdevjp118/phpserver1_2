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
    $field8_1 = isset($_POST['field8_1']) ? $_POST['field8_1']: '';
    $field8_2 = isset($_POST['field8_2']) ? $_POST['field8_2']: '';
    $field9_1 = isset($_POST['field9_1']) ? $_POST['field9_1']: '';
    $field9_2 = isset($_POST['field9_2']) ? $_POST['field9_2']: '';
    $field10_1 = isset($_POST['field10_1']) ? $_POST['field10_1']: '';
    $field10_2 = isset($_POST['field10_2']) ? $_POST['field10_2']: '';
    $field11 = isset($_POST['field11']) ? $_POST['field11']: '';
    $field12 = isset($_POST['field12']) ? $_POST['field12']: '';
    $field13_1 = isset($_POST['field13_1']) ? $_POST['field13_1']: '';
    $field13_2 = isset($_POST['field13_2']) ? $_POST['field13_2']: '';
    $field13_3 = isset($_POST['field13_3']) ? $_POST['field13_3']: '';
    $field14 = isset($_POST['field14']) ? $_POST['field14']: '';
    $field15 = isset($_POST['field15']) ? $_POST['field15']: '';
    $field16 = isset($_POST['field16']) ? $_POST['field16']: '';
    $field17 = isset($_POST['field17']) ? $_POST['field17']: '';
    $field18 = isset($_POST['field18']) ? $_POST['field18']: '';
    $field19 = isset($_POST['field19']) ? $_POST['field19']: '';
    $field20 = isset($_POST['field20']) ? $_POST['field20']: '';
    $field21 = isset($_POST['field21']) ? $_POST['field21']: '';
    
    $to      = 'prgfinal216@gmail.com';

    $message = "
    希望メニュー : ".$field1."<br>
    アートメイクを希望の方のみお答えください<br>
    ".$field2."<br>
    症状から相談 : ".$field3."<br>
    ".$field4."<br>
    お名前 : ".$field5."<br>
    メールアドレス : ".$field6."<br>
    電話番号 : ".$field7."<br>
    ご予約日<br>
    第1希望 : ".$field8_1." ".$field8_2."<br>
    第2希望 : ".$field9_1." ".$field9_2."<br>
    第3希望 : ".$field10_1." ".$field10_2."<br>
    ご住所 : ".$field11."<br>
    性別 : ".$field12."<br>
    生年月日 : ".$field13_1.".".$field13_2.".".$field13_3."<br>
    ご職業 : ".$field14."<br>
    どのような症状・お悩みですか<br>
    ".$field15."<br>
    今までに美容施術を受けたことがありますか<br>
    ".$field16."<br>
    はいの方は施術内容をご記入ください<br>
    ".$field17."<br>
    当てはまるものはありますか<br>
    ".$field18."<br>
    近いうちに大切なご予定はありますか？（同窓会・結婚式・旅行・撮影など）<br>
    ".$field19."<br>
    ありの方はいつ頃を予定していますか<br>
    ".$field20."<br>
    当院を知ったきっかけ<br>
    ".$field21."<br>
    ";

    $subject = 'お問い合わせがありました';

    $headers = "From: " . $field6 . "\r\n";
    $headers .= "Reply-To: " . $field6 . "\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=UTF-8\r\n";
    if(mail($to, $subject, $message, $headers)) {
?>
<div class="access_dlg cdialog open">
    <div class="cdlg_box">
        <div class="cdlg_close"></div>
        <div class="cdlg_inner">
            <p>この度はMARUNIクリニックにご予約いただきまして<br>
                誠にありがとうございます。<br>
                担当のスタッフよりメールにて<br>
                ご連絡致しますのでお待ちくださいませ。</p>
        </div>
    </div>
</div>
<?php
    } else {
?>
<div class="access_dlg cdialog open">
    <div class="cdlg_box">
        <div class="cdlg_close"></div>
        <div class="cdlg_inner">
            <p>この度はMARUNIクリニックにご予約いただきまして<br>
                誠にありがとうございます。<br>
                担当のスタッフよりメールにて<br>
                ご連絡致しますのでお待ちくださいませ。</p>
        </div>
    </div>
</div>
<?php
    }  
}
?>
<!-- CONTAIN_START -->
<section id="contain" class="main_sections">    	        
    <div class="instead_head"></div>
    <a class="sticker_contact" href="#">
        <div class="stickcontact_inner">
            <img class="stickcontact_img" src="<?php echo get_stylesheet_directory_uri(); ?>/images/contact_sticker.jpg">
            <div class="stickcontact_text pxt_center">
                LINEで予約する<br class="br_pc">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/school_arrow_right.svg">
            </div>
        </div>
    </a>
    <div class="pg_fv">
        <div class="pgfv_layer0">
            <div class="pgfv_title">
                <h1>Reserve</h1>
                <p>予約</p>
            </div>
        </div>
        <div class="pgfv_layer1">
            <div class="pgfv1_left">
                <img class="pgfv1_leftbg" src="<?php echo get_stylesheet_directory_uri(); ?>/images/pgfv0_left.svg">
                <img class="pgfv_scroll" src="<?php echo get_stylesheet_directory_uri(); ?>/images/pgfv_scroll.svg">
            </div>
            <div class="pgfv1_right">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/pg_menu.png">
            </div>
        </div>
        <div class="breadcrumb_block">
            <a href="<?php echo get_site_url(); ?>/">ホーム</a>
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/bread_line.svg">
            <span>予約</span>
        </div>
    </div>
    <div class="hx10"></div>
    <div class="contactform_block">
        <div class="contactform_width">
            <form action="" method="post" enctype="multipart/form-data">
                <div class="form_field">
                    <div class="field_cap">希望メニュー（複数選択可能）</div>
                    <div class="field_control">
                        <div class="radio_set">
                            <div class="radio_wrap"><input type="checkbox" name="field1" value="アートメイク" id="radio_field1_1"><label for="radio_field1_1">アートメイク</label></div>
                            <div class="radio_wrap"><input type="checkbox" name="field1" value="ボトックス" id="radio_field1_2"><label for="radio_field1_2">ボトックス</label></div>
                            <div class="radio_wrap"><input type="checkbox" name="field1" value="ヒアルロン酸" id="radio_field1_3"><label for="radio_field1_3">ヒアルロン酸</label></div>
                            <div class="radio_wrap"><input type="checkbox" name="field1" value="シミケア" id="radio_field1_4"><label for="radio_field1_4">シミケア</label></div>
                            <div class="radio_wrap"><input type="checkbox" name="field1" value="ピーリング" id="radio_field1_5"><label for="radio_field1_5">ピーリング</label></div>
                            <div class="radio_wrap"><input type="checkbox" name="field1" value="⽩⽟注射" id="radio_field1_6"><label for="radio_field1_6">⽩⽟注射</label></div>
                            <div class="radio_wrap"><input type="checkbox" name="field1" value="⽩⽟点滴" id="radio_field1_7"><label for="radio_field1_7">⽩⽟点滴</label></div>
                            <div class="radio_wrap"><input type="checkbox" name="field1" value="プラセンタ点滴" id="radio_field1_8"><label for="radio_field1_8">プラセンタ点滴</label></div>
                            <div class="radio_wrap"><input type="checkbox" name="field1" value="白玉注射" id="radio_field1_9"><label for="radio_field1_9">白玉注射</label></div>
                            <div class="radio_wrap"><input type="checkbox" name="field1" value="疲労回復注射" id="radio_field1_10"><label for="radio_field1_10">疲労回復注射</label></div>
                            <div class="radio_wrap"><input type="checkbox" name="field1" value="⼆⽇酔い点滴" id="radio_field1_11"><label for="radio_field1_11">⼆⽇酔い点滴</label></div>
                            <div class="radio_wrap"><input type="checkbox" name="field1" value="ニキビ注射" id="radio_field1_12"><label for="radio_field1_12">ニキビ注射</label></div>
                            <div class="radio_wrap"><input type="checkbox" name="field1" value="肥満遺伝⼦検査/DNA検査" id="radio_field1_13"><label for="radio_field1_13">肥満遺伝⼦検査/DNA検査</label></div>
                            <div class="radio_wrap"><input type="checkbox" name="field1" value="肌⽼化遺伝⼦検査/DNA検査" id="radio_field1_14"><label for="radio_field1_14">肌⽼化遺伝⼦検査/DNA検査</label></div>
                            <div class="radio_wrap"><input type="checkbox" name="field1" value="内服薬" id="radio_field1_15"><label for="radio_field1_15">内服薬</label></div>
                            <div class="radio_wrap"><input type="checkbox" name="field1" value="外用薬" id="radio_field1_16"><label for="radio_field1_16">外用薬</label></div>
                        </div>
                    </div>
                </div>
                <div class="form_field">
                    <div class="field_cap">アートメイクを希望の方のみお答えください</div>
                    <div class="field_control">
                        <div class="radio_set">
                            <div class="radio_wrap"><input type="checkbox" name="field2" value="アイブロウ" id="radio_field2_1"><label for="radio_field2_1">アイブロウ</label></div>
                            <div class="radio_wrap"><input type="checkbox" name="field2" value="アイライン" id="radio_field2_2"><label for="radio_field2_2">アイライン</label></div>
                            <div class="radio_wrap"><input type="checkbox" name="field2" value="リップ" id="radio_field2_3"><label for="radio_field2_3">リップ</label></div>
                            <div class="radio_wrap"><input type="checkbox" name="field2" value="傷跡修正" id="radio_field2_4"><label for="radio_field2_4">傷跡修正</label></div>
                        </div>
                    </div>
                </div>
                <div class="form_field">
                    <div class="field_cap">症状から相談（複数選択可能）</div>
                    <div class="field_control">
                        <div class="radio_set">
                            <div class="radio_wrap"><input type="checkbox" name="field3" value="しみ" id="radio_field3_1"><label for="radio_field3_1">しみ</label></div>
                            <div class="radio_wrap"><input type="checkbox" name="field3" value="くすみ" id="radio_field3_2"><label for="radio_field3_2">くすみ</label></div>
                            <div class="radio_wrap"><input type="checkbox" name="field3" value="しわ" id="radio_field3_3"><label for="radio_field3_3">しわ</label></div>
                            <div class="radio_wrap"><input type="checkbox" name="field3" value="ほうれい線" id="radio_field3_4"><label for="radio_field3_4">ほうれい線</label></div>
                            <div class="radio_wrap"><input type="checkbox" name="field3" value="ニキビ跡" id="radio_field3_5"><label for="radio_field3_5">ニキビ跡</label></div>
                            <div class="radio_wrap"><input type="checkbox" name="field3" value="毛穴の広がり" id="radio_field3_6"><label for="radio_field3_6">毛穴の広がり</label></div>
                            <div class="radio_wrap"><input type="checkbox" name="field3" value="アートメイク" id="radio_field3_7"><label for="radio_field3_7">アートメイク</label></div>
                            <div class="radio_wrap"><input type="checkbox" name="field3" value="日焼け" id="radio_field3_8"><label for="radio_field3_8">日焼け</label></div>
                            <div class="radio_wrap"><input type="checkbox" name="field3" value="二日酔い" id="radio_field3_9"><label for="radio_field3_9">二日酔い</label></div>
                            <div class="radio_wrap"><input type="checkbox" name="field3" value="その他" id="radio_field3_10"><label for="radio_field3_10">その他</label></div>
                        </div>
                    </div>
                </div>
                <div class="form_field">
                    <div class="field_control">
                        <div class="radio_set">
                            <div class="radio_wrap"><input type="radio" name="field4" value="カウンセリングと施術を希望する" id="radio_field4_1"><label for="radio_field4_1">カウンセリングと施術を希望する</label></div>
                            <div class="radio_wrap"><input type="radio" name="field4" value="カウンセリングのみ希望する" id="radio_field4_2"><label for="radio_field4_2">カウンセリングのみ希望する</label></div>
                        </div>
                    </div>
                </div>
                <div class="form_field">
                    <div class="field_cap">お名前</div>
                    <div class="field_control">
                        <input type="text" class="input_halfw" name="field5" required/>
                    </div>
                </div>
                <div class="form_field">
                    <div class="field_cap">メールアドレス</div>
                    <div class="field_control">
                        <input type="email" class="input_halfw" name="field6" required/>
                    </div>
                </div>
                <div class="form_field">
                    <div class="field_cap">電話番号</div>
                    <div class="field_control">
                        <input type="text" class="input_halfw" name="field7" required/>
                    </div>
                </div>
                <div class="form_field">
                    <div class="field_cap">ご予約日</div>
                    <div class="field_control">
                        <p>本日から2営業日以降の希望日時をお願いします。</p>
                        <div class="hx3"></div>
                        <div class="select_set">
                            <div class="select_wrap">
                                <p>第1希望</p>
                                <div class="hx2"></div>
                                <select name="field8_1">
                                    <option value="volvo">ご希望の日にち</option>
                                    <option value="XXX">XXX</option>
                                    <option value="XXX">XXX</option>
                                    <option value="XXX">XXX</option>
                                </select>
                                <div class="hx1"></div>
                                <select name="field8_2">
                                    <option value="volvo">ご希望の時間帯</option>
                                    <option value="XXX">XXX</option>
                                    <option value="XXX">XXX</option>
                                    <option value="XXX">XXX</option>
                                </select>
                            </div>
                            <div class="select_wrap">
                                <p>第2希望</p>
                                <div class="hx2"></div>
                                <select name="field9_1">
                                    <option value="volvo">ご希望の日にち</option>
                                    <option value="XXX">XXX</option>
                                    <option value="XXX">XXX</option>
                                    <option value="XXX">XXX</option>
                                </select>
                                <div class="hx1"></div>
                                <select name="field9_2">
                                    <option value="volvo">ご希望の時間帯</option>
                                    <option value="XXX">XXX</option>
                                    <option value="XXX">XXX</option>
                                    <option value="XXX">XXX</option>
                                </select>
                            </div>
                            <div class="select_wrap">
                                <p>第3希望</p>
                                <div class="hx2"></div>
                                <select name="field10_1">
                                    <option value="volvo">ご希望の日にち</option>
                                    <option value="XXX">XXX</option>
                                    <option value="XXX">XXX</option>
                                    <option value="XXX">XXX</option>
                                </select>
                                <div class="hx1"></div>
                                <select name="field10_2">
                                    <option value="volvo">ご希望の時間帯</option>
                                    <option value="XXX">XXX</option>
                                    <option value="XXX">XXX</option>
                                    <option value="XXX">XXX</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form_field">
                    <div class="ask_row">
                        <div class="ask_reserve">
                            <a class="com_job_btn" href="#" id="submit_trick">
                                <span>ここまでで予約をする</span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="6.103" height="10.793" viewBox="0 0 6.103 10.793">
                                    <path d="M328.1,2380.691l5.043,5.043-5.043,5.043" transform="translate(-327.743 -2380.337)" fill="none" stroke-width="1"></path>
                                </svg>                      
                            </a>
                        </div>
                        <div class="ask_continue">
                            <a class="com_job_btn" href="#anchor_extra_fields" id="open_extra_fields">
                                <span>問診票の記入に進む</span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="6.103" height="10.793" viewBox="0 0 6.103 10.793">
                                    <path d="M328.1,2380.691l5.043,5.043-5.043,5.043" transform="translate(-327.743 -2380.337)" fill="none" stroke-width="1"></path>
                                </svg>                      
                            </a>
                            <div class="ask_desc">問診票までの記入がお済みですと診察がまでがスムーズになります</div>
                        </div>
                    </div>
                </div>
                <div class="pmh_anchor" id="anchor_extra_fields"></div>
                <div class="extra_fields" id="extra_fields" style="display: none;">
                    <div class="form_field">
                        <div class="field_cap">ご住所</div>
                        <div class="field_control">
                            <input type="text" name="field11" />
                        </div>
                    </div>
                    <div class="form_field">
                        <div class="field_cap">性別</div>
                        <div class="field_control">
                            <div class="radio_set">
                                <div class="radio_wrap"><input type="radio" name="field12" value="女性" id="radio_field12_1"><label for="radio_field12_1">女性</label></div>
                                <div class="radio_wrap"><input type="radio" name="field12" value="男性" id="radio_field12_2"><label for="radio_field12_2">男性</label></div>
                            </div>
                        </div>
                    </div>
                    <div class="form_field">
                        <div class="field_cap">生年月日</div>
                        <div class="field_control">
                            <div class="birth_set">
                                <select name="field13_1">
                                    <option value="2001">2001</option>
                                    <option value="2002">2002</option>
                                    <option value="2003">2003</option>
                                    <option value="2004">2004</option>
                                </select>
                                <span>年</span>
                                <select name="field13_2">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                </select>
                                <span>月</span>
                                <select name="field13_3">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                </select>
                                <span>日</span>
                            </div>
                        </div>
                    </div>
                    <div class="form_field">
                        <div class="field_cap">ご職業</div>
                        <div class="field_control">
                            <input type="text" name="field14" />
                        </div>
                    </div>
                    <div class="form_field">
                        <div class="field_cap">どのような症状・お悩みですか</div>
                        <div class="field_control">
                            <textarea name="field15"></textarea>
                        </div>
                    </div>
                    <div class="form_field">
                        <div class="field_cap">今までに美容施術を受けたことがありますか</div>
                        <div class="field_control">
                            <div class="radio_set">
                                <div class="radio_wrap"><input type="radio" name="field16" value="はい" id="radio_field16_1"><label for="radio_field16_1">はい</label></div>
                                <div class="radio_wrap"><input type="radio" name="field16" value="いいえ" id="radio_field16_2"><label for="radio_field16_2">いいえ</label></div>
                            </div>
                            <div class="hx2"></div>
                            <p>はいの方は施術内容をご記入ください</p>
                            <div class="hx2"></div>
                            <textarea name="field17"></textarea>
                        </div>
                    </div>
                    <div class="form_field">
                        <div class="field_cap">当てはまるものはありますか</div>
                        <div class="field_control">
                            <div class="radio_set">
                                <div class="radio_wrap"><input type="radio" name="field18" value="妊娠中" id="radio_field18_1"><label for="radio_field18_1">妊娠中</label></div>
                                <div class="radio_wrap"><input type="radio" name="field18" value="アレルギー体質" id="radio_field18_2"><label for="radio_field18_2">アレルギー体質</label></div>
                                <div class="radio_wrap"><input type="radio" name="field18" value="ケロイド体質" id="radio_field18_3"><label for="radio_field18_3">ケロイド体質</label></div>
                            </div>
                        </div>
                    </div>
                    <div class="form_field">
                        <div class="field_cap">近いうちに大切なご予定はありますか？（同窓会・結婚式・旅行・撮影など）</div>
                        <div class="field_control">
                            <div class="radio_set">
                                <div class="radio_wrap"><input type="radio" name="field19" value="はい" id="radio_field19_1"><label for="radio_field19_1">はい</label></div>
                                <div class="radio_wrap"><input type="radio" name="field19" value="いいえ" id="radio_field19_2"><label for="radio_field19_2">いいえ</label></div>
                            </div>
                            <div class="hx2"></div>
                            <p>ありの方はいつ頃を予定していますか</p>
                            <div class="hx2"></div>
                            <textarea name="field20"></textarea>
                        </div>
                    </div>
                    <div class="form_field">
                        <div class="field_cap">当院を知ったきっかけ</div>
                        <div class="field_control">
                            <div class="radio_set">
                                <div class="radio_wrap"><input type="radio" name="field21" value="知人の紹介" id="radio_field21_1"><label for="radio_field21_1">知人の紹介</label></div>
                                <div class="radio_wrap"><input type="radio" name="field21" value="HPをみて" id="radio_field21_2"><label for="radio_field21_2">HPをみて</label></div>
                                <div class="radio_wrap"><input type="radio" name="field21" value="SNSをみて" id="radio_field21_3"><label for="radio_field21_3">SNSをみて</label></div>
                                <div class="radio_wrap"><input type="radio" name="field21" value="その他" id="radio_field21_4"><label for="radio_field21_4">その他</label></div>
                            </div>
                        </div>
                    </div>
                </div>            
                <div class="privacy_field">
                    <div class="form_field">
                        <div class="field_control">
                            <div class="hx3"></div>
                            <textarea>
    Gメディカルクリニック 新橋院・プライバシーポリシー
    YGメディカルクリニック 新橋院（以下「当院」といいます。）は個人の人格尊重の理念のもとに、プライバシー情報の保護に最大限の注意を払っております。

    以下、当ウェブサイトにおいて当院が収集する個人情報に関する、プライバシー保護の考え方を記します。当サイトでお伺いする個人情報についてメール相談・オンライン予約フォームなどを利用される際、メールアドレス・お名前その他の個人情報の入力が必要な場合があります。これらの個人情報は、ご相談内容に適切にお答えしたり、資料をお送りしたり、ご予約を受け付けたりするために必要なものです。また、当ウェブサイトをより快適にご利用いただけるものにするために、ご意見やご要望などについてのご質問をさせていただく場合もございますが、この場合は、任意でお答えいただくようになっております。お答えいただけない場合も、ご予約等のご利用に支障はございません。個人情報の保護管理・利用について当院は、ご提供いただいた個人情報の取扱いについて、最大限の注意を払います。当院は、利用者等の事前の同意がある場合、法令に基づく場合、利用目的の達成に必要な範囲内で個人情報の取扱いを委託する場合等、法令により許される場合でない限り、個人情報を第三者に提供いたしません。皆様へより良い医療サービスを提供するために個人情報の取扱いを外部に委託する事があります。この場合、業務委託先に対し、情報等遺漏のないよう、管理体制に充分注意を払うべく指示・監督を行います。個人情報の開示について下記の項目に該当する場合、ご提供いただいた個人情報を開示することがあります。

    1. お客様が他のお客様もしくは当院に不利益を及ぼす行為をした事が判明した場合、当院はお客様の個人情報をその当事者、警察、関連諸機関に通知することがあります。
                            </textarea>
                            <div class="hx3"></div>
                            <div class="privacy_checkbox">
                                <input type="checkbox" id="id_privacy" value="" required><label for="id_privacy">プライバシーポリシーに同意する</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="field_contactbtn">
                    <input type="hidden" name="submit-confirm" value="submit-confirm">
                    <input type="submit" value="予約する" id="form_submit">
                </div>
            </form>            
        </div>
        <div class="hx10"></div>
    </div>
    <!-- FOOTER_START -->
    <footer id="footer">
        <div class="footer_block">
            <div class="page_top" id="gototop">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/page_top.svg">
            </div>
            <div class="footer_bg"></div>
            <div class="footer_wrap">
                <div class="footer_row">
                    <div class="footer_logo"> 
                        <a href="<?php echo get_site_url(); ?>/">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo_green.svg" alt=""/>
                        </a>
                    </div>
                    <div class="footer_menu">
                        <div class="footer_socials">
                            <a href="#" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/footer_insta.svg"></a>
                        </div>
                    </div>
                </div>
                <div class="footer_copyright">© maruni.clinic</div>
            </div>        
        </div>
    </footer>
    <!-- FOOTER_END -->
</section>
<!-- CONTAIN_END -->
<?php
get_footer();
