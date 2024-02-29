<?php

function create_books_post_type() {
    register_post_type( 'books', array(
        'labels' => array(
            'name' => __('Books'),
            'singular_name' => __('Book'),
            'add_new' => __('Dodaj nową książkę'),
        ),
        'public' => true,
        'has_archive' => true,
    ));
}

add_action( 'init', 'create_books_post_type');


?>

