<?php
/**
 * Template part for displaying page content in page.php
 *
 * @package start-theme
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

  <?php if ( has_post_thumbnail() ) : ?>
    <div class="page-thumbnail">
      <?php the_post_thumbnail( 'full' ); ?>
    </div>
  <?php endif; ?>

  <header class="page-header">
    <h1 class="page-title"><?php the_title(); ?></h1>
  </header>

  <div class="page-content">
    <?php the_content(); ?>
  </div>

</article>
