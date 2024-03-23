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
	// $('.tab-group__tab').on('click', function () {
	// 	var idx = $('.tab-group__tab').index(this);
	// 	$(this).addClass('is-active').siblings('.tab-group__tab').removeClass('is-active');
	// 	var tabContents = $(this).closest('.page-information__inner').find('.tab-contents__item');
	// 	tabContents.removeClass('is-show');
	// 	tabContents.eq(idx).addClass('is-show');
	// });


	$(function () {
		//タブの実装F
		$(".tab-group__tab").click(function () {
			var index = $(".tab-group__tab").index(this);
			$(".tab-group__tab").removeClass("is-active");
			$(".tab-item").removeClass("is-show");
			$(this).addClass("is-active");
			$(".tab-item").eq(index).addClass("is-show");
		});
	});

	/*
	ナビリンクから飛んだ時に特定のinformationのタブを開く
	--------------------------------*/
	$(function () {
		//タブへダイレクトリンクの実装
		//リンクからハッシュを取得
		var hash = location.hash;
		hash = (hash.match(/^#tab\d+$/) || [])[0];

		//リンクにハッシュが入っていればtabnameに格納
		if ($(hash).length) {
			var tabname = hash.slice(1);
		} else {
			var tabname = "tab1";
		}

		//コンテンツ非表示・タブを非アクティブ
		$(".tab-group__tab").removeClass("is-active");
		$(".tab-item").removeClass("is-show");

		//何番目のタブかを格納
		var tabno = $(".tab-group__tab#" + tabname).index();

		//コンテンツ表示
		$(".tab-item").eq(tabno).addClass("is-show");

		//タブのアクティブ化
		$(".tab-group__tab").eq(tabno).addClass("is-active");
	});

	/*
	Blog一覧のSideのアーカイブのアコーディオン
	--------------------------------*/
	// $(function () {
	// 	$('.side-archive__year').on('click', function () {
	// 		$(this).children('.side-archive__months').slideToggle();
	// 		$(this).toggleClass("is-active");
	// 	});
	// });
	// jQueryを使用して1つ目のside-archive__item内のside-archive__year要素にis-openクラスを追加する
	$('.side-archive__item:first-child .side-archive__months').addClass('is-open');

	$(function () {
		$('.side-archive__year').on('click', function () {
			$(this).next().slideToggle();
			$(this).toggleClass("is-open");
		});
	});

	/*
	FAQのアコーディオン
	--------------------------------*/
	$('.faq__q').click(function () {
		$(this).next().slideToggle();
		$(this).children('.faq__icon').toggleClass('is-open');
	});

	/*
	フォームの必須項目に入力がない場合にエラーを表示する
	--------------------------------*/
	// var requiredFields = document.querySelectorAll('.required');

	// // 各項目をループ
	// requiredFields.forEach(function(field) {
	//   // 項目の値が空かどうかを確認
	//   if (field.value === '') {
	//     // 値が空の場合、その項目に 'is-error' クラスを追加
	//     field.classList.add('is-error');
	//   }
	// });
	$(function ($) {
    $('.form__button').on("click", function () {
      // 初期化
      $('#form_id').find('.is-error').removeClass('is-error');

      // 必須項目の入力チェック
      var hasError = false;
      $('.wpcf7-validates-as-required').each(function () {
          // チェックボックスグループの場合
      if ($(this).hasClass('wpcf7-checkbox')) {
        // グループ内のいずれか1つでも選択されていればエラーとしない
        if ($(this).find('input[type="checkbox"]:checked').length > 0) {
          return true;
        }
      }
        // 項目が空だったらエラー表示をする
        if (!$(this).val()) {
          $(this).addClass('is-error');
          hasError = true;
        }
      });

      // エラーがある場合は、エラーメッセージを表示して、一番上のエラー項目にスクロールする
      if (hasError) {
        $('.page-contact__error-message').addClass('is-error');
        var errorPos = $('.wpcf7-validates-as-required.is-error:first').offset().top || 0;
        $('body').animate({
          scrollTop: errorPos
        }, 'slow');
        return false; // 送信をキャンセル
      }

      // エラーがない場合は、送信処理を行う
      return true;


			// let $form = $('#form_id')
			// $form.submit(function (e) {
			// 	$.ajax({
			// 		url: $form.attr('action'),
			// 		data: $form.serialize(),
			// 		type: "POST",
			// 		dataType: "xml",
			// 		statusCode: {
			// 			0: function () {
			// 				//送信に成功したときの処理
			// 				$form.slideUp()
			// 				$('#js-success').slideDown()
			// 			},
			// 			200: function () {
			// 				//送信に失敗したときの処理
			// 				$form.slideUp()
			// 				$('#js-error').slideDown()
			// 			}
			// 		}
			// 	});
			// 	return false;
			// });

			// if ($('.is-error').length == 0) {
			//   // 未入力がない時
			//   $('form').submit();
			//   var $form = $('#form_id');
			//   $form.slideUp();
			//   $('#js-success').slideDown();
			// } else {
			//   // 未入力がある時
			//   console.log('未入力があります');
			// }
			// return false; // submitの送信中止用
		});
	});
});