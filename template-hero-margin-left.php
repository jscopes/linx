<?php
/**
 * Template name: Hero Image with Left Margin
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();


?>

<div class="wrapper" id="page-wrapper">
	<div class="<?php echo esc_attr( $container ); ?>" id="content" tabindex="-1">
        <main class="site-main template-hero" id="main" data-template-name="template-hero-margin-left">

            <?php if( get_field('hero_image') ): ?>
                <?php
                    $heroImage = get_field('hero_image');
                ?>
                <div id="hero" class="w-100 hero-sm dark" style="background-image: url('<?php echo $heroImage['url']; ?>');">
                    <div class="hero-image-overlay">
                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="hero-inner col-sm-8 col-md-7 col-lg-5">
                                <div class="inner-wrap">
                                    <div class="title">
                                        <h1><?php the_title(); ?></h1>

                                        <?php if( get_field('hero_text') ): ?>
                                            <?php the_field('hero_text'); ?>
                                        <?php endif; ?>
                                    </div>
                                    <div class="page-links">
<!--                                            <a>Home</a> > <a class="btnX btn-primaryX" href="">Who We Are</a> > <a class="btnX btn-primaryX" href="">About Us</a>-->

                                        <?php
                                        if (is_page() && !is_front_page()) {
                                            echo '<ul id="breadcrumbs" class="d-flex">';
                                            echo '<li class="front_page"><a href="'.get_bloginfo('url').'">Home</a></li>';
                                            $post_ancestors = get_post_ancestors($post);
                                            if ($post_ancestors) {
                                                $post_ancestors = array_reverse($post_ancestors);
                                                foreach ($post_ancestors as $crumb)
                                                    echo '<li><a href="'.get_permalink($crumb).'">'.get_the_title($crumb).'</a></li>';
                                            }
                                            echo '<li class="current"><a href="'.get_permalink().'">'.get_the_title().'</a></li>';
                                            echo '</ul>';
                                        }
                                        ?>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="container py-5 indent-left">
                    <?php while ( have_posts() ) : the_post();
                            the_content();
                        endwhile; // end of the loop. ?>
                </div>
            <?php endif; ?>

            <?php if( !get_field('hero_image') ): ?>
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="title">
                                <h1><?php the_title(); ?></h1>

                                <?php if( get_field('hero_text') ): ?>
                                    <?php the_field('hero_text'); ?>
                                <?php endif; ?>
                            </div>
                            <div class="page-links">
                                <!--                                            <a>Home</a> > <a class="btnX btn-primaryX" href="">Who We Are</a> > <a class="btnX btn-primaryX" href="">About Us</a>-->

                                <?php
                                if (is_page() && !is_front_page()) {
                                    echo '<ul id="breadcrumbs" class="d-flex">';
                                    echo '<li class="front_page"><a href="'.get_bloginfo('url').'">Home</a></li>';
                                    $post_ancestors = get_post_ancestors($post);
                                    if ($post_ancestors) {
                                        $post_ancestors = array_reverse($post_ancestors);
                                        foreach ($post_ancestors as $crumb)
                                            echo '<li><a href="'.get_permalink($crumb).'">'.get_the_title($crumb).'</a></li>';
                                    }
                                    echo '<li class="current"><a href="'.get_permalink().'">'.get_the_title().'</a></li>';
                                    echo '</ul>';
                                }
                                ?>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="container pt-3 pb-5 indent-left">
                    <?php while ( have_posts() ) : the_post();
                            the_content();
                        endwhile; // end of the loop. ?>
                </div>
            <?php endif; ?>

        </main><!-- #main -->

	</div><!-- #content -->

</div><!-- #page-wrapper -->

<?php get_footer();
