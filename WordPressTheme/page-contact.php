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

			<?php get_template_part('template-parts/breadcrumb'); ?>

<section class="page-contact layout-page-contact">
	<div class="page-contact__inner inner fish-icon">
		<p class="page-contact__error-message">
			※必須項目が入力されていません。入力してください。
		</p>
		<div class="page-contact__content form">
			<?php echo do_shortcode('[contact-form-7 id="1226bbe" title="お問い合わせフォーム"]'); ?>

			<!-- <div id="js-success" class="form__success-message">
					<p>お問い合わせ内容を送信完了しました。</p>
					<p>このたびは、お問い合わせ頂き<br class="u-mobile">誠にありがとうございます。<br>
						お送り頂きました内容を確認の上、<br class="u-mobile">3営業日以内に折り返しご連絡させて頂きます。<br>
						また、ご記入頂いたメールアドレスへ、<br class="u-mobile">自動返信の確認メールをお送りしております。</p>
				</div> -->
		</div>
	</div>
</section>
<?php get_footer(); ?>