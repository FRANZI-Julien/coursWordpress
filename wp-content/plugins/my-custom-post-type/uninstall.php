<?php

if ( ! defined( 'WP_UNINSTALL_PLUGIN' ) ) {
    die;
}

// Récupérer toutes les publications de ce type dans la BDD
$books = get_post(['post_type' => 'book']);

// Les supprimer
foreach($books as $book){
    wp_delete_post($book->ID,true);
}