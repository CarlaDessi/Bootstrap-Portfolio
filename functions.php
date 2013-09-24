<?php


	
	// Add RSS links to <head> section
	automatic_feed_links();
	
	add_theme_support('post-thumbnails');
	
	// Load jQuery
	if ( !is_admin() ) {
	   wp_deregister_script('jquery');
	   wp_register_script('jquery', ("http://ajax.googleapis.com/ajax/libs/jquery/1.4.1/jquery.min.js"), false);
	   wp_enqueue_script('jquery');
	}
	
	// Clean up the <head>
	function removeHeadLinks() {
    	remove_action('wp_head', 'rsd_link');
    	remove_action('wp_head', 'wlwmanifest_link');
    }
    add_action('init', 'removeHeadLinks');
    remove_action('wp_head', 'wp_generator');
    
    if (function_exists('register_sidebar')) {
    	register_sidebar(array(
    		'name' => 'Sidebar Widgets',
    		'id'   => 'sidebar-widgets',
    		'description'   => 'These are widgets for the sidebar.',
    		'before_widget' => '<div id="%1$s" class="widget %2$s">',
    		'after_widget'  => '</div>',
    		'before_title'  => '<h2>',
    		'after_title'   => '</h2>'
    	));
    }
	
	// Portfolio post type
	
	add_action( 'init', 'create_post_type' );
	
function create_post_type() {
        $args = array();
	register_post_type( 'post_type_name', $args);
}

add_action( 'init', 'register_cpt_portfolio' );
 
function register_cpt_portfolio() {
 
    $labels = array( 
  	'name'               => __( 'Portfolio', 'text_domain' ),
		
    );
 
    $args = array( 
		'labels'              => $labels,
		'hierarchical'        => true,
		'description'         => 'description',
		'taxonomies'          => array( 'category' ),
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'menu_position'       => 5,
		//'menu_icon'         => '',
		'show_in_nav_menus'   => true,
		'publicly_queryable'  => true,
		'exclude_from_search' => false,
		'has_archive'         => true,
		'query_var'           => true,
		'can_export'          => true,
		'rewrite'             => true,
		'capability_type'     => 'post', 
		'supports'            => array( 
									'title', 'editor', 'author', 'thumbnail', 
									'custom-fields', 'trackbacks', 'comments', 
									'revisions', 'page-attributes', 'post-formats'
								),
    );
 
    register_post_type( 'portfolio', $args );
}

// Creates Slides post type
register_post_type('slides', array(
'label' => 'Slides',
'public' => true,
'show_ui' => true,
'capability_type' => 'post',
'hierarchical' => false,
'rewrite' => array('slug' => 'slides'),
'query_var' => true,
'supports' => array(
'title',
'editor',
'excerpt',
'revisions',
'thumbnail',
'author',
'page-attributes',)
) );
	



?>
