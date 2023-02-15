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
	<header class="main-entry-header">
		<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></class=>' ); ?>
	</header><!-- .main-entry-header -->
	<?php _s_orign_post_thumbnail(); ?>
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
	<div class="main-entry-summary">
		<?php the_excerpt(); ?>
	</div><!-- .entry-summary -->
	<footer class="main-entry-footer">
		<?php _s_orign_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->
