<!-- GET HEADER -->
<?php get_header(); ?>
  <?php while (have_posts()) : the_post(); ?>
    <div class="container split-sidebar">
        <!-- Main Content -->
        <div class="column column-main">
          <h1 class="post_title"><?php the_title(); ?></h1>
          <div class="page-builder">
            <?php the_content(); ?>
          </div>
        </div>
        
    </div>
  <?php endwhile; ?>
<!-- GET FOOTER -->
<?php get_footer(); ?>