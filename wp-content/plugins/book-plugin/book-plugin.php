<?php
/* 
Plugin Name: Book Plugin
Plugin URI: localhost
Description: Wtyczka stworzona na potrzeby zadania rekrutacyjnego
Version: 1.0
Author: Kacper Woś
Author URI: localhost
*/

include_once (plugin_dir_path( __FILE__ ) . 'includes/books.php');
include_once (plugin_dir_path( __FILE__ ) . 'includes/add-acf-fields.php');
include_once (plugin_dir_path(__FILE__) . 'src/templates/single-book.php');
?>

