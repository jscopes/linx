<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'understrap_container_type' );
?>


<div id="wrapper-footer">
    <div class="wrapper" id="wrapper-footer-top">
        <div class="<?php echo esc_attr( $container ); ?>">
            <?php dynamic_sidebar( 'footer-top' ); ?>
        </div>
    </div>
    <div class="wrapper" id="wrapper-footer-mid">
        <div class="container-sm">

            <?php if ( is_active_sidebar_with_content( 'footerfull' ) ) : ?>
                <div class="row">
                    <div class="col">
                        <?php dynamic_sidebar( 'footerfull' ); ?>
                    </div>
                </div>
            <?php endif; ?>

            <div class="row g-2">

                <div class="col-6 col-sm-4 col-md-3 d-sm-none d-md-block">
                    <?php dynamic_sidebar( 'footer-col1' ); ?>
                </div>

                <div class="col-6 col-sm-4 col-md-3">
                    <?php dynamic_sidebar( 'footer-col2' ); ?>
                </div>

                <div class="col-6 col-sm-4 col-md-3">
                    <?php dynamic_sidebar( 'footer-col3' ); ?>
                </div>

                <div class="col-6 col-sm-4 col-md-3">
                    <?php dynamic_sidebar( 'footer-col4' ); ?>
                </div>

            </div>

            <div class="row">

                <div class="col-md-12">

                    <footer class="site-footer" id="colophon">

                        <div class="site-info">

                            <?php understrap_site_info(); ?>
                            <?php dynamic_sidebar( 'sub-footer' ); ?>


                        </div><!-- .site-info -->

                    </footer><!-- #colophon -->

                </div><!--col end -->

            </div><!-- row end -->

        </div><!-- container end -->

    </div><!-- wrapper end -->

    <div class="wrapper" id="wrapper-footer-bot">
        <div class="<?php echo esc_attr( $container ); ?>">
            <?php dynamic_sidebar( 'footer-bot' ); ?>
        </div>
    </div>

</div><!-- wrapper end -->

</div><!-- #page we need this extra closing tag here -->

<?php wp_footer(); ?>

</body>

</html>

