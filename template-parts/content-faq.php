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
			$id = get_the_ID();
			if ( is_single() ) :
				the_title( '<h1 class="entry-title">', '</h1>' );
			else :
				the_title( '<h2 class="entry-title"><a data-toggle="collapse" href="#collapse-' . $id . '" aria-expanded="false" aria-controls="collapseExample">', '</a></h2>' );
			endif; ?>

			
			<div class="entry-meta">
			</div><!-- .entry-meta -->

		</header><!-- .entry-header -->
		<div class="entry-content collapse" id="collapse-<?php echo $id; ?>">
			<div class="well">
		<?php
			the_content();
		?>
		</div>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
