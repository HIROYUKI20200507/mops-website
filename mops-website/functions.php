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
    'menu_position' => null,
    'supports' => ['title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments'],
  ];

  register_post_type('news', $args);
}
add_action('init', 'codex_custom_init');

?>
