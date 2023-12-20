<?php 
// Exemplo CP
    $labels = array(
        'name'          => _x('Custom Posts', 'post type general name'),
        'singular_name' => _x('Custom Post', 'post type singular name'),
        'menu_name'     => 'Exemplo CP',
    );
    $args = array(
        'labels'            => $labels,
        'description'       => 'My custom post type',
        'public'            => true,
        'show_in_nav_menus' => true,
        'supports' => array('title','editor','author','revisions', 'thumbnail'),
        'menu_icon' => 'dashicons-id-alt',
    );
    register_post_type('custom post', $args);
// Produtos
    $labels2 = array(
        'name'          => _x('Produtos', 'post type general name'),
        'singular_name' => _x('Produto', 'post type singular name'),
        'menu_name'     => 'Produto',
    );
    $args2 = array(
        'labels'            => $labels2,
        'description'       => 'Custom Post para produtos',
        'public'            => true,
        'show_in_nav_menus' => true,
        'supports' => array('title','editor','author','revisions', 'thumbnail'),
        'menu_icon' => 'dashicons-id-alt',
    );
    register_post_type('produto', $args2);
