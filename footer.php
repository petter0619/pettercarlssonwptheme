  <!-- footer -->
    <footer class="footer">
      <!-- social icons -->
      <?php 
        get_template_part('partials/socialIconsList', null, array(
          'linkedin_link' => get_field('global_linkedin'),
          'github_link' => get_field('global_github'),
          'email_address' => get_field('global_email'),
        ));
      ?>
      <!-- end of social icons -->
      <p>&copy; <span id="date"></span> <?php the_field('global_full_name'); ?>. All rights reserved.</p>
    </footer>
    <!-- end of footer -->
    <!-- Add just before the closing </body> tag -->
    <?php wp_footer(); ?>
  </body>
</html>