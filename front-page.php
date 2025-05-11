<?php
  /*
  Template Name: Front Page
  */
?>

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
          'linkedin_link' => get_global_setting('global_settings_linkedin'),
          'github_link' => get_global_setting('global_settings_github'),
          'email_address' => get_global_setting('global_settings_email'),
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
<a class="anchor" id="about"></a>
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
    <h2>areas of expertise</h2>
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
<a class="anchor" id="projects"></a>
<!-- projects -->
<?php 
  $projectsQuery = new WP_Query(array(
    'posts_per_page' => 4,
    'post_type' => 'project',
    'meta_key'      => 'project_showOnHome',
    'meta_value'    => true,
  ));
  
  if($projectsQuery->found_posts === 4):
?>
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
      <?php 
        $projectCounter = 0;

        while( $projectsQuery->have_posts() ) : $projectsQuery->the_post(); 
          $projectCounter++;
      ?>
        <a href="<?php the_permalink(); ?>" class="project-<?php echo $projectCounter; ?>" target="_blank">
          <article class="project">
            <img src="<?php echo get_theme_file_uri("/images/project-section/project-$projectCounter.jpeg"); ?>" alt="single project" class="project-img" />
            <div class="project-info">
              <h4><?php the_title(); ?></h4>
              <p><?php the_excerpt(); ?></p>
            </div>
          </article>
        </a>
      <?php endwhile; ?>
    </div>
  </section>
<?php endif; ?>
<!-- end of projects -->
<a class="anchor" id="skills"></a>
<!-- tech stack -->
<?php 
  $skills = [];

  for ($i = 1; $i <= 12; $i++) {
    $field_value = get_field("skills_skill_$i");

    if (is_null($field_value)) {
        break;
    }
    $skills[] = $field_value;
  }
  
  if (!empty($skills)):
?>
  <section class="section bg-grey">
    <!-- section title -->
    <div class="section-title">
      <h2>Tech Stack</h2>
      <div class="underline"></div>
    </div>
    <!-- end of section title -->
    <article class="stack-row">
      <?php foreach ($skills as $skill):
      ?>
        <!-- single technology -->
        <div class="tech-logo-container">
          <img src="<?php echo $skill["skill_image"]; ?>" alt="<?php echo $skill["skill_name"]; ?>" class="tech-logo-img" />
          <p class="tech-logo-text"><?php echo $skill["skill_name"]; ?></p>
        </div>
        <!-- end of single technology -->
      <?php endforeach; ?>
    </article>
  </section>
<?php endif; ?>
<!--end of tech stack --->
<a class="anchor" id="experience"></a>
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
<a class="anchor" id="contact"></a>
<!-- connect -->
<section class="connect">
  <video autoplay muted loop class="video-container" poster="<?php echo get_theme_file_uri('/images/project-section/project-1.jpeg'); ?>">
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
    <a href="<?php echo get_field('contact_section_button')['link']; ?>" class="btn"><?php echo get_field('contact_section_button')['text']; ?></a>
  </div>
</section>
<!-- end of connect -->
<!-- footer -->
<?php get_footer(); ?>
<!-- end of footer -->