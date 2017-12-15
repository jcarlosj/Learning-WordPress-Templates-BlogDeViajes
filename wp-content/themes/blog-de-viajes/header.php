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
            <div class="col-md-4">
              <img class="img-responsive" src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo.png" alt="Blog de Viajes" /> 
            </div>
            <!-- .col-md-4 -->
            <div class="col-md-8">
              Menú
            </div>
            <!-- .col-md-8 -->
          </div>
          <!-- .row -->
        </div>
        <!-- .container -->
      </nav>
      <!-- nav.navigation -->
    </header>
