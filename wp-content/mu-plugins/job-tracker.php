<?php
/**
 * Creates a Job Tracker post type with two taxonomies
 *
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

/**
 * Register a custom post type called "job tracker".
 *
 * @see get_post_type_labels() for label keys.
 */
function itsm_job_tracker_init() {
    $labels = array(
        'name'                  => _x( 'Job Trackers', 'Post type general name', 'jobtracker' ),
        'singular_name'         => _x( 'Job Tracker', 'Post type singular name', 'jobtracker' ),
        'menu_name'             => _x( 'Job Tracker', 'Admin Menu text', 'jobtracker' ),
        'name_admin_bar'        => _x( 'Job Tracker', 'Add New on Toolbar', 'jobtracker' ),
        'add_new'               => __( 'Add New', 'jobtracker' ),
        'add_new_item'          => __( 'Add New Job Tracker', 'jobtracker' ),
        'new_item'              => __( 'New Job Tracker', 'jobtracker' ),
        'edit_item'             => __( 'Edit Job Tracker', 'jobtracker' ),
        'view_item'             => __( 'View Job Tracker', 'jobtracker' ),
        'all_items'             => __( 'All Job Trackers', 'jobtracker' ),
        'search_items'          => __( 'Search Job Trackers', 'jobtracker' ),
        'parent_item_colon'     => __( 'Parent Job Trackers:', 'jobtracker' ),
        'not_found'             => __( 'No job trackers found.', 'jobtracker' ),
        'not_found_in_trash'    => __( 'No job trackers found in Trash.', 'jobtracker' ),
        'featured_image'        => _x( 'Job Tracker Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'jobtracker' ),
        'set_featured_image'    => _x( 'Set job tracker image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'jobtracker' ),
        'remove_featured_image' => _x( 'Remove job tracker image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'jobtracker' ),
        'use_featured_image'    => _x( 'Use as job tracker image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'jobtracker' ),
        'archives'              => _x( 'Job Tracker archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'jobtracker' ),
        'insert_into_item'      => _x( 'Insert into job tracker', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'jobtracker' ),
        'uploaded_to_this_item' => _x( 'Uploaded to this job tracker', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'jobtracker' ),
        'filter_items_list'     => _x( 'Filter job trackers list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'jobtracker' ),
        'items_list_navigation' => _x( 'Job Trackers list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'jobtracker' ),
        'items_list'            => _x( 'Job Trackers list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'jobtracker' ),
    );
 
    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'menu_icon'          => 'dashicons-calendar-alt',
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'job-tracker' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'page-attributes' ),
    );
 
    register_post_type( 'job_tracker', $args );
}
 
add_action( 'init', 'itsm_job_tracker_init' );

/**
 * Create two taxonomies, genres and job tracker for the post type "job tracker".
 *
 * @see register_post_type() for registering custom post types.
 */
function itsm_create_job_tracker_taxonomies() {
    // Add new taxonomy, make it hierarchical (like categories)
    $labels = array(
        'name'              => _x( 'Clients', 'taxonomy general name', 'jobtracker' ),
        'singular_name'     => _x( 'Client', 'taxonomy singular name', 'jobtracker' ),
        'search_items'      => __( 'Search Clients', 'jobtracker' ),
        'all_items'         => __( 'All Clients', 'jobtracker' ),
        'parent_item'       => __( 'Parent Client', 'jobtracker' ),
        'parent_item_colon' => __( 'Parent Client:', 'jobtracker' ),
        'edit_item'         => __( 'Edit Client', 'jobtracker' ),
        'update_item'       => __( 'Update Client', 'jobtracker' ),
        'add_new_item'      => __( 'Add New Client', 'jobtracker' ),
        'new_item_name'     => __( 'New Client Name', 'jobtracker' ),
        'menu_name'         => __( 'Client', 'jobtracker' ),
    );
 
    $args = array(
        'hierarchical'      => true,
        'labels'            => $labels,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => array( 'slug' => 'client' ),
    );
 
    register_taxonomy( 'client', array( 'job_tracker' ), $args );
 
    unset( $args );
    unset( $labels );
 
    // Add new taxonomy, NOT hierarchical (like tags)
    $labels = array(
        'name'                       => _x( 'Tasks', 'taxonomy general name', 'jobtracker' ),
        'singular_name'              => _x( 'Task', 'taxonomy singular name', 'jobtracker' ),
        'search_items'               => __( 'Search Tasks', 'jobtracker' ),
        'popular_items'              => __( 'Popular Tasks', 'jobtracker' ),
        'all_items'                  => __( 'All Tasks', 'jobtracker' ),
        'parent_item'                => null,
        'parent_item_colon'          => null,
        'edit_item'                  => __( 'Edit Task', 'jobtracker' ),
        'update_item'                => __( 'Update Task', 'jobtracker' ),
        'add_new_item'               => __( 'Add New Task', 'jobtracker' ),
        'new_item_name'              => __( 'New Task Name', 'jobtracker' ),
        'separate_items_with_commas' => __( 'Separate tasks with commas', 'jobtracker' ),
        'add_or_remove_items'        => __( 'Add or remove task', 'jobtracker' ),
        'choose_from_most_used'      => __( 'Choose from the most used task', 'jobtracker' ),
        'not_found'                  => __( 'No task found.', 'jobtracker' ),
        'menu_name'                  => __( 'Tasks', 'jobtracker' ),
    );
 
    $args = array(
        'hierarchical'          => false,
        'labels'                => $labels,
        'show_ui'               => true,
        'show_admin_column'     => true,
        'update_count_callback' => '_update_post_term_count',
        'query_var'             => true,
        'rewrite'               => array( 'slug' => 'task' ),
    );
 
    register_taxonomy( 'task', 'job_tracker', $args );
}
// hook into the init action and call create_book_taxonomies when it fires
add_action( 'init', 'itsm_create_job_tracker_taxonomies', 0 );