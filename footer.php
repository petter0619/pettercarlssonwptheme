  <!-- footer --> 
  <footer class="footer">
      <!-- social icons -->
      <?php 
        $settings_page = get_page_by_path('global-settings');

        get_template_part('partials/socialIconsList', null, array(
          'linkedin_link' => get_field('global_settings_linkedin', $settings_page->ID),
          'github_link' => get_field('global_settings_github', $settings_page->ID),
          'email_address' => get_field('global_settings_email', $settings_page->ID),
        ));
      ?>
      <!-- end of social icons -->
      <p>&copy; <span id="date"></span> <?php get_field('global_settings_full_name', $settings_page->ID); ?>. All rights reserved.</p>
    </footer>
    <!-- end of footer -->
    <!-- Add just before the closing </body> tag -->
    <?php wp_footer(); ?>
  </body>
</html>