$(function ($) { // この中であればWordpressでも「$」が使用可能になる

	/*
	ドロワー
	--------------------------------*/
	$("#js-drawer-icon").on("click", function (e) {
		e.preventDefault();
		$(this).toggleClass("is-active");
		$("#js-drawer-content").toggleClass("is-active");
		$("#js-header").toggleClass("is-active");
		$("body").toggleClass("is-active");
		if ($("body").hasClass("is-active")) {
			$("body").css({
				"height": "100%",
				"overflow": "hidden"
			});
		} else {
			$("body").css({
				"height": "",
				"overflow": ""
			});
		}
	});

	$('#js-drawer-content a[href^="#"]').on('click', function () {
		$("#js-drawer-icon, #js-drawer-content, #js-header").removeClass("is-active");
	});


	/*
	メインビューSwiper
	--------------------------------*/
	const swiper = new Swiper('#js-mv-swiper', {
		// Optional parameters
		loop: true,
		effect: 'fade',
		allowTouchMove: false,
		autoplay: {
			delay: 2000,
			disableOnInteraction: false,
		},
		speed: 3000,
	});

	/*
	キャンペーンSwiper
	--------------------------------*/
	const swiper2 = new Swiper('#js-campaign-swiper', {
		// Optional parameters
		direction: 'horizontal',
		spaceBetween: 24,
		breakpoints: {
			768: {
				spaceBetween: 40,
			}
		},
		loop: true,
		slidesPerView: 'auto',
		freeMode: true,
		freeModeSticky: true,
		grabCursor: true,
		autoplay: {
			delay: 3000,
			disableOnInteraction: false,
		},
		speed: 1000,

		// Navigation arrows
		navigation: {
			nextEl: '.swiper-button-next-origin',
			prevEl: '.swiper-button-prev-origin',
		},
	});

	/*
	トップへ戻るボタンをmv過ぎたら表示
	--------------------------------*/
	$(window).on('scroll', function () {
		if ($('.mv, .sub-mv').height() - $('header').height() < $(this).scrollTop()) {
			$('#js-pagetop').addClass('is-show');
		} else {
			$('#js-pagetop').removeClass('is-show');
		}
	});

	/*
	トップへ戻るボタンをフッター手前で止める
	--------------------------------*/
	$(function () {
		var footer = $('.footer').innerHeight(); // footerの高さを取得
		window.onscroll = function () {
			var point = window.scrollY; // 現在のスクロール地点
			var docHeight = $(document).height(); // ドキュメントの高さ
			var dispHeight = $(window).height(); // 表示領域の高さ

			if (point > docHeight - dispHeight - footer) { // スクロール地点>ドキュメントの高さ-表示領域-footerの高さ
				$('#js-pagetop').addClass('is-stop');
			} else {
				$('#js-pagetop').removeClass('is-stop');
			}
		};
	});

	/*
	トップへ戻るボタンをフッターでは非表示
	--------------------------------*/
	// $(function () {
	// 	var footer = $('.footer').innerHeight(); // footerの高さを取得

	// 	window.onscroll = function () {
	// 		var point = window.scrollY; // 現在のスクロール地点
	// 		var docHeight = $(document).height(); // ドキュメントの高さ
	// 		var dispHeight = $(window).height(); // 表示領域の高さ

	// 		if (point > docHeight - dispHeight - footer) { // スクロール地点>ドキュメントの高さ-表示領域-footerの高さ
	// 			$('#js-pagetop').addClass('is-hidden'); //footerより下にスクロールしたらis-hiddenを追加
	// 		} else {
	// 			$('#js-pagetop').removeClass('is-hidden'); //footerより上にスクロールしたらis-hiddenを削除
	// 		}
	// 	};
	// });

	/*
	ヘッダーメニューのスクロール位置でのcurrent表示
	--------------------------------*/
	// $(function ($) {
	// 	/**
	// 	 * 現在スクロール位置によるグローバルナビのアクティブ表示
	// 	 */
	// 	let scrollMenu = function () {
	// 		// 配列宣言
	// 		// ここにスクロールで点灯させる箇所のidを記述する
	// 		// 数値は全て0でOK
	// 		let array = {
	// 			"#mv": 0,
	// 			"#campaign": 0,
	// 			"#about": 0,
	// 			"#information": 0,
	// 			"#blog": 0,
	// 			"#voice": 0,
	// 			"#price": 0,
	// 			"#contact": 0,
	// 		};

	// 		let $globalNavi = new Array();

	// 		// 各要素のスクロール値を保存
	// 		for (let key in array) {
	// 			if ($(key).offset()) {
	// 				array[key] = $(key).offset().top - 80; // 数値丁度だとずれるので10px余裕を作る
	// 				$globalNavi[key] = $('.pc-nav__link a[href="' + key + '"]');
	// 			}
	// 		}

	// 		// スクロールイベントで判定
	// 		$(window).on("scroll", function () {
	// 			for (let key in array) {
	// 				if ($(window).scrollTop() > array[key] - 50) {
	// 					$(".pc-nav__link a").each(function () {
	// 						$(this).removeClass("current");
	// 					});
	// 					$globalNavi[key].addClass("current");
	// 				}
	// 			}
	// 		});
	// 	};
	// 	// 実行
	// 	scrollMenu();
	// });


	/*
	画像アニメーション(ダイビング情報・お客様の声・料金一覧)
	--------------------------------*/
	//要素の取得とスピードの設定
	var box = $('.colorbox'),
		speed = 700;

	//.colorboxの付いた全ての要素に対して下記の処理を行う
	box.each(function () {
		$(this).append('<div class="color"></div>')
		var color = $(this).find($('.color')),
			image = $(this).find('img');
		var counter = 0;

		image.css('opacity', '0');
		color.css('width', '0%');
		//inviewを使って背景色が画面に現れたら処理をする
		color.on('inview', function () {
			if (counter == 0) {
				$(this).delay(200).animate({ 'width': '100%' }, speed, function () {
					image.css('opacity', '1');
					$(this).css({ 'left': '0', 'right': 'auto' });
					$(this).animate({ 'width': '0%' }, speed);
				})
				counter = 1;
			}
		});
	});




	/*
	ローディングアニメーション1
	--------------------------------*/
	// window.onload = function() {
	//   const spinner = document.getElementById('loading');
	//   spinner.classList.add('loaded');
	// }

	// $(window).on("load", function () {
	//   $("#loading")
	//     .delay(3000)
	//     .queue(function () {
	//       $(this).addClass("close").dequeue();
	//     });
	// });

	/*
	ローディングアニメーション2
	--------------------------------*/
	const leftHalf = document.getElementById('leftHalf');
	const rightHalf = document.getElementById('rightHalf');
	const mainContent = document.querySelector('.maincontent');
	const loading = document.querySelector('.loading');
	const lead = document.querySelector('.loading__lead');

	// アニメーションの開始
	setTimeout(() => {
		leftHalf.style.transform = 'translateY(0)';
	}, 800);
	setTimeout(() => {
		rightHalf.style.transform = 'translateY(0)';
	}, 900);
	setTimeout(() => {
		lead.style.color = 'white';
	}, 1600);
	setTimeout(() => {
		leftHalf.style.display = 'none';
		rightHalf.style.display = 'none';
		loading.style.display = 'none';
		// mainContent.style.display = 'block';
		// mainContent.style.opacity = '1';
	}, 3300);


/*================================
下層ページ
================================*/

/*
About usギャラリーのモーダル
--------------------------------*/
	$(".gallery__photos img").click(function () {
		// クリックした画像の HTML(<img>タグ全体)を#blackDisplay内にコピー
		$("#blackDisplay").html($(this).prop("outerHTML"));
		//fadeInで表示する。
		$("#blackDisplay").fadeIn(200);
		//背景はスクロールしないように固定
		$("body").addClass("is-active");
		return false;
	});

	// モーダル画像背景 または 拡大画像そのものをクリックで発火
	$("#blackDisplay").click(function () {
		// 非表示にする
		$("#blackDisplay").fadeOut(200);
		//背景のスクロール固定を解除
		$("body").removeClass("is-active");
		return false;
	});

/*
informationのタブ
--------------------------------*/
$('.tab-group__tab').on('click',function(){
	var idx = $('.tab-group__tab').index(this);
	$(this).addClass('is-active').siblings('.tab-group__tab').removeClass('is-active');
	var tabContents = $(this).closest('.page-information__inner').find('.tab-contents__item');
	tabContents.removeClass('is-show');
	tabContents.eq(idx).addClass('is-show');
});
});

/*
Blog一覧のSideアーカイブのアコーディオン
--------------------------------*/
// $(function () {
// 	$('.side-archive__year').on('click', function () {
// 		$(this).children('.side-archive__months').slideToggle();
// 		$(this).toggleClass("is-active");
// 	});
// });

$(function () {
	$('.side-archive__year').on('click', function () {
		$(this).next().slideToggle();
		$(this).toggleClass("is-open");
	});
});