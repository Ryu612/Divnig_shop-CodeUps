<?php get_header(); ?>
<div class="notfound">
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

	<div class="notfound__inner inner">
		<div class="notfound__title">404</div>
		<p class="notfound__text">申し訳ありません。<br>お探しのページが見つかりません。</p>
		<div class="notfound__button">
			<a href="<?php echo esc_url(home_url('/')); ?>" class="button button--white">
				<p>Page TOP</p>
			</a>
		</div>
	</div>
</div>
<?php get_footer(); ?>