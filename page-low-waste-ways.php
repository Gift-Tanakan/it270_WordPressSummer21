<?php 
get_header();

/* Template Name: Low-waste-ways Page*/
?>
<div id="hero">
    <img src="<?php echo get_template_directory_uri(); ?>/../../uploads/2021/07/yellowstone-inner.jpg" alt="banner">
</div> <!---end hero-->
    
    
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
<?php dynamic_sidebar('sidebar-Low-waste-ways'); ?>
</aside> <!--secondary-->
        
    </div> <!--end wrapper-->


<div class="full-width">
<?php 
dynamic_sidebar('sidebar-highlight'); ?>
</div> <!--end full width div-->
<?php
get_footer();
?>
    