<?php
/**
 * The sidebar containing the main widget area.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package referathelp
 */

if ( ! is_active_sidebar( 'sidebar-landing' ) ) {
	return;
}
?>

<aside id="secondary" class="widget-area col-md-4" role="complementary">
	<?php dynamic_sidebar( 'sidebar-landing' ); ?>
</aside><!-- #secondary -->
