<h1><?php the_title(); ?></h1>

<?php 
echo '<img src="' . get_the_post_thumbnail_url( $_post->ID, 'post-thumbnail' ) . '" alt="" />';
?>

<?php the_content(); ?>

	<?php get_sidebar(); ?>
</div>
