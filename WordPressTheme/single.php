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
	<?php if (function_exists('bcn_display')) { ?>
		<div class="breadcrumb__inner inner">
			<div class="breadcrumb" vocab="http://schema.org/" typeof="BreadcrumbList">
				<?php bcn_display(); ?>
			</div>
		</div>
	<?php } ?>
</div>

<section class="columns layout-single">
	<div class="columns__inner inner fish-icon">
		<div class="columns__2columns columns-single-post">
			<main class="columns__single-post single-post">
				<time datetime="<?php echo get_the_date('Y-m-d'); ?>" class="single-post__date"><?php echo get_the_date('Y.m/d'); ?></time>
				<h3 class="single-post__title"><?php the_title(); ?></h3>
				<div class="single-post__content single-post-content">
					<div class="single-post-content__image">
						<?php if (has_post_thumbnail()) : ?>
							<?php the_post_thumbnail('full'); ?>
						<?php else : ?>
							<img src="<?php echo esc_url(get_theme_file_uri("/assets/images/common/noimage.png")); ?>" alt="NoImage画像" />
						<?php endif; ?>
					</div>
					<?php the_content(); ?>
				</div>

				<div class="single-post__pagination single-pagination">
					<?php
					// 前の記事へのリンク
					$prev_link = get_previous_post_link('%link', '');
					echo str_replace('<a href=', '<a class="single-pagination__prev" href=', $prev_link);

					// 次の記事へのリンク
					$next_link = get_next_post_link('%link', '');
					echo str_replace('<a href=', '<a class="single-pagination__next" href=', $next_link);
					?>
				</div>
			</main>
			<?php get_template_part('template-parts/sidebar'); ?>
		</div>
	</div>
</section>
<?php get_footer(); ?>