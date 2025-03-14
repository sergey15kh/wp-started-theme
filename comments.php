<?php
if ( post_password_required() ) {
  return;
}
?>

<section id="comments">

  <?php if ( have_comments() ) : ?>
    <h2>
      <?php
      printf(
        esc_html(
          _n( 'One comment on “%2$s”', '%1$s comments on “%2$s”', get_comments_number(), 'start-theme' )
        ),
        number_format_i18n( get_comments_number() ),
        get_the_title()
      );
      ?>
    </h2>

    <ol class="comment-list">
      <?php
      wp_list_comments( [
        'style'      => 'ol',
        'short_ping' => true,
        'avatar_size'=> 48,
      ] );
      ?>
    </ol>

    <?php the_comments_navigation(); ?>

    <?php if ( ! comments_open() ) : ?>
      <p class="no-comments"><?php esc_html_e( 'Comments are closed.', 'start-theme' ); ?></p>
    <?php endif; ?>
  <?php endif; ?>

  <?php comment_form(); ?>

</section>
