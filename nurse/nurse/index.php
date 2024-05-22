<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package nurse
 */

get_header();
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
								<li><a href="#">介護事業</a></li>
								<li><a class="active" href="#">有料老人ホーム事業</a></li>
								<li><a href="#">障がい児通所支援</a></li>
								<li><a href="#">お知らせ</a></li>
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
							<li class="breadcrumb-item"><a href="#">トップ </a></li>
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
								<a href="#">メンテナンス事業のお問い合わせはコチラ<img src="images/child_icon_feather.svg" alt=""/></a>
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
							<div class="notice_box_ntp">
								<a href="#">
									<div class="notice_date_ntp">
										2021年3月17日
									</div>
									<div class="notice_info_ntp">
										お知らせタイトルがあります。お知らせタイトルがあります。
									</div>
								</a>
							</div>
							<div class="notice_box_ntp">
								<a href="#">
									<div class="notice_date_ntp">
										2021年3月17日
									</div>
									<div class="notice_info_ntp">
										お知らせタイトルがあります。お知らせタイトルがあります。
									</div>
								</a>
							</div>
							<div class="notice_box_ntp">
								<a href="#">
									<div class="notice_date_ntp">
										2021年3月17日
									</div>
									<div class="notice_info_ntp">
										お知らせタイトルがあります。お知らせタイトルがあります。
									</div>
								</a>
							</div>
							<div class="notice_box_ntp">
								<a href="#">
									<div class="notice_date_ntp">
										2021年3月17日
									</div>
									<div class="notice_info_ntp">
										本社、移転について
									</div>
								</a>
							</div>
							<div class="notice_box_ntp">
								<a href="#">
									<div class="notice_date_ntp">
										2021年3月17日
									</div>
									<div class="notice_info_ntp">
										本社、移転について
									</div>
								</a>
							</div>                                
						</div>	
						<div class="notice_pagination_ntp">
							  <nav aria-label="Page navigation example">
								  <ul class="pagination justify-content-center">
									  <li class="page-item disabled">
										   <a class="page-link" href="#"><img src="images/pagination_left_arrow.svg" alt="" /></a>
									  </li>
									<li class="page-item"><a class="page-link active" href="#">1</a></li>
									<li class="page-item"><a class="page-link" href="#">2</a></li>
									<li class="page-item"><a class="page-link" href="#">4</a></li>
									<li class="page-dot"><a class="page-link" href="#">...</a></li> 
									<li class="page-item"><a class="page-link" href="#">9</a></li>
									<li class="page-item">
										<a class="page-link" href="#"><img src="images/pagination_right_arrow.svg" alt="" /></a>
									</li>
								</ul>
							</nav>
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
