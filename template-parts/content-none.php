<section class="no-results not-found">
  <header class="page-header">
    <h1 class="page-title"><?php esc_html_e( 'Nothing Found', 'start-theme' ); ?></h1>
  </header>

  <div class="page-content">
    <?php if ( is_home() && current_user_can( 'publish_posts' ) ) : ?>
      <p>
        <?php
        printf(
          wp_kses(
            __( 'Ready to publish your first post? <a href="%1$s">Create one here</a>.', 'start-theme' ),
            [ 'a' => [ 'href' => [] ] ]
          ),
          esc_url( admin_url( 'post-new.php' ) )
        );
        ?>
      </p>

    <?php elseif ( is_search() ) : ?>
      <p><?php esc_html_e( 'Sorry, no results found. Try different keywords.', 'start-theme' ); ?></p>
      <?php get_search_form(); ?>

    <?php else : ?>
      <p><?php esc_html_e( 'It seems nothing matches your request.', 'start-theme' ); ?></p>
      <?php get_search_form(); ?>
    <?php endif; ?>
  </div>
</section>
