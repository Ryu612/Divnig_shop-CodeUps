<div class="breadcrumb layout-breadcrumb">
	<?php if (function_exists('bcn_display')) : ?>
		<div class="breadcrumb__inner inner">
			<div class="breadcrumb" vocab="http://schema.org/" typeof="BreadcrumbList">
				<?php bcn_display(); ?>
			</div>
		</div>
	<?php endif; ?>
</div>