 <footer class="footer">
      <div class="container">

        <?php if(is_home()): ?>
        <section class="build-team">
          <h3>Build a dependable remote team.</h3>
          <a href="contact.php" class="btn footer-btn">Build your team</a>
        </section>
          <?php endif; ?>
          
        <section class="footer-section">
          <div class="row">
            <div class="col-lg-5 cp-col">
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


              <ul class="footer-social">
                <?php if (is_active_sidebar('social_widget')): ?>
                <?php 
                  $patterns = array();
                  $patterns[0] = '/<div[^>]*>/';
                  $patterns[1] = '/<\/div>/';
                  $replacements = array();
                  $replacements[2] = '';
                  $replacements[1] = '';

                  echo preg_replace($patterns, $replacements,filter_widget_content('social_widget')) ;?>
                 <?php endif;?>
              </ul>


              <p class="copyright-text">
                All rights reserved. ©
                <?php echo date("Y"); ?>
                <span>Decagon</span>
              </p>


            </div>


            <div class="col-lg-2 col-6 il-col">
                <?php if (is_active_sidebar('footer_widget_1')): ?>
		        <?php dynamic_sidebar('footer_widget_1');?>
                 <?php endif;?>
             </div>


            <div class="col-lg-2 col-6 l-col">
              <?php if (is_active_sidebar('footer_widget_2')): ?>
		        <?php dynamic_sidebar('footer_widget_2');?>
                 <?php endif;?>
            </div>


            <div class="col-lg-3 cu-col">
                <?php if (is_active_sidebar('footer_widget_3')): ?>
		        <?php dynamic_sidebar('footer_widget_3');?>
                 <?php endif;?>
            </div>
            
          </div>
        </section>
      </div>
    </footer>

    <?php wp_footer();?>
  </body>
</html>
