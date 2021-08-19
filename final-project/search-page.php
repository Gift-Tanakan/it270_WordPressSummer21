<?php
get_header();
/* Template Name: Full-page Search Page*/
?>

<div class="wrapper">
       
      <?php if(has_post_thumbnail()) : ?>
        <?php the_post_thumbnail(); ?>
        <?php endif; ?>
        
        <!--if we have posts, show me the posts. If not, we don't-->
        
        <?php while(have_posts()) : the_post(); ?>
       
        <?php the_content(); ?> <!--the content lives in the wp posts in the wp dashboard-->
        <?php endwhile; ?> 
    <h1 class="block">Search this website: </h1>
    <?php get_search_form(); ?>
    
    </div> <!--end wrapper-->

<?php get_footer(); ?>