<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <header class="entry-header">
    <h2 class="entry-title">
      <a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a>
    </h2>

    <?php if ( 'post' === get_post_type() ) : ?>
      <div class="entry-meta">
        <?php start_theme_posted_on(); ?>
        <?php start_theme_posted_by(); ?>
      </div>
    <?php endif; ?>
  </header>

  <?php start_theme_post_thumbnail(); ?>

  <div class="entry-summary">
    <?php the_excerpt(); ?>
  </div>

  <footer class="entry-footer">
    <?php start_theme_entry_footer(); ?>
  </footer>
</article>
