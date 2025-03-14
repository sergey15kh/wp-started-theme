<?php
/**
 * Sidebar template
 *
 * @package start-theme
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
  return;
}
?>

<aside id="sidebar" class="sidebar">
  <?php dynamic_sidebar( 'sidebar-1' ); ?>
</aside>
