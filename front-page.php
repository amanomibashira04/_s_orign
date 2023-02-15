<?php
/**
 * Template Name:The front page template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package _s_orign_orign
 */

get_header();
?>
<div class="site-body">
	<div class="site-hero">
	</div>
	<div class="container">
		<main id="primary" class="site-main">
			<section class="alignfull">
				<!-- Slider main container -->
				<div class="swiper hero-swiper">
					<!-- Additional required wrapper -->
					<div class="swiper-wrapper">
						<!-- Slides -->
						<div class="swiper-slide">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/top_image_1.jpg" alt="">
						</div>
						<div class="swiper-slide">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/top_image_2.jpg" alt="">
						</div>
					</div>
					<!-- If we need pagination -->
					<div class="swiper-pagination"></div>
					<!-- If we need navigation buttons -->
					<div class="swiper-button-prev"></div>
					<div class="swiper-button-next"></div>
					<!-- If we need scrollbar -->
					<div class="swiper-scrollbar"></div>
				</div>
			</section>

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
			<article class="alignfull">
				<iframe
					src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3241.7462275341077!2d139.74322396557014!3d35.65862353881839!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60188bbd9009ec09%3A0x481a93f0d2a409dd!2z5p2x5Lqs44K_44Ov44O8!5e0!3m2!1sja!2sjp!4v1673589657461!5m2!1sja!2sjp"
					width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
					referrerpolicy="no-referrer-when-downgrade">
				</iframe>
			</article>
		</main><!-- #main -->
	</div>
</div>
<?php
get_footer();