<?php

namespace Squarely\Feature;
//custom post type
function feature_type() {
	register_post_type( 'feature',
		array(
			'labels' => array(
				'name' =>  'Feature' ,
				'singular_name' => 'Feature' ,
				'add_new' => 'Add New',
				'all_items' => 'All Features',
				'add_new_item' =>  'Add New Feature' ,
				'edit_item' => 'Edit Feature' ,
				'new_item' =>  'New Feature' ,
				'view_item' => 'View Feature' ,
				'search_items' =>  'Search Features' ,
				'not_found_in_trash' =>'No Feature found in Trash',
				'view_item' => 'View Feature',
			),
			'hierarchical'          => false,
			'public'                => true,
			'show_ui'               => true,
			'show_in_menu'          => true,
			'menu_position'         => 5,
			'menu_icon'             => 'dashicons-admin-appearance',
			'has_archive' 			=> false,
			'exclude_from_search'   => true,
			'publicly_queryable'    => true,
			'rewrite' => array('slug' => 'features'),
			'supports' => array(
				'title',
				'editor',
				'thumbnail',
				'revisions',
				'custom-fields',
				'page-attributes',
				'post-formats'
			),
		)
	);
}

add_action( 'init', __NAMESPACE__ . '\\feature_type', 0 );

//register taxonomy

function create_feature_taxonomies()
{
  // Add new taxonomy, make it hierarchical (like categories)
  $labels = array(
    'name' =>  'Feature Categories',
    'singular_name' => 'Feature Category',
    'search_items' =>  'Search Feature Categories',
    'popular_items' => 'Popular Feature Categories' ,
    'all_items' =>  'All Feature Categories' ,
    'parent_item' => 'Parent Feature Category',
    'parent_item_colon' => 'Parent Feature Category:' ,
    'edit_item' => 'Edit Feature Category',
    'update_item' => 'Update Feature Category' ,
    'add_new_item' =>  'Add New Feature Category' ,
    'new_item_name' => 'New Feature Category Name' ,
  );
  register_taxonomy('feature-category','feature', array(
    'hierarchical' => true,
    'labels' => $labels,
    'show_ui' => true,
    'query_var' => true,
    'rewrite' => array( 'slug' => 'feature-category' ),
  ));
}

add_action( 'init', __NAMESPACE__ . '\\create_feature_taxonomies',0 );