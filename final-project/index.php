<?php 
get_header();
?>
    
    <div class="wrapper">
        <main>
        <!--if we have posts, show me the posts. If not, we don't-->
        <?php if(have_posts()) : ?>
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
      
        <?php else : ?>
        
        <?php 
        echo '<h2>Search Results:</h2>
        <p>Sorry, but nothing matched your search terms.<br> Would you like to search again with different keywords?</p>'
        ; ?>
            <?php get_search_form(); ?>
        <?php endif; ?>
            <!---PLEASE remember, the search results originally is working off the index.php page-->
            
        </main>
        
       <?php get_sidebar(); ?>
  
    </div> <!--end wrapper-->

<?php 
get_footer();
?>
    