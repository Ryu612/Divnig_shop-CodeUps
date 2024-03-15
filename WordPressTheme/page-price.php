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
					$licenceItems = SCF::get('licence');
					foreach ($licenceItems as $item) :
						$licence_name = esc_html($item['plan_name_for_licence']);
						$licence_name2 = esc_html($item['plan_name_2nd_for_licence']);
						$licence_price = esc_html($item['price_for_licence']);
					?>
						<tr>
							<td><?php echo $licence_name; ?><br class="u-mobile"><?php echo $licence_name2; ?></td>
							<td><?php echo $licence_price; ?></td>
						</tr>
					<?php endforeach; ?>
				</table>
			</div>
			<div class="price-tablels__item price-table">
				<h3 class="price-table__head"><span>体験ダイビング</span></h3>
				<table class="price-table__body">
					<?php
					$experienceItems = SCF::get('experience');
					foreach ($experienceItems as $item) :
						$experience_name = esc_html($item['plan_name_for_experience']);
						$experience_name2 = esc_html($item['plan_name_2nd_for_experience']);
						$experience_price = esc_html($item['price_for_experience']);
					?>
						<tr>
							<td><?php echo $experience_name; ?><br class="u-mobile"><?php echo $experience_name2; ?></td>
							<td><?php echo $experience_price; ?></td>
						</tr>
					<?php endforeach; ?>
				</table>
			</div>
			<div class="price-tablels__item price-table">
				<h3 class="price-table__head"><span>ファンダイビング</span></h3>
				<table class="price-table__body">
					<?php
					$funItems = SCF::get('fun');
					foreach ($funItems as $item) :
						$fun_name = esc_html($item['plan_name_for_fun']);
						$fun_name2 = esc_html($item['plan_name_2nd_for_fun']);
						$fun_price = esc_html($item['price_for_fun']);
					?>
						<tr>
							<td><?php echo $fun_name; ?><br class="u-mobile"><?php echo $fun_name2; ?></td>
							<td><?php echo $fun_price; ?></td>
						</tr>
					<?php endforeach; ?>
				</table>
			</div>
			<div class="price-tablels__item price-table">
				<h3 class="price-table__head"><span>スペシャルダイビング</span></h3>
				<table class="price-table__body">
					<?php
					$specialItems = SCF::get('special');
					foreach ($specialItems as $item) :
						$special_name = esc_html($item['plan_name_for_special']);
						$special_name2 = esc_html($item['plan_name_2nd_for_special']);
						$special_price = esc_html($item['price_for_special']);
					?>
						<tr>
							<td><?php echo $special_name; ?><br class="u-mobile"><?php echo $special_name2; ?></td>
							<td><?php echo $special_price; ?></td>
						</tr>
					<?php endforeach; ?>
				</table>
			</div>

		</div>
	</div>
</section>

<?php get_footer(); ?>