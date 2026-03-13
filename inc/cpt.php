<?php


// Register Custom Post Type
function register_project_post_type() {
    $labels = array(
        'name'                  => _x('Projects', 'Post Type General Name', 'dvm-plugin'),
        'singular_name'         => _x('Project', 'Post Type Singular Name', 'dvm-plugin'),
        'menu_name'            => __('Projects', 'dvm-plugin'),
        'all_items'            => __('All Projects', 'dvm-plugin'),
        'add_new_item'         => __('Add New Project', 'dvm-plugin'),
        'add_new'              => __('Add New', 'dvm-plugin'),
        'edit_item'            => __('Edit Project', 'dvm-plugin'),
        'update_item'          => __('Update Project', 'dvm-plugin'),
        'search_items'         => __('Search Project', 'dvm-plugin'),
    );

    $args = array(
        'label'                 => __('Project', 'dvm-plugin'),
        'labels'                => $labels,
        'supports'              => ["title","editor","thumbnail","excerpt","author","comments","revisions"],
        'hierarchical'          => false,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_icon'             => 'dashicons-open-folder',
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'can_export'            => true,
        'has_archive'           => true,
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'capability_type'       => 'post',
        'show_in_rest'          => false,
    );

    register_post_type('project', $args);
}
add_action('init', 'register_project_post_type', 0);