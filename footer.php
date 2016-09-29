<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package referathelp
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="container">
			<div class="row margin-third">
			    <?php /* Secondary navigation */
			    wp_nav_menu( array(
			      'theme_location' => 'secondary',
			      'menu_id' => 'secondary',
			      'container'         => 'div',
		          'container_class'   => '',
		          'container_id'      => '',
		          'menu_class'        => 'list-unstyled'
		         ));
			    ?>
			</div>
			<div class="row">
				<p>
					<?php _e( 'Посмотрите готовые работы в нашем ', 'referathelp' ); ?>
					<a href="#" class="btn btn-link">
						<?php _e( 'Магазине готовых работ', 'referathelp' ); ?>
					</a>
				</p>
			</div>
			<div class="row">
			    <?php /* Secondary navigation */
			    wp_nav_menu( array(
			      'theme_location' => 'third',
			      'menu_id' => 'third',
			      'container'         => 'div',
		          'container_class'   => '',
		          'container_id'      => '',
		          'menu_class'        => 'list-unstyled list-inline text-center'
		         ));
			    ?>
			</div>
			<div class="row">
				<div class="site-info text-center">
					<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'referathelp' ) ); ?>"><?php printf( esc_html__( 'Proudly powered by %s', 'referathelp' ), 'WordPress' ); ?></a>
					<span class="sep"> | </span>
					<?php printf( esc_html__( 'Theme: %1$s by %2$s.', 'referathelp' ), 'referathelp', '<a href="http://morshinin.ru/front-end" rel="designer">Mikhail Morshinin</a>' ); ?>
				</div><!-- .site-info -->
			</div>	<!-- .row -->
		</div>	<!-- .container -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
