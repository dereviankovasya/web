<?php get_header(); ?>
    <!DOCTYPE html>
    <html lang="zxx">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Document</title>
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css"
              integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    </head>
    <body>
    <div class="hero-img-block cover" style="background-color:#fed247; background-image:url('<?php echo the_field('hero_bg'); ?>')">
        <div class="container">
            <div class="text-hero">
                <?php the_field('text_hero_header'); ?>
            </div>
            <div class="email-send">
                <?php the_field('hero-text'); ?>
                <div class="form-text">

                    <?php the_field('under_form'); ?>

                </div>
            </div>
        </div>
    </div>
    <div class="insig">
        <div class="container">
            <div class="insig-text">
                <?php the_field('insig-header'); ?>
            </div>
            <div class="flex-block">
                <?php if ($rows = get_field('insign-repiter')) {
                    foreach ($rows as $row) { ?>
                        <div class="flex-item">
                            <figure>
                                <?php if( $row['insign-repiter-img'] ): ?>
                                    <img src="<?php echo $row['insign-repiter-img']; ?>" />
                                <?php endif; ?>
                            </figure>
                            <div class="flex-item-text">
                                <?php echo $row['insign-repiter-text']; ?>
                            </div>
                        </div>
                        <?php
                    }
                } ?>
            </div>
        </div>
    </div>
    <div class="bulding">
        <div class="container">
            <div class="text-buld">
                <?php the_field('bulding_text'); ?>
            </div>
        </div>
    </div>
    <div class="projects">
        <div class="full-container">
            <div class="flex-block">
                <?php if ($rows = get_field('projects')) {
                    foreach ($rows as $row) { ?>
                <a href="#" class="flex-item cover" style="background-image:url('<?php echo $row['projects_img'] ?>')">
                               <div style="<?php echo image_src($row['projects_img'], 'free', true, false); ?>"></div>
                    <div class="text-iproject">
                                <?php echo $row['project_text']; ?>
                    </div>
                </a>
                        <?php
                    }
                } ?>
            </div>
        </div>
    </div>
    <div class="expand cover" style="background-image:url('<?php echo the_field('expand_bg'); ?>')">
        <div class="container">
            <div class="logo-block">
                <a href="#" class="logo"><?php if( get_field('bottom_logo') ): ?>
                        <img src="<?php the_field('bottom_logo'); ?>" />
                    <?php endif; ?></a>
            </div>
            <div class="flex-expand">
                <div class="expand-text-block">
                    <?php the_field('expand_text'); ?>

                </div>
                <div class="expand-form-block">
                    <?php the_field('form_bottom'); ?>
                </div>
            </div>
        </div>
    </div>

    <script src="js/script.js"></script>
    </body>
    </html>
<?php get_footer(); ?>