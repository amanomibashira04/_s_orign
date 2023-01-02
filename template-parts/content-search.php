<?php
/**
 * Template part for displaying results in search pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package _s_orign_orign
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-content">
		<?php the_title( sprintf( '<h3 ><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h3>' ); ?>
	</header><!-- .entry-header -->
	<?php _s_orign_post_thumbnail(); ?>
	<div class="entry-summary">
		<?php the_excerpt(); ?>
	</div><!-- .entry-summary -->
	<?php
	if ( 'post' === get_post_type() ) :
		?>
		<div class="entry-meta">
			<?php
			_s_orign_posted_on();
			_s_orign_posted_by();
			?>
		</div><!-- .entry-meta -->
		<?php
	endif;
	?>

	<footer class="entry-footer">
		<?php _s_orign_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->
