    <?php get_header(); ?>

    <?php get_template_part( 'content-desktop', get_post_format() ); ?>

    <?php get_template_part( 'content-mobile', get_post_format() ); ?>

    <?php get_footer(); ?>