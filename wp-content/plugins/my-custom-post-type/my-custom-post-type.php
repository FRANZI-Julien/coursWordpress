<?php
    
/*
 * Plugin Name: My Custom Post Type
 * Description: Mon super plugin pour ajouter un type de contenu
 * Version: 1.0.0
 * Auteur: julienF
 */

if (! defined('ABSPATH')) {
    die;
}
/**
 * Register the "book" custom post type
 */
function setup_post_type() {
	register_post_type( 'book', [
        'label' => 'livre',
        'public' => true, 
        'show_in_rest' => true,
        'menu_icon' => 'dashicons-book',
        'menu_position' => 5,
        'has_archive' => true,
    ] ); 
} 
add_action( 'init', 'setup_post_type' );

function my_custom_post_type_activate(){
    //Ajouter un type de contenu
    setup_post_type();
    //Regénérer les permaliens
    flush_rewrite_rules();
}

function my_custom_post_type_deactivate(){
    //Retirer un type de contenu
    unregister_post_type('book');
    //Regénérer les permaliens
    flush_rewrite_rules();
}

 register_activation_hook(
	__FILE__,
	'my_custom_post_type_activate'
);

register_activation_hook(
	__FILE__,
	'my_custom_post_type_deactivate'
);

