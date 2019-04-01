<?php

// load resource files
function mtg_files() {
  wp_enqueue_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js');
  wp_enqueue_script('index_js', get_theme_file_uri('/js/index.js'), NULL, '1.0', TRUE);
  wp_enqueue_style('mtg_styles', get_stylesheet_uri());
  wp_enqueue_style('font_awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.1/css/all.min.css');
}

add_action('wp_enqueue_scripts', 'mtg_files');

// theme features
function mtg_features() {
  add_theme_support('title-tag');
  register_nav_menu('mainMenu', 'Main Menu');
  register_nav_menu('footerMenu', 'Footer Menu');
}

add_action('after_setup_theme', 'mtg_features');

/**
 * Filter the except length to 20 words.
 *
 * @param int $length Excerpt length.
 * @return int (Maybe) modified excerpt length.
 */
function wpdocs_custom_excerpt_length( $length ) {
    return 20;
}
add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 999 );
