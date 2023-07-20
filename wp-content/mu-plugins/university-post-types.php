<?php
function university_post_types() {
    register_post_type('event', array(
        'show_in_rest' => true, //使用现代编辑器
        'supports' => array(//支持经典编辑器
        'title',  
        'editor', 
        'excerpt',
       // 'custom-fields'
    ),
        'rewrite' => array('slug' => 'events'),
        'has_archive' => true,
        'public' => true,
        'labels' => array(
            'name' => 'Events',
            'add_new_item' => 'Add New Event',
            'edit_item' => 'Edit Event',
            'all_items' => 'ALL Events',
            'singular_name' => 'Event',
        ),
        'menu_icon' => 'dashicons-calendar'
    ));
}

add_action('init', 'university_post_types');