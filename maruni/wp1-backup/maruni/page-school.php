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
    講座受講条件：看護師免許・医師免許をお持ちの方に限ります<br>
    ".$field1."<br>
    お名前 : ".$field2."<br>
    電話番号 : ".$field3."<br>
    メール : ".$field4."<br>
    問い合わせ内容 : <br>".$field5."<br>
    ";

    $subject = 'お問い合わせがありました';

    $headers = "From: " . $field4 . "\r\n";
    $headers .= "Reply-To: " . $field4 . "\r\n";
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
    <div class="instead_head" style="background-color: #F7F3F2;"></div>
    <a class="sticker_contact" href="#">
        <div class="stickcontact_inner">
            <img class="stickcontact_img" src="<?php echo get_stylesheet_directory_uri(); ?>/images/sticker_school.jpg">
            <div class="stickcontact_text">
                医師・看護師の<br class="br_pc">
                転職のお悩みは<br class="br_pc">
                こちら<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/school_arrow_right.svg">
            </div>
        </div>
    </a>
    <div class="pg_fv pxt_type1">
        <div class="pgfv_layer0">
            <div class="pgfv_title">
                <h1>School</h1>
                <p>アートメイク講座</p>
            </div>
        </div>
        <div class="pgfv_layer1">
            <div class="pgfv1_left">
                <img class="pgfv1_leftbg" src="<?php echo get_stylesheet_directory_uri(); ?>/images/pgfv0_left.svg">
                <img class="pgfv_scroll" src="<?php echo get_stylesheet_directory_uri(); ?>/images/pgfv_scroll.svg">
            </div>
            <div class="pgfv1_right">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/pg_school.png">
                <div class="pgfv_text">
                    看護師免許や経験<span>を</span><br>
                    活かしませんか</div>
                <div class="pgfv_ad">
                    <div class="pgfv_adinner">
                        <span class="pgfv_adtext">現在</span>
                        <span>受講生<br>&nbsp;募集中！</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="breadcrumb_block">
            <a href="<?php echo get_site_url(); ?>/">ホーム</a>
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/bread_line.svg">
            <span>アートメイク講座</span>
        </div>
    </div>
    <div class="instructor_block">
        <div class="cwidth12">
            <div class="hx8"></div>
            <div class="instructor_title">
                <div class="common_title_hp">
                    <h2>講師紹介</h2>
                    <p>INSTRUCTOR</p>
                </div>
            </div>
            <div class="hx6"></div>
            <div class="instructor_row">
                <div class="instructor_left">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/instructor.png">
                </div>
                <div class="instructor_right">
                    <div class="instructor_content">
                        <div class="instructor_name">
                            <div class="instructor_name1">
                                林めぐみ
                            </div>
                            <div class="instructor_sns">
                                <div class="instructor_insta"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/instructor_insta.svg"></div>
                                <div class="instructor_follows">
                                    <div class="X_cap">SNSのフォロワー</div>
                                    <div class="X_count">35,000</div>
                                </div>
                            </div>
                        </div>
                        <div class="hx4"></div>
                        <div class="instructor_text">
                            日本のアートメイク黎明期よりアーティストにて活躍。<br>
                            看護師を経てアートメイク専門クリニックの立ち上げる。<br>
                            国内外でアートメイクを学び、技術を習得。
                        </div>
                    </div>
                </div>
            </div>
            <div class="hx10"></div>
        </div>
    </div>
    <div class="sample_block io fade upS">
        <div class="sample_back">
            <div class="slide2_wrap">
                <div class="slide2 sample_slider1 owl-carousel owl-theme">
                    <div class="item"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/sample1_01.jpg"></div>
                    <div class="item"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/sample1_02.jpg"></div>
                    <div class="item"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/sample1_03.jpg"></div>
                    <div class="item"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/sample1_04.jpg"></div>
                    <div class="item"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/sample1_05.jpg"></div>
                    <div class="item"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/sample1_06.jpg"></div>
                </div>
            </div>
            <div style="height: 20px;"></div>
            <div class="slide2_wrap">
                <div class="slide2 sample_slider2 owl-carousel owl-theme">
                    <div class="item"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/sample2_01.jpg"></div>
                    <div class="item"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/sample2_02.jpg"></div>
                    <div class="item"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/sample2_03.jpg"></div>
                    <div class="item"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/sample2_04.jpg"></div>
                    <div class="item"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/sample2_05.jpg"></div>
                    <div class="item"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/sample2_06.jpg"></div>
                </div>
            </div>
        </div>
        <div class="sample_front">
            <div class="sample_cap">症例数</div>
            <div class="sample_count">10,000</div>
        </div>    
    </div>
    <div class="course_block">
        <div class="cwidth12">
            <div class="hx10"></div>
            <div class="course_row">
                <div class="course_width">
                    <div class="course_title io fade upS">
                        <div class="common_title_hp">
                            <h2>コース紹介</h2>
                            <p>COURSE</p>
                        </div>
                    </div>
                    <div class="hx4"></div>
                    <div class="course_content io fade upS">
                        <table>
                            <tr><th>料金</th><td><b>230000</b>円〜</td></tr>
                            <tr><th>講座受講条件</th><td>看護師免許・医師免許をお持ちの方に限ります</td></tr>
                            <tr><th>学べる期間</th><td>半年</td></tr>
                            <tr><th class="no_border">学べる内容</th>
                                <td class="no_border">
                                    美容皮膚学、眉デザイン、アートメイク技術、対面モニター講習(3名×2回)<br>
                                    その他、就職や転職に関する個別相談や正社員やアルバイトなど様々なワークスタイルの求人をご紹介いたします。<br>
                                    <br>
                                    <span>一生涯のアフターサポート付き！</span>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="course_right">
                    <img class="panil3" src="<?php echo get_stylesheet_directory_uri(); ?>/images/course.png">
                </div>
            </div>
        </div>
    </div>
    <div class="faq_block">
        <div class="cwidth12">
            <div class="hx10"></div>
            <div class="faq_title io fade upS">
                <div class="common_title_hp">
                    <h2>よくある質問</h2>
                    <p>FAQ</p>
                </div>
            </div>
            <div class="hx4"></div>
            <div class="course_row">
                <div class="course_width io fade upS">
                    <div class="faq_content paccordion">
                        <div class="faq_row pacc pst_show">
                            <div class="faq_header pacc_header">
                                <div class="faq_cap">
                                    <div class="faq_qtext">Q</div>
                                    <div class="faq_captext">ここに質問のテキストがあります。</div>
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
                                        <p>ここに回答テキストがあります。ここに回答テキストがあります。ここに回答テキストがあります。</p>
                                        <p>ここに回答テキストがあります。ここに回答テキストがあります。ここに回答テキストがあります。</p>
                                        <p>ここに回答テキストがあります。ここに回答テキストがあります。ここに回答テキストがあります。</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="hx2"></div>
                        <div class="faq_row pacc">
                            <div class="faq_header pacc_header">
                                <div class="faq_cap">
                                    <div class="faq_qtext">Q</div>
                                    <div class="faq_captext">ここに質問のテキストがあります。</div>
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
                                        <p>ここに回答テキストがあります。ここに回答テキストがあります。ここに回答テキストがあります。</p>
                                        <p>ここに回答テキストがあります。ここに回答テキストがあります。ここに回答テキストがあります。</p>
                                        <p>ここに回答テキストがあります。ここに回答テキストがあります。ここに回答テキストがあります。</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="hx2"></div>
                        <div class="faq_row pacc">
                            <div class="faq_header pacc_header">
                                <div class="faq_cap">
                                    <div class="faq_qtext">Q</div>
                                    <div class="faq_captext">ここに質問のテキストがあります。</div>
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
                                        <p>ここに回答テキストがあります。ここに回答テキストがあります。ここに回答テキストがあります。</p>
                                        <p>ここに回答テキストがあります。ここに回答テキストがあります。ここに回答テキストがあります。</p>
                                        <p>ここに回答テキストがあります。ここに回答テキストがあります。ここに回答テキストがあります。</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="hx2"></div>
                        <div class="faq_row pacc">
                            <div class="faq_header pacc_header">
                                <div class="faq_cap">
                                    <div class="faq_qtext">Q</div>
                                    <div class="faq_captext">ここに質問のテキストがあります。</div>
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
                                        <p>ここに回答テキストがあります。ここに回答テキストがあります。ここに回答テキストがあります。</p>
                                        <p>ここに回答テキストがあります。ここに回答テキストがあります。ここに回答テキストがあります。</p>
                                        <p>ここに回答テキストがあります。ここに回答テキストがあります。ここに回答テキストがあります。</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="hx2"></div>
                        <div class="faq_row pacc">
                            <div class="faq_header pacc_header">
                                <div class="faq_cap">
                                    <div class="faq_qtext">Q</div>
                                    <div class="faq_captext">ここに質問のテキストがあります。</div>
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
                                        <p>ここに回答テキストがあります。ここに回答テキストがあります。ここに回答テキストがあります。</p>
                                        <p>ここに回答テキストがあります。ここに回答テキストがあります。ここに回答テキストがあります。</p>
                                        <p>ここに回答テキストがあります。ここに回答テキストがあります。ここに回答テキストがあります。</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="hx2"></div>
                        <div class="faq_row pacc">
                            <div class="faq_header pacc_header">
                                <div class="faq_cap">
                                    <div class="faq_qtext">Q</div>
                                    <div class="faq_captext">ここに質問のテキストがあります。</div>
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
                                        <p>ここに回答テキストがあります。ここに回答テキストがあります。ここに回答テキストがあります。</p>
                                        <p>ここに回答テキストがあります。ここに回答テキストがあります。ここに回答テキストがあります。</p>
                                        <p>ここに回答テキストがあります。ここに回答テキストがあります。ここに回答テキストがあります。</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="course_right">
                    <img class="panil3" src="<?php echo get_stylesheet_directory_uri(); ?>/images/faq_img.png">
                </div>
            </div>
            <div class="hx10"></div>
        </div>
    </div>
    <div class="contact_block">
        <div class="cwidth12">
            <div class="course_row">
                <div class="course_width">
                    <div class="contact_design">
                        <div class="contact_title io fade upS">
                            <div class="common_title_hp">
                                <h2>お問い合わせ</h2>
                                <p>CONTACT</p>
                            </div>
                        </div>
                        <div class="hx4"></div>
                        <div class="contact_wrap io fade upS">
                            <form action="" method="post" enctype="multipart/form-data">
                                <div class="form_field">
                                    <div class="field_cap">講座受講条件：看護師免許・医師免許をお持ちの方に限ります</div>
                                    <div class="field_control">
                                        <div class="radio_set">
                                            <div class="radio_wrap"><input type="radio" name="field1" value="講座申し込み希望" id="radio_field1_1"><label for="radio_field1_1">講座申し込み希望</label></div>
                                            <div class="radio_wrap"><input type="radio" name="field1" value="転職サポート" id="radio_field1_2"><label for="radio_field1_2">転職サポート</label></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form_field">
                                    <div class="field_cap">お名前</div>
                                    <div class="field_control">
                                        <input type="text" name="field2" required/>
                                    </div>
                                </div>
                                <div class="form_field">
                                    <div class="field_cap">電話番号</div>
                                    <div class="field_control">
                                        <input type="text" name="field3" required/>
                                    </div>
                                </div>
                                <div class="form_field">
                                    <div class="field_cap">メール</div>
                                    <div class="field_control">
                                        <input type="email" name="field4" required/>
                                    </div>
                                </div>
                                <div class="form_field dashed_border_b">
                                    <div class="field_cap">問い合わせ内容</div>
                                    <div class="field_control">
                                        <textarea name="field5"></textarea>
                                    </div>
                                </div>
                                <div class="hx2"></div>
                                <p style="text-align: center;">些細なことでも気軽にご質問、お悩みお待ちしています</p>
                                <div class="hx2"></div>
                                <div class="field_contactbtn">
                                    <input type="hidden" name="submit-confirm" value="submit-confirm">
                                    <input type="submit" value="送信">
                                </div>
                            </form>
                        </div>
                    </div>                    
                </div>
                <div class="course_right">
                    <img class="contact_img1 panil3" src="<?php echo get_stylesheet_directory_uri(); ?>/images/contact1.png">
                    <img class="contact_img2 panil3" src="<?php echo get_stylesheet_directory_uri(); ?>/images/contact2.png">
                    <img class="contact_img3 panil3" src="<?php echo get_stylesheet_directory_uri(); ?>/images/contact3.png">
                </div>
            </div>
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
