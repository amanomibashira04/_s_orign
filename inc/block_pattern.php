<?php

/*
========================================================
ロックインスペクター
=========================================================*/

if ( ! function_exists() ):

	function hoge_register_block_patterns() {
		register_block_pattern(
			$block_pattern_name, // ブロックパターンの名前
			array(
				'title' => "", // ブロックパターンのタイトル※こちらが表示されるタイトル
				'categories' => array('text'), // カテゴリを指定textは適当
				'description' => '', // パターンの説明。ここに指定してある文言が紹介文になる
				'content' => "", // ★ここにコンテンツ内容を入れる
				'keywords' => [], // キーワード検索でひっかけたい文字を指定する
				'viewportWidth' => 'ブロックパターンプレビュー時の想定幅'
			)
		)
	}
	add_action('init', 'hoge_register_block_patterns');
	// @XXX hoge部分は適宜変更してください
	endif;
