<?php

  /* Agregamos la funcion que nos permitirá hacer uso de una hoja de estilos */
  function blogdeviajes_styles() {
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
      'menu_principal' => __( 'Menú Principal', 'blogdeviajes' )
    )
  );

  /* Agrega soporte para imagen destacada */
  add_theme_support( 'post-thumbnails' );
?>
