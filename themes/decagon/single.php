<?php get_header(); ?>

        </header>

        <div class="single-page-container">
            <div class="single-page-body">
                <?php
                 while(have_posts()){
                     the_post();
                 ?>
                <h6><?php echo get_the_category_list(', ') ?></h6>
                <h1><?php the_title();?></h1>
                <div class="author">
                    <div class="author-details">
                        <div class="dp">
                            <?php if (get_avatar(get_the_author_meta('ID')) !== false){
                             echo get_avatar(get_the_author_meta('ID'), 39); 
                            }else{ ?>
                            <img src="<?php echo get_template_directory_uri().'/images/faith.svg'?>" alt="<?php the_author() ?>" />
                        <?php }?>
                            
                        </div>
                        <div class="author-name">
                            <h5><?php the_author()?></h5>
                            <span><?php the_time('M d, Y'); ?></span>
                        </div>
                    </div>
                    <div class="author-social">
                        <h5>share</h5>
                        <div>
                            <a target='_blank' href='https://twitter.com/share?url=<?php the_permalink() ?>'><img src="<?php echo get_template_directory_uri() . '/assets/img/tweeter.svg' ?>" alt="tweeter"></a>
                            <a target='_blank' href='http://www.facebook.com/sharer.php?u=<?php the_permalink()?>'><img src="<?php echo get_template_directory_uri() . '/assets/img/facebook.svg' ?>" alt="facebook"></a>
                            <a target='_blank' href='http://www.linkedin.com/shareArticle?url=<?php the_permalink()?>'><img src="<?php echo get_template_directory_uri() . '/assets/img/linkdin.svg' ?>" alt="linkedin"></a>
                        </div>
                    </div>
                </div>
                <img src="<?php the_post_thumbnail_url();?>" alt="<?php the_title(); ?>">
                <?php the_content() ?>
                
                <div class="addition"></div>
            </div>

            <?php } ?>
            <div class="single-page-body2">
                <div class="subscribe-title">
                    <h3>Subscribe</h3>
                    <h4>Get latest insights on engineering and business</h4>
                </div>
                <form action="">
                    <label for="#name">Your name</label>
                    <input id="name" type="text" placeholder="Enter first name">
                    <label for="#email">Your email</label>
                    <input id="email" type="text" placeholder="name@example.com">
                    <input class="submitbtn" type="submit">
                </form>
            </div>
        </div>
    </div>

    <?php wp_footer(); ?>

</body>

</html>