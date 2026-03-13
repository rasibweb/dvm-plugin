<?php


// Register Custom Taxonomy
function register_project_industry_taxonomy() {
    $labels = array(
        'name'                       => _x('Industries', 'Taxonomy General Name', 'dvm-plugin'),
        'singular_name'              => _x('Industry', 'Taxonomy Singular Name', 'dvm-plugin'),
        'menu_name'                  => __('Industries', 'dvm-plugin'),
        'all_items'                  => __('All Industries', 'dvm-plugin'),
        'parent_item'                => __('Parent Industry', 'dvm-plugin'),
        'parent_item_colon'          => __('Parent Industry:', 'dvm-plugin'),
        'new_item_name'              => __('New Industry Name', 'dvm-plugin'),
        'add_new_item'               => __('Add New Industry', 'dvm-plugin'),
        'edit_item'                  => __('Edit Industry', 'dvm-plugin'),
        'update_item'                => __('Update Industry', 'dvm-plugin'),
        'view_item'                  => __('View Industry', 'dvm-plugin'),
        'search_items'               => __('Search Industries', 'dvm-plugin'),
    );

    $args = array(
        'labels'                     => $labels,
        'hierarchical'               => true,
        'public'                     => true,
        'publicly_queryable'         => true,
        'show_ui'                    => true,
        'show_in_menu'               => true,
        'show_in_nav_menus'          => true,
        'show_in_rest'               => true,
        'rest_base'                  => 'project_industry',
        'show_tagcloud'              => true,
        'show_in_quick_edit'         => true,
        'show_admin_column'          => true,
    );

    register_taxonomy('project_industry', ["project"], $args);
}
add_action('init', 'register_project_industry_taxonomy', 0);


// Register Custom Taxonomy
function register_project_technology_taxonomy() {
    $labels = array(
        'name'                       => _x('Technologies', 'Taxonomy General Name', 'dvm-plugin'),
        'singular_name'              => _x('Technology', 'Taxonomy Singular Name', 'dvm-plugin'),
        'menu_name'                  => __('Technologies', 'dvm-plugin'),
        'all_items'                  => __('All Technologies', 'dvm-plugin'),
        'parent_item'                => __('Parent Technology', 'dvm-plugin'),
        'parent_item_colon'          => __('Parent Technology:', 'dvm-plugin'),
        'new_item_name'              => __('New Technology Name', 'dvm-plugin'),
        'add_new_item'               => __('Add New Technology', 'dvm-plugin'),
        'edit_item'                  => __('Edit Technology', 'dvm-plugin'),
        'update_item'                => __('Update Technology', 'dvm-plugin'),
        'view_item'                  => __('View Technology', 'dvm-plugin'),
        'search_items'               => __('Search Technologies', 'dvm-plugin'),
    );

    $args = array(
        'labels'                     => $labels,
        'hierarchical'               => true,
        'public'                     => true,
        'publicly_queryable'         => true,
        'show_ui'                    => true,
        'show_in_menu'               => true,
        'show_in_nav_menus'          => true,
        'show_in_rest'               => true,
        'rest_base'                  => 'project_technology',
        'show_tagcloud'              => true,
        'show_in_quick_edit'         => true,
        'show_admin_column'          => true,
    );

    register_taxonomy('project_technology', ["project"], $args);
}
add_action('init', 'register_project_technology_taxonomy', 0);