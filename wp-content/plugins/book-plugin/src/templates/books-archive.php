<?php 
add_filter( 'archive_template', 'books_archive_template' );

function books_archive_template($archive) {
    global $post;

    if ($post->post_type == 'books') {
        if (file_exists(plugin_dir_path( __FILE__ ) . '../layouts/books-archive.php')) {
            return plugin_dir_path( __FILE__ ) . '../layouts/books-archive.php';
        }
    }

    return $archive;
}
?>