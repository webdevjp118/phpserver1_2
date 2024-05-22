<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="author" content="">
<title>NICHIOU Co.LTD.</title>
<link rel="icon" type="image/x-icon" href="favicon.ico">
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
<script>
  (function(d) {
    var config = {
      kitId: 'vix5xiy',
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
    
    $to      = 'info@nichiou.co.jp';

    $message = "
    お名前 : ".$field1."<br>
    電話番号 : ".$field2."<br>
    メールアドレス : ".$field3."<br>
    お問い合わせ内容 : <br>".$field4."<br>
    ";

    $subject = 'お問い合わせがありました';

    $headers = "From: " . $field3 . "\r\n";
    $headers .= "Reply-To: " . $field3 . "\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=UTF-8\r\n";

    if(mail($to, $subject, $message, $headers)) {
        echo '<script>alert("Success!");</script>';
    } else {
        echo '<script>alert("Failed!");</script>';
    }  
}
?>
<body>
<div id="site_loader_overlay">
    <img src="./images/nichou-loading.gif">
</div>
<div class="wrapper">
<!-- HEADER_START -->
<div class="header_device">
    <header id="header" class="">
        <div class="header_set">
            <a href="#" class="header_logo">
                <img class="headlogo_white" src="images/logo_green.svg">
                <img class="headlogo_green" src="images/logo_green.svg">
            </a>
            <div class="header_menu">
                <a class="headmenu_a" href="#CEO理念">
                    <div class="headmenu_shape">
                        <div class="headmenu_cap">
                            <span class="ln_jp">CEO理念</span>
                            <span class="ln_en">CEO PRINCIPLE</span>
                            <span class="ln_cn1">CEO理念</span>
                            <span class="ln_cn2">CEO理念</span>
                            <span class="ln_vn">Thông điệp CEO</span>
                            <span class="ln_ko">CEO경영이념</span>
                        </div>
                        <div class="headmenu_uline"></div>
                    </div>
                </a>
                <a class="headmenu_a" href="#会社概要">
                    <div class="headmenu_shape">
                        <div class="headmenu_cap">
                            <span class="ln_jp">会社概要</span>
                            <span class="ln_en">COMPANY</span>
                            <span class="ln_cn1">公司简介</span>
                            <span class="ln_cn2">公司簡介</span>
                            <span class="ln_vn">Tổng quan về công ty</span>
                            <span class="ln_ko">회사개요</span>
                        </div>
                        <div class="headmenu_uline"></div>
                    </div>
                </a>
                <a class="headmenu_a" href="#事業内容">
                    <div class="headmenu_shape">
                        <div class="headmenu_cap">
                            <span class="ln_jp">事業内容</span>
                            <span class="ln_en">BUSINESS</span>
                            <span class="ln_cn1">事业内容</span>
                            <span class="ln_cn2">業務內容</span>
                            <span class="ln_vn">Nội dung kinh doanh</span>
                            <span class="ln_ko">사업내용</span>
                        </div>
                        <div class="headmenu_uline"></div>
                    </div>
                </a>
                <a class="headmenu_a" href="detail.html">
                    <div class="headmenu_shape">
                        <div class="headmenu_cap">
                            <span class="ln_jp">商品一覧</span>
                            <span class="ln_en">PRODUCT LIST</span>
                            <span class="ln_cn1">商品分类</span>
                            <span class="ln_cn2">業商品分類務內容</span>
                            <span class="ln_vn">DANH SÁCH SẢN PHẨM</span>
                            <span class="ln_ko">상품 카테고리</span>
                        </div>
                        <div class="headmenu_uline"></div>
                    </div>
                </a>
                <!-- <a class="headmenu_a" href="#オンラインショップ">
                    <div class="headmenu_shape">
                        <div class="headmenu_cap">
                            <span class="ln_jp">オンラインショップ</span>
                            <span class="ln_en">ONLINE SHOP</span>
                            <span class="ln_cn1">网店</span>
                            <span class="ln_cn2">網路商店</span>
                            <span class="ln_vn">Cửa hàng trực tuyến</span>
                            <span class="ln_ko">온라인샵</span>
                        </div>
                        <div class="headmenu_uline"></div>
                    </div>
                </a> -->
                <a class="headmenu_a" href="#お知らせ">
                    <div class="headmenu_shape">
                        <div class="headmenu_cap">
                            <span class="ln_jp">お知らせ</span>
                            <span class="ln_en">NEWS</span>
                            <span class="ln_cn1">公告栏</span>
                            <span class="ln_cn2">公告欄</span>
                            <span class="ln_vn">Thông báo</span>
                            <span class="ln_ko">공지사항</span>
                        </div>
                        <div class="headmenu_uline"></div>
                    </div>
                </a>
                <div class="lang_menu">
                    <div class="langmenu_shape">
                        <div><span>JAPANESE</span></div>
                    </div>
                    <div class="langdown_icon">
                        <img src="images/lang_down.svg">
                    </div>
                    <div class="langmenu_dropdown">
                        <div data-lang="ln_jp"><span>JAPANESE</span></div>
                        <div data-lang="ln_en"><span>ENGLISH</span></div>
                        <div data-lang="ln_cn1"><span>CHINESE(簡)</span></div>
                        <div data-lang="ln_cn2"><span>CHINESE(繁)</span></div>
                        <div data-lang="ln_vn"><span>VIETNAMESE</span></div>
                        <div data-lang="ln_ko"><span>KOREAN</span></div>
                    </div>
                </div>
                <a class="headmenu_a headmenu_contact" href="#お問い合わせ">
                    <div class="headmenu_shape">
                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="11" viewBox="0 0 14 11">
                            <path id="Icon_ionic-md-mail" data-name="Icon ionic-md-mail" d="M13.667,2.5H2.333A1.337,1.337,0,0,0,1,3.833v8.333A1.337,1.337,0,0,0,2.333,13.5H13.667A1.337,1.337,0,0,0,15,12.167V3.833A1.337,1.337,0,0,0,13.667,2.5ZM13.5,5.333,8,9,2.5,5.333V4L8,7.667,13.5,4Z" transform="translate(-1 -2.5)"/>
                        </svg>
                        <div class="headmenu_cap">
                            <span class="ln_jp">お問い合わせ</span>
                            <span class="ln_en">CONTACT US</span>
                            <span class="ln_cn1">邮件咨询</span>
                            <span class="ln_cn2">郵件洽詢</span>
                            <span class="ln_vn">Liên hệ</span>
                            <span class="ln_ko">문의</span>
                        </div>
                    </div>
                </a>
            </div>
            <div class="hamburger_set js_hamburger">
                <div class="lang_menu width_hamburger">
                    <div class="langmenu_shape">
                        <div><span>JAPANESE</span></div>
                    </div>
                    <div class="langdown_icon">
                        <img src="images/lang_down.svg">
                    </div>
                    <div class="langmenu_dropdown">
                        <div data-lang="ln_jp"><span>JAPANESE</span></div>
                        <div data-lang="ln_en"><span>ENGLISH</span></div>
                        <div data-lang="ln_cn1"><span>CHINESE(簡)</span></div>
                        <div data-lang="ln_cn2"><span>CHINESE(繁)</span></div>
                        <div data-lang="ln_vn"><span>VIETNAMESE</span></div>
                        <div data-lang="ln_ko"><span>KOREAN</span></div>
                    </div>
                </div>
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
<!-- <div class="state_vals header_video"></div> -->
<section id="contain" class="paper">    	        
    <div class="instead_head"></div>
    <div class="banner_block_tp">
        <div class="banner_back_tp">
            <img class="mv_image" src="images/banner.jpg">
        </div>  
        <div class="banner_front_tp">
            <div class="banner_text">
                <h1 class="pani4 js-split">Beauty & Health</h1>
                <h2>by NICHIOU</h2>
            </div>
        </div>            
        <div class="clearfix"></div>
    </div> 
    <div class="pmh_anchor" id="CEO理念"></div>
    <div class="principle_block_tp">
        <div class="principle_back_tp">
            <div class="principle_back1_tp"></div>
        </div>
        <div class="principle_front_tp">
            <div class="ceo_width">
                <div class="ceo_layer0">
                    <div class="ceo_bg1">
                        <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" viewBox="0 0 900 475" preserveAspectRatio="none">
                            <path id="Path_3377" data-name="Path 3377" d="M450,0C698.528,0,900,201.472,900,450v25H0V450C0,201.472,201.472,0,450,0Z" fill="#fff"/>
                        </svg>
                    </div>
                    <div class="ceo_bg2">
                    </div>
                </div>
                <div class="ceo_layer1">
                    <div class="ceo_title">
                        <div class="title_one io fade upS">
                            <p>PRINCIPLE FROM OUR CEO</p>
                            <h2>
                                <div class="ln_jp">CEO理念</div>
                                <div class="ln_en">Principle from our CEO</div>
                                <div class="ln_cn1">CEO理念</div>
                                <div class="ln_cn2">CEO理念</div>
                                <div class="ln_vn">Thông điệp CEO</div>
                                <div class="ln_ko">CEO경영이념</div>
                            </h2>
                        </div>
                    </div>
                    <div class="ceo_text io fade upS">
                        <p class="ln_jp">「報恩感謝」の気持ちでどんな小さな事でも一度受けた恩を決して忘れず 色んな形で感謝の気持ちを人様にお返ししていきたいです。<br>
                            <br>
                            仕事をする上でも同じことが言えます。<br>
                            お客様や取引先の方々から信頼を得て、より一層信頼関係を築きお客様視点で物事を考え信用を重んじ誠実な仕事に努めていきたいと思っております。<br>
                            弊社の企業活動を実現するために高い目標を掲げ、積極的に行動・自らの責任を果たしていきたい所存でございます。<br>
                            日々感謝…<br>
                            それこそが私の理念でございます。
                        </p>
                        <p class="ln_en">
                            I should not forget a great kindness by another, keep in our mind and requite the favors.<br>
                            <br>
                            Expressing the feeling of gratitude to everyone, in other words.<br>
                            I think the same thing is in business situation. Gain end user and customer's confidence,establish a best relationship, think putting myself in others' shoes, and act in good faith.<br>
                            This is my principle to set goal, do attractive, fulfill my responsibility and be deeply appreciative and regard the confidence for achieving a corporate activity as Nichiou's originality.
                        </p>
                        <p class="ln_cn1">
                            得到他人的恩惠，要懂得回报与他人。即"知恩图报"<br>
                            <br>
                            业务上也要如此。与客户建立良好的信任关系，<br>
                            常以客户的视角考虑和处理问题，互利互惠，长远发展。<br>
                            以"积极向上，勇于承担，懂得感恩"为经营理念，实现企业理想，达成企业 目标。
                        </p>
                        <p class="ln_cn2">
                            得到他人的恩惠，要懂得回報與他人。即"知恩圖報"<br>
                            <br>
                            業務上也要如此。與客戶建立良好的信任關係，<br>
                            並常以客戶的視角考慮和處理問題，互利互惠，長遠發展。<br>
                            以"積極向上，勇於承擔，懂得感恩"為經營理念，實現企業理想，達成企業目標。<br>
                        </p>
                        <p class="ln_vn">
                            Tôi muốn gửi lời cảm ơn đến với tất cả mọi người bằng nhiều cách khác nhau và không bao giờ quên ơn kể cả đối với những điều nhỏ bé nhất bằng cả tấm lòng biết ơn.<br>
                            <br>
                            Ngay cả trong công việc cũng là một điều tương tự.<br>
                            Xây dựng mối quan hệ lòng tin nhiều hơn nữa từ Quý khách hàng, Quý đối tác. Tôi mong muốn nỗ lực đặt mình vào vị trí của khách hàng để suy nghĩ mọi việc nâng cao niềm tin, sự trung thực trong công việc.<br>
                            Chúng tôi mong muốn nâng cao mục tiêu, tích cực hành động, hoàn thành trách nhiệm của mình để thực hiện hóa các hoạt động kinh doanh của công ty.
                            Biết ơn mỗi ngày<br>
                            Đó chính là thông điệp của tôi.
                        </p>
                        <p class="ln_ko">
                            '은혜에 대하여 항상 감사하고 보답'하는 마음가짐으로 어떤 작은 일이라도 한번받은 은혜를 결코 잊지않고 여러가지 형태로 감사의 마음을 돌려주고싶다고 생각합니다.<br>
                            <br>
                            일을 하는데 있어서도 같은 마음가짐으로 임하고 있습니다.<br>
                            고객이나 거래처분들로부터 신뢰를 얻어, 보다 한층 신뢰관계를 쌓아 고객의 시점에서 사물을 생각하며 신용을 중시하고 성실하게 일을 할수있도록 앞으로도 노력해 나가고 싶다고 생각합니다.<br>
                            본사의 기업활동을 실현하기 위해 보다 높은 목표를 세워 적극적으로 행동·스스로 책임을 다하고자 합니다.<br>
                            날마다 감사...<br>
                            그것이야말로 저의 경영이념입니다.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="multi_block">
        <div class="c_width14">
            <div class="multi_row">
                <div class="multi_col">
                    <div class="multi_title io fade upS">
                        <div class="title_one">
                            <p>OUR GUIDELINE</p>
                            <h2>
                                <div class="ln_jp">行動指針</div>
                                <div class="ln_en">Our guideline</div>
                                <div class="ln_cn1">企业方针</div>
                                <div class="ln_cn2">企業方針</div>
                                <div class="ln_vn">Phương châm hoạt động</div>
                                <div class="ln_ko">행동지침</div>
                            </h2>
                        </div>
                    </div>
                    <div class="hx4"></div>
                    <div class="multi_text io fade upS">
                        <p class="ln_jp">
                            社員の多様性を受け入れ、ひとりひとりがお互いを尊重する。<br>
                            どの国のお客様でも満足できるような、臨機応変な心のこもった対応をする。
                        </p>
                        <p class="ln_en">
                            Respect our diversity and each other.<br>
                            Our quality customer services strike a chord in the hearts of all customers.
                        </p>
                        <p class="ln_cn1">
                            接纳和鼓励社员的多样性，互相借鉴，互相尊重。<br>
                            临机应变，应对和满足世界各国客户的不同需求。
                        </p>
                        <p class="ln_cn2">
                            接納並鼓勵員工的多樣性的發展並互相尊重。<br>
                            靈活的採取臨機應變於各種挑戰，並全心全意提供及滿足世界各國客戶的不同需求。
                        </p>
                        <p class="ln_vn">
                            Tôn trọng lẫn nhau và chấp nhận sự khác biệt của các thành viên trong công ty.<br>
                            Đối ứng linh hoạt để làm hài lòng tất cả các khách hàng đến từ mọi quốc gia.
                        </p>
                        <p class="ln_ko">
                            사원의 다양성을 존중하며 상호간의 신뢰로 행동합니다.<br>
                            세계각국의 고객님을 만족시킬수 있도록 임기응변을 발휘하여 대응합니다.
                        </p>
                    </div>
                </div>
                <div class="multi_col">
                    <div class="multi_title io fade upS">
                        <div class="title_one">
                            <p>PHILOSOPY</p>
                            <h2>
                                <div class="ln_jp">企業理念</div>
                                <div class="ln_en">Corporate Philosophy</div>
                                <div class="ln_cn1">企业理念</div>
                                <div class="ln_cn2">企業理念</div>
                                <div class="ln_vn">Triết lí doanh nghiệp</div>
                                <div class="ln_ko">기업이념</div>
                            </h2>
                        </div>
                    </div>
                    <div class="hx4"></div>
                    <div class="multi_text io fade upS">
                        <p class="ln_jp">
                            お客様のニーズに応えた「MADE IN JAPAN」製品をお届けし、<br>
                            製品を通して他人を思いやるペイフォワードの精神を社会に循環させてゆく。
                        </p>
                        <p class="ln_en">
                            We provide MADE IN JAPAN brand products that satisfy the needs of our customers.<br>
                            Through our product, we will promote the spirit of paying forward and this spirit in which we care about others and society.
                        </p>
                        <p class="ln_cn1">
                            追求「MADE IN JAPAN」高品质产品，满足客户各层次的需求。<br>
                            通过产品，Pay it Forward （把爱传出去），造福于他人，造福于社会。
                        </p>
                        <p class="ln_cn2">
                            追求「MADE IN JAPAN」高品質產品，滿足各層次客戶的需求。<br>
                            透過產品，Pay it Forward （把愛傳出去），造福於他人，造福於社會。
                        </p>
                        <p class="ln_vn">
                            Cung cấp các sản phẩm「MADE IN JAPAN」 đáp ứng nhu cầu của khách hàng.<br>
                            Thông qua những sản phẩm, chúng tôi muốn duy trì và lan tỏa tinh thần “tiếp tục cho đi” sự quan tâm, đồng cảm đến nhiều người, đến toàn xã hội.
                        </p>
                        <p class="ln_ko">
                            고객님의 요구을 만족시킬수 있는「MADE IN JAPAN」제품을 제공하며 또한 제품을 통해 Pay it Forward(아름다운 세상을 위하는)정신을 사회에 순환시키는 기업정신을 추구해오고 있습니다.
                        </p>
                    </div>
                </div>
            </div>
            <div class="multi_row">
                <div class="multi_col">
                    <div class="multi_title io fade upS">
                        <div class="title_one">
                            <p>OUR MISSION</p>
                            <h2>
                                <div class="ln_jp">ミッション</div>
                                <div class="ln_en">Our mission</div>
                                <div class="ln_cn1">企业使命</div>
                                <div class="ln_cn2">企業使命</div>
                                <div class="ln_vn">Sứ mệnh</div>
                                <div class="ln_ko">미션</div>
                            </h2>
                        </div>
                    </div>
                    <div class="hx4"></div>
                    <div class="multi_text io fade upS">
                        <p class="ln_jp">
                            私たちの周りから喜びを広げていく。
                        </p>
                        <p class="ln_en">
                            Planting seeds of joy.
                        </p>
                        <p class="ln_cn1">
                            从自我做起，把爱和欢乐传递出去。
                        </p>
                        <p class="ln_cn2">
                            從自我做起，把愛和歡樂傳遞出去。
                        </p>
                        <p class="ln_vn">
                            Lan tỏa hạnh phúc tới tất cả mọi người xung quanh chúng tôi.
                        </p>
                        <p class="ln_ko">
                            주위에 기쁨을 전달합니다.
                        </p>
                    </div>
                </div>
                <div class="multi_col">
                    <div class="multi_title io fade upS">
                        <div class="title_one">
                            <p>OUR VISION</p>
                            <h2>
                                <div class="ln_jp">ビジョン</div>
                                <div class="ln_en">Our vision</div>
                                <div class="ln_cn1">展望</div>
                                <div class="ln_cn2">展望</div>
                                <div class="ln_vn">Tầm nhìn</div>
                                <div class="ln_ko">비젼</div>
                            </h2>
                        </div>
                    </div>
                    <div class="hx4"></div>
                    <div class="multi_text io fade upS">
                        <ul class="ln_jp">
                           <li>ペイフォワードの精神で、ステークホルダー及び社会全体に対して善意をつなげていくことにより、社員ひとりひとりの未来の礎を築く。</li>
                           <li>社員の自由な発想や行動などの積極性を尊重しながら、併せ持つ責任を社員個人が果たせるようにサポートする。</li>
                        </ul>
                        <ul class="ln_en">
                            <li>Our company is deeply rooted in paying- it- forward. Thus, we support planting seeds of giving and investing in others with good intentions of our stakeholders and society. By doing so, we will build upon the character of our employees and those we serve.</li>
                            <li>We respect the ideas and contributions of our employees. And with these actively works comes responsibility. We support each employee on how to fulfill their responsibility.</li>
                        </ul>
                        <ul class="ln_cn1">
                            <li>以Pay it Forward （把爱传出去）的精神,以诚相待利益相关者以及全社会，构造出每位社员的未来。</li>
                            <li>为调动社员的积极性创造良好的环境，尊重和支持每位社员的意见和行动，并帮助社员更好的完成各自的职责和目标。</li>
                        </ul>
                        <ul class="ln_cn2">
                            <li>以Pay it Forward （把愛傳出去）的精神,以誠相待互相關懐每位權益者, 以及造福全社會，並建構出每位員工的未來人品品格。</li>
                            <li>為培養員工的積極性及創造良好的環境，我們尊重並支持每位員工的意見想法和自發行動， 伴隨著這些積極的工作而來的是責任，也能使員工更好的完成各自的職責和目標。</li>
                        </ul>
                        <ul class="ln_vn">
                            <li>Trên tinh thần tiếp tục cho đi, chúng tôi xây dựng nền tảng tương lai của mỗi nhân viên thông qua sự kết nối thiện chí với toàn xã hội cũng như các bên liên quan.</li>
                            <li>Tôn trọng ý tưởng, sáng tạo và hành động tích cực của nhân viên, đồng thời hỗ trợ từng nhân viên hoàn thành trách nhiệm của mình.</li>
                        </ul>
                        <ul class="ln_ko">
                            <li>Pay it Forward(아름다운 세상을 위하는)정신으로 기업의 이해관계자 및 사회 전체와 선의로 이어져 가며 사원의 미래를 개척해 나가는 기업으로</li>
                            <li>사원의 자유로운 발상, 행동등 적극성을 존중하며, 사원이 책임감을 가지고 독립적으로 완성할수 있도록 지원하는 기업으로</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="pmh_anchor" id="会社概要"></div>
    <div class="company_block">
        <div class="company_back">
            <img class="panil3" src="images/company_bg.jpg">
        </div>
        <div class="company_front">
            <div class="c_width14">
                <div class="multi_block">
                    <div class="multi_row">
                        <div class="multi_col">
                            <div class="multi_title io fade upS">
                                <div class="title_one">
                                    <p>COMPANY'S PROFILE</p>
                                    <h2>
                                        <div class="ln_jp">会社概要</div>
                                        <div class="ln_en">Company's Profile</div>
                                        <div class="ln_cn1">公司简介</div>
                                        <div class="ln_cn2">公司簡介</div>
                                        <div class="ln_vn">Tổng quan về công ty</div>
                                        <div class="ln_ko">회사개요</div>
                                    </h2>
                                </div>
                            </div>
                            <div class="hx4"></div>
                            <div class="multi_text io fade upS">
                                <div class="ln_jp">
                                    <dl><dt>会社名</dt><dd>日王株式会社</dd></dl>
                                    <dl><dt>代表取締役社長</dt><dd>鄭 志偉 テイ シーイー</dd></dl>
                                    <dl><dt>本社 住所</dt><dd>〒598-0012大阪府泉佐野市高松東1-10-37 泉佐野センタービル 1002号</dd></dl>
                                    <dl><dt>代表番号</dt><dd>TEL：072-488-7989 / FAX：072-488-7987</dd></dl>
                                    <dl><dt>資本金</dt><dd>8000万円</dd></dl>
                                    <dl><dt>主要取引銀行</dt><dd>三菱ＵＦＪ銀行 池田泉州銀行</dd></dl>
                                </div>
                                <div class="ln_en">
                                    <dl><dt>Name</dt><dd>NICHIOU CO.,LTD</dd></dl>
                                    <dl><dt>Representative Director</dt><dd>CHIH-WEI CHENG</dd></dl>
                                    <dl><dt>Head Office</dt><dd>Rm.1002 Izumisano Center Building, 1-10-37 Takamatsu Higashi, Izumisano city, Osaka prefecture<br>Postal Code: 598-0012</dd></dl>
                                    <dl><dt>TEL/FAX</dt><dd>TEL：+81-(0)72-488-7989 / FAX：+81-(0)72-488-7987</dd></dl>
                                    <dl><dt>Capital</dt><dd>Eighty million yen</dd></dl>
                                    <dl><dt>Main Bank</dt><dd>Bank ofMitshubishi UFJ, Senshu Ikeda Bank., LTD</dd></dl>
                                </div>
                                <div class="ln_cn1">
                                    <dl><dt>公司名</dt><dd>日王株式会社</dd></dl>
                                    <dl><dt>法人代表</dt><dd>郑 志伟</dd></dl>
                                    <dl><dt>本社 住所</dt><dd>〒598-0012 大阪府泉佐野市高松東1-10-37-1002号</dd></dl>
                                    <dl><dt>TEL/FAX</dt><dd>TEL：072-488-7989 / FAX：072-488-7987</dd></dl>
                                    <dl><dt>资本金</dt><dd>8000万日币</dd></dl>
                                    <dl><dt>主要交易银行</dt><dd>三菱ＵＦＪ银行 池田泉州银行</dd></dl>
                                </div>
                                <div class="ln_cn2">
                                    <dl><dt>公司名</dt><dd>日王株式会社</dd></dl>
                                    <dl><dt>法人代表</dt><dd>鄭 志偉</dd></dl>
                                    <dl><dt>本社 地址</dt><dd>〒598-0012 大阪府泉佐野市高松東1-10-37-1002号</dd></dl>
                                    <dl><dt>TEL/FAX</dt><dd>TEL：072-488-7989 / FAX：072-488-7987</dd></dl>
                                    <dl><dt>資本額</dt><dd>8000萬日幣</dd></dl>
                                    <dl><dt>主要交易銀行</dt><dd>三菱UFJ銀行 池田泉州銀行</dd></dl>
                                </div>
                                <div class="ln_vn">
                                    <dl><dt>Tên công ty</dt><dd>Công ty trách nhiệm hữu hạn Nichiou</dd></dl>
                                    <dl><dt>Tổng giám đốc</dt><dd>Tei Shi I</dd></dl>
                                    <dl><dt>Trụ sở chính</dt><dd>Số bưu điện 598-0012 phòng 1002, tòa nhà Izumisano Center, 1-10-37 Takamatsuhigashi Izumisanoshi Osakafu</dd></dl>
                                    <dl><dt>Số đại diện</dt><dd>TEL：072-488-7989 / FAX：072-488-7987</dd></dl>
                                    <dl><dt>Tổng vốn đầu tư</dt><dd>8000 vạn yên</dd></dl>
                                    <dl><dt>Ngân hàng giao dịch</dt><dd>Ngân hàng Mitsubishi UFJ</dd></dl>
                                </div>
                                <div class="ln_ko">
                                    <dl><dt>회사명</dt><dd>日王株式会社 니치오주식회사</dd></dl>
                                    <dl><dt>대표이사</dt><dd>鄭 志偉</dd></dl>
                                    <dl><dt>본사 주소</dt><dd>〒598-0012 大阪府泉佐野市高松東(오사카후 이즈미사노시 타카마츠히가시)1-10-37-1002호</dd></dl>
                                    <dl><dt>연락처</dt><dd>TEL：072-488-7989 / FAX：072-488-7987</dd></dl>
                                    <dl><dt>자본금</dt><dd>8000만엔</dd></dl>
                                    <dl><dt>주거래은행</dt><dd>三菱ＵＦＪ銀行(미츠비시ＵＦＪ은행) 池田泉州銀行(이케다센슈은행)</dd></dl>
                                </div>
                            </div>
                        </div>
                        <div class="multi_col">
                            <div class="multi_title io fade upS">
                                <div class="title_one">
                                    <p>HISTORY</p>
                                    <h2>
                                        <div class="ln_jp">沿革</div>
                                        <div class="ln_en">History of Survey</div>
                                        <div class="ln_cn1">沿革</div>
                                        <div class="ln_cn2">沿革</div>
                                        <div class="ln_vn">Lịch sử</div>
                                        <div class="ln_ko">연혁</div>
                                    </h2>
                                </div>
                                <div class="hx4"></div>
                                <div class="multi_text io fade upS">
                                    <div class="ln_jp">
                                        <dl><dt>平成21年6月（2009年）</dt><dd>大阪府泉大津市 日王株式会社 設立</dd></dl>
                                        <dl><dt>平成21年9月（2009年）</dt><dd>大阪府泉佐野市 本社移転</dd></dl>
                                        <dl><dt>平成24年10月（2012年）</dt><dd>現事務所（泉佐野センタービル）へ移転</dd></dl>
                                    </div>
                                    <div class="ln_en">
                                        <dl>Established: June 2009 at Izumiotsu city, Osaka prefecture</dl>
                                        <dl>Relocated: September 2009 in Izumisano city, Osaka Prefecture.</dl>
                                        <dl>October 2012 at this head office address.</dl>
                                    </div>
                                    <div class="ln_cn1">
                                        <dl><dt>平成21年6月（2009年）</dt><dd>日王株式会社正式成立于大阪府泉大津市</dd></dl>
                                        <dl><dt>平成21年9月（2009年）</dt><dd>本社迁移至大阪府泉佐野市</dd></dl>
                                        <dl><dt>平成24年10月（2012年）</dt><dd>本社迁移至现地址</dd></dl>
                                    </div>
                                    <div class="ln_cn2">
                                        <dl><dt>平成21年6月（2009年）</dt><dd>日王株式会社於大阪府泉大津市正式成立</dd></dl>
                                        <dl><dt>平成21年9月（2009年）</dt><dd>總公司遷至大阪府泉佐野市</dd></dl>
                                        <dl><dt>平成24年10月（2012年）</dt><dd>總部遷至現址</dd></dl>
                                    </div>
                                    <div class="ln_vn">
                                        <dl>Tháng 6 năm Heisei 21（2009年）Công ty TNHH Nichiou được thành lập tại Osakafu Izumiotsushi</dl>
                                        <dl>Tháng 9 năm Heisei 21 （2009年）Trụ sở công ty được di dời sang Osakafu Izumisanoshi</dl>
                                        <dl>Tháng 10 năm Heisei 24 （2012年）Trụ sở công ty di dời tới địa điểm hiện tại （Tòa nhà Izumisano Center ）</dl>
                                    </div>
                                    <div class="ln_ko">
                                        <dl><dt>2009년</dt><dd>오사카후 이즈미오츠시에서 니치오주식회사를 창립</dd></dl>
                                        <dl><dt>2009년</dt><dd>오사카후 이즈미사노시로 본사 이전</dd></dl>
                                        <dl><dt>2012년</dt><dd>현주소로 본사 이전</dd></dl>
                                    </div>
                                </div>
                            </div>
                            <div class="hx8"></div>
                            <div class="multi_title io fade upS">
                                <div class="title_one">
                                    <p>CSR</p>
                                    <h2>
                                        <div class="ln_jp">社会貢献</div>
                                        <div class="ln_en">CSR</div>
                                        <div class="ln_cn1">社会贡献</div>
                                        <div class="ln_cn2">社會貢獻</div>
                                        <div class="ln_vn">Cống hiến xã hội</div>
                                        <div class="ln_ko">사회공헌</div>
                                    </h2>
                                </div>
                            </div>
                            <div class="hx4"></div>
                            <div class="multi_text io fade upS">
                                <div class="ln_jp">
                                    <p>CSR活動の一環として毎年、</p>
                                    <ul>
                                        <li>
                                            地元 泉佐野市の市役所や社会福祉協議会に、寄付やイベント協賛品支援。熊本県に寄付をしております。
                                        </li>
                                        <li>
                                            国外では台湾の台北市東区水上救世協会に寄付をしており、救命ボート購入等に充てられております。
                                        </li>
                                    </ul>
                                </div>
                                <div class="ln_en">
                                    <p>Every year, we would like to donate as CSR.</p>
                                    <ul>
                                        <li>
                                            Domestic: Donate or provide some goods for some events to the Social Welfare council and municipal office in Izumisano city. And also we donate to Kumamoto prefecture.
                                        </li>
                                        <li>
                                            Overseas: Donate to Eastern Taipei Lifeguard Association, and it devotes to purchase some life rafts.
                                        </li>
                                    </ul>
                                </div>
                                <div class="ln_cn1">
                                    <p>公司每年进行的CSR活动有：</p>
                                    <ul>
                                        <li>
                                            为泉佐野市的市政府和社会福祉协议会捐款和捐赠物资。捐助熊本县。
                                        </li>
                                        <li>
                                            在国外，为台湾台北市东区水上救生协会捐款，购买救生艇等救生设备。
                                        </li>
                                    </ul>
                                </div>
                                <div class="ln_cn2">
                                    <p>公司每年進行的CSR活動有：</p>
                                    <ul>
                                        <li>
                                            為泉佐野市的市政府和社會福祉協議會捐款和捐贈物資。捐助熊本縣。
                                        </li>
                                        <li>
                                            在國外，為台灣台北市東區水上救生協會捐款，購買救生艇等救生設備。
                                        </li>
                                    </ul>
                                </div>
                                <div class="ln_vn">
                                    <p>Các hoạt động hàng năm sau đây là một phần trong hoạt động trách nhiệm xã hội của doanh nghiệp</p>
                                    <ul>
                                        <li>
                                            Trong nước: Ủng hộ vật phẩm tổ chức các sự kiện, quyên góp cho hội đồng Phúc lợi xã hội, ủy ban nhân dân thành phố Izumisano. Quyên góp cho tỉnh Kumamoto.
                                        </li>
                                        <li>
                                            Tại nước ngoài: Mua tặng thuyền cứu hộ, quyên góp cho tổ chức cứu hộ trên mặt nước ở quận Đông, thành phố Đài Bắc, Đài Loan.
                                        </li>
                                    </ul>
                                </div>
                                <div class="ln_ko">
                                    <p>CSR의 일환으로 매년</p>
                                    <ul>
                                        <li>
                                            지방 발전을 위해 이즈미사노시시청, 사회복지협의회에 기부,협찬품기증. 쿠마모토현에 기부.
                                        </li>
                                        <li>
                                            해외에서는 대만대북시동구 수상구조협회에 기부를 하여 구명보트구매 등에 활용되고 있습니다.
                                        </li>
                                    </ul>                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="pmh_anchor" id="事業内容"></div>
    <div class="business_block">
        <div class="hx10"></div>
        <div class="business_width">
            <div class="business_top">
                <div class="title_one">
                    <p>DESCRIPTION OF BUSINESS</p>
                    <h2>
                        <div class="ln_jp">事業内容</div>
                        <div class="ln_en">Descripiton of Business</div>
                        <div class="ln_cn1">事业内容</div>
                        <div class="ln_cn2">業務內容</div>
                        <div class="ln_vn">Nội dung kinh doanh</div>
                        <div class="ln_ko">사업내용</div>
                    </h2>
                </div>
            </div>
            <div class="hx8"></div>
            <div class="business_container">
                <div class="business_item">
                    <div class="business_back">
                        <div class="business_img">
                            <img class="panil3" src="images/business01.jpg">
                        </div>
                        <div class="business_no">01</div>
                    </div>
                    <div class="business_front">
                        <div class="business_content">
                            <div class="business_title io fade upS">
                                <h2>
                                    <div class="ln_jp">卸売業</div>
                                    <div class="ln_en">Wholesale business</div>
                                    <div class="ln_cn1">批发销售事业</div>
                                    <div class="ln_cn2">批發銷售事業</div>
                                    <div class="ln_vn">Bán buôn</div>
                                    <div class="ln_ko">도매</div>
                                </h2>
                            </div>
                            <div class="hx3"></div>
                            <div class="business_text io fade upS">
                                <p class="ln_jp">様々な規模の免税店などに、JAPANクオリティにこだわったお土産品（日用雑貨・健康食品・化粧品・健康アクセサリーなど）を卸売りしています。</p>
                                <p class="ln_en">We would like to sell for some selected-souvenir of JAPAN QUALITIES at wholesale to different sizes of the duty-free shop.</p>
                                <p class="ln_cn1">追求生产高品质的日本制优良商品（日用杂货、健康食品、化妆品、健康饰品等），批发销售至日本全国各地的各大免税店、土特产店。</p>
                                <p class="ln_cn2">追求生產高品質的日本製優良商品（日用雜貨、健康食品、化妝品、健康飾品等），批發銷售至日本全國各地的各大免稅店、土特產店。</p>
                                <p class="ln_vn">Chúng tôi đang bán buôn các sản phẩm quà lưu niệm mang chất lượng Nhật Bản （như đồ gia dụng, thực phẩm chức năng, vòng trang sức sức khỏe,...）cho các cửa hàng miễn thuế với nhiều quy mô khác nhau.</p>
                                <p class="ln_ko">각종규모의 면세점에 퀄리티 높은 일본제특산품(일용잡화,건강식품,화장품,건강액세서리 등)을 도매하고 있습니다.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="hx10"></div>
                <div class="business_item pxt_right">
                    <div class="business_back">
                        <div class="business_img">
                            <img class="panil3" src="images/business02.jpg">
                        </div>
                        <div class="business_no">02</div>
                    </div>
                    <div class="business_front">
                        <div class="business_content">
                            <div class="business_title io fade upS">
                                <h2>
                                    <div class="ln_jp">PB商品の企画・立案・製品化</div>
                                    <div class="ln_en">Planning, designing and producing for Private Brand Products</div>
                                    <div class="ln_cn1">PB商品（private brand）的企划・立案・制造</div>
                                    <div class="ln_cn2">PB商品（private brand）的企劃・立案・製造</div>
                                    <div class="ln_vn">Lên kế hoạch, đề án, sản xuất sản phẩm PB</div>
                                    <div class="ln_ko">PB상품의 기획 입안・판매</div>
                                </h2>
                            </div>
                            <div class="hx3"></div>
                            <div class="business_text io fade upS">
                                <p class="ln_jp">取り扱い製品の約6割を自社製品が占めており、特殊石を使用した空気清浄器や化粧クリーム、サプリメント、食品等幅広く取り扱っております。</p>
                                <p class="ln_en">60% of our dealing products are Private Brand products. We would like to deal with a wide range of categories.<br>
                                    Ex) Air purifier utensils that are using special mineral stones, face cream, dietary supplements, and foods. etc.</p>
                                <p class="ln_cn1">批发销售的商品中约60%为自有品牌商品。<br>
                                    种类包括：采用特殊天然矿石的空气净化器、化妆品、健康食品、健康饰品、食品等多种类商品。</p>
                                <p class="ln_cn2">批發銷售的商品中約60%為自有品牌商品。<br>
                                    種類包括：採用特殊天然礦石的空氣淨化器、化妝品、健康食品、健康飾品、食品等多種類商品。</p>
                                <p class="ln_vn">Trong số các sản phẩm đang cung cấp, sản phẩm của công ty chiếm tới 60%, hiện nay sản phẩm của công ty chúng tôi gồm có máy làm sạch không khí sử dụng đá đặc biệt, kem dưỡng da, thực phẩm chức năng, thực phẩm.</p>
                                <p class="ln_ko">
                                    취급 제품중 약60%가 자사 제품.<br>
                                    특수천연석을 이용한 공기청정기,화장품,건강식품,식품 등 <br>
                                    여러종류의 제품을 취급하고 있습니다.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="hx10"></div>
                <div class="business_item">
                    <div class="business_back">
                        <div class="business_img">
                            <img class="panil3" src="images/business03.jpg">
                        </div>
                        <div class="business_no">03</div>
                    </div>
                    <div class="business_front">
                        <div class="business_content">
                            <div class="business_title io fade upS">
                                <h2>
                                    <div class="ln_jp">OEM商品の企画・立案・製品化</div>
                                    <div class="ln_en">Planning, designing and producing for an OEM product</div>
                                    <div class="ln_cn1">OEM商品的企画・立案・製造</div>
                                    <div class="ln_cn2">OEM商品的企畫・立案・製造</div>
                                    <div class="ln_vn">Lên kế hoạch, đề án, sản xuất sản phẩm OEM</div>
                                    <div class="ln_ko">OEM상품의 기획 입안・판매</div>
                                </h2>
                            </div>
                            <div class="hx3"></div>
                            <div class="business_text io fade upS">
                                <p class="ln_jp">弊社製品のOEM製品も承っております。お気軽にご相談ください。</p>
                                <p class="ln_en">We would like to produce OEM products, please kindly contact freely.</p>
                                <p class="ln_cn1">公司自有品牌的商品均支持OEM制造，欢迎咨询洽谈。</p>
                                <p class="ln_cn2">公司自有品牌的商品均支持OEM製造，歡迎諮詢洽談。</p>
                                <p class="ln_vn">Công ty có chính sách tiếp nhận sản phẩm OEM của sản phẩm công ty chúng tôi. Xin hãy liên hệ với chúng tôi.</p>
                                <p class="ln_ko">자사 제품 전 품목 OEM상품제작 가능합니다. 문의를 원하시는 분은 메일을 통해 문의 해주시기 바랍니다.</p>
                            </div>
                            <div class="hx2"></div>
                            <div class="business_subimg io fade upS">
                                <svg class="ln_jp" xmlns="http://www.w3.org/2000/svg" width="481.493" height="112.87" viewBox="0 0 481.493 112.87">
                                    <g data-idr="Group_324" data-name="Group 324" transform="translate(1365 5682.579)">
                                        <path data-idr="Path_3377" data-name="Path 3377" d="M0,0H66L81.493,44.992,66,90H0" transform="translate(-1365 -5682.579)" fill="#f6f4e8"/>
                                        <path data-idr="Path_3377-2" data-name="Path 3377" d="M0,0H86l15.493,44.992L86,90H0L15.369,45.088Z" transform="translate(-1297 -5682.579)" fill="#f6f4e8"/>
                                        <path data-idr="Path_3377-3" data-name="Path 3377" d="M0,0H96l15.493,44.992L96,90H0L15.369,45.088Z" transform="translate(-1209 -5682.579)" fill="#f6f4e8"/>
                                        <path data-idr="Path_3377-4" data-name="Path 3377" d="M10,0H86l15.493,44.992L86,90H10L25.369,45.088Z" transform="translate(-1121 -5682.579)" fill="#f6f4e8"/>
                                        <path data-idr="Path_3377-5" data-name="Path 3377" d="M10,0H76L91.493,44.992,76,90H10L25.369,45.088Z" transform="translate(-1043 -5682.579)" fill="#f6f4e8"/>
                                        <path data-idr="Path_3377-6" data-name="Path 3377" d="M10,0H76L91.493,44.992,76,90H10L25.369,45.088Z" transform="translate(-975 -5682.579)" fill="#f6f4e8"/>
                                        <path data-idr="Path_3385" data-name="Path 3385" d="M-28.068-9.588h-1.068a6.328,6.328,0,0,1,.06.852c0,.216-.012.744-.012,1.368-.336.024-.648.036-.924.036a11.1,11.1,0,0,1-1.536-.1l.024.912a13.181,13.181,0,0,0,1.536.06c.252,0,.552-.012.888-.036-.012.528-.012,1.092-.012,1.572v.684c-1.38.588-2.628,1.632-2.628,2.628,0,1.068,1.56,1.992,2.5,1.992.648,0,1.056-.36,1.056-1.476,0-.516-.024-1.584-.048-2.6a7.861,7.861,0,0,1,2.616-.468c1.14,0,2.064.552,2.064,1.572,0,1.1-.96,1.668-2.016,1.872a6.137,6.137,0,0,1-1.4.084l.336.972A9.1,9.1,0,0,0-25.152.168c1.644-.4,2.556-1.32,2.556-2.772s-1.26-2.388-3.012-2.388a9.075,9.075,0,0,0-2.64.444v-.42c0-.48.012-1.056.024-1.62a22.03,22.03,0,0,0,2.52-.42l-.024-.936a16.138,16.138,0,0,1-2.472.48c.012-.54.036-1.008.048-1.3A7.7,7.7,0,0,1-28.068-9.588Zm3.72,1.332-.432.72a15.222,15.222,0,0,1,2.688,1.8L-21.6-6.5A21.812,21.812,0,0,0-24.348-8.256Zm-6.456,6.6c0-.54.732-1.236,1.716-1.692.012.876.036,1.692.036,2.124,0,.4-.168.588-.444.588C-29.964-.636-30.8-1.1-30.8-1.656Zm13.2-7.152V-7.8h-2.58V-8.808Zm-2.58,2.76V-7.14h2.58v1.092Zm3.432.72v-4.2H-21.06V.924h.876V-5.328ZM-14.844-3.5v1.98h-2.82V-3.5Zm.828,2.736V-4.26H-18.48V-.048h.816v-.72Zm-.816-5.268v-1.1h2.664v1.1Zm2.664-2.784V-7.8h-2.664V-8.82Zm.9-.708h-4.416v4.2h3.516v5.04c0,.228-.072.3-.288.3-.24.012-1.02.024-1.8-.012a4.314,4.314,0,0,1,.312.912A7.855,7.855,0,0,0-11.8.756c.384-.156.528-.456.528-1.044Zm2.544,1.152L-9.888-8.4A5.413,5.413,0,0,1-9.8-7.332c0,.7.024,2.16.132,3.2C-9.348-1.02-8.256.108-7.116.108c.8,0,1.536-.7,2.256-2.736l-.756-.852c-.312,1.2-.876,2.448-1.488,2.448-.852,0-1.44-1.332-1.632-3.336-.084-1-.1-2.088-.084-2.844A9.137,9.137,0,0,1-8.724-8.376Zm6.252.336-.936.324A12.158,12.158,0,0,1-1.32-1.68l.96-.4A12.9,12.9,0,0,0-2.472-8.04ZM8.16-3.048V-.372H2.652V-3.048ZM1.776.924h.876V.432H8.16V.924h.912V-3.852h-7.3ZM2.4-6.144v.792H8.412v-.792Zm2.472-3.864A13.479,13.479,0,0,1-.156-5.592,3.244,3.244,0,0,1,.4-4.884a14.777,14.777,0,0,0,4.98-4.26,16.049,16.049,0,0,0,5.076,4.188,4.074,4.074,0,0,1,.588-.768,14.255,14.255,0,0,1-5.268-4.284ZM13.716-8.64c0,.132-.024.576-.06,1.14-.624.1-1.332.18-1.728.2-.288.012-.516.024-.78.012l.1,1C12-6.4,13.044-6.54,13.6-6.612c-.036.384-.06.78-.084,1.164-.6.948-1.98,2.82-2.652,3.66l.6.828c.576-.816,1.368-1.956,1.956-2.844,0,.192-.012.36-.012.48-.024,1.308-.024,1.92-.036,3.072a6.652,6.652,0,0,1-.036.708h1.044c-.024-.216-.048-.516-.06-.732-.06-1.068-.048-1.8-.048-2.892,0-.432.012-.912.036-1.416A5.594,5.594,0,0,1,18.06-6.3a2.194,2.194,0,0,1,2.316,2.136c.012,2.064-1.812,3.012-3.84,3.3l.444.9c2.616-.5,4.38-1.764,4.368-4.176A3.032,3.032,0,0,0,18.2-7.176a6.065,6.065,0,0,0-3.828,1.512c.012-.264.036-.528.06-.78.18-.3.384-.624.54-.84l-.36-.42c-.024.012-.036.012-.06.024.084-.84.18-1.512.24-1.812l-1.128-.036A5.735,5.735,0,0,1,13.716-8.64ZM29.88-9.252H28.86a6.787,6.787,0,0,1,.06.9v1.716c-1.284.108-2.676.24-3.852.348.012-.636.012-1.224.012-1.62,0-.372.024-.7.048-.972H24.084a7.288,7.288,0,0,1,.072,1.02c0,.2,0,.864-.012,1.668-.576.048-1.056.1-1.356.12A11.707,11.707,0,0,1,21.54-6l.108.984c.324-.048.84-.12,1.212-.168.312-.036.756-.084,1.284-.144,0,1.2,0,2.472.012,2.988C24.216-.432,24.48.2,27.252.2,28.464.2,29.928.1,30.732.012l.036-1.02A22.8,22.8,0,0,1,27.2-.72c-2.076,0-2.1-.456-2.136-1.752-.012-.468-.012-1.716,0-2.952,1.2-.12,2.6-.264,3.84-.36-.024.756-.072,1.572-.132,1.968-.036.276-.168.324-.456.324a6.209,6.209,0,0,1-1.2-.156L27.1-2.82a11.889,11.889,0,0,0,1.584.168c.552,0,.816-.156.924-.684a17.929,17.929,0,0,0,.168-2.508c.528-.036.984-.06,1.344-.072.3,0,.756-.012.948,0v-.936c-.288.012-.624.036-.936.06-.4.024-.852.048-1.332.084.012-.528.012-1.128.024-1.68C29.832-8.64,29.844-9.048,29.88-9.252Z" transform="translate(-1329 -5608)" fill="#4e443b"/>
                                        <path data-idr="Path_3394" data-name="Path 3394" d="M-4.211-3.819a7.336,7.336,0,0,0,.22,2.054.887.887,0,0,0,.9.712.874.874,0,0,0,.894-.712,7.6,7.6,0,0,0,.212-2.054A7.517,7.517,0,0,0-2.194-5.9a.867.867,0,0,0-.894-.677.879.879,0,0,0-.9.677A7.254,7.254,0,0,0-4.211-3.819Zm1.123-4.023A2.2,2.2,0,0,1-1-6.794,6.061,6.061,0,0,1-.4-3.819,6.028,6.028,0,0,1-1-.849,2.2,2.2,0,0,1-3.088.193,2.2,2.2,0,0,1-5.175-.849a6.028,6.028,0,0,1-.6-2.97,6.061,6.061,0,0,1,.6-2.976A2.2,2.2,0,0,1-3.088-7.842ZM.763-5.371V-6.413a6.751,6.751,0,0,0,1.013-.1,1.427,1.427,0,0,0,.75-.408,1.345,1.345,0,0,0,.3-.559,1.285,1.285,0,0,0,.059-.312H4.163V0H2.594V-5.371Z" transform="translate(-1324 -5669.623)" fill="#4e443b"/>
                                        <path data-idr="Path_3386" data-name="Path 3386" d="M-14.8-8.292v.972c.948.084,1.968.132,3.18.132,1.1,0,2.412-.084,3.228-.144v-.984a31.557,31.557,0,0,1-3.24.168A29.994,29.994,0,0,1-14.8-8.292Zm.48,4.836-.972-.1a6.773,6.773,0,0,0-.252,1.668c0,1.512,1.416,2.316,3.852,2.316A16.915,16.915,0,0,0-7.6.012L-7.608-1.02a15.108,15.108,0,0,1-4.1.468c-1.92,0-2.844-.624-2.844-1.548A4.255,4.255,0,0,1-14.316-3.456Zm6.264-6.18L-8.7-9.36a12.525,12.525,0,0,1,.984,1.68l.648-.3A18.813,18.813,0,0,0-8.052-9.636Zm1.32-.48-.636.276a11.018,11.018,0,0,1,1,1.656l.66-.288A17.489,17.489,0,0,0-6.732-10.116Zm8.8,7.332A4.281,4.281,0,0,1,.468-1.14c-.9-.216-1.848-.42-2.8-.6.24-.324.492-.684.744-1.044Zm-5.76-4.2h1.812v1.62H-3.7Zm2.664-1.74H.9v1.008H-1.032Zm4.776,1.74v1.62H1.752v-1.62Zm-4.776,1.62v-1.62H.9v1.62Zm6.456,2.58v-.744h-6.5c.24-.348.468-.7.672-1.02l-.324-.084H4.62V-7.716H1.752V-8.724H5.124v-.792H-5.124v.792h3.24v1.008H-4.536v3.084H-1.38c-.216.348-.468.72-.72,1.1H-5.412v.744h2.8c-.456.636-.9,1.26-1.272,1.728l.84.288.252-.324q1.1.216,2.16.468A16.557,16.557,0,0,1-5.244.132,2.337,2.337,0,0,1-4.908.9,14.748,14.748,0,0,0,.636-.312,32.364,32.364,0,0,1,4.512.936l.54-.72C4.128-.132,2.9-.516,1.536-.876A4.935,4.935,0,0,0,3.048-2.784ZM15.672-8.952l-.036.84H13.128c.024-.276.048-.552.06-.84Zm-2.76,2.3c.06-.264.108-.552.144-.84h2.556c-.024.312-.036.6-.06.84ZM15.492-6a1.915,1.915,0,0,1-.228.912.345.345,0,0,1-.36.144,10.763,10.763,0,0,1-1.08-.048,1.848,1.848,0,0,1,.2.708,10.622,10.622,0,0,0,1.248,0,.879.879,0,0,0,.7-.324c.3-.372.42-1.476.528-4.644.012-.12.012-.372.012-.372H12.4c-.06,2.328-.24,4.068-1.6,5.04A1.9,1.9,0,0,1,11.328-4a3.838,3.838,0,0,0,1.416-2ZM6.8-6.012c0,.936.252,1.272,1.236,1.272h2.04a4.257,4.257,0,0,0,.984-.072c-.024-.192-.072-.54-.084-.768a5.406,5.406,0,0,1-.912.072H8.028C7.7-5.508,7.62-5.64,7.62-6V-8.016h4.008v-.768H9.216v-1.248h-.84v1.248H5.9v.768h.9ZM11.832-.12V-1.164h3.552V-1.9H11.832V-2.928H15.96v-.756H6.924v.756h4.02V-1.9H7.44v.732h3.5V-.12H6.12V.636H16.692V-.12Zm-36.8,6.892h-1.116a5.844,5.844,0,0,1,.072.972v6.6c0,.972.516,1.392,1.428,1.56a12.779,12.779,0,0,0,1.932.12,33.551,33.551,0,0,0,4.152-.252V14.68a19.72,19.72,0,0,1-4.1.384,11.594,11.594,0,0,1-1.6-.1c-.576-.12-.84-.276-.84-.888V11.44A48.519,48.519,0,0,0-20,9.832c.36-.132.792-.324,1.14-.468l-.42-.972a8.068,8.068,0,0,1-1.056.552,33.725,33.725,0,0,1-4.7,1.512V7.744A7.843,7.843,0,0,1-24.972,6.772ZM-6.228,7.888l-.588-.564a5.926,5.926,0,0,1-.84.072h-6.888a10.183,10.183,0,0,1-1.368-.108V8.38a13.409,13.409,0,0,1,1.368-.072H-7.7A8.152,8.152,0,0,1-10.332,11l.792.636A11.57,11.57,0,0,0-6.552,8.32C-6.468,8.188-6.312,8.008-6.228,7.888Zm-4.788,1.584H-12.1a7.214,7.214,0,0,1,.048.864c0,2-.264,3.708-2.124,4.848a4.133,4.133,0,0,1-1.08.54l.888.72C-11.3,14.92-11.016,12.724-11.016,9.472ZM3.312,6.892H2.184a8.609,8.609,0,0,1,.06,1.044v1.9c0,2.268-.144,3.24-1,4.236a5.5,5.5,0,0,1-2.868,1.6l.78.828A6.41,6.41,0,0,0,2.016,14.74c.864-1.032,1.26-1.98,1.26-4.86V7.936C3.276,7.528,3.288,7.192,3.312,6.892Zm-5.568.1H-3.348c.024.228.048.648.048.864v4a7.865,7.865,0,0,1-.06.924h1.1c-.024-.216-.048-.612-.048-.912V7.852C-2.3,7.564-2.28,7.216-2.256,6.988ZM8.124,7.2l-.684.732a24.922,24.922,0,0,1,2.988,2.508l.756-.756A26.277,26.277,0,0,0,8.124,7.2Zm-1.032,8.04.636.984a13.153,13.153,0,0,0,4.716-1.86A11.989,11.989,0,0,0,16.476,10.1L15.9,9.076a11.3,11.3,0,0,1-4.008,4.416A12.39,12.39,0,0,1,7.092,15.244ZM25.98,6.4l-.636.276a13.572,13.572,0,0,1,.972,1.656l.648-.288A17.007,17.007,0,0,0,25.98,6.4Zm1.32-.48-.636.276a12.472,12.472,0,0,1,1,1.644l.648-.288A17.17,17.17,0,0,0,27.3,5.92ZM22.752,6.976l-1.1-.372a4.45,4.45,0,0,1-.372.96,10.051,10.051,0,0,1-3.768,4.056l.828.612A11.579,11.579,0,0,0,21.384,9.28h4.044a9.744,9.744,0,0,1-1.908,3.744,9.611,9.611,0,0,1-4.8,3.012l.876.792a10.682,10.682,0,0,0,4.776-3.264A11.737,11.737,0,0,0,26.5,9.424a3.771,3.771,0,0,1,.276-.636l-.792-.48a2.3,2.3,0,0,1-.78.108H21.948c.1-.168.192-.336.276-.5C22.344,7.7,22.56,7.288,22.752,6.976Z" transform="translate(-1246 -5616)" fill="#4e443b"/>
                                        <path data-idr="Path_3395" data-name="Path 3395" d="M-4.211-3.819a7.336,7.336,0,0,0,.22,2.054.887.887,0,0,0,.9.712.874.874,0,0,0,.894-.712,7.6,7.6,0,0,0,.212-2.054A7.517,7.517,0,0,0-2.194-5.9a.867.867,0,0,0-.894-.677.879.879,0,0,0-.9.677A7.254,7.254,0,0,0-4.211-3.819Zm1.123-4.023A2.2,2.2,0,0,1-1-6.794,6.061,6.061,0,0,1-.4-3.819,6.028,6.028,0,0,1-1-.849,2.2,2.2,0,0,1-3.088.193,2.2,2.2,0,0,1-5.175-.849a6.028,6.028,0,0,1-.6-2.97,6.061,6.061,0,0,1,.6-2.976A2.2,2.2,0,0,1-3.088-7.842ZM.344,0A3.66,3.66,0,0,1,.7-1.531,4.328,4.328,0,0,1,2.25-3.18,11.344,11.344,0,0,0,3.62-4.265,1.6,1.6,0,0,0,4.1-5.382,1.238,1.238,0,0,0,3.824-6.2a.965.965,0,0,0-.784-.328.956.956,0,0,0-.951.521,2.584,2.584,0,0,0-.172.956H.43A3.759,3.759,0,0,1,.79-6.66,2.244,2.244,0,0,1,2.967-7.826a2.763,2.763,0,0,1,1.968.685,2.367,2.367,0,0,1,.731,1.813A2.451,2.451,0,0,1,5.15-3.792,5.142,5.142,0,0,1,4.036-2.8l-.613.435q-.576.408-.788.591a1.731,1.731,0,0,0-.357.424h3.4V0Z" transform="translate(-1246 -5669.623)" fill="#4e443b"/>
                                        <path data-idr="Path_3387" data-name="Path 3387" d="M-15.6-2.6v1.536h-2.916V-2.6Zm.816,2.232V-3.3h-4.524V.36h.792V-.372ZM-18.42-6.828a6.614,6.614,0,0,0-.564-1.26h3.744a11.2,11.2,0,0,1-.624,1.26Zm6.48-1.26V-8.9h-4.752v-1.128h-.9V-8.9h-4.644v.816h2.292a9.007,9.007,0,0,1,.564,1.26h-2.352V.9h.84V-6.048h2.148c-.12,1.116-.552,1.668-2.064,1.98a2.16,2.16,0,0,1,.432.624c1.752-.42,2.292-1.164,2.436-2.6h1.428v1.2c0,.744.2.936,1.044.936h1.236c.636,0,.852-.24.936-1.2a1.778,1.778,0,0,1-.684-.276c-.036.708-.084.792-.348.792h-1.044c-.3,0-.348-.024-.348-.264V-6.048h2.508V-.192c0,.192-.06.252-.264.252s-.936.024-1.716-.012a3.09,3.09,0,0,1,.3.864,7.729,7.729,0,0,0,2.04-.144c.384-.144.5-.432.5-.96V-6.828H-14.88c.216-.36.456-.8.684-1.26Zm8.64,1.68H-8.064V-8.676H-3.3Zm.9-3.12H-8.928v3.972H-2.4Zm-4.908,6.1V-.588H-9.816V-3.432ZM-10.668.924h.852V.276h2.508v.54h.876V-4.3h-4.236ZM-4.26-.588V-3.432h2.724V-.588ZM-5.124-4.3V.924h.864V.276h2.724V.84H-.66V-4.3ZM9.756-8.172h-2.3v1.248c0,.72.252.9,1.14.9H10.2c.636,0,.864-.216.948-1.02a2.16,2.16,0,0,1-.66-.252c-.036.564-.1.636-.384.636H8.676c-.4,0-.468-.048-.468-.276v-.612h2.34V-9.576H7.224v.624H9.756Zm-3.864,0H3.54v1.248c0,.72.228.9,1.116.9H6.144c.612,0,.84-.2.924-.984a1.683,1.683,0,0,1-.66-.252c-.036.528-.1.6-.384.6h-1.3c-.384,0-.444-.048-.444-.264v-.624H6.648V-9.576H3.324v.624H5.892ZM6.084-4.32H8.052v1.14H6.084Zm4.992,1.14H8.9V-4.32h1.8V-5H8.9v-.864H8.052V-5H6.084v-.864H5.256V-5H3.48v.684H5.256v1.14H3.1v.7h7.98ZM10.9-.888a14.688,14.688,0,0,0-2.424-1.44l-.636.4A11.6,11.6,0,0,1,10.032-.5ZM5.652-2.352A7.925,7.925,0,0,1,3.42-1.092a4.3,4.3,0,0,1,.66.564A10.314,10.314,0,0,0,6.444-2.076ZM2.868-7.764A8.235,8.235,0,0,0,1.032-9.756L.348-9.3A8.216,8.216,0,0,1,2.124-7.26ZM2.592-5.34H.288v.84H1.764v3.1A17.769,17.769,0,0,1,.144-.024L.612.8C1.188.276,1.728-.228,2.232-.756A4.2,4.2,0,0,0,5.652.684C7.008.732,9.6.708,10.956.648a3.016,3.016,0,0,1,.288-.84C9.78-.1,6.984-.06,5.628-.12A3.509,3.509,0,0,1,2.592-1.488ZM13-7.824h8.172v1.752h.912V-8.664H17.544v-1.368H16.62v1.368h-4.5v2.592H13Zm4.548,5.1H21.1v-.828H17.544V-5.544H20.6v-.84H13.656v.84h2.976V-.516a3.6,3.6,0,0,1-2.208-2.316,15.147,15.147,0,0,0,.288-1.6L13.8-4.512C13.536-2.364,12.888-.66,11.556.372a4.658,4.658,0,0,1,.732.6A6.574,6.574,0,0,0,14.076-1.7C15.168.324,16.956.756,19.44.756h2.784a2.63,2.63,0,0,1,.336-.9c-.576.012-2.64.012-3.072.012a10.955,10.955,0,0,1-1.944-.144ZM-19.512,5.992a13.588,13.588,0,0,1-3.264,4.884,3.956,3.956,0,0,1,.54.864,11.623,11.623,0,0,0,1.4-1.608V16.9h.876V8.824a19.065,19.065,0,0,0,1.3-2.568Zm7.944,4.62V9.748H-15v-3.6h-.9v3.6h-3.408v.864H-15.9v4.956h-3.12v.864h7.248v-.864H-15V10.612ZM-7.1,12.256c-.2-.324-1.1-1.68-1.44-2.124V9.376h1.368V8.548H-8.544V5.956H-9.36V8.548h-1.68v.828h1.584a13.025,13.025,0,0,1-1.824,4.5,4.978,4.978,0,0,1,.456.768A12.53,12.53,0,0,0-9.36,11.3v5.6h.816V11.188c.36.6.78,1.344.948,1.728Zm2.424,1.656c-1.092.6-2.22,1.212-2.976,1.6l.42.744c.816-.456,1.836-1.044,2.8-1.608ZM-6.792,12.3a8.7,8.7,0,0,1,1.2,1.608l.648-.456A8.4,8.4,0,0,0-6.18,11.908Zm4.74,1.668A16.1,16.1,0,0,0-.42,12.34l-.684-.48A12.335,12.335,0,0,1-2.58,13.468a7.408,7.408,0,0,1-.72-1.56v-.48H-.276v-.756H-3.3V9.748H-.708v-.7H-3.3V8.2H-.444V7.468H-2.028c.228-.36.492-.828.744-1.272l-.876-.252a10.444,10.444,0,0,1-.7,1.488l.108.036H-4.836l.216-.084A6.375,6.375,0,0,0-5.34,6l-.7.228a8.954,8.954,0,0,1,.6,1.236h-1.5V8.2h2.772v.852H-6.588v.7h2.424v.924H-7.188v.756h3.024v4.488c0,.156-.036.2-.192.2s-.672.012-1.2,0a2.916,2.916,0,0,1,.252.816,4.487,4.487,0,0,0,1.6-.156c.312-.144.408-.384.408-.864V13.6A6.306,6.306,0,0,0-.636,16.408a3.794,3.794,0,0,1,.576-.72,5.269,5.269,0,0,1-2.376-2Zm8.316.408h1.62v1.248H6.264Zm1.62-2.664H6.264V10.492h1.62Zm0,1.968H6.264V12.412h1.62Zm-4.392.984H1.944V11.02H3.492Zm7.68.96H8.724V14.38h1.884v-.7H8.724V12.412h1.884v-.7H8.724V10.492H10.8V9.736H8.9c.18-.372.384-.8.576-1.212l-.84-.2A12.466,12.466,0,0,1,8.1,9.736H6.636A11.427,11.427,0,0,0,7.608,7.96h2.7V9.22h.8V7.18H7.92c.12-.336.228-.7.336-1.056L7.4,5.956a10.407,10.407,0,0,1-.4,1.224h-2.4V9.22h.78V7.96H6.672a8.31,8.31,0,0,1-2.424,3.108v-.816H2.028a22.247,22.247,0,0,0,.54-2.664H4.584V6.772H.372v.816H1.728A13.1,13.1,0,0,1,.036,12.856a5.457,5.457,0,0,1,.5.828,7.774,7.774,0,0,0,.672-1.164v3.864h.732v-.936h2.3V11.224a5.723,5.723,0,0,1,.54.564c.216-.18.432-.36.636-.564v5.688h.84V16.4h4.908ZM13,8.176h8.172V9.928h.912V7.336H17.544V5.968H16.62V7.336h-4.5V9.928H13Zm4.548,5.1H21.1v-.828H17.544V10.456H20.6v-.84H13.656v.84h2.976v5.028a3.6,3.6,0,0,1-2.208-2.316,15.147,15.147,0,0,0,.288-1.6l-.912-.084c-.264,2.148-.912,3.852-2.244,4.884a4.658,4.658,0,0,1,.732.6A6.574,6.574,0,0,0,14.076,14.3c1.092,2.028,2.88,2.46,5.364,2.46h2.784a2.63,2.63,0,0,1,.336-.9c-.576.012-2.64.012-3.072.012a10.955,10.955,0,0,1-1.944-.144Z" transform="translate(-1153 -5616)" fill="#4e443b"/>
                                        <path data-idr="Path_3396" data-name="Path 3396" d="M-4.211-3.819a7.336,7.336,0,0,0,.22,2.054.887.887,0,0,0,.9.712.874.874,0,0,0,.894-.712,7.6,7.6,0,0,0,.212-2.054A7.517,7.517,0,0,0-2.194-5.9a.867.867,0,0,0-.894-.677.879.879,0,0,0-.9.677A7.254,7.254,0,0,0-4.211-3.819Zm1.123-4.023A2.2,2.2,0,0,1-1-6.794,6.061,6.061,0,0,1-.4-3.819,6.028,6.028,0,0,1-1-.849,2.2,2.2,0,0,1-3.088.193,2.2,2.2,0,0,1-5.175-.849a6.028,6.028,0,0,1-.6-2.97,6.061,6.061,0,0,1,.6-2.976A2.2,2.2,0,0,1-3.088-7.842ZM1.794-2.39a1.754,1.754,0,0,0,.15.773,1.028,1.028,0,0,0,1.013.564,1.121,1.121,0,0,0,.785-.309,1.149,1.149,0,0,0,.335-.889,1,1,0,0,0-.621-1.026,3.144,3.144,0,0,0-1.114-.145v-1.1A2.879,2.879,0,0,0,3.38-4.662a.9.9,0,0,0,.508-.913,1.022,1.022,0,0,0-.26-.725A.949.949,0,0,0,2.9-6.58a.924.924,0,0,0-.8.344,1.461,1.461,0,0,0-.244.918H.43a3.847,3.847,0,0,1,.2-1.1,2.479,2.479,0,0,1,.59-.843,2.056,2.056,0,0,1,.714-.419,3.085,3.085,0,0,1,1.014-.145,2.7,2.7,0,0,1,1.8.577A1.924,1.924,0,0,1,5.43-5.7a1.713,1.713,0,0,1-.408,1.16,1.394,1.394,0,0,1-.537.4,1.1,1.1,0,0,1,.6.36,1.922,1.922,0,0,1,.585,1.482A2.5,2.5,0,0,1,4.988-.556,2.606,2.606,0,0,1,2.962.193a2.45,2.45,0,0,1-2.3-1.08A3.207,3.207,0,0,1,.29-2.39Z" transform="translate(-1153 -5669.623)" fill="#4e443b"/>
                                        <path data-idr="Path_3388" data-name="Path 3388" d="M-14.28-5.508V-5.94h1.32c.528,0,.972.024,1.1.036V-6.912a8.823,8.823,0,0,1-1.1.06h-1.32v-1.5a9.1,9.1,0,0,1,.06-.984H-15.3a6.69,6.69,0,0,1,.06.984v1.5h-3.42V-8.388a7.407,7.407,0,0,1,.06-.876h-1.068a7.411,7.411,0,0,1,.048.876v1.536h-1.3a8.8,8.8,0,0,1-1.2-.084v1.044c.144-.012.684-.048,1.2-.048h1.3V-4c0,.456-.036.972-.048,1.092h1.056c-.012-.12-.048-.648-.048-1.092V-5.94h3.42v.5c0,3.36-1.092,4.392-3.276,5.232l.8.756C-14.964-.672-14.28-2.316-14.28-5.508ZM-8.8-8.8l-.684.732A24.922,24.922,0,0,1-6.492-5.556l.756-.756A26.277,26.277,0,0,0-8.8-8.8ZM-9.828-.756l.636.984a13.153,13.153,0,0,0,4.716-1.86A11.989,11.989,0,0,0-.444-5.9l-.576-1.02A11.3,11.3,0,0,1-5.028-2.508,12.391,12.391,0,0,1-9.828-.756ZM9.18-8.616a.8.8,0,0,1,.792-.8.8.8,0,0,1,.8.8.8.8,0,0,1-.8.792A.8.8,0,0,1,9.18-8.616Zm-.552,0a1.352,1.352,0,0,0,.06.384c-.144.012-.276.012-.384.012H2.28A9.261,9.261,0,0,1,1.08-8.3v1.068c.312-.012.72-.036,1.2-.036H8.412A8.981,8.981,0,0,1,6.84-3.36,7.9,7.9,0,0,1,2.16-.48l.816.9A9.087,9.087,0,0,0,7.7-2.784,11.723,11.723,0,0,0,9.492-7.212a.619.619,0,0,0,.024-.132,1.451,1.451,0,0,0,.456.072,1.352,1.352,0,0,0,1.356-1.344A1.362,1.362,0,0,0,9.972-9.972,1.352,1.352,0,0,0,8.628-8.616Zm8.58,8.364.636.528A2.568,2.568,0,0,1,18.252,0a11.93,11.93,0,0,0,4.092-3.324L21.78-4.14a9.22,9.22,0,0,1-3.5,2.952V-8.112A7.426,7.426,0,0,1,18.324-9h-1.1a5.7,5.7,0,0,1,.072.888V-.924A2.857,2.857,0,0,1,17.208-.252Zm-5.5-.06.9.612A6.707,6.707,0,0,0,14.748-3a26.25,26.25,0,0,0,.372-5.1c0-.36.048-.72.06-.864h-1.1a4.421,4.421,0,0,1,.084.876,21.422,21.422,0,0,1-.36,4.824A5.7,5.7,0,0,1,11.712-.312ZM-8.256,6a13.359,13.359,0,0,1-2.964,4.764,4.482,4.482,0,0,1,.516.888,11.9,11.9,0,0,0,1.188-1.428V16.9h.888V8.848A18.569,18.569,0,0,0-7.4,6.28ZM-.2,8.812V7.96H-5.2c.24-.528.468-1.068.66-1.62l-.852-.228a12.713,12.713,0,0,1-2.64,4.6,5.835,5.835,0,0,1,.7.6,13.151,13.151,0,0,0,1.7-2.5H-4.8v8.1h.9v-2.9H-.312v-.84H-3.9V11.356H-.48v-.828H-3.9V8.812ZM7.74,6.556A12.284,12.284,0,0,1,9.864,8l.552-.612A11.446,11.446,0,0,0,8.268,6.016Zm1.7,3.24a11.883,11.883,0,0,1-1.536,3.24,21.644,21.644,0,0,1-.66-4.164h3.816V8H7.188c-.036-.648-.048-1.32-.048-2.016H6.216c.012.684.024,1.356.072,2.016h-5v3.348A9.313,9.313,0,0,1,.192,16.408a3.55,3.55,0,0,1,.744.6c1.08-1.56,1.26-3.972,1.26-5.652v-.1H4.38c-.048,2.064-.108,2.82-.276,3-.072.108-.192.132-.36.132-.2,0-.72-.012-1.272-.06a1.854,1.854,0,0,1,.252.84,13.846,13.846,0,0,0,1.428,0,.928.928,0,0,0,.72-.348c.252-.312.324-1.32.384-4.008v-.384H2.2V8.872h4.14a23.6,23.6,0,0,0,.876,5.052,9.576,9.576,0,0,1-2.76,2.22,5.023,5.023,0,0,1,.648.708A10.729,10.729,0,0,0,7.572,14.86c.552,1.236,1.272,1.968,2.2,1.968S11,16.24,11.172,14.2a2.109,2.109,0,0,1-.768-.48c-.084,1.6-.228,2.22-.564,2.22-.612,0-1.164-.684-1.608-1.86a13.531,13.531,0,0,0,2.112-4.056Z" transform="translate(-1065 -5616)" fill="#4e443b"/>
                                        <path data-idr="Path_3397" data-name="Path 3397" d="M-4.211-3.819a7.336,7.336,0,0,0,.22,2.054.887.887,0,0,0,.9.712.874.874,0,0,0,.894-.712,7.6,7.6,0,0,0,.212-2.054A7.517,7.517,0,0,0-2.194-5.9a.867.867,0,0,0-.894-.677.879.879,0,0,0-.9.677A7.254,7.254,0,0,0-4.211-3.819Zm1.123-4.023A2.2,2.2,0,0,1-1-6.794,6.061,6.061,0,0,1-.4-3.819,6.028,6.028,0,0,1-1-.849,2.2,2.2,0,0,1-3.088.193,2.2,2.2,0,0,1-5.175-.849a6.028,6.028,0,0,1-.6-2.97,6.061,6.061,0,0,1,.6-2.976A2.2,2.2,0,0,1-3.088-7.842ZM5.752-1.676H4.872V0h-1.5V-1.676H.29V-3.013L3.153-7.74H4.872v4.866h.881Zm-2.379-1.2V-6.228L1.429-2.874Z" transform="translate(-1065 -5669.623)" fill="#4e443b"/>
                                        <path data-idr="Path_3389" data-name="Path 3389" d="M-16.62-.324V-3.372h3.852v-.864H-16.62V-6.852h4.3v-.876h-4.3v-2.3h-.912v2.3h-2.436a16.472,16.472,0,0,0,.672-1.92l-.9-.192a10.939,10.939,0,0,1-2.22,4.416A5.975,5.975,0,0,1-21.6-4.9a10.767,10.767,0,0,0,1.248-1.956h2.82v2.616H-21.1v.864h3.564V-.324h-4.86V.54H-11.76V-.324Zm12.3-1.3h2.868v-.72H-4.32V-3.6h3.18v-.72H-4.32V-5.388h-.888V-4.32h-1.86a6.617,6.617,0,0,0,.4-.9l-.8-.192a6.309,6.309,0,0,1-1.536,2.5,4.9,4.9,0,0,1,.7.432A7.771,7.771,0,0,0-7.464-3.6h2.256v1.26H-7.92v.72h2.712V-.108H-8.94V.66H-.42V-.108h-3.9ZM-3.636-8.2a13.941,13.941,0,0,1-.648,1.572l.42.144h-3.66l.54-.156a5.14,5.14,0,0,0-.66-1.56Zm.12,1.716c.276-.444.6-1.044.9-1.608L-3.06-8.2H-.972v-.768H-5.256v-1.08h-.876v1.08h-4.212V-8.2H-7.86l-.612.168A6.6,6.6,0,0,1-7.836-6.48h-2.328v1.86A9.354,9.354,0,0,1-11.256.336,3.89,3.89,0,0,1-10.572.9a10.614,10.614,0,0,0,1.26-5.52V-5.688H-.36V-6.48ZM8.916-1.344V-.18H3.288V-1.344ZM8.148-4.56v1.02H3.288V-4.56Zm-4.86,1.7H9.024V-5.244H2.448V.924h.84V.516H8.916V.9h.876V-2.04h-6.5Zm7.86-6.276H7.08a6.3,6.3,0,0,0,.372-.756l-.852-.2A5.632,5.632,0,0,1,5.544-8.436v-.7H2.4a5.973,5.973,0,0,0,.348-.744l-.828-.216A6.575,6.575,0,0,1,.192-7.6a5.511,5.511,0,0,1,.732.48A8.182,8.182,0,0,0,1.956-8.388h.516a7.563,7.563,0,0,1,.564,1.224l.792-.24a5.446,5.446,0,0,0-.468-.984H5.5a4.807,4.807,0,0,1-.744.66,4.356,4.356,0,0,1,.492.276V-6.7H.72v2.244h.84V-5.988H9.9v1.536h.864V-6.7H6.1v-.936h-.18a8.351,8.351,0,0,0,.672-.756h.96a5.573,5.573,0,0,1,.8,1.26L9.168-7.4a5.969,5.969,0,0,0-.648-.984h2.628Zm4.188,6.72-1.308.432V-4.956h1.2v-.828h-1.2v-2.6h1.38v-.84h-3.72v.84h1.488v2.6H11.82v.828h1.356v3.24c-.612.2-1.164.372-1.608.5l.2.9c1.068-.348,2.436-.816,3.72-1.248Zm1.476-4.044h1.824v1.524H16.812Zm0-2.256h1.824V-7.2H16.812ZM21.24-7.2H19.4V-8.712H21.24Zm0,2.268H19.4V-6.456H21.24ZM19.476-.288V-1.932h2.8v-.816h-2.8v-1.4h2.616v-5.34H16v5.34h2.58v1.4H15.852v.816h2.724V-.288H14.928V.528h7.728V-.288Z" transform="translate(-992 -5608)" fill="#4e443b"/>
                                        <path data-idr="Path_3398" data-name="Path 3398" d="M-4.211-3.819a7.336,7.336,0,0,0,.22,2.054.887.887,0,0,0,.9.712.874.874,0,0,0,.894-.712,7.6,7.6,0,0,0,.212-2.054A7.517,7.517,0,0,0-2.194-5.9a.867.867,0,0,0-.894-.677.879.879,0,0,0-.9.677A7.254,7.254,0,0,0-4.211-3.819Zm1.123-4.023A2.2,2.2,0,0,1-1-6.794,6.061,6.061,0,0,1-.4-3.819,6.028,6.028,0,0,1-1-.849,2.2,2.2,0,0,1-3.088.193,2.2,2.2,0,0,1-5.175-.849a6.028,6.028,0,0,1-.6-2.97,6.061,6.061,0,0,1,.6-2.976A2.2,2.2,0,0,1-3.088-7.842Zm4.9,5.758a1.479,1.479,0,0,0,.348.771.985.985,0,0,0,.75.271,1.011,1.011,0,0,0,.865-.4,1.642,1.642,0,0,0,.3-1.007A1.753,1.753,0,0,0,3.8-3.456a.975.975,0,0,0-.868-.411,1.49,1.49,0,0,0-.482.07.959.959,0,0,0-.541.478L.534-3.384l.547-4.3H5.366v1.3H2.185l-.279,1.7a3.194,3.194,0,0,1,.552-.306,2.336,2.336,0,0,1,.81-.124,2.431,2.431,0,0,1,1.684.65,2.419,2.419,0,0,1,.719,1.891A2.968,2.968,0,0,1,4.98-.645,2.516,2.516,0,0,1,2.909.2a2.749,2.749,0,0,1-1.824-.6A2.317,2.317,0,0,1,.29-2.084Z" transform="translate(-992 -5669.623)" fill="#4e443b"/>
                                        <path data-idr="Path_3390" data-name="Path 3390" d="M-10.572-3.24a8.624,8.624,0,0,1-.78,2.856,3.117,3.117,0,0,1,.7.336A10.561,10.561,0,0,0-9.8-3.1Zm2.472.132a11.767,11.767,0,0,1,.732,2.2l.684-.228a11.125,11.125,0,0,0-.768-2.184Zm-.312-2.808a9.15,9.15,0,0,1,.564,1.08l-1.776.072A41.174,41.174,0,0,0-7.236-8.34l-.756-.336A24.44,24.44,0,0,1-9.2-6.528a9.637,9.637,0,0,0-.7-.78c.444-.672.948-1.62,1.356-2.412l-.78-.312A15.175,15.175,0,0,1-10.4-7.8c-.12-.108-.228-.216-.348-.312l-.456.588A11.177,11.177,0,0,1-9.66-5.832c-.264.4-.54.78-.792,1.1l-.792.036.072.792c.552-.036,1.2-.072,1.884-.108V.936H-8.5V-4.056l.948-.06a5.584,5.584,0,0,1,.216.7l.672-.3A9.5,9.5,0,0,0-7.788-6.168ZM-5.8-6.972h1.788c-.18,1.9-.624,3.492-1.788,4.5ZM-.528-7.8H-3.12c.048-.72.072-1.464.084-2.244h-.84c-.012.78-.024,1.524-.072,2.244h-2.64V.9H-5.8V-2.364a2.334,2.334,0,0,1,.516.516A5.6,5.6,0,0,0-3.564-4.764,26.213,26.213,0,0,1-2-1.956l.66-.564a27.911,27.911,0,0,0-1.98-3.324c.06-.372.108-.744.144-1.128h1.848V-.108c0,.168-.048.216-.2.216S-2.22.12-2.772.1A3.057,3.057,0,0,1-2.5.924,4.374,4.374,0,0,0-.924.768c.3-.132.4-.4.4-.864ZM8.1-6.408H3.336V-8.676H8.1ZM9-9.528H2.472v3.972H9Zm-4.908,6.1V-.588H1.584V-3.432ZM.732.924h.852V.276H4.092v.54h.876V-4.3H.732ZM7.14-.588V-3.432H9.864V-.588ZM6.276-4.3V.924H7.14V.276H9.864V.84h.876V-4.3Z" transform="translate(-924 -5608)" fill="#4e443b"/>
                                        <path data-idr="Path_3399" data-name="Path 3399" d="M-4.211-3.819a7.336,7.336,0,0,0,.22,2.054.887.887,0,0,0,.9.712.874.874,0,0,0,.894-.712,7.6,7.6,0,0,0,.212-2.054A7.517,7.517,0,0,0-2.194-5.9a.867.867,0,0,0-.894-.677.879.879,0,0,0-.9.677A7.254,7.254,0,0,0-4.211-3.819Zm1.123-4.023A2.2,2.2,0,0,1-1-6.794,6.061,6.061,0,0,1-.4-3.819,6.028,6.028,0,0,1-1-.849,2.2,2.2,0,0,1-3.088.193,2.2,2.2,0,0,1-5.175-.849a6.028,6.028,0,0,1-.6-2.97,6.061,6.061,0,0,1,.6-2.976A2.2,2.2,0,0,1-3.088-7.842ZM1.88-2.465a1.527,1.527,0,0,0,.338,1.026,1.079,1.079,0,0,0,.859.4.954.954,0,0,0,.8-.384,1.6,1.6,0,0,0,.293-1A1.491,1.491,0,0,0,3.84-3.467a1.066,1.066,0,0,0-.816-.363,1.09,1.09,0,0,0-.693.236A1.338,1.338,0,0,0,1.88-2.465ZM4.034-5.828a.781.781,0,0,0-.145-.414.841.841,0,0,0-.747-.365,1.1,1.1,0,0,0-1.063.838A5.2,5.2,0,0,0,1.842-4.4,1.718,1.718,0,0,1,2.5-4.9a2.229,2.229,0,0,1,.859-.156,2.233,2.233,0,0,1,1.7.7,2.518,2.518,0,0,1,.663,1.8,3.037,3.037,0,0,1-.65,1.923A2.4,2.4,0,0,1,3.056.2a2.324,2.324,0,0,1-2.17-1.23A5.015,5.015,0,0,1,.344-3.507a11.284,11.284,0,0,1,.075-1.45A4.435,4.435,0,0,1,.94-6.612a2.666,2.666,0,0,1,.873-.908A2.354,2.354,0,0,1,3.1-7.863a2.557,2.557,0,0,1,1.729.556,2.114,2.114,0,0,1,.725,1.48Z" transform="translate(-924 -5669.623)" fill="#4e443b"/>
                                        <rect data-idr="Rectangle_131" data-name="Rectangle 131" width="151.963" height="20.292" transform="translate(-1365 -5590)" fill="#f6f4e8"/>
                                        <path data-idr="Path_3393" data-name="Path 3393" d="M-20.862-3.24a8.624,8.624,0,0,1-.78,2.856,3.117,3.117,0,0,1,.7.336A10.561,10.561,0,0,0-20.094-3.1Zm2.6.168A11.951,11.951,0,0,1-17.49-.744l.708-.24a10.4,10.4,0,0,0-.8-2.3Zm-.3-2.844a11.221,11.221,0,0,1,.588,1.068c-.66.024-1.32.06-1.92.084A38.757,38.757,0,0,0-17.406-8.34l-.768-.336c-.336.648-.792,1.428-1.284,2.184a8.445,8.445,0,0,0-.732-.828,21.592,21.592,0,0,0,1.368-2.412l-.792-.3A16.379,16.379,0,0,1-20.682-7.8c-.12-.108-.24-.216-.36-.312l-.456.588a10.9,10.9,0,0,1,1.572,1.716,11.784,11.784,0,0,1-.8,1.068c-.276.012-.552.024-.792.024l.072.8,1.956-.1V.936h.8V-4.056l1.044-.06a4.14,4.14,0,0,1,.228.684l.708-.336A10.257,10.257,0,0,0-17.9-6.2Zm7.8-1.968h-4.4A15.242,15.242,0,0,0-14.43-9.84l-.9-.2a10.55,10.55,0,0,1-2.136,4.152,6.328,6.328,0,0,1,.78.528,9.5,9.5,0,0,0,1.116-1.68h3.936c-.18,4.68-.384,6.5-.78,6.912a.589.589,0,0,1-.516.18c-.3,0-1.032,0-1.836-.072a2.042,2.042,0,0,1,.288.876A14.037,14.037,0,0,0-12.63.876a1.234,1.234,0,0,0,1-.48c.492-.588.66-2.448.876-7.824Zm-2.688,5.328a12.134,12.134,0,0,0-1.68-2.736l-.72.348a12.849,12.849,0,0,1,1.62,2.8ZM-9.462,0H-3.93V-.948H-6.366c-.444,0-.984.048-1.44.084,2.064-1.956,3.444-3.744,3.444-5.5a2.413,2.413,0,0,0-2.556-2.6,3.364,3.364,0,0,0-2.592,1.3l.636.624A2.463,2.463,0,0,1-7.05-8.064a1.546,1.546,0,0,1,1.62,1.74C-5.43-4.812-6.7-3.06-9.462-.648ZM1.182-3.444a2.023,2.023,0,0,0,1.668-1.2l-.624-.444c-.3.576-.636.816-1.02.816C.45-4.272-.114-5.4-1.17-5.4A2.024,2.024,0,0,0-2.85-4.2l.612.432c.312-.576.648-.816,1.032-.816C-.45-4.584.126-3.444,1.182-3.444ZM6.5.156a2.561,2.561,0,0,0,2.82-2.508,2.263,2.263,0,0,0-1.86-2.232v-.048a2.2,2.2,0,0,0,1.56-2.124A2.26,2.26,0,0,0,6.462-8.964,3.522,3.522,0,0,0,4-7.908l.588.7a2.568,2.568,0,0,1,1.824-.852A1.35,1.35,0,0,1,7.9-6.672c0,.948-.624,1.68-2.436,1.68v.84C7.494-4.152,8.2-3.444,8.2-2.4A1.622,1.622,0,0,1,6.414-.756,2.908,2.908,0,0,1,4.23-1.764l-.552.72A3.641,3.641,0,0,0,6.5.156ZM13.05-.876V-4.224H19V-.876ZM19-8.34V-5.1H13.05V-8.34ZM12.15-9.216v10h.9V0H19V.732h.936V-9.216Z" transform="translate(-1289 -5576)" fill="#4e443b"/>
                                        <path data-idr="Path_3384" data-name="Path 3384" d="M0,0H176V20.292H0Z" transform="translate(-1211 -5590)" fill="#f6f4e8"/>
                                        <path data-idr="Path_3392" data-name="Path 3392" d="M-26.862-3.24a8.624,8.624,0,0,1-.78,2.856,3.117,3.117,0,0,1,.7.336A10.561,10.561,0,0,0-26.094-3.1Zm2.6.168A11.951,11.951,0,0,1-23.49-.744l.708-.24a10.4,10.4,0,0,0-.8-2.3Zm-.3-2.844a11.221,11.221,0,0,1,.588,1.068c-.66.024-1.32.06-1.92.084A38.757,38.757,0,0,0-23.406-8.34l-.768-.336c-.336.648-.792,1.428-1.284,2.184a8.445,8.445,0,0,0-.732-.828,21.592,21.592,0,0,0,1.368-2.412l-.792-.3A16.379,16.379,0,0,1-26.682-7.8c-.12-.108-.24-.216-.36-.312l-.456.588a10.9,10.9,0,0,1,1.572,1.716,11.784,11.784,0,0,1-.8,1.068c-.276.012-.552.024-.792.024l.072.8,1.956-.1V.936h.8V-4.056l1.044-.06a4.14,4.14,0,0,1,.228.684l.708-.336A10.257,10.257,0,0,0-23.9-6.2Zm7.8-1.968h-4.4A15.242,15.242,0,0,0-20.43-9.84l-.9-.2a10.55,10.55,0,0,1-2.136,4.152,6.328,6.328,0,0,1,.78.528,9.5,9.5,0,0,0,1.116-1.68h3.936c-.18,4.68-.384,6.5-.78,6.912a.589.589,0,0,1-.516.18c-.3,0-1.032,0-1.836-.072a2.042,2.042,0,0,1,.288.876A14.037,14.037,0,0,0-18.63.876a1.234,1.234,0,0,0,1-.48c.492-.588.66-2.448.876-7.824Zm-2.688,5.328a12.134,12.134,0,0,0-1.68-2.736l-.72.348a12.849,12.849,0,0,1,1.62,2.8ZM-14.934,0h4.824V-.912h-1.764v-7.9h-.84a5.3,5.3,0,0,1-1.824.636v.7h1.56V-.912h-1.956ZM-4.818-3.444a2.023,2.023,0,0,0,1.668-1.2l-.624-.444c-.3.576-.636.816-1.02.816C-5.55-4.272-6.114-5.4-7.17-5.4A2.024,2.024,0,0,0-8.85-4.2l.612.432c.312-.576.648-.816,1.032-.816C-6.45-4.584-5.874-3.444-4.818-3.444ZM-2.142,0H3.39V-.948H.954C.51-.948-.03-.9-.486-.864,1.578-2.82,2.958-4.608,2.958-6.36A2.413,2.413,0,0,0,.4-8.964a3.364,3.364,0,0,0-2.592,1.3l.636.624A2.463,2.463,0,0,1,.27-8.064a1.546,1.546,0,0,1,1.62,1.74C1.89-4.812.618-3.06-2.142-.648ZM9.15-7.116,8.082-7.344a4.606,4.606,0,0,1-.132.708A5.867,5.867,0,0,1,7.3-5.1,8.058,8.058,0,0,1,5.49-3.012l.876.516a9.594,9.594,0,0,0,1.68-2.088h2.568A5.736,5.736,0,0,1,8.49-.2a5.888,5.888,0,0,1-.948.552L8.49.972c1.776-1.08,2.856-2.784,3.048-5.556H13.3c.24,0,.624.012.936.036V-5.5a6.433,6.433,0,0,1-.936.06H8.49c.168-.36.324-.756.432-1.056A5.748,5.748,0,0,1,9.15-7.116ZM19.266-3.672A15.066,15.066,0,0,0,19.4-5.688h5.484v2.016Zm5.616-4.86V-6.54H19.4V-8.532Zm.924-.876H18.5v3.672c0,1.908-.192,4.344-2.1,6.024a3.377,3.377,0,0,1,.66.648A6.769,6.769,0,0,0,19.122-2.8h5.76V-.4c0,.264-.1.348-.372.36s-1.236.012-2.232-.024a4.256,4.256,0,0,1,.372.924A9.649,9.649,0,0,0,25.182.7c.444-.144.624-.456.624-1.08Z" transform="translate(-1123 -5576)" fill="#4e443b"/>
                                        <path data-idr="Path_3383" data-name="Path 3383" d="M10,0H144.443V20.292H10Z" transform="translate(-1043 -5590)" fill="#f6f4e8"/>
                                        <path data-idr="Path_3391" data-name="Path 3391" d="M-26.862-3.24a8.624,8.624,0,0,1-.78,2.856,3.117,3.117,0,0,1,.7.336A10.561,10.561,0,0,0-26.094-3.1Zm2.6.168A11.951,11.951,0,0,1-23.49-.744l.708-.24a10.4,10.4,0,0,0-.8-2.3Zm-.3-2.844a11.221,11.221,0,0,1,.588,1.068c-.66.024-1.32.06-1.92.084A38.757,38.757,0,0,0-23.406-8.34l-.768-.336c-.336.648-.792,1.428-1.284,2.184a8.445,8.445,0,0,0-.732-.828,21.592,21.592,0,0,0,1.368-2.412l-.792-.3A16.379,16.379,0,0,1-26.682-7.8c-.12-.108-.24-.216-.36-.312l-.456.588a10.9,10.9,0,0,1,1.572,1.716,11.784,11.784,0,0,1-.8,1.068c-.276.012-.552.024-.792.024l.072.8,1.956-.1V.936h.8V-4.056l1.044-.06a4.14,4.14,0,0,1,.228.684l.708-.336A10.257,10.257,0,0,0-23.9-6.2Zm7.8-1.968h-4.4A15.242,15.242,0,0,0-20.43-9.84l-.9-.2a10.55,10.55,0,0,1-2.136,4.152,6.328,6.328,0,0,1,.78.528,9.5,9.5,0,0,0,1.116-1.68h3.936c-.18,4.68-.384,6.5-.78,6.912a.589.589,0,0,1-.516.18c-.3,0-1.032,0-1.836-.072a2.042,2.042,0,0,1,.288.876A14.037,14.037,0,0,0-18.63.876a1.234,1.234,0,0,0,1-.48c.492-.588.66-2.448.876-7.824Zm-2.688,5.328a12.134,12.134,0,0,0-1.68-2.736l-.72.348a12.849,12.849,0,0,1,1.62,2.8ZM-12.822.156A2.561,2.561,0,0,0-10-2.352a2.263,2.263,0,0,0-1.86-2.232v-.048A2.2,2.2,0,0,0-10.3-6.756a2.26,2.26,0,0,0-2.556-2.208,3.522,3.522,0,0,0-2.46,1.056l.588.7a2.568,2.568,0,0,1,1.824-.852,1.35,1.35,0,0,1,1.488,1.392c0,.948-.624,1.68-2.436,1.68v.84c2.028,0,2.736.708,2.736,1.752A1.622,1.622,0,0,1-12.906-.756,2.908,2.908,0,0,1-15.09-1.764l-.552.72A3.641,3.641,0,0,0-12.822.156Zm8-3.6a2.023,2.023,0,0,0,1.668-1.2l-.624-.444c-.3.576-.636.816-1.02.816C-5.55-4.272-6.114-5.4-7.17-5.4A2.024,2.024,0,0,0-8.85-4.2l.612.432c.312-.576.648-.816,1.032-.816C-6.45-4.584-5.874-3.444-4.818-3.444ZM-1.29-3.3l2-3c.252-.432.492-.864.708-1.3H1.47c-.024.456-.06,1.164-.06,1.6v2.7ZM1.41,0H2.442V-2.424H3.606V-3.3H2.442V-8.808H1.23L-2.43-3.144v.72H1.41ZM9.15-7.116,8.082-7.344a4.606,4.606,0,0,1-.132.708A5.867,5.867,0,0,1,7.3-5.1,8.058,8.058,0,0,1,5.49-3.012l.876.516a9.594,9.594,0,0,0,1.68-2.088h2.568A5.736,5.736,0,0,1,8.49-.2a5.888,5.888,0,0,1-.948.552L8.49.972c1.776-1.08,2.856-2.784,3.048-5.556H13.3c.24,0,.624.012.936.036V-5.5a6.433,6.433,0,0,1-.936.06H8.49c.168-.36.324-.756.432-1.056A5.748,5.748,0,0,1,9.15-7.116ZM19.266-3.672A15.066,15.066,0,0,0,19.4-5.688h5.484v2.016Zm5.616-4.86V-6.54H19.4V-8.532Zm.924-.876H18.5v3.672c0,1.908-.192,4.344-2.1,6.024a3.377,3.377,0,0,1,.66.648A6.769,6.769,0,0,0,19.122-2.8h5.76V-.4c0,.264-.1.348-.372.36s-1.236.012-2.232-.024a4.256,4.256,0,0,1,.372.924A9.649,9.649,0,0,0,25.182.7c.444-.144.624-.456.624-1.08Z" transform="translate(-966 -5576)" fill="#4e443b"/>
                                        <path data-idr="Icon_awesome-user-tie" data-name="Icon awesome-user-tie" d="M10.1,11.546A5.773,5.773,0,1,0,4.33,5.773,5.772,5.772,0,0,0,10.1,11.546Zm4.321,1.47-2.156,8.632-1.443-6.134,1.443-2.526H7.938l1.443,2.526L7.938,21.648,5.782,13.016A6.051,6.051,0,0,0,0,19.05v1.876a2.165,2.165,0,0,0,2.165,2.165H18.04A2.165,2.165,0,0,0,20.2,20.926V19.05a6.051,6.051,0,0,0-5.782-6.034Z" transform="translate(-1256 -5659)" fill="#9a2327"/>
                                        <path data-idr="Icon_awesome-clipboard-list" data-name="Icon awesome-clipboard-list" d="M15.154,2.886H11.546a2.886,2.886,0,1,0-5.773,0H2.165A2.165,2.165,0,0,0,0,5.051V20.926a2.165,2.165,0,0,0,2.165,2.165H15.154a2.165,2.165,0,0,0,2.165-2.165V5.051A2.165,2.165,0,0,0,15.154,2.886ZM4.33,19.122A1.082,1.082,0,1,1,5.412,18.04,1.08,1.08,0,0,1,4.33,19.122Zm0-4.33A1.082,1.082,0,1,1,5.412,13.71,1.08,1.08,0,0,1,4.33,14.793Zm0-4.33A1.082,1.082,0,1,1,5.412,9.381,1.08,1.08,0,0,1,4.33,10.463ZM8.659,1.8A1.082,1.082,0,1,1,7.577,2.886,1.08,1.08,0,0,1,8.659,1.8Zm5.773,16.6a.362.362,0,0,1-.361.361H7.577a.362.362,0,0,1-.361-.361v-.722a.362.362,0,0,1,.361-.361h6.494a.362.362,0,0,1,.361.361Zm0-4.33a.362.362,0,0,1-.361.361H7.577a.362.362,0,0,1-.361-.361V13.35a.362.362,0,0,1,.361-.361h6.494a.362.362,0,0,1,.361.361Zm0-4.33a.362.362,0,0,1-.361.361H7.577a.362.362,0,0,1-.361-.361V9.02a.362.362,0,0,1,.361-.361h6.494a.362.362,0,0,1,.361.361Z" transform="translate(-1162 -5659)" fill="#9a2327"/>
                                        <g data-idr="Group_307" data-name="Group 307" transform="translate(37.478 201.533)">
                                        <path data-idr="Path_3359" data-name="Path 3359" d="M71.909,0H82.783a.815.815,0,0,1,.809.809V10.858a.815.815,0,0,1-.809.809H71.909a.815.815,0,0,1-.809-.809V.809A.815.815,0,0,1,71.909,0Z" transform="translate(-1033.719 -5857.533)" fill="#9a2327"/>
                                        <path data-idr="Path_3360" data-name="Path 3360" d="M9.606,26.887V18.564a.756.756,0,0,0-.764-.764H4.337a.775.775,0,0,0-.6.29L0,22.7v6.124a.756.756,0,0,0,.764.764H3.146a2.718,2.718,0,0,1,2.169-1.1,2.676,2.676,0,0,1,2.169,1.1H16.31a2.718,2.718,0,0,1,2.169-1.1,2.676,2.676,0,0,1,2.169,1.1h1.97a.743.743,0,0,0,.733-.733v-.473a.724.724,0,0,0-.733-.733H10.369a.766.766,0,0,1-.764-.764Zm-2.779-2.81H2.841a.886.886,0,0,1-.886-.886v-.229a.977.977,0,0,1,.2-.565l2.107-2.611a.883.883,0,0,1,.687-.336H6.811a.886.886,0,0,1,.886.886v2.841a.868.868,0,0,1-.87.9Z" transform="translate(-973.478 -5872.615)" fill="#9a2327"/>
                                        <circle data-idr="Ellipse_15" data-name="Ellipse 15" cx="1.909" cy="1.909" r="1.909" transform="translate(-970.102 -5843.315)" fill="#9a2327"/>
                                        <circle data-idr="Ellipse_16" data-name="Ellipse 16" cx="1.909" cy="1.909" r="1.909" transform="translate(-956.893 -5843.315)" fill="#9a2327"/>
                                        </g>
                                        <g data-idr="Group_306" data-name="Group 306" transform="translate(41.435 201.432)">
                                        <path data-idr="Path_3361" data-name="Path 3361" d="M55.647,2.484,51.383,0,42.068,5.427l4.263,2.484Z" transform="translate(-1157.714 -5860.432)" fill="#9a2327"/>
                                        <path data-idr="Path_3362" data-name="Path 3362" d="M161.763,64.3l-9.315,5.427,3.475,2.025,9.315-5.427Z" transform="translate(-1262.254 -5921.335)" fill="#9a2327"/>
                                        <path data-idr="Path_3363" data-name="Path 3363" d="M233.131,134.034v10.854l9.31-5.424V128.61Z" transform="translate(-1338.669 -5982.238)" fill="#9a2327"/>
                                        <path data-idr="Path_3364" data-name="Path 3364" d="M27.169,139.464l9.31,5.424V134.034l-9.31-5.424Z" transform="translate(-1143.604 -5982.238)" fill="#9a2327"/>
                                        </g>
                                        <path data-idr="Subtraction_2" data-name="Subtraction 2" d="M21.942,20.442H1.079A1.089,1.089,0,0,1,0,19.346V1.1A1.089,1.089,0,0,1,1.079,0H6.115A1.089,1.089,0,0,1,7.194,1.1v8.957l6.255-4.039a1.06,1.06,0,0,1,.576-.173,1.091,1.091,0,0,1,1.083,1.1v3.115l6.255-4.039a1.061,1.061,0,0,1,.576-.173,1.091,1.091,0,0,1,1.083,1.1V19.346A1.089,1.089,0,0,1,21.942,20.442Zm-6.835-7.357V16.33h3.2V13.085Zm-7.673,0V16.33h3.2V13.085Z" transform="translate(-1004 -5657)" fill="#9a2327"/>
                                        <path data-idr="Icon_zocial-email" data-name="Icon zocial-email" d="M.072,18.958V5.515q0-.023.07-.443L8.054,11.84.165,19.425a1.978,1.978,0,0,1-.093-.467Zm1.05-14.82a1.006,1.006,0,0,1,.4-.07H22.827a1.322,1.322,0,0,1,.42.07l-7.935,6.791-1.05.84-2.077,1.7-2.077-1.7-1.05-.84Zm.023,16.2L9.1,12.7l3.081,2.5,3.081-2.5,7.958,7.632a1.121,1.121,0,0,1-.4.07H1.519a1.057,1.057,0,0,1-.373-.07Zm15.17-8.5L24.2,5.072a1.393,1.393,0,0,1,.07.443V18.958a1.789,1.789,0,0,1-.07.467Z" transform="translate(-1336.072 -5659.068)" fill="#9a2327"/>
                                    </g>
                                </svg>
                                <svg class="ln_en" xmlns="http://www.w3.org/2000/svg" width="481.493" height="112.87" viewBox="0 0 481.493 112.87">
                                    <g data-idr="Group_323" data-name="Group 323" transform="translate(1365 5682.579)">
                                        <path data-idr="Path_3377" data-name="Path 3377" d="M0,0H66L81.493,44.992,66,90H0" transform="translate(-1365 -5682.579)" fill="#f6f4e8"/>
                                        <path data-idr="Path_3377-2" data-name="Path 3377" d="M0,0H86l15.493,44.992L86,90H0L15.369,45.088Z" transform="translate(-1297 -5682.579)" fill="#f6f4e8"/>
                                        <path data-idr="Path_3377-3" data-name="Path 3377" d="M0,0H96l15.493,44.992L96,90H0L15.369,45.088Z" transform="translate(-1209 -5682.579)" fill="#f6f4e8"/>
                                        <path data-idr="Path_3377-4" data-name="Path 3377" d="M10,0H86l15.493,44.992L86,90H10L25.369,45.088Z" transform="translate(-1121 -5682.579)" fill="#f6f4e8"/>
                                        <path data-idr="Path_3377-5" data-name="Path 3377" d="M10,0H76L91.493,44.992,76,90H10L25.369,45.088Z" transform="translate(-1043 -5682.579)" fill="#f6f4e8"/>
                                        <path data-idr="Path_3377-6" data-name="Path 3377" d="M10,0H76L91.493,44.992,76,90H10L25.369,45.088Z" transform="translate(-975 -5682.579)" fill="#f6f4e8"/>
                                        <path data-idr="Path_3411" data-name="Path 3411" d="M-19.128-6.3a2.516,2.516,0,0,0-2.544-2.88c-2.556,0-2.856,2.544-2.856,4.572,0,2.148.1,4.824,2.868,4.824A2.272,2.272,0,0,0-19.7-.792,3.446,3.446,0,0,0-19.176-2.7c.024-.18.024-.372.048-.552h-1c-.024.2-.036.408-.06.612-.12.984-.372,1.956-1.56,1.956-1.824,0-1.8-2.724-1.752-3.948,0-1.188.024-3.648,1.752-3.648,1.248,0,1.6.912,1.62,1.98ZM-13.1-3.564c0-2.016-.744-3.288-2.388-3.288S-17.88-5.58-17.88-3.564c0,2.88.948,3.744,2.388,3.744C-14.028.18-13.1-.672-13.1-3.564Zm-.984.3c0,1.572-.276,2.64-1.4,2.64-1.1,0-1.4-1.068-1.4-2.64,0-2.016.432-2.784,1.4-2.784C-14.5-6.048-14.088-5.28-14.088-3.264Zm3.4-3.408h-.924V0h.948V-4.464a1.435,1.435,0,0,1,.432-1.212A1.357,1.357,0,0,1-9.3-6.048c.768,0,1,.468,1,1.164V0h.948V-5.148A1.5,1.5,0,0,0-9-6.852a2.024,2.024,0,0,0-1.668.912h-.024Zm6.168-1.812H-5.46v1.812h-.924v.8h.924v4.776c0,1.008.42,1.1.984,1.092h1.044V-.8h-.636c-.528,0-.444-.288-.444-.516V-5.868h1.1v-.8H-4.524ZM.288-1.98A1.22,1.22,0,0,1-.864-.624c-.768,0-.936-.432-.936-1.1A1.189,1.189,0,0,1-1.212-2.88c.5-.24,1.032-.444,1.5-.72ZM1.848-.7A1.166,1.166,0,0,1,1.44-.708c-.192-.1-.168-.336-.168-.5V-5.04A1.6,1.6,0,0,0-.54-6.852c-1.344,0-2.028.6-1.98,1.98h.852c-.012-.78.108-1.176.972-1.176C.072-6.048.36-5.76.36-5c0,.348.024.612-.18.768-.12.1-1.464.6-2,.84a1.706,1.706,0,0,0-.96,1.62C-2.784-.564-2.4.18-1.068.18A1.693,1.693,0,0,0,.408-.9H.432c.1.912.4.984,1.2.948A1.4,1.4,0,0,1,1.848,0ZM4.992-6.048c.9,0,1.092.744,1.1,1.476h.888A2,2,0,0,0,5-6.852c-2.04,0-2.3,1.968-2.3,3.6C2.7-1.524,2.988.18,5.028.18c1.488,0,1.968-1.224,2-2.508h-.9c-.048.816-.144,1.7-1.176,1.7-1.212,0-1.272-1.548-1.272-2.424C3.684-4,3.612-6.048,4.992-6.048ZM9.468-8.484H8.532v1.812H7.608v.8h.924v4.776c0,1.008.42,1.1.984,1.092H10.56V-.8H9.924C9.4-.8,9.48-1.092,9.48-1.32V-5.868h1.1v-.8H9.468ZM17.976,0h.948V-6.672h-.948v4.284A2.24,2.24,0,0,1,17.7-1.212a1.358,1.358,0,0,1-1.14.588c-.672,0-.852-.3-.852-.864V-6.672H14.76v5.148c0,1.176.612,1.7,1.608,1.7A1.751,1.751,0,0,0,17.952-.876h.024ZM24.4-4.884c.024-1.368-.744-1.968-2.064-1.968a1.815,1.815,0,0,0-1.956,1.884c0,1.164.6,1.512,1.632,1.9.684.288,1.644.372,1.644,1.32,0,.816-.5,1.128-1.272,1.128-.888,0-1.164-.5-1.128-1.32h-.9a2.043,2.043,0,0,0,.372,1.428,2,2,0,0,0,1.656.7,2.007,2.007,0,0,0,2.256-2.052c0-1.248-.96-1.488-1.92-1.92-.648-.276-1.356-.384-1.356-1.248,0-.7.384-1.008,1.056-1.008.8,0,1.092.372,1.056,1.164Z" transform="translate(-1324 -5610)" fill="#4e443b"/>
                                        <path data-idr="Path_3400" data-name="Path 3400" d="M-4.211-3.819a7.336,7.336,0,0,0,.22,2.054.887.887,0,0,0,.9.712.874.874,0,0,0,.894-.712,7.6,7.6,0,0,0,.212-2.054A7.517,7.517,0,0,0-2.194-5.9a.867.867,0,0,0-.894-.677.879.879,0,0,0-.9.677A7.254,7.254,0,0,0-4.211-3.819Zm1.123-4.023A2.2,2.2,0,0,1-1-6.794,6.061,6.061,0,0,1-.4-3.819,6.028,6.028,0,0,1-1-.849,2.2,2.2,0,0,1-3.088.193,2.2,2.2,0,0,1-5.175-.849a6.028,6.028,0,0,1-.6-2.97,6.061,6.061,0,0,1,.6-2.976A2.2,2.2,0,0,1-3.088-7.842ZM.763-5.371V-6.413a6.751,6.751,0,0,0,1.013-.1,1.427,1.427,0,0,0,.75-.408,1.345,1.345,0,0,0,.3-.559,1.285,1.285,0,0,0,.059-.312H4.163V0H2.594V-5.371Z" transform="translate(-1324 -5669.623)" fill="#4e443b"/>
                                        <path data-idr="Path_3410" data-name="Path 3410" d="M-12.432,0V-.9H-16.1V-9h-1V0Zm1.548,0V-6.672h-.948V0Zm0-7.8V-9h-.948v1.2Zm4.812,2.916c.024-1.368-.744-1.968-2.064-1.968a1.815,1.815,0,0,0-1.956,1.884c0,1.164.6,1.512,1.632,1.9.684.288,1.644.372,1.644,1.32,0,.816-.5,1.128-1.272,1.128-.888,0-1.164-.5-1.128-1.32h-.9A2.043,2.043,0,0,0-9.744-.516a2,2,0,0,0,1.656.7A2.007,2.007,0,0,0-5.832-1.872c0-1.248-.96-1.488-1.92-1.92C-8.4-4.068-9.108-4.176-9.108-5.04c0-.7.384-1.008,1.056-1.008.8,0,1.092.372,1.056,1.164Zm2.136-3.6h-.936v1.812H-5.8v.8h.924v4.776c0,1.008.42,1.1.984,1.092h1.044V-.8H-3.48c-.528,0-.444-.288-.444-.516V-5.868h1.1v-.8H-3.936Zm2.268,4.452c.036-.792.06-2.016,1.164-2.016S.552-4.812.588-4.032ZM.636-2.22c.06.756-.192,1.6-1.1,1.6-1.332,0-1.176-1.728-1.2-2.628h3.24c-.048-1.56.072-3.6-2.088-3.6-1.764,0-2.136,2.1-2.136,3.5,0,2.688.9,3.528,2.16,3.528a2.037,2.037,0,0,0,2.016-2.4ZM3.36-6.672H2.436V0h.948V-4.464a1.435,1.435,0,0,1,.432-1.212,1.357,1.357,0,0,1,.936-.372c.768,0,1,.468,1,1.164V0H6.7V-5.148a1.5,1.5,0,0,0-1.644-1.7,2.024,2.024,0,0,0-1.668.912H3.36Zm7.968-1.812h-.936v1.812H9.468v.8h.924v4.776c0,1.008.42,1.1.984,1.092H12.42V-.8h-.636c-.528,0-.444-.288-.444-.516V-5.868h1.1v-.8H11.328Zm6.156,4.92c0-2.016-.744-3.288-2.388-3.288S12.708-5.58,12.708-3.564c0,2.88.948,3.744,2.388,3.744C16.56.18,17.484-.672,17.484-3.564Zm-.984.3c0,1.572-.276,2.64-1.4,2.64-1.1,0-1.4-1.068-1.4-2.64,0-2.016.432-2.784,1.4-2.784C16.092-6.048,16.5-5.28,16.5-3.264Zm-44.4,17.42c-.264.66-.288,1.32-1.176,1.32a1.822,1.822,0,0,1-.708-.144v.84a2.261,2.261,0,0,0,.684.108,1.576,1.576,0,0,0,1.524-.876,12.425,12.425,0,0,0,.612-1.7l1.98-6.372h-.984l-1.548,5.784h-.024l-1.5-5.784h-.984Zm7.932-3.72c0-2.016-.744-3.288-2.388-3.288s-2.388,1.272-2.388,3.288c0,2.88.948,3.744,2.388,3.744C-20.892,14.18-19.968,13.328-19.968,10.436Zm-.984.3c0,1.572-.276,2.64-1.4,2.64-1.1,0-1.4-1.068-1.4-2.64,0-2.016.432-2.784,1.4-2.784C-21.36,7.952-20.952,8.72-20.952,10.736ZM-15.816,14h.948V7.328h-.948v4.284a2.24,2.24,0,0,1-.276,1.176,1.358,1.358,0,0,1-1.14.588c-.672,0-.852-.3-.852-.864V7.328h-.948v5.148c0,1.176.612,1.7,1.608,1.7a1.751,1.751,0,0,0,1.584-1.056h.024Zm3.144-6.672h-.912V14h.948V9.956c0-1.212.72-1.98,1.944-1.764V7.256A1.738,1.738,0,0,0-12.648,8.42h-.024Zm5.8,0h-.912V14h.948V9.956c0-1.212.72-1.98,1.944-1.764V7.256A1.738,1.738,0,0,0-6.852,8.42h-.024Zm3.012,2.64c.036-.792.06-2.016,1.164-2.016s1.056,1.236,1.092,2.016Zm2.3,1.812c.06.756-.192,1.6-1.1,1.6-1.332,0-1.176-1.728-1.2-2.628h3.24c-.048-1.56.072-3.6-2.088-3.6-1.764,0-2.136,2.1-2.136,3.5,0,2.688.9,3.528,2.16,3.528a2.037,2.037,0,0,0,2.016-2.4Zm2.568-.828c-.036-1.3.036-3,1.284-3,1.272.012,1.236,1.788,1.236,2.688,0,.924.024,2.736-1.272,2.736C1.248,13.376,1.044,12.248,1.008,10.952Zm2.556-2.94H3.54A1.712,1.712,0,0,0,2,7.148C.4,7.148-.06,9.248.024,10.76c.132,2.364.66,3.42,2.064,3.42A1.651,1.651,0,0,0,3.5,13.268h.024v2.94h.948V7.328H3.564ZM8.9,14h.948V7.328H8.9v4.284a2.24,2.24,0,0,1-.276,1.176,1.358,1.358,0,0,1-1.14.588c-.672,0-.852-.3-.852-.864V7.328H5.688v5.148c0,1.176.612,1.7,1.608,1.7A1.751,1.751,0,0,0,8.88,13.124H8.9Zm2.76-4.032c.036-.792.06-2.016,1.164-2.016s1.056,1.236,1.092,2.016Zm2.3,1.812c.06.756-.192,1.6-1.1,1.6-1.332,0-1.176-1.728-1.2-2.628H14.9c-.048-1.56.072-3.6-2.088-3.6-1.764,0-2.136,2.1-2.136,3.5,0,2.688.9,3.528,2.16,3.528a2.037,2.037,0,0,0,2.016-2.4Zm5.484-2.664c.024-1.368-.744-1.968-2.064-1.968a1.815,1.815,0,0,0-1.956,1.884c0,1.164.6,1.512,1.632,1.9.684.288,1.644.372,1.644,1.32,0,.816-.5,1.128-1.272,1.128-.888,0-1.164-.5-1.128-1.32h-.9a2.043,2.043,0,0,0,.372,1.428,2,2,0,0,0,1.656.7,2.007,2.007,0,0,0,2.256-2.052c0-1.248-.96-1.488-1.92-1.92-.648-.276-1.356-.384-1.356-1.248,0-.7.384-1.008,1.056-1.008.8,0,1.092.372,1.056,1.164Zm2.136-3.6h-.936V7.328h-.924v.8h.924v4.776c0,1.008.42,1.1.984,1.092H22.68v-.8h-.636c-.528,0-.444-.288-.444-.516V8.132h1.1v-.8H21.588Zm5.328,3.6c.024-1.368-.744-1.968-2.064-1.968A1.815,1.815,0,0,0,22.9,9.032c0,1.164.6,1.512,1.632,1.9.684.288,1.644.372,1.644,1.32,0,.816-.5,1.128-1.272,1.128-.888,0-1.164-.5-1.128-1.32h-.9a2.043,2.043,0,0,0,.372,1.428,2,2,0,0,0,1.656.7,2.007,2.007,0,0,0,2.256-2.052c0-1.248-.96-1.488-1.92-1.92-.648-.276-1.356-.384-1.356-1.248,0-.7.384-1.008,1.056-1.008.8,0,1.092.372,1.056,1.164ZM29.136,14V12.8H28.044V14Z" transform="translate(-1246 -5617)" fill="#4e443b"/>
                                        <path data-idr="Path_3401" data-name="Path 3401" d="M-4.211-3.819a7.336,7.336,0,0,0,.22,2.054.887.887,0,0,0,.9.712.874.874,0,0,0,.894-.712,7.6,7.6,0,0,0,.212-2.054A7.517,7.517,0,0,0-2.194-5.9a.867.867,0,0,0-.894-.677.879.879,0,0,0-.9.677A7.254,7.254,0,0,0-4.211-3.819Zm1.123-4.023A2.2,2.2,0,0,1-1-6.794,6.061,6.061,0,0,1-.4-3.819,6.028,6.028,0,0,1-1-.849,2.2,2.2,0,0,1-3.088.193,2.2,2.2,0,0,1-5.175-.849a6.028,6.028,0,0,1-.6-2.97,6.061,6.061,0,0,1,.6-2.976A2.2,2.2,0,0,1-3.088-7.842ZM.344,0A3.66,3.66,0,0,1,.7-1.531,4.328,4.328,0,0,1,2.25-3.18,11.344,11.344,0,0,0,3.62-4.265,1.6,1.6,0,0,0,4.1-5.382,1.238,1.238,0,0,0,3.824-6.2a.965.965,0,0,0-.784-.328.956.956,0,0,0-.951.521,2.584,2.584,0,0,0-.172.956H.43A3.759,3.759,0,0,1,.79-6.66,2.244,2.244,0,0,1,2.967-7.826a2.763,2.763,0,0,1,1.968.685,2.367,2.367,0,0,1,.731,1.813A2.451,2.451,0,0,1,5.15-3.792,5.142,5.142,0,0,1,4.036-2.8l-.613.435q-.576.408-.788.591a1.731,1.731,0,0,0-.357.424h3.4V0Z" transform="translate(-1246 -5669.623)" fill="#4e443b"/>
                                        <path data-idr="Path_3409" data-name="Path 3409" d="M-26.826-6.636c.1-1.692-.912-2.544-2.556-2.544A2.362,2.362,0,0,0-31.89-6.72a2.01,2.01,0,0,0,1.068,2.04c.48.252,1.272.5,1.764.7.912.348,1.464.36,1.464,1.728A1.51,1.51,0,0,1-29.31-.684c-1.5,0-1.752-.84-1.7-2.172h-1a5.025,5.025,0,0,0,.192,1.644A2.457,2.457,0,0,0-29.358.216a2.53,2.53,0,0,0,2.8-2.7c0-1.188-.312-1.788-2.016-2.424-.48-.18-.948-.36-1.428-.54a1.183,1.183,0,0,1-.852-1.224c0-.7.156-1.608,1.608-1.608a1.379,1.379,0,0,1,1.428,1.644Zm1.776,2.6c.036-.792.06-2.016,1.164-2.016s1.056,1.236,1.092,2.016Zm2.3,1.812c.06.756-.192,1.6-1.1,1.6-1.332,0-1.176-1.728-1.2-2.628h3.24c-.048-1.56.072-3.6-2.088-3.6-1.764,0-2.136,2.1-2.136,3.5,0,2.688.9,3.528,2.16,3.528a2.037,2.037,0,0,0,2.016-2.4ZM-20.01,0V-9h-.948V0Zm1.752-4.032c.036-.792.06-2.016,1.164-2.016S-16.038-4.812-16-4.032Zm2.3,1.812c.06.756-.192,1.6-1.1,1.6-1.332,0-1.176-1.728-1.2-2.628h3.24c-.048-1.56.072-3.6-2.088-3.6-1.764,0-2.136,2.1-2.136,3.5,0,2.688.9,3.528,2.16,3.528a2.037,2.037,0,0,0,2.016-2.4Zm3.744-3.828c.9,0,1.092.744,1.1,1.476h.888a2,2,0,0,0-1.98-2.28c-2.04,0-2.3,1.968-2.3,3.6,0,1.728.288,3.432,2.328,3.432,1.488,0,1.968-1.224,2-2.508h-.9c-.048.816-.144,1.7-1.176,1.7-1.212,0-1.272-1.548-1.272-2.424C-13.518-4-13.59-6.048-12.21-6.048Zm3.876-2.436H-9.27v1.812h-.924v.8h.924v4.776c0,1.008.42,1.1.984,1.092h1.044V-.8h-.636c-.528,0-.444-.288-.444-.516V-5.868h1.1v-.8H-8.334ZM-.786-3.456c0,1.8-.312,2.832-1.3,2.832-1.308,0-1.272-1.8-1.272-2.724,0-.948.024-2.7,1.26-2.7C-.882-6.048-.786-4.332-.786-3.456ZM-3.354-.7h.024A1.537,1.537,0,0,0-1.938.18C-.138.18.2-1.884.2-3.78c0-1.368-.492-3.072-2.184-3.072a1.59,1.59,0,0,0-1.38.924H-3.39v-.744H-4.3V2.256h.948ZM2.118-6.672H1.206V0h.948V-4.044c0-1.212.72-1.98,1.944-1.764v-.936A1.738,1.738,0,0,0,2.142-5.58H2.118Zm6.9,3.108c0-2.016-.744-3.288-2.388-3.288S4.242-5.58,4.242-3.564C4.242-.684,5.19.18,6.63.18,8.094.18,9.018-.672,9.018-3.564Zm-.984.3c0,1.572-.276,2.64-1.4,2.64-1.1,0-1.4-1.068-1.4-2.64,0-2.016.432-2.784,1.4-2.784C7.626-6.048,8.034-5.28,8.034-3.264Zm5.136.648c0,.756-.276,1.992-1.26,1.992-1.3,0-1.344-1.308-1.344-2.748,0-2.052.516-2.676,1.308-2.676,1.272,0,1.3,1.692,1.3,2.6Zm0-3.372h-.024a1.785,1.785,0,0,0-1.536-.864c-1.428,0-2.076,1.548-2,3.5C9.63-2.76,9.462.18,11.562.18a1.58,1.58,0,0,0,1.62-1.056h.024V0h.912V-9H13.17ZM18.57,0h.948V-6.672H18.57v4.284a2.24,2.24,0,0,1-.276,1.176,1.358,1.358,0,0,1-1.14.588c-.672,0-.852-.3-.852-.864V-6.672h-.948v5.148c0,1.176.612,1.7,1.608,1.7A1.751,1.751,0,0,0,18.546-.876h.024Zm4.08-6.048c.9,0,1.092.744,1.1,1.476h.888a2,2,0,0,0-1.98-2.28c-2.04,0-2.3,1.968-2.3,3.6,0,1.728.288,3.432,2.328,3.432,1.488,0,1.968-1.224,2-2.508h-.9c-.048.816-.144,1.7-1.176,1.7-1.212,0-1.272-1.548-1.272-2.424C21.342-4,21.27-6.048,22.65-6.048Zm3.876-2.436H25.59v1.812h-.924v.8h.924v4.776c0,1.008.42,1.1.984,1.092h1.044V-.8h-.636c-.528,0-.444-.288-.444-.516V-5.868h1.1v-.8H26.526Zm5.328,3.6c.024-1.368-.744-1.968-2.064-1.968a1.815,1.815,0,0,0-1.956,1.884c0,1.164.6,1.512,1.632,1.9.684.288,1.644.372,1.644,1.32,0,.816-.5,1.128-1.272,1.128-.888,0-1.164-.5-1.128-1.32h-.9a2.043,2.043,0,0,0,.372,1.428,2,2,0,0,0,1.656.7,2.007,2.007,0,0,0,2.256-2.052c0-1.248-.96-1.488-1.92-1.92-.648-.276-1.356-.384-1.356-1.248,0-.7.384-1.008,1.056-1.008.8,0,1.092.372,1.056,1.164ZM-38.328,14h.948V8.132h1.044v-.8H-37.38V6.62c0-.816.276-.888,1.044-.816V5c-.888-.084-1.452.036-1.764.48a2.349,2.349,0,0,0-.24,1.284v.564h-.96v.8h.972Zm3.432,0V7.328h-.948V14Zm0-7.8V5h-.948V6.2Zm2.052,1.128h-.924V14h.948V9.536a1.435,1.435,0,0,1,.432-1.212,1.357,1.357,0,0,1,.936-.372c.768,0,1,.468,1,1.164V14h.948V8.852a1.5,1.5,0,0,0-1.644-1.7,2.024,2.024,0,0,0-1.668.912h-.024ZM-25.8,12.02a1.22,1.22,0,0,1-1.152,1.356c-.768,0-.936-.432-.936-1.1A1.189,1.189,0,0,1-27.3,11.12c.5-.24,1.032-.444,1.5-.72Zm1.56,1.284a1.166,1.166,0,0,1-.408-.012c-.192-.1-.168-.336-.168-.5V8.96a1.6,1.6,0,0,0-1.812-1.812c-1.344,0-2.028.6-1.98,1.98h.852c-.012-.78.108-1.176.972-1.176.768,0,1.056.288,1.056,1.044,0,.348.024.612-.18.768-.12.1-1.464.6-2,.84a1.706,1.706,0,0,0-.96,1.62c0,1.212.384,1.956,1.716,1.956A1.692,1.692,0,0,0-25.68,13.1h.024c.1.912.4.984,1.2.948A1.4,1.4,0,0,1-24.24,14Zm1.536.7V5h-.948v9Zm7.212-4.884c.024-1.368-.744-1.968-2.064-1.968a1.815,1.815,0,0,0-1.956,1.884c0,1.164.6,1.512,1.632,1.9.684.288,1.644.372,1.644,1.32,0,.816-.5,1.128-1.272,1.128-.888,0-1.164-.5-1.128-1.32h-.9a2.043,2.043,0,0,0,.372,1.428,2,2,0,0,0,1.656.7,2.007,2.007,0,0,0,2.256-2.052c0-1.248-.96-1.488-1.92-1.92-.648-.276-1.356-.384-1.356-1.248,0-.7.384-1.008,1.056-1.008.8,0,1.092.372,1.056,1.164Zm4.548,1.428c0,1.8-.312,2.832-1.3,2.832-1.308,0-1.272-1.8-1.272-2.724,0-.948.024-2.7,1.26-2.7C-11.04,7.952-10.944,9.668-10.944,10.544Zm-2.568,2.76h.024a1.537,1.537,0,0,0,1.392.876c1.8,0,2.136-2.064,2.136-3.96,0-1.368-.492-3.072-2.184-3.072a1.59,1.59,0,0,0-1.38.924h-.024V7.328h-.912v8.928h.948Zm5.088-3.336c.036-.792.06-2.016,1.164-2.016S-6.2,9.188-6.168,9.968Zm2.3,1.812c.06.756-.192,1.6-1.1,1.6-1.332,0-1.176-1.728-1.2-2.628h3.24c-.048-1.56.072-3.6-2.088-3.6-1.764,0-2.136,2.1-2.136,3.5,0,2.688.9,3.528,2.16,3.528a2.037,2.037,0,0,0,2.016-2.4Zm3.744-3.828c.9,0,1.092.744,1.1,1.476h.888a2,2,0,0,0-1.98-2.28c-2.04,0-2.3,1.968-2.3,3.6,0,1.728.288,3.432,2.328,3.432,1.488,0,1.968-1.224,2-2.508h-.9c-.048.816-.144,1.7-1.176,1.7-1.212,0-1.272-1.548-1.272-2.424C-3.684,10-3.756,7.952-2.376,7.952ZM1.344,14V7.328H.4V14Zm0-7.8V5H.4V6.2ZM4.428,7.952C5.484,7.952,5.76,9.2,5.76,10.52c0,1.068.012,2.856-1.428,2.856-.936,0-1.212-1.08-1.212-2.712C3.12,9.764,3.168,7.952,4.428,7.952Zm1.332.132H5.736a1.617,1.617,0,0,0-1.488-.936c-1.764,0-2.112,2.064-2.112,3.468,0,2.688.876,3.564,2.136,3.564a1.569,1.569,0,0,0,1.44-.96h.024c-.012.732.144,2.244-1.392,2.244A.908.908,0,0,1,3.3,14.636H2.376a1.775,1.775,0,0,0,1.992,1.632A2.066,2.066,0,0,0,6.2,15.344a3.637,3.637,0,0,0,.5-2.148V7.328H5.76ZM8.808,14V7.328H7.86V14Zm0-7.8V5H7.86V6.2ZM11.88,7.952c.9,0,1.092.744,1.1,1.476h.888a2,2,0,0,0-1.98-2.28c-2.04,0-2.3,1.968-2.3,3.6,0,1.728.288,3.432,2.328,3.432,1.488,0,1.968-1.224,2-2.508h-.9c-.048.816-.144,1.7-1.176,1.7-1.212,0-1.272-1.548-1.272-2.424C10.572,10,10.5,7.952,11.88,7.952Zm5.352,4.068a1.22,1.22,0,0,1-1.152,1.356c-.768,0-.936-.432-.936-1.1a1.189,1.189,0,0,1,.588-1.152c.5-.24,1.032-.444,1.5-.72Zm1.56,1.284a1.166,1.166,0,0,1-.408-.012c-.192-.1-.168-.336-.168-.5V8.96A1.6,1.6,0,0,0,16.4,7.148c-1.344,0-2.028.6-1.98,1.98h.852c-.012-.78.108-1.176.972-1.176.768,0,1.056.288,1.056,1.044,0,.348.024.612-.18.768-.12.1-1.464.6-2,.84a1.706,1.706,0,0,0-.96,1.62c0,1.212.384,1.956,1.716,1.956a1.692,1.692,0,0,0,1.476-1.08h.024c.1.912.4.984,1.2.948A1.4,1.4,0,0,1,18.792,14Zm1.692-7.788h-.936V7.328h-.924v.8h.924v4.776c0,1.008.42,1.1.984,1.092h1.044v-.8H20.94c-.528,0-.444-.288-.444-.516V8.132h1.1v-.8H20.484ZM23.064,14V7.328h-.948V14Zm0-7.8V5h-.948V6.2Zm5.64,4.236c0-2.016-.744-3.288-2.388-3.288s-2.388,1.272-2.388,3.288c0,2.88.948,3.744,2.388,3.744C27.78,14.18,28.7,13.328,28.7,10.436Zm-.984.3c0,1.572-.276,2.64-1.4,2.64-1.1,0-1.4-1.068-1.4-2.64,0-2.016.432-2.784,1.4-2.784C27.312,7.952,27.72,8.72,27.72,10.736Zm2.8-3.408h-.924V14h.948V9.536a1.435,1.435,0,0,1,.432-1.212,1.357,1.357,0,0,1,.936-.372c.768,0,1,.468,1,1.164V14h.948V8.852a1.5,1.5,0,0,0-1.644-1.7,2.024,2.024,0,0,0-1.668.912h-.024Zm8.16,1.788c.024-1.368-.744-1.968-2.064-1.968a1.815,1.815,0,0,0-1.956,1.884c0,1.164.6,1.512,1.632,1.9.684.288,1.644.372,1.644,1.32,0,.816-.5,1.128-1.272,1.128-.888,0-1.164-.5-1.128-1.32h-.9A2.043,2.043,0,0,0,35,13.484a2,2,0,0,0,1.656.7,2.007,2.007,0,0,0,2.256-2.052c0-1.248-.96-1.488-1.92-1.92-.648-.276-1.356-.384-1.356-1.248,0-.7.384-1.008,1.056-1.008.8,0,1.092.372,1.056,1.164Z" transform="translate(-1153 -5617)" fill="#4e443b"/>
                                        <path data-idr="Path_3402" data-name="Path 3402" d="M-4.211-3.819a7.336,7.336,0,0,0,.22,2.054.887.887,0,0,0,.9.712.874.874,0,0,0,.894-.712,7.6,7.6,0,0,0,.212-2.054A7.517,7.517,0,0,0-2.194-5.9a.867.867,0,0,0-.894-.677.879.879,0,0,0-.9.677A7.254,7.254,0,0,0-4.211-3.819Zm1.123-4.023A2.2,2.2,0,0,1-1-6.794,6.061,6.061,0,0,1-.4-3.819,6.028,6.028,0,0,1-1-.849,2.2,2.2,0,0,1-3.088.193,2.2,2.2,0,0,1-5.175-.849a6.028,6.028,0,0,1-.6-2.97,6.061,6.061,0,0,1,.6-2.976A2.2,2.2,0,0,1-3.088-7.842ZM1.794-2.39a1.754,1.754,0,0,0,.15.773,1.028,1.028,0,0,0,1.013.564,1.121,1.121,0,0,0,.785-.309,1.149,1.149,0,0,0,.335-.889,1,1,0,0,0-.621-1.026,3.144,3.144,0,0,0-1.114-.145v-1.1A2.879,2.879,0,0,0,3.38-4.662a.9.9,0,0,0,.508-.913,1.022,1.022,0,0,0-.26-.725A.949.949,0,0,0,2.9-6.58a.924.924,0,0,0-.8.344,1.461,1.461,0,0,0-.244.918H.43a3.847,3.847,0,0,1,.2-1.1,2.479,2.479,0,0,1,.59-.843,2.056,2.056,0,0,1,.714-.419,3.085,3.085,0,0,1,1.014-.145,2.7,2.7,0,0,1,1.8.577A1.924,1.924,0,0,1,5.43-5.7a1.713,1.713,0,0,1-.408,1.16,1.394,1.394,0,0,1-.537.4,1.1,1.1,0,0,1,.6.36,1.922,1.922,0,0,1,.585,1.482A2.5,2.5,0,0,1,4.988-.556,2.606,2.606,0,0,1,2.962.193a2.45,2.45,0,0,1-2.3-1.08A3.207,3.207,0,0,1,.29-2.39Z" transform="translate(-1153 -5669.623)" fill="#4e443b"/>
                                        <path data-idr="Path_3408" data-name="Path 3408" d="M-12.144-1.992a12.566,12.566,0,0,0-.228,1.344H-12.4a7.99,7.99,0,0,0-.192-1.332L-14.352-9h-1.764V0h1V-7.392c0-.384-.024-.78-.024-1.164h.024c.108.492.18.792.264,1.1L-12.972,0h1.188L-9.9-7.344c.084-.348.168-.684.276-1.212H-9.6c.024.384,0,.756,0,1.14V0h1V-9h-1.752Zm7.3.012A1.22,1.22,0,0,1-6-.624c-.768,0-.936-.432-.936-1.1A1.189,1.189,0,0,1-6.348-2.88c.5-.24,1.032-.444,1.5-.72ZM-3.288-.7A1.166,1.166,0,0,1-3.7-.708c-.192-.1-.168-.336-.168-.5V-5.04A1.6,1.6,0,0,0-5.676-6.852c-1.344,0-2.028.6-1.98,1.98H-6.8c-.012-.78.108-1.176.972-1.176.768,0,1.056.288,1.056,1.044,0,.348.024.612-.18.768-.12.1-1.464.6-2,.84a1.706,1.706,0,0,0-.96,1.62C-7.92-.564-7.536.18-6.2.18A1.693,1.693,0,0,0-4.728-.9H-4.7c.1.912.4.984,1.2.948A1.4,1.4,0,0,1-3.288,0Zm1.5.7V-2.376l.72-.948L.6,0H1.7L-.42-4.08,1.644-6.672H.516l-2.28,3.108h-.024V-9h-.948V0ZM2.976,0V-6.672H2.028V0Zm0-7.8V-9H2.028v1.2ZM5.028-6.672H4.1V0h.948V-4.464a1.435,1.435,0,0,1,.432-1.212,1.357,1.357,0,0,1,.936-.372c.768,0,1,.468,1,1.164V0h.948V-5.148a1.5,1.5,0,0,0-1.644-1.7,2.024,2.024,0,0,0-1.668.912H5.028Zm6.432.624c1.056,0,1.332,1.248,1.332,2.568,0,1.068.012,2.856-1.428,2.856-.936,0-1.212-1.08-1.212-2.712C10.152-4.236,10.2-6.048,11.46-6.048Zm1.332.132h-.024a1.617,1.617,0,0,0-1.488-.936c-1.764,0-2.112,2.064-2.112,3.468C9.168-.7,10.044.18,11.3.18a1.569,1.569,0,0,0,1.44-.96h.024c-.012.732.144,2.244-1.392,2.244A.908.908,0,0,1,10.332.636H9.408A1.775,1.775,0,0,0,11.4,2.268a2.066,2.066,0,0,0,1.836-.924A3.637,3.637,0,0,0,13.74-.8V-6.672h-.948Zm-31.038,16.46c0,1.8-.312,2.832-1.3,2.832-1.308,0-1.272-1.8-1.272-2.724,0-.948.024-2.7,1.26-2.7C-18.342,7.952-18.246,9.668-18.246,10.544Zm-2.568,2.76h.024a1.537,1.537,0,0,0,1.392.876c1.8,0,2.136-2.064,2.136-3.96,0-1.368-.492-3.072-2.184-3.072a1.59,1.59,0,0,0-1.38.924h-.024V7.328h-.912v8.928h.948Zm5.472-5.976h-.912V14h.948V9.956c0-1.212.72-1.98,1.944-1.764V7.256A1.738,1.738,0,0,0-15.318,8.42h-.024Zm6.9,3.108c0-2.016-.744-3.288-2.388-3.288s-2.388,1.272-2.388,3.288c0,2.88.948,3.744,2.388,3.744C-9.366,14.18-8.442,13.328-8.442,10.436Zm-.984.3c0,1.572-.276,2.64-1.4,2.64-1.1,0-1.4-1.068-1.4-2.64,0-2.016.432-2.784,1.4-2.784C-9.834,7.952-9.426,8.72-9.426,10.736Zm2.964-5.22H-7.4V7.328h-.924v.8H-7.4v4.776c0,1.008.42,1.1.984,1.092H-5.37v-.8h-.636c-.528,0-.444-.288-.444-.516V8.132h1.1v-.8H-6.462Zm6.156,4.92c0-2.016-.744-3.288-2.388-3.288S-5.082,8.42-5.082,10.436c0,2.88.948,3.744,2.388,3.744C-1.23,14.18-.306,13.328-.306,10.436Zm-.984.3c0,1.572-.276,2.64-1.4,2.64-1.1,0-1.4-1.068-1.4-2.64,0-2.016.432-2.784,1.4-2.784C-1.7,7.952-1.29,8.72-1.29,10.736Zm2.964-5.22H.738V7.328H-.186v.8H.738v4.776c0,1.008.42,1.1.984,1.092H2.766v-.8H2.13c-.528,0-.444-.288-.444-.516V8.132h1.1v-.8H1.674Zm2.952,8.64c-.264.66-.288,1.32-1.176,1.32a1.822,1.822,0,0,1-.708-.144v.84a2.26,2.26,0,0,0,.684.108A1.576,1.576,0,0,0,4.95,15.4a12.426,12.426,0,0,0,.612-1.7l1.98-6.372H6.558L5.01,13.112H4.986l-1.5-5.784H2.5Zm6.924-3.612c0,1.8-.312,2.832-1.3,2.832-1.308,0-1.272-1.8-1.272-2.724,0-.948.024-2.7,1.26-2.7C11.454,7.952,11.55,9.668,11.55,10.544ZM8.982,13.3h.024a1.537,1.537,0,0,0,1.392.876c1.8,0,2.136-2.064,2.136-3.96,0-1.368-.492-3.072-2.184-3.072a1.59,1.59,0,0,0-1.38.924H8.946V7.328H8.034v8.928h.948ZM14.07,9.968c.036-.792.06-2.016,1.164-2.016s1.056,1.236,1.092,2.016Zm2.3,1.812c.06.756-.192,1.6-1.1,1.6-1.332,0-1.176-1.728-1.2-2.628h3.24c-.048-1.56.072-3.6-2.088-3.6-1.764,0-2.136,2.1-2.136,3.5,0,2.688.9,3.528,2.16,3.528a2.037,2.037,0,0,0,2.016-2.4Zm5.484-2.664c.024-1.368-.744-1.968-2.064-1.968a1.815,1.815,0,0,0-1.956,1.884c0,1.164.6,1.512,1.632,1.9.684.288,1.644.372,1.644,1.32,0,.816-.5,1.128-1.272,1.128-.888,0-1.164-.5-1.128-1.32h-.9a2.043,2.043,0,0,0,.372,1.428,2,2,0,0,0,1.656.7A2.007,2.007,0,0,0,22.1,12.128c0-1.248-.96-1.488-1.92-1.92-.648-.276-1.356-.384-1.356-1.248,0-.7.384-1.008,1.056-1.008.8,0,1.092.372,1.056,1.164Z" transform="translate(-1065 -5617)" fill="#4e443b"/>
                                        <path data-idr="Path_3403" data-name="Path 3403" d="M-4.211-3.819a7.336,7.336,0,0,0,.22,2.054.887.887,0,0,0,.9.712.874.874,0,0,0,.894-.712,7.6,7.6,0,0,0,.212-2.054A7.517,7.517,0,0,0-2.194-5.9a.867.867,0,0,0-.894-.677.879.879,0,0,0-.9.677A7.254,7.254,0,0,0-4.211-3.819Zm1.123-4.023A2.2,2.2,0,0,1-1-6.794,6.061,6.061,0,0,1-.4-3.819,6.028,6.028,0,0,1-1-.849,2.2,2.2,0,0,1-3.088.193,2.2,2.2,0,0,1-5.175-.849a6.028,6.028,0,0,1-.6-2.97,6.061,6.061,0,0,1,.6-2.976A2.2,2.2,0,0,1-3.088-7.842ZM5.752-1.676H4.872V0h-1.5V-1.676H.29V-3.013L3.153-7.74H4.872v4.866h.881Zm-2.379-1.2V-6.228L1.429-2.874Z" transform="translate(-1065 -5669.623)" fill="#4e443b"/>
                                        <path data-idr="Path_3407" data-name="Path 3407" d="M-21.27-8.1h1.032c1.212-.024,2.136.18,2.136,1.632.012,1.548-.828,1.74-2.2,1.752h-.972Zm0,8.1V-3.816h.6a6.85,6.85,0,0,0,2.328-.264A2.428,2.428,0,0,0-17.07-6.492a2.529,2.529,0,0,0-.732-1.92A3.087,3.087,0,0,0-19.9-9h-2.364V0Zm5.928-6.672h-.912V0h.948V-4.044c0-1.212.72-1.98,1.944-1.764v-.936A1.738,1.738,0,0,0-15.318-5.58h-.024Zm6.9,3.108c0-2.016-.744-3.288-2.388-3.288s-2.388,1.272-2.388,3.288c0,2.88.948,3.744,2.388,3.744C-9.366.18-8.442-.672-8.442-3.564Zm-.984.3c0,1.572-.276,2.64-1.4,2.64-1.1,0-1.4-1.068-1.4-2.64,0-2.016.432-2.784,1.4-2.784C-9.834-6.048-9.426-5.28-9.426-3.264Zm5.136.648c0,.756-.276,1.992-1.26,1.992-1.3,0-1.344-1.308-1.344-2.748,0-2.052.516-2.676,1.308-2.676,1.272,0,1.3,1.692,1.3,2.6Zm0-3.372h-.024A1.785,1.785,0,0,0-5.85-6.852c-1.428,0-2.076,1.548-2,3.5C-7.83-2.76-8,.18-5.9.18A1.58,1.58,0,0,0-4.278-.876h.024V0h.912V-9H-4.29ZM1.11,0h.948V-6.672H1.11v4.284A2.24,2.24,0,0,1,.834-1.212a1.358,1.358,0,0,1-1.14.588c-.672,0-.852-.3-.852-.864V-6.672h-.948v5.148c0,1.176.612,1.7,1.608,1.7A1.751,1.751,0,0,0,1.086-.876H1.11ZM5.19-6.048c.9,0,1.092.744,1.1,1.476h.888A2,2,0,0,0,5.2-6.852c-2.04,0-2.3,1.968-2.3,3.6C2.9-1.524,3.186.18,5.226.18c1.488,0,1.968-1.224,2-2.508h-.9c-.048.816-.144,1.7-1.176,1.7-1.212,0-1.272-1.548-1.272-2.424C3.882-4,3.81-6.048,5.19-6.048ZM9.066-8.484H8.13v1.812H7.206v.8H8.13v4.776c0,1.008.42,1.1.984,1.092h1.044V-.8H9.522c-.528,0-.444-.288-.444-.516V-5.868h1.1v-.8H9.066ZM11.646,0V-6.672H10.7V0Zm0-7.8V-9H10.7v1.2Zm5.64,4.236c0-2.016-.744-3.288-2.388-3.288S12.51-5.58,12.51-3.564C12.51-.684,13.458.18,14.9.18,16.362.18,17.286-.672,17.286-3.564Zm-.984.3c0,1.572-.276,2.64-1.4,2.64-1.1,0-1.4-1.068-1.4-2.64,0-2.016.432-2.784,1.4-2.784C15.894-6.048,16.3-5.28,16.3-3.264Zm2.8-3.408h-.924V0h.948V-4.464a1.435,1.435,0,0,1,.432-1.212,1.357,1.357,0,0,1,.936-.372c.768,0,1,.468,1,1.164V0h.948V-5.148a1.5,1.5,0,0,0-1.644-1.7,2.024,2.024,0,0,0-1.668.912H19.1Z" transform="translate(-992 -5610)" fill="#4e443b"/>
                                        <path data-idr="Path_3404" data-name="Path 3404" d="M-4.211-3.819a7.336,7.336,0,0,0,.22,2.054.887.887,0,0,0,.9.712.874.874,0,0,0,.894-.712,7.6,7.6,0,0,0,.212-2.054A7.517,7.517,0,0,0-2.194-5.9a.867.867,0,0,0-.894-.677.879.879,0,0,0-.9.677A7.254,7.254,0,0,0-4.211-3.819Zm1.123-4.023A2.2,2.2,0,0,1-1-6.794,6.061,6.061,0,0,1-.4-3.819,6.028,6.028,0,0,1-1-.849,2.2,2.2,0,0,1-3.088.193,2.2,2.2,0,0,1-5.175-.849a6.028,6.028,0,0,1-.6-2.97,6.061,6.061,0,0,1,.6-2.976A2.2,2.2,0,0,1-3.088-7.842Zm4.9,5.758a1.479,1.479,0,0,0,.348.771.985.985,0,0,0,.75.271,1.011,1.011,0,0,0,.865-.4,1.642,1.642,0,0,0,.3-1.007A1.753,1.753,0,0,0,3.8-3.456a.975.975,0,0,0-.868-.411,1.49,1.49,0,0,0-.482.07.959.959,0,0,0-.541.478L.534-3.384l.547-4.3H5.366v1.3H2.185l-.279,1.7a3.194,3.194,0,0,1,.552-.306,2.336,2.336,0,0,1,.81-.124,2.431,2.431,0,0,1,1.684.65,2.419,2.419,0,0,1,.719,1.891A2.968,2.968,0,0,1,4.98-.645,2.516,2.516,0,0,1,2.909.2a2.749,2.749,0,0,1-1.824-.6A2.317,2.317,0,0,1,.29-2.084Z" transform="translate(-992 -5669.623)" fill="#4e443b"/>
                                        <path data-idr="Path_3406" data-name="Path 3406" d="M-13.356,0c2.436,0,2.868-2.3,2.94-4.5.072-2.22-.312-4.5-3.12-4.5h-2.472V0Zm-1.656-8.1h1.6c1.608,0,1.9,1.368,1.968,3.42.1,2.688-.5,3.78-1.968,3.78h-1.6ZM-8.76-4.032c.036-.792.06-2.016,1.164-2.016S-6.54-4.812-6.5-4.032Zm2.3,1.812c.06.756-.192,1.6-1.1,1.6-1.332,0-1.176-1.728-1.2-2.628h3.24c-.048-1.56.072-3.6-2.088-3.6-1.764,0-2.136,2.1-2.136,3.5,0,2.688.9,3.528,2.16,3.528a2.037,2.037,0,0,0,2.016-2.4ZM-3.72,0V-9h-.948V0Zm2.064,0V-6.672H-2.6V0Zm0-7.8V-9H-2.6v1.2ZM.732,0H1.764l2-6.672H2.784L1.272-.8H1.248L-.264-6.672h-.984ZM4.824-4.032c.036-.792.06-2.016,1.164-2.016S7.044-4.812,7.08-4.032Zm2.3,1.812c.06.756-.192,1.6-1.1,1.6-1.332,0-1.176-1.728-1.2-2.628h3.24c-.048-1.56.072-3.6-2.088-3.6-1.764,0-2.136,2.1-2.136,3.5C3.84-.66,4.74.18,6,.18a2.037,2.037,0,0,0,2.016-2.4ZM9.936-6.672H9.024V0h.948V-4.044c0-1.212.72-1.98,1.944-1.764v-.936A1.738,1.738,0,0,0,9.96-5.58H9.936ZM13.848.156c-.264.66-.288,1.32-1.176,1.32a1.822,1.822,0,0,1-.708-.144v.84a2.261,2.261,0,0,0,.684.108A1.576,1.576,0,0,0,14.172,1.4a12.426,12.426,0,0,0,.612-1.7l1.98-6.372H15.78L14.232-.888h-.024l-1.5-5.784h-.984Z" transform="translate(-924 -5610)" fill="#4e443b"/>
                                        <path data-idr="Path_3405" data-name="Path 3405" d="M-4.211-3.819a7.336,7.336,0,0,0,.22,2.054.887.887,0,0,0,.9.712.874.874,0,0,0,.894-.712,7.6,7.6,0,0,0,.212-2.054A7.517,7.517,0,0,0-2.194-5.9a.867.867,0,0,0-.894-.677.879.879,0,0,0-.9.677A7.254,7.254,0,0,0-4.211-3.819Zm1.123-4.023A2.2,2.2,0,0,1-1-6.794,6.061,6.061,0,0,1-.4-3.819,6.028,6.028,0,0,1-1-.849,2.2,2.2,0,0,1-3.088.193,2.2,2.2,0,0,1-5.175-.849a6.028,6.028,0,0,1-.6-2.97,6.061,6.061,0,0,1,.6-2.976A2.2,2.2,0,0,1-3.088-7.842ZM1.88-2.465a1.527,1.527,0,0,0,.338,1.026,1.079,1.079,0,0,0,.859.4.954.954,0,0,0,.8-.384,1.6,1.6,0,0,0,.293-1A1.491,1.491,0,0,0,3.84-3.467a1.066,1.066,0,0,0-.816-.363,1.09,1.09,0,0,0-.693.236A1.338,1.338,0,0,0,1.88-2.465ZM4.034-5.828a.781.781,0,0,0-.145-.414.841.841,0,0,0-.747-.365,1.1,1.1,0,0,0-1.063.838A5.2,5.2,0,0,0,1.842-4.4,1.718,1.718,0,0,1,2.5-4.9a2.229,2.229,0,0,1,.859-.156,2.233,2.233,0,0,1,1.7.7,2.518,2.518,0,0,1,.663,1.8,3.037,3.037,0,0,1-.65,1.923A2.4,2.4,0,0,1,3.056.2a2.324,2.324,0,0,1-2.17-1.23A5.015,5.015,0,0,1,.344-3.507a11.284,11.284,0,0,1,.075-1.45A4.435,4.435,0,0,1,.94-6.612a2.666,2.666,0,0,1,.873-.908A2.354,2.354,0,0,1,3.1-7.863a2.557,2.557,0,0,1,1.729.556,2.114,2.114,0,0,1,.725,1.48Z" transform="translate(-924 -5669.623)" fill="#4e443b"/>
                                        <rect data-idr="Rectangle_131" data-name="Rectangle 131" width="151.963" height="20.292" transform="translate(-1365 -5590)" fill="#f6f4e8"/>
                                        <path data-idr="Path_3412" data-name="Path 3412" d="M-37.362,0h1.1l.66-2.592h2.844L-32.046,0h1.1l-2.532-9h-1.32Zm4.38-3.492h-2.376L-34.17-8.28h.024Zm3.948.324c0-.972-.084-2.88,1.32-2.88,1.212,0,1.272,1.716,1.272,2.592,0,1.8-.276,2.832-1.26,2.832C-29.046-.624-29.034-2.2-29.034-3.168Zm-.024,2.376h.024A1.571,1.571,0,0,0-27.51.18c1.8,0,2.052-2.052,2.052-3.948,0-1.368-.408-3.084-2.1-3.084a1.547,1.547,0,0,0-1.392.864h-.024V-9h-.948V0h.864Zm9.624-2.772c0-2.016-.744-3.288-2.388-3.288S-24.21-5.58-24.21-3.564c0,2.88.948,3.744,2.388,3.744C-20.358.18-19.434-.672-19.434-3.564Zm-.984.3c0,1.572-.276,2.64-1.4,2.64-1.1,0-1.4-1.068-1.4-2.64,0-2.016.432-2.784,1.4-2.784C-20.826-6.048-20.418-5.28-20.418-3.264ZM-14.682,0h.948V-6.672h-.948v4.284a2.24,2.24,0,0,1-.276,1.176,1.358,1.358,0,0,1-1.14.588c-.672,0-.852-.3-.852-.864V-6.672H-17.9v5.148c0,1.176.612,1.7,1.608,1.7A1.751,1.751,0,0,0-14.706-.876h.024Zm3.828-8.484h-.936v1.812h-.924v.8h.924v4.776c0,1.008.42,1.1.984,1.092h1.044V-.8H-10.4c-.528,0-.444-.288-.444-.516V-5.868h1.1v-.8h-1.116Zm8.2,4.8A3.394,3.394,0,0,0-1.206-6.492,2.218,2.218,0,0,0-3.522-9a2.29,2.29,0,0,0-1.788.708,2.834,2.834,0,0,0-.576,1.8v.552h1c-.024-.948.084-2.16,1.32-2.16,1.02,0,1.332.672,1.332,1.584A2.3,2.3,0,0,1-3.174-4.5L-4.89-2.844a3.128,3.128,0,0,0-.708.9A5.258,5.258,0,0,0-5.958,0h4.836V-.9h-3.8a1.678,1.678,0,0,1,.648-1.308ZM2.97-3.3v-1H.054v1Zm2.8-.888C7.278-4.2,7.878-3.9,7.878-2.328A1.412,1.412,0,0,1,6.426-.72c-1.284,0-1.56-.96-1.476-1.92H3.966C3.93-1.008,4.542.18,6.342.18S8.874-.972,8.874-2.652a1.915,1.915,0,0,0-1.5-2.076v-.024a1.852,1.852,0,0,0,1.26-2.016A2.107,2.107,0,0,0,6.39-9c-1.632,0-2.3,1.152-2.256,2.664h.948c0-.924.156-1.764,1.284-1.764,1,0,1.26.6,1.26,1.476,0,1.656-1.068,1.488-1.86,1.536ZM16.65-2.616c0,.756-.276,1.992-1.26,1.992-1.3,0-1.344-1.308-1.344-2.748,0-2.052.516-2.676,1.308-2.676,1.272,0,1.3,1.692,1.3,2.6Zm0-3.372h-.024a1.785,1.785,0,0,0-1.536-.864c-1.428,0-2.076,1.548-2,3.5C13.11-2.76,12.942.18,15.042.18a1.58,1.58,0,0,0,1.62-1.056h.024V0H17.6V-9H16.65Zm5.3,4.008A1.22,1.22,0,0,1,20.8-.624c-.768,0-.936-.432-.936-1.1a1.189,1.189,0,0,1,.588-1.152c.5-.24,1.032-.444,1.5-.72ZM23.514-.7a1.166,1.166,0,0,1-.408-.012c-.192-.1-.168-.336-.168-.5V-5.04a1.6,1.6,0,0,0-1.812-1.812c-1.344,0-2.028.6-1.98,1.98H20c-.012-.78.108-1.176.972-1.176.768,0,1.056.288,1.056,1.044,0,.348.024.612-.18.768-.12.1-1.464.6-2,.84a1.706,1.706,0,0,0-.96,1.62C18.882-.564,19.266.18,20.6.18A1.692,1.692,0,0,0,22.074-.9H22.1c.1.912.4.984,1.2.948A1.4,1.4,0,0,1,23.514,0Zm2.508.852c-.264.66-.288,1.32-1.176,1.32a1.822,1.822,0,0,1-.708-.144v.84a2.261,2.261,0,0,0,.684.108A1.576,1.576,0,0,0,26.346,1.4a12.425,12.425,0,0,0,.612-1.7l1.98-6.372h-.984L26.406-.888h-.024l-1.5-5.784H23.9Zm7.7-5.04c.024-1.368-.744-1.968-2.064-1.968a1.815,1.815,0,0,0-1.956,1.884c0,1.164.6,1.512,1.632,1.9.684.288,1.644.372,1.644,1.32,0,.816-.5,1.128-1.272,1.128-.888,0-1.164-.5-1.128-1.32h-.9a2.043,2.043,0,0,0,.372,1.428,2,2,0,0,0,1.656.7,2.007,2.007,0,0,0,2.256-2.052c0-1.248-.96-1.488-1.92-1.92C31.4-4.068,30.69-4.176,30.69-5.04c0-.7.384-1.008,1.056-1.008.8,0,1.092.372,1.056,1.164Z" transform="translate(-1289 -5576)" fill="#4e443b"/>
                                        <path data-idr="Path_3384" data-name="Path 3384" d="M0,0H176V20.292H0Z" transform="translate(-1211 -5590)" fill="#f6f4e8"/>
                                        <path data-idr="Path_3413" data-name="Path 3413" d="M-33.7,0h1.1l.66-2.592h2.844L-28.386,0h1.1l-2.532-9h-1.32Zm4.38-3.492H-31.7L-30.51-8.28h.024Zm3.948.324c0-.972-.084-2.88,1.32-2.88,1.212,0,1.272,1.716,1.272,2.592,0,1.8-.276,2.832-1.26,2.832C-25.386-.624-25.374-2.2-25.374-3.168ZM-25.4-.792h.024A1.571,1.571,0,0,0-23.85.18c1.8,0,2.052-2.052,2.052-3.948,0-1.368-.408-3.084-2.1-3.084a1.547,1.547,0,0,0-1.392.864h-.024V-9h-.948V0h.864Zm9.624-2.772c0-2.016-.744-3.288-2.388-3.288S-20.55-5.58-20.55-3.564c0,2.88.948,3.744,2.388,3.744C-16.7.18-15.774-.672-15.774-3.564Zm-.984.3c0,1.572-.276,2.64-1.4,2.64-1.1,0-1.4-1.068-1.4-2.64,0-2.016.432-2.784,1.4-2.784C-17.166-6.048-16.758-5.28-16.758-3.264ZM-11.022,0h.948V-6.672h-.948v4.284A2.24,2.24,0,0,1-11.3-1.212a1.358,1.358,0,0,1-1.14.588c-.672,0-.852-.3-.852-.864V-6.672h-.948v5.148c0,1.176.612,1.7,1.608,1.7A1.751,1.751,0,0,0-11.046-.876h.024Zm3.828-8.484H-8.13v1.812h-.924v.8h.924v4.776c0,1.008.42,1.1.984,1.092H-6.1V-.8h-.636c-.528,0-.444-.288-.444-.516V-5.868h1.1v-.8H-7.194ZM-.018,0h1V-9H.2C.054-7.6-.654-7.356-1.938-7.332v.78h1.92ZM6.63-3.3v-1H3.714v1ZM11-3.684A3.394,3.394,0,0,0,12.45-6.492,2.218,2.218,0,0,0,10.134-9a2.29,2.29,0,0,0-1.788.708,2.834,2.834,0,0,0-.576,1.8v.552h1c-.024-.948.084-2.16,1.32-2.16,1.02,0,1.332.672,1.332,1.584A2.3,2.3,0,0,1,10.482-4.5L8.766-2.844a3.128,3.128,0,0,0-.708.9A5.258,5.258,0,0,0,7.7,0h4.836V-.9H8.73a1.678,1.678,0,0,1,.648-1.308Zm4.032-.78a1.419,1.419,0,0,1,.408-1.212,1.357,1.357,0,0,1,.936-.372c.768,0,1,.468,1,1.164V0h.948V-4.464a1.435,1.435,0,0,1,.432-1.212,1.377,1.377,0,0,1,.888-.372c.816,0,1.02.42,1.02,1.164V0h.948V-4.824a2.12,2.12,0,0,0-.408-1.56,1.8,1.8,0,0,0-1.224-.468A1.993,1.993,0,0,0,18.186-5.8,1.741,1.741,0,0,0,16.6-6.852,1.874,1.874,0,0,0,15.018-5.82h-.024v-.852h-.912V0h.948Zm12.864.9c0-2.016-.744-3.288-2.388-3.288S23.118-5.58,23.118-3.564c0,2.88.948,3.744,2.388,3.744C26.97.18,27.894-.672,27.894-3.564Zm-.984.3c0,1.572-.276,2.64-1.4,2.64-1.1,0-1.4-1.068-1.4-2.64,0-2.016.432-2.784,1.4-2.784C26.5-6.048,26.91-5.28,26.91-3.264Zm6.156-1.62C33.09-6.252,32.322-6.852,31-6.852a1.815,1.815,0,0,0-1.956,1.884c0,1.164.6,1.512,1.632,1.9.684.288,1.644.372,1.644,1.32,0,.816-.5,1.128-1.272,1.128-.888,0-1.164-.5-1.128-1.32h-.9a2.043,2.043,0,0,0,.372,1.428,2,2,0,0,0,1.656.7,2.007,2.007,0,0,0,2.256-2.052c0-1.248-.96-1.488-1.92-1.92-.648-.276-1.356-.384-1.356-1.248,0-.7.384-1.008,1.056-1.008.8,0,1.092.372,1.056,1.164Z" transform="translate(-1123 -5576)" fill="#4e443b"/>
                                        <path data-idr="Path_3383" data-name="Path 3383" d="M10,0H144.443V20.292H10Z" transform="translate(-1043 -5590)" fill="#f6f4e8"/>
                                        <path data-idr="Path_3414" data-name="Path 3414" d="M-33.7,0h1.1l.66-2.592h2.844L-28.386,0h1.1l-2.532-9h-1.32Zm4.38-3.492H-31.7L-30.51-8.28h.024Zm3.948.324c0-.972-.084-2.88,1.32-2.88,1.212,0,1.272,1.716,1.272,2.592,0,1.8-.276,2.832-1.26,2.832C-25.386-.624-25.374-2.2-25.374-3.168ZM-25.4-.792h.024A1.571,1.571,0,0,0-23.85.18c1.8,0,2.052-2.052,2.052-3.948,0-1.368-.408-3.084-2.1-3.084a1.547,1.547,0,0,0-1.392.864h-.024V-9h-.948V0h.864Zm9.624-2.772c0-2.016-.744-3.288-2.388-3.288S-20.55-5.58-20.55-3.564c0,2.88.948,3.744,2.388,3.744C-16.7.18-15.774-.672-15.774-3.564Zm-.984.3c0,1.572-.276,2.64-1.4,2.64-1.1,0-1.4-1.068-1.4-2.64,0-2.016.432-2.784,1.4-2.784C-17.166-6.048-16.758-5.28-16.758-3.264ZM-11.022,0h.948V-6.672h-.948v4.284A2.24,2.24,0,0,1-11.3-1.212a1.358,1.358,0,0,1-1.14.588c-.672,0-.852-.3-.852-.864V-6.672h-.948v5.148c0,1.176.612,1.7,1.608,1.7A1.751,1.751,0,0,0-11.046-.876h.024Zm3.828-8.484H-8.13v1.812h-.924v.8h.924v4.776c0,1.008.42,1.1.984,1.092H-6.1V-.8h-.636c-.528,0-.444-.288-.444-.516V-5.868h1.1v-.8H-7.194Zm6.624,4.3C.942-4.2,1.542-3.9,1.542-2.328A1.412,1.412,0,0,1,.09-.72c-1.284,0-1.56-.96-1.476-1.92H-2.37C-2.406-1.008-1.794.18.006.18S2.538-.972,2.538-2.652a1.915,1.915,0,0,0-1.5-2.076v-.024A1.852,1.852,0,0,0,2.3-6.768,2.107,2.107,0,0,0,.054-9C-1.578-9-2.25-7.848-2.2-6.336h.948C-1.254-7.26-1.1-8.1.03-8.1c1,0,1.26.6,1.26,1.476C1.29-4.968.222-5.136-.57-5.088Zm7.2.888v-1H3.714v1Zm4.128-4.14h.024v4.3H8.3ZM7.506-3.168v.924h3.276V0h1V-2.244h.8v-.9h-.8V-9h-.912Zm7.524-1.3a1.419,1.419,0,0,1,.408-1.212,1.357,1.357,0,0,1,.936-.372c.768,0,1,.468,1,1.164V0h.948V-4.464a1.435,1.435,0,0,1,.432-1.212,1.377,1.377,0,0,1,.888-.372c.816,0,1.02.42,1.02,1.164V0h.948V-4.824a2.12,2.12,0,0,0-.408-1.56,1.8,1.8,0,0,0-1.224-.468A1.993,1.993,0,0,0,18.186-5.8,1.741,1.741,0,0,0,16.6-6.852,1.874,1.874,0,0,0,15.018-5.82h-.024v-.852h-.912V0h.948Zm12.864.9c0-2.016-.744-3.288-2.388-3.288S23.118-5.58,23.118-3.564c0,2.88.948,3.744,2.388,3.744C26.97.18,27.894-.672,27.894-3.564Zm-.984.3c0,1.572-.276,2.64-1.4,2.64-1.1,0-1.4-1.068-1.4-2.64,0-2.016.432-2.784,1.4-2.784C26.5-6.048,26.91-5.28,26.91-3.264Zm6.156-1.62C33.09-6.252,32.322-6.852,31-6.852a1.815,1.815,0,0,0-1.956,1.884c0,1.164.6,1.512,1.632,1.9.684.288,1.644.372,1.644,1.32,0,.816-.5,1.128-1.272,1.128-.888,0-1.164-.5-1.128-1.32h-.9a2.043,2.043,0,0,0,.372,1.428,2,2,0,0,0,1.656.7,2.007,2.007,0,0,0,2.256-2.052c0-1.248-.96-1.488-1.92-1.92-.648-.276-1.356-.384-1.356-1.248,0-.7.384-1.008,1.056-1.008.8,0,1.092.372,1.056,1.164Z" transform="translate(-966 -5576)" fill="#4e443b"/>
                                        <path data-idr="Icon_awesome-user-tie" data-name="Icon awesome-user-tie" d="M10.1,11.546A5.773,5.773,0,1,0,4.33,5.773,5.772,5.772,0,0,0,10.1,11.546Zm4.321,1.47-2.156,8.632-1.443-6.134,1.443-2.526H7.938l1.443,2.526L7.938,21.648,5.782,13.016A6.051,6.051,0,0,0,0,19.05v1.876a2.165,2.165,0,0,0,2.165,2.165H18.04A2.165,2.165,0,0,0,20.2,20.926V19.05a6.051,6.051,0,0,0-5.782-6.034Z" transform="translate(-1256 -5659)" fill="#9a2327"/>
                                        <path data-idr="Icon_awesome-clipboard-list" data-name="Icon awesome-clipboard-list" d="M15.154,2.886H11.546a2.886,2.886,0,1,0-5.773,0H2.165A2.165,2.165,0,0,0,0,5.051V20.926a2.165,2.165,0,0,0,2.165,2.165H15.154a2.165,2.165,0,0,0,2.165-2.165V5.051A2.165,2.165,0,0,0,15.154,2.886ZM4.33,19.122A1.082,1.082,0,1,1,5.412,18.04,1.08,1.08,0,0,1,4.33,19.122Zm0-4.33A1.082,1.082,0,1,1,5.412,13.71,1.08,1.08,0,0,1,4.33,14.793Zm0-4.33A1.082,1.082,0,1,1,5.412,9.381,1.08,1.08,0,0,1,4.33,10.463ZM8.659,1.8A1.082,1.082,0,1,1,7.577,2.886,1.08,1.08,0,0,1,8.659,1.8Zm5.773,16.6a.362.362,0,0,1-.361.361H7.577a.362.362,0,0,1-.361-.361v-.722a.362.362,0,0,1,.361-.361h6.494a.362.362,0,0,1,.361.361Zm0-4.33a.362.362,0,0,1-.361.361H7.577a.362.362,0,0,1-.361-.361V13.35a.362.362,0,0,1,.361-.361h6.494a.362.362,0,0,1,.361.361Zm0-4.33a.362.362,0,0,1-.361.361H7.577a.362.362,0,0,1-.361-.361V9.02a.362.362,0,0,1,.361-.361h6.494a.362.362,0,0,1,.361.361Z" transform="translate(-1162 -5659)" fill="#9a2327"/>
                                        <g data-idr="Group_307" data-name="Group 307" transform="translate(37.478 201.533)">
                                        <path data-idr="Path_3359" data-name="Path 3359" d="M71.909,0H82.783a.815.815,0,0,1,.809.809V10.858a.815.815,0,0,1-.809.809H71.909a.815.815,0,0,1-.809-.809V.809A.815.815,0,0,1,71.909,0Z" transform="translate(-1033.719 -5857.533)" fill="#9a2327"/>
                                        <path data-idr="Path_3360" data-name="Path 3360" d="M9.606,26.887V18.564a.756.756,0,0,0-.764-.764H4.337a.775.775,0,0,0-.6.29L0,22.7v6.124a.756.756,0,0,0,.764.764H3.146a2.718,2.718,0,0,1,2.169-1.1,2.676,2.676,0,0,1,2.169,1.1H16.31a2.718,2.718,0,0,1,2.169-1.1,2.676,2.676,0,0,1,2.169,1.1h1.97a.743.743,0,0,0,.733-.733v-.473a.724.724,0,0,0-.733-.733H10.369a.766.766,0,0,1-.764-.764Zm-2.779-2.81H2.841a.886.886,0,0,1-.886-.886v-.229a.977.977,0,0,1,.2-.565l2.107-2.611a.883.883,0,0,1,.687-.336H6.811a.886.886,0,0,1,.886.886v2.841a.868.868,0,0,1-.87.9Z" transform="translate(-973.478 -5872.615)" fill="#9a2327"/>
                                        <circle data-idr="Ellipse_15" data-name="Ellipse 15" cx="1.909" cy="1.909" r="1.909" transform="translate(-970.102 -5843.315)" fill="#9a2327"/>
                                        <circle data-idr="Ellipse_16" data-name="Ellipse 16" cx="1.909" cy="1.909" r="1.909" transform="translate(-956.893 -5843.315)" fill="#9a2327"/>
                                        </g>
                                        <g data-idr="Group_306" data-name="Group 306" transform="translate(41.435 201.432)">
                                        <path data-idr="Path_3361" data-name="Path 3361" d="M55.647,2.484,51.383,0,42.068,5.427l4.263,2.484Z" transform="translate(-1157.714 -5860.432)" fill="#9a2327"/>
                                        <path data-idr="Path_3362" data-name="Path 3362" d="M161.763,64.3l-9.315,5.427,3.475,2.025,9.315-5.427Z" transform="translate(-1262.254 -5921.335)" fill="#9a2327"/>
                                        <path data-idr="Path_3363" data-name="Path 3363" d="M233.131,134.034v10.854l9.31-5.424V128.61Z" transform="translate(-1338.669 -5982.238)" fill="#9a2327"/>
                                        <path data-idr="Path_3364" data-name="Path 3364" d="M27.169,139.464l9.31,5.424V134.034l-9.31-5.424Z" transform="translate(-1143.604 -5982.238)" fill="#9a2327"/>
                                        </g>
                                        <path data-idr="Subtraction_2" data-name="Subtraction 2" d="M21.942,20.442H1.079A1.089,1.089,0,0,1,0,19.346V1.1A1.089,1.089,0,0,1,1.079,0H6.115A1.089,1.089,0,0,1,7.194,1.1v8.957l6.255-4.039a1.06,1.06,0,0,1,.576-.173,1.091,1.091,0,0,1,1.083,1.1v3.115l6.255-4.039a1.061,1.061,0,0,1,.576-.173,1.091,1.091,0,0,1,1.083,1.1V19.346A1.089,1.089,0,0,1,21.942,20.442Zm-6.835-7.357V16.33h3.2V13.085Zm-7.673,0V16.33h3.2V13.085Z" transform="translate(-1004 -5657)" fill="#9a2327"/>
                                        <path data-idr="Icon_zocial-email" data-name="Icon zocial-email" d="M.072,18.958V5.515q0-.023.07-.443L8.054,11.84.165,19.425a1.978,1.978,0,0,1-.093-.467Zm1.05-14.82a1.006,1.006,0,0,1,.4-.07H22.827a1.322,1.322,0,0,1,.42.07l-7.935,6.791-1.05.84-2.077,1.7-2.077-1.7-1.05-.84Zm.023,16.2L9.1,12.7l3.081,2.5,3.081-2.5,7.958,7.632a1.121,1.121,0,0,1-.4.07H1.519a1.057,1.057,0,0,1-.373-.07Zm15.17-8.5L24.2,5.072a1.393,1.393,0,0,1,.07.443V18.958a1.789,1.789,0,0,1-.07.467Z" transform="translate(-1336.072 -5659.068)" fill="#9a2327"/>
                                    </g>
                                </svg> 
                                <svg class="ln_cn1" xmlns="http://www.w3.org/2000/svg" width="481.493" height="112.87" viewBox="0 0 481.493 112.87">
                                    <g data-idr="Group_322" data-name="Group 322" transform="translate(1365 5682.579)">
                                        <path data-idr="Path_3377" data-name="Path 3377" d="M0,0H66L81.493,44.992,66,90H0" transform="translate(-1365 -5682.579)" fill="#f6f4e8"/>
                                        <path data-idr="Path_3377-2" data-name="Path 3377" d="M0,0H86l15.493,44.992L86,90H0L15.369,45.088Z" transform="translate(-1297 -5682.579)" fill="#f6f4e8"/>
                                        <path data-idr="Path_3377-3" data-name="Path 3377" d="M0,0H96l15.493,44.992L96,90H0L15.369,45.088Z" transform="translate(-1209 -5682.579)" fill="#f6f4e8"/>
                                        <path data-idr="Path_3377-4" data-name="Path 3377" d="M10,0H86l15.493,44.992L86,90H10L25.369,45.088Z" transform="translate(-1121 -5682.579)" fill="#f6f4e8"/>
                                        <path data-idr="Path_3377-5" data-name="Path 3377" d="M10,0H76L91.493,44.992,76,90H10L25.369,45.088Z" transform="translate(-1043 -5682.579)" fill="#f6f4e8"/>
                                        <path data-idr="Path_3377-6" data-name="Path 3377" d="M10,0H76L91.493,44.992,76,90H10L25.369,45.088Z" transform="translate(-975 -5682.579)" fill="#f6f4e8"/>
                                        <path data-idr="Path_3426" data-name="Path 3426" d="M-16.594-9.375a4.777,4.777,0,0,0-.984,1.453h4.828q-.047.75-.047,1.875v6a.879.879,0,0,1-.516.914,6.527,6.527,0,0,1-1.406.352A1.635,1.635,0,0,0-15.234.188,8.821,8.821,0,0,0-13.992.07q.3-.07.352-.492v-6.8h-4.266q-.562.938-.75,1.266H-15q-.047.656-.047,2.578T-15-.469h-3.891q.047-.891.047-1.828V-5.578q-.375.563-.75,1.031a1.987,1.987,0,0,0-.891-.609A9.106,9.106,0,0,0-19.43-6.492q.4-.633.867-1.547a18.906,18.906,0,0,0,.844-1.9A1.927,1.927,0,0,0-16.594-9.375Zm-4.547,3.422q-.047.891-.047,1.828V-.8q.609-.656,1.031-1.125a5.758,5.758,0,0,0,.609.75q-.609.516-1.172,1.078A8.512,8.512,0,0,0-21.7,1.078a3.6,3.6,0,0,0-.844-.844,1.389,1.389,0,0,0,.469-.984V-5.156H-22.5q-.375,0-1.078.047V-6q.7.047,1.078.047Zm5.2,2.391V-5.25h-2.016v1.688Zm0,2.344V-2.859h-2.016v1.641Zm-5.859-8.3q.281.422,1.219,1.875a9.211,9.211,0,0,0-.984.469,16.03,16.03,0,0,0-1.172-1.875Q-22.219-9.281-21.8-9.516Zm18,3.469q-.047,1.031-.047,2.109T-3.8-1.969H-8.437q.047-.984.047-1.922t-.047-2.156Zm2.672-3q-.047.891-.047,1.828V-.187q0,.891-.516,1.055a9.889,9.889,0,0,1-1.453.3A1.98,1.98,0,0,0-3.562.047,7.75,7.75,0,0,0-2.391,0q.187-.047.234-.422V-8.25H-4.875q-1.172,0-2.109.047v-.891q.937.047,2.063.047ZM-9.8-7.266q-.047.8-.047,1.313V1.125h-1.031q.047-.937.047-1.734V-5.719q0-.844-.047-1.547Zm5.016,4.5V-5.25H-7.5v2.484ZM-9.375-9.75q.563.75,1.359,1.641-.328.234-.844.609a8.357,8.357,0,0,0-1.312-1.641Q-9.7-9.516-9.375-9.75Zm18.8,6.7q-.047.7-.047,1.453V-.328q0,.7.047,1.406H8.438V.328H3.516v.8H2.531q0-.75.047-1.453V-1.594q-.047-.75-.047-1.453ZM8.438-.422V-2.3H3.516V-.422ZM7.406-6.047A5.893,5.893,0,0,0,11.25-4.219a2.72,2.72,0,0,0-.562,1.078A9.916,9.916,0,0,1,8.7-3.984,6.492,6.492,0,0,1,7.031-5.344,3.6,3.6,0,0,1,5.906-4.055a7.476,7.476,0,0,1-1.734.867,2.851,2.851,0,0,0-.75-.75A4.507,4.507,0,0,0,5.977-5.3,3.887,3.887,0,0,0,6.75-7.406l.984.141ZM5.813-7.687a4.955,4.955,0,0,1-.492.609,4.665,4.665,0,0,0-.539.7,3,3,0,0,0-.891-.609A4.338,4.338,0,0,0,5.133-8.3a5.384,5.384,0,0,0,.68-1.594,3.073,3.073,0,0,0,1.172.469,4.039,4.039,0,0,0-.656.938h4.266q-.562,1.5-.8,2.063a9.4,9.4,0,0,0-.984-.234q.328-.75.469-1.031ZM3.984-5.906q-.328.328-.984.938A22.661,22.661,0,0,0,1.406-3.281a8.088,8.088,0,0,0-.75-.75,7.182,7.182,0,0,0,1.2-.891A12.96,12.96,0,0,0,3.375-6.469,1.845,1.845,0,0,0,3.984-5.906ZM2.906-7.172A10.463,10.463,0,0,0,1.031-8.531q.281-.375.563-.7A20.076,20.076,0,0,1,3.469-7.922,2.156,2.156,0,0,0,2.906-7.172Zm16.5-2.2a4.777,4.777,0,0,0-.984,1.453H23.25q-.047.75-.047,1.875v6a.879.879,0,0,1-.516.914,6.527,6.527,0,0,1-1.406.352A1.635,1.635,0,0,0,20.766.188,8.821,8.821,0,0,0,22.008.07q.3-.07.352-.492v-6.8H18.094q-.562.938-.75,1.266H21q-.047.656-.047,2.578T21-.469H17.109q.047-.891.047-1.828V-5.578q-.375.563-.75,1.031a1.987,1.987,0,0,0-.891-.609A9.106,9.106,0,0,0,16.57-6.492q.4-.633.867-1.547a18.906,18.906,0,0,0,.844-1.9A1.927,1.927,0,0,0,19.406-9.375ZM14.859-5.953q-.047.891-.047,1.828V-.8q.609-.656,1.031-1.125a5.758,5.758,0,0,0,.609.75q-.609.516-1.172,1.078A8.512,8.512,0,0,0,14.3,1.078a3.6,3.6,0,0,0-.844-.844,1.389,1.389,0,0,0,.469-.984V-5.156H13.5q-.375,0-1.078.047V-6q.7.047,1.078.047Zm5.2,2.391V-5.25H18.047v1.688Zm0,2.344V-2.859H18.047v1.641ZM14.2-9.516q.281.422,1.219,1.875a9.211,9.211,0,0,0-.984.469,16.03,16.03,0,0,0-1.172-1.875Q13.781-9.281,14.2-9.516Z" transform="translate(-1324 -5607)" fill="#4e443b"/>
                                        <path data-idr="Path_3415" data-name="Path 3415" d="M-4.211-3.819a7.336,7.336,0,0,0,.22,2.054.887.887,0,0,0,.9.712.874.874,0,0,0,.894-.712,7.6,7.6,0,0,0,.212-2.054A7.517,7.517,0,0,0-2.194-5.9a.867.867,0,0,0-.894-.677.879.879,0,0,0-.9.677A7.254,7.254,0,0,0-4.211-3.819Zm1.123-4.023A2.2,2.2,0,0,1-1-6.794,6.061,6.061,0,0,1-.4-3.819,6.028,6.028,0,0,1-1-.849,2.2,2.2,0,0,1-3.088.193,2.2,2.2,0,0,1-5.175-.849a6.028,6.028,0,0,1-.6-2.97,6.061,6.061,0,0,1,.6-2.976A2.2,2.2,0,0,1-3.088-7.842ZM.763-5.371V-6.413a6.751,6.751,0,0,0,1.013-.1,1.427,1.427,0,0,0,.75-.408,1.345,1.345,0,0,0,.3-.559,1.285,1.285,0,0,0,.059-.312H4.163V0H2.594V-5.371Z" transform="translate(-1324 -5669.623)" fill="#4e443b"/>
                                        <path data-idr="Path_3425" data-name="Path 3425" d="M-13.444-3.937q.656,0,1.547-.047v.8q-.891-.047-1.547-.047h-3.234a3.141,3.141,0,0,0-.328.844H-12.6q-.047.609-.047,1.078V.094q0,.563-.281.727a4.752,4.752,0,0,1-1.219.352,2.327,2.327,0,0,0-.422-.984,2.3,2.3,0,0,0,.891-.094q.141-.094.141-.469V-1.687h-1.828V.7h-.891V-1.687H-17.9V.7h-.891V-1.687h-1.781V1.078h-.891q.047-.656.047-1.406v-.75q0-.609-.047-1.312h3.609a8.495,8.495,0,0,0,.234-.844h-2.953q-.8,0-1.547.047v-.8q.7.047,1.5.047Zm-.844-5.578q.7,0,1.594-.047v.8q-.891-.047-1.594-.047h-2.3v.8H-11.9v2.2h-.891v-1.5h-3.8V-6q0,.8.047,1.453h-.984q.047-.609.047-1.406V-7.312h-3.844v1.5h-.937q0-.516.023-1.031a10.15,10.15,0,0,0-.023-1.172h4.781v-.8h-2.3q-.7,0-1.406.047v-.8q.7.047,1.359.047Zm-4.172,4.922h-2.3V-5.25h2.3Zm.047-1.312h-2.2v-.656h2.2Zm4.688-.047h-2.2v-.656h2.2Zm.047,1.266h-2.2v-.656h2.2Zm2.869-2.859q.75.047,1.594.047h2.906q0-1.359-.047-2.109h1.031q-.047.75-.047,2.109h3.328q.656,0,1.453-.047V-6.7q-.844-.047-1.453-.047H-5.372a4.4,4.4,0,0,0,.445,1.594,8.162,8.162,0,0,0,.82,1.406A10.039,10.039,0,0,0-2.184-5.906a4.09,4.09,0,0,0,.937.75A16.526,16.526,0,0,0-3.731-3.094a8.9,8.9,0,0,0,1.477,1.5,5.136,5.136,0,0,0,1.9.984,2.356,2.356,0,0,0-.937.891A9.989,9.989,0,0,1-3.38-1.289,9.776,9.776,0,0,1-5.372-4.453V-.281a.863.863,0,0,1-.445.938,4.491,4.491,0,0,1-1.43.328A3.423,3.423,0,0,0-7.669-.047a4.539,4.539,0,0,0,1.1-.023q.3-.07.258-.492V-3.141Q-8.184-1.687-9-1.031T-10.341.094q-.422-.469-.8-.844A17.359,17.359,0,0,0-9.45-1.758,37.967,37.967,0,0,0-6.309-4.219V-6.75H-9.216q-.844,0-1.594.047ZM-9.4-5.953q1.031.844,1.922,1.594l-.8.7A11.319,11.319,0,0,0-10.153-5.3Zm6.141-3.609A10.758,10.758,0,0,1-1.762-8.3a5.711,5.711,0,0,0-.7.609,14.313,14.313,0,0,0-1.5-1.359A8.331,8.331,0,0,1-3.262-9.562Zm13.041.281a9.9,9.9,0,0,0-1.219,2.2h1.547q-.047.656-.047,1.922t.047,1.734H8.559v3A.373.373,0,0,0,8.981,0h.75q.422.047.562-1.219A1.949,1.949,0,0,0,11.325-.8Q11,.844,10.059.844H8.513q-.8,0-.8-.891V-3.422H6.684a14.324,14.324,0,0,1-.258,1.57A4.8,4.8,0,0,1,5.981-.609,3.946,3.946,0,0,1,5.161.4a8.925,8.925,0,0,1-1.2.914A4.975,4.975,0,0,0,2.981.7a9.234,9.234,0,0,0,1.5-.914,3.07,3.07,0,0,0,.7-.844A3.985,3.985,0,0,0,5.606-2.2a9.688,9.688,0,0,0,.188-1.219H4.388q.047-1.219.047-2.2T4.388-7.078H7.669A20.131,20.131,0,0,0,8.606-9.8Q9.216-9.516,9.778-9.281ZM2.7-6.234q-.047.75-.047,1.734v3.234q.563-.516,1.266-1.266.234.281.609.7Q3.966-1.312,3.263-.68A8.856,8.856,0,0,0,2.231.375a8.419,8.419,0,0,0-.75-.75,1.124,1.124,0,0,0,.328-.984V-5.437q-.8,0-1.453.047v-.891q.656.047.984.047ZM9.216-4.172V-6.328H5.325v2.156ZM1.528-9.562A14.182,14.182,0,0,1,3.4-7.875q-.141.141-.656.7Q1.575-8.391.919-8.953A2.715,2.715,0,0,0,1.528-9.562Zm3.7-.141A18.148,18.148,0,0,1,6.45-7.687a7.483,7.483,0,0,0-.8.469A11.2,11.2,0,0,0,4.528-9.281,3.481,3.481,0,0,0,5.231-9.7Zm16.7.375q-.047.891-.047,2.063v6.75q.047.891-.3,1.148a4.149,4.149,0,0,1-1.57.445,3.329,3.329,0,0,0-.469-1.125A4.791,4.791,0,0,0,20.662-.07q.328-.07.281-.492V-3.047H18.178a9.544,9.544,0,0,1-1.594,4.359A3.017,3.017,0,0,0,15.6.7q1.828-1.828,1.688-5.953V-7.219q0-1.125-.047-2.109Zm-6,.375q-.047.984-.047,2.109v3.375q0,1.125.047,2.016h-.891v-.7H13.069V-.844h-.937q.047-.8.047-2.062V-6.891q0-1.125-.047-2.062Zm5.016,2.391V-8.531H18.225v1.969Zm0,2.719V-5.766H18.225v1.922ZM15.037-3V-5.3H13.069V-3Zm0-3.047V-8.156H13.069v2.109ZM-7.106,7.188q-.047.984-.047,1.969v4.031a12.964,12.964,0,0,0,.047,1.359h-.984v-.8H-9.778v1.219h-.938q0-.234.047-1.125V9.156q0-.984-.047-1.969Zm6.516.188q-.891.094-1.922.188T-5.091,7.7v2.438h3.281q.8,0,1.547-.047v.844q-.844-.047-1.875-.047v4.688q0,.844.047,1.547h-.984q.047-.8.047-1.547V10.891H-5.091a10.412,10.412,0,0,1-.422,3.375,7.636,7.636,0,0,1-1.781,2.906,1.827,1.827,0,0,0-.891-.609,7.375,7.375,0,0,0,1.313-1.594,5.638,5.638,0,0,0,.656-1.641,13.869,13.869,0,0,0,.234-2.437Q-5.934,9.3-5.981,7q.8,0,2.484-.164a7.43,7.43,0,0,0,2.344-.492A2.485,2.485,0,0,0-.591,7.375ZM-8.091,13V7.984H-9.778V13ZM4.669,6.859q.8,0,1.359-.047v.8a6.041,6.041,0,0,0-.75-.047v6.328q.516-.141,1.172-.328v.8q-.609.141-1.172.281,0,1.828.047,2.672H4.387q.047-.7.047-2.484a16.344,16.344,0,0,0-2.062.563,13.805,13.805,0,0,0-1.594.656L.4,14.969l1.031-.187V7.563q-.375,0-.938.047v-.8q.609.047,1.641.047Zm.984,9.375a5.12,5.12,0,0,0,1.1-.914,11.644,11.644,0,0,0,1.1-1.477,8.349,8.349,0,0,1-.914-2.672,31.519,31.519,0,0,1-.3-3.141H6.262v-.8q.938.047,1.688.047h2.625a26.562,26.562,0,0,1-.539,3.8,9.754,9.754,0,0,1-1.1,2.766,4.867,4.867,0,0,0,1.008,1.219,7.915,7.915,0,0,0,1.383.984,3.218,3.218,0,0,0-.8.8,8.976,8.976,0,0,1-2.109-2.2,10,10,0,0,1-1.922,2.3A2.8,2.8,0,0,0,5.653,16.234Zm1.828-8.2q.141,1.875.258,2.813A8.308,8.308,0,0,0,8.372,13a10.4,10.4,0,0,0,.961-2.883q.211-1.336.258-2.086Zm-3.047,1.5V7.563H2.278V9.531ZM2.278,14.594q1.125-.234,2.156-.469v-1.5H2.278Zm2.156-2.719V10.234H2.278v1.641Z" transform="translate(-1246 -5615)" fill="#4e443b"/>
                                        <path data-idr="Path_3416" data-name="Path 3416" d="M-4.211-3.819a7.336,7.336,0,0,0,.22,2.054.887.887,0,0,0,.9.712.874.874,0,0,0,.894-.712,7.6,7.6,0,0,0,.212-2.054A7.517,7.517,0,0,0-2.194-5.9a.867.867,0,0,0-.894-.677.879.879,0,0,0-.9.677A7.254,7.254,0,0,0-4.211-3.819Zm1.123-4.023A2.2,2.2,0,0,1-1-6.794,6.061,6.061,0,0,1-.4-3.819,6.028,6.028,0,0,1-1-.849,2.2,2.2,0,0,1-3.088.193,2.2,2.2,0,0,1-5.175-.849a6.028,6.028,0,0,1-.6-2.97,6.061,6.061,0,0,1,.6-2.976A2.2,2.2,0,0,1-3.088-7.842ZM.344,0A3.66,3.66,0,0,1,.7-1.531,4.328,4.328,0,0,1,2.25-3.18,11.344,11.344,0,0,0,3.62-4.265,1.6,1.6,0,0,0,4.1-5.382,1.238,1.238,0,0,0,3.824-6.2a.965.965,0,0,0-.784-.328.956.956,0,0,0-.951.521,2.584,2.584,0,0,0-.172.956H.43A3.759,3.759,0,0,1,.79-6.66,2.244,2.244,0,0,1,2.967-7.826a2.763,2.763,0,0,1,1.968.685,2.367,2.367,0,0,1,.731,1.813A2.451,2.451,0,0,1,5.15-3.792,5.142,5.142,0,0,1,4.036-2.8l-.613.435q-.576.408-.788.591a1.731,1.731,0,0,0-.357.424h3.4V0Z" transform="translate(-1246 -5669.623)" fill="#4e443b"/>
                                        <path data-idr="Path_3424" data-name="Path 3424" d="M-17.194-9.8a8.443,8.443,0,0,1,.75,1.313h2.672q.937,0,1.875-.047v.844q-.938-.047-1.875-.047h-5.391a13.183,13.183,0,0,1,1.078,1.219,3.481,3.481,0,0,0-.7.422h2.531q.281-.75.563-1.594a7.391,7.391,0,0,0,1.078.328,7.911,7.911,0,0,0-.75,1.266h2.625q-.047.563-.047,1.547V.094a.813.813,0,0,1-.516.8,5.6,5.6,0,0,1-1.406.375A2.069,2.069,0,0,0-15.084.234,2.638,2.638,0,0,0-13.912.141a.5.5,0,0,0,.234-.469V-5.437h-6.844V1.125h-.937q.047-1.219.047-1.734V-4.641q0-.469-.047-1.453h2.578a4.538,4.538,0,0,0-1.078-1.172,3.446,3.446,0,0,0,.7-.469h-1.078q-1.078,0-1.875.047v-.844q.8.047,1.828.047h2.906a2.645,2.645,0,0,0-.609-.984A7.49,7.49,0,0,0-17.194-9.8Zm-1.031,4.828a10.218,10.218,0,0,0,.891.563,5.566,5.566,0,0,0-1.359,1.266h3.563q-.047.609-.047,1.313t.047,1.406h-3.656q.047-.7.047-1.359,0-.7-.047-1.266-.328.281-.656.516a1.535,1.535,0,0,0-.7-.516A7.789,7.789,0,0,0-18.225-4.969Zm2.156,3.844V-2.437H-17.9v1.313Zm.047-3.891a17.725,17.725,0,0,1,2.109,1.547,2.207,2.207,0,0,0-.7.609,9.835,9.835,0,0,0-1.969-1.547A2.113,2.113,0,0,0-16.022-5.016ZM-2.512-9.141q-.047.844-.047,1.922,0,1.031.047,1.828H-8.934a16.291,16.291,0,0,0,.094-1.875,16.291,16.291,0,0,0-.094-1.875ZM-.731-4.312q-.047.844-.047,2.578,0,1.688.047,2.391h-.891V0H-4.294V.8h-.891q.047-.8.047-2.531t-.047-2.578ZM-7.2.75V0H-9.731V.8h-.891q.047-.8.047-2.531,0-1.781-.047-2.578h4.313A20.535,20.535,0,0,0-6.4-2.062q0,1.406.094,2.813Zm3.8-6.937V-8.344H-8v2.156ZM-1.622-.844V-3.469H-4.294V-.844Zm-5.578,0V-3.469H-9.731V-.844ZM5.7-9.094a5.824,5.824,0,0,0-.562,1.172H6.684q0-.937-.047-1.781H7.716a13.241,13.241,0,0,0-.094,1.781q1.641-.047,2.344-.047v.8q-.8-.047-2.344-.047v1.641H9.216q.7,0,1.406-.047v.844q-.7-.047-2.156-.047V-2.25q0,.469.516.469h.563q.328-.187.375-1.078a2.915,2.915,0,0,0,.984.375Q10.622-.891,9.919-.891H8.653q-1.078,0-1.078-.984V-4.828H6.638a5.1,5.1,0,0,1-.516,2.391A6.989,6.989,0,0,1,4.716-.609a2.229,2.229,0,0,0-.937-.516,4.792,4.792,0,0,0,1.57-1.664,4.65,4.65,0,0,0,.4-2.039q-1.406,0-2.109.047v-.891a10.752,10.752,0,0,0,1.313.094H6.684V-7.219H4.9a8.906,8.906,0,0,0-.375,1.078q-.516-.187-.937-.328A9.36,9.36,0,0,0,4.622-9.375Q5.091-9.234,5.7-9.094Zm-2.859,3.7q-.047.984-.047,1.781v2.531A6.566,6.566,0,0,0,6.684,0a21.7,21.7,0,0,0,4.5-.234A2.717,2.717,0,0,0,10.716.844Q7.809.891,6.52.8A10.766,10.766,0,0,1,4.341.445,5.515,5.515,0,0,1,2.934-.141a.634.634,0,0,0-.891.07Q1.669.328,1.2.938A2.446,2.446,0,0,0,.356.328,10.646,10.646,0,0,1,1.9-.984V-4.641q-.7,0-1.5.047v-.844Q1.294-5.391,2.841-5.391Zm-.7-3.7q.609,1.406.844,2.109-.422.141-.844.328A21.947,21.947,0,0,0,1.2-8.766Q1.622-8.906,2.138-9.094Zm13.978-.375q.656,0,1.594.047h4.031a16.923,16.923,0,0,1-.914,1.641,8.751,8.751,0,0,1-1.289,1.453,3.985,3.985,0,0,0,1.289.516,15.732,15.732,0,0,0,1.8.234,2.143,2.143,0,0,0-.562.984,13.1,13.1,0,0,1-1.875-.492,5.731,5.731,0,0,1-1.359-.727,10.631,10.631,0,0,1-1.312.68,14.294,14.294,0,0,1-1.594.539,1.606,1.606,0,0,0-.656-.8,13.7,13.7,0,0,0,1.5-.328,4.946,4.946,0,0,0,1.313-.609,5.743,5.743,0,0,1-1.406-2.344h-.562ZM15.084-5.3q0,.422.047.891a9.324,9.324,0,0,0-.984.422V-.328q-.094.8-.516.961a6.943,6.943,0,0,1-1.359.3,7.337,7.337,0,0,0-.234-1.266q1.125.094,1.172-.141V-3.609a10.949,10.949,0,0,0-1.266.7,6.615,6.615,0,0,0-.469-1.078A17.683,17.683,0,0,0,13.209-4.5V-6.75q-.844,0-1.453.047v-.891q.563.047,1.453.047,0-1.031-.047-2.25h1.031q-.047,1.125-.047,2.25.516,0,1.359-.047V-6.7q-.75-.047-1.359-.047v1.875Q14.616-5.062,15.084-5.3Zm3.188,1.5a7.71,7.71,0,0,0-.094-1.172h1.078q-.047.609-.047,1.172,1.172,0,2.25-.047V-3q-1.266-.047-2.25-.047v1.406q1.5,0,3.141-.047v.844q-1.312-.047-3.141-.047,0,1.641.047,2.156H18.178a15.262,15.262,0,0,0,.094-2.156q-2.578,0-3.281.047v-.844q.75.047,3.281.047V-3.047q-1.734,0-2.344.047v-.844Q16.725-3.8,18.272-3.8Zm-.75-4.875A3.8,3.8,0,0,0,18.834-6.8a5.431,5.431,0,0,0,.773-.727,5.854,5.854,0,0,0,.773-1.148ZM-19.584,12.766q1.125.844,2.109,1.688-.375.422-.7.844a8.156,8.156,0,0,0-1.641-1.641,17.59,17.59,0,0,1-.82,1.617,14.236,14.236,0,0,1-1.148,1.711,2.326,2.326,0,0,0-.937-.7,4.448,4.448,0,0,0,1.1-1.125,7.906,7.906,0,0,0,.844-1.57,5.5,5.5,0,0,0,.4-1.8H-20.8q-.7,0-1.547.047v-.844q.844.047,1.594.047h.422V9.016q-.937,0-1.547.047V8.219q.656.047,1.547.047,0-1.594-.047-2.2.516.047,1.125.141a1.824,1.824,0,0,0-.211.914q-.023.633-.023,1.148,1.031,0,1.453-.047v.844q-.562-.047-1.453-.047v2.016q1.266,0,1.688-.047v.844q-.422-.047-1.734-.047Q-19.537,12.156-19.584,12.766Zm5.25-3.7a11.628,11.628,0,0,0-.234,1.734q-.094,1.172-.234,2.063h.8q-.047.469-.047,1.266v1.313q0,.609.3.7a1.717,1.717,0,0,0,.633.07.493.493,0,0,0,.445-.258,5.37,5.37,0,0,0,.258-1.219,2.7,2.7,0,0,0,.938.516,4.5,4.5,0,0,1-.633,1.523,1.2,1.2,0,0,1-.867.258h-.891q-1.031,0-1.031-1.078V13.094a5.77,5.77,0,0,1-.492,1.266,5.551,5.551,0,0,1-1.031,1.266,11.126,11.126,0,0,1-2.227,1.547,2.638,2.638,0,0,0-.8-.75,7.947,7.947,0,0,0,2.32-1.406A4.936,4.936,0,0,0-15.9,13.422a6.271,6.271,0,0,0,.445-2.039q.094-1.242.094-2.508A9.28,9.28,0,0,0-14.334,9.063Zm1.922-2.2q-.047.75-.047,3t.047,3.188H-13.3V7.656h-3.328v5.438h-.844q.047-1.078.047-3.234t-.047-3Zm8.353,0a8.756,8.756,0,0,0-.609.984h3.516a10.124,10.124,0,0,1-.773,1.711,9.462,9.462,0,0,1-1.055,1.477,6.434,6.434,0,0,0,1.43.68,6.132,6.132,0,0,0,1.383.352A2.7,2.7,0,0,0-.684,13q-.609-.234-1.406-.586A7.88,7.88,0,0,1-3.637,11.5a9.187,9.187,0,0,1-1.43.867,17.159,17.159,0,0,1-1.8.727,1.958,1.958,0,0,0-.516-.7,9.783,9.783,0,0,0,1.8-.609,6.151,6.151,0,0,0,1.336-.8A9.017,9.017,0,0,1-5.466,9.3q-.281.422-.844,1.172A3.043,3.043,0,0,0-7.059,10a7.175,7.175,0,0,0,1.2-1.641,10,10,0,0,0,.82-1.922A3.125,3.125,0,0,0-4.059,6.859Zm2.813,6.047q-.047.563-.047,2.016t.047,2.156h-.984v-.75H-5.137v.8h-.984q.047-.75.047-2.156,0-1.453-.047-2.062ZM-8.231,6.438q-.047.609-.047,1.172V8.828q.891,0,1.313-.047v.844q-.422-.047-1.312-.047v1.313a4.345,4.345,0,0,0,.563-.422,15.02,15.02,0,0,1,.8,1.406q-.375.234-.7.469-.375-.8-.656-1.266v4.406q0,1.031.047,1.688h-.937q.047-.656.047-1.687V11.453a31.692,31.692,0,0,1-1.406,2.953,2.535,2.535,0,0,0-.7-.562,14.939,14.939,0,0,0,1.219-2.3,12.039,12.039,0,0,0,.656-1.969q-.656,0-1.453.047V8.781q.844.047,1.688.047V7.609q0-.516-.047-1.172Zm6,9.188V13.609H-5.137v2.016Zm-1.406-5.109A6.49,6.49,0,0,0-2.372,8.547H-5.044A6.6,6.6,0,0,0-3.637,10.516ZM9.028,16.375a2.548,2.548,0,0,0,.727-.141q.211-.094.211-.469V14.172H8.372V16.75h-.8V14.172H6.263a4.786,4.786,0,0,1-.328,1.383,5.811,5.811,0,0,1-.984,1.57,1.158,1.158,0,0,0-.891-.516,3.693,3.693,0,0,0,.914-1.1,3.989,3.989,0,0,0,.4-1.383q.094-.8.117-2.227t-.023-2.32h2.2q.422-.75.75-1.5H6.5q-.562.656-1.453,1.828a2.327,2.327,0,0,0-.8-.469A13.187,13.187,0,0,0,5.653,7.7,7.455,7.455,0,0,0,6.5,6.063a6.28,6.28,0,0,0,1.078.375,3.1,3.1,0,0,0-.7.984H9.731q-.844,1.5-1.125,2.156h2.25q-.047.844-.047,1.828v4.688a.767.767,0,0,1-.281.773,3.88,3.88,0,0,1-1.125.4A1.716,1.716,0,0,0,9.028,16.375ZM.075,12.3A6.528,6.528,0,0,0,1.294,10.68a8.338,8.338,0,0,0,.844-2.6q-.891,0-1.453.047V7.281q.656.047,1.266.047H3.263q.8,0,1.359-.047v.844q-.562-.047-1.547-.047a13.9,13.9,0,0,1-.75,2.438H4.434q-.047.8-.047,1.5v1.969q0,.8.047,1.781H3.591v-.891H2.231v1.688H1.388q.047-.984.047-1.687V12.063q-.234.375-.562.891A2.427,2.427,0,0,0,.075,12.3Zm3.516,1.875v-3H2.231v3Zm6.375-2.578V10.234H8.372v1.359Zm0,1.922V12.25H8.372v1.266ZM7.575,11.594V10.234H6.263v1.359Zm0,1.922V12.25H6.263v1.266Zm11.4-3.375q.891,0,1.828-.047v.891q-.844-.047-2.016-.047H17.756v1.875h1.969q.516,0,1.453-.047v.891q-.937-.047-1.5-.047H17.756v2.2a21.549,21.549,0,0,0,4.688-.047,3.329,3.329,0,0,0-.469,1.125q-1.875,0-3.094-.047a9.129,9.129,0,0,1-2.062-.281,4.737,4.737,0,0,1-1.5-.7A6.854,6.854,0,0,1,14.1,14.734a10.374,10.374,0,0,1-1.734,2.344,2.554,2.554,0,0,0-.937-.609,6.237,6.237,0,0,0,1.922-2.437,7.139,7.139,0,0,0,.656-2.156,3.669,3.669,0,0,0,1.125.422,2.8,2.8,0,0,0-.3.586q-.164.4-.4,1.008a6.442,6.442,0,0,0,.984.961,4.163,4.163,0,0,0,1.406.773V10.938h-1.5q-.8,0-1.594.047v-.891q.8.047,1.875.047Zm2.906-2.156q-.047.656-.047.984t.047.891H20.9V8.734H13.4V9.859h-.984a6.853,6.853,0,0,0,.047-.844q0-.469-.047-1.031ZM16.069,6.531a2.856,2.856,0,0,0,.844-.469,7.862,7.862,0,0,1,.938,1.406,6.35,6.35,0,0,0-.937.469A4.651,4.651,0,0,0,16.069,6.531Z" transform="translate(-1153 -5615)" fill="#4e443b"/>
                                        <path data-idr="Path_3417" data-name="Path 3417" d="M-4.211-3.819a7.336,7.336,0,0,0,.22,2.054.887.887,0,0,0,.9.712.874.874,0,0,0,.894-.712,7.6,7.6,0,0,0,.212-2.054A7.517,7.517,0,0,0-2.194-5.9a.867.867,0,0,0-.894-.677.879.879,0,0,0-.9.677A7.254,7.254,0,0,0-4.211-3.819Zm1.123-4.023A2.2,2.2,0,0,1-1-6.794,6.061,6.061,0,0,1-.4-3.819,6.028,6.028,0,0,1-1-.849,2.2,2.2,0,0,1-3.088.193,2.2,2.2,0,0,1-5.175-.849a6.028,6.028,0,0,1-.6-2.97,6.061,6.061,0,0,1,.6-2.976A2.2,2.2,0,0,1-3.088-7.842ZM1.794-2.39a1.754,1.754,0,0,0,.15.773,1.028,1.028,0,0,0,1.013.564,1.121,1.121,0,0,0,.785-.309,1.149,1.149,0,0,0,.335-.889,1,1,0,0,0-.621-1.026,3.144,3.144,0,0,0-1.114-.145v-1.1A2.879,2.879,0,0,0,3.38-4.662a.9.9,0,0,0,.508-.913,1.022,1.022,0,0,0-.26-.725A.949.949,0,0,0,2.9-6.58a.924.924,0,0,0-.8.344,1.461,1.461,0,0,0-.244.918H.43a3.847,3.847,0,0,1,.2-1.1,2.479,2.479,0,0,1,.59-.843,2.056,2.056,0,0,1,.714-.419,3.085,3.085,0,0,1,1.014-.145,2.7,2.7,0,0,1,1.8.577A1.924,1.924,0,0,1,5.43-5.7a1.713,1.713,0,0,1-.408,1.16,1.394,1.394,0,0,1-.537.4,1.1,1.1,0,0,1,.6.36,1.922,1.922,0,0,1,.585,1.482A2.5,2.5,0,0,1,4.988-.556,2.606,2.606,0,0,1,2.962.193a2.45,2.45,0,0,1-2.3-1.08A3.207,3.207,0,0,1,.29-2.39Z" transform="translate(-1153 -5669.623)" fill="#4e443b"/>
                                        <path data-idr="Path_3423" data-name="Path 3423" d="M-14.944-7.547q.469-1.031.938-2.25a7.3,7.3,0,0,1,.984.422,8.23,8.23,0,0,0-.984,1.828h.188q1.312-.047,1.875-.047v.844Q-12.459-6.8-13.4-6.8h-1.172v1.828h.75q1.078-.047,1.594-.047v.844q-.609-.047-1.453-.047h-.891V-2.3h1.453q.891-.047,1.453-.047V-1.5q-.516-.047-1.453-.047h-1.453V-.516q0,.984.047,1.641h-.937V-1.547h-1.125q-.891,0-1.734.047v-.891q.844.047,1.781.094h1.078V-4.219h-.8q-.8,0-1.406.047v-.891q.563.047,1.453.094h.75V-6.8h-1.125q-.8,0-1.359.047v-.891q.563.047,1.359.094Zm-5.672-.609q0-.8-.047-1.453h.984q-.047.75-.047,1.453v1.125q.609,0,1.266-.047v.844q-.656-.047-1.266-.047v1.734q.375-.328.563-.469.516.656,1.172,1.688a4.875,4.875,0,0,0-.8.563q-.516-.937-.937-1.641V-.891q0,.984.047,1.969h-.984q.047-1.031.047-1.969V-4.219a15.853,15.853,0,0,1-1.5,2.859,3.307,3.307,0,0,0-.562-.844A10.8,10.8,0,0,0-20.8-6.281q-.75,0-1.641.047v-.844q.891.047,1.828.047ZM-16.4-9.75a11.805,11.805,0,0,1,.7,1.594,4.4,4.4,0,0,0-.8.328q-.328-.8-.7-1.547Q-16.678-9.609-16.4-9.75Zm13.884.609q-.047.844-.047,1.922,0,1.031.047,1.828H-8.934a16.291,16.291,0,0,0,.094-1.875,16.291,16.291,0,0,0-.094-1.875ZM-.731-4.312q-.047.844-.047,2.578,0,1.688.047,2.391h-.891V0H-4.294V.8h-.891q.047-.8.047-2.531t-.047-2.578ZM-7.2.75V0H-9.731V.8h-.891q.047-.8.047-2.531,0-1.781-.047-2.578h4.313A20.535,20.535,0,0,0-6.4-2.062q0,1.406.094,2.813Zm3.8-6.937V-8.344H-8v2.156ZM-1.622-.844V-3.469H-4.294V-.844Zm-5.578,0V-3.469H-9.731V-.844ZM2.184-8.672a8.278,8.278,0,0,0-.469.891H3.075q0-1.172-.047-1.828H4.106Q4.059-9,4.059-7.781h.7q.937,0,1.688-.047v.844q-.656-.047-1.641-.047h-.75v1.359H5.231q.7,0,1.5-.047v.8H4.059v1.266H6.591q-.047.563-.07,1.547T6.473-.773a.588.588,0,0,1-.4.516A5.522,5.522,0,0,1,5,.047a5.261,5.261,0,0,0-.328-1.078,2.279,2.279,0,0,0,.75-.07q.141-.07.141-.727V-2.906h-1.5V-.328q0,.8.047,1.359H3.028q.047-.891.047-1.359V-2.906H1.622V.047H.638Q.684-.562.684-1.219V-2.25q0-.891-.047-1.406H3.075V-4.922h-1.5q-.844,0-1.453.047v-.844q.609.047,1.453.047h1.5V-7.031H1.434a6.52,6.52,0,0,1-.469.938,5.691,5.691,0,0,0-.844-.469A5,5,0,0,0,.684-7.641,11.707,11.707,0,0,0,1.106-9,7.392,7.392,0,0,0,2.184-8.672Zm8.531-.844q-.047.469-.047,1.359V-.047a.758.758,0,0,1-.492.82,9.046,9.046,0,0,1-1.43.3A4.842,4.842,0,0,0,8.372,0,7.945,7.945,0,0,0,9.45-.047q.281-.047.281-.609v-7.5q0-.8-.047-1.359ZM8.466-8.109q-.047.656-.047,1.172v3.891q0,.656.047,1.594H7.434a13.629,13.629,0,0,0,.094-1.594V-6.937a9.156,9.156,0,0,0-.094-1.172ZM18.741-9.469a4.67,4.67,0,0,0-1.031,1.781H20.8q1.031,0,1.641-.047v.844q-.609-.047-1.641-.047H18.647v1.828h1.922q.8,0,1.313-.047v.891q-.609-.047-1.312-.047H18.647V-2.2h2.016q.938,0,1.547-.047v.891q-.609-.047-1.5-.047H18.647v.891q0,1.313.047,1.781h-.984q.047-.516.047-1.406v-6.8h-.469a22.7,22.7,0,0,1-1.359,2.109,3.008,3.008,0,0,0-.891-.609A9.115,9.115,0,0,0,16.4-7.312a12.31,12.31,0,0,0,1.125-2.625A7.862,7.862,0,0,0,18.741-9.469Zm-3.281.188a5.584,5.584,0,0,0-1.078,2.016v6q0,1.5.047,2.391H13.35Q13.4.281,13.4-1.219V-5.625A16.621,16.621,0,0,1,12.131-3.8a3.839,3.839,0,0,0-.656-.8,12.394,12.394,0,0,0,1.477-2.18,13.029,13.029,0,0,0,1.289-3.117A7.375,7.375,0,0,0,15.459-9.281Z" transform="translate(-1065 -5607)" fill="#4e443b"/>
                                        <path data-idr="Path_3418" data-name="Path 3418" d="M-4.211-3.819a7.336,7.336,0,0,0,.22,2.054.887.887,0,0,0,.9.712.874.874,0,0,0,.894-.712,7.6,7.6,0,0,0,.212-2.054A7.517,7.517,0,0,0-2.194-5.9a.867.867,0,0,0-.894-.677.879.879,0,0,0-.9.677A7.254,7.254,0,0,0-4.211-3.819Zm1.123-4.023A2.2,2.2,0,0,1-1-6.794,6.061,6.061,0,0,1-.4-3.819,6.028,6.028,0,0,1-1-.849,2.2,2.2,0,0,1-3.088.193,2.2,2.2,0,0,1-5.175-.849a6.028,6.028,0,0,1-.6-2.97,6.061,6.061,0,0,1,.6-2.976A2.2,2.2,0,0,1-3.088-7.842ZM5.752-1.676H4.872V0h-1.5V-1.676H.29V-3.013L3.153-7.74H4.872v4.866h.881Zm-2.379-1.2V-6.228L1.429-2.874Z" transform="translate(-1065 -5669.623)" fill="#4e443b"/>
                                        <path data-idr="Path_3422" data-name="Path 3422" d="M-3.45-7.687q0-.937-.047-2.062h.984q-.047.563-.047,2.063.984,0,1.922-.047v.891q-.938-.047-1.922-.047v2.063q1.125,0,2.156-.047v.891q-1.031-.047-2.156-.047v1.922q0,.8.047,1.641H-3.5q0-.844.047-1.641V-4.031H-5.231A8.154,8.154,0,0,1-5.77-1.969,6.25,6.25,0,0,1-6.825-.375a6.491,6.491,0,0,0-.891-.609A4.377,4.377,0,0,0-6.544-2.461a6.943,6.943,0,0,0,.422-1.57Q-7.2-4.031-8-3.984v-.891q.844.047,1.969.047.094-1.078.094-2.062A17.457,17.457,0,0,0-7.762-6.8v-.937q.891.047,1.875.047,0-1.078-.047-2.062.469.047.984.094Q-5-9.047-5.044-7.687ZM-8.7-5.859q-.094,1.031-.094,1.734v2.953A6.213,6.213,0,0,0-5.887-.07,22.023,22.023,0,0,0-2.864.047,21.131,21.131,0,0,0-.216-.187,3.782,3.782,0,0,0-.5.984q-2.25,0-3.68-.047A12.254,12.254,0,0,1-6.8.586a7.433,7.433,0,0,1-1.8-.656.875.875,0,0,0-1.055,0,8.393,8.393,0,0,0-.961.914,3.19,3.19,0,0,0-.7-.75Q-10.2-.75-9.684-1.078V-5.062A11.652,11.652,0,0,0-11-4.969v-.937q.938.047,1.406.047Zm5.25,1.031V-6.891H-5.044q-.047.984-.141,2.063Zm-6-4.641a16.622,16.622,0,0,1,.938,2.109,2.466,2.466,0,0,0-.937.375,6.151,6.151,0,0,0-.938-2.109ZM9.637-5.812q.891,0,1.641-.047v.938q-.75-.047-1.594-.047H9.028V.141a.721.721,0,0,1-.352.773,5.2,5.2,0,0,1-1.57.352A2.6,2.6,0,0,0,6.591.141a6.933,6.933,0,0,0,1.125.07q.328-.023.375-.492V-4.969H6.216q-.891,0-1.687.047v-.937q.844.047,1.688.047ZM4.012-6.375a1.588,1.588,0,0,0-.633.609q-.211.375-.586.938V-.609q0,.609.047,1.875H1.856Q1.9-.141,1.9-.844v-3A7.394,7.394,0,0,1,.778-2.437q-.328-.469-.609-.8A11.377,11.377,0,0,0,1.856-5.2q.609-.937,1.078-1.781Q3.4-6.7,4.012-6.375ZM8.841-9q.8,0,1.641-.047v.891Q9.637-8.2,8.747-8.2H7.012q-1.031,0-1.781.047v-.891Q5.981-9,7.012-9Zm-5.25-.234q-.375.047-.984,1.008A15.543,15.543,0,0,1,.919-6.094a6.555,6.555,0,0,0-.609-.7A12.214,12.214,0,0,0,1.669-8.414a8.743,8.743,0,0,0,.891-1.523A12.25,12.25,0,0,1,3.591-9.234ZM-19.584,7.281a2.755,2.755,0,0,0-.469.82q-.187.492-.375.961h2.813V7.422q0-.609-.047-1.172h1.078q-.047.516-.047,1.172V9.063h2.063q.75,0,1.688-.047v.938q-.891-.047-1.687-.047h-2.062v2.109h1.453q.656,0,1.594-.047v.938q-.891-.047-1.594-.047h-1.453v2.813h2.813q.75,0,1.734-.047v.891q-.938-.047-1.734-.047h-6.75q-.8,0-1.641.047v-.891q.891.047,1.641.047h2.953V12.859H-19.35q-.656,0-1.359.047v-.937q.7.047,1.359.047h1.734V9.906h-3.141a14.1,14.1,0,0,1-.844,1.688,4.276,4.276,0,0,0-1.125-.328,7.477,7.477,0,0,0,1.1-1.8,10.047,10.047,0,0,0,.82-2.648ZM-2.231,9.063a5.73,5.73,0,0,0-.539.82q-.3.539-.539,1.008h1.453a11.522,11.522,0,0,0,1.312-.047v.938a11.057,11.057,0,0,0-1.219-.047H-8.841q0,3.7-1.781,5.438a1.88,1.88,0,0,0-.7-.7,5.24,5.24,0,0,0,1.406-2.836,13.756,13.756,0,0,0,.094-2.742h5.531A13.076,13.076,0,0,0-3.4,8.547Q-2.794,8.828-2.231,9.063ZM-5.137,6.109q.094.328.375,1.5h2.344q.844,0,1.594-.047v.891q-.75-.047-1.453-.047H-7.95q-.7,0-1.781.047V7.563q1.125.047,1.453.047h2.438a11.379,11.379,0,0,0-.375-1.266Q-5.653,6.2-5.137,6.109ZM-7.247,8.594a12.747,12.747,0,0,1,1.078,1.734,9.211,9.211,0,0,0-.984.469,7.27,7.27,0,0,0-.984-1.687Q-7.669,8.828-7.247,8.594ZM2.184,7.328a8.278,8.278,0,0,0-.469.891H3.075q0-1.172-.047-1.828H4.106Q4.059,7,4.059,8.219h.7q.937,0,1.688-.047v.844q-.656-.047-1.641-.047h-.75v1.359H5.231q.7,0,1.5-.047v.8H4.059v1.266H6.591q-.047.563-.07,1.547t-.047,1.336a.588.588,0,0,1-.4.516,5.522,5.522,0,0,1-1.078.3,5.261,5.261,0,0,0-.328-1.078,2.279,2.279,0,0,0,.75-.07q.141-.07.141-.727V13.094h-1.5v2.578q0,.8.047,1.359H3.028q.047-.891.047-1.359V13.094H1.622v2.953H.638q.047-.609.047-1.266V13.75q0-.891-.047-1.406H3.075V11.078h-1.5q-.844,0-1.453.047v-.844q.609.047,1.453.047h1.5V8.969H1.434a6.52,6.52,0,0,1-.469.938,5.691,5.691,0,0,0-.844-.469A5,5,0,0,0,.684,8.359,11.707,11.707,0,0,0,1.106,7,7.392,7.392,0,0,0,2.184,7.328Zm8.531-.844q-.047.469-.047,1.359v8.109a.758.758,0,0,1-.492.82,9.046,9.046,0,0,1-1.43.3A4.842,4.842,0,0,0,8.372,16a7.945,7.945,0,0,0,1.078-.047q.281-.047.281-.609v-7.5q0-.8-.047-1.359ZM8.466,7.891q-.047.656-.047,1.172v3.891q0,.656.047,1.594H7.434a13.629,13.629,0,0,0,.094-1.594V9.063a9.156,9.156,0,0,0-.094-1.172ZM22.022,6.672q-.047,1.031-.047,1.875,0,.8.047,1.594h-5.25q.047-.891.047-1.687t-.047-1.781ZM11.85,6.953q.8-.094,1.8-.3a7.9,7.9,0,0,0,1.711-.539,7.4,7.4,0,0,0,.656,1.031,2,2,0,0,0-.68.023q-.352.07-.773.117v2.3q.656,0,1.406-.047v.891q-.75-.047-1.406-.047V14.5q0,1.031.047,2.766h-.937q.047-1.734.047-2.719V12.391a21.551,21.551,0,0,1-1.453,2.484,4.831,4.831,0,0,0-.75-.844,8.034,8.034,0,0,0,1.172-1.5,10.094,10.094,0,0,0,.938-2.156q-1.172,0-1.734.047V9.531q.8.047,1.172.047h.656V7.469q-.609.141-1.547.281A6.075,6.075,0,0,0,11.85,6.953Zm8.813,4.359q.75,0,1.594-.047v.844q-.844-.047-1.594-.047h-.891v1.5h.516q.7,0,1.641-.047v.891q-.937-.047-1.5-.047h-.656V16H20.9q.844,0,1.781-.047v.891q-.75-.047-1.781-.047H17.756a14.6,14.6,0,0,0-1.781.094v-.937q.75.047,1.781.047h1.125V14.359h-.656a9.957,9.957,0,0,0-1.406.094v-.937q.656.047,1.406.047h.656v-1.5h-.75q-.844,0-1.594.047v-.844q.75.047,1.594.047ZM20.991,9.3V7.469H17.662V9.3Zm-5.578,2.2q.469.7.984,1.641-.281.188-.75.563a10.181,10.181,0,0,0-.937-1.687A8.331,8.331,0,0,1,15.412,11.5Z" transform="translate(-992 -5615)" fill="#4e443b"/>
                                        <path data-idr="Path_3419" data-name="Path 3419" d="M-4.211-3.819a7.336,7.336,0,0,0,.22,2.054.887.887,0,0,0,.9.712.874.874,0,0,0,.894-.712,7.6,7.6,0,0,0,.212-2.054A7.517,7.517,0,0,0-2.194-5.9a.867.867,0,0,0-.894-.677.879.879,0,0,0-.9.677A7.254,7.254,0,0,0-4.211-3.819Zm1.123-4.023A2.2,2.2,0,0,1-1-6.794,6.061,6.061,0,0,1-.4-3.819,6.028,6.028,0,0,1-1-.849,2.2,2.2,0,0,1-3.088.193,2.2,2.2,0,0,1-5.175-.849a6.028,6.028,0,0,1-.6-2.97,6.061,6.061,0,0,1,.6-2.976A2.2,2.2,0,0,1-3.088-7.842Zm4.9,5.758a1.479,1.479,0,0,0,.348.771.985.985,0,0,0,.75.271,1.011,1.011,0,0,0,.865-.4,1.642,1.642,0,0,0,.3-1.007A1.753,1.753,0,0,0,3.8-3.456a.975.975,0,0,0-.868-.411,1.49,1.49,0,0,0-.482.07.959.959,0,0,0-.541.478L.534-3.384l.547-4.3H5.366v1.3H2.185l-.279,1.7a3.194,3.194,0,0,1,.552-.306,2.336,2.336,0,0,1,.81-.124,2.431,2.431,0,0,1,1.684.65,2.419,2.419,0,0,1,.719,1.891A2.968,2.968,0,0,1,4.98-.645,2.516,2.516,0,0,1,2.909.2a2.749,2.749,0,0,1-1.824-.6A2.317,2.317,0,0,1,.29-2.084Z" transform="translate(-992 -5669.623)" fill="#4e443b"/>
                                        <path data-idr="Path_3421" data-name="Path 3421" d="M-17.194-9.8a8.443,8.443,0,0,1,.75,1.313h2.672q.937,0,1.875-.047v.844q-.938-.047-1.875-.047h-5.391a13.183,13.183,0,0,1,1.078,1.219,3.481,3.481,0,0,0-.7.422h2.531q.281-.75.563-1.594a7.391,7.391,0,0,0,1.078.328,7.911,7.911,0,0,0-.75,1.266h2.625q-.047.563-.047,1.547V.094a.813.813,0,0,1-.516.8,5.6,5.6,0,0,1-1.406.375A2.069,2.069,0,0,0-15.084.234,2.638,2.638,0,0,0-13.912.141a.5.5,0,0,0,.234-.469V-5.437h-6.844V1.125h-.937q.047-1.219.047-1.734V-4.641q0-.469-.047-1.453h2.578a4.538,4.538,0,0,0-1.078-1.172,3.446,3.446,0,0,0,.7-.469h-1.078q-1.078,0-1.875.047v-.844q.8.047,1.828.047h2.906a2.645,2.645,0,0,0-.609-.984A7.49,7.49,0,0,0-17.194-9.8Zm-1.031,4.828a10.218,10.218,0,0,0,.891.563,5.566,5.566,0,0,0-1.359,1.266h3.563q-.047.609-.047,1.313t.047,1.406h-3.656q.047-.7.047-1.359,0-.7-.047-1.266-.328.281-.656.516a1.535,1.535,0,0,0-.7-.516A7.789,7.789,0,0,0-18.225-4.969Zm2.156,3.844V-2.437H-17.9v1.313Zm.047-3.891a17.725,17.725,0,0,1,2.109,1.547,2.207,2.207,0,0,0-.7.609,9.835,9.835,0,0,0-1.969-1.547A2.113,2.113,0,0,0-16.022-5.016ZM-2.512-9.141q-.047.844-.047,1.922,0,1.031.047,1.828H-8.934a16.291,16.291,0,0,0,.094-1.875,16.291,16.291,0,0,0-.094-1.875ZM-.731-4.312q-.047.844-.047,2.578,0,1.688.047,2.391h-.891V0H-4.294V.8h-.891q.047-.8.047-2.531t-.047-2.578ZM-7.2.75V0H-9.731V.8h-.891q.047-.8.047-2.531,0-1.781-.047-2.578h4.313A20.535,20.535,0,0,0-6.4-2.062q0,1.406.094,2.813Zm3.8-6.937V-8.344H-8v2.156ZM-1.622-.844V-3.469H-4.294V-.844Zm-5.578,0V-3.469H-9.731V-.844ZM4.059-4.875A9.163,9.163,0,0,0,5.7-2.156,8.471,8.471,0,0,0,7.622-5.109a9.883,9.883,0,0,0,.938.609,20.708,20.708,0,0,1-2.2,2.953,8.861,8.861,0,0,0,4.594,1.5,3.248,3.248,0,0,0-.562,1.078A10.507,10.507,0,0,1,5.606-.984,12.345,12.345,0,0,1,.919,1.125,2.673,2.673,0,0,0,.4.094,8.41,8.41,0,0,0,4.9-1.594,10.837,10.837,0,0,1,3.169-4.406,4.6,4.6,0,0,0,4.059-4.875ZM2.044-6.984q-.7,0-1.359.047v-.937L2-7.781H9.309l1.547-.094v.984L9.309-6.984Zm2.391.8q-.656.609-2.812,2.438A2.926,2.926,0,0,0,.731-4.5,7.008,7.008,0,0,0,2.348-5.672a9.876,9.876,0,0,0,1.1-1.219Q3.919-6.562,4.434-6.187Zm3.375-.7q.234.188,1.078.82t1.641,1.2a5.559,5.559,0,0,0-.891.8A14.883,14.883,0,0,0,7.013-6.187,8.543,8.543,0,0,1,7.809-6.891ZM5.794-9.937q.469,1.078.7,1.734-.656.188-1.125.328-.281-.8-.7-1.734Q5.231-9.8,5.794-9.937Zm12.759.422q-.047.609-.047,1.828.234-.141,1.078-.516a7.086,7.086,0,0,0,1.594-.984q.328.516.609.938a8.169,8.169,0,0,0-1.336.539q-.82.4-1.945.867v.8q0,.375.656.375h1.547q.563,0,.68-.234a2.7,2.7,0,0,0,.164-.891,3.776,3.776,0,0,0,1.031.469,2.654,2.654,0,0,1-.562,1.172.994.994,0,0,1-.656.234H18.6q-1.078,0-1.078-.937v-.75q-.984.375-1.594.563-.281-.516-.422-.8.75-.187,2.016-.516,0-1.547-.047-2.156Zm2.3,5.391q-.047.7-.047,1.453,0,.7.047,1.547H19.772v-2.2H14.756v2.156H13.725q.047-.75.047-1.453,0-.75-.047-1.5ZM16.022-9.094a9.606,9.606,0,0,0-1.078,1.031q0,2.625.047,3.469H13.912q.047-.844.047-2.578-.422.375-.8.75t-.75.7q-.422-.375-.7-.656a9.1,9.1,0,0,0,1.875-1.57A10.529,10.529,0,0,0,14.944-9.7,2.517,2.517,0,0,0,16.022-9.094Zm1.734,6.609q-.234.656-.445,1.2a2.908,2.908,0,0,1-.727,1.031,4.523,4.523,0,0,1-1.453.867,13.234,13.234,0,0,1-2.531.656A2.934,2.934,0,0,0,11.991.188a13.468,13.468,0,0,0,2.25-.234,3.448,3.448,0,0,0,1.383-.562,2.214,2.214,0,0,0,.7-.844,5.535,5.535,0,0,0,.352-1.172Q17.194-2.531,17.756-2.484Zm3.8,3.75A15.325,15.325,0,0,0,19.819.352q-.891-.4-2.016-.82a8.278,8.278,0,0,0,.469-.891q.984.422,1.828.8t2.016.891A4.661,4.661,0,0,0,21.553,1.266Z" transform="translate(-924 -5607)" fill="#4e443b"/>
                                        <path data-idr="Path_3420" data-name="Path 3420" d="M-4.211-3.819a7.336,7.336,0,0,0,.22,2.054.887.887,0,0,0,.9.712.874.874,0,0,0,.894-.712,7.6,7.6,0,0,0,.212-2.054A7.517,7.517,0,0,0-2.194-5.9a.867.867,0,0,0-.894-.677.879.879,0,0,0-.9.677A7.254,7.254,0,0,0-4.211-3.819Zm1.123-4.023A2.2,2.2,0,0,1-1-6.794,6.061,6.061,0,0,1-.4-3.819,6.028,6.028,0,0,1-1-.849,2.2,2.2,0,0,1-3.088.193,2.2,2.2,0,0,1-5.175-.849a6.028,6.028,0,0,1-.6-2.97,6.061,6.061,0,0,1,.6-2.976A2.2,2.2,0,0,1-3.088-7.842ZM1.88-2.465a1.527,1.527,0,0,0,.338,1.026,1.079,1.079,0,0,0,.859.4.954.954,0,0,0,.8-.384,1.6,1.6,0,0,0,.293-1A1.491,1.491,0,0,0,3.84-3.467a1.066,1.066,0,0,0-.816-.363,1.09,1.09,0,0,0-.693.236A1.338,1.338,0,0,0,1.88-2.465ZM4.034-5.828a.781.781,0,0,0-.145-.414.841.841,0,0,0-.747-.365,1.1,1.1,0,0,0-1.063.838A5.2,5.2,0,0,0,1.842-4.4,1.718,1.718,0,0,1,2.5-4.9a2.229,2.229,0,0,1,.859-.156,2.233,2.233,0,0,1,1.7.7,2.518,2.518,0,0,1,.663,1.8,3.037,3.037,0,0,1-.65,1.923A2.4,2.4,0,0,1,3.056.2a2.324,2.324,0,0,1-2.17-1.23A5.015,5.015,0,0,1,.344-3.507a11.284,11.284,0,0,1,.075-1.45A4.435,4.435,0,0,1,.94-6.612a2.666,2.666,0,0,1,.873-.908A2.354,2.354,0,0,1,3.1-7.863a2.557,2.557,0,0,1,1.729.556,2.114,2.114,0,0,1,.725,1.48Z" transform="translate(-924 -5669.623)" fill="#4e443b"/>
                                        <rect data-idr="Rectangle_131" data-name="Rectangle 131" width="151.963" height="20.292" transform="translate(-1365 -5590)" fill="#f6f4e8"/>
                                        <path data-idr="Path_3427" data-name="Path 3427" d="M-12.7-9.281a6.451,6.451,0,0,0-.375.8q-.187.469-.375,1.031h3.422q-.047.938-.047,1.875L-10.312-.75q0,1.5-.727,1.688a7.857,7.857,0,0,1-1.477.234A2.7,2.7,0,0,0-12.844.094,2.477,2.477,0,0,0-11.461.047q.258-.187.3-.937l.234-5.719h-2.906a11.522,11.522,0,0,1-1.219,2.156,2.856,2.856,0,0,0-.844-.469,7.071,7.071,0,0,0,1.148-1.8,15.279,15.279,0,0,0,1.055-2.93A2.915,2.915,0,0,0-12.7-9.281Zm-2.906,2.25a8.964,8.964,0,0,0-.8,1.055q-.562.82-1.922,2.93,1.219-.094,2.859-.281a2.406,2.406,0,0,0-.234.844,14.335,14.335,0,0,0-1.664.141,11.439,11.439,0,0,0-1.992.422,7.526,7.526,0,0,0-.469-1.031,2.187,2.187,0,0,0,1.055-.82,10.064,10.064,0,0,0,1.008-1.57,10.15,10.15,0,0,0-1.1.07,5.215,5.215,0,0,0-1.055.211A5.866,5.866,0,0,0-20.3-6a5.054,5.054,0,0,0,1.172-1.43,8.947,8.947,0,0,0,.938-2.133,5.179,5.179,0,0,0,.984.422,7.761,7.761,0,0,0-.8,1.2q-.469.82-1.172,1.945h1.828a9.369,9.369,0,0,0,.8-1.594Q-16.031-7.266-15.609-7.031ZM-20.25-.516q.609-.094,1.641-.234t3.141-.562a2.523,2.523,0,0,0-.141.8q-2.578.563-3.164.68a3.284,3.284,0,0,0-1.055.4A11.041,11.041,0,0,0-20.25-.516Zm6.516-4.312q.375.422,1.453,2.016a2.361,2.361,0,0,0-.75.563,13.424,13.424,0,0,0-1.359-2.016A5.25,5.25,0,0,0-13.734-4.828Zm5.3,4.359a1.868,1.868,0,0,1,.656-1.266A15.638,15.638,0,0,0-6.234-3.492,9.465,9.465,0,0,0-5.016-5.344,2.121,2.121,0,0,0-4.8-6.469a1.2,1.2,0,0,0-.445-.773A1.151,1.151,0,0,0-6.117-7.5a1.863,1.863,0,0,0-.937.375,2.025,2.025,0,0,0-.68.984l-.891-.141a3.512,3.512,0,0,1,.961-1.57,2.3,2.3,0,0,1,1.383-.539,2.981,2.981,0,0,1,.844.023,2.173,2.173,0,0,1,.773.328,1.907,1.907,0,0,1,.656.773A2.253,2.253,0,0,1-3.82-6.023a4.082,4.082,0,0,1-.727,1.734A33.608,33.608,0,0,1-7.078-1.125H-3.7v.844H-8.437ZM2.578-3.984H-2.766v-.75H2.578ZM3.469-2.3l.844-.141A2.277,2.277,0,0,0,4.922-1.43a1.4,1.4,0,0,0,1.055.375A1.265,1.265,0,0,0,6.984-1.57,1.6,1.6,0,0,0,7.313-2.7,1.315,1.315,0,0,0,6.82-3.68a3.033,3.033,0,0,0-1.43-.492v-.609A2.373,2.373,0,0,0,6.82-5.3a1.314,1.314,0,0,0,.4-1.1,1.133,1.133,0,0,0-.609-.984,1.389,1.389,0,0,0-1.2-.07A1.954,1.954,0,0,0,4.406-6.141l-.844-.141a4.052,4.052,0,0,1,.773-1.406,1.994,1.994,0,0,1,1.336-.656,2.668,2.668,0,0,1,1.477.211,1.741,1.741,0,0,1,.891.938,2.181,2.181,0,0,1,.07,1.383A2.245,2.245,0,0,1,7.031-4.5a2.151,2.151,0,0,1,1.008.844A2.2,2.2,0,0,1,8.273-2.18,2.174,2.174,0,0,1,7.453-.7a2.378,2.378,0,0,1-1.594.539A2.469,2.469,0,0,1,4.313-.727,2.533,2.533,0,0,1,3.469-2.3ZM17.391-9.187q.844,0,1.688-.047v.984Q18.234-8.3,17.391-8.3H15.469v2.531h3q.891,0,1.594-.047v.984q-.656-.047-1.547-.047H15.609a8.631,8.631,0,0,0,1.875,3.047A6.327,6.327,0,0,0,20.625-.094a2.261,2.261,0,0,0-.8.938A7.909,7.909,0,0,1,17.156-.773a9.013,9.013,0,0,1-2.109-3.164,6.7,6.7,0,0,1-1.781,3.07,10.524,10.524,0,0,1-3.047,1.945,2.088,2.088,0,0,0-.8-.891,8.2,8.2,0,0,0,2.859-1.57,6.394,6.394,0,0,0,2.109-3.492H11.813q-1.031,0-1.734.047v-.984q.75.047,1.734.047h2.719V-8.3H12.563q-.984,0-1.687.047v-.984q.75.047,1.688.047Z" transform="translate(-1289 -5576)" fill="#4e443b"/>
                                        <path data-idr="Path_3384" data-name="Path 3384" d="M0,0H176V20.292H0Z" transform="translate(-1211 -5590)" fill="#f6f4e8"/>
                                        <path data-idr="Path_3428" data-name="Path 3428" d="M-18.7-9.281a6.451,6.451,0,0,0-.375.8q-.187.469-.375,1.031h3.422q-.047.938-.047,1.875L-16.312-.75q0,1.5-.727,1.688a7.857,7.857,0,0,1-1.477.234A2.7,2.7,0,0,0-18.844.094,2.477,2.477,0,0,0-17.461.047q.258-.187.3-.937l.234-5.719h-2.906a11.522,11.522,0,0,1-1.219,2.156,2.856,2.856,0,0,0-.844-.469,7.071,7.071,0,0,0,1.148-1.8,15.279,15.279,0,0,0,1.055-2.93A2.915,2.915,0,0,0-18.7-9.281Zm-2.906,2.25a8.964,8.964,0,0,0-.8,1.055q-.562.82-1.922,2.93,1.219-.094,2.859-.281a2.406,2.406,0,0,0-.234.844,14.335,14.335,0,0,0-1.664.141,11.439,11.439,0,0,0-1.992.422,7.526,7.526,0,0,0-.469-1.031,2.187,2.187,0,0,0,1.055-.82,10.064,10.064,0,0,0,1.008-1.57,10.15,10.15,0,0,0-1.1.07,5.215,5.215,0,0,0-1.055.211A5.866,5.866,0,0,0-26.3-6a5.054,5.054,0,0,0,1.172-1.43,8.947,8.947,0,0,0,.938-2.133,5.179,5.179,0,0,0,.984.422,7.761,7.761,0,0,0-.8,1.2q-.469.82-1.172,1.945h1.828a9.369,9.369,0,0,0,.8-1.594Q-22.031-7.266-21.609-7.031ZM-26.25-.516q.609-.094,1.641-.234t3.141-.562a2.523,2.523,0,0,0-.141.8q-2.578.563-3.164.68a3.284,3.284,0,0,0-1.055.4A11.041,11.041,0,0,0-26.25-.516Zm6.516-4.312q.375.422,1.453,2.016a2.361,2.361,0,0,0-.75.563,13.424,13.424,0,0,0-1.359-2.016A5.25,5.25,0,0,0-19.734-4.828Zm7.359-1.922a8,8,0,0,1-1.547,1.172v-.891A7.328,7.328,0,0,0-12-8.344h.563V-.281h-.937Zm8.953,2.766H-8.766v-.75h5.344Zm.984,3.516a1.868,1.868,0,0,1,.656-1.266A15.638,15.638,0,0,0-.234-3.492,9.465,9.465,0,0,0,.984-5.344,2.121,2.121,0,0,0,1.2-6.469,1.2,1.2,0,0,0,.75-7.242,1.151,1.151,0,0,0-.117-7.5a1.863,1.863,0,0,0-.937.375,2.025,2.025,0,0,0-.68.984l-.891-.141a3.512,3.512,0,0,1,.961-1.57A2.3,2.3,0,0,1-.281-8.391a2.981,2.981,0,0,1,.844.023,2.173,2.173,0,0,1,.773.328,1.907,1.907,0,0,1,.656.773A2.253,2.253,0,0,1,2.18-6.023a4.082,4.082,0,0,1-.727,1.734A33.608,33.608,0,0,1-1.078-1.125H2.3v.844H-2.437ZM9.422-9.047A9.255,9.255,0,0,0,14.531-5.2a4.854,4.854,0,0,0-.7,1.078A10.983,10.983,0,0,1,8.906-8.3,12.081,12.081,0,0,1,4.266-3.984a3.338,3.338,0,0,0-.8-.891A9.091,9.091,0,0,0,6.961-7.266,8.871,8.871,0,0,0,8.625-9.891q.562.234,1.125.422Q9.563-9.234,9.422-9.047ZM8.484-4.406q0-.75-.094-1.922H9.469q-.047.8-.047,1.969v3.328q0,1.078.047,2.2H8.438Q8.484,0,8.484-.984ZM24.844-9.047q-.094,1.125-.094,2.016V-.375q0,.891-.469,1.078a7.12,7.12,0,0,1-1.828.281,2.876,2.876,0,0,0-.422-1.078,10.38,10.38,0,0,0,1.43,0q.4-.047.4-.656V-3H18.469a8.705,8.705,0,0,1-.75,2.578,5.156,5.156,0,0,1-1.031,1.5A2.212,2.212,0,0,0,15.75.609a4.935,4.935,0,0,0,1.2-1.57,5.866,5.866,0,0,0,.563-1.8,15.164,15.164,0,0,0,.117-1.969V-6.8q0-1.031-.047-2.25Zm-.984,2.672V-8.344H18.516v1.969Zm0,2.625V-5.672H18.516V-3.75Z" transform="translate(-1123 -5576)" fill="#4e443b"/>
                                        <path data-idr="Path_3383" data-name="Path 3383" d="M10,0H144.443V20.292H10Z" transform="translate(-1043 -5590)" fill="#f6f4e8"/>
                                        <path data-idr="Path_3429" data-name="Path 3429" d="M-18.7-9.281a6.451,6.451,0,0,0-.375.8q-.187.469-.375,1.031h3.422q-.047.938-.047,1.875L-16.312-.75q0,1.5-.727,1.688a7.857,7.857,0,0,1-1.477.234A2.7,2.7,0,0,0-18.844.094,2.477,2.477,0,0,0-17.461.047q.258-.187.3-.937l.234-5.719h-2.906a11.522,11.522,0,0,1-1.219,2.156,2.856,2.856,0,0,0-.844-.469,7.071,7.071,0,0,0,1.148-1.8,15.279,15.279,0,0,0,1.055-2.93A2.915,2.915,0,0,0-18.7-9.281Zm-2.906,2.25a8.964,8.964,0,0,0-.8,1.055q-.562.82-1.922,2.93,1.219-.094,2.859-.281a2.406,2.406,0,0,0-.234.844,14.335,14.335,0,0,0-1.664.141,11.439,11.439,0,0,0-1.992.422,7.526,7.526,0,0,0-.469-1.031,2.187,2.187,0,0,0,1.055-.82,10.064,10.064,0,0,0,1.008-1.57,10.15,10.15,0,0,0-1.1.07,5.215,5.215,0,0,0-1.055.211A5.866,5.866,0,0,0-26.3-6a5.054,5.054,0,0,0,1.172-1.43,8.947,8.947,0,0,0,.938-2.133,5.179,5.179,0,0,0,.984.422,7.761,7.761,0,0,0-.8,1.2q-.469.82-1.172,1.945h1.828a9.369,9.369,0,0,0,.8-1.594Q-22.031-7.266-21.609-7.031ZM-26.25-.516q.609-.094,1.641-.234t3.141-.562a2.523,2.523,0,0,0-.141.8q-2.578.563-3.164.68a3.284,3.284,0,0,0-1.055.4A11.041,11.041,0,0,0-26.25-.516Zm6.516-4.312q.375.422,1.453,2.016a2.361,2.361,0,0,0-.75.563,13.424,13.424,0,0,0-1.359-2.016A5.25,5.25,0,0,0-19.734-4.828Zm5.2,2.531.844-.141a2.277,2.277,0,0,0,.609,1.008,1.4,1.4,0,0,0,1.055.375,1.265,1.265,0,0,0,1.008-.516A1.6,1.6,0,0,0-10.687-2.7a1.315,1.315,0,0,0-.492-.984,3.033,3.033,0,0,0-1.43-.492v-.609A2.373,2.373,0,0,0-11.18-5.3a1.314,1.314,0,0,0,.4-1.1,1.133,1.133,0,0,0-.609-.984,1.389,1.389,0,0,0-1.2-.07,1.954,1.954,0,0,0-1.008,1.313l-.844-.141a4.052,4.052,0,0,1,.773-1.406,1.994,1.994,0,0,1,1.336-.656,2.668,2.668,0,0,1,1.477.211,1.741,1.741,0,0,1,.891.938,2.181,2.181,0,0,1,.07,1.383A2.245,2.245,0,0,1-10.969-4.5a2.151,2.151,0,0,1,1.008.844A2.2,2.2,0,0,1-9.727-2.18,2.174,2.174,0,0,1-10.547-.7a2.378,2.378,0,0,1-1.594.539,2.469,2.469,0,0,1-1.547-.562A2.533,2.533,0,0,1-14.531-2.3ZM-3.422-3.984H-8.766v-.75h5.344ZM.75-2.062H-2.859v-.8l3.8-5.484h.7v5.484H2.766v.8H1.641V-.281H.75Zm0-.8v-3.7l-2.625,3.7ZM9.422-9.047A9.255,9.255,0,0,0,14.531-5.2a4.854,4.854,0,0,0-.7,1.078A10.983,10.983,0,0,1,8.906-8.3,12.081,12.081,0,0,1,4.266-3.984a3.338,3.338,0,0,0-.8-.891A9.091,9.091,0,0,0,6.961-7.266,8.871,8.871,0,0,0,8.625-9.891q.562.234,1.125.422Q9.563-9.234,9.422-9.047ZM8.484-4.406q0-.75-.094-1.922H9.469q-.047.8-.047,1.969v3.328q0,1.078.047,2.2H8.438Q8.484,0,8.484-.984ZM24.844-9.047q-.094,1.125-.094,2.016V-.375q0,.891-.469,1.078a7.12,7.12,0,0,1-1.828.281,2.876,2.876,0,0,0-.422-1.078,10.38,10.38,0,0,0,1.43,0q.4-.047.4-.656V-3H18.469a8.705,8.705,0,0,1-.75,2.578,5.156,5.156,0,0,1-1.031,1.5A2.212,2.212,0,0,0,15.75.609a4.935,4.935,0,0,0,1.2-1.57,5.866,5.866,0,0,0,.563-1.8,15.164,15.164,0,0,0,.117-1.969V-6.8q0-1.031-.047-2.25Zm-.984,2.672V-8.344H18.516v1.969Zm0,2.625V-5.672H18.516V-3.75Z" transform="translate(-966 -5576)" fill="#4e443b"/>
                                        <path data-idr="Icon_awesome-user-tie" data-name="Icon awesome-user-tie" d="M10.1,11.546A5.773,5.773,0,1,0,4.33,5.773,5.772,5.772,0,0,0,10.1,11.546Zm4.321,1.47-2.156,8.632-1.443-6.134,1.443-2.526H7.938l1.443,2.526L7.938,21.648,5.782,13.016A6.051,6.051,0,0,0,0,19.05v1.876a2.165,2.165,0,0,0,2.165,2.165H18.04A2.165,2.165,0,0,0,20.2,20.926V19.05a6.051,6.051,0,0,0-5.782-6.034Z" transform="translate(-1256 -5659)" fill="#9a2327"/>
                                        <path data-idr="Icon_awesome-clipboard-list" data-name="Icon awesome-clipboard-list" d="M15.154,2.886H11.546a2.886,2.886,0,1,0-5.773,0H2.165A2.165,2.165,0,0,0,0,5.051V20.926a2.165,2.165,0,0,0,2.165,2.165H15.154a2.165,2.165,0,0,0,2.165-2.165V5.051A2.165,2.165,0,0,0,15.154,2.886ZM4.33,19.122A1.082,1.082,0,1,1,5.412,18.04,1.08,1.08,0,0,1,4.33,19.122Zm0-4.33A1.082,1.082,0,1,1,5.412,13.71,1.08,1.08,0,0,1,4.33,14.793Zm0-4.33A1.082,1.082,0,1,1,5.412,9.381,1.08,1.08,0,0,1,4.33,10.463ZM8.659,1.8A1.082,1.082,0,1,1,7.577,2.886,1.08,1.08,0,0,1,8.659,1.8Zm5.773,16.6a.362.362,0,0,1-.361.361H7.577a.362.362,0,0,1-.361-.361v-.722a.362.362,0,0,1,.361-.361h6.494a.362.362,0,0,1,.361.361Zm0-4.33a.362.362,0,0,1-.361.361H7.577a.362.362,0,0,1-.361-.361V13.35a.362.362,0,0,1,.361-.361h6.494a.362.362,0,0,1,.361.361Zm0-4.33a.362.362,0,0,1-.361.361H7.577a.362.362,0,0,1-.361-.361V9.02a.362.362,0,0,1,.361-.361h6.494a.362.362,0,0,1,.361.361Z" transform="translate(-1162 -5659)" fill="#9a2327"/>
                                        <g data-idr="Group_307" data-name="Group 307" transform="translate(37.478 201.533)">
                                        <path data-idr="Path_3359" data-name="Path 3359" d="M71.909,0H82.783a.815.815,0,0,1,.809.809V10.858a.815.815,0,0,1-.809.809H71.909a.815.815,0,0,1-.809-.809V.809A.815.815,0,0,1,71.909,0Z" transform="translate(-1033.719 -5857.533)" fill="#9a2327"/>
                                        <path data-idr="Path_3360" data-name="Path 3360" d="M9.606,26.887V18.564a.756.756,0,0,0-.764-.764H4.337a.775.775,0,0,0-.6.29L0,22.7v6.124a.756.756,0,0,0,.764.764H3.146a2.718,2.718,0,0,1,2.169-1.1,2.676,2.676,0,0,1,2.169,1.1H16.31a2.718,2.718,0,0,1,2.169-1.1,2.676,2.676,0,0,1,2.169,1.1h1.97a.743.743,0,0,0,.733-.733v-.473a.724.724,0,0,0-.733-.733H10.369a.766.766,0,0,1-.764-.764Zm-2.779-2.81H2.841a.886.886,0,0,1-.886-.886v-.229a.977.977,0,0,1,.2-.565l2.107-2.611a.883.883,0,0,1,.687-.336H6.811a.886.886,0,0,1,.886.886v2.841a.868.868,0,0,1-.87.9Z" transform="translate(-973.478 -5872.615)" fill="#9a2327"/>
                                        <circle data-idr="Ellipse_15" data-name="Ellipse 15" cx="1.909" cy="1.909" r="1.909" transform="translate(-970.102 -5843.315)" fill="#9a2327"/>
                                        <circle data-idr="Ellipse_16" data-name="Ellipse 16" cx="1.909" cy="1.909" r="1.909" transform="translate(-956.893 -5843.315)" fill="#9a2327"/>
                                        </g>
                                        <g data-idr="Group_306" data-name="Group 306" transform="translate(41.435 201.432)">
                                        <path data-idr="Path_3361" data-name="Path 3361" d="M55.647,2.484,51.383,0,42.068,5.427l4.263,2.484Z" transform="translate(-1157.714 -5860.432)" fill="#9a2327"/>
                                        <path data-idr="Path_3362" data-name="Path 3362" d="M161.763,64.3l-9.315,5.427,3.475,2.025,9.315-5.427Z" transform="translate(-1262.254 -5921.335)" fill="#9a2327"/>
                                        <path data-idr="Path_3363" data-name="Path 3363" d="M233.131,134.034v10.854l9.31-5.424V128.61Z" transform="translate(-1338.669 -5982.238)" fill="#9a2327"/>
                                        <path data-idr="Path_3364" data-name="Path 3364" d="M27.169,139.464l9.31,5.424V134.034l-9.31-5.424Z" transform="translate(-1143.604 -5982.238)" fill="#9a2327"/>
                                        </g>
                                        <path data-idr="Subtraction_2" data-name="Subtraction 2" d="M21.942,20.442H1.079A1.089,1.089,0,0,1,0,19.346V1.1A1.089,1.089,0,0,1,1.079,0H6.115A1.089,1.089,0,0,1,7.194,1.1v8.957l6.255-4.039a1.06,1.06,0,0,1,.576-.173,1.091,1.091,0,0,1,1.083,1.1v3.115l6.255-4.039a1.061,1.061,0,0,1,.576-.173,1.091,1.091,0,0,1,1.083,1.1V19.346A1.089,1.089,0,0,1,21.942,20.442Zm-6.835-7.357V16.33h3.2V13.085Zm-7.673,0V16.33h3.2V13.085Z" transform="translate(-1004 -5657)" fill="#9a2327"/>
                                        <path data-idr="Icon_zocial-email" data-name="Icon zocial-email" d="M.072,18.958V5.515q0-.023.07-.443L8.054,11.84.165,19.425a1.978,1.978,0,0,1-.093-.467Zm1.05-14.82a1.006,1.006,0,0,1,.4-.07H22.827a1.322,1.322,0,0,1,.42.07l-7.935,6.791-1.05.84-2.077,1.7-2.077-1.7-1.05-.84Zm.023,16.2L9.1,12.7l3.081,2.5,3.081-2.5,7.958,7.632a1.121,1.121,0,0,1-.4.07H1.519a1.057,1.057,0,0,1-.373-.07Zm15.17-8.5L24.2,5.072a1.393,1.393,0,0,1,.07.443V18.958a1.789,1.789,0,0,1-.07.467Z" transform="translate(-1336.072 -5659.068)" fill="#9a2327"/>
                                    </g>
                                </svg>
                                <svg class="ln_cn2" xmlns="http://www.w3.org/2000/svg" width="481.493" height="112.87" viewBox="0 0 481.493 112.87">
                                    <g data-idr="Group_321" data-name="Group 321" transform="translate(1365 5682.579)">
                                        <path data-idr="Path_3377" data-name="Path 3377" d="M0,0H66L81.493,44.992,66,90H0" transform="translate(-1365 -5682.579)" fill="#f6f4e8"/>
                                        <path data-idr="Path_3377-2" data-name="Path 3377" d="M0,0H86l15.493,44.992L86,90H0L15.369,45.088Z" transform="translate(-1297 -5682.579)" fill="#f6f4e8"/>
                                        <path data-idr="Path_3377-3" data-name="Path 3377" d="M0,0H96l15.493,44.992L96,90H0L15.369,45.088Z" transform="translate(-1209 -5682.579)" fill="#f6f4e8"/>
                                        <path data-idr="Path_3377-4" data-name="Path 3377" d="M10,0H86l15.493,44.992L86,90H10L25.369,45.088Z" transform="translate(-1121 -5682.579)" fill="#f6f4e8"/>
                                        <path data-idr="Path_3377-5" data-name="Path 3377" d="M10,0H76L91.493,44.992,76,90H10L25.369,45.088Z" transform="translate(-1043 -5682.579)" fill="#f6f4e8"/>
                                        <path data-idr="Path_3377-6" data-name="Path 3377" d="M10,0H76L91.493,44.992,76,90H10L25.369,45.088Z" transform="translate(-975 -5682.579)" fill="#f6f4e8"/>
                                        <path data-idr="Path_3441" data-name="Path 3441" d="M-18.281-1.031q.047-.516.047-4.453a7.252,7.252,0,0,1-.562.656,2,2,0,0,0-.844-.516,3.944,3.944,0,0,0,.961-1.078A10.488,10.488,0,0,0-17.766-8.2,10.525,10.525,0,0,0-17.2-9.891l1.078.469a1.251,1.251,0,0,0-.234.328q-.094.188-.516,1.078H-12.7A16.035,16.035,0,0,0-12.8-6.094L-12.891.047a.863.863,0,0,1-.281.7,3.4,3.4,0,0,1-1.359.422A2.851,2.851,0,0,0-15.094.141a2.447,2.447,0,0,0,1.1-.094.491.491,0,0,0,.258-.469l.094-6.891h-3.516A7.972,7.972,0,0,1-17.906-6h3.188q-.047.891-.047,2.391t.047,2.578Zm-1.359-2.016q-.047.656-.047,1.922t.047,1.969h-.937V0h-1.875V.984h-.937q.047-.656.047-2.062,0-1.453-.047-1.969Zm.328-4.266q-.7-.047-2.109-.047t-2.156.047v-.8q.75.047,2.156.047,1.453,0,2.109-.047ZM-20.578-.7V-2.3h-1.875V-.7Zm4.969-1.031v-1.5h-1.781v1.5Zm-4.172-3.891q-.75-.047-1.828-.047-1.031,0-1.641.047v-.844q.609.047,1.641.047t1.828-.047Zm0,1.641q-.7-.047-1.687-.047-.937,0-1.781.047v-.8q.8.047,1.781.047,1.031,0,1.688-.047Zm4.172.047V-5.25h-1.781v1.313ZM-21.469-8.2a5.2,5.2,0,0,0-.8-1.359,4.161,4.161,0,0,0,.75-.375,8.45,8.45,0,0,1,.891,1.266Q-21.094-8.391-21.469-8.2Zm16.031.047q0-.562-.047-1.219H-.844Q-.891-8.25-.891-7.922V.188q0,.562-.68.8a5.5,5.5,0,0,1-1.477.281A1.729,1.729,0,0,0-3.375.047a4.593,4.593,0,0,0,1.1.047q.445-.047.445-.609V-5.484H-5.484q.047-.984.047-2.062Zm-5.484.281a11.363,11.363,0,0,0-.094-1.5h4.453q-.047.469-.047,1.172v1.266q0,.75.047,1.453h-3.469V-.656q0,.422.047,1.781h-1.031q.094-1.453.094-1.875ZM-8.25-.8q.047-.75.047-1.266V-3.328q0-.609-.047-1.172h4.5Q-3.8-3.375-3.8-3.187v1.125q0,.281.047,1.266Zm3.563-.844V-3.7H-7.312v2.063Zm2.859-6.187v-.8H-4.5v.8Zm0,1.594v-.8H-4.5v.8ZM-7.547-7.828v-.8h-2.484v.8Zm0,1.594v-.8h-2.484v.8ZM9.609,1.172V.188H6.656v.984H5.813q.047-.7.047-2.016T5.813-2.906h4.734a8.605,8.605,0,0,0-.141,1.922,12.494,12.494,0,0,0,.141,2.156ZM4.219-2.953q-.047.563-.047,1.875,0,1.266.047,1.969H3.328V.047h-1.5v.984H.844A16.163,16.163,0,0,0,.938-1.031q0-1.406-.047-1.922Zm5.2-3.984a1.28,1.28,0,0,0-.141.656,2.813,2.813,0,0,0,.867,1.758,2.672,2.672,0,0,0,1.383.68,1.527,1.527,0,0,0-.609.8,3.976,3.976,0,0,1-1.453-.961,3.5,3.5,0,0,1-.7-1.43,4.8,4.8,0,0,1-.633,1.266A4.638,4.638,0,0,1,6.7-3a1.606,1.606,0,0,0-.656-.7A2.956,2.956,0,0,0,7.8-5.2a5.025,5.025,0,0,0,.586-1.922ZM7.969-7.5a13.627,13.627,0,0,1-.8,1.453,2.25,2.25,0,0,0-.844-.469,6,6,0,0,0,.914-1.453,6.667,6.667,0,0,0,.586-1.875q.469.188,1.031.422A3.07,3.07,0,0,0,8.25-8.156h3.188a18.772,18.772,0,0,0-.469,1.875,3.432,3.432,0,0,0-.891-.187L10.406-7.5ZM9.609-.469V-2.2H6.656V-.469Zm-5.016-6.8q-.75-.047-1.969-.047T.656-7.266v-.75q.75.047,1.969.047t1.969-.047ZM3.375-.609V-2.25H1.828V-.609Zm.8-4.969q-.656-.047-1.547-.047-.844,0-1.641.047v-.8q.8.047,1.688.047t1.5-.047Zm0,1.641q-.609-.047-1.5-.047T.984-3.937v-.75q.8.047,1.688.047.937,0,1.5-.047ZM6.281-5.859A1.363,1.363,0,0,0,6.8-5.2q-.234.234-.75.844T5.2-3.328a4.383,4.383,0,0,0-.7-.656,5.777,5.777,0,0,0,.867-.727A7.551,7.551,0,0,0,6.281-5.859ZM5.672-9.094a17.264,17.264,0,0,1,.891,1.5,4.926,4.926,0,0,0-.75.469,8.842,8.842,0,0,0-.8-1.5Q5.3-8.812,5.672-9.094ZM2.625-8.25a8.955,8.955,0,0,0-.656-1.125A7.721,7.721,0,0,1,2.625-9.8a12.778,12.778,0,0,1,.7,1.078ZM17.719-1.031q.047-.516.047-4.453a7.252,7.252,0,0,1-.562.656,2,2,0,0,0-.844-.516,3.944,3.944,0,0,0,.961-1.078A10.488,10.488,0,0,0,18.234-8.2,10.525,10.525,0,0,0,18.8-9.891l1.078.469a1.251,1.251,0,0,0-.234.328q-.094.188-.516,1.078H23.3A16.035,16.035,0,0,0,23.2-6.094L23.109.047a.863.863,0,0,1-.281.7,3.4,3.4,0,0,1-1.359.422A2.851,2.851,0,0,0,20.906.141a2.447,2.447,0,0,0,1.1-.094.491.491,0,0,0,.258-.469l.094-6.891H18.844A7.972,7.972,0,0,1,18.094-6h3.188q-.047.891-.047,2.391t.047,2.578ZM16.359-3.047q-.047.656-.047,1.922T16.359.844h-.937V0H13.547V.984h-.937q.047-.656.047-2.062,0-1.453-.047-1.969Zm.328-4.266q-.7-.047-2.109-.047t-2.156.047v-.8q.75.047,2.156.047,1.453,0,2.109-.047ZM15.422-.7V-2.3H13.547V-.7Zm4.969-1.031v-1.5H18.609v1.5ZM16.219-5.625q-.75-.047-1.828-.047-1.031,0-1.641.047v-.844q.609.047,1.641.047t1.828-.047Zm0,1.641q-.7-.047-1.687-.047-.937,0-1.781.047v-.8q.8.047,1.781.047,1.031,0,1.688-.047Zm4.172.047V-5.25H18.609v1.313ZM14.531-8.2a5.2,5.2,0,0,0-.8-1.359,4.161,4.161,0,0,0,.75-.375,8.45,8.45,0,0,1,.891,1.266Q14.906-8.391,14.531-8.2Z" transform="translate(-1324 -5607)" fill="#4e443b"/>
                                        <path data-idr="Path_3430" data-name="Path 3430" d="M-4.211-3.819a7.336,7.336,0,0,0,.22,2.054.887.887,0,0,0,.9.712.874.874,0,0,0,.894-.712,7.6,7.6,0,0,0,.212-2.054A7.517,7.517,0,0,0-2.194-5.9a.867.867,0,0,0-.894-.677.879.879,0,0,0-.9.677A7.254,7.254,0,0,0-4.211-3.819Zm1.123-4.023A2.2,2.2,0,0,1-1-6.794,6.061,6.061,0,0,1-.4-3.819,6.028,6.028,0,0,1-1-.849,2.2,2.2,0,0,1-3.088.193,2.2,2.2,0,0,1-5.175-.849a6.028,6.028,0,0,1-.6-2.97,6.061,6.061,0,0,1,.6-2.976A2.2,2.2,0,0,1-3.088-7.842ZM.763-5.371V-6.413a6.751,6.751,0,0,0,1.013-.1,1.427,1.427,0,0,0,.75-.408,1.345,1.345,0,0,0,.3-.559,1.285,1.285,0,0,0,.059-.312H4.163V0H2.594V-5.371Z" transform="translate(-1324 -5669.623)" fill="#4e443b"/>
                                        <path data-idr="Path_3440" data-name="Path 3440" d="M-13.444-3.937q.656,0,1.547-.047v.8q-.891-.047-1.547-.047h-3.234a3.141,3.141,0,0,0-.328.844H-12.6q-.047.609-.047,1.078V.094q0,.563-.281.727a4.752,4.752,0,0,1-1.219.352,2.327,2.327,0,0,0-.422-.984,2.3,2.3,0,0,0,.891-.094q.141-.094.141-.469V-1.687h-1.828V.7h-.891V-1.687H-17.9V.7h-.891V-1.687h-1.781V1.078h-.891q.047-.656.047-1.406v-.75q0-.609-.047-1.312h3.609a8.495,8.495,0,0,0,.234-.844h-2.953q-.8,0-1.547.047v-.8q.7.047,1.5.047Zm-.844-5.578q.7,0,1.594-.047v.8q-.891-.047-1.594-.047h-2.3v.8H-11.9v2.2h-.891v-1.5h-3.8V-6q0,.8.047,1.453h-.984q.047-.609.047-1.406V-7.312h-3.844v1.5h-.937q0-.516.023-1.031a10.15,10.15,0,0,0-.023-1.172h4.781v-.8h-2.3q-.7,0-1.406.047v-.8q.7.047,1.359.047Zm-4.172,4.922h-2.3V-5.25h2.3Zm.047-1.312h-2.2v-.656h2.2Zm4.688-.047h-2.2v-.656h2.2Zm.047,1.266h-2.2v-.656h2.2Zm2.869-2.859q.75.047,1.594.047h2.906q0-1.359-.047-2.109h1.031q-.047.75-.047,2.109h3.328q.656,0,1.453-.047V-6.7q-.844-.047-1.453-.047H-5.372a4.4,4.4,0,0,0,.445,1.594,8.162,8.162,0,0,0,.82,1.406A10.039,10.039,0,0,0-2.184-5.906a4.09,4.09,0,0,0,.937.75A16.526,16.526,0,0,0-3.731-3.094a8.9,8.9,0,0,0,1.477,1.5,5.136,5.136,0,0,0,1.9.984,2.356,2.356,0,0,0-.937.891A9.989,9.989,0,0,1-3.38-1.289,9.776,9.776,0,0,1-5.372-4.453V-.281a.863.863,0,0,1-.445.938,4.491,4.491,0,0,1-1.43.328A3.423,3.423,0,0,0-7.669-.047a4.539,4.539,0,0,0,1.1-.023q.3-.07.258-.492V-3.141Q-8.184-1.687-9-1.031T-10.341.094q-.422-.469-.8-.844A17.359,17.359,0,0,0-9.45-1.758,37.967,37.967,0,0,0-6.309-4.219V-6.75H-9.216q-.844,0-1.594.047ZM-9.4-5.953q1.031.844,1.922,1.594l-.8.7A11.319,11.319,0,0,0-10.153-5.3Zm6.141-3.609A10.758,10.758,0,0,1-1.762-8.3a5.711,5.711,0,0,0-.7.609,14.313,14.313,0,0,0-1.5-1.359A8.331,8.331,0,0,1-3.262-9.562ZM9.872-5.906q-.047.516-.047,1.5t.047,1.641H8.747V-.609a2.077,2.077,0,0,0,.07.68q.07.164.563.188A.755.755,0,0,0,10.036.07a2.131,2.131,0,0,0,.211-1.008,2.08,2.08,0,0,0,.891.375A2.782,2.782,0,0,1,10.645.773a.913.913,0,0,1-.656.188,7.594,7.594,0,0,0-.844,0A2.067,2.067,0,0,1,8.278.82Q7.856.656,7.9-.234V-2.766H7.2A4.592,4.592,0,0,1,6.661-.375,5.134,5.134,0,0,1,5.184,1.172a2.467,2.467,0,0,0-.7-.7A2.643,2.643,0,0,0,5.934-.8,4.161,4.161,0,0,0,6.4-2.766H5.559q.047-.656.047-1.594a9.917,9.917,0,0,0-.094-1.547ZM3.966-2.953a10.4,10.4,0,0,0-.094,1.781A15.651,15.651,0,0,0,3.966.844H3.075v-.8H1.388V.984H.45A16.163,16.163,0,0,0,.544-1.078Q.544-2.484.5-2.953Zm5.063-.469V-5.25H6.356v1.828ZM8.888-9.562A3.951,3.951,0,0,0,9.778-7.57a4.027,4.027,0,0,0,1.5,1.148,2.365,2.365,0,0,0-.609.8A4.7,4.7,0,0,1,8.958-7.242a5.758,5.758,0,0,1-.867-2.227A3.276,3.276,0,0,0,8.888-9.562Zm-1.219.516A2.167,2.167,0,0,0,6.9-8.2q-.445.7-.844,1.289a12.21,12.21,0,0,1-1.2,1.43,2.58,2.58,0,0,0-.656-.75A4.751,4.751,0,0,0,5.7-7.781a7.154,7.154,0,0,0,.891-1.875ZM4.294-7.219q-.609-.047-2.016-.047-1.359,0-2.062.047v-.8q.7.047,2.063.047,1.406,0,2.016-.047ZM3.075-.609V-2.3H1.388V-.609Zm.8-4.969q-.656-.047-1.687-.047T.544-5.578v-.75q.609.047,1.641.047,1.078,0,1.688-.047Zm0,1.641q-.469-.047-1.5-.047-.984,0-1.734.047v-.75q.75.047,1.688.047.984,0,1.547-.047ZM2.231-8.25Q1.9-8.812,1.575-9.328L2.231-9.8a5.684,5.684,0,0,1,.75,1.078A4.926,4.926,0,0,1,2.231-8.25Zm19.7-1.078q-.047.891-.047,2.063v6.75q.047.891-.3,1.148a4.149,4.149,0,0,1-1.57.445,3.329,3.329,0,0,0-.469-1.125A4.791,4.791,0,0,0,20.662-.07q.328-.07.281-.492V-3.047H18.178a9.544,9.544,0,0,1-1.594,4.359A3.017,3.017,0,0,0,15.6.7q1.828-1.828,1.688-5.953V-7.219q0-1.125-.047-2.109Zm-6,.375q-.047.984-.047,2.109v3.375q0,1.125.047,2.016h-.891v-.7H13.069V-.844h-.937q.047-.8.047-2.062V-6.891q0-1.125-.047-2.062Zm5.016,2.391V-8.531H18.225v1.969Zm0,2.719V-5.766H18.225v1.922ZM15.037-3V-5.3H13.069V-3Zm0-3.047V-8.156H13.069v2.109ZM-7.575,17.125V12.109h-2.484a8.608,8.608,0,0,0-1.078.047v-.75a6.432,6.432,0,0,0,.8.047v-3.8a4.763,4.763,0,0,0-.75.047v-.75Q-10.434,7-9.919,7h2.859q.328,0,.844-.047V7.7a4.067,4.067,0,0,0-.562-.047v9.469ZM-4.9,8.219q-.562,0-1.172.047v-.75q.609.047,1.172.047h1.172a6.119,6.119,0,0,0,.094-1.172,7.448,7.448,0,0,0,.938.141,2.25,2.25,0,0,0-.281,1.031h1.734q.422,0,.938-.047v.75q-.516-.047-.938-.047H-3.075a5.934,5.934,0,0,0-.141.891H-.591q-.047.609-.047,1.313,0,.656.047,1.313h-5.25q.047-.7.047-1.359,0-.7-.047-1.266h1.875q.094-.469.141-.891Zm-2.953,7.875q-.656.141-1.453.3a10.332,10.332,0,0,0-1.547.445A5.235,5.235,0,0,0-11.044,16a6.572,6.572,0,0,0,.7-.047,4.59,4.59,0,0,0,.75-.141v-.937q-.422,0-.984.047v-.75q.563.047.984.047v-.8q-.328,0-1.078.047v-.7q.656.047,1.125.047h.609q.469,0,.984-.047v.7q-.516-.047-.891-.047v.8q.375,0,.891-.047v.75q-.516-.047-.891-.047v.8a8.2,8.2,0,0,0,.938-.187Zm3.75-2.109a8.072,8.072,0,0,0-.047.891v.8a.443.443,0,0,0,.375.469H-2.7q.469,0,.516-1.125a3.141,3.141,0,0,0,.844.328q-.234,1.406-.891,1.406H-4.059q-.844,0-.844-.937v-.937a6.62,6.62,0,0,0-.047-.891Zm2.578-1.594q.516,0,1.078-.047v.75q-.563-.047-1.031-.047H-4.762q-.562,0-1.266.047v-.75q.7.047,1.266.047Zm-6.047-1.828H-9.544v.891h1.969Zm0-2.016V7.656H-9.544v.891Zm0,1.453V9.156H-9.544V10Zm2.484,4.453q-.187.422-.375.961t-.375,1.008a7.807,7.807,0,0,0-.75-.328,6.673,6.673,0,0,0,.445-.984q.164-.469.3-.984A2.828,2.828,0,0,0-5.091,14.453Zm4.219-.516q.234.469.75,1.688-.422.188-.75.328-.187-.516-.328-.914t-.328-.82Zm-2.438,1.125a12.812,12.812,0,0,0-.375-1.406,3.055,3.055,0,0,0,.7-.234l.422,1.406A4.245,4.245,0,0,0-3.309,15.063Zm.469-3.984V9.766h-.7v1.313Zm-1.453,0V9.766H-5v1.313Zm2.859,0V9.766h-.656v1.313Zm6.1-4.219q.8,0,1.359-.047v.8a6.041,6.041,0,0,0-.75-.047v6.328q.516-.141,1.172-.328v.8q-.609.141-1.172.281,0,1.828.047,2.672H4.387q.047-.7.047-2.484a16.344,16.344,0,0,0-2.062.563,13.805,13.805,0,0,0-1.594.656L.4,14.969l1.031-.187V7.563q-.375,0-.938.047v-.8q.609.047,1.641.047Zm.984,9.375a5.12,5.12,0,0,0,1.1-.914,11.644,11.644,0,0,0,1.1-1.477,8.349,8.349,0,0,1-.914-2.672,31.519,31.519,0,0,1-.3-3.141H6.262v-.8q.938.047,1.688.047h2.625a26.562,26.562,0,0,1-.539,3.8,9.754,9.754,0,0,1-1.1,2.766,4.867,4.867,0,0,0,1.008,1.219,7.915,7.915,0,0,0,1.383.984,3.218,3.218,0,0,0-.8.8,8.976,8.976,0,0,1-2.109-2.2,10,10,0,0,1-1.922,2.3A2.8,2.8,0,0,0,5.653,16.234Zm1.828-8.2q.141,1.875.258,2.813A8.308,8.308,0,0,0,8.372,13a10.4,10.4,0,0,0,.961-2.883q.211-1.336.258-2.086Zm-3.047,1.5V7.563H2.278V9.531ZM2.278,14.594q1.125-.234,2.156-.469v-1.5H2.278Zm2.156-2.719V10.234H2.278v1.641Z" transform="translate(-1246 -5615)" fill="#4e443b"/>
                                        <path data-idr="Path_3431" data-name="Path 3431" d="M-4.211-3.819a7.336,7.336,0,0,0,.22,2.054.887.887,0,0,0,.9.712.874.874,0,0,0,.894-.712,7.6,7.6,0,0,0,.212-2.054A7.517,7.517,0,0,0-2.194-5.9a.867.867,0,0,0-.894-.677.879.879,0,0,0-.9.677A7.254,7.254,0,0,0-4.211-3.819Zm1.123-4.023A2.2,2.2,0,0,1-1-6.794,6.061,6.061,0,0,1-.4-3.819,6.028,6.028,0,0,1-1-.849,2.2,2.2,0,0,1-3.088.193,2.2,2.2,0,0,1-5.175-.849a6.028,6.028,0,0,1-.6-2.97,6.061,6.061,0,0,1,.6-2.976A2.2,2.2,0,0,1-3.088-7.842ZM.344,0A3.66,3.66,0,0,1,.7-1.531,4.328,4.328,0,0,1,2.25-3.18,11.344,11.344,0,0,0,3.62-4.265,1.6,1.6,0,0,0,4.1-5.382,1.238,1.238,0,0,0,3.824-6.2a.965.965,0,0,0-.784-.328.956.956,0,0,0-.951.521,2.584,2.584,0,0,0-.172.956H.43A3.759,3.759,0,0,1,.79-6.66,2.244,2.244,0,0,1,2.967-7.826a2.763,2.763,0,0,1,1.968.685,2.367,2.367,0,0,1,.731,1.813A2.451,2.451,0,0,1,5.15-3.792,5.142,5.142,0,0,1,4.036-2.8l-.613.435q-.576.408-.788.591a1.731,1.731,0,0,0-.357.424h3.4V0Z" transform="translate(-1246 -5669.623)" fill="#4e443b"/>
                                        <path data-idr="Path_3439" data-name="Path 3439" d="M-17.194-9.8a8.443,8.443,0,0,1,.75,1.313h2.672q.937,0,1.875-.047v.844q-.938-.047-1.875-.047h-5.391a13.183,13.183,0,0,1,1.078,1.219,3.481,3.481,0,0,0-.7.422h2.531q.281-.75.563-1.594a7.391,7.391,0,0,0,1.078.328,7.911,7.911,0,0,0-.75,1.266h2.625q-.047.563-.047,1.547V.094a.813.813,0,0,1-.516.8,5.6,5.6,0,0,1-1.406.375A2.069,2.069,0,0,0-15.084.234,2.638,2.638,0,0,0-13.912.141a.5.5,0,0,0,.234-.469V-5.437h-6.844V1.125h-.937q.047-1.219.047-1.734V-4.641q0-.469-.047-1.453h2.578a4.538,4.538,0,0,0-1.078-1.172,3.446,3.446,0,0,0,.7-.469h-1.078q-1.078,0-1.875.047v-.844q.8.047,1.828.047h2.906a2.645,2.645,0,0,0-.609-.984A7.49,7.49,0,0,0-17.194-9.8Zm-1.031,4.828a10.218,10.218,0,0,0,.891.563,5.566,5.566,0,0,0-1.359,1.266h3.563q-.047.609-.047,1.313t.047,1.406h-3.656q.047-.7.047-1.359,0-.7-.047-1.266-.328.281-.656.516a1.535,1.535,0,0,0-.7-.516A7.789,7.789,0,0,0-18.225-4.969Zm2.156,3.844V-2.437H-17.9v1.313Zm.047-3.891a17.725,17.725,0,0,1,2.109,1.547,2.207,2.207,0,0,0-.7.609,9.835,9.835,0,0,0-1.969-1.547A2.113,2.113,0,0,0-16.022-5.016ZM-2.512-9.141q-.047.844-.047,1.922,0,1.031.047,1.828H-8.934a16.291,16.291,0,0,0,.094-1.875,16.291,16.291,0,0,0-.094-1.875ZM-.731-4.312q-.047.844-.047,2.578,0,1.688.047,2.391h-.891V0H-4.294V.8h-.891q.047-.8.047-2.531t-.047-2.578ZM-7.2.75V0H-9.731V.8h-.891q.047-.8.047-2.531,0-1.781-.047-2.578h4.313A20.535,20.535,0,0,0-6.4-2.062q0,1.406.094,2.813Zm3.8-6.937V-8.344H-8v2.156ZM-1.622-.844V-3.469H-4.294V-.844Zm-5.578,0V-3.469H-9.731V-.844ZM2.325-5.766q-.047.891-.047,1.594v3.094a6.826,6.826,0,0,0,4.43,1.2,25.97,25.97,0,0,0,4.57-.258A2.905,2.905,0,0,0,11.044.984q-2.016.047-3.445.023A15.609,15.609,0,0,1,5.231.82,11.869,11.869,0,0,1,3.708.469,5.992,5.992,0,0,1,2.583-.023q-.539-.3-.867,0A6.735,6.735,0,0,0,.872,1.031a4.383,4.383,0,0,0-.7-.656Q.731-.141,1.481-.891V-5.062q-.656,0-1.312.047v-.8Q.825-5.766,2.325-5.766Zm2.859.8a3.538,3.538,0,0,1-.047-.656h.844v.656h1.5v-.656h.891a5.376,5.376,0,0,0-.047.656q.891,0,1.594-.047v.656q-.656-.047-1.594-.047v.984q1.453,0,2.3-.047v.7q-.844-.047-1.406-.047H4.481q-.7,0-1.453.047v-.7q.75.047,2.156.047v-.984q-.844,0-1.547.047v-.656Q4.341-4.969,5.184-4.969ZM9.778-9.656q-.047,1.078,0,2.109H7.856v.422a.388.388,0,0,0,.4.445A4.225,4.225,0,0,0,9.028-6.7q.375-.047.516-.562a3.578,3.578,0,0,0,.891.328,2.275,2.275,0,0,1-.539.75,1.26,1.26,0,0,1-.68.141H7.9q-.891,0-.891-.8V-8.109q0-.7-.047-1.547ZM6.638-6.891a3.018,3.018,0,0,1-.539.82.847.847,0,0,1-.492.117H4.388q-.75,0-.75-.7v-1.5q0-.75-.047-1.5H6.263q-.047,1.125,0,2.109H4.481v.563q0,.469.281.469h.563q.328,0,.469-.609A2.075,2.075,0,0,0,6.638-6.891ZM6.028-1.969q-1.219.7-2.484,1.359-.234-.375-.422-.656A11.008,11.008,0,0,0,5.513-2.625,6.56,6.56,0,0,0,6.028-1.969Zm1.734-.609a19.211,19.211,0,0,1,2.25,1.359,6.557,6.557,0,0,0-.516.75q-.75-.609-2.109-1.547Q7.622-2.344,7.763-2.578ZM1.434-9.562A24.649,24.649,0,0,1,2.794-7.5a2.864,2.864,0,0,0-.75.516A11.161,11.161,0,0,0,.825-9,2.113,2.113,0,0,1,1.434-9.562ZM7.481-3.422v-.984h-1.5v.984ZM8.934-8.156v-.891H7.856v.891Zm-3.516,0v-.891H4.481v.891ZM17.194-3.891A12.863,12.863,0,0,0,15.6-3.8v-.8q.75.047,3.188.047v-.844q-1.734,0-2.531.047v-.7q.8.047,2.531.047v-.844H15.928q.047-.656.047-1.359t-.047-1.266H22.3a7.425,7.425,0,0,0-.094,1.219q0,.656.047,1.406H19.584V-6q1.781,0,2.484-.047v.7q-.656-.047-2.484-.047v.844q2.156,0,2.953-.047v.8a12.465,12.465,0,0,0-1.547-.094h-.516q.375.188.844.375a2.207,2.207,0,0,0-.609.7q.75,0,1.5-.047v.7Q21.366-2.2,19.584-2.2v1.031q2.062,0,2.859-.047v.75a27.96,27.96,0,0,0-2.859-.094q0,.422.047,1.641h-.891q.047-1.031.047-1.641-2.2,0-3.094.094v-.75q.891.047,3.094.047V-2.2q-1.922,0-2.812.047v-.7q.891.047,1.641.047a2.8,2.8,0,0,0-.422-.8,2.67,2.67,0,0,0,.75-.281ZM14.006.094q.094,1.078-1.641,1.078a2.737,2.737,0,0,0-.281-.984,4.508,4.508,0,0,0,.891.07q.234-.023.188-.539V-3.141a4.063,4.063,0,0,0-1.312.656,6.02,6.02,0,0,1-.328-.984,11.278,11.278,0,0,0,1.641-.422V-6.609q-.844,0-1.594.047v-.75q.75.047,1.594.047V-8.344q0-.8-.047-1.5h.938q-.047.7-.047,1.547v1.031q.7,0,1.453-.047v.75q-.7-.047-1.453-.047v2.484a10.592,10.592,0,0,0,1.219-.562,4.59,4.59,0,0,0,.141.75,11.932,11.932,0,0,0-1.359.516Zm4.078-3.984q.188.516.375,1.078h1.406q.234-.516.469-1.078Zm1.547-3.562V-8.859H18.6v1.406Zm-1.828,0V-8.859H16.772v1.406Zm3.656,0V-8.859H20.428v1.406ZM-18.834,16.516a3.6,3.6,0,0,0,1.5-1.031,3.719,3.719,0,0,0,.82-1.547,3.943,3.943,0,0,0,.164-1.266h-1.078q.047-.516.047-1.359V8.781q0-1.266-.047-2.109h4.922q-.047.7-.047,1.922v2.3q0,1.031.047,1.781h-1.312v2.766q0,.656.422.656h.469a.366.366,0,0,0,.445-.352,5,5,0,0,0,.07-.867,1.987,1.987,0,0,0,.938.328,5.564,5.564,0,0,1-.258,1.2.727.727,0,0,1-.773.445h-1.219a.829.829,0,0,1-.937-.937V12.672h-.844a6.392,6.392,0,0,1-.187,1.453,4.843,4.843,0,0,1-.656,1.523,6.366,6.366,0,0,1-1.641,1.57A2.672,2.672,0,0,0-18.834,16.516Zm-3.8-.234A6.868,6.868,0,0,0-21.6,15.2a6.555,6.555,0,0,0,.867-1.477,4.534,4.534,0,0,0,.352-1.8h-.562q-.7,0-1.359.047v-.844q.656.047,1.266.047h.75V9.25q-.8,0-1.641.047V8.453q.844.047,1.641.047V7.891q0-.937-.047-1.734.516.047.984.047A12.158,12.158,0,0,0-19.444,7.8v.7q.891,0,1.5-.047V9.3q-.562-.047-1.5-.047v1.922q.891,0,1.734-.047v.844q-.8-.047-1.734-.047-.047.563-.141,1.172.984.844,2.016,1.875a5.153,5.153,0,0,0-.75.7,11.273,11.273,0,0,0-1.5-1.734,16.086,16.086,0,0,1-.844,1.5,12.144,12.144,0,0,1-1.078,1.406A2.4,2.4,0,0,0-22.631,16.281Zm9.234-4.359V10.844h-3.187v1.078Zm0-1.828V9.063h-3.187v1.031Zm0-1.781V7.422h-3.187v.891Zm9.337-1.453a8.756,8.756,0,0,0-.609.984h3.516a10.124,10.124,0,0,1-.773,1.711,9.462,9.462,0,0,1-1.055,1.477,6.434,6.434,0,0,0,1.43.68,6.132,6.132,0,0,0,1.383.352A2.7,2.7,0,0,0-.684,13q-.609-.234-1.406-.586A7.88,7.88,0,0,1-3.637,11.5a9.187,9.187,0,0,1-1.43.867,17.159,17.159,0,0,1-1.8.727,1.958,1.958,0,0,0-.516-.7,9.783,9.783,0,0,0,1.8-.609,6.151,6.151,0,0,0,1.336-.8A9.017,9.017,0,0,1-5.466,9.3q-.281.422-.844,1.172A3.043,3.043,0,0,0-7.059,10a7.175,7.175,0,0,0,1.2-1.641,10,10,0,0,0,.82-1.922A3.125,3.125,0,0,0-4.059,6.859Zm2.813,6.047q-.047.563-.047,2.016t.047,2.156h-.984v-.75H-5.137v.8h-.984q.047-.75.047-2.156,0-1.453-.047-2.062ZM-8.231,6.438q-.047.609-.047,1.172V8.828q.891,0,1.313-.047v.844q-.422-.047-1.312-.047v1.313a4.345,4.345,0,0,0,.563-.422,15.02,15.02,0,0,1,.8,1.406q-.375.234-.7.469-.375-.8-.656-1.266v4.406q0,1.031.047,1.688h-.937q.047-.656.047-1.687V11.453a31.692,31.692,0,0,1-1.406,2.953,2.535,2.535,0,0,0-.7-.562,14.939,14.939,0,0,0,1.219-2.3,12.039,12.039,0,0,0,.656-1.969q-.656,0-1.453.047V8.781q.844.047,1.688.047V7.609q0-.516-.047-1.172Zm6,9.188V13.609H-5.137v2.016Zm-1.406-5.109A6.49,6.49,0,0,0-2.372,8.547H-5.044A6.6,6.6,0,0,0-3.637,10.516ZM7.528,9.344q.281-.281.609-.562.422.516.984,1.125a3.373,3.373,0,0,1-.516.422h.563q.609,0,1.547-.047v.8q-.75-.047-1.547-.047H8.559V12.3q1.406,0,2.109-.047V13q-.8-.047-2.109-.047v1.266a17.571,17.571,0,0,0,2.062-.094v.75q-.7-.047-2.062-.047v1.266H9.5q.8,0,1.641-.047v.7Q10.294,16.7,9.5,16.7H6.122v.563H5.231q.094-1.219.094-2.25V12.3l-.469.75q-.328-.469-.656-.891a5.77,5.77,0,0,0,.8-.914,9.508,9.508,0,0,0,.891-1.5A7.767,7.767,0,0,0,6.5,8.031H5.325V9.578H4.481V7.328H6.638a5.672,5.672,0,0,0,.047-1.219q.563.141,1.078.234a4.289,4.289,0,0,0-.328.984H10.9a8.072,8.072,0,0,0-.047.891q0,.422.047,1.172h-.844V8.031H7.294a12.287,12.287,0,0,1-.8,2.3H8.372A8.277,8.277,0,0,0,7.528,9.344ZM3.4,7.047A7.635,7.635,0,0,0,4.247,7v.8q-.562-.047-.984-.047H2.653q-.328,1.406-.7,2.672H4.106q-.047.8-.047,1.547v2.813q0,.844.047,1.406H3.263v-.844H2.091v1.594H1.247q.047-1.219.047-1.969v-3a10.267,10.267,0,0,1-.469,1.078,4.243,4.243,0,0,0-.75-.75,16.619,16.619,0,0,0,1.2-2.484A16.289,16.289,0,0,0,1.809,7.75H.45V7q.656.047,1.078.047Zm-.141,7.641V11.125H2.091v3.563Zm4.5-.469V12.953H6.122v1.266Zm0-1.922V11.031H6.122V12.3Zm0,3.8V14.828H6.122v1.266Zm11.212-5.953q.891,0,1.828-.047v.891q-.844-.047-2.016-.047H17.756v1.875h1.969q.516,0,1.453-.047v.891q-.937-.047-1.5-.047H17.756v2.2a21.549,21.549,0,0,0,4.688-.047,3.329,3.329,0,0,0-.469,1.125q-1.875,0-3.094-.047a9.129,9.129,0,0,1-2.062-.281,4.737,4.737,0,0,1-1.5-.7A6.854,6.854,0,0,1,14.1,14.734a10.374,10.374,0,0,1-1.734,2.344,2.554,2.554,0,0,0-.937-.609,6.237,6.237,0,0,0,1.922-2.437,7.139,7.139,0,0,0,.656-2.156,3.669,3.669,0,0,0,1.125.422,2.8,2.8,0,0,0-.3.586q-.164.4-.4,1.008a6.442,6.442,0,0,0,.984.961,4.163,4.163,0,0,0,1.406.773V10.938h-1.5q-.8,0-1.594.047v-.891q.8.047,1.875.047Zm2.906-2.156q-.047.656-.047.984t.047.891H20.9V8.734H13.4V9.859h-.984a6.853,6.853,0,0,0,.047-.844q0-.469-.047-1.031ZM16.069,6.531a2.856,2.856,0,0,0,.844-.469,7.862,7.862,0,0,1,.938,1.406,6.35,6.35,0,0,0-.937.469A4.651,4.651,0,0,0,16.069,6.531Z" transform="translate(-1153 -5615)" fill="#4e443b"/>
                                        <path data-idr="Path_3432" data-name="Path 3432" d="M-4.211-3.819a7.336,7.336,0,0,0,.22,2.054.887.887,0,0,0,.9.712.874.874,0,0,0,.894-.712,7.6,7.6,0,0,0,.212-2.054A7.517,7.517,0,0,0-2.194-5.9a.867.867,0,0,0-.894-.677.879.879,0,0,0-.9.677A7.254,7.254,0,0,0-4.211-3.819Zm1.123-4.023A2.2,2.2,0,0,1-1-6.794,6.061,6.061,0,0,1-.4-3.819,6.028,6.028,0,0,1-1-.849,2.2,2.2,0,0,1-3.088.193,2.2,2.2,0,0,1-5.175-.849a6.028,6.028,0,0,1-.6-2.97,6.061,6.061,0,0,1,.6-2.976A2.2,2.2,0,0,1-3.088-7.842ZM1.794-2.39a1.754,1.754,0,0,0,.15.773,1.028,1.028,0,0,0,1.013.564,1.121,1.121,0,0,0,.785-.309,1.149,1.149,0,0,0,.335-.889,1,1,0,0,0-.621-1.026,3.144,3.144,0,0,0-1.114-.145v-1.1A2.879,2.879,0,0,0,3.38-4.662a.9.9,0,0,0,.508-.913,1.022,1.022,0,0,0-.26-.725A.949.949,0,0,0,2.9-6.58a.924.924,0,0,0-.8.344,1.461,1.461,0,0,0-.244.918H.43a3.847,3.847,0,0,1,.2-1.1,2.479,2.479,0,0,1,.59-.843,2.056,2.056,0,0,1,.714-.419,3.085,3.085,0,0,1,1.014-.145,2.7,2.7,0,0,1,1.8.577A1.924,1.924,0,0,1,5.43-5.7a1.713,1.713,0,0,1-.408,1.16,1.394,1.394,0,0,1-.537.4,1.1,1.1,0,0,1,.6.36,1.922,1.922,0,0,1,.585,1.482A2.5,2.5,0,0,1,4.988-.556,2.606,2.606,0,0,1,2.962.193a2.45,2.45,0,0,1-2.3-1.08A3.207,3.207,0,0,1,.29-2.39Z" transform="translate(-1153 -5669.623)" fill="#4e443b"/>
                                        <path data-idr="Path_3438" data-name="Path 3438" d="M-15.037-3.281a1.4,1.4,0,0,0-.422-.352q-.281-.164-.609-.352a2.465,2.465,0,0,0,.375-.609h-1.172q-.8,0-1.406.047V-5.3q.609.047,1.359.047h1.5v-.891H-16.3q-.656,0-1.312.047v-.75q.609.047,1.266.047h.938v-.8h-1.219q-.75,0-1.359.047V-8.3q.656.047,1.359.047h.469q-.141-.187-.328-.445t-.469-.586a6.852,6.852,0,0,0,.7-.469q.281.328.469.563t.422.563q-.328.234-.562.375h1.5a4.7,4.7,0,0,1,.258-.609,4.363,4.363,0,0,0,.3-.984q.422.188.984.375-.234.375-.375.633t-.281.586h.328q.609,0,1.313-.047v.75q-.7-.047-1.312-.047h-1.406v.8h1.031q.516,0,1.219-.047v.75q-.7-.047-1.219-.047h-1.031v.891h1.688q.609,0,1.219-.047v.75q-.656-.047-1.219-.047h-2.531q.234.141.539.328t.633.375a5.751,5.751,0,0,0-.516.609h.234a5.686,5.686,0,0,0-.047.7,1.686,1.686,0,0,0,.469.609,4.352,4.352,0,0,0,.68-.633,5.829,5.829,0,0,0,.586-.82,8.041,8.041,0,0,0,.75.656,3.607,3.607,0,0,0-.727.586q-.4.4-.773.727a4.171,4.171,0,0,0,.8.773,4.761,4.761,0,0,0,1.266.633,2.4,2.4,0,0,0-.562.891,9.35,9.35,0,0,1-1.5-1.1A6.386,6.386,0,0,1-14.616-1.5V.234q0,.563-.352.7a5.44,5.44,0,0,1-1.289.234A3.959,3.959,0,0,0-16.584.047q1.125.234,1.125-.187V-2.625h-.7q-.7,0-1.359.047v-.75q.656.047,1.359.047Zm-5.578,4.359q.047-.891.047-2.25V-4.594a8.679,8.679,0,0,1-.68,1.758,5.069,5.069,0,0,1-.727,1.148q-.375-.328-.75-.609.234-.281.516-.68a6.462,6.462,0,0,0,.539-.937,12.593,12.593,0,0,0,.492-1.2,6.612,6.612,0,0,0,.328-1.453h-.187q-.562,0-1.172.047v-.8q.609.047,1.125.047h.516v-.891q0-.844-.047-1.5h.938q-.047.563-.047,1.453v.938q.609,0,1.219-.047v.8q-.609-.047-.984-.047h-.234v1.453q.234-.141.656-.375.188.422.375.8t.375.8a6.423,6.423,0,0,0-.8.422,9.913,9.913,0,0,0-.609-1.406v3.7q0,1.359.047,2.25Zm4.781-3.094A4.846,4.846,0,0,1-16.772,0a5.656,5.656,0,0,1-1.547,1.125,2.938,2.938,0,0,0-.562-.75A4.328,4.328,0,0,0-17.592-.3a2.331,2.331,0,0,0,.727-1.055h-.516q-.516,0-1.078.047v-.75q.516.047,1.078.047ZM-2.512-9.141q-.047.844-.047,1.922,0,1.031.047,1.828H-8.934a16.291,16.291,0,0,0,.094-1.875,16.291,16.291,0,0,0-.094-1.875ZM-.731-4.312q-.047.844-.047,2.578,0,1.688.047,2.391h-.891V0H-4.294V.8h-.891q.047-.8.047-2.531t-.047-2.578ZM-7.2.75V0H-9.731V.8h-.891q.047-.8.047-2.531,0-1.781-.047-2.578h4.313A20.535,20.535,0,0,0-6.4-2.062q0,1.406.094,2.813Zm3.8-6.937V-8.344H-8v2.156ZM-1.622-.844V-3.469H-4.294V-.844Zm-5.578,0V-3.469H-9.731V-.844ZM1.528-7.687a8.343,8.343,0,0,0-.75-.375,9.14,9.14,0,0,0,.586-.844,7.324,7.324,0,0,0,.445-.844q.328.141.8.375a1.486,1.486,0,0,0-.422.563H3.4q0-.469-.047-1.125h.891Q4.2-9.281,4.2-8.812h.656q.656,0,1.359-.047v.7Q5.559-8.2,4.856-8.2H4.2v.7H5.466q.469,0,1.219-.047v.7q-.75-.047-1.219-.047H4.2v.609H6.45q-.094.609-.164,1.125A1.024,1.024,0,0,1,6-4.477a2.6,2.6,0,0,1-.961.3,2.67,2.67,0,0,0-.281-.75,2.706,2.706,0,0,0,.68-.117q.164-.07.164-.633H4.2v2.063H3.4V-5.672H2v1.594H1.153v-2.2H3.4v-.609H1.856q-.7,0-1.172.047v-.7q.609.047,1.172.047H3.4v-.7H1.856Q1.716-7.969,1.528-7.687ZM3.263.563a.7.7,0,0,0,.328-.609V-.8A23.2,23.2,0,0,1,.778.469a2.575,2.575,0,0,0-.609-.75Q.919-.469,1.6-.7a15.308,15.308,0,0,0,1.523-.633A9.191,9.191,0,0,0,4.716-2.3H2.278Q1.2-2.3.638-2.25v-.8Q1.434-3,2.278-3H9.4q.75,0,1.594-.047v.8Q10.2-2.3,9.45-2.3H5.888a11.573,11.573,0,0,1-1.5,1.078V.141q.656-.281,1.406-.609a5.629,5.629,0,0,0,.188.8A8.643,8.643,0,0,1,5.114.68a13.67,13.67,0,0,0-1.43.633Q3.45.938,3.263.563ZM6.122-2.2A14.837,14.837,0,0,0,7.856-.891,6.221,6.221,0,0,0,8.841-2.2q.375.234.844.516A9.015,9.015,0,0,0,8.513-.469a8.394,8.394,0,0,0,2.766.7,2.613,2.613,0,0,0-.422.891A11.419,11.419,0,0,1,8.817.539a7.243,7.243,0,0,1-1.57-.867q-.7-.516-1.687-1.406A3.725,3.725,0,0,0,6.122-2.2ZM10.2-9.562q-.047.563-.047,1.547v3.141a.8.8,0,0,1-.375.8A3.755,3.755,0,0,1,8.606-3.8a3.033,3.033,0,0,0-.328-.937,4.988,4.988,0,0,0,.867-.047q.211-.047.211-.469v-3q0-.656-.047-1.312Zm-1.969.891q-.047.656-.047,1.125v1.078q0,.656.047,1.219H7.341q.047-.609.047-1.219V-7.5q0-.562-.047-1.172ZM5.747-3.094q-.141-.422-.328-.891.328-.141.75-.328a7.785,7.785,0,0,1,.422.891A3.657,3.657,0,0,0,5.747-3.094ZM18.741-9.469a4.67,4.67,0,0,0-1.031,1.781H20.8q1.031,0,1.641-.047v.844q-.609-.047-1.641-.047H18.647v1.828h1.922q.8,0,1.313-.047v.891q-.609-.047-1.312-.047H18.647V-2.2h2.016q.938,0,1.547-.047v.891q-.609-.047-1.5-.047H18.647v.891q0,1.313.047,1.781h-.984q.047-.516.047-1.406v-6.8h-.469a22.7,22.7,0,0,1-1.359,2.109,3.008,3.008,0,0,0-.891-.609A9.115,9.115,0,0,0,16.4-7.312a12.31,12.31,0,0,0,1.125-2.625A7.862,7.862,0,0,0,18.741-9.469Zm-3.281.188a5.584,5.584,0,0,0-1.078,2.016v6q0,1.5.047,2.391H13.35Q13.4.281,13.4-1.219V-5.625A16.621,16.621,0,0,1,12.131-3.8a3.839,3.839,0,0,0-.656-.8,12.394,12.394,0,0,0,1.477-2.18,13.029,13.029,0,0,0,1.289-3.117A7.375,7.375,0,0,0,15.459-9.281Z" transform="translate(-1065 -5607)" fill="#4e443b"/>
                                        <path data-idr="Path_3433" data-name="Path 3433" d="M-4.211-3.819a7.336,7.336,0,0,0,.22,2.054.887.887,0,0,0,.9.712.874.874,0,0,0,.894-.712,7.6,7.6,0,0,0,.212-2.054A7.517,7.517,0,0,0-2.194-5.9a.867.867,0,0,0-.894-.677.879.879,0,0,0-.9.677A7.254,7.254,0,0,0-4.211-3.819Zm1.123-4.023A2.2,2.2,0,0,1-1-6.794,6.061,6.061,0,0,1-.4-3.819,6.028,6.028,0,0,1-1-.849,2.2,2.2,0,0,1-3.088.193,2.2,2.2,0,0,1-5.175-.849a6.028,6.028,0,0,1-.6-2.97,6.061,6.061,0,0,1,.6-2.976A2.2,2.2,0,0,1-3.088-7.842ZM5.752-1.676H4.872V0h-1.5V-1.676H.29V-3.013L3.153-7.74H4.872v4.866h.881Zm-2.379-1.2V-6.228L1.429-2.874Z" transform="translate(-1065 -5669.623)" fill="#4e443b"/>
                                        <path data-idr="Path_3437" data-name="Path 3437" d="M-3.122-7.922q.844,0,2.156-.094v.844q-1.172-.047-2.625-.047v1.125q1.266,0,2.156-.047V-5.3q-.891-.047-2.156-.047v1.219q1.266,0,2.2-.047v.844q-.938-.047-2.2-.047V-2.2h.75q.984,0,2.063-.047v.844q-1.078-.047-2.063-.047H-6.4v.844h-.891q.047-.75.047-2.016v-3.8Q-7.669-5.766-8-5.3q-.328-.328-.609-.656a8.437,8.437,0,0,0,1.078-1.57,7.559,7.559,0,0,0,.8-2.086,7.915,7.915,0,0,0,1.125.375,14.044,14.044,0,0,0-.75,1.313Zm-8.109,1.969q.656.047,2.2.047-.047.609-.047,1.688v3.047Q-7.762,0-4.692.047A29.457,29.457,0,0,0-.122-.141,5.283,5.283,0,0,0-.45,1.031q-1.969,0-3.352-.023A18.1,18.1,0,0,1-6.122.844,8.842,8.842,0,0,1-7.669.492,5.34,5.34,0,0,1-8.794-.047q-.516-.328-.844-.023A8.538,8.538,0,0,0-10.528.984q-.375-.375-.7-.656.7-.656,1.313-1.266V-5.109q-.7,0-1.313.047Zm6.75,1.828V-5.344H-6.4v1.219Zm0,1.922V-3.375H-6.4V-2.2ZM-9.4-7.078a18.952,18.952,0,0,0-1.172-2.016,5.81,5.81,0,0,1,.7-.516q.891,1.266,1.359,1.969A4.41,4.41,0,0,0-9.4-7.078Zm4.922.984V-7.219H-6.4v1.125Zm.7-3.8q.422,1.031.563,1.453a4.226,4.226,0,0,0-.891.281,12.857,12.857,0,0,0-.516-1.406A5.278,5.278,0,0,1-3.778-9.891ZM9.637-5.812q.891,0,1.641-.047v.938q-.75-.047-1.594-.047H9.028V.141a.721.721,0,0,1-.352.773,5.2,5.2,0,0,1-1.57.352A2.6,2.6,0,0,0,6.591.141a6.933,6.933,0,0,0,1.125.07q.328-.023.375-.492V-4.969H6.216q-.891,0-1.687.047v-.937q.844.047,1.688.047ZM4.012-6.375a1.588,1.588,0,0,0-.633.609q-.211.375-.586.938V-.609q0,.609.047,1.875H1.856Q1.9-.141,1.9-.844v-3A7.394,7.394,0,0,1,.778-2.437q-.328-.469-.609-.8A11.377,11.377,0,0,0,1.856-5.2q.609-.937,1.078-1.781Q3.4-6.7,4.012-6.375ZM8.841-9q.8,0,1.641-.047v.891Q9.637-8.2,8.747-8.2H7.012q-1.031,0-1.781.047v-.891Q5.981-9,7.012-9Zm-5.25-.234q-.375.047-.984,1.008A15.543,15.543,0,0,1,.919-6.094a6.555,6.555,0,0,0-.609-.7A12.214,12.214,0,0,0,1.669-8.414a8.743,8.743,0,0,0,.891-1.523A12.25,12.25,0,0,1,3.591-9.234ZM-19.584,7.281a2.755,2.755,0,0,0-.469.82q-.187.492-.375.961h2.813V7.422q0-.609-.047-1.172h1.078q-.047.516-.047,1.172V9.063h2.063q.75,0,1.688-.047v.938q-.891-.047-1.687-.047h-2.062v2.109h1.453q.656,0,1.594-.047v.938q-.891-.047-1.594-.047h-1.453v2.813h2.813q.75,0,1.734-.047v.891q-.938-.047-1.734-.047h-6.75q-.8,0-1.641.047v-.891q.891.047,1.641.047h2.953V12.859H-19.35q-.656,0-1.359.047v-.937q.7.047,1.359.047h1.734V9.906h-3.141a14.1,14.1,0,0,1-.844,1.688,4.276,4.276,0,0,0-1.125-.328,7.477,7.477,0,0,0,1.1-1.8,10.047,10.047,0,0,0,.82-2.648Zm12.853,4.734a6.6,6.6,0,0,0-.562.844h1.828q0-.516-.047-1.219h.938q-.047.563-.047,1.219H-2.7q.516,0,1.172-.047v.8q-.656-.047-1.172-.047H-4.622v.984h1.453q.516,0,1.031-.047v.8q-.516-.047-1.031-.047H-4.622v1.125h3q.469,0,1.219-.047v.8q-.75-.047-1.172-.047H-7.95q-.844,0-1.547.047v-.8q.75.047,1.547.047h2.484V15.25H-6.684q-.328,0-1.031.047v-.8q.609.047,1.031.047h1.219v-.984h-2.2a11.1,11.1,0,0,0-.75,1.125q-.375-.234-.75-.422A7.77,7.77,0,0,0-8.3,13.141a7.986,7.986,0,0,0,.68-1.453Q-7.247,11.828-6.731,12.016ZM-2.7,10.7a17,17,0,0,0,1.781-.094v.844q-.844-.047-1.687-.047H-9.216q0,1.031-.047,1.875a11.032,11.032,0,0,1-.187,1.547,11.893,11.893,0,0,1-.328,1.289q-.187.586-.375,1.1a2.647,2.647,0,0,0-1.031-.328,3.669,3.669,0,0,0,.469-.844,8.47,8.47,0,0,0,.328-1.008,10.8,10.8,0,0,0,.188-2.016q.047-1.477,0-2.32Zm.234-3.281q.656,0,1.312-.047v.844q-.7-.047-1.359-.047H-8.794q-.8,0-1.406.047V7.375q.609.047,1.406.047Zm-.7,1.406a3.078,3.078,0,0,0-.727.211q-.4.164-.727.3,1.406.422,2.109.656a2.984,2.984,0,0,0-.516.563q-.469-.187-1.031-.375t-1.359-.422a9.448,9.448,0,0,1-1.43.445q-.727.164-1.664.352a2.574,2.574,0,0,0-.422-.7,6.928,6.928,0,0,0,1.359-.141l1.406-.281q-.422-.141-.914-.328a8.422,8.422,0,0,0-1.1-.328,5.356,5.356,0,0,1,.469-.516q.609.188,1.125.375t1.172.422a4.566,4.566,0,0,0,.8-.352q.375-.211.75-.445Q-3.591,8.5-3.169,8.828ZM-5.559,6.016a11.04,11.04,0,0,0,.422,1.078,5.794,5.794,0,0,0-.891.281A5.415,5.415,0,0,0-6.45,6.344Q-5.981,6.156-5.559,6.016Zm7.087,2.3a8.343,8.343,0,0,0-.75-.375,9.14,9.14,0,0,0,.586-.844,7.324,7.324,0,0,0,.445-.844q.328.141.8.375a1.486,1.486,0,0,0-.422.563H3.4q0-.469-.047-1.125h.891Q4.2,6.719,4.2,7.188h.656q.656,0,1.359-.047v.7Q5.559,7.8,4.856,7.8H4.2v.7H5.466q.469,0,1.219-.047v.7q-.75-.047-1.219-.047H4.2v.609H6.45q-.094.609-.164,1.125a1.024,1.024,0,0,1-.281.68,2.6,2.6,0,0,1-.961.3,2.67,2.67,0,0,0-.281-.75,2.706,2.706,0,0,0,.68-.117q.164-.07.164-.633H4.2v2.063H3.4V10.328H2v1.594H1.153v-2.2H3.4V9.109H1.856q-.7,0-1.172.047v-.7q.609.047,1.172.047H3.4V7.8H1.856Q1.716,8.031,1.528,8.313Zm1.734,8.25a.7.7,0,0,0,.328-.609V15.2A23.2,23.2,0,0,1,.778,16.469a2.575,2.575,0,0,0-.609-.75q.75-.187,1.43-.422a15.308,15.308,0,0,0,1.523-.633A9.191,9.191,0,0,0,4.716,13.7H2.278Q1.2,13.7.638,13.75v-.8q.8.047,1.641.047H9.4q.75,0,1.594-.047v.8Q10.2,13.7,9.45,13.7H5.888a11.573,11.573,0,0,1-1.5,1.078v1.359q.656-.281,1.406-.609a5.629,5.629,0,0,0,.188.8,8.643,8.643,0,0,1-.867.352,13.67,13.67,0,0,0-1.43.633Q3.45,16.938,3.263,16.563ZM6.122,13.8a14.837,14.837,0,0,0,1.734,1.313A6.221,6.221,0,0,0,8.841,13.8q.375.234.844.516a9.015,9.015,0,0,0-1.172,1.219,8.394,8.394,0,0,0,2.766.7,2.613,2.613,0,0,0-.422.891,11.419,11.419,0,0,1-2.039-.586,7.243,7.243,0,0,1-1.57-.867q-.7-.516-1.687-1.406A3.725,3.725,0,0,0,6.122,13.8ZM10.2,6.438q-.047.563-.047,1.547v3.141a.8.8,0,0,1-.375.8,3.755,3.755,0,0,1-1.172.281,3.033,3.033,0,0,0-.328-.937,4.988,4.988,0,0,0,.867-.047q.211-.047.211-.469v-3q0-.656-.047-1.312Zm-1.969.891q-.047.656-.047,1.125V9.531q0,.656.047,1.219H7.341q.047-.609.047-1.219V8.5q0-.562-.047-1.172ZM5.747,12.906q-.141-.422-.328-.891.328-.141.75-.328a7.785,7.785,0,0,1,.422.891A3.657,3.657,0,0,0,5.747,12.906ZM22.022,6.672q-.047,1.031-.047,1.875,0,.8.047,1.594h-5.25q.047-.891.047-1.687t-.047-1.781ZM11.85,6.953q.8-.094,1.8-.3a7.9,7.9,0,0,0,1.711-.539,7.4,7.4,0,0,0,.656,1.031,2,2,0,0,0-.68.023q-.352.07-.773.117v2.3q.656,0,1.406-.047v.891q-.75-.047-1.406-.047V14.5q0,1.031.047,2.766h-.937q.047-1.734.047-2.719V12.391a21.551,21.551,0,0,1-1.453,2.484,4.831,4.831,0,0,0-.75-.844,8.034,8.034,0,0,0,1.172-1.5,10.094,10.094,0,0,0,.938-2.156q-1.172,0-1.734.047V9.531q.8.047,1.172.047h.656V7.469q-.609.141-1.547.281A6.075,6.075,0,0,0,11.85,6.953Zm8.813,4.359q.75,0,1.594-.047v.844q-.844-.047-1.594-.047h-.891v1.5h.516q.7,0,1.641-.047v.891q-.937-.047-1.5-.047h-.656V16H20.9q.844,0,1.781-.047v.891q-.75-.047-1.781-.047H17.756a14.6,14.6,0,0,0-1.781.094v-.937q.75.047,1.781.047h1.125V14.359h-.656a9.957,9.957,0,0,0-1.406.094v-.937q.656.047,1.406.047h.656v-1.5h-.75q-.844,0-1.594.047v-.844q.75.047,1.594.047ZM20.991,9.3V7.469H17.662V9.3Zm-5.578,2.2q.469.7.984,1.641-.281.188-.75.563a10.181,10.181,0,0,0-.937-1.687A8.331,8.331,0,0,1,15.412,11.5Z" transform="translate(-992 -5615)" fill="#4e443b"/>
                                        <path data-idr="Path_3434" data-name="Path 3434" d="M-4.211-3.819a7.336,7.336,0,0,0,.22,2.054.887.887,0,0,0,.9.712.874.874,0,0,0,.894-.712,7.6,7.6,0,0,0,.212-2.054A7.517,7.517,0,0,0-2.194-5.9a.867.867,0,0,0-.894-.677.879.879,0,0,0-.9.677A7.254,7.254,0,0,0-4.211-3.819Zm1.123-4.023A2.2,2.2,0,0,1-1-6.794,6.061,6.061,0,0,1-.4-3.819,6.028,6.028,0,0,1-1-.849,2.2,2.2,0,0,1-3.088.193,2.2,2.2,0,0,1-5.175-.849a6.028,6.028,0,0,1-.6-2.97,6.061,6.061,0,0,1,.6-2.976A2.2,2.2,0,0,1-3.088-7.842Zm4.9,5.758a1.479,1.479,0,0,0,.348.771.985.985,0,0,0,.75.271,1.011,1.011,0,0,0,.865-.4,1.642,1.642,0,0,0,.3-1.007A1.753,1.753,0,0,0,3.8-3.456a.975.975,0,0,0-.868-.411,1.49,1.49,0,0,0-.482.07.959.959,0,0,0-.541.478L.534-3.384l.547-4.3H5.366v1.3H2.185l-.279,1.7a3.194,3.194,0,0,1,.552-.306,2.336,2.336,0,0,1,.81-.124,2.431,2.431,0,0,1,1.684.65,2.419,2.419,0,0,1,.719,1.891A2.968,2.968,0,0,1,4.98-.645,2.516,2.516,0,0,1,2.909.2a2.749,2.749,0,0,1-1.824-.6A2.317,2.317,0,0,1,.29-2.084Z" transform="translate(-992 -5669.623)" fill="#4e443b"/>
                                        <path data-idr="Path_3436" data-name="Path 3436" d="M-17.194-9.8a8.443,8.443,0,0,1,.75,1.313h2.672q.937,0,1.875-.047v.844q-.938-.047-1.875-.047h-5.391a13.183,13.183,0,0,1,1.078,1.219,3.481,3.481,0,0,0-.7.422h2.531q.281-.75.563-1.594a7.391,7.391,0,0,0,1.078.328,7.911,7.911,0,0,0-.75,1.266h2.625q-.047.563-.047,1.547V.094a.813.813,0,0,1-.516.8,5.6,5.6,0,0,1-1.406.375A2.069,2.069,0,0,0-15.084.234,2.638,2.638,0,0,0-13.912.141a.5.5,0,0,0,.234-.469V-5.437h-6.844V1.125h-.937q.047-1.219.047-1.734V-4.641q0-.469-.047-1.453h2.578a4.538,4.538,0,0,0-1.078-1.172,3.446,3.446,0,0,0,.7-.469h-1.078q-1.078,0-1.875.047v-.844q.8.047,1.828.047h2.906a2.645,2.645,0,0,0-.609-.984A7.49,7.49,0,0,0-17.194-9.8Zm-1.031,4.828a10.218,10.218,0,0,0,.891.563,5.566,5.566,0,0,0-1.359,1.266h3.563q-.047.609-.047,1.313t.047,1.406h-3.656q.047-.7.047-1.359,0-.7-.047-1.266-.328.281-.656.516a1.535,1.535,0,0,0-.7-.516A7.789,7.789,0,0,0-18.225-4.969Zm2.156,3.844V-2.437H-17.9v1.313Zm.047-3.891a17.725,17.725,0,0,1,2.109,1.547,2.207,2.207,0,0,0-.7.609,9.835,9.835,0,0,0-1.969-1.547A2.113,2.113,0,0,0-16.022-5.016ZM-2.512-9.141q-.047.844-.047,1.922,0,1.031.047,1.828H-8.934a16.291,16.291,0,0,0,.094-1.875,16.291,16.291,0,0,0-.094-1.875ZM-.731-4.312q-.047.844-.047,2.578,0,1.688.047,2.391h-.891V0H-4.294V.8h-.891q.047-.8.047-2.531t-.047-2.578ZM-7.2.75V0H-9.731V.8h-.891q.047-.8.047-2.531,0-1.781-.047-2.578h4.313A20.535,20.535,0,0,0-6.4-2.062q0,1.406.094,2.813Zm3.8-6.937V-8.344H-8v2.156ZM-1.622-.844V-3.469H-4.294V-.844Zm-5.578,0V-3.469H-9.731V-.844ZM4.059-4.875A9.163,9.163,0,0,0,5.7-2.156,8.471,8.471,0,0,0,7.622-5.109a9.883,9.883,0,0,0,.938.609,20.708,20.708,0,0,1-2.2,2.953,8.861,8.861,0,0,0,4.594,1.5,3.248,3.248,0,0,0-.562,1.078A10.507,10.507,0,0,1,5.606-.984,12.345,12.345,0,0,1,.919,1.125,2.673,2.673,0,0,0,.4.094,8.41,8.41,0,0,0,4.9-1.594,10.837,10.837,0,0,1,3.169-4.406,4.6,4.6,0,0,0,4.059-4.875ZM2.044-6.984q-.7,0-1.359.047v-.937L2-7.781H9.309l1.547-.094v.984L9.309-6.984Zm2.391.8q-.656.609-2.812,2.438A2.926,2.926,0,0,0,.731-4.5,7.008,7.008,0,0,0,2.348-5.672a9.876,9.876,0,0,0,1.1-1.219Q3.919-6.562,4.434-6.187Zm3.375-.7q.234.188,1.078.82t1.641,1.2a5.559,5.559,0,0,0-.891.8A14.883,14.883,0,0,0,7.013-6.187,8.543,8.543,0,0,1,7.809-6.891ZM5.794-9.937q.469,1.078.7,1.734-.656.188-1.125.328-.281-.8-.7-1.734Q5.231-9.8,5.794-9.937ZM13.35-.984Q13.4-1.547,13.4-3T13.35-5.25h7.594q-.047.516-.047,2.109t.047,2.156ZM18.366-9.75a7.325,7.325,0,0,0-.141,1.594,9.192,9.192,0,0,0,1.125-.492,4.842,4.842,0,0,0,1.266-.914,3.553,3.553,0,0,0,.984.75,10.481,10.481,0,0,0-1.477.633,18.031,18.031,0,0,1-1.9.82v.7q0,.516.516.469h2.016q.516,0,.656-.234a2.67,2.67,0,0,0,.234-.891,2.227,2.227,0,0,0,.984.469q-.422,1.078-.773,1.2a2.145,2.145,0,0,1-.68.117H18.366q-1.031,0-1.031-.609v-.937q-.891.328-1.5.563-.281-.422-.516-.8.75-.141,2.016-.516,0-1.266-.047-1.922Zm-2.531.375A7.024,7.024,0,0,0,14.8-8.3v1.828q0,.328.047.938H13.819q.047-.609.047-.937v-.937a12.2,12.2,0,0,1-1.453,1.313,4.613,4.613,0,0,0-.656-.7,8.3,8.3,0,0,0,1.781-1.336,4.993,4.993,0,0,0,1.219-1.8A3.145,3.145,0,0,0,15.834-9.375ZM14.287-4.594v.609h5.719v-.609Zm0,1.219v.563h5.719v-.562Zm0,1.172v.563h5.719V-2.2ZM15.975-.047q-1.922.844-3,1.359a2.612,2.612,0,0,0-.516-.844,8.658,8.658,0,0,0,1.664-.633,8.7,8.7,0,0,0,1.289-.727A2.214,2.214,0,0,0,15.975-.047Zm2.813-.844q.75.375,1.477.727a9.938,9.938,0,0,1,1.148.633,8,8,0,0,0-.562.8q-.609-.375-1.172-.68t-1.359-.68A5.977,5.977,0,0,0,18.787-.891Z" transform="translate(-924 -5607)" fill="#4e443b"/>
                                        <path data-idr="Path_3435" data-name="Path 3435" d="M-4.211-3.819a7.336,7.336,0,0,0,.22,2.054.887.887,0,0,0,.9.712.874.874,0,0,0,.894-.712,7.6,7.6,0,0,0,.212-2.054A7.517,7.517,0,0,0-2.194-5.9a.867.867,0,0,0-.894-.677.879.879,0,0,0-.9.677A7.254,7.254,0,0,0-4.211-3.819Zm1.123-4.023A2.2,2.2,0,0,1-1-6.794,6.061,6.061,0,0,1-.4-3.819,6.028,6.028,0,0,1-1-.849,2.2,2.2,0,0,1-3.088.193,2.2,2.2,0,0,1-5.175-.849a6.028,6.028,0,0,1-.6-2.97,6.061,6.061,0,0,1,.6-2.976A2.2,2.2,0,0,1-3.088-7.842ZM1.88-2.465a1.527,1.527,0,0,0,.338,1.026,1.079,1.079,0,0,0,.859.4.954.954,0,0,0,.8-.384,1.6,1.6,0,0,0,.293-1A1.491,1.491,0,0,0,3.84-3.467a1.066,1.066,0,0,0-.816-.363,1.09,1.09,0,0,0-.693.236A1.338,1.338,0,0,0,1.88-2.465ZM4.034-5.828a.781.781,0,0,0-.145-.414.841.841,0,0,0-.747-.365,1.1,1.1,0,0,0-1.063.838A5.2,5.2,0,0,0,1.842-4.4,1.718,1.718,0,0,1,2.5-4.9a2.229,2.229,0,0,1,.859-.156,2.233,2.233,0,0,1,1.7.7,2.518,2.518,0,0,1,.663,1.8,3.037,3.037,0,0,1-.65,1.923A2.4,2.4,0,0,1,3.056.2a2.324,2.324,0,0,1-2.17-1.23A5.015,5.015,0,0,1,.344-3.507a11.284,11.284,0,0,1,.075-1.45A4.435,4.435,0,0,1,.94-6.612a2.666,2.666,0,0,1,.873-.908A2.354,2.354,0,0,1,3.1-7.863a2.557,2.557,0,0,1,1.729.556,2.114,2.114,0,0,1,.725,1.48Z" transform="translate(-924 -5669.623)" fill="#4e443b"/>
                                        <rect data-idr="Rectangle_131" data-name="Rectangle 131" width="151.963" height="20.292" transform="translate(-1365 -5590)" fill="#f6f4e8"/>
                                        <path data-idr="Path_3442" data-name="Path 3442" d="M-12.8-9.375a2.873,2.873,0,0,0-.422.727q-.187.445-.469,1.055h3.844q-.047.938-.07,2.109t-.07,2.859a18.089,18.089,0,0,1-.187,2.461,1.066,1.066,0,0,1-.844.938q-.7.164-1.594.3a4.878,4.878,0,0,0-.281-1.266,2.976,2.976,0,0,0,1.617-.07q.258-.211.3-1.289t.094-2.508q.047-1.43.047-2.836h-3.094q-.422.984-1.078,2.3a4.353,4.353,0,0,0-.937-.516,8.656,8.656,0,0,0,1.289-2.367,16.7,16.7,0,0,0,.727-2.32Q-13.359-9.562-12.8-9.375Zm-3.375,6.469q-1.172.188-1.992.328a16.865,16.865,0,0,0-1.664.375,7.821,7.821,0,0,0-.375-.984,1.828,1.828,0,0,0,.984-.586,14.61,14.61,0,0,0,1.359-1.852q-.562.047-1.008.094a5.708,5.708,0,0,0-1.055.234q-.187-.469-.422-.937.422-.094.984-1.125a12.231,12.231,0,0,0,.984-2.531,9.4,9.4,0,0,0,1.125.422,8.073,8.073,0,0,0-.82,1.406,16.846,16.846,0,0,1-1.008,1.781,14.465,14.465,0,0,0,1.594-.094,14.136,14.136,0,0,0,1.031-1.969,2.718,2.718,0,0,0,.984.516q-.422.563-1.266,1.922a25.153,25.153,0,0,1-1.875,2.625q.844-.094,2.2-.281-.234-.375-.422-.7a4.984,4.984,0,0,0,.844-.375q.469.938.938,2.156-.469.188-.844.375A7.588,7.588,0,0,1-16.172-2.906Zm3-2.344q.7,1.313,1.266,2.625A7.785,7.785,0,0,0-12.8-2.2a10.281,10.281,0,0,0-1.266-2.625A3.318,3.318,0,0,0-13.172-5.25Zm-7.453,6a12.427,12.427,0,0,0,.75-2.437q.516.094,1.031.141A7.453,7.453,0,0,0-19.2-.539,13.031,13.031,0,0,1-19.734.938,4.1,4.1,0,0,0-20.625.75Zm3.141-2.531q.328,1.219.609,2.3A5.345,5.345,0,0,0-17.812.8a9.191,9.191,0,0,0-.562-2.344A4,4,0,0,0-17.484-1.781Zm1.734-.141q.422,1.078.8,2.25-.516.141-.891.281a9.569,9.569,0,0,0-.75-2.2A4.209,4.209,0,0,0-15.75-1.922ZM-8.437-.469a1.868,1.868,0,0,1,.656-1.266A15.638,15.638,0,0,0-6.234-3.492,9.465,9.465,0,0,0-5.016-5.344,2.121,2.121,0,0,0-4.8-6.469a1.2,1.2,0,0,0-.445-.773A1.151,1.151,0,0,0-6.117-7.5a1.863,1.863,0,0,0-.937.375,2.025,2.025,0,0,0-.68.984l-.891-.141a3.512,3.512,0,0,1,.961-1.57,2.3,2.3,0,0,1,1.383-.539,2.981,2.981,0,0,1,.844.023,2.173,2.173,0,0,1,.773.328,1.907,1.907,0,0,1,.656.773A2.253,2.253,0,0,1-3.82-6.023a4.082,4.082,0,0,1-.727,1.734A33.608,33.608,0,0,1-7.078-1.125H-3.7v.844H-8.437ZM2.578-3.984H-2.766v-.75H2.578ZM3.469-2.3l.844-.141A2.277,2.277,0,0,0,4.922-1.43a1.4,1.4,0,0,0,1.055.375A1.265,1.265,0,0,0,6.984-1.57,1.6,1.6,0,0,0,7.313-2.7,1.315,1.315,0,0,0,6.82-3.68a3.033,3.033,0,0,0-1.43-.492v-.609A2.373,2.373,0,0,0,6.82-5.3a1.314,1.314,0,0,0,.4-1.1,1.133,1.133,0,0,0-.609-.984,1.389,1.389,0,0,0-1.2-.07A1.954,1.954,0,0,0,4.406-6.141l-.844-.141a4.052,4.052,0,0,1,.773-1.406,1.994,1.994,0,0,1,1.336-.656,2.668,2.668,0,0,1,1.477.211,1.741,1.741,0,0,1,.891.938,2.181,2.181,0,0,1,.07,1.383A2.245,2.245,0,0,1,7.031-4.5a2.151,2.151,0,0,1,1.008.844A2.2,2.2,0,0,1,8.273-2.18,2.174,2.174,0,0,1,7.453-.7a2.378,2.378,0,0,1-1.594.539A2.469,2.469,0,0,1,4.313-.727,2.533,2.533,0,0,1,3.469-2.3ZM17.391-9.187q.844,0,1.688-.047v.984Q18.234-8.3,17.391-8.3H15.469v2.531h3q.891,0,1.594-.047v.984q-.656-.047-1.547-.047H15.609a8.631,8.631,0,0,0,1.875,3.047A6.327,6.327,0,0,0,20.625-.094a2.261,2.261,0,0,0-.8.938A7.909,7.909,0,0,1,17.156-.773a9.013,9.013,0,0,1-2.109-3.164,6.7,6.7,0,0,1-1.781,3.07,10.524,10.524,0,0,1-3.047,1.945,2.088,2.088,0,0,0-.8-.891,8.2,8.2,0,0,0,2.859-1.57,6.394,6.394,0,0,0,2.109-3.492H11.813q-1.031,0-1.734.047v-.984q.75.047,1.734.047h2.719V-8.3H12.563q-.984,0-1.687.047v-.984q.75.047,1.688.047Z" transform="translate(-1289 -5576)" fill="#4e443b"/>
                                        <path data-idr="Path_3384" data-name="Path 3384" d="M0,0H176V20.292H0Z" transform="translate(-1211 -5590)" fill="#f6f4e8"/>
                                        <path data-idr="Path_3443" data-name="Path 3443" d="M-18.8-9.375a2.873,2.873,0,0,0-.422.727q-.187.445-.469,1.055h3.844q-.047.938-.07,2.109t-.07,2.859a18.089,18.089,0,0,1-.187,2.461,1.066,1.066,0,0,1-.844.938q-.7.164-1.594.3a4.878,4.878,0,0,0-.281-1.266,2.976,2.976,0,0,0,1.617-.07q.258-.211.3-1.289t.094-2.508q.047-1.43.047-2.836h-3.094q-.422.984-1.078,2.3a4.352,4.352,0,0,0-.937-.516,8.656,8.656,0,0,0,1.289-2.367,16.7,16.7,0,0,0,.727-2.32Q-19.359-9.562-18.8-9.375Zm-3.375,6.469q-1.172.188-1.992.328a16.865,16.865,0,0,0-1.664.375,7.821,7.821,0,0,0-.375-.984,1.828,1.828,0,0,0,.984-.586,14.61,14.61,0,0,0,1.359-1.852q-.562.047-1.008.094a5.708,5.708,0,0,0-1.055.234q-.187-.469-.422-.937.422-.094.984-1.125a12.231,12.231,0,0,0,.984-2.531,9.4,9.4,0,0,0,1.125.422,8.073,8.073,0,0,0-.82,1.406,16.846,16.846,0,0,1-1.008,1.781,14.465,14.465,0,0,0,1.594-.094,14.136,14.136,0,0,0,1.031-1.969,2.718,2.718,0,0,0,.984.516q-.422.563-1.266,1.922a25.153,25.153,0,0,1-1.875,2.625q.844-.094,2.2-.281-.234-.375-.422-.7a4.984,4.984,0,0,0,.844-.375q.469.938.938,2.156-.469.188-.844.375A7.588,7.588,0,0,1-22.172-2.906Zm3-2.344q.7,1.313,1.266,2.625A7.785,7.785,0,0,0-18.8-2.2a10.281,10.281,0,0,0-1.266-2.625A3.318,3.318,0,0,0-19.172-5.25Zm-7.453,6a12.427,12.427,0,0,0,.75-2.437q.516.094,1.031.141A7.453,7.453,0,0,0-25.2-.539,13.031,13.031,0,0,1-25.734.938,4.1,4.1,0,0,0-26.625.75Zm3.141-2.531q.328,1.219.609,2.3A5.345,5.345,0,0,0-23.812.8a9.191,9.191,0,0,0-.562-2.344A4,4,0,0,0-23.484-1.781Zm1.734-.141q.422,1.078.8,2.25-.516.141-.891.281a9.569,9.569,0,0,0-.75-2.2A4.209,4.209,0,0,0-21.75-1.922Zm9.375-4.828a8,8,0,0,1-1.547,1.172v-.891A7.328,7.328,0,0,0-12-8.344h.563V-.281h-.937Zm8.953,2.766H-8.766v-.75h5.344Zm.984,3.516a1.868,1.868,0,0,1,.656-1.266A15.638,15.638,0,0,0-.234-3.492,9.465,9.465,0,0,0,.984-5.344,2.121,2.121,0,0,0,1.2-6.469,1.2,1.2,0,0,0,.75-7.242,1.151,1.151,0,0,0-.117-7.5a1.863,1.863,0,0,0-.937.375,2.025,2.025,0,0,0-.68.984l-.891-.141a3.512,3.512,0,0,1,.961-1.57A2.3,2.3,0,0,1-.281-8.391a2.981,2.981,0,0,1,.844.023,2.173,2.173,0,0,1,.773.328,1.907,1.907,0,0,1,.656.773A2.253,2.253,0,0,1,2.18-6.023a4.082,4.082,0,0,1-.727,1.734A33.608,33.608,0,0,1-1.078-1.125H2.3v.844H-2.437Zm16.5-8.719q-.047,1.078-.047,2.156v6q0,1.031.047,2.063h-.891V.516H8.344v.609H7.453Q7.5.047,7.5-.984V-7.031q0-1.078-.047-2.156ZM13.172-.234v-8.2H8.344v8.2Zm-.516-5.578q-.375-.047-1.5-.047V-4.5h1.172v3.141H9.141V-4.5h1.219V-5.859q-1.219,0-1.641.047v-.8q.422.047,1.641.047a12.31,12.31,0,0,0-.047-1.312H11.2a10.777,10.777,0,0,0-.047,1.313q.984,0,1.5-.047Zm-7.5,6.938Q5.2.7,5.25-.891V-5.484a15.667,15.667,0,0,1-.937,1.547q-.375-.328-.8-.656A10.223,10.223,0,0,0,4.734-6.562,9.871,9.871,0,0,0,5.813-9.75a7.817,7.817,0,0,0,1.125.375,18.717,18.717,0,0,0-.844,2.2V-.891a12.62,12.62,0,0,0,.094,2.016Zm6.375-3.187V-3.8H9.891v1.734ZM24.844-9.047q-.094,1.125-.094,2.016V-.375q0,.891-.469,1.078a7.12,7.12,0,0,1-1.828.281,2.876,2.876,0,0,0-.422-1.078,10.38,10.38,0,0,0,1.43,0q.4-.047.4-.656V-3H18.469a8.705,8.705,0,0,1-.75,2.578,5.156,5.156,0,0,1-1.031,1.5A2.212,2.212,0,0,0,15.75.609a4.935,4.935,0,0,0,1.2-1.57,5.866,5.866,0,0,0,.563-1.8,15.164,15.164,0,0,0,.117-1.969V-6.8q0-1.031-.047-2.25Zm-.984,2.672V-8.344H18.516v1.969Zm0,2.625V-5.672H18.516V-3.75Z" transform="translate(-1123 -5576)" fill="#4e443b"/>
                                        <path data-idr="Path_3383" data-name="Path 3383" d="M10,0H144.443V20.292H10Z" transform="translate(-1043 -5590)" fill="#f6f4e8"/>
                                        <path data-idr="Path_3444" data-name="Path 3444" d="M-18.8-9.375a2.873,2.873,0,0,0-.422.727q-.187.445-.469,1.055h3.844q-.047.938-.07,2.109t-.07,2.859a18.089,18.089,0,0,1-.187,2.461,1.066,1.066,0,0,1-.844.938q-.7.164-1.594.3a4.878,4.878,0,0,0-.281-1.266,2.976,2.976,0,0,0,1.617-.07q.258-.211.3-1.289t.094-2.508q.047-1.43.047-2.836h-3.094q-.422.984-1.078,2.3a4.352,4.352,0,0,0-.937-.516,8.656,8.656,0,0,0,1.289-2.367,16.7,16.7,0,0,0,.727-2.32Q-19.359-9.562-18.8-9.375Zm-3.375,6.469q-1.172.188-1.992.328a16.865,16.865,0,0,0-1.664.375,7.821,7.821,0,0,0-.375-.984,1.828,1.828,0,0,0,.984-.586,14.61,14.61,0,0,0,1.359-1.852q-.562.047-1.008.094a5.708,5.708,0,0,0-1.055.234q-.187-.469-.422-.937.422-.094.984-1.125a12.231,12.231,0,0,0,.984-2.531,9.4,9.4,0,0,0,1.125.422,8.073,8.073,0,0,0-.82,1.406,16.846,16.846,0,0,1-1.008,1.781,14.465,14.465,0,0,0,1.594-.094,14.136,14.136,0,0,0,1.031-1.969,2.718,2.718,0,0,0,.984.516q-.422.563-1.266,1.922a25.153,25.153,0,0,1-1.875,2.625q.844-.094,2.2-.281-.234-.375-.422-.7a4.984,4.984,0,0,0,.844-.375q.469.938.938,2.156-.469.188-.844.375A7.588,7.588,0,0,1-22.172-2.906Zm3-2.344q.7,1.313,1.266,2.625A7.785,7.785,0,0,0-18.8-2.2a10.281,10.281,0,0,0-1.266-2.625A3.318,3.318,0,0,0-19.172-5.25Zm-7.453,6a12.427,12.427,0,0,0,.75-2.437q.516.094,1.031.141A7.453,7.453,0,0,0-25.2-.539,13.031,13.031,0,0,1-25.734.938,4.1,4.1,0,0,0-26.625.75Zm3.141-2.531q.328,1.219.609,2.3A5.345,5.345,0,0,0-23.812.8a9.191,9.191,0,0,0-.562-2.344A4,4,0,0,0-23.484-1.781Zm1.734-.141q.422,1.078.8,2.25-.516.141-.891.281a9.569,9.569,0,0,0-.75-2.2A4.209,4.209,0,0,0-21.75-1.922Zm7.219-.375.844-.141a2.277,2.277,0,0,0,.609,1.008,1.4,1.4,0,0,0,1.055.375,1.265,1.265,0,0,0,1.008-.516A1.6,1.6,0,0,0-10.687-2.7a1.315,1.315,0,0,0-.492-.984,3.033,3.033,0,0,0-1.43-.492v-.609A2.373,2.373,0,0,0-11.18-5.3a1.314,1.314,0,0,0,.4-1.1,1.133,1.133,0,0,0-.609-.984,1.389,1.389,0,0,0-1.2-.07,1.954,1.954,0,0,0-1.008,1.313l-.844-.141a4.052,4.052,0,0,1,.773-1.406,1.994,1.994,0,0,1,1.336-.656,2.668,2.668,0,0,1,1.477.211,1.741,1.741,0,0,1,.891.938,2.181,2.181,0,0,1,.07,1.383A2.245,2.245,0,0,1-10.969-4.5a2.151,2.151,0,0,1,1.008.844A2.2,2.2,0,0,1-9.727-2.18,2.174,2.174,0,0,1-10.547-.7a2.378,2.378,0,0,1-1.594.539,2.469,2.469,0,0,1-1.547-.562A2.533,2.533,0,0,1-14.531-2.3ZM-3.422-3.984H-8.766v-.75h5.344ZM.75-2.062H-2.859v-.8l3.8-5.484h.7v5.484H2.766v.8H1.641V-.281H.75Zm0-.8v-3.7l-2.625,3.7ZM14.063-9.187q-.047,1.078-.047,2.156v6q0,1.031.047,2.063h-.891V.516H8.344v.609H7.453Q7.5.047,7.5-.984V-7.031q0-1.078-.047-2.156ZM13.172-.234v-8.2H8.344v8.2Zm-.516-5.578q-.375-.047-1.5-.047V-4.5h1.172v3.141H9.141V-4.5h1.219V-5.859q-1.219,0-1.641.047v-.8q.422.047,1.641.047a12.31,12.31,0,0,0-.047-1.312H11.2a10.777,10.777,0,0,0-.047,1.313q.984,0,1.5-.047Zm-7.5,6.938Q5.2.7,5.25-.891V-5.484a15.667,15.667,0,0,1-.937,1.547q-.375-.328-.8-.656A10.223,10.223,0,0,0,4.734-6.562,9.871,9.871,0,0,0,5.813-9.75a7.817,7.817,0,0,0,1.125.375,18.717,18.717,0,0,0-.844,2.2V-.891a12.62,12.62,0,0,0,.094,2.016Zm6.375-3.187V-3.8H9.891v1.734ZM24.844-9.047q-.094,1.125-.094,2.016V-.375q0,.891-.469,1.078a7.12,7.12,0,0,1-1.828.281,2.876,2.876,0,0,0-.422-1.078,10.38,10.38,0,0,0,1.43,0q.4-.047.4-.656V-3H18.469a8.705,8.705,0,0,1-.75,2.578,5.156,5.156,0,0,1-1.031,1.5A2.212,2.212,0,0,0,15.75.609a4.935,4.935,0,0,0,1.2-1.57,5.866,5.866,0,0,0,.563-1.8,15.164,15.164,0,0,0,.117-1.969V-6.8q0-1.031-.047-2.25Zm-.984,2.672V-8.344H18.516v1.969Zm0,2.625V-5.672H18.516V-3.75Z" transform="translate(-966 -5576)" fill="#4e443b"/>
                                        <path data-idr="Icon_awesome-user-tie" data-name="Icon awesome-user-tie" d="M10.1,11.546A5.773,5.773,0,1,0,4.33,5.773,5.772,5.772,0,0,0,10.1,11.546Zm4.321,1.47-2.156,8.632-1.443-6.134,1.443-2.526H7.938l1.443,2.526L7.938,21.648,5.782,13.016A6.051,6.051,0,0,0,0,19.05v1.876a2.165,2.165,0,0,0,2.165,2.165H18.04A2.165,2.165,0,0,0,20.2,20.926V19.05a6.051,6.051,0,0,0-5.782-6.034Z" transform="translate(-1256 -5659)" fill="#9a2327"/>
                                        <path data-idr="Icon_awesome-clipboard-list" data-name="Icon awesome-clipboard-list" d="M15.154,2.886H11.546a2.886,2.886,0,1,0-5.773,0H2.165A2.165,2.165,0,0,0,0,5.051V20.926a2.165,2.165,0,0,0,2.165,2.165H15.154a2.165,2.165,0,0,0,2.165-2.165V5.051A2.165,2.165,0,0,0,15.154,2.886ZM4.33,19.122A1.082,1.082,0,1,1,5.412,18.04,1.08,1.08,0,0,1,4.33,19.122Zm0-4.33A1.082,1.082,0,1,1,5.412,13.71,1.08,1.08,0,0,1,4.33,14.793Zm0-4.33A1.082,1.082,0,1,1,5.412,9.381,1.08,1.08,0,0,1,4.33,10.463ZM8.659,1.8A1.082,1.082,0,1,1,7.577,2.886,1.08,1.08,0,0,1,8.659,1.8Zm5.773,16.6a.362.362,0,0,1-.361.361H7.577a.362.362,0,0,1-.361-.361v-.722a.362.362,0,0,1,.361-.361h6.494a.362.362,0,0,1,.361.361Zm0-4.33a.362.362,0,0,1-.361.361H7.577a.362.362,0,0,1-.361-.361V13.35a.362.362,0,0,1,.361-.361h6.494a.362.362,0,0,1,.361.361Zm0-4.33a.362.362,0,0,1-.361.361H7.577a.362.362,0,0,1-.361-.361V9.02a.362.362,0,0,1,.361-.361h6.494a.362.362,0,0,1,.361.361Z" transform="translate(-1162 -5659)" fill="#9a2327"/>
                                        <g data-idr="Group_307" data-name="Group 307" transform="translate(37.478 201.533)">
                                        <path data-idr="Path_3359" data-name="Path 3359" d="M71.909,0H82.783a.815.815,0,0,1,.809.809V10.858a.815.815,0,0,1-.809.809H71.909a.815.815,0,0,1-.809-.809V.809A.815.815,0,0,1,71.909,0Z" transform="translate(-1033.719 -5857.533)" fill="#9a2327"/>
                                        <path data-idr="Path_3360" data-name="Path 3360" d="M9.606,26.887V18.564a.756.756,0,0,0-.764-.764H4.337a.775.775,0,0,0-.6.29L0,22.7v6.124a.756.756,0,0,0,.764.764H3.146a2.718,2.718,0,0,1,2.169-1.1,2.676,2.676,0,0,1,2.169,1.1H16.31a2.718,2.718,0,0,1,2.169-1.1,2.676,2.676,0,0,1,2.169,1.1h1.97a.743.743,0,0,0,.733-.733v-.473a.724.724,0,0,0-.733-.733H10.369a.766.766,0,0,1-.764-.764Zm-2.779-2.81H2.841a.886.886,0,0,1-.886-.886v-.229a.977.977,0,0,1,.2-.565l2.107-2.611a.883.883,0,0,1,.687-.336H6.811a.886.886,0,0,1,.886.886v2.841a.868.868,0,0,1-.87.9Z" transform="translate(-973.478 -5872.615)" fill="#9a2327"/>
                                        <circle data-idr="Ellipse_15" data-name="Ellipse 15" cx="1.909" cy="1.909" r="1.909" transform="translate(-970.102 -5843.315)" fill="#9a2327"/>
                                        <circle data-idr="Ellipse_16" data-name="Ellipse 16" cx="1.909" cy="1.909" r="1.909" transform="translate(-956.893 -5843.315)" fill="#9a2327"/>
                                        </g>
                                        <g data-idr="Group_306" data-name="Group 306" transform="translate(41.435 201.432)">
                                        <path data-idr="Path_3361" data-name="Path 3361" d="M55.647,2.484,51.383,0,42.068,5.427l4.263,2.484Z" transform="translate(-1157.714 -5860.432)" fill="#9a2327"/>
                                        <path data-idr="Path_3362" data-name="Path 3362" d="M161.763,64.3l-9.315,5.427,3.475,2.025,9.315-5.427Z" transform="translate(-1262.254 -5921.335)" fill="#9a2327"/>
                                        <path data-idr="Path_3363" data-name="Path 3363" d="M233.131,134.034v10.854l9.31-5.424V128.61Z" transform="translate(-1338.669 -5982.238)" fill="#9a2327"/>
                                        <path data-idr="Path_3364" data-name="Path 3364" d="M27.169,139.464l9.31,5.424V134.034l-9.31-5.424Z" transform="translate(-1143.604 -5982.238)" fill="#9a2327"/>
                                        </g>
                                        <path data-idr="Subtraction_2" data-name="Subtraction 2" d="M21.942,20.442H1.079A1.089,1.089,0,0,1,0,19.346V1.1A1.089,1.089,0,0,1,1.079,0H6.115A1.089,1.089,0,0,1,7.194,1.1v8.957l6.255-4.039a1.06,1.06,0,0,1,.576-.173,1.091,1.091,0,0,1,1.083,1.1v3.115l6.255-4.039a1.061,1.061,0,0,1,.576-.173,1.091,1.091,0,0,1,1.083,1.1V19.346A1.089,1.089,0,0,1,21.942,20.442Zm-6.835-7.357V16.33h3.2V13.085Zm-7.673,0V16.33h3.2V13.085Z" transform="translate(-1004 -5657)" fill="#9a2327"/>
                                        <path data-idr="Icon_zocial-email" data-name="Icon zocial-email" d="M.072,18.958V5.515q0-.023.07-.443L8.054,11.84.165,19.425a1.978,1.978,0,0,1-.093-.467Zm1.05-14.82a1.006,1.006,0,0,1,.4-.07H22.827a1.322,1.322,0,0,1,.42.07l-7.935,6.791-1.05.84-2.077,1.7-2.077-1.7-1.05-.84Zm.023,16.2L9.1,12.7l3.081,2.5,3.081-2.5,7.958,7.632a1.121,1.121,0,0,1-.4.07H1.519a1.057,1.057,0,0,1-.373-.07Zm15.17-8.5L24.2,5.072a1.393,1.393,0,0,1,.07.443V18.958a1.789,1.789,0,0,1-.07.467Z" transform="translate(-1336.072 -5659.068)" fill="#9a2327"/>
                                    </g>
                                </svg>
                                <svg class="ln_vn" xmlns="http://www.w3.org/2000/svg" width="481.493" height="112.87" viewBox="0 0 481.493 112.87">
                                    <g data-idr="Group_320" data-name="Group 320" transform="translate(1365 5682.579)">
                                        <path data-idr="Path_3377" data-name="Path 3377" d="M0,0H66L81.493,44.992,66,90H0" transform="translate(-1365 -5682.579)" fill="#f6f4e8"/>
                                        <path data-idr="Path_3377-2" data-name="Path 3377" d="M0,0H86l15.493,44.992L86,90H0L15.369,45.088Z" transform="translate(-1297 -5682.579)" fill="#f6f4e8"/>
                                        <path data-idr="Path_3377-3" data-name="Path 3377" d="M0,0H96l15.493,44.992L96,90H0L15.369,45.088Z" transform="translate(-1209 -5682.579)" fill="#f6f4e8"/>
                                        <path data-idr="Path_3377-4" data-name="Path 3377" d="M10,0H86l15.493,44.992L86,90H10L25.369,45.088Z" transform="translate(-1121 -5682.579)" fill="#f6f4e8"/>
                                        <path data-idr="Path_3377-5" data-name="Path 3377" d="M10,0H76L91.493,44.992,76,90H10L25.369,45.088Z" transform="translate(-1043 -5682.579)" fill="#f6f4e8"/>
                                        <path data-idr="Path_3377-6" data-name="Path 3377" d="M10,0H76L91.493,44.992,76,90H10L25.369,45.088Z" transform="translate(-975 -5682.579)" fill="#f6f4e8"/>
                                        <path data-idr="Path_3456" data-name="Path 3456" d="M-12.019,0V-.9h-3.672V-9h-1V0Zm2.148,0V-6.672h-.948V0Zm0-7.8V-9h-.948v1.2ZM-7.52-4.032c.036-.792.06-2.016,1.164-2.016S-5.3-4.812-5.264-4.032Zm2.3,1.812c.06.756-.192,1.6-1.1,1.6-1.332,0-1.176-1.728-1.2-2.628h3.24c-.048-1.56.072-3.6-2.088-3.6-1.764,0-2.136,2.1-2.136,3.5C-8.5-.66-7.6.18-6.344.18a2.037,2.037,0,0,0,2.016-2.4Zm-.336-5.268h.96l-1.2-1.692H-6.908L-8.1-7.488h.96l.792-1.128Zm3.66.816h-.924V0h.948V-4.464a1.435,1.435,0,0,1,.432-1.212A1.357,1.357,0,0,1-.5-6.048c.768,0,1,.468,1,1.164V0h.948V-5.148A1.5,1.5,0,0,0-.2-6.852a2.024,2.024,0,0,0-1.668.912h-.024ZM7.133-4.464a1.435,1.435,0,0,1,.432-1.212A1.357,1.357,0,0,1,8.5-6.048c.768,0,1,.468,1,1.164V0h.948V-5.148A1.5,1.5,0,0,0,8.8-6.852a1.952,1.952,0,0,0-1.644.912H7.133V-9H6.185V0h.948ZM17.273-2.631h-4.09A1.729,1.729,0,0,0,13.7-1.348,1.908,1.908,0,0,0,15.041-.9,2.965,2.965,0,0,0,16.8-1.471v1.1a4.029,4.029,0,0,1-2.168.516,2.684,2.684,0,0,1-2.077-.817,3.269,3.269,0,0,1-.753-2.3,3.2,3.2,0,0,1,.829-2.282,2.712,2.712,0,0,1,2.06-.882,2.365,2.365,0,0,1,1.9.791,3.284,3.284,0,0,1,.674,2.2Zm-1.312-.961a1.752,1.752,0,0,0-.346-1.14,1.155,1.155,0,0,0-.937-.407,1.319,1.319,0,0,0-.993.428,1.954,1.954,0,0,0-.5,1.119Zm.533-3.463h-.937l-.943-1.236-.92,1.236h-.908L14.1-8.977h1.078ZM14.766,2.039a.726.726,0,0,1-.513-.2.633.633,0,0,1-.214-.48.6.6,0,0,1,.22-.472A.751.751,0,0,1,14.766.7a.734.734,0,0,1,.51.19.61.61,0,0,1,.211.472.637.637,0,0,1-.211.48A.716.716,0,0,1,14.766,2.039Z" transform="translate(-1324 -5609)" fill="#4e443b"/>
                                        <path data-idr="Path_3445" data-name="Path 3445" d="M-4.211-3.819a7.336,7.336,0,0,0,.22,2.054.887.887,0,0,0,.9.712.874.874,0,0,0,.894-.712,7.6,7.6,0,0,0,.212-2.054A7.517,7.517,0,0,0-2.194-5.9a.867.867,0,0,0-.894-.677.879.879,0,0,0-.9.677A7.254,7.254,0,0,0-4.211-3.819Zm1.123-4.023A2.2,2.2,0,0,1-1-6.794,6.061,6.061,0,0,1-.4-3.819,6.028,6.028,0,0,1-1-.849,2.2,2.2,0,0,1-3.088.193,2.2,2.2,0,0,1-5.175-.849a6.028,6.028,0,0,1-.6-2.97,6.061,6.061,0,0,1,.6-2.976A2.2,2.2,0,0,1-3.088-7.842ZM.763-5.371V-6.413a6.751,6.751,0,0,0,1.013-.1,1.427,1.427,0,0,0,.75-.408,1.345,1.345,0,0,0,.3-.559,1.285,1.285,0,0,0,.059-.312H4.163V0H2.594V-5.371Z" transform="translate(-1324 -5669.623)" fill="#4e443b"/>
                                        <path data-idr="Path_3455" data-name="Path 3455" d="M-16.26-9h-1.1l2.7,5.508V0h1V-3.492L-10.944-9h-1.1L-14.16-4.488Zm6.336,4.968c.036-.792.06-2.016,1.164-2.016S-7.7-4.812-7.668-4.032Zm2.3,1.812c.06.756-.192,1.6-1.1,1.6-1.332,0-1.176-1.728-1.2-2.628h3.24c-.048-1.56.072-3.6-2.088-3.6-1.764,0-2.136,2.1-2.136,3.5,0,2.688.9,3.528,2.16,3.528a2.037,2.037,0,0,0,2.016-2.4Zm-.336-5.268H-7L-8.2-9.18H-9.312L-10.5-7.488h.96l.792-1.128ZM-2.556,0h.948V-6.672h-.948v4.284a2.24,2.24,0,0,1-.276,1.176,1.358,1.358,0,0,1-1.14.588c-.672,0-.852-.3-.852-.864V-6.672h-.948v5.148c0,1.176.612,1.7,1.608,1.7A1.751,1.751,0,0,0-2.58-.876h.024Zm6.48-6.048c.9,0,1.092.744,1.1,1.476h.888a2,2,0,0,0-1.98-2.28c-2.04,0-2.3,1.968-2.3,3.6C1.632-1.524,1.92.18,3.96.18c1.488,0,1.968-1.224,2-2.508h-.9c-.048.816-.144,1.7-1.176,1.7-1.212,0-1.272-1.548-1.272-2.424C2.616-4,2.544-6.048,3.924-6.048ZM11.322,0H10V-.937H9.981A1.985,1.985,0,0,1,8.158.141,1.92,1.92,0,0,1,6.773-.34a1.681,1.681,0,0,1-.5-1.271q0-1.7,1.957-1.98l1.781-.252q0-1.283-1.219-1.283a2.9,2.9,0,0,0-1.934.738V-5.578a4.217,4.217,0,0,1,2.191-.562A1.994,1.994,0,0,1,11.322-3.9ZM10.01-2.947l-1.26.176a2,2,0,0,0-.882.284.83.83,0,0,0-.3.729.8.8,0,0,0,.272.624,1.055,1.055,0,0,0,.729.243A1.346,1.346,0,0,0,9.6-1.327a1.548,1.548,0,0,0,.407-1.1ZM7.678-8.027H6.752L5.34-9.469H6.623Zm-.457.891L8.516-8.6H9.576l1.295,1.465H9.981l-.908-.838-.932.838ZM15.636,0h.948V-6.672h-.948v4.284a2.24,2.24,0,0,1-.276,1.176,1.358,1.358,0,0,1-1.14.588c-.672,0-.852-.3-.852-.864V-6.672H12.42v5.148c0,1.176.612,1.7,1.608,1.7A1.751,1.751,0,0,0,15.612-.876h.024ZM-17.232,14v-.9H-20.9V5h-1v9Zm5.226,0h-1.318v-.937h-.023a1.985,1.985,0,0,1-1.822,1.078,1.92,1.92,0,0,1-1.386-.48,1.681,1.681,0,0,1-.5-1.271q0-1.7,1.957-1.98l1.781-.252q0-1.283-1.219-1.283a2.9,2.9,0,0,0-1.934.738V8.422a4.217,4.217,0,0,1,2.191-.562A1.994,1.994,0,0,1-12.006,10.1Zm-1.312-2.947-1.26.176a2,2,0,0,0-.882.284.83.83,0,0,0-.3.729.8.8,0,0,0,.272.624,1.055,1.055,0,0,0,.729.243,1.346,1.346,0,0,0,1.028-.437,1.548,1.548,0,0,0,.407-1.1ZM-14.812,5.5l1.061-1.441h1.277L-13.886,5.5Zm2.332-.117a1.528,1.528,0,0,1-.554,1.069,1.794,1.794,0,0,1-1.187.407,1.771,1.771,0,0,1-1.2-.4,1.439,1.439,0,0,1-.5-1.072h.75q.064.7.973.7.861,0,.961-.7Zm2.448,1.941h-.924V14h.948V9.536a1.435,1.435,0,0,1,.432-1.212,1.357,1.357,0,0,1,.936-.372c.768,0,1,.468,1,1.164V14H-6.7V8.852a1.5,1.5,0,0,0-1.644-1.7,2.024,2.024,0,0,0-1.668.912h-.024Zm6.432.624c1.056,0,1.332,1.248,1.332,2.568,0,1.068.012,2.856-1.428,2.856-.936,0-1.212-1.08-1.212-2.712C-4.908,9.764-4.86,7.952-3.6,7.952Zm1.332.132h-.024A1.617,1.617,0,0,0-3.78,7.148c-1.764,0-2.112,2.064-2.112,3.468,0,2.688.876,3.564,2.136,3.564a1.569,1.569,0,0,0,1.44-.96h.024c-.012.732.144,2.244-1.392,2.244a.908.908,0,0,1-1.044-.828h-.924A1.775,1.775,0,0,0-3.66,16.268a2.066,2.066,0,0,0,1.836-.924,3.637,3.637,0,0,0,.5-2.148V7.328h-.948Zm5.436-.756H2.244V14h.948V9.536a1.435,1.435,0,0,1,.432-1.212,1.357,1.357,0,0,1,.936-.372c.768,0,1,.468,1,1.164V14H6.5V8.852a1.5,1.5,0,0,0-1.644-1.7,2.024,2.024,0,0,0-1.668.912H3.168ZM9.6,7.952c1.056,0,1.332,1.248,1.332,2.568,0,1.068.012,2.856-1.428,2.856-.936,0-1.212-1.08-1.212-2.712C8.292,9.764,8.34,7.952,9.6,7.952Zm1.332.132h-.024A1.617,1.617,0,0,0,9.42,7.148c-1.764,0-2.112,2.064-2.112,3.468,0,2.688.876,3.564,2.136,3.564a1.569,1.569,0,0,0,1.44-.96h.024c-.012.732.144,2.244-1.392,2.244a.908.908,0,0,1-1.044-.828H7.548A1.775,1.775,0,0,0,9.54,16.268a2.066,2.066,0,0,0,1.836-.924,3.637,3.637,0,0,0,.5-2.148V7.328h-.948Zm3.06,1.452a1.435,1.435,0,0,1,.432-1.212,1.357,1.357,0,0,1,.936-.372c.768,0,1,.468,1,1.164V14H17.3V8.852a1.5,1.5,0,0,0-1.644-1.7,1.952,1.952,0,0,0-1.644.912h-.024V5h-.948v9h.948Zm5.076.432c.036-.792.06-2.016,1.164-2.016s1.056,1.236,1.092,2.016Zm2.3,1.812c.06.756-.192,1.6-1.1,1.6-1.332,0-1.176-1.728-1.2-2.628h3.24c-.048-1.56.072-3.6-2.088-3.6-1.764,0-2.136,2.1-2.136,3.5,0,2.688.9,3.528,2.16,3.528a2.037,2.037,0,0,0,2.016-2.4Z" transform="translate(-1246 -5616)" fill="#4e443b"/>
                                        <path data-idr="Path_3446" data-name="Path 3446" d="M-4.211-3.819a7.336,7.336,0,0,0,.22,2.054.887.887,0,0,0,.9.712.874.874,0,0,0,.894-.712,7.6,7.6,0,0,0,.212-2.054A7.517,7.517,0,0,0-2.194-5.9a.867.867,0,0,0-.894-.677.879.879,0,0,0-.9.677A7.254,7.254,0,0,0-4.211-3.819Zm1.123-4.023A2.2,2.2,0,0,1-1-6.794,6.061,6.061,0,0,1-.4-3.819,6.028,6.028,0,0,1-1-.849,2.2,2.2,0,0,1-3.088.193,2.2,2.2,0,0,1-5.175-.849a6.028,6.028,0,0,1-.6-2.97,6.061,6.061,0,0,1,.6-2.976A2.2,2.2,0,0,1-3.088-7.842ZM.344,0A3.66,3.66,0,0,1,.7-1.531,4.328,4.328,0,0,1,2.25-3.18,11.344,11.344,0,0,0,3.62-4.265,1.6,1.6,0,0,0,4.1-5.382,1.238,1.238,0,0,0,3.824-6.2a.965.965,0,0,0-.784-.328.956.956,0,0,0-.951.521,2.584,2.584,0,0,0-.172.956H.43A3.759,3.759,0,0,1,.79-6.66,2.244,2.244,0,0,1,2.967-7.826a2.763,2.763,0,0,1,1.968.685,2.367,2.367,0,0,1,.731,1.813A2.451,2.451,0,0,1,5.15-3.792,5.142,5.142,0,0,1,4.036-2.8l-.613.435q-.576.408-.788.591a1.731,1.731,0,0,0-.357.424h3.4V0Z" transform="translate(-1246 -5669.623)" fill="#4e443b"/>
                                        <path data-idr="Path_3454" data-name="Path 3454" d="M-38.623,0h1.188l1.944-3.768L-33.583,0h1.224L-34.9-4.62-32.431-9h-1.176l-1.884,3.516L-37.375-9h-1.176l2.484,4.38Zm9.312-1.98A1.22,1.22,0,0,1-30.463-.624c-.768,0-.936-.432-.936-1.1a1.189,1.189,0,0,1,.588-1.152c.5-.24,1.032-.444,1.5-.72ZM-27.751-.7a1.166,1.166,0,0,1-.408-.012c-.192-.1-.168-.336-.168-.5V-5.04a1.6,1.6,0,0,0-1.812-1.812c-1.344,0-2.028.6-1.98,1.98h.852c-.012-.78.108-1.176.972-1.176.768,0,1.056.288,1.056,1.044,0,.348.024.612-.18.768-.12.1-1.464.6-2,.84a1.706,1.706,0,0,0-.96,1.62C-32.383-.564-32,.18-30.667.18A1.692,1.692,0,0,0-29.191-.9h.024c.1.912.4.984,1.2.948A1.4,1.4,0,0,1-27.751,0Zm-3.132-6.792h.8l1.572-1.692h-1.308Zm5.676,1.44c.9,0,1.092.744,1.1,1.476h.888a2,2,0,0,0-1.98-2.28c-2.04,0-2.3,1.968-2.3,3.6,0,1.728.288,3.432,2.328,3.432,1.488,0,1.968-1.224,2-2.508h-.9c-.048.816-.144,1.7-1.176,1.7-1.212,0-1.272-1.548-1.272-2.424C-26.515-4-26.587-6.048-25.207-6.048Zm5.878-1.212a.817.817,0,0,1-.571-.217.713.713,0,0,1-.237-.551.732.732,0,0,1,.237-.557.805.805,0,0,1,.571-.223.83.83,0,0,1,.586.223.727.727,0,0,1,.24.557.717.717,0,0,1-.24.542A.824.824,0,0,1-19.329-7.26ZM-18.655,0h-1.359V-6h1.359Zm-.668,2.039a.726.726,0,0,1-.513-.2.633.633,0,0,1-.214-.48.6.6,0,0,1,.22-.472A.751.751,0,0,1-19.323.7a.734.734,0,0,1,.51.19.61.61,0,0,1,.211.472.637.637,0,0,1-.211.48A.716.716,0,0,1-19.323,2.039Zm2.759-8.711h-.924V0h.948V-4.464a1.435,1.435,0,0,1,.432-1.212,1.357,1.357,0,0,1,.936-.372c.768,0,1,.468,1,1.164V0h.948V-5.148a1.5,1.5,0,0,0-1.644-1.7,2.024,2.024,0,0,0-1.668.912h-.024Zm5.424,2.208a1.435,1.435,0,0,1,.432-1.212,1.357,1.357,0,0,1,.936-.372c.768,0,1,.468,1,1.164V0h.948V-5.148a1.5,1.5,0,0,0-1.644-1.7,1.952,1.952,0,0,0-1.644.912h-.024V-9h-.948V0h.948ZM-.6-4.884c.024-1.368-.744-1.968-2.064-1.968A1.815,1.815,0,0,0-4.624-4.968c0,1.164.6,1.512,1.632,1.9.684.288,1.644.372,1.644,1.32,0,.816-.5,1.128-1.272,1.128-.888,0-1.164-.5-1.128-1.32h-.9A2.043,2.043,0,0,0-4.276-.516,2,2,0,0,0-2.62.18,2.007,2.007,0,0,0-.364-1.872c0-1.248-.96-1.488-1.92-1.92C-2.932-4.068-3.64-4.176-3.64-5.04c0-.7.384-1.008,1.056-1.008.8,0,1.092.372,1.056,1.164ZM5.054,0H3.736V-.937H3.712A1.985,1.985,0,0,1,1.89.141,1.92,1.92,0,0,1,.5-.34,1.681,1.681,0,0,1,0-1.611q0-1.7,1.957-1.98l1.781-.252q0-1.283-1.219-1.283a2.9,2.9,0,0,0-1.934.738V-5.578a4.217,4.217,0,0,1,2.191-.562A1.994,1.994,0,0,1,5.054-3.9ZM3.741-2.947l-1.26.176a2,2,0,0,0-.882.284.83.83,0,0,0-.3.729.8.8,0,0,0,.272.624,1.055,1.055,0,0,0,.729.243,1.346,1.346,0,0,0,1.028-.437,1.548,1.548,0,0,0,.407-1.1ZM2.025-9.2a4.9,4.9,0,0,1,.5-.023,1.566,1.566,0,0,1,.905.243.76.76,0,0,1,.354.659.848.848,0,0,1-.231.6.915.915,0,0,1-.577.287v.293H2.259v-.7q.674,0,.674-.422,0-.34-.521-.34a2.311,2.311,0,0,0-.387.053Zm5,2.527H6.1V0h.948V-4.464a1.435,1.435,0,0,1,.432-1.212,1.357,1.357,0,0,1,.936-.372c.768,0,1,.468,1,1.164V0h.948V-5.148a1.5,1.5,0,0,0-1.644-1.7,2.024,2.024,0,0,0-1.668.912H7.027Zm10.38,3.216c0,1.8-.312,2.832-1.3,2.832-1.308,0-1.272-1.8-1.272-2.724,0-.948.024-2.7,1.26-2.7C17.311-6.048,17.407-4.332,17.407-3.456ZM14.839-.7h.024A1.537,1.537,0,0,0,16.255.18c1.8,0,2.136-2.064,2.136-3.96,0-1.368-.492-3.072-2.184-3.072a1.59,1.59,0,0,0-1.38.924H14.8v-.744h-.912V2.256h.948Zm5.412-3.768a1.435,1.435,0,0,1,.432-1.212,1.357,1.357,0,0,1,.936-.372c.768,0,1,.468,1,1.164V0h.948V-5.148a1.5,1.5,0,0,0-1.644-1.7,1.952,1.952,0,0,0-1.644.912h-.024V-9H19.3V0h.948ZM29.318,0H28V-.937h-.023A1.985,1.985,0,0,1,26.154.141a1.92,1.92,0,0,1-1.386-.48,1.681,1.681,0,0,1-.5-1.271q0-1.7,1.957-1.98l1.781-.252q0-1.283-1.219-1.283a2.9,2.9,0,0,0-1.934.738V-5.578a4.217,4.217,0,0,1,2.191-.562A1.994,1.994,0,0,1,29.318-3.9ZM28.005-2.947l-1.26.176a2,2,0,0,0-.882.284.83.83,0,0,0-.3.729.8.8,0,0,0,.272.624,1.055,1.055,0,0,0,.729.243A1.346,1.346,0,0,0,27.6-1.327a1.548,1.548,0,0,0,.407-1.1Zm.264-7.143q.252-.023.563-.023a1.412,1.412,0,0,1,.864.246.788.788,0,0,1,.331.668.846.846,0,0,1-.229.6.9.9,0,0,1-.574.287v.287H28.5v-.7q.68,0,.68-.41,0-.352-.527-.352a2.311,2.311,0,0,0-.387.053Zm.516,2.953H27.87l-.926-.838-.908.838h-.891L26.435-8.6H27.5Zm2.567,2.673a1.419,1.419,0,0,1,.408-1.212,1.357,1.357,0,0,1,.936-.372c.768,0,1,.468,1,1.164V0h.948V-4.464a1.435,1.435,0,0,1,.432-1.212,1.377,1.377,0,0,1,.888-.372c.816,0,1.02.42,1.02,1.164V0h.948V-4.824a2.12,2.12,0,0,0-.408-1.56A1.8,1.8,0,0,0,36.3-6.852,1.993,1.993,0,0,0,34.507-5.8a1.741,1.741,0,0,0-1.584-1.056A1.874,1.874,0,0,0,31.339-5.82h-.024v-.852H30.4V0h.948ZM-43.627,5.9H-41.3V14h1V5.9h2.328V5h-5.652Zm7.044,3.636a1.435,1.435,0,0,1,.432-1.212,1.357,1.357,0,0,1,.936-.372c.768,0,1,.468,1,1.164V14h.948V8.852a1.5,1.5,0,0,0-1.644-1.7,1.952,1.952,0,0,0-1.644.912h-.024V5h-.948v9h.948Zm8.964.9c0-2.016-.744-3.288-2.388-3.288s-2.388,1.272-2.388,3.288c0,2.88.948,3.744,2.388,3.744C-28.543,14.18-27.619,13.328-27.619,10.436Zm-.984.3c0,1.572-.276,2.64-1.4,2.64-1.1,0-1.4-1.068-1.4-2.64,0-2.016.432-2.784,1.4-2.784C-29.011,7.952-28.6,8.72-28.6,10.736Zm-.6-4.224h.96l-1.2-1.692h-1.116l-1.188,1.692h.96l.792-1.128Zm3.4.816h-.924V14h.948V9.536a1.435,1.435,0,0,1,.432-1.212,1.357,1.357,0,0,1,.936-.372c.768,0,1,.468,1,1.164V14h.948V8.852a1.5,1.5,0,0,0-1.644-1.7,2.024,2.024,0,0,0-1.668.912h-.024Zm6.432.624c1.056,0,1.332,1.248,1.332,2.568,0,1.068.012,2.856-1.428,2.856-.936,0-1.212-1.08-1.212-2.712C-20.683,9.764-20.635,7.952-19.375,7.952Zm1.332.132h-.024a1.617,1.617,0,0,0-1.488-.936c-1.764,0-2.112,2.064-2.112,3.468,0,2.688.876,3.564,2.136,3.564a1.569,1.569,0,0,0,1.44-.96h.024c-.012.732.144,2.244-1.392,2.244a.908.908,0,0,1-1.044-.828h-.924a1.775,1.775,0,0,0,1.992,1.632,2.066,2.066,0,0,0,1.836-.924,3.637,3.637,0,0,0,.5-2.148V7.328h-.948Zm8.2,1.032c.024-1.368-.744-1.968-2.064-1.968a1.815,1.815,0,0,0-1.956,1.884c0,1.164.6,1.512,1.632,1.9.684.288,1.644.372,1.644,1.32,0,.816-.5,1.128-1.272,1.128-.888,0-1.164-.5-1.128-1.32h-.9a2.043,2.043,0,0,0,.372,1.428,2,2,0,0,0,1.656.7,2.007,2.007,0,0,0,2.256-2.052c0-1.248-.96-1.488-1.92-1.92-.648-.276-1.356-.384-1.356-1.248,0-.7.384-1.008,1.056-1.008.8,0,1.092.372,1.056,1.164Zm3.713,5.025A2.974,2.974,0,0,1-8.352,13.3a3.037,3.037,0,0,1-.829-2.229,3.16,3.16,0,0,1,.864-2.361,3.178,3.178,0,0,1,2.329-.85A2.878,2.878,0,0,1-3.8,8.686a3.191,3.191,0,0,1,.785,2.291,3.145,3.145,0,0,1-.847,2.3A3.041,3.041,0,0,1-6.134,14.141Zm.064-5.2a1.552,1.552,0,0,0-1.26.557,2.331,2.331,0,0,0-.463,1.535,2.2,2.2,0,0,0,.469,1.485,1.574,1.574,0,0,0,1.254.542,1.494,1.494,0,0,0,1.233-.533,2.36,2.36,0,0,0,.431-1.518,2.4,2.4,0,0,0-.431-1.529A1.487,1.487,0,0,0-6.069,8.943Zm1.43-2.971,1.055-1.441H-2.3L-3.714,5.973Zm.451.891h-.92l-.926-.838-.908.838h-.891L-6.538,5.4h1.055ZM1.255,5.516H.319V7.328H-.6v.8H.319v4.776c0,1.008.42,1.1.984,1.092H2.347v-.8H1.711c-.528,0-.444-.288-.444-.516V8.132h1.1v-.8H1.255ZM3.835,14V7.328H2.887V14Zm0-7.8V5H2.887V6.2ZM5.587,9.968c.036-.792.06-2.016,1.164-2.016S7.807,9.188,7.843,9.968Zm2.3,1.812c.06.756-.192,1.6-1.1,1.6-1.332,0-1.176-1.728-1.2-2.628h3.24c-.048-1.56.072-3.6-2.088-3.6-1.764,0-2.136,2.1-2.136,3.5,0,2.688.9,3.528,2.16,3.528a2.037,2.037,0,0,0,2.016-2.4ZM7.555,6.512h.96L7.315,4.82H6.2L5.011,6.512h.96l.792-1.128ZM12.955,14H13.9V7.328h-.948v4.284a2.24,2.24,0,0,1-.276,1.176,1.358,1.358,0,0,1-1.14.588c-.672,0-.852-.3-.852-.864V7.328H9.739v5.148c0,1.176.612,1.7,1.608,1.7a1.751,1.751,0,0,0,1.584-1.056h.024Zm6.48-6.048c.9,0,1.092.744,1.1,1.476h.888a2,2,0,0,0-1.98-2.28c-2.04,0-2.3,1.968-2.3,3.6,0,1.728.288,3.432,2.328,3.432,1.488,0,1.968-1.224,2-2.508h-.9c-.048.816-.144,1.7-1.176,1.7-1.212,0-1.272-1.548-1.272-2.424C18.127,10,18.055,7.952,19.435,7.952Zm3.732,1.584A1.435,1.435,0,0,1,23.6,8.324a1.357,1.357,0,0,1,.936-.372c.768,0,1,.468,1,1.164V14h.948V8.852a1.5,1.5,0,0,0-1.644-1.7,1.952,1.952,0,0,0-1.644.912h-.024V5h-.948v9h.948ZM30.883,14h.948V7.328h-.948v4.284a2.24,2.24,0,0,1-.276,1.176,1.358,1.358,0,0,1-1.14.588c-.672,0-.852-.3-.852-.864V7.328h-.948v5.148c0,1.176.612,1.7,1.608,1.7a1.751,1.751,0,0,0,1.584-1.056h.024Zm6.75,0H36.315v-.937h-.023a1.985,1.985,0,0,1-1.822,1.078,1.92,1.92,0,0,1-1.386-.48,1.681,1.681,0,0,1-.5-1.271q0-1.7,1.957-1.98l1.781-.252q0-1.283-1.219-1.283a2.9,2.9,0,0,0-1.934.738V8.422a4.217,4.217,0,0,1,2.191-.562A1.994,1.994,0,0,1,37.633,10.1Zm-1.312-2.947-1.26.176a2,2,0,0,0-.882.284.83.83,0,0,0-.3.729.8.8,0,0,0,.272.624,1.055,1.055,0,0,0,.729.243,1.346,1.346,0,0,0,1.028-.437,1.548,1.548,0,0,0,.407-1.1Zm.264-7.143q.252-.023.563-.023a1.412,1.412,0,0,1,.864.246.788.788,0,0,1,.331.668.846.846,0,0,1-.229.6.9.9,0,0,1-.574.287v.287h-.721v-.7q.68,0,.68-.41,0-.352-.527-.352a2.311,2.311,0,0,0-.387.053ZM37.1,6.863h-.914l-.926-.838-.908.838h-.891L34.751,5.4h1.066Zm2.507.465h-.924V14h.948V9.536a1.435,1.435,0,0,1,.432-1.212A1.357,1.357,0,0,1,41,7.952c.768,0,1,.468,1,1.164V14h.948V8.852a1.5,1.5,0,0,0-1.644-1.7,2.024,2.024,0,0,0-1.668.912h-.024Z" transform="translate(-1156 -5616)" fill="#4e443b"/>
                                        <path data-idr="Path_3447" data-name="Path 3447" d="M-4.211-3.819a7.336,7.336,0,0,0,.22,2.054.887.887,0,0,0,.9.712.874.874,0,0,0,.894-.712,7.6,7.6,0,0,0,.212-2.054A7.517,7.517,0,0,0-2.194-5.9a.867.867,0,0,0-.894-.677.879.879,0,0,0-.9.677A7.254,7.254,0,0,0-4.211-3.819Zm1.123-4.023A2.2,2.2,0,0,1-1-6.794,6.061,6.061,0,0,1-.4-3.819,6.028,6.028,0,0,1-1-.849,2.2,2.2,0,0,1-3.088.193,2.2,2.2,0,0,1-5.175-.849a6.028,6.028,0,0,1-.6-2.97,6.061,6.061,0,0,1,.6-2.976A2.2,2.2,0,0,1-3.088-7.842ZM1.794-2.39a1.754,1.754,0,0,0,.15.773,1.028,1.028,0,0,0,1.013.564,1.121,1.121,0,0,0,.785-.309,1.149,1.149,0,0,0,.335-.889,1,1,0,0,0-.621-1.026,3.144,3.144,0,0,0-1.114-.145v-1.1A2.879,2.879,0,0,0,3.38-4.662a.9.9,0,0,0,.508-.913,1.022,1.022,0,0,0-.26-.725A.949.949,0,0,0,2.9-6.58a.924.924,0,0,0-.8.344,1.461,1.461,0,0,0-.244.918H.43a3.847,3.847,0,0,1,.2-1.1,2.479,2.479,0,0,1,.59-.843,2.056,2.056,0,0,1,.714-.419,3.085,3.085,0,0,1,1.014-.145,2.7,2.7,0,0,1,1.8.577A1.924,1.924,0,0,1,5.43-5.7a1.713,1.713,0,0,1-.408,1.16,1.394,1.394,0,0,1-.537.4,1.1,1.1,0,0,1,.6.36,1.922,1.922,0,0,1,.585,1.482A2.5,2.5,0,0,1,4.988-.556,2.606,2.606,0,0,1,2.962.193a2.45,2.45,0,0,1-2.3-1.08A3.207,3.207,0,0,1,.29-2.39Z" transform="translate(-1153 -5669.623)" fill="#4e443b"/>
                                        <path data-idr="Path_3453" data-name="Path 3453" d="M-23.88,0V-.9h-3.672V-9h-1V0Zm3.18-1.98A1.22,1.22,0,0,1-21.852-.624c-.768,0-.936-.432-.936-1.1A1.189,1.189,0,0,1-22.2-2.88c.5-.24,1.032-.444,1.5-.72ZM-19.14-.7a1.166,1.166,0,0,1-.408-.012c-.192-.1-.168-.336-.168-.5V-5.04a1.6,1.6,0,0,0-1.812-1.812c-1.344,0-2.028.6-1.98,1.98h.852c-.012-.78.108-1.176.972-1.176.768,0,1.056.288,1.056,1.044,0,.348.024.612-.18.768-.12.1-1.464.6-2,.84a1.706,1.706,0,0,0-.96,1.62c0,1.212.384,1.956,1.716,1.956A1.693,1.693,0,0,0-20.58-.9h.024c.1.912.4.984,1.2.948A1.4,1.4,0,0,1-19.14,0ZM-23.052-9.18l1.572,1.692h.8L-21.744-9.18Zm5.5,4.716a1.419,1.419,0,0,1,.408-1.212,1.357,1.357,0,0,1,.936-.372c.768,0,1,.468,1,1.164V0h.948V-4.464a1.435,1.435,0,0,1,.432-1.212,1.377,1.377,0,0,1,.888-.372c.816,0,1.02.42,1.02,1.164V0h.948V-4.824a2.12,2.12,0,0,0-.408-1.56,1.8,1.8,0,0,0-1.224-.468A1.993,1.993,0,0,0-14.4-5.8a1.741,1.741,0,0,0-1.584-1.056A1.874,1.874,0,0,0-17.568-5.82h-.024v-.852H-18.5V0h.948Zm11.244-4.02h-.936v1.812h-.924v.8h.924v4.776c0,1.008.42,1.1.984,1.092H-5.22V-.8h-.636c-.528,0-.444-.288-.444-.516V-5.868h1.1v-.8H-6.312Zm2.592,4.02a1.435,1.435,0,0,1,.432-1.212,1.357,1.357,0,0,1,.936-.372c.768,0,1,.468,1,1.164V0h.948V-5.148a1.5,1.5,0,0,0-1.644-1.7A1.952,1.952,0,0,0-3.7-5.94H-3.72V-9h-.948V0h.948ZM5.973,0H4.614V-.932H4.59A1.976,1.976,0,0,1,2.727.129q-2.1,0-2.1-2.549V-6H1.983v3.445q0,1.617,1.254,1.617a1.252,1.252,0,0,0,.99-.445,1.715,1.715,0,0,0,.387-1.166V-6H5.768a.738.738,0,0,0,.551-.229.761.761,0,0,0,.223-.551,1.963,1.963,0,0,0-.117-.7h.92a2.346,2.346,0,0,1,.105.75q0,1.242-1.477,1.465Zm-3.4-9.2a4.9,4.9,0,0,1,.5-.023,1.566,1.566,0,0,1,.905.243.76.76,0,0,1,.354.659.848.848,0,0,1-.231.6.915.915,0,0,1-.577.287v.293H2.809v-.7q.674,0,.674-.422,0-.34-.521-.34a2.311,2.311,0,0,0-.387.053ZM11-4.464a1.419,1.419,0,0,1,.408-1.212,1.357,1.357,0,0,1,.936-.372c.768,0,1,.468,1,1.164V0h.948V-4.464a1.435,1.435,0,0,1,.432-1.212,1.377,1.377,0,0,1,.888-.372c.816,0,1.02.42,1.02,1.164V0h.948V-4.824a2.12,2.12,0,0,0-.408-1.56,1.8,1.8,0,0,0-1.224-.468A1.993,1.993,0,0,0,14.16-5.8a1.741,1.741,0,0,0-1.584-1.056A1.874,1.874,0,0,0,10.992-5.82h-.024v-.852h-.912V0H11ZM23.371,0H22.052V-.937h-.023A1.985,1.985,0,0,1,20.206.141a1.92,1.92,0,0,1-1.386-.48,1.681,1.681,0,0,1-.5-1.271q0-1.7,1.957-1.98l1.781-.252q0-1.283-1.219-1.283a2.9,2.9,0,0,0-1.934.738V-5.578A4.217,4.217,0,0,1,21.1-6.141,1.994,1.994,0,0,1,23.371-3.9ZM22.058-2.947l-1.26.176a2,2,0,0,0-.882.284.83.83,0,0,0-.3.729.8.8,0,0,0,.272.624,1.055,1.055,0,0,0,.729.243,1.346,1.346,0,0,0,1.028-.437,1.548,1.548,0,0,0,.407-1.1Zm1.008-7.389a1.446,1.446,0,0,1-.293.955,1.022,1.022,0,0,1-.832.352,2.27,2.27,0,0,1-.891-.217,2.254,2.254,0,0,0-.75-.211q-.48,0-.48.5h-.68q0-1.3,1.148-1.3a2.072,2.072,0,0,1,.844.217,1.981,1.981,0,0,0,.773.217q.469,0,.469-.516Zm-.135,3.2h-.92l-.932-.838-.9.838h-.891L20.576-8.6h1.061ZM27.684,0h.948V-6.672h-.948v4.284a2.24,2.24,0,0,1-.276,1.176,1.358,1.358,0,0,1-1.14.588c-.672,0-.852-.3-.852-.864V-6.672h-.948v5.148c0,1.176.612,1.7,1.608,1.7A1.751,1.751,0,0,0,27.66-.876h.024Z" transform="translate(-1065 -5609)" fill="#4e443b"/>
                                        <path data-idr="Path_3448" data-name="Path 3448" d="M-4.211-3.819a7.336,7.336,0,0,0,.22,2.054.887.887,0,0,0,.9.712.874.874,0,0,0,.894-.712,7.6,7.6,0,0,0,.212-2.054A7.517,7.517,0,0,0-2.194-5.9a.867.867,0,0,0-.894-.677.879.879,0,0,0-.9.677A7.254,7.254,0,0,0-4.211-3.819Zm1.123-4.023A2.2,2.2,0,0,1-1-6.794,6.061,6.061,0,0,1-.4-3.819,6.028,6.028,0,0,1-1-.849,2.2,2.2,0,0,1-3.088.193,2.2,2.2,0,0,1-5.175-.849a6.028,6.028,0,0,1-.6-2.97,6.061,6.061,0,0,1,.6-2.976A2.2,2.2,0,0,1-3.088-7.842ZM5.752-1.676H4.872V0h-1.5V-1.676H.29V-3.013L3.153-7.74H4.872v4.866h.881Zm-2.379-1.2V-6.228L1.429-2.874Z" transform="translate(-1065 -5669.623)" fill="#4e443b"/>
                                        <path data-idr="Path_3452" data-name="Path 3452" d="M-7.146-1.08c.612-.792.7-2.988.7-3.612,0-2.064-.324-4.488-3-4.488-2.628,0-2.94,2.424-2.94,4.488.024,2.5.336,4.908,2.964,4.908a2.761,2.761,0,0,0,1.8-.648l1.008.84.5-.624Zm-1.224.06a1.743,1.743,0,0,1-1.08.336c-1.536.048-1.92-1.608-1.908-3.612.012-2.6.276-3.984,1.932-3.984S-7.506-6.9-7.482-4.3a7.225,7.225,0,0,1-.408,2.58l-.84-.672-.528.66ZM-2.226,0h.948V-6.672h-.948v4.284A2.24,2.24,0,0,1-2.5-1.212a1.358,1.358,0,0,1-1.14.588c-.672,0-.852-.3-.852-.864V-6.672h-.948v5.148c0,1.176.612,1.7,1.608,1.7A1.751,1.751,0,0,0-2.25-.876h.024Zm6.75,0H3.206V-.937H3.183A1.985,1.985,0,0,1,1.36.141,1.92,1.92,0,0,1-.025-.34a1.681,1.681,0,0,1-.5-1.271q0-1.7,1.957-1.98l1.781-.252q0-1.283-1.219-1.283A2.9,2.9,0,0,0,.06-4.389V-5.578a4.217,4.217,0,0,1,2.191-.562A1.994,1.994,0,0,1,4.524-3.9ZM3.212-2.947l-1.26.176a2,2,0,0,0-.882.284.83.83,0,0,0-.3.729.8.8,0,0,0,.272.624,1.055,1.055,0,0,0,.729.243A1.346,1.346,0,0,0,2.8-1.327a1.548,1.548,0,0,0,.407-1.1ZM1.5-9.2a4.9,4.9,0,0,1,.5-.023,1.566,1.566,0,0,1,.905.243.76.76,0,0,1,.354.659.848.848,0,0,1-.231.6.915.915,0,0,1-.577.287v.293H1.729v-.7q.674,0,.674-.422,0-.34-.521-.34a2.311,2.311,0,0,0-.387.053Zm5,2.527H5.574V0h.948V-4.464a1.435,1.435,0,0,1,.432-1.212,1.357,1.357,0,0,1,.936-.372c.768,0,1,.468,1,1.164V0h.948V-5.148a1.5,1.5,0,0,0-1.644-1.7,2.024,2.024,0,0,0-1.668.912H6.5ZM-21.444,14V5h-.948v9Zm2.436.156c-.264.66-.288,1.32-1.176,1.32a1.822,1.822,0,0,1-.708-.144v.84a2.261,2.261,0,0,0,.684.108,1.576,1.576,0,0,0,1.524-.876,12.425,12.425,0,0,0,.612-1.7l1.98-6.372h-.984l-1.548,5.784h-.024l-1.5-5.784h-.984Zm-.312-7.644h.8l1.572-1.692h-1.308Zm9.816,2.6c.024-1.368-.744-1.968-2.064-1.968a1.815,1.815,0,0,0-1.956,1.884c0,1.164.6,1.512,1.632,1.9.684.288,1.644.372,1.644,1.32,0,.816-.5,1.128-1.272,1.128-.888,0-1.164-.5-1.128-1.32h-.9a2.043,2.043,0,0,0,.372,1.428,2,2,0,0,0,1.656.7,2.007,2.007,0,0,0,2.256-2.052c0-1.248-.96-1.488-1.92-1.92-.648-.276-1.356-.384-1.356-1.248,0-.7.384-1.008,1.056-1.008.8,0,1.092.372,1.056,1.164ZM-3.845,14H-5.164v-.937h-.023A1.985,1.985,0,0,1-7.01,14.141,1.92,1.92,0,0,1-8.4,13.66a1.681,1.681,0,0,1-.5-1.271q0-1.7,1.957-1.98l1.781-.252q0-1.283-1.219-1.283a2.9,2.9,0,0,0-1.934.738V8.422a4.217,4.217,0,0,1,2.191-.562A1.994,1.994,0,0,1-3.845,10.1Zm-1.312-2.947-1.26.176a2,2,0,0,0-.882.284.83.83,0,0,0-.3.729.8.8,0,0,0,.272.624,1.055,1.055,0,0,0,.729.243,1.346,1.346,0,0,0,1.028-.437,1.548,1.548,0,0,0,.407-1.1ZM-6.875,4.8a4.9,4.9,0,0,1,.5-.023,1.566,1.566,0,0,1,.905.243.76.76,0,0,1,.354.659.848.848,0,0,1-.231.6.915.915,0,0,1-.577.287v.293H-6.64v-.7q.674,0,.674-.422,0-.34-.521-.34a2.311,2.311,0,0,0-.387.053Zm5,2.527H-2.8V14h.948V9.536a1.435,1.435,0,0,1,.432-1.212A1.357,1.357,0,0,1-.48,7.952c.768,0,1,.468,1,1.164V14h.948V8.852A1.5,1.5,0,0,0-.18,7.148a2.024,2.024,0,0,0-1.668.912h-.024Zm8.148,3.24L4.236,14H5.22l1.6-2.664L8.376,14H9.36L7.368,10.568l1.92-3.24H8.3l-1.476,2.4L5.34,7.328H4.356ZM13,14h.948V7.328H13v4.284a2.24,2.24,0,0,1-.276,1.176,1.358,1.358,0,0,1-1.14.588c-.672,0-.852-.3-.852-.864V7.328H9.78v5.148c0,1.176.612,1.7,1.608,1.7a1.751,1.751,0,0,0,1.584-1.056H13Zm6.75,0H18.428v-.937H18.4a1.985,1.985,0,0,1-1.822,1.078,1.92,1.92,0,0,1-1.386-.48,1.681,1.681,0,0,1-.5-1.271q0-1.7,1.957-1.98l1.781-.252q0-1.283-1.219-1.283a2.9,2.9,0,0,0-1.934.738V8.422a4.217,4.217,0,0,1,2.191-.562A1.994,1.994,0,0,1,19.746,10.1Zm-1.312-2.947-1.26.176a2,2,0,0,0-.882.284.83.83,0,0,0-.3.729.8.8,0,0,0,.272.624,1.055,1.055,0,0,0,.729.243,1.346,1.346,0,0,0,1.028-.437,1.548,1.548,0,0,0,.407-1.1Zm.387-5.08,1.055-1.441h1.283L19.746,5.973Zm.451.891h-.92l-.926-.838-.908.838h-.891L16.922,5.4h1.055Zm2.616-1.347h-.936V7.328h-.924v.8h.924v4.776c0,1.008.42,1.1.984,1.092H22.98v-.8h-.636c-.528,0-.444-.288-.444-.516V8.132H23v-.8H21.888Z" transform="translate(-992 -5616)" fill="#4e443b"/>
                                        <path data-idr="Path_3449" data-name="Path 3449" d="M-4.211-3.819a7.336,7.336,0,0,0,.22,2.054.887.887,0,0,0,.9.712.874.874,0,0,0,.894-.712,7.6,7.6,0,0,0,.212-2.054A7.517,7.517,0,0,0-2.194-5.9a.867.867,0,0,0-.894-.677.879.879,0,0,0-.9.677A7.254,7.254,0,0,0-4.211-3.819Zm1.123-4.023A2.2,2.2,0,0,1-1-6.794,6.061,6.061,0,0,1-.4-3.819,6.028,6.028,0,0,1-1-.849,2.2,2.2,0,0,1-3.088.193,2.2,2.2,0,0,1-5.175-.849a6.028,6.028,0,0,1-.6-2.97,6.061,6.061,0,0,1,.6-2.976A2.2,2.2,0,0,1-3.088-7.842Zm4.9,5.758a1.479,1.479,0,0,0,.348.771.985.985,0,0,0,.75.271,1.011,1.011,0,0,0,.865-.4,1.642,1.642,0,0,0,.3-1.007A1.753,1.753,0,0,0,3.8-3.456a.975.975,0,0,0-.868-.411,1.49,1.49,0,0,0-.482.07.959.959,0,0,0-.541.478L.534-3.384l.547-4.3H5.366v1.3H2.185l-.279,1.7a3.194,3.194,0,0,1,.552-.306,2.336,2.336,0,0,1,.81-.124,2.431,2.431,0,0,1,1.684.65,2.419,2.419,0,0,1,.719,1.891A2.968,2.968,0,0,1,4.98-.645,2.516,2.516,0,0,1,2.909.2a2.749,2.749,0,0,1-1.824-.6A2.317,2.317,0,0,1,.29-2.084Z" transform="translate(-992 -5669.623)" fill="#4e443b"/>
                                        <path data-idr="Path_3451" data-name="Path 3451" d="M-15.042-4.62h-3v.9h2c.012,1.428-.156,3.12-2,3.036-1.776-.084-1.7-2.472-1.7-3.84,0-1.536.024-3.792,1.992-3.756,1.14.024,1.608.792,1.62,1.9h1.008A2.518,2.518,0,0,0-17.8-9.18c-2.6,0-2.976,2.52-2.976,4.62s.2,4.776,2.88,4.776a2,2,0,0,0,2.064-1.548h.024v1.4h.768ZM-12.882,0V-6.672h-.948V0Zm0-7.8V-9h-.948v1.2Zm3.7,5.82A1.22,1.22,0,0,1-10.338-.624c-.768,0-.936-.432-.936-1.1a1.189,1.189,0,0,1,.588-1.152c.5-.24,1.032-.444,1.5-.72ZM-7.626-.7a1.166,1.166,0,0,1-.408-.012c-.192-.1-.168-.336-.168-.5V-5.04a1.6,1.6,0,0,0-1.812-1.812c-1.344,0-2.028.6-1.98,1.98h.852c-.012-.78.108-1.176.972-1.176.768,0,1.056.288,1.056,1.044,0,.348.024.612-.18.768-.12.1-1.464.6-2,.84a1.706,1.706,0,0,0-.96,1.62c0,1.212.384,1.956,1.716,1.956A1.693,1.693,0,0,0-9.066-.9h.024c.1.912.4.984,1.2.948A1.4,1.4,0,0,1-7.626,0Zm5.112-2.868c0-2.016-.744-3.288-2.388-3.288S-7.29-5.58-7.29-3.564C-7.29-.684-6.342.18-4.9.18-3.438.18-2.514-.672-2.514-3.564Zm-.984.3c0,1.572-.276,2.64-1.4,2.64-1.1,0-1.4-1.068-1.4-2.64,0-2.016.432-2.784,1.4-2.784C-3.906-6.048-3.5-5.28-3.5-3.264Zm5.22-1.2a1.435,1.435,0,0,1,.432-1.212,1.357,1.357,0,0,1,.936-.372c.768,0,1,.468,1,1.164V0h.948V-5.148a1.5,1.5,0,0,0-1.644-1.7,1.952,1.952,0,0,0-1.644.912H1.722V-9H.774V0h.948ZM8.742-1.98A1.22,1.22,0,0,1,7.59-.624c-.768,0-.936-.432-.936-1.1A1.189,1.189,0,0,1,7.242-2.88c.5-.24,1.032-.444,1.5-.72ZM10.3-.7a1.166,1.166,0,0,1-.408-.012c-.192-.1-.168-.336-.168-.5V-5.04A1.6,1.6,0,0,0,7.914-6.852c-1.344,0-2.028.6-1.98,1.98h.852c-.012-.78.108-1.176.972-1.176.768,0,1.056.288,1.056,1.044,0,.348.024.612-.18.768-.12.1-1.464.6-2,.84a1.706,1.706,0,0,0-.96,1.62C5.67-.564,6.054.18,7.386.18A1.693,1.693,0,0,0,8.862-.9h.024c.1.912.4.984,1.2.948A1.4,1.4,0,0,1,10.3,0ZM6.39-9.18,7.962-7.488h.8L7.7-9.18Zm5.436,2.508H10.9V0h.948V-4.464a1.435,1.435,0,0,1,.432-1.212,1.357,1.357,0,0,1,.936-.372c.768,0,1,.468,1,1.164V0h.948V-5.148a1.5,1.5,0,0,0-1.644-1.7,2.024,2.024,0,0,0-1.668.912h-.024Zm6.432.624c1.056,0,1.332,1.248,1.332,2.568,0,1.068.012,2.856-1.428,2.856-.936,0-1.212-1.08-1.212-2.712C16.95-4.236,17-6.048,18.258-6.048Zm1.332.132h-.024a1.617,1.617,0,0,0-1.488-.936c-1.764,0-2.112,2.064-2.112,3.468C15.966-.7,16.842.18,18.1.18a1.569,1.569,0,0,0,1.44-.96h.024c-.012.732.144,2.244-1.392,2.244A.908.908,0,0,1,17.13.636h-.924A1.775,1.775,0,0,0,18.2,2.268a2.066,2.066,0,0,0,1.836-.924,3.637,3.637,0,0,0,.5-2.148V-6.672H19.59Z" transform="translate(-924 -5610)" fill="#4e443b"/>
                                        <path data-idr="Path_3450" data-name="Path 3450" d="M-4.211-3.819a7.336,7.336,0,0,0,.22,2.054.887.887,0,0,0,.9.712.874.874,0,0,0,.894-.712,7.6,7.6,0,0,0,.212-2.054A7.517,7.517,0,0,0-2.194-5.9a.867.867,0,0,0-.894-.677.879.879,0,0,0-.9.677A7.254,7.254,0,0,0-4.211-3.819Zm1.123-4.023A2.2,2.2,0,0,1-1-6.794,6.061,6.061,0,0,1-.4-3.819,6.028,6.028,0,0,1-1-.849,2.2,2.2,0,0,1-3.088.193,2.2,2.2,0,0,1-5.175-.849a6.028,6.028,0,0,1-.6-2.97,6.061,6.061,0,0,1,.6-2.976A2.2,2.2,0,0,1-3.088-7.842ZM1.88-2.465a1.527,1.527,0,0,0,.338,1.026,1.079,1.079,0,0,0,.859.4.954.954,0,0,0,.8-.384,1.6,1.6,0,0,0,.293-1A1.491,1.491,0,0,0,3.84-3.467a1.066,1.066,0,0,0-.816-.363,1.09,1.09,0,0,0-.693.236A1.338,1.338,0,0,0,1.88-2.465ZM4.034-5.828a.781.781,0,0,0-.145-.414.841.841,0,0,0-.747-.365,1.1,1.1,0,0,0-1.063.838A5.2,5.2,0,0,0,1.842-4.4,1.718,1.718,0,0,1,2.5-4.9a2.229,2.229,0,0,1,.859-.156,2.233,2.233,0,0,1,1.7.7,2.518,2.518,0,0,1,.663,1.8,3.037,3.037,0,0,1-.65,1.923A2.4,2.4,0,0,1,3.056.2a2.324,2.324,0,0,1-2.17-1.23A5.015,5.015,0,0,1,.344-3.507a11.284,11.284,0,0,1,.075-1.45A4.435,4.435,0,0,1,.94-6.612a2.666,2.666,0,0,1,.873-.908A2.354,2.354,0,0,1,3.1-7.863a2.557,2.557,0,0,1,1.729.556,2.114,2.114,0,0,1,.725,1.48Z" transform="translate(-924 -5669.623)" fill="#4e443b"/>
                                        <rect data-idr="Rectangle_131" data-name="Rectangle 131" width="151.963" height="20.292" transform="translate(-1365 -5590)" fill="#f6f4e8"/>
                                        <path data-idr="Path_3457" data-name="Path 3457" d="M-38.838,0V-3.12l.936-1.224L-35.466,0h1.224l-2.952-5.232L-34.326-9h-1.248l-3.252,4.62h-.024V-9h-1V0Zm6.54-4.464a1.435,1.435,0,0,1,.432-1.212,1.357,1.357,0,0,1,.936-.372c.768,0,1,.468,1,1.164V0h.948V-5.148a1.5,1.5,0,0,0-1.644-1.7,1.952,1.952,0,0,0-1.644.912H-32.3V-9h-.948V0h.948Zm9.564.9c0-2.016-.744-3.288-2.388-3.288S-27.51-5.58-27.51-3.564c0,2.88.948,3.744,2.388,3.744C-23.658.18-22.734-.672-22.734-3.564Zm-.984.3c0,1.572-.276,2.64-1.4,2.64-1.1,0-1.4-1.068-1.4-2.64,0-2.016.432-2.784,1.4-2.784C-24.126-6.048-23.718-5.28-23.718-3.264ZM-16.632,0H-17.95V-.937h-.023A1.985,1.985,0,0,1-19.8.141a1.92,1.92,0,0,1-1.386-.48,1.681,1.681,0,0,1-.5-1.271q0-1.7,1.957-1.98l1.781-.252q0-1.283-1.219-1.283a2.9,2.9,0,0,0-1.934.738V-5.578a4.217,4.217,0,0,1,2.191-.562A1.994,1.994,0,0,1-16.632-3.9Zm-1.312-2.947-1.26.176a2,2,0,0,0-.882.284.83.83,0,0,0-.3.729.8.8,0,0,0,.272.624,1.055,1.055,0,0,0,.729.243,1.346,1.346,0,0,0,1.028-.437,1.548,1.548,0,0,0,.407-1.1ZM-19.661-9.2a4.9,4.9,0,0,1,.5-.023,1.566,1.566,0,0,1,.905.243.76.76,0,0,1,.354.659.848.848,0,0,1-.231.6.915.915,0,0,1-.577.287v.293h-.715v-.7q.674,0,.674-.422,0-.34-.521-.34a2.311,2.311,0,0,0-.387.053Zm5.6,2.527h-.924V0h.948V-4.464A1.435,1.435,0,0,1-13.6-5.676a1.357,1.357,0,0,1,.936-.372c.768,0,1,.468,1,1.164V0h.948V-5.148a1.5,1.5,0,0,0-1.644-1.7,2.024,2.024,0,0,0-1.668.912h-.024Zm7.032.624c1.056,0,1.332,1.248,1.332,2.568,0,1.068.012,2.856-1.428,2.856-.936,0-1.212-1.08-1.212-2.712C-8.334-4.236-8.286-6.048-7.026-6.048Zm1.332.132h-.024a1.617,1.617,0,0,0-1.488-.936c-1.764,0-2.112,2.064-2.112,3.468C-9.318-.7-8.442.18-7.182.18a1.569,1.569,0,0,0,1.44-.96h.024c-.012.732.144,2.244-1.392,2.244A.908.908,0,0,1-8.154.636h-.924A1.775,1.775,0,0,0-7.086,2.268,2.066,2.066,0,0,0-5.25,1.344,3.637,3.637,0,0,0-4.746-.8V-6.672h-.948ZM2.97-3.684A3.394,3.394,0,0,0,4.422-6.492,2.218,2.218,0,0,0,2.106-9a2.29,2.29,0,0,0-1.788.708,2.834,2.834,0,0,0-.576,1.8v.552h1C.714-6.888.822-8.1,2.058-8.1c1.02,0,1.332.672,1.332,1.584A2.3,2.3,0,0,1,2.454-4.5L.738-2.844a3.128,3.128,0,0,0-.708.9A5.258,5.258,0,0,0-.33,0H4.506V-.9H.7A1.678,1.678,0,0,1,1.35-2.208ZM8.6-3.3v-1H5.682v1Zm2.8-.888c1.512-.012,2.112.288,2.112,1.86A1.412,1.412,0,0,1,12.054-.72c-1.284,0-1.56-.96-1.476-1.92H9.594C9.558-1.008,10.17.18,11.97.18S14.5-.972,14.5-2.652A1.915,1.915,0,0,0,13-4.728v-.024a1.852,1.852,0,0,0,1.26-2.016A2.107,2.107,0,0,0,12.018-9c-1.632,0-2.3,1.152-2.256,2.664h.948c0-.924.156-1.764,1.284-1.764,1,0,1.26.6,1.26,1.476,0,1.656-1.068,1.488-1.86,1.536Zm8.544-2.484h-.924V0h.948V-4.464a1.435,1.435,0,0,1,.432-1.212,1.357,1.357,0,0,1,.936-.372c.768,0,1,.468,1,1.164V0h.948V-5.148a1.5,1.5,0,0,0-1.644-1.7,2.024,2.024,0,0,0-1.668.912h-.024Zm7.032.624C28.026-6.048,28.3-4.8,28.3-3.48c0,1.068.012,2.856-1.428,2.856-.936,0-1.212-1.08-1.212-2.712C25.662-4.236,25.71-6.048,26.97-6.048Zm1.332.132h-.024a1.617,1.617,0,0,0-1.488-.936c-1.764,0-2.112,2.064-2.112,3.468C24.678-.7,25.554.18,26.814.18a1.569,1.569,0,0,0,1.44-.96h.024c-.012.732.144,2.244-1.392,2.244A.908.908,0,0,1,25.842.636h-.924A1.775,1.775,0,0,0,26.91,2.268a2.066,2.066,0,0,0,1.836-.924A3.637,3.637,0,0,0,29.25-.8V-6.672H28.3Zm5.28,3.936A1.22,1.22,0,0,1,32.43-.624c-.768,0-.936-.432-.936-1.1a1.189,1.189,0,0,1,.588-1.152c.5-.24,1.032-.444,1.5-.72ZM35.142-.7a1.166,1.166,0,0,1-.408-.012c-.192-.1-.168-.336-.168-.5V-5.04a1.6,1.6,0,0,0-1.812-1.812c-1.344,0-2.028.6-1.98,1.98h.852c-.012-.78.108-1.176.972-1.176.768,0,1.056.288,1.056,1.044,0,.348.024.612-.18.768-.12.1-1.464.6-2,.84a1.706,1.706,0,0,0-.96,1.62c0,1.212.384,1.956,1.716,1.956A1.693,1.693,0,0,0,33.7-.9h.024c.1.912.4.984,1.2.948A1.4,1.4,0,0,1,35.142,0ZM31.23-9.18,32.8-7.488h.8L32.538-9.18ZM37.65.156c-.264.66-.288,1.32-1.176,1.32a1.822,1.822,0,0,1-.708-.144v.84a2.261,2.261,0,0,0,.684.108A1.576,1.576,0,0,0,37.974,1.4a12.425,12.425,0,0,0,.612-1.7l1.98-6.372h-.984L38.034-.888H38.01l-1.5-5.784h-.984Z" transform="translate(-1289 -5576)" fill="#4e443b"/>
                                        <path data-idr="Path_3384" data-name="Path 3384" d="M0,0H176V20.292H0Z" transform="translate(-1211 -5590)" fill="#f6f4e8"/>
                                        <path data-idr="Path_3458" data-name="Path 3458" d="M-40.842,0V-3.12l.936-1.224L-37.47,0h1.224L-39.2-5.232-36.33-9h-1.248L-40.83-4.38h-.024V-9h-1V0Zm6.54-4.464a1.435,1.435,0,0,1,.432-1.212,1.357,1.357,0,0,1,.936-.372c.768,0,1,.468,1,1.164V0h.948V-5.148a1.5,1.5,0,0,0-1.644-1.7,1.952,1.952,0,0,0-1.644.912H-34.3V-9h-.948V0h.948Zm9.564.9c0-2.016-.744-3.288-2.388-3.288s-2.388,1.272-2.388,3.288c0,2.88.948,3.744,2.388,3.744C-25.662.18-24.738-.672-24.738-3.564Zm-.984.3c0,1.572-.276,2.64-1.4,2.64-1.1,0-1.4-1.068-1.4-2.64,0-2.016.432-2.784,1.4-2.784C-26.13-6.048-25.722-5.28-25.722-3.264ZM-18.636,0h-1.318V-.937h-.023A1.985,1.985,0,0,1-21.8.141a1.92,1.92,0,0,1-1.386-.48,1.681,1.681,0,0,1-.5-1.271q0-1.7,1.957-1.98l1.781-.252q0-1.283-1.219-1.283a2.9,2.9,0,0,0-1.934.738V-5.578a4.217,4.217,0,0,1,2.191-.562A1.994,1.994,0,0,1-18.636-3.9Zm-1.312-2.947-1.26.176a2,2,0,0,0-.882.284.83.83,0,0,0-.3.729.8.8,0,0,0,.272.624,1.055,1.055,0,0,0,.729.243,1.346,1.346,0,0,0,1.028-.437,1.548,1.548,0,0,0,.407-1.1ZM-21.665-9.2a4.9,4.9,0,0,1,.5-.023,1.566,1.566,0,0,1,.905.243.76.76,0,0,1,.354.659.848.848,0,0,1-.231.6.915.915,0,0,1-.577.287v.293h-.715v-.7q.674,0,.674-.422,0-.34-.521-.34a2.311,2.311,0,0,0-.387.053Zm5.6,2.527h-.924V0h.948V-4.464a1.435,1.435,0,0,1,.432-1.212,1.357,1.357,0,0,1,.936-.372c.768,0,1,.468,1,1.164V0h.948V-5.148a1.5,1.5,0,0,0-1.644-1.7,2.024,2.024,0,0,0-1.668.912h-.024Zm7.032.624C-7.974-6.048-7.7-4.8-7.7-3.48c0,1.068.012,2.856-1.428,2.856-.936,0-1.212-1.08-1.212-2.712C-10.338-4.236-10.29-6.048-9.03-6.048Zm1.332.132h-.024A1.617,1.617,0,0,0-9.21-6.852c-1.764,0-2.112,2.064-2.112,3.468C-11.322-.7-10.446.18-9.186.18a1.569,1.569,0,0,0,1.44-.96h.024c-.012.732.144,2.244-1.392,2.244A.908.908,0,0,1-10.158.636h-.924A1.775,1.775,0,0,0-9.09,2.268a2.066,2.066,0,0,0,1.836-.924A3.637,3.637,0,0,0-6.75-.8V-6.672H-7.7ZM-.054,0h1V-9H.162C.018-7.6-.69-7.356-1.974-7.332v.78h1.92ZM6.594-3.3v-1H3.678v1Zm4.368-.384a3.394,3.394,0,0,0,1.452-2.808A2.218,2.218,0,0,0,10.1-9a2.29,2.29,0,0,0-1.788.708,2.834,2.834,0,0,0-.576,1.8v.552h1c-.024-.948.084-2.16,1.32-2.16,1.02,0,1.332.672,1.332,1.584A2.3,2.3,0,0,1,10.446-4.5L8.73-2.844a3.128,3.128,0,0,0-.708.9A5.258,5.258,0,0,0,7.662,0H12.5V-.9h-3.8a1.678,1.678,0,0,1,.648-1.308Zm7.14-4.8h-.936v1.812h-.924v.8h.924v4.776c0,1.008.42,1.1.984,1.092h1.044V-.8h-.636c-.528,0-.444-.288-.444-.516V-5.868h1.1v-.8H18.1Zm3.192,4.02a1.435,1.435,0,0,1,.432-1.212,1.357,1.357,0,0,1,.936-.372c.768,0,1,.468,1,1.164V0h.948V-5.148a1.5,1.5,0,0,0-1.644-1.7,1.952,1.952,0,0,0-1.644.912h-.024V-9h-.948V0h.948Zm7.62,2.484A1.22,1.22,0,0,1,27.762-.624c-.768,0-.936-.432-.936-1.1a1.189,1.189,0,0,1,.588-1.152c.5-.24,1.032-.444,1.5-.72ZM30.474-.7a1.166,1.166,0,0,1-.408-.012c-.192-.1-.168-.336-.168-.5V-5.04a1.6,1.6,0,0,0-1.812-1.812c-1.344,0-2.028.6-1.98,1.98h.852c-.012-.78.108-1.176.972-1.176.768,0,1.056.288,1.056,1.044,0,.348.024.612-.18.768-.12.1-1.464.6-2,.84a1.706,1.706,0,0,0-.96,1.62c0,1.212.384,1.956,1.716,1.956A1.692,1.692,0,0,0,29.034-.9h.024c.1.912.4.984,1.2.948A1.4,1.4,0,0,1,30.474,0ZM27.342-7.488h.8L29.718-9.18H28.41Zm5.256.816h-.924V0h.948V-4.464a1.435,1.435,0,0,1,.432-1.212,1.357,1.357,0,0,1,.936-.372c.768,0,1,.468,1,1.164V0h.948V-5.148a1.5,1.5,0,0,0-1.644-1.7,2.024,2.024,0,0,0-1.668.912H32.6Zm7.032.624c1.056,0,1.332,1.248,1.332,2.568,0,1.068.012,2.856-1.428,2.856-.936,0-1.212-1.08-1.212-2.712C38.322-4.236,38.37-6.048,39.63-6.048Zm1.332.132h-.024a1.617,1.617,0,0,0-1.488-.936c-1.764,0-2.112,2.064-2.112,3.468C37.338-.7,38.214.18,39.474.18a1.569,1.569,0,0,0,1.44-.96h.024c-.012.732.144,2.244-1.392,2.244A.908.908,0,0,1,38.5.636h-.924A1.775,1.775,0,0,0,39.57,2.268a2.066,2.066,0,0,0,1.836-.924A3.637,3.637,0,0,0,41.91-.8V-6.672h-.948Z" transform="translate(-1123 -5576)" fill="#4e443b"/>
                                        <path data-idr="Path_3383" data-name="Path 3383" d="M10,0H144.443V20.292H10Z" transform="translate(-1043 -5590)" fill="#f6f4e8"/>
                                        <path data-idr="Path_3459" data-name="Path 3459" d="M-40.842,0V-3.12l.936-1.224L-37.47,0h1.224L-39.2-5.232-36.33-9h-1.248L-40.83-4.38h-.024V-9h-1V0Zm6.54-4.464a1.435,1.435,0,0,1,.432-1.212,1.357,1.357,0,0,1,.936-.372c.768,0,1,.468,1,1.164V0h.948V-5.148a1.5,1.5,0,0,0-1.644-1.7,1.952,1.952,0,0,0-1.644.912H-34.3V-9h-.948V0h.948Zm9.564.9c0-2.016-.744-3.288-2.388-3.288s-2.388,1.272-2.388,3.288c0,2.88.948,3.744,2.388,3.744C-25.662.18-24.738-.672-24.738-3.564Zm-.984.3c0,1.572-.276,2.64-1.4,2.64-1.1,0-1.4-1.068-1.4-2.64,0-2.016.432-2.784,1.4-2.784C-26.13-6.048-25.722-5.28-25.722-3.264ZM-18.636,0h-1.318V-.937h-.023A1.985,1.985,0,0,1-21.8.141a1.92,1.92,0,0,1-1.386-.48,1.681,1.681,0,0,1-.5-1.271q0-1.7,1.957-1.98l1.781-.252q0-1.283-1.219-1.283a2.9,2.9,0,0,0-1.934.738V-5.578a4.217,4.217,0,0,1,2.191-.562A1.994,1.994,0,0,1-18.636-3.9Zm-1.312-2.947-1.26.176a2,2,0,0,0-.882.284.83.83,0,0,0-.3.729.8.8,0,0,0,.272.624,1.055,1.055,0,0,0,.729.243,1.346,1.346,0,0,0,1.028-.437,1.548,1.548,0,0,0,.407-1.1ZM-21.665-9.2a4.9,4.9,0,0,1,.5-.023,1.566,1.566,0,0,1,.905.243.76.76,0,0,1,.354.659.848.848,0,0,1-.231.6.915.915,0,0,1-.577.287v.293h-.715v-.7q.674,0,.674-.422,0-.34-.521-.34a2.311,2.311,0,0,0-.387.053Zm5.6,2.527h-.924V0h.948V-4.464a1.435,1.435,0,0,1,.432-1.212,1.357,1.357,0,0,1,.936-.372c.768,0,1,.468,1,1.164V0h.948V-5.148a1.5,1.5,0,0,0-1.644-1.7,2.024,2.024,0,0,0-1.668.912h-.024Zm7.032.624C-7.974-6.048-7.7-4.8-7.7-3.48c0,1.068.012,2.856-1.428,2.856-.936,0-1.212-1.08-1.212-2.712C-10.338-4.236-10.29-6.048-9.03-6.048Zm1.332.132h-.024A1.617,1.617,0,0,0-9.21-6.852c-1.764,0-2.112,2.064-2.112,3.468C-11.322-.7-10.446.18-9.186.18a1.569,1.569,0,0,0,1.44-.96h.024c-.012.732.144,2.244-1.392,2.244A.908.908,0,0,1-10.158.636h-.924A1.775,1.775,0,0,0-9.09,2.268a2.066,2.066,0,0,0,1.836-.924A3.637,3.637,0,0,0-6.75-.8V-6.672H-7.7ZM-.606-4.188C.906-4.2,1.506-3.9,1.506-2.328A1.412,1.412,0,0,1,.054-.72c-1.284,0-1.56-.96-1.476-1.92h-.984C-2.442-1.008-1.83.18-.03.18S2.5-.972,2.5-2.652A1.915,1.915,0,0,0,1-4.728v-.024a1.852,1.852,0,0,0,1.26-2.016A2.107,2.107,0,0,0,.018-9c-1.632,0-2.3,1.152-2.256,2.664h.948c0-.924.156-1.764,1.284-1.764,1,0,1.26.6,1.26,1.476,0,1.656-1.068,1.488-1.86,1.536Zm7.2.888v-1H3.678v1Zm4.128-4.14h.024v4.3H8.262ZM7.47-3.168v.924h3.276V0h1V-2.244h.8v-.9h-.8V-9H10.83ZM18.1-8.484h-.936v1.812h-.924v.8h.924v4.776c0,1.008.42,1.1.984,1.092h1.044V-.8h-.636c-.528,0-.444-.288-.444-.516V-5.868h1.1v-.8H18.1Zm3.192,4.02a1.435,1.435,0,0,1,.432-1.212,1.357,1.357,0,0,1,.936-.372c.768,0,1,.468,1,1.164V0h.948V-5.148a1.5,1.5,0,0,0-1.644-1.7,1.952,1.952,0,0,0-1.644.912h-.024V-9h-.948V0h.948Zm7.62,2.484A1.22,1.22,0,0,1,27.762-.624c-.768,0-.936-.432-.936-1.1a1.189,1.189,0,0,1,.588-1.152c.5-.24,1.032-.444,1.5-.72ZM30.474-.7a1.166,1.166,0,0,1-.408-.012c-.192-.1-.168-.336-.168-.5V-5.04a1.6,1.6,0,0,0-1.812-1.812c-1.344,0-2.028.6-1.98,1.98h.852c-.012-.78.108-1.176.972-1.176.768,0,1.056.288,1.056,1.044,0,.348.024.612-.18.768-.12.1-1.464.6-2,.84a1.706,1.706,0,0,0-.96,1.62c0,1.212.384,1.956,1.716,1.956A1.692,1.692,0,0,0,29.034-.9h.024c.1.912.4.984,1.2.948A1.4,1.4,0,0,1,30.474,0ZM27.342-7.488h.8L29.718-9.18H28.41Zm5.256.816h-.924V0h.948V-4.464a1.435,1.435,0,0,1,.432-1.212,1.357,1.357,0,0,1,.936-.372c.768,0,1,.468,1,1.164V0h.948V-5.148a1.5,1.5,0,0,0-1.644-1.7,2.024,2.024,0,0,0-1.668.912H32.6Zm7.032.624c1.056,0,1.332,1.248,1.332,2.568,0,1.068.012,2.856-1.428,2.856-.936,0-1.212-1.08-1.212-2.712C38.322-4.236,38.37-6.048,39.63-6.048Zm1.332.132h-.024a1.617,1.617,0,0,0-1.488-.936c-1.764,0-2.112,2.064-2.112,3.468C37.338-.7,38.214.18,39.474.18a1.569,1.569,0,0,0,1.44-.96h.024c-.012.732.144,2.244-1.392,2.244A.908.908,0,0,1,38.5.636h-.924A1.775,1.775,0,0,0,39.57,2.268a2.066,2.066,0,0,0,1.836-.924A3.637,3.637,0,0,0,41.91-.8V-6.672h-.948Z" transform="translate(-966 -5576)" fill="#4e443b"/>
                                        <path data-idr="Icon_awesome-user-tie" data-name="Icon awesome-user-tie" d="M10.1,11.546A5.773,5.773,0,1,0,4.33,5.773,5.772,5.772,0,0,0,10.1,11.546Zm4.321,1.47-2.156,8.632-1.443-6.134,1.443-2.526H7.938l1.443,2.526L7.938,21.648,5.782,13.016A6.051,6.051,0,0,0,0,19.05v1.876a2.165,2.165,0,0,0,2.165,2.165H18.04A2.165,2.165,0,0,0,20.2,20.926V19.05a6.051,6.051,0,0,0-5.782-6.034Z" transform="translate(-1256 -5659)" fill="#9a2327"/>
                                        <path data-idr="Icon_awesome-clipboard-list" data-name="Icon awesome-clipboard-list" d="M15.154,2.886H11.546a2.886,2.886,0,1,0-5.773,0H2.165A2.165,2.165,0,0,0,0,5.051V20.926a2.165,2.165,0,0,0,2.165,2.165H15.154a2.165,2.165,0,0,0,2.165-2.165V5.051A2.165,2.165,0,0,0,15.154,2.886ZM4.33,19.122A1.082,1.082,0,1,1,5.412,18.04,1.08,1.08,0,0,1,4.33,19.122Zm0-4.33A1.082,1.082,0,1,1,5.412,13.71,1.08,1.08,0,0,1,4.33,14.793Zm0-4.33A1.082,1.082,0,1,1,5.412,9.381,1.08,1.08,0,0,1,4.33,10.463ZM8.659,1.8A1.082,1.082,0,1,1,7.577,2.886,1.08,1.08,0,0,1,8.659,1.8Zm5.773,16.6a.362.362,0,0,1-.361.361H7.577a.362.362,0,0,1-.361-.361v-.722a.362.362,0,0,1,.361-.361h6.494a.362.362,0,0,1,.361.361Zm0-4.33a.362.362,0,0,1-.361.361H7.577a.362.362,0,0,1-.361-.361V13.35a.362.362,0,0,1,.361-.361h6.494a.362.362,0,0,1,.361.361Zm0-4.33a.362.362,0,0,1-.361.361H7.577a.362.362,0,0,1-.361-.361V9.02a.362.362,0,0,1,.361-.361h6.494a.362.362,0,0,1,.361.361Z" transform="translate(-1162 -5659)" fill="#9a2327"/>
                                        <g data-idr="Group_307" data-name="Group 307" transform="translate(37.478 201.533)">
                                        <path data-idr="Path_3359" data-name="Path 3359" d="M71.909,0H82.783a.815.815,0,0,1,.809.809V10.858a.815.815,0,0,1-.809.809H71.909a.815.815,0,0,1-.809-.809V.809A.815.815,0,0,1,71.909,0Z" transform="translate(-1033.719 -5857.533)" fill="#9a2327"/>
                                        <path data-idr="Path_3360" data-name="Path 3360" d="M9.606,26.887V18.564a.756.756,0,0,0-.764-.764H4.337a.775.775,0,0,0-.6.29L0,22.7v6.124a.756.756,0,0,0,.764.764H3.146a2.718,2.718,0,0,1,2.169-1.1,2.676,2.676,0,0,1,2.169,1.1H16.31a2.718,2.718,0,0,1,2.169-1.1,2.676,2.676,0,0,1,2.169,1.1h1.97a.743.743,0,0,0,.733-.733v-.473a.724.724,0,0,0-.733-.733H10.369a.766.766,0,0,1-.764-.764Zm-2.779-2.81H2.841a.886.886,0,0,1-.886-.886v-.229a.977.977,0,0,1,.2-.565l2.107-2.611a.883.883,0,0,1,.687-.336H6.811a.886.886,0,0,1,.886.886v2.841a.868.868,0,0,1-.87.9Z" transform="translate(-973.478 -5872.615)" fill="#9a2327"/>
                                        <circle data-idr="Ellipse_15" data-name="Ellipse 15" cx="1.909" cy="1.909" r="1.909" transform="translate(-970.102 -5843.315)" fill="#9a2327"/>
                                        <circle data-idr="Ellipse_16" data-name="Ellipse 16" cx="1.909" cy="1.909" r="1.909" transform="translate(-956.893 -5843.315)" fill="#9a2327"/>
                                        </g>
                                        <g data-idr="Group_306" data-name="Group 306" transform="translate(41.435 201.432)">
                                        <path data-idr="Path_3361" data-name="Path 3361" d="M55.647,2.484,51.383,0,42.068,5.427l4.263,2.484Z" transform="translate(-1157.714 -5860.432)" fill="#9a2327"/>
                                        <path data-idr="Path_3362" data-name="Path 3362" d="M161.763,64.3l-9.315,5.427,3.475,2.025,9.315-5.427Z" transform="translate(-1262.254 -5921.335)" fill="#9a2327"/>
                                        <path data-idr="Path_3363" data-name="Path 3363" d="M233.131,134.034v10.854l9.31-5.424V128.61Z" transform="translate(-1338.669 -5982.238)" fill="#9a2327"/>
                                        <path data-idr="Path_3364" data-name="Path 3364" d="M27.169,139.464l9.31,5.424V134.034l-9.31-5.424Z" transform="translate(-1143.604 -5982.238)" fill="#9a2327"/>
                                        </g>
                                        <path data-idr="Subtraction_2" data-name="Subtraction 2" d="M21.942,20.442H1.079A1.089,1.089,0,0,1,0,19.346V1.1A1.089,1.089,0,0,1,1.079,0H6.115A1.089,1.089,0,0,1,7.194,1.1v8.957l6.255-4.039a1.06,1.06,0,0,1,.576-.173,1.091,1.091,0,0,1,1.083,1.1v3.115l6.255-4.039a1.061,1.061,0,0,1,.576-.173,1.091,1.091,0,0,1,1.083,1.1V19.346A1.089,1.089,0,0,1,21.942,20.442Zm-6.835-7.357V16.33h3.2V13.085Zm-7.673,0V16.33h3.2V13.085Z" transform="translate(-1004 -5657)" fill="#9a2327"/>
                                        <path data-idr="Icon_zocial-email" data-name="Icon zocial-email" d="M.072,18.958V5.515q0-.023.07-.443L8.054,11.84.165,19.425a1.978,1.978,0,0,1-.093-.467Zm1.05-14.82a1.006,1.006,0,0,1,.4-.07H22.827a1.322,1.322,0,0,1,.42.07l-7.935,6.791-1.05.84-2.077,1.7-2.077-1.7-1.05-.84Zm.023,16.2L9.1,12.7l3.081,2.5,3.081-2.5,7.958,7.632a1.121,1.121,0,0,1-.4.07H1.519a1.057,1.057,0,0,1-.373-.07Zm15.17-8.5L24.2,5.072a1.393,1.393,0,0,1,.07.443V18.958a1.789,1.789,0,0,1-.07.467Z" transform="translate(-1336.072 -5659.068)" fill="#9a2327"/>
                                    </g>
                                </svg>
                                <svg class="ln_ko" xmlns="http://www.w3.org/2000/svg" width="481.493" height="112.87" viewBox="0 0 481.493 112.87">
                                    <g data-idr="Group_319" data-name="Group 319" transform="translate(1365 5682.579)">
                                        <path data-idr="Path_3377" data-name="Path 3377" d="M0,0H66L81.493,44.992,66,90H0" transform="translate(-1365 -5682.579)" fill="#f6f4e8"/>
                                        <path data-idr="Path_3377-2" data-name="Path 3377" d="M0,0H86l15.493,44.992L86,90H0L15.369,45.088Z" transform="translate(-1297 -5682.579)" fill="#f6f4e8"/>
                                        <path data-idr="Path_3377-3" data-name="Path 3377" d="M0,0H96l15.493,44.992L96,90H0L15.369,45.088Z" transform="translate(-1209 -5682.579)" fill="#f6f4e8"/>
                                        <path data-idr="Path_3377-4" data-name="Path 3377" d="M10,0H86l15.493,44.992L86,90H10L25.369,45.088Z" transform="translate(-1121 -5682.579)" fill="#f6f4e8"/>
                                        <path data-idr="Path_3377-5" data-name="Path 3377" d="M10,0H76L91.493,44.992,76,90H10L25.369,45.088Z" transform="translate(-1043 -5682.579)" fill="#f6f4e8"/>
                                        <path data-idr="Path_3377-6" data-name="Path 3377" d="M10,0H76L91.493,44.992,76,90H10L25.369,45.088Z" transform="translate(-975 -5682.579)" fill="#f6f4e8"/>
                                        <path data-idr="Path_3471" data-name="Path 3471" d="M-9.48-5.807V-9.838H-2.52v4.031Zm6.094-3.252H-8.613v2.484h5.227ZM-6.357-1.395V-3.721h-4.887V-4.5H-.756v.779H-5.5v2.326ZM-9.586.7V-2.689h.873V-.082h6.469V.7ZM9.4,1.055v-11.3h.873v11.3ZM4.594-4a3.081,3.081,0,0,1-2.127-.768A2.48,2.48,0,0,1,1.605-6.7a2.479,2.479,0,0,1,.855-1.916,3.061,3.061,0,0,1,2.133-.773,3.051,3.051,0,0,1,2.13.779A2.481,2.481,0,0,1,7.582-6.7a2.485,2.485,0,0,1-.855,1.937A3.082,3.082,0,0,1,4.594-4Zm0-4.617a2.139,2.139,0,0,0-1.488.539,1.772,1.772,0,0,0-.6,1.377A1.757,1.757,0,0,0,3.12-5.312a2.161,2.161,0,0,0,1.474.536,2.16,2.16,0,0,0,1.488-.536,1.768,1.768,0,0,0,.6-1.386,1.767,1.767,0,0,0-.6-1.383A2.161,2.161,0,0,0,4.594-8.613ZM.861-1,.779-1.752q1.512,0,4.222-.059t3.6-.135l.053.756q-.92.076-3.63.135T.861-1Z" transform="translate(-1324 -5609)" fill="#4e443b"/>
                                        <path data-idr="Path_3460" data-name="Path 3460" d="M-4.211-3.819a7.336,7.336,0,0,0,.22,2.054.887.887,0,0,0,.9.712.874.874,0,0,0,.894-.712,7.6,7.6,0,0,0,.212-2.054A7.517,7.517,0,0,0-2.194-5.9a.867.867,0,0,0-.894-.677.879.879,0,0,0-.9.677A7.254,7.254,0,0,0-4.211-3.819Zm1.123-4.023A2.2,2.2,0,0,1-1-6.794,6.061,6.061,0,0,1-.4-3.819,6.028,6.028,0,0,1-1-.849,2.2,2.2,0,0,1-3.088.193,2.2,2.2,0,0,1-5.175-.849a6.028,6.028,0,0,1-.6-2.97,6.061,6.061,0,0,1,.6-2.976A2.2,2.2,0,0,1-3.088-7.842ZM.763-5.371V-6.413a6.751,6.751,0,0,0,1.013-.1,1.427,1.427,0,0,0,.75-.408,1.345,1.345,0,0,0,.3-.559,1.285,1.285,0,0,0,.059-.312H4.163V0H2.594V-5.371Z" transform="translate(-1324 -5669.623)" fill="#4e443b"/>
                                        <path data-idr="Path_3470" data-name="Path 3470" d="M-13.69,1.055v-11.3h.873v11.3Zm-5.016-11.279h.873v1.5h2.941v.779h-6.744v-.779h2.93Zm.416,7.318a3.015,3.015,0,0,1-2.01-.633,1.963,1.963,0,0,1-.75-1.559,1.949,1.949,0,0,1,.762-1.55,3.052,3.052,0,0,1,2.021-.636,3.052,3.052,0,0,1,2.021.636,1.949,1.949,0,0,1,.762,1.55,1.946,1.946,0,0,1-.771,1.556A3.1,3.1,0,0,1-18.289-2.906Zm.023-3.633a2.194,2.194,0,0,0-1.395.41A1.261,1.261,0,0,0-20.182-5.1a1.269,1.269,0,0,0,.519,1.037,2.192,2.192,0,0,0,1.4.41,2.2,2.2,0,0,0,1.4-.413A1.266,1.266,0,0,0-16.344-5.1a1.261,1.261,0,0,0-.524-1.028A2.2,2.2,0,0,0-18.266-6.539ZM-22.1-.8l-.105-.779h.686q5.713,0,7.137-.111l.035.756Q-16.356-.8-22.1-.8ZM-2.091-6.334v2.6h-.873v-6.516h.873v3.135H-.386v.779Zm-8.18,1.9v-5.2h5.121v5.2Zm4.26-4.424h-3.4v3.645h3.4ZM-5.542.891A5.1,5.1,0,0,1-8.275.278a1.825,1.825,0,0,1-.964-1.585,1.812,1.812,0,0,1,.961-1.579,5.139,5.139,0,0,1,2.736-.606,5.12,5.12,0,0,1,2.736.606A1.814,1.814,0,0,1-1.85-1.307,1.826,1.826,0,0,1-2.808.278,5.083,5.083,0,0,1-5.542.891Zm0-3.639a4.179,4.179,0,0,0-2.051.407A1.19,1.19,0,0,0-8.3-1.307,1.187,1.187,0,0,0-7.59-.27a4.208,4.208,0,0,0,2.048.4A4.237,4.237,0,0,0-3.5-.267a1.185,1.185,0,0,0,.715-1.04,1.187,1.187,0,0,0-.709-1.037A4.2,4.2,0,0,0-5.542-2.748ZM9.251-4.875v5.93H8.378v-11.3h.873v4.594h1.957v.779ZM6.72-1.811A9.29,9.29,0,0,1,4.95-3.63a6.473,6.473,0,0,1-1.061-1.9,6.907,6.907,0,0,1-1.055,2A9.041,9.041,0,0,1,1.083-1.67L.409-2.256A7.068,7.068,0,0,0,2.618-4.649a5.949,5.949,0,0,0,.826-2.968V-9.469h.873v1.811a5.608,5.608,0,0,0,.817,2.871A6.8,6.8,0,0,0,7.335-2.5Zm5.218-6.264v-.768h2.906v-1.465h.873v1.465h2.906v.768Zm8.771,2.221V-3.4h-.873v-6.85h.873v3.6H22.3v.8ZM15.3-3.686a3.424,3.424,0,0,1-2.045-.536,1.647,1.647,0,0,1-.738-1.392,1.662,1.662,0,0,1,.747-1.4,3.426,3.426,0,0,1,2.048-.542,3.426,3.426,0,0,1,2.048.542,1.662,1.662,0,0,1,.747,1.4,1.646,1.646,0,0,1-.747,1.386A3.448,3.448,0,0,1,15.3-3.686Zm.012-3.129a2.587,2.587,0,0,0-1.421.334,1,1,0,0,0-.513.867.984.984,0,0,0,.51.855,2.621,2.621,0,0,0,1.424.328,2.622,2.622,0,0,0,1.424-.328.984.984,0,0,0,.51-.855,1,1,0,0,0-.513-.867A2.587,2.587,0,0,0,15.313-6.814Zm1.9,7.787A5.582,5.582,0,0,1,14.484.431a1.654,1.654,0,0,1-.946-1.485,1.642,1.642,0,0,1,.943-1.479,5.631,5.631,0,0,1,2.736-.536,5.672,5.672,0,0,1,2.742.533A1.64,1.64,0,0,1,20.9-1.055,1.651,1.651,0,0,1,19.954.434,5.625,5.625,0,0,1,17.217.973Zm0-3.3q-2.748,0-2.748,1.271T17.217.229q2.766,0,2.766-1.283T17.217-2.326ZM-8.23,17.055V5.752h.873v11.3ZM-16.4,8.342V7.551h3v-1.8h.873v1.8h3.018v.791Zm3.434,5.906a2.94,2.94,0,0,1-2.051-.721,2.313,2.313,0,0,1-.8-1.787,2.325,2.325,0,0,1,.8-1.8,2.957,2.957,0,0,1,2.063-.721,2.944,2.944,0,0,1,2.054.724,2.337,2.337,0,0,1,.8,1.808,2.286,2.286,0,0,1-.8,1.787A3,3,0,0,1-12.97,14.248Zm.012-4.283a2.014,2.014,0,0,0-1.43.524,1.653,1.653,0,0,0-.562,1.251,1.634,1.634,0,0,0,.565,1.242,2.023,2.023,0,0,0,1.427.521,2.032,2.032,0,0,0,1.438-.524,1.637,1.637,0,0,0,.565-1.239,1.652,1.652,0,0,0-.565-1.248A2.026,2.026,0,0,0-12.959,9.965Zm14.048.744A4.19,4.19,0,0,1,.214,13.29a2.508,2.508,0,0,1-1.978.9,2.5,2.5,0,0,1-2.08-1.028,4.511,4.511,0,0,1-.791-2.815,4.528,4.528,0,0,1,.782-2.821A2.5,2.5,0,0,1-1.764,6.508a2.488,2.488,0,0,1,1.975.9A4.132,4.132,0,0,1,1.078,9.93H3.17V5.752h.873v11.3H3.17V10.709ZM-1.764,7.287a1.674,1.674,0,0,0-1.456.826,3.992,3.992,0,0,0-.548,2.232,3.96,3.96,0,0,0,.557,2.232,1.679,1.679,0,0,0,1.447.832,1.679,1.679,0,0,0,1.441-.844A3.94,3.94,0,0,0,.24,10.346,3.975,3.975,0,0,0-.311,8.113,1.676,1.676,0,0,0-1.764,7.287Zm16.439,5.244V5.752h.879v6.779Zm-1.166-.926a14.066,14.066,0,0,1-1.793.176q-.891.029-4.359.029V8.57h4.189V7H7.357V6.232h5.051V9.326H8.218v1.705q2.871,0,3.706-.032a10.037,10.037,0,0,0,1.456-.149Zm-1.559,5.332a5.415,5.415,0,0,1-2.742-.568,1.69,1.69,0,0,1,0-3.044,5.438,5.438,0,0,1,2.742-.565,5.392,5.392,0,0,1,2.742.571,1.684,1.684,0,0,1,0,3.035A5.389,5.389,0,0,1,11.951,16.938Zm0-3.434a4.674,4.674,0,0,0-2.065.36A1.037,1.037,0,0,0,9.9,15.833a4.686,4.686,0,0,0,2.054.36A4.607,4.607,0,0,0,14,15.83a1.038,1.038,0,0,0,.012-1.963A4.6,4.6,0,0,0,11.951,13.5Z" transform="translate(-1246 -5617)" fill="#4e443b"/>
                                        <path data-idr="Path_3461" data-name="Path 3461" d="M-4.211-3.819a7.336,7.336,0,0,0,.22,2.054.887.887,0,0,0,.9.712.874.874,0,0,0,.894-.712,7.6,7.6,0,0,0,.212-2.054A7.517,7.517,0,0,0-2.194-5.9a.867.867,0,0,0-.894-.677.879.879,0,0,0-.9.677A7.254,7.254,0,0,0-4.211-3.819Zm1.123-4.023A2.2,2.2,0,0,1-1-6.794,6.061,6.061,0,0,1-.4-3.819,6.028,6.028,0,0,1-1-.849,2.2,2.2,0,0,1-3.088.193,2.2,2.2,0,0,1-5.175-.849a6.028,6.028,0,0,1-.6-2.97,6.061,6.061,0,0,1,.6-2.976A2.2,2.2,0,0,1-3.088-7.842ZM.344,0A3.66,3.66,0,0,1,.7-1.531,4.328,4.328,0,0,1,2.25-3.18,11.344,11.344,0,0,0,3.62-4.265,1.6,1.6,0,0,0,4.1-5.382,1.238,1.238,0,0,0,3.824-6.2a.965.965,0,0,0-.784-.328.956.956,0,0,0-.951.521,2.584,2.584,0,0,0-.172.956H.43A3.759,3.759,0,0,1,.79-6.66,2.244,2.244,0,0,1,2.967-7.826a2.763,2.763,0,0,1,1.968.685,2.367,2.367,0,0,1,.731,1.813A2.451,2.451,0,0,1,5.15-3.792,5.142,5.142,0,0,1,4.036-2.8l-.613.435q-.576.408-.788.591a1.731,1.731,0,0,0-.357.424h3.4V0Z" transform="translate(-1246 -5669.623)" fill="#4e443b"/>
                                        <path data-idr="Path_3469" data-name="Path 3469" d="M-13.491-6.357v2.625h-.873v-6.516h.873v3.094h1.705v.8Zm-2.854,2.016A7.315,7.315,0,0,1-17.891-5.5,5.045,5.045,0,0,1-19-6.9a5.48,5.48,0,0,1-1.084,1.556,6.759,6.759,0,0,1-1.611,1.292l-.639-.6a5.6,5.6,0,0,0,2.068-1.711,3.81,3.81,0,0,0,.826-2.309V-9.861h.838v1.184a3.415,3.415,0,0,0,.835,2.168,5.09,5.09,0,0,0,2,1.529Zm-.639,5.3A5.057,5.057,0,0,1-19.7.349a1.826,1.826,0,0,1-.958-1.585A1.815,1.815,0,0,1-19.7-2.812a5.079,5.079,0,0,1,2.719-.609,5.112,5.112,0,0,1,2.725.606A1.812,1.812,0,0,1-13.3-1.236,1.824,1.824,0,0,1-14.255.352,5.09,5.09,0,0,1-16.983.961Zm0-3.639a4.236,4.236,0,0,0-2.03.4,1.182,1.182,0,0,0-.718,1.043A1.189,1.189,0,0,0-19.01-.182a4.239,4.239,0,0,0,2.027.4,4.258,4.258,0,0,0,2.045-.4,1.191,1.191,0,0,0,.721-1.052,1.185,1.185,0,0,0-.721-1.04A4.258,4.258,0,0,0-16.983-2.678Zm7.322-6.5v-.779h7.922v.779ZM-9.8-5.965v-.756h1.688L-8.22-8.771h.861l.123,2.051h3.07l.123-2.051h.861l-.105,2.051H-1.6v.756ZM-9.216.721V-2.865h3.07V-4.178h-4.8v-.779H-.456v.779h-4.8v1.313h3.07V.721Zm6.17-2.807H-8.354V-.047h5.309Zm11.892.094V-6.85H6.2v-.785H8.846v-2.613H9.72v8.256ZM6.591-3.879A7.522,7.522,0,0,1,5.006-5.206,6.059,6.059,0,0,1,3.948-6.686a6.852,6.852,0,0,1-1.131,1.72,6.089,6.089,0,0,1-1.582,1.38L.6-4.189A5.539,5.539,0,0,0,2.65-6a4.194,4.194,0,0,0,.841-2.429V-9.879h.855v1.453A3.725,3.725,0,0,0,5.22-6.161,5.369,5.369,0,0,0,7.177-4.512ZM2.759.686V-2.906h.879V-.082h6.381V.686ZM20.375-3.721V-6.926H17.739v-.779h2.637v-2.543h.879v6.527ZM17.95-4.365a7.118,7.118,0,0,1-1.541-1.166,5.083,5.083,0,0,1-1.084-1.406,5.985,5.985,0,0,1-1.113,1.579,6.594,6.594,0,0,1-1.576,1.28l-.621-.6a5.42,5.42,0,0,0,2.033-1.682,3.817,3.817,0,0,0,.82-2.314v-.287H12.383v-.779H18.2v.779H15.717v.287a3.381,3.381,0,0,0,.85,2.168A5.056,5.056,0,0,0,18.541-5ZM17.786.891A5.1,5.1,0,0,1,15.052.278a1.825,1.825,0,0,1-.964-1.585,1.812,1.812,0,0,1,.961-1.579,5.139,5.139,0,0,1,2.736-.606,5.139,5.139,0,0,1,2.736.606,1.812,1.812,0,0,1,.961,1.579A1.825,1.825,0,0,1,20.519.278,5.1,5.1,0,0,1,17.786.891Zm0-3.639a4.179,4.179,0,0,0-2.051.407,1.19,1.19,0,0,0-.709,1.034A1.187,1.187,0,0,0,15.738-.27a4.208,4.208,0,0,0,2.048.4,4.237,4.237,0,0,0,2.045-.4,1.185,1.185,0,0,0,.715-1.04,1.187,1.187,0,0,0-.709-1.037A4.2,4.2,0,0,0,17.786-2.748ZM-13.549,11.125v5.93h-.873V5.752h.873v4.594h1.957v.779Zm-2.531,3.064a9.29,9.29,0,0,1-1.77-1.819,6.473,6.473,0,0,1-1.061-1.9,6.907,6.907,0,0,1-1.055,2,9.041,9.041,0,0,1-1.752,1.86l-.674-.586a7.068,7.068,0,0,0,2.209-2.394,5.949,5.949,0,0,0,.826-2.968V6.531h.873V8.342a5.608,5.608,0,0,0,.817,2.871,6.8,6.8,0,0,0,2.2,2.291Zm13.99-3.457v1.547h-.873V5.752h.873V7.434H-.386V8.2H-2.091V9.965H-.386v.768Zm-5.578.768a2.853,2.853,0,0,1-2.065-.771,2.583,2.583,0,0,1-.8-1.942A2.576,2.576,0,0,1-9.74,6.854a2.855,2.855,0,0,1,2.071-.768,2.892,2.892,0,0,1,2.08.765,2.56,2.56,0,0,1,.8,1.937,2.569,2.569,0,0,1-.806,1.948A2.894,2.894,0,0,1-7.669,11.5Zm0-4.67a1.955,1.955,0,0,0-1.441.548,1.9,1.9,0,0,0-.551,1.409,1.917,1.917,0,0,0,.551,1.421,1.955,1.955,0,0,0,1.441.548,1.967,1.967,0,0,0,1.45-.551,1.914,1.914,0,0,0,.554-1.418,1.9,1.9,0,0,0-.554-1.4A1.961,1.961,0,0,0-7.669,6.83Zm2.1,10.1a4.988,4.988,0,0,1-2.7-.606,1.864,1.864,0,0,1-.94-1.638,1.853,1.853,0,0,1,.938-1.629,5,5,0,0,1,2.7-.6,5.013,5.013,0,0,1,2.713.6,1.856,1.856,0,0,1,.932,1.629,1.868,1.868,0,0,1-.935,1.635A4.977,4.977,0,0,1-5.565,16.926Zm0-3.732a4.064,4.064,0,0,0-2.01.4,1.217,1.217,0,0,0-.691,1.087,1.228,1.228,0,0,0,.688,1.1,4.037,4.037,0,0,0,2.013.4,4.062,4.062,0,0,0,2.024-.407,1.229,1.229,0,0,0,.694-1.093,1.218,1.218,0,0,0-.7-1.084A4.089,4.089,0,0,0-5.565,13.193ZM.843,7.6V6.83h2.9V5.658H4.61V6.83H7.5V7.6Zm8.637,2.953v2.7H8.618v-7.5h.861v4.02h1.693v.779Zm-1.57,2.314q-2.754.182-7.383.182l-.082-.756q1.775,0,3.287-.035v-.9a3.311,3.311,0,0,1-1.758-.533,1.373,1.373,0,0,1-.6-1.143,1.405,1.405,0,0,1,.744-1.245,3.918,3.918,0,0,1,2.063-.46,3.805,3.805,0,0,1,2.039.475,1.413,1.413,0,0,1,.756,1.23,1.372,1.372,0,0,1-.621,1.154,3.3,3.3,0,0,1-1.752.521v.891q1.992-.023,3.264-.105ZM4.177,8.693a3.1,3.1,0,0,0-1.453.27.759.759,0,0,0,.023,1.43,3.125,3.125,0,0,0,1.43.27A3.117,3.117,0,0,0,5.6,10.4a.764.764,0,0,0,.023-1.433A3.064,3.064,0,0,0,4.177,8.693Zm4.441,8.361V14.594H2.2v-.768H9.479v3.229Zm11.757-4.775V9.074H17.739V8.295h2.637V5.752h.879v6.527Zm-2.426-.645a7.118,7.118,0,0,1-1.541-1.166,5.083,5.083,0,0,1-1.084-1.406,5.985,5.985,0,0,1-1.113,1.579,6.594,6.594,0,0,1-1.576,1.28l-.621-.6a5.42,5.42,0,0,0,2.033-1.682,3.817,3.817,0,0,0,.82-2.314V7.035H12.383V6.256H18.2v.779H15.717v.287a3.381,3.381,0,0,0,.85,2.168A5.056,5.056,0,0,0,18.541,11Zm-.164,5.256a5.1,5.1,0,0,1-2.733-.612,1.782,1.782,0,0,1,0-3.164,5.139,5.139,0,0,1,2.736-.606,5.139,5.139,0,0,1,2.736.606,1.782,1.782,0,0,1,0,3.164A5.1,5.1,0,0,1,17.786,16.891Zm0-3.639a4.179,4.179,0,0,0-2.051.407,1.11,1.11,0,0,0,0,2.071,4.208,4.208,0,0,0,2.048.4,4.237,4.237,0,0,0,2.045-.4,1.114,1.114,0,0,0,.006-2.077A4.2,4.2,0,0,0,17.786,13.252Z" transform="translate(-1153 -5617)" fill="#4e443b"/>
                                        <path data-idr="Path_3462" data-name="Path 3462" d="M-4.211-3.819a7.336,7.336,0,0,0,.22,2.054.887.887,0,0,0,.9.712.874.874,0,0,0,.894-.712,7.6,7.6,0,0,0,.212-2.054A7.517,7.517,0,0,0-2.194-5.9a.867.867,0,0,0-.894-.677.879.879,0,0,0-.9.677A7.254,7.254,0,0,0-4.211-3.819Zm1.123-4.023A2.2,2.2,0,0,1-1-6.794,6.061,6.061,0,0,1-.4-3.819,6.028,6.028,0,0,1-1-.849,2.2,2.2,0,0,1-3.088.193,2.2,2.2,0,0,1-5.175-.849a6.028,6.028,0,0,1-.6-2.97,6.061,6.061,0,0,1,.6-2.976A2.2,2.2,0,0,1-3.088-7.842ZM1.794-2.39a1.754,1.754,0,0,0,.15.773,1.028,1.028,0,0,0,1.013.564,1.121,1.121,0,0,0,.785-.309,1.149,1.149,0,0,0,.335-.889,1,1,0,0,0-.621-1.026,3.144,3.144,0,0,0-1.114-.145v-1.1A2.879,2.879,0,0,0,3.38-4.662a.9.9,0,0,0,.508-.913,1.022,1.022,0,0,0-.26-.725A.949.949,0,0,0,2.9-6.58a.924.924,0,0,0-.8.344,1.461,1.461,0,0,0-.244.918H.43a3.847,3.847,0,0,1,.2-1.1,2.479,2.479,0,0,1,.59-.843,2.056,2.056,0,0,1,.714-.419,3.085,3.085,0,0,1,1.014-.145,2.7,2.7,0,0,1,1.8.577A1.924,1.924,0,0,1,5.43-5.7a1.713,1.713,0,0,1-.408,1.16,1.394,1.394,0,0,1-.537.4,1.1,1.1,0,0,1,.6.36,1.922,1.922,0,0,1,.585,1.482A2.5,2.5,0,0,1,4.988-.556,2.606,2.606,0,0,1,2.962.193a2.45,2.45,0,0,1-2.3-1.08A3.207,3.207,0,0,1,.29-2.39Z" transform="translate(-1153 -5669.623)" fill="#4e443b"/>
                                        <path data-idr="Path_3468" data-name="Path 3468" d="M-13.62-3.973V-6.445h-1.318v2.473h-.879V-10.02h.879v2.783h1.318v-3.012h.873v6.275Zm-3.48-.539a5.5,5.5,0,0,1-1.324-1.131,5.052,5.052,0,0,1-.92-1.342,4.763,4.763,0,0,1-.882,1.477,5.714,5.714,0,0,1-1.409,1.283l-.627-.586a4.719,4.719,0,0,0,1.781-1.617,3.977,3.977,0,0,0,.691-2.227v-1.2h.855v1.2a3.477,3.477,0,0,0,.709,2.063,4.246,4.246,0,0,0,1.688,1.43ZM-19.825.744v-4.09h7.078V.744Zm6.217-3.322h-5.35V-.023h5.35ZM-9.661-9.24V-10h7.922v.756ZM-9.8-6.311v-.756h1.688L-8.22-8.83h.861l.123,1.764h3.07l.123-1.764h.861l-.105,1.764H-1.6v.756Zm-1.143,1.787V-5.3H-.456v.779Zm1.729,5.3V-1.775h6.17v-1h-6.17v-.768h7.031v2.52h-6.17V0h6.469V.779Zm18.361.275v-11.3h.873v11.3ZM7.095.709V-5.578H5.126v-.779H7.095V-10.02h.861V.709Zm-1.553-2.3A8.112,8.112,0,0,1,3.421-5.127a6.563,6.563,0,0,1-.853,1.9A8.964,8.964,0,0,1,1.153-1.441L.468-1.992A5.9,5.9,0,0,0,2.231-4.216,6.572,6.572,0,0,0,3-7.189V-8.484H.889v-.779H6v.779H3.866v1.307a6.322,6.322,0,0,0,.688,2.813A6.623,6.623,0,0,0,6.2-2.162ZM20.709-6.357v2.648h-.873v-6.539h.873v3.094h1.705v.8ZM17.832-4.395A5.953,5.953,0,0,1,15.2-6.961a5.6,5.6,0,0,1-1.078,1.544,6.808,6.808,0,0,1-1.617,1.3l-.627-.592a5.8,5.8,0,0,0,2.08-1.705,3.645,3.645,0,0,0,.8-2.221v-.334h-2.5v-.779H18.1v.779H15.6v.334a3.216,3.216,0,0,0,.817,2.1A5.229,5.229,0,0,0,18.43-5.051Zm2,5.449V-2.291H13.461v-.791h7.248V1.055Z" transform="translate(-1065 -5609)" fill="#4e443b"/>
                                        <path data-idr="Path_3463" data-name="Path 3463" d="M-4.211-3.819a7.336,7.336,0,0,0,.22,2.054.887.887,0,0,0,.9.712.874.874,0,0,0,.894-.712,7.6,7.6,0,0,0,.212-2.054A7.517,7.517,0,0,0-2.194-5.9a.867.867,0,0,0-.894-.677.879.879,0,0,0-.9.677A7.254,7.254,0,0,0-4.211-3.819Zm1.123-4.023A2.2,2.2,0,0,1-1-6.794,6.061,6.061,0,0,1-.4-3.819,6.028,6.028,0,0,1-1-.849,2.2,2.2,0,0,1-3.088.193,2.2,2.2,0,0,1-5.175-.849a6.028,6.028,0,0,1-.6-2.97,6.061,6.061,0,0,1,.6-2.976A2.2,2.2,0,0,1-3.088-7.842ZM5.752-1.676H4.872V0h-1.5V-1.676H.29V-3.013L3.153-7.74H4.872v4.866h.881Zm-2.379-1.2V-6.228L1.429-2.874Z" transform="translate(-1065 -5669.623)" fill="#4e443b"/>
                                        <path data-idr="Path_3467" data-name="Path 3467" d="M-13.743-3.662v-2.83h-1.318v2.531h-.873V-10.02h.873v2.771h1.318v-3h.879v6.586Zm-3.475-.85a5.5,5.5,0,0,1-1.324-1.131,5.052,5.052,0,0,1-.92-1.342,4.681,4.681,0,0,1-.888,1.491,5.673,5.673,0,0,1-1.409,1.269l-.621-.586a4.77,4.77,0,0,0,1.8-1.644,3.982,3.982,0,0,0,.683-2.2v-1.2h.838v1.2a3.463,3.463,0,0,0,.712,2.065,4.253,4.253,0,0,0,1.7,1.427Zm.656,5.373a5.374,5.374,0,0,1-2.774-.6,1.78,1.78,0,0,1-.993-1.556,1.786,1.786,0,0,1,.993-1.559,5.352,5.352,0,0,1,2.774-.6,5.379,5.379,0,0,1,2.786.6,1.786,1.786,0,0,1,.993,1.559A1.78,1.78,0,0,1-13.775.261,5.4,5.4,0,0,1-16.561.861Zm0-3.574a4.472,4.472,0,0,0-2.106.4A1.172,1.172,0,0,0-19.4-1.295a1.164,1.164,0,0,0,.741,1.017,4.535,4.535,0,0,0,2.1.4,4.586,4.586,0,0,0,2.1-.393,1.161,1.161,0,0,0,.747-1.02,1.17,1.17,0,0,0-.744-1.02A4.525,4.525,0,0,0-16.561-2.713Zm14.47-3.229v3.914h-.873v-8.221h.873v3.527H-.386v.779ZM-4.956-3.9A6.693,6.693,0,0,1-6.491-5.121,5.544,5.544,0,0,1-7.6-6.609a5.473,5.473,0,0,1-1.1,1.655,6.47,6.47,0,0,1-1.6,1.345l-.639-.6A5.437,5.437,0,0,0-8.9-5.95a4.134,4.134,0,0,0,.864-2.4V-9.8H-7.2V-8.35a3.609,3.609,0,0,0,.85,2.238A5.025,5.025,0,0,0-4.37-4.535ZM-8.929.662V-2.865h.891v2.73h6.322v.8ZM9.432-5.279v3.457H8.554v-8.426h.879V-6.07h1.693v.791ZM6.96-9.48a36.711,36.711,0,0,1-.182,3.949l-.85-.059A31.141,31.141,0,0,0,6.087-8.7H1.335V-9.48Zm.768,5.6q-.791.064-3.337.129T.468-3.686L.386-4.465q1.5,0,2.783-.035V-7.008h.873v2.5q2.186-.029,3.639-.123ZM2.378.674V-2.59h.873V-.105h6.48V.674Zm17.88.381v-11.3h.873v11.3ZM12.705-1.383V-5.865h4.3V-8.473h-4.3v-.779h5.174v4.143H13.584v2.947a35.107,35.107,0,0,0,5.385-.24l.1.756A45.66,45.66,0,0,1,12.705-1.383Z" transform="translate(-992 -5609)" fill="#4e443b"/>
                                        <path data-idr="Path_3464" data-name="Path 3464" d="M-4.211-3.819a7.336,7.336,0,0,0,.22,2.054.887.887,0,0,0,.9.712.874.874,0,0,0,.894-.712,7.6,7.6,0,0,0,.212-2.054A7.517,7.517,0,0,0-2.194-5.9a.867.867,0,0,0-.894-.677.879.879,0,0,0-.9.677A7.254,7.254,0,0,0-4.211-3.819Zm1.123-4.023A2.2,2.2,0,0,1-1-6.794,6.061,6.061,0,0,1-.4-3.819,6.028,6.028,0,0,1-1-.849,2.2,2.2,0,0,1-3.088.193,2.2,2.2,0,0,1-5.175-.849a6.028,6.028,0,0,1-.6-2.97,6.061,6.061,0,0,1,.6-2.976A2.2,2.2,0,0,1-3.088-7.842Zm4.9,5.758a1.479,1.479,0,0,0,.348.771.985.985,0,0,0,.75.271,1.011,1.011,0,0,0,.865-.4,1.642,1.642,0,0,0,.3-1.007A1.753,1.753,0,0,0,3.8-3.456a.975.975,0,0,0-.868-.411,1.49,1.49,0,0,0-.482.07.959.959,0,0,0-.541.478L.534-3.384l.547-4.3H5.366v1.3H2.185l-.279,1.7a3.194,3.194,0,0,1,.552-.306,2.336,2.336,0,0,1,.81-.124,2.431,2.431,0,0,1,1.684.65,2.419,2.419,0,0,1,.719,1.891A2.968,2.968,0,0,1,4.98-.645,2.516,2.516,0,0,1,2.909.2a2.749,2.749,0,0,1-1.824-.6A2.317,2.317,0,0,1,.29-2.084Z" transform="translate(-992 -5669.623)" fill="#4e443b"/>
                                        <path data-idr="Path_3466" data-name="Path 3466" d="M-2.091-6.768v2.291h-.873v-5.771h.873v2.7H-.386v.779ZM-3.708-5.35a38.953,38.953,0,0,1-6.275.275V-9.85h.873v4h.773a29.007,29.007,0,0,0,4.523-.24ZM-8.952.791V-3.861h.861V-2.2h5.139V-3.861h.861V.791Zm6-2.221H-8.091V.012h5.139ZM1.739-9.182v-.779H9.661v.779ZM1.6-5.965v-.756H3.286L3.18-8.771h.861l.123,2.051h3.07l.123-2.051H8.22L8.114-6.721H9.8v.756ZM2.184.721V-2.865h3.07V-4.178H.456v-.779H10.944v.779h-4.8v1.313h3.07V.721Zm6.17-2.807H3.046V-.047H8.354Z" transform="translate(-924 -5609)" fill="#4e443b"/>
                                        <path data-idr="Path_3465" data-name="Path 3465" d="M-4.211-3.819a7.336,7.336,0,0,0,.22,2.054.887.887,0,0,0,.9.712.874.874,0,0,0,.894-.712,7.6,7.6,0,0,0,.212-2.054A7.517,7.517,0,0,0-2.194-5.9a.867.867,0,0,0-.894-.677.879.879,0,0,0-.9.677A7.254,7.254,0,0,0-4.211-3.819Zm1.123-4.023A2.2,2.2,0,0,1-1-6.794,6.061,6.061,0,0,1-.4-3.819,6.028,6.028,0,0,1-1-.849,2.2,2.2,0,0,1-3.088.193,2.2,2.2,0,0,1-5.175-.849a6.028,6.028,0,0,1-.6-2.97,6.061,6.061,0,0,1,.6-2.976A2.2,2.2,0,0,1-3.088-7.842ZM1.88-2.465a1.527,1.527,0,0,0,.338,1.026,1.079,1.079,0,0,0,.859.4.954.954,0,0,0,.8-.384,1.6,1.6,0,0,0,.293-1A1.491,1.491,0,0,0,3.84-3.467a1.066,1.066,0,0,0-.816-.363,1.09,1.09,0,0,0-.693.236A1.338,1.338,0,0,0,1.88-2.465ZM4.034-5.828a.781.781,0,0,0-.145-.414.841.841,0,0,0-.747-.365,1.1,1.1,0,0,0-1.063.838A5.2,5.2,0,0,0,1.842-4.4,1.718,1.718,0,0,1,2.5-4.9a2.229,2.229,0,0,1,.859-.156,2.233,2.233,0,0,1,1.7.7,2.518,2.518,0,0,1,.663,1.8,3.037,3.037,0,0,1-.65,1.923A2.4,2.4,0,0,1,3.056.2a2.324,2.324,0,0,1-2.17-1.23A5.015,5.015,0,0,1,.344-3.507a11.284,11.284,0,0,1,.075-1.45A4.435,4.435,0,0,1,.94-6.612a2.666,2.666,0,0,1,.873-.908A2.354,2.354,0,0,1,3.1-7.863a2.557,2.557,0,0,1,1.729.556,2.114,2.114,0,0,1,.725,1.48Z" transform="translate(-924 -5669.623)" fill="#4e443b"/>
                                        <rect data-idr="Rectangle_131" data-name="Rectangle 131" width="151.963" height="20.292" transform="translate(-1365 -5590)" fill="#f6f4e8"/>
                                        <path data-idr="Path_3472" data-name="Path 3472" d="M-13.2-5.3v1.365h-.873v-6.311h.873V-8.6H-11.5v.768H-13.2V-6.07H-11.5V-5.3Zm-5.578.814a2.844,2.844,0,0,1-2.062-.776,2.6,2.6,0,0,1-.8-1.948,2.591,2.591,0,0,1,.8-1.939,2.845,2.845,0,0,1,2.068-.773,2.882,2.882,0,0,1,2.077.771A2.574,2.574,0,0,1-15.9-7.213a2.583,2.583,0,0,1-.809,1.954A2.884,2.884,0,0,1-18.782-4.488Zm0-4.693a1.946,1.946,0,0,0-1.438.554,1.916,1.916,0,0,0-.554,1.415,1.917,1.917,0,0,0,.551,1.421,1.955,1.955,0,0,0,1.441.548,1.967,1.967,0,0,0,1.45-.551,1.914,1.914,0,0,0,.554-1.418,1.921,1.921,0,0,0-.554-1.409A1.95,1.95,0,0,0-18.782-9.182Zm4.705,10.236V-2.531h-6.375v-.779H-13.2V1.055Zm7.986-7.377a1.6,1.6,0,0,0-.457-1.213,1.676,1.676,0,0,0-1.213-.439A2.332,2.332,0,0,0-8.839-7.7a3.374,3.374,0,0,0-.973.765V-7.939a2.956,2.956,0,0,1,2.168-.826,2.493,2.493,0,0,1,1.784.639A2.256,2.256,0,0,1-5.183-6.4a3.036,3.036,0,0,1-.434,1.632A5.386,5.386,0,0,1-7.093-3.328,14.248,14.248,0,0,0-8.461-2.279,2.41,2.41,0,0,0-9-1.6a1.719,1.719,0,0,0-.155.759h4.184V0h-5.174V-.422a3.321,3.321,0,0,1,.2-1.21,3.012,3.012,0,0,1,.656-.979A10.258,10.258,0,0,1-7.819-3.791,5.21,5.21,0,0,0-6.492-5.007,2.248,2.248,0,0,0-6.091-6.322ZM2.956-4.5A2.122,2.122,0,0,1,2.47-3.132a1.537,1.537,0,0,1-1.189.478A2.921,2.921,0,0,1-.313-3.322a1.83,1.83,0,0,0-.961-.4q-.855,0-.879,1.066h-.785a2.017,2.017,0,0,1,.483-1.362,1.553,1.553,0,0,1,1.187-.483,2.559,2.559,0,0,1,1.412.539,2.559,2.559,0,0,0,1.189.545.718.718,0,0,0,.6-.3A1.311,1.311,0,0,0,2.171-4.5ZM4.983-1.348a3.135,3.135,0,0,0,1.992.7A2.214,2.214,0,0,0,8.432-1.1a1.519,1.519,0,0,0,.554-1.236q0-1.729-2.432-1.729H5.839v-.791h.68q2.162,0,2.162-1.617,0-1.494-1.646-1.494a2.74,2.74,0,0,0-1.717.627v-.932a3.722,3.722,0,0,1,1.951-.492,2.519,2.519,0,0,1,1.7.568A1.857,1.857,0,0,1,9.63-6.715,2.127,2.127,0,0,1,7.9-4.518V-4.5a2.272,2.272,0,0,1,1.485.65A1.944,1.944,0,0,1,9.94-2.437,2.313,2.313,0,0,1,9.088-.557a3.29,3.29,0,0,1-2.165.7A3.59,3.59,0,0,1,4.983-.316ZM20.089-4.43v-5.818h.891V-4.43Zm-4.74-.4a2.927,2.927,0,0,1-2.071-.735,2.44,2.44,0,0,1-.794-1.872,2.415,2.415,0,0,1,.794-1.86,2.941,2.941,0,0,1,2.071-.729A2.947,2.947,0,0,1,17.42-9.3a2.409,2.409,0,0,1,.8,1.857,2.43,2.43,0,0,1-.8,1.869A2.936,2.936,0,0,1,15.349-4.834Zm0-4.441a2.05,2.05,0,0,0-1.453.5,1.733,1.733,0,0,0-.539,1.333A1.778,1.778,0,0,0,13.9-6.091a2.021,2.021,0,0,0,1.453.513A2.022,2.022,0,0,0,16.8-6.091a1.778,1.778,0,0,0,.539-1.351A1.733,1.733,0,0,0,16.8-8.774,2.05,2.05,0,0,0,15.349-9.275ZM14.007.791V-1.945h6.105V-3.023H14.007V-3.8h6.973v2.613H14.868v1.2H21.29V.791Z" transform="translate(-1289 -5576)" fill="#4e443b"/>
                                        <path data-idr="Path_3384" data-name="Path 3384" d="M0,0H176V20.292H0Z" transform="translate(-1211 -5590)" fill="#f6f4e8"/>
                                        <path data-idr="Path_3473" data-name="Path 3473" d="M-19.2-5.3v1.365h-.873v-6.311h.873V-8.6H-17.5v.768H-19.2V-6.07H-17.5V-5.3Zm-5.578.814a2.844,2.844,0,0,1-2.062-.776,2.6,2.6,0,0,1-.8-1.948,2.591,2.591,0,0,1,.8-1.939,2.845,2.845,0,0,1,2.068-.773,2.882,2.882,0,0,1,2.077.771A2.574,2.574,0,0,1-21.9-7.213a2.583,2.583,0,0,1-.809,1.954A2.884,2.884,0,0,1-24.782-4.488Zm0-4.693a1.946,1.946,0,0,0-1.438.554,1.916,1.916,0,0,0-.554,1.415,1.917,1.917,0,0,0,.551,1.421,1.955,1.955,0,0,0,1.441.548,1.967,1.967,0,0,0,1.45-.551,1.914,1.914,0,0,0,.554-1.418,1.921,1.921,0,0,0-.554-1.409A1.95,1.95,0,0,0-24.782-9.182Zm4.705,10.236V-2.531h-6.375v-.779H-19.2V1.055ZM-12.63,0h-.932V-7.447a3.619,3.619,0,0,1-.879.583,5.144,5.144,0,0,1-1.113.437v-1a6.531,6.531,0,0,0,1.383-.592A6.36,6.36,0,0,0-13-8.812h.375Zm9.586-4.5A2.122,2.122,0,0,1-3.53-3.132a1.537,1.537,0,0,1-1.189.478,2.921,2.921,0,0,1-1.594-.668,1.83,1.83,0,0,0-.961-.4q-.855,0-.879,1.066h-.785a2.017,2.017,0,0,1,.483-1.362,1.553,1.553,0,0,1,1.187-.483,2.559,2.559,0,0,1,1.412.539,2.559,2.559,0,0,0,1.189.545.718.718,0,0,0,.6-.3A1.311,1.311,0,0,0-3.829-4.5ZM2.927-6.322A1.6,1.6,0,0,0,2.47-7.535a1.676,1.676,0,0,0-1.213-.439A2.332,2.332,0,0,0,.179-7.7a3.374,3.374,0,0,0-.973.765V-7.939a2.956,2.956,0,0,1,2.168-.826,2.493,2.493,0,0,1,1.784.639A2.256,2.256,0,0,1,3.835-6.4,3.036,3.036,0,0,1,3.4-4.772,5.386,5.386,0,0,1,1.925-3.328,14.248,14.248,0,0,0,.557-2.279,2.41,2.41,0,0,0,.018-1.6a1.719,1.719,0,0,0-.155.759H4.046V0H-1.128V-.422a3.321,3.321,0,0,1,.2-1.21A3.012,3.012,0,0,1-.275-2.61,10.258,10.258,0,0,1,1.2-3.791,5.21,5.21,0,0,0,2.525-5.007,2.248,2.248,0,0,0,2.927-6.322ZM14.259,1.055V-4.559H12.853V.709h-.861V-10.02h.861v4.682h1.406v-4.91h.873v11.3ZM10.585-9.264A9.315,9.315,0,0,1,6.337-1.646l-.7-.6A7.628,7.628,0,0,0,8.358-4.828,7.4,7.4,0,0,0,9.659-8.5H6.313v-.768ZM26.159-3.539v-.445h-2.4v-.721h2.4v-5.543h.879v6.709ZM21.671-6.586a3.819,3.819,0,0,1-2.062-.48,1.494,1.494,0,0,1-.756-1.324,1.485,1.485,0,0,1,.762-1.321,3.844,3.844,0,0,1,2.057-.478,3.878,3.878,0,0,1,2.06.475A1.482,1.482,0,0,1,24.5-8.391a1.489,1.489,0,0,1-.759,1.33A3.873,3.873,0,0,1,21.671-6.586Zm0-2.895a2.879,2.879,0,0,0-1.418.3.891.891,0,0,0-.521.794.894.894,0,0,0,.524.8,2.882,2.882,0,0,0,1.415.3A2.956,2.956,0,0,0,23.1-7.588a.891.891,0,0,0,.53-.8.89.89,0,0,0-.527-.794A2.928,2.928,0,0,0,21.671-9.48Zm3.627,4.1q-2.221.146-3.193.158v1.635h-.861v-1.6l-3.205.111L17.9-5.854q2.613,0,7.336-.252ZM19.755.838v-2.35h6.428V-2.3H19.755V-3.07H27.05V-.779H20.616V.07h6.732V.838Z" transform="translate(-1123 -5576)" fill="#4e443b"/>
                                        <path data-idr="Path_3383" data-name="Path 3383" d="M10,0H144.443V20.292H10Z" transform="translate(-1043 -5590)" fill="#f6f4e8"/>
                                        <path data-idr="Path_3474" data-name="Path 3474" d="M-19.2-5.3v1.365h-.873v-6.311h.873V-8.6H-17.5v.768H-19.2V-6.07H-17.5V-5.3Zm-5.578.814a2.844,2.844,0,0,1-2.062-.776,2.6,2.6,0,0,1-.8-1.948,2.591,2.591,0,0,1,.8-1.939,2.845,2.845,0,0,1,2.068-.773,2.882,2.882,0,0,1,2.077.771A2.574,2.574,0,0,1-21.9-7.213a2.583,2.583,0,0,1-.809,1.954A2.884,2.884,0,0,1-24.782-4.488Zm0-4.693a1.946,1.946,0,0,0-1.438.554,1.916,1.916,0,0,0-.554,1.415,1.917,1.917,0,0,0,.551,1.421,1.955,1.955,0,0,0,1.441.548,1.967,1.967,0,0,0,1.45-.551,1.914,1.914,0,0,0,.554-1.418,1.921,1.921,0,0,0-.554-1.409A1.95,1.95,0,0,0-24.782-9.182Zm4.705,10.236V-2.531h-6.375v-.779H-19.2V1.055Zm4.043-2.4a3.135,3.135,0,0,0,1.992.7A2.214,2.214,0,0,0-12.586-1.1a1.519,1.519,0,0,0,.554-1.236q0-1.729-2.432-1.729h-.715v-.791h.68q2.162,0,2.162-1.617,0-1.494-1.646-1.494a2.74,2.74,0,0,0-1.717.627v-.932a3.722,3.722,0,0,1,1.951-.492,2.519,2.519,0,0,1,1.7.568,1.857,1.857,0,0,1,.665,1.482,2.127,2.127,0,0,1-1.729,2.2V-4.5a2.272,2.272,0,0,1,1.485.65,1.944,1.944,0,0,1,.554,1.412A2.313,2.313,0,0,1-11.93-.557a3.29,3.29,0,0,1-2.165.7,3.59,3.59,0,0,1-1.939-.463ZM-3.044-4.5A2.122,2.122,0,0,1-3.53-3.132a1.537,1.537,0,0,1-1.189.478,2.921,2.921,0,0,1-1.594-.668,1.83,1.83,0,0,0-.961-.4q-.855,0-.879,1.066h-.785a2.017,2.017,0,0,1,.483-1.362,1.553,1.553,0,0,1,1.187-.483,2.559,2.559,0,0,1,1.412.539,2.559,2.559,0,0,0,1.189.545.718.718,0,0,0,.6-.3A1.311,1.311,0,0,0-3.829-4.5ZM3.272-8.625v5.7H4.409v.844H3.272V0h-.92V-2.086H-1.7v-.791A32.046,32.046,0,0,0,.633-5.83,18.134,18.134,0,0,0,2.276-8.625Zm-3.9,5.7H2.353V-7.184A26.423,26.423,0,0,1,0-3.715ZM14.259,1.055V-4.559H12.853V.709h-.861V-10.02h.861v4.682h1.406v-4.91h.873v11.3ZM10.585-9.264A9.315,9.315,0,0,1,6.337-1.646l-.7-.6A7.628,7.628,0,0,0,8.358-4.828,7.4,7.4,0,0,0,9.659-8.5H6.313v-.768ZM26.159-3.539v-.445h-2.4v-.721h2.4v-5.543h.879v6.709ZM21.671-6.586a3.819,3.819,0,0,1-2.062-.48,1.494,1.494,0,0,1-.756-1.324,1.485,1.485,0,0,1,.762-1.321,3.844,3.844,0,0,1,2.057-.478,3.878,3.878,0,0,1,2.06.475A1.482,1.482,0,0,1,24.5-8.391a1.489,1.489,0,0,1-.759,1.33A3.873,3.873,0,0,1,21.671-6.586Zm0-2.895a2.879,2.879,0,0,0-1.418.3.891.891,0,0,0-.521.794.894.894,0,0,0,.524.8,2.882,2.882,0,0,0,1.415.3A2.956,2.956,0,0,0,23.1-7.588a.891.891,0,0,0,.53-.8.89.89,0,0,0-.527-.794A2.928,2.928,0,0,0,21.671-9.48Zm3.627,4.1q-2.221.146-3.193.158v1.635h-.861v-1.6l-3.205.111L17.9-5.854q2.613,0,7.336-.252ZM19.755.838v-2.35h6.428V-2.3H19.755V-3.07H27.05V-.779H20.616V.07h6.732V.838Z" transform="translate(-966 -5576)" fill="#4e443b"/>
                                        <path data-idr="Icon_awesome-user-tie" data-name="Icon awesome-user-tie" d="M10.1,11.546A5.773,5.773,0,1,0,4.33,5.773,5.772,5.772,0,0,0,10.1,11.546Zm4.321,1.47-2.156,8.632-1.443-6.134,1.443-2.526H7.938l1.443,2.526L7.938,21.648,5.782,13.016A6.051,6.051,0,0,0,0,19.05v1.876a2.165,2.165,0,0,0,2.165,2.165H18.04A2.165,2.165,0,0,0,20.2,20.926V19.05a6.051,6.051,0,0,0-5.782-6.034Z" transform="translate(-1256 -5659)" fill="#9a2327"/>
                                        <path data-idr="Icon_awesome-clipboard-list" data-name="Icon awesome-clipboard-list" d="M15.154,2.886H11.546a2.886,2.886,0,1,0-5.773,0H2.165A2.165,2.165,0,0,0,0,5.051V20.926a2.165,2.165,0,0,0,2.165,2.165H15.154a2.165,2.165,0,0,0,2.165-2.165V5.051A2.165,2.165,0,0,0,15.154,2.886ZM4.33,19.122A1.082,1.082,0,1,1,5.412,18.04,1.08,1.08,0,0,1,4.33,19.122Zm0-4.33A1.082,1.082,0,1,1,5.412,13.71,1.08,1.08,0,0,1,4.33,14.793Zm0-4.33A1.082,1.082,0,1,1,5.412,9.381,1.08,1.08,0,0,1,4.33,10.463ZM8.659,1.8A1.082,1.082,0,1,1,7.577,2.886,1.08,1.08,0,0,1,8.659,1.8Zm5.773,16.6a.362.362,0,0,1-.361.361H7.577a.362.362,0,0,1-.361-.361v-.722a.362.362,0,0,1,.361-.361h6.494a.362.362,0,0,1,.361.361Zm0-4.33a.362.362,0,0,1-.361.361H7.577a.362.362,0,0,1-.361-.361V13.35a.362.362,0,0,1,.361-.361h6.494a.362.362,0,0,1,.361.361Zm0-4.33a.362.362,0,0,1-.361.361H7.577a.362.362,0,0,1-.361-.361V9.02a.362.362,0,0,1,.361-.361h6.494a.362.362,0,0,1,.361.361Z" transform="translate(-1162 -5659)" fill="#9a2327"/>
                                        <g data-idr="Group_307" data-name="Group 307" transform="translate(37.478 201.533)">
                                        <path data-idr="Path_3359" data-name="Path 3359" d="M71.909,0H82.783a.815.815,0,0,1,.809.809V10.858a.815.815,0,0,1-.809.809H71.909a.815.815,0,0,1-.809-.809V.809A.815.815,0,0,1,71.909,0Z" transform="translate(-1033.719 -5857.533)" fill="#9a2327"/>
                                        <path data-idr="Path_3360" data-name="Path 3360" d="M9.606,26.887V18.564a.756.756,0,0,0-.764-.764H4.337a.775.775,0,0,0-.6.29L0,22.7v6.124a.756.756,0,0,0,.764.764H3.146a2.718,2.718,0,0,1,2.169-1.1,2.676,2.676,0,0,1,2.169,1.1H16.31a2.718,2.718,0,0,1,2.169-1.1,2.676,2.676,0,0,1,2.169,1.1h1.97a.743.743,0,0,0,.733-.733v-.473a.724.724,0,0,0-.733-.733H10.369a.766.766,0,0,1-.764-.764Zm-2.779-2.81H2.841a.886.886,0,0,1-.886-.886v-.229a.977.977,0,0,1,.2-.565l2.107-2.611a.883.883,0,0,1,.687-.336H6.811a.886.886,0,0,1,.886.886v2.841a.868.868,0,0,1-.87.9Z" transform="translate(-973.478 -5872.615)" fill="#9a2327"/>
                                        <circle data-idr="Ellipse_15" data-name="Ellipse 15" cx="1.909" cy="1.909" r="1.909" transform="translate(-970.102 -5843.315)" fill="#9a2327"/>
                                        <circle data-idr="Ellipse_16" data-name="Ellipse 16" cx="1.909" cy="1.909" r="1.909" transform="translate(-956.893 -5843.315)" fill="#9a2327"/>
                                        </g>
                                        <g data-idr="Group_306" data-name="Group 306" transform="translate(41.435 201.432)">
                                        <path data-idr="Path_3361" data-name="Path 3361" d="M55.647,2.484,51.383,0,42.068,5.427l4.263,2.484Z" transform="translate(-1157.714 -5860.432)" fill="#9a2327"/>
                                        <path data-idr="Path_3362" data-name="Path 3362" d="M161.763,64.3l-9.315,5.427,3.475,2.025,9.315-5.427Z" transform="translate(-1262.254 -5921.335)" fill="#9a2327"/>
                                        <path data-idr="Path_3363" data-name="Path 3363" d="M233.131,134.034v10.854l9.31-5.424V128.61Z" transform="translate(-1338.669 -5982.238)" fill="#9a2327"/>
                                        <path data-idr="Path_3364" data-name="Path 3364" d="M27.169,139.464l9.31,5.424V134.034l-9.31-5.424Z" transform="translate(-1143.604 -5982.238)" fill="#9a2327"/>
                                        </g>
                                        <path data-idr="Subtraction_2" data-name="Subtraction 2" d="M21.942,20.442H1.079A1.089,1.089,0,0,1,0,19.346V1.1A1.089,1.089,0,0,1,1.079,0H6.115A1.089,1.089,0,0,1,7.194,1.1v8.957l6.255-4.039a1.06,1.06,0,0,1,.576-.173,1.091,1.091,0,0,1,1.083,1.1v3.115l6.255-4.039a1.061,1.061,0,0,1,.576-.173,1.091,1.091,0,0,1,1.083,1.1V19.346A1.089,1.089,0,0,1,21.942,20.442Zm-6.835-7.357V16.33h3.2V13.085Zm-7.673,0V16.33h3.2V13.085Z" transform="translate(-1004 -5657)" fill="#9a2327"/>
                                        <path data-idr="Icon_zocial-email" data-name="Icon zocial-email" d="M.072,18.958V5.515q0-.023.07-.443L8.054,11.84.165,19.425a1.978,1.978,0,0,1-.093-.467Zm1.05-14.82a1.006,1.006,0,0,1,.4-.07H22.827a1.322,1.322,0,0,1,.42.07l-7.935,6.791-1.05.84-2.077,1.7-2.077-1.7-1.05-.84Zm.023,16.2L9.1,12.7l3.081,2.5,3.081-2.5,7.958,7.632a1.121,1.121,0,0,1-.4.07H1.519a1.057,1.057,0,0,1-.373-.07Zm15.17-8.5L24.2,5.072a1.393,1.393,0,0,1,.07.443V18.958a1.789,1.789,0,0,1-.07.467Z" transform="translate(-1336.072 -5659.068)" fill="#9a2327"/>
                                    </g>
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="hx10"></div>
                <div class="business_item pxt_right">
                    <div class="business_back">
                        <div class="business_img">
                            <img class="panil3" src="images/business04.jpg">
                        </div>
                        <div class="business_no">04</div>
                    </div>
                    <div class="business_front">
                        <div class="business_content">
                            <div class="business_title io fade upS">
                                <h2>
                                    <div class="ln_jp">ネット販売事業</div>
                                    <div class="ln_en">Online retailing business</div>
                                    <div class="ln_cn1">电子商务事业</div>
                                    <div class="ln_cn2">電子商務事業</div>
                                    <div class="ln_vn">Các hình thức mua hàng trực tuyến</div>
                                    <div class="ln_ko">인터넷 판매사업</div>
                                </h2>
                            </div>
                            <div class="hx3"></div>
                            <div class="business_text io fade upS">
                                <p class="ln_jp">インバウンド向け商品のインターネット販売</p>
                                <p class="ln_en">Online shopping for the unique souvrniers toward foreign tourists</p>
                                <p class="ln_cn1">各电子商务平台上的网络销售</p>
                                <p class="ln_cn2">針對入境旅遊產品線上銷售</p>
                                <p class="ln_vn">Trang web chính thức của công ty Nichiou</p>
                                <p class="ln_ko">인터넷 쇼핑몰</p>
                            </div>
                            <div class="hx2"></div>
                            <div class="business_subimg io fade upS">
                                <img src="images/business04_1.svg">
                                <div class="business_subgrid">
                                    <a class="business_sublink" href="https://nichiou.co.jp/"></a>
                                    <a class="business_sublink" href="https://www.amazon.co.jp/s?me=A4EBMIY6IY9WK&qid=1451963337%2F"></a>
                                    <a class="business_sublink" href="https://www.rakuten.co.jp/nichiou/"></a>
                                    <a class="business_sublink" href="https://store.shopping.yahoo.co.jp/nichiou/"></a>
                                    <a class="business_sublink" href="https://www.qoo10.jp/shop/nichiou/"></a>
                                    <a class="business_sublink" href="https://wowma.jp/user/57737241/"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="hx10"></div>
    </div>
    <div class="carousel_block">
        <div class="trade_block panil3">
            <div class="trade_title" data-mh="trade_title_en">
                <div class="title_one io fade upS">
                    <p>TRADEMARK</p>
                    <h2>
                        <div class="ln_jp">商標登録・意匠登録</div>
                        <div class="ln_en">Certificate of trademark registration and Cetificate of design registraion</div>
                        <div class="ln_cn1">商标注册・图形商标注册</div>
                        <div class="ln_cn2">商標註冊・圖形商標註冊</div>
                        <div class="ln_vn">Thông tin khác</div>
                        <div class="ln_ko">상표 등록 ・ 의장 등록</div>
                    </h2>
                </div>
            </div>
            <div class="hx4"></div>
            <div class="trade_media trade_owl owl-carousel owl-theme">
                <div class="item"><img src="images/touroku01.jpg"></div>
                <div class="item"><img src="images/touroku02.jpg"></div>
                <div class="item"><img src="images/touroku03.jpg"></div>
                <div class="item"><img src="images/touroku04.jpg"></div>
                <div class="item"><img src="images/touroku05.jpg"></div>
                <div class="item"><img src="images/touroku06.jpg"></div>
                <div class="item"><img src="images/touroku07.jpg"></div>
                <div class="item"><img src="images/touroku08.jpg"></div>
                <div class="item"><img src="images/touroku09.jpg"></div>
                <div class="item"><img src="images/touroku11.jpg"></div>
                <div class="item"><img src="images/touroku12.jpg"></div>
                <div class="item"><img src="images/touroku13.jpg"></div>
                <div class="item"><img src="images/touroku14.jpg"></div>
                <div class="item"><img src="images/touroku15.jpg"></div>
                <div class="item"><img src="images/touroku16.jpg"></div>
                <div class="item"><img src="images/touroku17.jpg"></div>
                <div class="item"><img src="images/touroku18.jpg"></div>
                <div class="item"><img src="images/touroku19.jpg"></div>
                <div class="item"><img src="images/touroku20.jpg"></div>
            </div>
        </div>
        <div class="media_block panir3">
            <div class="media_title" data-mh="trade_title_en">
                <div class="title_one io fade upS">
                    <p>MEDIA</p>
                    <h2>
                        <div class="ln_jp">メディア情報</div>
                        <div class="ln_en">MEDIA COVERAGE</div>
                        <div class="ln_cn1">媒体新闻</div>
                        <div class="ln_cn2">媒體新聞</div>
                        <div class="ln_vn">Tin tức truyền thông</div>
                        <div class="ln_ko">매체정보</div>
                    </h2>
                </div>
            </div>
            <div class="hx4"></div>
            <div class="trade_media media_owl owl-carousel owl-theme">
                <div class="item"><img src="images/media01.jpg"></div>
                <div class="item"><img src="images/media02.jpg"></div>
                <div class="item"><img src="images/media03.jpg"></div>
                <div class="item"><img src="images/media04.jpg"></div>
                <div class="item"><img src="images/media05.jpg"></div>
                <div class="item"><img src="images/media06.jpg"></div>
            </div>
        </div>
    </div>
    <!-- <div class="pmh_anchor" id="オンラインショップ"></div>
    <div class="shop_block_tp">
        <div class="shop_front_tp">
            <div class="shop_content">
                <div class="shop_title io fade upS">
                    <div class="title_one">
                        <p>ONLINE SHOP</p>
                        <h2>
                            <div class="ln_jp">オンラインショップ</div>
                            <div class="ln_en">ONLINE SHOP</div>
                            <div class="ln_cn1">网店</div>
                            <div class="ln_cn2">網路商店</div>
                            <div class="ln_vn">Cửa hàng trực tuyến</div>
                            <div class="ln_ko">온라인샵</div>
                        </h2>
                    </div>
                </div>
                <div class="hx6"></div>
                <div class="shop_btn io fade upS">
                    <a class="com_job_btn" href="#">
                        <span>VIEW MORE</span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="8.632" height="8.743" viewBox="0 0 8.632 8.743">
                            <g id="Group_232" data-name="Group 232" transform="translate(-486.368 -7937.111)">
                              <path id="Path_3136" data-name="Path 3136" d="M-10857.911-3753.139h8v8" transform="translate(11344.411 11690.75)" fill="none" stroke-width="1"/>
                              <line id="Line_24" data-name="Line 24" x2="11" transform="translate(494.5 7937.722) rotate(135)" fill="none" stroke-width="1"/>
                            </g>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
        <div class="shop_back_tp">
            <div class="shop_list">
                <div class="shop_col">
                    <div class="vert_flow">
                        <div class="vert_item"><img src="images/shop_left01.jpg"></div>
                        <div class="vert_item"><img src="images/shop_left02.jpg"></div>
                        <div class="vert_item"><img src="images/shop_left03.jpg"></div>
                    </div>
                    <div class="vert_flow">
                        <div class="vert_item"><img src="images/shop_left01.jpg"></div>
                        <div class="vert_item"><img src="images/shop_left02.jpg"></div>
                        <div class="vert_item"><img src="images/shop_left03.jpg"></div>
                    </div>
                </div>
                <div class="shop_col">
                    <div class="vert_flow pxt_down">
                        <div class="vert_item"><img src="images/shop_right01.jpg"></div>
                        <div class="vert_item"><img src="images/shop_right02.jpg"></div>
                        <div class="vert_item"><img src="images/shop_right03.jpg"></div>
                    </div>
                    <div class="vert_flow pxt_down">
                        <div class="vert_item"><img src="images/shop_right01.jpg"></div>
                        <div class="vert_item"><img src="images/shop_right02.jpg"></div>
                        <div class="vert_item"><img src="images/shop_right03.jpg"></div>
                    </div>
                </div>
            </div>
        </div>  
    </div> -->
    <div class="recruit_block">
        <div class="social_btns">
            <a href="https://www.facebook.com/nichiouTW/"><img src="images/social01.svg"></a>
            <a href="https://www.facebook.com/TOMAⓇNichiou/"><img src="images/social02.svg"></a>
            <a href="https://www.instagram.com/nichiou.co.jp/"><img src="images/social03.svg"></a>
            <a href="https://www.instagram.com/TOMAⓇ_nichiou/"><img src="images/social04.svg"></a>
            <a href="https://page.line.me/998ecqwh?openQrModal=true"><img src="images/social05.svg"></a>
        </div>
        <a class="recruit_btn" href="#">
            <div class="recruit_title">
                <div class="title_one">
                    <p>RECRUIT</p>
                    <h2>
                        <div class="ln_jp">採用情報</div>
                        <div class="ln_en">RECRUIT</div>
                        <div class="ln_cn1">招聘信息</div>
                        <div class="ln_cn2">招聘信息</div>
                        <div class="ln_vn">Sứ mệnh</div>
                        <div class="ln_ko">채용정보</div>
                    </h2>
                </div>
            </div>
            <div class="recruit_arrow">
                <img src="images/recruit_arrow.svg">
            </div>
        </a>
    </div>
    <div class="pmh_anchor" id="お知らせ"></div>
    <div class="news_block">
        <div class="hx10"></div>
        <div class="c_width14">
            <div class="news_row">
                <div class="news_left io fade upS">
                    <div class="title_one">
                        <p>NEWS</p>
                        <h2>
                            <div class="ln_jp">お知らせ</div>
                            <div class="ln_en">NEWS</div>
                            <div class="ln_cn1">公告栏</div>
                            <div class="ln_cn2">公告欄</div>
                            <div class="ln_vn">Thông báo</div>
                            <div class="ln_ko">공지사항</div>
                        </h2>
                    </div>
                </div>
                <div class="news_right io fade upS">
                    <div class="news_item">
                        <div class="news_date">2023.04.18</div>
                        <div class="news_title">タイトルテキストテキストテキストテキストテキストタイトルテキストテキストがあります。</div>
                    </div>
                    <div class="news_item">
                        <div class="news_date">2023.04.18</div>
                        <div class="news_title">タイトルテキストテキストテキストテキストテキストタイトルテキストテキストテキストテキストテキストがあります。</div>
                    </div>
                    <div class="news_item">
                        <div class="news_date">2023.04.18</div>
                        <div class="news_title">タイトルテキストテキストテキストテキストテキストタイトルテキストテキストテキストテキストテキストがあります。</div>
                    </div>
                    <div class="news_item">
                        <div class="news_date">2023.04.18</div>
                        <div class="news_title">タイトルテキストテキストテキストテキストテキストタイトルテキストテキストテキストテキストテキストがあります。</div>
                    </div>
                    <div class="news_item">
                        <div class="news_date">2023.04.18</div>
                        <div class="news_title">タイトルテキストテキストテキストテキストテキストタイトルテキストテキストテキストテキストテキストがあります。</div>
                    </div>
                    <div class="news_item">
                        <div class="news_date">2023.04.18</div>
                        <div class="news_title">タイトルテキストテキストテキストテキストテキストタイトルテキストテキストテキストテキストテキストがあります。</div>
                    </div>
                    <div class="news_item">
                        <div class="news_date">2023.04.18</div>
                        <div class="news_title">タイトルテキストテキストテキストテキストテキストタイトルテキストテキストテキストテキストテキストがあります。</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="hx10"></div>
    </div>
    <div class="pmh_anchor" id="お問い合わせ"></div>
    <div class="contact_block">
        <div class="hx10"></div>
        <div class="c_width14">
            <div class="contact_title io fade upS">
                <div class="title_one">
                    <p>CONTACT</p>
                    <h2>
                        <div class="ln_jp">お問い合わせ</div>
                        <div class="ln_en">CONTACT US</div>
                        <div class="ln_cn1">邮件咨询</div>
                        <div class="ln_cn2">郵件洽詢</div>
                        <div class="ln_vn">Liên hệ</div>
                        <div class="ln_ko">문의</div>
                    </h2>
                </div>
            </div>
            <div class="hx6"></div>
            <div class="contact_row">
                <div class="contact_left">
                    <div class="policontact_row io fade upS">
                        <div class="policy_address">
                            〒598-0012<br>
                            大阪府 泉佐野市 高松東1-10-37<br>
                            泉佐野センタービル　1002号
                        </div>
                        <a class="policy_phone" href="tel:072-488-7989">
                            072-488-7989
                        </a>
                        <a class="policy_mail" href="mailto:info@nichiou.co.jp">
                            info@nichiou.co.jp
                        </a>
                    </div>
                    <div class="hx6"></div>
                    <div class="policy_desc io fade upS">
                        <div class="ln_jp">「新規お取引のお問い合わせ」につきましては、下記内容をご入力の上、送信してください。</div>
                        <div class="ln_en">"New customer's inquiry"Please kindly fill in the following information and send it to us.</div>
                        <div class="ln_cn1">如有关最新的合作及交易的询问，请于下方输入信息及内容后发送。</div>
                        <div class="ln_cn2">如有關最新的合作及交易的詢問，請於下方輸入信息及內容後發送。</div>
                        <div class="ln_vn">Mọi thắc mắc về giao dịch mới, vui lòng nhập thông tin sau và gửi.</div>
                        <div class="ln_ko">신규거래에 대한 문의는 하기 내용을 입력하시고 '송신하다" 버튼을 클릭해주세요.</div>
                    </div>
                    <div class="hx2"></div>
                    <div class="contact_template io fade upS">
                        <div class="ln_jp">
                            <div>お取引　ご希望の商品：</div>
                            <div>御社名：</div>
                            <div>ご担当者様お名前（フリガナ）：</div>
                            <div>ご住所：</div>
                            <div>お電話番号：</div>
                            <div>御社ホームページURL：</div>
                            <div>その他、ご希望やご質問等：</div>
                        </div>
                        <div class="ln_en">
                            <div>Product's name:</div>
                            <div>Your company name:</div>
                            <div>Name of the person in charge(Mr./Ms.):</div>
                            <div>Company's address:</div>
                            <div>Company's phone number:</div>
                            <div>Company's website:</div>
                            <div>Other inquiries:</div>
                        </div>
                        <div class="ln_cn1">
                            <div>希望合作交易产品：</div>
                            <div>公司名称：</div>
                            <div>负责人姓名：</div>
                            <div>地址：</div>
                            <div>电话号码：</div>
                            <div>贵公司网站或网址：</div>
                            <div>其他需求及问题等：</div>
                        </div>
                        <div class="ln_cn2">
                            <div>希望合作交易產品：</div>
                            <div>公司名稱：</div>
                            <div>負責人姓名：</div>
                            <div>地址：</div>
                            <div>電話號碼：</div>
                            <div>貴公司網站或網址：</div>
                            <div>其他需求及問題等：</div>
                        </div>
                        <div class="ln_vn">
                            <div>Giao dịch Sản phẩm mong muốn:</div>
                            <div>Tên công ty:</div>
                            <div>Tên người phụ trách (Phiên âm chữ Furigana):</div>
                            <div>Địa chỉ:</div>
                            <div>Số điện thoại:</div>
                            <div>URL trang web công ty:</div>
                            <div>Câu hỏi hay yêu cầu khác (nếu có):</div>
                        </div>
                        <div class="ln_ko">
                            <div>
                                <div>문의하실 상품이름:</div>
                                <div>귀사회사명:</div>
                                <div>담당자 성함:</div>
                                <div>주소:</div>
                                <div>연락처:</div>
                                <div>귀사 홈페이지 URL:</div>
                                <div>기타 질문등:</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="contact_right">
                    <div class="ln_jp">
                        <form action="" method="post" enctype="multipart/form-data" class="js_contact_form">
                            <div class="contactform_block">
                                <div class="field_control io fade upS">
                                    <input data-icon="user" type="text" placeholder="お名前 ※" name="field1" required>
                                </div>
                                <div class="hx4"></div>
                                <div class="field_control io fade upS">
                                    <input data-icon="phone" type="text" placeholder="電話番号 ※" name="field2" required>
                                </div>
                                <div class="hx4"></div>
                                <div class="field_control io fade upS">
                                    <input data-icon="mail" type="email" placeholder="メールアドレス ※" name="field3" required class="js_input_mail">
                                </div>
                                <div class="hx4"></div>
                                <div class="field_control io fade upS">
                                    <input data-icon="mail" type="email" placeholder="メールアドレス確認 ※" required class="js_input_confirm_mail" >
                                </div>
                                <div class="hx4"></div>
                                <div class="file_uploader io fade upS">
                                    <label for="et_pb_contact_brand_file_request_0" class="et_pb_contact_form_label">
                                        <span class="placeholder">画像添付 ※</span>
                                        <span class="label_before"><img src="images/upload_icon.png"><font color="#FF5A54">ファイルを追加</font>またはここにファイルをドロップ</span>
                                    </label>
                                    <input type="file" id="et_pb_contact_brand_file_request_0" class="file-upload" name="field_files">
                                </div>
                                <div class="upload_limit io fade upS">ファイルのサイズ上限は、1ファイルにつき10Mです。</div>
                                <div class="hx4"></div>
                                <div class="field_control io fade upS">
                                    <textarea placeholder="お問い合わせ内容 ※" name="field4" required></textarea>
                                </div>
                                <div class="field_contactbtn io fade upS">
                                    <input type="hidden" name="submit-confirm" value="submit-confirm">
                                    <input type="submit" value="送信する">
                                </div>  
                            </div>
                        </form>
                    </div>
                    <div class="ln_en">
                        <form action="" method="post" enctype="multipart/form-data" class="js_contact_form">
                            <div class="contactform_block">
                                <div class="field_control io fade upS">
                                    <input data-icon="user" type="text" placeholder="Name ※" name="field1" required>
                                </div>
                                <div class="hx4"></div>
                                <div class="field_control io fade upS">
                                    <input data-icon="phone" type="text" placeholder="Tel ※" name="field2" required>
                                </div>
                                <div class="hx4"></div>
                                <div class="field_control io fade upS">
                                    <input data-icon="mail" type="email" placeholder="Email address ※" name="field3" required class="js_input_mail">
                                </div>
                                <div class="hx4"></div>
                                <div class="field_control io fade upS">
                                    <input data-icon="mail" type="email" placeholder="Enter twice to avoid errors ※" required class="js_input_confirm_mail" >
                                </div>
                                <div class="hx4"></div>
                                <div class="file_uploader io fade upS">
                                    <label for="et_pb_contact_brand_file_request_0" class="et_pb_contact_form_label">
                                        <span class="placeholder">Attachment ※</span>
                                        <span class="label_before"><img src="images/upload_icon.png">Add file or drop file here</span>
                                    </label>
                                    <input type="file" id="et_pb_contact_brand_file_request_0" class="file-upload" name="field_files">
                                </div>
                                <div class="upload_limit io fade upS">An attachment size up to 10M.</div>
                                <div class="hx4"></div>
                                <div class="field_control io fade upS">
                                    <textarea placeholder="Inquiry Details ※" name="field4" required></textarea>
                                </div>
                                <div class="field_contactbtn io fade upS">
                                    <input type="hidden" name="submit-confirm" value="submit-confirm">
                                    <input type="submit" value="Submit">
                                </div>  
                            </div>
                        </form>
                    </div>
                    <div class="ln_cn1">
                        <form action="" method="post" enctype="multipart/form-data" class="js_contact_form">
                            <div class="contactform_block">
                                <div class="field_control io fade upS">
                                    <input data-icon="user" type="text" placeholder="姓名 ※" name="field1" required>
                                </div>
                                <div class="hx4"></div>
                                <div class="field_control io fade upS">
                                    <input data-icon="phone" type="text" placeholder="电话号码 ※" name="field2" required>
                                </div>
                                <div class="hx4"></div>
                                <div class="field_control io fade upS">
                                    <input data-icon="mail" type="email" placeholder="邮件地址 ※" name="field3" required class="js_input_mail">
                                </div>
                                <div class="hx4"></div>
                                <div class="field_control io fade upS">
                                    <input data-icon="mail" type="email" placeholder="再次确认电子邮件地址 ※" required class="js_input_confirm_mail" >
                                </div>
                                <div class="hx4"></div>
                                <div class="file_uploader io fade upS">
                                    <label for="et_pb_contact_brand_file_request_0" class="et_pb_contact_form_label">
                                        <span class="placeholder">附参考图片 ※</span>
                                        <span class="label_before"><img src="images/upload_icon.png">在此处添加或拖放文件</span>
                                    </label>
                                    <input type="file" id="et_pb_contact_brand_file_request_0" class="file-upload" name="field_files">
                                </div>
                                <div class="upload_limit io fade upS">每个上传文件或档案大小限制为10M以内。</div>
                                <div class="hx4"></div>
                                <div class="field_control io fade upS">
                                    <textarea placeholder="关于询问内容 ※" name="field4" required></textarea>
                                </div>
                                <div class="field_contactbtn io fade upS">
                                    <input type="hidden" name="submit-confirm" value="submit-confirm">
                                    <input type="submit" value="送出">
                                </div>  
                            </div>
                        </form>
                    </div>
                    <div class="ln_cn2">
                        <form action="" method="post" enctype="multipart/form-data" class="js_contact_form">
                            <div class="contactform_block">
                                <div class="field_control io fade upS">
                                    <input data-icon="user" type="text" placeholder="姓名 ※" name="field1" required>
                                </div>
                                <div class="hx4"></div>
                                <div class="field_control io fade upS">
                                    <input data-icon="phone" type="text" placeholder="電話號碼 ※" name="field2" required>
                                </div>
                                <div class="hx4"></div>
                                <div class="field_control io fade upS">
                                    <input data-icon="mail" type="email" placeholder="郵件地址 ※" name="field3" required class="js_input_mail">
                                </div>
                                <div class="hx4"></div>
                                <div class="field_control io fade upS">
                                    <input data-icon="mail" type="email" placeholder="再次確認電子郵件地址 ※" required class="js_input_confirm_mail" >
                                </div>
                                <div class="hx4"></div>
                                <div class="file_uploader io fade upS">
                                    <label for="et_pb_contact_brand_file_request_0" class="et_pb_contact_form_label">
                                        <span class="placeholder">附參考圖片 ※</span>
                                        <span class="label_before"><img src="images/upload_icon.png">在此處添加或拖放文件</span>
                                    </label>
                                    <input type="file" id="et_pb_contact_brand_file_request_0" class="file-upload" name="field_files">
                                </div>
                                <div class="upload_limit io fade upS">每個上傳文件或檔案大小限制為10M以內。</div>
                                <div class="hx4"></div>
                                <div class="field_control io fade upS">
                                    <textarea placeholder="關於詢問內容 ※" name="field4" required></textarea>
                                </div>
                                <div class="field_contactbtn io fade upS">
                                    <input type="hidden" name="submit-confirm" value="submit-confirm">
                                    <input type="submit" value="送出">
                                </div>  
                            </div>
                        </form>
                    </div>
                    <div class="ln_vn">
                        <form action="" method="post" enctype="multipart/form-data" class="js_contact_form">
                            <div class="contactform_block">
                                <div class="field_control io fade upS">
                                    <input data-icon="user" type="text" placeholder="Tên ※" name="field1" required>
                                </div>
                                <div class="hx4"></div>
                                <div class="field_control io fade upS">
                                    <input data-icon="phone" type="text" placeholder="Số điện thoại ※" name="field2" required>
                                </div>
                                <div class="hx4"></div>
                                <div class="field_control io fade upS">
                                    <input data-icon="mail" type="email" placeholder="E-mail ※" name="field3" required class="js_input_mail">
                                </div>
                                <div class="hx4"></div>
                                <div class="field_control io fade upS">
                                    <input data-icon="mail" type="email" placeholder="E-mail ( xác nhận) ※" required class="js_input_confirm_mail" >
                                </div>
                                <div class="hx4"></div>
                                <div class="file_uploader io fade upS">
                                    <label for="et_pb_contact_brand_file_request_0" class="et_pb_contact_form_label">
                                        <span class="placeholder">Hình ảnh đính kèm ※</span>
                                        <span class="label_before"><img src="images/upload_icon.png">Tải lên File hoặc kéo thả vào đây</span>
                                    </label>
                                    <input type="file" id="et_pb_contact_brand_file_request_0" class="file-upload" name="field_files">
                                </div>
                                <div class="upload_limit io fade upS">(Giới hạn chiều dài 1 tệp là 10 mét)</div>
                                <div class="hx4"></div>
                                <div class="field_control io fade upS">
                                    <textarea placeholder="Nội dung câu hỏi ※" name="field4" required></textarea>
                                </div>
                                <div class="field_contactbtn io fade upS">
                                    <input type="hidden" name="submit-confirm" value="submit-confirm">
                                    <input type="submit" value="Gửi">
                                </div>  
                            </div>
                        </form>
                    </div>
                    <div class="ln_ko">
                        <form action="" method="post" enctype="multipart/form-data" class="js_contact_form">
                            <div class="contactform_block">
                                <div class="field_control io fade upS">
                                    <input data-icon="user" type="text" placeholder="성함 ※" name="field1" required>
                                </div>
                                <div class="hx4"></div>
                                <div class="field_control io fade upS">
                                    <input data-icon="phone" type="text" placeholder="연락처 ※" name="field2" required>
                                </div>
                                <div class="hx4"></div>
                                <div class="field_control io fade upS">
                                    <input data-icon="mail" type="email" placeholder="메일주소 ※" name="field3" required class="js_input_mail">
                                </div>
                                <div class="hx4"></div>
                                <div class="field_control io fade upS">
                                    <input data-icon="mail" type="email" placeholder="메일주소(확인) ※" required class="js_input_confirm_mail" >
                                </div>
                                <div class="hx4"></div>
                                <div class="file_uploader io fade upS">
                                    <label for="et_pb_contact_brand_file_request_0" class="et_pb_contact_form_label">
                                        <span class="placeholder">사진 첨부 ※</span>
                                        <span class="label_before"><img src="images/upload_icon.png">파일을 첨부 혹은 파일을 여기에 드롭(Drop)</span>
                                    </label>
                                    <input type="file" id="et_pb_contact_brand_file_request_0" class="file-upload" name="field_files">
                                </div>
                                <div class="upload_limit io fade upS">파일사이즈는 1파일당 10M 이내</div>
                                <div class="hx4"></div>
                                <div class="field_control io fade upS">
                                    <textarea placeholder="문의 내용 ※" name="field4" required></textarea>
                                </div>
                                <div class="field_contactbtn io fade upS">
                                    <input type="hidden" name="submit-confirm" value="submit-confirm">
                                    <input type="submit" value="송신하다">
                                </div>  
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="hx4"></div>
        <div class="hx6"></div>
    </div>
</section>
<!-- CONTAIN_END -->
<!-- FOOTER_START -->
<footer id="footer">
    <div class="footer_block">
        <a class="page_top" id="gototop" href="#">
            <img src="images/page_top.svg">
        </a>
        <div class="footer_wrap io fade upS">
            <div class="footer_row">
                <div class="footer_logo"> 
                    <a href="#">
                        <img src="images/logo_green.svg" alt=""/>
                    </a>
                </div>
                <div class="lang_and">
                    <div class="footer_lang">
                        <div class="lang_menu">
                            <div class="langmenu_shape">
                                <div><span>JAPANESE</span></div>
                            </div>
                            <div class="langdown_icon">
                                <img src="images/lang_down.svg">
                            </div>
                            <div class="langmenu_dropdown">
                                <div data-lang="ln_jp"><span>JAPANESE</span></div>
                                <div data-lang="ln_en"><span>ENGLISH</span></div>
                                <div data-lang="ln_cn1"><span>CHINESE(簡)</span></div>
                                <div data-lang="ln_cn2"><span>CHINESE(繁)</span></div>
                                <div data-lang="ln_vn"><span>VIETNAMESE</span></div>
                                <div data-lang="ln_ko"><span>KOREAN</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="footer_menu">
                        <ul class="footmenu_ul">
                            <li>
                                <div class="footmenu_shape">
                                    <a href="#CEO理念">
                                        <div class="footmenu_cap">
                                            <span class="ln_jp">CEO理念</span>
                                            <span class="ln_en">CEO PRINCIPLE</span>
                                            <span class="ln_cn1">CEO理念</span>
                                            <span class="ln_cn2">CEO理念</span>
                                            <span class="ln_vn">Thông điệp CEO</span>
                                            <span class="ln_ko">CEO경영이념</span>
                                        </div>
                                        <div class="footmenu_uline"></div>
                                    </a>
                                </div>
                            </li>
                            <li>
                                <div class="footmenu_shape">
                                    <a href="#会社概要">
                                        <div class="footmenu_cap">
                                            <span class="ln_jp">会社概要</span>
                                            <span class="ln_en">COMPANY</span>
                                            <span class="ln_cn1">公司简介</span>
                                            <span class="ln_cn2">公司簡介</span>
                                            <span class="ln_vn">Tổng quan về công ty</span>
                                            <span class="ln_ko">회사개요</span>
                                        </div>
                                        <div class="footmenu_uline"></div>
                                    </a>
                                </div>
                            </li>
                            <li>
                                <div class="footmenu_shape">
                                    <a href="#事業内容">
                                        <div class="footmenu_cap">
                                            <span class="ln_jp">事業内容</span>
                                            <span class="ln_en">BUSINESS</span>
                                            <span class="ln_cn1">事业内容</span>
                                            <span class="ln_cn2">業務內容</span>
                                            <span class="ln_vn">Nội dung kinh doanh</span>
                                            <span class="ln_ko">사업내용</span>
                                        </div>
                                        <div class="footmenu_uline"></div>
                                    </a>
                                </div>
                            </li>
                            <li>
                                <div class="footmenu_shape">
                                    <a href="detail.html">
                                        <div class="footmenu_cap">
                                            <span class="ln_jp">商品一覧</span>
                                            <span class="ln_en">PRODUCT LIST</span>
                                            <span class="ln_cn1">商品分类</span>
                                            <span class="ln_cn2">商品分類</span>
                                            <span class="ln_vn">DANH SÁCH SẢN PHẨM</span>
                                            <span class="ln_ko">상품 카테고리</span>
                                        </div>
                                        <div class="footmenu_uline"></div>
                                    </a>
                                </div>
                            </li>
                            <!-- <li>
                                <div class="footmenu_shape">
                                    <a href="#オンラインショップ">
                                        <div class="footmenu_cap">
                                            <span class="ln_jp">オンラインショップ</span>
                                            <span class="ln_en">ONLINE SHOP</span>
                                            <span class="ln_cn1">网店</span>
                                            <span class="ln_cn2">網路商店</span>
                                            <span class="ln_vn">Cửa hàng trực tuyến</span>
                                            <span class="ln_ko">온라인샵</span>
                                        </div>
                                        <div class="footmenu_uline"></div>
                                    </a>
                                </div>
                            </li> -->
                            <li>
                                <div class="footmenu_shape">
                                    <a href="#お知らせ">
                                        <div class="footmenu_cap">
                                            <span class="ln_jp">お知らせ</span>
                                            <span class="ln_en">NEWS</span>
                                            <span class="ln_cn1">公告栏</span>
                                            <span class="ln_cn2">公告欄</span>
                                            <span class="ln_vn">Thông báo</span>
                                            <span class="ln_ko">공지사항</span>
                                        </div>
                                        <div class="footmenu_uline"></div>
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="footer_bottom">
                <div class="footer_social">
                    <a href="https://www.facebook.com/nichiouTW/"><img src="images/foot_social01.svg"></a>
                    <a href="https://www.facebook.com/TOMAⓇNichiou/"><img src="images/foot_social02.svg"></a>
                    <a href="https://www.instagram.com/nichiou.co.jp/"><img src="images/foot_social03.svg"></a>
                    <a href="https://www.instagram.com/TOMAⓇ_nichiou/"><img src="images/foot_social04.svg"></a>
                    <a href="https://page.line.me/998ecqwh?openQrModal=true"><img src="images/foot_social05.svg"></a>
                </div>
                <div class="footer_copyright"><span>© NICHIOU Co.LTD.</span></div>
            </div>
        </div>        
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
<script defer src="js/intersection-observer-polyfill.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/custom.js"></script>
</body>
</html>
