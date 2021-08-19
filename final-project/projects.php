<?php 
get_header();

/* Template Name: Projects Page*/
?>
       
    <div class="wrapper">
        <main>
        <!--if we have posts, show me the posts. If not, we don't-->
        <?php if(has_post_thumbnail()) : ?>
        <?php the_post_thumbnail(); ?>
        <?php endif; ?>
            
        <?php while(have_posts()) : the_post(); ?>
       
        <?php the_content(); ?> <!--the content lives in the wp posts in the wp dashboard-->
        <?php endwhile; ?>
        
    
        </main>
        
        <aside id="secondary" class="widget-area">
<?php dynamic_sidebar('sidebar-projects'); ?>
</aside> <!--secondary-->
        
    </div> <!--end wrapper-->

<?php
get_footer();
?>
    