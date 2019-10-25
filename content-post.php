<?php echo '<div class="single post">' ;?>

<h1><?php the_title(); ?></h1>


<?php

echo '<div class="post-header">';
echo '<p class="excerpt">' . get_the_excerpt() . '</p>';
echo '<img class="thumbnail" src="' . get_the_post_thumbnail_url( $_post->ID, 'post-thumbnail' ) . '" alt="" />';
echo '</div>';

?>

<?php the_content();

echo '<div class="credit">
<span class="author">Ecrit par ' . get_the_author() . '</span> - <span class="date">' . get_the_date() . '</span>
</div>';

// get_sidebar();?>

</div>
