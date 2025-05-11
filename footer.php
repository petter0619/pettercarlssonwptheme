  <!-- footer --> 
  <footer class="footer">
      <!-- social icons -->
      <?php 
        get_template_part('partials/socialIconsList', null, array(
          'linkedin_link' => get_global_setting('global_settings_linkedin'),
          'github_link' => get_global_setting('global_settings_github'),
          'email_address' => get_global_setting('global_settings_email'),
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