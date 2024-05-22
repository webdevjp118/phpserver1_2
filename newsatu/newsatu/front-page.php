<?php
get_header();
?>
<?php
if(isset($_POST['submit-confirm']) && ($_POST['submit-confirm'] == 'submit-confirm')) {

    $field1 = isset($_POST['field1']) ? $_POST['field1']: '';
    $field1_2 = isset($_POST['field1_2']) ? $_POST['field1_2']: '';
    if($field1 == 'その他') {
        $field1 .= '（'.$field1_2.'）';
    }
    $field2 = isset($_POST['field2']) ? $_POST['field2']: '';
    $field3 = isset($_POST['field3']) ? $_POST['field3']: '';
    $field4 = isset($_POST['field4']) ? $_POST['field4']: '';
    $field5 = isset($_POST['field5']) ? $_POST['field5']: '';
    $field5_2 = isset($_POST['field5_2']) ? $_POST['field5_2']: '';
    if($field5 == 'その他') {
        $field5 .= '（'.$field5_2.'）';
    }
    $field6 = isset($_POST['field6']) ? $_POST['field6']: '';
    $field7 = isset($_POST['field7']) ? $_POST['field7']: '';
    $field8 = isset($_POST['field8']) ? $_POST['field8']: '';
    $field9 = isset($_POST['field9']) ? $_POST['field9']: '';
    
    // $to      = 'prgfinal216@gmail.com';
    $to = 'info@mrc-archi.com';

    $message = "
    株式会社MRCへお問い合わせを頂き、誠にありがとうございます。<br>
    内容を確認させて頂き、3営業日以内に担当者よりご連絡を差し上げます。<br>
    <br>
    お急ぎの場合は、弊社電話番号(03-6384-0024)までご連絡を頂ければ幸甚でございます。<br>
    どうぞよろしくお願い申し上げます。<br>
    <br>
    =================================================<br>
    <br>
    ご希望の相談内容 : ".$field1."<br>
    <br>
    お問合せ者様の情報<br>
    <br>
    お名前 : ".$field2."<br>
    連絡先電話番号 : ".$field3."<br>
    メールアドレス : ".$field4."<br>
    お立場 : ".$field5."<br>
    <br>
    対象物件について<br>
    <br>
    都道府県 : ".$field6."<br>
    マンション名 : ".$field7."<br>
    工事の内容 : ".$field8."<br>
    工事の予定時期 : ".$field9."<br>
    <br>
    =================================================";

    $subject = 'お問い合わせがありました';

    $headers = "From: " . $field4 . "\r\n";
    $headers .= "Reply-To: " . $field4 . "\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=UTF-8\r\n";

    if(mail($to, $subject, $message, $headers)) {
    } else {
        echo '<script>alert("送信失敗しました。"); location.href="'.home_url().'"</script>';
    }  

    $subject = 'お問い合わせありがとうございました';

    $headers = "From: " . $to . "\r\n";
    $headers .= "Reply-To: " . $to . "\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=UTF-8\r\n";
    
    if(mail($field4, $subject, $message, $headers)) {
        echo '<script>alert("お問い合わせ、誠にありがとうございます。"); location.href="'.home_url().'"</script>';
    } else {
        echo '<script>alert("送信失敗しました。"); location.href="'.home_url().'"</script>';
    }  
}
?>
<!-- CONTAIN_START -->
<div class="state_vals is_top"></div>
<div class="top_fv">
    <div class="tpfv_content">
        <div class="tpfv_text">
            <h1>
                <span>マンション大規模修繕工事を</span><br>
                も·っ·と·簡·単·に
            </h1>
        </div>
        <div class="tpfv_btn">
            <a href="#contact" class="global_btn"><span>お問い合わせ</span><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/link_in.svg"></a>
        </div>
    </div>
</div>
<div class="hx8"></div>
<div class="title_img">
    <div class="com_title initani initani_cb">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/title1.svg">
    </div>    
</div>
<div class="hx8"></div>
<div class="work_title">
    <div class="com_title initani initani_cb"><h2>実績例</h2></div>
</div>
<div class="hx4"></div>
<div class="just_img panil3">
    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/img01.jpg">
</div>
<div class="work_sec">
    <div class="work_grid pinpos">
        <div class="work_item">
            <div class="work_item1">
                <div class="work_ititle">case 01</div>
                <div class="work_irow">
                    <div class="work_cap">規模</div>
                    <div class="work_text">26階建 420戸(外装タイル張)</div>
                </div>
                <div class="work_irow">
                    <div class="work_cap">工事内容</div>
                    <div class="work_text">屋上防水・外壁修繕・バルコニー防水・内廊下修繕等</div>
                </div>
                <div class="work_irow">
                    <div class="work_cap">設計概算金額</div>
                    <div class="work_text">約<span class="span1">6</span><span class="span2">億</span><span class="span1">1</span><span class="span2">千万円</span>(税込)</div>
                </div>
                <div class="work_irow">
                    <div class="work_cap X_2">入札後金額</div>
                    <div class="work_text">約<span class="span1">4</span><span class="span2">億</span><span class="span1">4</span><span class="span2">千万円</span>(税込)</div>
                </div>
            </div>
            <div class="work_percent">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/work_percent01.svg">
            </div>
        </div>
        <div class="work_item">
            <div class="work_item1">
                <div class="work_ititle">case 02</div>
                <div class="work_irow">
                    <div class="work_cap">規模</div>
                    <div class="work_text">9階建 230戸(外装タイル張)</div>
                </div>
                <div class="work_irow">
                    <div class="work_cap">工事内容</div>
                    <div class="work_text">屋上防水補修・外壁修繕・バルコニー部分補修・共用廊下部分補修等</div>
                </div>
                <div class="work_irow">
                    <div class="work_cap">設計概算金額</div>
                    <div class="work_text">約<span class="span1">2</span><span class="span2">億</span><span class="span1">5</span><span class="span2">千万円</span>(税込)</div>
                </div>
                <div class="work_irow">
                    <div class="work_cap X_2">入札後金額</div>
                    <div class="work_text">約<span class="span1">2</span><span class="span2">億円</span>(税込)</div>
                </div>
            </div>
            <div class="work_percent">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/work_percent02.svg">
            </div>
        </div>
        <div class="work_item">
            <div class="work_item1">
                <div class="work_ititle">case 03</div>
                <div class="work_irow">
                    <div class="work_cap">規模</div>
                    <div class="work_text">8階建 100戸(外装タイル張)</div>
                </div>
                <div class="work_irow">
                    <div class="work_cap">工事内容</div>
                    <div class="work_text">屋上防水・外壁修繕・バルコニー防水・共用廊下部分補修等</div>
                </div>
                <div class="work_irow">
                    <div class="work_cap">設計概算金額</div>
                    <div class="work_text">約<span class="span1">1</span><span class="span2">億</span><span class="span1">2</span><span class="span2">千万円</span>(税込)</div>
                </div>
                <div class="work_irow">
                    <div class="work_cap X_2">入札後金額</div>
                    <div class="work_text">約<span class="span1">8</span><span class="span2">千</span><span class="span1">6</span><span class="span2">百万円</span>(税込)</div>
                </div>
            </div>
            <div class="work_percent">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/work_percent01.svg">
            </div>
        </div>
    </div>
</div>
<div class="hx6"></div>
<div class="steps_title">
    <div class="com_title initani initani_cb">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/subtitle2.svg">
    </div>
</div>
<div class="hx4"></div>
<div class="steps_marqhidden panil3">
    <div class="steps_marq">
        <div class="steps_marq1"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/img02.jpg"></div>
        <div class="steps_marq1"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/img02.jpg"></div>
    </div>
</div>
<div class="steps_sec">
    <div class="steps_grid pinpos">
        <div class="step_item">
            <div class="step_top">
                <div class="step_img">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/step01.svg">
                </div>
                <div class="step_arrow"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/step_arrow.svg"></div>
            </div>
            <div class="step_text">登録</div>
        </div>
        <div class="step_item">
            <div class="step_top">
                <div class="step_img">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/step02.svg">
                </div>
                <div class="step_arrow"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/step_arrow.svg"></div>
            </div>
            <div class="step_text">工事内容登録</div>
        </div>
        <div class="step_item">
            <div class="step_top">
                <div class="step_img">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/step03.svg">
                </div>
                <div class="step_arrow"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/step_arrow.svg"></div>
            </div>
            <div class="step_text">条件に合う<br class="disb_sp">工事会社を選ぶ</div>
        </div>
        <div class="step_item">
            <div class="step_top">
                <div class="step_img">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/step04.svg">
                </div>
            </div>
            <div class="step_text">見積取得</div>
        </div>
    </div>    
</div>
<div class="global_btns js_opac">
    <a href="#contact" class="global_btn"><span>お問い合わせ</span><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/link_in.svg"></a>
    <a href="https://bestreform.jp/" class="global_btn"><span>ニューサツはこちら</span><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/link_out.svg"></a>
</div>
<div class="hx8"></div>
<div class="title_img">
    <div class="com_title initani initani_cb">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/title2.svg">
    </div>
</div>
<div class="hx3"></div>
<div class="just_img panil3">
    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/img03.jpg">
</div>
<div class="mansion_sec">
    <div class="mansion_sec1">
        <div class="mansion_title1 js_opac">
            施工会社は所定の審査を通過しています。<br>
            また管理組合様のご要望で履行保証保険や瑕疵保険を付与する事も可能です。
        </div>
        <div class="hx4"></div>
        <div class="mansion_img01 js_opac">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/mansion_img01.jpg">
        </div>        
        <div class="hx4"></div>
        <div class="mansion_grid pinpos">
            <div class="mansion_item">
                <div class="mansion_arrow"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/mansion_arrow.svg"></div>
                <div class="mansion_top">
                    施工会社のことが<br class="disb_pc">
                    よくわかる
                </div>
                <div class="mansion_text">施工会社は全社実名公開。<br>会社紹介の掲載しているのでどんな会社か判断可能。</div>
            </div>
            <div class="mansion_item">
                <div class="mansion_arrow disf_pc"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/mansion_arrow.svg"></div>
                <div class="mansion_top">
                    過去の工事実績が<br class="disb_pc">
                    よくわかる
                </div>
                <div class="mansion_text">過去の工事実績についての概要や予算感などがわかります。</div>
            </div>
            <div class="mansion_item">
                <div class="mansion_arrow disf_pc"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/mansion_arrow.svg"></div>
                <div class="mansion_top">
                    工事の評価が<br class="disb_pc">
                    よくわかる
                </div>
                <div class="mansion_text">終了した工事の評価が確認でき、見積依頼をする際の参考になります。</div>
            </div>
        </div>
    </div>
    <div class="hx4"></div>
    <div class="mansion_sec1">
        <div class="mansion_title1 js_opac">
            疑問を解消してから発注できるから安心して見積りが依頼できます。
        </div>
        <div class="hx2"></div>
        <div class="mansion_title2 js_opac">
            見積もりを依頼した複数の施工会社へ、質疑や応答、ヒアリングなどをすることで不明点をなくします。
        </div>
        <div class="hx4"></div>
        <div class="just_img js_opac">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/mansion02.png">
        </div>        
        <div class="hx6"></div>
        <div class="merit_grid pinpos">
            <div class="mansion_item merit_item">
                <div class="merit_no"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/merit01.svg"></div>
                <div class="mansion_top">
                    施工会社の
                    <br class="disb_pc">さまざまな評判を確認。
                </div>
                <div class="mansion_text">ニューサツでは、会社概要や工事完了後の評価などが確認することができます。多角的に確認した上で見積を依頼する会社を検討できます。</div>
            </div>
            <div class="mansion_item merit_item">
                <div class="merit_no"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/merit02.svg"></div>
                <div class="mansion_top">
                    最大6社の
                    <br class="disb_pc">施工会社へ依頼。
                </div>
                <div class="mansion_text">最大6社まで見積依頼をすることが可能です。見積依頼後の質疑応答機能、ヒアリング管理機能もあり、施工会社決定までフォローします。</div>
            </div>
            <div class="mansion_item merit_item">
                <div class="merit_no"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/merit03.svg"></div>
                <div class="mansion_top">
                    談合ができないので
                    <br class="disb_pc">コストダウンが可能。
                </div>
                <div class="mansion_text">どの施工会社がを入札にどの施工会社が参加しているかは公開しません。談合ができない仕組みとなっておりますので、大幅なコストダウンが可能です。</div>
            </div>
        </div>
        <div class="hx3"></div>
        <div class="mansion_title2 js_opac">
            分からない事が有れば、豊富なコンサルタント業務実績を持つ一級建築士にアドバイスをもらえます。<br class="disb_pc">
            またご要望があれば、劣化診断や仕様書作成等も対応可能です。
        </div>
    </div>

</div>
<div class="hx10"></div>
<div class="faq_sec">
    <div class="faq_left">
        <div class="faq_title">
            <div class="com_title initani initani_cb">
                <h2><span>さまざまな</span>疑問</h2>
            </div>
        </div>
    </div>
    <div class="faq_right">
        <div class="course_width">
            <div class="faq_content paccordion">
                <div class="faq_row pacc pst_show js_opac">
                    <div class="faq_header pacc_header">
                        <div class="faq_cap">
                            <div class="faq_qtext"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/q_sign.svg"></div>
                            <div class="faq_captext">直接、専門家の意見を聞きたい。</div>
                        </div>
                        <div>
                            <img class="pacc_opened" src="<?php echo get_stylesheet_directory_uri(); ?>/images/plus_icon.svg">
                            <img class="pacc_closed" src="<?php echo get_stylesheet_directory_uri(); ?>/images/minus_icon.svg">
                        </div>
                    </div>
                    <div class="faq_body pacc_collapse">
                        <div class="faq_bodyrow">
                            <div class="faq_atext">A</div>
                            <div class="faq_answer">
                                <p>お問い合わせ画面より、お問い合わせください。提携している一級建築士事務所よりアドバイスを致します。</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="faq_row pacc js_opac">
                    <div class="faq_header pacc_header">
                        <div class="faq_cap">
                            <div class="faq_qtext"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/q_sign.svg"></div>
                            <div class="faq_captext">今ある見積書から大幅に減額がされたが、低品質な工事になるか心配。</div>
                        </div>
                        <div>
                            <img class="pacc_opened" src="<?php echo get_stylesheet_directory_uri(); ?>/images/plus_icon.svg">
                            <img class="pacc_closed" src="<?php echo get_stylesheet_directory_uri(); ?>/images/minus_icon.svg">
                        </div>
                    </div>
                    <div class="faq_body pacc_collapse">
                        <div class="faq_bodyrow">
                            <div class="faq_atext">A</div>
                            <div class="faq_answer">
                                <p>ニューサツでは、選りすぐりの専門会社に登録をしていただいいるため、低品質な工事を防止することができます。</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="faq_row pacc js_opac">
                    <div class="faq_header pacc_header">
                        <div class="faq_cap">
                            <div class="faq_qtext"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/q_sign.svg"></div>
                            <div class="faq_captext">提出された見積が各社バラバラであった。どうやって選ぶか悩んでいます。</div>
                        </div>
                        <div>
                            <img class="pacc_opened" src="<?php echo get_stylesheet_directory_uri(); ?>/images/plus_icon.svg">
                            <img class="pacc_closed" src="<?php echo get_stylesheet_directory_uri(); ?>/images/minus_icon.svg">
                        </div>
                    </div>
                    <div class="faq_body pacc_collapse">
                        <div class="faq_bodyrow">
                            <div class="faq_atext">A</div>
                            <div class="faq_answer">
                                <p>会社によって材料の入荷や工法によって得意不得意があり、金額差が出てしまいます。<br>
                                    お困りであれば、提携の一級建築士事務所よりアドバイス致します。 </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="faq_row pacc js_opac">
                    <div class="faq_header pacc_header">
                        <div class="faq_cap">
                            <div class="faq_qtext"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/q_sign.svg"></div>
                            <div class="faq_captext">責任施工方式だけでは心配がある。</div>
                        </div>
                        <div>
                            <img class="pacc_opened" src="<?php echo get_stylesheet_directory_uri(); ?>/images/plus_icon.svg">
                            <img class="pacc_closed" src="<?php echo get_stylesheet_directory_uri(); ?>/images/minus_icon.svg">
                        </div>
                    </div>
                    <div class="faq_body pacc_collapse">
                        <div class="faq_bodyrow">
                            <div class="faq_atext">A</div>
                            <div class="faq_answer">
                                <p>提携している一級建築事務所をご紹介いたします。</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="faq_row pacc js_opac">
                    <div class="faq_header pacc_header">
                        <div class="faq_cap">
                            <div class="faq_qtext"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/q_sign.svg"></div>
                            <div class="faq_captext">設計事務所より設計概算金額の5％以内が適切と言われたが、減額可能？</div>
                        </div>
                        <div>
                            <img class="pacc_opened" src="<?php echo get_stylesheet_directory_uri(); ?>/images/plus_icon.svg">
                            <img class="pacc_closed" src="<?php echo get_stylesheet_directory_uri(); ?>/images/minus_icon.svg">
                        </div>
                    </div>
                    <div class="faq_body pacc_collapse">
                        <div class="faq_bodyrow">
                            <div class="faq_atext">A</div>
                            <div class="faq_answer">
                                <p>入札機能が働けば減額可能です。</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="faq_row pacc js_opac">
                    <div class="faq_header pacc_header">
                        <div class="faq_cap">
                            <div class="faq_qtext"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/q_sign.svg"></div>
                            <div class="faq_captext">予定工期等を入力する際に、うまくできない。推奨するブラウザがあれば教えてください。</div>
                        </div>
                        <div>
                            <img class="pacc_opened" src="<?php echo get_stylesheet_directory_uri(); ?>/images/plus_icon.svg">
                            <img class="pacc_closed" src="<?php echo get_stylesheet_directory_uri(); ?>/images/minus_icon.svg">
                        </div>
                    </div>
                    <div class="faq_body pacc_collapse">
                        <div class="faq_bodyrow">
                            <div class="faq_atext">A</div>
                            <div class="faq_answer">
                                <p>Google Chrome又はMicrosoft Edge でご利用ください。特にFirefoxでは適切な表示がされない可能性があります。</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="hx10 sphx0"></div>
<div class="contactform_block">
    <div class="hx10"></div>
    <div class="pmh_anchor" id="contact"></div>
    <div class="contact_title">
        <div class="com_title initani initani_cb">
            <h2>お問い合わせ</h2>
        </div>            
    </div>
    <div class="hx4"></div>
    <div class="contactform_width">
        <div class="form_pos">
            <form action="" method="post" enctype="multipart/form-data">
                <div class="form_head">
                    <div class="field_cap">ご希望の相談内容<span>必須</span></div>
                </div>
                <div class="form_field">
                    <div class="field_control">
                        <div class="radio_set">
                            <div class="radio_wrap"><input required type="radio" name="field1" value="直接相談を受けたい" id="radio_field1_1"><label for="radio_field1_1">直接相談を受けたい</label></div>
                            <div class="radio_wrap"><input required type="radio" name="field1" value="電話で話を聞きたい" id="radio_field1_2"><label for="radio_field1_2">電話で話を聞きたい</label></div>
                            <div class="radio_wrap"><input required type="radio" name="field1" value="資料請求" id="radio_field1_3"><label for="radio_field1_3">資料請求</label></div>
                            <div class="sonota">
                                <div class="radio_wrap"><input required type="radio" name="field1" value="その他" id="radio_field1_4"><label for="radio_field1_4">その他</label></div>
                                <div class="sonota_input">
                                    <input type="text" name="field1_2" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form_head">
                    <div class="field_cap">お問合せ者様の情報</div>
                </div>
                <div class="form_field">
                    <div class="field_cap">お名前<span>必須</span></div>
                    <div class="field_control">
                        <input required type="text" name="field2"/>
                    </div>
                </div>
                <div class="form_field">
                    <div class="field_cap">連絡先電話番号</div>
                    <div class="field_control">
                        <input type="text" name="field3"/>
                    </div>
                </div>
                <div class="form_field">
                    <div class="field_cap">メールアドレス<span>必須</span></div>
                    <div class="field_control">
                        <input required type="email" name="field4"/>
                    </div>
                </div>
                <div class="form_field">
                    <div class="field_cap">お立場<span>必須</span></div>
                    <div class="field_control">
                        <div class="radio_set">
                            <div class="radio_wrap"><input required type="radio" name="field5" value="管理組合理事⻑" id="radio_field5_1"><label for="radio_field5_1">管理組合理事⻑</label></div>
                            <div class="radio_wrap"><input required type="radio" name="field5" value="管理組合役員" id="radio_field5_2"><label for="radio_field5_2">管理組合役員</label></div>
                            <div class="radio_wrap"><input required type="radio" name="field5" value="修繕委員⻑" id="radio_field5_3"><label for="radio_field5_3">修繕委員⻑</label></div>
                            <div class="radio_wrap"><input required type="radio" name="field5" value="修繕委員" id="radio_field5_4"><label for="radio_field5_4">修繕委員</label></div>
                            <div class="radio_wrap"><input required type="radio" name="field5" value="居住者様" id="radio_field5_5"><label for="radio_field5_5">居住者様</label></div>
                            <div class="sonota">
                                <div class="radio_wrap"><input type="radio" name="field5" value="その他" id="radio_field5_6"><label for="radio_field5_6">その他</label></div>
                                <div class="sonota_input">
                                    <input type="text" name="field5_2"/>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form_head">
                    <div class="field_cap">対象物件について</div>
                </div>
                <div class="form_field">
                    <div class="field_cap">都道府県<span>必須</span></div>
                    <div class="field_control">
                        <select required name="field6">
                            <option value=""></option>
                            <option value="北海道" data-pref-id="01">北海道</option>
                            <option value="青森県" data-pref-id="02">青森県</option>
                            <option value="岩手県" data-pref-id="03">岩手県</option>
                            <option value="宮城県" data-pref-id="04">宮城県</option>
                            <option value="秋田県" data-pref-id="05">秋田県</option>
                            <option value="山形県" data-pref-id="06">山形県</option>
                            <option value="福島県" data-pref-id="07">福島県</option>
                            <option value="茨城県" data-pref-id="08">茨城県</option>
                            <option value="栃木県" data-pref-id="09">栃木県</option>
                            <option value="群馬県" data-pref-id="10">群馬県</option>
                            <option value="埼玉県" data-pref-id="11">埼玉県</option>
                            <option value="千葉県" data-pref-id="12">千葉県</option>
                            <option value="東京都" data-pref-id="13">東京都</option>
                            <option value="神奈川県" data-pref-id="14">神奈川県</option>
                            <option value="新潟県" data-pref-id="15">新潟県</option>
                            <option value="富山県" data-pref-id="16">富山県</option>
                            <option value="石川県" data-pref-id="17">石川県</option>
                            <option value="福井県" data-pref-id="18">福井県</option>
                            <option value="山梨県" data-pref-id="19">山梨県</option>
                            <option value="長野県" data-pref-id="20">長野県</option>
                            <option value="岐阜県" data-pref-id="21">岐阜県</option>
                            <option value="静岡県" data-pref-id="22">静岡県</option>
                            <option value="愛知県" data-pref-id="23">愛知県</option>
                            <option value="三重県" data-pref-id="24">三重県</option>
                            <option value="滋賀県" data-pref-id="25">滋賀県</option>
                            <option value="京都府" data-pref-id="26">京都府</option>
                            <option value="大阪府" data-pref-id="27">大阪府</option>
                            <option value="兵庫県" data-pref-id="28">兵庫県</option>
                            <option value="奈良県" data-pref-id="29">奈良県</option>
                            <option value="和歌山県" data-pref-id="30">和歌山県</option>
                            <option value="鳥取県" data-pref-id="31">鳥取県</option>
                            <option value="島根県" data-pref-id="32">島根県</option>
                            <option value="岡山県" data-pref-id="33">岡山県</option>
                            <option value="広島県" data-pref-id="34">広島県</option>
                            <option value="山口県" data-pref-id="35">山口県</option>
                            <option value="徳島県" data-pref-id="36">徳島県</option>
                            <option value="香川県" data-pref-id="37">香川県</option>
                            <option value="愛媛県" data-pref-id="38">愛媛県</option>
                            <option value="高知県" data-pref-id="39">高知県</option>
                            <option value="福岡県" data-pref-id="40">福岡県</option>
                            <option value="佐賀県" data-pref-id="41">佐賀県</option>
                            <option value="長崎県" data-pref-id="42">長崎県</option>
                            <option value="熊本県" data-pref-id="43">熊本県</option>
                            <option value="大分県" data-pref-id="44">大分県</option>
                            <option value="宮崎県" data-pref-id="45">宮崎県</option>
                            <option value="鹿児島県" data-pref-id="46">鹿児島県</option>
                            <option value="沖縄県" data-pref-id="47">沖縄県</option>
                        </select>
                    </div>
                </div>
                <div class="form_field">
                    <div class="field_cap">マンション名<span>必須</span></div>
                    <div class="field_control">
                        <input required type="text" name="field7"/>
                    </div>
                </div>
                <div class="form_field">
                    <div class="field_cap">工事の内容</div>
                    <div class="field_control">
                        <input type="text" name="field8"/>
                    </div>
                </div>
                <div class="form_field">
                    <div class="field_cap">工事の予定時期</div>
                    <div class="field_control">
                        <input type="text" name="field9"/>
                    </div>
                </div>
                <div class="field_contactbtn">
                    <input type="hidden" name="submit-confirm" value="submit-confirm">
                    <input type="submit" value="送 信" id="form_submit">
                </div>   
            </form>
        </div>
    </div>
    <div class="hx10"></div>
</div>
<div class="global_btns js_opac">
    <a href="https://bestreform.jp/" class="global_btn"><span>ニューサツはこちら</span><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/link_out.svg"></a>
</div>
<!-- CONTAIN_END -->
<?php
get_footer();
