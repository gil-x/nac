<?php

/*
    Template Name: Actualités
*/

get_header();

$args = array(
    'post_type' => 'post',
    'post_status' => 'publish',
    'posts_per_page' => 6,
);

$query = new WP_Query($args);

echo '<h1 class="blog-title">(' . get_the_title() . ')</h1>';

echo '<main class="page blog">';

echo '<div class="post-container">';
if ( $query->have_posts() ) {
    while ( $query->have_posts() ) {
        $query->the_post();
        echo '<div class="post">' ;
        echo '<h2><a href="' . get_permalink($id) . '" title="' . get_the_title() . '">' . get_the_title() . '</a></h2>';
        echo '<a href="' . get_permalink($id) . '" title="' . get_the_title() . '"><img src="' . get_the_post_thumbnail_url( $_post->ID, 'post-thumbnail' ) . '" alt="" /></a>';
        echo '<p>' . get_the_excerpt() . '</p>';
        echo '<p class="read-more">';
        echo '<a href="' . get_permalink($id) . '" title="' . get_the_title() . '">> voir</a>';
        echo '</p>';
        echo '</div>' ;
    }
    wp_reset_postdata();
} else {
    echo "<p>Aucune actualité pour l'instant...</p>";
}
echo '</div>' ;
get_sidebar();
echo '</main>';
// test_text() ;
// echo "<p>Aucune actualité pour l'instant...</p>";
// pressPagination($pages ='', $range = 2) ;





get_footer(); ?>
