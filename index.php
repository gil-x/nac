<?php get_header(); ?>


<?php

echo '<main class="page">';

if( have_posts() ):

	echo '<h1>' . get_the_title() . '</h1>';

	if (has_post_thumbnail($_post->ID)) {
		echo '<img src="' . get_the_post_thumbnail_url( $_post->ID, 'post-thumbnail' ) . '" alt="" />';
	}

	while( have_posts() ): the_post();
		echo '<div class="content">';
		the_content();
		echo '</div>';
	endwhile;
	
endif;

get_sidebar();
echo '</main>';

get_footer();

?>
