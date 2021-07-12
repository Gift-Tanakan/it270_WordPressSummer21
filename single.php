<?php 
get_header();
?>
    
    
    <div id="wrapper">
        <main>
        <!--if we have posts, show me the posts. If not, we don't-->
        <?php if(have_posts()) : ?>
        <?php while(have_posts()) : the_post(); ?>
        <article class="posts">
            <h1><?php the_title(); ?></h1>
            <div class="meta">
                <span><b>Posted By:</b> <?php the_author(); ?></span>
                <span><b>Posted On:</b> <?php the_time('F j, Y g:i a'); ?></span>
            </div> <!--end meta div-->
              
        <?php the_content(); ?> <!--the content lives in the wp posts in the wp dashboard-->
            </article>
        <?php endwhile; ?>
      
        <?php else : ?>
        
        <?php echo wpautop('Sorry, no posts were found!'); ?>
        <?php endif; ?>
            <?php comments_template(); ?>
        </main>
        
        <aside>
        </aside>
  
    </div> <!--end wrapper-->

<?php 
get_footer();
?>
    