<?php
/**
 * Functions which enhance the theme by hooking into WordPress
 *
 * @package _s_orign_orign
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
// function _s_orign_body_classes( $classes ) {
// Adds a class of hfeed to non-singular pages.
// if ( ! is_singular() ) {
// $classes[] = 'hfeed';
// }

// Adds a class of no-sidebar when there is no sidebar present.
// if ( ! is_active_sidebar( 'sidebar-1' ) ) {
// $classes[] = 'no-sidebar';
// }

// return $classes;
// }
// add_filter( 'body_class', '_s_orign_body_classes' );

/**
 * Add a pingback url auto-discovery header for single posts, pages, or attachments.
 */
function _s_orign_pingback_header() {
	if ( is_singular() && pings_open() ) {
		printf( '<link rel="pingback" href="%s">', esc_url( get_bloginfo( 'pingback_url' ) ) );
	}
}
add_action( 'wp_head', '_s_orign_pingback_header' );

// カスタム投稿の編集画面に『投稿者』を表示
add_action( 'admin_menu', '_s_orign_add_custom_box' );
function _s_orign_add_custom_box() {
	if ( function_exists( 'add_meta_box' ) ) {
		add_meta_box( '_s_orign_sectionid', __( '投稿者', '_s_orign_textdomain' ), 'post_author_meta_box', 'news', 'advanced' );
	}
}
function manage_news_columns( $columns ) {
	$columns['author'] = '投稿者';
	return $columns;
}
function add_news_column( $column, $post_id ) {
	if ( 'author' == $column ) {
		$value = get_the_term_list( $post_id, 'author' );
		echo attribute_escape( $value );
	}
}
add_filter( 'manage_posts_columns', 'manage_news_columns' );
add_action( 'manage_posts_custom_column', 'add_news_column', 10, 2 );
