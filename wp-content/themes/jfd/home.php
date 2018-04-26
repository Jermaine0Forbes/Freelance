<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 * Template Name: Home
 * @package WP_Bootstrap_Starter
 */

get_header(); ?>

    <section id="primary" class="content-area ">
        <main id="main" class="site-main" role="main">
            <section class="main-section-1" style="background-image:url(<?php the_field('s1_img'); ?>)">
                <h1 class="title">we create powerful sites</h1>
            </section>
            <section class="main-section-2">
                <div class="container">
                    <h2>
                        <?php the_field('s2_h2'); ?>
                    </h2>
                    <div class="row">
                        <div class="col-md-6 col-lg-3 block-info">
                            <a href="<?php the_field('s2_block_a_1'); ?>">
                                <div class="circle-icon ">
                                    <span class="fa fa-search"></span>
                                </div>
                                <h4>
                                    <?php the_field('s2_block_h2_1'); ?>
                                </h4>
                                <p>
                                    <?php the_field('s2_block_p_1'); ?>
                                </p>
                            </a>

                        </div>
                        <div class="col-md-6 col-lg-3 block-info">
                            <a href="<?php the_field('s2_block_a_2'); ?>">

                                <div class="circle-icon ">
                                    <span class="fa fa-desktop"></span>
                                </div>
                                <h4>
                                    <?php the_field('s2_block_h2_2'); ?>
                                </h4>
                                <p>
                                    <?php the_field('s2_block_p_2'); ?>
                                </p>
                            </a>
                        </div>
                        <div class="col-md-6 col-lg-3 block-info">
                            <a href="<?php the_field('s2_block_a_3'); ?>">
                                <div class="circle-icon ">
                                    <span class="fa fa-signal"></span>
                                </div>
                                <h4>
                                    <?php the_field('s2_block_h2_3'); ?>
                                </h4>
                                <p>
                                    <?php the_field('s2_block_p_3'); ?>
                                </p>
                            </a>
                        </div>
                        <div class="col-md-6 col-lg-3 block-info">
                            <a href="<?php the_field('s2_block_a_4'); ?>">
                                <div class="circle-icon ">
                                    <span class="fa fa-lock"></span>
                                </div>
                                <h4>
                                    <?php the_field('s2_block_h2_4'); ?>
                                </h4>
                                <p>
                                    <?php the_field('s2_block_p_4'); ?>
                                </p>
                            </a>
                        </div>

                    </div>
                </div>
            </section>
            <section class="main-section-3">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <h2>
                                <?php the_field('s3_h2'); ?>
                            </h2>
                            <p>
                                <?php the_field('s3_p'); ?>
                            </p>
                            <a href="<?php the_field('s3_a'); ?>" class="btn btn-primary">
                                
                                read more
                            </a>
                        </div>
                        <div class="col-md-6 ">
                            <img class="img-fluid" src="<?php //the_field('s3_a'); ?>http://via.placeholder.com/600x400" />
                        </div>
                    </div>
                </div>
                <img class="img-fluid d-none d-md-flex" src="http://via.placeholder.com/1920x400" />
            </section>
            <section class="main-section-4">

                <div class="container">
                    <h2>
                        <?php the_field('s4_h2'); ?> </h2>
                    <p>
                        <?php the_field('s4_p'); ?> </p>

                    <div class="row">
                        <div class="col-md-4">
                            <a href="<?php the_field('s4_block_a_1'); ?> ">
                            
                                <img class="img-fluid" src="<?php //the_field('s4_block_img_1'); ?> http://via.placeholder.com/400x200" alt="image" />
                                <h3><?php the_field('s4_block_h3_1'); ?></h3>
                                <p>
                                   <?php the_field('s4_block_p_1'); ?>
                                </p>
                            </a>

                        </div>
                        <div class="col-md-4">
                            <a href="<?php the_field('s4_block_a_2'); ?>">
                                <img class="img-fluid" src="<?php //the_field('s4_block_img_2'); ?> http://via.placeholder.com/400x200" alt="image" />
                                <h3><?php the_field('s4_block_h3_2'); ?></h3>
                                <p>
                                    <?php the_field('s4_block_p_2'); ?>
                                </p>
                            </a>
                        </div>
                        <div class="col-md-4">
                            <a href="<?php the_field('s4_block_a_3'); ?>">
                                <img class="img-fluid" src="<?php //the_field('s4_block_img_3'); ?> http://via.placeholder.com/400x200" alt="image" />
                                <h3><?php the_field('s4_block_h3_3'); ?></h3>
                                <p>
                                    <?php the_field('s4_block_p_3'); ?>
                                </p>
                            </a>
                        </div>

                    </div>
                    <a href="<?php the_field('s4_a'); ?>" class="btn btn-primary"> see all cases</a>
                </div>
            </section>

        </main>
        <!-- #main -->
    </section>
    <!-- #primary -->

    <?php
get_footer();
