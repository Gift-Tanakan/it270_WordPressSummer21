<?php
get_header();

?>

<div class="wrapper">
    <main class="search-inner">
        <h2><?php _e('Oh oh!', 'site-summer-1'); ?></h2>
        <p><?php _e('It looks like nothing was found at this location. Maybe try another search?', 'site-summer-1'); ?></p>
        
        <?php get_search_form(); ?>
    </main>
    
    <aside>
   <?php dynamic_sidebar('sidebar-projects'); ?>     
    </aside>
    
    
</div> <!---end wrapper-->

<?php get_footer(); ?>