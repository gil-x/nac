<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title><?php the_title_attribute() ?></title>
		<?php wp_head(); ?>
	</head>
	<body>

<?php

if (is_front_page()) {
	// echo '<div class="homepage">';
}
else {
	// echo '<div id="page">';
}

// $site_title = get_bloginfo( 'name', 'display' );
// $site_description = get_bloginfo( 'description', 'display' );

// if ( function_exists( 'the_custom_logo' ) ) {
//     the_custom_logo();
// }
// echo '<span>' . $site_title . '</span>';
// echo '<span>' . $site_description . '</span>';

// wp_nav_menu(array('theme_location'=>'primary'));

?>

