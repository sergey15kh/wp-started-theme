<?php
/**
 * Archive template
 *
 * @package start-theme
 */

get_header(); ?>

<main id="primary" class="site-main">

  <?php if ( have_posts() ) : ?>

    <header class="page-header">
      <h1 class="page-title"><?php the_archive_title(); ?></h1>
      <?php the_archive_description( '<div class="archive-description">', '</div>' ); ?>
    </header>

    <?php while ( have_posts() ) : the_post(); ?>
      <?php get_template_part( 'template-parts/content', get_post_type() ); ?>
    <?php endwhile; ?>

    <?php the_posts_navigation(); ?>

  <?php else : ?>

    <?php get_template_part( 'template-parts/content', 'none' ); ?>

  <?php endif; ?>

</main>

<?php get_footer(); ?>
