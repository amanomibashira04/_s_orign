<?php
/**
 * the Custom post
 *
 * @package _s_orign_orign
 */


/**===================================
news（階層あり：hierarchical => true）
====================================== */
function create_post_type() {

	register_post_type(
		'news',
		array(
			'label'         => 'ニュース',
			'public'        => true,
			'has_archive'   => true,
			'show_in_rest'  => true,
			'hierarchical'  => true,
			'menu_position' => 5,
			'show_in_rest' => true, 
			'supports'      => array(
				'title',
				'editor',
				'excerpt',
				'thumbnail',
				'revisions',
				'custom-fields',
				'page-attributes',
			),
		)
	);

	register_taxonomy(
		'news-cat',
		'news',
		array(
			'label'        => 'カテゴリー：ニュース',
			'hierarchical' => true,
			'public'       => true,
			'show_in_rest' => true,
		)
	);

	register_taxonomy(
		'news-tag',
		'news',
		array(
			'label'                 => 'タグ：ニュース',
			'hierarchical'          => false,
			'public'                => true,
			'show_in_rest'          => true,
			'update_count_callback' => '_update_post_term_count',
		)
	);

}
add_action( 'init', 'create_post_type' );
