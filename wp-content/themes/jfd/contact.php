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
                    <h1 class="contact-title title">we will love to hear from you</h1>
                    <p>
                        If you have any questions you can write to us and we should be able to get back to your shortly. You can also call me by phone, if you want to have a direct conversation with me about the services that I provide. Other than that, I appreciate you taking time for considering our services
                        
                    </p>
                </div>
            </header>
            <div class="container contact-container">
                <?php echo do_shortcode( '[contact-form-7 id="26" title="Contact form 1"]' ); ?>
            </div>
        </main>
        <!-- #main -->
    </section>
    <!-- #primary -->

    <?php
get_footer();
