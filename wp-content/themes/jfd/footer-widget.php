<?php

if ( is_active_sidebar( 'footer-1' ) || is_active_sidebar( 'footer-2' ) || is_active_sidebar( 'footer-3' ) ) {?>
    <div id="footer-widget" class="row m-0 ">

        <?php if ( is_active_sidebar( 'footer-1' )) : ?>
        <div class="widget widget-1 col-12 col-md-4  ">
            <?php dynamic_sidebar( 'footer-1' ); ?>
        </div>
        <?php endif; ?>

        <?php if ( is_active_sidebar( 'footer-2' )) : ?>
        <div class="widget widget-2 col-12 col-md-4  ">
            <section class="widget">
                <h3>quick links</h3>
                <?php // dynamic_sidebar( 'footer-2' ); ?>
                <?php
                wp_nav_menu(array(
                'theme_location'    => 'primary',
                'container'       => 'div',
                'container_id'    => '',
                'container_class' => '',
                'menu_id'         => false,
                'menu_class'      => 'links',
                'depth'           => 3,
                'fallback_cb'     => 'wp_bootstrap_navwalker::fallback',
                'walker'          => new wp_bootstrap_navwalker()
                ));
                ?>

            </section>

        </div>
        <?php endif; ?>


        <?php if ( is_active_sidebar( 'footer-3' )) : ?>
        <div class="widget widget-3 col-12 col-md-4 ">
            <?php dynamic_sidebar( 'footer-3' ); ?>
        </div>
        <?php endif; ?>

    </div>

    <?php }
