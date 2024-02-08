<?php
/**
 * Template name: Section Landing Page
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


        <main class="site-main section-landing-main" id="main" data-template-name="template-landing" data-page-id="<?php echo get_the_ID()?>">
                <?php 
                //get_template_part( 'homepage-sections/hero');
                //get_template_part( 'homepage-sections/who_we_are');
                //get_template_part( 'homepage-sections/what_we_do');
                //get_template_part( 'homepage-sections/stats');
                //get_template_part( 'homepage-sections/features');
                //get_template_part( 'homepage-sections/contact');
//				get_template_part( 'homepage-sections/teams');
                //get_template_part( 'homepage-sections/news');
                //get_template_part( 'homepage-sections/testimonial');
                 ?>
                <?php while ( have_posts() ) : the_post(); 
                
                    //the_content(); 
                endwhile; // end of the loop. ?>

                <?php if( get_field('hero_image') ): ?>
                    <?php
                        $heroImage = get_field('hero_image');
                    ?>
                    <div id="hero" class="w-100 hero-sm dark" style="background-image: url('<?php echo $heroImage['url']; ?>');">
                        <div class="hero-image-overlay">
                        </div>
                        <div class="container">
                            <div class="row">
                                <div class="hero-inner col-md-8 col-lg-6">
                                    <div class="inner-wrap">
                                        <div class="title">
                                            <h1><?php the_title(); ?></h1>

                                            <?php if( get_field('hero_text') ): ?>
                                                <?php the_field('hero_text'); ?>
                                            <?php endif; ?>
                                        </div>
                                        <div class="page-links">
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
                                <div class="hero-inner col-md-4 col-lg-6">

                                </div>
                            </div>
                        </div>
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
                <?php endif; ?>
            

                <?php if(get_the_ID() == '24'): ?>
                    <article class="row no-gutters block text-center home-row site-bgXXX">
                        <div class="container">
                            <div class="block-content row no-gutters ">
                                <h2><small>A Complete Managed</small><br>Security Solution</h2>
                            </div>
                            <div class="block-row row no-gutters mb-4">
                                <div class="col-12 col-sm col-md-8 offset-md-2 lead-text">
                                    <p>Skynet Security  Systems provides comprehensive, turnkey security solutions for more than thousands of customers across the United States. Our end-to-end managed security approach allows you to focus on your core business while we monitor and maintain your security.  We are proud to have built a reputation as a leader in implementation of high-quality security systems.  Our clients return to us repeatedly over years—and decades—because we consistently deliver on our promises.
                                    </p>
                                </div>
                            </div>

                        </div>
                    </article>

                    <article class="row no-gutters block text-center site-bgXXX">
                        <div class="container">

                            <div class="split-row row no-guttersX text-left mb-5">
                                <div class="col-12 col-sm-6 mb-3 mb-md-0">
                                    <img src="<?php echo '//' . $_SERVER['HTTP_HOST']?>/wp-content/uploads/2021/01/why-skynet-inset1-1131744711.jpg" />
                                    <!--                                <button class="btn-primary">Learn More About Us</button>-->
                                </div>
                                <div class="col-12 col-sm-6 mb-3 mb-md-0">
                                    <div>
                                        <h4>A Partnering Approach</h4>
                                        <p>On every assignment, we first understand your needs and then establish relationships with the IT team, management and various users of the security systems we are implementing.
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="split-row row no-guttersX text-left mb-5">
                                <div class="col-12 col-sm-6 order-1 order-md-0">
                                    <div>
                                        <h4>We Thrive on Challenges</h4>
                                        <p>We celebrate the opportunity each project brings and leverage our 15+ years of experience to deliver customized security solutions.  Flexibility is essential in today’s world, and every project is unique.
                                        </p>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6 mb-3 mb-md-0">
                                    <img src="<?php echo '//' . $_SERVER['HTTP_HOST']?>/wp-content/uploads/2021/01/why-skynet-inset2-1029077170.jpg" />
                                </div>
                            </div>

                            <div class="split-row row no-guttersX text-left mb-5">
                                <div class="col-12 col-sm-6 mb-3 mb-md-0">
                                    <img src="<?php echo '//' . $_SERVER['HTTP_HOST']?>/wp-content/uploads/2021/01/why-skynet-inset3-922107232.jpg" />
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div>
                                        <h4>A Culture of Ethics & Responsibility</h4>
                                        <p>Skynet Security was founded on a set of core values and beliefs that express our responsibility to our customers, our colleagues, and our communities. We take ownership of each security system project we implement. 
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="split-row row no-guttersX text-left mb-5">
                                <div class="col-12 col-sm-6 order-1 order-md-0">
                                    <div>
                                        <h4>Our People & Technologies</h4>
                                        <p>At Skynet Security, our greatest strength is our people.  We are dedicated to delivering results, attracting colleagues who care, and investing annually on training.
                                        </p>
                                        <p>Skynet maintains strong relationships with the world’s leading technology partners to provide best-in-class solutions</p>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6 mb-3 mb-md-0">
                                    <img src="<?php echo '//' . $_SERVER['HTTP_HOST']?>/wp-content/uploads/2021/01/why-skynet-inset4-983457142.jpg" />
                                </div>
                            </div>
                        </div>
                    </article>
                <?php endif;?>


                <?php if(get_the_ID() == '15' || get_the_ID() == '12' || get_the_ID() == '9') : ?>
                    <?php if(get_the_ID() == '9'): ?>
                        <article class="row no-gutters block text-center home-row site-bg">
                            <div class="container">
                                <div class="block-content row no-gutters ">
                                    <h2><small>We Are</small><br>Skynet Security</h2>
                                </div>
                                <div class="block-row row no-gutters mb-4">
                                    <div class="col-12 col-sm col-md-8 offset-md-2 lead-text">
                                        <p>Founded over 15 years ago, we’re proud to have built a reputation as a leader in the implementation of security systems.  Our customers are a diverse group—so we provide a diverse set of options and work with them to find the right solutions for their security projects. This ensures the right fit for our customers’ security and business requirements.</p>
                                    </div>
                                </div>
                            </div>
                        </article>
                    <?php endif;?>

                    <?php if(get_the_ID() == '12'): ?>
                        <article class="row no-gutters block text-center home-row site-bg">
                            <div class="container">
                                <div class="block-content row no-gutters ">
                                    <h2><small>We Help</small><br>Secure Your World</h2>
                                </div>
                                <div class="block-row row no-gutters mb-4">
                                    <div class="col-12 col-sm col-md-10 offset-md-1 lead-text">
                                        <p>We are a leading national industrial, commercial and multi-family security integrator – but we are so much more.   Skynet Security is your partner in designing and implementing a scalable integrated security solution that addresses your toughest security challenges, while gaining efficiencies across your systems and teams.  So, whether you need security system integration for a corporate office or retail store, an enterprise solution for multiple manufacturing buildings, or a complex integration for a stadium, university, hospital, or corporate campus, we provide effective results with custom-tailored system integration solutions. </p>
                                    </div>
                                </div>
                            </div>
                        </article>

                        <article class="row no-gutters block text-center home-row site-bg">
                            <div class="container">
                                <div class="block-content row no-gutters ">
                                    <h2><small>Learn More About</small><br>Our Solutions</h2>
                                </div>
                            </div>
                        </article>
                    <?php endif;?>

                    <?php if(get_the_ID() == '15'): ?>
                        <!-- move to content -->
                        <article class="row no-gutters block text-center home-row site-bg">
                            <div class="container">
                                <div class="block-content row no-gutters ">
                                    <h2>Who We Serve</h2>
                                </div>
                                <div class="block-row row no-gutters">
                                    <div class="col-12 col-sm col-md-8 offset-md-2 lead-text">
                                        <p>Skynet Security’s depth of experience and flexibility allow us to offer a security solution that takes your unique challenges into account while also customizing the solution for your priorities. We have over 30 years experience providing industry specific security solutions for many industries such as manufacturing, retail, healthcare, hospitality, higher education, K-12 education, financial services, government and more so we can truly tailor a security solution for your needs.  Our creativity, energy, integrity and commitment to sustainability remain a reliable constant throughout technological changes and shifting economic cycles.</p>
                                    </div>
                                </div>

                            </div>
                        </article>

                        <!-- move to content -->
                        <article class="row no-gutters block text-center home-row site-bg">
                            <div class="container">
                                <div class="block-content row no-gutters ">
                                    <h2><small>Learn More About</small><br>Industries Served</h2>
                                </div>
                            </div>
                        </article>
                    <?php endif;?>


                    <article class="row no-gutters block text-center site-bg">
                        <div class="container">
                            <?php
                                $args = array(
                                    'post_parent' => $post->ID,
                                    'post_type' => 'page',
                                    'orderby' => 'menu_order'
                                );

                                $child_query = new WP_Query( $args );

                                $alignLeft = true;
                            ?>

                            <?php while ( $child_query->have_posts() ) : $child_query->the_post(); ?>
                                <div <?php post_class(); ?>>
                                    <div class="split-row row text-left mb-5">
                                        <?php
                                            $childSnippet = '';
                                            if( get_field('page_desc_short', $child_query->post->ID) ) {
                                                $childSnippet = get_field('page_desc_short', $child_query->post->ID);
                                            } else if( get_field('hero_text', $child_query->post->ID) ) {
                                                $childSnippet = get_field('hero_text', $child_query->post->ID);
                                            }
                                        ?>
                                        <?php if($alignLeft) { ?>
                                            <div class="col-6 ">
                                                <?php
                                                if ( has_post_thumbnail() ) {
                                                    the_post_thumbnail('page-thumb-mine');
                                                }
                                                ?>
                                            </div>
                                            <div class="col-6">
                                                <div>
                                                    <h4><a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_title(); ?>"><?php the_title(); ?></a></h4>

                                                    <?php echo $childSnippet ?>

                                                    <a class="btn-primary" href="<?php the_permalink(); ?>">Learn More</a>
                                                </div>
                                            </div>
                                        <?php } else { ?>
                                            <div class="col-6">
                                                <div>
                                                    <h4><a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_title(); ?>"><?php the_title(); ?></a></h4>

                                                    <?php echo $childSnippet ?>

                                                    <a class="btn-primary" href="<?php the_permalink(); ?>">Learn More</a>
                                                </div>
                                            </div>
                                            <div class="col-6 ">
                                                <?php
                                                if ( has_post_thumbnail() ) {
                                                    the_post_thumbnail('page-thumb-mine');
                                                }
                                                ?>
                                            </div>
                                        <?php };
                                          $alignLeft = !$alignLeft;
                                        ?>
                                    </div>
                                </div>
                            <?php endwhile; ?>

                            <?php
                                wp_reset_postdata();
                            ?>
                        </div>
                    </article>
                <?php endif;?>

    </main><!-- #main -->

	</div><!-- #content -->

</div><!-- #page-wrapper -->

<?php get_footer();
