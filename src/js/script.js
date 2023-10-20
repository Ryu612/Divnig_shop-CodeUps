
$(function ($) { // この中であればWordpressでも「$」が使用可能になる
	$("#js-drawer-icon").on("click", function (e) {
		e.preventDefault();
		$("#js-drawer-icon").toggleClass("is-active");
		$("#js-drawer-content").toggleClass("is-active");
		$("#js-header").toggleClass("is-active");
	})

	$('#js-drawer-content a[href^="#"]').on('click', function () {
		$("#js-drawer-icon, #js-drawer-content").removeClass("is-active");
	});

});
