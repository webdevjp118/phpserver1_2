<?php
global $selected_maker_id;
$related_args = array(
	'post_type' => 'maker',
	'posts_per_page' => -1,
);
$query = new WP_Query( $related_args );
$maker_idlist = [];
if ( $query->have_posts() ) :
    while ( $query->have_posts() ) :
        $query->the_post();
        $loop_id = get_the_id();
        array_push($maker_idlist, $loop_id);
    endwhile;
endif;
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
                    array_push($matched_prods, $product_id);
                } else if ($selected_maker_id <= 0) {
                    array_push($matched_prods, $product_id);
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
            <div class="pgfv_title"><h1>取扱商品一覧</h1></div>
        </div>
    </div>
    <div class="cwidth14">
        <div class="prods_tabs">
<?php
foreach($maker_idlist as $maker_id) {
    $maker_permalink = get_the_permalink($maker_id);
    $maker_title = get_the_title($maker_id);
    if($selected_maker_id == $maker_id) {
?>
            <a class="prods_tab X_active" href="#"><?php echo get_the_title($maker_id).'給湯器'; ?></a>
<?php
    } else {
?>            
            <a class="prods_tab" href="<?php echo $maker_permalink; ?>"><?php echo get_the_title($maker_id).'給湯器'; ?></a>
<?php
    }
}
?>
        </div>
    </div>
    <div class="hx4"></div>
    <div class="prods_bg">
        <div class="cwidth14">
<?php
foreach($prodgroup_list as $prodgroup) {
?>
            <div class="hx4"></div>
            <div class="prods_subtitle"><h2><?php echo $prodgroup[0].'／'.$prodgroup[1] ?></h2></div>
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
    <div class="hx10"></div>
</section>
<!-- CONTAIN_END -->