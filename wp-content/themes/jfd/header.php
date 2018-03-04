<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WP_Bootstrap_Starter
 */

?>
    <!DOCTYPE html>
    <html <?php language_attributes(); ?>>

    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <link rel="profile" href="http://gmpg.org/xfn/11">
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
        <?php wp_head(); ?>
    </head>

    <body <?php body_class(); ?>>
        <div id="page" class="site">
            <?php if(!is_page_template( 'blank-page.php' ) && !is_page_template( 'blank-page-with-container.php' )): ?>
            <header id="masthead" class="site-header navbar-static-top" role="banner">
                <section class="header-section-1">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-4 contact">
                                <a class="email" href="#"><span class="fa fa-envelope"></span> skivac3@gmail.com</a>
                                <a class="phone" href="#"><span class="fa fa-phone"></span> 786-863-0270</a>
                            </div>
                            <div class="col-md-4 ml-auto social">
                                <a href="#"><span class="fa fa-facebook"></span></a>
                                <a href="#"><span class="fa fa-twitter"></span></a>
                                <a href="#"><span class="fa fa-linkedin"></span></a>
                                <a href="#"><span class="fa fa-pinterest"></span></a>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="header-section-2">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="navbar-brand col-md-3">
                                <?php if ( get_theme_mod( 'wp_bootstrap_starter_logo' ) ): ?>
                                <a href="<?php echo esc_url( home_url( '/' )); ?>">
                            <img src="<?php echo esc_attr(get_theme_mod( 'wp_bootstrap_starter_logo' )); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>">
                                </a>
                                <?php else : ?>
                                <a class="site-title" href="<?php echo esc_url( home_url( '/' )); ?>">
                                    <?php esc_url(bloginfo('name')); ?>
                                </a>
                                <?php endif; ?>

                            </div>

                            <nav class="navbar navbar-expand-xl col-md-5 p-0">

                                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".navbar-collapse" aria-controls="" aria-expanded="true" aria-label="Toggle navigation">
                                <span class="fa fa-bar"></span>
                            </button>

                                <?php
                                wp_nav_menu(array(
                                'theme_location'    => 'primary',
                                'container'       => 'div',
                                'container_id'    => '',
                                'container_class' => 'collapse show navbar-collapse justify-content-end',
                                'menu_id'         => false,
                                'menu_class'      => 'navbar-nav',
                                'depth'           => 3,
                                'fallback_cb'     => 'wp_bootstrap_navwalker::fallback',
                                'walker'          => new wp_bootstrap_navwalker()
                                ));
                                ?>

                            </nav>


                            <div class="col-md-3 quote">
                                <a class="btn btn-primary"> get free quote</a>
                            </div>
                        </div>

                    </div>
                    <!-- .header-block-2 -->

                </section>

            </header>
            <!-- #masthead -->

            <div id="content" class="site-content">
                <div class="container-fluid">
                    <div class="row">
                        <?php endif; ?>
