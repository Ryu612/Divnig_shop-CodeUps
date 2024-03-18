<?php get_header(); ?>
	<!-- メインビュー -->
	<div class="sub-mv sub-mv--contact">
		<div class="sub-mv__image">
			<picture>
				<source srcset="<?php echo esc_url(get_theme_file_uri("/assets/images/pc/sub-contact-mv-pc.webp")); ?>" media="(min-width: 768px)" type="image/webp">
				<source srcset="<?php echo esc_url(get_theme_file_uri("/assets/images/pc/sub-contact-mv-pc.png")); ?>" media="(min-width: 768px)" type="image/png">
				<source srcset="<?php echo esc_url(get_theme_file_uri("/assets/images/sp/sub-contact-mv-sp.webp")); ?>" type="image/webp">
				<img src="<?php echo esc_url(get_theme_file_uri("/assets/images/sp/sub-contact-mv-sp.png")); ?>" alt='魚' width='375' height='460' loading='lazy'>
			</picture>
		</div>
		<h2 class="sub-mv__title">Contact</h2>
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

	<section class="page-contact layout-page-contact">
		<div class="page-contact__inner inner fish-icon">
				<div id="js-success" class="form__success-message">
					<p>お問い合わせ内容を送信完了しました。</p>
					<p>このたびは、お問い合わせ頂き<br class="u-mobile">誠にありがとうございます。<br>
						お送り頂きました内容を確認の上、<br class="u-mobile">3営業日以内に折り返しご連絡させて頂きます。<br>
						また、ご記入頂いたメールアドレスへ、<br class="u-mobile">自動返信の確認メールをお送りしております。</p>
				</div>
			</div>
		</div>
	</section>
<?php get_footer(); ?>