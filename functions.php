<?php

/*
	=====================
	   INCLUDE SCRIPTS
	=====================
*/

function nac_script_enqueue() {
	wp_enqueue_script('jquery-3.4.1', 'https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js', array(), '3.3.1', true);
	wp_enqueue_style('nac-css', get_template_directory_uri().'/css/nac.css', array(), '0.0.1', 'all' );
	wp_enqueue_script('nac-js', get_template_directory_uri().'/js/nac.js', array(), '0.0.1', true );
	// wp_enqueue_style( 'google_web_fonts', 'https://fonts.googleapis.com/css?family=Anton|Fjalla+One|Catamaran' );
}
add_action('wp_enqueue_scripts', 'nac_script_enqueue');


// function nac_admin_style() {
// 	wp_enqueue_style('admin-styles', get_template_directory_uri().'/css/admin.css');
//   }

// add_action('admin_enqueue_scripts', 'nac_admin_style');


function nac_theme_setup() {
	add_theme_support('menus');
	add_theme_support('custom-logo');
	add_theme_support('post-thumbnails', array('post', 'page'));
	register_nav_menu('primary', 'Menu principal');
	register_nav_menu('secondary', 'Menu Espace Clients');
}
add_action('init', 'nac_theme_setup');



/*
	=======================
	   SIDEBAR functions
	=======================
*/

function nac_widget_setup() {
	register_sidebar(
		array(
			'name'			=> 'sidebar',
			'id'			=> 'sidebar-0',
			'class'			=> 'cls-sidebar-0',
			'description'	=> 'Sidebar',
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget'  => '</aside>',
			'before_title'  => '<h2 class="widgettitle">',
			'after_title'   => '</h2>',
		)
	);
}
add_action('widgets_init', 'nac_widget_setup');


/*
	==========================
	   CUSTOM WYSIWYG STLES
	==========================
*/

// add_editor_style();
// add_editor_style( get_template_directory_uri().'/css/nac-custom-editor-style.css' );


function my_mce_buttons_1( $buttons ) {
	array_unshift( $buttons, 'styleselect' );
	return $buttons;
}
add_filter( 'mce_buttons_2', 'my_mce_buttons_1' );

function my_mce_before_init_insert_formats( $init_array ) {
	$style_formats = array(
		array(
            'title' => 'Menu à ancres',
            'block' => 'div',
            'classes' => 'anchor-menu',
            'wrapper' => true,
		),
		// array(
        //     'title' => 'Bloc Citation',
        //     'block' => 'div',
        //     'classes' => 'custom-quote',
        //     'wrapper' => true,
		// ),
	
	);
	$init_array['style_formats'] = json_encode( $style_formats );
	return $init_array;
}
add_filter( 'tiny_mce_before_init', 'my_mce_before_init_insert_formats' );




/*
	================
	   PAGINATION
	================
*/

function pagination($pages = '', $range = 4) {

	$showitems = ($range * 2)+1;
	global $paged;

	if(empty($paged)) $paged = 1;

	if($pages == '') {
		global $wp_query;
		$pages = $wp_query->max_num_pages;
		if(!$pages) {
			$pages = 1;
		}
	}

	if(1 != $pages)	{
		echo '
		<div id="pagination">
		<div class="pages">Page <span class="current">'.$paged.'</span> / '.$pages.'</div>
		<ul>';

		if($paged > 2 && $paged > $range+1 && $showitems < $pages) echo "<a href='".get_pagenum_link(1)."'>&laquo; les + anciens</a>";
		if($paged > 1 && $showitems < $pages) echo "<a href='".get_pagenum_link($paged - 1)."'>&lsaquo; précédent</a>";

		for ($i=1; $i <= $pages; $i++) {
			if (1 != $pages &&( !($i >= $paged+$range+1 || $i <= $paged-$range-1) || $pages <= $showitems ))
			{
				echo ($paged == $i)? "<li class='active'><a>".$i."</a></li>":"<li><a href='".get_pagenum_link($i)."'>".$i."</a></li>";
			}
		}

		if ($paged < $pages && $showitems < $pages) echo " <li><a href=\"".get_pagenum_link($paged + 1)."\"> << </a></li>";

		if ($paged < $pages-1 &&  $paged+$range-1 < $pages && $showitems < $pages) echo " <li class='page-item'><a class='page-link' href='".get_pagenum_link($pages)."'> >> </a></li>";
		echo "</ul></div>\n";
	}
}


// function pressPagination($pages = '', $range = 2)
// {
//     global $paged;
//     $showitems= ($range * 2)+1;
 
//     if(empty($paged)) $paged = 1;
//     if($pages == '')
//     {
//         global $wp_query;
//         $pages = $wp_query->max_num_pages;
//         if(!$pages)
//         {
//                    $pages = 1;
//         }
//     }
 
//     if(1 != $pages)
//     {
//         echo "<div class='pagination'>";
//         if($paged > 2 && $paged > $range+1 && $showitems < $pages) echo "<a href='".get_pagenum_link(1)."'>&laquo;</a>";
//         if($paged > 1 && $showitems < $pages) echo "<a href='".get_pagenum_link($paged - 1)."'>&lsaquo;</a>";
         
//         for ($i=1; $i <= $pages; $i++)
//         {
//             if (1 != $pages &&( !($i >= $paged+$range+1 || $i <= $paged-$range-1) || $pages <= $showitems ))
//             {
//                 echo ($paged == $i)? "<span class='current'>".$i."</span>":"<a href='".get_pagenum_link($i)."' class='inactive' >".$i."</a>";
//             }
//         }
 
//         if ($paged < $pages && $showitems < $pages) echo "<a href='".get_pagenum_link($paged + 1)."'>&rsaquo;</a>";
//            if ($paged < $pages-1 &&  $paged+$range-1 < $pages && $showitems < $pages) echo "<a href='".get_pagenum_link($pages)."'>&raquo;</a>";
//            echo "</div>n";
//        }
 
// }

// if ( ! function_exists( 'post_pagination' ) ) :
// 	function post_pagination() {
// 	  global $wp_query;
// 	  $pager = 999999999; // need an unlikely integer
  
// 		 echo paginate_links( array(
// 			  'base' => str_replace( $pager, '%#%', esc_url( get_pagenum_link( $pager ) ) ),
// 			  'format' => '?paged=%#%',
// 			  'current' => max( 1, get_query_var('paged') ),
// 			  'total' => $wp_query->max_num_pages
// 		 ) );
// 	}
//  endif;

?>
