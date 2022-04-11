<?php

/**
 * The template function
 *
 * @package original
 * @since 1.0.0
 */
date_default_timezone_set('Asia/Tokyo');

function load_assets()
{
  // キャッシュ対策のためデプロイ前に$versionの数値を変更する。
  $version = '1.0.0';
  /* (例)google fonts Noto+Sans+JP font-weightはデザインのweightを選択する */
  // wp_enqueue_style('Noto+Sans+JP', 'https://fonts.googleapis.com/css2?family=Noto+Serif+JP:wght@400;700&display=swap', array(), $version, false);
  /* common */
  wp_enqueue_style('my-style', get_template_directory_uri() . '/style.css', array(), $version, false);
  wp_enqueue_script('my-js', get_template_directory_uri() . '/js/common.js', array('jquery'), $version, true);
  // swiper
  // wp_enqueue_style( 'swiper-css', 'https://unpkg.com/swiper@7/swiper-bundle.min.css', array(), false, false );
	// wp_enqueue_script( 'swiper', 'https://unpkg.com/swiper@7/swiper-bundle.min.js', array(), false, false );
}
add_action('wp_enqueue_scripts', 'load_assets');
