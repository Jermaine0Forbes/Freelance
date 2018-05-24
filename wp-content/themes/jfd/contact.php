<?php
/**
 * Template Name: Contact
 */

get_header();
?>
    <section id="contact" class="content-area">
        <main id="main" class="site-main" role="main">
            <header class="contact-header">
                <div class="layer">
                    <h1 class="contact-title">we will love to hear from you</h1>
                    <p>
                        Tacos DIY shaman authentic sriracha lumbersexual cornhole offal asymmetrical brunch keytar pitchfork pork belly. Enamel pin hammock freegan four dollar toast tacos synth messenger bag.
                    </p>
                </div>
            </header>
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
