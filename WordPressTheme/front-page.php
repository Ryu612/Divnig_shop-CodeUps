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
				foreach ($slideItems as $item) :
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
				<?php endforeach; ?>
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
		<?php
		$args = array(
			"post_type" => "campaign",
			"posts_per_page" => 4
		);
		$the_query = new WP_Query($args);
		?>
		<?php if ($the_query->have_posts()) : ?>
			<div class="campaign__items">
				<!-- Slider main container -->
				<div id="js-campaign-swiper" class="swiper campaign__swiper">
					<!-- Additional required wrapper -->
					<div class="swiper-wrapper">
						<?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
							<!-- Slides -->
							<!-- ループ開始 -->
							<div class="swiper-slide campaign__item">
								<div class="campaign-card">
									<div class="campaign-card__image">
										<?php if (has_post_thumbnail()) : ?>
											<?php the_post_thumbnail('full', array()); ?>
										<?php else : ?>
											<img src="<?php echo esc_url(get_theme_file_uri("/assets/images/common/noimage.png")); ?>)" alt="NoImage画像" />
										<?php endif; ?>
									</div>
									<div class="campaign-card__contents">
										<div class="campaign-card__head">
											<div class="campaign-card__category">
												<?php
												$taxonomy_terms = get_the_terms($post->ID, 'campaign_category');
												if (!empty($taxonomy_terms)) {
													// カテゴリーを説明でソートする
													usort($taxonomy_terms, function ($a, $b) {
														return strcmp($a->description, $b->description);
													});
													foreach ($taxonomy_terms as $taxonomy_term) {
														echo '<div class="campaign-card__label">' . esc_html($taxonomy_term->name) . '</div>';
													}
												}
												?>
											</div>
											<h3 class="campaign-card__title"><?php the_title(); ?></h3>
										</div>
										<div class="campaign-card__price-body">
											<p class="campaign-card__price-info">全部コミコミ(お一人様)</p>
											<div class="campaign-card__price">
												<div class="campaign-card__price-old"><?php the_field("old-price"); ?></div>
												<div class="campaign-card__price-new"><?php the_field("new-price"); ?></div>
											</div>
										</div>
									</div>
								</div>
							</div>
						<?php endwhile; ?>
						<?php wp_reset_postdata(); ?>

					</div>
				<?php else : ?>
					<p class="no-posts">キャンペーンが投稿されていません。</p>
				<?php endif; ?>
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
		<?php
		$args = array(
			"post_type" => "post",
			"posts_per_page" => 3
		);
		$the_query = new WP_Query($args);
		?>
		<?php if ($the_query->have_posts()) : ?>
			<div class="blog__items blog-list">
				<?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
					<!-- ループ開始 -->
					<a href="<?php the_permalink(); ?>" class="blog-list__item blog-card">
						<div class="blog-card__image">
							<?php if (has_post_thumbnail()) : ?>
								<?php the_post_thumbnail('full'); ?>
							<?php else : ?>
								<img src="<?php echo esc_url(get_theme_file_uri("/assets/images/common/noimage.png")); ?>" alt="NoImage画像" />
							<?php endif; ?>
						</div>
						<time datetime="<?php the_time('c'); ?>" class="blog-card__date"><?php the_time('Y.m/d'); ?></time>
						<h3 class="blog-card__title"><?php echo wp_trim_words(get_the_title(), 17, '...'); ?></h3>
						<p class="blog-card__text">
							<?php echo wp_trim_words(get_the_content(), 87, '...'); ?>
						</p>
					</a>
				<?php endwhile; ?>
				<?php wp_reset_postdata(); ?>
			</div>
		<?php else : ?>
			<p class="no-posts">記事が投稿されていません。</p>
		<?php endif; ?>
		<div class="blog__button">
			<a href="<?php echo $blog; ?>" class="button">
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
		<?php
		$args = array(
			"post_type" => "voice",
			"posts_per_page" => 2
		);
		$the_query = new WP_Query($args);
		?>
		<?php if ($the_query->have_posts()) : ?>
			<div class="voice__items voice-list">
				<?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
					<!-- ループ開始 -->
					<div class="voice-list__item voice-card">
						<div class="voice-card__head">
							<div class="voice-card__title-wrapper">
								<div class="voice-card__meta">
									<div class="voice-card__age"><?php the_field("voice-profile"); ?></div>
									<?php
									$taxonomy_terms = get_the_terms($post->ID, 'voice_category');
									if (!empty($taxonomy_terms)) {
										foreach ($taxonomy_terms as $taxonomy_term) {
											echo '<div class="voice-card__label">' . esc_html($taxonomy_term->name) . '</div>';
										}
									}
									?>
								</div>
								<h3 class="voice-card__title"><?php echo wp_trim_words(get_the_title(), 20, '...'); ?></h3>
							</div>
							<div class="voice-card__image colorbox">
								<?php if (has_post_thumbnail()) : ?>
									<?php the_post_thumbnail('full', array()); ?>
								<?php else : ?>
									<img src="<?php echo esc_url(get_theme_file_uri("/assets/images/common/noimage.png")); ?>)" alt="NoImage画像" />
								<?php endif; ?>
							</div>
						</div>
						<p class="voice-card__text">
							<?php echo wp_trim_words(get_the_content(), 202, '...'); ?>
						</p>
					</div>
				<?php endwhile; ?>
				<?php wp_reset_postdata(); ?>
			</div>
		<?php else : ?>
			<p class="no-posts">お客様の声が投稿されていません。</p>
		<?php endif; ?>
		<div class="voice__button">
			<a href="<?php echo $voice; ?>" class="button">
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
				<?php
				$priceItems = SCF::get_option_meta('price_list', 'licence');
				if (!empty($priceItems) && !empty($priceItems[0]['plan_name_for_licence'])) :
				?>
					<li class="price__list">
						<h3 class="price__category">ライセンス講習</h3>
						<?php foreach ($priceItems as $item) :
							$plan_name = esc_html($item['plan_name_for_licence']);
							$plan_name2 = esc_html($item['plan_name_2nd_for_licence']);
							$price_cost = esc_html($item['price_for_licence']);
						?>
							<dl class="price__contents">
								<dt class="price__name"><?php echo $plan_name . $plan_name2; ?></dt>
								<dd class="price__cost"><?php echo $price_cost; ?></dd>
							</dl>
						<?php endforeach; ?>
					</li>
				<?php endif; ?>
				<?php
				$priceItems = SCF::get_option_meta('price_list', 'experience');
				if (!empty($priceItems) && !empty($priceItems[0]['plan_name_for_experience'])) :
				?>
					<li class="price__list">
						<h3 class="price__category">体験ダイビング</h3>
						<?php foreach ($priceItems as $item) :
							$plan_name = esc_html($item['plan_name_for_experience']);
							$plan_name2 = esc_html($item['plan_name_2nd_for_experience']);
							$price_cost = esc_html($item['price_for_experience']);
						?>
							<dl class="price__contents">
								<dt class="price__name"><?php echo $plan_name . $plan_name2; ?></dt>
								<dd class="price__cost"><?php echo $price_cost; ?></dd>
							</dl>
						<?php endforeach; ?>
					</li>
				<?php endif; ?>
				<?php
				$priceItems = SCF::get_option_meta('price_list', 'fun');
				if (!empty($priceItems) && !empty($priceItems[0]['plan_name_for_fun'])) :
				?>
					<li class="price__list">
						<h3 class="price__category">ファンダイビング</h3>
						<?php foreach ($priceItems as $item) :
							$plan_name = esc_html($item['plan_name_for_fun']);
							$plan_name2 = esc_html($item['plan_name_2nd_for_fun']);
							$price_cost = esc_html($item['price_for_fun']);
						?>
							<dl class="price__contents">
								<dt class="price__name"><?php echo $plan_name . $plan_name2; ?></dt>
								<dd class="price__cost"><?php echo $price_cost; ?></dd>
							</dl>
						<?php endforeach; ?>
					</li>
				<?php endif; ?>
				<?php
				$priceItems = SCF::get_option_meta('price_list', 'special');
				if (!empty($priceItems) && !empty($priceItems[0]['plan_name_for_special'])) :
				?>
					<li class="price__list">
						<h3 class="price__category">スペシャルダイビング</h3>
						<?php foreach ($priceItems as $item) :
							$plan_name = esc_html($item['plan_name_for_special']);
							$plan_name2 = esc_html($item['plan_name_2nd_for_special']);
							$price_cost = esc_html($item['price_for_special']);
						?>
							<dl class="price__contents">
								<dt class="price__name"><?php echo $plan_name . $plan_name2; ?></dt>
								<dd class="price__cost"><?php echo $price_cost; ?></dd>
							</dl>
						<?php endforeach; ?>
					</li>
				<?php endif; ?>
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