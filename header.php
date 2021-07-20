<!doctype html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo('charset'); ?>">
<title><?php bloginfo('name'); ?></title>
<link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet" type="text/css">
<?php wp_head();  ?>
</head>

<body <?php body_class(); ?>>
    <header>
        <div id="top">
        <?php get_search_form(); ?>
        </div> <!--end top-->
        <div class="inner-header">
<!--            make url pointing to the homepage-->
            <a href="<?php echo get_home_url(); ?>">
                <img id="logo" src="<?php echo get_template_directory_uri(); ?>/images/IT270_logo.png" alt="Logo">
            </a>
        <nav id="site-navigation" class="main-navigation">
            <button class="nav-button">Toggle Navigation</button>
            <?php
            $args_primary = array(
            'theme_location' => 'primary',
            'items_wrap' => '<ul class="primary-nav">%3$s</ul>'
            );
            ?>
            
            <?php wp_nav_menu($args_primary); ?>
        </nav>
        </div><!---end inner-header-->
    </header>
