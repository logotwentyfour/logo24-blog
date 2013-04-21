<?php
/*
For single blog posts; blog#show
*/
get_header(); ?>

  <section role="main">

    <?php while ( have_posts() ) : the_post(); ?>
      <article id="post-<?php the_ID(); ?>" class="single-article">

        <div class="d1-d4">

          <header class="entry-header d2-d4">
            <h1 class="entry-title"><?php the_title(); ?></h1>
          </header><!-- .entry-header -->

          <div class="entry-content">
            <?php the_content(); ?>
            
            <p class="author-bio">
              <?php echo get_the_author_meta('description'); ?>
            </p>
          </div><!-- .entry-content -->

        </div>

        <aside role="complementary" class="m-all tb-all d5">
          <div class="tb1">
            <ul class="nav-blog">
              <li class="nav-previous"><?php previous_post_link( '%link', __( '<span>&larr;</span> <i>Previous</i>', 'twentyeleven' ) ); ?></li>
              <li class="nav-next"><?php next_post_link( '%link', __( '<i>Next</i> <span>&rarr;</span>', 'twentyeleven' ) ); ?></li>
            </ul>
            
            <h3>The Blog of Logo24</h3>
            <p class="about-aside">Brought to you by the design-loving folks at <a href="http:logo24.com">Logo24</a>. We write about graphic design, web design and occasionally other things we like.</p>
            <p class="about-aside">
              <a href="http://feedburner.google.com/fb/a/mailverify?uri=logo24&amp;loc=en_US">Subscribe by email</a>
            </p>
          </div>
          
          <div class="tb2">
            <h3>Meta</h3>
            <ul>
              <li>
                Written by <a href="https://twitter.com/Paddy" target="_blank" title="Paddy’s tweets"><?php the_author() ?></a>
              </li>
              <li><?php read_time(); ?> reading time </li>
              <li>Published <time pubdate datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('F jS Y'); ?></time></li>
            </ul>
          </div>
          <?php if ( 'post' == get_post_type() ) : ?>
            <div class="tb3">
              <h3>Topics</h3>
              <?php echo get_the_category_list(); ?>
            </div>
          <?php endif; ?>
        </aside>

      </article>
  
      <section class="m-all tb2-tb3 d2-d4">
        <?php comments_template(); ?>
      </section>

    <?php endwhile; // end of the loop. ?>

  </section>

<?php get_footer(); ?>