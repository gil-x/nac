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

// if (is_front_page()) {
// 	echo '<div class="page home">';
// }
// else {
// 	echo '<div id="page">';
// }

?>

<div class="logo">
	<a href="https://nac1.gil-web.com/"><sup>+</sup>new<span>access</span>compta</a>
</div>

<p class="slogan">Donec consectetur a purus at venenatis</p>

<?php

// $site_title = get_bloginfo( 'name', 'display' );
// $site_description = get_bloginfo( 'description', 'display' );

// if ( function_exists( 'the_custom_logo' ) ) {
//     the_custom_logo();
// }
// echo '<span>' . $site_title . '</span>';
// echo '<span>' . $site_description . '</span>';

// wp_nav_menu(array('theme_location'=>'primary'));

?>

