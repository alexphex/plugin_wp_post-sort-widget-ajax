<?php
/*
Plugin Name: Post Sort Widget
Description: Widget for sorting posts with AJAX.
Version: 1.0
*/

// widget creation
class Post_Sort_Widget extends WP_Widget {
    public function __construct() {
        parent::__construct('post_sort_widget', 'Sort Posts Widget');
    }

    public function widget($args, $instance) {
        echo '<div id="post-sort-widget">
                 <select id="sort-options">
                     <option value="" selected disabled>Choose</option>
                     <option value="date">Sort by Date</option>
                     <option value="title">Sort by Title</option>
                 </select>
                 <div id="posts-container"></div>
              </div>';
    }
}
add_action('widgets_init', function() {
    register_widget('Post_Sort_Widget');
});

// JavaScript connection
function enqueue_post_sort_scripts() {
    wp_enqueue_script('post-sort-ajax', plugins_url('/post-sort.js', __FILE__), ['jquery'], null, true);
    wp_localize_script('post-sort-ajax', 'ajax_object', ['ajax_url' => admin_url('admin-ajax.php')]);
}
add_action('wp_enqueue_scripts', 'enqueue_post_sort_scripts');

// query to DB
function sort_posts_ajax() {
    $sort_option = $_POST['sort_option'];
    $args = [
        'post_type' => 'post', 
        'orderby' => $sort_option, 
        'order' => 'ASC'
    ];
    $posts = new WP_Query($args);

    if ($posts->have_posts()) {
        while ($posts->have_posts()) {
            $posts->the_post();
            echo '<div>' . get_the_title() . ' - ' . get_the_date() . '</div>';
        }
        wp_reset_postdata();
    }
    wp_die();
}
add_action('wp_ajax_sort_posts', 'sort_posts_ajax');
add_action('wp_ajax_nopriv_sort_posts', 'sort_posts_ajax');

