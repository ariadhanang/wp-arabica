<?php get_header(); ?>

<?php
if (have_posts()) :
	while(have_posts()) : the_post();
		the_title();
		the_post_thumbnail();
		the_excerpt();
	endwhile;
endif;
?>

<?php get_footer(); ?>
