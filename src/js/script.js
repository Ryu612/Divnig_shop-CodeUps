$(function ($) { // この中であればWordpressでも「$」が使用可能になる

	//ドロワー
	$("#js-drawer-icon").on("click", function (e) {
		;
		e.preventDefault();
		$("#js-drawer-icon").toggleClass("is-active");
		$("#js-drawer-content").toggleClass("is-active");
		$("#js-header").toggleClass("is-active");
	})

	$('#js-drawer-content a[href^="#"]').on('click', function () {
		$("#js-drawer-icon, #js-drawer-content").removeClass("is-active");
	});


	//メインビューSwiper
	const swiper = new Swiper('#js-mv-swiper', {
		// Optional parameters
		loop: true,
		effect: 'fade',
		autoplay: {
			delay: 2000,
			disableOnInteraction: false,
		},
		speed: 3000,
	});
});
