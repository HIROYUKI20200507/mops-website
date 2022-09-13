<?php

// https://www.flapism.jp/wordpress/57/を参考
function codex_custom_init()
{
  $labels = [
    'name' => '記事投稿',
    'singular_name' => '記事投稿',
    'edit_item' => '記事追加',
    'parent_item_colon' => '',
    'menu_name' => '記事投稿',
  ];

  $args = [
    'labels' => $labels,
    'public' => true,
    'publicly_queryable' => true,
    'show_ui' => true,
    'show_in_menu' => true,
    'hierarchical' => true,
    'query_var' => true,
    'rewrite' => ['slug' => 'news'],
    'capability_type' => 'post',
    // 'has_archive' => true,
    'menu_position' => 5,
    'menu_icon' => 'dashicons-welcome-write-blog',
    'supports' => ['title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments'],
  ];

  register_post_type('news', $args);

  $labels = [
    'name' => '求人情報',
    'singular_name' => '求人情報',
    'edit_item' => '求人追加',
    'parent_item_colon' => '',
    'menu_name' => '求人情報',
  ];

  $args = [
    'labels' => $labels,
    'public' => true,
    'publicly_queryable' => true,
    'show_ui' => true,
    'show_in_menu' => true,
    'hierarchical' => true,
    'query_var' => true,
    'rewrite' => ['slug' => 'recruit'],
    'capability_type' => 'post',
    'menu_position' => 5,
    'menu_icon' => 'dashicons-groups',
    'supports' => ['title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments'],
  ];

  register_post_type('recruit', $args);

  $labels = [
    'name' => 'お知らせ',
    'singular_name' => 'お知らせ',
    'edit_item' => 'お知らせ追加',
    'parent_item_colon' => '',
    'menu_name' => 'お知らせ',
  ];

  $args = [
    'labels' => $labels,
    'public' => true,
    'publicly_queryable' => true,
    'show_ui' => true,
    'show_in_menu' => true,
    'hierarchical' => true,
    'query_var' => true,
    'rewrite' => ['slug' => 'info'],
    'capability_type' => 'post',
    'menu_position' => 5,
    'menu_icon' => 'dashicons-groups',
    'supports' => ['title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments'],
  ];

  register_post_type('info', $args);
}
add_action('init', 'codex_custom_init');

// /*【管理画面】投稿メニューを非表示 */
// function remove_menus()
// {
//   global $menu;
//   remove_menu_page('edit.php'); // 投稿を非表示
// }
// add_action('admin_menu', 'remove_menus');
//

?>
