<?php
/**
 * Enqueue scripts and styles.
 */
function _s_orign_scripts() {
	wp_enqueue_style( '_s_orign_orign-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_enqueue_style( 'swiper_css', 'https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css', array(), false, 'all' );
	wp_style_add_data( '_s_orign_orign-style', 'rtl', 'replace' );

	wp_enqueue_script( '_s_orign_orign-navigation', get_template_directory_uri() . '/assets/js/navigation.js', array(), _S_VERSION, true );
	wp_enqueue_script( '_s_orign_orign-jquery-bac-to-top', get_template_directory_uri() . '/assets/js/js-back-to-top.js', array( 'jquery' ), _S_VERSION, true );
	wp_enqueue_script( '_s_orign_orign-accordion', get_template_directory_uri() . '/assets/js/accordion_test01.js', array(), _S_VERSION, true );
	wp_enqueue_script( '_s_orign-tab', get_template_directory_uri() . '/assets/js/tab_test01.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'swiper', 'https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'swiper-init', get_template_directory_uri() . '/assets/js/swiper.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', '_s_orign_scripts' );
