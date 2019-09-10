<?php

/*
    Template Name: Contact
*/

get_header();

echo '<main class="contact">';

if( have_posts() ):

	echo '<h1>' . get_the_title() . '</h1>';

	if (has_post_thumbnail($_post->ID)) {
		echo '<img src="' . get_the_post_thumbnail_url( $_post->ID, 'post-thumbnail' ) . '" alt="" />';
	}

	while( have_posts() ): the_post();
		echo '<div class="content">';
        the_content();
        echo '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2624.0458764773666!2d2.323507315675012!3d48.876401979289255!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e66e356e7f5919%3A0xf48ece3a415755dc!2s1%20Cour%20du%20Havre%2C%2075008%20Paris!5e0!3m2!1sfr!2sfr!4v1568136027701!5m2!1sfr!2sfr" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>';
		echo '</div>';
	endwhile;
	
endif;



echo '</main>';

?>

<?php get_footer(); ?>