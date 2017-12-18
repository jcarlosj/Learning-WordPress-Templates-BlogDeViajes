<?php get_header(); ?>

  <section class="container content">
    <div class="row">
      <?php # WP_Query
        while( have_posts() ) :
          the_post();
      ?>

        <div class="col-xs-6 col-md-4 entry">
          <?php # Imagen destacada de la entrada
            the_post_thumbnail(
              'image-entry',    # Tamaño
              array(
                'class' => 'img-responsive'   # Clase de Bootstrap que se aplicará a la imagen
              )
            );
          ?>
          <div class="content-entry">
            <?php the_title( '<h3>', '</h3>' ); ?>
            <p>Escrito el: <span><?php the_time( get_option( 'date_format' ) ); ?></span></p>
            <p>Por: <span><?php the_author(); ?></p></span>
            <a href="<?php the_permalink(); ?>" class="btn btn-success">Leer más</a>
          </div>
        </div>

      <?php endwhile; ?>
    </div>  <!-- .row -->
  </section>  <!-- .container .content -->

<?php get_footer(); ?>
