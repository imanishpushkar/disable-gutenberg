<?php
/*
*Plugin Name: Disable Gutenberg- Light
 * Plugin URI: https://github.com/imanishpushkar/disable-gutenberg/
 * Description: A light weight plugin, which will replace Gutenberg Web builder with a classic WordPress editor
 * Version: 1.0.0
 * Author: Manish
 * Author URI: https://manishpushkar.in/
 * Text Domain: disable-gutenberg-light
*/
// Disable Gutenberg for pages and posts
add_filter('use_block_editor_for_post', '__return_false');

// Disable Gutenberg for widgets
add_filter('use_widgets_block_editor', '__return_false');

add_action('wp_enqueue_scripts', function () {
    // Remove CSS on the front end
    wp_dequeue_style('wp-block-library');

    // Remove Gutenberg theme
    wp_dequeue_style('wp-block-library-theme');

    // Remove inline global CSS on the front end
    wp_dequeue_style('global-styles');
}, 20);
