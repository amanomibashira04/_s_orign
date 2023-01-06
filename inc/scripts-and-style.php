<?php
/**
 * Enqueue scripts and styles.
 */
function _s_orign_scripts() {
	// This css is destyle.css(wpsk addition).
	// wp_enqueue_style( 'reset_css', 'https://cdn.jsdelivr.net/npm/destyle.css@1.0.15/destyle.css', array(), false, 'all' );
	// This css is modern.css(wpsk addition).
	// wp_enqueue_style( 'reset_css', 'https://unpkg.com/modern-css-reset/dist/reset.min.css', array(), false, 'all' );
	// This css is ress.css(wpsk addition).
	wp_enqueue_style( 'reset_css', 'https://unpkg.com/ress/dist/ress.min.css', array(), false, 'all' );
	wp_enqueue_style( '_s_orign_orign-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( '_s_orign_orign-style', 'rtl', 'replace' );
	// wp_enqueue_style( 'bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css', array(), false, 'all' );
	wp_enqueue_style( 'swiper_css', 'https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css', array(), false, 'all' );

	wp_enqueue_script( '_s_orign_orign-navigation', get_template_directory_uri() . '/assets/js/navigation.js', array(), _S_VERSION, true );
	wp_enqueue_script( '_s_orign_orign-jquery-bac-to-top', get_template_directory_uri() . '/assets/js/js-back-to-top.js', array( 'jquery' ), _S_VERSION, true );
	// wp_enqueue_script( '_s_orign_orign-jquery-test', get_template_directory_uri() . '/assets/js/jquery-test01.js', array(), _S_VERSION, true );
	wp_enqueue_script( '_s_orign_orign-accordion', get_template_directory_uri() . '/assets/js/accordion_test01.js', array(), _S_VERSION, true );
	wp_enqueue_script( '_s_orign-tab', get_template_directory_uri() . '/assets/js/tab_test01.js', array(), _S_VERSION, true );
	// wp_enqueue_script( 'bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js', array(), _S_VERSION, false );
	// wp_enqueue_script( 'jquery', '//ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js', array(), _S_VERSION, false );
	wp_enqueue_script( 'swiper', 'https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'swiper-init', get_template_directory_uri() . '/assets/js/swiper.js', array(), _S_VERSION, true );
	// wp_enqueue_script( '_s_orign-contact7', get_template_directory_uri() . '/assets/js/contact7.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', '_s_orign_scripts' );
