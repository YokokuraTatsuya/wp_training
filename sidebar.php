<?php
/*
 * sidebar.php
*/

if ( ! is_active_sidebar( 'sidebar-main ' ) ) {
  return;
}
?>

<aside id="secondary" class="sidebar" role="complementary">
  <?php dynamic_sidebar( 'sidebar-main' ); ?>
</aside>
