<?php get_header(); ?>
<!-- メインビュー -->
<div class="sub-mv sub-mv--blog">
	<div class="sub-mv__image">
		<picture>
			<source srcset="<?php echo esc_url(get_theme_file_uri("/assets/images/pc/sub-blog-mv-pc.webp")); ?>" media="(min-width: 768px)" type="image/webp">
			<source srcset="<?php echo esc_url(get_theme_file_uri("/assets/images/pc/sub-blog-mv-pc.png")); ?>" media="(min-width: 768px)" type="image/png">
			<source srcset="<?php echo esc_url(get_theme_file_uri("/assets/images/sp/sub-blog-mv-sp.webp")); ?>" type="image/webp">
			<img src="<?php echo esc_url(get_theme_file_uri("/assets/images/sp/sub-blog-mv-sp.png")); ?>" alt='魚' width='375' height='460' loading='lazy'>
		</picture>
	</div>
	<h2 class="sub-mv__title">Blog</h2>
</div>

<!-- パンくず -->
<div class="breadcrumb layout-breadcrumb">
	<div class="breadcrumb__inner inner">
		<div>TOP > ブログ一覧</div>
	</div>
</div>

<section class="columns layout-archive-home">
	<div class="columns__inner inner fish-icon">
		<div class="columns__2columns">
			<main class="columns__post">
				<?php if (have_posts()) : ?>
					<div class="columns__blog-list blog-list blog-list--2columns">
						<?php while (have_posts()) : the_post(); ?>
							<!-- ループ開始 -->
							<a href="<?php the_permalink(); ?>" class="blog-list__item blog-card">
								<div class="blog-card__image">
									<?php if (has_post_thumbnail()) : ?>
										<?php the_post_thumbnail('full'); ?>
									<?php else : ?>
										<img src="<?php echo esc_url(get_theme_file_uri("/assets/images/common/noimage.png")); ?>" alt="NoImage画像" />
									<?php endif; ?>
								</div>
								<time datetime="<?php echo get_the_date('Y-m-d'); ?>" class="blog-card__date"><?php echo get_the_date('Y.m/d'); ?></time>
								<h3 class="blog-card__title"><?php the_title(); ?></h3>
								<p class="blog-card__text"><?php the_content(); ?></p>
							</a>
						<?php endwhile; ?>
					</div>
				<?php else : ?>
					<p class="no-posts">記事が投稿されていません。</p>
				<?php endif; ?>
				<div class="columns__pagination pagination">
					<?php
					$args = array(
						'mid_size' => 1,
						'prev_text' => '<div class="pagination__prev"></div>',
						'next_text' => '<div class="pagination__next"></div>',
					);
					the_posts_pagination($args);
					?>
					<!-- <a href="#" class="pagination__prev"></a>
						<a href="#" class="pagination__page current">1</a>
						<a href="#" class="pagination__page">2</a>
						<a href="#" class="pagination__page">3</a>
						<a href="#" class="pagination__page">4</a>
						<a href="#" class="pagination__page u-desktop">5</a>
						<a href="#" class="pagination__page u-desktop">6</a>
						<a href="#" class="pagination__next"></a> -->
				</div>
			</main>

			<aside class="columns__side side">
				<!-- =======================
							人気記事
							======================== -->
				<div class="side__popular side-popular">
					<h4 class="side-popular__head side-head">人気記事</h4>
					<div class="side-popular__items">
						<!-- ループ開始 -->
						<a href="#" class="side-popular__item popular-card">
							<div class="popular-card__image"><img src="./assets/images/common/blog-card4.jpg" alt="黄色い魚"></div>
							<div class="popular-card__meta">
								<time datetime="2023-11-27" class="popular-card__date">2023.11/17</time>
								<h5 class="popular-card__title">ライセンス取得</h5>
							</div>
						</a>
						<a href="#" class="side-popular__item popular-card">
							<div class="popular-card__image"><img src="./assets/images/common/blog-card2.jpg" alt="ウミガメ"></div>
							<div class="popular-card__meta">
								<time datetime="2023-11-27" class="popular-card__date">2023.11/17</time>
								<h5 class="popular-card__title">ウミガメと泳ぐ</h5>
							</div>
						</a>
						<a href="#" class="side-popular__item popular-card">
							<div class="popular-card__image"><img src="./assets/images/common/blog-card3.jpg" alt="カクレクマノミ"></div>
							<div class="popular-card__meta">
								<time datetime="2023-11-27" class="popular-card__date">2023.11/17</time>
								<h5 class="popular-card__title">カクレクマノミ</h5>
							</div>
						</a>
						<!-- ループ終了 -->
					</div>
				</div>
				<!-- =======================
							口コミ
							======================== -->
				<div class="side__reviews side-reviews">
					<h4 class="side-reviews__head side-head">口コミ</h4>
					<a href="#" class="side-reviews__item">
						<div class="side-reviews__image"><img src="./assets/images/common/side-reviews.jpg" alt="腕を組むカップル"></div>
						<p class="side-reviews__age">30代(カップル)</p>
						<h5 class="side-reviews__title">ここにタイトルが入ります。ここにタイトル</h5>
					</a>
					<div class="side-reviews__button">
						<a href="#" class="button">
							<p>View more</p>
						</a>
					</div>
				</div>
				<!-- =======================
							キャンペーン
							======================== -->
				<div class="side__campaign side-campaign">
					<h4 class="side-campaign__head side-head">キャンペーン</h4>
					<div class="side-campaign__items">
						<!-- ループ開始 -->
						<a href="#" class="side-campaign__item">
							<div class="campaign-card">
								<div class="campaign-card__image campaign-card__image--side"><img src="./assets/images/common/campaign1.jpg" alt="海の中を泳ぐたくさんの魚">
								</div>
								<div class="campaign-card__contents campaign-card__contents--side">
									<div class="campaign-card__head campaign-card__head--side">
										<h3 class="campaign-card__title campaign-card__title--side">ライセンス取得</h3>
									</div>
									<div class="campaign-card__price-body">
										<p class="campaign-card__price-info campaign-card__price-info--sub">全部コミコミ(お一人様)</p>
										<div class="campaign-card__price campaign-card__price--sub campaign-card__price--side">
											<div class="campaign-card__price-old campaign-card__price-old--side">¥56,000</div>
											<div class="campaign-card__price-new campaign-card__price-new--side">¥46,000</div>
										</div>
									</div>
								</div>
							</div>
						</a>
						<a href="#" class="side-campaign__item">
							<div class="campaign-card">
								<div class="campaign-card__image campaign-card__image--side"><img src="./assets/images/common/campaign2.jpg" alt="海の中を泳ぐたくさんの魚">
								</div>
								<div class="campaign-card__contents campaign-card__contents--side">
									<div class="campaign-card__head campaign-card__head--side">
										<h3 class="campaign-card__title campaign-card__title--side">貸切体験ダイビング</h3>
									</div>
									<div class="campaign-card__price-body">
										<p class="campaign-card__price-info campaign-card__price-info--sub">全部コミコミ(お一人様)</p>
										<div class="campaign-card__price campaign-card__price--sub campaign-card__price--side">
											<div class="campaign-card__price-old campaign-card__price-old--side">¥24,000</div>
											<div class="campaign-card__price-new campaign-card__price-new--side">¥18,000</div>
										</div>
									</div>
								</div>
							</div>
						</a>
						<!-- ループ終了 -->
					</div>
					<div class="side-campaign__button">
						<a href="" class="button">
							<p>View more</p>
						</a>
					</div>
				</div>
				<!-- =======================
							アーカイブ
							======================== -->
				<div class="side__archive side-archive">
					<h4 class="side-archive__head side-head">アーカイブ</h4>
					<ul class="side-archive__items">
						<li class="side-archive__item">
							<div class="side-archive__year is-open">2023</div>
							<ul class="side-archive__months is-open">
								<li class="side-archive__month"><a href="#">3月</a></li>
								<li class="side-archive__month"><a href="#">2月</a></li>
								<li class="side-archive__month"><a href="#">1月</a></li>
							</ul>
						</li>
						<li class="side-archive__item">
							<div class="side-archive__year">2022</div>
							<ul class="side-archive__months">
								<li class="side-archive__month"><a href="#">12月</a></li>
								<li class="side-archive__month"><a href="#">11月</a></li>
								<li class="side-archive__month"><a href="#">10月</a></li>
								<li class="side-archive__month"><a href="#">9月</a></li>
								<li class="side-archive__month"><a href="#">8月</a></li>
								<li class="side-archive__month"><a href="#">7月</a></li>
								<li class="side-archive__month"><a href="#">6月</a></li>
								<li class="side-archive__month"><a href="#">5月</a></li>
								<li class="side-archive__month"><a href="#">4月</a></li>
								<li class="side-archive__month"><a href="#">3月</a></li>
								<li class="side-archive__month"><a href="#">2月</a></li>
								<li class="side-archive__month"><a href="#">1月</a></li>
							</ul>
						</li>
					</ul>
				</div>

			</aside>
		</div>
	</div>
</section>

<?php get_footer(); ?>