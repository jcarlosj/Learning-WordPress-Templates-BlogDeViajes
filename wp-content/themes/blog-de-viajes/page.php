<?php get_header(); ?>
  <section class="container content">
    <div class="row">

      <?php if( is_page( 'contacto' ) ): # Slug de la página ?>
        <div class="col-sm-8 col-sm-offset-2 content-full">
          <?php
            while ( have_posts() ) {
              the_post();
              the_content();
            }
          ?>
        </div>
      <?php else: # La vista se despliega al 100% del ancho ?>
        <?php the_content(); ?>
      <?php endif; ?>

    </div>  <!-- .row -->
  </section>  <!-- .container .content -->
<?php get_footer(); ?>
