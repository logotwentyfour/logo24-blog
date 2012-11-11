<?php get_header(); ?>

<section role="main">

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
          
          <?php if ( has_post_thumbnail() ) { ?>
          
            <a href='<?php the_permalink() ?>'
            rel='bookmark' title='<?php the_title(); ?>'>
          
              <?php
            
                # get the thumbnail paths for the normal and retina
                # blog index images
            
                $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), array( 134,134 ), false, '' );
              
                $thumb2x = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), array( 268,268 ), false, '' );
            
              ?>
            
              <figure>
               <div data-picture data-alt="<?php the_title(); ?>">
                
                <div data-src="<?php echo $thumb[0]; ?>"></div>
                
                <?php // above 768px on non-retina screens use... ?>
                <div data-src="<?php echo $thumb[0]; ?>" data-media="(min-width: 48em)"></div>
                
                <?php // above 1024px on retina screens use... ?>
                <div data-src="<?php echo $thumb2x[0]; ?>" data-media="(min--moz-device-pixel-ratio: 1.3) and (min-width: 64em),
                (-o-min-device-pixel-ratio: 2.6/2) and (min-width: 64em),
                (-webkit-min-device-pixel-ratio: 1.3) and (min-width: 64em),
                (min-device-pixel-ratio: 1.3) and (min-width: 64em),
                (min-resolution: 1.3dppx) and (min-width: 64em)"></div>
                <noscript>
                 <img src="<?php echo $thumb[0]; ?>" alt="<?php the_title(); ?>">
                </noscript>
               </div>
              </figure>
            
            </a>
          
          <?php } ?>
          
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
