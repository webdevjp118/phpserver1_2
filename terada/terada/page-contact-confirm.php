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
                <p><a href="#">プライバシーポリシー</a>に同意の上、送信ください。</p>
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
                <?php echo do_shortcode('[contact-form-7 id="1161f18" title="お問い合わせフォーム_confirm_v1"]'); ?>
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
