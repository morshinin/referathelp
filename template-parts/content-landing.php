<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package referathelp
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php
		if ( is_single() ) :
			the_title( '<h1 class="entry-title">', '</h1>' );
		else :
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;

		if ( 'post' === get_post_type() ) : ?>
		<div class="entry-meta">
			<?php referathelp_posted_on(); ?>
		</div><!-- .entry-meta -->
		<?php
		endif; ?>
	</header><!-- .entry-header -->

	<div class="entry-content">

			<div class="table-responsive">
			<table class="table">
				<tbody>
					<?php 
						// $value = array( 'landing_cost', 'landing_time', 'landing_author' );
						$fields = get_fields();
						// $t_heading = array( 'Цена', 'Срок выполнения', 'Автор', 'Доработка', 'Гарантия' );
						/**
						 * Собираем все кастомные метаполя и выводим их в таблице. Здесь используются теги плагина Advanced Custom Fields.
						 */
						if ( $fields ) {
							foreach ($fields as $field_name => $value) {
								$f_obj = get_field_object( $field_name, false, array( 'load_value' => false ) );
								// $f_label = get_field_object();
								?>
								<tr>
									<th>
										<?php /*_e( 'Цена', 'referathelp' );*/ ?>
										<?php echo $f_obj['label']; ?>
									</th>
									<td>
										<?php echo $value; ?>
									</td>
								</tr>
								<?php
							}
						}
					 ?>
				</tbody>
			</table>
			</div>	<!-- .table-responsive -->
					<?php

			// if ( has_post_thumbnail() ) {
			// 	the_post_thumbnail( 'thumbnail', array( 'class' => 'img-responsive' ) );
			// }

			the_content( sprintf(
				/* translators: %s: Name of current post. */
				wp_kses( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'referathelp' ), array( 'span' => array( 'class' => array() ) ) ),
				the_title( '<span class="screen-reader-text">"', '"</span>', false )
			) );

			?>

			<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'referathelp' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php referathelp_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
