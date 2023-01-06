<?php
/**
 * Template Name:The front page template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package _s_orign_orign
 */

get_header();
?>
<div class="site-body">
	<div class="site-body-container container">
		<main id="primary" class="site-main">
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<header class="entry-header">
				</header><!-- .entry-header -->
				<?php _s_orign_post_thumbnail(); ?>
				<div class="entry-content">
					<h2>swiper</h2>
				<?php get_template_part( 'template-parts/header-hiro' ); ?>
				</div><!-- .entry-content -->
				<div class="entry-meta">
					<footer class="entry-footer">
						<?php _s_orign_entry_footer(); ?>
					</footer><!-- .entry-footer -->
		</main><!-- #main -->
	</div>
</div>
<?php
get_footer();
