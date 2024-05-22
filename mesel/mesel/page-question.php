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
    <div class="hx6"></div>
    <div class="pgfeature panil3" style="background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/images/pg_question.jpg);"></div>
    <div class="hx7"></div>
    <div class="cwidth10">
        <div class="cf_p">
            <p>【毛髪再生】メセル発毛HCR法にご興味お持ち頂き、誠にありがとうございます。</p>
            <p><b>以下のアンケートにご回答頂いた後に、コース価格表がご確認頂けます。</b></p>
            <p>簡易なアンケート（所要時間：約30秒）ですので、ご協力をお願い致します。</p>
        </div>
    </div>
    <div class="cwidth10">
        <div class="hx10"></div>
        <div class="cfsteps">
            <div class="cfstep1">1.アンケートの入力</div>
            <div class="cfstep2">2.内容の確認</div>
            <div class="cfstep3">3.送信完了</div>
        </div>
        <div class="hx12"></div>
        <div class="cf_h2"><h2>個人情報の取り扱いについて</h2></div>
        <div class="hx2"></div>
        <div class="cf_p">
            <p>ご提供頂いた個人情報は、当社の個人情報保護方針に基づき適切に管理いたします。</p>
            <p>また、これらの情報はお問い合わせへの返信やお客様への情報提供のみに用い、<br class="disb_pc">
                ご本人様の同意なく他の目的には利用いたしません。</p>
        </div>
        <div class="hx10"></div>
    </div>
    <div class="form_block">
        <div class="cwidth10">
            <div class="form_pos">
                <form action="<?php echo get_site_url(); ?>/question-confirm/" method="post" enctype="multipart/form-data" id="question_form">
                    <div class="form_field">
                        <div class="field_left">
                            お名前
                        </div>
                        <div class="field_right">
                            <div class="field_reqtext"><span>必須</span></div>
                            <div class="field_vert">
                                <div class="field_nameset">
                                    <div class="field_nameset1">
                                        <div class="field_nameset2">姓</div>
                                        <div class="field_nameset3"><input type="text" name="field1_1" required /></div>
                                        <div class="field_nameset5"></div>
                                        <div class="field_nameset4"><span>必須</span></div>
                                        <div class="field_nameset2">名</div>
                                        <div class="field_nameset3"><input type="text" name="field1_2" required /></div>
                                    </div>
                                    <div class="hx2"></div>
                                    <div class="field_nameset1">
                                        <div class="field_nameset2">せい</div>
                                        <div class="field_nameset3"><input type="text"  pattern="^[ぁ-んァ-ヶー]+$" name="field2_1" /></div>
                                        <div class="field_nameset5"></div>
                                        <div class="field_nameset4">&nbsp;</div>
                                        <div class="field_nameset2">めい</div>
                                        <div class="field_nameset3"><input type="text"  pattern="^[ぁ-んァ-ヶー]+$" name="field2_2" /></div>
                                    </div>
                                </div>
                                <div class="hx1"></div>
                                <div class="field_datesetp">
                                    ★全角でご記入ください。
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
                                <div class="field_control">
                                    <div class="radio_set">
                                        <div class="radio_wrap"><input type="radio" name="field3" value="男性" id="radio_field3_1"><label for="radio_field3_1">男性</label></div>
                                        <div class="radio_wrap"><input type="radio" name="field3" value="女性" id="radio_field3_2"><label for="radio_field3_2">女性</label></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form_field">
                        <div class="field_left">
                            メールアドレス
                        </div>
                        <div class="field_right">
                            <div class="field_reqtext"><span>必須</span></div>
                            <div class="field_vert">
                                <div class="field_control">
                                    <input type="email" name="email" required/>
                                </div>
                                <div class="hx1"></div>
                                <div class="field_datesetp">★半角英数字でご記入ください。</div>
                            </div>
                        </div>
                    </div>
                    <div class="form_field">
                        <div class="field_left">
                            電話番号
                        </div>
                        <div class="field_right">
                            <div class="field_reqtext"><span>必須</span></div>
                            <div class="field_vert">
                                <div class="field_control">
                                    <!-- <input type="text" name="field5" required/> -->
                                    <input type="tel" name="電話番号" size="50" required/>
                                </div>
                                <div class="hx1"></div>
                                <div class="field_datesetp">★半角英数字でご記入ください。</div>
                            </div>
                        </div>
                    </div>
                    <div class="form_field">
                        <div class="field_left">
                            お住まいの地域
                        </div>
                        <div class="field_right">
                            <div class="field_reqtext"><span>必須</span></div>
                            <div class="field_vert">
                                <div class="field_control">
                                    <div class="radio_set">
                                        <div class="radio_wrap"><input type="radio" name="field6" value="東京近郊" id="radio_field6_1">
                                            <label for="radio_field6_1">東京近郊</label>
                                        </div>
                                        <div class="radio_wrap"><input type="radio" name="field6" value="東海圏" id="radio_field6_2">
                                            <label for="radio_field6_2">東海圏</label>
                                        </div>
                                        <div class="radio_wrap"><input type="radio" name="field6" value="その他" id="radio_field6_3">
                                            <label for="radio_field6_3">その他</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form_field">
                        <div class="field_left">
                            現在行っている、また過去に行っていた発毛対策をお答え下さい？（複数回答可）
                        </div>
                        <div class="field_right">
                            <div class="field_reqtext"><span>必須</span></div>
                            <div class="field_vert">
                                <div class="field_control">
                                    <div class="radio_set">
                                        <div class="radio_wrap">
                                            <input type="checkbox" name="field7[]" class="checkbox_group1" id="radio_field7_1" value="AGA薬">
                                            <label for="radio_field7_1">AGA薬</label>
                                        </div>
                                        <div class="radio_wrap">
                                            <input type="checkbox" name="field7[]" class="checkbox_group1" id="radio_field7_2" value="医療機関/クリニック発毛治療">
                                            <label for="radio_field7_2">医療機関/クリニック発毛治療</label>
                                        </div>
                                        <div class="radio_wrap">
                                            <input type="checkbox" name="field7[]" class="checkbox_group1" id="radio_field7_3" value="非医療機関発毛サービス">
                                            <label for="radio_field7_3">非医療機関発毛サービス</label>
                                        </div>
                                        <div class="radio_wrap">
                                            <input type="checkbox" name="field7[]" class="checkbox_group1" id="radio_field7_4" value="育毛剤、ヘアケア商品（自宅ケア）">
                                            <label for="radio_field7_4">育毛剤、ヘアケア商品（自宅ケア）</label>
                                        </div>
                                        <div class="radio_wrap">
                                            <input type="checkbox" name="field7[]" class="checkbox_group1" id="radio_field7_5" value="その他">
                                            <label for="radio_field7_5">その他</label>
                                        </div>
                                        <div class="radio_wrap">
                                            <input type="checkbox" name="field7[]" class="checkbox_group1" id="radio_field7_6" value="特に何も行っていない">
                                            <label for="radio_field7_6">特に何も行っていない</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form_field" id="next_block">
                        <div class="field_left">
                            現在行っている、また過去に行っていた発毛対策への不満点をお答え下さい？（複数回答可）
                        </div>
                        <div class="field_right">
                            <div class="field_reqtext"><span>必須</span></div>
                            <div class="field_vert">
                                <div class="field_control">
                                    <div class="radio_set">
                                        <div class="radio_wrap"><input type="checkbox" name="field8[]" class="checkbox_group2" id="radio_field8_1" value="発毛効果">
                                            <label for="radio_field8_1">発毛効果</label>
                                        </div>
                                        <div class="radio_wrap"><input type="checkbox" name="field8[]" class="checkbox_group2" id="radio_field8_2" value="副作用">
                                            <label for="radio_field8_2">副作用</label>
                                        </div>
                                        <div class="radio_wrap"><input type="checkbox" name="field8[]" class="checkbox_group2" id="radio_field8_3" value="一生続ける必要があること">
                                            <label for="radio_field8_3">一生続ける必要があること</label>
                                        </div>
                                        <div class="radio_wrap"><input type="checkbox" name="field8[]" class="checkbox_group2" id="radio_field8_4" value="費用">
                                            <label for="radio_field8_4">費用</label>
                                        </div>
                                        <div class="radio_wrap"><input type="checkbox" name="field8[]" class="checkbox_group2" id="radio_field8_5" value="医師やスタッフの知識や対応">
                                            <label for="radio_field8_5">医師やスタッフの知識や対応</label>
                                        </div>
                                        <div class="radio_wrap"><input type="checkbox" name="field8[]" class="checkbox_group2" id="radio_field8_6" value="その他">
                                            <label for="radio_field8_6">その他</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form_field">
                        <div class="field_left">
                            【毛髪再生】メセル発毛HCR法に対して、疑問点やご要望などがございましたらお聞かせ下さい。
                        </div>
                        <div class="field_right">
                            <div class="field_reqtext"><span>必須</span></div>
                            <div class="field_vert">
                                <div class="field_control">
                                    <textarea name="field9" required></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="privacy_field">
                        <div class="privacy_cap">
                            個人情報のお取扱い
                        </div>
                        <div class="field_control">
                            <div class="form_privacy mycustom_scroll_bar">
                                <div class="form_privacy_inner">
                                    <div class="pg_p">
                                        <p>株式会社日本ナチュラルエイジングケア研究所及びメセル発毛HCR法・美顔FCR法提供店舗は、お客様のプライバシーに係わる個人情報を保護することに細心の注意を払い取り組みます。</p>
                                        <p>メセル発毛HCR法・美顔FCR法において、お客様ご自身の判断により個人情報をご提供いただく場合がございますが、その情報は必要最小限の情報とし、その他の情報のご提供につきましてはお客様の判断を尊重いたします。</p>
                                        <br>
                                        <p><b>1.個人情報の収集および利用目的について</b></p>
                                        <p>株式会社日本ナチュラルエイジングケア研究所及びメセル発毛HCR法・美顔FCR法提供店舗では依頼者・相談者をはじめとする個人情報を取得する場合、利用目的を明示し、適正かつ公正な手段によって行ないます。</p>
                                        <p>事件処理その他の業務遂行を目的とする情報管理・収集、書面等の発送及び連絡の為</p>
                                        <p>ご相談、お問い合わせに関する回答の為</p>
                                        <br>
                                        <p><b>2.個人情報の安全管理・保管</b></p>
                                        <p>株式会社日本ナチュラルエイジングケア研究所及びメセル発毛HCR法・美顔FCR法提供店舗は、ご提供いただいた個人情報を正確にデータ処理し、株式会社メセルアンチエイジング研究所及びメセル発毛HCR法・美顔FCR法提供店舗が保有する個人情報の安全性を確保するため、適切な保護・安全対策を実施し、個人情報の紛失、破壊、改ざん、漏えいの防止に努めます。</p>
                                        <br>
                                        <p><b>3.個人情報の提供</b></p>
                                        <p>個人情報について、お客様ご本人の同意を得ずに日本ナチュラルエイジングケア研究所が第三者に提供することは、以下の場合を除き、原則いたしません。</p>
                                        <p>法令に基づく場合</p>
                                        <p>人の生命、身体又は財産の保護のために必要がある場合</p>
                                        <p>国の機関若しくは地方公共団体又はその委託を受けた者が法令の定める事務を遂行することに対して協力する必要がある場合</p>
                                        <p>業務の遂行に係り、官公署へ書類を提出する場合。</p>
                                        <p>広告等のための分析を行う場合。</p>
                                        <br>
                                        <p><b>4.個人情報の開示･利用停止・消去について</b></p>
                                        <p>個人情報の情報主体であるご本人が自己の個人情報について、開示、訂正、利用停止、消去等の要求をなされた場合は、適切な方法により、ご本人であることの確認を経た上で、法令または業務上拒否することが認められた場合を除き速やかに対応致します。</p>
                                        <br>
                                        <p><b>5.個人情報保護方針の改定</b></p>
                                        <p>株式会社日本ナチュラルエイジングケア研究所及びメセル発毛HCR法・美顔FCR法提供店舗では、社会情勢の変化、技術の進歩、諸環境の変化等に応じ、事前の予告なくプライバシーポリシーを変更することがあります。</p>
                                        <br>
                                        <p><b>6.著作権</b></p>
                                        <p>本メセル発毛HCR法・美顔FCR法ウェブサイトのコンテンツ(文章、写真、画像、データ、イメージ、グラフィックス、など)及びこれらの配置・編集および構造などについての著作権は株式会社 日本ナチュラルエイジングケア研究所に帰属しておりますので、これらの無断使用（Webサイトの全部あるいは一部の複製、送信、放送、出版、頒布、掲示、譲渡、貸与、翻訳、翻案、使用許諾、再利用等を含む）、転載、変更、改ざん、商業的利用はご遠慮ください。</p>
                                        <br>
                                        <p><b>7.免責事項</b></p>
                                        <p>本メセル発毛HCR法・美顔FCR法ウェブサイトに掲載されている情報には万全を期していますが、法律の改正その他の原因により日本ナチュラルエイジングケア研究所の情報を利用することによって生じた損害に対して一切の責任（間接損害・特別損害・結果的損害及び付随的損害）を負うものではありません。情報の利用に関しましては全て最終自己責任で行って頂くようお願いします。</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="field_contactbtn">
                        <input type="hidden" name="submit-confirm" value="submit-confirm">
                        <button type="submit" class="field_contactbtna">「個人情報のお取扱い」に同意して<br class="disb_sp">確認画面へ進む</button>
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
