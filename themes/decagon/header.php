<!DOCTYPE html>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>" >
    <meta name="viewport" content="width=device-width, initial-scale=1" >
    <?php wp_head(); ?>
    
  </head>

  <body>
    <!--Header Section-->
    <header class="home-header">
      <!-- Navbar Section-->
      <section class="navigation" id="mynav">
        <div class="container">
          <nav
            class="navbar sticky-top navbar-expand-lg navbar-dark bg-transparent"
          >
            <div class="container-fluid">
              <a class="navbar-brand" href="<?php echo site_url(); ?>"
                ><img
                  src="<?php echo get_theme_file_uri('assets/img/logo-white.svg')?>"
                  alt="DecagonHQ"
                  class="header__logo"
              /></a>
              <button
                class="navbar-toggler"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent"
                aria-expanded="false"
                aria-label="Toggle navigation"
              >
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a
                      class="nav-link"
                      href="https://applications.decagonhq.com/"
                      >For Developers</a
                    >
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="https://blog.decagonhq.com/"
                      >Blog</a
                    >
                  </li>
                  <li class="nav-item">
                    <a href="contact.php" class="nav-link nav-btn"
                      >Get Started</a
                    >
                  </li>
                </ul>
              </div>
            </div>
          </nav>
        </div>
      </section>