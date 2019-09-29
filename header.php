<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
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
		<?php echo '<a href="' . get_home_url() . '"><sup id="plus">+</sup><span id="new">new</span><span id="access">access</span><span id="compta">compta</span></a>'; ?>
	</div>
	<p class="slogan">Donec consectetur a purus at venenatis</p>
</header>

<?php

echo '<a href="#" id="burger" class="menu-open"></a>';
echo '<nav id="menu" class="menu-off">';
echo '<a href="#" id="close" class="menu-close off">';
wp_nav_menu(array('theme_location'=>'primary'));
echo '</nav>';

?>

