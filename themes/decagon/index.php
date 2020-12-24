<?php get_header();?>
      <!-- Banner Content-->
      <div class="container">
        <div class="home-header__text-box">
          <h1 class="heading-primary">
            Build faster with <span>vetted</span> remote software engineering
            talent.
          </h1>
          <h3 class="heading-secondary">
            Recruiting, training, ongoing HR management and work
            infrastructure<br />
            to help you scale quickly and cost effectively.
          </h3>
          <a href="contact.php" class="btn heading-btn">Build your team</a>
        </div>
      </div>
    </header>

    <section class="section-partners">
      <div class="container">
        <div class="row">
          <div class="col-lg-4 text-center">
            <p>Our Engineers have built products for</p>
          </div>
          <div class="col-lg-8">
            <div class="work-with">
              <img src="<?php echo get_theme_file_uri('/assets/img/partners/merck.svg') ?>" alt="Merck" />
              <img src="<?php echo get_theme_file_uri('/assets/img/partners/nike.svg') ?>" alt="Nike" />
              <img
                src="<?php echo get_theme_file_uri('/assets/img/partners/mastercard.svg') ?>"
                alt="Mastercard"
              />
              <img src="<?php echo get_theme_file_uri('/assets/img/partners/vertex.svg') ?>" alt="Vertex" />
              <img
                src="<?php echo get_theme_file_uri('/assets/img/partners/budweiser.svg') ?>"
                alt="Budweiser"
              />
              <img src="<?php echo get_theme_file_uri('/assets/img/partners/nokia.svg') ?>" alt="Nokia" />
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="section-why">
      <div class="container">
        <h2>Why Decagon?</h2>
        <div class="why-grid">
          <div class="why-image">
            <img src="<?php echo get_theme_file_uri('/assets/img/workspace.jpg') ?>" class="img-fluid" alt="" />
          </div>
          <div class="why-grid--list">
            <div class="why__item">
              <h4 class="why__heading">⭐ Engineering quality</h4>
              <p class="why__text">
                We select and recruit the top 0.5% of tech talent in the cities
                we source from. We run our own Software Engineering Training
                institute which is #1 in Africa.
              </p>
            </div>
            <div class="why__item">
              <h4 class="why__heading">🔌 Easy to work with</h4>
              <p class="why__text">
                Our engineers are all Native English speakers, they work on your
                time-zone and will easily adopt your collaboration tools and
                practices
              </p>
            </div>
            <div class="why__item">
              <h4 class="why__heading">✊🏽 Diverse talent base</h4>
              <p class="why__text">
                <strong>More Black Talent:</strong> Through our operations in
                Africa we are able to give you access to high quality engineers
                from under-represented backgrounds.
              </p>
              <p class="why__text">
                <strong>More Female Talent:</strong> We have an ambitious goal
                to be 50% female by 2025
              </p>
            </div>
            <div class="why__item">
              <h4 class="why__heading">💰 Cost-effective scaling</h4>
              <p class="why__text">
                We help you access talent in regions where there is more
                available supply of top-tier talent.
              </p>
              <p class="why__text">
                Customized on-boarding - we can design a risk-free custom
                onboarding sprint to get your team production ready in your
                environment
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="section-countries">
      <h4 class="content">
        We currently serve companies in Austin, NYC, Berlin, London and Rome
        from our operating bases in 🇳🇬 Lagos, 🇺🇸 Austin and 🇩🇪 Berlin.
      </h4>
    </section>

    <section class="section-group">
      <div class="testimonial">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-lg-5">
              <img
                src="<?php echo get_theme_file_uri('/assets/img/team2 1.jpg') ?>"
                alt="Jeff Jack"
                class="img-fluid"
              />
            </div>
            <div class="col-lg-1"></div>
            <div class="col-lg-6">
              <p class="testimonial-text">
                “The software engineers from Decagon required very little to no
                guidance on the complex projects we had for fortune 500
                companies. This helps us save time and focus on other business
                needs”
              </p>
              <div class="testimonial-author">
                <p class="testimonial-author--name">Jeff Jack</p>
                <p class="testimonial-author--bio">
                  Director of Front-End, Vertex
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="leadership">
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <h2>Our Leadership</h2>
            </div>
          </div>
          <div class="leader--grid">
          <?php 
          $leaders = new WP_Query(array(
            'posts_per_page' => 6,
            'post_type' => 'portfolio'
          ));

          while($leaders->have_posts()) {
              $leaders->the_post(); ?>
              
            <div class="leader--card">
              <div class="leader--card__img">
                <img
                  src="<?php the_field('Image') ?>"
                  alt="<?php the_title(); ?>"
                  class="img-fluid"
                />
              </div>
              <h3 class="leader--card__name"><?php the_title(); ?></h3>
              <p class="leader--card__position"><?php the_field('Portfolio'); ?></p>
              <ul class="leader--card__qualification">
              <?php 
                $ac1 = get_field('Achievement1');
                if (strlen($ac1) > 0) {?><li><?php the_field('Achievement1'); ?></li><?php } ?>
                <?php 
                $ac2 = get_field('Achievement2');
                if (strlen($ac2) > 0) {?><li><?php the_field('Achievement2'); ?></li><?php } ?>
                <?php 
                $ac3 = get_field('Achievement3');
                if (strlen($ac3) > 0) {?><li><?php the_field('Achievement3'); ?></li><?php } ?>
                <?php 
                $ac4 = get_field('Achievement4');
                if (strlen($ac4) > 0) {?><li><?php the_field('Achievement4'); ?></li><?php } ?>
                <?php 
                $ac5 = get_field('Achievement5');
                if (strlen($ac5) > 0) {?><li><?php the_field('Achievement5'); ?></li><?php } ?>
              </ul>
              <div class="leader--card__linkedin">
                <a
                  href="<?php the_field('Linkedin'); ?>"
                  target="_blank"
                  rel="noopener noreferrer"
                >
                  <img src="<?php echo get_theme_file_uri('/assets/img/linkedin.svg') ?>" alt="LinkedIn" />
                  <span>Find on LinkedIn &rarr;</span>
                </a>
              </div>
            </div>
          <?php }
           ?>
            
          <button id="toggleLC">See all</button>
        </div>
      </div>
    </section>

    <section class="section-partner-tech">
      <div class="container">
        <div class="our-partners">
          <h5>Our Partnerships</h5>
          <div class="our-partners--images">
            <img
              src="<?php echo get_theme_file_uri('/assets/img/atlassian.svg') ?>"
              alt="Atlassian"
              class="img-fluid"
            />
            <img
              src="<?php echo get_theme_file_uri('/assets/img/microsoft.svg') ?>"
              alt="Microsoft"
              class="img-fluid"
            />
            <img src="<?php echo get_theme_file_uri('/assets/img/github.svg') ?>" alt="Github" class="img-fluid" />
          </div>
        </div>
      </div>
      <div class="our-skills container">
        <h4>Skilled in technologies you need</h4>
        <h6>
          Access a pool of skilled engineers to match your product requirements
        </h6>
        <ul>
          <li>Back-end engineer</li>
          <li>Front-end engineer</li>
          <li>Full-Stack engineer</li>
          <li>Mobile Engineer</li>
          <li>QA Engineer</li>
          <li>React Developer</li>
          <li>Android Developer</li>
          <li>IOS Developer</li>
          <li>React Native Developer</li>
          <li>Python Developer</li>
          <li>Node.JS Developer</li>
          <li>Javascript Developer</li>
          <li>Java Developer</li>
          <li>C# Developer</li>
          <li>Devops Engineer</li>
          <li>UI/UX Developer</li>
        </ul>
      </div>
    </section>

    <section class="section-media">
      <div class="container">
        <div class="media-heading">
          <h4>News from the HQ</h4>
          <a href="https://blog.decagonhq.com/">Visit Blog</a>
        </div>
        <div class="media-grid">
          <div
            class="news-card"
            style="background-image: url(<?php echo get_theme_file_uri('/assets/img/FEB_6268\ 1.jpg') ?>)"
          >
            <a
              href="https://techpoint.africa/2020/02/04/indeed-visits-decagon-institute/"
              class="news-card__overlay"
            ></a>
            <div class="news-card__details">
              <h4>Indeed Visits DecagonHQ to meet remote team</h4>
              <a
                href="https://techpoint.africa/2020/02/04/indeed-visits-decagon-institute/"
                >Read More</a
              >
            </div>
          </div>

          <div
            class="news-card"
            style="background-image: url(<?php echo get_theme_file_uri('/assets/img/obaseki\ 1.jpg') ?>)"
          >
            <a
              href="http://www.edostate.gov.ng/obaseki-set-to-launch-edo-tech-park-partners-decagon-to-train-15000-software-engineers/"
              class="news-card__overlay"
            ></a>
            <div class="news-card__details">
              <h4>Decagon to train 15,000 people in Edo state</h4>
              <a
                href="http://www.edostate.gov.ng/obaseki-set-to-launch-edo-tech-park-partners-decagon-to-train-15000-software-engineers/"
                >Read More</a
              >
            </div>
          </div>

          <div
            class="news-card"
            style="background-image: url(<?php echo get_theme_file_uri('/assets/img/Decagon-02-2\ 1.jpg') ?>)"
          >
            <a
              href="https://tribuneonlineng.com/sterling-bank-decagon-train-5000-nigerian-graduates-on-software-engineering/"
              class="news-card__overlay"
            ></a>
            <div class="news-card__details">
              <h4>Sterling Bank signs deal to finance Decadev program</h4>
              <a
                href="https://tribuneonlineng.com/sterling-bank-decagon-train-5000-nigerian-graduates-on-software-engineering/"
                >Read More</a
              >
            </div>
          </div>
        </div>
      </div>
    </section>

   <?php get_footer()?>