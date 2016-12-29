<?php 	
//--------------------------  E V E N T   P O S T   -----------------------------
function service_post_type() {
	$labels = array(
		'name'                  => _x( 'שירותים', 'Post Type General Name', 'arbel' ),
		'singular_name'         => _x( 'שירות', 'Post Type Singular Name', 'arbel' ),
		'menu_name'             => __( 'שירותים', 'arbel' ),
		'name_admin_bar'        => __( 'שירותים', 'arbel' ),
		'archives'              => __( 'Item Archives', 'arbel' ),
		'parent_item_colon'     => __( 'Parent Item:', 'arbel' ),
		'all_items'             => __( 'כל השירותים', 'arbel' ),
		'add_new_item'          => __( 'Add New Item', 'arbel' ),
		'add_new'               => __( 'שירות חדש', 'arbel' ),
		'new_item'              => __( 'New Item', 'arbel' ),
		'edit_item'             => __( 'Edit Item', 'arbel' ),
		'update_item'           => __( 'Update Item', 'arbel' ),
		'view_item'             => __( 'View Item', 'arbel' ),
		'search_items'          => __( 'Search Item', 'arbel' ),
		'not_found'             => __( 'Not found', 'arbel' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'arbel' ),
		'featured_image'        => __( 'Featured Image', 'arbel' ),
		'set_featured_image'    => __( 'Set featured image', 'arbel' ),
		'remove_featured_image' => __( 'Remove featured image', 'arbel' ),
		'use_featured_image'    => __( 'Use as featured image', 'arbel' ),
		'insert_into_item'      => __( 'Insert into item', 'arbel' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'arbel' ),
		'items_list'            => __( 'Items list', 'arbel' ),
		'items_list_navigation' => __( 'Items list navigation', 'arbel' ),
		'filter_items_list'     => __( 'Filter items list', 'arbel' ),
	);
	$args = array(
		'label'                 => __( 'Service', 'arbel' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'excerpt', 'thumbnail'),
		'taxonomies'            => array( 'genre','post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
        'menu_icon'             => 'dashicons-video-alt',
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'service', $args );
}
add_action( 'init', 'service_post_type', 0 );


function gallery_post_type() {
	$labels = array(
		'name'                  => _x( 'גלריות', 'Post Type General Name', 'arbel' ),
		'singular_name'         => _x( 'גלריה', 'Post Type Singular Name', 'arbel' ),
		'menu_name'             => __( 'גלריות', 'arbel' ),
		'name_admin_bar'        => __( 'גלריות', 'arbel' ),
		'archives'              => __( 'Item Archives', 'arbel' ),
		'parent_item_colon'     => __( 'Parent Item:', 'arbel' ),
		'all_items'             => __( 'כל הגלריות', 'arbel' ),
		'add_new_item'          => __( 'Add New Item', 'arbel' ),
		'add_new'               => __( 'גלריה חדשה', 'arbel' ),
		'new_item'              => __( 'New Item', 'arbel' ),
		'edit_item'             => __( 'Edit Item', 'arbel' ),
		'update_item'           => __( 'Update Item', 'arbel' ),
		'view_item'             => __( 'View Item', 'arbel' ),
		'search_items'          => __( 'Search Item', 'arbel' ),
		'not_found'             => __( 'Not found', 'arbel' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'arbel' ),
		'featured_image'        => __( 'Featured Image', 'arbel' ),
		'set_featured_image'    => __( 'Set featured image', 'arbel' ),
		'remove_featured_image' => __( 'Remove featured image', 'arbel' ),
		'use_featured_image'    => __( 'Use as featured image', 'arbel' ),
		'insert_into_item'      => __( 'Insert into item', 'arbel' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'arbel' ),
		'items_list'            => __( 'Items list', 'arbel' ),
		'items_list_navigation' => __( 'Items list navigation', 'arbel' ),
		'filter_items_list'     => __( 'Filter items list', 'arbel' ),
	);
	$args = array(
		'label'                 => __( 'Gallery', 'arbel' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'excerpt', 'thumbnail'),
		'taxonomies'            => array( 'genre','post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
        'menu_icon'             => 'dashicons-format-gallery',
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'gallery', $args );
}
add_action( 'init', 'gallery_post_type', 0 );



//Register Genres Taxonomy
function service_taxonomy() {
	$labels = array(
		'name'                       => _x( 'קטגוריות ', 'Taxonomy General Name', 'kahana' ),
		'singular_name'              => _x( 'קטגוריה', 'Taxonomy Singular Name', 'kahana' ),
		'menu_name'                  => __( 'קטגוריות', 'kahana' ),
		'all_items'                  => __( 'All Items', 'kahana' ),
		'parent_item'                => __( 'Parent Item', 'kahana' ),
		'parent_item_colon'          => __( 'Parent Item:', 'kahana' ),
		'new_item_name'              => __( 'New Item Name', 'kahana' ),
		'add_new_item'               => __( 'Add New Item', 'kahana' ),
		'edit_item'                  => __( 'Edit Item', 'kahana' ),
		'update_item'                => __( 'Update Item', 'kahana' ),
		'view_item'                  => __( 'View Item', 'kahana' ),
		'separate_items_with_commas' => __( 'Separate items with commas', 'kahana' ),
		'add_or_remove_items'        => __( 'Add or remove items', 'kahana' ),
		'choose_from_most_used'      => __( 'Choose from the most used', 'kahana' ),
		'popular_items'              => __( 'Popular Items', 'kahana' ),
		'search_items'               => __( 'Search Items', 'kahana' ),
		'not_found'                  => __( 'Not Found', 'kahana' ),
		'no_terms'                   => __( 'No items', 'kahana' ),
		'items_list'                 => __( 'Items list', 'kahana' ),
		'items_list_navigation'      => __( 'Items list navigation', 'kahana' ),
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => true,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
	);
	register_taxonomy( 'project_cat', array( 'project' ), $args );
}
add_action( 'init', 'service_taxonomy', 0 );
?>
