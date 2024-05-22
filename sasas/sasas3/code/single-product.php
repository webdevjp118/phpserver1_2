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
                <div class="product_img1"><img src="<?php echo get_field('photo', $selected_product_id); ?>" alt="名古屋の給湯器料金が一番安い購入方法"></div>
                <div class="hx4"></div>
<?php if(get_field('種類', $selected_product_id) == 'エコジョーズ'): ?>
                <div class="product_img2"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/ecoj.png" alt="名古屋のエコジョーズの値段が安い料金設定"></div>
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
                        <span>名古屋給湯器交換センター価格</span>
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
                        <div class="fprice_cap">標準工事費・撤去処分費<br>コミコミ特別価格</div>
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
    <div class="hx8"></div>
    <div class="cwidth14">
        <div class="insure_frame">
            <div class="insure_row1">当店の特別価格には、<br class="disb_sp">以下サービスがすべてコミコミ!!</div>
            <div class="insture_row3">
                <div class="proten">
                    <div class="proten_col">
                        <div class="hat_row">
                            <div class="hat_img"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/insure07.svg"></div>
                            <div class="hat_text">
                                <span>メーカー製品保証</span><br>（延長は別途有償）
                            </div>
                        </div>
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
                        </div>
                    </div>
                    <div class="proten_col">
                        <div class="hat_row">
                            <div class="hat_img"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/heater_hat.png"></div>
                            <div class="hat_text">
                                <span>工事保証10年</span><br>（無償メンテナンス込）
                            </div>
                        </div>
                        <div class="hx4"></div>
                        <div class="insure_grid">
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
                        </div>
                    </div>
                </div>
            </div>
            <div class="insture_row4">
                標準工事を超える工事については、事前お見積りにて詳細をお伝えいたします。<br>
                よって、後から追加費用が生じることは一切ございませんのでご安心ください。</div>
        </div>
    </div>
    <div class="hx8"></div>
    <div class="cwidth14">
        <div class="detail_pref">当店の標準工事内容には以下の内容が含まれています。</div>
        <div class="hx3"></div>
        <div class="nagoya_row">
            <div class="nagoya_col">
                <div class="nagoya_title">
                    戸建住宅（一軒家）<br>
                    <span>の給湯器交換標準工事</span>
                </div>
                <div class="hx2"></div>
                <div class="nagoya_title2"></div>
                <div class="nagoya_img"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/nagoya01.jpg"></div>
                <div class="hx4"></div>
                <div class="nagoya_p">
                    <p>既存給湯器の取り外し・撤去・処分</p>
                    <p>新設給湯器の取り付け・設置</p>
                    <p>給湯・給水配管（追いだき配管）接続</p>
                    <p>ガス管接続（ガス可とう管交換は別途請求）</p>
                    <p>リモコン交換（2台まで・位置移動は別途）</p>
                    <p>保温チューブ交換（各配管概ね1Mまで）</p>
                    <p>エコジョーズ機種のドレン排水配管工事（概ね２Mまで）</p>
                    <p>熱源機機種の暖房機器配管接続</p>
                    <p>試運転（出湯、最少湯量でお湯はり停止まで）</p>
                    <p>現場廃材・ゴミ処理</p>
                    <p>工事保証10年間付</p>
                </div>
            </div>
            <div class="nagoya_col">
                <div class="nagoya_title">
                    集合住宅（マンション・アパート）<br>
                    <span>の給湯器交換標準工事</span>
                </div>
                <div class="hx2"></div>
                <div class="nagoya_title2"></div>
                <div class="nagoya_img"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/nagoya02.jpg"></div>
                <div class="hx4"></div>
                <div class="nagoya_p">
                    <p>既存給湯器の取り外し・撤去・処分</p>
                    <p>新設給湯器の取り付け・設置</p>
                    <p>給湯・給水配管（追いだき配管）接続</p>
                    <p>ガス管接続（ガス可とう管交換は別途請求）</p>
                    <p>リモコン交換（2台まで・位置移動は別途）</p>
                    <p>吸排気管接続（延長が必要な場合は別途）</p>
                    <p>熱源機機種の暖房機器配管接続</p>
                    <p>試運転（出湯、最少湯量でお湯はり停止まで）</p>
                    <p>現場廃材・ゴミ処理</p>
                    <p>工事保証10年間付</p>
                </div>
            </div>
        </div>
        <div class="hx8"></div>
        <div class="additional_title"><p>補足事項</p></div>
        <div class="additional_row">
            <div class="additional_p">
                <p>
                    ※給湯器の設置場所が高所や狭い場所など設置状態により別途費用が生じる場合がございます。<br>
                    ※現場が遠方の場合、出張交通費が加算される場合がございます。<br>
                    ※近隣に駐車スペースが確保出来ない場合は別途料金を頂戴いたします。<br>
                    ※いずれも別途費用が必要な場合は、事前のお見積り段階で詳細をご案内いたしますので、ご納得いただいた上でのご契約ください。
                </p>
            </div>
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
                        <div class="flex_full">&nbsp;</div>
                        <div class="prodsitem_prop3"><?php echo get_the_title($product_id); ?></div>
                    </div>
                    <div class="prodsitem_flex3">
                        <div class="prodsitem_price">
                            <div class="prodsitem_price1">工事費・撤去処分費<br>コミコミ特価</div>
                            <div class="prodsitem_price2"><span><?php echo get_field('本体＋リモコン＋工事費合計', $product_id); ?></span>円(税込)</div>
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
