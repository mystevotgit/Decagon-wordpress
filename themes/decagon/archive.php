<?php get_header();?>


            <div class="page-title">
                We offer our <span class="colored-text">insights</span> on engineering and business.
            </div>
        </header>
        <div class="post-categories">

                    <?php

                        wp_nav_menu(
                            [
                                'theme_location' => 'blogMenu',
                                'menu_class' => 'categories',
                                'container' => false,

                            ]
                        )

                        ?>
            <!-- -->
            <div class="dropdown">

            <?php
            wp_nav_menu(array(
                'theme_location' => 'blogMenu', 
                'walker' => new Walker_Nav_Menu_Dropdown(),
                'container' => false,
                'items_wrap' => '<select id="categories">%3$s</select>',
            ));
            ?>
            <div class="select-icon">
                <svg focusable="false" viewBox="0 0 104 128" width="25" height="35" class="icon">
                    <path
                        d="m2e1 95a9 9 0 0 1 -9 9 9 9 0 0 1 -9 -9 9 9 0 0 1 9 -9 9 9 0 0 1 9 9zm0-3e1a9 9 0 0 1 -9 9 9 9 0 0 1 -9 -9 9 9 0 0 1 9 -9 9 9 0 0 1 9 9zm0-3e1a9 9 0 0 1 -9 9 9 9 0 0 1 -9 -9 9 9 0 0 1 9 -9 9 9 0 0 1 9 9zm14 55h68v1e1h-68zm0-3e1h68v1e1h-68zm0-3e1h68v1e1h-68z">
                    </path>
                </svg>
            </div>
            </div>
        </div>

        <section id="blogs">
            <?php
        while (have_posts()) {
        the_post();
    ?>
            <div class="post">
                <div class="post-thumbnail">
                    <img src="<?php the_post_thumbnail_url() ?>" alt="" />
                </div>
                <div class="post-cat"><?php echo get_the_category_list(', ') ?></div>
                <div class="post-excerpt">
                   <a href="<?php the_permalink()?>"> <?php the_title(); ?> </a>
                </div>
                
            </div>

            
    <?php } ?>
        </section>

        <div class="more-btn">Load More</div>

    <?php wp_footer();?>

</body>

</html>