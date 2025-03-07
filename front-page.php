<!-- top menu -->
<?php get_header(); ?>
<!-- end of top menu -->
<!-- header -->
<header class="hero">
  <div class="section-center hero-center">
    <article class="hero-info">
      <div class="underline"></div>
      <h1>i'm petter</h1>
      <h4>Full Stack JavaScript & .NET Developer</h4>
      <a href="mailto:petter.carlsson@exopen.se" class="btn hero-btn">hire me</a>
      <!-- social icons -->
      <ul class="social-icons hero-icons">
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
    </article>
    <article class="hero-img">
      <img src="<?php echo get_theme_file_uri('/images/move-to-wp/me/hero-img.png'); ?>" class="hero-photo" alt="petter carlsson" />
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
      <img src="<?php echo get_theme_file_uri('/images/move-to-wp/me/about-img.png'); ?>" alt="about petter carlsson" class="hero-photo" />
    </article>
    <!-- info -->
    <article class="about-info">
      <!-- section title -->
      <div class="section-title about-title">
        <h2>about</h2>
        <div class="underline"></div>
      </div>
      <!-- end of section title -->
      <p>
        I am an imaginative coder with a passion for latin american dance and martial arts who spends his weekends
        volunteering at a cat shelter in Stockholm, where I am based.
      </p>
      <p>
        A passion for coding led me to pursue web development after 8-years of working as an SEO and Web Analyst.
        The thrill of finally getting a piece of code to work after hours of frustration and the challenge of
        finding creative solutions to problems are what I love most about coding.
      </p>
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
    <!-- single service -->
    <article class="service">
      <i class="fas fa-code service-icon"></i>
      <h4>web development</h4>
      <div class="underline"></div>
      <p>
        The appearance, usability and accessibility of your website is more important than ever. I develop
        client-focused, customer-centric, solutions for both the front end and the back end to help you deliver
        tangible business results.
      </p>
    </article>
    <!-- end of single service -->
    <!-- single service -->
    <article class="service">
      <i class="fas fa-chart-pie service-icon"></i>
      <h4>web analytics</h4>
      <div class="underline"></div>
      <p>
        I work with clients at every stage of the measurement lifecycle, from Google Analytics audits, strategy and
        configurations, to advanced reporting setups. I’ll also find the goals, user flows and KPIs that really
        matter for your online business.
      </p>
    </article>
    <!-- end of single service -->
    <!-- single service -->
    <article class="service">
      <i class="fas fa-search service-icon"></i>
      <h4>SEO</h4>
      <div class="underline"></div>
      <p>
        Don't let organic search be a missed opportunity to increase revenue and brand awareness. Whether it is
        optimising the ranking of YouTube videos or ordinary web rankings I can help improve your organic
        performance.
      </p>
    </article>
    <!-- end of single service -->
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
    <!-- single timeline item -->
    <article class="timeline-item">
      <h4>Back End Developer</h4>
      <span class="tag">Exopen Systems</span>
      <p>
        Primarily backend development using .NET, Node JS (with Typescript), Scala and SQL (SQL Server and Postgres)
        to maintain and further develop Exopen's product offerings and suite of integrations. Some frontend
        development as well using React with Typescript. Other technologies used include various Azure services
        (e.g. Data Factory, Web App, App Insights) and Auth0.
      </p>
      <span class="tag">Sep 2023 > Present</span>
      <span class="number">8</span>
    </article>
    <!-- end of single timeline item -->
    <!-- single timeline item -->
    <article class="timeline-item">
      <h4>Full Stack Developer</h4>
      <span class="tag">DDSthlm</span>
      <p>
        .NET and JavaScript consultant for DDSthlm. Projects include work for CityGross, Haldex and Medieinstitutet.
        Technologies worked with include: GraphQL (.NET && TypeScript w. Apollo Server), React, and NextJS.
      </p>
      <span class="tag">Apr 2022 > Aug 2023</span>
      <span class="number">7</span>
    </article>
    <!-- end of single timeline item -->
    <!-- single timeline item -->
    <article class="timeline-item">
      <h4>Software Developer</h4>
      <span class="tag">AFRY via Salt</span>
      <p>
        10 month contract working at AFRY as a fullstack developer on various projects. Technologies used during
        this assignment include: C#, .NET Core 6, Entity Framework, SQL Server, Azure (incl. Web Apps, Function
        Apps, Blob Storage), React, TypeScript, ASP Web Forms. Other: SCRUM, microservices, serverless
      </p>
      <span class="tag">Jun 2021 > Mar 2022</span>
      <span class="number">6</span>
    </article>
    <!-- end of single timeline item -->
    <!-- single timeline item -->
    <article class="timeline-item">
      <h4>Full Stack Web Developer</h4>
      <span class="tag">Salt</span>
      <p>
        Out of 1500 applicants, I and 19 others were selected for this intensive 3-month training program in full
        stack web development with a focus on TDD, mob programming, and applied learning. Having completed the
        bootcamp I have now made the transition into JavaScript development and am currently working as a full stack
        JavaScript developer consultant for Salt.
      </p>
      <span class="tag">Jan 2021 > Mar 2022</span>
      <span class="number">5</span>
    </article>
    <!-- end of single timeline item -->
    <!-- single timeline item -->
    <article class="timeline-item">
      <h4>Reboot Year</h4>
      <span class="tag">---</span>
      <p>
        After 8-years of working in online marketing I decided to make the transition into web development. My
        journey started with a year of teaching myself HTML, CSS and JavaScript (front end and back end),
        culminating in me getting accepted to the Salt accelerated career program to become a full stack JavaScript
        developer.
      </p>
      <span class="tag">Jan 2020 > Dec 2020</span>
      <span class="number">4</span>
    </article>
    <!-- end of single timeline item -->
    <!-- single timeline item -->
    <article class="timeline-item">
      <h4>Head of SEO and Web Analytics</h4>
      <span class="tag">Filippa K</span>
      <p>
        Oversaw the search engine optimization of the company's new e-commerce websites, as well developed new ways
        to view and follow up the customer journey from beginning to end. The tools I primarily worked with included
        Google Analytics, Qlikview as well as various SEO tools.
      </p>
      <span class="tag">Sep 2018 > Dec 2019</span>
      <span class="number">3</span>
    </article>
    <!-- end of single timeline item -->
    <!-- single timeline item -->
    <article class="timeline-item">
      <h4>Online Marketing Specialist</h4>
      <span class="tag">Consortio Fashion Group</span>
      <p>
        Online Marketing Specialist at Consortio Fashion Group AB primarily focused on SEO, Web Analytics, and
        Retargeting (using Criteo). Consortio Fashion Group AB owns the brands Halens, Bubbleroom, Cellbes and
        Discount24 with websites throughout the nordic countries and eastern Europe.
      </p>
      <span class="tag">Jan 2016 > Jul 2018</span>
      <span class="number">2</span>
    </article>
    <!-- end of single timeline item -->
    <!-- single timeline item -->
    <article class="timeline-item">
      <h4>Analyst and Junior Project Manager of SEO</h4>
      <span class="tag">Carnaby Solutions</span>
      <p>
        Hired as a SEO consultant to work with a variety of companies including Booli, Hemnet, Nudie Jeans, Mathem,
        Tasteline, Aller Media, Vasakronan, Partykungen and Globalrobotparts. Including a graph of convertable
        traffic in one client's monthly report also led to me becoming the company's go to web analyst.
      </p>
      <span class="tag">Mar 2012 > Dec 2015</span>
      <span class="number">1</span>
    </article>
    <!-- end of single timeline item -->
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
    <h2>let's get in touch</h2>
    <div class="underline"></div>
  </div>
  <!-- end of section title -->
  <p class="video-text">
    I would love to hear from you! If you are interested in getting in touch with me just click the button below
    and send me an email and I will get back to you as quickly as I can.
  </p>
  <a href="mailto:petter.carlsson@exopen.se" class="btn">contact me</a>
</div>
</section>
<!-- end of connect -->
<!-- footer -->
<?php get_footer(); ?>
<!-- end of footer -->