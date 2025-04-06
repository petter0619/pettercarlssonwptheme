<?php
  function theme_scripts_and_stylesheets() {
    // Load these scripts and stylesheets

    // Custom CSS
    wp_enqueue_style('global-css', get_theme_file_uri('/css/index.css'));
    wp_enqueue_style('fontawesome-css', get_theme_file_uri('/fontawesome-free-5.12.1-web/css/all.min.css'));

    // Custom Javascript
    wp_enqueue_script('global-javascript', get_theme_file_uri('/js/index.js'), NULL, '1.0', true);
  }
  add_action('wp_enqueue_scripts', 'theme_scripts_and_stylesheets');

  function theme_post_types() {
    register_post_type('service', array(
      'public' => true,
      'show_in_rest' => true,
      'labels' => array(
        'name' => 'Services',
        'add_new_item' => 'Add New Service',
        'edit_item' => 'Edit Service',
        'all_items' => 'All Services',
        'singular_name' => 'Service'
      ),
      'menu_icon' => 'dashicons-hammer',
      'has_archive' => false,
      'rewrite' => array(
       'slug' => 'services',
      ),
      'supports' => array('title', 'editor', 'excerpt'),
    ));

    register_post_type('experience', array(
      'public' => true,
      'show_in_rest' => true,
      'labels' => array(
        'name' => 'Experience',
        'add_new_item' => 'Add New Experience',
        'edit_item' => 'Edit Experience',
        'all_items' => 'All Experience',
        'singular_name' => 'Experience'
      ),
      'menu_icon' => 'dashicons-media-document',
      'has_archive' => false,
      'rewrite' => array(
       'slug' => 'experiences',
      ),
      'supports' => array('title', 'editor', 'excerpt'),
    ));

    register_post_type('project', array(
      'public' => true,
      'show_in_rest' => true,
      'labels' => array(
        'name' => 'Projects',
        'add_new_item' => 'Add New Project',
        'edit_item' => 'Edit Project',
        'all_items' => 'All Projects',
        'singular_name' => 'Project'
      ),
      'menu_icon' => 'dashicons-html',
      'has_archive' => false,
      'rewrite' => array(
       'slug' => 'projects',
      ),
      'supports' => array('title', 'editor', 'excerpt'),
    ));
  }
  add_action('init', 'theme_post_types');

  function theme_features() {
    // Custom menus
    register_nav_menu('headerMenu', 'Header Menu');
    // Other features
    add_theme_support('title-tag');
  }
 
  add_action('after_setup_theme', 'theme_features');

  /* -------------------------------------- */
  /* --------- Custom Functions ----------- */
  /* -------------------------------------- */
  function console_log($output, $with_script_tags = true) {
    $js_code = 'console.log(' . json_encode($output, JSON_HEX_TAG) . 
  ');';
    if ($with_script_tags) {
      $js_code = '<script>' . $js_code . '</script>';
    }
    echo $js_code;
  }
?>
