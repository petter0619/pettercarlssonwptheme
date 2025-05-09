<!DOCTYPE html>
<!-- <html lang="en"> -->
<html <?php language_attributes(); ?>>
  <head>
    <!-- <meta charset="UTF-8" /> -->
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Petter Carlsson - Web Developer</title>
    <link rel="shortcut icon" type="image/ico" href="<?php echo get_theme_file_uri('/images/favicon.ico'); ?>" /> 
    <!-- Google Tag Manager -->
    <!-- <script>
      ;(function (w, d, s, l, i) {
        w[l] = w[l] || []
        w[l].push({ "gtm.start": new Date().getTime(), event: "gtm.js" })
        var f = d.getElementsByTagName(s)[0],
          j = d.createElement(s),
          dl = l != "dataLayer" ? "&l=" + l : ""
        j.async = true
        j.src = "https://www.googletagmanager.com/gtm.js?id=" + i + dl
        f.parentNode.insertBefore(j, f)
      })(window, document, "script", "dataLayer", "GTM-5V3DRC9")
    </script> -->
    <!-- End Google Tag Manager -->
    <?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?>>
    <!-- Google Tag Manager (noscript) -->
    <!-- <noscript
      ><iframe
        src="https://www.googletagmanager.com/ns.html?id=GTM-5V3DRC9"
        height="0"
        width="0"
        style="display: none; visibility: hidden"
      ></iframe
    ></noscript> -->
    <!-- End Google Tag Manager (noscript) -->
    <!-- navbar -->
    <nav class="nav" id="nav">
      <div class="nav-center">
        <!-- nav header -->
        <div class="nav-header">
          <a href="#top">
            <img src="<?php 
              $settings_page = get_page_by_path('global-settings');

              echo esc_url(get_field('global_settings_logo', $settings_page->ID)['url']); 
            ?>" alt="nav logo" class="nav-logo" />
          </a>
          <button class="nav-btn" id="nav-btn">
            <i class="fas fa-bars"></i>
          </button>
        </div>
        <ul class="nav-links">
        <?php
          $menu_items = wp_get_nav_menu_items('header-menu');

          foreach ($menu_items as $item):
        ?>
          <li>
            <a href="<?php echo $item->url; ?>"><?php echo $item->title; ?></a>
          </li>
        <?php endforeach; ?>
        </ul>
      </div>
    </nav>
    <!-- end of navbar -->
    <!-- sidebar -->
    <aside class="sidebar" id="sidebar">
      <div>
        <button class="close-btn" id="close-btn">
          <i class="fas fa-times"></i>
        </button>
        <!-- nav links -->
        <ul class="sidebar-links">
          <li>
            <a href="#onpage-navlink-about">about</a>
          </li>
          <li>
            <a href="#onpage-navlink-latest-work">projects</a>
          </li>
          <li>
            <a href="#onpage-navlink-skills">skills</a>
          </li>
          <li>
            <a href="#onpage-navlink-experience">experience</a>
          </li>
          <li>
            <a href="#onpage-navlink-contact">contact</a>
          </li>
        </ul>
        <!-- social icons -->
        <ul class="social-icons">
          <li>
            <a href="https://www.linkedin.com/in/petter0619/" class="social-icon" target="_blank">
              <i class="fab fa-linkedin"></i>
            </a>
          </li>
          <li>
            <a href="https://github.com/petter0619/" class="social-icon" target="_blank">
              <i class="fab fa-github"></i>
            </a>
          </li>
          <li>
            <a href="mailto:petter.carlsson@appliedtechnology.se" class="social-icon">
              <i class="fas fa-envelope"></i>
            </a>
          </li>
        </ul>
      </div>
    </aside>
    <!-- end of sidebar -->