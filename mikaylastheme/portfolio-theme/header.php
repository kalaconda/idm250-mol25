<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> idm250 </title>
    <link rel="stylesheet" href="wp-content/themes/portfolio-theme/style.css"> <!-- Stylesheet -->
    <script src="https://use.fontawesome.com/20cbea2300.js"></script>
</head>
<body>
    <ul class="logotitle">
        <img src="wp-content/themes/portfolio-theme/images/websiteicon.png" class="websiteicon">
        <h1>Mikayla's Art & Multimedia</h1>
    </ul>   
    <!-- nav -->
    <?php
        wp_nav_menu([
            'theme_location' => 'primary_menu'
        ]);
    ?>

    <!--
    <ul class="nav">
        <li><a href="index.php">Home</a></li>
            <li><a href="#">Pages</a></li>
            <li><a href="#">Projects</a></li>
            <li><a href="#">Contact</a></li>
    </ul> -->