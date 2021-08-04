<?php 
get_header();

/* Template Name: Front Page*/
?>
<!--
<div id="hero">
    <img src="<?php echo get_template_directory_uri(); ?>/../../uploads/2021/07/yellowstone-inner.jpg" alt="banner">
    
    
</div> 
-->
<!---end hero-->
     <img  class="textbanner" src="<?php echo get_template_directory_uri(); ?>/../../uploads/banner.jpg" alt="banner">
<img class="notextbanner" src="<?php echo get_template_directory_uri(); ?>/../../uploads/inner-banner.jpg" alt="banner">

    <div class="wrapper">
        
        <?php if(has_post_thumbnail()) : ?>
        <?php the_post_thumbnail(); ?>
        <?php endif; ?>
        
        <!--if we have posts, show me the posts. If not, we don't-->
        
        <?php while(have_posts()) : the_post(); ?>
       
        <?php the_content(); ?> <!--the content lives in the wp posts in the wp dashboard-->
        <?php endwhile; ?>
        
    
    </div> <!--end wrapper-->

<?php 
get_footer();
?>
    
