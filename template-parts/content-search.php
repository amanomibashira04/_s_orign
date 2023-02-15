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
	<header class="main-entry-content">
		<?php the_title( sprintf( '<h2 ><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
	</header><!-- .main-entry-header -->
	<?php _s_orign_post_thumbnail(); ?>
	<div class="main-entry-summary">
		<?php the_excerpt(); ?>
	</div><!-- .entry-summary -->
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

	<footer class="main-entry-footer">
		<?php _s_orign_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->
