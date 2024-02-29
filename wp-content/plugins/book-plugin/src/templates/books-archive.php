<?php 
add_filter( 'single_template', 'books_single_template' );

function books_single_template($single) {
    global $post;

    if ($post->post_type == 'books') {
        if (file_exists(plugin_dir_path( __FILE__ ) . '/src/layouts/single-book.php')) {
            return plugin_dir_path( __FILE__ ) . '/src/layouts/single-book.php';
        }
    }

    return $single;
}
?>