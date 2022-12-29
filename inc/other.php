<?php

/* 投稿一覧にスラッグ追加 */
function add_posts_columns_slug( $columns ) {
	$columns['slug'] = 'スラッグ';
	return $columns;
}
function add_posts_columns_slug_row( $column_name, $post_id ) {
	if ( $column_name == 'slug' ) {
		$slug = get_post( $post_id )->post_name;
		echo esc_attr( $slug );
	}
}
add_filter( 'manage_posts_columns', 'add_posts_columns_slug' );
add_action( 'manage_posts_custom_column', 'add_posts_columns_slug_row', 10, 2 );



// 投稿のアーカイブページを作成する
function post_has_archive( $args, $post_type ) {
	if ( 'post' == $post_type ) {
		$args['rewrite']     = true; // リライトを有効にする
		$args['has_archive'] = 'blog'; // 任意のスラッグ名
	}
	return $args;
}
add_filter( 'register_post_type_args', 'post_has_archive', 10, 2 );

// メニューのサブタイトル（タイトル属性）を表示させる
function sk_sub_menu_nav_menu( $item_output, $item ) {
	return preg_replace( '/(<a.*?>[^<]*?)</', '$1' . "<span>{$item->attr_title}</span><", $item_output );
}
add_filter( 'walker_nav_menu_start_el', 'sk_sub_menu_nav_menu', 10, 4 );


// バージョン表記
remove_action( 'wp_head', 'wp_generator' );

// 外部ブログツールからの投稿を受け入れ
// remove_action( 'wp_head', 'rsd_link' );
// remove_action( 'wp_head', 'wlwmanifest_link' );

// 絵文字
remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
remove_action( 'wp_print_styles', 'print_emoji_styles', 10 );

// RSSフィードのURL
// remove_action( 'wp_head', 'feed_links', 2 );
// remove_action( 'wp_head', 'feed_links_extra', 3 );



// REST APIのURL表示
// remove_action( 'wp_head', 'rest_output_link_wp_head' );
// remove_action( 'wp_head', 'wp_oembed_add_discovery_links' );
// remove_action( 'wp_head', 'wp_oembed_add_host_js' );


// 短縮URL
// remove_action( 'wp_head', 'wp_shortlink_wp_head' );

// ウィジェット「最近のコメント」の表示
// function remove_recent_comment_css() {
// global $wp_widget_factory;
// remove_action( 'wp_head', array( $wp_widget_factory->widgets['WP_Widget_Recent_Comments'], 'recent_comments_style' ) );
// }
// add_action( 'widgets_init', 'remove_recent_comment_css' );


/*グローバルメニューのliのid,classを削除*/
add_filter( 'nav_menu_css_class', 'wp_navtag_remove', 100, 1 ); // liのclassを強制的に全削除
add_filter( 'nav_menu_item_id', 'wp_navtag_remove', 100, 1 ); // liのidを強制的に削除
add_filter( 'page_css_class', 'wp_navtag_remove', 100, 1 ); // これはテーマによって記述しなくても良い場合がありますが、念の為記述しておいてください
function wp_navtag_remove( $var ) {
	return is_array( $var ) ? array_intersect( $var, array( 'current-menu-item' ) ) : '';
}
	// タイトルセパレーターの詳細設定
function title_separator_change( $sep ) {
	$sep = '|';
	return $sep;
}
add_filter( 'document_title_separator', 'title_separator_change' );




/** Basic認証 */
function basic_auth( $auth_list, $realm = 'Restricted Area', $failed_text = '認証に失敗しました' ) {
	if ( isset( $_SERVER['PHP_AUTH_USER'] ) and isset( $auth_list[ $_SERVER['PHP_AUTH_USER'] ] ) ) {
		if ( $auth_list[ $_SERVER['PHP_AUTH_USER'] ] == $_SERVER['PHP_AUTH_PW'] ) {
			return $_SERVER['PHP_AUTH_USER'];
		}
	}
	header( 'WWW-Authenticate: Basic realm="' . $realm . '"' );
	header( 'HTTP/1.0 401 Unauthorized' );
	header( 'Content-type: text/html; charset=' . mb_internal_encoding() );
	die( $failed_text );
}

// コンタクトフォーム7読み込み制限
function cf7_limitation() {
	add_filter( 'wpcf7_load_js', '__return_false' );
	add_filter( 'wpcf7_load_css', '__return_false' );
	if ( is_page( 'contact' ) ) {
		if ( function_exists( 'wpcf7_enqueue_scripts' ) ) {
			wpcf7_enqueue_scripts();
		}
		if ( function_exists( 'wpcf7_enqueue_styles' ) ) {
			wpcf7_enqueue_styles();
		}
	}
}
add_action( 'template_redirect', 'cf7_limitation' );

// reCaptcha読み込み制限
function recaptcha_limitation() {
	if ( ! is_page( 'contact' ) ) {
		wp_deregister_script( 'google-recaptcha' );
	}
}
add_action( 'wp_enqueue_scripts', 'recaptcha_limitation', 100 );
