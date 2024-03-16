<?php get_header(); ?>
	<!-- メインビュー -->
	<div class="sub-mv">
		<figure class="sub-mv__image">
			<picture>
				<source srcset="<?php echo esc_url(get_theme_file_uri("/assets/images/pc/sub-sitemap-mv-pc.webp")); ?>" media="(min-width: 768px)" type="image/webp">
				<source srcset="<?php echo esc_url(get_theme_file_uri("/assets/images/pc/sub-sitemap-mv-pc.jpg")); ?>" media="(min-width: 768px)" type="image/jpg">
				<source srcset="<?php echo esc_url(get_theme_file_uri("/assets/images/sp/sub-sitemap-mv-sp.webp")); ?>" type="image/webp">
				<img src="<?php echo esc_url(get_theme_file_uri("/assets/images/sp/sub-sitemap-mv-sp.jpg")); ?>" alt='海の中を泳ぐ2匹の黄色い魚' width='375' height='460' loading='lazy'>
			</picture>
		</figure>
		<h2 class="sub-mv__title">Site MAP</h2>
	</div>

<!-- パンくず -->
<div class="breadcrumb layout-breadcrumb">
	<?php if (function_exists('bcn_display')) { ?>
		<div class="breadcrumb__inner inner">
			<div class="breadcrumb" vocab="http://schema.org/" typeof="BreadcrumbList">
				<?php bcn_display(); ?>
			</div>
		</div>
	<?php } ?>
</div>

<section class="page-sitemap layout-page-sitemap">
	<div class="page-sitemap__inner inner">
		<div class="page-sitemap__nav footer-nav footer-nav--sitemap">
			<div class="footer-nav__1">
				<ul class="footer-nav__items">
					<li class="footer-nav__item footer-nav__item--sitemap"><a href="#campaign">キャンペーン</a></li>
					<li class="footer-nav__item footer-nav__item--sitemap"><a href="#">ライセンス取得</a></li>
					<li class="footer-nav__item footer-nav__item--sitemap"><a href="#">貸切体験ダイビング</a></li>
					<li class="footer-nav__item footer-nav__item--sitemap"><a href="#">ナイトダイビング</a></li>
				</ul>
				<ul class="footer-nav__items">
					<li class="footer-nav__item footer-nav__item--sitemap"><a href="#about">私たちについて</a></li>
				</ul>
			</div>
			<div class="footer-nav__2">
				<ul class="footer-nav__items">
					<li class="footer-nav__item footer-nav__item--sitemap"><a href="#information">ダイビング情報</a></li>
					<li class="footer-nav__item footer-nav__item--sitemap"><a href="#">ライセンス講習</a></li>
					<li class="footer-nav__item footer-nav__item--sitemap"><a href="#">体験ダイビング</a></li>
					<li class="footer-nav__item footer-nav__item--sitemap"><a href="#">ファンダイビング</a></li>
				</ul>
				<ul class="footer-nav__items">
					<li class="footer-nav__item footer-nav__item--sitemap"><a href="home.html">ブログ</a></li>
				</ul>
			</div>
			<div class="footer-nav__3 footer-nav__3--sitemap">
				<ul class="footer-nav__items">
					<li class="footer-nav__item footer-nav__item--sitemap"><a href="#voice">お客様の声</a></li>
				</ul>
				<ul class="footer-nav__items">
					<li class="footer-nav__item footer-nav__item--sitemap"><a href="#price">料金一覧</a></li>
					<li class="footer-nav__item footer-nav__item--sitemap"><a href="#">ライセンス講習</a></li>
					<li class="footer-nav__item footer-nav__item--sitemap"><a href="#">体験ダイビング</a></li>
					<li class="footer-nav__item footer-nav__item--sitemap"><a href="#">ファンダイビング</a></li>
				</ul>
			</div>
			<div class="footer-nav__4 footer-nav__4--sitemap">
				<ul class="footer-nav__items">
					<li class="footer-nav__item footer-nav__item--sitemap"><a href="#">よくある質問</a></li>
				</ul>
				<ul class="footer-nav__items">
					<li class="footer-nav__item footer-nav__item--sitemap"><a href="#">プライバシー<br class="u-mobile">ポリシー</a></li>
				</ul>
				<ul class="footer-nav__items">
					<li class="footer-nav__item footer-nav__item--sitemap"><a href="#">利用規約</a></li>
				</ul>
				<ul class="footer-nav__items">
					<li class="footer-nav__item footer-nav__item--sitemap"><a href="#contact">お問いわ合せ</a></li>
				</ul>
				<ul class="footer-nav__items">
					<li class="footer-nav__item footer-nav__item--sitemap"><a href="page-sitemap.html">サイトマップ</a></li>
				</ul>
			</div>
		</div>
	</div>
</section>

<?php get_footer(); ?>