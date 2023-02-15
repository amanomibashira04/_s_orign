<?php
/**
 *
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
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
		if ( is_front_page() ) :
			else :
				the_title( '<h1 class="page-header-title">', '</h1>' );
			endif
			?>
	</div>
</div><!-- .site-body-header -->
<?php breadcrumb(); ?>
<div class="site-body">
	<div class="container">
		<main id="primary" class="site-main">
			<?php
			while ( have_posts() ) :
				the_post();
				get_template_part( 'template-parts/content', get_post_type() );
				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;
			endwhile; // End of the loop.
			?>
		</main><!-- #main -->
	</div>
</div>
<?php
get_footer();
