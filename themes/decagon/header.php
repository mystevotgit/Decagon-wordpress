<!DOCTYPE html>
<!DOCTYPE html>
<html <?php language_attributes();?>>
<head>
    <meta charset="<?php bloginfo('charset');?>" >
    <meta name="viewport" content="width=device-width, initial-scale=1" >
    <?php wp_head();?>

  </head>

  <body>
    <!--Header Section-->
    <header class="<?php echo is_home() ? 'home-header' : 'other-header' ?>">
      <!-- Navbar Section-->
      <section class="navigation" id="mynav">
        <div class="container">
          <nav
            class="navbar sticky-top navbar-expand-lg navbar-dark bg-transparent">
            <div class="container-fluid">
              <a class="navbar-brand" href="<?php echo site_url(); ?>">
               

              <?php

                $custom_logo_id = get_theme_mod('custom_logo');
                $logo = wp_get_attachment_image_src($custom_logo_id, 'full');
                if (has_custom_logo()) {
                echo '<img src="' . esc_url($logo[0]) . '" alt="' . get_bloginfo('name') . '">';
                } else {
                echo '<h1>' . get_bloginfo('name') . '</h1>';
                }
            ?>
              </a>
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

                <?php

                    wp_nav_menu(
                        [
                            'theme_location' => 'mainMenu',
                            'menu_class' => 'navbar-nav ms-auto mb-2 mb-lg-0',
                            'container' => false,

                        ]
                    )

                ?>


              </div>
            </div>
          </nav>
        </div>
      </section>