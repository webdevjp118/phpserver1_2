<?php
get_header();
?>
<!-- CONTAIN_START -->
<div class="state_vals is_top"></div>
<div class="banner_block_tp">
    <style>
        :root { --banner_bg: url(<?php echo get_field('fv_pc'); ?>); }
        @media (max-width: 768px) {
            :root { --banner_bg: url(<?php echo get_field('fv_sp'); ?>); }
        }
    </style>
    <div class="banner_background"></div>
    <div class="banner_menu_tp">
        <div class="banner_menu_bg">
            <div class="banner_menu_bg1"></div>
            <div class="banner_menu_bg2"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/banner_menu_curtain.svg"></div>
        </div>
        <div class="banner_logo_tp">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo_green.svg">
        </div>
        <div class="bannermenu_tp">
            <a class="bannermenu_a" href="<?php echo get_site_url(); ?>/menu/" style="transition-delay: 1.5s;">
                <div class="bannermenu_abg"></div>
                <p>メニュー</p>
            </a>
            <a class="bannermenu_a" href="<?php echo get_site_url(); ?>/reserve/" style="transition-delay: 1.7s;">
                <div class="bannermenu_abg"></div>
                <p>予約</p>
            </a>
            <a class="bannermenu_a" href="<?php echo get_site_url(); ?>/#access" style="transition-delay: 1.9s;">
                <div class="bannermenu_abg"></div>
                <p>アクセス</p>
            </a>
            <a class="bannermenu_a" href="<?php echo get_site_url(); ?>/school/" style="transition-delay: 2.1s;">
                <div class="bannermenu_abg"></div>
                <p>アートメイク講座</p>
            </a>
        </div>
    </div>  
    <div class="clearfix"></div>
</div> 
<section id="contain" class="main_sections">    	        
    <div class="treatmenu_block_tp">
        <div class="cwidth12">
            <div class="hx6"></div>
            <div class="treatmenu_title_tp io fade upS">
                <div class="common_title_hp">
                    <h2>診療項目</h2>
                    <p>MENU</p>
                </div>
            </div>
            <div class="hx4"></div>
            <div class="treatmenu_row_tp">
                <div class="treatmenu_col_tp io fade upS">
                    <div class="treatmenu_img_tp">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/tp_treatmenu01.png">
                    </div>
                    <div class="treatmenu_text_tp">美容皮膚科</div>
                </div>
                <div class="treatmenu_col_tp io fade upS">
                    <div class="treatmenu_img_tp">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/tp_treatmenu02.png">
                    </div>
                    <div class="treatmenu_text_tp">美容点滴/注射</div>
                </div>
                <div class="treatmenu_col_tp io fade upS">
                    <div class="treatmenu_img_tp">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/tp_treatmenu03.png">
                    </div>
                    <div class="treatmenu_text_tp">アートメイク</div>
                </div>
            </div>
            <div class="hx10"></div>
        </div>
    </div>
    <div class="clinic_menu_tp">
        <div class="clinic_wrap_tp">
            <div class="clinicmenu_right_tp">
                <div class="clinicmenu_row_tp owl-carousel owl-theme">
                    <div class="item">
                        <div class="clinicmenu_left_tp">
                            <div class="clinicmenu_img_tp">
                                <img class="clinic_face" src="<?php echo get_stylesheet_directory_uri(); ?>/images/tp_clinicmenu.png">
                                <img class="clinic_sticker" src="<?php echo get_stylesheet_directory_uri(); ?>/images/clinic_sticker.svg">
                            </div>
                            <div class="clinicmenu_btn_tp">
                                <a class="com_job_btn" href="#">
                                    <span>詳しいメニューはこちら</span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="6.103" height="10.793" viewBox="0 0 6.103 10.793">
                                        <path d="M328.1,2380.691l5.043,5.043-5.043,5.043" transform="translate(-327.743 -2380.337)" fill="none" stroke-width="1"/>
                                    </svg>                      
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="clinicmenu_margin"></div>
                        <div class="clinicmenu_item_tp">
                            <div class="clinicmenuitem_img_tp">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/tp_clinicmenu_item01.jpg">
                                <div class="clinicmenuitem_imgtext_tp">アートメイク</div>
                            </div>
                            <div class="hx2"></div>
                            <div class="clinicmenu_table" >
                                <table>
                                    <tr><th>アイブロウ</th><td width="100px"><b>75000</b>円</td></tr>
                                    <tr><th>リップ</th><td width="100px"><b>85000</b>円</td></tr>
                                    <tr><th>ストレッチマーク</th><td width="100px"><b>55000</b>円</td></tr>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="clinicmenu_margin"></div>
                        <div class="clinicmenu_item_tp">
                            <div class="clinicmenuitem_img_tp">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/tp_clinicmenu_item02.jpg">
                                <div class="clinicmenuitem_imgtext_tp">ボトックス</div>
                            </div>
                            <div class="hx2"></div>
                            <div class="clinicmenu_table" >
                                <table>
                                    <tr><th>額・顎・眉間・目尻</th><td width="100px"><b>35000</b>円</td></tr>
                                    <tr><th>肩</th><td width="100px"><b>25000</b>円</td></tr>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="clinicmenu_margin"></div>
                        <div class="clinicmenu_item_tp">
                            <div class="clinicmenuitem_img_tp">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/tp_clinicmenu_item03.jpg">
                                <div class="clinicmenuitem_imgtext_tp">ヒアルロン酸</div>
                            </div>
                            <div class="hx2"></div>
                            <div class="clinicmenu_table" >
                                <table>
                                    <tr><th>ジュビダームビスタ ウルトラXC1cc</th><td width="100px"><b>30000</b>円</td></tr>
                                    <tr><th>ジュビダームビスタ ボリフト1cc</th><td width="100px"><b>60000</b>円</td></tr>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="clinicmenu_margin"></div>
                        <div class="clinicmenu_item_tp">
                            <div class="clinicmenuitem_img_tp">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/tp_clinicmenu_item04.jpg">
                                <div class="clinicmenuitem_imgtext_tp">シミケア</div>
                            </div>
                            <div class="hx2"></div>
                            <div class="clinicmenu_table" >
                                <table>
                                    <tr>
                                        <th>シミプラズマネオ<br>プラズマミスト</th>
                                        <td>
                                            1回　<b>15000</b>円<br>
                                            3回　<b>42000</b>円
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>シミソニック</th>
                                        <td>
                                            ３箇所　<b>2000</b>円<br>
                                            取り放題　<b>5000</b>円</td>
                                        </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="clinicmenu_margin"></div>
                        <div class="clinicmenu_item_tp">
                            <div class="clinicmenuitem_img_tp">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/tp_clinicmenu_item05.jpg">
                                <div class="clinicmenuitem_imgtext_tp">ピーリング</div>
                            </div>
                            <div class="hx2"></div>
                            <div class="clinicmenu_table" >
                                <table>
                                    <tr><th>ケミカルピーリング（サリチル酸マクロゴール）</th><td width="100px"><b>7000</b>円</td></tr>
                                    <tr><th>ベビーピール（サリチル酸マクロゴール＋コウジ酸30％・40％）</th><td width="100px"><b>10000</b>円</td></tr>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="clinicmenu_margin"></div>
                        <div class="clinicmenu_item_tp">
                            <div class="clinicmenuitem_img_tp">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/tp_clinicmenu_item06.jpg">
                                <div class="clinicmenuitem_imgtext_tp">白玉注射</div>
                            </div>
                            <div class="hx2"></div>
                            <div class="clinicmenu_table" >
                                <table>
                                    <tr><th>プチ（グルタチオン 200mg）</th><td width="100px"><b>2,178</b>円</td></tr>
                                    <tr><th>ライト（グルタチオン 400mg）</th><td width="100px"><b>3,278</b>円</td></tr>
                                    <tr><th>レギュラー（グルタチオン 600mg）</th><td width="100px"><b>4,290</b>円</td></tr>
                                    <tr><th>高濃度（グルタチオン 1200mg）</th><td width="100px"><b>7,590</b>円</td></tr>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="clinicmenu_margin"></div>
                        <div class="clinicmenu_item_tp">
                            <div class="clinicmenuitem_img_tp">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/tp_clinicmenu_item07.jpg">
                                <div class="clinicmenuitem_imgtext_tp">白玉点滴</div>
                            </div>
                            <div class="hx2"></div>
                            <div class="clinicmenu_table" >
                                <table>
                                    <tr><th>白玉点滴（グルタチオン 600mg）</th><td width="100px"><b>5,280</b>円</td></tr>
                                    <tr><th>高濃度白玉点滴（グルタチオン 1200mg）</th><td width="100px"><b>8,580</b>円</td></tr>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="clinicmenu_margin"></div>
                        <div class="clinicmenu_item_tp">
                            <div class="clinicmenuitem_img_tp">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/tp_clinicmenu_item08.jpg">
                                <div class="clinicmenuitem_imgtext_tp">プラセンタ点滴</div>
                            </div>
                            <div class="hx2"></div>
                            <div class="clinicmenu_table" >
                                <table>
                                    <tr><th>高濃度ビタミンC点滴</th><td width="100px"><b>16500</b>円</td></tr>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="clinicmenu_margin"></div>
                        <div class="clinicmenu_item_tp">
                            <div class="clinicmenuitem_img_tp">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/tp_clinicmenu_item09.jpg">
                                <div class="clinicmenuitem_imgtext_tp">疲労回復注射</div>
                            </div>
                            <div class="hx2"></div>
                            <div class="clinicmenu_table" >
                                <table>
                                    <tr>
                                        <th>にんにく注射</th>
                                        <td>
                                            1回　<b>2200</b>円<br>
                                            5回　<b>10000</b>円
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="clinicmenu_margin"></div>
                        <div class="clinicmenu_item_tp">
                            <div class="clinicmenuitem_img_tp">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/tp_clinicmenu_item10.jpg">
                                <div class="clinicmenuitem_imgtext_tp">二日酔い点滴</div>
                            </div>
                            <div class="hx2"></div>
                            <div class="clinicmenu_table" >
                                <table>
                                    <tr><th>1回</th><td width="100px"><b>3000</b>円</td></tr>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="clinicmenu_margin"></div>
                        <div class="clinicmenu_item_tp">
                            <div class="clinicmenuitem_img_tp">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/tp_clinicmenu_item11.jpg">
                                <div class="clinicmenuitem_imgtext_tp">ニキビ注射</div>
                            </div>
                            <div class="hx2"></div>
                            <div class="clinicmenu_table" >
                                <table>
                                    <tr>
                                        <th>ニキビ撃退注射1箇所</th>
                                        <td>
                                            1回　<b>3000</b>円<br>
                                            5回　<b>13000</b>円
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="clinicmenu_margin"></div>
                        <div class="clinicmenu_item_tp">
                            <div class="clinicmenuitem_img_tp">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/tp_clinicmenu_item12.jpg">
                                <div class="clinicmenuitem_imgtext_tp">内服薬</div>
                            </div>
                            <div class="hx2"></div>
                            <div class="clinicmenu_table" >
                                <table>
                                    <tr><th>シナール</th></tr>
                                    <tr><th>トランサミン500mg</th></tr>
                                    <tr><th>ユベラ200mg</th></tr>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="item">&nbsp;</div>
                </div>
            </div>
        </div>
    </div>
    <div class="feature_block_tp">
        <div class="hx10"></div>
        <div class="feature_width">
            <div class="feature_title_tp io fade upS">
                <div class="common_title_hp">
                    <h2>当院のこだわり</h2>
                    <p>FEATURE</p>
                </div>
            </div>
            <div class="hx6"></div>
            <div class="feature_container">
                <div class="feature_item">
                    <div class="feature_back">
                        <div class="feature_img">
                            <img class="panil3" src="<?php echo get_stylesheet_directory_uri(); ?>/images/tp_feature01.jpg">
                        </div>
                    </div>
                    <div class="feature_front">
                        <div class="feature_content">
                            <div class="feature_title io fade upS">
                                <h2>キッズスペース完備</h2>
                            </div>
                            <div class="hx2"></div>
                            <div class="feature_text io fade upS">
                                <p>クリニックには、お子様向けのキッズルームをご用意しています。<br>
                                    アニメDVD・絵本・おもちゃ等が豊富にございますので、小さなお子様も飽きずに施術やカウンセリングを受けることができます。<br>
                                    また当院の会員様に限り、クリニック利用時間以外にも託児利用が可能です。</p>
                                <div class="hx4"></div>
                                <div class="feature_btn_tp">
                                    <a class="com_job_btn" href="<?php echo get_site_url(); ?>/reserve/">
                                        <span>ご予約・お問い合わせはこちら</span>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="6.103" height="10.793" viewBox="0 0 6.103 10.793">
                                            <path d="M328.1,2380.691l5.043,5.043-5.043,5.043" transform="translate(-327.743 -2380.337)" fill="none" stroke-width="1"></path>
                                        </svg>                      
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="hx4"></div>
                <div class="feature_item pxt_right">
                    <div class="feature_back">
                        <div class="feature_img">
                            <img class="panil3" src="<?php echo get_stylesheet_directory_uri(); ?>/images/tp_feature02.jpg">
                        </div>
                    </div>
                    <div class="feature_front">
                        <div class="feature_content">
                            <div class="feature_title io fade upS">
                                <h2>和の要素とモダンな<br class="br_sp">デザインの融合</h2>
                            </div>
                            <div class="hx2"></div>
                            <div class="feature_text io fade upS">
                                <p>伝統的な日本の美を尊重しつつ、現代的な美容クリニックの要素も取り入れた内装を実現しました。<br>
                                    和のエッセンスが感じられる空間に、洗練されたモダンなデザインが調和しています。<br>
                                    和の美意識と先進的な美容技術の融合を強調し、美容クリニックが提供する特別な美の世界感を表現しています。</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="hx4"></div>
                <div class="feature_item">
                    <div class="feature_back">
                        <div class="feature_img">
                            <img class="panil3" src="<?php echo get_stylesheet_directory_uri(); ?>/images/tp_feature03.jpg">
                        </div>
                    </div>
                    <div class="feature_front">
                        <div class="feature_content">
                            <div class="feature_title io fade upS">
                                <h2>良質なサービスを<br class="br_sp">低価格で提供</h2>
                            </div>
                            <div class="hx2"></div>
                            <div class="feature_text io fade upS">
                                <p>医師・看護師の高い技術力と信頼性のある医療機器を備え、効果のある美容治療を提供しています。<br>
                                    通いやすい価格での提供を行い、患者様に寄り添った接客・安心安全な治療を行うことを心掛けます。<br>
                                    また夜21時まで診療。<br>
                                    仕事や家庭で忙しい方にも通院しやすい開院時間といたしました。</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="hx10"></div>
    </div>
    <div class="gray_area">
        <div class="news_sec_tp">
            <div class="news_width">
                <div class="hx6"></div>
                <div class="news_row_tp">
                    <div class="news_title_tp io fade upS">
                        <div class="common_title_hp">
                            <h2>お知らせ</h2>
                            <p>NEWS</p>
                        </div>
                    </div>
                    <div class="hx4"></div>
                    <div class="news_list_tp">
<?php
$related_args = array(
	'post_type' => 'post',
	'posts_per_page' => 3,
);
$query = new WP_Query( $related_args );
if ( $query->have_posts() ) :
    while ( $query->have_posts() ) :
        $query->the_post();
        $loop_id = get_the_id();
        $loop_title = get_the_title();
        $loop_content = get_the_excerpt();
        $loop_date = get_the_date('Y.m.d');
        $loop_category_name = "";
        $loop_category_objects = get_the_category($loop_id);
        foreach($loop_category_objects as $cd){
            $loop_category_name = $cd->cat_name;
            break;
        }
        $loop_permalink = get_the_permalink($loop_id);
        $loop_thumb_url = get_thumb_url($loop_id);
?>                    
                        <a class="news_item_tp io fade upS" href="<?php echo $loop_permalink; ?>">
                            <div class="news_datecat_tp">
                                <div class="news_date_tp"><?php echo $loop_date; ?></div>
                                <div class="news_cat_tp"><span><?php echo $loop_category_name; ?></span></div>
                            </div>
                            <div class="news_subtitle_tp"><?php echo $loop_title; ?></div>
                        </a>
<?php
    endwhile;
endif;
?>                    
                    </div>
                    <div class="hx4"></div>
                    <div class="news_btn_tp io fade upS">
                        <a class="com_job_btn" href="<?php echo get_site_url(); ?>/news/">
                            <span>VIEW MORE</span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="6.103" height="10.793" viewBox="0 0 6.103 10.793">
                                <path d="M328.1,2380.691l5.043,5.043-5.043,5.043" transform="translate(-327.743 -2380.337)" fill="none" stroke-width="1"/>
                            </svg>                      
                        </a>
                    </div>
                </div>
                <div class="hx6"></div>
            </div>
        </div>
        <div class="pmh_anchor" id="access"></div>
        <div class="access_sec_tp">
            <div class="cwidth14">
                <div class="hx10"></div>
                <div class="access_row_tp">
                    <div class="access_left_tp">
                        <div class="access_title_tp io fade upS">
                            <div class="common_title_hp">
                                <h2>院内紹介</h2>
                                <p>ACCESS</p>
                            </div>
                        </div>
                        <div class="hx4"></div>
                        <div class="access_tb_tp io fade upS">
                            <div class="accesstb_row_tp">
                                <div class="accesstb_th_tp">住所</div>
                                <div class="accesstb_td_tp">
                                    〒104-0032<br>
                                    東京都中央区八丁堀２丁目１６−８
                                </div>
                            </div>
                            <div class="hx2"></div>
                            <div class="accesstb_row_tp">
                                <div class="accesstb_th_tp">アクセス</div>
                                <div class="accesstb_td_tp">
                                    東京メトロ日比谷線 / 八丁堀駅 徒歩2分<br>
                                    都営浅草線 / 宝町駅 徒歩7分<br>
                                    東京メトロ銀座線 / 京橋駅 徒歩10分
                                </div>
                            </div>
                            <div class="hx2"></div>
                            <div class="accesstb_row_tp js_modalOpen" data-target="access_dialog">
                                <div class="accesstb_th_tp">アクセス(電車)</div>
                                <div class="accesstb_td_tp">東京駅１分　銀座駅から５分</div>
                            </div>
                            <div class="hx2"></div>
                            <div class="accesstb_row_tp">
                                <div class="accesstb_th_tp">診療時間</div>
                                <div class="accesstb_td_tp">11：00〜21：00</div>
                            </div>
                            <div class="hx2"></div>
                            <div class="accesstb_row_tp">
                                <div class="accesstb_th_tp">お支払い方法</div>
                                <div class="accesstb_td_tp">現金・医療ローン・クレジットカード(VISA・MASTER ・JCB・AMEX・DINERS）・PayPay</div>
                            </div>
                        </div>
                        <div class="hx4"></div>
                        <div class="access_btn_tp io fade upS">
                            <a class="com_job_btn" href="https://goo.gl/maps/1pUuegWKUt7q7JBr9" target="_blank">
                                <span>Google Map</span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="6.103" height="10.793" viewBox="0 0 6.103 10.793">
                                    <path d="M328.1,2380.691l5.043,5.043-5.043,5.043" transform="translate(-327.743 -2380.337)" fill="none" stroke-width="1"/>
                                </svg>                      
                            </a>
                        </div>
                    </div>
                    <div class="access_right_tp io fade upS">
                        <div class="tp_access_slider owl-carousel owl-theme">
                            <div class="item"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/tp_access01.jpg"></div>
                            <div class="item"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/tp_access01.jpg"></div>
                            <div class="item"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/tp_access01.jpg"></div>
                        </div>
                    </div>
                </div>
                <div class="hx10"></div>
            </div>
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
    </div>
</section>
<div class="access_dlg" id="access_dialog">
    <div class="accessdlg_box">
        <div class="accessdlg_close"></div>
        <div class="accessdlg_inner">
            <div class="access_bus">アクセス(電車)</div>
            <div class="access_minutes">東京駅から <span>1</span>分</div>
            <div class="access_minutes">銀座駅から <span>5</span>分</div>
            <div class="access_reserve">完全予約制</div>
            <a href="#" class="accessdlg_btn">ご予約はこちらから</a>
        </div>
    </div>
</div>
<!-- CONTAIN_END -->
<?php
get_footer();
