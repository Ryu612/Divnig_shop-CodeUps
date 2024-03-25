<?php get_header(); ?>

<?php
$contact = esc_url(home_url('/contact/'));
?>

<!-- メインビュー -->
<div class="sub-mv sub-mv--campaign sub-mv-mask">
	<div class="sub-mv__image">
		<picture>
			<source srcset="<?php echo esc_url(get_theme_file_uri("/assets/images/pc/sub-campaign-mv-pc.webp")); ?>" media="(min-width: 768px)" type="image/webp">
			<source srcset="<?php echo esc_url(get_theme_file_uri("/assets/images/pc/sub-campaign-mv-pc.png")); ?>" media="(min-width: 768px)" type="image/png">
			<source srcset="<?php echo esc_url(get_theme_file_uri("/assets/images/sp/sub-campaign-mv-sp.webp")); ?>" type="image/webp">
			<img src="<?php echo esc_url(get_theme_file_uri("/assets/images/sp/sub-campaign-mv-sp.png")); ?>" alt='魚' width='375' height='460' loading='lazy'>
		</picture>
	</div>
	<h2 class="sub-mv__title">Campaign</h2>
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


<section class="archive-campaign layout-archive-campaign">
	<div class="archive-campaign__inner inner fish-icon">
		<div class="archive-campaign__label label">
			<?php
			$current_term_id = get_queried_object()->term_id;
			$terms = get_terms(array(
				// 表示するタクソノミースラッグを記述
				'taxonomy' => 'campaign_category',
				'orderby' => 'name',
				'order'   => 'ASC',
				// 表示するタームの数を指定
				'number'  => 5
			));

			// カスタム投稿一覧ページへのURL
			$home_class = (is_post_type_archive()) ? 'is-active' : '';
			$home_link = sprintf(
				//カスタム投稿一覧ページへのaタグに付与するクラスを指定できる
				'<a class="label__item %s" href="%s">ALL</a>',
				$home_class,
				// カスタム投稿一覧ページのスラッグを指定
				esc_url(home_url('/campaign')),
				esc_attr(__('View all posts', 'textdomain'))
			);
			echo sprintf(esc_html__('%s', 'textdomain'), $home_link);

			// タームのリンク
			if ($terms) {
				foreach ($terms as $term) {
					// カレントクラスに付与するクラスを指定できる
					$term_class = ($current_term_id === $term->term_id) ? 'is-active' : '';
					$term_link = sprintf(
						// 各タームに付与するクラスを指定できる
						'<a class="label__item %s" href="%s">%s</a>',
						$term_class,
						esc_url(get_term_link($term->term_id)),
						esc_attr(sprintf(__('%s', 'textdomain'), $term->name)),
						esc_html($term->name)
					);
					echo sprintf(esc_html__('%s', 'textdomain'), $term_link);
				}
			}
			?>
			<!-- <a href="" class="label__item is-active">ALL</a>
			<a href="" class="label__item">ライセンス講習</a>
			<a href="" class="label__item">ファンダイビング</a>
			<a href="" class="label__item">体験ダイビング</a> -->
		</div>

		<?php if (have_posts()) : ?>
			<div class="archive-campaign__items">
			<?php while (have_posts()) : the_post(); ?>
					<div class="archive-campaign__item campaign-card">
						<div class="campaign-card__image campaign-card__image--sub">
							<?php if (has_post_thumbnail()) : ?>
								<?php the_post_thumbnail('full', array()); ?>
							<?php else : ?>
								<img src="<?php echo esc_url(get_theme_file_uri("/assets/images/common/noimage.png")); ?>)" alt="NoImage画像" />
							<?php endif; ?>
						</div>
						<div class="campaign-card__contents campaign-card__contents--sub">
							<div class="campaign-card__head campaign-card__head--sub">
								<div class="campaign-card__category">
									<?php
									$taxonomy_terms = get_the_terms($post->ID, 'campaign_category');
									if (!empty($taxonomy_terms)) {
										foreach ($taxonomy_terms as $taxonomy_term) {
											echo '<div class="campaign-card__label">' . esc_html($taxonomy_term->name) . '</div>';
										}
									}
									?>
								</div>
								<h3 class="campaign-card__title campaign-card__title--sub"><?php the_title(); ?></h3>
							</div>
							<div class="campaign-card__price-body campaign-card__price-body--sub">
								<p class="campaign-card__price-info campaign-card__price-info--sub">全部コミコミ(お一人様)</p>
								<div class="campaign-card__price campaign-card__price--sub">
									<div class="campaign-card__price-old"><?php the_field("old-price"); ?></div>
									<div class="campaign-card__price-new"><?php the_field("new-price"); ?></div>
								</div>
							</div>
							<p class="campaign-card__text u-desktop"><?php the_content(); ?></p>
							<div class="campaign-card__info u-desktop">
								<div class="campaign-card__dates"><?php the_field("campaign-period"); ?></div>
								<div class="campaign-card__contact">ご予約・お問い合わせはコチラ</div>
								<div class="campaign-card__button">
									<a href="<?php echo $contact; ?>" class="button">
										<p>Contact Us</p>
									</a>
								</div>
							</div>
						</div>
					</div>
				<?php endwhile; ?>
			</div>
		<?php else : ?>
			<p class="no-posts">記事が投稿されていません。</p>
		<?php endif; ?>

		<div class="archive-campaign__pagination">
			<?php
			$args = array(
				'mid_size' => 1,
				'prev_text' => '<div class="pagination__prev"></div>',
				'next_text' => '<div class="pagination__next"></div>',
			);
			the_posts_pagination($args);
			?>
		</div>
	</div>
</section>
<?php get_footer(); ?>