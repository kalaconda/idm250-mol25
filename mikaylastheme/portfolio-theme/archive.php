  <?php
/**
 * The template for displaying archive pages.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 */
?>
<!-- GET HEADER -->
<?php get_header(); ?>

<h5> You searched: "<?php echo single_term_title();?>"</h5>

<?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>
    <div class="posts">
        <div class="card" id="card1">
            <div class="overlay"></div>
                <a href="<?php the_permalink(); ?>">
                    <div class="thumbnail">
                        <?php the_post_thumbnail(); ?>
                    </div>
                    <div class="content">
                        <h4><?php the_title();?></h4>
                    <h6><p class="tagstxt"><i class="fa fa-tags" aria-hidden="true"></i><?php echo the_tags(); ?></p> <!-- pulls in tags --></h6>
                </a>
                </div>
        </div>
</div>

        <?php endwhile; ?>


<?php else: ?>
<h2>Sorry no posts found</h2>
<?php endif; ?>

<!-- GET FOOTER -->
<?php get_footer(); ?>