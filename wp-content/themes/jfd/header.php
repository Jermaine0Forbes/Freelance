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
        <link rel="icon"   href="<?php echo get_theme_file_uri().'/img/favicon-32x32.png' ?>">
        <?php wp_head(); ?>
        <link href="https://fonts.googleapis.com/css?family=Heebo:900|Teko:500" rel="stylesheet">
    </head>

    <body <?php body_class(); ?>>
        <div id="page" class="site">
            <?php if(!is_page_template( 'blank-page.php' ) && !is_page_template( 'blank-page-with-container.php' )): ?>
            <header id="masthead" class="site-header navbar-static-top" role="banner">
                <section class="header-section-1 d-none d-md-block">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-7 contact">
                                <a class="email" href="mailto:<?php echo $GLOBALS['cgv']['phone'] ?>"><span class="fa fa-envelope"></span> <?php echo $GLOBALS['cgv']['email'] ?></a>
                                <a class="phone" href="tel:<?php echo $GLOBALS['cgv']['phone'] ?>">
                                    <span class="fa fa-phone"></span> <?php echo $GLOBALS['cgv']['phone'] ?>
                                </a>
                            </div>
                            <div class="col-md-2 ml-auto social">
                                <a href="#"><span class="fab fa-facebook"></span></a>
                                <a href="#"><span class="fab fa-twitter"></span></a>
                                <a href="#"><span class="fab fa-linkedin"></span></a>
                                <a href="#"><span class="fab fa-pinterest"></span></a>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="header-section-2">
                    <div class="container">
                        <div class="row center-x-md">
                            <div class="navbar-brand mr-0 col-3">
                                <?php if ( get_theme_mod( 'wp_bootstrap_starter_logo' ) ): ?>
                                <a href="<?php echo esc_url( home_url( '/' )); ?>">
                                    
                                    
                            <img src="<?php echo esc_attr(get_theme_mod( 'wp_bootstrap_starter_logo' )); ?>" class="img-fluid site-logo d-none d-md-block" alt="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>">
                                    
                                    
                            <img src="http://jfd.co/wp-content/uploads/2018/05/logo-1.png" class="img-fluid  d-md-none mobile-logo" 
                                 alt="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>">
                                    
                                </a>
                                <?php else : ?>
                                <a class="site-title" href="<?php echo esc_url( home_url( '/' )); ?>">
                                    <?php esc_url(bloginfo('name')); ?>
                                </a>
                                <?php endif; ?>

                            </div>

                            <nav class="navbar navbar-expand-xl col-md-6 d-none d-md-block p-0 my-auto">


                                <?php
                                wp_nav_menu(array(
                                'theme_location'    => 'primary',
                                'container'       => 'div',
                                'container_id'    => '',
                                'container_class' => '',
                                'menu_id'         => false,
                                'menu_class'      => 'nav primary',
                                'depth'           => 3,
                                'fallback_cb'     => 'wp_bootstrap_navwalker::fallback',
                                'walker'          => new wp_bootstrap_navwalker()
                                ));
                                ?>

                            </nav>


                            <div class="col-3 quote flex-right-md my-auto">
                                <a class="btn btn-primary d-none d-md-inline-block" href="tel:<?php echo $GLOBALS['cgv']['phone'] ?>"> get free quote</a>

                                <button class="navbar-toggler d-md-none" type="button" data-toggle="collapse" data-target=".nav-collapse" aria-controls="" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="fa fa-bars"></span>
                                </button>
                            </div>
                        </div>

                    </div>
                </section>
                <!-- .header-block-2 -->
                <section class="header-section-3">
                    <nav class="navbar navbar-expand-xl  p-0">


                        <?php
                                wp_nav_menu(array(
                                'theme_location'    => 'primary',
                                'container'       => 'div',
                                'container_id'    => '',
                                'container_class' => 'collapse nav-collapse fluid',
                                'menu_id'         => false,
                                'menu_class'      => 'navbar-nav secondary',
                                'depth'           => 3,
                                'fallback_cb'     => 'wp_bootstrap_navwalker::fallback',
                                'walker'          => new wp_bootstrap_navwalker()
                                ));
                                ?>

                    </nav>

                </section>

            </header>
            <!-- #masthead -->

            <div id="content" class="site-content">

                <?php endif; ?>
