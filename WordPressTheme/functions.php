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
    wp_enqueue_style('GoogleFonts', 'https://fonts.googleapis.com/css2?family=Gotu&family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=Noto+Sans+JP:wght@100..900&display=swap', array(), null);
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

//All-in-One WP Migrationの除外フォルダ指定
add_filter(
	'ai1wm_exclude_themes_from_export',
	function ( $exclude_filters ) {
		$exclude_filters = array(
			'_gulp',
			'dist',
			'src',
			'.git',
			'.gitignore',
			'README.md',
			'.DS_Store',
		);
		return $exclude_filters;
	}
);

//SCF設定
/**
 * @param string $page_title ページのtitle属性値 (必須)
 * @param string $menu_title 管理画面のメニューに表示するタイトル (必須)
 * @param string $capability メニューを操作できる権限 (必須)
 * @param string $menu_slug オプションページのスラッグ (必須)
 * @param string|null $icon_url メニューに表示するアイコンの URL
 * @param int $position メニューの位置
 */
SCF::add_options_page('About-ギャラリー', 'About-ギャラリー', 'edit_posts', 'about_gallery', 'dashicons-format-gallery', 21);
SCF::add_options_page('料金一覧', '料金一覧', 'manage_options', 'price_list', 'dashicons-money-alt', 21);
SCF::add_options_page('よくある質問', 'よくある質問', 'manage_options', 'faq_list', 'dashicons-info', 22);

/**
 * About usギャラリーのカスタムフィールドを定義
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
        $setting = SCF::add_setting('id-about_gallery', 'About Usギャラリー（「縦・横・横・横・横・縦」の順番で繰り返し表示されます。）');
        $items = array(
            array(
                'type'        => 'image', //*タイプ
                'name'        => 'about_gallery-image', //*名前
                'label'       => 'ギャラリー画像', //ラベル
                'size'        => 'medium' // プレビューサイズ
            )
        );
        $setting->add_group('about_gallery_group', true, $items);
        $settings[] = $setting;
    }
    return $settings;
}
add_filter('smart-cf-register-fields', 'my_add_meta_box', 10, 4);


// カスタム投稿の1ページに表示する最大投稿数
function custom_posts_per_page($query)
{
    if (!is_admin() && $query->is_main_query()) {
        // カスタム投稿のスラッグを記述
        if (is_post_type_archive('campaign') || is_tax('campaign_category')) {
            // 表示件数を指定
            $query->set('posts_per_page', 4);
        }
    }
}
add_action('pre_get_posts', 'custom_posts_per_page');


function custom_posts_per_page2($query)
{
    if (!is_admin() && $query->is_main_query()) {
        // カスタム投稿のスラッグを記述
        if (is_post_type_archive('voice') || is_tax('voice_category')) {
            // 表示件数を指定
            $query->set('posts_per_page', 6);
        }
    }
}
add_action('pre_get_posts', 'custom_posts_per_page2');


//セレクトボックスを動的にするショートコード
function add_original_choices()
{
    ob_start();
    $args = array(
        'post_type' => 'campaign',
        'orderby' => 'name',
        'order' => 'ASC',
        'posts_per_page' => -1,
    );
    $the_query = new WP_Query($args);
    $i = 0;
    if ($the_query->have_posts()) : while ($the_query->have_posts()) : $the_query->the_post();
?>
            <option value="<?php echo the_title(); ?>"><?php the_title(); ?></option>
<?php
            $i++;
        endwhile;
    endif;
    return ob_get_clean();
}
wpcf7_add_form_tag('add_original_tag', 'add_original_choices');


// 管理画面の「投稿」を「ブログ」に変更
function Change_menulabel()
{
    global $menu;
    global $submenu;
    $name = 'ブログ';
    $menu[5][0] = $name;
    $submenu['edit.php'][5][0] = $name . '一覧';
    $submenu['edit.php'][10][0] = '新しい' . $name;
}
function Change_objectlabel()
{
    global $wp_post_types;
    $name = 'ブログ';
    $labels = &$wp_post_types['post']->labels;
    $labels->name = $name;
    $labels->singular_name = $name;
    $labels->add_new = _x('追加', $name);
    $labels->add_new_item = $name . 'の新規追加';
    $labels->edit_item = $name . 'の編集';
    $labels->new_item = '新規' . $name;
    $labels->view_item = $name . 'を表示';
    $labels->search_items = $name . 'を検索';
    $labels->not_found = $name . 'が見つかりませんでした';
    $labels->not_found_in_trash = 'ゴミ箱に' . $name . 'は見つかりませんでした';
}
add_action('init', 'Change_objectlabel');
add_action('admin_menu', 'Change_menulabel');


// 人気記事の取得
function my_custom_popular_posts($post_id)
{
    $count_key = 'cf_popular_posts';
    $count = get_post_meta($post_id, $count_key, true);
    if ($count == '') {
        $count = 0;
        delete_post_meta($post_id, $count_key);
        add_post_meta($post_id, $count_key, '0');
    } else {
        $count++;
        update_post_meta($post_id, $count_key, $count);
    }
}
function my_custom_track_posts($post_id)
{
    if (!is_single()) return;
    if (empty($post_id)) {
        global $post;
        $post_id = $post->ID;
    }
    my_custom_popular_posts($post_id);
}
add_action('wp_head', 'my_custom_track_posts');

// 管理画面のサイドメニュー非表示
function remove_menus()
{
    remove_menu_page('edit-comments.php'); // コメント
}
add_action('admin_menu', 'remove_menus', 999);


//特定の固定ページのエディタを非表示
add_filter('use_block_editor_for_post', function ($use_block_editor, $post) {
    if ($post->post_type === 'page') {
        if (in_array($post->post_name, ['sitemap', 'contact', 'thanks', 'information', 'blog', 'faq', 'about-us', 'price']) || (int)$post->ID === (int)get_option('page_on_front')) { //トップページの判定を追加
            remove_post_type_support('page', 'editor');
            return false;
        }
    }
    return $use_block_editor;
}, 10, 2);

// 固定ページのメタボックスを非表示
function remove_pageedit_metabox()
{
    remove_meta_box('postcustom', 'page', 'normal'); // カスタムフィールド
    remove_meta_box('commentstatusdiv', 'page', 'normal'); // ディスカッション
    remove_meta_box('commentsdiv', 'page', 'normal'); // コメント
    remove_meta_box('slugdiv', 'page', 'normal'); // スラッグ
    remove_meta_box('authordiv', 'page', 'normal'); // 投稿者
}
add_action('admin_menu', 'remove_pageedit_metabox');


//日本語のスラッグをpost_IDに自動生成
function auto_post_slug($slug, $post_ID, $post_status, $post_type)
{
    if (preg_match('/(%[0-9a-f]{2})+/', $slug)) {
        $slug = utf8_uri_encode($post_type) . '-' . $post_ID;
    }
    return $slug;
}
add_filter('wp_unique_post_slug', 'auto_post_slug', 10, 4);
