  <!-- footer -->
    <footer class="footer">
      <!-- social icons -->
      <ul class="social-icons">
        <?php if(get_field('global_linkedin')): ?>
          <li>
            <a href="<?php the_field('global_linkedin'); ?>" class="social-icon" target="_blank">
              <i class="fab fa-linkedin"></i>
            </a>
          </li>
        <?php endif; ?>
        <?php if(get_field('global_github')): ?>
          <li>
            <a href="<?php the_field('global_github'); ?>" class="social-icon" target="_blank">
              <i class="fab fa-github"></i>
            </a>
          </li>
        <?php endif; ?>
        <?php if(get_field('global_email')): ?>
          <li>
            <a href="mailto:<?php the_field('global_email'); ?>" class="social-icon" target="_blank">
              <i class="fas fa-envelope"></i>
            </a>
          </li>
        <?php endif; ?>
      </ul>
      <!-- end of social icons -->
      <p>&copy; <span id="date"></span> <?php the_field('global_full_name'); ?>. All rights reserved.</p>
    </footer>
    <!-- end of footer -->
    <!-- Add just before the closing </body> tag -->
    <?php wp_footer(); ?>
  </body>
</html>