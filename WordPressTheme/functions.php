<?php
function my_setup()
{
    add_theme_support('post-thumbnails'); // アイキャッチ画像を有効化
    add_theme_support('automatic-feed-links'); // 投稿とコメントのRSSフィードのリンクを有効化
    add_theme_support('title-tag'); // titleタグ自動生成
    add_theme_support('html5', array( // HTML5による出力
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
    ));
}
add_action('after_setup_theme', 'my_setup');


/* CSSとJavaScriptの読み込み */
function my_script_init()
{ // WordPressに含まれているjquery.jsを読み込まない
    wp_deregister_script('jquery');
    // Google Fonts
    wp_enqueue_style('GoogleFonts', 'https://fonts.googleapis.com/css2?family=Gotu&family=Lato:wght@400;700&family=Noto+Sans+JP:wght@400;500;700&family=Noto+Serif+JP:wght@400;700&display=swap');
    // Swiper JS
    wp_enqueue_script('swiper-js', 'https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js', array('jquery'), "1.0.1", true);
    // jQuery Inview
    wp_enqueue_script('jquery-inview', get_template_directory_uri() . '/assets/js/jquery.inview.min.js', array('jquery'), "1.0.1", true);
    // jQuery
    wp_enqueue_script('jquery', 'https://code.jquery.com/jquery-3.6.0.js', array(), "1.0.1", true);
    // Custom Script
    wp_enqueue_script('custom-script', get_template_directory_uri() . '/assets/js/script.js', array('jquery'),  filemtime(get_theme_file_path('/assets/js/script.js')), true);
    // Swiper CSS
    wp_enqueue_style('swiper-css', 'https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css', "", "8.0.0");
    // Custom Style
    wp_enqueue_style('style-css', get_template_directory_uri() . '/assets/css/style.css', array(), filemtime(get_theme_file_path('/assets/css/style.css')));
}
add_action('wp_enqueue_scripts', 'my_script_init');


//About us ギャラリー設定
/**
 * @param string $page_title ページのtitle属性値 (必須)
 * @param string $menu_title 管理画面のメニューに表示するタイトル (必須)
 * @param string $capability メニューを操作できる権限 (必須)
 * @param string $menu_slug オプションページのスラッグ (必須)
 * @param string|null $icon_url メニューに表示するアイコンの URL
 * @param int $position メニューの位置
 */
SCF::add_options_page('About-ギャラリー', 'About-ギャラリー', 'edit_posts', 'about_gallery', 'dashicons-format-gallery', 21);

/**
 * カスタムフィールドを定義
 *
 * @param array  $settings  MW_WP_Form_Setting オブジェクトの配列
 * @param string $type      投稿タイプ or ロール
 * @param int    $id        投稿ID or ユーザーID
 * @param string $meta_type post | user
 * @return array
 *
 */
function my_add_meta_box($settings, $type, $id, $meta_type)
{
    if ('about_gallery' == $type) {
        $setting = SCF::add_setting('id-about_gallery', 'About Usギャラリー');
        $items = array(
            array(
                'type'        => 'image', //*タイプ
                'name'        => 'about_gallery-image', //*名前
                'label'       => 'ギャラリー画像', //ラベル
                'size'        => 'large' // プレビューサイズ
            )
        );
        $setting->add_group('about_gallery_group', true, $items);
        $settings[] = $setting;
    }
    return $settings;
}
add_filter('smart-cf-register-fields', 'my_add_meta_box', 10, 4);