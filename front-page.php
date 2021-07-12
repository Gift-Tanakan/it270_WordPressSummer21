<?php 
get_header();

/* Template Name: Front Page*/
?>
    
    
    <div id="wrapper">
        <!--if we have posts, show me the posts. If not, we don't-->
        <?php if(have_posts()) : ?>
        <?php while(have_posts()) : the_post(); ?>
        <h2><?php the_title(); ?></h2>
        <?php the_content(); ?> <!--the content lives in the wp posts in the wp dashboard-->
        <?php endwhile; ?>
        <?php else : ?>
        <?php echo wpautop('Sorry, no posts were found!'); ?>
        <?php endif; ?>
    <p>Here is my content</p>
    </div> <!--end wrapper-->

<?php 
get_footer();
?>
    