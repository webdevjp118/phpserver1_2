<?php
get_header();
$selected_maker_id = 0;
while ( have_posts() ) :
	the_post();
	$selected_maker_id = get_the_ID();
endwhile; // End of the loop.
?>
<?php get_template_part('template-parts/common-products'); ?>
<?php
get_footer();
