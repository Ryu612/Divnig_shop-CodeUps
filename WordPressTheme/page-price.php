<?php get_header(); ?>
<!-- メインビュー -->
<div class="sub-mv sub-mv--price">
	<div class="sub-mv__image">
		<picture>
			<source srcset="<?php echo esc_url(get_theme_file_uri("/assets/images/pc/sub-price-mv-pc.webp")); ?>" media="(min-width: 768px)" type="image/webp">
			<source srcset="<?php echo esc_url(get_theme_file_uri("/assets/images/pc/sub-price-mv-pc.png")); ?>" media="(min-width: 768px)" type="image/png">
			<source srcset="<?php echo esc_url(get_theme_file_uri("/assets/images/sp/sub-price-mv-sp.webp")); ?>" type="image/webp">
			<img src="<?php echo esc_url(get_theme_file_uri("/assets/images/sp/sub-price-mv-sp.png")); ?>" alt='魚' width='375' height='460' loading='lazy'>
		</picture>
	</div>
	<h2 class="sub-mv__title">Price</h2>
</div>

<?php get_template_part('template-parts/breadcrumb'); ?>

<section class="page-price layout-page-price">
	<div class="page-price__inner inner fish-icon">
		<?php
		$priceItems_licence = SCF::get_option_meta('price_list', 'licence');
		$priceItems_experience = SCF::get_option_meta('price_list', 'experience');
		$priceItems_fun = SCF::get_option_meta('price_list', 'fun');
		$priceItems_special = SCF::get_option_meta('price_list', 'special');

		// 何らかのコース名が入力されていれば.price-tablelsを表示
		if (!empty($priceItems_licence[0]['course_name_1']) || !empty($priceItems_experience[0]['course_name_2']) || !empty($priceItems_fun[0]['course_name_3']) || !empty($priceItems_special[0]['course_name_4'])) :
		?>
			<div class="page-price__table price-tablels">
				<?php
				if (!empty($priceItems_licence) && !empty($priceItems_licence[0]['course_name_1'])) :
				?>
					<div id="price-license" class="price-tablels__item price-table">
						<h3 class="price-table__head"><span>ライセンス講習</span></h3>
						<table class="price-table__body">
							<?php foreach ($priceItems_licence as $item) :
								$course_name = esc_html($item['course_name_1']);
								$course_name2 = esc_html($item['course_name_2nd_1']);
								$price = esc_html($item['price_1']);
							?>
								<tr>
									<td><?php echo $course_name; ?><br class="u-mobile"><?php echo $course_name2; ?></td>
									<td><?php echo $price; ?></td>
								</tr>
							<?php endforeach; ?>
						</table>
					</div><!-- /.price-tablels__item -->
				<?php endif; ?>
				<?php
				if (!empty($priceItems_experience) && !empty($priceItems_experience[0]['course_name_2'])) :
				?>
					<div id="price-experience" class="price-tablels__item price-table">
						<h3 class="price-table__head"><span>体験ダイビング</span></h3>
						<table class="price-table__body">
							<?php foreach ($priceItems_experience as $item) :
								$course_name = esc_html($item['course_name_2']);
								$course_name2 = esc_html($item['course_name_2nd_2']);
								$price = esc_html($item['price_2']);
							?>
								<tr>
									<td><?php echo $course_name; ?><br class="u-mobile"><?php echo $course_name2; ?></td>
									<td><?php echo $price; ?></td>
								</tr>
							<?php endforeach; ?>
						</table>
					</div><!-- /.price-tablels__item -->
				<?php endif; ?>
				<?php
				if (!empty($priceItems_fun) && !empty($priceItems_fun[0]['course_name_3'])) :
				?>
					<div id="price-experience" class="price-tablels__item price-table">
						<h3 class="price-table__head"><span>ファンダイビング</span></h3>
						<table class="price-table__body">
							<?php foreach ($priceItems_fun as $item) :
								$course_name = esc_html($item['course_name_3']);
								$course_name2 = esc_html($item['course_name_2nd_3']);
								$price = esc_html($item['price_3']);
							?>
								<tr>
									<td><?php echo $course_name; ?><br class="u-mobile"><?php echo $course_name2; ?></td>
									<td><?php echo $price; ?></td>
								</tr>
							<?php endforeach; ?>
						</table>
					</div><!-- /.price-tablels__item -->
				<?php endif; ?>
				<?php
				if (!empty($priceItems_special) && !empty($priceItems_special[0]['course_name_4'])) :
				?>
					<div id="price-experience" class="price-tablels__item price-table">
						<h3 class="price-table__head"><span>スペシャルダイビング</span></h3>
						<table class="price-table__body">
							<?php foreach ($priceItems_special as $item) :
								$course_name = esc_html($item['course_name_4']);
								$course_name2 = esc_html($item['course_name_2nd_4']);
								$price = esc_html($item['price_4']);
							?>
								<tr>
									<td><?php echo $course_name; ?><br class="u-mobile"><?php echo $course_name2; ?></td>
									<td><?php echo $price; ?></td>
								</tr>
							<?php endforeach; ?>
						</table>
					</div><!-- /.price-tablels__item -->
				<?php endif; ?>
			</div>
		<?php else : ?>
			<p class="nopost">準備中</p>
		<?php endif; ?>
	</div>
</section>

<?php get_footer(); ?>