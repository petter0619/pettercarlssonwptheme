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
?>
