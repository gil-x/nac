<?php echo '<div class="single post">' ;?>

<h1><?php echo '<a href="' . get_home_url() . '" title="Retourner au blog">Blog</a> / '. get_the_title(); ?></h1>



<?php
echo '
<div class="credit">
    <span class="date">' . get_the_date() . '</span> · <span class="author">Par ' . get_the_author() . '</span>
</div>
';

echo '<div class="post-header">';
echo '<p class="excerpt">' . get_the_excerpt() . '</p>';
echo '<img class="thumbnail" src="' . get_the_post_thumbnail_url( $_post->ID, 'post-thumbnail' ) . '" alt="" />';
echo '</div>';

the_content();

echo '
<div class="post-footer">
<a class="back" href="' . get_home_url() . '">‹‹ Revenir à l\'accueil</a>
    ';

get_sidebar();

echo '</div>';
?>

</div>
