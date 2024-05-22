<?php /* Template Name: Top page width Area*/ ?>
<?php
get_header();
?>
<!-- CONTAIN_START -->
<!-- <div class="state_vals is_top"></div> -->
<section id="contain">    	        
    <div class="instead_head"></div>
    <div class="top_fv">
        <div class="tpfv_back">
            <img class="disb_pc" src="<?php echo get_stylesheet_directory_uri(); ?>/images/top_fv.jpg">
            <img class="disb_sp" src="<?php echo get_stylesheet_directory_uri(); ?>/images/tpfv_sp.jpg">
        </div>
        <div class="tpfv_front">
            <div class="tpfv_width">
                <!-- <div class="tpfv_area"><p>神奈川の</p></div>
                <div class="tpfv_title"><h1>ガス給湯器・エコジョーズ<br class="disb_sp"><span>専門店</span></h1></div>     -->
                <div class="tpfv_title">
                    <h1>
                        <span class="span1"><?php echo get_the_title(); ?>の</span><br>
                        <span class="span2">ガス給湯器・エコジョーズ</span><br class="disb_sp">
                        <span class="span3">専門店</span>
                    </h1>
                </div>
                <div class="tpfv_bottom">
                    <div class="tpfv_desc">
                        <div class="tpfv_desc1">
                            <span class="span1">マンション・アパートオーナー、</span><br>
                            <span class="span2">不動産管理会社の方は</span>&nbsp;<span class="span3">必見!</span>
                        </div>
                        <div class="tpfv_price">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/tpfv_price.svg">
                        </div>
                        <div class="tpfv_desc2">工事費込みで交換できます！</div>
                    </div>
                </div>            
            </div>
            <div class="tpfv_spmedals">
                <div class="tpfv_medal"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/tpmedal01.svg"></div>
                <div class="tpfv_medal"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/tpmedal02.svg"></div>
                <div class="tpfv_medal"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/tpmedal03.svg"></div>
            </div>
        </div>        
    </div>
    <div class="top_fv2">
        <div class="topfv2_back">
            <img class="disb_pc" src="<?php echo get_stylesheet_directory_uri(); ?>/images/tpfv2.svg">
            <img class="disb_sp" src="<?php echo get_stylesheet_directory_uri(); ?>/images/sp_tpfv2.svg">
        </div>
        <div class="tpfv2_front">
            <div class="tpfv_product">
                <div class="tpfvproduct_left">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/tpfv_left.png">
                </div>
                <div class="tpfvproduct_right">
                    <div class="tpfv_medal"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/tpmedal01.svg"></div>
                    <div class="tpfv_medal"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/tpmedal02.svg"></div>
                    <div class="tpfv_medal"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/tpmedal03.svg"></div>
                </div>
            </div>
            <div class="tofpv2_title">
                <div class="cwidth14">
                    <div class="tp_title1">
                        <p>神奈川給湯器交換センターの</p>
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
                        <div class="tproditem_logo1"><img src="<?php echo get_field('logo', $loop_maker_id); ?>"></div>
                        <div class="tproditem_cat"><?php echo $loop_title; ?></div>
                    </div>
                    <div class="hx2"></div>
                    <div class="tproditem_row">
                        <div class="tproditem_left">
                            <div class="tproditem_img">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/product_detail.png">
                            </div>
                            <div class="tproditem_off">
                                <div class="tprice_off">
                                    <div class="tpriceoff_top"><span class="tpriceoff_val"><?php echo get_field('割引率', $loop_id); ?></span>%</div>
                                    <div class="tpriceoff_bottom">OFF</div>
                                </div>
                            </div>
                        </div>
                        <div class="tproditem_right">
                            <div class="tproditem_cat"></div>
                            <div class="hx4"></div>
                            <div class="tproditem_detail">
                                <div class="tproditem_row1">
                                    <div class="tproditem_col11"><?php echo get_field('種類', $loop_id); ?></div>
                                    <div class="tproditem_col12"><?php echo get_field('タイプ', $loop_id).get_field('号数', $loop_id).'号'; ?></div>
                                </div>
                                <div class="hx2"></div>
                                <div class="tproditem_row1">
                                    <div class="tproditem_col11">定価</div>
                                    <div class="tproditem_col22"><span class="tproditem_val"><?php echo '¥'.get_field('給湯器本体＋標準リモコン', $loop_id); ?></span>(税込)</div>
                                </div>
                                <div class="hx2"></div>
                                <div class="tproditem_row1">
                                    <div class="tproditem_col31">特別価格</div>
                                    <div class="tproditem_col32"><span class="tproditem_val"><?php echo '¥'.get_field('本体＋リモコン＋工事費合計', $loop_id); ?></span>(税込)</div>
                                </div>
                                <div class="hx2"></div>
                                <div class="tproditem_row1">
                                    <div class="tproditem_col31">リース価格</div>
                                    <div class="tproditem_col32">月々<span class="tproditem_val"><?php echo '¥'.get_field('月額わずか', $loop_id); ?></span>(税込)</div>
                                </div>
                            </div>
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
        <a class="tpoducts_btn" href="<?php echo get_site_url(); ?>/product/"><span>すべての商品を見る</span><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/tproducts_btn.svg"></a>
    </div>
    <div class="hx10"></div>
    <div class="cwidth14">
        <div class="treason_title">
            <div class="treason_title1">
                <div class="treasontitle1_1">
                    神奈川給湯器交換センターが
                </div>
                <div class="treasontitle1_2"><span class="span1">選</span><span class="span2">ばれる</span><span class="span3">理由</span></div>
            </div>
            <div class="hx3"></div>
            <div class="treason_title2">
                <div class="treason_no"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/treason_no1.svg"></div><h2>一元管理だからこそできる<br class="disb_sp"><span>迅速工事対応</span></h2>
            </div>
        </div>
    </div>
    <div class="hx3"></div>
    <div class="treason_row">
        <div class="treason_left">
            <div class="treason_subtle">他社の場合</div>
            <div class="hx5"></div>
            <div class="treason_img">
                <img class="disb_pc" src="<?php echo get_stylesheet_directory_uri(); ?>/images/treasonl_img.svg">
                <img class="disb_sp" src="<?php echo get_stylesheet_directory_uri(); ?>/images/sp_treasonl_img.svg">
            </div>
            <div class="treasonl_text">
                購入と施工の業者が異なるため、手間・時間・費用コストが掛かり、責任の所在があいまい。メンテナンスも別途発注が必要で、管理はお客様のご負担。
            </div>
            <div class="treasonl_textimg">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/reason_person01.png">
            </div>
        </div>
        <div class="treason_right">
            <div class="treason_subtle">神奈川給湯器交換センターの場合</div>
            <div class="hx5"></div>
            <div class="treason_img">
                <img class="disb_pc" src="<?php echo get_stylesheet_directory_uri(); ?>/images/treasonr_img.svg">
                <img class="disb_sp" src="<?php echo get_stylesheet_directory_uri(); ?>/images/sp_treasonr_img.svg">
            </div>
            <div class="treasonr_text">
                購入・施工から管理・メンテナンスまで一貫して対応できるため、迅速かつ正確な連携を提供！<br>
                手間・時間・費用コストを大幅に削減し、責任対応でお客様のご負担をも減らします！<br>
                しかも「365日受付」「365日施工」で安心!!
            </div>
            <div class="treasonr_textimg">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/reason_person02.png">
            </div>
        </div>
    </div>
    <div class="hx5"></div>
    <div class="cwidth14">
        <div class="treason_title2">
            <div class="treason_no"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/treason_no2.svg"></div><h2>流通経路をスリム化し、<span>業界最安値を実現</span></h2>
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
                    <img class="disb_pc" src="<?php echo get_stylesheet_directory_uri(); ?>/images/treason2_img.svg">
                    <img class="disb_sp" src="<?php echo get_stylesheet_directory_uri(); ?>/images/sp_treason2_img.svg">
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
                <div class="treason2_title"><h3>神奈川給湯器交換センターの場合</h3></div>
                <div class="hx2"></div>
                <div class="treason2_img">
                    <img class="disb_pc" src="<?php echo get_stylesheet_directory_uri(); ?>/images/treason3_img.svg">
                    <img class="disb_sp" src="<?php echo get_stylesheet_directory_uri(); ?>/images/sp_treason3_img.svg">
                </div>
                <div class="treason2_text">中間業者を省き、メーカー側から直接仕入れることで流通経路をスリム化！無駄なコストを販売価格に上乗せすることなく、業界最安値を実現!!</div>
                <div class="hx4"></div>
            </div>
        </div>
    </div>
    <div class="hx10"></div>
</section>
<!-- CONTAIN_END -->
<?php
get_footer();
