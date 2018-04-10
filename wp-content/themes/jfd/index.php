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
 *
 * @package WP_Bootstrap_Starter
 */

get_header(); ?>

    <section id="primary" class="content-area ">
        <main id="main" class="site-main" role="main">
            <section class="main-section-1">
                <img class="img-fluid" src="http://via.placeholder.com/1920x900" alt="home main image" />
            </section>
            <section class="main-section-2">
                <div class="container">
                    <h2>Few Reasons Why We Are One Of The Most Effective SEO<br> Expert In The World</h2>
                    <div class="row">
                        <div class="col-md-6 col-lg-3 block-info">
                            <a href="#">
                                <div class="circle-icon ">
                                    <span class="fa fa-search"></span>
                                </div>
                                <h4>Big Data Analysis</h4>
                                <p>
                                    Borem ipsum dolor sit am et fermentum vestibulum etiam luctus et, mi ornare aptent neque volutpat.
                                </p>
                            </a>

                        </div>
                        <div class="col-md-6 col-lg-3 block-info">
                            <a href="#">

                                <div class="circle-icon ">
                                    <span class="fa fa-desktop"></span>
                                </div>
                                <h4>Big Data Analysis</h4>
                                <p>
                                    Borem ipsum dolor sit am et fermentum vestibulum etiam luctus et, mi ornare aptent neque volutpat.
                                </p>
                            </a>
                        </div>
                        <div class="col-md-6 col-lg-3 block-info">
                            <a href="#">
                                <div class="circle-icon ">
                                    <span class="fa fa-signal"></span>
                                </div>
                                <h4>Big Data Analysis</h4>
                                <p>
                                    Borem ipsum dolor sit am et fermentum vestibulum etiam luctus et, mi ornare aptent neque volutpat.
                                </p>
                            </a>
                        </div>
                        <div class="col-md-6 col-lg-3 block-info">
                            <a href="#">
                                <div class="circle-icon ">
                                    <span class="fa fa-lock"></span>
                                </div>
                                <h4>Big Data Analysis</h4>
                                <p>
                                    Borem ipsum dolor sit am et fermentum vestibulum etiam luctus et, mi ornare aptent neque volutpat.
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
                            <h2>Analize Your Website<br> Ranking & Score</h2>
                            <p>
                                Mimply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book simply dummy text of the printing and typesetting industry. pe and scrambled it to make a type specimen book.
                            </p>
                            <a href="#" class="btn btn-primary">
                                read more
                            </a>
                        </div>
                        <div class="col-md-6 ">
                            <img class="img-fluid" src="http://via.placeholder.com/600x400" />
                        </div>
                    </div>
                </div>
                <img class="img-fluid d-none d-md-flex" src="http://via.placeholder.com/1920x400" />
            </section>
            <section class="main-section-4">

                <div class="container">
                    <h2>Recent Projects</h2>
                    <p>Seo Rem Ipsum Dolor Sit Amet, Non Odio Tincidunt Ut Ante Suspendise</p>

                    <div class="row">
                        <div class="col-md-4">
                            <img class="img-fluid" src="http://via.placeholder.com/400x200" alt="image" />
                            <h3>content strategy</h3>
                            <p>
                                SEO torem ipsum dolor sit amet, consectetur adipisciaen elised eiusmod tempor incididunt.
                            </p>
                        </div>
                        <div class="col-md-4">
                            <img class="img-fluid" src="http://via.placeholder.com/400x200" alt="image" />
                            <h3>content strategy</h3>
                            <p>
                                SEO torem ipsum dolor sit amet, consectetur adipisciaen elised eiusmod tempor incididunt.
                            </p>
                        </div>
                        <div class="col-md-4">
                            <img class="img-fluid" src="http://via.placeholder.com/400x200" alt="image" />
                            <h3>content strategy</h3>
                            <p>
                                SEO torem ipsum dolor sit amet, consectetur adipisciaen elised eiusmod tempor incididunt.
                            </p>
                        </div>

                    </div>
                    <a href="#" class="btn btn-primary"> see all cases</a>
                </div>
            </section>

        </main>
        <!-- #main -->
    </section>
    <!-- #primary -->

    <?php
get_footer();
