<?php
    add_action( 'init', 'ak_post_types_init' );
    function ak_post_types_init() {
        /**
         * Register a achievement post type.
         */
        $labels_achivments = array(
            'name'               => 'Osiągnięcia',
            'singular_name'      => 'Osiągnięcie',
            'menu_name'          => 'Osiągnięcia',
            'name_admin_bar'     => 'Osiągnięcia',
            'add_new'            => 'Nowe osiągnięcie',
            'add_new_item'       => 'Dodaj nowe osiągnięcia',
            'new_item'           => 'Nowe siągnięcia',
            'edit_item'          => 'Edytuj osiągnięcia',
            'view_item'          => 'Zobacz osiągnięcia',
            'all_items'          => 'Wszystkie osiągnięcia',
            'search_items'       => 'Wyszukaj osiągnięcia',
            'parent_item_colon'  => 'Nadrzędne osiągnięcia:',
            'not_found'          => 'Nie znaleziono osiągnięcia',
            'not_found_in_trash' => 'Nie znaleziono osiągnięcia w koszu'
        );
        $args = array(
            'labels'             => $labels_achivments,
            'public'             => true,
            'publicly_queryable' => true,
            'show_ui'            => true,
            'show_in_menu'       => true,
            'query_var'          => true,
            'rewrite'            => array( 'slug' => 'achivment' ),
            'capability_type'    => 'post',
            'has_archive'        => true,
            'hierarchical'       => false,
            'menu_position'      => null,
            'supports'           => array('title', 'editor', 'thumbnail', 'excerpt'),
            'taxonomies'         => array('category'),
            'menu_icon'          => 'dashicons-awards'
        );
        register_post_type( 'ak_achivments', $args );


        /**
         * Register a gallery post type.
         */
        $labels_gallery = array(
            'name'               => 'Galeria',
            'singular_name'      => 'Galeria',
            'menu_name'          => 'Galeria',
            'name_admin_bar'     => 'Galeria',
            'add_new'            => 'Nowy album',
            'add_new_item'       => 'Dodaj nowy album',
            'new_item'           => 'Nowy album',
            'edit_item'          => 'Edytuj album',
            'view_item'          => 'Zobacz album',
            'all_items'          => 'Wszystkie albumy',
            'search_items'       => 'Wyszukaj albumy',
            'parent_item_colon'  => 'Nadrzędne albumy:',
            'not_found'          => 'Nie znaleziono albumu',
            'not_found_in_trash' => 'Nie znaleziono albumu w koszu'
        );

        $args = array(
            'labels'             => $labels_gallery,
            'public'             => true,
            'publicly_queryable' => true,
            'show_ui'            => true,
            'show_in_menu'       => true,
            'query_var'          => true,
            'rewrite'            => array( 'slug' => 'gallery' ),
            'capability_type'    => 'post',
            'has_archive'        => true,
            'hierarchical'       => false,
            'menu_position'      => null,
            'supports'           => array('title'),
            'menu_icon'          => 'dashicons-format-gallery'
        );

        register_post_type( 'ak_gallery', $args );
    }
?>
