<?php
/**
 * Understrap Child Theme functions and definitions
 *
 * @package UnderstrapChild
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

/**
 * Changes "site-info" to our boilerplate copyright.
 * Also adds Log In and Log Out links.
 */
function remove_parent_functions() {
    remove_action( 'understrap_site_info', 'understrap_add_site_info' );
}
add_action( 'init', 'remove_parent_functions', 15 );

add_shortcode( 'year', function() {
    return date( 'Y' );
} );


/**
 * Removes the parent themes stylesheet and scripts from inc/enqueue.php
 */
function understrap_remove_scripts() {
	wp_dequeue_style( 'understrap-styles' );
	wp_deregister_style( 'understrap-styles' );

	wp_dequeue_script( 'understrap-scripts' );
	wp_deregister_script( 'understrap-scripts' );
}
add_action( 'wp_enqueue_scripts', 'understrap_remove_scripts', 20 );



/**
 * Enqueue our stylesheet and javascript file
 */
function theme_enqueue_styles() {

	// Get the theme data.
	$the_theme = wp_get_theme();

	$suffix = defined( 'SCRIPT_DEBUG' ) && SCRIPT_DEBUG ? '' : '.min';
	// Grab asset urls.
	$theme_styles  = "/css/child-theme{$suffix}.css";
	$theme_scripts = "/js/child-theme{$suffix}.js";

	wp_enqueue_style( 'child-understrap-styles', get_stylesheet_directory_uri() . $theme_styles, array(), $the_theme->get( 'Version' ) );
	wp_enqueue_script( 'jquery' );
	wp_enqueue_script( 'child-understrap-scripts', get_stylesheet_directory_uri() . $theme_scripts, array(), $the_theme->get( 'Version' ), true );
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );


function is_active_sidebar_with_content( $sidebar ) {
   $sidebars = wp_get_sidebars_widgets();
   if ( isset( $sidebars[ $sidebar ] ) && ! empty( $sidebars[ $sidebar] ) ) {
       return true;
   }
   return false;
}

function year_shortcode() {
    $year = date_i18n('Y');
    return $year;
}
add_shortcode ('year', 'year_shortcode');

/**
 * Load the child theme's text domain
 */
function add_child_theme_textdomain() {
	load_child_theme_textdomain( 'understrap-child', get_stylesheet_directory() . '/languages' );
}
add_action( 'after_setup_theme', 'add_child_theme_textdomain' );



/**
 * Overrides the theme_mod to default to Bootstrap 5
 *
 * This function uses the `theme_mod_{$name}` hook and
 * can be duplicated to override other theme settings.
 *
 * @param string $current_mod The current value of the theme_mod.
 * @return string
 */
function understrap_default_bootstrap_version( $current_mod ) {
	return 'bootstrap5';
}
add_filter( 'theme_mod_understrap_bootstrap_version', 'understrap_default_bootstrap_version', 20 );

/**
 * Register our menus.
 *
 */
function add_custom_menus() {
    register_nav_menu('top-utility-menu',__( 'Top Utility Menu' ));
}
add_action( 'init', 'add_custom_menus' );

/**
 * Register our sidebars and widgetized areas.
 *
 */
function widgets_init_sts() {

	register_sidebar( array(
		'name'          => 'Footer Column 1',
		'id'            => 'footer-col1',
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
		'before_title'  => '',
		'after_title'   => '',
	) );

	register_sidebar( array(
		'name'          => 'Footer Column 2',
		'id'            => 'footer-col2',
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
		'before_title'  => '',
		'after_title'   => '',
	) );

	register_sidebar( array(
		'name'          => 'Footer Column 3',
		'id'            => 'footer-col3',
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
		'before_title'  => '',
		'after_title'   => '',
	) );

	register_sidebar( array(
		'name'          => 'Footer Column 4',
		'id'            => 'footer-col4',
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
		'before_title'  => '',
		'after_title'   => '',
	) );

	register_sidebar( array(
		'name'          => 'Footer Top Area',
		'id'            => 'footer-top',
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
		'before_title'  => '',
		'after_title'   => '',
	) );

	register_sidebar( array(
		'name'          => 'Footer Bottom Area',
		'id'            => 'footer-bot',
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
		'before_title'  => '',
		'after_title'   => '',
	) );
}
add_action( 'widgets_init', 'widgets_init_sts' );



/**
 * Loads javascript for showing customizer warning dialog.
 */
function understrap_child_customize_controls_js() {
	wp_enqueue_script(
		'understrap_child_customizer',
		get_stylesheet_directory_uri() . '/js/customizer-controls.js',
		array( 'customize-preview' ),
		'20130508',
		true
	);
}
add_action( 'customize_controls_enqueue_scripts', 'understrap_child_customize_controls_js' );
