<?php

define('PATHS_SVG', TEMPLATEPATH . '/assets/images/svg');
$root_template = get_template_directory();

function dp8_theme_support()
{
  add_theme_support('post-thumbnails');
  add_theme_support('menus');
  add_theme_support('widgets');
  add_theme_support('title-tag');
}
add_action('after_setup_theme', 'dp8_theme_support');

function dp8_register_nav_menu()
{
  register_nav_menus(
    array(
      'desktop' => __('Desktop', 'text_domain'),
      'footer' => __('Footer', 'text_domain'),
      'mobile' => __('Mobile', 'text_domain'),
    )
  );
}
add_action('after_setup_theme', 'dp8_register_nav_menu', 0);

function style_on_logged()
{
  if (is_user_logged_in()):
    ?>
    <style>
      body>main {
        min-height: calc(100vh - (80px + 461px + 32));
      }
    </style>
    <?php
  endif;
}
add_action('wp_head', 'style_on_logged');

function dp8_reset_header()
{
  remove_action('wp_head', 'rsd_link');
  remove_action('wp_head', 'wlwmanifest_link');
  remove_action('wp_head', 'start_post_rel_link', 10, 0);
  remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);
  remove_action('wp_head', 'feed_links_extra', 3);
  remove_action('wp_head', 'wp_generator');
  remove_action('wp_head', 'print_emoji_detection_script', 7);
  remove_action('admin_print_scripts', 'print_emoji_detection_script');
  remove_action('wp_print_styles', 'print_emoji_styles');
  remove_action('admin_print_styles', 'print_emoji_styles');
}
add_action('after_setup_theme', 'dp8_reset_header');

function dp8_enqueue_styles()
{

  wp_enqueue_style('main', get_stylesheet_directory_uri() . '/public/css/main.css');
}
add_action('wp_enqueue_scripts', 'dp8_enqueue_styles', 10);

function arrow_top()
{
  ?>
  <div class="arrow-top">
    <span class="bullet">
      <?php get_svg('icon-arrow-chevron-top') ?>
    </span>
  </div>
  <?php
}
add_action('wp_footer', 'arrow_top');

function special_nav_class($classes, $item)
{
  if (in_array('current-menu-item', $classes)) {
    $classes[] = 'active ';
  }
  return $classes;
}


function add_slug_bodyclass($classes)
{
  global $post;
  if (isset($post)) {
    $classes[] = $post->post_type . '-' . $post->post_name;
  }
  return $classes;
}
add_filter('body_class', 'add_slug_bodyclass');

function sa_sanitize_spanish_chars($filename)
{
  $filename = preg_replace('/[ÍÌÏÎíìîï]/i', 'i', $filename);
  $filename = preg_replace('/[àáãâäÀÁÃÂÄ]/i', 'a', $filename);
  $filename = preg_replace('/[ÉÈÊËéèêë]/i', 'e', $filename);
  $filename = preg_replace('/[úùûüÚÙÛÜ]/i', 'u', $filename);
  $filename = preg_replace('/[ÓÒÖÔÕõôöóò]/i', 'o', $filename);
  $filename = preg_replace('/[ñÑ]/i', 'n', $filename);
  $filename = preg_replace('/[\x00-\x1F\x80-\xFF]/', '', $filename);
  $filename = preg_replace('/aa/i', 'a', $filename);
  $filename = preg_replace('/ea/i', 'e', $filename);
  $filename = preg_replace('/ua/i', 'u', $filename);
  $filename = preg_replace('/ia/i', 'i', $filename);
  $filename = preg_replace('/oa/i', 'o', $filename);
  return $filename;
}

add_filter('sanitize_file_name', 'sa_sanitize_spanish_chars', 10);

function get_svg($name)
{
  require(PATHS_SVG . '/' . $name . '.svg');
}

function cc_mime_types($mimes)
{
  $mimes['svg'] = 'image/svg+xml';
  return $mimes;
}
add_filter('upload_mimes', 'cc_mime_types');

add_filter('wpcf7_autop_or_not', '__return_false'); //Remover criação de tag <p>

function learnedia_add_title_attribute($atts, $item)
{

  $atts['title'] = !empty($item->attr_title) ? $item->attr_title : $item->title;

  return $atts;
}
add_filter('nav_menu_link_attributes', 'learnedia_add_title_attribute', 10, 2);

/* Better way to add multiple widgets areas */
function widget_registration($name, $id, $description, $beforeWidget, $afterWidget, $beforeTitle, $afterTitle)
{
  register_sidebar(
    array(
      'name' => $name,
      'id' => $id,
      'description' => $description,
      'before_widget' => $beforeWidget,
      'after_widget' => $afterWidget,
      'before_title' => $beforeTitle,
      'after_title' => $afterTitle,
    )
  );
}

function multiple_widget_init()
{
  widget_registration('Footer 1', 'footer-sidebar-1', '', '', '', '<div class="title-container"><h5>', '</h5></div>');
  // widget_registration('Footer 2', 'footer-sidebar-2', '', '', '', '<div class="title-container"><h5>', '</h5></div>');
  // widget_registration('Footer 3', 'footer-sidebar-3', '', '', '', '<div class="title-container"><h5>', '</h5></div>');
  widget_registration('Footer Copyright', 'footer-copyright', '', '', '', '', '');
  // ETC...
}

add_action('widgets_init', 'multiple_widget_init');

require_once(TEMPLATEPATH . '/inc/endpoints/usuario_post.php');
function get_svg_content($filename)
{
  $svg_directory = get_stylesheet_directory() . '/assets/images/svg/';
  $file_path = $svg_directory . $filename . '.svg';

  if (file_exists($file_path)) {
    $svg_content = file_get_contents($file_path);
    return $svg_content;
  } else {
    return false;
  }
}