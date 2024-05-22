
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="author" content="">
<title>Index</title>
<!-- Bootstrap -->
<link href="css/bootstrap.css" rel="stylesheet">
<link href="css/fontawesome_all.css" rel="stylesheet" type="text/css">
<link href="css/fonts.css" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://use.typekit.net/onq3gxf.css">
<link href="css/owl.carousel.css" rel="stylesheet">
<link href="css/owl.theme.default.css" rel="stylesheet">
<link href="css/jquery-ui.css" rel="stylesheet" type="text/css">
<link href="css/jquery-ui.structure.css" rel="stylesheet" type="text/css">
<link href="css/jquery-ui.theme.css" rel="stylesheet" type="text/css">
<link href="css/stylesheet.css" rel="stylesheet" type="text/css">
<link href="css/responsive.css" rel="stylesheet" type="text/css">
<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body>

<?php
if(isset($_POST['submit-confirm']) && ($_POST['submit-confirm'] == 'submit-confirm')) {

    $field1 = isset($_POST['field1']) ? $_POST['field1']: '';
    $field2 = isset($_POST['field2']) ? $_POST['field2']: '';
    $field3 = isset($_POST['field3']) ? $_POST['field3']: '';
    $field4 = isset($_POST['field4']) ? $_POST['field4']: '';
    $field5 = isset($_POST['field5']) ? $_POST['field5']: '';
    $field6_1 = isset($_POST['field6_1']) ? $_POST['field6_1']: '';
    $field6_2 = isset($_POST['field6_2']) ? $_POST['field6_2']: '';
    $field7 = isset($_POST['field7']) ? $_POST['field7']: '';
    $field8 = isset($_POST['field8']) ? $_POST['field8']: '';
    $field9_1 = isset($_POST['field9_1']) ? $_POST['field9_1']: '';
    $field9_2 = isset($_POST['field9_2']) ? $_POST['field9_2']: '';
    $field9_3 = isset($_POST['field9_3']) ? $_POST['field9_3']: '';
    $field10_1 = isset($_POST['field10_1']) ? $_POST['field10_1']: '';
    $field10_2 = isset($_POST['field10_2']) ? $_POST['field10_2']: '';
    $field10_3 = isset($_POST['field10_3']) ? $_POST['field10_3']: '';
    $field11 = isset($_POST['field11']) ? $_POST['field11']: '';
    
    
    $to      = 'koide3019@gmail.com';

    $message = "
    サービスの種類 : ".$field1."<br>
    お問い合わせ種類 : ".$field2."<br>
    御社名 : ".$field3."<br>
    部署名 : ".$field4."<br>
    URL : ".$field5."<br>
    お名前 : ".$field6_1.' '.$field6_2."<br>
    メールアドレス : ".$field7."<br>
    電話番号 : ".$field8."<br>
    連絡のつきやすいお時間帯(第一希望) : ".$field9_1.' '.$field9_2.' '.$field9_3."<br>
    連絡のつきやすいお時間帯(第一希望) : ".$field10_1.' '.$field10_2.' '.$field10_3."<br>
    お問い合わせ内容 : <br>".$field11."<br>
    ";

    $subject = 'お問い合わせがありました';

    $headers = "From: " . $field7 . "\r\n";
    $headers .= "Reply-To: " . $field7 . "\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=UTF-8\r\n";

    if(mail($to, $subject, $message, $headers)) {
        echo '<script>alert("Success!"); location.href="/"</script>';
    } else {
        echo '<script>alert("Failed!"); location.href="/"</script>';
    }    
}

?>

<div class="wrapper">
<!-- HEADER_START -->
	<header id="header">
        <div class="header-hp">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-12 header-in-hp">
                    	<div class="header-left-hp">
                            <div class="logo-hp">
                            	<a href="#"><img src="images/logo.png" alt="" /></a>
                            </div>
                            <div class="clearfix"></div>
                        </div>                        
                        <div class="header-right-hp">      
                            <div class="navigation-hp">
                                <nav class="navbar navbar-expand-lg navbar-light">
                                    <div class="collapse navbar-collapse navigation-main-hp" id="navbarSupportedContent">
                                        <ul class="navbar-nav ml-auto">
                                            <li><a href="#service_block">Service</a></li>                                            
                                            <li><a href="#drone_grid">洗浄ドローン</a></li>
                                            <li><a href="#drone_grid2">農業ドローン</a></li>
                                            <li><a href="#staff">Staff紹介</a></li>
                                            <li><a href="#inquiry">お問い合わせ</a></li>
                                        </ul>
                                    </div>
                                </nav>                                
                                <div class="clearfix"></div>    
                            </div>
                            <div class="mobile-menu-hp">
                                <a href="javascript:void(0)">
                                    <div class="menu-toggle-btn-hp">
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                    </div>
                                </a>
                            </div> 
                            <div class="header_box_hp">
                                <div class="header_btn_hp">
                                    <a href="#">まずは話を聞いてみる</a>
                                </div>
                                <div class="header_btn_hp box_color_hp">
                                    <a href="#">まずは話を聞いてみる</a>
                                </div>
                                <div class="header_btn_phn_hp">
                                    <a href="tel:0120-787-058">
                                        <div class="header_btn_phn_icon_hp">
                                            <img src="images/Icon_phone.svg" alt="" />
                                        </div>
                                        <div class="header_btn_info_hp"> 
                                            <div class="header_btn_info_top_hp">
                                                0120-787-058
                                            </div>
                                            <div class="header_btn_info_bottom_hp">
                                                平日10:00-17:30
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>                            
                        </div>                        
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="clearfix"></div>
        </div>
    </header>
<!-- HEADER_END -->
<!-- CONTAIN_START -->
	<section id="contain">    	        
    	<div class="banner_block_hp">             
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 banner_block_in_hp">                     	
                        <div class="banner_middle_hp">
                        	<div class="banner_top_hp">
                            	<div class="banner_info_hp">
                                	Ready for takeoff? 
                                </div>
                                <div class="banner_img_hp">
                                	<img src="images/banner_img.png" class="desktop_img_hp" alt="" />
                                    <img src="images/banner_img_m.jpg" class="mobile_img_hp" alt="" />
                                    <div class="banner_box_hp">
                                    	作業をもっと楽に・もっと簡単に・そしてコストダウンを。<br/>農業・洗浄・エンタメに特化したドローンサービス
                                    </div>
                                </div>
                            </div>
                            <div class="header_box_hp header_box_mobile_hp">
                                <div class="header_btn_hp">
                                    <a href="#">まずは話を聞いてみる</a>
                                </div>
                                <div class="header_btn_hp box_color_hp">
                                    <a href="#">まずは話を聞いてみる</a>
                                </div>
                                <div class="header_btn_phn_hp">
                                    <a href="#">
                                        <div class="header_btn_phn_icon_hp">
                                            <img src="images/Icon_phone.svg" alt="" />
                                        </div>
                                        <div class="header_btn_info_hp"> 
                                            <div class="header_btn_info_top_hp">
                                                0120-787-058
                                            </div>
                                            <div class="header_btn_info_bottom_hp">
                                                平日10:00-17:30
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
        <div class="support_block_hp">             
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 support_block_in_hp">                     	
                        <div class="support_middle_hp">
                        	<div class="support_top_hp">	
                            	<div class="support_left_hp">
                                	<div class="support_left_title_hp">
                                    	全国<span>対応</span>
                                    </div>
                                    <div class="support_left_info_hp">
                                    	"全国30を超えるドローンオペレーターを<br/>抱えるプラットフォームサービスです" 
                                    </div>
                                </div>
								<div class="support_right_hp">
                                	<div class="support_right_img_hp">
                                    	<a href="#">
                                    		<img src="images/support_img1.svg" alt="" />
                                        </a>    
                                    </div>
                                </div>
                            </div>
                            <div class="support_bottom_hp">
                            	<div class="support_bottom_boxes_hp">
                                    <div class="support_bottom_box_hp">
                                        <div class="support_bottom_box_img_hp">
                                        	<a href="#">
                                            	<img src="images/support_img2.png" alt="" />                                    
                                            </a>
                                        </div>
                                        <div class="support_bottom_info_hp">
                                            洗浄ドローン
                                        </div>
                                    </div>
                                    <div class="support_bottom_box_hp">
                                        <div class="support_bottom_box_img_hp">
                                        	<a href="#">
                                            	<img src="images/support_img3.png" alt="" />                                    
                                            </a>    
                                        </div>
                                        <div class="support_bottom_info_hp">
                                            農業ドローン
                                        </div>
                                    </div>    
                                </div>
                                <div class="support_info_hp">
                                	産業ドローンに特化したサービス　時間と、コストのセーブをお約束。<br/>確かなデーター化で可視化したさびすの納品をお約束します。エンターテイメントに特化したDrone Showもおまかせください。
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
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 service_block_in_hp">                     	
                        <div class="service_middle_hp">
                        	<div class="common_title_hp" id="service_block"> 
                        		<h2><span>S</span>ervice</h2>
                       		</div>
                        	<div class="service_top_hp">	
                            	<div class="service_box_hp">
                                	<div class="service_box_left_hp">
                                    	<div class="service_box_in_hp">
                                        	<div class="service_box_num_hp">
                                            	01
                                            </div>
                                            <div class="service_box_title_hp">
                                            	洗浄ドローン
                                            </div>
                                            <div class="service_box_info_hp">
                                            	国内初！「ドローン洗浄」外壁・屋根、太陽光パネルなど、高所の洗浄をメインとします。 <br/>
                                                足場をかけるなど、コストがかかる心配も無用なので安価な対応が可能 
                                            </div>
                                        </div>
                                    </div>
                                    <div class="service_box_right_hp">
                                    	<img src="images/service_img1.png" alt="" />
                                    </div>
                                </div>
                                <div class="service_box_hp service_change_hp">
                                	<div class="service_box_left_hp">
                                    	<div class="service_box_in_hp">
                                        	<div class="service_box_num_hp">
                                            	02
                                            </div>
                                            <div class="service_box_title_hp">
                                            	農業ドローン
                                            </div>
                                            <div class="service_box_info_hp">
                                            	農家出身者による農業専門DRONEサービス。「知っているからできる」農薬散布・肥料散布・種まきまた、葉の病気がないか高性能ドローンカメラで調査、レポートいたします。
                                            </div>
                                        </div>
                                    </div>
                                    <div class="service_box_right_hp">
                                    	<img src="images/service_img2.png" alt="" />
                                    </div>
                                </div>
                                <div class="service_box_hp">
                                	<div class="service_box_left_hp">
                                    	<div class="service_box_in_hp">
                                        	<div class="service_box_num_hp">
                                            	03
                                            </div>
                                            <div class="service_box_title_hp">
                                            	Drone Show
                                            </div>
                                            <div class="service_box_info_hp">
                                   				カスタムドローンショーのデザインとプロデュースお客様に合わせたカスタマイズされたドローンショーをデザインし、プロデュースします。ドローンの数、色、形、パターン、そして音楽など、お客様の要望に応じて完全にカスタマイズすることができます。
                                            </div>
                                        </div>
                                    </div>
                                    <div class="service_box_right_hp">
                                    	<img src="images/service_img3.png" alt="" />
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
        <div class="drone_block_hp">             
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 drone_block_in_hp">                     	
                        <div class="drone_middle_hp">
                        	<div class="drone_top_hp">                      	                            
                            	<div class="drone_img_hp">
                                	<img src="images/drone_img.png" alt="" />                                    
                                </div>
                                <div class="drone_grid_hp" id="drone_grid">
                                	<div class="drone_grid_width_hp">
                                        <div class="drone_grid_info_hp">
                                            当社は、Droneを使用した高層建築物や難易度の高い場所にある壁や屋根の洗浄サービスは、<br/>特許利用でご提供しています。当社のサービスは、手作業に比べて効率的で、安全性を向上させます。 
                                        </div>
                                        <div class="drone_box_hp">
                                            <div class="drone_box_title_hp">
                                                洗浄ドローン
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
        <div class="feature_block_hp">             
            <div class="container container_wash">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 feature_block_in_hp">                     	
                        <div class="feature_middle_hp">
                        	<div class="feature_text_hp">
                            	特徴洗浄 
                            </div>
                            <div class="feature_info_hp">
                            	国内初！「ドローン洗浄」外壁・屋根、太陽光パネルなど、高所の洗浄をメインとします。足場をかけるなど、コストがかかる心配も無用なので安価な対応が可能
                            </div>
                            <div class="feature_top_hp">
                            	<div class="feature_box_hp">
                                	<div class="feature_box_img_hp">
                                    	<a href="#"><img src="images/feature_img1.svg" alt="" /></a>
                                    </div>
                                    <div class="feature_box_info_hp">
                                    	国内初！<br/>「ドローン洗浄」
                                    </div>
                                </div>
                                <div class="feature_box_hp">
                                	<div class="feature_box_img_hp">
                                    	<a href="#"><img src="images/feature_img2.svg" alt="" /></a>
                                    </div>
                                    <div class="feature_box_info_hp">
                                    	外壁・屋根、太陽光パネルなど、<br/>高所の洗浄をメインとします。
                                    </div>
                                </div>
                                <div class="feature_box_hp">
                                	<div class="feature_box_img_hp">
                                    	<a href="#"><img src="images/feature_img3.svg" alt="" /></a>
                                    </div>
                                    <div class="feature_box_info_hp">
                                    	足場をかけるなど、コストがかかる<br/>心配も無用なので安価な対応が可能
                                    </div>
                                </div>
                            </div>
                            <div class="feature_bottom_hp">
                            	<div class="feature_left_hp">
                                	<div class="feature_box_in_hp">
                                        <div class="feature_about_hp">
                                            対象となるお客様
                                        </div>
                                        <div class="feature_link_hp">
                                            <ul>
                                                <li><a href="#">工場・マンション所有の企業様・オーナー様</a></li>
                                                <li><a href="#">太陽光パネル所有のオーナー様・企業様</a></li>
                                                <li><a href="#">案件をお持ちの業者様</a></li>
                                            </ul>
                                        </div>
                                    </div>   
                                </div>
                                <div class="feature_right_hp">
                                	<div class="feature_right_img_hp">
                                    	<a href="#"><img src="images/feature_img4.png" alt=""/></a>
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
        <div class="target_block_hp">             
            <div class="container container_wash">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 target_block_in_hp">                     	
                        <div class="target_middle_hp">
                        	<div class="target_title_hp">
                            	対象建造物
                            </div>
                            <div class="target_boxes_hp">
                            	<div class="target_box_hp">
                                	<div class="target_box_in_hp">
                                        <div class="target_left_hp">
                                            <a href="#"><img src="images/target_img1.png" alt="" /></a>
                                        </div>
                                        <div class="target_right_hp">
                                            <div class="target_text_hp">
                                                建物の外壁や屋根
                                            </div>
                                            <div class="target_info_hp">
                                                建物の外壁や屋根は、日常的に汚れがたまりやすく、手作業での洗浄は大変な作業です。Droneを使用した高圧洗浄なら、効率的かつ迅速に洗浄できます。 
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="target_box_hp">
                                	<div class="target_box_in_hp">
                                        <div class="target_left_hp">
                                            <a href="#"><img src="images/target_img2.png" alt="" /></a>
                                        </div>
                                        <div class="target_right_hp">
                                            <div class="target_text_hp">
                                                橋梁や高架道路
                                            </div>
                                            <div class="target_info_hp">
                                                橋梁や高架道路など、高い位置にある場所の洗浄も、Droneを使用することで、手作業では難しい場所でも効率的に洗浄できます。 
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="target_box_hp">
                                	<div class="target_box_in_hp">
                                        <div class="target_left_hp">
                                            <a href="#"><img src="images/target_img3.png" alt="" /></a>
                                        </div>
                                        <div class="target_right_hp">
                                            <div class="target_text_hp">
                                                風力タービンの羽根
                                            </div>
                                            <div class="target_info_hp">
                                                風力タービンの羽根は、高い場所にあるため手作業では危険です。また、羽根の形状も複雑で、手作業では綺麗に洗浄することができません。Droneを使用することで、効率的かつ安全に洗浄できます。 
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="target_box_hp">
                                	<div class="target_box_in_hp">
                                        <div class="target_left_hp">
                                            <a href="#"><img src="images/target_img4.png" alt="" /></a>
                                        </div>
                                        <div class="target_right_hp">
                                            <div class="target_text_hp">
                                                大型構造物の外観 
                                            </div>
                                            <div class="target_info_hp">
                                                大型の構造物の外観も、Droneを使用することで効率的に洗浄することができます。例えば、大型貯水槽や石油タンク、大型船舶などが挙げられます。  
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="target_box_hp target_change_hp">
                                	<div class="target_box_in_hp">
                                        <div class="target_left_hp">
                                            <a href="#"><img src="images/target_img5.png" alt="" /></a>
                                        </div>
                                        <div class="target_right_hp">
                                            <div class="target_text_hp">
                                                ソーラーパネル
                                            </div>
                                            <div class="target_info_hp">
                                               太陽光洗浄はDroneで行うのが一番手軽で、安価です。年に2回の洗浄で、発電効率を100%近くまでUPします。  
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="target_img_hp">
                                	<a href="#"><img src="images/target_img6.png" alt="" /></a>
                                </div>
                            </div> 
                        </div>                                               
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>            
            <div class="clearfix"></div>
        </div>
        <div class="price_block_hp">             
            <div class="container container_wash">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 price_block_in_hp">                     	
                        <div class="price_middle_hp">
                            <div class="price_top_hp">
                                <div class="price_left_hp">
                                    <div class="price_toppart_hp">
                                    	<div class="target_title_hp">
                                            対象建造物
                                        </div>
                                        <div class="price_title_hp">
                                            洗浄・価格 
                                        </div>
                                        <div class="price_info_hp">
                                            Droneを使用した高圧洗浄サービスの料金は、対象物の状態、大きさ、場所、作業時間などによって異なります。弊社では、洗浄対象物の現地調査を行い、最適な洗浄方法と作業時間を評価した上で、お見積もりを提供しております。 <br/>
                                            一般的に、Droneを使用した高圧洗浄サービスは、手作業に比べて作業効率が高いため、比較的低価格で提供することができます。しかし、作業場所のアクセスが困難な場合や、対象物の形状が複雑な場合は、洗浄作業により多くの時間がかかることがあります。
                                        </div> 
                                        <div class="price_about_hp">
                                            弊社では、お客様のご要望や予算に合わせた、柔軟な料金設定を行っております。 お見積もりや詳しい料金については、価格表をご参照ください。 
                                        </div>
                                    </div>
                                    <div class="price_bottompart_hp">
                                        <div class="price_box_hp">
                                            <div class="price_boxtitle_hp">
                                                コスト計算
                                            </div>
                                            <div class="price_boxinfo_hp">
                                                <div class="price_grid_hp">
                                                    1,000m  あたりの表面積 コスト
                                                </div>
                                                <div class="price_text_hp">
                                                	Save to 
                                                </div>
                                                <div class="price_input_hp">
                                                	<div class="price_input_top_hp">
                                                        <div class="price_input_info_hp">
                                                            足場
                                                        </div>
                                                        <div class="price_input_in_hp">
                                                            <div class="price_input_btn_hp">
                                                                600,000
                                                            </div>
                                                            <div class="price_input_text_hp">
                                                                円
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="price_input_top_hp">
                                                        <div class="price_input_info_hp">
                                                            時間 
                                                        </div>
                                                        <div class="price_input_in_hp">
                                                            <div class="price_input_btn_hp">
                                                                1/5
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="price_right_hp">
                                    <a href="#"><img src="images/price_img.png" alt="" /></a>
                            	</div>      
                            </div>                                        
                        <div class="clearfix"></div>
                    	</div>
                	</div>
                </div>
            </div>            
            <div class="clearfix"></div>
        </div>
        
        <div class="overview_block_hp">             
            <div class="container container_wash">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 overview_block_in_hp">                     	
                        <div class="overview_middle_hp">
                            <div class="overview_boxes_hp">
                            	<div class="overview_box_hp">
                                	<div class="overview_title_hp">
                                    	サービスの概要
                                    </div>
                                    <div class="overview_info_hp">
                                    	当社は、Droneを使用した高層建築物や難易度の高い場所にある壁や屋根の洗浄サービスは、特許利用でご提供しています。当社のサービスは、手作業に比べて効率的で、安全性を向上させます。 
                                    </div>
                                </div>
                                <div class="overview_box_hp">
                                	<div class="overview_title_hp">
                                    	洗浄方法
                                    </div>
                                    <div class="overview_info_hp">
                                    	当社のDrone洗浄サービスは、高圧洗浄機を搭載したDroneを使用して、高所にある壁や屋根を洗浄します。この方法により、手作業での洗浄よりも効率的に汚れを落とすことができます。 
                                    </div>
                                </div>
                                <div class="overview_box_hp">
                                	<div class="overview_title_hp">
                                    	対応建築物の種類
                                    </div>
                                    <div class="overview_info_hp">
                                    	当社のDrone洗浄サービスは、高層建築物や難易度の高い場所にある様々な種類の建物に対応しています。また、機体の状態や使用状況に応じて、カスタマイズされた洗浄方法を提供しています。  
                                    </div>
                                </div>      
                            </div>                                        
                        <div class="clearfix"></div>
                    	</div>
                	</div>
                </div>
            </div>            
            <div class="clearfix"></div>
        </div>
        <div class="drone_block_hp">             
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 drone_block_in_hp">                     	
                        <div class="drone_middle_hp">
                        	<div class="drone_top_hp">                      	                            
                            	<div class="drone_img_hp">
                                	<img src="images/drone_banner.png" alt="" />                                    
                                </div>
                                <div class="drone_grid_hp" id="drone_grid2">
                                	<div class="drone_grid_width_hp">
                                        <div class="drone_grid_info_hp">
                                            当社は、Droneを使用した高層建築物や難易度の高い場所にある壁や屋根の洗浄サービスは、<br/>特許利用でご提供しています。当社のサービスは、手作業に比べて効率的で、安全性を向上させます。 
                                        </div>
                                        <div class="drone_box_hp">
                                            <div class="drone_box_title_hp">
                                                農業ドローン
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
        <div class="strengths_block_hp">             
            <div class="container container_wash">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 strengths_block_in_hp">                     	
                        <div class="strengths_middle_hp">
                        	<div class="strengths_top_hp">
                            	<div class="strengths_left_hp">
                                	<div class="strengths_title_hp">
                                    	サービスの特徴・強み
                                    </div>
                                    <div class="strengths_grid_hp">
                                    	<div class="strengths_row_hp">
                                            <div class="strengths_digit_hp">1</div>
                                            <div class="strengths_info_hp">
                                                <h4>農地の詳細な地図作成と収量予測</h4>
                                                <p>空撮により、農地の詳細な地図を作成し、収量予測に役立てます。これにより、作物の育成状況や収穫時期などを正確に把握し、 <br /> 効率的な農作業が可能となります。</p>
                                            </div>
                                    	</div>
                                        <div class="strengths_row_hp">
                                            <div class="strengths_digit_hp">2</div>
                                            <div class="strengths_info_hp">
                                                <h4>技術力の高さ</h4>
                                                <p>高精度な散布・噴霧散布・噴霧作業は、高い精度で施肥や農薬を散布することができます。これにより、施肥・農薬の効率化や、 <br />農薬の使用量の削減が可能となります。農業における知識や経験を持ち合わせていることが求められます。</p>
                                            </div>
                                    	</div>
                                        <div class="strengths_row_hp">
                                            <div class="strengths_digit_hp">3</div>
                                            <div class="strengths_info_hp">
                                                <h4>安全性の確保</h4>
                                                <p>Droneによる農作業は、人手による作業に比べて安全性が高いと言われています。 <br /> 高所での作業や、複雑な地形の作業など、人手による作業では危険な場所でも、Droneによる作業なら安全に行うことができます。</p>
                                            </div>
                                    	</div>
                                        <div class="strengths_row_hp">
                                            <div class="strengths_digit_hp">4</div>
                                            <div class="strengths_info_hp">
                                                <h4>自然回帰。環境にやさしい薬剤</h4>
                                                <p>自然に優しく、近隣に迷惑のかからない環境にやさしい農薬・肥料を散布。</p>
                                            </div>
                                    	</div>
                                        <div class="strengths_row_hp">
                                            <div class="strengths_digit_hp">5</div>
                                            <div class="strengths_info_hp">
                                                <h4>顧客サポートの質の高さ</h4>
                                                <p>Drone自体の技術的な問題や農作物に関する専門的な知識が必要とされるため、顧客からのサポート要請が多いことがあります。 <br />当社では丁寧かつ迅速な顧客サポートを提供いたします。</p>
                                            </div>
                                    	</div>
                                    </div>
                                </div>
                                <div class="strengths_right_hp">
                                	<a href="#"><img src="images/strengths_img1.png" alt=""/></a>
                                </div>
                            </div>
                        </div>                                               
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>            
            <div class="clearfix"></div>
        </div>
        <div class="golf_block_hp">             
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 golf_block_in_hp">                     	
                        <div class="golf_middle_hp">
                        	<div class="golf_top_hp">
                            	<div class="golf_box_hp">
                                	<div class="golf_left_hp">
                                    	<div class="golf_grid_hp">
                                            <div class="golf_digit_hp">01</div>
                                            <div class="strengths_title_hp">
                                                ゴルフ場
                                            </div>	
                                            <div class="golf_info_hp">
                                                「最新技術 x 当サービスオリジナルマッピング技術のDroneによる肥料・農薬散布。」 自然回帰の安全な農薬を散布いたします。実績は、是非ゴル場のお客さまの <br /> ベネフィットとしてご利用ください。                                            
                                            </div>
                                            <div class="golf_title_hp">
                                                サービス料金
                                            </div>
                                            <div class="golf_subinfo_hp">
                                                ご相談時にご納得いただける料金をご提案させていただきます。
                                            </div>
                                    	</div>
                                    </div>
                                    <div class="golf_right_hp">
                                    	<a href="#"><img src="images/golf_img1.png" alt=""/></a>
                                    </div>
                                </div>
                                <div class="golf_box_hp golf_revrse_hp">
                                	<div class="golf_left_hp">
                                    	<div class="golf_grid_hp">
                                            <div class="golf_digit_hp">02</div>
                                            <div class="strengths_title_hp">
                                                森林農薬散布
                                            </div>	
                                            <div class="strengths_grid_hp">
                                                <div class="strengths_row_hp">
                                                    <div class="strengths_digit_hp">1</div>
                                                    <div class="strengths_info_hp">
                                                        <h4>風や樹木の影響をクリア</h4>
                                                        <p>
                                                            森林内は風が強く、風向きや風速が変化しやすいため、散布剤の飛散が予測しにくい状況が発生することがあります。 <br /> 
                                                            また、樹木の影響によって、散布剤が届かない箇所が発生する可能性があります。 <br /> 
                                                            が心配無料。安全かつ、正確に散布を実施いたします。 
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="strengths_row_hp">
                                                    <div class="strengths_digit_hp">2</div>
                                                    <div class="strengths_info_hp">
                                                        <h4>難易度の高い操作</h4>
                                                        <p>
                                                            森林内で運用するには、高度な操縦技術が必要となります。 <br />
                                                            加えて、森林内の複雑な地形に対応するため、高度なセンシング技術が必要となります。 <br />
                                                            私たちは、一般免許以上の高い技術を有しております。
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="strengths_row_hp">
                                                    <div class="strengths_digit_hp">3</div>
                                                    <div class="strengths_info_hp">
                                                        <h4>環境保全への配慮</h4>
                                                        <p>
                                                            森林内において、生物多様性の維持や地下水の保護といった環境保全への配慮が必要となります。<br />
                                                            農薬散布による環境負荷や健康被害を抑えるための対策が求められます。 <br />
                                                            そのため、私たちの使用する農薬は、自然回帰の薬剤を散布いたします。
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>                                        
                                            <div class="golf_title_hp">
                                                価格
                                            </div>
                                            <div class="golf_subinfo_hp">
                                                面積に応じます。 <br /> ご相談時にご納得いただける料金をご提案させていただきます。
                                            </div>
                                    	</div>
                                    </div>
                                    <div class="golf_right_hp">
                                    	<a href="#"><img src="images/golf_img2.png" alt=""/></a>
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
        <div class="flow_block_hp">             
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 flow_block_in_hp">                     	
                        <div class="flow_middle_hp">
                        	<div class="flow_title_hp">
                            	サービス<span>フロー</span>
                            </div>	
                            <div class="flow_top_hp">
                            	<div class="flow_box_hp">
                                	<div class="flow_left_hp">
                                    	<a href="#"><img src="images/flow_img1.png" alt=""/></a>
                                    </div>
                                    <div class="flow_right_hp">
                                    	<div class="flow_row_hp">
                                        	<div class="flow_digit_hp">01</div>
                                            <div class="flow_subtitle_hp">
                                            	お問い合わせ
                                            </div>                                            
                                        </div>
                                        <div class="flow_info_hp">
                                        	お問い合わせフォームやメール、電話などで、サービスの依頼をします。ここで、希望する内容、日程、予算などの情報を提供します。
                                        </div>
                                    </div>
                                </div>
                                <div class="flow_box_hp">
                                	<div class="flow_left_hp">
                                    	<a href="#"><img src="images/flow_img2.png" alt=""/></a>
                                    </div>
                                    <div class="flow_right_hp">
                                    	<div class="flow_row_hp">
                                        	<div class="flow_digit_hp">02</div>
                                            <div class="flow_subtitle_hp">
                                            	現地調査
                                            </div>                                            
                                        </div>
                                        <div class="flow_info_hp">
                                        	ヒアリング内容に基づいて、現場調査をさせていただきます。 <br />
											行政への申告が必要なケース、近隣にご挨拶が必要なケースにも備えます。 <br />
											現場調査のデータをもとに、作業遂行のためのフィードバックをさせていただきます。
                                        </div>
                                    </div>
                                </div>
                                <div class="flow_box_hp">
                                	<div class="flow_left_hp">
                                    	<a href="#"><img src="images/flow_img3.png" alt=""/></a>
                                    </div>
                                    <div class="flow_right_hp">
                                    	<div class="flow_row_hp">
                                        	<div class="flow_digit_hp">03</div>
                                            <div class="flow_subtitle_hp">
                                            	作業遂行
                                            </div>                                            
                                        </div>
                                        <div class="flow_info_hp">
                                        	作業実施と、完了後のレポーティングを行います。
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
        
        <div class="staff_block_hp">             
            <div class="container container_wash">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 staff_block_in_hp"> 
                    	<div class="common_title_hp common_align_hp" id="staff"> 
                        	<h2><span>Staff</span>紹介</h2>
                        </div>                   	
                        <div class="staff_middle_hp">                        		
                         	<div class="staff_top_hp"> 
                            	<div class="staff_box_hp">
                                	<a href="#">
                                    	<div class="staff_img_hp">
                                        	<img src="images/staff_img1.png" alt=""/>
                                        </div>
                                        <div class="staff_name_hp">
                                        	名前テキスト
                                        </div>
                                        <div class="staff_qualification_hp">
                                        	資格テキスト
                                        </div>
                                    </a>
                                </div>
                                <div class="staff_box_hp">
                                	<a href="#">
                                    	<div class="staff_img_hp">
                                        	<img src="images/staff_img2.png" alt=""/>
                                        </div>
                                        <div class="staff_name_hp">
                                        	名前テキスト
                                        </div>
                                        <div class="staff_qualification_hp">
                                        	資格テキスト
                                        </div>
                                    </a>
                                </div>
                                <div class="staff_box_hp">
                                	<a href="#">
                                    	<div class="staff_img_hp">
                                        	<img src="images/staff_img3.png" alt=""/>
                                        </div>
                                        <div class="staff_name_hp">
                                        	名前テキスト
                                        </div>
                                        <div class="staff_qualification_hp">
                                        	資格テキスト
                                        </div>
                                    </a>
                                </div>
                                <div class="staff_box_hp">
                                	<a href="#">
                                    	<div class="staff_img_hp">
                                        	<img src="images/staff_img4.png" alt=""/>
                                        </div>
                                        <div class="staff_name_hp">
                                        	名前テキスト
                                        </div>
                                        <div class="staff_qualification_hp">
                                        	資格テキスト
                                        </div>
                                    </a>
                                </div>
                                <div class="staff_box_hp">
                                	<a href="#">
                                    	<div class="staff_img_hp">
                                        	<img src="images/staff_img5.png" alt=""/>
                                        </div>
                                        <div class="staff_name_hp">
                                        	名前テキスト
                                        </div>
                                        <div class="staff_qualification_hp">
                                        	資格テキスト
                                        </div>
                                    </a>
                                </div>
                                <div class="staff_box_hp">
                                	<a href="#">
                                    	<div class="staff_img_hp">
                                        	<img src="images/staff_img6.png" alt=""/>
                                        </div>
                                        <div class="staff_name_hp">
                                        	名前テキスト
                                        </div>
                                        <div class="staff_qualification_hp">
                                        	資格テキスト
                                        </div>
                                    </a>
                                </div>
                                <div class="staff_box_hp">
                                	<a href="#">
                                    	<div class="staff_img_hp">
                                        	<img src="images/staff_img7.png" alt=""/>
                                        </div>
                                        <div class="staff_name_hp">
                                        	名前テキスト
                                        </div>
                                        <div class="staff_qualification_hp">
                                        	資格テキスト
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
            
        <div class="inquiry_block_hp">             
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 inquiry_block_in_hp">                     	
                        <div class="inquiry_middle_hp"> 
                        	<div class="inquiry_title_hp" id="inquiry">
                            	お問い合わせ
                            </div>        
                            <form action="" method="post" enctype="multipart/form-data" id="contact_form">
                            <div class="inquiry_top_hp">               	
                                <div class="contact-form-cop">                                                                    
                                	<div class="form-field-cop field-top-cop">
                                        <div class="form-field-lable-cop">サービスの種類を選択</div>
                                        <div class="form-field-input-cop">
                                            <div class="form-list-cop">                                        	
                                                <div class="form-list-select-cop">
                                                    <select class="custom-select" name="field1">
                                                        <option value="">—以下から選択してください—</option>
                                                        <option value="選択1">選択1</option>
                                                        <option value="選択2">選択2</option>
                                                    </select>
                                                </div>                                 
                                            </div>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="form-field-cop field-top-cop">
                                        <div class="form-field-lable-cop">お問い合わせ種類を選択</div>
                                        <div class="form-field-input-cop">
                                            <div class="form-list-cop">                                        	
                                                <div class="form-list-select-cop">
                                                    <select class="custom-select" name="field2">
                                                        <option value="">—以下から選択してください—</option>
                                                        <option value="選択1">選択1</option>
                                                        <option value="選択2">選択2</option>
                                                    </select>
                                                </div>                                 
                                            </div>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="form-field-cop field-top-cop">
                                        <div class="form-field-lable-cop">御社名<span>(必須)</span></div>
                                        <div class="form-field-input-cop">
                                            <input type="text" placeholder="会社名" name="field3" required>                                        
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="form-field-cop field-top-cop">
                                        <div class="form-field-lable-cop">部署名</div>
                                        <div class="form-field-input-cop">
                                            <input type="text" placeholder="部署名" name="field4">                                        
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="form-field-cop field-top-cop">
                                        <div class="form-field-lable-cop">URL</div>
                                        <div class="form-field-input-cop">
                                            <input type="text" placeholder="URL" name="field5">                                        
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>                                    
                                    <div class="form-field-cop">
                                        <div class="form-field-lable-cop">お名前 <span>(必須) </span></div> 
                                        <div class="form-field-input-cop form-field-input-2-cop">                                                                                                                         
                                            <div class="form-field-input-cop form_field_input_width_dp"><input type="text" placeholder="姓" name="field6_1" required></div>
                                            <div class="form-field-input-cop form_field_input_width_dp"><input type="text" placeholder="名" name="field6_2" required></div>                                           
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="form-field-cop field-top-cop">
                                        <div class="form-field-lable-cop">メールアドレス <span>(必須)</span></div>
                                        <div class="form-field-input-cop">
                                            <input id="input_mail" type="email" placeholder="example@xxx.co.jp" name="field7" required>                                        
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="form-field-cop field-top-cop">
                                        <div class="form-field-lable-cop">メールアドレス確認 <span>(必須)</span></div>
                                        <div class="form-field-input-cop">
                                            <input id="input_confirm_mail" type="email" placeholder="確認のためもう一度入力してください" required>                                        
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="form-field-cop field-top-cop">
                                        <div class="form-field-lable-cop">ご連絡のつきやすい電話番号 <span>(必須)</span></div>
                                        <div class="form-field-input-cop">
                                            <input type="text" placeholder="000-0000-0000" name="field8" required>                                        
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>                                                                              
                                    <div class="form-field-cop field-top-cop">
                                        <div class="form-field-lable-cop">連絡のつきやすいお時間帯(第一希望)</div>                                    
                                            <div class="form-field-input-cop inquiry_border_hp">
                                           		<div class="form_field_add_info_dp">
                                                   ご希望日時
                                                </div>
                                                <div class="form-field-input-cop inquiry_svg_hp">
                                                    <div class="form-list-cop">                                        	
                                                        <div class="form-list-select-cop inquiry_width_hp">
                                                            <input type="text" class="datepicker" value="" placeholder="mm/dd/yy" name="field9_1"></input>
                                                        </div>                                 
                                                    </div>
                                                </div>
                                                <div class="form_field_add_info_dp">
                                                   ご希望時間帯
                                                </div>
                                                <div class="form-field-input-cop inquiry_flex_hp">                                                	
                                                    <div class="form_field_name_main_dp">                                                                                            
                                                        <div class="form-list-cop">                                        	
                                                            <div class="form-list-select-cop inquiry_width1_hp">
                                                                <select class="custom-select" name="field9_2">
                                                                    <option value="">—以下から選択してください—</option>
                                                                    <option value="選択1">選択1</option>
                                                                    <option value="選択2">選択2</option>
                                                                </select>
                                                            </div>                                 
                                                        </div>
                                                        <div class="form_field_name_dp">から</div> 
                                                    </div>
                                                    <div class="form_field_name_main_dp">                                                                                            
                                                        <div class="form-list-cop">                                        	
                                                            <div class="form-list-select-cop inquiry_width1_hp">
                                                                <select class="custom-select" name="field9_3">
                                                                    <option value="">—以下から選択してください—</option>
                                                                    <option value="選択1">選択1</option>
                                                                    <option value="選択2">選択2</option>
                                                                </select>
                                                            </div>                                 
                                                        </div>
                                                        <div class="form_field_name_dp">の間</div> 
                                                    </div>
                                                </div>                                                 
                                            </div>                                        
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="form-field-cop field-top-cop">
                                        <div class="form-field-lable-cop">連絡のつきやすいお時間帯(第二希望)</div>                                    
                                            <div class="form-field-input-cop inquiry_border_hp">
                                           		<div class="form_field_add_info_dp">
                                                   ご希望日時
                                                </div>
                                                <div class="form-field-input-cop inquiry_svg_hp">
                                                    <div class="form-list-cop">                                        	
                                                        <div class="form-list-select-cop inquiry_width_hp">
                                                            <input type="text" class="datepicker" value="" placeholder="mm/dd/yy" name="field10_1"></input>
                                                        </div>                                 
                                                    </div>
                                                </div>
                                                <div class="form_field_add_info_dp">
                                                   ご希望時間帯
                                                </div>
                                                <div class="form-field-input-cop inquiry_flex_hp">
                                                    <div class="form_field_name_main_dp">                                                                                            
                                                        <div class="form-list-cop">                                        	
                                                            <div class="form-list-select-cop inquiry_width1_hp">
                                                                <select class="custom-select" name="field10_2">
                                                                    <option value="">—以下から選択してください—</option>
                                                                    <option value="選択1">選択1</option>
                                                                    <option value="選択2">選択2</option>
                                                                </select>
                                                            </div>                                 
                                                        </div>
                                                        <div class="form_field_name_dp">から</div> 
                                                    </div>
                                                    <div class="form_field_name_main_dp">                                                                                            
                                                        <div class="form-list-cop">                                        	
                                                            <div class="form-list-select-cop inquiry_width1_hp">
                                                                <select class="custom-select" name="field10_3">
                                                                    <option value="">—以下から選択してください—</option>
                                                                    <option value="選択1">選択1</option>
                                                                    <option value="選択2">選択2</option>
                                                                </select>
                                                            </div>                                 
                                                        </div>
                                                        <div class="form_field_name_dp">の間</div> 
                                                    </div>
                                                </div>
                                            </div>                                        
                                        <div class="clearfix"></div>
                                    </div>                
                                    <div class="form-field-cop field-top-cop">
                                        <div class="form-field-lable-cop">お問い合わせ内容</div>
                                        <div class="form-field-input-cop">
                                            <textarea placeholder="" name="field11"></textarea>                                        
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>  
                                    <div class="form-field-radio-main-cp form-field-radio-main-alone-cp">
                                        <div class="form-field-radio-cp">
                                            <label class="radio-container-cp"><span><a target="_blank" href="./privacypolish.html">プライバシーポリシー </a></span>をよくお読みの上、問題なければチェックしてください
                                                <input type="checkbox" required>
                                                <span class="checkmark-cp"></span>
                                            </label>
                                        </div>
                                    </div>                                                                                                                              
                                </div>
                                <div class="inquiry_btn_hp">
                                    <input type="hidden" name="submit-confirm" value="submit-confirm">
                                    <button type="submit">確認</button>
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
<!-- FOOTER_START -->
	<footer id="footer" data-aos="fade-up">
    	<!--<div class="back-to-top" id="gototop">
        	<a href="javascript:void(0)"><img src="images/back_to_top.svg" alt="" /></a>
        </div>-->    	
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 footer_in_hp">
                    <div class="footer_middle_hp">
                    	<div class="footer_top_hp">
                        	<div class="footer_icon_hp">
                            	<a href="#"><img src="images/youtube_icon_footer.svg" alt=""/></a>
                            </div>	    
                            <div class="footer_icon_hp">
                            	<a href="#"><img src="images/insta_icon_footer.svg" alt=""/></a>
                            </div>	                                      
                        </div>  
                        <div class="footer_copyright_hp">© DroneDeploy - all rights reserved</div>  
                        <div class="clearfix"></div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>        
        <div class="clearfix"></div>
    </footer>
<!-- FOOTER_END -->

</div>

<script src="js/jquery-3.5.1.slim.min.js" type="text/javascript"></script>
<script src="js/popper.min.js" type="text/javascript"></script>
<script src="js/bootstrap.min.js" type="text/javascript"></script>
<script src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/jquery-ui.js"></script>
<script type="text/javascript" src="js/datepicker-ja.js"></script>
<script src="js/custom.js"></script>
</body>
</html>