<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package _s_orign_orign
 */

?>

<!-- basic認証start -->
<?php
/**
if ( ! is_home() ) :
	if ( is_page( '2677' ) ) :
		$userArray = array(
			'guest' => '12345',
		);
		basic_auth( $userArray );
	endif;
endif;
 */
?>
<!-- basic認証end -->

<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	<div id="page" class="site">
		<a class="skip-link screen-reader-text"
			href="#primary"><?php esc_html_e( 'Skip to content', 'underscores_orign' ); ?></a>
		<header id="masthead" class="site-header">
			<!-- ヘッダーメニュー -->
			<div class="container">
				<div class="site-branding">
					<?php the_custom_logo(); ?>
					<?php if ( ! has_custom_logo() ) { ?>
						<?php
						if ( is_front_page() && is_home() ) :
							?>
					<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"
							rel="home"><?php bloginfo( 'name' ); ?></a></h1>
						<?php else : ?>
					<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"
							rel="home"><?php bloginfo( 'name' ); ?></a></p>
						<?php endif; ?>
						<?php } ?>
						<?php
						$underscores_orign_description = get_bloginfo( 'description', 'display' );
						if ( $underscores_orign_description || is_customize_preview() ) :
							?>
					<p class="site-description">
							<?php
							echo $underscores_orign_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
							?>
					</p>
						<?php endif; ?>
				</div>
				<nav id="site-navigation" class="main-navigation">
					<button class="menu-toggle" aria-controls="primary-menu"
						aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'underscores_orign' ); ?>
					</button>
					<?php
							wp_nav_menu(
								array(
									'theme_location' => 'menu-1',
									'menu_id'        => 'primary-menu',
								)
							);
							?>
				</nav>
				<!-- ヘッダー背景 -->
				<?php
				/**
				get_template_part( 'inc/header-image' );
				*/
				?>
			</div>
		</header><!-- #masthead -->
