<?php
			$priceItems = SCF::get_option_meta('price_list', 'licence');
			if (!empty($priceItems) && !empty($priceItems[0]['plan_name_for_licence'])) :
			?>
				<div id="price-license" class="price-tablels__item price-table">
					<h3 class="price-table__head"><span>ライセンス講習</span></h3>
					<table class="price-table__body">
						<?php foreach ($priceItems as $item) :
							$plan_name = esc_html($item['plan_name_for_licence']);
							$plan_name2 = esc_html($item['plan_name_2nd_for_licence']);
							$price = esc_html($item['price_for_licence']);
						?>
							<tr>
								<td><?php echo $plan_name; ?><br class="u-mobile"><?php echo $plan_name2; ?></td>
								<td><?php echo $price; ?></td>
							</tr>
						<?php
						endforeach; ?>
					</table>
				</div><!-- /.price-tablels__item -->
				<?php endif; ?>
