<?php

function arch_custom_post(){
    $project_label = array(
        'name'     => __('Projects', 'textdomain'),
        'singular_name' => __('Project', 'textdomain'),
        'add_new'    => __('Add Project', 'textdomain'),
        'edit_item'   => __('Edit Project', 'textdomain'),
        'add_new_item' => __('Add New Project', 'textdomain'),
        'all_items'   => __('Projects', 'textdomain'),
    );
    $project = array(
        'labels' => $project_label,
        'public' => true,
        'capability_type' => 'post',
        'show_ui' => true,
        'supports' => array('title', 'editor','thumbnail')
    );
    register_post_type('projects', $project);




    $service_label = array(
        'name'     => __('Services', 'textdomain'),
        'singular_name' => __('Service', 'textdomain'),
        'add_new'    => __('Add Service', 'textdomain'),
        'edit_item'   => __('Edit Service', 'textdomain'),
        'add_new_item' => __('Add New Service', 'textdomain'),
        'all_items'   => __('Services', 'textdomain'),
    );
    $service = array(
        'labels' => $service_label,
        'public' => true,
        'capability_type' => 'post',
        'show_ui' => true,
        'supports' => array('title', 'editor')
    );
    register_post_type('services', $service);



    $latest_label = array(
        'name'     => __('Latests', 'textdomain'),
        'singular_name' => __('Latest', 'textdomain'),
        'add_new'    => __('Add Latest', 'textdomain'),
        'edit_item'   => __('Edit latest', 'textdomain'),
        'add_new_item' => __('Add New latest', 'textdomain'),
        'all_items'   => __('Latests', 'textdomain'),
    );
    $latest = array(
        'labels' => $latest_label,
        'public' => true,
        'capability_type' => 'post',
        'show_ui' => true,
        'supports' => array('title', 'editor', 'excerpt', 'author', 'thumbnail')
    );
    register_post_type('latests', $latest);




    $recent_label = array(
        'name'     => __('Recents', 'textdomain'),
        'singular_name' => __('Recent', 'textdomain'),
        'add_new'    => __('Add recent', 'textdomain'),
        'edit_item'   => __('Edit recent', 'textdomain'),
        'add_new_item' => __('Add New recent', 'textdomain'),
        'all_items'   => __('Recents', 'textdomain'),
    );
    $recent = array(
        'labels' => $recent_label,
        'public' => true,
        'capability_type' => 'post',
        'show_ui' => true,
        'supports' => array('title', 'editor', 'thumbnail')
    );
    register_post_type('recents', $recent);


}
add_action('init', 'arch_custom_post');
