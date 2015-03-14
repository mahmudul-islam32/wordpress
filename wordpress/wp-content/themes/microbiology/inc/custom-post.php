<?php
/* 	Custom Posts Types for Slideshow 
======================================= */

add_action( 'init', 'create_post_types' );
function create_post_types() { register_post_type( 'slides', array( 'labels' => array( 'name' => _x( 'Slides', 'post type general name' ), 'singular_name' => _x( 'Slide', 'post type singular name' ), 'add_new' => _x( 'Add New', 'Slide' ), 'add_new_item' => __( 'Add New Slide' ), 'edit_item' => __( 'Edit Slide' ), 'new_item' => __( 'New Slide' ), 'view_item' => __( 'View Slide' ), 'search_items' => __( 'Search Slides' ), 'not_found' => __( 'No Slides found' ), 'not_found_in_trash' => __( 'No Slides found in Trash' ), 'parent_item_colon' => '' ), 'public' => true, 'exclude_from_search' => true, 'supports' => array('title','thumbnail','editor'), ) ); }
?>