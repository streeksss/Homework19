<?php get_header(); ?>
    <main class="m-page">
        <div class="our-portfolio">
            <div class="container clearfix">
                <span class="portfolio-title">Our portfolio</span>
            </div>
        </div>
        <div class="container clearfix">
            <div class="best-portfolio">
                <h2>Nothing but the best for our portfolio</h2>
                <p class="best-portfolio-text">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    Praesent justo ligula, interdum ut lobortis quis, interdum vitae metus.
                    Proin fringilla metus non nulla cursus, sit amet rutrum est pretium.
                </p>
                <div class="line sec"></div>
                <ul class="second-menu">
                        <?php
                            $args = array(
                                'theme_location' => 'second-menu'
                            );
                            ?>
                        <?php wp_nav_menu($args); ?>
                </ul>
            </div>
        </div>
        <div class="gray-block">
        <div class="container clearfix">
                 <div class="pcs-block">
                <?php
                    if (have_posts()) :
                        while (have_posts()) : the_post(); ?>
                                    <?php  the_post_thumbnail(); ?>
                                    <article class="pc">
                                        <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                                        <p><?php the_content(''); ?></p>
                                        <img src="<?php echo home_url();?>"><img src="<?php bloginfo('template_directory'); ?>/img/pc_first.png" alt="Computer"/>
                                    </article>
                        <?php endwhile;
                   else :
                       echo '<p>No content found</p>';
                   endif;
                ?>
            </div>
        </div>
    </div>
        <div class="white-block">
            <div class="container clearfix">
            </div>
        </div>

        <div class="gray-block">
            <div class="container clearfix">
                <div class="pcs-block">
                    <?php
                        if (have_posts()) :
                            while (have_posts()) : the_post(); ?>
                                <?php  the_post_thumbnail(); ?>
                                <article class="pc">
                                    <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                                    <p><?php the_content(''); ?></p>
                                    <img src="<?php echo home_url();?>"><img src="<?php bloginfo('template_directory'); ?>/img/pc_second.png" alt="Computer"/>
                                </article>
                            <?php endwhile;
                        else :
                            echo '<p>No content found</p>';
                        endif;
                    ?>
                </div>
            </div>
        </div>
        <div class="white-block">
            <div class="container clearfix">
            </div>
        </div>

        <div class="gray-block">
            <div class="container clearfix">
                <div class="pcs-block">
                    <?php
                        if (have_posts()) :
                            while (have_posts()) : the_post(); ?>
                                <?php  the_post_thumbnail(); ?>
                                <article class="pc">
                                    <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                                    <p><?php the_content(''); ?></p>
                                    <img src="<?php echo home_url();?>"><img src="<?php bloginfo('template_directory'); ?>/img/pc_third.png" alt="Computer"/>
                                </article>
                            <?php endwhile;
                        else :
                            echo '<p>No content found</p>';
                        endif;
                    ?>
                </div>
            </div>
        </div>
        <div class="white-block">
            <div class="container clearfix">
            </div>
        </div>



        -->

        <div class="container clearfix">
            <div class="line sec"></div>
            <h2 class="need-ws-title">Do you need a website?</h2>
            <p class="need-ws-text">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                Praesent justo ligula, interdum ut lobortis quis, interdum vitae metus.
                Proin fringilla metus non nulla cursus, sit amet rutrum est pretium.
            </p>
            <div class="quote"><a href="#">Get a free quote</a></div>
        </div>
    </main>
<?php get_footer(); ?>