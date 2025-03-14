<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package start-theme
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <header class="entry-header">
    <?php if ( is_singular() ) : ?>
      <h1 class="entry-title"><?php the_title(); ?></h1>
    <?php else : ?>
      <h2 class="entry-title">
        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
      </h2>
    <?php endif; ?>

    <?php if ( 'post' === get_post_type() ) : ?>
      <div class="entry-meta">
        <?php start_theme_posted_on(); ?>
      </div>
    <?php endif; ?>
  </header>

  <?php // start_theme_post_thumbnail(); ?>

  <div class="entry-content">
    <?php the_content(); ?>
  </div>
</article>
