<!doctype html>
<html>

<head></head>

<body>

	<div id="page" class="site">

		<header id="masthead" class="site-header">
			<div class="container">

				<!-- ロゴ -->
				<h1 class="site-header-logo">ロゴ</h1>
				<!-- サイトタイトル -->
				<h1 class="site-title">サイトタイトル</h1>
				<!-- サイトキャッチフレーズ -->
				<p class="site-description">キャッチフレーズ</p>

				<!-- グローバルメニュー -->
				<nav id="site-navigation" class="main-navigation">
					<button></button>
					<ul class="menu nav-menu" id="">
						<li>
							<ul class="sub-menu">
								<li></li>
							</ul>
						</li>
					</ul>
				</nav><!-- #site-navigation /.main-navigation -->

			</div>
		</header><!-- #masthead /header -->



		<!-- フロントページ -->
		<div class="swiper"></div>
		<section>
			<p>キャチコピー・キャンペーン情報</p>
		</section>
		<section>
			<p>サービス・商品情報・会社情報・SERVICE・ABOUT</p>
		</section>
		<section>
			<p>事例・実績・WORKS</p>
		</section>
		<section>
			<p>お知らせ・新着情報・トピックス・TOPIC</p>
		</section>
		<section>
			<p>CAT・お問い合わせ・求人情報・RECRUIT</p>
		</section>
		<section>
			<p>マップ・ロゴ・住所・電話番号・アクセス・ACCESS</p>
		</section>



		<!-- 固定ページ -->
		<div class="page-header">
			<div class="container">
				<!-- ページタイトル -->
				<h1 class="page-header-title">ページタイトル</h1>
			</div>
		</div><!-- /.page-header -->
		<!-- パンくずリスト -->
		<div id="breadcrumb" class="breadcrumb">
			<div class="container">パンくずリスト</div>
		</div><!-- /.breadcrumb -->
		<div class="site-body">
			<div class="container">
				<!-- メインコンテンツ -->
				<main>
					<article>
						<header class="page-header">
						</header><!-- .page-header -->
						<div class="page-meta">
						</div><!-- .page-meta -->
						<?php _s_orign_post_thumbnail(); ?>
						<div class="page-content">
							<?php the_content(); ?>
						</div><!-- .page-content -->
						<footer class="page-footer">
						</footer><!-- .page-footer -->
					</article>
				</main>
				<!-- サイドバー -->
				<aside id="secondary" class="widget-area">
					<?php dynamic_sidebar(); ?>
				</aside><!-- #secondary /.widget-area -->
			</div>
		</div>



		<!-- 投稿ページ -->
		<div class="page-header">
			<div class="container">
				<!-- ページタイトル -->
				<h1 class="page-header-title">ページタイトル</h1>
			</div>
		</div><!-- /.page-header -->
		<!-- パンくずリスト -->
		<div id="breadcrumb" class="breadcrumb">
			<div class="container">パンくずリスト</div>
		</div><!-- /.breadcrumb -->
		<div class="site-body">
			<div class="container">
				<!-- メインコンテンツ -->
				<main>
					<?php
					if ( have_posts() ) :
						while ( have_posts() ) :
							the_post();
							get_template_part( 'template-parts/content' );
						endwhile; ?>
					ページネーション・コメント
					<?php else : ?>
					記事がない場合の記述
					<?php endif; ?>
				</main>
				<!-- サイドバー -->
				<aside id="secondary" class="widget-area">
					<?php dynamic_sidebar(); ?>
				</aside><!-- #secondary /.widget-area -->
			</div>
		</div>



		<!-- 検索ページ -->
		<div class="page-header">
			<div class="container">
				<!-- ページタイトル -->
				<h1 class="page-header-title">検索結果：検索ワード</h1>
			</div>
		</div><!-- /.page-header -->
		<!-- パンくずリスト -->
		<div id="breadcrumb" class="breadcrumb">
			<div class="container">パンくずリスト</div>
		</div><!-- /.breadcrumb -->
		<div class="site-body">
			<div class="container">
				<!-- main contents -->
				<main>
					<?php
					if ( have_posts() ) :
						while ( have_posts() ) :
							the_post();
							get_template_part( 'template-parts/content', 'search' );
						endwhile;
						the_posts_navigation();
					else :
						get_template_part( 'template-parts/content', 'none' );
					endif;
					?>
				</main>
				<aside id="secondary" class="widget-area">
					<?php dynamic_sidebar(); ?>
				</aside><!-- #secondary /.widget-area -->
			</div>
		</div>



		<!-- footer -->
		<footer class="site-footer">
		</footer><!-- /.site-footer -->

	</div><!-- #page /.site -->
</body>

</html>
