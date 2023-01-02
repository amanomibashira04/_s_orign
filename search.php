<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package _s_orign_orign
 */

get_header();
?>
<div class="site-body-header">
	<div class="site-body-header-inner container">
		<h1 class="entry-title">
			<?php
			printf( esc_html__( '検索結果： %s', '_s_orign_orign' ), '<span>' . get_search_query() . '</span>' );
			?>
		</h1>
	</div>
</div><!-- .site-body-header -->
<?php breadcrumb(); ?>
<div class="site-body">
	<div class="site-body-container container">
		<main id="primary" class="site-main">
			<?php if ( have_posts() ) : ?>
				<header class="page-header">
				</header><!-- .page-header -->
				<?php
				/* Start the Loop */
				while ( have_posts() ) :
					the_post();
					/**
					 * Run the loop for the search to output the results.
					 * If you want to overload this in a child theme then include a file
					 * called content-search.php and that will be used instead.
					 */
					get_template_part( 'template-parts/content', 'search' );
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
