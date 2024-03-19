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
			<a href="" class="label__item is-active">ALL</a>
			<a href="" class="label__item">ライセンス講習</a>
			<a href="" class="label__item">ファンダイビング</a>
			<a href="" class="label__item">体験ダイビング</a>
		</div>
		<?php
		$args = array(
			"post_type" => "campaign",
			"posts_per_page" => 4
		);
		$the_query = new WP_Query($args);
		?>
		<?php if ($the_query->have_posts()) : ?>
			<div class="archive-campaign__items">
				<?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
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
								<?php
								$taxonomy_terms = get_the_terms($post->ID, 'campaign_category');
								if (!empty($taxonomy_terms)) {
									foreach ($taxonomy_terms as $taxonomy_term) {
										echo '<div class="campaign-card__label">' . esc_html($taxonomy_term->name) . '</div>';
									}
								}
								?>
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
				<?php wp_reset_postdata(); ?>
			</div>
		<?php else : ?>
			<p>記事が投稿されていません</p>
		<?php endif; ?>

		<div class="archive-campaign__pagination pagination">
			<a href="#" class="pagination__prev"></a>
			<a href="#" class="pagination__page current">1</a>
			<a href="#" class="pagination__page">2</a>
			<a href="#" class="pagination__page">3</a>
			<a href="#" class="pagination__page">4</a>
			<a href="#" class="pagination__page u-desktop">5</a>
			<a href="#" class="pagination__page u-desktop">6</a>
			<a href="#" class="pagination__next"></a>
		</div>
	</div>
</section>
<?php get_footer(); ?>