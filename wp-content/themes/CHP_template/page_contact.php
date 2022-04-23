<?php 
/*

Template Name: contact

*/
get_header(); ?>

    <div class="container">
        <div class="bg-contact">
            <h1 class="text-news"><?php echo get_field('header') ?></h1>

            <iframe class="map-address" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3920.0018941031854!2d106.65497721411622!3d10.734336762906066!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752e439ffcf245%3A0x833af160bb1e91ae!2zOTQyIFThuqEgUXVhbmcgQuG7rXUsIFBoxrDhu51uZyA1LCBRdeG6rW4gOCwgVGjDoG5oIHBo4buRIEjhu5MgQ2jDrSBNaW5oLCBWaeG7h3QgTmFt!5e0!3m2!1svi!2s!4v1637228641315!5m2!1svi!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        
        </div>

        <div class="bg-form">
            <h2><?php echo get_field('submit') ?></h2>

            <?php echo do_shortcode( '[contact-form-7 id="269" title="contact"]' ); ?>
        </div>
    </div>

<?php get_footer(); ?>
