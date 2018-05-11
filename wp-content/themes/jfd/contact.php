<?php
/**
 * Template Name: Contact
 */

get_header();
?>
    <section id="faq" class="content-area">
        <main id="main" class="site-main" role="main">
            <div class="container">
                <h2>Contact</h2>
                <?php echo do_shortcode( '[contact-form-7 id="26" title="Contact form 1"]' ); ?>
            </div>
        </main>
        <!-- #main -->
    </section>
    <!-- #primary -->

    <?php
get_footer();
