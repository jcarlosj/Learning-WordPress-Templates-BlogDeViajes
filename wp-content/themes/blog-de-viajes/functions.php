<?php

  /* Agregamos la funcion que nos permitirá hacer uso de una hoja de estilos */
  function blogdeviajes_styles() {
    # Implementa FontAwesome
    wp_enqueue_style( 'fontawesome', get_stylesheet_directory_uri() .'/css/fontawesome-all.min.css' );
    # Implementa Google Fonts
    wp_enqueue_style( 'raleway', 'https://fonts.googleapis.com/css?family=Raleway:900' );
    wp_enqueue_style( 'libre-baskerville', 'https://fonts.googleapis.com/css?family=Libre+Baskerville:700' );
    # Implementa Bootstrap
    wp_enqueue_style(
      'bootstrap-css',
      'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css'
    );
    # Implementación Normalize
    wp_enqueue_style(
      'normalize',
      get_stylesheet_directory_uri() .'/css/normalize.css'
    );
    # Implementación Archivo de Estilos Principal
    wp_enqueue_style( 'style', get_stylesheet_uri() );        # Por defecto tomará el archivo con el nombre 'style.css' como el archivo principal del sitio
  }
  add_action( 'wp_enqueue_scripts', 'blogdeviajes_styles' );  # Hook

  /* Agregamos la funcion que nos permitirá hacer uso de una hoja de estilos */
  function blogdeviajes_scripts() {
    # Implementa librería de jQuery integrada en WordPress
    wp_enqueue_script( 'jquery' );
    # Implementa Bootstrap
    wp_enqueue_script(
      'bootstrap-js',
      'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js',
      array( 'jquery' ),    # Dependencias que se cargarán con anterioridad
      '3.3.7',              # Versión
      true                  # Agrega al header (False), Agrega al Footer (True)
    );
  }
  add_action( 'wp_enqueue_scripts', 'blogdeviajes_scripts' );  # Hook

  /* Agrega el soporte para Menus de navegación del sitio */
  register_nav_menus(
    array(
      'menu_principal'      => __( 'Menú Principal', 'blogdeviajes' ),
      'menu_redes_sociales' => __( 'Menú Redes Sociales', 'blogdeviajes' )
    )
  );

  /* Agrega soporte para imagen destacada */
  add_theme_support( 'post-thumbnails' );

  /* Agrega soporte para tamaños de imagen */
  add_image_size(
    'image-entry',  # Slug de la imagen
    750,            # Ancho
    490,            # Altura
    true            # Crop en true
  );

  /* Agrega soporte para Widgets */
  function blogdeviajes_widgets() {
    /* Widget Footer */
    register_sidebar(
      array(
        'name'          => __( 'Footer Widgets' ),
        'id'            => 'footer_widget',
        'description'   => 'Widgets para el Footer',
        'before_widget' => '<div id="%1$s" class="widget col-sm-6 %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widget-title">',
        'after-title'   => '</h3>'
      )
    );
    /* Widget SideBar */
    register_sidebar(
      array(
        'name'          => __( 'SideBar Widgets' ),
        'id'            => 'sidebar_widgets',
        'description'   => 'Widgets para el SideBar',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widget-title">',
        'after-title'   => '</h3>'
      )
    );
  }
  add_action( 'widgets_init', 'blogdeviajes_widgets' );
?>
