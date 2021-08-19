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
'projects' => 'Projects Menu',
'footer' => 'Footer Menu'
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
function final_project_widgets_init() {
    register_sidebar(
    array (
    'name' => esc_html__('Sidebar Blog', 'final-project'),
    'id' => 'sidebar-blog',
    'description' => esc_html__('Our blog widget', 'final-project'),
    'before_widget' => '<section id="%1$s" class="widget %2$s">',
    'after_widget' => '</section>',
    'before_title' => '<h3 class="widget-title">',
    'after_title' => '</h3>',
    )
    );
    
    register_sidebar(
    array (
    'name' => esc_html__('Sidebar Projects', 'final-project'),
    'id' => 'sidebar-projects',
    'description' => esc_html__('Projects widget', 'final-project'),
    'before_widget' => '<section id="%1$s" class="widget %2$s">',
    'after_widget' => '</section>',
    'before_title' => '<h3 class="widget-title">',
    'after_title' => '</h3>',
    )
    );
    
    register_sidebar(
    array (
    'name' => esc_html__('Sidebar Categories', 'final-project'),
    'id' => 'sidebar-categories',
    'description' => esc_html__('Categories widget', 'final-project'),
    'before_widget' => '<section id="%1$s" class="widget %2$s">',
    'after_widget' => '</section>',
    'before_title' => '<h3 class="widget-title">',
    'after_title' => '</h3>',
    )
    );
    
    register_sidebar(
    array (
    'name' => esc_html__('Sidebar By-Tech', 'final-project'),
    'id' => 'sidebar-by-tech',
    'description' => esc_html__('By-tech widget', 'final-project'),
    'before_widget' => '<section id="%1$s" class="widget %2$s">',
    'after_widget' => '</section>',
    'before_title' => '<h3 class="widget-title">',
    'after_title' => '</h3>',
    )
    );
    
    register_sidebar(
    array (
    'name' => esc_html__('Sidebar About', 'final-project'),
    'id' => 'sidebar-about',
    'description' => esc_html__('Our About widget', 'final-project'),
    'before_widget' => '<section id="%1$s" class="widget %2$s">',
    'after_widget' => '</section>',
    'before_title' => '<h3 class="widget-title">',
    'after_title' => '</h3>',
    )
    );
    
    register_sidebar(
    array (
    'name' => esc_html__('Sidebar Testimonials', 'final-project'),
    'id' => 'sidebar-testimonials',
    'description' => esc_html__('Our Testimonials widget', 'final-project'),
    'before_widget' => '<section id="%1$s" class="widget testimonial-wrapper %2$s">',
    'after_widget' => '</section>',
    'before_title' => '<h3 class="widget-title">',
    'after_title' => '</h3>',
    )
    );
    
    
    register_sidebar(
    array (
    'name' => esc_html__('Sidebar Footer content', 'final-project'),
    'id' => 'sidebar-footer-content',
    'description' => esc_html__('Our Footer content widget', 'final-project'),
    'before_widget' => '<section id="%1$s" class="widget %2$s">',
    'after_widget' => '</section>',
    'before_title' => '<h3 class="widget-title">',
    'after_title' => '</h3>',
    )
    );
}

add_action('widgets_init', 'final_project_widgets_init');

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
        $content = '1-hour free website audit (for existing website that needs improvement.) Book by August 31st <a href="https://www.gifttanakan.com/it270/final-project/contact/">here.</a>';
        break;
    case 'Tuesday':
        $content = '1-hour free WordPress consultation. Book by August 31st <a href="https://www.gifttanakan.com/it270/final-project/contact/">here.</a>';
        break;
    case 'Wednesday':
        $content = '1-hour free Google Analytics integration. Book by August 31st <a href="https://www.gifttanakan.com/it270/final-project/contact/">here.</a>';
        break;
    case 'Thursday':
        $content = '1-hour free WooCommerce plugin setup. Book by August 31st <a href="https://www.gifttanakan.com/it270/final-project/contact/">here.</a>';
        break;
    case 'Friday':
        $content = '1-hour free walk-through setting up and customizing Google Calendar on a page. Book by August 31st <a href="https://www.gifttanakan.com/it270/final-project/contact/">here.</a>';
        break;
    case 'Saturday':
        $content = '1-hour free walk-through setting up and customizing Google Calendar on a sidebar as a widget. Book by August 31st <a href="https://www.gifttanakan.com/it270/final-project/contact/">here.</a>';
        break;
    case 'Sunday':
        $content = '1-hour free introduction to WordPress dashboard and how to navigate around. Book by August 31st <a href="https://www.gifttanakan.com/it270/final-project/contact/">here.</a>';
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

/* allows adding custom body class for different styling for multisite environment*/
function customBodyClass( $classes ) {
global $current_blog;
$classes[] = 'website-'.$current_blog->blog_id;
return $classes;
}
add_filter( 'body_class', 'customBodyClass' );