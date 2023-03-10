<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package _s_orign_orign
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="main-entry-header">
	</header><!-- .entry-header -->
	<?php
	if ( 'post' === get_post_type() ) :
		?>
	<div class="main-entry-meta">
		<?php
			_s_orign_posted_on();
			_s_orign_posted_by();
		?>
	</div><!-- .entry-meta -->
		<?php
	endif;
	?>

	<?php _s_orign_post_thumbnail(); ?>
	<?php
	if ( 'news' === get_post_type() ) :
		?>
	<div class="main-entry-meta">
		<?php
			_s_orign_posted_on();
			_s_orign_posted_by();
		?>
	</div><!-- .entry-meta -->
		<?php
	endif;
	?>

	<div class="entry-content">
		<?php
			the_content(
				sprintf(
					wp_kses(
					/* translators: %s: Name of current post. Only visible to screen readers */
						__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', '_s_orign_orign' ),
						array(
							'span' => array(
								'class' => array(),
							),
						)
					),
					wp_kses_post( get_the_title() )
				)
			);
			wp_link_pages(
				array(
					'before' => '<div class="page-links">' . esc_html__( 'Pages:', '_s_orign_orign' ),
					'after'  => '</div>',
				)
			);

			?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php _s_orign_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->
