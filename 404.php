<?php
/**
 * Template: 404 Not Found
 *
 * @package start-theme
 */

get_header(); ?>

<main id="primary" class="site-main">

  <section class="error-404 not-found">
    <header class="page-header">
      <h1 class="page-title"><?php esc_html_e( 'Страница не найдена', 'start-theme' ); ?></h1>
    </header>

    <div class="page-content">
      <p><?php esc_html_e( 'К сожалению, такой страницы не существует. Возможно, вы имели в виду что-то другое?', 'start-theme' ); ?></p>

      <a class="button" href="<?php echo esc_url( home_url( '/' ) ); ?>">
        <?php esc_html_e( 'На главную', 'start-theme' ); ?>
      </a>

      <?php get_search_form(); ?>
    </div>
  </section>

</main>

<?php get_footer(); ?>
