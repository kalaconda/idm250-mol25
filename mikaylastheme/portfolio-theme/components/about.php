<ul class="about">
    <li id="profileimg">
        <img src="<?php echo get_template_directory_uri() ?>/dist/images/profile.jpg" class="profilepic">
    </li>
    <?php if(get_field('about')): ?>
    <li id="aboutp">
        <?php if(get_field('heading')): ?>
            <h1><?php echo get_field('heading') ;?></h1>
        <?php endif; ?>
        <?php echo get_field('about') ;?> 
        <?php echo get_field('about_2') ;?> 
    </li>
    <?php endif; ?>
</ul>