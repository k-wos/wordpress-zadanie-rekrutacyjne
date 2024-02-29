<?php 
add_filter('single_template', 'book_template');

function book_template($single) {
    global $post;

    if ($post->post_type == 'books') {
        if (file_exists(plugin_dir_path( __FILE__ ) . '/src/templates/single-book.php')) {
            return plugin_dir_path( __FILE__ ) . '/src/templates/single-book.php';
        }
    }

    return $single;
}
?>