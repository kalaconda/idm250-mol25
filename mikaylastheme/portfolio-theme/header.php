<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php bloginfo('name'); ?> | <?php wp_title(); ?></title>
    <!--<link rel="stylesheet" href="wp-content/themes/portfolio-theme/style.css"> -->
    <!--<script src="https://use.fontawesome.com/20cbea2300.js"></script>-->
    <?php wp_head(); ?>
    </head>
<body <?php body_class(); ?>>
    <ul class="logotitle">
        <img src="<?php echo get_template_directory_uri() ?>/dist/images/websiteicon.png" class="websiteicon">
        <span class="display">Mikayla's Art & Multimedia</span>
    </ul>   
    <!-- nav -->
    <?php
        wp_nav_menu([
            'theme_location' => 'primary_nav'
        ]);
    ?>

    <!--
    <ul class="nav">
        <li><a href="index.php">Home</a></li>
            <li><a href="#">Pages</a></li>
            <li><a href="#">Projects</a></li>
            <li><a href="#">Contact</a></li>
    </ul> -->