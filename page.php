<?php get_header();

// The default page template is full width no sidebar.

?>
  
  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    
    <section role="main">
      <header>
        <h1><?php the_title(); ?></h1>
      </header>
      <?php the_content(); ?>
    </section> <!-- end article section -->

  <?php endwhile; else: ?>
    <p>Whatever you were trying, it didn't work...</p>
  <?php endif; ?>

<?php get_footer(); ?>