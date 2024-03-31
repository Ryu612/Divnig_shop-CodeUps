<?php get_header(); ?>
<?php
$campaign = esc_url(home_url('/campaign/'));
$voice = esc_url(home_url('/voice/'));
?>
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

			<?php get_template_part('template-parts/breadcrumb'); ?>

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
								<time datetime="<?php the_time('c'); ?>" class="blog-card__date"><?php the_time('Y.m/d'); ?></time>
								<h3 class="blog-card__title"><?php the_title(); ?></h3>
								<p class="blog-card__text"><?php echo wp_trim_words(get_the_content(), 87, '...'); ?></p>
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
				</div>
			</main>
			<?php get_template_part('template-parts/sidebar'); ?>
		</div>
	</div>
</section>

<?php get_footer(); ?>