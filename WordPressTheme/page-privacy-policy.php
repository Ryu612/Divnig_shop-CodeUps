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
		<h2 class="sub-mv__title">Privacy Policy</h2>
	</div>

			<?php get_template_part('template-parts/breadcrumb'); ?>

	<section class="page-privacy-policy layout-page-privacy-policy">
		<div class="page-privacy-policy__inner inner">
			<div class="page-privacy-policy__content">
				<h3 class="page-privacy-policy__title"><?php the_title(); ?></h3>
				<div class="page-privacy-policy__text">
				<?php the_content(); ?>
				</div>
			</div>
		</div>
	</section>
<?php get_footer(); ?>