<?php
/**
 * This file will be the main place to add custom php code into your theme
 *
 * @link - https://codex.wordpress.org/Functions_File_Explained
 * @return void
 */

/**
 * THEME REQUIREMENTS
 */
require get_template_directory() . '/lib/required.php';

/**
 * THEME INSTALIZATION
 */
require get_template_directory() . '/lib/setup.php';

/**
 * REGISTER CUSTOM POST TYPES
 */
require get_template_directory() . '/lib/custom-post-type.php';