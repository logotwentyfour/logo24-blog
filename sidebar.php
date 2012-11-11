<section id="sidebar1" role="complementary" class="m-all t-2 d5">

  <?php if ( is_active_sidebar( 'sidebar1' ) ) : ?>

    <?php dynamic_sidebar( 'sidebar1' ); ?>

  <?php else : ?>

    <!-- This content shows up if no are widgets defined in the backend. -->
    <p>Please activate some Widgets.</p>

  <?php endif; ?>

</section>