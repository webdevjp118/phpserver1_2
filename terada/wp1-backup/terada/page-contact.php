<?php
get_header();
?>
<!-- CONTAIN_START -->
<main>
    <div class="instead_head disf_sp"></div>
    <section class="pg_fv">
        <div class="pgfv_back">
            <img class="pgfv_bg" src="<?php echo get_stylesheet_directory_uri(); ?>/images/pg_contact.jpg">
        </div>
        <div class="pgfv_front">
            <div class="pgfv_text">
                <h1 class="pani4 js-split">CONTACT</h1>
                <h2>お問い合わせ</h2>
            </div>
        </div>
    </section>
    <div class="fv_zig">
        <div class="zig_deco">
            <div class="zdeco_shape">
                <div class="zdeco_origin">
                    <div class="zdeco_lmask1">
                        <div class="zdeco_limg1"></div>
                    </div>
                    <div class="zdeco_lmask2">
                        <div class="zdeco_limg2"></div>
                    </div>
                    <div class="zdeco_rmask1">
                        <div class="zdeco_rimg1"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="contactform_block">
        <div class="contactform_width">
            <div class="form_title">
                <div class="rbotitle_ani pinpos">
                    <div class="rbotitle_ani1"><h2>お問い合わせフォーム</h2></div>
                </div>
            </div>
            <div class="hx3"></div>
            <div class="form_desc js_opac">
                事業についてのお問い合わせは、下記のフォームからお願いします。<br>
                2、3日以内にメール、またはお電話で折り返しご連絡させていただきます。
            </div>
            <div class="hx5"></div>
            <div class="form_pos js_opac">
<?php
if(false): // design check
?>                
                <form action="" method="post" enctype="multipart/form-data">
<script>
document.addEventListener( 'wpcf7mailsent', function( event ) {
    location = 'http://terada-reiki.co.jp/v0/contact-thanks/';
}, false );
</script>                    
<div class="form_field">
    <div class="field_cap">会社名<span>必須</span></div>
    <div class="field_control">
        <input type="text" placeholder="株式会社寺田冷機" name="field1"/>
    </div>
</div>
<div class="form_field">
    <div class="field_cap">お名前<span>必須</span></div>
    <div class="field_control">
        <input type="text" placeholder="寺田刀互"  name="field2"/>
    </div>
</div>
<div class="form_field">
    <div class="field_cap">メールアドレス<span>必須</span></div>
    <div class="field_control">
        <input type="text" placeholder="terada@terada.co.jp" name="field3"/>
    </div>
</div>
<div class="form_field">
    <div class="field_cap">お電話番号<span>必須</span></div>
    <div class="field_control">
        <input type="text" placeholder="0438-36-6126" name="field4"/>
    </div>
</div>
<div class="form_field">
    <div class="field_cap">お問い合わせ内容<span>必須</span></div>
    <div class="field_control">
        <div class="radio_set">
            <div class="radio_wrap"><input type="radio" name="field5" value="詳しい事業内容を知りたい" id="radio_field5_1"><label for="radio_field5_1">詳しい事業内容を知りたい</label></div>
            <div class="radio_wrap"><input type="radio" name="field5" value="見積りを依頼したい" id="radio_field5_2"><label for="radio_field5_2">見積りを依頼したい</label></div>
            <div class="radio_wrap"><input type="radio" name="field5" value="その他" id="radio_field5_3"><label for="radio_field5_3">その他</label></div>
        </div>
    </div>
</div>
<div class="form_field">
    <div class="field_cap">お問い合わせ内容の詳細をご記入ください。</div>
    <div class="field_control">
        <textarea placeholder="質問内容をご記入ください。"></textarea>
    </div>
</div>
<div class="privacy_field">
    <div class="form_field">
        <div class="field_control">
            <div class="privacy_desc">
                <p><a target="_blank" href="#">プライバシーポリシー</a>に同意の上、送信ください。</p>
            </div>
            <div class="hx2"></div>
            <div class="privacy_checkbox">
                <input type="checkbox" id="id_privacy" value="" required=""><label for="id_privacy">プライバシーポリシーに同意する</label>
            </div>
        </div>
    </div>
</div>
<div class="field_contactbtn">
    <input type="hidden" name="submit-confirm" value="submit-confirm">
    <input type="submit" value="送信内容を確認する" id="form_submit">
</div>
                </form>
<?php
else: //wordpress contact form
?>              
                <?php echo do_shortcode('[contact-form-7 id="227e301" title="お問い合わせフォーム"]'); ?>
<?php
endif;
?>
            </div>
        </div>
    </section>
    <div class="zig_deco pinpos">
        <div class="zdeco_shape">
            <div class="zdeco2_origin">
                <div class="zdeco2_lmask1">
                    <div class="zdeco2_limg1"></div>
                </div>
                <div class="zdeco2_lmask2">
                    <div class="zdeco2_limg2"></div>
                </div>
                <div class="zdeco2_rmask1">
                    <div class="zdeco2_rimg1"></div>
                </div>
            </div>
        </div>
    </div>
</main>
<!-- CONTAIN_END -->
<?php
get_footer();

/********* Contact Fomr 7 Mail ********************    SITE->ADMIN
 * 
送信先:>      [_site_admin_email], 11-4510@terada-reiki.co.jp
送信元:>      [your-name] 様からのお問い合わせ　<11-4510@terada-reiki.co.jp>
題名:>        お問い合わせ "[your-name] 様"
追加ヘッダー:> Reply-To: [your-email]
メッセージ本文:>
>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
差出人: [your-name] 様
==========================================================
お名前： [your-name]
-----------------------------------------------------------
電話番号 ： [tel_1]
メールアドレス ： [your-email]
郵便番号 ： [postal]
住所 ： [adr]
-----------------------------------------------------------
お問い合わせ内容：
[msg]

==========================================================
 
このメールは 寺田冷機 (http://terada-reiki.co.jp) のお問い合わせフォームから送信されました
<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<

/********* Contact Fomr 7 Mail ********************    SITE->USER
 * 
送信先:>      [your-email]
送信元:>      寺田冷機 <11-4510@terada-reiki.co.jp>
題名:>        お問い合わせ、ありがとうございました
追加ヘッダー:> 
メッセージ本文:>
>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
[your-name] 様

この度は、株式会社寺田冷機へのお問い合わせ誠にありがとうございます。
担当宛に内容を送信しました。
のちに担当者よりご連絡させていただきます。

■ フォーム送信内容
==========================================================
お名前： [your-name]
-----------------------------------------------------------
電話番号 ： [tel_1]
メールアドレス ： [your-email]
郵便番号 ： [postal]
住所 ： [adr]
-----------------------------------------------------------
お問い合わせ内容：
[msg]

==========================================================
--
※このメールは 「株式会社寺田冷機」 のお問い合わせ
  フォームから自動返信されました。
　尚､このメールにお心当たりがない方は、お手数ですが
　11-4510@terada-reiki.co.jpまでご連絡ください。

*************************************************************
株式会社寺田冷機  | 業務用冷凍、冷蔵庫、水産、蓄養設備の寺田冷機
〒292-0834　千葉県木更津市潮見4-3-5
電話： 0438-36-6126
FAX： 0438-37-1367
8:00～17:00 日曜定休

URL：http://terada-reiki.co.jp/
e-mail：11-4510@terada-reiki.co.jp
*************************************************************
<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<

/********* Contact Form 7 controls ********************
 * 
>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
<script>
document.addEventListener( 'wpcf7mailsent', function( event ) {
    location = 'http://terada-reiki.co.jp/contact-thanks/';
}, false );
</script>
<div class="form_field">
    <div class="field_cap">会社名<span>必須</span></div>
    <div class="field_control">
        [text* your-company placeholder "株式会社寺田冷機"]
    </div>
</div>
<div class="form_field">
    <div class="field_cap">お名前<span>必須</span></div>
    <div class="field_control">
        [text* your-name placeholder "寺田刀互"]
    </div>
</div>
<div class="form_field">
    <div class="field_cap">メールアドレス<span>必須</span></div>
    <div class="field_control">
        [email* your-email placeholder "terada@terada.co.jp"]
    </div>
</div>
<div class="form_field">
    <div class="field_cap">お電話番号<span>必須</span></div>
    <div class="field_control">
        [text* your-number placeholder "0438-36-6126"]
    </div>
</div>
<div class="form_field">
    <div class="field_cap">お問い合わせ内容<span>必須</span></div>
    <div class="field_control">
        <div class="radio_set">
           [radio message-type use_label_element default:1 "詳しい事業内容を知りたい" "見積りを依頼したい" "その他"]
        </div>
    </div>
</div>
<div class="form_field">
    <div class="field_cap">お問い合わせ内容の詳細をご記入ください。</div>
    <div class="field_control">
        [textarea your-message "質問内容をご記入ください。"]
    </div>
</div>
<div class="privacy_field">
    <div class="form_field">
        <div class="field_control">
            <div class="privacy_desc">
                <p><a target="_blank" href="/privacy/">プライバシーポリシー</a>に同意の上、送信ください。</p>
            </div>
            <div class="hx2"></div>
            <div class="privacy_checkbox">
                [checkbox* checkbox-789 use_label_element "プライバシーポリシーに同意する"]
            </div>
        </div>
    </div>
</div>
<div class="recap_field">
    [recaptcha]
</div>
<div class="field_contactbtn">
    [confirm "送信内容を確認する"][back "戻る"][submit "送信"]
</div>
<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<