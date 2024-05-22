<?php
get_header();
?>
<!-- CONTAIN_START -->
<section id="contain">    	        
    <div class="instead_head"></div>
    <div class="pg_fv">
        <div class="pgfv_title">
            <div class="cwidth10">
                <h1>
                    <span>【毛髪再生】メセル発毛HCR法</span><br>
                    アンケートフォーム
                </h1>
            </div>
        </div>
    </div>
    <div class="cwidth10">
        <div class="hx8"></div>
        <div class="cfsteps">
            <div class="cfstep1 X_2">1.アンケートの入力</div>
            <div class="cfstep2 X_2">2.内容の確認</div>
            <div class="cfstep3 X_2">3.送信完了</div>
        </div>
        <div class="hx6"></div>
    </div>
<?php
$field1_1 = isset($_POST['field1_1']) ? $_POST['field1_1']: '';
$field1_2 = isset($_POST['field1_2']) ? $_POST['field1_2']: '';
$field2_1 = isset($_POST['field2_1']) ? $_POST['field2_1']: '';
$field2_2 = isset($_POST['field2_2']) ? $_POST['field2_2']: '';
$field3 = isset($_POST['field3']) ? $_POST['field3']: '';
if(empty($field3)) {
    $field3 = "未回答";
}
$field4 = isset($_POST['email']) ? $_POST['email']: '';
$field5 = isset($_POST['電話番号']) ? $_POST['電話番号']: '';
$field6 = isset($_POST['field6']) ? $_POST['field6']: '';
$field7 = (is_array($_POST['field7'])) ? $_POST['field7'] : array();
$field8 = (is_array($_POST['field8'])) ? $_POST['field8'] : array();
$field9 = isset($_POST['field9']) ? $_POST['field9']: '';
?>    
    <div class="form_block">
        <div class="cwidth10">
            <div class="form_pos">
                <form action="<?php echo get_site_url(); ?>/question-send/" method="post" enctype="multipart/form-data">
                    <div class="form_field">
                        <div class="field_left">
                            お名前
                        </div>
                        <div class="field_right">
                            <div class="field_reqtext">&nbsp;</div>
                            <div class="field_vert">
                                <div class="nameconfirm">
                                    <div class="nameconfirm1">
                                        <?php echo $field1_1.'　'.$field1_2; ?>
                                        <input type="hidden" name="field1_1" value="<?php echo $field1_1; ?>">
                                        <input type="hidden" name="field1_2" value="<?php echo $field1_2; ?>">
                                    </div>
                                    <div class="hx3"></div>
                                    <div class="nameconfirm1">
                                        <?php echo $field2_1.'　'.$field2_2; ?>
                                        <input type="hidden" name="field2_1" value="<?php echo $field2_1; ?>">
                                        <input type="hidden" name="field2_2" value="<?php echo $field2_2; ?>">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form_field">
                        <div class="field_left">
                            性別
                        </div>
                        <div class="field_right">
                            <div class="field_reqtext">&nbsp;</div>
                            <div class="field_vert">
                                <div class="field_control X_confirm">
                                    <?php echo $field3; ?>
                                    <input type="hidden" name="field3" value="<?php echo $field3; ?>">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form_field">
                        <div class="field_left">
                            メールアドレス
                        </div>
                        <div class="field_right">
                            <div class="field_reqtext">&nbsp;</div>
                            <div class="field_vert">
                                <div class="field_control X_confirm">
                                    <?php echo $field4; ?>
                                    <input type="hidden" name="field4" value="<?php echo $field4; ?>">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form_field">
                        <div class="field_left">
                            電話番号
                        </div>
                        <div class="field_right">
                            <div class="field_reqtext">&nbsp;</div>
                            <div class="field_vert">
                                <div class="field_control X_confirm">
                                    <?php echo $field5; ?>
                                    <input type="hidden" name="field5" value="<?php echo $field5; ?>">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form_field">
                        <div class="field_left">
                            お住まいの地域
                        </div>
                        <div class="field_right">
                            <div class="field_reqtext">&nbsp;</div>
                            <div class="field_vert">
                                <div class="field_control X_confirm">
                                    <?php echo $field6; ?>
                                    <input type="hidden" name="field6" value="<?php echo $field6; ?>">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form_field">
                        <div class="field_left">
                            現在行っている、また過去に行っていた発毛対策をお答え下さい？（複数回答可）
                        </div>
                        <div class="field_right">
                            <div class="field_reqtext">&nbsp;</div>
                            <div class="field_vert">
                                <div class="field_control X_confirm">
                                    <?php echo implode('<br>', $field7); ?>
                                    <?php foreach($field7 as $each) { echo '<input type="hidden" name="field7[]" value="'.$each.'">'; } ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form_field">
                        <div class="field_left">
                            現在行っている、また過去に行っていた発毛対策への不満点をお答え下さい？（複数回答可）
                        </div>
                        <div class="field_right">
                            <div class="field_reqtext">&nbsp;</div>
                            <div class="field_vert">
                                <div class="field_control X_confirm">
                                    <?php echo implode('<br>', $field8); ?>
                                    <?php foreach($field8 as $each) { echo '<input type="hidden" name="field8[]" value="'.$each.'">'; } ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form_field">
                        <div class="field_left">
                            【毛髪再生】メセル発毛HCR法に対して、疑問点やご要望などがございましたらお聞かせ下さい。
                        </div>
                        <div class="field_right">
                            <div class="field_reqtext">&nbsp;</div>
                            <div class="field_vert">
                                <div class="field_control X_confirm">
                                    <?php echo $field9; ?>
                                    <input type="hidden" name="field9" value="<?php echo $field9; ?>">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="confirm_line"></div>
                    <div class="field_contactbtn">
                        <input type="hidden" name="submit-confirm" value="submit-confirm">
                        <button type="button" onclick="history.back()" class="field_contactbtna X_2">戻る</button>
                        <button type="submit" class="field_contactbtna X_3">送信する</button>
                        <!-- <input type="submit" value="「個人情報のお取扱い」に同意して確認画面へ進む" id="form_submit"> -->
                    </div>   
                </form>
            </div>
        </div>
    </div>
    <div class="hx10"></div>
</section>
<!-- CONTAIN_END -->
<?php get_template_part('template-parts/footcontact'); ?>
<?php
get_footer();
