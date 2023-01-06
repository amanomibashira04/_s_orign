<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package _s_orign_orign
 */

?>

<footer id="colophon" class="site-footer">
	<nav class="foote-navigation">
		<div class="container">
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-2',
					'menu_id'        => 'footer-menu',
				)
			);
			?>
		</div>
	</nav>
	<div class="site-info">
		<div class="container">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', '_s_orign_orign' ) ); ?>">
				<?php
				/* translators: %s: CMS name, i.e. WordPress. */
				printf( esc_html__( 'Proudly powered by %s', '_s_orign_orign' ), 'WordPress' );
				?>
			</a>
			<span class="sep"> | </span>
			<?php
			/* translators: 1: Theme name, 2: Theme author. */
			printf( esc_html__( 'Theme: %1$s by %2$s.', '_s_orign_orign' ), '_s_orign_orign', '<a href="http://underscores.me/">Underscores.me</a>' );
			?>
		</div>
	</div><!-- .site-info -->
</footer><!-- #colophon -->
</div><!-- #page -->
<?php wp_footer(); ?>
<a href="#" class="pagetop">▲</a>
</body>
</html>
