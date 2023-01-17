<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package _s_orign_orign
 */

get_header();
?>
<div class="site-body-header">
	<div class="site-body-header-inner container">
		<?php
		if ( is_singular() ) :
			the_title( '<h1 class="site-body-title">', '</h1>' );
		else :
			the_title( '<h2 class="site-body-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;
		?>
	</div>
</div><!-- .site-body-header -->
<?php breadcrumb(); ?>
<div class="site-body">
	<div class="site-body-container container">
		<main id="primary" class="site-main">
			<?php
			while ( have_posts() ) :
				the_post();
				get_template_part( 'template-parts/content' );
				the_post_navigation(
					array(
						'prev_text' => '<span class="nav-subtitle">' . esc_html__( '前の記事へ：', '_s_orign_orign' ) . '</span> <span class="nav-title">%title</span>',
						'next_text' => '<span class="nav-subtitle">' . esc_html__( '次記事へ：', '_s_orign_orign' ) . '</span> <span class="nav-title">%title</span>',
					)
				);
				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;
			endwhile; // End of the loop.
			?>
		</main><!-- #main -->
		<?php get_sidebar(); ?>
	</div>
</div>
<?php
get_footer();
