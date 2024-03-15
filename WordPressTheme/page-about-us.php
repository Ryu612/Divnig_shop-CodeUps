<?php get_header(); ?>
<!-- メインビュー -->
<div class="sub-mv sub-mv--about">
	<div class="sub-mv__image">
		<picture>
			<source srcset="<?php echo esc_url(get_theme_file_uri("/assets/images/pc/sub-aboutus-mv-pc.webp")); ?>" media="(min-width: 768px)" type="image/webp">
			<source srcset="<?php echo esc_url(get_theme_file_uri("/assets/images/pc/sub-aboutus-mv-pc.png")); ?>" media="(min-width: 768px)" type="image/png">
			<source srcset="<?php echo esc_url(get_theme_file_uri("/assets/images/sp/sub-aboutus-mv-sp.webp")); ?>" type="image/webp">
			<img src="<?php echo esc_url(get_theme_file_uri("/assets/images/sp/sub-aboutus-mv-sp.png")); ?>" alt='魚' width='375' height='460' loading='lazy'>
		</picture>
	</div>
	<h2 class="sub-mv__title">About us</h2>
</div>

<!-- パンくず -->
<div class="breadcrumb layout-breadcrumb">
	<div class="breadcrumb__inner inner">
		<div>TOP > 私たちについて</div>
	</div>
</div>

<section class="about layout-page-about">
	<div class="about__inner inner fish-icon fish-icon--about">
		<div class="about__image about__image--sub">
			<div class="about__left-image about__left-image--sub">
				<picture>
					<source media="(min-width:768px)" srcset="<?php echo esc_url(get_theme_file_uri("/assets/images/pc/ocean1-pc.jpg")); ?>">
					<img src="<?php echo esc_url(get_theme_file_uri("/assets/images/sp/ocean1-sp.jpg")); ?>" alt="屋根の上のシーサー">
				</picture>
			</div>
			<div class="about__right-image about__right-image--sub">
				<picture>
					<source media="(min-width:768px)" srcset="<?php echo esc_url(get_theme_file_uri("/assets/images/pc/ocean2-pc.jpg")); ?>">
					<img src="<?php echo esc_url(get_theme_file_uri("/assets/images/sp/ocean2-sp.jpg")); ?>" alt="海の中を泳ぐ海水魚">
				</picture>
			</div>
		</div>
		<div class="about__body about__body--sub">
			<h3 class="about__head about__head--sub">Dive into<br>the Ocean</h3>
			<div class="about__content about__content--sub">
				<p class="about__text">
					ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br>
					ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。
				</p>
			</div>
		</div>
	</div>
</section>

<section class="gallery layout-gallery">
	<div class="gallery__inner inner">
		<div class="gallery__title section-header">
			<p class="section-header__english section-header__english--gallery">Gallery</p>
			<h2 class="section-header__japanese section-header__japanese--gallery">フォト</h2>
		</div>
		<?php
		$about_gallery = SCF::get_option_meta('about_gallery');
		$about_gallery_group = $about_gallery['about_gallery_group'];
		if (!empty($about_gallery_group)) :
		?>
			<div class="gallery__photos">
				<?php foreach ($about_gallery_group as $item) :
					//画像
					$about_gallery_id = $item['about_gallery-image'];
					$about_gallery_src = wp_get_attachment_url($about_gallery_id);
					//alt
					$alt_text = get_post_meta($about_gallery_id, '_wp_attachment_image_alt', true);

				?>

					<img src="<?php echo $about_gallery_src; ?>" alt="<?php echo $alt_text; ?>">

				<?php endforeach; ?>
			</div>
		<?php endif; ?>
	</div>
	<div id="blackDisplay"></div>
</section>
<?php get_footer(); ?>