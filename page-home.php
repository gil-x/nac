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
    echo '<a href="https://www.facebook.com/newaccesscompta" target="_blank"><img class="social-icon" src="' . get_template_directory_uri() . '/img/facebook2.svg" alt="Facebook" title="Facebook"></a>';
	echo '<a href="" target="_blank"><img class="social-icon" src="' . get_template_directory_uri() . '/img/linkedin2.svg" alt="Linkedin" title="Linkedin"></a>';
	echo '<a href="https://twitter.com/newaccesscompta" target="_blank"><img class="social-icon" src="' . get_template_directory_uri() . '/img/twitter2.svg" alt="Twitter" title="Twitter"></a>';
    echo '<a href="https://www.instagram.com/newaccesscompta/" target="_blank"><img class="social-icon" src="' . get_template_directory_uri() . '/img/instagram2.svg" alt="Instagram" title="Instagram"></a>';
    ?>
</div>


<?php
get_footer();
?>





