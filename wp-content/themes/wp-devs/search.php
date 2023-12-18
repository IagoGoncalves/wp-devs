<?php get_header() ?>
    <div id="primary">
        <div id="main">
            <div class="container">
                <h1><?php __e('Search results for','wp-dev') ?>: <?php echo get_search_query() ?></h1>
                <?php 
                    get_search_form();
                    while(have_posts()):
                        the_post();
                        get_template_part('parts/content', 'search');
                    endwhile;
                    the_posts_pagination();
                ?>
            </div>
        </div>
    </div>
<?php get_footer() ?>