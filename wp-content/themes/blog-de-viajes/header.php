<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <?php wp_head(); # Cabecera del sitio (metas, styles, scritps, etc) ?>
  </head>
  <body <?php body_class(); ?>>
    <?php
      # Obtenemos la imagen destacada de la página
      $outstanding_image = wp_get_attachment_image_src(
        get_post_thumbnail_id(),    # ID de la imagen (Obtiene el ID de la imagen destacada que se cargue)
        'full'                      # Tamaño ('full' es un tamaño estándar de WordPress)
      );
      $outstanding_image = $outstanding_image[ 0 ];   # Obtenemos la URL de la imagen destacada
    ?>
    <header class="site-header" style="background-image: url( '<?php echo $outstanding_image; ?>' ); ">
      <nav class="navigation">
        <div class="container">
          <div class="row">
            <div class="navbar-header">
              <button class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" type="button" name="button">
                <span class="sr-only">Toogle Navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
                <img class="logo img-responsive" src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo.png" alt="Blog de Viajes" />
              </a>
            </div>
            <!-- .navbar-header -->
            <div class="navbar-right">
              <?php
                wp_nav_menu( # Despliega el Menú
                  array(
                    'theme_location'  => 'menu_principal',
                    'container_id'    => 'navbar',                        # Hace referencia al Botón
                    'container_class' => 'collapse navbar-collapse',      # Agregamos clases de Bootstrap
                    'menu_class'      => 'nav navbar-nav navbar-right'    # Agregamos clases de Bootstrap
                  )
                );
              ?>
            </div>
            <!-- .navbar-right -->
          </div>
          <!-- .row -->
        </div>
        <!-- .container -->
      </nav>
      <!-- nav.navigation -->

      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <div class="title">
              <?php if( is_front_page() ): ?>
                <?php
                  $description = get_bloginfo(
                    'description',    # Nombre del campo
                    'display'         # Filtro
                  );
                ?>
                <h1 class="site-title"><span><?php echo $description; ?></span></h1>
              <?php else: ?>
                <h1 class="site-title"><span><?php the_title(); ?></span></h1>
              <?php endif; ?>

            </div>  <!-- .title -->
          </div>  <!-- .col-md-6 -->
        </div>  <!-- .row -->
      </div>  <!-- .container -->
    </header>
