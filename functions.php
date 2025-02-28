<?php
function eternal_odyssey_setup() {
  add_theme_support('wp-block-styles');
  add_theme_support('align-wide');
  add_theme_support('editor-styles');
  add_editor_style('assets/css/editor-style.css');

  // Register Portfolio Custom Post Type
  register_post_type('portfolio', [
    'labels' => [
      'name' => 'Portfolio',
      'singular_name' => 'Portfolio Item',
    ],
    'public' => true,
    'has_archive' => true,
    'rewrite' => ['slug' => 'portfolio'],
    'supports' => ['title', 'editor', 'thumbnail', 'excerpt'],
    'show_in_rest' => true,
    'menu_icon' => 'dashicons-portfolio',
  ]);

  // Register Testimonial Custom Post Type
  register_post_type('testimonial', [
    'labels' => [
      'name' => 'Testimonials',
      'singular_name' => 'Testimonial',
    ],
    'public' => true,
    'has_archive' => true,
    'rewrite' => ['slug' => 'testimonial'],
    'supports' => ['title', 'editor', 'thumbnail', 'excerpt'],
    'show_in_rest' => true,
    'menu_icon' => 'dashicons-testimonial',
  ]);
}
add_action('after_setup_theme', 'eternal_odyssey_setup');

function eternal_odyssey_scripts() {
  wp_enqueue_style('eternal-odyssey-style', get_stylesheet_uri());
  wp_enqueue_script('eternal-odyssey-js', get_theme_file_uri('/assets/js/custom.js'), [], '1.0', true);
}
add_action('wp_enqueue_scripts', 'eternal_odyssey_scripts');
?>
