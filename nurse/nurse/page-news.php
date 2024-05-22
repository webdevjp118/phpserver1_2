<?php
get_header();
?>

<?php
$args = array(
    'post_type' => 'post',
    'paged' => get_query_var('paged'),
    'orderby' => 'publish_date',
    'order' => 'DESC',
//'posts_per_page' => -1, //page limit
);
$query = new WP_Query($args);
?>

<!-- CONTAIN_START -->
<section id="contain">    	        
    
    <div class="nursing_block_np">             
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 nursing_block_in_np">                    	
                    <div class="nursing_middle_np"> 
                        <div class="nursing_link_np">
                            <ul>
                                <li><a href="<?php echo get_site_url(); ?>/care/">介護事業</a></li>
                                    <li><a class="" href="<?php echo get_site_url(); ?>/nursinghome/">有料老人ホーム事業</a></li>
                                    <li><a href="<?php echo get_site_url(); ?>/disabled/">障がい児通所支援</a></li>
                                    <li><a class="active" href="<?php echo get_site_url(); ?>/news/">お知らせ</a></li>
                            </ul>                                
                        </div>				     
                    </div>                                               
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>            
        <div class="clearfix"></div>
    </div> 
    
    <div class="breadcrumb_block_sp">             
        <div class="container container_inner">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 breadcrumb_block_in_sp">
                    <div class="breadcrumb_middle_sp">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?php echo get_site_url(); ?>">トップ </a></li>
                            <li class="breadcrumb-item"><a href="#"><span>お知らせ</span></a></li>
                        </ol>                                                                                             
                    </div>                       
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>            
        <div class="clearfix"></div>
    </div>
               
    <div class="child_block_cp">             
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 child_block_in_cp">                    	
                    <div class="child_middle_cp">
                        <div class="common_page_title_ncp">
                            <div class="common_page_title_in_ncp">
                                <h2>お知らせ</h2>
                            </div>
                            <div class="child_btn_cp">
                                <a href="#">メンテナンス事業のお問い合わせはコチラ<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/child_icon_feather.svg" alt=""/></a>
                            </div>
                        </div>                         					     
                    </div>                                               
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>            
        <div class="clearfix"></div>
    </div>	
    
       <div class="notice_block_ntp">             
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 notice_block_in_ntp">                    	
                    <div class="notice_middle_ntp"> 
                        <div class="notice_top_ntp">
<?php
if ( $query->have_posts() ) :
    while ( $query->have_posts() ) :
        $query->the_post();
        $loop_id = get_the_id();
        $loop_title = get_the_title();
        $loop_date = get_the_date('Y年m月d日');
        $loop_permalink = get_the_permalink($loop_id);
?>
                            <div class="notice_box_ntp">
                                <a href="<?php echo $loop_permalink; ?>">
                                    <div class="notice_date_ntp">
                                        <?php echo $loop_date; ?>
                                    </div>
                                    <div class="notice_info_ntp">
                                        <?php echo $loop_title; ?>
                                    </div>
                                </a>
                            </div>
<?php
    endwhile;
endif;	
?>
                        </div>	
                        <div class="notice_pagination_ntp">
                            <div class="pagination_wrap">
                                <?php wp_pagenavi(array('query' => $query)); ?>	
                            </div>
                        </div>			     
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
