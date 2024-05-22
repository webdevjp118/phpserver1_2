<?php
get_header();
if ( have_posts() ) :
    while ( have_posts() ) :
        the_post();
        $loop_id = get_the_id();
        $loop_title = get_the_title();
        $loop_content = get_the_excerpt();
        $loop_date = get_the_date('Y.m.d');
        $loop_category_name = "";
        $loop_category_objects = get_the_category($loop_id);
        foreach($loop_category_objects as $cd){
            $loop_category_name = $cd->cat_name;
            break;
        }
        $loop_permalink = get_the_permalink($loop_id);
        $loop_thumb_url = get_thumb_url($loop_id);
?>
<!-- CONTAIN_START -->
<section id="contain">    	        
    <div class="c_width12">
		<div class="hx12"></div>
		<div class="mypost_title">
			<h1><?php echo $loop_title; ?></h1>
		</div>
		<div class="hx4"></div>
		<div class="pmhwp">
			<?php the_content(); ?>
		</div>
		<div class="hx12"></div>
	</div>
</section>
<?php
    endwhile;
endif;	
?>
<!-- CONTAIN_END -->
<?php
get_footer();
