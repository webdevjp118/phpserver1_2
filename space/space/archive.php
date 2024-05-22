<?php
get_header();
global $wp_query;
$query = $wp_query;

get_template_part('template-parts/common-news');
?>

<?php
get_footer();
