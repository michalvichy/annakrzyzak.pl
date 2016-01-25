<?php
    add_action( 'init', 'ak_post_types_init' );
    function ak_post_types_init() {
        /**
         * Register a place post type.
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
            'menu_icon'          => 'dashicons-palmtree'
        );
        register_post_type( 'ak_achivments', $args );
    }
?>
