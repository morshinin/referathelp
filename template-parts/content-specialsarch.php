<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package referathelp
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class( 'row' ); ?>>
	<figure class="col-md-4">
			<?php 
				if ( has_post_thumbnail() ) {
				the_post_thumbnail( 'thumbnail', array( 'class' => 'img-responsive' ) );
			}
			?>
		</figure>

	<div class="col-md-8">

		<header class="entry-header">
			<?php
			if ( is_single() ) :
				the_title( '<h1 class="entry-title">', '</h1>' );
			else :
				the_title( '<h2 class="entry-title">', '</h2>' );
			endif; ?>

			
			<div class="entry-meta">
				<?php the_date(); ?>
			</div><!-- .entry-meta -->

		</header><!-- .entry-header -->
		
		<?php
			the_content();
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php referathelp_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
