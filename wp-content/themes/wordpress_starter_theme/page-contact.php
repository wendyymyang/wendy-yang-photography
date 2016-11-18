<?php ?>
<?php get_header(); ?>

<section class="contact">
    <div class="wrapper">

        <div class="contact-title">
            <h2>Get in Touch</h2>
        </div> <!-- End title content -->
        
        <div class="contact-content">

            <div class="contact-image">
                <img src="<?php bloginfo('template_directory') ?>/images/contact.jpg" alt="A lonely-looking llama to demonstrate that the user should fill out the contact form to get in touch, in order to reduce its loneliness.">

                <h3>Don't leave me hanging...</h3>

                <p>You're already on the contact page, so why not get in touch? Don't be a stranger, feel free to shoot me a message using the contact form.</p>
                <p>I can also be reached via <a href="https://twitter.com/wendersyang" target="_blank">Twitter</a> if you're all about that. Can't wait to hear from you, old pal. </p>
            </div>

            <div class="contact-form">
                <?php echo do_shortcode('[contact-form-7 id="87" title="Contact form 1"]'); ?>
            </div>

        </div> <!-- End contact content -->

    </div> <!-- End wrapper -->
</section> <!-- End about section -->

<?php get_footer(); ?>