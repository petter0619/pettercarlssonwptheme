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

  function theme_features() {
    // Custom menus
    register_nav_menu('headerMenu', 'Header Menu');
    // Other features
    add_theme_support('title-tag');
  }
 
  add_action('after_setup_theme', 'theme_features');

  /* -------------------------------------- */
  /* -------- Custom Post Types ----------- */
  /* -------------------------------------- */
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

  /* -------------------------------------- */
  /* ---- Create Pages Upon Activation ---- */
  /* -------------------------------------- */
  function create_home_page_on_theme_activation() {
    // Check if a static front page is already set
    $front_page_id = get_option('page_on_front');
    $is_static_front_page = get_option('show_on_front') === 'page';

    // Find any page using 'front-page.php' as its template
    $existing_front_page = get_pages([
      'meta_key'   => '_wp_page_template',
      'meta_value' => 'front-page.php',
      'number'     => 1,
      'post_type'  => 'page',
      'post_status'=> 'publish',
    ]);

    // If a static front page is already set or another page is using front-page.php, do nothing
    if ($is_static_front_page && $front_page_id) return;
    if (!empty($existing_front_page)) return;

    // Otherwise, create a new Home page
    $home_id = wp_insert_post([
      'post_title'     => 'Home',
      'post_type'      => 'page',
      'post_status'    => 'publish',
      'post_name'      => 'home',
      'page_template'  => 'front-page.php',
    ]);

    // Set the new page as the front page
    update_option('show_on_front', 'page');
    update_option('page_on_front', $home_id);
  }

  add_action('after_switch_theme', 'create_home_page_on_theme_activation');

  function create_global_settings_page() {
    $page = get_page_by_path('global-settings');

    if (!$page) {
      $page_id = wp_insert_post([
        'post_title'     => 'Global Settings',
        'post_name'      => 'global-settings',
        'post_status'    => 'publish',
        'post_type'      => 'page',
        'page_template'  => 'global-settings.php',
      ]);
    }
  }
  add_action('after_switch_theme', 'create_global_settings_page');

  /* -------------------------------------- */
  /* ---- Create Menus Upon Activation ---- */
  /* -------------------------------------- */
  function create_default_header_menu() {
    // Set the location key from register_nav_menu()
    $menu_location = 'headerMenu';
    $menu_name     = 'Header Menu';

    // Check if the menu already exists
    $menu_exists = wp_get_nav_menu_object($menu_name);

    if (!$menu_exists) {
      // Create the menu
      $menu_id = wp_create_nav_menu($menu_name);

      // Add menu items
      wp_update_nav_menu_item($menu_id, 0, [
        'menu-item-title'  => 'About',
        'menu-item-url'    => home_url('/#about'),
        'menu-item-status' => 'publish',
      ]);

      wp_update_nav_menu_item($menu_id, 0, [
        'menu-item-title'  => 'Skills',
        'menu-item-url'    => home_url('/#skills"'),
        'menu-item-status' => 'publish',
      ]);

      wp_update_nav_menu_item($menu_id, 0, [
        'menu-item-title'  => 'Experience',
        'menu-item-url'    => home_url('/#experience"'),
        'menu-item-status' => 'publish',
      ]);

      wp_update_nav_menu_item($menu_id, 0, [
        'menu-item-title'  => 'Contact',
        'menu-item-url'    => home_url('/#contact"'),
        'menu-item-status' => 'publish',
      ]);

      // Assign the menu to the theme location
      $locations = get_theme_mod('nav_menu_locations');
      if (!is_array($locations)) {
        $locations = [];
      }
      $locations[$menu_location] = $menu_id;
      set_theme_mod('nav_menu_locations', $locations);
    }
  }
  add_action('after_switch_theme', 'create_default_header_menu');


  /* -------------------------------------- */
  /* ------- Plugin Dependencies ---------- */
  /* -------------------------------------- */
  require_once get_template_directory() . '/tgmpa/class-tgm-plugin-activation.php';

  add_action('tgmpa_register', 'my_theme_register_required_plugins');

  function my_theme_register_required_plugins() {
    $plugins = [
      [
        'name'     => 'Advanced Custom Fields',
        'slug'     => 'advanced-custom-fields',
        'required' => true,
      ],
      // You can add more plugins here
    ];

    $config = [
      'id'           => 'petter0619', // A unique string to identify your instance of TGMPA. Helps avoid conflicts with other themes/plugins using TGMPA.
      'menu'         => 'tgmpa-install-plugins', // The slug used for the admin menu item TGMPA creates.
      'has_notices'  => true, // Whether TGMPA should show admin notices to install/activate plugins.
      'dismissable'  => false, // Whether the user can dismiss the plugin installation notice.
      'is_automatic' => false, // Whether plugins should be automatically activated after installation.
    ];

    tgmpa($plugins, $config);
  }

  /* -------------------------------------- */
  /* ---- Advanced Custom Fields Setup ---- */
  /* -------------------------------------- */
  if (function_exists('acf_add_local_field_group')) {
    // Global Info
    acf_add_local_field_group([
        'key' => 'group_global_settings',
        'title' => 'Global Settings',
        'fields' => [
          [
            'key' => 'field_global_settings_full_name',
            'label' => 'Full Name',
            'name' => 'global_settings_full_name',
            'type' => 'text',
          ],
          [
            'key' => 'field_global_settings_logo',
            'label' => 'Site Logo',
            'name' => 'global_settings_logo',
            'type' => 'image',
            'return_format' => 'array',
            'library' => 'all',
          ],
          [
            'key' => 'field_global_settings_linkedin',
            'label' => 'LinkedIn',
            'name' => 'global_settings_linkedin',
            'type' => 'text',
          ],
          [
            'key' => 'field_global_settings_email',
            'label' => 'Email',
            'name' => 'global_settings_email',
            'type' => 'text',
          ],
          [
            'key' => 'field_global_settings_github',
            'label' => 'GitHub',
            'name' => 'global_settings_github',
            'type' => 'text',
          ],
        ],
        'location' => [
          [
            [
              'param' => 'page_template',
              'operator' => '==',
              'value' => 'global-settings.php',
            ],
          ],
        ],
    ]);

    // Experience Post Type
    acf_add_local_field_group([
      'key' => 'group_experience_post_stype',
      'title' => 'Experience Post Type',
      'fields' => [
        [
          'key' => 'field_experience_employer',
          'label' => 'Employer',
          'name' => 'experience_employer',
          'type' => 'text',
          'required' => 1,
        ],
        [
          'key' => 'field_experience_start_date',
          'label' => 'Start Date',
          'name' => 'experience_startDate',
          'required' => 1,
          'type' => 'date_picker',
          'display_format' => 'j F, Y',
          'return_format'  => 'F Y',
          'first_day' => 1  // (week starts on) 1 = Monday, 0 = Sunday
        ],
        [
          'key' => 'field_experience_end_date',
          'label' => 'End Date',
          'name' => 'experience_endDate',
          'required' => 0,
          'type' => 'date_picker',
          'display_format' => 'j F, Y',
          'return_format'  => 'F Y',
          'first_day' => 1 // (week starts on) 1 = Monday, 0 = Sunday
        ],
        [
          'key' => 'field_experience_employer_url',
          'label' => 'Employer URL',
          'name' => 'experience_employerUrl',
          'type' => 'url',
          'required' => 0,
        ],
      ],
      'location' => [
        [
          [
            'param' => 'post_type',
            'operator' => '==',
            'value' => 'experience',
          ],
        ],
      ],
    ]);

    // Experience Post Type
    acf_add_local_field_group([
      'key' => 'group_project_post_stype',
      'title' => 'Project Post Type',
      'fields' => [
        [
          'key' => 'field_project_show_on_home',
          'label' => 'Show On Home',
          'name' => 'project_showOnHome',
          'type' => 'true_false',
          'message' => 'Display project on homepage',
        ],
        [
          'key' => 'field_project_github_link',
          'label' => 'Github Link',
          'name' => 'project_github',
          'type' => 'url',
        ],
      ],
      'location' => [
        [
          [
            'param' => 'post_type',
            'operator' => '==',
            'value' => 'project',
          ],
        ],
      ],
    ]);

    // Home - Header
    acf_add_local_field_group([
      'key' => 'group_home_header',
      'title' => 'Home - Header',
      'fields' => [
        [
          'key' => 'field_home_header_headline',
          'label' => 'Headline',
          'name' => 'header_headline',
          'type' => 'text',
          'required' => 1,
          'placeholder' => 'I\'m Petter',
        ],
        [
          'key' => 'field_home_header_subheadline',
          'label' => 'SubHeadline',
          'name' => 'header_subheadline',
          'type' => 'text',
          'required' => 1,
          'placeholder' => 'Full Stack JavaScript & .NET Developer',
        ],
        [
          'key' => 'field_home_header_image',
          'label' => 'Image',
          'name' => 'header_image',
          'type' => 'image',
          'return_format' => 'array',
          'library' => 'all', // or 'uploadedTo' (limits to current post)
          'required' => 1,
        ],
        [
          'key' => 'field_home_header_button',
          'label' => 'Button',
          'name' => 'header_button',
          'type' => 'group',
          'layout' => 'block', // 'block', 'table', or 'row'
          'sub_fields' => [
            [
              'key' => 'field_home_header_button_text',
              'label' => 'Button Text',
              'name' => 'text',
              'type' => 'text',
              'default_value' => 'Hire Me',
            ],
            [
              'key' => 'field_home_header_button_link',
              'label' => 'Button Link',
              'name' => 'link',
              'type' => 'text',
              'placeholder' => 'mailto:petter.carlsson@exopen.se',
            ],
          ],
        ],
      ],
      'location' => [
        [
          [
            'param' => 'page_template',
            'operator' => '==',
            'value' => 'front-page.php',
          ],
        ],
      ],
      'menu_order' => 0,
    ]);

    // Home - About
    acf_add_local_field_group([
      'key' => 'group_home_about',
      'title' => 'Home - About',
      'fields' => [
        [
          'key' => 'field_home_about_section_title',
          'label' => 'Section Title',
          'name' => 'about_section_title',
          'type' => 'text',
          'required' => 1,
        ],
        [
          'key' => 'field_home_about_section_text',
          'label' => 'Section Text',
          'name' => 'about_section_text',
          'type' => 'wysiwyg',
          'tabs' => 'text', // 'all', 'visual', or 'text'
          'toolbar' => 'basic', // 'full', 'basic', or a custom toolbar
          'media_upload' => 0, // allow media uploads (1 = yes, 0 = no)
        ],
        [
          'key' => 'field_home_about_section_image',
          'label' => 'Section Image',
          'name' => 'about_section_image',
          'type' => 'image',
          'return_format' => 'array',
          'library' => 'all', // or 'uploadedTo' (limits to current post)
        ],
      ],
      'location' => [
        [
          [
            'param' => 'page_template',
            'operator' => '==',
            'value' => 'front-page.php',
          ],
        ],
      ],
      'menu_order' => 1,
    ]);

    // Home - Contact
    acf_add_local_field_group([
      'key' => 'group_home_contact',
      'title' => 'Home - Contact',
      'fields' => [
        [
          'key' => 'field_home_contact_section_title',
          'label' => 'Section Title',
          'name' => 'contact_section_title',
          'type' => 'text',
          'default_value' => 'let\'s get in touch',
        ],
        [
          'key' => 'field_home_contact_section_text',
          'label' => 'Section Text',
          'name' => 'contact_section_text',
          'type' => 'wysiwyg',
          'tabs' => 'text', // 'all', 'visual', or 'text'
          'toolbar' => 'basic', // 'full', 'basic', or a custom toolbar
          'media_upload' => 0, // allow media uploads (1 = yes, 0 = no)
        ],
        [
          'key' => 'field_home_contact_section_button',
          'label' => 'Section Button',
          'name' => 'contact_section_button',
          'type' => 'group',
          'layout' => 'row', // 'block', 'table', or 'row'
          'sub_fields' => [
            [
              'key' => 'field_home_contact_section_button_text',
              'label' => 'Button Text',
              'name' => 'text',
              'type' => 'text',
              'default_value' => 'contact me',
            ],
            [
              'key' => 'field_home_contact_section_button_link',
              'label' => 'Button Link',
              'name' => 'link',
              'type' => 'text',
            ],
          ],
        ],
      ],
      'location' => [
        [
          [
            'param' => 'page_template',
            'operator' => '==',
            'value' => 'front-page.php',
          ],
        ],
      ],
      'menu_order' => 3
    ]);

    // Home - Skills
    $skillFields = [];

    for ($i = 1; $i <= 12; $i++) {
      $skillFields[] = [
        'key' => "field_home_skills_skill_{$i}",
        'label' => "Skill #{$i}",
        'name' => "skills_skill_{$i}",
        'type' => 'group',
        'layout' => 'table', // options: 'block', 'table', 'row'
        'sub_fields' => [
          [
            'key' => "field_home_skills_skill_{$i}_text",
            'label' => 'Skill Name',
            'name' => 'skill_name',
            'type' => 'text',
          ],
          [
            'key' => "field_home_skills_skill_{$i}_image",
            'label' => 'Skill Image',
            'name' => 'skill_image',
            'type' => 'image',
            'return_format' => 'url', // options: 'array', 'url', 'id'
          ],
        ],
      ];
    }

    acf_add_local_field_group([
      'key' => 'group_home_skills',
      'title' => 'Home - Skills',
      'fields' => $skillFields,
      'location' => [
        [
          [
            'param' => 'page_template',
            'operator' => '==',
            'value' => 'front-page.php',
          ],
        ],
      ],
      'menu_order' => 2,
    ]);
  }

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
