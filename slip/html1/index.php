
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
<link href="https://fonts.googleapis.com/css2?family=Noto+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet"><link href="css/owl.carousel.css" rel="stylesheet">
<link href="css/owl.theme.default.css" rel="stylesheet">
<link href="css/stylesheet.css" rel="stylesheet" type="text/css">
<link href="css/responsive.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="https://use.typekit.net/sqv2kle.css">
<script>
  (function(d) {
    var config = {
      kitId: 'nzt8uel',
      scriptTimeout: 3000,
      async: true
    },
    h=d.documentElement,t=setTimeout(function(){h.className=h.className.replace(/\bwf-loading\b/g,"")+" wf-inactive";},config.scriptTimeout),tk=d.createElement("script"),f=false,s=d.getElementsByTagName("script")[0],a;h.className+=" wf-loading";tk.src='https://use.typekit.net/'+config.kitId+'.js';tk.async=true;tk.onload=tk.onreadystatechange=function(){a=this.readyState;if(f||a&&a!="complete"&&a!="loaded")return;f=true;clearTimeout(t);try{Typekit.load(config)}catch(e){}};s.parentNode.insertBefore(tk,s)
  })(document);
</script>
<script>
  (function(d) {
    var config = {
      kitId: 'aqf4oja',
      scriptTimeout: 3000,
      async: true
    },
    h=d.documentElement,t=setTimeout(function(){h.className=h.className.replace(/\bwf-loading\b/g,"")+" wf-inactive";},config.scriptTimeout),tk=d.createElement("script"),f=false,s=d.getElementsByTagName("script")[0],a;h.className+=" wf-loading";tk.src='https://use.typekit.net/'+config.kitId+'.js';tk.async=true;tk.onload=tk.onreadystatechange=function(){a=this.readyState;if(f||a&&a!="complete"&&a!="loaded")return;f=true;clearTimeout(t);try{Typekit.load(config)}catch(e){}};s.parentNode.insertBefore(tk,s)
  })(document);
</script>
<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
</head>
<?php
if(isset($_POST['submit-confirm']) && ($_POST['submit-confirm'] == 'submit-confirm')) {

    $field1 = isset($_POST['field1']) ? $_POST['field1']: '';
    $field2 = isset($_POST['field2']) ? $_POST['field2']: '';
    $field3 = isset($_POST['field3']) ? $_POST['field3']: '';
    $field4 = isset($_POST['field4']) ? $_POST['field4']: '';
    $field5 = isset($_POST['field5']) ? $_POST['field5']: '';
    $field6 = isset($_POST['field6']) ? $_POST['field6']: '';
    
    $to      = 'koide3019@yahoo.com';

    $message = "
    氏名 : ".$field1."<br>
    メールアドレス : ".$field2."<br>
    電話番号 : ".$field3."<br>
    利用希望日数 : ".$field4."<br>
    お問い合わせ内容 : ".$field5."<br>
    お問い合わせ詳細 : <br>".$field6."<br>
    ";

    $subject = 'お問い合わせがありました';

    $headers = "From: " . $field2 . "\r\n";
    $headers .= "Reply-To: " . $field2 . "\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=UTF-8\r\n";

    if(mail($to, $subject, $message, $headers)) {
        echo '<script>alert("Success!"); location.href="'.home_url().'"</script>';
    } else {
        echo '<script>alert("Failed!"); location.href="'.home_url().'"</script>';
    }  
}
?>
<body>
<div class="wrapper">
<!-- HEADER_START -->
	<header id="header">
        <div class="header-hp">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-12 header-in-hp">
                    	<div class="header-left-hp">
                        	<div class="header_left_info_hp">
                            	記念撮影システム
                            </div>
                            <div class="logo-hp">
                            	<a href="#top"><img src="images/logo.svg" alt="" /></a>
                            </div>
                            <div class="clearfix"></div>
                        </div>                        
                        <div class="header-right-hp">
                        	<div class="mobile-menu-hp">
                                <a href="javascript:void(0)">
                                    <div class="menu-toggle-btn-hp">
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                    </div>
                                </a>
                            </div>              
                            <div class="navigation-hp">
                                <nav class="navbar navbar-expand-lg navbar-light">
                                    <div class="collapse navbar-collapse navigation-main-hp" id="navbarSupportedContent">
                                        <ul class="navbar-nav ml-auto">
                                            <li><a href="#service">サービスの特徴</a></li>                                            
                                            <li><a href="#servicemerito">サービスのメリット</a></li>
                                            <li><a href="#price">利用方法と料金</a></li>
                                            <li><a href="#service_option">オプション</a></li>
                                            <li><a href="#example">利用例</a></li>
                                            <li><a class="header_btn_hp" href="#contact">お問い合わせ</a></li>
                                        </ul>
                                    </div>
                                </nav>
                                <div class="clearfix"></div>    
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
            <div class="container-fluid" id="top">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 banner_block_in_hp">                    	
                        <div class="banner_middle_hp"> 
                    		<div class="banner_top_hp">
                            	<div class="banner_left_hp">
                                	<div class="banner_left_img_hp">
                                    	<img src="images/slip_img.svg" alt="" />
                                    </div>
                                	<div class="banner_left_img1_hp">
                                    	<img src="images/banner_img1.svg" alt="" />
                                    </div>
                                    <div class="banner_left_img2_hp">
                                    	<img src="images/banner_img2.svg" alt="" />
                                    </div>
                                    <div class="banner_left_img3_hp">
                                    	<img src="images/banner_img3.svg" alt="" />
                                    </div>
                                    <div class="banner_left_img4_hp">
                                    	<img src="images/banner_img4.svg" alt="" />
                                    </div>
                                </div>
                                <div class="banner_img_middle_hp">
                                	<div class="banner_title_hp">
                                    	<span>自由に合成</span>、<strong>手軽に撮影</strong><br/>
                                        グリーンバックで迫力の<br>
                                        記念写真をダウンロード！
                                    </div>
                                	<div class="banner_img_hp">
                                    	<img src="images/friends.svg" alt="" />
                                    </div>
                                 </div>
                            	<div class="banner_right_hp">
                                	<div class="banner_right_img_hp">
                                    	<img src="images/slip_img.svg" alt="" />
                                    </div>
                                	<div class="banner_right_img1_hp">
                                    	<img src="images/banner_img5.svg" alt="" />
                                    </div>
                                    <div class="banner_right_img2_hp">
                                    	<img src="images/banner_img6.svg" alt="" />
                                    </div>
                                    <div class="banner_right_img3_hp">
                                    	<img src="images/banner_img7.svg" alt="" />
                                    </div>
                                    <div class="banner_right_img4_hp">
                                    	<img src="images/banner_img8.svg" alt="" />
                                    </div>
                                    <div class="banner_right_img5_hp">
                                    	<img src="images/banner_img9.svg" alt="" />
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
        <div class="easy_block_hp">             
            <div class="container">
                <div class="id_line" id="service"></div>
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 easy_block_in_hp">  
                    	<div class="common_title_hp">
                        	<img src="images/box_icon.svg" alt="" />
                            <h2>サービスの特徴</h2>
                        </div>                  	
                        <div class="easy_middle_hp"> 
                        	<div class="easy_boxes_hp">
                            	<div class="easy_box_hp">
                                	<a href="#">
                                        <div class="easy_box_in_hp">
                                            <div class="easy_box_img_hp">
                                                <img src="images/easy_img1.svg" alt="" />
                                            </div>
                                            <div class="easy_box_num_hp"> 
                                                <div class="easy_box_num_in_hp">
                                                    01
                                                </div>
                                            </div>
                                        </div>	    
                                        <div class="easy_box_info_hp">
                                            <h3>かんたん設置！</h3>
                                            <p>配置する撮影機材が少ないので、誰でもかんたんに設置することができます。</p>
                                        </div>
                                    </a>    
                                </div>
                                <div class="easy_box_hp">
                                	<a href="#">
                                        <div class="easy_box_in_hp">
                                            <div class="easy_box_img_hp">
                                                <img src="images/easy_img2.svg" alt="" />
                                            </div>
                                            <div class="easy_box_num_hp"> 
                                                <div class="easy_box_num_in_hp">
                                                    02
                                                </div>
                                            </div>
                                        </div>	    
                                        <div class="easy_box_info_hp">
                                            <h3>QRコードでダウンロード！</h3>
                                            <p>来訪者がQRコードから撮影画像をダウンロードして持ち帰ることができます。</p>
                                        </div>
                                    </a>
                                </div>
                                <div class="easy_box_hp">
                                	<a href="#">
                                        <div class="easy_box_in_hp">
                                            <div class="easy_box_img_hp">
                                                <img src="images/easy_img3.svg" alt="" />
                                            </div>
                                            <div class="easy_box_num_hp"> 
                                                <div class="easy_box_num_in_hp">
                                                    03
                                                </div>
                                            </div>
                                        </div>	    
                                        <div class="easy_box_info_hp">
                                            <h3>合成位置は変更可能！</h3>
                                            <p>グリーンバックで合成するときの、背景画像に対する比率や配置を自由に変えられます。</p>
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
                <div class="id_line" id="servicemerito"></div>
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 service_block_in_hp">  
                    	<div class="common_title_hp">
                        	<img src="images/box_icon.svg" alt="" />
                            <h2>サービスのメリット</h2>
                        </div>                  	
                        <div class="service_middle_hp"> 
                        	<div class="service_boxes_hp">
                            	<div class="service_box_hp">
                                	<a href="#">
                                        <div class="service_box_in_hp">
                                            <div class="service_box_img_hp">
                                                <img src="images/service_img1.svg" alt="" />
                                            </div>
                                            <div class="service_box_num_hp"> 
                                                <div class="service_box_num_in_hp">
                                                	<div class="service_box_text_hp">
                                                    	Merit
                                                    </div>
                                                    <div class="service_box_digit_hp">
                                                    	01
                                                    </div>
                                                </div>
                                            </div>
                                        </div>	    
                                        <div class="service_box_info_hp">
                                        	そこにしかないオリジナル背景画像を合成して、<br/>記念写真を作れます。
                                        </div>
                                    </a>    
                                </div>
                                <div class="service_box_hp">
                                	<a href="#">
                                        <div class="service_box_in_hp">
                                            <div class="service_box_img_hp">
                                                <img src="images/service_img2.svg" alt="" />
                                            </div>
                                            <div class="service_box_num_hp"> 
                                                <div class="service_box_num_in_hp">
                                                	<div class="service_box_text_hp">
                                                    	Merit
                                                    </div>
                                                    <div class="service_box_digit_hp">
                                                    	02
                                                    </div>
                                                </div>
                                            </div>
                                        </div>	    
                                        <div class="service_box_info_hp">
                                        	撮影は完全自動！カメラマンは不要です。
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
        <div class="usage_block_hp">             
            <div class="container">
                <div class="id_line" id="price"></div>
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 usage_block_in_hp">  
                    	<div class="common_title_hp">
                        	<img src="images/box_icon.svg" alt="" />
                            <h2>サービスの利用方法と料金</h2>
                        </div>                  	
                        <div class="usage_middle_hp"> 
                        	<div class="usage_top_hp"> 
                            	<a href="#">
                                    <div class="usage_box_hp">
                                    	<div class="usage_box_text_hp">
                                       		弊社への申し込みが必要
                                        </div>
                                    </div>
                                    <div class="usage_box_hp">
                                    	<div class="usage_box_text_hp">
                                        	初期費用なし！
                                        </div>
                                    </div>                
                                    <div class="usage_box_hp">
                                    	<div class="usage_box_text_hp">
                                        	利用日のみの換算 <br/><span>（輸送日は含まず）</span>
                                        </div>
                                    </div>
                                </a>	                            	
                            </div>
                            <div class="usage_bottom_hp">
                            	<div class="usage_title_hp">
                                	利用料金プラン
                                </div> 
                            	<div class="usage_bottom_main_hp">
                                	<div class="usage_boxes_hp">
                                    	<div class="usage_box_in_hp">
                                        	<div class="usage_box_title_hp">
                                            	1日プラン
                                            </div>
                                            <div class="usage_box_about_hp">
                                            </div>
                                            <div class="usage_box_num_hp">
                                            	50,000<span>円</span>
                                            </div>
                                            <div class="usage_box_info_hp">
                                            	2日以降 +20,000円
                                            </div>
                                        </div>
                                    </div>
                                    <div class="usage_boxes_hp usage_box_bg_hp">
                                    	<div class="usage_box_in_hp">
                                        	<div class="usage_box_title_hp usage_change_hp">
                                            	月額プラン
                                            </div>
                                            <div class="usage_box_about_hp">
                                            </div>
                                            <div class="usage_box_num_hp">
                                            	150,000<span>円</span>
                                            </div>
                                            <div class="usage_box_info_hp">
                                            </div>
                                            <div class="usage_text_hp">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="usage_boxes_hp">
                                    	<div class="usage_box_in_hp">
                                        	<div class="usage_box_title_hp">
                                            		イベントプラン
                                            </div>
                                            <div class="usage_box_about_hp">
                                            	1日利用のプラン
                                            </div>
                                            <div class="usage_box_num_hp">
                                            	50,000<span>円</span>
                                            </div>
                                            <div class="usage_box_info_hp">
                                            		オペレーター2名
                                            </div>
                                            <div class="usage_text_hp">
                                            	交通費は別途お見積り
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
        <div class="optional_block_hp">             
            <div class="container">
                <div class="id_line" id="service_option"></div>
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 optional_block_in_hp">                    	
                        <div class="optional_middle_hp"> 
                        	<div class="common_title_hp">
                                <img src="images/box_icon.svg" alt="" />
                                <h2>オプションサービス</h2>
                            </div> 	
                            <div class="optional_boxes_hp">      
                            	<div class="optional_box_hp">                                	
                                    <div class="optional_box_in_hp">                                        
                                    	<div class="optional_title_hp">
                                        オペレーターオプション
                                    </div>
                                        <div class="optional_img_hp">
                                            <img src="images/optional_img1.svg" alt="" />
                                        </div>
                                        <div class="optional_info_hp">
                                            設置や当日のサポートまで、<br/>完全にお任せいただけます。
                                        </div>
                                        <div class="optional_btn_hp">
                                            <a href="#">
                                              2名、 <span>+100,000円</span>
                                            </a>
                                        </div>
                                	</div>
                                    <div class="optional_box_step_hp">         
                                    	OPtion<br/>
                                        <span>01</span>
                                    </div>
                                </div>
                                <div class="optional_box_hp">                                	
                                    <div class="optional_box_in_hp">                                        
                                    	<div class="optional_title_hp">
                                            印刷オプション
                                        </div>
                                        <div class="optional_img_hp">
                                            <img src="images/optional_img2.svg" alt="" />
                                        </div>
                                        <div class="optional_info_hp">
                                           QRコードでなく、<br/>印刷して持ち帰ることができます。
                                        </div>
                                        <div class="optional_btn_hp">
                                            <a href="#">
                                               200枚まで、<span>+20,000円</span>
                                            </a>
                                        </div>
                                	</div>
                                    <div class="optional_box_step_hp">         
                                    	OPtion<br/>
                                        <span>02</span>
                                    </div>
                                </div>
                                <div class="optional_box_hp">                                	
                                    <div class="optional_box_in_hp">                                        
                                    	<div class="optional_title_hp">
                                        缶バッジオプション
                                    </div>
                                        <div class="optional_img_hp">
                                            <img src="images/optional_img3.svg" alt="" />
                                        </div>
                                        <div class="optional_info_hp">
                                          印刷した上で、缶バッジ化ができます。<br/>お土産や記念にピッタリ！
                                        </div>
                                        <div class="optional_btn_hp optional_btn_change_hp">
                                            <a href="#contact">
                                               お問い合わせください
                                               <img src="images/arrow.svg" alt="" />
                                            </a>
                                        </div>
                                	</div>
                                    <div class="optional_box_step_hp">         
                                    	OPtion<br/>
                                        <span>03</span>
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
        <div class="example_block_hp ">             
            <div class="container">
                <div class="id_line" id="example"></div>
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 example_block_in_hp">  
                    	<div class="common_title_hp">
                        	<img src="images/box_icon.svg" alt="" />
                            <h2>サービス利用例</h2>
                        </div>                  	
                        <div class="example_middle_hp"> 
                        	<div class="example_boxes_hp">
                            	<div class="example_box_hp">
                                	<a href="#">
                                        <div class="example_box_in_hp">
                                            <div class="example_box_img_hp">
                                                <img src="images/example_img1.svg" alt="" />
                                            </div>
                                        </div>	    
                                        <div class="example_box_info_hp">
                                        	アミューズメント施設や博物館、美術館、ショールーム等での記念撮影に！
                                        </div>
                                    </a>    
                                </div>
                                <div class="example_box_hp">
                                	<a href="#">
                                        <div class="example_box_in_hp example_change_hp">
                                            <div class="example_box_img_hp">
                                                <img src="images/example_img2.svg" alt="" />
                                            </div>
                                        </div>	    
                                        <div class="example_box_info_hp">
                                        	会員カード用画像の撮影に！
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
                <div class="id_line" id="contact"></div>
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 inquiry_block_in_hp">                    	
                        <div class="inquiry_middle_hp"> 
                        	<div class="common_title_hp common_title_change_hp">
                                <img src="images/box_icon.svg" alt="" />
                                <h2>お問い合わせフォーム</h2>
                            </div> 	
                            <form action="" method="post" enctype="multipart/form-data">
                                <div class="inquiry_top_hp">
                                    <div class="contact-form-cop">                                
                                        <div class="form-field-cop">
                                            <div class="form-field-lable-cop">氏名<span>必須</span></div> 
                                            <div class="form-field-input-cop form-field-input-2-cop">
                                                <div class="form-field-input-cop"><input type="text" placeholder="プロス株式会社" name="field1" required></div>                                            
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                        <div class="form-field-cop">
                                            <div class="form-field-lable-cop">メールアドレス<span>必須</span></div> 
                                            <div class="form-field-input-cop form-field-input-2-cop">
                                                <div class="form-field-input-cop"><input type="email" placeholder="a@a.com" name="field2" required></div>                                            
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                        <div class="form-field-cop">
                                            <div class="form-field-lable-cop">電話番号<span>必須</span></div> 
                                            <div class="form-field-input-cop form-field-input-2-cop">
                                                <div class="form-field-input-cop"><input type="text" placeholder="000-000-0000" name="field3" required></div>                                            
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                        <div class="form-field-cop">
                                            <div class="form-field-lable-cop">利用希望日数<span>必須</span></div> 
                                            <div class="form-field-input-cop form-field-input-2-cop">
                                                <div class="form-field-input-cop"><input type="text" placeholder="00日" name="field4" required></div>                                            
                                            </div>
                                            <div class="clearfix"></div>
                                        </div> 
                                        <div class="form-field-cop">
                                            <div class="form-field-lable-cop">利用希望場所<span>必須</span></div> 
                                            <div class="form-field-input-cop form-field-input-2-cop">
                                                <div class="form-field-input-cop"><input type="text" placeholder="テキストがあります。" name="field5" required></div>                                            
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                        <div class="form-field-cop inquiry_border_hp">
                                            <div class="form-field-lable-cop">お問い合わせ内容<span>必須</span></div>     
                                            <div class="form-field-input-cop form-field-input-2-cop">
                                                <div class="form-field-input-cop"><textarea type="text" placeholder="テキストがあります。" name="field6" required></textarea></div>                                            
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                        <div class="inquiry_bottom_hp">
                                            <div class="inquiry_info_hp">
                                                <p>利用目的</p>
                                                <p>お問い合わせに対する回答を行うため</p>
                                            </div>
                                            <div class="inquiry_info_hp">
                                                <p>第三者への提供</p>
                                                <p>弊社は法律で定められている場合を除いて、お客様の個人情報を当該本人の同意を得ず第三者に提供することはありません。</p>
                                            </div>
                                            <div class="inquiry_info_hp">
                                                <p>個人情報の取扱い業務の委託</p>
                                                <p>弊社は事業運営上、お客様により良いサービスを提供するために業務の一部を外部に委託しており、業務委託先に対してお客様の個人情報を預けることがあります。この場合、個人情報を適切に取り扱っていると認められる委託先を選定し、契約等において個人情報の適正管理・機密保持などによりお客様の個人情報の漏洩防止に必要な事項を取決め、適切な管理を実施させます。</p>
                                            </div>
                                            <div class="inquiry_info_hp">
                                                <p>個人情報提出の任意性</p>
                                                <p>お客様が弊社に対して個人情報を提出することは任意です。ただし、個人情報を提出されない場合には、弊社からの返信やサービスを実施ができない場合がありますので、あらかじめご了承ください。</p>
                                            </div>
                                        </div>                                                                                                           
                                        <div class="form-field-radio-main-cp form-field-radio-main-alone-cp">
                                            <div class="form-field-radio-cp">
                                                <label class="radio-container-cp">個人情報取扱い同意書に同意する
                                                    <input type="checkbox" required>
                                                    <span class="checkmark-cp"></span>
                                                </label>
                                            </div>
                                        </div>                                                                                                                              
                                    </div>
                                    <div class="inquiry_btn_hp">
                                        <input type="hidden" name="submit-confirm" value="submit-confirm">
                                        <button type="submit">送  信</button>
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
    	<!--
    	<div class="back-to-top" id="gototop">
        	<a href="javascript:void(0)"><img src="images/back_to_top.svg" alt="" /></a>
        </div>    	
        -->
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 footer_in_hp">
                    <div class="footer_middle_hp">
                    	<div class="footer_top_hp">
                        	<div class="footer_logo_hp"> 
                                <img src="images/footer_logo.svg" alt=""/>
                            </div>                      
                            <div class="footer_links_hp">
                                <ul>	
                                    <li><a href="#service">サービスの特徴</a></li>
                                    <li><a href="#servicemerito">サービスのメリット</a></li>
                                    <li><a href="#price">利用方法と料金</a></li>
                                    <li><a href="#service_option">オプション</a></li>
                                    <li><a href="#example">利用例</a></li>
                                </ul>                               
                            </div>                                                  
                        </div>  
                        <div class="footer_row_hp">                      
                        	<div class="footer_copyright_hp">©SLIP in SNAP 記念撮影システム</div>                    	                        
                        </div>
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
<script src="js/jquery.min.js"></script>
<script src="js/popper.min.js" type="text/javascript"></script>
<script src="js/bootstrap.min.js" type="text/javascript"></script>
<script src="js/owl.carousel.min.js"></script>
<script>
  $(document).ready(function() {
	var owl = $('.useful_top_hp');
	owl.owlCarousel({
	  margin: 20,
	  nav: true,
	  loop: true,
	  dots: false,
	  autoWidth:true,
	  responsive: {
		0: {
		  items: 1
		},
		768: {
		  items: 3
		},
		1200: {
		  items: 4 
		}
	  }
	})
  })
</script>
<script src="js/custom.js"></script>
</body>
</html>