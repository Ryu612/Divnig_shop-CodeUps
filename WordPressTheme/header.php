<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="format-detection" content="telephone=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php wp_head(); ?>
</head>

<?php
$home = esc_url(home_url('/'));
$campaign = esc_url(home_url('/campaign/'));
$about = esc_url(home_url('/about-us/'));
$information = esc_url(home_url('/information/'));
$blog = esc_url(home_url('/blog/'));
$voice = esc_url(home_url('/voice/'));
$price = esc_url(home_url('/price/'));
$faq = esc_url(home_url('/faq/'));
$contact = esc_url(home_url('/contact/'));
$policy = esc_url(home_url('/privacy-policy/'));
$tos = esc_url(home_url('/terms-of-service/'));
$sitemap = esc_url(home_url('/sitemap/'));
?>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>

    <?php if (is_front_page()) : ?>
        <!-- ローディングアニメーション2 -->
        <div id="loading" class="loading">
            <div id="loading__lead" class="loading__lead">
                <p class="loading__title">DIVING</p>
                <p class="loading__subtitle">into the ocean</p>
            </div>
            <div class="loading__image">
                <div class="half left-half" id="leftHalf"></div>
                <div class="half right-half" id="rightHalf"></div>
            </div>
        </div>
    <?php endif; ?>

    <!-- <div id="mainContent" class="maincontent"> -->
    <header id="js-header" class="header">
        <div class="header__inner">
            <h1 class="header__logo"><a href="<?php echo $home; ?>"><img src="<?php echo esc_url(get_theme_file_uri("/assets/images/sp/header-logo-sp.png")); ?>" alt="CodeUpsのロゴ"></a></h1>
            <button id="js-drawer-icon" class="header__drawer-icon drawer-icon">
                <span class="drawer-icon__bar"></span>
                <span class="drawer-icon__bar"></span>
                <span class="drawer-icon__bar"></span>
            </button>

            <nav class="header__nav pc-nav">
                <div class="pc-nav__link">
                    <a href="<?php echo $campaign; ?>">
                        <p class="pc-nav__link-en">Campaign</p>
                        <p class="pc-nav__link-ja">キャンペーン</p>
                    </a>
                </div>
                <div class="pc-nav__link">
                    <a href="<?php echo $about; ?>">
                        <p class="pc-nav__link-en">About us</p>
                        <p class="pc-nav__link-ja">私たちについて</p>
                    </a>
                </div>
                <div class="pc-nav__link">
                    <a href="<?php echo $information; ?>">
                        <p class="pc-nav__link-en">Information</p>
                        <p class="pc-nav__link-ja">ダイビング情報</p>
                    </a>
                </div>
                <div class="pc-nav__link">
                    <a href="<?php echo $blog; ?>">
                        <p class="pc-nav__link-en">Blog</p>
                        <p class="pc-nav__link-ja">ブログ</p>
                    </a>
                </div>
                <div class="pc-nav__link">
                    <a href="<?php echo $voice; ?>">
                        <p class="pc-nav__link-en">Voice</p>
                        <p class="pc-nav__link-ja">お客様の声</p>
                    </a>
                </div>
                <div class="pc-nav__link">
                    <a href="<?php echo $price; ?>">
                        <p class="pc-nav__link-en">Price</p>
                        <p class="pc-nav__link-ja">料金一覧</p>
                    </a>
                </div>
                <div class="pc-nav__link">
                    <a href="<?php echo $faq; ?>">
                        <p class="pc-nav__link-en">FAQ</p>
                        <p class="pc-nav__link-ja">よくある質問</p>
                    </a>
                </div>
                <div class="pc-nav__link">
                    <a href="<?php echo $contact; ?>">
                        <p class="pc-nav__link-en">Contact</p>
                        <p class="pc-nav__link-ja">お問い合わせ</p>
                    </a>
                </div>
            </nav>
        </div>
    </header>

    <!-- ドロワーメニュー -->
    <nav id="js-drawer-content" class="drawer-content">
        <div class="drawer-content__wrapper drawer-content__wrapper--left">
            <ul class="drawer-content__items">
                <li class="drawer-content__item"><a href="<?php echo $campaign; ?>">キャンペーン</a></li>
                <li class="drawer-content__item"><a href="<?php echo esc_url(home_url('/campaign_category/ファンダイビング')); ?>">ファンダイビング</a></li>
                <li class="drawer-content__item"><a href="<?php echo esc_url(home_url('/campaign_category/ライセンス講習')); ?>">ライセンス講習</a></li>
                <li class="drawer-content__item"><a href="<?php echo esc_url(home_url('/campaign_category/体験ダイビング')); ?>">体験ダイビング</a></li>
            </ul>
            <ul class="drawer-content__items">
                <li class="drawer-content__item"><a href="<?php echo $about; ?>">私たちについて</a></li>
            </ul>
            <ul class="drawer-content__items">
                <li class="drawer-content__item"><a href="<?php echo $information; ?>">ダイビング情報</a></li>
                <li class="drawer-content__item"><a href="<?php echo $information; ?>#tab1">ライセンス講習</a></li>
                <li class="drawer-content__item"><a href="<?php echo $information; ?>#tab2">ファンダイビング</a></li>
                <li class="drawer-content__item"><a href="<?php echo $information; ?>#tab3">体験ダイビング</a></li>
            </ul>
            <ul class="drawer-content__items">
                <li class="drawer-content__item"><a href="<?php echo $blog; ?>">ブログ</a></li>
            </ul>
        </div>
        <div class="drawer-content__wrapper drawer-content__wrapper--right">
            <ul class="drawer-content__items">
                <li class="drawer-content__item"><a href="<?php echo $voice; ?>">お客様の声</a></li>
            </ul>
            <ul class="drawer-content__items">
                <li class="drawer-content__item"><a href="<?php echo $price; ?>">料金一覧</a></li>
                <li class="drawer-content__item"><a href="<?php echo $price; ?>#price-license">ライセンス講習</a></li>
                <li class="drawer-content__item"><a href="<?php echo $price; ?>#price-experience">体験ダイビング</a></li>
                <li class="drawer-content__item"><a href="<?php echo $price; ?>#price-fun">ファンダイビング</a></li>
            </ul>
            <ul class="drawer-content__items">
                <li class="drawer-content__item"><a href="<?php echo $faq; ?>">よくある質問</a></li>
            </ul>
            <ul class="drawer-content__items">
                <li class="drawer-content__item"><a href="<?php echo $policy; ?>">プライバシー<br>ポリシー</a></li>
            </ul>
            <ul class="drawer-content__items">
                <li class="drawer-content__item"><a href="<?php echo $tos; ?>">利用規約</a></li>
            </ul>
            <ul class="drawer-content__items">
                <li class="drawer-content__item"><a href="<?php echo $contact; ?>">お問い合わせ</a></li>
            </ul>
        </div>
    </nav>