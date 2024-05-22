<?php
get_header();
?>
<?php
if(isset($_POST['submit-confirm']) && ($_POST['submit-confirm'] == 'submit-confirm')) {

    $field1 = isset($_POST['field1']) ? $_POST['field1']: '';
    $field2_1 = isset($_POST['field2_1']) ? $_POST['field2_1']: '';
    $field2_2 = isset($_POST['field2_2']) ? $_POST['field2_2']: '';
    $field3 = isset($_POST['field3']) ? $_POST['field3']: '';
    $field4 = isset($_POST['field4']) ? $_POST['field4']: '';
    $field5 = isset($_POST['field5']) ? $_POST['field5']: '';
    $field5 = isset($_POST['field6']) ? $_POST['field6']: '';
    
    $to      = 'prgfinal216@gmail.com';

    $message = "
    お問い合わせ種別 : ".$field1."<br>
    お名前 : ".$field2_1.$field2_2."<br>
    会社名 : ".$field3."<br>
    メールアドレス : ".$field4."<br>
    電話番号 : ".$field5."<br>
    お問い合わせ内容 : <br>".$field6."<br>
    ";

    $subject = 'お問い合わせがありました';

    $headers = "From: " . $field4 . "\r\n";
    $headers .= "Reply-To: " . $field4 . "\r\n";
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
    <div class="banner_block_rp" style="background:url(<?php echo get_stylesheet_directory_uri(); ?>/images/banner_2.png) no-repeat center center; background-size:cover;">             
        <div class="container">
            <div class="row">
                <div class="col banner_block_in_rp">                    	
                    <div class="banner_middle_rp"> 
                        <div class="banner_top_rp">                            	
                            <div class="banner_title_rp">
                                <h3>Product</h3>
                                <p>QBITではアームロボットソリューションを始め、<br/>配送ロボットの販売をしています。</p>
                            </div>
                        </div>
                        <div class="banner_boxes_rp">
                            <div class="banner_box_rp">
                                <div class="banner_box_in_rp">
                                    <div class="banner_box_img_rp">
                                        <a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/banner_box_img1.png" alt="" /></a>
                                    </div>
                                    <div class="banner_box_title_rp">
                                        ロボットカフェパッケージ
                                    </div>
                                    <div class="banner_box_btn_rp">
                                        <a href="#caferobot" class="common_btn_hp">See More <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/common_btn_icon.svg" alt="" /></a>
                                    </div>
                                </div>
                            </div>
                            <div class="banner_box_rp">
                                <div class="banner_box_in_rp">
                                    <div class="banner_box_img_rp">
                                        <a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/banner_box_img2.png" alt="" /></a>
                                    </div>
                                    <div class="banner_box_title_rp">
                                        配送ロボットDR1
                                    </div>
                                    <div class="banner_box_btn_rp">
                                        <a href="#deliveryrobot" class="common_btn_hp">See More <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/common_btn_icon.svg" alt="" /></a>
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
    <div class="robot_block_rp" id="caferobot">             
        <div class="container">
            <div class="row">
                <div class="col robot_block_in_rp">                    	
                    <div class="robot_middle_rp"> 
                        <div class="robot_top_rp">
                            <div class="robot_imgpart_rp">
                                <div class="robot_img1_rp">
                                    <a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/robot_img_1.png" alt="" /></a>
                                </div>
                                <div class="robot_img2_rp">
                                    <a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/banner_box_img1.png" alt="" /></a>
                                </div>
                            </div>                            	
                        </div>
                        <div class="robot_bottom_rp">
                            <div class="robot_title_rp">
                                カフェロボットパッケージ
                            </div>
                            <div class="robot_info_rp">    
                                アームロボットを使用したカフェパッケージです。ロボット専用の筐体（KIOSKタイプ）を製作しました。この筐体には、給排水、電源、ネットワークなど必要なインフラが組み込まれており、システムは工場で製作され設置場所へ運ばれます。ば簡単にロボットカフェがオープンできます。
                            </div>
                        </div>
                    </div>                                               
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>            
        <div class="clearfix"></div>
    </div>
    <div class="hard_block_rp">             
        <div class="container">
            <div class="row">
                <div class="col hard_block_in_rp">                    	
                    <div class="hard_middle_rp"> 
                        <div class="hard_top_rp">
                            <div class="hard_boxes_rp">
                                <div class="hard_box_rp">
                                    <div class="hard_box_left_rp">
                                        <div class="hard_left_digit_rp">
                                            01
                                        </div>
                                        <div class="hard_left_info_rp">
                                            <h4>話して、踊って、しっかり働く</h4>
                                            <p>お客様に愛されるロボットが働く、オールインワン・パッケージのKIOSKタイプのカフェです。ロボットが店員となって、集客し、接客し、ドリンクを作ってお客様にお出しします。話しかけや顔の表情、身ぶりを使っておもてなし。目配り、気配り、心配りを
                                                学習しながら日々成長します。ロボットとカフェマシン、サービスカウンターなど、組合せ動作の完成したセットをパーツにしてお届けします。 組み立てや調整の時間を短縮することで、専門スタッフによる手軽で素早い店舗設営を可能にしました。
                                                専用のお問い合わせ窓口で一元的な保守サービスを提</p>
                                        </div>
                                    </div>
                                    <div class="hard_box_right_rp">
                                        <a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/hard_img_1.png" alt="" /></a>
                                    </div>
                                </div>
                                <div class="hard_box_rp hard_box_reverse_rp">
                                    <div class="hard_box_left_rp">
                                        <div class="hard_left_digit_rp">
                                            02
                                        </div>
                                        <div class="hard_left_info_rp">
                                            <h4>ご提供メニュー</h4>
                                            <p>ドリップマシン2台とエスプレッソマシン、グラインダーやアイスディスペンサーを操り、様々なドリンクメニューに対応します。コーヒーは挽きたて淹れたて、ご注文ごとに豆を挽いて提供します。1時間あたり、ドリップコーヒーなら20杯、
                                                カフェラテなら30杯を作ることができます。</p>
                                        </div>
                                        <div class="hard_left_bottom_rp">
                                            <div class="hard_bottom_in_rp">
                                                <div class="hard_bottom_title_rp">
                                                    ご提供メニュー
                                                </div>
                                                <div class="hard_bottom_links_rp">
                                                    <ul>
                                                        <li>ドリップコーヒー</li>
                                                        <li>アイスラテ</li>
                                                        <li>アイスコーヒー</li>
                                                        <li>抹茶ラテ</li>
                                                        <li>カフェラテ</li>
                                                        <li>その他カフェマシンの対応メニュー</li>
                                                    </ul>
                                                </div>
                                            </div>    
                                        </div>
                                    </div>
                                    <div class="hard_box_right_rp">
                                        <a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/hard_img_2.png" alt="" /></a>
                                    </div>
                                </div>
                                <div class="hard_box_rp hard_box_change_rp">
                                    <div class="hard_box_left_rp">
                                        <div class="hard_left_digit_rp">
                                            03
                                        </div>
                                        <div class="hard_left_info_rp">
                                            <h4>こんなシーンで</h4>
                                            <p>ショッピングセンターやフードコートなど、賑わいの場に未来感ある楽しみをプラス。<br/>オフィスタワーやイベントホールなど、遊休スペースを活性化。<br/> 駅や空港など、往来する人々に価値あるリラックス空間を提供。</p>
                                        </div>
                                    </div>
                                    <div class="hard_box_right_rp">
                                        <a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/hard_img_3.png" alt="" /></a>
                                    </div>
                                </div>
                                <div class="hard_box_rp hard_box_reverse_rp">
                                    <div class="hard_box_left_rp">
                                        <div class="hard_left_digit_rp">
                                            04
                                        </div>
                                        <div class="hard_left_info_rp">
                                            <h4>主な設置要件</h4>
                                        </div>
                                        <div class="hard_left_bottom_rp hard_box_pd_rp">
                                            <div class="hard_bottom_row_rp">
                                                <div class="hard_row_left_rp">
                                                    外寸
                                                </div>
                                                <div class="hard_row_right_rp">
                                                    幅2.4m x 奥行2.4 m x 高さ2.4m
                                                </div>
                                            </div>
                                            <div class="hard_bottom_row_rp">
                                                <div class="hard_row_left_rp">
                                                    総重量
                                                </div>
                                                <div class="hard_row_right_rp">
                                                    約670kg
                                                </div>
                                            </div>
                                            <div class="hard_bottom_row_rp">
                                                <div class="hard_row_left_rp">
                                                    電源
                                                </div>
                                                <div class="hard_row_right_rp">
                                                    単相200V 3000W 3回路 および 単相100V 1500W 3回路<br/>または 単相200V 3線式 12000W (分電盤直収)
                                                </div>
                                            </div>
                                            <div class="hard_bottom_row_rp">
                                                <div class="hard_row_left_rp">
                                                    給排水
                                                </div>
                                                <div class="hard_row_right_rp">
                                                    給水管(ボールタップ13A)、排水管(40φ塩ビ管)   
                                                </div>
                                            </div>
                                            <div class="hard_bottom_row_rp">
                                                <div class="hard_row_left_rp">
                                                    通信
                                                </div>
                                                <div class="hard_row_right_rp">
                                                    インターネット接続回線   
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="hard_box_right_rp">
                                        <a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/hard_img_4.png" alt="" /></a>
                                    </div>
                                </div>
                            </div>                        	
                        </div>
                        <div class="video_obj">
                            <video class="video_tag" data-type="mp4" src="<?php echo get_stylesheet_directory_uri(); ?>/images/caferobot.mp4"></video>
                            <div class="video_button" style="background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/images/hard_img_5.png);">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/video_icon.svg">
                            </div>
                        </div>
                    </div>                                               
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>            
        <div class="clearfix"></div>
    </div>
    <div class="robot_block_rp robot_block_change_rp" id="deliveryrobot">             
        <div class="container">
            <div class="row">
                <div class="col robot_block_in_rp">                    	
                    <div class="robot_middle_rp"> 
                        <div class="robot_top_rp">
                            <div class="robot_imgpart_rp">
                                <div class="robot_img1_rp">
                                    <a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/robot_img_2.png" alt="" /></a>
                                </div>
                                <div class="robot_img2_rp">
                                    <a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/banner_box_img2.png" alt="" /></a>
                                </div>
                            </div>                            	
                        </div>
                        <div class="robot_bottom_rp">
                            <div class="robot_title_rp">
                                配送ロボットDR1（ディーアールワン）
                            </div>
                            <div class="robot_info_rp">    
                                DR1は自律走行型の配送ロボットです。<br/>2021年に市販の配膳ロボット等を用い、「ロボット化館内配送集荷サービス」の実証実験を行いました。<br/>実証実験の経験から「荷物をより安全に配送したい」「配送効率を上げるため、一度にまとめて配送したい」とい
                                う要望を叶える配送ロボットを、この度企画・開発・販売するにいたりました。
                            </div>
                        </div>
                    </div>                                               
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>            
        <div class="clearfix"></div>
    </div>
    <div class="door_block_rp">             
        <div class="container">
            <div class="row">
                <div class="col door_block_in_rp">                    	
                    <div class="door_middle_rp"> 
                        <div class="door_top_rp">
                            <div class="door_title_rp">
                                DR1の特長
                            </div>
                            <div class="door_boxes_rp">
                                <div class="door_box_rp">
                                    <div class="door_box_digit_rp">
                                        01
                                    </div>
                                    <div class="door_box_img_rp">
                                        <a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/door_img_1.png" alt="" /></a>
                                    </div>
                                    <div class="door_box_info_rp">
                                        <h3>2個のコンテナ</h3>
                                        <p>配送の効率をあげるため、２個のコンテナを搭載しています。１回の配送で２カ所へ配送できます。（コンテナの数を増やすことも可能です）</p>
                                    </div>
                                </div>
                                <div class="door_box_rp">
                                    <div class="door_box_digit_rp">
                                        02
                                    </div>
                                    <div class="door_box_img_rp">
                                        <a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/door_img_2.png" alt="" /></a>
                                    </div>
                                    <div class="door_box_info_rp">
                                        <h3>自動扉付き</h3>
                                        <p>扉付きのコンテナで衛生的・安全に配送します。パスワード機能も搭載しており、本人へ確実に配送します。</p>
                                    </div>
                                </div>
                                <div class="door_box_rp">
                                    <div class="door_box_digit_rp">
                                        03
                                    </div>
                                    <div class="door_box_img_rp">
                                        <a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/door_img_3.png" alt="" /></a>
                                    </div>
                                    <div class="door_box_info_rp">
                                        <h3>エレベーター連携</h3>
                                        <p>エレベータ乗降モードを搭載 しています。その他セキュリティ自動ドアやPBXなどの周辺機器との連動も可能です。</p>
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
    <div class="scene_block_rp">             
        <div class="container">
            <div class="row">
                <div class="col scene_block_in_rp">                    	
                    <div class="scene_middle_rp"> 
                        <div class="scene_top_rp">
                            <div class="door_title_rp">
                                ご利用シーン
                            </div>
                            <div class="scene_boxes_rp">
                                <div class="scene_box_rp">
                                    <div class="scene_left_rp">
                                        <a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/scene_img_1.png" alt="" /></a>
                                    </div>
                                    <div class="scene_right_rp">
                                        <div class="scene_right_info_rp">
                                            <h3>高層マンション</h3>
                                            <p>マンション内配送をDR1に任せれば、宅配ロッカーまで取りにいく必要はありません。Uber Eatsなどのお届けも、配達員と顔を合わせる必要はなく、プライバシーの保護ができます。</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="scene_box_rp scene_box_reverse_rp">
                                    <div class="scene_left_rp">
                                        <a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/scene_img_2.png" alt="" /></a>
                                    </div>
                                    <div class="scene_right_rp">
                                        <div class="scene_right_info_rp">
                                            <h3>オフィス</h3>
                                            <p>DR1は、コンテナを複数搭載しています。たくさんの荷物を一度にまとめて運ぶことで、効率的にオフィス内の配送をします。</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="scene_box_rp">
                                    <div class="scene_left_rp">
                                        <a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/scene_img_3.png" alt="" /></a>
                                    </div>
                                    <div class="scene_right_rp">
                                        <div class="scene_right_info_rp scene_box_width_rp">
                                            <h3>カラオケ</h3>
                                            <p>DR1は横幅50cm程度です。狭い通路の配送・配膳もお任せください。扉に鍵もついているので、遠くの部屋まで安全に運べます。</p>
                                        </div>
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
    <div class="flow_block_rp">             
        <div class="container">
            <div class="row">
                <div class="col flow_block_in_rp">                    	
                    <div class="flow_middle_rp"> 
                        <div class="flow_top_rp">
                            <div class="door_title_rp">
                                導入の流れ
                            </div>
                            <div class="flow_boxes_rp">
                                <div class="flow_box_rp">
                                    <div class="flow_box_in_rp">
                                        <div class="flow_box_digit_rp">
                                            01
                                        </div>
                                        <div class="flow_box_title_rp">
                                            お問い合わせ 
                                        </div>
                                        <div class="flow_box_img_rp">
                                            <a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/flow_icon_1.svg" alt="" /></a>
                                        </div>
                                        <div class="flow_box_info_rp">
                                            フォーム入力で 簡単1分でお申込み 
                                        </div>
                                    </div>
                                </div>
                                <div class="flow_box_rp">
                                    <div class="flow_box_in_rp">
                                        <div class="flow_box_digit_rp">
                                            02
                                        </div>
                                        <div class="flow_box_title_rp">
                                            ヒアリング・提案 
                                        </div>
                                        <div class="flow_box_img_rp">
                                            <a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/flow_icon_2.svg" alt="" /></a>
                                        </div>
                                        <div class="flow_box_info_rp">
                                            ご要望を伺います 活用プランと御見積を 提案いたします  
                                        </div>
                                    </div>
                                </div>
                                <div class="flow_box_rp">
                                    <div class="flow_box_in_rp">
                                        <div class="flow_box_digit_rp">
                                            03
                                        </div>
                                        <div class="flow_box_title_rp">
                                            ご注文
                                        </div>
                                        <div class="flow_box_img_rp">
                                            <a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/flow_icon_3.svg" alt="" /></a>
                                        </div>
                                        <div class="flow_box_info_rp">
                                            ご注文をいただき 製造工程に進みます （納期2 -3か月程度） 
                                        </div>
                                    </div>
                                </div>
                                <div class="flow_box_rp">
                                    <div class="flow_box_in_rp">
                                        <div class="flow_box_digit_rp">
                                            04
                                        </div>
                                        <div class="flow_box_title_rp">
                                            納品  
                                        </div>
                                        <div class="flow_box_img_rp">
                                            <a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/flow_icon_4.svg" alt="" /></a>
                                        </div>
                                        <div class="flow_box_info_rp">
                                            現地に納品 初期設定とユーザー様へ のトレーニングを実施します  
                                        </div>
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
    <div class="load_block_rp">             
        <div class="container">
            <div class="row">
                <div class="col load_block_in_rp">                    	
                    <div class="load_middle_rp"> 
                        <div class="load_top_rp">
                            <div class="door_title_rp">
                                製品仕様
                            </div>
                            <div class="load_leftright_rp">
                                <div class="load_left_rp">
                                    <a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/load_img.png" alt="" /></a>
                                </div>
                                <div class="load_right_rp">
                                    <div class="load_row_rp">
                                        <div class="load_row_left_rp">
                                            製品仕様
                                        </div>
                                        <div class="load_row_right_rp">
                                            幅504×高さ1200
                                        </div>
                                    </div>
                                    <div class="load_row_rp">
                                        <div class="load_row_left_rp">
                                            最大積載重量
                                        </div>
                                        <div class="load_row_right_rp">
                                            最大40kg
                                        </div>
                                    </div>
                                    <div class="load_row_rp">
                                        <div class="load_row_left_rp">
                                            移動方向
                                        </div>
                                        <div class="load_row_right_rp">
                                            360度
                                        </div>
                                    </div>
                                    <div class="load_row_rp">
                                        <div class="load_row_left_rp">
                                            移動速度
                                        </div>
                                        <div class="load_row_right_rp">
                                            1m/s（最大1.2m/s)
                                        </div>
                                    </div>
                                    <div class="load_row_rp">
                                        <div class="load_row_left_rp">
                                            充電時間
                                        </div>
                                        <div class="load_row_right_rp">
                                            充電時間
                                        </div>
                                    </div>
                                    <div class="load_row_rp">
                                        <div class="load_row_left_rp">
                                            連続運転時間
                                        </div>
                                        <div class="load_row_right_rp">
                                            7時間（40kg荷重の場合）
                                        </div>
                                    </div>
                                    <div class="load_row_rp">
                                        <div class="load_row_left_rp">
                                            センサ
                                        </div>
                                        <div class="load_row_right_rp">
                                            レーザー距離センサ、RGB-Dカメラ、<br/>超音波距離センサ 6軸モーションセンサ<br/>赤外線センサ、衝突防止センサ
                                        </div>
                                    </div>
                                    <div class="load_row_rp">
                                        <div class="load_row_left_rp">
                                            登坂能力
                                        </div>
                                        <div class="load_row_right_rp">
                                            10°以下可能
                                        </div>
                                    </div>
                                    <div class="load_row_rp">
                                        <div class="load_row_left_rp">
                                            段差
                                        </div>
                                        <div class="load_row_right_rp">
                                            18mm以下可能
                                        </div>
                                    </div>
                                    <div class="load_row_rp">
                                        <div class="load_row_left_rp">
                                            保証期間
                                        </div>
                                        <div class="load_row_right_rp">
                                            購入後6か月間
                                        </div>
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
    <div class="know_block_rp">             
        <div class="container">
            <div class="row">
                <div class="col know_block_in_rp">                    	
                    <div class="know_middle_rp"> 
                        <div class="know_top_rp">
                            <div class="know_left_rp">
                                <div class="door_title_rp">
                                    ご要望お聞かせください
                                </div>
                                <div class="know_info_rp">
                                    <p>・リース契約のご相談も承ります</p>
                                    <p>・以下の変更が可能です</p>
                                    <p>ー本体の色</p>
                                    <p>ーコンテナ型からお盆型への変更</p>
                                    <p>ーコンテナの数</p>
                                </div>
                            </div>
                            <div class="know_right_rp">
                                <div class="know_right_img_rp">
                                    <a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/know_img.png" alt="" /></a>
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
    <div class="contact_block_rp">             
        <div class="container">
            <div class="row">
                <div class="col contact_block_in_rp">                    	
                    <div class="contact_middle_rp"> 
                        <form action="" method="post" enctype="multipart/form-data">
                            <div class="contact_top_rp">
                                <div class="door_title_rp">
                                    見積を依頼する
                                </div>
                                <div class="contact_info_rp">
                                    お気軽にお問い合わせください。担当者より連絡させていただきます。
                                </div>
                                <div class="contact_form_rp">
                                    <div class="form-field-cop">
                                        <div class="form-field-lable-cop">お問い合わせ種別<span>*</span></div>
                                        <div class="form-field-input-cop form-field-radio-row-cop form-field-radio-row-2-cop">
                                            <div class="form-radio-cp">
                                                <div class="form-field-radio-cp">
                                                    <label class="radio-container-cp">配送ロボット
                                                        <input type="radio" checked="checked" name="inquiry1">
                                                        <span class="checkmark-cp"></span>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="form-radio-cp">
                                                <div class="form-field-radio-cp">
                                                    <label class="radio-container-cp">配膳ロボット
                                                        <input type="radio" name="inquiry1">
                                                        <span class="checkmark-cp"></span>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="form-radio-cp">
                                                <div class="form-field-radio-cp">
                                                    <label class="radio-container-cp">カフェロボット
                                                        <input type="radio" name="inquiry1">
                                                        <span class="checkmark-cp"></span>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="form-radio-cp">
                                                <div class="form-field-radio-cp">
                                                    <label class="radio-container-cp">ロボット導入のご相談
                                                        <input type="radio" name="inquiry1">
                                                        <span class="checkmark-cp"></span>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="form-radio-cp">
                                                <div class="form-field-radio-cp">
                                                    <label class="radio-container-cp">その他
                                                        <input type="radio" name="inquiry1">
                                                        <span class="checkmark-cp"></span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-field-cop">
                                        <div class="form_input_main_cop">
                                            <div class="form_input_in_cop">
                                                <div class="form-field-lable-cop">姓<span>*</span></div> 
                                                <div class="form-field-input-cop"><input type="text" placeholder="" name="field2_1" required></div>
                                            </div> 
                                            <div class="form_input_in_cop">   
                                                <div class="form-field-lable-cop">名<span> *</span></div>    
                                                <div class="form-field-input-cop"><input type="text" placeholder="" name="field2_1" required></div>
                                            </div>
                                        </div>    
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="form-field-cop">
                                        <div class="form-field-lable-cop">会社名<span>*</span></div>
                                        <div class="form-field-input-cop">
                                            <input type="text" placeholder="" name="field3" required>                                        
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="form-field-cop">
                                        <div class="form-field-lable-cop">メールアドレス<span>*</span></div>
                                        <div class="form-field-input-cop">
                                            <input type="email" placeholder="" name="field4" required>                                        
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="form-field-cop">
                                        <div class="form-field-lable-cop">電話番号</div>
                                        <div class="form-field-input-cop">
                                            <input type="text" placeholder="" name="field5">                                        
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="form-field-cop">
                                        <div class="form-field-lable-cop">お問い合わせ内容</div>
                                        <div class="form-field-input-cop">
                                            <textarea type="text" placeholder="" name="field6"></textarea>                                        
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                                <div class="contact_btn_rp">
                                    <input type="hidden" name="submit-confirm" value="submit-confirm">
                                    <button type="submit">送 信</button>
                                </div>
                            </div>
                        </form>
                    </div>                                               
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
