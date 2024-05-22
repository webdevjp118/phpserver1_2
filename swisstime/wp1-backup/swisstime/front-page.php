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
    $field8 = isset($_POST['field8']) ? $_POST['field8']: '';
    $field9 = isset($_POST['field9']) ? $_POST['field9']: '';
    $field10 = isset($_POST['field10']) ? $_POST['field10']: '';
    $field11 = isset($_POST['field11']) ? $_POST['field11']: '';
    $field12 = isset($_POST['field12']) ? $_POST['field12']: '';
    $field13 = isset($_POST['field13']) ? $_POST['field13']: '';
    $field14 = isset($_POST['field14']) ? $_POST['field14']: '';
    $field15 = isset($_POST['field15']) ? $_POST['field15']: '';
    
    // $to      = 'prgfinal216@gmail.com';
    $to      = 'info@swisstimeworks.jp';

    $message = "
    メーカー名 : ".$field1."<br>
    モデル名 : ".$field2."<br>
    ムーブメント : ".$field3."<br>
    時計の機能 : ".$field4."<br>
    時計の状態・ご希望など : <br>".$field5."<br>
    ご依頼内容 : ".$field6."<br>
    無料梱包キットを希望する : ".$field7."<br>
    お名前 : ".$field8."<br>
    フリガナ : ".$field9."<br>
    メールアドレス : ".$field10."<br>
    電話番号 : ".$field11."<br>
    郵便番号 : ".$field12."<br>
    都道府県 : ".$field13."<br>
    市区町村・番地 : ".$field14."<br>
    建物名・部屋番号 : ".$field15."<br>
    ";

    $subject = 'お問い合わせがありました';

    $headers = "From: " . $field10 . "\r\n";
    $headers .= "Reply-To: " . $field10 . "\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=UTF-8\r\n";

    if(mail($to, $subject, $message, $headers)) {
      echo '<script>location.href="'.home_url().'/success"</script>';
    } else {
      echo '<script>location.href="'.home_url().'/failed"</script>';
    }
}
?>
<!-- CONTAIN_START -->
<section id="contain">    	        
    <div class="banner_block_hp">             
        <div class="container-fluid">
            <div class="row">
                <div class="col banner_block_in_hp">                    	
                    <div class="banner_middle_hp"> 
                        <div class="banner_slider_hp">
                            <div class="owl-carousel owl-theme banner_slider_img_hp">
                                <div class="banner_slider_in_hp" style="background:url(<?php echo get_stylesheet_directory_uri(); ?>/images/banner_1.png) no-repeat top center; background-size:cover;">
                                    <div class="banner_title_hp">
                                        <h6>スイスタイムワークス</h6>
                                        <h4>高級時計修理工房</h4>
                                    </div>
                                </div>
                                <div class="banner_slider_in_hp" style="background:url(<?php echo get_stylesheet_directory_uri(); ?>/images/banner_2.png) no-repeat top center; background-size:cover;">
                                    <div class="banner_title_hp">
                                        <h6>スイスタイムワークス</h6>
                                        <h4>高級時計修理工房</h4>
                                    </div>
                                </div>
                                <div class="banner_slider_in_hp" style="background:url(<?php echo get_stylesheet_directory_uri(); ?>/images/banner_3.png) no-repeat top center; background-size:cover;">
                                    <div class="banner_title_hp">
                                        <h6>スイスタイムワークス</h6>
                                        <h4>高級時計修理工房</h4>
                                    </div>
                                </div>
                                <div class="banner_slider_in_hp" style="background:url(<?php echo get_stylesheet_directory_uri(); ?>/images/banner_4.png) no-repeat top center; background-size:cover;">
                                    <div class="banner_title_hp">
                                        <h6>スイスタイムワークス</h6>
                                        <h4>高級時計修理工房</h4>
                                    </div>
                                </div>    
                                <div class="banner_slider_in_hp" style="background:url(<?php echo get_stylesheet_directory_uri(); ?>/images/banner_5.png) no-repeat top center; background-size:cover;">
                                    <div class="banner_title_hp">
                                        <h6>スイスタイムワークス</h6>
                                        <h4>高級時計修理工房</h4>
                                    </div>
                                </div>  
                                <div class="banner_slider_in_hp" style="background:url(<?php echo get_stylesheet_directory_uri(); ?>/images/banner_6.png) no-repeat top center; background-size:cover;">
                                    <div class="banner_title_hp">
                                        <h6>スイスタイムワークス</h6>
                                        <h4>高級時計修理工房</h4>
                                    </div>
                                </div>    
                                <div class="banner_slider_in_hp" style="background:url(<?php echo get_stylesheet_directory_uri(); ?>/images/banner_7.png) no-repeat top center; background-size:cover;">
                                    <div class="banner_title_hp">
                                        <h6>スイスタイムワークス</h6>
                                        <h4>高級時計修理工房</h4>
                                    </div>
                                </div>                                 
                            </div>
                        </div>		     
                    </div>                                               
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>            
        <div class="clearfix"></div>
    </div>		        
    <div class="swiss_block_hp">             
        <div class="container">
            <div class="row">
                <div class="col swiss_block_in_hp">                    	
                    <div class="swiss_middle_hp"> 
                        <div class="swiss_info_hp">
                            スイスタイムワークスは高級腕時計専門の修理工房です。 <br />
                            様々なブランドとモデルに精通し、 <br />
                            時計知識と修理経験豊かなスタッフがお客様の時計の症状に合った最適なサービスをご提供致します。 <br />
                            オーデマピゲ、バセロンコンスタンタン、ロレックス、オメガ、 <br />
                            ブライトリングなどの定期メンテナンス、オーバーホール、 <br />
                            外装研磨仕上、外装修理、アンティークレストレーションなど経験とスキル、 <br />
                            専用設備を活かした業務を幅広く行っております。<br />
                            どうぞお気軽にお問合せ下さい。
                        </div>         			     
                    </div>                                               
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>            
        <div class="clearfix"></div>
    </div>                
    <div class="reason_block_hp">             
        <div class="container">
            <div class="row">
                <div class="col reason_block_in_hp">                     	
                    <div class="common_title_hp">
                        <div class="common_svg_hp">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/commen_plus_icon.svg" alt="" />
                        </div>
                        <p>Reason</p>
                        <h2>私たちが選ばれる理由</h2>                            
                    </div>                  	
                    <div class="reason_middle_hp"> 
                        <div class="reason_top_hp">
                            <div class="reason_box_hp">
                                <a href="#">
                                    <div class="reason_digit_hp">
                                        01
                                    </div>
                                    <div class="reason_img_hp">
                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/reason_icon1.svg" alt=""/>
                                    </div>
                                    <div class="reason_info_hp">
                                        <h3>高い修理技術 <br />複雑時計修理も対応</h3>
                                        <p>WOSTEP認定、一級時計修理技能士 <br />時計修理サービス専門チーム</p>
                                    </div>
                                </a>
                            </div>
                            <div class="reason_box_hp">
                                <a href="#">
                                    <div class="reason_digit_hp">
                                        02
                                    </div>
                                    <div class="reason_img_hp">
                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/reason_icon2.svg" alt=""/>
                                    </div>
                                    <div class="reason_info_hp">
                                        <h3>業界最長 <br /> 2年修理保証</h3>
                                        <p>技術力の証左</p>
                                    </div>
                                </a>
                            </div>
                            <div class="reason_box_hp">
                                <a href="#">
                                    <div class="reason_digit_hp">
                                        03
                                    </div>
                                    <div class="reason_img_hp">
                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/reason_icon3.svg" alt=""/>
                                    </div>
                                    <div class="reason_info_hp">
                                        <h3>メーカー修理より <br />安い料金</h3>
                                        <p>最大60％OFF　技術力と価格を高次元で融合</p>
                                    </div>
                                </a>
                            </div>
                            <div class="reason_box_hp">
                                <a href="#">
                                    <div class="reason_digit_hp">
                                        04
                                    </div>
                                    <div class="reason_img_hp">
                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/reason_icon4.svg" alt=""/>
                                    </div>
                                    <div class="reason_info_hp">
                                        <h3>全国対応、 <br /> 無料見積配送キット</h3>
                                        <p>送料無料、見積無料/p>
                                    </div>
                                </a>
                            </div>
                        </div>	         			     
                    </div>                                               
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>            
        <div class="clearfix"></div>
    </div>
    <div class="service_block_hp">             
        <div class="container">
            <div class="row">
                <div class="col service_block_in_hp">                     	
                    <div class="common_title_hp">
                        <div class="common_svg_hp">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/commen_plus_icon.svg" alt="" />
                        </div>
                        <p>Service</p>
                        <h2>サービス</h2>                            
                    </div>                  	
                    <div class="service_middle_hp"> 
                        <div class="service_top_hp">
                            <div class="service_box_hp">
                                <div class="service_left_hp">
                                    <div class="service_digit_hp">
                                        01
                                    </div>
                                    <div class="service_img_hp">
                                        <a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/service_img1.png" alt=""/></a>
                                    </div>
                                </div>
                                <div class="service_right_hp">
                                    <div class="service_title_hp">
                                        <h6>Overhaul, Servicing</h6>
                                        <h4>オーバーホール</h4>
                                    </div>
                                    <div class="service_info_hp">
                                        <p>
                                            多くのスイス製高級時計は時の試練に耐えられるように設計、製造されております。
                                            最適なお手入れを定期的に実施されていれば何世代にも渡って美しく正確な時を刻み続けることも可能です。
                                            メンテナンスの頻度はご使用状況や保管状態等によって変化いたしますが、一般的にクォーツ（電池式）時計で6年から８年、機械式（ゼンマイ式）時計で４年から６年のメンテナンスサイクルが推奨されております。
                                        </p>
                                    </div>
                                    <div class="service_btn_hp">
                                        <a class="common_btn_hp" href="<?php echo get_site_url(); ?>/overhaul/">See More <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/common_btn_right_arrow.svg" alt="" /></a>
                                    </div>
                                </div>
                            </div>
                            <div class="service_box_hp service_reverse_hp">
                                <div class="service_left_hp">
                                    <div class="service_digit_hp">
                                        02
                                    </div>
                                    <div class="service_img_hp">
                                        <a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/service_img2.png" alt=""/></a>
                                    </div>
                                </div>
                                <div class="service_right_hp">
                                    <div class="service_title_hp">
                                        <h6>Watch Polishing/Restoration</h6>
                                        <h4>外装仕上げ</h4>
                                    </div>
                                    <div class="service_info_hp">
                                        <p>
                                            お客様の腕時計のケース、ブレスレット、バックルなどに付いたご使用傷、擦過痕、汚れなどを綺麗に取り除き時計本来の輝きを取り戻す一連の作業の事です。<br />
                                            時計を長くご使用されていると、どうしても細かな擦り傷やヘコミができてしまいます。
                                        </p>
                                    </div>
                                    <div class="service_btn_hp">
                                        <a class="common_btn_hp" href="<?php echo get_site_url(); ?>/restoration/">See More <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/common_btn_right_arrow.svg" alt="" /></a>
                                    </div>
                                </div>
                            </div> 
                            <div class="service_box_hp">
                                <div class="service_left_hp">
                                    <div class="service_digit_hp">
                                        03
                                    </div>
                                    <div class="service_img_hp">
                                        <a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/service_img3.png" alt=""/></a>
                                    </div>
                                </div>
                                <div class="service_right_hp">
                                    <div class="service_title_hp">
                                        <h6>Part Jobs</h6>
                                        <h4>部分修理</h4>
                                    </div>
                                    <div class="service_info_hp">
                                        <p>
                                            日々の業務を行う中でお客様から様々なご依頼、ご要望を賜っております。 <br />
                                            リューズが破損した又は紛失した、ガラスが割れたりヒビが入った、プッシュボタンが取れた、回転ベゼルが回らなくなった、中には固定ベゼルが衝撃で飛んで行ってしまった...
                                            などの不慮の事故でお客様の大切な時計に何らかの部分的な損傷が発生する場合がございます。
                                        </p>
                                    </div>
                                    <div class="service_btn_hp">
                                        <a class="common_btn_hp" href="<?php echo get_site_url(); ?>/part-jobs/">See More <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/common_btn_right_arrow.svg" alt="" /></a>
                                    </div>
                                </div>
                            </div>
                            <div class="service_box_hp service_reverse_hp">
                                <div class="service_left_hp">
                                    <div class="service_digit_hp">
                                        04
                                    </div>
                                    <div class="service_img_hp">
                                        <a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/service_img4.png" alt=""/></a>
                                    </div>
                                </div>
                                <div class="service_right_hp">
                                    <div class="service_title_hp">
                                        <h6>Battery Replacement ＆Reseal</h6>
                                        <h4>電池交換</h4>
                                    </div>
                                    <div class="service_info_hp">
                                        <p>
                                            2〜3年に一度、電池の交換が必要なクォーツ式の時計。 <br />
                                            街の時計店、量販店の一部では時計の知識や技術を持たない作業者が専用工具などを使用せず電池交換をすることによる様々なトラブルが生じています。
                                        </p>
                                    </div>
                                    <div class="service_btn_hp">
                                        <a class="common_btn_hp" href="<?php echo get_site_url(); ?>/battery/">See More <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/common_btn_right_arrow.svg" alt="" /></a>
                                    </div>
                                </div>
                            </div> 
                            <div class="service_box_hp">
                                <div class="service_left_hp">
                                    <div class="service_digit_hp">
                                        05
                                    </div>
                                    <div class="service_img_hp">
                                        <a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/service_img5.png" alt=""/></a>
                                    </div>
                                </div>
                                <div class="service_right_hp">
                                    <div class="service_title_hp">
                                        <h6>Watch Cleaning</h6>
                                        <h4>時計クリーニング</h4>
                                    </div>
                                    <div class="service_info_hp">
                                        <p>
                                            長年、腕時計をご使用されますと腕時計の本体ケース、金属ブレスレットやバックルの隙間部分に汗、皮脂、ホコリ、石鹸や香水成分などが入り込み、汚れが固着硬化し、やがて頑固な汚れや塊となって簡単には綺麗に出来ない状態になることがあります。
                                        </p>
                                    </div>
                                    <div class="service_btn_hp">
                                        <a class="common_btn_hp" href="<?php echo get_site_url(); ?>/cleaning/">See More <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/common_btn_right_arrow.svg" alt="" /></a>
                                    </div>
                                </div>
                            </div>                                                                
                        </div>		         			     
                    </div>                                               
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>            
        <div class="clearfix"></div>
    </div>              
    
    <div class="price_block_fp price_change_hp">             
        <div class="container">
            <div class="row">
                <div class="col price_block_in_fp">  
                    <div class="common_title_hp">
                        <div class="common_svg_hp">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/commen_plus_icon.svg" alt="" />
                        </div>
                        <p>Price</p>
                        <h2>料  金</h2>                            
                    </div>                  	
                    <div class="price_middle_fp"> 
                        <div class="price_top_fp">
                            <div class="accordion" id="accordionExample">                                    
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="heading2">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse2" aria-expanded="false" aria-controls="collapse2">
                                            <div class="price_img_fp">
                                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/omega.svg" alt="" />
                                            </div>
                                        </button>
                                    </h2>
                                    <div id="collapse2" class="accordion-collapse collapse" aria-labelledby="heading2" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <div class="price_answer_fp">
                                                <div class="price_table_scroll_fp">
                                                    <div class="price_table_main_fp price_table_change_1_fp">
                                                        <div class="price_table_heading_fp">
                                                            omega
                                                        </div>
                                                        <div class="price_table_in_fp">
                                                            <div class="price_row_1_fp">
                                                                <div class="price_title_1_fp price_width_1_fp">
                                                                    モデル
                                                                </div>
                                                                <div class="price_title_1_fp price_width_2_fp">
                                                                    ムーブメント
                                                                </div>
                                                                <div class="price_title_1_fp price_width_3_fp">
                                                                    キャリバータイプ
                                                                </div>
                                                                <div class="price_title_1_fp price_width_4_fp">
                                                                    オーバーホール基本価格(税込）
                                                                </div>
                                                                <div class="price_title_1_fp price_width_5_fp price_chnage_6_fp">
                                                                    コレクション
                                                                </div>
                                                            </div>
                                                            <div class="price_row_2_fp price_row_1_fp price_height_fp">
                                                                <div class="price_title_1_fp price_width_1_fp">
                                                                    スタンダード
                                                                </div>
                                                                <div class="price_column_2_fp price_width_2_fp">
                                                                    <div class="price_title_1_fp">
                                                                        クォーツ
                                                                    </div>
                                                                    <div class="price_title_1_fp price_change_fp">
                                                                        機械式
                                                                    </div>
                                                                </div>
                                                                <div class="price_column_3_fp price_width_3_fp">
                                                                    <div class="price_title_1_fp price_change_2_fp">
                                                                        2針、3針クォーツ
                                                                    </div>
                                                                    <div class="price_title_1_fp price_change_2_fp">
                                                                        現行自動巻3針など
                                                                    </div>
                                                                    <div class="price_title_1_fp price_change_2_fp">
                                                                        ヴィンテージ（手巻、自動巻）
                                                                    </div>
                                                                    <div class="price_title_1_fp price_change_2_fp">
                                                                        Co-Axial自動巻（Cal.2500)
                                                                    </div>
                                                                    <div class="price_title_1_fp">
                                                                        Co-Axial自動巻（Cal.8500)
                                                                    </div>
                                                                </div>
                                                                <div class="price_column_4_fp price_width_4_fp">
                                                                    <div class="price_title_1_fp price_change_2_fp">
                                                                        22,500～
                                                                    </div>
                                                                    <div class="price_title_1_fp price_change_2_fp">
                                                                        27,500～
                                                                    </div>
                                                                    <div class="price_title_1_fp price_change_2_fp">
                                                                        33,500～
                                                                    </div>
                                                                    <div class="price_title_1_fp price_change_2_fp">
                                                                        31,500～
                                                                    </div>
                                                                    <div class="price_title_1_fp">
                                                                        37,500～
                                                                    </div>
                                                                </div>
                                                                <div class="price_column_5_fp price_width_5_fp">
                                                                    <div class="price_title_1_fp">
                                                                        
                                                                    </div>
                                                                    <div class="price_title_1_fp">
                                                                        Classic
                                                                    </div>
                                                                    <div class="price_title_1_fp">
                                                                        Devil
                                                                    </div>
                                                                    <div class="price_title_1_fp">
                                                                        Constellation
                                                                    </div>
                                                                    <div class="price_title_1_fp">
                                                                        Seamaster
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="price_row_2_fp price_row_1_fp">
                                                                <div class="price_title_1_fp price_width_1_fp price_chnage_6_fp">
                                                                    クロノグラフ
                                                                </div>
                                                                <div class="price_column_2_fp price_width_2_fp price_chnage_6_fp">
                                                                    <div class="price_title_1_fp price_change_4_fp">
                                                                        機械式
                                                                    </div>
                                                                </div>
                                                                <div class="price_column_3_fp price_width_3_fp price_chnage_6_fp">
                                                                    <div class="price_title_1_fp price_change_2_fp">
                                                                        機械式クロノグラフ（ノーマル）
                                                                    </div>
                                                                    <div class="price_title_1_fp price_change_2_fp">
                                                                        現行ムーンウォッチ　Cal.1861
                                                                    </div>
                                                                    <div class="price_title_1_fp price_change_2_fp">
                                                                        オリジナルムーンウォッチ　Cal.321
                                                                    </div>
                                                                    <div class="price_title_1_fp">
                                                                        Co-Axial クロノグラフ
                                                                    </div>
                                                                </div>
                                                                <div class="price_column_4_fp price_width_4_fp price_chnage_6_fp">
                                                                    <div class="price_title_1_fp price_change_2_fp">
                                                                        36,500～
                                                                    </div>
                                                                    <div class="price_title_1_fp price_change_2_fp">
                                                                        39,500～
                                                                    </div>
                                                                    <div class="price_title_1_fp price_change_2_fp">
                                                                        56,500～
                                                                    </div>
                                                                    <div class="price_title_1_fp">
                                                                        46,500～
                                                                    </div>
                                                                </div>
                                                                <div class="price_column_5_fp price_width_5_fp">
                                                                    <div class="price_title_1_fp">
                                                                        Speedmaster
                                                                    </div>
                                                                    <div class="price_title_1_fp">
                                                                        Railmaster
                                                                    </div>
                                                                    <div class="price_title_1_fp">
                                                                        
                                                                    </div>
                                                                </div>   
                                                            </div>
                                                        </div>    
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="heading1">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse1" aria-expanded="true" aria-controls="collapse1">
                                            <div class="price_img_fp">
                                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/rolex_logo.svg" alt="" />
                                            </div>    
                                        </button>
                                    </h2>
                                    <div id="collapse1" class="accordion-collapse collapse" aria-labelledby="heading1" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <div class="price_answer_fp">
                                                <div class="price_table_scroll_fp">
                                                    <div class="price_table_main_fp">
                                                        <div class="price_table_heading_fp">
                                                            rolex
                                                        </div>
                                                        <div class="price_table_in_fp">
                                                            <div class="price_row_1_fp">
                                                                <div class="price_title_1_fp price_width_1_fp">
                                                                    モデル
                                                                </div>
                                                                <div class="price_title_1_fp price_width_2_fp">
                                                                    ムーブメント
                                                                </div>
                                                                <div class="price_title_1_fp price_width_3_fp">
                                                                    キャリバータイプ
                                                                </div>
                                                                <div class="price_title_1_fp price_width_4_fp">
                                                                    オーバーホール基本価格(税込）
                                                                </div>
                                                                <div class="price_title_1_fp price_width_5_fp price_chnage_6_fp">
                                                                    コレクション
                                                                </div>
                                                            </div>
                                                            <div class="price_row_2_fp price_row_1_fp price_height_fp">
                                                                <div class="price_title_1_fp price_width_1_fp">
                                                                    スタンダード
                                                                </div>
                                                                <div class="price_column_2_fp price_width_2_fp">
                                                                    <div class="price_title_1_fp price_change_fp">
                                                                        クォーツ
                                                                    </div>
                                                                    <div class="price_title_1_fp">
                                                                        クォーツ
                                                                    </div>
                                                                </div>
                                                                <div class="price_column_3_fp price_width_3_fp">
                                                                    <div class="price_title_1_fp price_change_2_fp">
                                                                        現行手巻2針
                                                                    </div>
                                                                    <div class="price_title_1_fp price_change_2_fp">
                                                                        現行自動巻3針
                                                                    </div>
                                                                    <div class="price_title_1_fp price_change_2_fp">
                                                                        ヴィンテージ（手巻、自動巻）
                                                                    </div>
                                                                    <div class="price_title_1_fp">
                                                                        オイスタークォーツ Cal.5035, 5055
                                                                    </div>
                                                                </div>
                                                                <div class="price_column_4_fp price_width_4_fp">
                                                                    <div class="price_title_1_fp price_change_2_fp">
                                                                        27,500～
                                                                    </div>
                                                                    <div class="price_title_1_fp price_change_2_fp">
                                                                        29,800～
                                                                    </div>
                                                                    <div class="price_title_1_fp price_change_2_fp">
                                                                        37,800～
                                                                    </div>
                                                                    <div class="price_title_1_fp">
                                                                        34,800～
                                                                    </div>
                                                                </div>
                                                                <div class="price_column_5_fp price_width_5_fp">
                                                                    <div class="price_title_1_fp">
                                                                        DateJust
                                                                    </div>
                                                                    <div class="price_title_1_fp">
                                                                        DayDate
                                                                    </div>
                                                                    <div class="price_title_1_fp">
                                                                        Explorer
                                                                    </div>
                                                                    <div class="price_title_1_fp">
                                                                        Submariner
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="price_row_2_fp price_row_1_fp">
                                                                <div class="price_title_1_fp price_width_1_fp price_chnage_6_fp">
                                                                    クォーツ
                                                                </div>
                                                                <div class="price_column_2_fp price_width_2_fp price_chnage_6_fp">
                                                                    <div class="price_title_1_fp price_change_4_fp">
                                                                        クォーツ
                                                                    </div>
                                                                </div>
                                                                <div class="price_column_3_fp price_width_3_fp price_chnage_6_fp">
                                                                    <div class="price_title_1_fp price_change_2_fp">
                                                                        現行手巻2針
                                                                    </div>
                                                                    <div class="price_title_1_fp price_change_2_fp">
                                                                        現行自動巻3針
                                                                    </div>
                                                                    <div class="price_title_1_fp">
                                                                        ヴィンテージ（手巻、自動巻）
                                                                    </div>
                                                                </div>
                                                                <div class="price_column_4_fp price_width_4_fp price_chnage_6_fp">
                                                                    <div class="price_title_1_fp price_change_2_fp">
                                                                        46,000～
                                                                    </div>
                                                                    <div class="price_title_1_fp price_change_2_fp">
                                                                        49,500～
                                                                    </div>
                                                                    <div class="price_title_1_fp">
                                                                        82,500～
                                                                    </div>
                                                                </div>
                                                                <div class="price_column_5_fp price_width_5_fp">
                                                                    <div class="price_title_1_fp">
                                                                        GMTmaster
                                                                    </div>
                                                                    <div class="price_title_1_fp">
                                                                        DayDate
                                                                    </div>
                                                                    <div class="price_title_1_fp">
                                                                        Explorer
                                                                    </div>
                                                                </div>   
                                                            </div>
                                                        </div>    
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="heading3">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse3" aria-expanded="false" aria-controls="collapse3">
                                            <div class="price_img_fp">
                                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/cartier_logo.svg" alt="" />
                                            </div>
                                        </button>
                                    </h2>
                                    <div id="collapse3" class="accordion-collapse collapse" aria-labelledby="heading3" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <div class="price_answer_fp">
                                                <div class="price_table_scroll_fp">
                                                    <div class="price_table_main_fp price_table_change_2_fp">
                                                        <div class="price_table_heading_fp">
                                                            cartier
                                                        </div>
                                                        <div class="price_table_in_fp">
                                                            <div class="price_row_1_fp">
                                                                <div class="price_title_1_fp price_width_1_fp">
                                                                    ムーブメントタイプ
                                                                </div>
                                                                <div class="price_title_1_fp price_width_3_fp">
                                                                    モデル
                                                                </div>
                                                                <div class="price_title_1_fp price_width_4_fp">
                                                                    オーバーホール基本価格(税込）
                                                                </div>
                                                                <div class="price_title_1_fp price_width_5_fp price_chnage_6_fp">
                                                                    コレクション
                                                                </div>
                                                            </div>
                                                            <div class="price_row_2_fp price_row_1_fp price_height_fp">
                                                                <div class="price_title_1_fp price_width_1_fp">
                                                                    クォーツ（電池式）
                                                                </div>
                                                                <div class="price_column_3_fp price_width_3_fp">
                                                                    <div class="price_title_1_fp price_change_2_fp">
                                                                        クォーツ（二針、三針）
                                                                    </div>
                                                                    <div class="price_title_1_fp">
                                                                        クォーツクロノグラフ
                                                                    </div>
                                                                </div>
                                                                <div class="price_column_4_fp price_width_4_fp">
                                                                    <div class="price_title_1_fp price_change_2_fp">
                                                                        25,200～
                                                                    </div>
                                                                    <div class="price_title_1_fp">
                                                                        25,200～
                                                                    </div>
                                                                </div>
                                                                <div class="price_column_5_fp price_width_5_fp">
                                                                    <div class="price_title_1_fp">
                                                                        Tank
                                                                    </div>
                                                                    <div class="price_title_1_fp">
                                                                        Panthere
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="price_row_2_fp price_row_1_fp">
                                                                <div class="price_title_1_fp price_width_1_fp price_chnage_6_fp">
                                                                    機械式（ゼンマイ式）
                                                                </div>
                                                                <div class="price_column_3_fp price_width_3_fp price_chnage_6_fp">
                                                                    <div class="price_title_1_fp price_change_2_fp">
                                                                        機械式手巻
                                                                    </div>
                                                                    <div class="price_title_1_fp price_change_2_fp">
                                                                        自動巻
                                                                    </div>
                                                                    <div class="price_title_1_fp">
                                                                        クロノグラフ
                                                                    </div>
                                                                </div>
                                                                <div class="price_column_4_fp price_width_4_fp price_chnage_6_fp">
                                                                    <div class="price_title_1_fp price_change_2_fp">
                                                                        33,500～
                                                                    </div>
                                                                    <div class="price_title_1_fp price_change_2_fp">
                                                                        36,500～
                                                                    </div>
                                                                    <div class="price_title_1_fp">
                                                                        43,500～
                                                                    </div>
                                                                </div>
                                                                <div class="price_column_5_fp price_width_5_fp">
                                                                    <div class="price_title_1_fp">
                                                                        Pasha
                                                                    </div>
                                                                    <div class="price_title_1_fp">
                                                                        Santos
                                                                    </div>
                                                                    <div class="price_title_1_fp">
                                                                        
                                                                    </div>
                                                                </div>   
                                                            </div>
                                                        </div>    
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="heading5">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse5" aria-expanded="false" aria-controls="collapse5">
                                            <div class="price_img_fp">
                                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/officine-panerai.svg" alt="" />
                                            </div>
                                        </button>
                                    </h2>
                                    <div id="collapse5" class="accordion-collapse collapse" aria-labelledby="heading5" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <div class="price_answer_fp">
                                                <div class="price_table_scroll_fp">
                                                    <div class="price_table_main_fp price_table_change_2_fp">
                                                        <div class="price_table_heading_fp">
                                                            panerai
                                                        </div>
                                                        <div class="price_table_in_fp">
                                                            <div class="price_row_1_fp">
                                                                <div class="price_title_1_fp price_width_1_fp">
                                                                    ムーブメントタイプ
                                                                </div>
                                                                <div class="price_title_1_fp price_width_3_fp">
                                                                    モデル
                                                                </div>
                                                                <div class="price_title_1_fp price_width_4_fp">
                                                                    オーバーホール基本価格(税込）
                                                                </div>
                                                                <div class="price_title_1_fp price_width_5_fp price_chnage_6_fp">
                                                                    コレクション
                                                                </div>
                                                            </div>
                                                            <div class="price_row_2_fp price_row_1_fp price_height_fp">
                                                                <div class="price_title_1_fp price_width_1_fp">
                                                                    クォーツ（電池式）
                                                                </div>
                                                                <div class="price_column_3_fp price_width_3_fp">
                                                                    <div class="price_title_1_fp price_change_2_fp">
                                                                        スタンダード
                                                                    </div>
                                                                    <div class="price_title_1_fp">
                                                                        クロノグラフ
                                                                    </div>
                                                                </div>
                                                                <div class="price_column_4_fp price_width_4_fp">
                                                                    <div class="price_title_1_fp price_change_2_fp">
                                                                        -
                                                                    </div>
                                                                    <div class="price_title_1_fp">
                                                                        -
                                                                    </div>
                                                                </div>
                                                                <div class="price_column_5_fp price_width_5_fp">
                                                                    <div class="price_title_1_fp">
                                                                        Luminor
                                                                    </div>
                                                                    <div class="price_title_1_fp">
                                                                        Luminor 1950
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="price_row_2_fp price_row_1_fp">
                                                                <div class="price_title_1_fp price_width_1_fp price_chnage_6_fp">
                                                                    機械式（ゼンマイ式）
                                                                </div>
                                                                <div class="price_column_3_fp price_width_3_fp price_chnage_6_fp">
                                                                    <div class="price_title_1_fp price_change_2_fp">
                                                                        手巻
                                                                    </div>
                                                                    <div class="price_title_1_fp price_change_2_fp">
                                                                        自動巻
                                                                    </div>
                                                                    <div class="price_title_1_fp">
                                                                        クロノグラフ
                                                                    </div>
                                                                </div>
                                                                <div class="price_column_4_fp price_width_4_fp price_chnage_6_fp">
                                                                    <div class="price_title_1_fp price_change_2_fp">
                                                                        32,500～
                                                                    </div>
                                                                    <div class="price_title_1_fp price_change_2_fp">
                                                                        36,500～
                                                                    </div>
                                                                    <div class="price_title_1_fp">
                                                                        47,500～
                                                                    </div>
                                                                </div>
                                                                <div class="price_column_5_fp price_width_5_fp">
                                                                    <div class="price_title_1_fp">
                                                                        Radiomir
                                                                    </div>
                                                                    <div class="price_title_1_fp">
                                                                        Submersible
                                                                    </div>
                                                                    <div class="price_title_1_fp">
                                                                        
                                                                    </div>
                                                                </div>   	
                                                            </div>
                                                        </div>    
                                                    </div>
                                                </div>    
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="heading4">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse4" aria-expanded="false" aria-controls="collapse4">
                                            <div class="price_img_fp">
                                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/iwc.svg" alt="" />
                                            </div>
                                        </button>
                                    </h2>
                                    <div id="collapse4" class="accordion-collapse collapse" aria-labelledby="heading4" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <div class="price_answer_fp">
                                                <div class="price_table_scroll_fp">
                                                    <div class="price_table_main_fp price_table_change_2_fp">
                                                        <div class="price_table_heading_fp">
                                                            i w c
                                                        </div>
                                                        <div class="price_table_in_fp">
                                                            <div class="price_row_1_fp">
                                                                <div class="price_title_1_fp price_width_1_fp">
                                                                    ムーブメントタイプ
                                                                </div>
                                                                <div class="price_title_1_fp price_width_3_fp">
                                                                    モデル
                                                                </div>
                                                                <div class="price_title_1_fp price_width_4_fp">
                                                                    オーバーホール基本価格(税込）
                                                                </div>
                                                                <div class="price_title_1_fp price_width_5_fp price_chnage_6_fp">
                                                                    コレクション
                                                                </div>
                                                            </div>
                                                            <div class="price_row_2_fp price_row_1_fp price_height_fp">
                                                                <div class="price_title_1_fp price_width_1_fp">
                                                                    クォーツ（電池式）
                                                                </div>
                                                                <div class="price_column_3_fp price_width_3_fp">
                                                                    <div class="price_title_1_fp price_change_2_fp">
                                                                        スタンダード
                                                                    </div>
                                                                    <div class="price_title_1_fp">
                                                                        クロノグラフ
                                                                    </div>
                                                                </div>
                                                                <div class="price_column_4_fp price_width_4_fp">
                                                                    <div class="price_title_1_fp price_change_2_fp">
                                                                        -
                                                                    </div>
                                                                    <div class="price_title_1_fp">
                                                                        Ask
                                                                    </div>
                                                                </div>
                                                                <div class="price_column_5_fp price_width_5_fp">
                                                                    <div class="price_title_1_fp">
                                                                        Aqua Timer	
                                                                    </div>
                                                                    <div class="price_title_1_fp">
                                                                        Ingenieur
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="price_row_2_fp price_row_1_fp">
                                                                <div class="price_title_1_fp price_width_1_fp price_chnage_6_fp">
                                                                    機械式（ゼンマイ式）
                                                                </div>
                                                                <div class="price_column_3_fp price_width_3_fp price_chnage_6_fp">
                                                                    <div class="price_title_1_fp price_change_2_fp">
                                                                        手巻
                                                                    </div>
                                                                    <div class="price_title_1_fp price_change_2_fp">
                                                                        自動巻
                                                                    </div>
                                                                    <div class="price_title_1_fp">
                                                                        クロノグラフ
                                                                    </div>
                                                                </div>
                                                                <div class="price_column_4_fp price_width_4_fp price_chnage_6_fp">
                                                                    <div class="price_title_1_fp price_change_2_fp">
                                                                        31,500～
                                                                    </div>
                                                                    <div class="price_title_1_fp price_change_2_fp">
                                                                        36,500～
                                                                    </div>
                                                                    <div class="price_title_1_fp">
                                                                        58,500～
                                                                    </div>
                                                                </div>
                                                                <div class="price_column_5_fp price_width_5_fp">
                                                                    <div class="price_title_1_fp">
                                                                        Portugieser
                                                                    </div>
                                                                    <div class="price_title_1_fp">
                                                                        Portfino
                                                                    </div>
                                                                    <div class="price_title_1_fp">
                                                                        Pilot Watch
                                                                    </div>
                                                                </div>   
                                                            </div>
                                                        </div>    
                                                    </div>
                                                </div>    
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="heading9">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse9" aria-expanded="false" aria-controls="collapse9">
                                            <div class="price_img_fp">
                                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/breitling.svg" alt="" />
                                            </div>
                                        </button>
                                    </h2>
                                    <div id="collapse9" class="accordion-collapse collapse" aria-labelledby="heading9" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <div class="price_answer_fp">
                                                <div class="price_table_scroll_fp">
                                                    <div class="price_table_main_fp price_table_change_2_fp">
                                                        <div class="price_table_heading_fp">
                                                            breitling
                                                        </div>
                                                        <div class="price_table_in_fp">
                                                            <div class="price_row_1_fp">
                                                                <div class="price_title_1_fp price_width_1_fp">
                                                                    ムーブメントタイプ
                                                                </div>
                                                                <div class="price_title_1_fp price_width_3_fp">
                                                                    モデル
                                                                </div>
                                                                <div class="price_title_1_fp price_width_4_fp">
                                                                    オーバーホール基本価格(税込）
                                                                </div>
                                                                <div class="price_title_1_fp price_width_5_fp price_chnage_6_fp">
                                                                    コレクション
                                                                </div>
                                                            </div>
                                                            <div class="price_row_2_fp price_row_1_fp price_height_fp">
                                                                <div class="price_title_1_fp price_width_1_fp">
                                                                    クォーツ（電池式）
                                                                </div>
                                                                <div class="price_column_3_fp price_width_3_fp">
                                                                    <div class="price_title_1_fp price_change_2_fp">
                                                                        スタンダード
                                                                    </div>
                                                                    <div class="price_title_1_fp">
                                                                        クロノグラフ
                                                                    </div>
                                                                </div>
                                                                <div class="price_column_4_fp price_width_4_fp">
                                                                    <div class="price_title_1_fp price_change_2_fp">
                                                                        24,500～

                                                                    </div>
                                                                    <div class="price_title_1_fp">
                                                                        46,000～
                                                                    </div>
                                                                </div>
                                                                <div class="price_column_5_fp price_width_5_fp">
                                                                    <div class="price_title_1_fp">
                                                                        Chronomat
                                                                    </div>
                                                                    <div class="price_title_1_fp">
                                                                        Navitimer
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="price_row_2_fp price_row_1_fp">
                                                                <div class="price_title_1_fp price_width_1_fp price_chnage_6_fp">
                                                                    機械式（ゼンマイ式）
                                                                </div>
                                                                <div class="price_column_3_fp price_width_3_fp price_chnage_6_fp">
                                                                    <div class="price_title_1_fp price_change_2_fp">
                                                                        手巻
                                                                    </div>
                                                                    <div class="price_title_1_fp price_change_2_fp">
                                                                        自動巻
                                                                    </div>
                                                                    <div class="price_title_1_fp">
                                                                        クロノグラフ
                                                                    </div>
                                                                </div>
                                                                <div class="price_column_4_fp price_width_4_fp price_chnage_6_fp">
                                                                    <div class="price_title_1_fp price_change_2_fp">
                                                                        32,500～
                                                                    </div>
                                                                    <div class="price_title_1_fp price_change_2_fp">
                                                                        32,500～
                                                                    </div>
                                                                    <div class="price_title_1_fp">
                                                                        39,500～
                                                                    </div>
                                                                </div>
                                                                <div class="price_column_5_fp price_width_5_fp">
                                                                    <div class="price_title_1_fp">
                                                                        Superocean
                                                                    </div>
                                                                    <div class="price_title_1_fp">
                                                                        Avenger
                                                                    </div>
                                                                    <div class="price_title_1_fp">
                                                                        Montbrillant
                                                                    </div>
                                                                </div>   	
                                                            </div>
                                                        </div>    
                                                    </div>
                                                </div>    
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="heading10">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse10" aria-expanded="false" aria-controls="collapse10">
                                            <div class="price_img_fp">
                                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/tagheuer.svg" alt="" />
                                            </div>
                                        </button>
                                    </h2>
                                    <div id="collapse10" class="accordion-collapse collapse" aria-labelledby="heading10" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <div class="price_answer_fp">
                                                <div class="price_table_scroll_fp">
                                                    <div class="price_table_main_fp price_table_change_2_fp">
                                                        <div class="price_table_heading_fp">
                                                            tag heuer
                                                        </div>
                                                        <div class="price_table_in_fp">
                                                            <div class="price_row_1_fp">
                                                                <div class="price_title_1_fp price_width_1_fp">
                                                                    ムーブメントタイプ
                                                                </div>
                                                                <div class="price_title_1_fp price_width_3_fp">
                                                                    モデル
                                                                </div>
                                                                <div class="price_title_1_fp price_width_4_fp">
                                                                    オーバーホール基本価格(税込）
                                                                </div>
                                                                <div class="price_title_1_fp price_width_5_fp price_chnage_6_fp">
                                                                    コレクション
                                                                </div>
                                                            </div>
                                                            <div class="price_row_2_fp price_row_1_fp price_height_fp">
                                                                <div class="price_title_1_fp price_width_1_fp">
                                                                    クォーツ（電池式）
                                                                </div>
                                                                <div class="price_column_3_fp price_width_3_fp">
                                                                    <div class="price_title_1_fp price_change_2_fp">
                                                                        スタンダード
                                                                    </div>
                                                                    <div class="price_title_1_fp">
                                                                        クロノグラフ
                                                                    </div>
                                                                </div>
                                                                <div class="price_column_4_fp price_width_4_fp">
                                                                    <div class="price_title_1_fp price_change_2_fp">
                                                                        19,800～
                                                                    </div>
                                                                    <div class="price_title_1_fp">
                                                                        33,000～
                                                                    </div>
                                                                </div>
                                                                <div class="price_column_5_fp price_width_5_fp">
                                                                    <div class="price_title_1_fp price_text_change_fp">
                                                                        monaco
                                                                    </div>
                                                                    <div class="price_title_1_fp price_text_change_fp">
                                                                        autavia
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="price_row_2_fp price_row_1_fp">
                                                                <div class="price_title_1_fp price_width_1_fp price_chnage_6_fp">
                                                                    機械式（ゼンマイ式）
                                                                </div>
                                                                <div class="price_column_3_fp price_width_3_fp price_chnage_6_fp">
                                                                    <div class="price_title_1_fp price_change_2_fp">
                                                                        手巻
                                                                    </div>
                                                                    <div class="price_title_1_fp price_change_2_fp">
                                                                        自動巻
                                                                    </div>
                                                                    <div class="price_title_1_fp">
                                                                        クロノグラフ
                                                                    </div>
                                                                </div>
                                                                <div class="price_column_4_fp price_width_4_fp price_chnage_6_fp">
                                                                    <div class="price_title_1_fp price_change_2_fp">
                                                                        29,800～
                                                                    </div>
                                                                    <div class="price_title_1_fp price_change_2_fp">
                                                                        34,500～
                                                                    </div>
                                                                    <div class="price_title_1_fp">
                                                                        37,500～
                                                                    </div>
                                                                </div>
                                                                <div class="price_column_5_fp price_width_5_fp">
                                                                    <div class="price_title_1_fp price_text_change_fp">
                                                                        carrera
                                                                    </div>
                                                                    <div class="price_title_1_fp price_text_change_fp">
                                                                        aquaracer
                                                                    </div>
                                                                    <div class="price_title_1_fp price_text_change_fp">
                                                                        link
                                                                    </div>
                                                                </div>   	
                                                            </div>
                                                        </div>    
                                                    </div>
                                                </div>    
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="heading19">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse19" aria-expanded="false" aria-controls="collapse19">
                                            <div class="price_img_fp">
                                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/tudor.svg" alt="" />
                                            </div>
                                        </button>
                                    </h2>
                                    <div id="collapse19" class="accordion-collapse collapse" aria-labelledby="heading19" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <div class="price_answer_fp">
                                                <div class="price_table_scroll_fp">
                                                    <div class="price_table_main_fp price_table_change_2_fp">
                                                        <div class="price_table_heading_fp">
                                                            tudor
                                                        </div>
                                                        <div class="price_table_in_fp">
                                                            <div class="price_row_1_fp">
                                                                <div class="price_title_1_fp price_width_1_fp">
                                                                    ムーブメントタイプ
                                                                </div>
                                                                <div class="price_title_1_fp price_width_3_fp">
                                                                    モデル
                                                                </div>
                                                                <div class="price_title_1_fp price_width_4_fp">
                                                                    オーバーホール基本価格(税込）
                                                                </div>
                                                                <div class="price_title_1_fp price_width_5_fp price_chnage_6_fp">
                                                                    コレクション
                                                                </div>
                                                            </div>
                                                            <div class="price_row_2_fp price_row_1_fp price_height_fp">
                                                                <div class="price_title_1_fp price_width_1_fp">
                                                                    クォーツ（電池式）
                                                                </div>
                                                                <div class="price_column_3_fp price_width_3_fp">
                                                                    <div class="price_title_1_fp price_change_2_fp">
                                                                        スタンダード
                                                                    </div>
                                                                    <div class="price_title_1_fp">
                                                                        クロノグラフ
                                                                    </div>
                                                                </div>
                                                                <div class="price_column_4_fp price_width_4_fp">
                                                                    <div class="price_title_1_fp price_change_2_fp">
                                                                        25,500～
                                                                    </div>
                                                                    <div class="price_title_1_fp">
                                                                        31,900～
                                                                    </div>
                                                                </div>
                                                                <div class="price_column_5_fp price_width_5_fp">
                                                                    <div class="price_title_1_fp price_text_change_fp">
                                                                        black bay
                                                                    </div>
                                                                    <div class="price_title_1_fp price_text_change_fp">
                                                                        ranger
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="price_row_2_fp price_row_1_fp">
                                                                <div class="price_title_1_fp price_width_1_fp price_chnage_6_fp">
                                                                    機械式（ゼンマイ式）
                                                                </div>
                                                                <div class="price_column_3_fp price_width_3_fp price_chnage_6_fp">
                                                                    <div class="price_title_1_fp price_change_2_fp">
                                                                        手巻
                                                                    </div>
                                                                    <div class="price_title_1_fp price_change_2_fp">
                                                                        自動巻
                                                                    </div>
                                                                    <div class="price_title_1_fp">
                                                                        クロノグラフ
                                                                    </div>
                                                                </div>
                                                                <div class="price_column_4_fp price_width_4_fp price_chnage_6_fp">
                                                                    <div class="price_title_1_fp price_change_2_fp">
                                                                        29,800～
                                                                    </div>
                                                                    <div class="price_title_1_fp price_change_2_fp">
                                                                        31,500～
                                                                    </div>
                                                                    <div class="price_title_1_fp">
                                                                        39,800～
                                                                    </div>
                                                                </div>
                                                                <div class="price_column_5_fp price_width_5_fp">
                                                                    <div class="price_title_1_fp price_text_change_fp">
                                                                        pelagos
                                                                    </div>
                                                                    <div class="price_title_1_fp price_text_change_fp">
                                                                        tudor royal
                                                                    </div>
                                                                </div>   	
                                                            </div>
                                                        </div>    
                                                    </div>
                                                </div>    
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="heading14">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse14" aria-expanded="false" aria-controls="collapse14">
                                            <div class="price_img_fp">
                                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/franck-muller.svg" alt="" />
                                            </div>
                                        </button>
                                    </h2>
                                    <div id="collapse14" class="accordion-collapse collapse" aria-labelledby="heading14" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <div class="price_answer_fp">
                                                <div class="price_table_scroll_fp">
                                                    <div class="price_table_main_fp price_table_change_2_fp">
                                                        <div class="price_table_heading_fp">
                                                            franck muller
                                                        </div>
                                                        <div class="price_table_in_fp">
                                                            <div class="price_row_1_fp">
                                                                <div class="price_title_1_fp price_width_1_fp">
                                                                    ムーブメントタイプ
                                                                </div>
                                                                <div class="price_title_1_fp price_width_3_fp">
                                                                    モデル
                                                                </div>
                                                                <div class="price_title_1_fp price_width_4_fp">
                                                                    オーバーホール基本価格(税込）
                                                                </div>
                                                                <div class="price_title_1_fp price_width_5_fp price_chnage_6_fp">
                                                                    コレクション
                                                                </div>
                                                            </div>
                                                            <div class="price_row_2_fp price_row_1_fp price_height_fp">
                                                                <div class="price_title_1_fp price_width_1_fp">
                                                                    クォーツ（電池式）
                                                                </div>
                                                                <div class="price_column_3_fp price_width_3_fp">
                                                                    <div class="price_title_1_fp price_change_2_fp">
                                                                        スタンダード
                                                                    </div>
                                                                    <div class="price_title_1_fp">
                                                                        クロノグラフ
                                                                    </div>
                                                                </div>
                                                                <div class="price_column_4_fp price_width_4_fp">
                                                                    <div class="price_title_1_fp price_change_2_fp">
                                                                        24,500～
                                                                    </div>
                                                                    <div class="price_title_1_fp">
                                                                        -
                                                                    </div>
                                                                </div>
                                                                <div class="price_column_5_fp price_width_5_fp">
                                                                    <div class="price_title_1_fp price_text_change_fp">
                                                                        casablanca
                                                                    </div>
                                                                    <div class="price_title_1_fp price_text_change_fp">
                                                                        long island
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="price_row_2_fp price_row_1_fp">
                                                                <div class="price_title_1_fp price_width_1_fp price_chnage_6_fp">
                                                                    機械式（ゼンマイ式）
                                                                </div>
                                                                <div class="price_column_3_fp price_width_3_fp price_chnage_6_fp">
                                                                    <div class="price_title_1_fp price_change_2_fp">
                                                                        手巻
                                                                    </div>
                                                                    <div class="price_title_1_fp price_change_2_fp">
                                                                        自動巻
                                                                    </div>
                                                                    <div class="price_title_1_fp">
                                                                        クロノグラフ
                                                                    </div>
                                                                </div>
                                                                <div class="price_column_4_fp price_width_4_fp price_chnage_6_fp">
                                                                    <div class="price_title_1_fp price_change_2_fp">
                                                                        27,500～
                                                                    </div>
                                                                    <div class="price_title_1_fp price_change_2_fp">
                                                                        34,500～
                                                                    </div>
                                                                    <div class="price_title_1_fp">
                                                                        49,500～
                                                                    </div>
                                                                </div>
                                                                <div class="price_column_5_fp price_width_5_fp">
                                                                    <div class="price_title_1_fp price_text_change_fp">
                                                                        long island
                                                                    </div>
                                                                    <div class="price_title_1_fp price_text_change_fp">
                                                                        vanguard
                                                                    </div>
                                                                    <div class="price_title_1_fp price_text_change_fp">
                                                                        conquitador
                                                                    </div>
                                                                </div>   	
                                                            </div>
                                                        </div>    
                                                    </div>
                                                </div>    
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="heading11">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse11" aria-expanded="false" aria-controls="collapse11">
                                            <div class="price_img_fp">
                                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/zenith.svg" alt="" />
                                            </div>
                                        </button>
                                    </h2>
                                    <div id="collapse11" class="accordion-collapse collapse" aria-labelledby="heading11" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <div class="price_answer_fp">
                                                <div class="price_table_scroll_fp">
                                                    <div class="price_table_main_fp price_table_change_2_fp">
                                                        <div class="price_table_heading_fp">
                                                            zenith
                                                        </div>
                                                        <div class="price_table_in_fp">
                                                            <div class="price_row_1_fp">
                                                                <div class="price_title_1_fp price_width_1_fp">
                                                                    ムーブメントタイプ
                                                                </div>
                                                                <div class="price_title_1_fp price_width_3_fp">
                                                                    モデル
                                                                </div>
                                                                <div class="price_title_1_fp price_width_4_fp">
                                                                    オーバーホール基本価格(税込）
                                                                </div>
                                                                <div class="price_title_1_fp price_width_5_fp price_chnage_6_fp">
                                                                    コレクション
                                                                </div>
                                                            </div>
                                                            <div class="price_row_2_fp price_row_1_fp price_height_fp">
                                                                <div class="price_title_1_fp price_width_1_fp">
                                                                    クォーツ（電池式）
                                                                </div>
                                                                <div class="price_column_3_fp price_width_3_fp">
                                                                    <div class="price_title_1_fp price_change_2_fp">
                                                                        スタンダード
                                                                    </div>
                                                                    <div class="price_title_1_fp">
                                                                        クロノグラフ
                                                                    </div>
                                                                </div>
                                                                <div class="price_column_4_fp price_width_4_fp">
                                                                    <div class="price_title_1_fp price_change_2_fp">
                                                                        27,800～
                                                                    </div>
                                                                    <div class="price_title_1_fp">
                                                                        33,000～
                                                                    </div>
                                                                </div>
                                                                <div class="price_column_5_fp price_width_5_fp">
                                                                    <div class="price_title_1_fp price_text_change_fp">
                                                                        elite
                                                                    </div>
                                                                    <div class="price_title_1_fp price_text_change_fp">
                                                                        defy
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="price_row_2_fp price_row_1_fp">
                                                                <div class="price_title_1_fp price_width_1_fp price_chnage_6_fp">
                                                                    機械式（ゼンマイ式）
                                                                </div>
                                                                <div class="price_column_3_fp price_width_3_fp price_chnage_6_fp">
                                                                    <div class="price_title_1_fp price_change_2_fp">
                                                                        手巻
                                                                    </div>
                                                                    <div class="price_title_1_fp price_change_2_fp">
                                                                        自動巻
                                                                    </div>
                                                                    <div class="price_title_1_fp price_change_2_fp">
                                                                        クロノグラフ
                                                                    </div>
                                                                    <div class="price_title_1_fp">
                                                                        年次カレンダー
                                                                    </div>
                                                                </div>
                                                                <div class="price_column_4_fp price_width_4_fp price_chnage_6_fp">
                                                                    <div class="price_title_1_fp price_change_2_fp">
                                                                        31,500～
                                                                    </div>
                                                                    <div class="price_title_1_fp price_change_2_fp">
                                                                        35,000～
                                                                    </div>
                                                                    <div class="price_title_1_fp price_change_2_fp">
                                                                        45,600～
                                                                    </div>
                                                                    <div class="price_title_1_fp">
                                                                        68,600～
                                                                    </div>
                                                                </div>
                                                                <div class="price_column_5_fp price_width_5_fp">
                                                                    <div class="price_title_1_fp price_text_change_fp">
                                                                        chronomaster
                                                                    </div>
                                                                    <div class="price_title_1_fp price_text_change_fp">
                                                                        el primero
                                                                    </div>
                                                                </div>   	
                                                            </div>
                                                        </div>    
                                                    </div>
                                                </div>    
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="heading16">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse16" aria-expanded="false" aria-controls="collapse16">
                                            <div class="price_img_fp">
                                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/hermes.svg" alt="" />
                                            </div>
                                        </button>
                                    </h2>
                                    <div id="collapse16" class="accordion-collapse collapse" aria-labelledby="heading16" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <div class="price_answer_fp">
                                                <div class="price_table_scroll_fp">
                                                    <div class="price_table_main_fp price_table_change_2_fp">
                                                        <div class="price_table_heading_fp">
                                                            helmes
                                                        </div>
                                                        <div class="price_table_in_fp">
                                                            <div class="price_row_1_fp">
                                                                <div class="price_title_1_fp price_width_1_fp">
                                                                    ムーブメントタイプ
                                                                </div>
                                                                <div class="price_title_1_fp price_width_3_fp">
                                                                    モデル
                                                                </div>
                                                                <div class="price_title_1_fp price_width_4_fp">
                                                                    オーバーホール基本価格(税込）
                                                                </div>
                                                                <div class="price_title_1_fp price_width_5_fp price_chnage_6_fp">
                                                                    コレクション
                                                                </div>
                                                            </div>
                                                            <div class="price_row_2_fp price_row_1_fp price_height_fp">
                                                                <div class="price_title_1_fp price_width_1_fp">
                                                                    クォーツ（電池式）
                                                                </div>
                                                                <div class="price_column_3_fp price_width_3_fp">
                                                                    <div class="price_title_1_fp price_change_2_fp">
                                                                        スタンダード
                                                                    </div>
                                                                    <div class="price_title_1_fp">
                                                                        クロノグラフ
                                                                    </div>
                                                                </div>
                                                                <div class="price_column_4_fp price_width_4_fp">
                                                                    <div class="price_title_1_fp price_change_2_fp">
                                                                        25,500～
                                                                    </div>
                                                                    <div class="price_title_1_fp">
                                                                        31,000～
                                                                    </div>
                                                                </div>
                                                                <div class="price_column_5_fp price_width_5_fp">
                                                                    <div class="price_title_1_fp price_text_change_fp">
                                                                        clipper
                                                                    </div>
                                                                    <div class="price_title_1_fp price_text_change_fp">
                                                                        h watch
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="price_row_2_fp price_row_1_fp">
                                                                <div class="price_title_1_fp price_width_1_fp price_chnage_6_fp">
                                                                    機械式（ゼンマイ式）
                                                                </div>
                                                                <div class="price_column_3_fp price_width_3_fp price_chnage_6_fp">
                                                                    <div class="price_title_1_fp price_change_2_fp">
                                                                        手巻
                                                                    </div>
                                                                    <div class="price_title_1_fp price_change_2_fp">
                                                                        自動巻
                                                                    </div>
                                                                    <div class="price_title_1_fp">
                                                                        クロノグラフ
                                                                    </div>
                                                                </div>
                                                                <div class="price_column_4_fp price_width_4_fp price_chnage_6_fp">
                                                                    <div class="price_title_1_fp price_change_2_fp">
                                                                        -
                                                                    </div>
                                                                    <div class="price_title_1_fp price_change_2_fp">
                                                                        30,500～
                                                                    </div>
                                                                    <div class="price_title_1_fp">
                                                                        38,500～
                                                                    </div>
                                                                </div>
                                                                <div class="price_column_5_fp price_width_5_fp">
                                                                </div>   	
                                                            </div>
                                                        </div>    
                                                    </div>
                                                </div>    
                                            </div>
                                        </div>
                                    </div>
                                </div>    
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="heading15">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse15" aria-expanded="false" aria-controls="collapse15">
                                            <div class="price_img_fp">
                                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/bvlgari.svg" alt="" />
                                            </div>
                                        </button>
                                    </h2>
                                    <div id="collapse15" class="accordion-collapse collapse" aria-labelledby="heading15" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <div class="price_answer_fp">
                                                <div class="price_table_scroll_fp">
                                                    <div class="price_table_main_fp price_table_change_2_fp">
                                                        <div class="price_table_heading_fp">
                                                            bvlgari
                                                        </div>
                                                        <div class="price_table_in_fp">
                                                            <div class="price_row_1_fp">
                                                                <div class="price_title_1_fp price_width_1_fp">
                                                                    ムーブメントタイプ
                                                                </div>
                                                                <div class="price_title_1_fp price_width_3_fp">
                                                                    モデル
                                                                </div>
                                                                <div class="price_title_1_fp price_width_4_fp">
                                                                    オーバーホール基本価格(税込）
                                                                </div>
                                                                <div class="price_title_1_fp price_width_5_fp price_chnage_6_fp">
                                                                    コレクション
                                                                </div>
                                                            </div>
                                                            <div class="price_row_2_fp price_row_1_fp price_height_fp">
                                                                <div class="price_title_1_fp price_width_1_fp">
                                                                    クォーツ（電池式）
                                                                </div>
                                                                <div class="price_column_3_fp price_width_3_fp">
                                                                    <div class="price_title_1_fp price_change_2_fp">
                                                                        スタンダード
                                                                    </div>
                                                                    <div class="price_title_1_fp">
                                                                        クロノグラフ
                                                                    </div>
                                                                </div>
                                                                <div class="price_column_4_fp price_width_4_fp">
                                                                    <div class="price_title_1_fp price_change_2_fp">
                                                                        24,500～
                                                                    </div>
                                                                    <div class="price_title_1_fp">
                                                                        33,500～
                                                                    </div>
                                                                </div>
                                                                <div class="price_column_5_fp price_width_5_fp">
                                                                    <div class="price_title_1_fp price_text_change_fp">
                                                                        bvlgaribvlgari
                                                                    </div>
                                                                    <div class="price_title_1_fp price_text_change_fp">
                                                                        assioma
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="price_row_2_fp price_row_1_fp">
                                                                <div class="price_title_1_fp price_width_1_fp price_chnage_6_fp">
                                                                    機械式（ゼンマイ式）
                                                                </div>
                                                                <div class="price_column_3_fp price_width_3_fp price_chnage_6_fp">
                                                                    <div class="price_title_1_fp price_change_2_fp">
                                                                        手巻
                                                                    </div>
                                                                    <div class="price_title_1_fp price_change_2_fp">
                                                                        自動巻
                                                                    </div>
                                                                    <div class="price_title_1_fp">
                                                                        クロノグラフ
                                                                    </div>
                                                                </div>
                                                                <div class="price_column_4_fp price_width_4_fp price_chnage_6_fp">
                                                                    <div class="price_title_1_fp price_change_2_fp">
                                                                        32,000～
                                                                    </div>
                                                                    <div class="price_title_1_fp price_change_2_fp">
                                                                        34,500～
                                                                    </div>
                                                                    <div class="price_title_1_fp">
                                                                        38,500～
                                                                    </div>
                                                                </div>
                                                                <div class="price_column_5_fp price_width_5_fp">
                                                                    <div class="price_title_1_fp price_text_change_fp">
                                                                        serpenti
                                                                    </div>
                                                                    <div class="price_title_1_fp price_text_change_fp">
                                                                        octo
                                                                    </div>
                                                                    <div class="price_title_1_fp price_text_change_fp">
                                                                        diagono
                                                                    </div>
                                                                </div>   	
                                                            </div>
                                                        </div>    
                                                    </div>
                                                </div>    
                                            </div>
                                        </div>
                                    </div>
                                </div>                                    
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="heading17">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse17" aria-expanded="false" aria-controls="collapse17">
                                            <div class="price_img_fp">
                                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/gucci.svg" alt="" />
                                            </div>
                                        </button>
                                    </h2>
                                    <div id="collapse17" class="accordion-collapse collapse" aria-labelledby="heading17" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <div class="price_answer_fp">
                                                <div class="price_table_scroll_fp">
                                                    <div class="price_table_main_fp price_table_change_2_fp">
                                                        <div class="price_table_heading_fp">
                                                            gucci
                                                        </div>
                                                        <div class="price_table_in_fp">
                                                            <div class="price_row_1_fp">
                                                                <div class="price_title_1_fp price_width_1_fp">
                                                                    ムーブメントタイプ
                                                                </div>
                                                                <div class="price_title_1_fp price_width_3_fp">
                                                                    モデル
                                                                </div>
                                                                <div class="price_title_1_fp price_width_4_fp">
                                                                    オーバーホール基本価格(税込）
                                                                </div>
                                                                <div class="price_title_1_fp price_width_5_fp price_chnage_6_fp">
                                                                    コレクション
                                                                </div>
                                                            </div>
                                                            <div class="price_row_2_fp price_row_1_fp price_height_fp">
                                                                <div class="price_title_1_fp price_width_1_fp">
                                                                    クォーツ（電池式）
                                                                </div>
                                                                <div class="price_column_3_fp price_width_3_fp">
                                                                    <div class="price_title_1_fp price_change_2_fp">
                                                                        スタンダード
                                                                    </div>
                                                                    <div class="price_title_1_fp">
                                                                        クロノグラフ
                                                                    </div>
                                                                </div>
                                                                <div class="price_column_4_fp price_width_4_fp">
                                                                    <div class="price_title_1_fp price_change_2_fp">
                                                                        24,500～
                                                                    </div>
                                                                    <div class="price_title_1_fp">
                                                                        28,800～
                                                                    </div>
                                                                </div>
                                                                <div class="price_column_5_fp price_width_5_fp">
                                                                    <div class="price_title_1_fp price_text_change_fp">
                                                                        1400
                                                                    </div>
                                                                    <div class="price_title_1_fp price_text_change_fp">
                                                                        1500
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="price_row_2_fp price_row_1_fp">
                                                                <div class="price_title_1_fp price_width_1_fp price_chnage_6_fp">
                                                                    機械式（ゼンマイ式）
                                                                </div>
                                                                <div class="price_column_3_fp price_width_3_fp price_chnage_6_fp">
                                                                    <div class="price_title_1_fp price_change_2_fp">
                                                                        手巻
                                                                    </div>
                                                                    <div class="price_title_1_fp price_change_2_fp">
                                                                        自動巻
                                                                    </div>
                                                                    <div class="price_title_1_fp">
                                                                        クロノグラフ
                                                                    </div>
                                                                </div>
                                                                <div class="price_column_4_fp price_width_4_fp price_chnage_6_fp">
                                                                    <div class="price_title_1_fp price_change_2_fp">
                                                                        -
                                                                    </div>
                                                                    <div class="price_title_1_fp price_change_2_fp">
                                                                        29,800～
                                                                    </div>
                                                                    <div class="price_title_1_fp">
                                                                        35,500～
                                                                    </div>
                                                                </div>
                                                                <div class="price_column_5_fp price_width_5_fp">
                                                                    <div class="price_title_1_fp price_text_change_fp">
                                                                        g round
                                                                    </div>
                                                                    <div class="price_title_1_fp price_text_change_fp">
                                                                        g link
                                                                    </div>
                                                                    <div class="price_title_1_fp price_text_change_fp">
                                                                        rectangular
                                                                    </div>
                                                                </div>   	
                                                            </div>
                                                        </div>    
                                                    </div>
                                                </div>    
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="heading18">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse18" aria-expanded="false" aria-controls="collapse18">
                                            <div class="price_img_fp">
                                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/corum.svg" alt="" />
                                            </div>
                                        </button>
                                    </h2>
                                    <div id="collapse18" class="accordion-collapse collapse" aria-labelledby="heading18" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <div class="price_answer_fp">
                                                <div class="price_table_scroll_fp">
                                                    <div class="price_table_main_fp price_table_change_2_fp">
                                                        <div class="price_table_heading_fp">
                                                            gucci
                                                        </div>
                                                        <div class="price_table_in_fp">
                                                            <div class="price_row_1_fp">
                                                                <div class="price_title_1_fp price_width_1_fp">
                                                                    ムーブメントタイプ
                                                                </div>
                                                                <div class="price_title_1_fp price_width_3_fp">
                                                                    モデル
                                                                </div>
                                                                <div class="price_title_1_fp price_width_4_fp">
                                                                    オーバーホール基本価格(税込）
                                                                </div>
                                                                <div class="price_title_1_fp price_width_5_fp price_chnage_6_fp">
                                                                    コレクション
                                                                </div>
                                                            </div>
                                                            <div class="price_row_2_fp price_row_1_fp price_height_fp">
                                                                <div class="price_title_1_fp price_width_1_fp">
                                                                    クォーツ（電池式）
                                                                </div>
                                                                <div class="price_column_3_fp price_width_3_fp">
                                                                    <div class="price_title_1_fp price_change_2_fp">
                                                                        スタンダード
                                                                    </div>
                                                                    <div class="price_title_1_fp">
                                                                        クロノグラフ
                                                                    </div>
                                                                </div>
                                                                <div class="price_column_4_fp price_width_4_fp">
                                                                    <div class="price_title_1_fp price_change_2_fp">
                                                                        24,500～
                                                                    </div>
                                                                    <div class="price_title_1_fp">
                                                                        28,800～
                                                                    </div>
                                                                </div>
                                                                <div class="price_column_5_fp price_width_5_fp">
                                                                    <div class="price_title_1_fp price_text_change_fp">
                                                                        1400
                                                                    </div>
                                                                    <div class="price_title_1_fp price_text_change_fp">
                                                                        1500
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="price_row_2_fp price_row_1_fp">
                                                                <div class="price_title_1_fp price_width_1_fp price_chnage_6_fp">
                                                                    機械式（ゼンマイ式）
                                                                </div>
                                                                <div class="price_column_3_fp price_width_3_fp price_chnage_6_fp">
                                                                    <div class="price_title_1_fp price_change_2_fp">
                                                                        手巻
                                                                    </div>
                                                                    <div class="price_title_1_fp price_change_2_fp">
                                                                        自動巻
                                                                    </div>
                                                                    <div class="price_title_1_fp">
                                                                        クロノグラフ
                                                                    </div>
                                                                </div>
                                                                <div class="price_column_4_fp price_width_4_fp price_chnage_6_fp">
                                                                    <div class="price_title_1_fp price_change_2_fp">
                                                                        -
                                                                    </div>
                                                                    <div class="price_title_1_fp price_change_2_fp">
                                                                        29,800～
                                                                    </div>
                                                                    <div class="price_title_1_fp">
                                                                        35,500～
                                                                    </div>
                                                                </div>
                                                                <div class="price_column_5_fp price_width_5_fp">
                                                                    <div class="price_title_1_fp price_text_change_fp">
                                                                        g round
                                                                    </div>
                                                                    <div class="price_title_1_fp price_text_change_fp">
                                                                        g link
                                                                    </div>
                                                                    <div class="price_title_1_fp price_text_change_fp">
                                                                        rectangular
                                                                    </div>
                                                                </div>   	
                                                            </div>
                                                        </div>    
                                                    </div>
                                                </div>    
                                            </div>
                                        </div>
                                    </div>
                                </div>                   
                            </div>
                        </div>
                        <div class="price_btn_hp">
                            <a class="common_btn_hp" href="<?php echo get_site_url(); ?>/price/">See More <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/common_btn_right_arrow.svg" alt="" /></a>
                        </div>
                    </div>                                               
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>            
        <div class="clearfix"></div>
    </div>
    
                
    <div class="overhaul_block_hp">             
        <div class="container">
            <div class="row">
                <div class="col overhaul_block_in_hp">                     	
                    <div class="common_title_hp">
                        <div class="common_svg_hp">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/commen_plus_icon.svg" alt="" />
                        </div>
                        <p>Overhaul</p>
                        <h2>オーバーホール事例</h2>                            
                    </div>                  	
                    <div class="overhaul_middle_hp"> 
                        <div class="overhaul_top_hp">
                            <div class="overhaul_box_hp">
                                <a href="#">
                                    <div class="overhaul_title_hp">
                                        ロレックス 16570
                                    </div>
                                    <div class="overhaul_bottom_hp">
                                        <div class="overhaul_row_hp">
                                            <div class="overhaul_img_hp">
                                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/overhaul_img1.png" alt="" />
                                            </div>
                                            <div class="overhaul_img_hp">
                                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/overhaul_img2.png" alt="" />
                                            </div>
                                        </div>
                                        <div class="overhaul_info_hp">
                                            機能性デザイン共に高評価で人気の高いエクスプローラーⅡ。ゼンマイ切れによる止まりでのご依頼でした。基本オーバーホール、パッキンとゼンマイの交換を行いました。
                                        </div>
                                        <div class="overhaul_grid_hp">
                                            <div class="overhaul_subinfo_hp">
                                                <div class="overhaul_name_hp">
                                                    オーバーホール
                                                </div>
                                                <div class="overhaul_price_hp">
                                                    ¥17,000-
                                                </div>
                                            </div>
                                            <div class="overhaul_subinfo_hp">
                                                <div class="overhaul_name_hp">
                                                    パーツ交換（パッキン/ゼンマイ）
                                                </div>
                                                <div class="overhaul_price_hp">
                                                    ¥22,000-
                                                </div>
                                            </div>                                                
                                        </div>
                                    </div>
                                    <div class="overhaul_subinfo_hp overhaul_bg_hp">
                                        <div class="overhaul_name_hp">
                                            合計
                                        </div>
                                        <div class="overhaul_price_hp">
                                                ¥39,000-
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="overhaul_box_hp">
                                <a href="#">
                                    <div class="overhaul_title_hp">
                                        ロレックス 16570
                                    </div>
                                    <div class="overhaul_bottom_hp">
                                        <div class="overhaul_row_hp">
                                            <div class="overhaul_img_hp">
                                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/overhaul_img1.png" alt="" />
                                            </div>
                                            <div class="overhaul_img_hp">
                                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/overhaul_img2.png" alt="" />
                                            </div>
                                        </div>
                                        <div class="overhaul_info_hp">
                                            機能性デザイン共に高評価で人気の高いエクスプローラーⅡ。ゼンマイ切れによる止まりでのご依頼でした。基本オーバーホール、パッキンとゼンマイの交換を行いました。
                                        </div>
                                        <div class="overhaul_grid_hp">
                                            <div class="overhaul_subinfo_hp">
                                                <div class="overhaul_name_hp">
                                                    オーバーホール
                                                </div>
                                                <div class="overhaul_price_hp">
                                                    ¥17,000-
                                                </div>
                                            </div>
                                            <div class="overhaul_subinfo_hp">
                                                <div class="overhaul_name_hp">
                                                    パーツ交換（パッキン/ゼンマイ）
                                                </div>
                                                <div class="overhaul_price_hp">
                                                    ¥22,000-
                                                </div>
                                            </div>                                                
                                        </div>
                                    </div>
                                    <div class="overhaul_subinfo_hp overhaul_bg_hp">
                                        <div class="overhaul_name_hp">
                                            合計
                                        </div>
                                        <div class="overhaul_price_hp">
                                                ¥39,000-
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="overhaul_box_hp">
                                <a href="#">
                                    <div class="overhaul_title_hp">
                                        ロレックス 16570
                                    </div>
                                    <div class="overhaul_bottom_hp">
                                        <div class="overhaul_row_hp">
                                            <div class="overhaul_img_hp">
                                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/overhaul_img1.png" alt="" />
                                            </div>
                                            <div class="overhaul_img_hp">
                                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/overhaul_img2.png" alt="" />
                                            </div>
                                        </div>
                                        <div class="overhaul_info_hp">
                                            機能性デザイン共に高評価で人気の高いエクスプローラーⅡ。ゼンマイ切れによる止まりでのご依頼でした。基本オーバーホール、パッキンとゼンマイの交換を行いました。
                                        </div>
                                        <div class="overhaul_grid_hp">
                                            <div class="overhaul_subinfo_hp">
                                                <div class="overhaul_name_hp">
                                                    オーバーホール
                                                </div>
                                                <div class="overhaul_price_hp">
                                                    ¥17,000-
                                                </div>
                                            </div>
                                            <div class="overhaul_subinfo_hp">
                                                <div class="overhaul_name_hp">
                                                    パーツ交換（パッキン/ゼンマイ）
                                                </div>
                                                <div class="overhaul_price_hp">
                                                    ¥22,000-
                                                </div>
                                            </div>                                                
                                        </div>
                                    </div>
                                    <div class="overhaul_subinfo_hp overhaul_bg_hp">
                                        <div class="overhaul_name_hp">
                                            合計
                                        </div>
                                        <div class="overhaul_price_hp">
                                                ¥39,000-
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="overhaul_box_hp">
                                <a href="#">
                                    <div class="overhaul_title_hp">
                                        ロレックス 16570
                                    </div>
                                    <div class="overhaul_bottom_hp">
                                        <div class="overhaul_row_hp">
                                            <div class="overhaul_img_hp">
                                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/overhaul_img1.png" alt="" />
                                            </div>
                                            <div class="overhaul_img_hp">
                                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/overhaul_img2.png" alt="" />
                                            </div>
                                        </div>
                                        <div class="overhaul_info_hp">
                                            機能性デザイン共に高評価で人気の高いエクスプローラーⅡ。ゼンマイ切れによる止まりでのご依頼でした。基本オーバーホール、パッキンとゼンマイの交換を行いました。
                                        </div>
                                        <div class="overhaul_grid_hp">
                                            <div class="overhaul_subinfo_hp">
                                                <div class="overhaul_name_hp">
                                                    オーバーホール
                                                </div>
                                                <div class="overhaul_price_hp">
                                                    ¥17,000-
                                                </div>
                                            </div>
                                            <div class="overhaul_subinfo_hp">
                                                <div class="overhaul_name_hp">
                                                    パーツ交換（パッキン/ゼンマイ）
                                                </div>
                                                <div class="overhaul_price_hp">
                                                    ¥22,000-
                                                </div>
                                            </div>                                                
                                        </div>
                                    </div>
                                    <div class="overhaul_subinfo_hp overhaul_bg_hp">
                                        <div class="overhaul_name_hp">
                                            合計
                                        </div>
                                        <div class="overhaul_price_hp">
                                                ¥39,000-
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="overhaul_box_hp">
                                <a href="#">
                                    <div class="overhaul_title_hp">
                                        ロレックス 16570
                                    </div>
                                    <div class="overhaul_bottom_hp">
                                        <div class="overhaul_row_hp">
                                            <div class="overhaul_img_hp">
                                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/overhaul_img1.png" alt="" />
                                            </div>
                                            <div class="overhaul_img_hp">
                                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/overhaul_img2.png" alt="" />
                                            </div>
                                        </div>
                                        <div class="overhaul_info_hp">
                                            機能性デザイン共に高評価で人気の高いエクスプローラーⅡ。ゼンマイ切れによる止まりでのご依頼でした。基本オーバーホール、パッキンとゼンマイの交換を行いました。
                                        </div>
                                        <div class="overhaul_grid_hp">
                                            <div class="overhaul_subinfo_hp">
                                                <div class="overhaul_name_hp">
                                                    オーバーホール
                                                </div>
                                                <div class="overhaul_price_hp">
                                                    ¥17,000-
                                                </div>
                                            </div>
                                            <div class="overhaul_subinfo_hp">
                                                <div class="overhaul_name_hp">
                                                    パーツ交換（パッキン/ゼンマイ）
                                                </div>
                                                <div class="overhaul_price_hp">
                                                    ¥22,000-
                                                </div>
                                            </div>                                                
                                        </div>
                                    </div>
                                    <div class="overhaul_subinfo_hp overhaul_bg_hp">
                                        <div class="overhaul_name_hp">
                                            合計
                                        </div>
                                        <div class="overhaul_price_hp">
                                                ¥39,000-
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="overhaul_box_hp">
                                <a href="#">
                                    <div class="overhaul_title_hp">
                                        ロレックス 16570
                                    </div>
                                    <div class="overhaul_bottom_hp">
                                        <div class="overhaul_row_hp">
                                            <div class="overhaul_img_hp">
                                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/overhaul_img1.png" alt="" />
                                            </div>
                                            <div class="overhaul_img_hp">
                                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/overhaul_img2.png" alt="" />
                                            </div>
                                        </div>
                                        <div class="overhaul_info_hp">
                                            機能性デザイン共に高評価で人気の高いエクスプローラーⅡ。ゼンマイ切れによる止まりでのご依頼でした。基本オーバーホール、パッキンとゼンマイの交換を行いました。
                                        </div>
                                        <div class="overhaul_grid_hp">
                                            <div class="overhaul_subinfo_hp">
                                                <div class="overhaul_name_hp">
                                                    オーバーホール
                                                </div>
                                                <div class="overhaul_price_hp">
                                                    ¥17,000-
                                                </div>
                                            </div>
                                            <div class="overhaul_subinfo_hp">
                                                <div class="overhaul_name_hp">
                                                    パーツ交換（パッキン/ゼンマイ）
                                                </div>
                                                <div class="overhaul_price_hp">
                                                    ¥22,000-
                                                </div>
                                            </div>                                                
                                        </div>
                                    </div>
                                    <div class="overhaul_subinfo_hp overhaul_bg_hp">
                                        <div class="overhaul_name_hp">
                                            合計
                                        </div>
                                        <div class="overhaul_price_hp">
                                                ¥39,000-
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="overhaul_box_hp">
                                <a href="#">
                                    <div class="overhaul_title_hp">
                                        ロレックス 16570
                                    </div>
                                    <div class="overhaul_bottom_hp">
                                        <div class="overhaul_row_hp">
                                            <div class="overhaul_img_hp">
                                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/overhaul_img1.png" alt="" />
                                            </div>
                                            <div class="overhaul_img_hp">
                                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/overhaul_img2.png" alt="" />
                                            </div>
                                        </div>
                                        <div class="overhaul_info_hp">
                                            機能性デザイン共に高評価で人気の高いエクスプローラーⅡ。ゼンマイ切れによる止まりでのご依頼でした。基本オーバーホール、パッキンとゼンマイの交換を行いました。
                                        </div>
                                        <div class="overhaul_grid_hp">
                                            <div class="overhaul_subinfo_hp">
                                                <div class="overhaul_name_hp">
                                                    オーバーホール
                                                </div>
                                                <div class="overhaul_price_hp">
                                                    ¥17,000-
                                                </div>
                                            </div>
                                            <div class="overhaul_subinfo_hp">
                                                <div class="overhaul_name_hp">
                                                    パーツ交換（パッキン/ゼンマイ）
                                                </div>
                                                <div class="overhaul_price_hp">
                                                    ¥22,000-
                                                </div>
                                            </div>                                                
                                        </div>
                                    </div>
                                    <div class="overhaul_subinfo_hp overhaul_bg_hp">
                                        <div class="overhaul_name_hp">
                                            合計
                                        </div>
                                        <div class="overhaul_price_hp">
                                                ¥39,000-
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="overhaul_box_hp">
                                <a href="#">
                                    <div class="overhaul_title_hp">
                                        ロレックス 16570
                                    </div>
                                    <div class="overhaul_bottom_hp">
                                        <div class="overhaul_row_hp">
                                            <div class="overhaul_img_hp">
                                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/overhaul_img1.png" alt="" />
                                            </div>
                                            <div class="overhaul_img_hp">
                                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/overhaul_img2.png" alt="" />
                                            </div>
                                        </div>
                                        <div class="overhaul_info_hp">
                                            機能性デザイン共に高評価で人気の高いエクスプローラーⅡ。ゼンマイ切れによる止まりでのご依頼でした。基本オーバーホール、パッキンとゼンマイの交換を行いました。
                                        </div>
                                        <div class="overhaul_grid_hp">
                                            <div class="overhaul_subinfo_hp">
                                                <div class="overhaul_name_hp">
                                                    オーバーホール
                                                </div>
                                                <div class="overhaul_price_hp">
                                                    ¥17,000-
                                                </div>
                                            </div>
                                            <div class="overhaul_subinfo_hp">
                                                <div class="overhaul_name_hp">
                                                    パーツ交換（パッキン/ゼンマイ）
                                                </div>
                                                <div class="overhaul_price_hp">
                                                    ¥22,000-
                                                </div>
                                            </div>                                                
                                        </div>
                                    </div>
                                    <div class="overhaul_subinfo_hp overhaul_bg_hp">
                                        <div class="overhaul_name_hp">
                                            合計
                                        </div>
                                        <div class="overhaul_price_hp">
                                                ¥39,000-
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="overhaul_box_hp">
                                <a href="#">
                                    <div class="overhaul_title_hp">
                                        ロレックス 16570
                                    </div>
                                    <div class="overhaul_bottom_hp">
                                        <div class="overhaul_row_hp">
                                            <div class="overhaul_img_hp">
                                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/overhaul_img1.png" alt="" />
                                            </div>
                                            <div class="overhaul_img_hp">
                                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/overhaul_img2.png" alt="" />
                                            </div>
                                        </div>
                                        <div class="overhaul_info_hp">
                                            機能性デザイン共に高評価で人気の高いエクスプローラーⅡ。ゼンマイ切れによる止まりでのご依頼でした。基本オーバーホール、パッキンとゼンマイの交換を行いました。
                                        </div>
                                        <div class="overhaul_grid_hp">
                                            <div class="overhaul_subinfo_hp">
                                                <div class="overhaul_name_hp">
                                                    オーバーホール
                                                </div>
                                                <div class="overhaul_price_hp">
                                                    ¥17,000-
                                                </div>
                                            </div>
                                            <div class="overhaul_subinfo_hp">
                                                <div class="overhaul_name_hp">
                                                    パーツ交換（パッキン/ゼンマイ）
                                                </div>
                                                <div class="overhaul_price_hp">
                                                    ¥22,000-
                                                </div>
                                            </div>                                                
                                        </div>
                                    </div>
                                    <div class="overhaul_subinfo_hp overhaul_bg_hp">
                                        <div class="overhaul_name_hp">
                                            合計
                                        </div>
                                        <div class="overhaul_price_hp">
                                                ¥39,000-
                                        </div>
                                    </div>
                                </a>
                            </div>                               
                        </div>    						         			     
                    </div>                                               
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>            
        <div class="clearfix"></div>
    </div>                
    <div class="newsletter_block_op newsletter_change_hp">             
        <div class="container">
            <div class="row">
                <div class="col newsletter_block_in_op">
                    <div class="newsletter_middle_op"> 
                        <div class="newsletter_title_hp">
                            時計修理、オーバーホール、メンテナンスは <br /> 高度な技術力と適正価格のスイスタイムワークスにご相談ください。
                        </div>
                        <div class="newsletter_boxes_op">
                            <div class="newsletter_box_op">
                                <div class="newsletter_box_img_op">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/phone_icon.svg" alt="" />
                                </div>
                                <div class="newsletter_box_name_op">
                                    電話で問い合わせ
                                </div>
                                <div class="newsletter_box_btn_op newsletter_box_btn_change_op">
                                    <a href="tel:042-404-2806"><span class="to_title">電話受付</span><span class="to">042-404-2806</span><br/><span class="bottom">平日10時～19時 土曜12時～18時　日祝休</span></a>
                                </div>
                            </div>
                            <div class="newsletter_box_op">
                                <div class="newsletter_box_img_op">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/line_icon.svg" alt="" />
                                </div>
                                <div class="newsletter_box_name_op">
                                    電話で問い合わせ
                                </div>                                    
                                <div class="newsletter_box_btn_op">
                                    <a class="common_btn_hp active" href="#">無料相談・お見積もり<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/common_btn_right_arrow.svg" alt="" /></a>
                                </div>
                            </div>
                            <div class="newsletter_box_op">
                                <div class="newsletter_box_img_op">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/mail_icon.svg" alt="" />                                    	
                                </div>
                                <div class="newsletter_box_name_op">
                                    電話で問い合わせ
                                </div>                                    
                                <div class="newsletter_box_btn_op">
                                    <a class="common_btn_hp" href="#contact">お問い合わせ<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/common_btn_right_arrow.svg" alt="" /></a>
                                </div>
                            </div>
                        </div>                            
                    </div>                                               
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>            
        <div class="clearfix"></div>
    </div>        
    <div class="pmh_anchor" id="contact"></div>
    <div class="contact_block_hp">             
        <div class="container">
            <div class="row">
                <div class="col contact_block_in_hp">                     	
                    <div class="common_title_hp common_color_change_hp">
                        <div class="common_svg_hp">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/commen_plus_icon.svg" alt="" />
                        </div>
                        <p>Contact</p>
                        <h2>無料相談フォーム</h2>                            
                    </div>
                    <form action="" method="post" enctype="multipart/form-data">
                        <div class="contact_middle_hp"> 
                            <div class="contact_top_hp">
                                <div class="contact_info_hp">
                                    おかげさまで現在たくさんのご依頼をいただいております。ぜひお早めにお問い合わせください。
                                </div>
                                <div class="contact_title_hp">
                                    対象の時計について
                                </div>
                                <div class="contact_bottom_hp">
                                    <div class="contact-form-cop">                                
                                        <div class="form-field-cop field-top-cop">
                                            <div class="form-field-lable-cop">メーカー名<span>必須</span></div>
                                            <div class="form-field-input-cop">
                                                <div class="form-list-cop">                                        	
                                                    <div class="form-list-select-cop">
                                                        <select class="custom-select" name="field1" required>
                                                            <option value="">選択してください</option>
                                                            <option value="ROLEX">ROLEX</option>
                                                            <option value="OMEGA">OMEGA</option>
                                                            <option value="CARTIER">CARTIER</option>
                                                            <option value="I W C">I W C</option>
                                                            <option value="PANERAI">PANERAI</option>
                                                            <option value="AUDEMARS PIGUET">AUDEMARS PIGUET</option>
                                                            <option value="BREITLING">JAEGER LECOULTRE</option>
                                                            <option value="VACHERON CONSTATIN">VACHERON CONSTATIN</option>
                                                            <option value="BREITLING">BREITLING</option>
                                                            <option value="TAG HEUER">TAG HEUER</option>
                                                            <option value="ZENITH">ZENITH</option>
                                                            <option value="CHANEL">CHANEL</option>
                                                            <option value="LOUIS VUITTON">LOUIS VUITTON</option>
                                                            <option value="FRANCK MULLER">FRANCK MULLER</option>
                                                            <option value="BVLGARI">BVLGARI</option>
                                                            <option value="HELMES">HELMES</option>
                                                            <option value="GUCCI">GUCCI</option>
                                                            <option value="LONGINES">LONGINES</option>
                                                            <option value="TUDOR">TUDOR</option>
                                                            <option value="PATEK PHILIPPE">PATEK PHILIPPE</option>
                                                            <option value="BLANCPAIN">BLANCPAIN</option>
                                                            <option value="BREGUET">BREGUET</option>
                                                            <option value="ULYSSE NARDIN">ULYSSE NARDIN</option>
                                                            <option value="GIRARD PERREGAUX">GIRARD PERREGAUX</option>
                                                            <option value="HARRY WINSTON">HARRY WINSTON</option>
                                                            <option value="HUBLOT">HUBLOT</option>
                                                            <option value="RICHARD MILLE">RICHARD MILLE</option>
                                                            <option value="A LANGE & SOHNE">A LANGE & SOHNE</option>
                                                            <option value="その他">その他</option>
                                                        </select>
                                                    </div>                                 
                                                </div>
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                        <div class="form-field-cop field-top-cop">
                                            <div class="form-field-lable-cop">モデル名</div>                                          
                                            <div class="form-field-input-cop">
                                                <input type="text" placeholder="" name="field2" requried>  
                                                    <div class="contact_form_info_hp">
                                                    メーカー名で「その他」を選択されている方は、メーカー名も併記してください。 <br />（例）ウブロ　ビッグ・バン　ウニコ
                                                </div>                                      
                                            </div> 
                                            <div class="clearfix"></div>                                            
                                        </div>                                        
                                        <div class="form-field-cop">
                                            <div class="form-field-lable-cop">ムーブメント</div>
                                            <div class="form-field-input-cop form-field-radio-row-cop">
                                                <div class="form-radio-cp">
                                                    <div class="form-field-radio-cp">
                                                        <label class="radio-container-cp">オートマチック
                                                            <input type="radio" checked="checked" name="field3" value="オートマチック">
                                                            <span class="checkmark-cp"></span>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="form-radio-cp">
                                                    <div class="form-field-radio-cp">
                                                        <label class="radio-container-cp">手巻き
                                                            <input type="radio" name="field3" value="手巻き">
                                                            <span class="checkmark-cp"></span>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="form-radio-cp">
                                                    <div class="form-field-radio-cp">
                                                        <label class="radio-container-cp">クオーツ
                                                            <input type="radio" name="field3" value="クオーツ">
                                                            <span class="checkmark-cp"></span>
                                                        </label>
                                                    </div>
                                                </div>                                      
                                            </div>
                                        </div>                                        
                                        <div class="form-field-cop">
                                            <div class="form-field-lable-cop">時計の機能*複数選択可</div>
                                            <div class="form-field-input-cop form-field-radio-row-cop">
                                                <div class="form-radio-cp">
                                                    <div class="form-field-radio-cp form-field-radio-main-cp">
                                                        <label class="radio-container-cp">オートマチック
                                                            <input type="checkbox" checked="checked" name="field4" value="オートマチック">
                                                            <span class="checkmark-cp"></span>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="form-radio-cp">
                                                    <div class="form-field-radio-cp form-field-radio-main-cp">
                                                        <label class="radio-container-cp">手巻き
                                                            <input type="checkbox" name="field4" value="手巻き">
                                                            <span class="checkmark-cp"></span>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="form-radio-cp">
                                                    <div class="form-field-radio-cp form-field-radio-main-cp">
                                                        <label class="radio-container-cp">クオーツ
                                                            <input type="checkbox" name="field4" value="クオーツ">
                                                            <span class="checkmark-cp"></span>
                                                        </label>
                                                    </div>
                                                </div>                                      
                                            </div>
                                        </div>                                        
                                        <div class="form-field-cop field-top-cop">
                                            <div class="form-field-lable-cop contact_align_hp">時計の状態・ご希望など
                                                <div class="contact_subtitle_hp">
                                                    モデル名・リファレンス№がお分かりになる場合や我々が大体の製造年代がわかる情報があればお書きください。メール返信の内容が正確になります
                                                </div>
                                            </div>                                                                                      
                                            <div class="form-field-input-cop">
                                                <textarea placeholder="気になる箇所、不具合があれば症状をご入力下さい。" name="field5"></textarea>                                                                                        
                                            </div> 
                                            <div class="clearfix"></div>                                            
                                        </div>
                                        <div class="form-field-cop">
                                            <div class="form-field-lable-cop">ご依頼内容*複数選択可</div>
                                            <div class="form-field-input-cop form-field-radio-row-cop">
                                                <div class="form-radio-cp">
                                                    <div class="form-field-radio-cp form-field-radio-main-cp">
                                                        <label class="radio-container-cp">オーバーホール
                                                            <input type="checkbox" checked="checked" name="field6" value="オーバーホール">
                                                            <span class="checkmark-cp"></span>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="form-radio-cp">
                                                    <div class="form-field-radio-cp form-field-radio-main-cp">
                                                        <label class="radio-container-cp">ポリッシュ
                                                            <input type="checkbox" name="field6" value="ポリッシュ">
                                                            <span class="checkmark-cp"></span>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="form-radio-cp">
                                                    <div class="form-field-radio-cp form-field-radio-main-cp">
                                                        <label class="radio-container-cp">その他
                                                            <input type="checkbox" name="field6" value="その他">
                                                            <span class="checkmark-cp"></span>
                                                        </label>
                                                    </div>
                                                </div>                                      
                                            </div>
                                        </div>
                                        <div class="form-field-cop">
                                            <div class="form-field-lable-cop">無料梱包キットを希望する <span>必須</span></div>
                                            <div class="form-field-input-cop form-field-radio-row-cop">
                                                <div class="form-radio-cp">
                                                    <div class="form-field-radio-cp">
                                                        <label class="radio-container-cp">はい
                                                            <input type="radio" checked="checked" name="field7" value="はい">
                                                            <span class="checkmark-cp"></span>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="form-radio-cp">
                                                    <div class="form-field-radio-cp">
                                                        <label class="radio-container-cp">いいえ
                                                            <input type="radio" name="field7" value="いいえ">
                                                            <span class="checkmark-cp"></span>
                                                        </label>
                                                    </div>
                                                </div>                                                                                      
                                                <div class="contact_form_info_hp">
                                                    無料梱包キットをご希望の場合、お電話番号・ご住所を必ずご記入下さい。
                                                </div>
                                            </div>
                                        </div>                                       
                                        <div class="contact_title_hp contact_padding_hp">
                                            お客様情報の入力
                                        </div>
                                        <div class="form-field-cop field-top-cop">
                                            <div class="form-field-lable-cop">お名前<span>必須</span></div>                                          
                                            <div class="form-field-input-cop">
                                                <input type="text" placeholder="例) 山田太郎" name="field8" required>                                                                                             
                                            </div> 
                                            <div class="clearfix"></div>                                            
                                        </div>
                                        <div class="form-field-cop field-top-cop">
                                            <div class="form-field-lable-cop">フリガナ</div>                                          
                                            <div class="form-field-input-cop">
                                                <input type="text" placeholder="例) ヤマダタロウ" name="field9">                                                                                             
                                            </div> 
                                            <div class="clearfix"></div>                                            
                                        </div>
                                        <div class="form-field-cop field-top-cop">
                                            <div class="form-field-lable-cop">メールアドレス<span>必須</span></div>                                          
                                            <div class="form-field-input-cop">
                                                <input type="email" placeholder="例) yamada@example.com" name="field10" required>                                                                                             
                                            </div> 
                                            <div class="clearfix"></div>                                            
                                        </div>
                                        <div class="form-field-cop field-top-cop">
                                            <div class="form-field-lable-cop">電話番号</div>                                          
                                            <div class="form-field-input-cop">
                                                <input type="text" placeholder="例) 03-1234-5678" name="field11">                                                                                             
                                            </div> 
                                            <div class="clearfix"></div>                                            
                                        </div>      
                                        <div class="form-field-cop field-top-cop">
                                            <div class="form-field-lable-cop">郵便番号</div>                                          
                                            <div class="form-field-input-cop">
                                                <input type="text" placeholder="例) 000-0000" name="field12">                                                                                             
                                            </div> 
                                            <div class="clearfix"></div>                                            
                                        </div>
                                        <div class="form-field-cop field-top-cop">
                                            <div class="form-field-lable-cop">都道府県</div>
                                            <div class="form-field-input-cop">
                                                <div class="form-list-cop">                                        	
                                                    <div class="form-list-select-cop">
                                                        <select class="custom-select" name="field13">
                                                            <option value="">選択してください</option>
                                                            <option value="北海道">北海道</option>
                                                            <option value="青森県">青森県</option>
                                                            <option value="岩手県">岩手県</option>
                                                            <option value="宮城県">宮城県</option>
                                                            <option value="秋田県">秋田県</option>
                                                            <option value="山形県">山形県</option>
                                                            <option value="福島県">福島県</option>
                                                            <option value="茨城県">茨城県</option>
                                                            <option value="栃木県">栃木県</option>
                                                            <option value="群馬県">群馬県</option>
                                                            <option value="埼玉県">埼玉県</option>
                                                            <option value="千葉県">千葉県</option>
                                                            <option value="東京都">東京都</option>
                                                            <option value="神奈川県">神奈川県</option>
                                                            <option value="新潟県">新潟県</option>
                                                            <option value="富山県">富山県</option>
                                                            <option value="石川県">石川県</option>
                                                            <option value="福井県">福井県</option>
                                                            <option value="山梨県">山梨県</option>
                                                            <option value="長野県">長野県</option>
                                                            <option value="岐阜県">岐阜県</option>
                                                            <option value="静岡県">静岡県</option>
                                                            <option value="愛知県">愛知県</option>
                                                            <option value="三重県">三重県</option>
                                                            <option value="滋賀県">滋賀県</option>
                                                            <option value="京都府">京都府</option>
                                                            <option value="大阪府">大阪府</option>
                                                            <option value="兵庫県">兵庫県</option>
                                                            <option value="奈良県">奈良県</option>
                                                            <option value="和歌山県">和歌山県</option>
                                                            <option value="鳥取県">鳥取県</option>
                                                            <option value="島根県">島根県</option>
                                                            <option value="岡山県">岡山県</option>
                                                            <option value="広島県">広島県</option>
                                                            <option value="山口県">山口県</option>
                                                            <option value="徳島県">徳島県</option>
                                                            <option value="香川県">香川県</option>
                                                            <option value="愛媛県">愛媛県</option>
                                                            <option value="高知県">高知県</option>
                                                            <option value="福岡県">福岡県</option>
                                                            <option value="佐賀県">佐賀県</option>
                                                            <option value="長崎県">長崎県</option>
                                                            <option value="熊本県">熊本県</option>
                                                            <option value="大分県">大分県</option>
                                                            <option value="宮崎県">宮崎県</option>
                                                            <option value="鹿児島県">鹿児島県</option>
                                                            <option value="沖縄県">沖縄県</option>
                                                        </select>
                                                    </div>                                 
                                                </div>
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                        <div class="form-field-cop field-top-cop">
                                            <div class="form-field-lable-cop">市区町村・番地</div>                                          
                                            <div class="form-field-input-cop">
                                                <input type="text" placeholder="例) ○市○区0-00-00" name="field14">                                                                                             
                                            </div> 
                                            <div class="clearfix"></div>                                            
                                        </div>
                                        <div class="form-field-cop field-top-cop">
                                            <div class="form-field-lable-cop">建物名・部屋番号</div>                                          
                                            <div class="form-field-input-cop">
                                                <input type="text" placeholder="例) 山田太郎" name="field15">                                                                                             
                                            </div> 
                                            <div class="clearfix"></div>                                            
                                        </div>   
                                        <div class="contact_btn_hp">
                                            <input type="hidden" name="submit-confirm" value="submit-confirm">
                                            <button type="submit">送信する</button>
                                            <!-- <a href="#">送信する</a> -->
                                        </div>                                                                                                                                                                  
                                    </div>		  
                                </div>
                            </div>           			     
                        </div>      
                    </form>                                          
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>            
        <div class="clearfix"></div>
    </div>
    
    
</section>
<!-- CONTAIN_END -->
<?php
get_footer();
