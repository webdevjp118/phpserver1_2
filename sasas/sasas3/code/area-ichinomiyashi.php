<?php /* Template Name: area-ichinomiyashi*/ ?>
<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package heater
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<?php wp_head(); ?>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-2XE9SL7X99"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-2XE9SL7X99');
</script>

<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-WQW4SXS2');</script>
<!-- End Google Tag Manager -->
	
<!-- Bootstrap -->
<link href="<?php echo get_stylesheet_directory_uri(); ?>/css/bootstrap.css" rel="stylesheet">
<link href="<?php echo get_stylesheet_directory_uri(); ?>/css/fontawesome_all.css" rel="stylesheet" type="text/css">
<link href="<?php echo get_stylesheet_directory_uri(); ?>/css/fonts.css" rel="stylesheet">
<link href="<?php echo get_stylesheet_directory_uri(); ?>/css/owl.carousel.css" rel="stylesheet">
<link href="<?php echo get_stylesheet_directory_uri(); ?>/css/owl.theme.default.css" rel="stylesheet">
<link href="<?php echo get_stylesheet_directory_uri(); ?>/css/stylesheet.css" rel="stylesheet" type="text/css">
<link href="<?php echo get_stylesheet_directory_uri(); ?>/css/loading.css" rel="stylesheet" type="text/css">
<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->	
</head>
<body <?php body_class(); ?>>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WQW4SXS2"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<?php wp_body_open(); ?>
<div id="site_loader_overlay"><div id="site_loader_animation"><i></i><i></i><i></i><i></i></div></div>
<div class="wrapper">
<!-- HEADER_START -->
<div class="header_ribbon">一宮市の給湯器交換が激安価格【名古屋給湯器交換センター】</div>
<header id="header" class="">
    <div class="header_set">
        <a class="header_logo" href="<?php echo get_site_url(); ?>/">
            <img class="headlogo_white" src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo.svg" alt="一宮市の給湯器・エコジョーズ激安価格交換工事店">
            <img class="headlogo_green" src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo.svg" alt="一宮市で一番安い工事費用コミコミ価格だから安心">
        </a>
        <div class="header_menu">
            <a class="headmenu_a" href="<?php echo get_site_url(); ?>/case/">
                <div class="headmenu_shape">
                    <div class="headmenu_cap">交換工事例</div>
                    <div class="headmenu_uline"></div>
                </div>
            </a>
            <a class="headmenu_a" href="<?php echo get_site_url(); ?>/product/">
                <div class="headmenu_shape">
                    <div class="headmenu_cap">取扱商品一覧</div>
                    <div class="headmenu_uline"></div>
                </div>
            </a>
            <a class="headmenu_a" href="<?php echo get_site_url(); ?>/select/">
                <div class="headmenu_shape">
                    <div class="headmenu_cap">給湯器の選び方</div>
                    <div class="headmenu_uline"></div>
                </div>
            </a>
            <a class="headmenu_a" href="<?php echo get_site_url(); ?>/review/">
                <div class="headmenu_shape">
                    <div class="headmenu_cap">お客様の声</div>
                    <div class="headmenu_uline"></div>
                </div>
            </a>
            <a class="headmenu_a" href="<?php echo get_site_url(); ?>/flow/">
                <div class="headmenu_shape">
                    <div class="headmenu_cap">交換工事の流れ</div>
                    <div class="headmenu_uline"></div>
                </div>
            </a>
            <a class="headmenu_a" href="<?php echo get_site_url(); ?>/company/">
                <div class="headmenu_shape">
                    <div class="headmenu_cap">運営会社</div>
                    <div class="headmenu_uline"></div>
                </div>
            </a>
            <a class="headmenu_a X_contact" href="<?php echo get_site_url(); ?>/contact/">
                <div class="headmenu_shape">
                    <div class="headmenu_cap">お問い合わせ</div>
                    <div class="headmenu_uline"></div>
                </div>
            </a>
        </div>
        <div class="fixed_contact">
            <div class="fixed_svg1"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/tpcta1.svg" alt="一宮市ナンバーワン・地域密着スピード対応！最短即時交換可能"></div>
            <a class="fixed_svg2" href="tel:0120316606"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/tpcta2.svg" alt="一宮市の方は無料フリーダイヤルで安心見積り・比較検討にどうぞ！"></a>
            <a class="fixed_svg3" href="<?php echo get_site_url(); ?>/contact/"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/tpcta3.svg" alt="一宮市の給湯器相談が24時間365日メール受付OK!翌日には詳細価格が明朗会計！"></a>
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
<!-- HEADER_END -->
<!-- CONTAIN_START -->
<!-- <div class="state_vals is_top"></div> -->
<section id="contain">    	        
    <div class="instead_head"></div>
    <div class="top_fv">
        <div class="tpfv_back">
            <img class="disb_pc" src="<?php echo get_stylesheet_directory_uri(); ?>/images/top_fv.jpg" alt="一宮市でガス給湯器の交換工事費用が一番安い">
            <img class="disb_sp" src="<?php echo get_stylesheet_directory_uri(); ?>/images/tpfv_sp.jpg" alt="一宮市でエコジョーズの交換工事費用が激安">
        </div>
        <div class="tpfv_front">
            <div class="tpfv_width">
                <div class="tpfv_title"><h1><span class="span1">一宮市の<br class="disb_sp">給湯器・エコジョーズ</span></h1></div>
                <div class="tpfv_title">
                    <h1><span class="span2">激安価格・交換工事</span><br class="disb_sp"><span class="span3">専門店</span>
                    </h1>
                </div>
                <div class="tpfv_bottom">
                    <div class="tpfv_desc">
                        <div class="tpfv_desc1">
                            <span class="span2">お湯が出なくて困った方に</span>
                        </div>
                        <div class="tpfv_price">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/tpfv_price.svg" alt="給湯器を名古屋で交換するならおすすめ">
                        </div>
                        <div class="tpfv_desc2">安くて安心の高品質工事</div>
                    </div>
                </div>            
            </div>
            <div class="tpfv_spmedals">
                <div class="tpfv_medal"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/tpmedal01.svg" alt="一宮市の給湯器専門店・地域密着サービス！信頼と実績多数"></div>
                <div class="tpfv_medal"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/tpmedal02.svg" alt="激安リースプラン価格・一宮市最安値の利率1.27％"></div>
                <div class="tpfv_medal"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/tpmedal03.svg" alt="一宮市の給湯器工事保証・無料で5年間ついてくる"></div>
            </div>
        </div>        
    </div>
    <div class="top_fv2">
        <div class="topfv2_back">
            <img class="disb_pc" src="<?php echo get_stylesheet_directory_uri(); ?>/images/tpfv2.svg" alt="一宮市の最安値価格に挑戦・最大80％OFF以上">
            <img class="disb_sp" src="<?php echo get_stylesheet_directory_uri(); ?>/images/sp_tpfv2.svg" alt="一宮市のエコジョーズ交換工事が格安価格">
        </div>
        <div class="tpfv2_front">
            <div class="tpfv_product">
                <div class="tpfvproduct_left">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/tpfv_left.png" alt="一宮市のノーリツ・リンナイ・パロマ給湯器ラインナップが勢揃い">
                </div>
                <div class="tpfvproduct_right">
                    <div class="tpfv_medal"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/tpmedal01.svg" alt="一宮市のガス給湯器16号・20号・24号から選べる"></div>
                    <div class="tpfv_medal"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/tpmedal02.svg" alt="一宮市の給湯器交換はスピード対応！24時間365日無料見積もり実施中"></div>
                    <div class="tpfv_medal"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/tpmedal03.svg" alt="給湯器が壊れてお湯が出ない・リモコンエラーなど、給湯器で困ったらこちら"></div>
                </div>
            </div>
            <div class="tofpv2_title">
                <div class="cwidth14">
                    <div class="tp_title1">
                        <p>名古屋給湯器交換センターの</p>
                        <h2>激安価格／工事費込&nbsp;<br class="disb_sp"><span>ラインナップ</span></h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="tproducts_bg">
        <div class="hx6"></div>
        <div class="cwidth14">
            <div class="tpdords_grid">
<?php
$related_args = array(
	'post_type' => 'product',
	'posts_per_page' => 12,
    'order' => 'ASC',
);
$query = new WP_Query( $related_args );
if ( $query->have_posts() ) :
    while ( $query->have_posts() ) :
        $query->the_post();
        $loop_id = get_the_id();
        $loop_title = get_the_title();
        $loop_permalink = get_the_permalink($loop_id);
        $loop_maker_id = get_field('maker');
?>        
                
                <a class="tprod_item" href="<?php echo $loop_permalink; ?>">
                    <div class="tproditem_logo">
                        <div class="tproditem_logo1"><img src="<?php echo get_field('logo', $loop_maker_id); ?>" alt="名古屋給湯器交換センターだから安心・安全の高品質工事"></div>
                        <div class="tproditem_cat"><?php echo $loop_title; ?></div>
                    </div>
                    <div class="hx2"></div>
                    <div class="tproditem_row">
                        <div class="tproditem_left">
                            <div class="tproditem_img">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/product_detail.png" alt="パロマのエコジョーズが一宮市で人気ランキング上位">
                            </div>
                            <div class="tproditem_off">
                                <div class="tprice_off">
                                    <div class="tpriceoff_top"><span class="tpriceoff_val"><?php echo get_field('割引率', $loop_id); ?></span>%</div>
                                    <div class="tpriceoff_bottom">OFF</div>
                                </div>
                            </div>
                        </div>
                        <div class="tproditem_right">
                            <div class="tproditem_col11"><?php echo get_field('種類', $loop_id); ?></div>
                            <div class="tproditem_col12"><span><?php echo get_field('タイプ', $loop_id); ?></span><span><font size="4"><?php echo get_field('号数', $loop_id).'</font><font size="1">号</font>'; ?></span></div>
                            <div class="tproditem_col31">工事費・撤去処分費<br>コミコミ特価</div>
                            <div class="tproditem_col32"><span class="tproditem_val"><?php echo get_field('本体＋リモコン＋工事費合計', $loop_id); ?></span>円(税込)</div>
                        </div>
                    </div>
                </a>
<?php
    endwhile;
endif;	
?>
            </div>
        </div>
    </div>
    <div class="tproducts_bottom">
        <a class="tpoducts_btn" href="<?php echo get_site_url(); ?>/product/"><span>すべての商品を見る</span><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/tproducts_btn.svg" alt="ガス給湯器・エコジョーズを一宮市内の専門店で探すなら"></a>
    </div>
    <div class="hx10"></div>
    <div class="cwidth14">
        <div class="treason_title">
            <div class="treason_title1">
                <div class="treasontitle1_1">
                    名古屋給湯器交換センターが
                </div>
                <div class="treasontitle1_2"><span class="span1">選</span><span class="span2">ばれる</span><span class="span3">理由</span></div>
            </div>
            <div class="hx3"></div>
            <div class="treason_title2">
                <div class="treason_no"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/treason_no1.svg" alt="名古屋で人気オススメの理由その2・業界最最安値を実現"></div><h2>流通経路をスリム化し、<span>業界最安値を実現</span></h2>
            </div>
        </div>
    </div>
    <div class="hx3"></div>
    <div class="treason2_bg">
        <div class="cwidth12">
            <div class="treason2_row">
                <div class="hx5"></div>
                <div class="treason2_title"><h3>他社の場合</h3></div>
                <div class="hx2"></div>
                <div class="treason2_img">
                    <img class="disb_pc" src="<?php echo get_stylesheet_directory_uri(); ?>/images/treason2_img.svg" alt="名古屋のメーカーや一次問屋を経由すると価格が高い！見積りも高い！">
                    <img class="disb_sp" src="<?php echo get_stylesheet_directory_uri(); ?>/images/sp_treason2_img.svg" alt="名古屋の給湯器を仕入れるのに中間マージンが上乗せされる">
                </div>
                <div class="treason2_text">複数の業者を経由するため、中間マージンが販売価格に上乗せされ高くなる</div>
                <div class="hx4"></div>
            </div>
        </div>
    </div>
    <div class="treason3_bg">
        <div class="cwidth12">
            <div class="treason2_row">
                <div class="hx5"></div>
                <div class="treason2_title"><h3>名古屋給湯器交換センターの場合</h3></div>
                <div class="hx2"></div>
                <div class="treason2_img">
                    <img class="disb_pc" src="<?php echo get_stylesheet_directory_uri(); ?>/images/treason3_img.svg" alt="名古屋の給湯器をコストカットで仕入れ！価格が安い">
                    <img class="disb_sp" src="<?php echo get_stylesheet_directory_uri(); ?>/images/sp_treason3_img.svg" alt="名古屋のエコジョーズも無駄なコストを掛けずに業界最安値を実現！">
                </div>
                <div class="treason2_text">中間業者を省き、メーカー側から直接仕入れることで流通経路をスリム化！無駄なコストを販売価格に上乗せすることなく、業界最安値を実現!!</div>
                <div class="hx4"></div>
            </div>
        </div>
    </div>
    <div class="hx5"></div>
    <div class="cwidth14">
        <div class="treason_title2">
            <div class="treason_no"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/treason_no2.svg"></div><h2>無料10年間の<span>工事保証付き</span></h2>
        </div>
    </div>
    <div class="hx3"></div>
    <div class="treason_row">
        <div class="treason_left">
            <div class="treason_subtle">他社の場合</div>
            <div class="hx5"></div>
            <div class="treason_img">
                <img class="disb_pc" src="<?php echo get_stylesheet_directory_uri(); ?>/images/taego_left.svg">
                <img class="disb_sp" src="<?php echo get_stylesheet_directory_uri(); ?>/images/sptaego_left.svg">
            </div>
            <div class="taego_text">
                利益を少しでも多く上げるために、基準に反した粗悪な工事部品を使用したり、手抜き工事で労力を省いたりするような、いい加減な工事業者が存在します。
            </div>
        </div>
        <div class="treason_right">
            <div class="treason_subtle">名古屋給湯器交換センターの場合</div>
            <div class="hx5"></div>
            <div class="treason_img">
                <a target="_blank" href="https://nagoya-kyutoki.com/wp-content/themes/heater/pdf/kojihosyo_sampl.pdf">
                    <img class="disb_pc" src="<?php echo get_stylesheet_directory_uri(); ?>/images/taego_right.png">
                    <img class="disb_sp" src="<?php echo get_stylesheet_directory_uri(); ?>/images/sptaego_right.png">
                </a>
            </div>
            <div class="taego_text">
                高品質工事に対する自信の証として、自社独自の工事保証（10年間）を無料で付帯しております。<br>
                万が一の工事に起因する不具合に対しては追加費用なし！責任を持って改善対応いたします。
            </div>
        </div>
    </div>
    <div class="hx5"></div>
    <div class="cwidth14">
        <div class="treason_title2">
            <div class="treason_no"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/treason_no3.svg"></div><h2>最長10年間の<span>メーカー製品延長保証</span></h2>
        </div>
    </div>
    <div class="hx3"></div>
    <div class="hobi">
        <div>
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/hobi_title.svg">
        </div>
        <div class="hx3"></div>
        <div>
            <img class="disb_pc" src="<?php echo get_stylesheet_directory_uri(); ?>/images/hobi.svg">
            <img class="disb_sp" src="<?php echo get_stylesheet_directory_uri(); ?>/images/sphobi.svg">
        </div>
        <div class="hx3"></div>
        <div class="hobi_text">
            給湯器メーカーの無料製品保証期間は、一般品（非BL品）は1年、BL品は2年です。しかし、一般的な家庭用給湯器の寿命は10年と設定されています。保証期間を超えて給湯器の不調や故障が生じた場合の修理は保証対象外となり有償修理になります。<br>
            そこで、名古屋給湯器交換センターでは、給湯器をできるだけ長く安心してご利用いただくため、各メーカーの製品保証期間を最長10年まで延長できるサービスを導入いたしました。ご興味のある方は是非ともお気軽にご相談くださいませ。
        </div>
        <div class="hx5"></div>
        <div>
            <img class="disb_pc" src="<?php echo get_stylesheet_directory_uri(); ?>/images/tenyen.svg">
            <img class="disb_sp" src="<?php echo get_stylesheet_directory_uri(); ?>/images/sptenyen.svg">
        </div>
    </div>
    <div class="hx10"></div>
</section>
<!-- CONTAIN_END -->
<?php
get_footer();
