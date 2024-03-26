<?php get_header(); ?>
<!-- メインビュー -->
<div class="sub-mv sub-mv--voice">
	<div class="sub-mv__image">
		<picture>
			<source srcset="<?php echo esc_url(get_theme_file_uri("/assets/images/pc/sub-voice-mv-pc.webp")); ?>" media="(min-width: 768px)" type="image/webp">
			<source srcset="<?php echo esc_url(get_theme_file_uri("/assets/images/pc/sub-voice-mv-pc.png")); ?>" media="(min-width: 768px)" type="image/png">
			<source srcset="<?php echo esc_url(get_theme_file_uri("/assets/images/sp/sub-voice-mv-sp.webp")); ?>" type="image/webp">
			<img src="<?php echo esc_url(get_theme_file_uri("/assets/images/sp/sub-voice-mv-sp.png")); ?>" alt='魚' width='375' height='460' loading='lazy'>
		</picture>
	</div>
	<h2 class="sub-mv__title">Voice</h2>
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

<section class="archive-voice layout-archive-voice">
	<div class="archive-voice__inner inner fish-icon">
		<div class="archive-voice__label label">
			<?php
			$current_term_id = get_queried_object()->term_id;
			$terms = get_terms(array(
				// 表示するタクソノミースラッグを記述
				'taxonomy' => 'voice_category',
				'orderby' => 'description',
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
				esc_url(home_url('/voice')),
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
		</div>

		<?php if (have_posts()) : ?>
			<div class="archive-voice__items voice-list voice-list--sub">
				<?php while (have_posts()) : the_post(); ?>
					<!-- ループ開始 -->
					<div class="voice-list__item voice-card">
						<div class="voice-card__head">
							<div class="voice-card__title-wrapper">
								<div class="voice-card__meta">
									<div class="voice-card__age"><?php the_field("voice-profile"); ?></div>
									<?php
									$taxonomy_terms = get_the_terms($post->ID, 'voice_category');
									if (!empty($taxonomy_terms)) {
										// カテゴリーを説明でソートする
										usort($taxonomy_terms, function ($a, $b) {
											return strcmp($a->description, $b->description);
										});
										foreach ($taxonomy_terms as $taxonomy_term) {
											echo '<div class="voice-card__label">' . esc_html($taxonomy_term->name) . '</div>';
										}
									}
									?>
								</div>
								<h3 class="voice-card__title"><?php the_title(); ?></h3>
							</div>
							<div class="voice-card__image colorbox">
								<?php if (has_post_thumbnail()) : ?>
									<?php the_post_thumbnail('full', array()); ?>
								<?php else : ?>
									<img src="<?php echo esc_url(get_theme_file_uri("/assets/images/common/noimage.png")); ?>)" alt="NoImage画像" />
								<?php endif; ?>
							</div>
						</div>
						<p class="voice-card__text"><?php the_content(); ?></p>
					</div>
				<?php endwhile; ?>
				<?php wp_reset_postdata(); ?>
			<?php else : ?>
				<p class="no-posts">お客様の声が投稿されていません。</p>
			<?php endif; ?>
			</div>
	</div>
	<div class="archive-voice__pagination pagination">
		<?php
		$args = array(
			'mid_size' => 1,
			'prev_text' => '<div class="pagination__prev"></div>',
			'next_text' => '<div class="pagination__next"></div>',
		);
		the_posts_pagination($args);
		?>
	</div>
</section>
<?php get_footer(); ?>