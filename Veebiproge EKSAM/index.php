<?php
    # head tag'i sees asuv, scriptid jms.
    wp_head();
?>
<body>
    <?php
        get_header();
    ?>
    <div id="table">
        <?php
            if ( have_posts() ) {
                while ( have_posts() ) {
                    the_post(); ?>
                    <div class="item">
                        <?php the_post_thumbnail( 'thumbnail', array( 'class' => 'featuredImg' ) ); ?>
                        <p class="itemName"><?php the_title(); ?></p>
                        <p class="description"><?php echo wp_strip_all_tags(get_the_content());?></p>
                        <p class="description">E-mail <?php echo get_post_meta(get_the_ID(), $key = 'E-mail', $single = true); ?></p>
                        <p class="description">Amet <?php echo get_post_meta(get_the_ID(), $key = 'Profession', $single = true); ?></p>
                    </div><?php
                }
            }
        ?>
    </div>
    <div class="space"></div>
    <?php get_footer();?>
</body>