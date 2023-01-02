<?php
/**
 * パンくずリスト
 *
 * You can add an optional custom header image to header.php like so ...
 *
	<?php breadcrumb(); ?>
 *
 * @link https://developer.wordpress.org/themes/functionality/custom-headers/
 *
 * @package _s_orign_orign
 */

// パンくずリスト
function getBC( $cat_id, $inLevel ) {
	$cat_list = array();
	$stBCMain = '';
	while ( $cat_id ) {
		$cat      = get_category( $cat_id );
		$cat_link = get_category_link( $cat_id );
		array_unshift( $cat_list, '<a href="' . $cat_link . '" itemprop="item"><span itemprop="name">' . $cat->name . '</span></a>' );
		$cat_id = $cat->parent;
	}
	foreach ( $cat_list as $value ) {
		$stBCMain .= '<li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">' . $value . '<meta itemprop="position" content="' . $inLevel++ . '" /></li>';
	}
	return array( $stBCMain, $inLevel );
}
function getCateBC( $cat_id, $inLevel ) {
	$cat_list = array();
	$stBCMain = '';
	while ( $cat_id ) {
		$cat      = get_category( $cat_id );
		$cat_link = get_category_link( $cat_id );
		array_unshift( $cat_list, '<a href="' . $cat_link . '" itemprop="item"><span itemprop="name">' . $cat->name . '</span></a>' );
		if ( $cat_id->category_parent == 0 ) {
			break; }
		$cat_id = $cat_id->category_parent;
	}
	foreach ( $cat_list as $value ) {
		$stBCMain .= '<li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">' . $value . '<meta itemprop="position" content="' . $inLevel++ . '" /></li>';
	}
	return array( $stBCMain, $inLevel );
}
function breadcrumb() {
	$inLevel  = 1;
	$stBCHead = '<div><ol class="breadcrumb" itemscope itemtype="https://schema.org/BreadcrumbList">';
	// ホーム > と表示
	$stBCHead .= '<li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem"><a href="/" itemprop="item"><span itemprop="name">ホーム</span></a><meta itemprop="position" content="' . $inLevel++ . '" /></li>';
	// ページでの階層表示
	$stBCFoot = '</ol></div>';
	$stListE  = '<li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem"><a href="" itemprop="item"><span itemprop="name">%s</span></a><meta itemprop="position" content="%s" /></li>';
	if ( is_single() ) {
		// 通常ページ
		$cat_id  = 0;
		$cats    = get_the_category();
		$cat_num = count( $cats );
		for ( $i = 0;$i < $cat_num;$i++ ) {
			if ( isset( $cats[ $i ]->term_id ) ) {
				$cat_id = $cats[ $i ]->term_id;
			} else {
				break;
			}
			list($stBCMain, $inNewLevel) = getBC( $cat_id, $inLevel );
			$stBCCur                     = sprintf( $stListE, get_the_title(), $inNewLevel );
			echo $stBCHead . $stBCMain . $stBCCur . $stBCFoot . "\n";
		}
	} else {
		$stBCMain = '';
		if ( is_archive() ) {
			// アーカイブページ
			$id = get_the_category();
			$id = $id[0];
			if ( 0 < $id->category_parent ) {
				// カテゴリで親がある場合
				$id                          = get_category( $id->category_parent );
				list($stBCMain, $inNewLevel) = getCateBC( $id, $inLevel );
			} else {
				$inNewLevel = $inLevel;
			};
			$stBCCur = sprintf( $stListE, get_the_archive_title(), $inNewLevel );
		} elseif ( is_search() ) {
			$stBCCur = sprintf( $stListE, '検索: ' . get_search_query(), 2 );
		} elseif ( is_404() ) {
			$stBCCur = sprintf( $stListE, 'ページが見つかりません', 2 );
		}
		echo $stBCHead . $stBCMain . $stBCCur . $stBCFoot . "\n";
	}
}
