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
		<h2 class="sub-mv__title">Terms of Service</h2>
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

	<section class="page-tos layout-page-tos">
		<div class="page-tos__inner inner">
			<div class="page-tos__content">
				<h3 class="page-tos__title"><?php the_title(); ?></h3>
				<div class="page-tos__text">
				<?php the_content(); ?>
			</div>
			</div>
		</div>
	</section>

<?php get_footer(); ?>