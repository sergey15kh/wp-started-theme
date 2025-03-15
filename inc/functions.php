<?php
function pagination() {
  global $wp_query;

  if ( $wp_query->max_num_pages <= 1 ) {
    return;
  }

  $big = 999999999;
  $args = array(
    'base'      => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
    'format'    => '?paged=%#%',
    'current'   => max(1, get_query_var('paged')),
    'total'     => $wp_query->max_num_pages,
    'type'      => 'array',
    'prev_text' => '&lsaquo;',
    'next_text' => '&rsaquo;',
  );

  $pages = paginate_links( $args );
  if ( is_array( $pages ) ) {
    echo '<div class="pagination">';
    foreach ( $pages as $page ) {
      echo '<span class="pagination__item">' . $page . '</span>';
    }
    echo '</div>';
  }
}

function get_reading_time( $post_id = null ) {
  if ( ! $post_id ) {
    $post_id = get_the_ID();
  }
  $content = get_post_field( 'post_content', $post_id );
  $content = strip_tags( $content );
  $word_count = str_word_count( $content );
  $minutes = ceil( $word_count / 300 );

  return $minutes;
}











