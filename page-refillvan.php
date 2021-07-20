<?php 
get_header();

/* Template Name: Refill Van Page*/
?>
    
    
    <div id="wrapper">
        <main>
        <!--if we have posts, show me the posts. If not, we don't-->
        <?php if(has_post_thumbnail()) : ?>
        <?php the_post_thumbnail(); ?>
        <?php endif; ?>
            
        <?php while(have_posts()) : the_post(); ?>
        <h2><?php the_title(); ?></h2>
        <?php the_content(); ?> <!--the content lives in the wp posts in the wp dashboard-->
        <?php endwhile; ?>
        
    
        </main>
        <aside>
        
        </aside>
    </div> <!--end wrapper-->

<?php 
get_footer();
?>
    