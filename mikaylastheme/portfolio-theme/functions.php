<?php
/**
 * This file will be the main place to add custom php code into your theme
 *
 * @link - https://codex.wordpress.org/Functions_File_Explained
 * @return void
 */

// CHECK SERVER PHP VERSION

if (version_compare('7.4.2', phpversion(), '<')) {
    die ('You must be using PHP 7.4.2 or greater.');
}

//echo '<pre>';
//    var_dump($GLOBALS['wp_version']);
//echo '</pre>';

//die;

// CHECK SERVER WP VERSION

if (version_compare($GLOBALS['wp_version'], '5.4.2', '<')) {
    die('WP theme only works in WordPress 5.4.2 or later. Please upgrade your wordpress');
}

/*
 * Enable support for Post Thumbnails on posts and pages.
 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
*/
function add_post_thumbnails_support() {
    add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'add_post_thumbnails_support');

/**
 * Include any styles into the site the proper way
 *
 * @link https://developer.wordpress.org/reference/functions/wp_enqueue_style/
 */
function include_css_files() {
    // Example of including an external link
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap');
    // Example of including a style local to your theme root
    // https://developer.wordpress.org/reference/functions/wp_enqueue_style/
    wp_enqueue_style('idm250-css', get_template_directory_uri() . '/dist/css/style.css');
}

// When WP performs this action, call our function
add_action('wp_enqueue_scripts', 'include_css_files');

/**
 * Include any scripts into the site the proper way
 *
 * @link https://developer.wordpress.org/reference/functions/wp_enqueue_style/
 */
function include_js_files() {
    wp_enqueue_script(
        'idm250-js', 
        get_template_directory_uri() . '/dist/scripts/app.js', [], 
        false, 
        true
    );

    wp_enqueue_script(
        'fontawesome', 
        "https://use.fontawesome.com/20cbea2300.js", [],
        false, 
        false
    );
}

// When WP performs this action, call our function
add_action('wp_enqueue_scripts', 'include_js_files');

/** 
* @link //https://developer.wordpress.org/reference/functions/register_nav_menus/
* @return void
**/

function register_theme_navigation() {
    
    register_nav_menus([
        'primary_nav' => 'Primary Menu'
    ]);
}

add_action('after_setup_theme','register_theme_navigation');