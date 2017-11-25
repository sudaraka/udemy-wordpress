<?php

function university_post_types() {
  // Event Post Type
  register_post_type('event', array(
    'public' => true,
    'has_archive' => true,
    'rewrite' => array(
      'slug' => 'events'
    ),
    'labels' => array(
      'name' => 'Events',
      'singular_name' => 'Event',
      'add_new_item' => 'Add New Event',
      'edit_item' => 'Edit Event',
      'all_items' => 'All Events'
    ),
    'menu_icon' => 'dashicons-analytics',
    'supports' => array('title', 'editor', 'excerpt')
  ));

  // Campus Post Type
  register_post_type('campus', array(
    'public' => true,
    'has_archive' => true,
    'rewrite' => array(
      'slug' => 'campuses'
    ),
    'labels' => array(
      'name' => 'Campuses',
      'singular_name' => 'Campus',
      'add_new_item' => 'Add New Campus',
      'edit_item' => 'Edit Campus',
      'all_items' => 'All Campuses'
    ),
    'menu_icon' => 'dashicons-admin-multisite',
    'supports' => array('title', 'editor', 'excerpt')
  ));

  // Program Post Type
  register_post_type('program', array(
    'public' => true,
    'has_archive' => true,
    'rewrite' => array(
      'slug' => 'programs'
    ),
    'labels' => array(
      'name' => 'Programs',
      'singular_name' => 'Program',
      'add_new_item' => 'Add New Program',
      'edit_item' => 'Edit Program',
      'all_items' => 'All Programs'
    ),
    'menu_icon' => 'dashicons-carrot',
    'supports' => array('title')
  ));

  // Professor Post Type
  register_post_type('professor', array(
    'public' => true,
    'has_archive' => false,
    'labels' => array(
      'name' => 'Professors',
      'singular_name' => 'Professor',
      'add_new_item' => 'Add New Professor',
      'edit_item' => 'Edit Professor',
      'all_items' => 'All Professors'
    ),
    'menu_icon' => 'dashicons-businessman',
    'show_in_rest' => true,
    'supports' => array('title', 'editor', 'thumbnail')
  ));
}


add_action('init', 'university_post_types');
