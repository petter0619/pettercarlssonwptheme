<!-- top menu -->
<?php get_header(); ?>
<!-- end of top menu -->
<!-- header -->
<header class="hero">
  <div class="section-center hero-center">
    <article class="hero-info">
      <div class="underline"></div>
      <h1><?php the_field('header_headline'); ?></h1>
      <h4><?php the_field('header_subheadline'); ?></h4>
      <a href="<?php echo get_field('header_button')['link']; ?>" class="btn hero-btn"><?php echo get_field('header_button')['text']; ?></a>
      <!-- social icons -->
      <?php 
        get_template_part('partials/socialIconsList', null, array(
          'linkedin_link' => get_field('global_linkedin'),
          'github_link' => get_field('global_github'),
          'email_address' => get_field('global_email'),
          'extra_list_classes' => 'hero-icons',
        ));
      ?>
      <!-- end of social icons -->
    </article>
    <article class="hero-img">
      <img src="<?php echo esc_url(get_field('header_image')['url']); ?>" class="hero-photo" alt="<?php echo esc_attr(get_field('header_image')['alt']); ?>" />
    </article>
  </div>
</header>
<!-- end of header -->
<a class="anchor" id="onpage-navlink-about"></a>
<!-- about -->
<section class="section about">
  <div class="section-center about-center">
    <!-- about img -->
    <article class="about-img">
      <img src="<?php echo esc_url(get_field('about_section_image')['url']); ?>" alt="<?php echo esc_attr(get_field('about_section_image')['alt']); ?>" class="hero-photo" />
    </article>
    <!-- info -->
    <article class="about-info">
      <!-- section title -->
      <div class="section-title about-title">
        <h2><?php the_field('about_section_title'); ?></h2>
        <div class="underline"></div>
      </div>
      <!-- end of section title -->
      <?php the_field('about_section_text'); ?>
    </article>
  </div>
</section>
<!-- end of about -->
<!-- services -->
<section class="section bg-grey">
  <!-- section title -->
  <div class="section-title">
    <h2>services</h2>
    <div class="underline"></div>
  </div>
  <!-- end of section title -->
  <div class="section-center services-center">
    <?php
      $homepageServices = new WP_Query(array(
        'posts_per_page' => 3,
        'post_type' => 'service',
        'orderby' => 'date',
        'order' => 'ASC'
      ));

      while($homepageServices->have_posts()): $homepageServices->the_post();
    ?>
      <!-- single service -->
      <article class="service">
        <i class="fas fa-code service-icon"></i>
        <h4><?php the_title(); ?></h4>
        <div class="underline"></div>
        <p>
          <?php the_excerpt(); ?>
        </p>
      </article>
      <!-- end of single service -->
    <?php
      endwhile;
      wp_reset_postdata();
    ?>
</div>
</section>
<!-- end of services -->
<a class="anchor" id="onpage-navlink-latest-work"></a>
<!-- projects -->
<section class="section projects">
  <!-- section title -->
  <div class="section-title">
    <h2>latest works</h2>
    <div class="underline"></div>
    <p class="projects-text">
      This is a collection of the latest additions to my portfolio.
      <span class="desktop-only">Hover over a project for more details.</span> A full description of the project as
      well as the tech stack used and a link to live demo can be found in the project Readme on Github. Just click
      the project and its Gitub repo will open up in a new window.
    </p>
  </div>
  <!-- end of section title -->
  <div class="section-center projects-center">
    <!-- single project -->
    <a href="https://github.com/petter0619/my-4dx" class="project-1" target="_blank">
      <article class="project">
        <img src="<?php echo get_theme_file_uri('/images/move-to-wp/project-section/project-1.jpeg'); ?>" alt="single project" class="project-img" />
        <div class="project-info">
          <h4>my 4DX</h4>
          <p>An online project management tool based on the 4 Disciplines of Execution.</p>
        </div>
      </article>
    </a>
    <!-- end of single project -->
    <!-- single project -->
    <a href="https://github.com/petter0619/react-todo-list" class="project-2" target="_blank">
      <article class="project">
        <img src="<?php echo get_theme_file_uri('/images/move-to-wp/project-section/project-2.jpeg'); ?>" alt="single project" class="project-img" />
        <div class="project-info">
          <h4>react todo list</h4>
          <p>A classic exercise redone using class based React and SASS.</p>
        </div>
      </article>
    </a>
    <!-- end of single project -->
    <!-- single project -->
    <a href="https://github.com/petter0619/vanilla-js-todo-list" class="project-3" target="_blank">
      <article class="project">
        <img src="<?php echo get_theme_file_uri('/images/move-to-wp/project-section/project-3.jpeg'); ?>" alt="single project" class="project-img" />
        <div class="project-info">
          <h4>vanilla JS todo list</h4>
          <p>The classic todo app exercise.</p>
        </div>
      </article>
    </a>
    <!-- end of single project -->
    <!-- single project -->
    <a href="https://github.com/petter0619/copy-a-design" class="project-4" target="_blank">
      <article class="project">
        <img src="<?php echo get_theme_file_uri('/images/move-to-wp/project-section/project-4.jpeg'); ?>" alt="single project" class="project-img" />
        <div class="project-info">
          <h4>CSS Gallery Design Copy</h4>
          <p>A demo of how closely I can replicate/copy a given design.</p>
        </div>
      </article>
    </a>
     <!-- end of single project -->
  </div>
</section>
<!-- end of projects -->
<a class="anchor" id="onpage-navlink-skills"></a>
<!-- tech stack -->
<section class="section bg-grey">
  <!-- section title -->
  <div class="section-title">
    <h2>Skills</h2>
    <div class="underline"></div>
  </div>
  <!-- end of section title -->
  <article class="stack-row">
    <!-- single technology -->
    <div class="tech-logo-container">
      <i class="fab fa-html5 tech-logo-icon" aria-hidden="true" style="color: rgb(205, 84, 52)"></i>
       <p class="tech-logo-text">HTML</p>
    </div>
    <!-- end of single technology -->
    <!-- single technology -->
    <div class="tech-logo-container">
      <i class="fab fa-css3-alt tech-logo-icon" aria-hidden="true" style="color: rgb(54, 154, 214)"></i>
      <p class="tech-logo-text">CSS</p>
    </div>
    <!-- end of single technology -->
    <!-- single technology -->
    <div class="tech-logo-container">
      <img src="<?php echo get_theme_file_uri('/images/move-to-wp/skills-icons/sass_logo.png'); ?>" alt="sass" class="tech-logo-img" />
      <p class="tech-logo-text">SASS</p>
    </div>
    <!-- end of single technology -->
    <!-- single technology -->
    <div class="tech-logo-container">
      <i class="fab fa-js tech-logo-icon" aria-hidden="true" style="color: rgb(233, 212, 77)"></i>
      <p class="tech-logo-text">JavaScript</p>
    </div>
    <!-- end of single technology -->
    <!-- single technology -->
    <div class="tech-logo-container">
      <img src="<?php echo get_theme_file_uri('/images/move-to-wp/skills-icons/typescript_logo.png'); ?>" alt="typescript" class="tech-logo-img" />
      <p class="tech-logo-text">TypeScript</p>
    </div>
    <!-- end of single technology -->
    <!-- single technology -->
    <div class="tech-logo-container">
      <i class="fab fa-react tech-logo-icon" aria-hidden="true" style="color: rgb(111, 191, 219)"></i>
      <p class="tech-logo-text">React</p>
    </div>
    <!-- end of single technology -->
    <!-- single technology -->
    <div class="tech-logo-container">
      <i class="fab fa-node-js tech-logo-icon" aria-hidden="true" style="color: rgb(144, 197, 63)"></i>
      <p class="tech-logo-text">Node JS</p>
    </div>
    <!-- end of single technology -->
    <!-- single technology -->
    <div class="tech-logo-container">
      <img src="<?php echo get_theme_file_uri('/images/move-to-wp/skills-icons/express_logo_2.png'); ?>" alt="express" class="tech-logo-img" />
      <p class="tech-logo-text">Express</p>
    </div>
    <!-- end of single technology -->
    <!-- single technology -->
    <div class="tech-logo-container">
      <img src="<?php echo get_theme_file_uri('/images/move-to-wp/skills-icons/c-sharp_logo.png'); ?>" alt="C#" class="tech-logo-img" />
      <p class="tech-logo-text">C#</p>
    </div>
    <!-- end of single technology -->
    <!-- single technology -->
    <div class="tech-logo-container">
      <img src="<?php echo get_theme_file_uri('/images/move-to-wp/skills-icons/dotnet-core_logo.png'); ?>" alt=".NET Code" class="tech-logo-img" />
       <p class="tech-logo-text">.NET Core</p>
    </div>
    <!-- end of single technology -->
    <!-- single technology -->
    <div class="tech-logo-container">
      <img src="<?php echo get_theme_file_uri('/images/move-to-wp/skills-icons/mongodb_logo.png'); ?>" alt="mongodb" class="tech-logo-img" />
      <p class="tech-logo-text">MongoDB</p>
    </div>
    <!-- end of single technology -->
    <!-- single technology -->
    <div class="tech-logo-container">
      <img src="<?php echo get_theme_file_uri('/images/move-to-wp/skills-icons/sql-server_logo.png'); ?>" alt="sql server" class="tech-logo-img" />
      <p class="tech-logo-text">SQL Server</p>
    </div>
    <!-- end of single technology -->
  </article>
</section>
<!--end of tech stack --->
<a class="anchor" id="onpage-navlink-experience"></a>
<!-- timeline -->
<section class="section timeline">
  <!-- section title -->
  <div class="section-title">
    <h2>experience</h2>
    <div class="underline"></div>
  </div>
  <!-- end of section title -->
  <div class="section-center timeline-center">
    <?php
      $homepageExperience = new WP_Query(array(
        'posts_per_page' => -1,
        'post_type' => 'experience',
        'orderby' => 'date',
        'order' => 'DESC'
      ));

      $counter = 9;

      while($homepageExperience->have_posts()): $homepageExperience->the_post();
        $counter--;
    ?>
      <!-- single timeline item -->
      <article class="timeline-item">
        <h4><?php the_title(); ?></h4>
        <span class="tag"><?php get_field('experience_employer') ? the_field('experience_employer') : "---" ?></span>
        <p>
          <?php the_excerpt(); ?>
        </p>
        <span class="tag">
          <?php 
            $startDate = get_field('experience_startDate'); 
            $endDate = get_field('experience_endDate') ? get_field('experience_endDate') : "Present";
          
            echo "$startDate > $endDate";
          ?>
        </span>
        <span class="number"><?php echo $counter; ?></span>
      </article>
      <!-- end of single timeline item -->
    <?php
      endwhile;
      wp_reset_postdata();
    ?>
  </div>
</section>
<!--end of  timeline -->
<a class="anchor" id="onpage-navlink-contact"></a>
<!-- connect -->
<section class="connect">
  <video autoplay muted loop class="video-container" poster="<?php echo get_theme_file_uri('/images/move-to-wp/project-section/project-1.jpeg'); ?>">
    <source src="<?php echo get_theme_file_uri('/videos/connect.mp4'); ?>" type="video/mp4" />
    Sorry, your browser does not support embedded videos...
  </video>
  <div class="video-banner">
  <!-- section title -->
  <div class="section-title">
    <h2><?php the_field('contact_section_title'); ?></h2>
    <div class="underline"></div>
  </div>
  <!-- end of section title -->
  <p class="video-text">
    <?php the_field('contact_section_text'); ?>
  </p>
  <a href="<?php echo get_field('contact_section_button')['link']; ?>" class="btn"><?php echo get_field('contact_button')['text']; ?></a>
</div>
</section>
<!-- end of connect -->
<!-- footer -->
<?php get_footer(); ?>
<!-- end of footer -->