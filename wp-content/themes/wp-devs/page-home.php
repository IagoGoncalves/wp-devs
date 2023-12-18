<?php get_header() ?>
    <div id="content" class="site-content">
        <div id="primary" class="content-area">
            <main id="main" class="site-main">
                <section class="hero"></section>
                <section class="services">
                    <h2>Services</h2>
                    <div class="container">
                        <div class="services-item">
                            <?php  
                                if(is_active_sidebar('service-1')){
                                    dynamic_sidebar('service-1');
                                }
                            ?>
                        </div>
                        <div class="services-item">
                            <?php  
                                if(is_active_sidebar('service-2')){
                                    dynamic_sidebar('service-2');
                                }
                            ?>
                        </div>
                        <div class="services-item">
                            <?php  
                                if(is_active_sidebar('service-3')){
                                    dynamic_sidebar('service-3');
                                }
                            ?>
                        </div>
                    </div>
                </section>
                <section class="home-blog">
                    <h2>Latest News</h2>
                    <div class="container">
                        <?php 
                            $args = array(
                                'post_type' => 'post',
                                'post_per_page' => 5,
                                'category__in'  => array(4, 9, 10),
                                'category__not_in' => array(1)
                            );
                            $postlist = new WP_Query($args);

                            if($postlist->have_posts()):
                                while($postlist->have_posts()) : $postlist->the_post();
                                    get_template_part('parts/content', 'latest-news');
                                endwhile;
                                wp_reset_postdata();
                            else: ?>
                                <p>Nothing yet to be displayed!</p>
                        <?php endif; ?>
                    </div>
                </section>
            </main>
        </div>
    </div>
<?php get_footer() ?>