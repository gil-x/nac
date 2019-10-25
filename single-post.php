<?php get_header();
// echo '<main class="single-post-container">';
// echo '<div class="single-post">';
echo '<main class="page">';

?>

	<?php
	if( have_posts() ):
		while( have_posts() ): the_post();
		
		get_template_part('content-post', get_post_format());

		endwhile;
    endif;
    ?>

<?php 
// get_sidebar();
echo '</main>';

get_footer(); ?>
    