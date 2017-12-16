<?php get_header(); ?>
  <h2 class="text-center">Últimas entradas</h2>
  <section class="container content">
    <div class="row">
      <?php # WP_Query
        $args = array(
          'posts_per_page' => 6  # Número de entradas por post
        );

        $entradas = new WP_Query( $args );

        while( $entradas -> have_posts() ) :
          $entradas -> the_post();
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

      <?php endwhile; wp_reset_postdata(); ?>
    </div>  <!-- .row -->
  </section>  <!-- .container .content -->

  <section class="entry-categories container">
    <h2 class="text-center">Por categoría</h2>
    <?php $categories = get_categories();   # Obtenemos todas las categorías que tengal al menos un post asociado a ellas ?>
    <div class="row">

      <?php foreach ( $categories as $key => $category ) : ?>
        <div class="col-xs-6 col-md-6 col-lg-3 category">
          <i></i>
          <a href="<?php echo get_category_link( $category -> cat_ID ); ?>">
            <?php echo $category -> name; ?>
          </a>
        </div>  <!-- .col-xs-6 .col-md-6 .col-lg-3 .category -->
      <?php endforeach; ?>

    </div>  <!-- .row -->
  </section>  <!-- .entry-categories .container -->
<?php get_footer(); ?>
