<?php

/**************************************************
CSSファイルの読み込み
 **************************************************/
function my_enqueue_styles()
{
  wp_enqueue_style('ress', '//unpkg.com/ress/dist/ress.min.css', array(), false, 'all');
  wp_enqueue_style('style', get_template_directory_uri() . '/style.css');
}
add_action('wp_enqueue_scripts', 'my_enqueue_styles');

/**************************************************
JSファイルの読み込み
 **************************************************/
function st_enqueue_scripts()
{
  wp_enqueue_script(
    'custom_script',
    get_template_directory_uri() . '/js/main.js',array('jquery') ,'',true
  );
  wp_enqueue_script(
    'particle_script',
    "http://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js",array('jquery') ,'',true
  );
  wp_enqueue_script(
    'splash_script',
    "https://rawgit.com/kimmobrunfeldt/progressbar.js/master/dist/progressbar.min.js",array('jquery') ,'',true
  );
}
add_action('wp_enqueue_scripts', 'st_enqueue_scripts');

// アイキャッチ有効化
add_theme_support('post-thumbnails');