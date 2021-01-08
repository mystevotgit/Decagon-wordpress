<?php /* Template Name: ContactPageTemplate */?>
<?php get_header(); 
while(have_posts())
the_post();

the_content();

?>

          <section class="section-partners">
      <div class="container">
        <div class="row">
          <div class="col-lg-4 text-center">
            <p>Our Engineers have built products for</p>
          </div>
          <div class="col-lg-8">
            <div class="work-with">
            <?php 
            $customers = new WP_Query(array(
            'posts_per_page' => -1,
            'post_type' => 'customer',
            'orderby' => 'meta_value_num',
            'order' => 'ASC',
        ));

        while ($customers->have_posts()) {
          $customers->the_post(); ?>
          <img
          src="<?php the_post_thumbnail_url( 'full' ) ?>"
          alt="<?php the_title(); ?>"
        />
        <?php } ?>
            </div>
          </div>
        </div>
      </div>
    </section>




<?php get_footer() ?>