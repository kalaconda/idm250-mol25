<?php
//die('setup php is working');
// CHECK SERVER PHP VERSION

if (version_compare('7.4.2', phpversion(), '<')) {
    die ('You must be using PHP 7.4.2 or greater.');
}

// CHECK SERVER WP VERSION

if (version_compare($GLOBALS['wp_version'], '5.4.2', '<')) {
    die('WP theme only works in WordPress 5.4.2 or later. Please upgrade your wordpress');
}

?>