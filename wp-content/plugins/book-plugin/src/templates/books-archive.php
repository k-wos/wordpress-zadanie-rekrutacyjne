<?php 
add_filter( 'archive_template', 'books_archive_template' );

function books_archive_template($archive) {
    global $post;

    if ($post->post_type == 'books') {
        if (file_exists(plugin_dir_path( __FILE__ ) . '/src/templates/archive-books.php')) {
            return plugin_dir_path( __FILE__ ) . '/src/templates/archive-books.php';
        }
    }

    return $archive;
}

?>