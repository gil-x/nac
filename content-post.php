<?php echo '<div class="single post">' ;?>

<h1><?php the_title(); ?></h1>


<?php

echo '<div class="post-header">';
echo '<p class="excerpt">' . get_the_excerpt() . '<br><span class="date">_<br>' . get_the_date() . '</span></p>';
echo '<img class="thumbnail" src="' . get_the_post_thumbnail_url( $_post->ID, 'post-thumbnail' ) . '" alt="" />';

echo '</div>';

?>

<?php the_content(); ?>

<?php // get_sidebar();?>

</div>
