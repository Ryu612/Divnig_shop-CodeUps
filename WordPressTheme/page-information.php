<?php get_header(); ?>

	<!-- メインビュー -->
	<div class="sub-mv sub-mv--information">
		<div class="sub-mv__image">
			<picture>
				<source srcset="<?php echo esc_url(get_theme_file_uri("/assets/images/pc/sub-information-mv-pc.webp")); ?>" media="(min-width: 768px)" type="image/webp">
				<source srcset="<?php echo esc_url(get_theme_file_uri("/assets/images/pc/sub-information-mv-pc.png")); ?>" media="(min-width: 768px)" type="image/png">
				<source srcset="<?php echo esc_url(get_theme_file_uri("/assets/images/sp/sub-information-mv-sp.webp")); ?>" type="image/webp">
				<img src="<?php echo esc_url(get_theme_file_uri("/assets/images/sp/sub-information-mv-sp.png")); ?>" alt='魚' width='375' height='460' loading='lazy'>
			</picture>
		</div>
		<h2 class="sub-mv__title">Information</h2>
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

<section class="page-information layout-page-information">
	<div class="page-information__inner inner fish-icon">
		<div class="page-information__tab-group tab-group">
			<div id="tab1" class="tab-group__tab is-active">
				<p>ライセンス<br class="u-mobile">講習</p>
			</div>
			<div id="tab2" class="tab-group__tab">
				<p>ファン<br class="u-mobile">ダイビング</p>
			</div>
			<div id="tab3" class="tab-group__tab">
				<p>体験<br class="u-mobile">ダイビング</p>
			</div>
		</div>
		<div class="page-information__tab-contents tab-contents">
			<div class="tab-contents__item tab-item is-show">
				<div class="tab-item__body">
					<h3 class="tab-item__title">ライセンス講習</h3>
					<p class="tab-item__text">
						泳げない人も、ちょっと水が苦手な人も、ダイビングを「安全に」楽しんでいただけるよう、スタッフがサポートいたします！スキューバダイビングを楽しむためには最低限の知識とスキルが要求されます。知識やスキルと言ってもそんなに難しい事ではなく、安全に楽しむ事を目的としたものです。プロダイバーの指導のもと知識とスキルを習得しCカードを取得して、ダイバーになろう！
					</p>
				</div>
				<img src="<?php echo esc_url(get_theme_file_uri("/assets/images/common/page-information__tab1.jpg")); ?>" alt="透き通った海に浮かぶ数人のダイバー" class="tab-item__image">
			</div>
			<div class="tab-contents__item tab-item">
				<div class="tab-item__body">
					<h3 class="tab-item__title">ファンダイビング</h3>
					<p class="tab-item__text">
						ブランクダイバー、ライセンスを取り立ての方も安心！沖縄本島を代表する「青の洞窟」（真栄田岬）やケラマ諸島などメジャーなポイントはモチロンのこと、最北端「辺戸岬」や最南端の「大渡海岸」等もご用意！
					</p>
				</div>
				<img src="<?php echo esc_url(get_theme_file_uri("/assets/images/common/page-information__tab2.jpg")); ?>" alt="海の中を泳ぐ魚" class="tab-item__image">
			</div>
		</div>
		<div class="tab-contents__item tab-item">
			<div class="tab-item__body">
				<h3 class="tab-item__title">体験ダイビング</h3>
				<p class="tab-item__text">
					ブランクダイバー、ライセンスを取り立ての方も安心！沖縄本島を代表する「青の洞窟」（真栄田岬）やケラマ諸島などメジャーなポイントはモチロンのこと、最北端「辺戸岬」や最南端の「大渡海岸」等もご用意！
				</p>
			</div>
			<img src="<?php echo esc_url(get_theme_file_uri("/assets/images/common/page-information__tab3.jpg")); ?>" alt="海の中を泳ぐ魚" class="tab-item__image">
		</div>
	</div>
</section>

<?php get_footer(); ?>