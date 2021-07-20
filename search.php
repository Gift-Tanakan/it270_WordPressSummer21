<?php 
get_header();
?>
    
    
    <div id="wrapper">
        <main>
            
        <!--if we have posts, show me the posts.-->
            
        <?php if(have_posts()) : ?>
            <h1 class="page-title">
            <?php _e('Search results for: ', 'site-summer-1'); ?>
                <span class="page-description">
                <?php echo get_search_query(); ?>
                </span>
            </h1>
            
            <h2 class="pagetitle">Our findings for 
            <?php /* search count */
                $allsearch = new WP_Query("s=$s&showposts=1");
                $key = wp_specialchars($s, 1); $count = $allsearch->post_count; _e(''); _e('<span class="search-terms">'); echo $key; _e('</span>'); _e(' &mdash; '); echo $count . ' '; _e('articles/pages'); wp_reset_query(); ?></h2>
            
        <?php while(have_posts()) : the_post(); ?>
        <article class="posts">
            <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
            <div class="meta">
                <span><b>Posted By:</b> <?php the_author(); ?></span>
                <span><b>Posted On:</b> <?php the_time('F j, Y g:i a'); ?></span>
            </div> <!--end meta div-->
            <div class="thumbnail">
            <?php if(has_post_thumbnail()): ?>
                <a href="<?php the_permalink(); ?>">
                <?php the_post_thumbnail(); ?>
                </a>
                <?php endif; ?>
            </div>
        <?php the_excerpt(); ?> <!--the content lives in the wp posts in the wp dashboard-->
            
            <span class="block"><a href="<?php the_permalink(); ?>">Read More about <?php the_title(); ?></a></span>
            </article>
        <?php endwhile; ?>
          
            
<!--  In case of no search results for the search term--->
            
            
        <?php else : ?>
            <h1 class="page-title"><?php _e('No content for: ', 'site-summer-1'); ?><span class="page-description"><?php echo get_search_query(); ?></span></h1>
        
        
        <p>Sorry, but nothing matched your search terms.<br> Would you like to search again with different keywords?</p>'
    
            <?php get_search_form(); ?>
        <?php endif; ?>
            <!---PLEASE remember, the search results originally is working off the index.php page-->
            
        </main>
        
        <aside>
            this is the search page
        </aside>
  
    </div> <!--end wrapper-->

<?php 
get_footer();
?>
    