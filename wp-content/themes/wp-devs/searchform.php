<form role="search" method="get" id="searchform" class="searchform" action="<?php echo esc_url(home_url('/'))?>">
    <div>
        <label class="screen-reader-text" for="s"><?php __e('Search for','wp-dev') ?>:</label>
        <input type="text" value="<?php echo get_search_query()?>" name="s" id="s">
        <input type="submit" id="searchsubmit" value="<?php __e('Search','wp-dev') ?>">
        <!-- <input type="hidden" value="post" name="post_type" id="post_type">  --> <!-- Remover resultado de página da pesquisa -->
    </div>
</form>