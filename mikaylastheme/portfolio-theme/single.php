<!-- GET HEADER -->
<?php get_header(); ?>
        <?php while (have_posts()) : the_post(); ?> <!-- string to bring in posts -->
        <div class="single">
            <h1 class="singlehead"><?php the_title(); ?></h1> <!-- pulls post title -->
            <hr class="pinkdivide"></hr>
            <div class="postinfo">
            <p class="catxt"><?php the_category(); ?></p> |
            <p class="tagstxt"><i class="fa fa-tags" aria-hidden="true"></i><?php echo the_tags(); ?></p> |<!-- pulls in tags -->
            <p class="datetxt"><?php the_date('n/j/Y') ?></p> <!-- pulls in the date -->
        </div>
        <div class="body">
            <?php the_content(); ?> <!-- pulls in body content -->
        </div>
    </div>
    <?php endwhile; ?>
<!-- GET FOOTER -->
<?php get_footer(); ?>