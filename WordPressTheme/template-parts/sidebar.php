<aside class="columns__side side">
	<!-- =======================
							人気記事
							======================== -->
	<div class="side__popular side-popular">
		<h4 class="side-popular__head side-head">人気記事</h4>
		<?php
		$args = array(
			'meta_key' => 'cf_popular_posts',
			'orderby' => 'meta_value_num',
			'order' => 'DESC',
			'showposts' => 3,
		);
		$wp_query = new WP_Query($args);
		?>
		<?php if ($wp_query->have_posts()) : ?>
			<div class="side-popular__items">
				<?php while ($wp_query->have_posts()) : $wp_query > the_post(); ?>
					<!-- ループ開始 -->
					<a href="#" class="side-popular__item popular-card">
						<div class="popular-card__image">
							<?php if (has_post_thumbnail()) : ?>
								<?php the_post_thumbnail('full', array()); ?>
							<?php else : ?>
								<img src="<?php echo esc_url(get_theme_file_uri("/assets/images/common/noimage.png")); ?>)" alt="NoImage画像" />
							<?php endif; ?>
						</div>
						<div class="popular-card__meta">
							<time datetime="<?php echo get_the_date('Y-m-d'); ?>" class="popular-card__date"><?php echo get_the_date('Y.m/d'); ?></time>
							<h5 class="popular-card__title"><?php the_title(); ?></h5>
						</div>
					</a>
				<?php endwhile; ?>
				<?php wp_reset_postdata(); ?>
			</div>
		<?php else : ?>
			<p class="no-posts">記事が投稿されていません。</p>
		<?php endif; ?>
	</div>
	<!-- =======================
							口コミ
							======================== -->
	<div class="side__reviews side-reviews">
		<h4 class="side-reviews__head side-head">口コミ</h4>
		<?php
		$args = array(
			"post_type" => "voice",
			"posts_per_page" => 1
		);
		$the_query = new WP_Query($args);
		?>
		<?php if ($the_query->have_posts()) : ?>
			<?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
				<a href="#" class="side-reviews__item">
					<div class="side-reviews__image">
						<?php if (has_post_thumbnail()) : ?>
							<?php the_post_thumbnail('full', array()); ?>
						<?php else : ?>
							<img src="<?php echo esc_url(get_theme_file_uri("/assets/images/common/noimage.png")); ?>)" alt="NoImage画像" />
						<?php endif; ?>
					</div>
					<p class="side-reviews__age"><?php the_field("voice-profile"); ?></p>
					<h5 class="side-reviews__title"><?php the_title(); ?></h5>
				</a>
			<?php endwhile; ?>
			<?php wp_reset_postdata(); ?>
		<?php else : ?>
			<p class="no-posts">お客様の声が投稿されていません。</p>
		<?php endif; ?>
		<div class="side-reviews__button">
			<a href="<?php echo $voice; ?>" class="button">
				<p>View more</p>
			</a>
		</div>
	</div>
	<!-- =======================
							キャンペーン
							======================== -->
	<div class="side__campaign side-campaign">
		<h4 class="side-campaign__head side-head">キャンペーン</h4>
		<?php
		$args = array(
			"post_type" => "campaign",
			"posts_per_page" => 2
		);
		$the_query = new WP_Query($args);
		?>
		<?php if ($the_query->have_posts()) : ?>
			<div class="side-campaign__items">
				<?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
					<!-- ループ開始 -->
					<a href="#" class="side-campaign__item">
						<div class="campaign-card">
							<div class="campaign-card__image campaign-card__image--side">
								<?php if (has_post_thumbnail()) : ?>
									<?php the_post_thumbnail('full', array()); ?>
								<?php else : ?>
									<img src="<?php echo esc_url(get_theme_file_uri("/assets/images/common/noimage.png")); ?>)" alt="NoImage画像" />
								<?php endif; ?>
							</div>
							<div class="campaign-card__contents campaign-card__contents--side">
								<div class="campaign-card__head campaign-card__head--side">
									<h3 class="campaign-card__title campaign-card__title--side"><?php the_title(); ?></h3>
								</div>
								<div class="campaign-card__price-body">
									<p class="campaign-card__price-info campaign-card__price-info--sub">全部コミコミ(お一人様)</p>
									<div class="campaign-card__price campaign-card__price--sub campaign-card__price--side">
										<div class="campaign-card__price-old campaign-card__price-old--side"><?php the_field("old-price"); ?></div>
										<div class="campaign-card__price-new campaign-card__price-new--side"><?php the_field("new-price"); ?></div>
									</div>
								</div>
							</div>
						</div>
					</a>
					<!-- ループ終了 -->
				<?php endwhile; ?>
				<?php wp_reset_postdata(); ?>
			</div>
		<?php else : ?>
			<p class="no-posts">記事が投稿されていません。</p>
		<?php endif; ?>
		<div class="side-campaign__button">
			<a href="<?php echo $campaign; ?>" class="button">
				<p>View more</p>
			</a>
		</div>
	</div>
	<!-- =======================
							アーカイブ
							======================== -->
	<div class="side__archive side-archive">
		<h4 class="side-archive__head side-head">アーカイブ</h4>
		<ul class="side-archive__items">
			<li class="side-archive__item">
				<div class="side-archive__year is-open">2023</div>
				<ul class="side-archive__months is-open">
					<li class="side-archive__month"><a href="#">3月</a></li>
					<li class="side-archive__month"><a href="#">2月</a></li>
					<li class="side-archive__month"><a href="#">1月</a></li>
				</ul>
			</li>
			<li class="side-archive__item">
				<div class="side-archive__year">2022</div>
				<ul class="side-archive__months">
					<li class="side-archive__month"><a href="#">12月</a></li>
					<li class="side-archive__month"><a href="#">11月</a></li>
					<li class="side-archive__month"><a href="#">10月</a></li>
					<li class="side-archive__month"><a href="#">9月</a></li>
					<li class="side-archive__month"><a href="#">8月</a></li>
					<li class="side-archive__month"><a href="#">7月</a></li>
					<li class="side-archive__month"><a href="#">6月</a></li>
					<li class="side-archive__month"><a href="#">5月</a></li>
					<li class="side-archive__month"><a href="#">4月</a></li>
					<li class="side-archive__month"><a href="#">3月</a></li>
					<li class="side-archive__month"><a href="#">2月</a></li>
					<li class="side-archive__month"><a href="#">1月</a></li>
				</ul>
			</li>
		</ul>
	</div>

</aside>