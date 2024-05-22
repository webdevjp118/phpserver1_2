<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="author" content="">
<link rel="icon" type="image/x-icon" href="favicon.ico">
<title>SAKAMOTO CANON</title>
<!-- Bootstrap -->
<link href="css/bootstrap.css" rel="stylesheet">
<link href="css/fontawesome_all.css" rel="stylesheet" type="text/css">
<link href="css/fonts.css" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link rel="stylesheet" href="https://use.typekit.net/hrj3xmc.css">
<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
<link href="css/owl.carousel.css" rel="stylesheet">
<link href="css/owl.theme.default.css" rel="stylesheet">
<link href="css/swiper.min.css" rel="stylesheet">
<link href="css/stylesheet.css" rel="stylesheet" type="text/css">
<link href="css/loading.css" rel="stylesheet" type="text/css">
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
    
    $to      = 'prgfinal216@gmail.com';

    $message = "
    氏名 : ".$field1."<br>
    メールアドレス : ".$field2."<br>
    関連事項 : ".$field3."<br>
    職業 : ".$field4."<br>
    メッセージ本文 : <br>".$field5."<br>
    ";

    $subject = 'お問い合わせがありました';

    $headers = "From: " . $field2 . "\r\n";
    $headers .= "Reply-To: " . $field2 . "\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=UTF-8\r\n";

    if(mail($to, $subject, $message, $headers)) {
      echo '<script>location.href="thanks.html"</script>';
    } else {
      echo '<script>location.href="thanks.html"</script>';
    }
    
    // if(mail($to, $subject, $message, $headers)) {
    //     echo '<script>alert("Success!"); location.href="'.home_url().'"</script>';
    // } else {
    //     echo '<script>alert("Failed!"); location.href="'.home_url().'"</script>';
    // }  
}
?>
<body>
<div id="site_loader_overlay"><div id="site_loader_animation"><i></i><i></i><i></i><i></i></div></div>
<div class="wrapper">
<!-- HEADER_START -->
<div class="header_device">
    <header id="header" class="">
        <div class="header_set">
            <a href="index.html" class="header_logo">
                <img class="headlogo_white" src="images/logo_geen.png">
                <img class="headlogo_green" src="images/logo_geen.png">
            </a>
            <div class="header_menu">
                <a class="headmenu_a" href="index.html#">
                    <div class="headmenu_shape">
                        <div class="headmenu_cap"><img src="images/menu_top.png"></div>
                        <div class="headmenu_uline"></div>
                    </div>
                </a>
                <a class="headmenu_a" href="index.html#anchor_profile">
                    <div class="headmenu_shape">
                        <div class="headmenu_cap"><img src="images/menu_profile.png"></div>
                        <div class="headmenu_uline"></div>
                    </div>
                </a>
                <a class="headmenu_a" href="index.html#anchor_tarot">
                    <div class="headmenu_shape">
                        <div class="headmenu_cap"><img src="images/menu_tarot.png"></div>
                        <div class="headmenu_uline"></div>
                    </div>
                </a>
                <a class="headmenu_a" href="index.html#anchor_ec">
                    <div class="headmenu_shape">
                        <div class="headmenu_cap"><img src="images/menu_ec.png"></div>
                        <div class="headmenu_uline"></div>
                    </div>
                </a>
                <a class="headmenu_a" href="contact.php">
                    <div class="headmenu_shape">
                        <div class="headmenu_cap"><img src="images/menu_contact.png"></div>
                        <div class="headmenu_uline"></div>
                    </div>
                </a>
            </div>
            <div class="hamburger_set js_hamburger">
                <a href="javascript:void(0)">
                    <div class="hamburger_btn">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </a>
            </div>
        </div>
    </header>
</div>
<!-- HEADER_END -->
<!-- CONTAIN_START -->
<div class="state_vals header_video"></div>
<!-- CONTAIN_END -->
<!-- FOOTER_START -->
<div class="pmh_anchor" id="anchor_contact"></div>
<footer id="footer">
    <div class="footer_block">
        <div class="hx16"></div>
        <div class="contact_title">
            <img src="images/title_contact.png">
        </div>
        <div class="hx6"></div>
        <form action="" method="post" enctype="multipart/form-data">
        <div class="contact_form">
            <div class="contact-form-cop"> 
                <div class="form-field-cop field-top-cop">
                    <div class="form-field-lable-cop">氏名</div>
                    <div class="form-field-input-cop">
                        <input type="text" placeholder="" name="field1" required>                                        
                    </div>
                    <div class="clearfix"></div>
                </div>                                                                                                       
                <div class="form-field-cop field-top-cop">
                    <div class="form-field-lable-cop">メールアドレス</div>
                    <div class="form-field-input-cop">
                        <input type="email" placeholder="" name="field2" required>                                        
                    </div>
                    <div class="clearfix"></div>
                </div>                                                                        
                <div class="form-field-cop field-top-cop">
                    <div class="form-field-lable-cop">関連事項</div>
                    <div class="form-field-input-cop">
                        <div class="form-list-cop">                                        	
                            <div class="form-list-select-cop">
                                <select class="custom-select" name="field3">
                                    <option value="龍粋社">龍粋社</option>
                                    <option value="天川龍一 / 天妙龍啓">天川龍一 / 天妙龍啓</option>
                                    <option value="Canon Sakamoto">Canon Sakamoto</option>
                                    <option value="霊能施術 / タロット占い">霊能施術 / タロット占い</option>
                                    <option value="オンラインサロン「RYUSUISYA」">オンラインサロン「RYUSUISYA」</option>
                                    <option value="霊能力者養成スクール「龍粋舎">霊能力者養成スクール「龍粋舎</option>
                                    <option value="坂本かのんのタロッt占い">坂本かのんのタロッt占い</option>
                                </select>
                            </div>                                 
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="form-field-cop field-top-cop">
                    <div class="form-field-lable-cop">職業</div>
                    <div class="form-field-input-cop">
                        <input type="text" placeholder="" name="field4" required>                                        
                    </div>
                    <div class="clearfix"></div>
                </div>    
                <div class="form-field-cop">
                    <div class="form-field-lable-cop">メッセージ<br class="br_pc">本文</div>
                    <div class="form-field-input-cop">
                        <textarea type="text" placeholder="" name="field5" required></textarea>                                                                                   
                    </div>
                    <div class="clearfix"></div>
                </div>                                                                                       
            </div>
            <input type="hidden" name="submit-confirm" value="submit-confirm">
            <button type="submit" id="form_submit" style="opacity:0"></button>
        </div>
        </form>
        <div class="hx6"></div>
        <div class="contact_btn">
            <a href="#contact" id="submit_trick"><img src="images/btn_contact.png"></a>
        </div>
        <div class="hx12"></div>
        <div class="social_btns">
            <a target="_blank" href="https://twitter.com/LibreCanon"><img src="images/icon_fb.png"></a>
            <a target="_blank" href="https://www.instagram.com/canon.sakamoto/"><img src="images/icon_insta.png"></a>
            <a target="_blank" href="https://www.instagram.com/canon.sakamoto/"><img src="images/icon_youtube.png"></a>
        </div>
        <div class="hx3"></div>
        <div class="footer_text">
            このWEBサイトに掲載されている文章・画像等を、無断で複製・転写・引用・配布・賞与・販売することを固くお断り致します。<br>
            すべての著作権はHOTZIPANG　INCに帰属します。<br>
            <br>
            Copyright ©️SAKAMOTO CANON OFFICIAL WEB SITE All rights reserved.
        </div>
        <div class="hx6"></div>
    </div>
</footer>
<!-- FOOTER_END -->
</div>

<script src="js/jquery-3.5.1.slim.min.js" type="text/javascript"></script>
<script src="js/popper.min.js" type="text/javascript"></script>
<script src="js/bootstrap.min.js" type="text/javascript"></script>
<script src="js/jquery.min.js"></script>
<script src="js/ScrollMagic.min.js"></script>
<script src="js/TweenMax.min.js"></script>
<script src="js/theaterJS.js"></script>
<script src="js/swiper.min.js"></script>
<script src="js/jquery.matchHeight.js"></script>
<script src="js/custom.js"></script>
</body>
</html>
