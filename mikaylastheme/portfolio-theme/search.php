<?php get_header(); ?>
<main class="search-content">
  <!-- Search -->
  <!-- Search -->
  <section>
    <form class="search-form" action="/" method="get">
      <input type="text" placeholder="Search..." name="s" id="searchField" value="<?php the_search_query(); ?>">
      <input type="submit" id="searchbtn"value="&#xf002;">
    </form>
  </section>

  <!-- Results -->
  <section class="results">
    <?php if (have_posts()): ?>
      <ul">
        <?php while (have_posts()) : the_post(); ?>
          <li class="searchitem">
                <h1 class="post_title"><?php the_title(); ?></h1>
                <a class="btn media-block__cta" href="<?php echo the_permalink();?>">View</a>
          </li>
        <?php endwhile; ?>
      </ul>

  <!-- 0 Results -->
    <?php else: ?>
      <h2>Based on your search, there are 0 results</h2>
    <?php endif; ?>
  </section>

</main>
  
  <!-- GET FOOTER -->
<?php get_footer(); ?>