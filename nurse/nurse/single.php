<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package nurse
 */

get_header();
?>
<?php
if ( have_posts() ) :
    while ( have_posts() ) :
        the_post();
        $loop_id = get_the_id();
        $loop_title = get_the_title();
        $loop_date = get_the_date('Y年m月d日');
        $loop_permalink = get_the_permalink($loop_id);
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
                        <div class="common_page_title_ncp news_title">
                            <div class="common_page_title_in_ncp">
                                <h2><?php echo $loop_title; ?></h2>
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

                            <div class="pmhwp">
								<?php the_content(); ?>
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
    endwhile;
endif;	
?>

<?php
get_footer();
