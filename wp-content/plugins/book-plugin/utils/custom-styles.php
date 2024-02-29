<?php 

function book_plugin_scripts() {
    global $post;

    if(is_singular('books')) {
        wp_enqueue_style( 'tailwind', plugin_dir_url( __FILE__ ) . '../dist/styles/style.css' );
        wp_enqueue_script('my-custom-script', plugin_dir_url( __FILE__ ) . '../dist/scripts/script.js', array(), '1.0', true);
    }

    if (is_post_type_archive('books')) {
        wp_enqueue_style( 'tailwind', plugin_dir_url( __FILE__ ) . '../dist/styles/style.css' );
        wp_enqueue_script('my-custom-archive-script', plugin_dir_url( __FILE__ ) . '../dist/scripts/script.js', array(), '1.0', true);
    }
}

add_action('wp_enqueue_scripts', 'book_plugin_scripts');
?>