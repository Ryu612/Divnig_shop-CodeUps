<?php get_header(); ?>

<?php
$home = esc_url(home_url('/'));
$campaign = esc_url(home_url('/campaign/'));
$about = esc_url(home_url('/about-us/'));
$information = esc_url(home_url('/information/'));
$blog = esc_url(home_url('/blog/'));
$voice = esc_url(home_url('/voice/'));
$price = esc_url(home_url('/price/'));
$faq = esc_url(home_url('/faq/'));
$contact = esc_url(home_url('/contact/'));
?>

<!-- メインビュー -->
<div id="mv" class="mv">
	<div class="mv__inner">
		<!-- Slider main container -->
		<div id="js-mv-swiper" class="swiper">
			<!-- Additional required wrapper -->
			<div class="swiper-wrapper">
				<!-- Slides -->
				<?php
				$slideItems = SCF::get('mv-images');
				foreach ($slideItems as $item) {
					$imgurlpc = wp_get_attachment_image_src($item['image_pc'], 'large');
					$imgurlsp = wp_get_attachment_image_src($item['image_sp'], 'large');
					$altText = esc_html($item['alt_text']);
				?>
					<div class="swiper-slide">
						<div class="mv__image">
							<picture>
								<source media="(min-width:768px)" srcset="<?php echo $imgurlpc[0]; ?>">
								<img src="<?php echo $imgurlsp[0]; ?>" alt="<?php echo $altText; ?>">
							</picture>
						</div>
					</div>
				<?php } ?>

			</div>
		</div>
		<div class="mv__lead">
			<p class="mv__title">DIVING</p>
			<p class="mv__subtitle">into the ocean</p>
		</div>
	</div>
</div>

<section id="campaign" class="top-campaign campaign">
	<div class="campaign__inner inner">
		<div class="campaign__title section-header">
			<p class="section-header__english">Campaign</p>
			<h2 class="section-header__japanese">キャンペーン</h2>
		</div>
		<div class="campaign__items">
			<!-- Slider main container -->
			<div id="js-campaign-swiper" class="swiper campaign__swiper">
				<!-- Additional required wrapper -->
				<div class="swiper-wrapper">
					<!-- Slides -->
					<!-- ループ開始 -->
					<div class="swiper-slide campaign__item">
						<div class="campaign-card">
							<div class="campaign-card__image"><img src="<?php echo esc_url(get_theme_file_uri("/assets/images/common/campaign1.jpg")); ?>" alt="海の中を泳ぐたくさんの魚">
							</div>
							<div class="campaign-card__contents">
								<div class="campaign-card__head">
									<div class="campaign-card__label">ライセンス講習</div>
									<h3 class="campaign-card__title">ライセンス取得</h3>
								</div>
								<div class="campaign-card__price-body">
									<p class="campaign-card__price-info">全部コミコミ(お一人様)</p>
									<div class="campaign-card__price">
										<div class="campaign-card__price-old">¥56,000</div>
										<div class="campaign-card__price-new">¥46,000</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="swiper-slide campaign__item">
						<div class="campaign-card">
							<div class="campaign-card__image"><img src="<?php echo esc_url(get_theme_file_uri("/assets/images/common/campaign2.jpg")); ?>" alt="海の中を泳ぐたくさんの魚">
							</div>
							<div class="campaign-card__contents">
								<div class="campaign-card__head">
									<div class="campaign-card__label">
										<p>体験ダイビング</p>
									</div>
									<h3 class="campaign-card__title">貸切体験ダイビング</h3>
								</div>
								<div class="campaign-card__price-body">
									<p class="campaign-card__price-info">全部コミコミ(お一人様)</p>
									<div class="campaign-card__price">
										<div class="campaign-card__price-old">¥24,000</div>
										<div class="campaign-card__price-new">¥18,000</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="swiper-slide campaign__item">
						<div class="campaign-card">
							<div class="campaign-card__image"><img src="<?php echo esc_url(get_theme_file_uri("/assets/images/common/campaign3.jpg")); ?>" alt="海の中を泳ぐたくさんの魚">
							</div>
							<div class="campaign-card__contents">
								<div class="campaign-card__head">
									<div class="campaign-card__label">体験ダイビング</div>
									<h3 class="campaign-card__title">ナイトダイビング</h3>
								</div>
								<div class="campaign-card__price-body">
									<p class="campaign-card__price-info">全部コミコミ(お一人様)</p>
									<div class="campaign-card__price">
										<div class="campaign-card__price-old">¥10,000</div>
										<div class="campaign-card__price-new">¥8,000</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="swiper-slide campaign__item">
						<div class="campaign-card">
							<div class="campaign-card__image"><img src="<?php echo esc_url(get_theme_file_uri("/assets/images/common/campaign4.jpg")); ?>" alt="海の中を泳ぐたくさんの魚">
							</div>
							<div class="campaign-card__contents">
								<div class="campaign-card__head">
									<div class="campaign-card__label">ファンダイビング</div>
									<h3 class="campaign-card__title">貸切ファンダイビング</h3>
								</div>
								<div class="campaign-card__price-body">
									<p class="campaign-card__price-info">全部コミコミ(お一人様)</p>
									<div class="campaign-card__price">
										<div class="campaign-card__price-old">¥20,000</div>
										<div class="campaign-card__price-new">¥16,000</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

			</div><!--.swiper-->
		</div>
		<!-- If we need navigation buttons -->
		<div class="swiper-button-prev-origin campaign__prev"></div>
		<div class="swiper-button-next-origin campaign__next"></div>
		<div class="campaign__button">
			<a href="<?php echo $campaign; ?>" class="button">
				<p>View more</p>
			</a>
		</div>
	</div>
</section>

<section id="about" class="top-about about">
	<div class="about__inner inner">
		<div class="about__title section-header">
			<p class="section-header__english">About us</p>
			<h2 class="section-header__japanese">私たちについて</h2>
		</div>
		<div class="about__image">
			<div class="about__left-image">
				<picture>
					<source media="(min-width:768px)" srcset="<?php echo esc_url(get_theme_file_uri("/assets/images/pc/ocean1-pc.jpg")); ?>">
					<img src="<?php echo esc_url(get_theme_file_uri("/assets/images/sp/ocean1-sp.jpg")); ?>" alt="屋根の上のシーサー">
				</picture>
			</div>
			<div class="about__right-image">
				<picture>
					<source media="(min-width:768px)" srcset="<?php echo esc_url(get_theme_file_uri("/assets/images/pc/ocean2-pc.jpg")); ?>">
					<img src="<?php echo esc_url(get_theme_file_uri("/assets/images/sp/ocean2-sp.jpg")); ?>" alt="海の中を泳ぐ海水魚">
				</picture>
			</div>
		</div>
		<div class="about__body">
			<h3 class="about__head">Dive into<br>the Ocean</h3>
			<div class="about__content">
				<p class="about__text">
					ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br>
					ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。
				</p>
				<div class="about__button">
					<a href="<?php echo $about; ?>" class="button">
						<p>View more</p>
					</a>
				</div>
			</div>
		</div>
	</div>
</section>

<section id="information" class="top-information information">
	<div class="information__inner inner">
		<div class="information__title section-header">
			<p class="section-header__english">Information</p>
			<h2 class="section-header__japanese">ダイビング情報</h2>
		</div>
		<div class="information__wrapper">
			<div class="information__image colorbox"><img src="<?php echo esc_url(get_theme_file_uri("/assets/images/common/ocean3.jpg")); ?>" alt="サンゴ礁の上を泳ぐ魚"></div>
			<div class="information__body">
				<p class="information__head">ライセンス講習</p>
				<p class="information__text">当店はダイビングライセンス（Cカード）世界最大の教育機関PADIの「正規店」として店舗登録されています。<br>
					正規登録店として、安心安全に初めての方でも安心安全にライセンス取得をサポート致します。
				</p>
				<div class="information__button">
					<a href="<?php echo $information; ?>" class="button">
						<p>View more</p>
					</a>
				</div>
			</div>
		</div>
	</div>
</section>

<section id="blog" class="top-blog blog1">
	<div class="blog__inner inner">
		<div class="blog__title section-header section-header--white">
			<p class="section-header__english">Blog</p>
			<h2 class="section-header__japanese">ブログ</h2>
		</div>
		<div class="blog__items blog-list">
			<!-- ループ開始 -->
			<a href="" class="blog-list__item blog-card">
				<div class="blog-card__image"><img src="<?php echo esc_url(get_theme_file_uri("/assets/images/common/blog-card1.jpg")); ?>" alt="サンゴ礁"></div>
				<time datetime="2023-11-27" class="blog-card__date">2023.11/17</time>
				<h3 class="blog-card__title">ライセンス取得</h3>
				<p class="blog-card__text">ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br>
					ここにテキストが入ります。ここにテキストが入ります。ここにテキスト
				</p>
			</a>
			<a href="" class="blog-list__item blog-card">
				<div class="blog-card__image"><img src="<?php echo esc_url(get_theme_file_uri("/assets/images/common/blog-card2.jpg")); ?>" alt="サンゴ礁"></div>
				<time datetime="2023-11-27" class="blog-card__date">2023.11/17</time>
				<h3 class="blog-card__title">ウミガメと泳ぐ</h3>
				<p class="blog-card__text">ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br>
					ここにテキストが入ります。ここにテキストが入ります。ここにテキスト
				</p>
			</a>
			<a href="" class="blog-list__item blog-card">
				<div class="blog-card__image"><img src="<?php echo esc_url(get_theme_file_uri("/assets/images/common/blog-card3.jpg")); ?>" alt="サンゴ礁"></div>
				<time datetime="2023-11-27" class="blog-card__date">2023.11/17</time>
				<h3 class="blog-card__title">カクレクマノミ</h3>
				<p class="blog-card__text">ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br>
					ここにテキストが入ります。ここにテキストが入ります。ここにテキスト
				</p>
			</a>
		</div>
		<div class="blog__button">
			<a href="" class="button">
				<p>View more</p>
			</a>
		</div>
	</div>
</section>

<section id="voice" class="top-voice voice">
	<div class="voice__inner inner">
		<div class="voice__title section-header">
			<p class="section-header__english">Voice</p>
			<h2 class="section-header__japanese">お客様の声</h2>
		</div>
		<div class="voice__items voice-list">
			<!-- ループ開始 -->
			<div class="voice-list__item voice-card">
				<div class="voice-card__head">
					<div class="voice-card__title-wrapper">
						<div class="voice-card__meta">
							<div class="voice-card__age">20代(女性)</div>
							<div class="voice-card__label">ライセンス講習</div>
						</div>
						<h3 class="voice-card__title">ここにタイトルが入ります。ここにタイトル</h3>
					</div>
					<div class="voice-card__image colorbox"><img src="<?php echo esc_url(get_theme_file_uri("/assets/images/common/voice-photo1.jpg")); ?>" alt="麦わら帽子を被った笑顔の女性">
					</div>
				</div>
				<p class="voice-card__text">
					ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br>
					ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br>
					ここにテキストが入ります。ここにテキストが入ります。
				</p>
			</div>
			<div class="voice-list__item voice-card">
				<div class="voice-card__head">
					<div class="voice-card__title-wrapper">
						<div class="voice-card__meta">
							<div class="voice-card__age">20代(男性)</div>
							<div class="voice-card__label">ファンダイビング</div>
						</div>
						<h3 class="voice-card__title">ここにタイトルが入ります。ここにタイトル</h3>
					</div>
					<div class="voice-card__image colorbox"><img src="<?php echo esc_url(get_theme_file_uri("/assets/images/common/voice-photo2.jpg")); ?>" alt="親指を立てる笑顔の男性">
					</div>
				</div>
				<p class="voice-card__text">
					ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br>
					ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br>
					ここにテキストが入ります。ここにテキストが入ります。
				</p>
			</div>
		</div>
		<div class="voice__button">
			<a href="" class="button">
				<p>View more</p>
			</a>
		</div>
	</div>
</section>

<section id="price" class="top-price price">
	<div class="price__inner inner">
		<div class="price__title section-header">
			<p class="section-header__english">Price</p>
			<h2 class="section-header__japanese">料金一覧</h2>
		</div>
		<div class="price__body">
			<picture class="price__image colorbox">
				<source media="(min-width:768px)" srcset="<?php echo esc_url(get_theme_file_uri("/assets/images/pc//price-pc.jpg")); ?>" width="492" height="746">
				<img src="<?php echo esc_url(get_theme_file_uri("/assets/images/sp/price-sp.jpg")); ?>" alt="海の中を泳ぐ亀" width="345" height="227">
			</picture>
			<ul class="price__lists">
				<li class="price__list">
					<h3 class="price__category">ライセンス講習</h3>
					<?php
					$priceItems = SCF::get_option_meta('price_list', 'licence');
					foreach ($priceItems as $item) {
						$plan_name = esc_html($item['plan_name_for_licence']);
						$plan_name2 = esc_html($item['plan_name_2nd_for_licence']);
						$price = esc_html($item['price_for_licence']);
					?>
						<dl class="price__contents">
							<dt class="price__name"><?php echo $plan_name . $plan_name2; ?></dt>
							<dd class="price__cost"><?php echo $price; ?></dd>
						</dl>
					<?php } ?>
				</li>
				<li class="price__list">
					<h3 class="price__category">体験ダイビング</h3>
					<?php
					$priceItems = SCF::get_option_meta('price_list', 'experience');
					foreach ($priceItems as $item) {
						$plan_name = esc_html($item['plan_name_for_experience']);
						$plan_name2 = esc_html($item['plan_name_2nd_for_experience']);
						$price = esc_html($item['price_for_experience']);
					?>
						<dl class="price__contents">
							<dt class="price__name"><?php echo $plan_name . $plan_name2; ?></dt>
							<dd class="price__cost"><?php echo $price; ?></dd>
						</dl>
					<?php } ?>
				</li>
				<li class="price__list">
					<h3 class="price__category">ファンダイビング</h3>
					<?php
					$priceItems = SCF::get_option_meta('price_list', 'fun');
					foreach ($priceItems as $item) {
						$plan_name = esc_html($item['plan_name_for_fun']);
						$plan_name2 = esc_html($item['plan_name_2nd_for_fun']);
						$price = esc_html($item['price_for_fun']);
					?>
						<dl class="price__contents">
							<dt class="price__name"><?php echo $plan_name . $plan_name2; ?></dt>
							<dd class="price__cost"><?php echo $price; ?></dd>
						</dl>
					<?php } ?>
				</li>
				<li class="price__list">
					<h3 class="price__category">スペシャルダイビング</h3>
					<?php
					$priceItems = SCF::get_option_meta('price_list', 'special');
					foreach ($priceItems as $item) {
						$plan_name = esc_html($item['plan_name_for_special']);
						$plan_name2 = esc_html($item['plan_name_2nd_for_special']);
						$price = esc_html($item['price_for_special']);
					?>
						<dl class="price__contents">
							<dt class="price__name"><?php echo $plan_name . $plan_name2; ?></dt>
							<dd class="price__cost"><?php echo $price; ?></dd>
						</dl>
					<?php } ?>
				</li>
			</ul>
		</div>
		<div class="price__button">
			<a href="<?php echo $price; ?>" class="button">
				<p>View more</p>
			</a>
		</div>
	</div>
</section>
<?php get_footer(); ?>