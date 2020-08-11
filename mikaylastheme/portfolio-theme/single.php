<!-- GET HEADER -->
<?php get_header(); ?>

        <?php while (have_posts()) : the_post(); ?> <!-- string to bring in posts -->
        <div class="single">
            <h2 class="singlehead"><?php the_title(); ?></h2> <!-- pulls post title -->
            <hr class="pinkdivide"></hr>
            <div class="postinfo">
            <p class="tagstxt"><i class="fa fa-tags" aria-hidden="true"></i><?php echo the_tags(); ?></p> <!-- pulls in tags -->
            <p class="datetxt"><?php the_date('n/j/Y') ?></p> <!-- pulls in the date -->
            </div>

   <?php endwhile; ?>
        <div class="body">
            <p id="bodytxt"><?php the_content(); ?></p> <!-- pulls in body content -->
        </div>
        <!-- categories -->
        <?php
        $categories = get_the_category();
        ?>
        <?php get_the_category() ?>
    </div>

<!-- GET FOOTER -->
<?php get_footer(); ?>