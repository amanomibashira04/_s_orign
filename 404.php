<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package _s_orign_orign
 */

get_header();
?>
<div class="site-body-header">
	<div class="container">
		<h1 class="site-body-title"><?php esc_html_e( 'ページが見つかりません', '_s_orign_orign' ); ?></h1>
	</div>
</div><!-- .site-body-header -->
<?php breadcrumb(); ?>
<div class="site-body">
	<div class="container">
		<main id="primary" class="site-main">
			<section class="error-404 not-found">
				<header class="main-page-header">
				</header><!-- .main-page-header -->
				<div class="main-page-content">
					<p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', '_s_orign_orign' ); ?></p>
						<?php
						get_search_form();
						the_widget( 'WP_Widget_Recent_Posts' );
						?>
						<div class="widget widget_categories">
							<h2 class="widget-title"><?php esc_html_e( 'Most Used Categories', '_s_orign_orign' ); ?></h2>
							<ul>
								<?php
								wp_list_categories(
									array(
										'orderby'    => 'count',
										'order'      => 'DESC',
										'show_count' => 1,
										'title_li'   => '',
										'number'     => 10,
									)
								);
								?>
							</ul>
						</div><!-- .widget -->
						<?php
						/* translators: %1$s: smiley */
						$_s_orign_archive_content = '<p>' . sprintf( esc_html__( 'Try looking in the monthly archives. %1$s', '_s_orign_orign' ), convert_smilies( ':)' ) ) . '</p>';
						the_widget( 'WP_Widget_Archives', 'dropdown=1', "after_title=</h2>$_s_orign_archive_content" );
						the_widget( 'WP_Widget_Tag_Cloud' );
						?>
				</div><!-- .page-content -->
			</section><!-- .error-404 -->
		</main><!-- #main -->
	</div>
</div>
<?php
get_footer();
