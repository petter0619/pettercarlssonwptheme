<!-- social icons -->
<ul class="social-icons <?php echo $args['extra_list_classes']; ?>">
  <?php if($args['linkedin_link']): ?>
    <li>
      <a href="<?php echo $args['linkedin_link']; ?>" class="social-icon" target="_blank">
        <i class="fab fa-linkedin"></i>
      </a>
    </li>
  <?php endif; ?>
  <?php if($args['github_link']): ?>
    <li>
      <a href="<?php echo $args['github_link']; ?>" class="social-icon" target="_blank">
        <i class="fab fa-github"></i>
      </a>
    </li>
  <?php endif; ?>
  <?php if($args['email_address']): ?>
    <li>
      <a href="mailto:<?php echo $args['email_address']; ?>" class="social-icon" target="_blank">
        <i class="fas fa-envelope"></i>
      </a>
    </li>
  <?php endif; ?>
</ul>
<!-- end of social icons -->