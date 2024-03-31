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
		<div class="page-price__table price-tablels">
			<div id="price-license" class="price-tablels__item price-table">
				<?php
				$priceItems = SCF::get_option_meta('price_list', 'licence');
				$hasItems = false;

				foreach ($priceItems as $item) :
					if (!empty($item['plan_name_for_licence']) && !empty($item['price_for_licence'])) {
						$hasItems = true;
						break;
					}
				endforeach;

				if ($hasItems) :
				?>
					<h3 class="price-table__head"><span>ライセンス講習</span></h3>
					<table class="price-table__body">
						<?php foreach ($priceItems as $item) :
							$plan_name = esc_html($item['plan_name_for_licence']);
							$plan_name2 = esc_html($item['plan_name_2nd_for_licence']);
							$price = esc_html($item['price_for_licence']);

							if (!empty($plan_name) || !empty($price)) :
						?>
								<tr>
									<td><?php echo $plan_name; ?><br class="u-mobile"><?php echo $plan_name2; ?></td>
									<td><?php echo $price; ?></td>
								</tr>
						<?php endif;
						endforeach; ?>
					</table>
				<?php endif; ?>
			</div><!-- /.price-tablels__item -->
			<div id="price-experience" class="price-tablels__item price-table">
				<?php
				$priceItems = SCF::get_option_meta('price_list', 'experience');
				$hasItems = false;

				foreach ($priceItems as $item) :
					if (!empty($item['plan_name_for_experience']) || !empty($item['price_for_experience'])) {
						$hasItems = true;
						break;
					}
				endforeach;

				if ($hasItems) :
				?>
					<h3 class="price-table__head"><span>体験ダイビング</span></h3>
					<table class="price-table__body">
						<?php foreach ($priceItems as $item) :
							$plan_name = esc_html($item['plan_name_for_experience']);
							$plan_name2 = esc_html($item['plan_name_2nd_for_experience']);
							$price = esc_html($item['price_for_experience']);

							if (!empty($plan_name) || !empty($price)) :
						?>
								<tr>
									<td><?php echo $plan_name; ?><br class="u-mobile"><?php echo $plan_name2; ?></td>
									<td><?php echo $price; ?></td>
								</tr>
						<?php endif;
						endforeach; ?>
					</table>
				<?php endif; ?>
			</div><!-- /.price-tablels__item -->
			<div id="price-fun" class="price-tablels__item price-table">
				<?php
				$priceItems = SCF::get_option_meta('price_list', 'fun');
				$hasItems = false;

				foreach ($priceItems as $item) :
					if (!empty($item['plan_name_for_fun']) || !empty($item['price_for_fun'])) {
						$hasItems = true;
						break;
					}
				endforeach;

				if ($hasItems) :
				?>
					<h3 class="price-table__head"><span>ファンダイビング</span></h3>
					<table class="price-table__body">
						<?php foreach ($priceItems as $item) :
							$plan_name = esc_html($item['plan_name_for_fun']);
							$plan_name2 = esc_html($item['plan_name_2nd_for_fun']);
							$price = esc_html($item['price_for_fun']);

							if (!empty($plan_name) || !empty($price)) :
						?>
								<tr>
									<td><?php echo $plan_name; ?><br class="u-mobile"><?php echo $plan_name2; ?></td>
									<td><?php echo $price; ?></td>
								</tr>
						<?php endif;
						endforeach; ?>
					</table>
				<?php else : ?>
					<p>投稿がありません</p>
				<?php endif; ?>
			</div><!-- /.price-tablels__item -->
			<div id="price-special" class="price-tablels__item price-table">
				<?php
				$priceItems = SCF::get_option_meta('price_list', 'special');
				$hasItems = false;

				foreach ($priceItems as $item) :
					if (!empty($item['plan_name_for_special']) || !empty($item['price_for_special'])) {
						$hasItems = true;
						break;
					}
				endforeach;

				if ($hasItems) :
				?>
					<h3 class="price-table__head"><span>スペシャルダイビング</span></h3>
					<table class="price-table__body">
						<?php foreach ($priceItems as $item) :
							$plan_name = esc_html($item['plan_name_for_special']);
							$plan_name2 = esc_html($item['plan_name_2nd_for_special']);
							$price = esc_html($item['price_for_special']);

							if (!empty($plan_name) || !empty($price)) :
						?>
								<tr>
									<td><?php echo $plan_name; ?><br class="u-mobile"><?php echo $plan_name2; ?></td>
									<td><?php echo $price; ?></td>
								</tr>
						<?php endif;
						endforeach; ?>
					</table>
				<?php endif; ?>
			</div><!-- /.price-tablels__item -->

		</div>
	</div>
</section>

<?php get_footer(); ?>