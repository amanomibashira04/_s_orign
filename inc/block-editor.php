<?php

/*
========================================================
ブロックエディターコンテンツ領域
=========================================================*/

// フロント：ブロックエディタ用CSSの追加
add_action(
	'after_setup_theme',
	function() {
		// ブロックエディタ用スタイル機能をテーマに追加
		add_theme_support( 'editor-styles' );
		// ブロックエディタ用CSSの読み込み
		add_editor_style( '/common/css/editor-style.css' );
	}
);


// 管理画面：ブロックエディタ用CSSの追加
add_action(
	'admin_enqueue_scripts',
	function ( $hook_suffix ) {
		// 新規・編集投稿ページのみ読み込み
		if ( 'post.php' === $hook_suffix || 'post-new.php' === $hook_suffix ) {
			// CSSディレクトリの設定
			$uri = get_template_directory_uri() . '/common/css/editor-style.css';
			// CSSファイルの読み込み
			wp_enqueue_style( 'smart-style', $uri, array(), wp_get_theme()->get( 'Version' ) );
			// JSディレクトリ
			$uri = get_template_directory_uri() . '/common/js/editor-style.js';
			// JSァイルの読み込み
			wp_enqueue_script( 'smart-script', $uri, array(), wp_get_theme()->get( 'Version' ), true );
		}
	}
);

/*
========================================================
管理画面ブロックエディタ用のJSを追加
enqueue_block_editor_asset：ブロックエディタ用のフック
=========================================================*/
add_action(
	'enqueue_block_editor_assets',
	function () {
		// ブロック用のJSは第3引数を指定する必要がある
		wp_enqueue_script(
			'new-theme-editor-js',
			get_theme_file_uri( 'common/js/editor.js' ),
			array(
				'wp-element',
				'wp-rich-text',
				'wp-editor',
			)
		);
	}
);

/*
========================================================
投稿タイプによってstyleシートを分ける場合
=========================================================*/
function add_block_editor_styles() {
	global $pagenow;
	if ( is_admin() && $pagenow == 'post.php' || $pagenow == 'post-new.php' ) { // 投稿画面かどうか判定する
		$posttype = get_post_type(); // 投稿タイプを取得

		if ( $posttype == 'post' ) { // 通常の投稿ページなら以下のスタイルシートを読み込む
			wp_enqueue_style( 'block-style', get_stylesheet_directory_uri() . '/block-style/block_style.css' );
		} elseif ( $posttype == 'news' ) { // カスタム投稿名「news」なら以下のスタイルシートを読み込む
			wp_enqueue_style( 'news-block-style', get_stylesheet_directory_uri() . '/block-style/news-block_style.css' );
		}
	}
}
add_action( 'enqueue_block_editor_assets', 'add_block_editor_styles' );
