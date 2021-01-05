<?php 
get_header();
while (have_posts()) {
    the_post();

?>

      <div class="container">
          <div class="intro-content">
            <h1 class="w_color">
              <?php
              $pageTitle = '';
               $title  = get_the_title(); 
               $titleparts = explode(' ',$title);
               $size = count($titleparts);
               $titleparts[$size - 1] = ' <span>'.end($titleparts).'</span>';
               foreach($titleparts as $word){
                $pageTitle .= $word.' ';
               }
               echo $pageTitle;
               ?>
            </h1>
          </div>
        </div>
   </header>

   <section class="single-service" id="software-development">
          <div class="container">
            <div class="row pt_xl wow fadeInUp animated" style="visibility: visible;">

              <div class="col-lg-3">
              <?php if (is_active_sidebar('page_sidebar')): ?>
		        <?php dynamic_sidebar('page_sidebar');?>
                 <?php endif;?>
              </div>

              <div class="offset-lg-1 col-lg-8 brands alt d-flex align-items-center">
                <div class="heading mb_small">
                  <?php the_content() ?>
                </div>
                <div class="row">
                </div>
              </div>
            </div>
          </div>
        </section>

   <?php } 
   get_footer()
   ?>