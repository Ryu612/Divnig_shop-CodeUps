<?php get_header(); ?>
<!-- メインビュー -->
<div class="sub-mv sub-mv--faq">
	<div class="sub-mv__image">
		<picture>
			<source srcset="<?php echo esc_url(get_theme_file_uri("/assets/images/pc/sub-faq-mv-pc.webp")); ?>" media="(min-width: 768px)" type="image/webp">
			<source srcset="<?php echo esc_url(get_theme_file_uri("/assets/images/pc/sub-faq-mv-pc.png")); ?>" media="(min-width: 768px)" type="image/png">
			<source srcset="<?php echo esc_url(get_theme_file_uri("/assets/images/sp/sub-faq-mv-sp.webp")); ?>" type="image/webp">
			<img src="<?php echo esc_url(get_theme_file_uri("/assets/images/sp/sub-faq-mv-sp.png")); ?>" alt='魚' width='375' height='460' loading='lazy'>
		</picture>
	</div>
	<h2 class="sub-mv__title">FAQ</h2>
</div>

			<?php get_template_part('template-parts/breadcrumb'); ?>

<section class="page-faq layout-page-faq">
	<div class="page-faq__inner inner fish-icon">
		<div class="page-faq__items">

			<?php
			$faqItems = SCF::get_option_meta('faq_list', 'faq');
			foreach ($faqItems as $item) {
				$question = esc_html($item['question']);
				$answer = esc_html($item['answer']);
			?>
				<div class="page-faq__item faq">
					<div class="faq__q">
						<div><?php echo $question; ?></div>
						<div class="faq__icon is-open">
							<span></span>
							<span></span>
						</div>
					</div>
					<div class="faq__a">
						<p class="faq__text">
							<?php echo $answer; ?>
						</p>
					</div>
				</div><!-- /.page-faq__item faq -->
			<?php } ?>
		</div>
</section>

<?php get_footer(); ?>