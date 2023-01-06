<?php
/**
 * The template for displaying archive-news pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package _s_orign_orign
 */

get_header(); ?>
<div class="site-body-header">
	<div class="site-body-header-inner container">
		<?php
		the_archive_title( '<h1 class="page-title">', '</h1>' );
		the_archive_description( '<div class="archive-description">', '</div>' );
		?>
	</div>
</div><!-- .site-body-header -->
<?php breadcrumb(); ?>
<div class="site-body">
	<div class="site-body-container container">
		<main id="primary" class="site-main">
			<?php
			if ( have_posts() ) :
				?>
				<header class="page-header">
				</header><!-- .page-header -->
				<?php
				/* Start the Loop */
				while ( have_posts() ) :
					the_post();
					$thumbnail = ( has_post_thumbnail() ) ? get_the_post_thumbnail_url( get_the_ID(), 'medium' ) : 'https://placehold.jp/150x150.png';
					?>
					<article class="news-item">
						<a href="<?php the_permalink(); ?>" class="news-item__inner">
							<div class="news-item__media js-img-bg">
								<img src="<?php print $thumbnail; ?>" alt="">
							</div>
							<div class="news-item__body">
								<h2 class="news-item__title"><?php the_title(); ?></h2>
								<time datetime="the_time( 'Y-m-d' )"><?php the_time( 'Y.m.d' ); ?></time>
								<p class="news-item__text">
									<?php print mb_strimwidth( strip_tags( get_the_content() ), 0, 200, '…', 'UTF-8' ); ?>
								</p>
							</div>
						</a>
					</article>
					<?php
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
<?php get_footer(); ?>
