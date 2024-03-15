<?php if( !is_page('contact')): ?>
<section id="contact" class="top-contact contact">
	<div class="contact__inner inner">
		<div class="contact__wrapper">
			<div class="contact__left-wrapper">
				<h3 class="contact__logo"><img src="<?php echo esc_url(get_theme_file_uri("/assets/images/common/contact-logo.png")); ?>" alt="CodeUpsのロゴ"></h3>
				<div class="contact__logo-line"></div>
				<div class="contact__info">
					<div class="contact__info-detail">
						<p class="contact__address">沖縄県那覇市1-1</p>
						<p class="contact__tel">TEL:<a href="tel:0120-000-0000">0120-000-0000</a></p>
						<p class="contact__hour">営業時間:8:30-19:00</p>
						<p class="contact__holiday">定休日:毎週火曜日</p>
					</div>
					<div class="contact__map">
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3579.1927241401213!2d127.6948673!3d26.22292675!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x34e5696278d6553b%3A0xcb44277c653ed00b!2z44CSOTAwLTAwMDYg5rKW57iE55yM6YKj6KaH5biC44GK44KC44KN44G-44Gh77yR5LiB55uu77yR!5e0!3m2!1sja!2sjp!4v1698046004296!5m2!1sja!2sjp" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
					</div>
				</div>
			</div>
			<div class="contact__right-wrapper">
				<div class="contact__title section-header section-header--contact">
					<p class="section-header__english">Contact</p>
					<h2 class="section-header__japanese">お問い合わせ</h2>
				</div>
				<p class="contact__text">ご予約・お問い合わせはコチラ</p>
				<div class="contact__button">
					<a href="" class="button">
						<p>Contact us</p>
					</a>
				</div>
			</div>
		</div>
	</div>
</section>
<?php endif; ?>

<footer id="footer" class="top-footer footer">
	<div class="footer__inner inner">
		<div class="footer__header">
			<div class="footer__logo"><a href="#"><img src="<?php echo esc_url(get_theme_file_uri("/assets/images/common/footer-logo.png")); ?>" alt="CodeUpsのロゴ"></a>
			</div>
			<div class="footer__sns">
				<a href="#" class="footer__facebook"><img src="<?php echo esc_url(get_theme_file_uri("/assets/images/common/icon-facebook.png")); ?>" alt="facebookのアイコン"></a>
				<a href="#" class="footer__instagram"><img src="<?php echo esc_url(get_theme_file_uri("/assets/images/common/icon-instagram.png")); ?>" alt="インスタグラムのアイコン"></a>
			</div>
		</div>
		<div class="footer__nav footer-nav">
			<div class="footer-nav__1">
				<ul class="footer-nav__items">
					<li class="footer-nav__item"><a href="archive-campaign.html">キャンペーン</a></li>
					<li class="footer-nav__item"><a href="#">ライセンス取得</a></li>
					<li class="footer-nav__item"><a href="#">貸切体験ダイビング</a></li>
					<li class="footer-nav__item"><a href="#">ナイトダイビング</a></li>
				</ul>
				<ul class="footer-nav__items">
					<li class="footer-nav__item"><a href="page-about.html">私たちについて</a></li>
				</ul>
			</div>
			<div class="footer-nav__2">
				<ul class="footer-nav__items">
					<li class="footer-nav__item"><a href="page-information.html">ダイビング情報</a></li>
					<li class="footer-nav__item"><a href="page-information.html#tab1">ライセンス講習</a></li>
					<li class="footer-nav__item"><a href="page-information.html#tab2">ファンダイビング</a></li>
					<li class="footer-nav__item"><a href="page-information.html#tab3">体験ダイビング</a></li>
				</ul>
				<ul class="footer-nav__items">
					<li class="footer-nav__item"><a href="home.html">ブログ</a></li>
				</ul>
			</div>
			<div class="footer-nav__3">
				<ul class="footer-nav__items">
					<li class="footer-nav__item"><a href="archive-voice.html">お客様の声</a></li>
				</ul>
				<ul class="footer-nav__items">
					<li class="footer-nav__item"><a href="page-price.html">料金一覧</a></li>
					<li class="footer-nav__item"><a href="#">ライセンス講習</a></li>
					<li class="footer-nav__item"><a href="#">体験ダイビング</a></li>
					<li class="footer-nav__item"><a href="#">ファンダイビング</a></li>
				</ul>
			</div>
			<div class="footer-nav__4">
				<ul class="footer-nav__items">
					<li class="footer-nav__item"><a href="page-faq.html">よくある質問</a></li>
				</ul>
				<ul class="footer-nav__items">
					<li class="footer-nav__item"><a href="page-privacy-policy.html">プライバシー<br class="u-mobile">ポリシー</a></li>
				</ul>
				<ul class="footer-nav__items">
					<li class="footer-nav__item"><a href="page-tos.html">利用規約</a></li>
				</ul>
				<ul class="footer-nav__items">
					<li class="footer-nav__item"><a href="page-contact.html">お問いわ合せ</a></li>
				</ul>
			</div>
		</div>
		<div class="footer__copyright">Copyright &copy; 2021 - <?php echo wp_date("Y");?> CodeUps LLC. All Rights Reserved.</div>
	</div>
</footer>

<div id="js-pagetop" class="pagetop"><a href="#"></a></div>
<?php wp_footer(); ?>
</body>

</html>