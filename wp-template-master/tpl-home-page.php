<?php get_header(); /* Template Name: Exa */ ?>
    <section class="content">
        <div class="container">
            <?php
            $image = get_field('image');
            if( !empty( $image ) ): ?>
                <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
            <?php endif; ?>
            <?php the_field('text-hero'); ?>
            <h2><?php the_field('text'); ?></h2>
        </div>
    </section>

<?php get_footer(); ?>
