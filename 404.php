<?php
get_header();

?>
<div id="search-error">
 <img src="<?php echo get_template_directory_uri(); ?>/../../uploads/searching-e1627363991432.jpg" alt="searching">
    
</div>
<div class="wrapper">
    <main class="search-inner">
        <h2><?php _e('Oh oh!', 'site-summer-1'); ?></h2>
        <p><?php _e('It looks like nothing was found at this location. Maybe try another search?', 'site-summer-1'); ?></p>
        
        <?php get_search_form(); ?>
    </main>
    
    <aside>
        This is my 404 page
    </aside>
    
    
</div> <!---end wrapper-->

<?php get_footer(); ?>
