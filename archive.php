<?php get_header(); ?>
  
<section role="main">
  <header>
    <?php if (is_category()) { ?>
	    <h1 class="archive-title h2">
		    <span><?php _e("Posts Categorized:", "bonestheme"); ?></span> <?php single_cat_title(); ?>
    	</h1>
    
    <?php } elseif (is_tag()) { ?> 
	    <h1 class="archive-title h2">
		    <span><?php _e("Posts Tagged:", "bonestheme"); ?></span> <?php single_tag_title(); ?>
	    </h1>
    
    <?php } elseif (is_author()) { 
    	global $post;
    	$author_id = $post->post_author;
    ?>
	    <h1 class="archive-title h2">

	    	<span><?php _e("Posts By:", "bonestheme"); ?></span> <?php echo get_the_author_meta('display_name', $author_id); ?>

	    </h1>
    <?php } elseif (is_day()) { ?>
	    <h1 class="archive-title h2">
				<span><?php _e("Daily Archives:", "bonestheme"); ?></span> <?php the_time('l, F j, Y'); ?>
	    </h1>

		<?php } elseif (is_month()) { ?>
		    <h1 class="archive-title h2">
  	    	<span><?php _e("Monthly Archives:", "bonestheme"); ?></span> <?php the_time('F Y'); ?>
        </h1>

    <?php } elseif (is_year()) { ?>
        <h1 class="archive-title h2">
    	    <span><?php _e("Yearly Archives:", "bonestheme"); ?></span> <?php the_time('Y'); ?>
        </h1>
    <?php } ?>
  </header>

  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <article id="post-<?php the_ID(); ?>" class="index-article" role="article">

      <div class="m-all t-all d1-d4">

        <header class="entry-header t2 d2-d4">
          <a href='<?php the_permalink() ?>'
          rel='bookmark' title='<?php the_title(); ?>'>
            <h1 class="entry-title"><?php the_title(); ?></h1>
          </a>
        </header><!-- .entry-header -->

        <div class="sidenotes m-all t1 d1">
          <a href='<?php the_permalink() ?>'
          rel='bookmark' title='<?php the_title(); ?>'>
            <?php the_post_thumbnail( 'blog-index' ); ?>
          </a>
        </div>

        <div class="entry-content m-all t2 d2-d4">
          <?php the_excerpt(); ?>
        </div><!-- .entry-content -->

      </div>

      <aside role="complementary" class="m-all tb-all d5">
        <div class="tb1">
        <h3>Author</h3>
          <ul>
            <li>
              <a href="https://twitter.com/Paddy" target="_blank" title="Paddy’s tweets"><?php the_author() ?></a>
            </li>
          </ul>
        </div>

        <div class="tb2">
          <h3>Reading time</h3>
          <ul>
            <li><?php read_time(); ?></li>
          </ul>
        </div>

        <div class="tb3">
          <h3>Published</h3>
          <ul>
            <li>
              <time pubdate datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('F jS Y'); ?></time>
              </li>
          </ul>
        </div>
      </aside>

    </article>

  <?php endwhile; ?>

  <?php if (function_exists('bones_page_navi')) { ?>
          <?php bones_page_navi(); ?>
      <?php } else { ?>
          <nav class="wp-prev-next">
              <ul class="clearfix">
                <li class="prev-link"><?php next_posts_link(_e('&laquo; Older Entries', "bonestheme")) ?></li>
                <li class="next-link"><?php previous_posts_link(_e('Newer Entries &raquo;', "bonestheme")) ?></li>
              </ul>
          </nav>
      <?php } ?>

  <?php else : ?>

    <article id="post-not-found" class="hentry clearfix">
        <header class="article-header">
          <h1><?php _e("Oops, Post Not Found!", "bonestheme"); ?></h1>
        </header>
        <section class="entry-content">
          <p><?php _e("Uh Oh. Something is missing. Try double checking things.", "bonestheme"); ?></p>
        </section>
        <footer class="article-footer">
          <p><?php _e("This is the error message in the index.php template.", "bonestheme"); ?></p>
        </footer>
    </article>

  <?php endif; ?>

</section>

<?php get_footer(); ?>