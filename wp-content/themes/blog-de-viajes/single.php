<?php get_header(); ?>

  <section class="container content">
    <div class="row">
      <?php # Loop Standart de WordPress
        while ( have_posts() ) {
          the_post();
          the_content();
        }
      ?>
    </div>  <!-- .row -->
  </section>  <!-- .container .content -->

<?php get_footer(); ?>
