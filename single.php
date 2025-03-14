<?php
/**
 * Template for single post
 *
 * @package start-theme
 */

get_header(); ?>

<main id="primary" class="site-main">

  <?php while ( have_posts() ) : the_post(); ?>

    <?php get_template_part( 'template-parts/content', get_post_type() ); ?>

    <?php
    the_post_navigation( [
      'prev_text' => '<span class="nav-subtitle">' . esc_html__( 'Previous:', 'start-theme' ) . '</span> <span class="nav-title">%title</span>',
      'next_text' => '<span class="nav-subtitle">' . esc_html__( 'Next:', 'start-theme' ) . '</span> <span class="nav-title">%title</span>',
    ] );
    ?>

    <?php
    if ( comments_open() || get_comments_number() ) {
      comments_template();
    }
    ?>

  <?php endwhile; ?>

</main>

<?php get_footer(); ?>
