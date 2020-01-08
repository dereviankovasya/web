</div>
<footer>
    <nav class="top-footer">
    <div class="container">
        <?php wp_nav_menu(array('container' => false, 'items_wrap' => '<ul id="%1$s">%3$s</ul>', 'theme_location' => 'footer_menu')); ?>
    </div>
    </nav>

    <div class="bottom-footer">
        <?php the_field('adr','options'); ?>
        <?php the_field('copy','options'); ?>
    </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>
