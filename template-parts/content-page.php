<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package _s_orign_orign
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="page-header">
	</header><!-- .page-header -->
	<?php _s_orign_post_thumbnail(); ?>
	<div class="page-content">
		<?php
		the_content();
		wp_link_pages(
			array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', '_s_orign_orign' ),
				'after'  => '</div>',
			)
		);
		?>
	</div><!-- .page-content -->
	<?php if ( get_edit_post_link() ) : ?>
	<footer class="page-footer">
		<?php
			edit_post_link(
				sprintf(
					wp_kses(
						/* translators: %s: Name of current post. Only visible to screen readers */
						__( 'Edit <span class="screen-reader-text">%s</span>', '_s_orign_orign' ),
						array(
							'span' => array(
								'class' => array(),
							),
						)
					),
					wp_kses_post( get_the_title() )
				),
				'<span class="edit-link">',
				'</span>'
			);
		?>
	</footer><!-- .page-footer -->
	<?php endif; ?>
</article><!-- #post-<?php the_ID(); ?> -->
