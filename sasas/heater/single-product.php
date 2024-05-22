<?php
get_header();
?>
<?php
$selected_product_id = 0;
$selected_maker_id = 0;
$selected_hcategory = "";
$selected_htype = "";
while ( have_posts() ) :
	the_post();
	$selected_product_id = get_the_ID();
	$selected_maker_id = get_field('maker');
    $selected_hcategory = get_field('種類');
    $selected_htype = get_field('タイプ');
endwhile; // End of the loop.
$related_args = array(
	'post_type' => 'product',
	'posts_per_page' => -1,
    'order' => 'ASC',

);
$query = new WP_Query( $related_args );
$prod_idlist = [];
if ( $query->have_posts() ) :
    while ( $query->have_posts() ) :
        $query->the_post();
        $loop_id = get_the_id();
        array_push($prod_idlist, $loop_id);
    endwhile;
endif;
$prodgroup_list = [];
$hcategory = get_hcategory();
$htype = get_htype();
for($i=0;$i<count($hcategory);$i++) {
    for($j=0;$j<count($htype);$j++) {
        $hcat1 = $hcategory[$i];
        $htype1 = $htype[$j];
        $matched_prods = [];
        foreach($prod_idlist as $product_id) {
            if(get_field('種類', $product_id) == $hcat1 && get_field('タイプ', $product_id) == $htype1) {
                if($selected_maker_id > 0 && get_field('maker', $product_id) == $selected_maker_id) {
                    if($selected_product_id > 0 && $product_id != $selected_product_id) {
                        if($selected_hcategory == get_field('種類', $product_id) && $selected_htype == get_field('タイプ', $product_id)) {
                            array_push($matched_prods, $product_id);
                        }    
                    }                    
                }
            }
        }
        if(count($matched_prods)>0) {
            $prodgroup = [$hcat1,$htype1, $matched_prods];
            array_push($prodgroup_list, $prodgroup);
        }
    }
}
?>
<!-- CONTAIN_START -->
<section id="contain">    	        
    <div class="instead_head"></div>
    <div class="pg_fv">
        <div class="cwidth14">
            <div class="pgfv_cat"><?php echo get_the_title($selected_maker_id); ?></div>
            <div class="pgfv_title"><h1><?php echo get_the_title($selected_product_id); ?></h1></div>
        </div>
    </div>
    <div class="cwidth14">
        <div class="protail_row">
            <div class="product_img">
                <div class="product_img1"><img src="<?php echo get_field('photo', $selected_product_id); ?>"></div>
                <div class="hx4"></div>
<?php if(get_field('種類', $selected_product_id) == 'エコジョーズ'): ?>
                <div class="product_img2"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/ecoj.png"></div>
<?php endif; ?>
            </div>
            <div class="product_detail">
                <div class="product_info">
                    <div class="prodinfo_row1">
                        メーカー希望価格
                    </div>
                    <div class="prodinfo_row2">
                        <div class="mprice_cap">給湯器本体＋標準リモコン</div>
                        <div class="mprice_val">
                            【定価】
                            <span class="mprice_num"><?php echo get_field('給湯器本体＋標準リモコン', $selected_product_id); ?></span>
                            <span class="mprice_span">円（税込）</span>
                        </div>
                    </div>
                    <div class="prodinfo_row3">
                        <span>神奈川給湯器交換センター価格</span>
                        <div class="price_off">
							<div class="priceoff_top"><span class="priceoff_val"><?php echo get_field('割引率', $selected_product_id); ?></span>%</div>
							<div class="priceoff_bottom">OFF</div>
						</div>
                    </div>
                    <div class="prodinfo_row4">
                        <div class="price_cap">本体（工事費別）</div>
                        <div class="price_val">
                            <span class="price_num"><?php echo get_field('本体', $selected_product_id); ?></span>&nbsp;円（税込）
                        </div>
                    </div>
                    <div class="prodinfo_row5">
                        <div class="fprice_cap">給湯器本体＋標準リモコン＋工事費</div>
                        <div class="fprice_val">
                            <span class="fprice_num"><?php echo get_field('本体＋リモコン＋工事費合計', $selected_product_id); ?></span>&nbsp;円（税込）
                        </div>
                    </div>
                </div>
                <div class="hx4"></div>
                <div class="prodinfo_table">
                    <div class="company_table">
                        <div class="company_dtbg"></div>
                        <dl>
                            <dt>種類</dt>
                            <dd><?php echo get_field('種類', $selected_product_id); ?></dd>
                        </dl>
                        <dl>
                            <dt>タイプ</dt>
                            <dd><?php echo get_field('タイプ', $selected_product_id); ?></dd>
                        </dl>
                        <dl>
                            <dt>号数</dt>
                            <dd><?php echo get_field('号数', $selected_product_id).'号'; ?></dd>
                        </dl>
                        <dl>
                            <dt>設置場所</dt>
                            <dd><?php echo get_field('設置場所', $selected_product_id); ?></dd>
                        </dl>
                        <dl>
                            <dt>リモコン品番</dt>
                            <dd><?php echo get_field('リモコン品番', $selected_product_id); ?></dd>
                        </dl>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="hx5"></div>
    <div class="cwidth14">
        <div class="insure_frame">
            <div class="insure_row1">リース契約<br class="disb_sp">【リース利率1.27％】</div>
            <div class="insure_row2">
                <div class="insure_period">期間&nbsp;<span class="insure_val">8</span>年</div>
                <div class="insure_price">月額<span class="span1" >わずか</span>&nbsp;<span class="insure_val">2,140</span><span class="span2">円（税込）</span></div>
            </div>
            <div class="insture_row3">
                <div class="hx4"></div>
                <div class="insure_grid">
                    <div class="insure_item">
                        <div class="insure_img"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/insure01.svg"></div>
                        <div class="insure_text">給湯器本体</div>
                    </div>
                    <div class="insure_item">
                        <div class="insure_img"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/insure02.svg"></div>
                        <div class="insure_text">リモコン</div>
                    </div>
                    <div class="insure_item">
                        <div class="insure_img"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/insure03.svg"></div>
                        <div class="insure_text">取付工事費</div>
                    </div>
                    <div class="insure_item">
                        <div class="insure_img"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/insure04.svg"></div>
                        <div class="insure_text">出張費</div>
                    </div>
                    <div class="insure_item">
                        <div class="insure_img"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/insure05.svg"></div>
                        <div class="insure_text">運搬費</div>
                    </div>
                    <div class="insure_item">
                        <div class="insure_img"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/insure06.svg"></div>
                        <div class="insure_text">廃棄費</div>
                    </div>
                    <div class="insure_item">
                        <div class="insure_img"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/insure07.svg"></div>
                        <div class="insure_text">無制限修理保証付</div>
                    </div>
                </div>
                <div class="hx2"></div>
                <div class="insure_text2">月額費用にすべてコミコミ!!</div>
                <div class="hx3"></div>
                
            </div>
            <div class="insture_row4">リース契約は、家賃収入を目的とする物件が対象となり、自己使用を目的とする物件は対象外となります。</div>
        </div>
    </div>
    <div class="hx10"></div>
<?php if(count($prodgroup_list)>0): ?>    
    <div class="prods_bg">
        <div class="cwidth14">
<?php
foreach($prodgroup_list as $prodgroup) {
?>            
            <div class="hx4"></div>            
            <div class="prods_subtitle"><h2><?php echo $prodgroup[0].'／'.$prodgroup[1]; ?></h2></div>
            <div class="hx4"></div>
            <div class="prods_row">
<?php
    foreach($prodgroup[2] as $product_id) {
        $maker_id = get_field('maker', $product_id);
?>                
                <a class="prods_item" href="<?php echo get_the_permalink($product_id); ?>">
                    <div class="prodsitem_flex1">
                        <div class="noritz_logo"><img src="<?php echo get_field('logo', $maker_id); ?>"></div>
                        <div class="prods_cat"><?php echo get_the_title($maker_id); ?></div>
                    </div>
                    <div class="prodsitem_img">
                        <img src="<?php echo get_field('photo', $product_id); ?>">
                    </div>
                    <div class="prodsitem_name"><?php echo get_field('種類', $product_id); ?></div>
                    <div class="prodsitem_flex2">
                        <div class="prodsitem_prop1"><?php echo get_field('タイプ', $product_id); ?></div>
                        <div class="prodsitem_prop2"><span><?php echo get_field('号数', $product_id); ?></span>号</div>
                    </div>
                    <div class="prodsitem_flex3">
                        <div class="prodsitem_price">
                            <div class="prodsitem_price1">特別価格</div>
                            <div class="prodsitem_price2"><span><?php echo get_field('本体＋リモコン＋工事費合計', $product_id); ?></span>円(税込)</div>
                        </div>
                        <div class="prodsitem_price">
                            <div class="prodsitem_price1">リース価格</div>
                            <div class="prodsitem_price2">月々<span><?php echo get_field('月額わずか', $product_id); ?></span>円(税込)</div>
                        </div>
                    </div>
                </a>
<?php
    }
?>                                
            </div>
<?php
}
?>
            <div class="hx6"></div>
        </div>
    </div>
<?php endif; ?>
    <div class="hx10"></div>
</section>
<!-- CONTAIN_END -->

<?php
get_footer();
