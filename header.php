<?php
/**
 * The header for our theme
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$bootstrap_version = get_theme_mod( 'understrap_bootstrap_version', 'bootstrap4' );
$navbar_type       = get_theme_mod( 'understrap_navbar_type', 'collapse' );
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="profile" href="http://gmpg.org/xfn/11">

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<!--
<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,500;0,600;1,300;1,500;1,600&family=Lora:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
-->
<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,500;0,600;1,300;1,500;1,600&family=Zilla+Slab:ital,wght@0,300;0,400;0,600;1,300;1,400;1,600&display=swap" rel="stylesheet">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?> <?php understrap_body_attributes(); ?>>
<?php do_action( 'wp_body_open' ); ?>
<div class="site" id="page">
        <nav class="util-nav">
            <div class="container-lg">
                <div class="row gx-md-0">
                    <div class="col-md-5 logo-col">
		<!-- Your site title as branding in the menu -->
		<?php if ( ! has_custom_logo() ) { ?>

			<?php if ( is_front_page() && is_home() ) : ?>

				<h1 class="navbar-brand mb-0"><a rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" itemprop="url"><?php bloginfo( 'name' ); ?></a></h1>

			<?php else : ?>

				<a class="navbar-brand" rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" itemprop="url"><?php bloginfo( 'name' ); ?></a>

			<?php endif; ?>

			<?php
		} else {
			the_custom_logo();
		}
		?>
		<!-- end custom logo -->
                    </div>

                    <div class="col-md-7">
                        <div class="util-nav-wrap">
                        <ul class="">
                            <?php wp_nav_menu(
                                array(
                                    'theme_location'  => 'top-utility-menu',
                                    'container'       => '',
                                    'items_wrap'      => '%3$s',
                                    'menu_class'      => '',
                                    'fallback_cb'     => false,
                                    'menu_id'         => 'top-utility-menu',
                                    'depth'           => 1,
                                    'walker'          => new Understrap_WP_Bootstrap_Navwalker(),
                                )
                            ); ?>
                        </ul>
                        </div>
                    </div>
                </div>
            </div>
        </nav>

	<!-- ******************* The Navbar Area ******************* -->
	<header id="wrapper-navbar">

		<a class="skip-link sr-only sr-only-focusable" href="#content"><?php esc_html_e( 'Skip to content', 'understrap' ); ?></a>

		<?php get_template_part( 'global-templates/navbar', $navbar_type . '-' . $bootstrap_version ); ?>

	</header><!-- #wrapper-navbar end -->
