<?php
/**
 * _s_orign functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package _s_orign_orign
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function _s_orign_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on _s_orign, use a find and replace
		* to change '_s_orign_orign' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( '_s_orign_orign', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
		* Let WordPress manage the document title.
		* By adding theme support, we declare that this theme does not use a
		* hard-coded <title> tag in the document head, and expect WordPress to
		* provide it for us.
		*/
	add_theme_support( 'title-tag' );

	/*
		* Enable support for Post Thumbnails on posts and pages.
		*
		* @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		*/
	add_theme_support( 'post-thumbnails' );
	// サムネイルのサイズ
	// set_post_thumbnail_size(200, 200 );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus(
		array(
			'menu-1' => esc_html__( 'Primary', '_s_orign_orign' ),
		)
	);

	/*
		* Switch default core markup for search form, comment form, and comments
		* to output valid HTML5.
		*/
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	// Set up the WordPress core custom background feature.
	add_theme_support(
		'custom-background',
		apply_filters(
			'_s_orign_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 250,
			'width'       => 75,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);
		// Add support for full and wide align images(wpsk addition).
		add_theme_support( 'align-wide' );

		// Add support for responsive embeds(wpsk addition).
		add_theme_support( 'responsive-embeds' );
}
add_action( 'after_setup_theme', '_s_orign_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function _s_orign_content_width() {
	$GLOBALS['content_width'] = apply_filters( '_s_orign_content_width', 640 );
}
add_action( 'after_setup_theme', '_s_orign_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function _s_orign_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'サイドバー', '_s_orign_orign' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', '_s_orign_orign' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', '_s_orign_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function _s_orign_scripts() {
	// This css is destyle.css(wpsk addition).
	// wp_enqueue_style( 'reset_css', 'https://cdn.jsdelivr.net/npm/destyle.css@1.0.15/destyle.css', array(), false, 'all' );
	// This css is modern.css(wpsk addition).
	// wp_enqueue_style( 'reset_css', 'https://unpkg.com/modern-css-reset/dist/reset.min.css', array(), false, 'all' );
	// This css is ress.css(wpsk addition).
	// wp_enqueue_style( 'reset_css', 'https://unpkg.com/ress/dist/ress.min.css', array(), false, 'all' );
	wp_enqueue_style( '_s_orign_orign-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( '_s_orign_orign-style', 'rtl', 'replace' );
	// wp_enqueue_style( 'swiper_css', 'https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css', array(), false, 'all' );

	wp_enqueue_script( '_s_orign_orign-navigation', get_template_directory_uri() . '/assets/js/navigation.js', array(), _S_VERSION, true );
	wp_enqueue_script( '_s_orign_orign-jquery-bac-to-top', get_template_directory_uri() . '/assets/js/js-back-to-top.js', array( 'jquery' ), _S_VERSION, true );
	// wp_enqueue_script( '_s_orign_orign-jquery-test', get_template_directory_uri() . '/assets/js/jquery-test01.js', array(), _S_VERSION, true );
	// wp_enqueue_script( '_s_orign_orign-accordion', get_template_directory_uri() . '/assets/js/accordion_test01.js', array(), _S_VERSION, true );
	// wp_enqueue_script( '_s_orign-tab', get_template_directory_uri() . '/assets/js/tab_test01.js', array(), _S_VERSION, true );
	// wp_enqueue_script( 'jquery', '//ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js', array(), _S_VERSION, false );
	// wp_enqueue_script( 'swiper', 'https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js', array(), _S_VERSION, true );
	// wp_enqueue_script( '_s_orign-contact7', get_template_directory_uri() . '/assets/js/contact7.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', '_s_orign_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
// if ( defined( 'JETPACK__VERSION' ) ) {
// require get_template_directory() . '/inc/jetpack.php';
// }



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

/** パンくずリスト */
require get_template_directory() . '/inc/breadcrumb.php';


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
