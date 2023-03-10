<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package _s_orign_orign
 */

get_header();
?>
<div class="page-header">
	<div class="container">
	<?php
	if ( have_posts() ) : ?>
		<?php
		the_archive_title( '<h1 class="page-header-title">', '</h1>' );
		the_archive_description( '<div class="archive-description">', '</div>' );
	else :
	endif;
	?>
	</div>
</div><!-- .site-body-header -->
<?php breadcrumb(); ?>
<div class="site-body">
	<div class="container">
		<main id="primary" class="site-main">
			<?php if ( have_posts() ) : ?>
				<header class="main-entry-header">
				</header><!-- .main-entry-header -->
				<!-- Start the Loop -->
				<?php
				while ( have_posts() ) :
					the_post();
					/*
					* Include the Post-Type-specific template for the content.
					* If you want to override this in a child theme, then include a file
					* called content-___.php (where ___ is the Post Type name) and that will be used instead.
					*/
					get_template_part( 'template-parts/content', get_post_type() );
				endwhile;
				the_posts_navigation();
			else :
				get_template_part( 'template-parts/content', 'none' );
			endif;
			?>
		</main><!-- #main -->
		<?php get_sidebar(); ?>
	</div>
</div>
<?php
get_footer();
