<?php

function my_excerpt_length($length) {
    return 35;
}

add_filter('excerpt_length' , 'my_excerpt_length', 999);

set_post_thumbnail_size(693, 693);
add_theme_support('post-thumbnails');

//register navigation. If not register, menu won't show although being called in the header.
register_nav_menus(array(
'primary' => 'Primary Menu',
'low-waste ways' => 'Low-waste ways Menu',
'footer' => 'Footer Menu',
'cool green apps' => 'Cool green apps Menu'
));

// Page slug body class
function add_slug_body_class( $classes ) {
    global $post;
    if ( isset( $post ) ) {
        $classes[] = $post->post_type . '-' . $post->post_name;
    }
    return $classes;
}
add_filter( 'body_class', 'add_slug_body_class' );
add_filter('widget_text', 'do_shortcode');

//This will tell WP that we're linking to astuteo's jquery
function my_theme_scripts() {
wp_enqueue_script( 'astuteo', get_template_directory_uri() . '/js/astuteo.js', '1.0.0', false );
}
add_action( 'wp_enqueue_scripts', 'my_theme_scripts' );

//register sidebar
function site_summer_1_widgets_init() {
    register_sidebar(
    array (
    'name' => esc_html__('Sidebar Blog', 'site_summer_1'),
    'id' => 'sidebar-blog',
    'description' => esc_html__('Our blog widget', 'site_summer_1'),
    'before_widget' => '<section id="%1$s" class="widget %2$s">',
    'after_widget' => '</section>',
    'before_title' => '<h3 class="widget-title">',
    'after_title' => '</h3>',
    )
    );
    
    register_sidebar(
    array (
    'name' => esc_html__('Sidebar Low-waste ways', 'site_summer_1'),
    'id' => 'sidebar-low-waste-ways',
    'description' => esc_html__('Our Low-waste ways widget', 'site_summer_1'),
    'before_widget' => '<section id="%1$s" class="widget %2$s">',
    'after_widget' => '</section>',
    'before_title' => '<h3 class="widget-title">',
    'after_title' => '</h3>',
    )
    );
    
    register_sidebar(
    array (
    'name' => esc_html__('Sidebar About', 'site_summer_1'),
    'id' => 'sidebar-about',
    'description' => esc_html__('Our About widget', 'site_summer_1'),
    'before_widget' => '<section id="%1$s" class="widget %2$s">',
    'after_widget' => '</section>',
    'before_title' => '<h3 class="widget-title">',
    'after_title' => '</h3>',
    )
    );
    
    register_sidebar(
    array (
    'name' => esc_html__('Sidebar Highlight', 'site_summer_1'),
    'id' => 'sidebar-highlight',
    'description' => esc_html__('Our Highlight widget', 'site_summer_1'),
    'before_widget' => '<section id="%1$s" class="widget %2$s">',
    'after_widget' => '</section>',
    'before_title' => '<h3 class="widget-title">',
    'after_title' => '</h3>',
    )
    );
    
    register_sidebar(
    array (
    'name' => esc_html__('Sidebar Footer content', 'site_summer_1'),
    'id' => 'sidebar-footer-content',
    'description' => esc_html__('Our Footer content widget', 'site_summer_1'),
    'before_widget' => '<section id="%1$s" class="widget %2$s">',
    'after_widget' => '</section>',
    'before_title' => '<h3 class="widget-title">',
    'after_title' => '</h3>',
    )
    );
}

add_action('widgets_init', 'site_summer_1_widgets_init');

//  Functions to display a list of all the shortcodes
function diwp_get_list_of_shortcodes(){
 
    // Get the array of all the shortcodes
    global $shortcode_tags;
     
    $shortcodes = $shortcode_tags;
     
    // sort the shortcodes with alphabetical order
    ksort($shortcodes);
     
    $shortcode_output = "<ul>";
     
    foreach ($shortcodes as $shortcode => $value) {
        $shortcode_output = $shortcode_output.'<li>['.$shortcode.']</li>';
    }
     
    $shortcode_output = $shortcode_output. "</ul>";
     
    return $shortcode_output;
}

add_shortcode('get-shortcode-list', 'diwp_get_list_of_shortcodes');

/******** shortcode for disclaimer ********/

function expert_disclaimer() {
    return '<small>Disclaimer: All content in this website is shared from my personal experience as someone who is passionate about the topics, not as an expert in the field.</small>';
}

add_shortcode('disclaimer', 'expert_disclaimer');

/******** shortcode for dates ********/

function today_date() {
    return date("l\, F jS Y ");
}

add_shortcode('current_date', 'today_date');

/******** shortcode for special ********/

function specials() {
    //adding a switch
    if (isset($_GET['today'])) {
        $today = $_GET['today'];
    } else {
        $today = date('l');
    }

switch($today) {
        
    case 'Monday':
        $content = 'Today\'s special is $5 off on your first order of oatmilk bundles. Check more <a href="">here</a>';
        break;
    case 'Tuesday':
        $content = 'Today\'s special is $10 off on your first order of oatmilk bundles. Check more <a href="">here</a>';
        break;
    case 'Wednesday':
        $content = 'Today\'s special is $15 off on your first order of oatmilk bundles. Check more <a href="">here</a>';
        break;
    case 'Thursday':
        $content = 'Today\'s special is $20 off on your first order of oatmilk bundles. Check more <a href="">here</a>';
        break;
    case 'Friday':
        $content = 'Today\'s special is $25 off on your first order of oatmilk bundles. Check more <a href="">here</a>';
        break;
    case 'Saturday':
        $content = 'Today\'s special is $30 off on your first order of oatmilk bundles. Check more <a href="">here</a>';
        break;
    case 'Sunday':
        $content = 'Today\'s special is $35 off on your first order of oatmilk bundles. Check more <a href="">here</a>';
        break;
}

return $content;
}

add_shortcode('today_specials', 'specials');

/******** shortcode for copyright year ********/

function year() {
    return date('Y');
}

add_shortcode('current_year', 'year');
remove_filter('the_content', 'wpautop');
