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

<!-- パンくず -->
<div class="breadcrumb layout-breadcrumb">
	<div class="breadcrumb__inner inner">
		<div>TOP > 料金一覧</div>
	</div>
</div>

<section class="page-price layout-page-price">
	<div class="page-price__inner inner fish-icon">
		<div class="page-price__table price-tablels">
			<div class="price-tablels__item price-table">
				<h3 class="price-table__head"><span>ライセンス講習</span></h3>
				<table class="price-table__body">
				<?php
					$priceItems = SCF::get_option_meta('price_list', 'licence');
					foreach ($priceItems as $item) {
						$plan_name = esc_html($item['plan_name_for_licence']);
						$plan_name2 = esc_html($item['plan_name_2nd_for_licence']);
						$price = esc_html($item['price_for_licence']);
					?>
						<tr>
							<td><?php echo $plan_name; ?><br class="u-mobile"><?php echo $plan_name2; ?></td>
							<td><?php echo $price; ?></td>
						</tr>
					<?php } ?>
				</table>
			</div>
			<div class="price-tablels__item price-table">
				<h3 class="price-table__head"><span>体験ダイビング</span></h3>
				<table class="price-table__body">
				<?php
					$priceItems = SCF::get_option_meta('price_list', 'experience');
					foreach ($priceItems as $item) {
						$plan_name = esc_html($item['plan_name_for_experience']);
						$plan_name2 = esc_html($item['plan_name_2nd_for_experience']);
						$price = esc_html($item['price_for_experience']);
					?>
						<tr>
							<td><?php echo $plan_name; ?><br class="u-mobile"><?php echo $plan_name2; ?></td>
							<td><?php echo $price; ?></td>
						</tr>
						<?php } ?>
				</table>
			</div>
			<div class="price-tablels__item price-table">
				<h3 class="price-table__head"><span>ファンダイビング</span></h3>
				<table class="price-table__body">
				<?php
					$priceItems = SCF::get_option_meta('price_list', 'fun');
					foreach ($priceItems as $item) {
						$plan_name = esc_html($item['plan_name_for_fun']);
						$plan_name2 = esc_html($item['plan_name_2nd_for_fun']);
						$price = esc_html($item['price_for_fun']);
					?>
						<tr>
							<td><?php echo $plan_name; ?><br class="u-mobile"><?php echo $plan_name2; ?></td>
							<td><?php echo $price; ?></td>
						</tr>
						<?php } ?>
				</table>
			</div>
			<div class="price-tablels__item price-table">
				<h3 class="price-table__head"><span>スペシャルダイビング</span></h3>
				<table class="price-table__body">
				<?php
					$priceItems = SCF::get_option_meta('price_list', 'special');
					foreach ($priceItems as $item) {
						$plan_name = esc_html($item['plan_name_for_special']);
						$plan_name2 = esc_html($item['plan_name_2nd_for_special']);
						$price = esc_html($item['price_for_special']);
					?>
						<tr>
							<td><?php echo $plan_name; ?><br class="u-mobile"><?php echo $plan_name2; ?></td>
							<td><?php echo $price; ?></td>
						</tr>
						<?php } ?>
				</table>
			</div>

		</div>
	</div>
</section>

<?php get_footer(); ?>