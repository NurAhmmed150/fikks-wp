<?php 
  function fikka_files(){
      wp_enqueue_style('mainStylesheet', get_stylesheet_uri());
      wp_enqueue_style('bootstrap', get_template_directory_uri(). '/asset/css/bootstrap.min.css', false, '1.0', 'all');
      wp_enqueue_style('font-awasome', get_template_directory_uri(). '/asset/fontawesome/css/all.min.css', false, '1.0', 'all');
      wp_enqueue_style('font-awasome', 'https://fonts.googleapis.com/css2?family=Source+Sans+Pro&display=swa');
      wp_enqueue_script('zjquery', get_template_directory_uri(). '/asset/js/jquery.min.js', array(), '3.4.1', true);
      wp_enqueue_script('my-script', get_template_directory_uri(). '/asset/js/my-script.js', array(), '1.0', true);
  }
  add_action('wp_enqueue_scripts', 'fikka_files');
  
  function fikka_theme_setupp(){
    add_theme_support('title-tag');
    add_theme_support('custom-logo', array(
        'height'      => 100,
        'width'       => 400,
        'flex-height' => true,
        'flex-width'  => true,
        'header-text' => array( 'site-title', 'site-description' ),
    ) );
    register_nav_menus(array(
        'main-menu' => __('main-menu')
    ));
    add_theme_support('post-thumbnails');
  }
  add_action('after_setup_theme', 'fikka_theme_setupp');

  function regwidget(){
       register_sidebar(array(
         'name' => 'post page sidebar',
         'id' => 'sidebar1',
         'before_title' => '<h2 class="mb-4 tm-post-title tm-color-primary">',
         'after_title' => '</h2>',
       ));
       register_sidebar(array(
        'name' => 'header-left-sidebar',
        'id' => 'leftsidebar',
        'before_title' => '<h2 class="mb-4 tm-post-title tm-color-primary">',
        'after_title' => '</h2>',
      ));
  }

   add_action('widgets_init', 'regwidget');
   function mytheme_custom_excerpt_length( $length ) {
    return 35;
}
add_filter( 'excerpt_length', 'mytheme_custom_excerpt_length', 999 );
   include get_template_directory() . '/inc/options.php';
?>