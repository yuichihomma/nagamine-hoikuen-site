<?php

// ========================================
// CSSとJSの読み込み（キャッシュ対策付き）
// ========================================
function nagamine_theme_enqueue_assets() {
    $css_file = get_stylesheet_directory() . '/style.css';
    $js_file  = get_stylesheet_directory() . '/assets/js/main.js';

    //css
    wp_enqueue_style(
        'nagamine-theme-style',
        get_stylesheet_uri(),
        array(),
        filemtime($css_file)
    );

    //JS
    if (file_exists($js_file)) {
        wp_enqueue_script(
            'nagamine-theme-main-js',
            get_stylesheet_directory_uri() . '/assets/js/main.js',
            array(),
            filemtime($js_file),
            true
        );
    }
}

add_action('wp_enqueue_scripts', 'nagamine_theme_enqueue_assets');


// ========================================
// カスタム投稿タイプ「お知らせ」の登録
// ========================================
function nagamine_register_news_post_type() {
    register_post_type('news',array(
        'labels' => array(
            'name' => 'お知らせ',
            'singular_name' => 'お知らせ',
        ),
        'public' => true,
        'has_archive' => true,
        'menu_position' => 5,
        'menu_icon' => 'dashicons-megaphone',
        'supports' => array('title','editor','thumbnail','excerpt'),
        'rewrite' =>array('slug' => 'news'),
        'show_in_rest' => true,
    ));
}

add_action('init', 'nagamine_register_news_post_type');


// ========================================
// カスタム投稿タイプ「在園者向けお便り」の登録
// ========================================
function create_letter_post_type() {
    register_post_type('letter',
        array(
            'labels' => array(
                'name' => 'お便り',
                'singular_name' => 'お便り'
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'letter'),
            'menu_position' => 5,
            'supports' => array('title', 'editor', 'thumbnail'),
            'show_in_rest' => true,
        )
    );
}
add_action('init', 'create_letter_post_type');

function add_letter_category_support() {
    register_taxonomy_for_object_type('category', 'letter');
}
add_action('init', 'add_letter_category_support');

// ========================================
// アイキャッチ画像を有効化
// ========================================
add_theme_support('post-thumbnails');


// ========================================
// 現在使用しているテンプレートを画面に表示（管理者のみ）
// デバッグ用
// ========================================
add_action('wp_footer', function () {
    if (current_user_can('administrator')) {
        global $template;
        echo '<div style="position:fixed;bottom:10px;left:10px;background:#fff;padding:10px;border:1px solid #000;z-index:9999;">';
        echo basename($template);
        echo '</div>';
    }
});

// ========================================
// 投稿一覧ページ（ブログ一覧）の表示件数の変更
// ========================================

function custom_posts_per_page($query) {
  if (!is_admin() && $query->is_main_query() && is_home()) {
    $query->set('posts_per_page', 12);
  }
}
add_action('pre_get_posts', 'custom_posts_per_page');

// コメント機能を完全無効化
function disable_comments() {
    // 投稿・ページのコメント無効
    add_filter('comments_open', '__return_false', 20, 2);
    add_filter('pings_open', '__return_false', 20, 2);

    // 既存コメント非表示
    add_filter('comments_array', '__return_empty_array', 10, 2);
}
add_action('init', 'disable_comments');

// 管理画面からコメントメニュー削除
function remove_comment_menu() {
    remove_menu_page('edit-comments.php');
}
add_action('admin_menu', 'remove_comment_menu');