<?php

/*
    Template Name: Homepage
*/

get_header();

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

?>

<div class="social">
    <?php
    echo '<img class="social-icon" src="' . get_template_directory_uri() . '/img/facebook.svg" alt="Facebook" title="Facebook">';
	echo '<img class="social-icon" src="' . get_template_directory_uri() . '/img/linkedin.svg" alt="Linkedin" title="Linkedin">';
	echo '<img class="social-icon" src="' . get_template_directory_uri() . '/img/twitter.svg" alt="Twitter" title="Twitter">';
    echo '<img class="social-icon" src="' . get_template_directory_uri() . '/img/instagram.svg" alt="Instagram" title="Instagram">';
    ?>
</div>


<?php
get_footer();
?>