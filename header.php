<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title><?php the_title_attribute() ?></title>
		<?php wp_head(); ?>
	</head>

<?php
if (is_front_page()) {
	echo '<body class="home">';
}
else {
	echo '<body>';
}
?>

<header>
	<div class="logo">
		<?php echo '<a href="' . get_home_url() . '" title="Revenir à l\'accueil"><sup id="plus">+</sup><span id="new">new</span><span id="access">access</span><span id="compta">compta</span></a>'; ?>
	</div>
	<p class="slogan">
		<?php echo get_bloginfo( $show = 'description', $filter = 'raw' )?>
	</p>
</header>

<?php

echo '<a href="#" id="burger" class="menu-open"></a>';
echo '<nav id="menu" class="menu-off">';
echo '<a href="#" id="close" class="menu-close off">';
wp_nav_menu(array('theme_location'=>'primary'));

echo '<div class="customer-menu-container">';
echo '<span class="title">Espace Clients</span>';
wp_nav_menu(array('theme_location'=>'secondary'));
echo '</div>';

echo '</nav>';

?>

