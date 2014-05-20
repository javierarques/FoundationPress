<?php

function codex_custom_init() {
    
    /**
     * PRODUCTOS
     */
    $args = array(
        'public' => true,
        'label'  => 'Productos',
        'rewrite' => array( 'slug' => 'productos' ),
        'supports' => array( 'title', 'editor', 'thumbnail', 'custom-fields')
    );
    register_post_type( 'producto', $args );
    
    /**
     * TIENDAS
     */
	$labels = array(
		'name'               => _x( 'Tiendas', 'post type general name', 'theme' ),
		'singular_name'      => _x( 'Tienda', 'post type singular name', 'theme' ),
		'menu_name'          => _x( 'Tiendas', 'admin menu', 'theme' ),
		'name_admin_bar'     => _x( 'Tienda', 'add new on admin bar', 'theme' ),
		'add_new'            => _x( 'Añadir nueva', 'book', 'theme' ),
		'add_new_item'       => __( 'Añadir New Tienda', 'theme' ),
		'new_item'           => __( 'Nueva Tienda', 'theme' ),
		'edit_item'          => __( 'Editar Tienda', 'theme' ),
		'view_item'          => __( 'Ver Tienda', 'theme' ),
		'all_items'          => __( 'Todas las Tiendas', 'theme' ),
		'search_items'       => __( 'Buscar Tiendas', 'theme' ),
		'parent_item_colon'  => __( 'Padre Tiendas:', 'theme' ),
		'not_found'          => __( 'No tiendas found.', 'theme' ),
		'not_found_in_trash' => __( 'No tiendas found in Trash.', 'theme' ),
	);

	$args = array(
		'labels'             => $labels,
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'tienda' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt' )
	);
    
    register_post_type( 'tienda', $args );
    
    
    /**
     *  Provincia taxonomy
     */
    
	register_taxonomy(
		'provincia',
		'tienda',
		array(
			'label' => __( 'Provincia', 'theme' ),
			'hierarchical' => true
		)
	);

}
//add_action( 'init', 'codex_custom_init' );