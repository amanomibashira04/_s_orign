<?php

/*
========================================================
パンくずリスト（microdata形式）
=========================================================*/
function breadcrumb( $divOption = array(
	'id'    => 'breadcrumb',
	'class' => 'breadcrumb',
) ) {
	global $post;
	$str = '';
	if ( ! is_home() && ! is_front_page() && ! is_admin() ) { /* !is_admin は管理ページ以外という条件分岐 */
		$tagAttribute = '';
		foreach ( $divOption as $attrName => $attrValue ) {
			$tagAttribute .= sprintf( ' %s="%s"', $attrName, $attrValue );
		}
		$str .= '<div' . $tagAttribute . '><div class="container">';
		$str .= '';
		$str .= '<a href="' . home_url() . '/"> TOP</a>';
		$str .= '&nbsp;｜&nbsp;';

		if ( is_category() ) { // カテゴリーのアーカイブページ
			$cat = get_queried_object();
			if ( $cat->parent != 0 ) {
				$ancestors = array_reverse( get_ancestors( $cat->cat_ID, 'category' ) );
				foreach ( $ancestors as $ancestor ) {
					$str .= '<a href="' . get_category_link( $ancestor ) . '">' . get_cat_name( $ancestor ) . '</a>';
					$str .= '&nbsp;｜&nbsp;';
				}
			}
			$str .= '<a href="' . get_category_link( $cat->term_id ) . '">' . $cat->cat_name . '</a>';

		} elseif ( is_single() ) {  // ブログの個別記事ページ
			$categories = get_the_category( $post->ID );
			$cat        = $categories[0];
			if ( $cat->parent != 0 ) {
				$ancestors = array_reverse( get_ancestors( $cat->cat_ID, 'category' ) );
				foreach ( $ancestors as $ancestor ) {
					$str .= '<a href="' . get_category_link( $ancestor ) . '">' . get_cat_name( $ancestor ) . '</a>';
					$str .= '&nbsp;｜&nbsp;';
				}
			}
			$str .= '<a href="' . get_category_link( $cat->term_id ) . '">' . $cat->cat_name . '</a>';
			$str .= '&nbsp;｜&nbsp;';
			$str .= '' . $post->post_title . '';
		} elseif ( is_page() ) {    // 固定ページ
			if ( $post->post_parent != 0 ) {
				$ancestors = array_reverse( get_post_ancestors( $post->ID ) );
				foreach ( $ancestors as $ancestor ) {
					$str .= '<a href="' . get_permalink( $ancestor ) . '">' . get_the_title( $ancestor ) . '</a>';
					$str .= '&nbsp;｜&nbsp;';
				}
			}

			$str .= '' . $post->post_title . '';
		} elseif ( is_date() ) {    // 日付ベースのアーカイブページ
			if ( get_query_var( 'day' ) != 0 ) {  // 年別アーカイブ
				$str .= '<a href="' . get_year_link( get_query_var( 'year' ) ) . '">' . get_query_var( 'year' ) . '年</a>';
				$str .= '<li>&gt;</li>';
				$str .= '<a href="' . get_month_link( get_query_var( 'year' ), get_query_var( 'monthnum' ) ) . '">' . get_query_var( 'monthnum' ) . '月</a>';
				$str .= '<li>&gt;</li>';
				$str .= '' . get_query_var( 'day' ) . '日';
			} elseif ( get_query_var( 'monthnum' ) != 0 ) {   // 月別アーカイブ
				$str .= '<a href="' . get_year_link( get_query_var( 'year' ) ) . '">' . get_query_var( 'year' ) . '年</a>';
				$str .= '<li>&gt;</li>';
				$str .= '' . get_query_var( 'monthnum' ) . '月';
			} else {    // 年別アーカイブ
				$str .= '' . get_query_var( 'year' ) . '年';
			}
		} elseif ( is_search() ) { // 検索結果表示ページ
			$str .= '「' . get_search_query() . '」で検索した結果';
		} elseif ( is_author() ) {  // 投稿者のアーカイブページ
			$str .= '投稿者 : ' . get_the_author_meta( 'display_name', get_query_var( 'author' ) ) . '';
		} elseif ( is_tag() ) { // タグのアーカイブページ
			$str .= 'タグ : ' . single_tag_title( '', false ) . '';
		} elseif ( is_attachment() ) {  // 添付ファイルページ
			$str .= '' . $post->post_title . '';
		} elseif ( is_404() ) { // 404 Not Found ページ
			$str .= '404 Not found';
		} else { // その他
			$str .= '<a href="' . get_permalink( $ancestor ) . '">' . get_the_title( $ancestor ) . '</a>';
			$str .= '&nbsp;｜&nbsp;';
		}
		$str .= '';
		$str .= '</div></div>';
	}
	echo $str;
}
