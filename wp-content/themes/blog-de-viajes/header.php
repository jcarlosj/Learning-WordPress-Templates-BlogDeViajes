<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <?php wp_head(); # Cabecera del sitio (metas, styles, scritps, etc) ?>
  </head>
  <body>
    <header>
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
              <img class="logo img-responsive" src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo.png" alt="Blog de Viajes" />
            </div>
            <!-- .col-md-4 -->
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
            <!-- .col-md-8 -->
          </div>
          <!-- .row -->
        </div>
        <!-- .container -->
      </nav>
      <!-- nav.navigation -->
    </header>
