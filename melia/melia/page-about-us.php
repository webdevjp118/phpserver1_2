<?php
get_header();
?>
<?php
    while ( have_posts() ) :
        the_post();
    endwhile; // End of the loop.
?>
<?php
get_footer();
