<!DOCTYPE html>
<!-- <html lang="en"> -->
<html <?php language_attributes(); ?>>
  <head>
    <!-- <meta charset="UTF-8" /> -->
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Petter Carlsson - Web Developer</title>
    <link rel="shortcut icon" type="image/ico" href="<?php echo get_theme_file_uri('/images/favicon.ico'); ?>" />
    <?php 
      $gtm_id = get_global_setting('global_settings_gtm_id');

      if (!is_null($gtm_id)):
    ?>
      <!-- Google Tag Manager -->
      <script>
        ;(function (w, d, s, l, i) {
          w[l] = w[l] || []
          w[l].push({ "gtm.start": new Date().getTime(), event: "gtm.js" })
          var f = d.getElementsByTagName(s)[0],
            j = d.createElement(s),
            dl = l != "dataLayer" ? "&l=" + l : ""
          j.async = true
          j.src = "https://www.googletagmanager.com/gtm.js?id=" + i + dl
          f.parentNode.insertBefore(j, f)
        })(window, document, "script", "dataLayer", <?php $gtm_id; ?>)
      </script>
      <!-- End Google Tag Manager -->
    <?php endif; ?>
    <?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?>>
    <?php 
      if (!is_null($gtm_id)):
    ?>
      <!-- Google Tag Manager (noscript) -->
      <noscript
        ><iframe
          src="https://www.googletagmanager.com/ns.html?id=<?php $gtm_id; ?>"
          height="0"
          width="0"
          style="display: none; visibility: hidden"
        ></iframe
      ></noscript>
      <!-- End Google Tag Manager (noscript) -->
    <?php endif; ?>
    <!-- navbar -->
    <nav class="nav" id="nav">
      <div class="nav-center">
        <!-- nav header -->
        <div class="nav-header">
          <a href="#top">
            <img src="<?php echo esc_url(get_global_setting('global_settings_logo')['url']); ?>" alt="nav logo" class="nav-logo" />
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
          <?php
            foreach ($menu_items as $item):
          ?>
            <li>
              <a href="<?php echo $item->url; ?>"><?php echo $item->title; ?></a>
            </li>
          <?php endforeach; ?>
        </ul>
        <!-- social icons -->
        <?php 
          get_template_part('partials/socialIconsList', null, array(
            'linkedin_link' => get_global_setting('global_settings_linkedin'),
            'github_link' => get_global_setting('global_settings_github'),
            'email_address' => get_global_setting('global_settings_email'),
          ));
        ?>
      </div>
    </aside>
    <!-- end of sidebar -->