<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WP_Bootstrap_Starter
 */

?>
    <?php if(!is_page_template( 'blank-page.php' ) && !is_page_template( 'blank-page-with-container.php' )): ?>
    </div>
    <!-- .row -->
    </div>
    <!-- .container -->
    </div>
    <!-- #content -->

    <footer id="colophon" class="site-footer <?php echo wp_bootstrap_starter_bg_class(); ?>" role="contentinfo">
        <section class="footer-section-1">
            <div class="container">

                <div class="row justify-content-between center-y flex-lg-row flex-column">
                    <h3>need any help for your website?</h3>
                    <a class="phone py-4 py-lg-0" href="tel:<?php echo $GLOBALS['cgv']['phone'] ?>"><span class="fa fa-phone"></span><?php echo $GLOBALS['cgv']['phone'] ?></a>
                    <a class="contact" href="#">contact us <span class="fa fa-angle-right"></span></a>
                </div>
            </div>
        </section>
        <section class="footer-section-2">
            <div class="container">
                <?php get_template_part( 'footer-widget' ); ?>
            </div>
        </section>
        <section class="footer-section-3">
            <div class="container py-4">
                <div class="site-info">
                    &copy; Copyrights
                    <?php echo '<a href="'.home_url().'">'.get_bloginfo('name').'</a>'; ?>
                    <?php echo date('Y'); ?>

                    <span class="sep"> | </span> Designed By
                    <a class="credits" href="https://jermaineforbes.com" target="_blank" title="Jermaine Forbes" alt="Jermaine Forbes Design Theme">
                        Jermaine Forbes
                    </a>

                </div>
                <!-- close .site-info -->
            </div>

        </section>

    </footer>
    <!-- #colophon -->
    <?php endif; ?>
    </div>
    <!-- #page -->

    <?php wp_footer(); ?>
    </body>

    </html>
